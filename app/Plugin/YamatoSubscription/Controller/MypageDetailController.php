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
use Plugin\YamatoSubscription\Form\Type\MypageDetailType;
use Plugin\YamatoSubscription\Helper\YamatoAPIHelper;
use Plugin\YamatoSubscription\Repository\YamatoSubsConfigRepository;
use Plugin\YamatoSubscription\Repository\YamatoSubsRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;

class MypageDetailController extends AbstractController
{
    /**
     * @var EccubeConfig
     */
    protected $eccubeConfig;

    /**
     * @var YamatoSubsRepository
     */
    protected $yamatoSubsRepository;

    /**
     * @var YamatoSubsConfigRepository
     */
    protected $yamatoSubsConfigRepository;

    public function __construct(
        EccubeConfig $eccubeConfig,
        YamatoSubsRepository $yamatoSubsRepository,
        YamatoSubsConfigRepository $yamatoSubsConfigRepository
    ) {
        $this->eccubeConfig = $eccubeConfig;
        $this->yamatoSubsRepository = $yamatoSubsRepository;
        $this->yamatoSubsConfigRepository = $yamatoSubsConfigRepository;
    }

    /**
     * （マイページ）定期購入履歴詳細画面
     *
     * @Route("plugin/yamatosubscription/mypage/{id}", requirements={"id" = "\d+"}, name="plugin_yamato_subscription_mypage_detail", methods={"GET", "POST"})
     * @Template("@YamatoSubscription/default/Mypage/detail.twig")
     */
    public function index(Request $request, int $id) {
        if (!$this->isGranted('ROLE_USER')) {
            return $this->redirectToRoute('mypage_login');
        }

        $YamatoSubs = $this->yamatoSubsRepository->findOneBy(['id' => $id, 'visible' => true, 'cancelled_date' => null]);
        if (empty($YamatoSubs)) {
            throw new NotFoundHttpException(trans('yamatosubscription.error.badrequest'));
        }
        $Order = $YamatoSubs->getYamatoSubsHistories()->last()->getOrder();
        $Customer = $Order->getCustomer();
        if ( $Customer->getId() !== $this->getUser()->getId() ) {
            throw new NotFoundHttpException(trans('yamatosubscription.error.badrequest'));
        }

        $form = $this->createForm(MypageDetailType::class, $YamatoSubs);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $postedYamatoSubs = $form->getData();
            $this->yamatoSubsRepository->updateSubsMonthPeriod($id, $postedYamatoSubs->getSubsMonthPeriod());
            $this->addSuccess('yamatosubscription.mypage.detail.success');
            return $this->redirectToRoute('plugin_yamato_subscription_mypage', ['pageno' => 1]);
        }

        return [
            'form' => $form->createView(),
            'YamatoSubs' => $YamatoSubs,
            'Order' => $Order,
        ];
    }

    /**
     * （マイページ）定期購入履歴詳細 クレカ変更画面
     *
     * @Route("plugin/yamatosubscription/mypage/{id}/change_credit_card", requirements={"id" = "\d+"}, name="plugin_yamato_subscription_mypage_change_credit_card", methods={"GET", "POST"})
     * @Template("@YamatoSubscription/default/Mypage/change_credit_card.twig")
     */
    public function change_credit_card(Request $request, int $id) {
        if (!$this->isGranted('ROLE_USER')) {
            return $this->redirectToRoute('mypage_login');
        }

        $YamatoSubs = $this->yamatoSubsRepository->findOneBy(['id' => $id, 'visible' => true, 'cancelled_date' => null]);
        if (empty($YamatoSubs)) {
            throw new NotFoundHttpException(trans('yamatosubscription.error.badrequest'));
        }
        $Order = $YamatoSubs->getYamatoSubsHistories()->last()->getOrder();
        $Customer = $Order->getCustomer();
        if ( $Customer->getId() !== $this->getUser()->getId() ) {
            throw new NotFoundHttpException(trans('yamatosubscription.error.badrequest'));
        }

        // ヤマト側からクレカ情報を取得する
        // 定期購入の仕様上、保有するクレジットカード情報の削除はできないので
        // クレジットカード0件のケースは無視している。
        $creditCardList = $this->fetchCreditCardInfo($YamatoSubs);

        if ($request->isMethod('post')) {
            $credit_card_key = $this->getSelectedCreditCardKey($creditCardList, $request->request->get('card_key'));
            if (empty($credit_card_key)) {
                throw new NotFoundHttpException(trans('yamatosubscription.error.badrequest'));
            }
            $this->yamatoSubsRepository->updateCreditCardKey($id, $credit_card_key);
            $this->addSuccess('yamatosubscription.mypage.change_credit_card.success');
            return $this->redirectToRoute('plugin_yamato_subscription_mypage', ['pageno' => 1]);
        }

        return [
            'YamatoSubs' => $YamatoSubs,
            'creditCardList' => $creditCardList,
        ];
    }



    private function fetchCreditCardInfo($YamatoSubs) {
        $yamatoAPIHelper = new YamatoAPIHelper($this->eccubeConfig, $this->yamatoSubsConfigRepository);
        $credit_info_api_response = $yamatoAPIHelper->callYamatoCreditCardInfoInquiryAPI(
            $member_id = $this->getUser()->getId(),
            $authentication_key = substr(((string) $this->getUser()->getId()), 0, 8)
        );
        if ($credit_info_api_response['returnCode'] !== '0') {
            throw new \Exception("Yamato API Error... Error code: {$credit_info_api_response['errorCode']}");
        }

        foreach ($credit_info_api_response['cardData'] as $i => $cardData) {
            $credit_info_api_response['cardData'][$i]['data'] = 'カード番号：' . $cardData['maskingCardNo'];
            $credit_info_api_response['cardData'][$i]['data'] .= '　有効期限：' . substr($cardData['cardExp'], 2) . '年';
            $credit_info_api_response['cardData'][$i]['data'] .= substr($cardData['cardExp'], 0, 2) . '月';
            $credit_info_api_response['cardData'][$i]['cardKey'] = $cardData['cardKey'];
            if (substr($credit_info_api_response['cardData'][$i]['maskingCardNo'], -4) === $YamatoSubs->getCreditCardKey()) {
                $credit_info_api_response['defaultCardKey'] = $credit_info_api_response['cardData'][$i]['cardKey'];
            }
        }

        return $credit_info_api_response;
    }

    private function getSelectedCreditCardKey($creditCardList, $card_key_number) {
        foreach($creditCardList['cardData'] as $cardData) {
            if (strval($cardData['cardKey']) === strval($card_key_number)) {
                return substr($cardData['maskingCardNo'], -4);
            }
        }
        return null;
    }
}
