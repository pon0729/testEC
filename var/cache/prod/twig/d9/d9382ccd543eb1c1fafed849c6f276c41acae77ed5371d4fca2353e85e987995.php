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

/* @YamatoPayment4/mypage/add_navi.twig */
class __TwigTemplate_c3339409c992cae10bf00d711b66c252ac5f3116503b1e27722ec30e33d1d76f extends \Eccube\Twig\Template
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
        // line 1
        echo "<script>\$(function() { \$(\"ul.ec-navlistRole__navlist\").first().append(\$('#kuronekocredit'))})</script>

        <li class=\"ec-navlistRole__item ";
        // line 3
        if (((((isset($context["mypageno"]) || array_key_exists("mypageno", $context))) ? (_twig_default_filter(($context["mypageno"] ?? null), "")) : ("")) == "kuronekocredit")) {
            echo "active";
        }
        echo "\" id=\"kuronekocredit\">
            <a href=\"";
        // line 4
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("mypage_kuronekocredit");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("カード編集"), "html", null, true);
        echo "</a>
        </li>
";
    }

    public function getTemplateName()
    {
        return "@YamatoPayment4/mypage/add_navi.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@YamatoPayment4/mypage/add_navi.twig", "/var/www/html/eccube-4-new/app/Plugin/YamatoPayment4/Resource/template/mypage/add_navi.twig");
    }
}
