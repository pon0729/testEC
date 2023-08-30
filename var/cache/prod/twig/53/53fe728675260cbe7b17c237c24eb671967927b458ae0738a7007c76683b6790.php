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

/* @YamatoSubscription/admin/Order/show_subscription_info.twig */
class __TwigTemplate_43d49680c5c69c3f30bd5751d19fa08e5118cadad0e345002454c4e03c11d378 extends \Eccube\Twig\Template
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
        echo "<style>
</style>

<script>
\$(function() {
    \$('#orderOverview .card-body .row .col-6:nth-child(2)').append(\$('#show_subscription_info'));
    \$('#show_subscription_info_wrapper').remove();
});
</script>

<div id=\"show_subscription_info_wrapper\" class=\"d-none\">
    <div id=\"show_subscription_info\" class=\"row\">
        <div class=\"col-3\"><i class=\"fa fa-truck fa-fw mr-1\" aria-hidden=\"true\"></i>定期配送ID</div>
        <div class=\"col\">
            ";
        // line 15
        if ((null === ($context["YamatoSubs"] ?? null))) {
            // line 16
            echo "                -
            ";
        } else {
            // line 18
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("plugin_yamato_subscription_admin_detail", ["id" => twig_get_attribute($this->env, $this->source, ($context["YamatoSubs"] ?? null), "id", [], "any", false, false, false, 18)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["YamatoSubs"] ?? null), "id", [], "any", false, false, false, 18), "html", null, true);
            echo "</a>&nbsp;（";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yamatosubscription.admin.order.delivery_count", ["%delivery_count%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "YamatoSubsHistory", [], "any", false, false, false, 18), "first", [], "any", false, false, false, 18), "deliveryCount", [], "any", false, false, false, 18)]), "html", null, true);
            if ((null === twig_get_attribute($this->env, $this->source, ($context["YamatoSubs"] ?? null), "cancelledDate", [], "any", false, false, false, 18))) {
                echo "）";
            } else {
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yamatosubscription.admin.order.and_already_cancelled_at", ["%cancelled_date%" => twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["YamatoSubs"] ?? null), "cancelledDate", [], "any", false, false, false, 18), "Y/m/d")]), "html", null, true);
                echo "）";
            }
            // line 19
            echo "            ";
        }
        // line 20
        echo "        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@YamatoSubscription/admin/Order/show_subscription_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 20,  72 => 19,  59 => 18,  55 => 16,  53 => 15,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@YamatoSubscription/admin/Order/show_subscription_info.twig", "/var/www/html/eccube-4-new/app/Plugin/YamatoSubscription/Resource/template/admin/Order/show_subscription_info.twig");
    }
}
