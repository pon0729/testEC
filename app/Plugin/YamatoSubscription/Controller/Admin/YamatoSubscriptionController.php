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

use Doctrine\Common\Collections\ArrayCollection;
use Eccube\Common\Constant;
use Eccube\Controller\AbstractController;
use Eccube\Repository\Master\PageMaxRepository;
use Eccube\Service\PurchaseFlow\PurchaseContext;
use Eccube\Service\PurchaseFlow\PurchaseException;
use Eccube\Service\PurchaseFlow\PurchaseFlow;
use Knp\Component\Pager\PaginatorInterface;
use Plugin\YamatoSubscription\Entity\YamatoSubsHistory;
use Plugin\YamatoSubscription\Helper\YamatoAPIHelper;
use Plugin\YamatoSubscription\Repository\YamatoSubsRepository;
use Plugin\YamatoSubscription\Repository\YamatoSubsHistoryRepository;
use Plugin\YamatoSubscription\Repository\YamatoSubsConfigRepository;
use Plugin\YamatoSubscription\Repository\YamatoSubsUsersOrderItemRepository;
use Plugin\YamatoSubscription\Repository\YamatoSubsUsersOrderRepository;
use Plugin\YamatoSubscription\Repository\YamatoSubsUsersReferralCodeOrderRepository;
use Plugin\YamatoSubscription\Repository\YamatoSubsUsersShippingRepository;
use Plugin\YamatoSubscription\Service\SubscriptionMailService;
use Plugin\YamatoSubscription\Util\DateTimeUtil;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Symfony\Component\Routing\Annotation\Route;
use Plugin\YamatoSubscription\Form\Type\Admin\SearchYamatoSubsOrderType;
use Eccube\Event\EccubeEvents;
use Eccube\Event\EventArgs;
use Eccube\Util\FormUtil;
use Plugin\YamatoSubscription\Repository\YamatoSubsDiscountCategoryRepository;
use Plugin\YamatoSubscription\Repository\YamatoSubsDiscountProductRepository;
use Symfony\Component\Form\FormFactoryInterface;

class YamatoSubscriptionController extends AbstractController
{
    /**
     * @var PurchaseFlow
     */
    protected $purchaseFlow;

    /**
     * @var SubscriptionMailService
     */
    protected $subscriptionMailService;

    /**
     * @var \Plugin\YamatoPayment4\Service\Client\CreditClientService
     */
    protected $yamatoPayment4CreditClientService;

    /**
     * @var YamatoSubsRepository
     */
    protected $yamatoSubsRepository;

    /**
     * @var YamatoSubsHistoryRepository
     */
    protected $yamatoSubsHistoryRepository;

    /**
     * @var YamatoSubsConfigRepository
     */
    protected $yamatoSubsConfigRepository;

    /**
     * @var YamatoSubsUsersOrderRepository
     */
    protected $yamatoSubsUsersOrderRepository;

    /**
     * @var YamatoSubsUsersOrderItemRepository
     */
    protected $yamatoSubsUsersOrderItemRepository;

    /**
     * @var YamatoSubsUsersShippingRepository
     */
    protected $yamatoSubsUsersShippingRepository;

    /**
     * @var YamatoSubsUsersReferralCodeOrderRepository
     */
    protected $yamatoSubsUsersReferralCodeOrderRepository;

    /**
     * @var PageMaxRepository
     */
    protected $pageMaxRepository;

    /**
     * @var YamatoSubsDiscountCategoryRepository
     */
    protected $yamatoSubsDiscountCategoryRepository;
        
    /**
     * @var YamatoSubsDiscountProductRepository
     */
    protected $yamatoSubsDiscountProductRepository;

    /**
     * @var FormFactoryInterface
     */
    protected $formFactory;

    public function __construct(
        PurchaseFlow $orderPurchaseFlow,
        SubscriptionMailService $subscriptionMailService,
        \Plugin\YamatoPayment4\Service\Client\CreditClientService $yamatoPayment4CreditClientService,
        YamatoSubsRepository $yamatoSubsRepository,
        YamatoSubsHistoryRepository $yamatoSubsHistoryRepository,
        YamatoSubsConfigRepository $yamatoSubsConfigRepository,
        YamatoSubsUsersOrderRepository $yamatoSubsUsersOrderRepository,
        YamatoSubsUsersOrderItemRepository $yamatoSubsUsersOrderItemRepository,
        YamatoSubsUsersShippingRepository $yamatoSubsUsersShippingRepository,
        YamatoSubsUsersReferralCodeOrderRepository $yamatoSubsUsersReferralCodeOrderRepository,
        PageMaxRepository $pageMaxRepository,
        YamatoSubsDiscountCategoryRepository $yamatoSubsDiscountCategoryRepository,
        YamatoSubsDiscountProductRepository $yamatoSubsDiscountProductRepository,
        FormFactoryInterface $formFactory
    ) {
        $this->purchaseFlow = $orderPurchaseFlow;
        $this->subscriptionMailService = $subscriptionMailService;
        $this->yamatoPayment4CreditClientService = $yamatoPayment4CreditClientService;
        $this->yamatoSubsRepository = $yamatoSubsRepository;
        $this->yamatoSubsHistoryRepository = $yamatoSubsHistoryRepository;
        $this->yamatoSubsConfigRepository = $yamatoSubsConfigRepository;
        $this->yamatoSubsUsersOrderRepository = $yamatoSubsUsersOrderRepository;
        $this->yamatoSubsUsersOrderItemRepository = $yamatoSubsUsersOrderItemRepository;
        $this->yamatoSubsUsersShippingRepository = $yamatoSubsUsersShippingRepository;
        $this->yamatoSubsUsersReferralCodeOrderRepository = $yamatoSubsUsersReferralCodeOrderRepository;
        $this->pageMaxRepository = $pageMaxRepository;
        $this->yamatoSubsDiscountCategoryRepository = $yamatoSubsDiscountCategoryRepository;
        $this->yamatoSubsDiscountProductRepository = $yamatoSubsDiscountProductRepository;
        $this->formFactory = $formFactory;
    }



    /**
     * 定期配送 一覧画面
     * @Route("/%eccube_admin_route%/plugin/yamatosubscription", name="plugin_yamato_subscription_admin_list", methods={"GET"})
     * @Route("/%eccube_admin_route%/plugin/yamatosubscription/page/{page_no}", requirements={"page_no" = "\d+"}, name="plugin_yamato_subscription_admin_list_page")
     * @Template("@YamatoSubscription/admin/index.twig")
     *
     * @param Request $request
     * @param int $page_no
     * @param Paginator $paginator
     *
     * @return array
     */
    public function index(Request $request, $page_no = null, PaginatorInterface $paginator) {
        //検索フォーム
        $builder = $this->formFactory->createBuilder(SearchYamatoSubsOrderType::class);
        $event = new EventArgs(
            [
                'builder' => $builder,
            ],
            $request
        );
        $searchForm = $builder->getForm();
        $session = $request->getSession();
        if ( is_null($page_no) && !empty($session->get('yamatosubscription.admin.list.search.page_no')) ) {
            $page_no = $session->get('yamatosubscription.admin.list.search.page_no');
        } else {
            $page_no = is_null($page_no) ? 1 : intval($page_no);
            $session->set('yamatosubscription.admin.list.search.page_no', $page_no);
        }

        $page_count_param = (int) $request->get('page_count');
        $pageMaxis = $this->pageMaxRepository->findAll();
        /**
         * ページの表示件数は, 以下の順に優先される.
         * - リクエストパラメータ
         * - セッション
         * - デフォルト値
         * また, セッションに保存する際は mtb_page_maxと照合し, 一致した場合のみ保存する.
         **/
        $page_count = $session->get('yamatosubscription.admin.list.search.page_count', $this->eccubeConfig->get('eccube_default_page_count'));
        if ($page_count_param) {
            foreach ($pageMaxis as $pageMax) {
                if ($page_count_param == $pageMax->getName()) {
                    $page_count = $pageMax->getName();
                    $this->session->set('yamatosubscription.admin.list.search.page_count', $page_count);
                    break;
                }
            }
        }

        //検索パラメタ関連
        if ('POST' === $request->getMethod()) {
            $searchForm->handleRequest($request);
            if ($searchForm->isValid()) {
                /**
                 * 検索が実行された場合は, セッションに検索条件を保存する.
                 * ページ番号は最初のページ番号に初期化する.
                 */
                $page_no = 1;
                $searchData = $searchForm->getData();
                // 検索条件, ページ番号をセッションに保持.
                $this->session->set('eccube.admin.yamatosubs_order.search', FormUtil::getViewData($searchForm));
                $this->session->set('eccube.admin.yamatosubs_order.search.page_no', $page_no);
            } else {
                // 検索エラーの際は, 詳細検索枠を開いてエラー表示する.
                return [
                    'searchForm' => $searchForm->createView(),
                    'pagination' => [],
                    'pageMaxis' => $pageMaxis,
                    'page_no' => $page_no,
                    'page_count' => $page_count,
                    'has_errors' => true,
                ];
            }
        } else {
            if (null !== $page_no || $request->get('resume')) {
                //ページ送りの場合または、他画面から戻ってきた場合は, セッションから検索条件を復旧する.
                if ($page_no) {
                    // ページ送りで遷移した場合.
                    $this->session->set('eccube.admin.yamatosubs_order.search.page_no', (int) $page_no);
                } else {
                    // 他画面から遷移した場合.
                    $page_no = $this->session->get('eccube.admin.yamatosubs_order.search.page_no', 1);
                }
                $viewData = $this->session->get('eccube.admin.yamatosubs_order.search', []);
                $searchData = FormUtil::submitAndGetData($searchForm, $viewData);
            } else {
                //初期表示の場合.
                $page_no = 1;
                $viewData = [];
                $searchData = FormUtil::submitAndGetData($searchForm, []);
                // セッション中の検索条件, ページ番号を初期化.
                $this->session->set('eccube.admin.yamatosubs_order.search', $viewData);
                $this->session->set('eccube.admin.yamatosubs_order.search.page_no', $page_no);
            }
        }

        $yamato_subs_histories_qb = $this->yamatoSubsHistoryRepository->getYamatoSubsHistoriesQueryBuilder($searchData);
        $pagination = $paginator->paginate(
            $yamato_subs_histories_qb,
            $page_no,
            $page_count
        );

        return [
            'searchForm' => $searchForm->createView(),
            'has_errors' => false,
            'pagination' => $pagination,
            'page_no' => $page_no,
            'pageMaxis' => $pageMaxis,
            'page_count' => $page_count,
        ];
    }

    /**
     * 定期配送 ヤマト側に与信をかけに行く
     * @Route("/%eccube_admin_route%/plugin/yamatosubscription/bulkcredit", name="plugin_yamato_subscription_admin_bulk_credit", methods={"POST"})
     *
     * @param Request $request
     *
     * @return Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function bulkCredit(Request $request) {
        // 継続中の定期購入の履歴データをまず全て取得して
        // (phpのコードで) 配送間隔の期間、購入がなされていないデータを抽出する
        $continuingYamatoSubsOrders = $this->yamatoSubsRepository->searchStillContinuingYamatoSubsOrders();
        $targetYamatoSubsOrders = [];
        // 当初は、配送間隔は不変な仕様だったので
        // 最初の購入日から 決済回数 * 配送間隔（Nヶ月） で起算して配送間隔の期間、購入がない受注のみ抽出。
        //
        // そこから配送間隔が自由に変えられるようになったため、
        // 最初の定期購入日から今までの定期購入履歴に保持された配送間隔を合計した月分、経過した受注のみ抽出
        $today = (new \DateTime());
        foreach($continuingYamatoSubsOrders as $cyso) {
            $next_credit_threshold_date = DateTimeUtil::addMonths(
                $cyso['ys']->getCreateDate(),
                $this->yamatoSubsHistoryRepository
                    ->calculateTotalSubsMonthPeriodsFromFirstPurchasing($cyso['ys']) + $cyso['ys']->getSubsMonthPeriod()
            );
            if ( $next_credit_threshold_date->format('Ymd') <= $today->format('Ymd') ) {
                array_push($targetYamatoSubsOrders, $cyso);
            }
        }

        if (empty($targetYamatoSubsOrders)) {
            $this->addInfo('yamatosubscription.admin.list.no_recredit_target_order', 'admin');
            return $this->redirectToRoute('plugin_yamato_subscription_admin_list');
        }

        $succeeded_order_ids = [];
        $failed_order_ids = [];

        $connection = $this->entityManager->getConnection();
        $connection->setAutoCommit(false);
        foreach ($targetYamatoSubsOrders as $tyso) {
            $connection->connect();
            try {
                //配送回数が12倍数時は無料注文
                $is_twelve = ($tyso['ys']->getDeliveryCount() + 1) % 12 == 0 ? 1 : 0;

                // re-create order data
                $newOrder = $this->reOrder($tyso['o'], $tyso['ys'], $is_twelve);

                //継続割引後が0円なら決済APIをスキップ
				if($newOrder->getPaymentTotal() > 0){
					// pay via credit card API
					$paidData = $this->callYamatoAPI($tyso['o']->getId(), $newOrder, $tyso['ys']);

					// HACK: plg_yamato_orderテーブルにデータを追加
					$this->registerYamatoOrderFrom($newOrder, $paidData);
				}

                // send subscription order mail
                $this->subscriptionMailService->sendAdminOrderMail($newOrder, $tyso['ys']->getSubsMonthPeriod());

                $connection->commit();
                $succeeded_order_ids[] = $newOrder->getId();
            } catch (\Exception $e) {
                log_warning(trans('yamatosubscription.log.error.prefix'), [$e->getMessage()]);
                $connection->rollback();
                $failed_order_ids[] = $tyso['o']->getId();
            }
        }

        if (count($succeeded_order_ids) > 0) {
            $this->addSuccess(trans('yamatosubscription.admin.bulk_credit.succeeded_order_ids', ['%succeeded_order_ids%' => implode(',', $succeeded_order_ids)]), 'admin');
        }
        if (count($failed_order_ids) > 0) {
            $this->addError(trans('yamatosubscription.admin.bulk_credit.failed_order_ids', ['%failed_order_ids%' => implode(',', $failed_order_ids)]), 'admin');
        }
        return $this->redirectToRoute('plugin_yamato_subscription_admin_list');
    }

    /**
     * 受注CSVの出力.
     * @Route("/%eccube_admin_route%/plugin/yamatosubscription/export/order", name="plugin_yamato_subscription_admin_export_order", methods={"GET"})
     *
     * @param Request $request
     * @return StreamedResponse
     */
    public function exportOrder(Request $request) {
        // タイムアウトを無効にする.
        set_time_limit(0);

        // sql loggerを無効にする.
        $this->entityManager->getConfiguration()->setSQLLogger(null);

        //フィルター反映
        $session = $request->getSession();
        $builder = $this->formFactory->createBuilder(SearchYamatoSubsOrderType::class);
        $searchForm = $builder->getForm();
        $viewData = $session->get('eccube.admin.yamatosubs_order.search', []);
        $searchData = FormUtil::submitAndGetData($searchForm, $viewData);

        $response = new StreamedResponse();
        $response->setCallback(function() use($searchData) {
            $file = new \SplFileObject('php://output', 'a');
            $file->fwrite(pack('C*',0xEF,0xBB,0xBF)); // For excel, write BOM
            $file->fputcsv(array("定期配送ID", "配送間隔(月)", "受注日", "注文番号", "お名前", "E-Mail", "TEL", "支払方法", "購入金額(円)", "発送日", "対応状況", "商品", "個数", "単価", "消費税率(%)"));
            flush();

            // export data as csv
            $rows = $this->yamatoSubsHistoryRepository->searchYamatoSubsDetailHistories($searchData);
            foreach($rows as $row) {
                // 日付型をそのままfputcsv()できないため、キャスト
                $row['order_date'] = $row['order_date']->format('Y/m/d');
                $row['shipping_date'] = $row['shipping_date'] == null ? "" : $row['shipping_date']->format('Y/m/d');

                $file->fputcsv($row);
                flush();
            }
        });

        $now = new \DateTime();
        $filename = 'subs_order_' . $now->format('YmdHis') . '.csv';
        $response->setStatusCode(200);
        $response->headers->set('Content-Type', 'application/octet-stream');
        $response->headers->set('Content-Disposition', 'attachment; filename="' . $filename . '"');
        $response->send();

        log_info('定期配送受注CSV出力ファイル名', array($filename));

        return $response;
    }

    private function reOrder($previousOrder, $YamatoSubs, $is_twelve = 0) {
        $YamatoSubsUsersOrder = $this->yamatoSubsUsersOrderRepository->findOrderBy($YamatoSubs);

        if (!$YamatoSubsUsersOrder) {
            /*
             * 商品などを変更可能にする前から本プラグインを使っているユーザーも居る。
             * 対象のユーザーには最後の定期購入受注からデータを取得→保持テーブルに登録してから再取得する。
             */
            $YamatoSubsUsersOrder = $this->yamatoSubsRepository->registerYamatoSubsUsersOrder($previousOrder, $YamatoSubs);
        }
        $YamatoSubsUsersOrderItems =
            $this->yamatoSubsUsersOrderItemRepository->findOrderItemsBy($YamatoSubsUsersOrder);
        $YamatoSubsUsersShippings =
            $this->yamatoSubsUsersShippingRepository->findShippingsBy($YamatoSubsUsersOrder);
        $YamatoSubsUsersReferralCodeOrder =
            $this->yamatoSubsUsersReferralCodeOrderRepository->findReferralCodeOrderBy($YamatoSubsUsersOrder);

        //無料対象商品判定(配送回数12倍数回)
        $discount_repeat = 0;
        if(!empty($is_twelve)){
            $SettingCategories = $this->yamatoSubsDiscountCategoryRepository->getListIds();
            $SettingProducts = $this->yamatoSubsDiscountProductRepository->getListIds();
            foreach($YamatoSubsUsersOrderItems as $ysoi){
                if($ysoi->isProduct() != 1){continue;}
                $free_flag = 0;
                //カテゴリ判定
                $productCategories = $ysoi->getProduct()->getProductCategories();
                foreach($productCategories as $pc){
                    if(in_array($pc['category_id'], $SettingCategories, true) == true){                        
                        $free_flag = 1;
                        break;
                    }
                }
                //商品判定
                if(in_array($ysoi->getProduct()->getId(), $SettingProducts, true) == true){
                    $free_flag = 1;
                }
                //無料化対象の場合商品額分Discount
                if($free_flag == 1){
                    $discount_repeat = $discount_repeat + ($ysoi->getProduct()->getPrice02IncTaxMin() * $ysoi['quantity']);
                }
                //加算後のDiscountTotalがPaymentTotalより大きい場合は=0となるようDiscountを調整
                $discount_total = $YamatoSubsUsersOrder->getDiscount() + $discount_repeat;
                if($discount_total > $YamatoSubsUsersOrder->getPaymentTotal()){
                    $discount_repeat = $YamatoSubsUsersOrder->getPaymentTotal();
                }
            }
        }

        // 受注テーブル
        $newOrder = $this->yamatoSubsUsersOrderRepository->registerOrderFrom($YamatoSubsUsersOrder, $discount_repeat);

        // 出荷テーブル
        $newShippings = $this->yamatoSubsUsersShippingRepository->registerShippingsFrom($newOrder, $YamatoSubsUsersShippings);
        foreach($newShippings as $newShipping) {
            $newOrder->addShipping($newShipping);
        }

        // 受注明細テーブル
        $newOrderItems = $this->yamatoSubsUsersOrderItemRepository->registerOrderItemsFrom(
            $newOrder, $newShippings, $YamatoSubsUsersShippings, $YamatoSubsUsersOrderItems, $discount_repeat
        );
        foreach($newOrderItems as $newOrderItem) {
            $newOrder->addOrderItem($newOrderItem);
        }

        // 紹介コードプラグインが存在する && 紹介コード割引が適用されている時のみ、plg_referral_code_orderにデータを追加
        $newReferralCodeOrder = $this->yamatoSubsUsersReferralCodeOrderRepository->registerReferralCodeOrderFrom(
            $previousOrder, $newOrder, $YamatoSubsUsersReferralCodeOrder
        );

        // 定期配送データを更新
        $this->registerYamatoSubsHistoryFrom($newOrder, $YamatoSubs);

        // purchaseFlowを実施して、紹介コードの割引金額や利用可能枚数などを更新
        // FIXME: 2021/01/19現在、紹介コードプラグインがOrderFlowに対応してないため要検討。。。
        $this->executePurchaseFlowForNewOrder($newOrder);
        return $newOrder;
    }

    /**
     * Ref: src/Eccube/Controller/Admin/Order/EditController.php#index()
     */
    private function executePurchaseFlowForNewOrder($newOrder) {
        $originOrder = clone $newOrder;
        $purchaseContext = new PurchaseContext($originOrder, $originOrder->getCustomer());

        $flowResult = $this->purchaseFlow->validate($newOrder, $purchaseContext);
        if ($flowResult->hasWarning()) {
            foreach ($flowResult->getWarning() as $warning) {
                $this->addWarning($warning->getMessage(), 'admin');
            }
        }

        if ($flowResult->hasError()) {
            foreach ($flowResult->getErrors() as $error) {
                $this->addError($error->getMessage(), 'admin');
            }
        }

        if (!$flowResult->hasError()) {
            try {
                $this->purchaseFlow->prepare($newOrder, $purchaseContext);
                $this->purchaseFlow->commit($newOrder, $purchaseContext);
                $this->entityManager->flush();
            } catch (PurchaseException $e) {
                $this->addError($e->getMessage(), 'admin');
            }
        }
    }

    private function registerYamatoSubsHistoryFrom($newOrder, $ys) {
        $now = new \DateTime();

        $newYsh = new YamatoSubsHistory();
        $newYsh
            ->setYamatoSubs($ys)
            ->setOrder($newOrder)
            ->setSubsMonthPeriod($ys->getSubsMonthPeriod()) /* 現在の配送間隔を保存 */
			->setDeliveryCount($ys->getDeliveryCount() + 1) /* 現時点の最新配送回数を保存 */
            ->setCreateDate($now)
            ->setUpdateDate($now)
            ->setVisible(true)
        ;
        $this->entityManager->persist($newYsh);
        $this->entityManager->flush();

        $ys
            ->setLastSubsHistoryId($newYsh->getId())
            ->setCreditCount($ys->getCreditCount() + 1)
            ->setDeliveryCount($ys->getDeliveryCount() + 1)
            ->setUpdateDate($now)
        ;
        $this->entityManager->flush();
    }

    private function callYamatoAPI($previous_order_id, $newOrder, $ys) {
        $yamatoAPIHelper = new YamatoAPIHelper($this->eccubeConfig, $this->yamatoSubsConfigRepository);

        $order_inquiry_api_response = $yamatoAPIHelper->callYamatoOrderInquiryAPI($previous_order_id);
        if ($order_inquiry_api_response['returnCode'] !== '0') {
            throw new \Exception("Yamato API Error... Error code: {$order_inquiry_api_response['errorCode']}");
        }
        $previous_pay_way = empty($order_inquiry_api_response['resultData']) ? 1 : $order_inquiry_api_response['resultData']['payWay'];

        $credit_info_api_response = $yamatoAPIHelper->callYamatoCreditCardInfoInquiryAPI(
            $member_id = $newOrder->getCustomer()->getId(),
            $authentication_key = substr(((string) $newOrder->getCustomer()->getId()), 0, 8)
        );
        if ($credit_info_api_response['returnCode'] !== '0') {
            throw new \Exception("Yamato API Error... Error code: {$credit_info_api_response['errorCode']}");
        }
        // select subscribing credit card
        $subscribing_credit_card_key = $ys->getCreditCardKey();
        $subscribing_credit_card = current(
            array_filter($credit_info_api_response['cardData'], function($card_data, $key) use ($subscribing_credit_card_key) {
                $last4digits_of_credit_card_no = substr($card_data['maskingCardNo'], -4);
                return $subscribing_credit_card_key === $last4digits_of_credit_card_no;
            }, ARRAY_FILTER_USE_BOTH)
        );

        $credit_payment_api_response = $yamatoAPIHelper->callYamatoCreditPaymentAPI(
            $order_no = $newOrder->getId(),
            $settle_price = $newOrder->getPaymentTotal(),
            $buyer_name_kanji = $newOrder->getName01().' '.$newOrder->getName02(),
            $buyer_tel = $newOrder->getPhoneNumber(),
            $buyer_email = $newOrder->getEmail(),
            $pay_way = $previous_pay_way,
            $member_id = $newOrder->getCustomer()->getId(),
            $authentication_key = substr(((string) $newOrder->getCustomer()->getId()), 0, 8),
            $card_key = $subscribing_credit_card['cardKey'],
            $last_credit_date = $subscribing_credit_card['lastCreditDate']
        );
        if ($credit_payment_api_response['returnCode'] !== '0') {
            $str_error_message = "Yamato API Error... Error code: {$credit_payment_api_response['errorCode']}";
            // 与信処理NGの場合、その理由のコードもログに残す
            if ($credit_payment_api_response['errorCode'] === 'A012060001') {
                $str_error_message .= ", Credit Error code: {$credit_payment_api_response['creditErrorCode']}";
            }
            throw new \Exception($str_error_message);
        }

        // HACK:
        // YamatoPaymentプラグイン側でやっている
        // plg_yamato_orderテーブルにデータを挿入する処理と同じ事をするため、下記を実施。
        // ref: app/Plugin/YamatoPayment4/Service/Client/BaseClientService.php#setOrderPayData()
        // ref: app/Plugin/YamatoPayment4/Service/Client/BaseClientService.php#setOrderPaymentViewData()
        $member_id = $newOrder->getCustomer()->getId();
        $authentication_key = substr(((string) $member_id), 0, 8);
        $trader_code = $this->yamatoSubsConfigRepository->getTraderCode();
        $access_key = $this->yamatoSubsConfigRepository->getAccessKey();
        $check_sum = strtolower(hash('sha256', $member_id.$authentication_key.$access_key, false));
        $paid_data = [
            'function_div' => $this->eccubeConfig['YAMATO_FUNCTION_DIV_NORMAL_CREDIT_PAYMENT'],
            'trader_code' => $trader_code,
            'device_div' => $this->eccubeConfig['YAMATO_DEVICE_DIV_PC'],
            'order_no' => $newOrder->getId(),
            'settle_price' => $newOrder->getPaymentTotal(),
            'buyer_name_kanji' => $newOrder->getName01().' '.$newOrder->getName02(),
            'buyer_tel' => $newOrder->getPhoneNumber(),
            'buyer_email' => $newOrder->getEmail(),
            'auth_div' => $this->eccubeConfig['YAMATO_AUTH_DIV_BYPASS'],
            'pay_way' => $previous_pay_way,
            'option_service_div' => $this->eccubeConfig['YAMATO_OPTION_SERVICE_DIV_OPTION_SERVICE_ORDER'],
            'member_id' => $member_id,
            'authentication_key' => $authentication_key,
            'card_key' => $subscribing_credit_card['cardKey'],
            'last_credit_date' => $subscribing_credit_card['lastCreditDate'],
            'check_sum' => $check_sum,
        ];
        $paid_data = array_merge($paid_data, $credit_payment_api_response);

        return $paid_data;
    }

    private function registerYamatoOrderFrom($newOrder, $payData) {
        $yamatoOrder = new \Plugin\YamatoPayment4\Entity\YamatoOrder();
        $yamatoOrder->setOrder($newOrder);

        $this->yamatoPayment4CreditClientService->setSetting($newOrder);

        $payData['action_status'] = \Plugin\YamatoPayment4\Entity\YamatoPaymentStatus::YAMATO_ACTION_STATUS_COMP_AUTH;
        $paymentCode = $this->yamatoPayment4CreditClientService->getPaymentCode($newOrder);
        $payData['payment_code'] = $paymentCode;

        if(isset($payData['settle_price'])) {
            $payData['settle_price'] = intval($payData['settle_price']);
        }

        \Plugin\YamatoPayment4\Util\CommonUtil::printLog("BeforePersist", $payData);
        $yamatoOrder = $this->yamatoPayment4CreditClientService->setOrderPayData($yamatoOrder, $payData);
        $this->entityManager->persist($yamatoOrder);
        $this->entityManager->flush();
        \Plugin\YamatoPayment4\Util\CommonUtil::printLog("AfterPersist");

        \Plugin\YamatoPayment4\Util\CommonUtil::printLog("BeforePersist", $payData);
        $yamatoOrder = $this->yamatoPayment4CreditClientService->setOrderPaymentViewData($yamatoOrder, $payData);
        $this->entityManager->persist($yamatoOrder);
        $this->entityManager->flush();
        \Plugin\YamatoPayment4\Util\CommonUtil::printLog("AfterPersist");
    }
}