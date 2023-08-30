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

/* @user_data/return_exchange.twig */
class __TwigTemplate_6e8813f3bed7d2cfaa79dcd23b06bac470c412bc4c521f5e66a3d915ec9e5034 extends \Eccube\Twig\Template
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
        // line 11
        return "default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("default_frame.twig", "@user_data/return_exchange.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "    <div class=\"all_topicpath\">
      <ol class=\"ec-topicpath_sub\">
        <li class=\"home_path\"><a href=\"https://gift-communication.shop/\">TOP</a></li>
        <li class=\"ec-topicpath_all_divider\"> ＞</li>
        <li class=\"ec-topicpath_all_category\">返品・交換</li>
    　</ol>
    </div>
    <div class=\"ec-role\">
        <div class=\"ec-pageHeader\">
            <h1>";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("返品・交換"), "html", null, true);
        echo "</h1>
        </div>
        <div id=\"return\">
            <h2>返品</h2>
            <br>
            <h3>商品不備による場合</h3>
            <p>お届け内容の不備による返品は、返送料を弊社にて負担いたします。返送品の到着を確認後、返金の手続きをいたしますので、お手数ですが、下記お問い合わせ先までご連絡をお願いいたします。</p>
            <p>※ご注文と異なる商品</p>
            <p>※配送による商品破損</p>
            <p>※商品不良</p>
            <br>
            <h3>お客様のご都合による場合</h3>
            <p>前記の場合を除く、お客様のご都合による返品の場合は､商品到着後、10営業日以内にご連絡のうえ、10日以内にご返送ください。返送品の到着を確認後、返金の手続きをいたします。</p>
            <p>※返品にかかる送料はお客様のご負担となります。あらかじめご了承ください。</p>
            <br>
            <h3>返品についてのお問い合わせ</h3>
            <p>株式会社SUN</p>
　　        <p>メール：contact@gift-communication.shop</p>
　　        <p>（お問い合わせ時間：11：00～19：00 土日祝、年末年始を除く）</p>
            <br>
            <br>
        </div>
        <div id=\"exchange\">
            <h2>交換</h2>
            <br>
            <h3>商品不備による場合</h3>
            <p>お届け内容の不備による交換は、返送料および交換商品の発送料をを弊社にて負担いたします。交換手続きにつきましては、お手数ですが、下記お問い合わせ先までご連絡をお願いいたします。</p>
            <p>※ご注文と異なる商品</p>
            <p>※配送による商品破損</p>
            <p>※商品不良</p>
            <br>
            <h3>お客様のご都合による場合</h3>
            <p>前記の場合を除く、お客様のご都合による交換の場合は､商品到着後、10営業日以内にご連絡のうえ、10日以内にご返送ください。返送品の到着を確認後、交換の手続きをいたします。</p>
            <p>※交換にかかる送料（返送料及び交換商品の発送料）はお客様のご負担となります。あらかじめご了承ください。</p>
            <br>
            <h3>交換についてのお問い合わせ</h3>
            <p>株式会社SUN</p>
　　        <p>メール：contact@gift-communication.shop</p>
　　        <p>（お問い合わせ時間：11：00～19：00 土日祝、年末年始を除く）</p>

        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@user_data/return_exchange.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 23,  50 => 14,  46 => 13,  35 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@user_data/return_exchange.twig", "/var/www/html/eccube-4-new/app/template/user_data/return_exchange.twig");
    }
}
