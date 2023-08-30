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

namespace Plugin\YamatoSubscription\Controller;

use Eccube\Common\EccubeConfig;
use Eccube\Controller\AbstractController;
use Knp\Component\Pager\Paginator;
use Plugin\YamatoSubscription\Repository\YamatoSubsRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;

class MypageController extends AbstractController
{
    /**
     * @var EccubeConfig
     */
    protected $eccubeConfig;

    /**
     * @var YamatoSubsRepository
     */
    protected $yamatoSubsRepository;

    public function __construct(
        EccubeConfig $eccubeConfig,
        YamatoSubsRepository $yamatoSubsRepository
    ) {
        $this->eccubeConfig = $eccubeConfig;
        $this->yamatoSubsRepository = $yamatoSubsRepository;
    }

    /**
     * （マイページ）定期購入履歴画面
     *
     * @Route("plugin/yamatosubscription/mypage", name="plugin_yamato_subscription_mypage", methods={"GET"})
     * @Template("@YamatoSubscription/default/Mypage/index.twig")
     */
    public function index(Request $request, Paginator $paginator) {
        if (!$this->isGranted('ROLE_USER')) {
            return $this->redirectToRoute('mypage_login');
        }

        $pageno = $request->get('pageno', 1);
        $yamatoSubsOrders = $this->yamatoSubsRepository->searchUsersYamatoSubsList($this->getUser());

        for($i = 0; $i < count($yamatoSubsOrders); $i++) {
            // 元々、最低購入回数を3回としていた。
            // だが他の施策との兼ね合いでいつでもキャンセル可能となった。
            // なので全てキャンセル可能にしている。
            $yamatoSubsOrders[$i]["cancellable"] = true;
        }

        // Pagination from result
        $pagination = $paginator->paginate(
            $yamatoSubsOrders,
            $pageno,
            $this->eccubeConfig['eccube_search_pmax']
        );

        return [
            'pagination' => $pagination,
        ];
    }

    /**
     * （マイページ）定期購入解約
     *
     * @Route("plugin/yamatosubscription/mypage/{id}/cancel", requirements={"id" = "\d+"}, name="plugin_yamato_subscription_mypage_cancel", methods={"POST"})
     */
    public function cancel(Request $request, int $id) {
        if (!$this->isGranted('ROLE_USER')) {
            return $this->redirectToRoute('mypage_login');
        }

        $YamatoSubs = $this->validateCancellable($request, $id);

        $this->entityManager->getConnection()->beginTransaction();
        try {
            // cancel subs order
            $now = new \DateTime();
            $YamatoSubs->setCancelledDate($now);
            $YamatoSubs->setUpdateDate($now);
            $this->entityManager->persist($YamatoSubs);
            $this->entityManager->flush($YamatoSubs);

            $this->entityManager->getConnection()->commit();
            log_info('定期購入 解約処理完了');
            $this->addSuccess('yamatosubscription.mypage.cancelled');
        } catch (\Exception $e) {
            log_error(trans('yamatosubscription.log.error.prefix'), [$e->getMessage()]);
            $this->entityManager->getConnection()->rollback();
            $this->addError('yamatosubscription.mypage.cancel.system.error');
        }

        return $this->redirectToRoute('plugin_yamato_subscription_mypage', ['pageno' => 1]);
    }



    /**
     * validate and throw exception if invalid cancellation
     *
     * @param Application $app
     * @param Request $request
     * @param integer $subs_id
     * @return bool done or fail
     */
    private function validateCancellable(Request $request, int $subs_id) {
        if ($request->getMethod() !== 'POST') {
            throw new NotFoundHttpException(trans('yamatosubscription.error.badrequest'));
        }
        if (empty($subs_id)) {
            throw new NotFoundHttpException(trans('yamatosubscription.error.badrequest'));
        }
        $YamatoSubs = $this->yamatoSubsRepository->findOneBy(['visible' => true, 'id' => $subs_id, 'cancelled_date' => null]);
        if (empty($YamatoSubs)) {
            throw new NotFoundHttpException(trans('yamatosubscription.error.badrequest'));
        }
        $Customer = $YamatoSubs->getYamatoSubsHistories()->last()->getOrder()->getCustomer();
        if ( $Customer->getId() !== $this->getUser()->getId() ) {
            throw new NotFoundHttpException(trans('yamatosubscription.error.badrequest'));
        }

        return $YamatoSubs;
    }
}
