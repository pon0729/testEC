<?php

/*
 * This file is part of EC-CUBE
 *
 * Copyright(c) EC-CUBE CO.,LTD. All Rights Reserved.
 *
 * http://www.ec-cube.co.jp/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plugin\ReferralCode\Controller\Admin;

use Eccube\Controller\AbstractController;
use Eccube\Repository\Master\PageMaxRepository;
use Knp\Component\Pager\PaginatorInterface;
use Plugin\ReferralCode\Repository\ReferralCodeRepository;
use Plugin\ReferralCode\Repository\ReferralCodeOrderRepository;
use Plugin\ReferralCode\Service\ReferralCodeService;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\StreamedResponse;

/**
 * Class ReferralCodeController.
 */
class ReferralCodeController extends AbstractController
{
    private $download_referral_code_orders_csv_header = [
        '受注番号',
        '小計',
        '割引金額',
        '送料',
        '手数料',
        '税額',
        '合計金額',
        '受注日',
        '更新日',
        '商品ID',
        '商品名',
        '商品コード',
        '金額',
        '数量',
        '税率(%)',
        '紹介コード',
        '紹介者',
        '対応状況',
    ];

    /**
     * @var ReferralCodeRepository
     */
    protected $referralCodeRepository;

    /**
     * @var ReferralCodeOrderRepository
     */
    protected $ReferralCodeOrderRepository;

    /**
     * @var ReferralCodeService
     */
    protected $referralCodeService;

    public function __construct(
        ReferralCodeRepository $referralCodeRepository,
        ReferralCodeOrderRepository $referralCodeOrderRepository,
        ReferralCodeService $referralCodeService
    ) {
        $this->referralCodeRepository = $referralCodeRepository;
        $this->referralCodeOrderRepository = $referralCodeOrderRepository;
        $this->referralCodeService = $referralCodeService;
    }
    
    /**
     * 紹介コード設定画面表示.
     * @Route("/%eccube_admin_route%/plugin/referral_code", name="plugin_referral_code_admin_list")
     * @Template("@ReferralCode/admin/index.twig")
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        // 紹介コード削除時のtokenで使用
        $pagination = $this->referralCodeRepository->findBy(
            [
                'visible' => true,
            ],
            ['id' => 'DESC']
        );

        return [
            'pagination' => $pagination,
            'totalItemCount' => count($pagination),
        ];
    }

    /**
     * 紹介コードの有効/無効化.
     * @Route("/%eccube_admin_route%/plugin/referral_code/{id}/enable", requirements={"id" = "\d+"}, name="plugin_referral_code_admin_enable")
     *
     * @param Request $request
     * @param int $id
     *
     * @return RedirectResponse
     */
    public function enable(Request $request, $id)
    {
        $ReferralCode = $this->referralCodeRepository->findOneBy(['id' => $id, 'visible' => true]);
        if (!$ReferralCode) {
            $this->addError('referral_code.admin.error.notfound', 'admin');
            return $this->redirectToRoute('plugin_referral_code_admin_list');
        }

        $status = $this->referralCodeService->enableReferralCode($id);
        if ($status) {
            $this->addSuccess('referral_code.admin.enable.success', 'admin');
            log_info('Change status a referral_code with ', ['ID' => $id]);
        } else {
            $this->addError('referral_code.admin.error.notfound', 'admin');
        }

        return $this->redirectToRoute('plugin_referral_code_admin_list');
    }

    /**
     * 紹介コードの削除.
     * @Route("/%eccube_admin_route%/plugin/referral_code/{id}/delete", requirements={"id" = "\d+"}, name="plugin_referral_code_admin_delete")
     *
     * @param Request $request
     * @param int $id
     *
     * @return RedirectResponse
     */
    public function delete(Request $request, $id)
    {
        $this->isTokenValid();
        $ReferralCode = $this->referralCodeRepository->findOneBy(['id' => $id, 'visible' => true]);
        if (!$ReferralCode) {
            $this->addError('referral_code.admin.error.notfound', 'admin');
            return $this->redirectToRoute('plugin_referral_code_admin_list');
        }

        $this->entityManager->getConnection()->beginTransaction();
        try {
            $this->referralCodeService->deleteReferralCode($id);
            $this->entityManager->getConnection()->commit();
            $this->addSuccess('referral_code.admin.delete.success', 'admin');
            log_info('Delete a referral_code with ', ['ID' => $id]);
        } catch(Exception $e) {
            log_error(trans('referral_code.admin.log.error.prefix'), [$e->getMessage()]);
            $this->entityManager->getConnection()->rollback();
            $this->addError('referral_code.admin.error.notfound', 'admin');
        }

        return $this->redirectToRoute('plugin_referral_code_admin_list');
    }

    /**
     * CSV雛形ファイルダウンロード
     *
     * @Route("/%eccube_admin_route%/plugin/referral_code/download_referral_code_orders_csv", name="plugin_referral_code_admin_download_referral_code_orders_csv")
     */
    public function downloadReferralCodeOrdersCsv(Request $request)
    {
        $filename = 'referral_code_order_'.(new \DateTime())->format('YmdHis').'.csv';
        $referralCodeOrders = $this->referralCodeOrderRepository->findAllReferralCodeOrders();
        // データ出力
        return $this->outputReferralCodeOrdersCsvResponse($request, $referralCodeOrders, $filename);
    }

    protected function outputReferralCodeOrdersCsvResponse(Request $request, $referralCodeOrders, $filename)
    {
        // タイムアウトを無効にする.
        set_time_limit(0);
        // sql loggerを無効にする.
        $this->entityManager->getConfiguration()->setSQLLogger(null);

        $response = new StreamedResponse();
        $response->setCallback(function () use ($request, $referralCodeOrders) {
            $rows = [];
            $csv_string_data = '';

            $rows[] = $this->download_referral_code_orders_csv_header;
            foreach ($referralCodeOrders as $referralCodeOrder) {
                $columns = [];
                foreach ($referralCodeOrder as $data) {
                    if ($data instanceof \DateTime) {
                        $data = $data->format($this->eccubeConfig['eccube_csv_export_date_format']);
                    }
                    $columns[] = $data;
                }
                $rows[] = $columns;
            }

            $csv_string_data = implode(
                PHP_EOL,
                array_map(
                    function($row) {
                        return implode($this->eccubeConfig['eccube_csv_export_separator'], $row);
                    },
                    $rows
                )
            );
            #$csv_string_data = mb_convert_encoding($csv_string_data, $this->eccubeConfig['eccube_csv_export_encoding'], 'UTF-8');
            $csv_string_data = mb_convert_encoding($csv_string_data, 'UTF-8', 'UTF-8'); // SJIS-winだとwindowsのexcelで開いた時に文字化けしちゃうのでUTF-8に変更

            $fp = fopen('php://output', 'w');
            fwrite($fp, pack('C*',0xEF,0xBB,0xBF) . $csv_string_data);
            fclose($fp);
        });

        $response->headers->set('Content-Type', 'application/octet-stream');
        $response->headers->set('Content-Disposition', 'attachment; filename='.$filename);
        $response->send();

        return $response;
    }
}
