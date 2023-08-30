<?php

namespace Plugin\YamatoSubscription\Service;

use Eccube\Common\EccubeConfig;
use Eccube\Entity\BaseInfo;
use Eccube\Entity\MailHistory;
use Eccube\Event\EccubeEvents;
use Eccube\Event\EventArgs;
use Eccube\Repository\BaseInfoRepository;
use Eccube\Repository\MailHistoryRepository;
use Eccube\Repository\MailTemplateRepository;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

class SubscriptionMailService
{
    /**
     * @var EccubeConfig
     */
    protected $eccubeConfig;

    /**
     * @var \Swift_Mailer
     */
    protected $mailer;

    /**
     * @var \Twig_Environment
     */
    protected $twig;

    /**
     * @var EventDispatcher
     */
    protected $eventDispatcher;

    /**
     * @var BaseInfo
     */
    protected $BaseInfo;

    /**
     * @var MailHistoryRepository
     */
    protected $mailHistoryRepository;

    /**
     * @var MailTemplateRepository
     */
    protected $mailTemplateRepository;

    public function __construct(
        EccubeConfig $eccubeConfig,
        \Swift_Mailer $mailer,
        \Twig_Environment $twig,
        EventDispatcherInterface $eventDispatcher,
        BaseInfoRepository $baseInfoRepository,
        MailHistoryRepository $mailHistoryRepository,
        MailTemplateRepository $mailTemplateRepository
    ) {
        $this->eccubeConfig = $eccubeConfig;
        $this->mailer = $mailer;
        $this->twig = $twig;
        $this->eventDispatcher = $eventDispatcher;
        $this->BaseInfo = $baseInfoRepository->get();
        $this->mailHistoryRepository = $mailHistoryRepository;
        $this->mailTemplateRepository = $mailTemplateRepository;
    }



    /**
     * Send subscription order mail.
     *
     * @param \Eccube\Entity\Order $Order 受注情報
     * @param int $subs_month_period 定期配送間隔
     * @return \Eccube\Entity\MailHistory
     */
    public function sendAdminOrderMail(\Eccube\Entity\Order $Order, $subs_month_period)
    {
        log_info('YamatoSubscription '.__CLASS__.'#'.__FUNCTION__.' start');

        $MailTemplate = $this->mailTemplateRepository->find($this->eccubeConfig['eccube_order_mail_template_id']);

        $body = self::replaceTextMailBodyHeaderAsYamatoSubscriptionOne(
            self::replaceTextMailBodyAsYamatoSubscriptionOne(
                $this->twig->render($MailTemplate->getFileName(), [
                    'Order' => $Order,
                ]),
                $subs_month_period
            ),
            $this->BaseInfo->getShopName()
        );

        $message = (new \Swift_Message())
            ->setSubject('['.$this->BaseInfo->getShopName().'] 定期お届けサービス：'.$MailTemplate->getMailSubject())
            ->setFrom([$this->BaseInfo->getEmail01() => $this->BaseInfo->getShopName()])
            ->setTo([$Order->getEmail()])
            ->setBcc($this->BaseInfo->getEmail01())
            ->setReplyTo($this->BaseInfo->getEmail03())
            ->setReturnPath($this->BaseInfo->getEmail04());

        // HTMLテンプレートが存在する場合
        $htmlFileName = $this->getHtmlTemplate($MailTemplate->getFileName());
        if (!is_null($htmlFileName)) {
            $htmlBody = self::replaceHtmlMailBodyHeaderAsYamatoSubscriptionOne(
                self::replaceHtmlMailBodyAsYamatoSubscriptionOne(
                    $this->twig->render($htmlFileName, [
                        'Order' => $Order,
                    ]),
                    $subs_month_period
                ),
                $this->BaseInfo->getShopName()
            );

            $message
                ->setContentType('text/plain; charset=UTF-8')
                ->setBody($body, 'text/plain')
                ->addPart($htmlBody, 'text/html');
        } else {
            $message->setBody($body);
        }

        $event = new EventArgs(
            [
                'message' => $message,
                'Order' => $Order,
                'formData' => ['mail_subject' => $message->getSubject(), 'tpl_data' => $message->getBody()],
                'BaseInfo' => $this->BaseInfo,
            ],
            null
        );
        $this->eventDispatcher->dispatch(EccubeEvents::MAIL_ADMIN_ORDER, $event);

        $count = $this->mailer->send($message);

        $MailHistory = new MailHistory();
        $MailHistory->setMailSubject($message->getSubject())
            ->setMailBody($message->getBody())
            ->setOrder($Order)
            ->setSendDate(new \DateTime());

        // HTML用メールの設定
        $multipart = $message->getChildren();
        if (count($multipart) > 0) {
            $MailHistory->setMailHtmlBody($multipart[0]->getBody());
        }

        $this->mailHistoryRepository->save($MailHistory);

        log_info('YamatoSubscription '.__CLASS__.'#'.__FUNCTION__.' end', ['count' => $count]);

        return $MailHistory;
    }



    /**
     * [getHtmlTemplate description]
     *
     * @param  string $templateName  プレーンテキストメールのファイル名
     *
     * @return string|null  存在する場合はファイル名を返す
     */
    private function getHtmlTemplate($templateName)
    {
        // メールテンプレート名からHTMLメール用テンプレート名を生成
        $fileName = explode('.', $templateName);
        $suffix = '.html';
        $htmlFileName = $fileName[0].$suffix.'.'.$fileName[1];

        // HTMLメール用テンプレートの存在チェック
        if ($this->twig->getLoader()->exists($htmlFileName)) {
            return $htmlFileName;
        } else {
            return null;
        }
    }

    /**
     * テキストメールの本文を定期配送の本文に置換
     *
     * @param string $body プレーンテキストメールの本文
     * @param int $subs_month_period 定期配送間隔
     *
     * @return string
     */
    public static function replaceTextMailBodyAsYamatoSubscriptionOne($body, $subs_month_period)
    {
        $body = preg_replace('/商品名：/', '商品名：【定期】', $body);
        $body = preg_replace(
            '/(-------------------------------------------------'.PHP_EOL.'小　計)/m',
            PHP_EOL."配送頻度：{$subs_month_period}ヶ月ごと".PHP_EOL.PHP_EOL.'$1',
            $body
        );
        return $body;
    }

    public static function replaceTextMailBodyHeaderAsYamatoSubscriptionOne($body, $shopName)
    {
        $custom_header = <<<EOS
いつも{$shopName}をご利用いただき、誠にありがとうございます。
次回お届け予定分『定期お届けサービス』のご注文が確定いたしました。
商品内容、お届け先にお間違いが無いか、今一度ご確認ください。

*****************************************
■定期お届けサービスについて
定期お届けサービスは、3回以上のお受け取りを条件として、ご注文をいただいた商品を毎月お届けしております。
お客様より停止（解約）のお申し出をいただかない限り、3回目以降も継続してお届けいたします。

■お届け先の変更をご希望の場合
お届け予定日の3営業日前までにご連絡をお願いいたします。
それ以降のご連絡につきましては、対応できかねる場合がございます。
*****************************************

EOS;

        $body = preg_replace('/^この度はご注文いただき誠にありがとうございます。'.PHP_EOL.'下記ご注文内容にお間違えがないかご確認下さい。/m', $custom_header, $body);
        return $body;
    }

    /**
     * HTMLメールの本文を定期配送の本文に置換
     *
     * @param string $htmlBody HTMLテキストメールの本文
     * @param int $subs_month_period 定期配送間隔
     *
     * @return string
     */
    public static function replaceHtmlMailBodyAsYamatoSubscriptionOne($htmlBody, $subs_month_period)
    {
        $br = '<br/>';

        $htmlBody = preg_replace('/(\s+商品名：)/', '$1【定期】', $htmlBody);
        $htmlBody = preg_replace(
            '/(\s+<hr style="border-top: 2px dashed #8c8b8b;">'.PHP_EOL.'\s+小　計)/m',
            $br.$br."配送頻度：{$subs_month_period}ヶ月ごと".$br.$br.'$1',
            $htmlBody
        );
        return $htmlBody;
    }

    public static function replaceHtmlMailBodyHeaderAsYamatoSubscriptionOne($htmlBody, $shopName)
    {
        $custom_header = <<<EOS
いつも{$shopName}をご利用いただき、誠にありがとうございます。<br/>
次回お届け予定分『定期お届けサービス』のご注文が確定いたしました。<br/>
商品内容、お届け先にお間違いが無いか、今一度ご確認ください。<br/>
<br/>
<hr style="border-top: 3px double #cbcbcb;">
■定期お届けサービスについて<br/>
定期お届けサービスは、3回以上のお受け取りを条件として、ご注文をいただいた商品を毎月お届けしております。<br/>
お客様より停止（解約）のお申し出をいただかない限り、3回目以降も継続してお届けいたします。<br/>
<br/>
■お届け先の変更をご希望の場合<br/>
お届け予定日の3営業日前までにご連絡をお願いいたします。<br/>
それ以降のご連絡につきましては、対応できかねる場合がございます。<br/>
<hr style="border-top: 3px double #cbcbcb;">
<br/>
EOS;

        $htmlBody = preg_replace('/\s+この度はご注文いただき誠にありがとうございます。<br\/>\s+下記ご注文内容にお間違えがないかご確認下さい。<br\/>/m', $custom_header, $htmlBody);
        return $htmlBody;
    }
}
