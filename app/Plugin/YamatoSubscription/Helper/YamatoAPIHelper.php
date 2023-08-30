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

namespace Plugin\YamatoSubscription\Helper;

use Eccube\Common\EccubeConfig;
use Plugin\YamatoSubscription\Repository\YamatoSubsConfigRepository;
require __DIR__.'/../../../../vendor/autoload.php';

class YamatoAPIHelper
{
    /**
     * @var EccubeConfig
     */
    protected $eccubeConfig;

    /**
     * @var string
     */
    protected $trader_code;

    /**
     * @var string
     */
    protected $access_key;

    /**
     * @var \stdClass
     */
    protected $api_urls;

    public function __construct(
        EccubeConfig $eccubeConfig,
        YamatoSubsConfigRepository $yamatoSubsConfigRepository
    ) {
        $this->eccubeConfig = $eccubeConfig;
        $this->trader_code = $yamatoSubsConfigRepository->getTraderCode();
        $this->access_key = $yamatoSubsConfigRepository->getAccessKey();

        $this->api_urls = new \stdClass();
        if ($yamatoSubsConfigRepository->isProductionExecMode()) {
            $this->api_urls->yamato_order_inquiry = $this->eccubeConfig['PRODUCTION']['YAMATO_ORDER_INQUIRY_API_URL'];
            $this->api_urls->yamato_credit_card_info_inquiry = $this->eccubeConfig['PRODUCTION']['YAMATO_CREDIT_CARD_INFO_INQUIRY_API_URL'];
            $this->api_urls->yamato_credit_payment = $this->eccubeConfig['PRODUCTION']['YAMATO_CREDIT_PAYMENT_API_URL'];
        } else {
            $this->api_urls->yamato_order_inquiry = $this->eccubeConfig['DEVELOPMENT']['YAMATO_ORDER_INQUIRY_API_URL'];
            $this->api_urls->yamato_credit_card_info_inquiry = $this->eccubeConfig['DEVELOPMENT']['YAMATO_CREDIT_CARD_INFO_INQUIRY_API_URL'];
            $this->api_urls->yamato_credit_payment = $this->eccubeConfig['DEVELOPMENT']['YAMATO_CREDIT_PAYMENT_API_URL'];
        }
    }

    public function callYamatoOrderInquiryAPI($order_id) {
        $client = new \GuzzleHttp\Client([
            'timeout' => 30,
            'headers' => ['Content-Type' => 'application/x-www-form-urlencoded; charset=UTF-8']
        ]);

        // application/x-www-form-urlencoded でPOSTするには、'form_params' でラップする必要あり。
        $parameters = [
            'form_params' => [
                'function_div' => $this->eccubeConfig['YAMATO_FUNCTION_DIV_ORDER_INQUIRY'],
                'trader_code' => $this->trader_code,
                'order_no' => $order_id,
            ]
        ];
        $str_apiurl = $this->api_urls->yamato_order_inquiry;
        log_info("API URL: {$str_apiurl}");
        $str_parameter = print_r($parameters, true);
        log_info("API parameter: {$str_parameter}");

        $response = $client->request('POST', $str_apiurl, $parameters);

        return json_decode(json_encode(simplexml_load_string( $response->getBody() )), true);
    }

    public function callYamatoCreditCardInfoInquiryAPI(
        $member_id,
        $authentication_key
    ) {
        $client = new \GuzzleHttp\Client([
            'timeout' => 30,
            'headers' => ['Content-Type' => 'application/x-www-form-urlencoded; charset=UTF-8']
        ]);

        $check_sum = strtolower(hash('sha256', $member_id.$authentication_key.$this->access_key, false));
        $parameters = [
            'form_params' => [
                'function_div' => $this->eccubeConfig['YAMATO_FUNCTION_DIV_CREDIT_CARD_INFO_INQUIRY'],
                'trader_code' => $this->trader_code,
                'member_id' => $member_id,
                'authentication_key' => $authentication_key,
                'check_sum' => $check_sum
            ]
        ];
        $str_apiurl = $this->api_urls->yamato_credit_card_info_inquiry;
        log_info("API URL: {$str_apiurl}");
        $str_parameter = print_r($parameters, true);
        log_info("API parameter: {$str_parameter}");

        $response = $client->request('POST', $str_apiurl, $parameters);

        $creditInfo = json_decode(json_encode(simplexml_load_string( $response->getBody() )), true);
        if ($creditInfo['returnCode'] === '0' && array_key_exists('cardKey', $creditInfo['cardData'])) {
            $creditInfo['cardData'][0] = $creditInfo['cardData'];
            unset($creditInfo['cardData']['cardKey']);
            unset($creditInfo['cardData']['maskingCardNo']);
            unset($creditInfo['cardData']['cardExp']);
            unset($creditInfo['cardData']['cardOwner']);
            unset($creditInfo['cardData']['cardCodeApi']);
            unset($creditInfo['cardData']['lastCreditDate']);
            unset($creditInfo['cardData']['subscriptionFlg']);
            unset($creditInfo['cardData']['regularFlg']);
        }
        return $creditInfo;
    }

    public function callYamatoCreditPaymentAPI(
        $order_no,
        $settle_price,
        $buyer_name_kanji,
        $buyer_tel,
        $buyer_email,
        $pay_way,
        $member_id,
        $authentication_key,
        $card_key,
        $last_credit_date
    ) {
        $client = new \GuzzleHttp\Client([
            'timeout' => 30,
            'headers' => ['Content-Type' => 'application/x-www-form-urlencoded; charset=UTF-8']
        ]);

        $check_sum = strtolower(hash('sha256', $member_id.$authentication_key.$this->access_key, false));
        $parameters = [
            'form_params' => [
                'function_div' => $this->eccubeConfig['YAMATO_FUNCTION_DIV_NORMAL_CREDIT_PAYMENT'],
                'trader_code' => $this->trader_code,
                'device_div' => $this->eccubeConfig['YAMATO_DEVICE_DIV_PC'],
                'order_no' => $order_no,
                'settle_price' => $settle_price,
                'buyer_name_kanji' => $buyer_name_kanji,
                'buyer_tel' => $buyer_tel,
                'buyer_email' => $buyer_email,
                'auth_div' => $this->eccubeConfig['YAMATO_AUTH_DIV_BYPASS'],
                'pay_way' => $pay_way,
                'option_service_div' => $this->eccubeConfig['YAMATO_OPTION_SERVICE_DIV_OPTION_SERVICE_ORDER'],
                'member_id' => $member_id,
                'authentication_key' => $authentication_key,
                'card_key' => $card_key,
                'last_credit_date' => $last_credit_date,
                'check_sum' => $check_sum,
            ]
        ];
        $str_apiurl = $this->api_urls->yamato_credit_payment;
        log_info("API URL: {$str_apiurl}");
        $str_parameter = print_r($parameters, true);
        log_info("API parameter: {$str_parameter}");

        $response = $client->request('POST', $str_apiurl, $parameters);

        return json_decode(json_encode(simplexml_load_string( $response->getBody() )), true);
    }
}

