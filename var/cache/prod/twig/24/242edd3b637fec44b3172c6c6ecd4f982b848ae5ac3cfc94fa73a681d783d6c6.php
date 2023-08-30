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

/* @ReferralCode/admin/index.twig */
class __TwigTemplate_1e0900f9f6430a55abec919e416c34d029ae9821e1ec39e9fc51e1b1e4e52fd9 extends \Eccube\Twig\Template
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
            'stylesheet' => [$this, 'block_stylesheet'],
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
        $context["menus"] = [0 => "order", 1 => "plugin_referral_code_admin_list"];
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@ReferralCode/admin/index.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("referral_code.admin.referral_code_list.title"), "html", null, true);
    }

    // line 16
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("referral_code.admin.referral_code_list.sub_title"), "html", null, true);
    }

    // line 20
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "<style>
.table .in-active {
    opacity: 0.7;
}
</style>
";
    }

    // line 28
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 31
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "<!--検索条件設定テーブルここから-->
<!--検索条件設定テーブルここまで-->
<div class=\"c-contentsArea__cols\">
    <div class=\"c-contentsArea__primaryCol\">
        <div class=\"c-primaryCol\">
            ";
        // line 37
        if ((($context["pagination"] ?? null) && (($context["totalItemCount"] ?? null) > 0))) {
            // line 38
            echo "                <div class=\"row justify-content-between mb-2\">
                    <div class=\"col-7\">
                        <div class=\"c-outsideBlock__contents\">
                            <div class=\"row\">
                                <div class=\"mb-4\">
                                    <div class=\"col-12\">
                                        ";
            // line 44
            if (($context["pagination"] ?? null)) {
                // line 45
                echo "                                            <span class=\"font-weight-bold ml-2\" id=\"search_total_count\">";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_result", ["%count%" => ($context["totalItemCount"] ?? null)]);
                echo "</span>
                                        ";
            }
            // line 47
            echo "                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-5 text-right\">
                        ";
            // line 64
            echo "                    </div>
                </div>

                <div class=\"row justify-content-between mb-2\">
                    <div class=\"col-7\">
                    </div>
                    <div class=\"col-5 text-right\">
                        <div class=\"d-inline-block\">
                            <a id=\"download_button\" class=\"btn btn-ec-regular pull-right\" href=\"";
            // line 72
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("plugin_referral_code_admin_download_referral_code_orders_csv");
            echo "\">
                                <i class=\"fa fa-cloud-download mr-1 text-secondary\"></i>
                                <span>";
            // line 74
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("referral_code.admin.referral_code_list.download_referral_code_orders_csv"), "html", null, true);
            echo "</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"card rounded border-0 mb-4 d-block\">
                    <div class=\"card-body p-0\">
                        <table class=\"table table-sm\" id=\"search_result\">
                            <thead>
                                <tr>
                                    <th class=\"border-top-0 pt-2 pb-2 text-center\">";
            // line 84
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("referral_code.admin.referral_code_list.table_header.id"), "html", null, true);
            echo "</th>
                                    <th class=\"border-top-0 pt-2 pb-2 text-center\">";
            // line 85
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("referral_code.admin.referral_code_list.table_header.referral_code"), "html", null, true);
            echo "</th>
                                    <th class=\"border-top-0 pt-2 pb-2 text-center\">";
            // line 86
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("referral_code.admin.referral_code_list.table_header.referral_code_name"), "html", null, true);
            echo "</th>
                                    <th class=\"border-top-0 pt-2 pb-2 text-center\">";
            // line 87
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("referral_code.admin.referral_code_list.table_header.referral_code_type"), "html", null, true);
            echo "</th>
                                    <th class=\"border-top-0 pt-2 pb-2 text-center\">";
            // line 88
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("referral_code.admin.referral_code_list.table_header.referral_code_member"), "html", null, true);
            echo "</th>
                                    <th class=\"border-top-0 pt-2 pb-2 text-center\">";
            // line 89
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("referral_code.admin.referral_code_list.table_header.discount"), "html", null, true);
            echo "</th>
                                    <th class=\"border-top-0 pt-2 pb-2 text-center\">";
            // line 90
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("referral_code.admin.referral_code_list.table_header.remaining_use_time"), "html", null, true);
            echo "</th>
                                    <th class=\"border-top-0 pt-2 pb-2 text-center\">";
            // line 91
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("referral_code.admin.referral_code_list.table_header.referral_code_lower_limit"), "html", null, true);
            echo "</th>
                                    <th class=\"border-top-0 pt-2 pb-2 text-center\">";
            // line 92
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("referral_code.admin.referral_code_list.table_header.available_date"), "html", null, true);
            echo "</th>
                                    <th class=\"border-top-0 pt-2 pb-2 text-center\">";
            // line 93
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("referral_code.admin.referral_code_list.table_header.edit"), "html", null, true);
            echo "</th>
                                    <th class=\"border-top-0 pt-2 pb-2 text-center\">";
            // line 94
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("referral_code.admin.referral_code_list.table_header.enable_toggle"), "html", null, true);
            echo "</th>
                                    <th class=\"border-top-0 pt-2 pb-2 text-center\">";
            // line 95
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("referral_code.admin.referral_code_list.table_header.delete"), "html", null, true);
            echo "</th>
                                </tr>
                            </thead>
                            <tbody>
                            ";
            // line 99
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["ReferralCode"]) {
                // line 100
                echo "                                <tr class=\"";
                if (twig_get_attribute($this->env, $this->source, $context["ReferralCode"], "isEnable", [], "any", false, false, false, 100)) {
                    echo "active";
                } else {
                    echo "in-active";
                }
                echo "\">
                                    <td class=\"align-middle pl-4 text-left\">
                                        ";
                // line 102
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ReferralCode"], "id", [], "any", false, false, false, 102), "html", null, true);
                echo "
                                    </td>
                                    <td class=\"align-middle pl-4 text-left\">
                                        ";
                // line 105
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ReferralCode"], "referralCode", [], "any", false, false, false, 105), "html", null, true);
                echo "
                                    </td>
                                    <td class=\"align-middle pl-4 text-left\">
                                        ";
                // line 108
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ReferralCode"], "referralCodeName", [], "any", false, false, false, 108), "html", null, true);
                echo "
                                    </td>
                                    <td class=\"align-middle pl-4 text-left\">
                                        ";
                // line 111
                if ((twig_get_attribute($this->env, $this->source, $context["ReferralCode"], "referralCodeType", [], "any", false, false, false, 111) == twig_constant("Plugin\\ReferralCode\\Entity\\ReferralCode::PRODUCT"))) {
                    // line 112
                    echo "                                        商品
                                        ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 113
$context["ReferralCode"], "referralCodeType", [], "any", false, false, false, 113) == twig_constant("Plugin\\ReferralCode\\Entity\\ReferralCode::CATEGORY"))) {
                    // line 114
                    echo "                                        カテゴリ
                                        ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 115
$context["ReferralCode"], "referralCodeType", [], "any", false, false, false, 115) == twig_constant("Plugin\\ReferralCode\\Entity\\ReferralCode::ALL"))) {
                    // line 116
                    echo "                                        全商品
                                        ";
                }
                // line 118
                echo "                                    </td>
                                    <td class=\"align-middle pl-4 text-left\">
                                        ";
                // line 120
                if ((twig_get_attribute($this->env, $this->source, $context["ReferralCode"], "referralCodeMember", [], "any", false, false, false, 120) == twig_constant("Eccube\\Common\\Constant::ENABLED"))) {
                    // line 121
                    echo "                                        YES
                                        ";
                } else {
                    // line 123
                    echo "                                        NO
                                        ";
                }
                // line 125
                echo "                                    </td>
                                    <td class=\"align-middle pl-4 text-left\">
                                        ";
                // line 127
                if ((twig_get_attribute($this->env, $this->source, $context["ReferralCode"], "discountType", [], "any", false, false, false, 127) == twig_constant("Plugin\\ReferralCode\\Entity\\ReferralCode::DISCOUNT_PRICE"))) {
                    // line 128
                    echo "                                        ";
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["ReferralCode"], "discountPrice", [], "any", false, false, false, 128)), "html", null, true);
                    echo "
                                        ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 129
$context["ReferralCode"], "discountType", [], "any", false, false, false, 129) == twig_constant("Plugin\\ReferralCode\\Entity\\ReferralCode::DISCOUNT_RATE"))) {
                    // line 130
                    echo "                                        ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ReferralCode"], "discountRate", [], "any", false, false, false, 130), "html", null, true);
                    echo " %
                                        ";
                } else {
                    // line 132
                    echo "                                        ";
                }
                // line 133
                echo "                                    </td>
                                    <td class=\"align-middle pl-4 text-left\">
                                        ";
                // line 135
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ReferralCode"], "referralCodeUseTime", [], "any", false, false, false, 135)), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ReferralCode"], "referralCodeRelease", [], "any", false, false, false, 135)), "html", null, true);
                echo "
                                    </td>
                                    <td class=\"align-middle pl-4 text-left\">
                                        ";
                // line 138
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["ReferralCode"], "referralCodeLowerLimit", [], "any", false, false, false, 138)), "html", null, true);
                echo "
                                    </td>
                                    <td class=\"align-middle text-center\">
                                        ";
                // line 141
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getDateFormatFilter(twig_get_attribute($this->env, $this->source, $context["ReferralCode"], "availableFromDate", [], "any", false, false, false, 141)), "html", null, true);
                echo " ～ ";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getDateFormatFilter(twig_get_attribute($this->env, $this->source, $context["ReferralCode"], "availableToDate", [], "any", false, false, false, 141)), "html", null, true);
                echo "
                                    </td>
                                    <td class=\"align-middle text-center\">
                                        <a href=\"";
                // line 144
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("plugin_referral_code_admin_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["ReferralCode"], "id", [], "any", false, false, false, 144)]), "html", null, true);
                echo "\">編集</a>
                                    </td>
                                    <td class=\"align-middle text-center\">
                                        <a href=\"";
                // line 147
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("plugin_referral_code_admin_enable", ["id" => twig_get_attribute($this->env, $this->source, $context["ReferralCode"], "id", [], "any", false, false, false, 147)]), "html", null, true);
                echo "\">
                                            ";
                // line 148
                if (twig_get_attribute($this->env, $this->source, $context["ReferralCode"], "isEnable", [], "any", false, false, false, 148)) {
                    // line 149
                    echo "                                            有効
                                            ";
                } else {
                    // line 151
                    echo "                                            無効
                                            ";
                }
                // line 153
                echo "                                        </a>
                                    </td>
                                    <td class=\"align-middle text-center\">
                                        <a href=\"";
                // line 156
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("plugin_referral_code_admin_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["ReferralCode"], "id", [], "any", false, false, false, 156)]), "html", null, true);
                echo "\" ";
                echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
                echo " data-method=\"delete\" data-message=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("referral_code.admin.referral_code_list.delete_confirm_message"), "html", null, true);
                echo "\">削除</a>
                                    </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ReferralCode'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 160
            echo "                            </tbody>
                        </table>
                    </div>
                    ";
            // line 170
            echo "                </div>
            ";
            // line 180
            echo "            ";
        } else {
            // line 181
            echo "                ";
            // line 182
            echo "                <div class=\"card rounded border-0\">
                    <div class=\"card-body p-4\">
                        <div class=\"text-center text-muted mb-4 h5\">";
            // line 184
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_no_result"), "html", null, true);
            echo "</div>
                        ";
            // line 189
            echo "                    </div>
                </div>
            ";
        }
        // line 192
        echo "        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@ReferralCode/admin/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  377 => 192,  372 => 189,  368 => 184,  364 => 182,  362 => 181,  359 => 180,  356 => 170,  351 => 160,  337 => 156,  332 => 153,  328 => 151,  324 => 149,  322 => 148,  318 => 147,  312 => 144,  304 => 141,  298 => 138,  290 => 135,  286 => 133,  283 => 132,  277 => 130,  275 => 129,  270 => 128,  268 => 127,  264 => 125,  260 => 123,  256 => 121,  254 => 120,  250 => 118,  246 => 116,  244 => 115,  241 => 114,  239 => 113,  236 => 112,  234 => 111,  228 => 108,  222 => 105,  216 => 102,  206 => 100,  202 => 99,  195 => 95,  191 => 94,  187 => 93,  183 => 92,  179 => 91,  175 => 90,  171 => 89,  167 => 88,  163 => 87,  159 => 86,  155 => 85,  151 => 84,  138 => 74,  133 => 72,  123 => 64,  115 => 47,  109 => 45,  107 => 44,  99 => 38,  97 => 37,  90 => 32,  86 => 31,  80 => 28,  71 => 21,  67 => 20,  60 => 16,  53 => 15,  48 => 11,  46 => 13,  39 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@ReferralCode/admin/index.twig", "/var/www/html/eccube-4-new/app/Plugin/ReferralCode/Resource/template/admin/index.twig");
    }
}
