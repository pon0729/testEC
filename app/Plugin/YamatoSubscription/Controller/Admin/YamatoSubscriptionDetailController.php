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

namespace Plugin\YamatoSubscription\Controller\Admin;

use Eccube\Controller\AbstractController;
use Plugin\YamatoSubscription\Repository\YamatoSubsRepository;
use Plugin\YamatoSubscription\Repository\YamatoSubsHistoryRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;

class YamatoSubscriptionDetailController extends AbstractController
{
    /**
     * @var YamatoSubsRepository
     */
    protected $yamatoSubsRepository;

    /**
     * @var YamatoSubsHistoryRepository
     */
    protected $yamatoSubsHistoryRepository;

    public function __construct(
        YamatoSubsRepository $yamatoSubsRepository,
        YamatoSubsHistoryRepository $yamatoSubsHistoryRepository
    ) {
        $this->yamatoSubsRepository = $yamatoSubsRepository;
        $this->yamatoSubsHistoryRepository = $yamatoSubsHistoryRepository;
    }



    /**
     * 定期配送 詳細画面
     * @Route("/%eccube_admin_route%/plugin/yamatosubscription/detail/{id}", requirements={"id" = "\d+"}, name="plugin_yamato_subscription_admin_detail", methods={"GET"})
     * @Template("@YamatoSubscription/admin/Detail/index.twig")
     *
     * @param Request $request
     * @param int $id
     *
     * @return array
     */
    public function index(Request $request, int $id) {
        $YamatoSubs = $this->yamatoSubsRepository->findOneBy(['visible' => true, 'id' => $id]);
        if (empty($YamatoSubs)) {
            throw new NotFoundHttpException(trans('yamatosubscription.error.badrequest'));
        }

        $last_subs_order_id = $this->yamatoSubsHistoryRepository
            ->findOneBy(['visible' => true, 'id' => $YamatoSubs->getLastSubsHistoryId()])
            ->getOrder()
            ->getId();

        return [
            'YamatoSubs' => $YamatoSubs,
            'last_subs_order_id' => $last_subs_order_id
        ];
    }

    /**
     * 定期購入解約
     * @Route("/%eccube_admin_route%/plugin/yamatosubscription/cancel/{id}", requirements={"id" = "\d+"}, name="plugin_yamato_subscription_admin_detail_cancel", methods={"PUT"})
     *
     * @param Request $request
     * @param int $id
     *
     * @return Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function cancel(Request $request, int $id) {
        $YamatoSubs = $this->yamatoSubsRepository->findOneBy(['visible' => true, 'id' => $id, 'cancelled_date' => null]);
        if (empty($YamatoSubs)) {
            throw new NotFoundHttpException(trans('yamatosubscription.error.badrequest'));
        }

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
            $this->addSuccess('yamatosubscription.admin.cancelled', 'admin');
        } catch (\Exception $e) {
            log_error(trans('yamatosubscription.log.error.prefix'), [$e->getMessage()]);
            $this->entityManager->getConnection()->rollback();
            $this->addError('yamatosubscription.admin.cancel.system.error', 'admin');
        }

        return $this->redirectToRoute('plugin_yamato_subscription_admin_detail', ['id' => $id]);
    }
}
