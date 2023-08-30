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
class __TwigTemplate_910519c386344da5b7a54fa76b8bc133fae1602b83df92daa73c6f4edc151f09 extends \Eccube\Twig\Template
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
        echo twig_escape_filter($this->env, ($context["referral_code"] ?? null), "html", null, true);
        echo "&nbsp;&nbsp;";
        echo twig_escape_filter($this->env, ($context["referral_code_name"] ?? null), "html", null, true);
        echo "
                </div>
            </div>
        </div>
    </div><!-- #order_edit_referral_code_area -->
</div>
";
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
        return array (  69 => 21,  64 => 19,  60 => 17,  50 => 12,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@ReferralCode/admin/order_edit_referral_code.twig", "/var/www/html/eccube-4-new/app/Plugin/ReferralCode/Resource/template/admin/order_edit_referral_code.twig");
    }
}
