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

use Eccube\Common\Constant;
use Eccube\Controller\AbstractController;
use Eccube\Form\Type\Admin\SearchProductType;
use Plugin\ReferralCode\Entity\ReferralCode;
use Plugin\ReferralCode\Repository\ReferralCodeRepository;
use Plugin\ReferralCode\Repository\ReferralCodeDetailRepository;
use Plugin\ReferralCode\Service\ReferralCodeService;
use Plugin\ReferralCode\Form\Type\Admin\ReferralCodeSearchCategoryType;
use Plugin\ReferralCode\Form\Type\Admin\ReferralCodeType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\StreamedResponse;

/**
 * Class EditController.
 */
class EditController extends AbstractController
{
    /**
     * @var ReferralCodeRepository
     */
    protected $referralCodeRepository;

    /**
     * @var ReferralCodeDetailRepository
     */
    protected $referralCodeDetailRepository;

    /**
     * @var ReferralCodeService
     */
    protected $referralCodeService;

    public function __construct(
        ReferralCodeRepository $referralCodeRepository,
        ReferralCodeDetailRepository $referralCodeDetailRepository,
        ReferralCodeService $referralCodeService
    ) {
        $this->referralCodeRepository = $referralCodeRepository;
        $this->referralCodeDetailRepository = $referralCodeDetailRepository;
        $this->referralCodeService = $referralCodeService;
    }

    /**
     * 紹介コードの新規作成.
     * @Route("/%eccube_admin_route%/plugin/referral_code/new", name="plugin_referral_code_admin_new")
     * @Route("/%eccube_admin_route%/plugin/referral_code/{id}/edit", requirements={"id" = "\d+"}, name="plugin_referral_code_admin_edit")
     * @Template("@ReferralCode/admin/edit.twig")
     *
     * @param Request $request
     * @param int $id
     *
     * @return Response
     */
    public function index(Request $request, $id = null)
    {
        if (!$id) {
            $ReferralCode = new ReferralCode();
            $ReferralCode->setReferralCode($this->referralCodeService->generateReferralCode()); // 紹介コードの新規発行
            $ReferralCode->setReferralCodeMember(Constant::DISABLED);
        } else {
            $ReferralCode = $this->referralCodeRepository->findOneBy(['id' => $id, 'visible' => true]);
            if (!$ReferralCode) {
                $this->addError('referral_code.admin.error.notfound', 'admin');
                return $this->redirectToRoute('plugin_referral_code_admin_list');
            }
            // ReferralCodeDetailsはupdateではなく delete->insert方式で更新するため、idをnullに設定する
            $ReferralCode->setReferralCodeDetails(
                $ReferralCode->getReferralCodeDetails()->map(function($rcd) {
                    return clone $rcd;
                })
            );
        }
        $form = $this->createForm(ReferralCodeType::class, $ReferralCode);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $ReferralCode = $form->getData();
            if (!$id) {
                $ReferralCode->setEnableFlag(true);
                $ReferralCode->setVisible(true);
            }

            $oldReleaseNumber = intval($request->get('referral_code_release_old'));
            if (is_null($ReferralCode->getReferralCodeUseTime())) {
                $ReferralCode->setReferralCodeUseTime($ReferralCode->getReferralCodeRelease());
            } else {
                if ($ReferralCode->getReferralCodeRelease() !== $oldReleaseNumber) {
                    $ReferralCode->setReferralCodeUseTime($ReferralCode->getReferralCodeRelease());
                }
            }

            $this->entityManager->getConnection()->beginTransaction();
            try {
                $this->referralCodeService->updateReferralCode($ReferralCode, $form->get('ReferralCodeDetails')->getData());
                $this->entityManager->getConnection()->commit();
                $this->addSuccess('referral_code.admin.save.success', 'admin');
                return $this->redirectToRoute('plugin_referral_code_admin_list');
            } catch (Exception $e) {
                log_error(trans('referral_code.admin.log.error.prefix'), [$e->getMessage()]);
                $this->entityManager->getConnection()->rollback();
                $this->addError('referral_code.admin.save.failed', 'admin');
            }
        }

        return $this->combineSearchFormParameters([
            'form' => $form->createView(),
            'id' => $id,
        ]);
    }

    /**
     * 商品検索フォームとカテゴリ検索フォームをパラメータに追加して返す.
     *
     * @param array $parameters
     *
     * @return array result parameters
     */
    protected function combineSearchFormParameters($parameters = [])
    {
        // SearchProductTypeは本体側にあるがSearchCategoryTypeは本体側にない。
        // なので自作したReferralCodeSearchCategoryTypeを利用。
        $searchProductModalForm = $this->formFactory->createBuilder(SearchProductType::class)->getForm();
        $searchCategoryModalForm = $this->formFactory->createBuilder(ReferralCodeSearchCategoryType::class)->getForm();
        $viewParameters = [
            'searchProductModalForm' => $searchProductModalForm->createView(),
            'searchCategoryModalForm' => $searchCategoryModalForm->createView(),
        ];
        $viewParameters += $parameters;

        return $viewParameters;
    }
}
