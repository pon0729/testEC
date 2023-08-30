<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @user_data/faq.twig */
class __TwigTemplate_d84a4dc91a1787a7045c8ca09a565b0c9e08067fc04658b95463c5648329611a extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("default_frame.twig", "@user_data/faq.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <h1 id=\"faq_headline\">よくあるご質問</h1>
    <div class='faq_content'>
        <div class='faq_question'>Q.クレジットカードや電子決済は使えますか</div>
        <div class='faq_answer'>A.可能です。 当店舗では、主要各社クレジット決済、同電子マネーに対応しております。 ただし、QR決済はご利用いただけませんのでご了承ください。</div>
    </div>
    <div class='faq_content'>
        <div class='faq_question'>Q.店舗とオンラインショップで取り扱い商品は変わりますか</div>
        <div class='faq_answer'>A.はい。 店舗のみのお取り扱い商品も多数ございますので、ぜひ店舗にお越しいただき、実際に手に取っていただけたらと思います。</div>
    </div>
    <div class='faq_content'>
        <div class='faq_question'>Q.駐車場はありますか</div>
        <div class='faq_answer'>A.ご用意はございませんので、近隣の駐車場をご利用ください。</div>
    </div>
    <div class='faq_content'>
        <div class='faq_question'>Q.オーガニックコスメは誰にでも安全ですか</div>
        <div class='faq_answer'>A.オーガニックコスメは安全性が高い天然成分を使っていますが、すべての方がトラブルを起こさないというものではございません。</div>
        <div class='faq_answer'>アレルギー体質の方、現在通院中の方は医師との相談の元でのご使用をおすすめいたします。</div>
    </div>
    <div class='faq_content'>
        <div class='faq_question'>Q.返品交換できますか</div>
        <div class='faq_answer'>A.はい、可能です。 返品・交換についてはご利用ガイドより「返品・交換について」をご覧ください。</div>
    </div>
    <div class='faq_content'>
        <div class='faq_question'>Q.店内は写真撮影可能ですか</div>
        <div class='faq_answer'>A.可能ではございますが、人が映り込んだ写真は取り扱いにご配慮いただけますようお願いいたします。</div>
    </div>
    <div class='faq_content'>
        <div class='faq_question'>Q.店舗で撮影した写真をSNSに投稿しても良いですか</div>
        <div class='faq_answer'>A.はい、投稿して応援いただけますと幸いです。ただし人が映り込んだ画像は個人情報保護の観点から、お取り扱いに十分ご配慮をお願いいたします。</div>
    </div>
    <div class='faq_content'>
        <div class='faq_question'>Q.ホームページの動作環境を教えてください</div>
        <div class='faq_answer'>A.ブラウザは、IE、Firefox、Google chrome、safariを推奨しております。</div>
    </div>
    <div class='faq_content'>
        <div class='faq_question'>Q.注文した際の返信メールが届きません</div>
        <div class='faq_answer'>A.恐れ入りますが、contact@gift-communication.shop 宛にお問い合わせをお願いいたします。</div>
    </div>
    <div class='faq_content'>
        <div class='faq_question'>Q.電話注文はできますか</div>
        <div class='faq_answer'>A.電話でのご注文は対応いたしかねます。実際に店舗にお越しいただくかオンラインショップからのご注文を願いいたします。</div>
    </div>
    <div class='faq_content'>
        <div class='faq_question'>Q.メール注文できますか</div>
        <div class='faq_answer'>A.電話でのご注文は対応いたしかねます。 実際に店舗にお越しいただくかオンラインショップからのご注文を願いいたします。</div>
    </div>
    <div class='faq_content'>
        <div class='faq_question'>Q.1回のオンライン注文で配送先を分けることはできますか</div>
        <div class='faq_answer'>A.システムの上対応いたしかねます。 配送先ごとのご注文をお願いいたします。</div>
    </div>
    <div class='faq_content'>
        <div class='faq_question'>Q.店舗の取り扱い商品一覧やカタログはありますか?</div>
        <div class='faq_answer'>A.カタログはございませんが、店舗のお取り扱いブランド一覧は当HPに掲載しております。お取り扱い商品についてはメールまたは電話にてお問い合わせください。</div>
    </div>
    <div class='faq_content'>
        <div class='faq_question'>Q.店頭での受け取りは可能ですか?</div>
        <div class='faq_answer'>A.お問い合わせフォームよりお問い合わせください。</div>
    </div>
    <div class='faq_content'>
        <div class='faq_question'>Q.送料はいくらから無料ですか?</div>
        <div class='faq_answer'>A.一部地域にて、消費税込10,000円以上お買い上げいただくと、配送料無料でお届けいたします。 詳しくは、送料についてをご確認ください。</div>
        <div class='faq_answer'><a href=\"https://gift-communication.shop/guide#shipping\">https://gift-communication.shop/guide#shipping</a></div>
    </div>
    <div class='faq_content'>
        <div class='faq_question'>Q.店舗の取り扱い商品一覧やカタログはありますか? </div>
        <div class='faq_answer'>A.現金、クレジットカード※1、代引き ※2にてお支払いいただけます。</div>
        <div class='faq_answer'>※1 VISA、マスターに限る※21万円未満300円 3万円未満400円 10万円未満 600円 30万円まで1000円(税別)</div>
    </div>
    <div class=\"faq_inquiry\">
         <a href=\"https://gift-communication.shop/contact\">お問い合わせフォーム</a>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@user_data/faq.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@user_data/faq.twig", "/var/www/html/eccube-4-new/app/template/user_data/faq.twig");
    }
}
