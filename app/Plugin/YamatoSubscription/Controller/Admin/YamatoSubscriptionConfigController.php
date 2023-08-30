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
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Plugin\YamatoSubscription\Form\Type\Admin\YamatoSubsConfigType;
use Plugin\YamatoSubscription\Repository\YamatoSubsConfigRepository;

class YamatoSubscriptionConfigController extends AbstractController
{
    /**
     * YamatoSubscription用設定画面
     * @Route("/%eccube_admin_route%/plugin/yamatosubscription/config", name="yamato_subscription_admin_config", methods={"GET", "POST"})
     * @Template("@YamatoSubscription/admin/Config/index.twig")
     *
     * @param Request $request
     * @param YamatoSubsConfigRepository $yamatoSubsConfigRepository
     * @return array
     */
    public function index(
        Request $request,
        YamatoSubsConfigRepository $yamatoSubsConfigRepository
    ) {
        $form = $this->createForm(YamatoSubsConfigType::class, null);

        if ($request->getMethod() === 'POST') {
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $postedData = $form->getData();
                $yamatoSubsConfigRepository->saveConfig($postedData['ignoring_sale_type_ids']);

                $this->addSuccess('yamatosubscription.admin.save.success', 'admin');
            } else {
                $this->addError('yamatosubscription.admin.save.failed', 'admin');
            }
        } else {
            $form->get('ignoring_sale_type_ids')->setData($yamatoSubsConfigRepository->getIgnoringSaleTypeIds());
        }

        return [
            'form' => $form->createView(),
        ];
    }
}
