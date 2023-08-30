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
use Eccube\Entity\Delivery;
use Eccube\Service\TaxRuleService;
use Plugin\ReferralCode\Entity\ReferralCodeDeliveryConfig;
use Plugin\ReferralCode\Form\Type\Admin\ReferralCodeConfigType;
use Plugin\ReferralCode\Repository\ReferralCodeConfigRepository;
use Plugin\ReferralCode\Repository\ReferralCodeDeliveryConfigRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\StreamedResponse;

/**
 * Class ReferralCodeConfigController.
 */
class ReferralCodeConfigController extends AbstractController
{
    /**
     * 紹介コード設定画面表示.
     * @Route("/%eccube_admin_route%/plugin/referral_code/config", name="referral_code_admin_config")
     * @Template("@ReferralCode/admin/config.twig")
     *
     * @param Request $request
     * @param TaxRuleService $taxRuleService
     * @param ReferralCodeConfigRepository $ReferralCodeConfigRepository
     * @param ReferralCodeDeliveryConfigRepository $ReferralCodeDeliveryConfigRepository
     *
     * @return array
     */
    public function index(
        Request $request,
        TaxRuleService $taxRuleService,
        ReferralCodeConfigRepository $ReferralCodeConfigRepository, 
        ReferralCodeDeliveryConfigRepository $ReferralCodeDeliveryConfigRepository
    ) {
        $ReferralCodeConfig = $ReferralCodeConfigRepository->findOneBy([]);
        $form = $this->createForm(ReferralCodeConfigType::class, $ReferralCodeConfig);

        if (is_null($ReferralCodeConfig)) {
            $form->get('delivery_free_amount')->setData(
                $taxRuleService->getPriceIncTax($this->eccubeConfg['TAX_EXCLUDED_DELIVERY_FREE_AMOUNT_DEFAULT'])
            );
        } else {
            $form->get('delivery_free_amount')->setData(
                $ReferralCodeConfigRepository->getDeliveryFreeAmount(null)
            );
        }
        $form->get('subscription_discount_rate')->setData($ReferralCodeConfigRepository->getSubscriptionDiscountRate( $this->eccubeConfig['SUBSCRIPTION_DISCOUNT_RATE_DEFAULT'] ));

        $ReferralCodeDeliveryConfigs = $ReferralCodeDeliveryConfigRepository->getReferralCodeDeliveryConfigs();
        foreach($ReferralCodeDeliveryConfigs as $rcdc) {
            if (!$rcdc->getDelivery()->isVisible()) {
                $this->entityManager->remove($rcdc);
            }
        }
        $this->entityManager->flush();

        return [
            'form' => $form->createView(),
            'ReferralCodeDeliveryConfigs' => $ReferralCodeDeliveryConfigs
        ];
    }

    /**
     * 紹介コード設定の更新.
     * @Route("/%eccube_admin_route%/plugin/referral_code/config/update", name="referral_code_admin_config_update")
     * @Template("@ReferralCode/admin/config.twig")
     *
     * @param Request $request
     * @param ReferralCodeConfigRepository $ReferralCodeConfigRepository
     * @param ReferralCodeDeliveryConfigRepository $ReferralCodeDeliveryConfigRepository
     *
     * @return array|Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function update(
        Request $request,
        ReferralCodeConfigRepository $ReferralCodeConfigRepository, 
        ReferralCodeDeliveryConfigRepository $ReferralCodeDeliveryConfigRepository
    ) {
        if ($request->getMethod() !== 'POST') {
            throw new NotFoundHttpException();
        }

        $form = $this->createForm(ReferralCodeConfigType::class, $ReferralCodeConfigRepository->findOneBy([]));
        $form->handleRequest($request);
        $postedData = $request->request->all();

        if ($form->isSubmitted() && $form->isValid()) {
            $formPostedData = $form->getData();

            $this->entityManager->getConnection()->beginTransaction();
            try {
                $ReferralCodeConfigRepository->saveConfig($formPostedData['delivery_free_amount'], $formPostedData['subscription_discount_rate']);
                foreach ($postedData['ReferralCodeDeliveryConfigs'] as $ReferralCodeDeliveryConfig) {
                    $ReferralCodeDeliveryConfigRepository->saveConfig($ReferralCodeDeliveryConfig);
                }

                $this->entityManager->getConnection()->commit();
                $this->addSuccess('referral_code.admin.save.success', 'admin');
                return $this->redirectToRoute('referral_code_admin_config');
            } catch (Exception $e) {
                log_error(trans('referral_code.admin.log.error.prefix'), [$e->getMessage()]);
                $this->entityManager->getConnection()->rollback();
                $this->addError('referral_code.admin.save.failed', 'admin');
            }
        } else {
            $this->addError('referral_code.admin.save.failed', 'admin');
        }

        $ReferralCodeDeliveryConfigs = $this->convertReferralCodeDeliveryConfigsDatumToObjects($postedData['ReferralCodeDeliveryConfigs']);

        return [
            'form' => $form->createView(),
            'ReferralCodeDeliveryConfigs' => $ReferralCodeDeliveryConfigs,
        ];
    }

    /**
     * @param array $ReferralCodeDeliveryConfigs
     *
     * @return array
     */
    private function convertReferralCodeDeliveryConfigsDatumToObjects(array $ReferralCodeDeliveryConfigs) {
        $DeliveryRepository = $this->entityManager->getRepository(Delivery::class);
        return array_map(
            function($rcdc) use ($DeliveryRepository) {
                $ReferralCodeDeliveryConfig = new ReferralCodeDeliveryConfig();
                $ReferralCodeDeliveryConfig->setId($rcdc['id']);
                $ReferralCodeDeliveryConfig->setNormalOrderFlg($rcdc['normal_order_flg'] ?? false);
                $ReferralCodeDeliveryConfig->setReferralCodeOrderFlg($rcdc['referral_code_order_flg'] ?? false);
                $ReferralCodeDeliveryConfig->setDelivery($DeliveryRepository->find($rcdc['delivery_id']));
                return $ReferralCodeDeliveryConfig;
            },
            $ReferralCodeDeliveryConfigs
        );
    }
}
