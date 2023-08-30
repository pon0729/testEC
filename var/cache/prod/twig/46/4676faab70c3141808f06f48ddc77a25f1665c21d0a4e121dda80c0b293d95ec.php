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

/* @ReferralCode/default/mypage_history_referral_code.twig */
class __TwigTemplate_bcd0267839f4288fc392b6c9b0700aed51b65d9ed39bf1a37904263b99806cb1 extends \Eccube\Twig\Template
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
    var \$contactArea = \$('.ec-orderConfirm');
    \$contactArea.before(\$('#mypage_history_referral_code_area'));
    \$('#mypage_history_referral_code_area_wrapper').remove();
});
</script>
<div id=\"mypage_history_referral_code_area_wrapper\" class=\"d-none\">
    <div id=\"mypage_history_referral_code_area\" class=\"ec-orderPayment\">
        <div class=\"ec-rectHeading\">
            <h2>";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("referral_code.shopping.index.referral_code_info"), "html", null, true);
        echo "</h2>
        </div>
        <div class=\"ec-input\">
            <p class=\"current-referral_code-status\"><strong class=\"text-danger\">";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("referral_code.shopping.index.current_referral_code", ["%referral_code%" => twig_get_attribute($this->env, $this->source, ($context["ReferralCodeOrder"] ?? null), "referralcode", [], "any", false, false, false, 14)]), "html", null, true);
        echo "</strong></p>
            ";
        // line 15
        if ((twig_get_attribute($this->env, $this->source, ($context["ReferralCodeOrder"] ?? null), "discount", [], "any", false, false, false, 15) > 0)) {
            // line 16
            echo "                <p class=\"current-referral-code-status\"><strong class=\"text-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("referral_code.shopping.index.current_referral_code_sub"), "html", null, true);
            echo "</strong></p>
            ";
        }
        // line 18
        echo "        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@ReferralCode/default/mypage_history_referral_code.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 18,  61 => 16,  59 => 15,  55 => 14,  49 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@ReferralCode/default/mypage_history_referral_code.twig", "/var/www/html/eccube-4-new/app/Plugin/ReferralCode/Resource/template/default/mypage_history_referral_code.twig");
    }
}
