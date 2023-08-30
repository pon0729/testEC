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

/* Block/footer.twig */
class __TwigTemplate_c790f88f41702f86d643c2a2982aef09e9f102b6f04b3dd575bdfa3df03363df extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "
<div class=\"ec-footerRole\">
    <div class=\"ec-footerRole__inner\">
        <div class=\"ec-footerTitle\">
            <div class=\"ec-footerTitle__logo\">
                <a href=\"";
        // line 16
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("homepage");
        echo "\"><img src=\"/html/user_data/assets/img/top/logo.svg\"></a>
            </div>
            <div class=\"ec-footerNaviRole\">
                <ul class=\"ec-footerNaviRole__left\">
                    <li class=\"ec-footerNavi__link\">
                        <a href=\"";
        // line 21
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("help_about");
        echo "\">当サイトについて</a>
                    </li>
                    ";
        // line 40
        echo "                    <li class=\"ec-footerNavi__link\">
                        <a href=\"";
        // line 41
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("help_guide");
        echo "\">ご利用ガイド</a>
                    </li>
                    <li class=\"ec-footerNavi__link\">
                        <a href=\"";
        // line 44
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("help_privacy");
        echo "\">プライバシーポリシー</a>
                    </li>
                    <li class=\"ec-footerNavi__link\">
                        <a href=\"";
        // line 47
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("help_tradelaw");
        echo "\">特定商取引法に基づく表記</a>
                    </li>
                    <li class=\"ec-footerNavi__link\">
                        <a href=\"";
        // line 50
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("help_agreement");
        echo "\">ご利用規約</a>
                    </li>
                    <li class=\"ec-footerNavi__link\">
                        <a href=\"";
        // line 53
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("contact");
        echo "\">お問い合わせ</a>
                    </li>
                    <li class=\"ec-footerNavi__link\">
                        <a href=\"https://gift-communication.shop/user_data/faq\">FAQ</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class=\"ec-footerCopyright\">&copy; 2020 ";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "shop_name", [], "any", false, false, false, 62), "html", null, true);
        echo " All Rights Reserved.</div>
</div>";
    }

    public function getTemplateName()
    {
        return "Block/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 62,  84 => 53,  78 => 50,  72 => 47,  66 => 44,  60 => 41,  57 => 40,  52 => 21,  44 => 16,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Block/footer.twig", "/var/www/html/eccube-4-new/app/template/responceWebDesign/Block/footer.twig");
    }
}
