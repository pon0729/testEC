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

/* @ReferralCode/admin/order_edit_referral_code.twig */
class __TwigTemplate_8d98e51846a4f74edf15f366464c8a5f58fb7a7bb77eba30b8027a16a600f355 extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ReferralCode/admin/order_edit_referral_code.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ReferralCode/admin/order_edit_referral_code.twig"));

        // line 1
        echo "<script>
\$(function() {
    \$('.c-contentsArea__cols .c-primaryCol').append(\$('#order_edit_referral_code_area'));
    \$('#order_edit_referral_code_area_wrapper').remove();
});
</script>
<div id=\"order_edit_referral_code_area_wrapper\" class=\"d-none\">
    <div id=\"order_edit_referral_code_area\" class=\"card rounded border-0 mb-4\">
        <div class=\"card-header\">
            <div class=\"row\">
                <div class=\"col-8\">
                    <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("referral_code.admin.order.tooltip.referral_code_info"), "html", null, true);
        echo "\"><span class=\"card-title\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("referral_code.admin.order.referral_code_info"), "html", null, true);
        echo "<i class=\"fa fa-question-circle fa-lg ml-1\"></i></span></div>
                </div>
                <div class=\"col-4 text-right\"><a data-toggle=\"collapse\" href=\"#referral_codeArea\" aria-expanded=\"false\" aria-controls=\"referral_codeArea\"><i class=\"fa fa-angle-up fa-lg\"></i></a></div>
            </div>
        </div>
        <div class=\"collapse ";
        // line 17
        echo "ec-cardCollapse\" id=\"referral_codeArea\">
            <div class=\"card-body row\">
                <label class=\"col-3\">";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("referral_code.admin.order.referral_code_label"), "html", null, true);
        echo "</label>
                <div class=\"col\">
                    ";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["referral_code"]) || array_key_exists("referral_code", $context) ? $context["referral_code"] : (function () { throw new RuntimeError('Variable "referral_code" does not exist.', 21, $this->source); })()), "html", null, true);
        echo "&nbsp;&nbsp;";
        echo twig_escape_filter($this->env, (isset($context["referral_code_name"]) || array_key_exists("referral_code_name", $context) ? $context["referral_code_name"] : (function () { throw new RuntimeError('Variable "referral_code_name" does not exist.', 21, $this->source); })()), "html", null, true);
        echo "
                </div>
            </div>
        </div>
    </div><!-- #order_edit_referral_code_area -->
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@ReferralCode/admin/order_edit_referral_code.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 21,  70 => 19,  66 => 17,  56 => 12,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script>
\$(function() {
    \$('.c-contentsArea__cols .c-primaryCol').append(\$('#order_edit_referral_code_area'));
    \$('#order_edit_referral_code_area_wrapper').remove();
});
</script>
<div id=\"order_edit_referral_code_area_wrapper\" class=\"d-none\">
    <div id=\"order_edit_referral_code_area\" class=\"card rounded border-0 mb-4\">
        <div class=\"card-header\">
            <div class=\"row\">
                <div class=\"col-8\">
                    <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"{{ 'referral_code.admin.order.tooltip.referral_code_info'|trans }}\"><span class=\"card-title\">{{ 'referral_code.admin.order.referral_code_info'|trans }}<i class=\"fa fa-question-circle fa-lg ml-1\"></i></span></div>
                </div>
                <div class=\"col-4 text-right\"><a data-toggle=\"collapse\" href=\"#referral_codeArea\" aria-expanded=\"false\" aria-controls=\"referral_codeArea\"><i class=\"fa fa-angle-up fa-lg\"></i></a></div>
            </div>
        </div>
        <div class=\"collapse {# show #}ec-cardCollapse\" id=\"referral_codeArea\">
            <div class=\"card-body row\">
                <label class=\"col-3\">{{ 'referral_code.admin.order.referral_code_label'|trans }}</label>
                <div class=\"col\">
                    {{ referral_code }}&nbsp;&nbsp;{{ referral_code_name }}
                </div>
            </div>
        </div>
    </div><!-- #order_edit_referral_code_area -->
</div>
", "@ReferralCode/admin/order_edit_referral_code.twig", "/var/www/html/eccube-4-new/app/Plugin/ReferralCode/Resource/template/admin/order_edit_referral_code.twig");
    }
}
