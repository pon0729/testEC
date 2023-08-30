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

/* @YamatoSubscription/default/Mypage/add_navi.twig */
class __TwigTemplate_8ce1507c62334e281d55646db15be71c1a674557d45e735584367ccfbcc5f400 extends \Eccube\Twig\Template
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
        echo "<script>
\$(function() {
    \$('.ec-navlistRole__navlist .ec-navlistRole__item').first().after(\$('#yamatosubscription_navi'));
});
</script>

<li id=\"yamatosubscription_navi\" class=\"ec-navlistRole__item ";
        // line 7
        if (((((isset($context["mypageno"]) || array_key_exists("mypageno", $context))) ? (_twig_default_filter(($context["mypageno"] ?? null), "")) : ("")) == "yamatosubscription")) {
            echo "active";
        }
        echo "\">
    <a href=\"";
        // line 8
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("plugin_yamato_subscription_mypage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yamatosubscription.mypage.list.nav"), "html", null, true);
        echo "</a>
</li>
";
    }

    public function getTemplateName()
    {
        return "@YamatoSubscription/default/Mypage/add_navi.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 8,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@YamatoSubscription/default/Mypage/add_navi.twig", "/var/www/html/eccube-4-new/app/Plugin/YamatoSubscription/Resource/template/default/Mypage/add_navi.twig");
    }
}
