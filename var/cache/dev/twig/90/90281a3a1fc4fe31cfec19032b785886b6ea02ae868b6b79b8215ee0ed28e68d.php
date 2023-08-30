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
class __TwigTemplate_7f0092473bd4bd653ce0d0a9c7b3d0fd9863d5a41df9a591932a12456c04bd96 extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@YamatoSubscription/admin/Order/show_subscription_info.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@YamatoSubscription/admin/Order/show_subscription_info.twig"));

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
        if ((null === (isset($context["YamatoSubs"]) || array_key_exists("YamatoSubs", $context) ? $context["YamatoSubs"] : (function () { throw new RuntimeError('Variable "YamatoSubs" does not exist.', 15, $this->source); })()))) {
            // line 16
            echo "                -
            ";
        } else {
            // line 18
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("plugin_yamato_subscription_admin_detail", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["YamatoSubs"]) || array_key_exists("YamatoSubs", $context) ? $context["YamatoSubs"] : (function () { throw new RuntimeError('Variable "YamatoSubs" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["YamatoSubs"]) || array_key_exists("YamatoSubs", $context) ? $context["YamatoSubs"] : (function () { throw new RuntimeError('Variable "YamatoSubs" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18), "html", null, true);
            echo "</a>&nbsp;（";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yamatosubscription.admin.order.delivery_count", ["%delivery_count%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 18, $this->source); })()), "YamatoSubsHistory", [], "any", false, false, false, 18), "first", [], "any", false, false, false, 18), "deliveryCount", [], "any", false, false, false, 18)]), "html", null, true);
            if ((null === twig_get_attribute($this->env, $this->source, (isset($context["YamatoSubs"]) || array_key_exists("YamatoSubs", $context) ? $context["YamatoSubs"] : (function () { throw new RuntimeError('Variable "YamatoSubs" does not exist.', 18, $this->source); })()), "cancelledDate", [], "any", false, false, false, 18))) {
                echo "）";
            } else {
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yamatosubscription.admin.order.and_already_cancelled_at", ["%cancelled_date%" => twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["YamatoSubs"]) || array_key_exists("YamatoSubs", $context) ? $context["YamatoSubs"] : (function () { throw new RuntimeError('Variable "YamatoSubs" does not exist.', 18, $this->source); })()), "cancelledDate", [], "any", false, false, false, 18), "Y/m/d")]), "html", null, true);
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  81 => 20,  78 => 19,  65 => 18,  61 => 16,  59 => 15,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>
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
            {% if YamatoSubs is null %}
                -
            {% else %}
                <a href=\"{{ url('plugin_yamato_subscription_admin_detail', { id: YamatoSubs.id }) }}\">{{ YamatoSubs.id }}</a>&nbsp;（{{ 'yamatosubscription.admin.order.delivery_count'|trans({'%delivery_count%': Order.YamatoSubsHistory.first.deliveryCount}) }}{% if YamatoSubs.cancelledDate is null %}）{% else %}{{ 'yamatosubscription.admin.order.and_already_cancelled_at'|trans({'%cancelled_date%': YamatoSubs.cancelledDate|date(\"Y/m/d\")}) }}）{% endif %}
            {% endif %}
        </div>
    </div>
</div>
", "@YamatoSubscription/admin/Order/show_subscription_info.twig", "/var/www/html/eccube-4-new/app/Plugin/YamatoSubscription/Resource/template/admin/Order/show_subscription_info.twig");
    }
}
