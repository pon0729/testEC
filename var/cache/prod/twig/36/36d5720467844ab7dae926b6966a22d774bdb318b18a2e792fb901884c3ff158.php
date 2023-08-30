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

/* @ReferralCode/admin/product_prototype.twig */
class __TwigTemplate_f90bf0baf9f11a1e103df6181fbac47a87f25b3891243e20f34b7665e7bfbf20 extends \Eccube\Twig\Template
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
        // line 11
        echo "<tr>
";
        // line 19
        echo "    <input type=\"hidden\" id=\"referral_code_ReferralCodeDetails___name___referral_code_type\" name=\"referral_code[ReferralCodeDetails][__name__][referral_code_type]\" />
    <input type=\"hidden\" id=\"referral_code_ReferralCodeDetails___name___Product\" name=\"referral_code[ReferralCodeDetails][__name__][Product]\" />
    <input type=\"hidden\" id=\"referral_code_ReferralCodeDetails___name___Category\" name=\"referral_code[ReferralCodeDetails][__name__][Category]\" />
    <td class=\"align-middle w-25 pl-3\">
        <p class=\"mb-0 font-weight-bold\">
            <a href=\"";
        // line 24
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product_product_edit", ["id" => 99999999999]);
        echo "\" target=\"_blank\">__product_name__</a>
        </p>
    </td>
    <td class=\"align-middle text-right pr-3\">
        <div class=\"row justify-content-end\">
            <div class=\"col-auto text-center\">
                <div class=\"d-inline-block mr-3\" data-tooltip=\"true\"
                     data-placement=\"top\" title=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
        echo "\">
                    <a class=\"btn btn-ec-actionIcon\" data-toggle=\"modal\" data-target=\"#delete_product_modal___name__\">
                        <i class=\"fa fa-close fa-lg text-secondary\" aria-hidden=\"true\"></i>
                    </a>
                </div>
                <!-- 明細の削除確認モーダル -->
                <div class=\"modal fade\" id=\"delete_product_modal___name__\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"delete_product_modal___name__\" aria-hidden=\"true\">
                    <div class=\"modal-dialog\" role=\"document\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <h5 class=\"modal-title font-weight-bold\">";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__title"), "html", null, true);
        echo "</h5>
                                <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">×</span>
                                </button>
                            </div>
                            <div class=\"modal-body text-left\">
                                <p class=\"text-left\">";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("referral_code.admin.delete_item__confirm_message", ["%name%" => "__product_name__"]), "html", null, true);
        echo "</p>
                            </div>
                            <div class=\"modal-footer\">
                                <button class=\"btn btn-ec-sub\" type=\"button\" data-dismiss=\"modal\">";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
        echo "</button>
                                <a href=\"#delete_product_modal___name__\" class=\"btn delete-product-row btn-ec-delete\" data-row-index=\"__name__\">";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
        echo "</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .row.justify-content-end -->
    </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "@ReferralCode/admin/product_prototype.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 51,  85 => 50,  79 => 47,  70 => 41,  57 => 31,  47 => 24,  40 => 19,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@ReferralCode/admin/product_prototype.twig", "/var/www/html/eccube-4-new/app/Plugin/ReferralCode/Resource/template/admin/product_prototype.twig");
    }
}
