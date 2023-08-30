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

/* @ReferralCode/default/referral_code_shopping_item.twig */
class __TwigTemplate_3c370c3a4b741307aa552500a8e339a3b82dc018e349946c0752bbd0f164c49c extends \Eccube\Twig\Template
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
    var \$messageInputArea = \$('.ec-orderRole__detail .ec-orderDelivery');
    \$messageInputArea.before(\$('#referral_code_shopping_item_area'));
    \$('#referral_code_shopping_item_area_wrapper').remove();
});
</script>
<div id=\"referral_code_shopping_item_area_wrapper\" class=\"d-none\">
    <div id=\"referral_code_shopping_item_area\" class=\"ec-orderPayment\">
        <div class=\"ec-rectHeading\">
            <h2>";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("referral_code.shopping.index.referral_code_info"), "html", null, true);
        echo "</h2>
        </div>
        <div class=\"ec-input\">
            ";
        // line 19
        if (($context["ReferralCodeOrder"] ?? null)) {
            // line 20
            echo "                <p class=\"current-referral-code-status\"><strong class=\"text-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("referral_code.shopping.index.current_referral_code", ["%referral_code%" => twig_get_attribute($this->env, $this->source, ($context["ReferralCodeOrder"] ?? null), "referralCode", [], "any", false, false, false, 20)]), "html", null, true);
            echo "</strong></p>
                ";
            // line 21
            if ((twig_get_attribute($this->env, $this->source, ($context["ReferralCodeOrder"] ?? null), "discount", [], "any", false, false, false, 21) > 0)) {
                // line 22
                echo "                    <p class=\"current-referral-code-status\"><strong class=\"text-danger\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("referral_code.shopping.index.current_referral_code_sub"), "html", null, true);
                echo "</strong></p>
                ";
            }
            // line 24
            echo "                ";
            if ( !($context["referral_code_is_fixed"] ?? null)) {
                // line 25
                echo "                    <div>
                        <button type=\"button\" class=\"ec-inlineBtn\" data-trigger=\"click\" data-path=\"";
                // line 26
                echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("plugin_referral_code_shopping");
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("referral_code.shopping.index.change_referral_code_button"), "html", null, true);
                echo "</button>
                    </div>
                ";
            }
            // line 29
            echo "            ";
        } elseif (($context["user_associated_referral_code"] ?? null)) {
            // line 30
            echo "                ";
            // line 31
            echo "                <p class=\"current-referral-code-status\"><strong class=\"text-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("referral_code.shopping.index.current_referral_code", ["%referral_code%" => ($context["user_associated_referral_code"] ?? null)]), "html", null, true);
            echo "</strong></p>
            ";
        } else {
            // line 33
            echo "                <p class=\"current-referral-code-status\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("referral_code.shopping.index.please_input_referral_code"), "html", null, true);
            echo "</p>
                <div>
                    <button type=\"button\" class=\"ec-inlineBtn\" data-trigger=\"click\" data-path=\"";
            // line 35
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("plugin_referral_code_shopping");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("referral_code.shopping.index.input_referral_code_button"), "html", null, true);
            echo "</button>
                </div>
            ";
        }
        // line 38
        echo "        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@ReferralCode/default/referral_code_shopping_item.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 38,  106 => 35,  100 => 33,  94 => 31,  92 => 30,  89 => 29,  81 => 26,  78 => 25,  75 => 24,  69 => 22,  67 => 21,  62 => 20,  60 => 19,  54 => 16,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@ReferralCode/default/referral_code_shopping_item.twig", "/var/www/html/eccube-4-new/app/Plugin/ReferralCode/Resource/template/default/referral_code_shopping_item.twig");
    }
}
