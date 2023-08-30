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

/* @ReferralCode/default/referral_code_shopping_item_confirm.twig */
class __TwigTemplate_66709ba70bcb3a8e99550b57c53da14689197b8815219bfa5a5b2165df05c5b3 extends \Eccube\Twig\Template
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
.current-referral-code-status {
    margin-bottom: 0.6em;
}
</style>
<script>
\$(function() {
    var \$contactArea = \$('.ec-orderDelivery');
    \$contactArea.before(\$('#referral_code_shopping_item_confirm_area'));
    \$('#referral_code_shopping_item_confirm_area_wrapper').remove();
});
</script>
<div id=\"referral_code_shopping_item_confirm_area_wrapper\" class=\"d-none\">
    <div id=\"referral_code_shopping_item_confirm_area\" class=\"ec-orderPayment\">
        <div class=\"ec-rectHeading\">
            <h2>";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("referral_code.shopping.index.referral_code_info"), "html", null, true);
        echo "</h2>
        </div>
        <div class=\"ec-input\">
            <p class=\"current-referral-code-status\"><strong class=\"text-danger\">";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("referral_code.shopping.index.current_referral_code", ["%referral_code%" => twig_get_attribute($this->env, $this->source, ($context["ReferralCodeOrder"] ?? null), "referralCode", [], "any", false, false, false, 19)]), "html", null, true);
        echo "</strong></p>
            ";
        // line 20
        if ((twig_get_attribute($this->env, $this->source, ($context["ReferralCodeOrder"] ?? null), "discount", [], "any", false, false, false, 20) > 0)) {
            // line 21
            echo "                <p class=\"current-referral-code-status\"><strong class=\"text-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("referral_code.shopping.index.current_referral_code_sub"), "html", null, true);
            echo "</strong></p>
            ";
        }
        // line 23
        echo "        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@ReferralCode/default/referral_code_shopping_item_confirm.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 23,  66 => 21,  64 => 20,  60 => 19,  54 => 16,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@ReferralCode/default/referral_code_shopping_item_confirm.twig", "/var/www/html/eccube-4-new/app/Plugin/ReferralCode/Resource/template/default/referral_code_shopping_item_confirm.twig");
    }
}
