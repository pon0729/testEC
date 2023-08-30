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

/* @YamatoSubscription/admin/Detail/index.twig */
class __TwigTemplate_3f52684b7fa5cc15703b4cf7018a88ad967dd27ccf99a29d21f990cbc5308edc extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'sub_title' => [$this, 'block_sub_title'],
            'javascript' => [$this, 'block_javascript'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return "@admin/default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        $context["menus"] = [0 => "order", 1 => "plugin_yamato_subscription_admin_list"];
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@YamatoSubscription/admin/Detail/index.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yamatosubscription.admin.detail.title"), "html", null, true);
    }

    // line 16
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yamatosubscription.admin.detail.sub_title"), "html", null, true);
    }

    // line 20
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "<script>
\$(function() {
    \$('#cancel_button').on('click', function(e) {
        if (!confirm(\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yamatosubscription.admin.detail.confirm_cancellation"), "html", null, true);
        echo "\")) {
            Ladda.stopAll();
            e.preventDefault();
            return false;
        }
    });
});
</script>
";
    }

    // line 34
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        echo "    <form id=\"cancel_form\" method=\"POST\" action=\"";
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("plugin_yamato_subscription_admin_detail_cancel", ["id" => twig_get_attribute($this->env, $this->source, ($context["YamatoSubs"] ?? null), "id", [], "any", false, false, false, 35)]), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"_method\" value=\"PUT\">
        <input type=\"hidden\" name=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::TOKEN_NAME"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(twig_constant("Eccube\\Common\\Constant::TOKEN_NAME")), "html", null, true);
        echo "\">
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\"><span>";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yamatosubscription.admin.config.header1"), "html", null, true);
        echo "</span></div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-sm-4\">
                                    <h4>";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yamatosubscription.admin.detail.id"), "html", null, true);
        echo "：<span class=\"number\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["YamatoSubs"] ?? null), "id", [], "any", false, false, false, 46), "html", null, true);
        echo "</span></h4>
                                </div>
                                <div class=\"col-sm-8\">
                                    <p id=\"number_info_box__order_date\">";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yamatosubscription.admin.detail.last_subs_order_id"), "html", null, true);
        echo "：<a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_order_edit", ["id" => ($context["last_subs_order_id"] ?? null)]), "html", null, true);
        echo "\"><span class=\"number\">";
        echo twig_escape_filter($this->env, ($context["last_subs_order_id"] ?? null), "html", null, true);
        echo "</span></a></p>

                                    <p id=\"number_info_box__subs_month_period\">";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yamatosubscription.admin.detail.subs_month_period"), "html", null, true);
        echo "：";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["YamatoSubs"] ?? null), "subsMonthPeriod", [], "any", false, false, false, 51), "html", null, true);
        echo "ヶ月</p>

                                    <p id=\"number_info_box__credit_count\">";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yamatosubscription.admin.detail.credit_count"), "html", null, true);
        echo "：";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["YamatoSubs"] ?? null), "creditCount", [], "any", false, false, false, 53), "html", null, true);
        echo "</p>

                                    <p id=\"number_info_box__delivery_count\">";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yamatosubscription.admin.detail.delivery_count"), "html", null, true);
        echo "：";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["YamatoSubs"] ?? null), "deliveryCount", [], "any", false, false, false, 55), "html", null, true);
        echo "</p>

                                    <p id=\"number_info_box__cancelled_date\"><i class=\"fa fa-stop-circle-o fa-fw mr-1\" aria-hidden=\"true\"></i>";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yamatosubscription.admin.detail.cancelled_date"), "html", null, true);
        echo "：";
        (((null === twig_get_attribute($this->env, $this->source, ($context["YamatoSubs"] ?? null), "cancelledDate", [], "any", false, false, false, 57))) ? (print ("")) : (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["YamatoSubs"] ?? null), "cancelledDate", [], "any", false, false, false, 57), "Y/m/d H:i:s"), "html", null, true))));
        echo "</p>

                                    <p id=\"number_info_box__create_date\"><i class=\"fa fa-clock-o fa-fw mr-1\" aria-hidden=\"true\"></i>";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yamatosubscription.admin.detail.create_date"), "html", null, true);
        echo "：";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["YamatoSubs"] ?? null), "createDate", [], "any", false, false, false, 59), "Y/m/d H:i:s"), "html", null, true);
        echo "</p>

                                    <p id=\"number_info_box__update_date\"><i class=\"fa fa-refresh fa-fw mr-1\" aria-hidden=\"true\"></i>";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yamatosubscription.admin.detail.update_date"), "html", null, true);
        echo "：";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["YamatoSubs"] ?? null), "updateDate", [], "any", false, false, false, 61), "Y/m/d H:i:s"), "html", null, true);
        echo "</p>
                                </div>
                            </div>

                            ";
        // line 65
        if ((null === twig_get_attribute($this->env, $this->source, ($context["YamatoSubs"] ?? null), "cancelledDate", [], "any", false, false, false, 65))) {
            // line 66
            echo "                            <div class=\"row\">
                                <div class=\"col-12 text-center mt-2 mb-1\">
                                    <a class=\"btn btn-ec-regular\" id=\"change_contents_link\" href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("plugin_yamato_subscription_admin_detail_change_contents", ["id" => twig_get_attribute($this->env, $this->source, ($context["YamatoSubs"] ?? null), "id", [], "any", false, false, false, 68)]), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yamatosubscription.admin.detail.change_contents"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yamatosubscription.admin.detail.change_contents"), "html", null, true);
            echo "</a>
                                </div>
                                <div class=\"col-12 text-center mt-2 mb-1\">
                                    <button class=\"btn btn-ec-conversion ladda-button\" id=\"cancel_button\" type=\"submit\" data-style=\"expand-right\"><span class=\"ladda-label\">";
            // line 71
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yamatosubscription.admin.detail.stop_subscription"), "html", null, true);
            echo "</span><span class=\"ladda-spinner\"></span></button>
                                </div>
                            </div>
                            ";
        }
        // line 75
        echo "                        </div><!-- /.card-body -->
                    </div><!-- /.card.rounded -->
                </div>
            </div>
        </div><!-- /.c-contentsArea__cols -->

        <div class=\"c-conversionArea\">
            <div class=\"c-conversionArea__container\">
                <div class=\"row justify-content-between align-items-center\">
                    <div class=\"col-6\">
                        <div class=\"c-conversionArea__leftBlockItem\">
                            <a class=\"c-beseLink\"
                               href=\"";
        // line 87
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("plugin_yamato_subscription_admin_list");
        echo "\">
                                <i class=\"fa fa-backward\" aria-hidden=\"true\"></i>
                                <span>";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yamatosubscription.admin.detail.back"), "html", null, true);
        echo "</span>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-6\">
                    </div>
                </div>
            </div>
        </div><!-- /.c-contentsArea__cols -->
    </form>
";
    }

    public function getTemplateName()
    {
        return "@YamatoSubscription/admin/Detail/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 89,  213 => 87,  199 => 75,  192 => 71,  182 => 68,  178 => 66,  176 => 65,  167 => 61,  160 => 59,  153 => 57,  146 => 55,  139 => 53,  132 => 51,  123 => 49,  115 => 46,  108 => 42,  98 => 37,  92 => 35,  88 => 34,  75 => 24,  70 => 21,  66 => 20,  59 => 16,  52 => 15,  47 => 11,  45 => 13,  38 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@YamatoSubscription/admin/Detail/index.twig", "/var/www/html/eccube-4-new/app/Plugin/YamatoSubscription/Resource/template/admin/Detail/index.twig");
    }
}
