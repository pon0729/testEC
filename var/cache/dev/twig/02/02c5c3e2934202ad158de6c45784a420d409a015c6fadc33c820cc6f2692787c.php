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
class __TwigTemplate_ceb73a3829b466958808001daae6ebbcecbb3194c39f95a79565c7340f64b395 extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Block/footer.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Block/footer.twig"));

        // line 11
        echo "
<div class=\"ec-footerRole\">
    <div class=\"ec-footerRole__inner\">
        <div class=\"ec-footerTitle\">
            <div class=\"ec-footerTitle__logo\">
                <a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage");
        echo "\"><img src=\"/html/user_data/assets/img/top/logo.svg\"></a>
            </div>
            <div class=\"ec-footerNaviRole\">
                <ul class=\"ec-footerNaviRole__left\">
                    <li class=\"ec-footerNavi__link\">
                        <a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("help_about");
        echo "\">当サイトについて</a>
                    </li>
                    ";
        // line 40
        echo "                    <li class=\"ec-footerNavi__link\">
                        <a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("help_guide");
        echo "\">ご利用ガイド</a>
                    </li>
                    <li class=\"ec-footerNavi__link\">
                        <a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("help_privacy");
        echo "\">プライバシーポリシー</a>
                    </li>
                    <li class=\"ec-footerNavi__link\">
                        <a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("help_tradelaw");
        echo "\">特定商取引法に基づく表記</a>
                    </li>
                    <li class=\"ec-footerNavi__link\">
                        <a href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("help_agreement");
        echo "\">ご利用規約</a>
                    </li>
                    <li class=\"ec-footerNavi__link\">
                        <a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("contact");
        echo "\">お問い合わせ</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class=\"ec-footerCopyright\">&copy; 2020 ";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 59, $this->source); })()), "shop_name", [], "any", false, false, false, 59), "html", null, true);
        echo " All Rights Reserved.</div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  99 => 59,  90 => 53,  84 => 50,  78 => 47,  72 => 44,  66 => 41,  63 => 40,  58 => 21,  50 => 16,  43 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("{#
This file is part of EC-CUBE

Copyright(c) EC-CUBE CO.,LTD. All Rights Reserved.

http://www.ec-cube.co.jp/

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.
#}

<div class=\"ec-footerRole\">
    <div class=\"ec-footerRole__inner\">
        <div class=\"ec-footerTitle\">
            <div class=\"ec-footerTitle__logo\">
                <a href=\"{{ url('homepage') }}\"><img src=\"/html/user_data/assets/img/top/logo.svg\"></a>
            </div>
            <div class=\"ec-footerNaviRole\">
                <ul class=\"ec-footerNaviRole__left\">
                    <li class=\"ec-footerNavi__link\">
                        <a href=\"{{ url('help_about') }}\">当サイトについて</a>
                    </li>
                    {#
                    <li class=\"ec-footerNavi__link\">
                        <a href=\"{{ url('product_list', {'category_id': 7}) }}\">食品</a>
                    </li>
                    <li class=\"ec-footerNavi__link\">
                        <a href=\"{{ url('product_list', {'category_id': 9}) }}\">化粧品</a>
                    </li>
                    <li class=\"ec-footerNavi__link\">
                        <a href=\"{{ url('product_list', {'category_id': 8}) }}\">日用品・洗面</a>
                    </li>
                    <li class=\"ec-footerNavi__link\">
                        <a href=\"{{ url('product_list', {'category_id': 11}) }}\">雑貨</a>
                    </li>
                    <li class=\"ec-footerNavi__link\">
                        <a href=\"{{ url('product_list', {'category_id': 10}) }}\">ベビー用品</a>
                    </li>
                    #}
                    <li class=\"ec-footerNavi__link\">
                        <a href=\"{{ url('help_guide') }}\">ご利用ガイド</a>
                    </li>
                    <li class=\"ec-footerNavi__link\">
                        <a href=\"{{ url('help_privacy') }}\">プライバシーポリシー</a>
                    </li>
                    <li class=\"ec-footerNavi__link\">
                        <a href=\"{{ url('help_tradelaw') }}\">特定商取引法に基づく表記</a>
                    </li>
                    <li class=\"ec-footerNavi__link\">
                        <a href=\"{{ url('help_agreement') }}\">ご利用規約</a>
                    </li>
                    <li class=\"ec-footerNavi__link\">
                        <a href=\"{{ url('contact') }}\">お問い合わせ</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class=\"ec-footerCopyright\">&copy; 2020 {{ BaseInfo.shop_name }} All Rights Reserved.</div>
</div>", "Block/footer.twig", "/var/www/html/eccube-4-new/app/template/responceWebDesign/Block/footer.twig");
    }
}
