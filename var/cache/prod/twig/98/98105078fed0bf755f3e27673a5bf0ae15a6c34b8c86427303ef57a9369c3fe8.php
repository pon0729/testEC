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

/* @YamatoSubscription/admin/index.twig */
class __TwigTemplate_224ce568f5d3b6f186a5c1fd133b1aade56447435b5192dd97ef0203d01ee8ba extends \Eccube\Twig\Template
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
        $context["menus"] = [0 => "order", 1 => "plugin_yamato_subscription_admin_list"];
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@YamatoSubscription/admin/index.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yamatosubscription.admin.list.title"), "html", null, true);
    }

    // line 16
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yamatosubscription.admin.list.sub_title"), "html", null, true);
    }

    // line 20
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "<style type=\"text/css\">
#admin_search_yamato_order_filter > .form-check{
\tpadding-right: 1rem;
\tdisplay: inline-block !important;
}
</style>
";
    }

    // line 29
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "<script>
\$(function() {
    \$('#bulk_credit_button').on('click', function (e) {
        if (!confirm('";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yamatosubscription.admin.list.confirm_recredit"), "html", null, true);
        echo "')) {
            Ladda.stopAll();
            e.preventDefault();
            return false;
        }
    });
});

</script>
";
    }

    // line 44
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        echo "<!--検索条件設定テーブルここから-->
    <div class=\"c-outsideBlock\">
        <form name=\"search_form\" id=\"search_form\" method=\"POST\" action=\"";
        // line 47
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("plugin_yamato_subscription_admin_list_page");
        echo "\">
            <div class=\"c-outsideBlock__contents\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "_token", [], "any", false, false, false, 51), 'widget');
        echo "
                        <div class=\"form-row\">
                            <div class=\"form-group col-12\">
                                <label class=\"col-form-label\">";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yamatosubscription.admin.list.filter"), "html", null, true);
        echo "</label>
                                <div id=\"admin_search_order_status\">
                                    ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "filter", [], "any", false, false, false, 56), 'widget');
        echo "
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"c-outsideBlock__contents\">
                <div class=\"row\">
                    <div class=\"mb-4\">
                        <div class=\"col-12\">
                            <button class=\"btn btn-ec-conversion px-5\" type=\"submit\" id=\"search_submit\">";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search"), "html", null, true);
        echo "</button>
                            ";
        // line 68
        if (($context["pagination"] ?? null)) {
            // line 69
            echo "                                <span class=\"font-weight-bold ml-2\" id=\"search_total_count\">";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_result", ["%count%" => twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "totalItemCount", [], "any", false, false, false, 69)]);
            echo "</span>
                            ";
        }
        // line 71
        echo "                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
<!--検索条件設定テーブルここまで-->

<div class=\"c-contentsArea__cols\">
    <div class=\"c-contentsArea__primaryCol\">
        <div class=\"c-primaryCol\">
            ";
        // line 82
        if ((($context["pagination"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "totalItemCount", [], "any", false, false, false, 82))) {
            // line 83
            echo "                <div class=\"row justify-content-between mb-2\">
                    <div class=\"col-6\">
                    </div>
                    <div class=\"col-6 text-right\">
                        <div class=\"d-inline-block\">
                            <form id=\"bulk_credit_form\" action=\"";
            // line 88
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("plugin_yamato_subscription_admin_bulk_credit");
            echo "\" method=\"POST\">
                                <button class=\"btn btn-ec-conversion ladda-button\" id=\"bulk_credit_button\" type=\"submit\" data-style=\"expand-right\"><span class=\"ladda-label\">";
            // line 89
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yamatosubscription.admin.list.bulk_credit"), "html", null, true);
            echo "</span><span class=\"ladda-spinner\"></span></button>
                            </form>
                        </div>
                        <div class=\"d-inline-block\">
                            <select class=\"custom-select\" onchange=\"location = this.value;\">
                                ";
            // line 94
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pageMaxis"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["pageMax"]) {
                // line 95
                echo "                                    <option ";
                if ((twig_get_attribute($this->env, $this->source, $context["pageMax"], "name", [], "any", false, false, false, 95) == ($context["page_count"] ?? null))) {
                    echo " selected ";
                }
                // line 96
                echo "                                            value=\"";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("plugin_yamato_subscription_admin_list_page", ["page_no" => 1, "page_count" => twig_get_attribute($this->env, $this->source, $context["pageMax"], "name", [], "any", false, false, false, 96)]), "html", null, true);
                echo "\">
                                        ";
                // line 97
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.count", ["%count%" => twig_get_attribute($this->env, $this->source, $context["pageMax"], "name", [], "any", false, false, false, 97)]), "html", null, true);
                echo "</option>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pageMax'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            echo "                            </select>
                        </div>
                        <div class=\"d-inline-block\">
                            <div class=\"btn-group\" role=\"group\">
                                <div class=\"btn-group\" role=\"group\">
                                    <button type=\"button\" class=\"btn btn-ec-regular\" data-toggle=\"dropdown\" id=\"csvDownloadDropDown\">
                                        <i class=\"fa fa-cloud-download mr-1 text-secondary\"></i>
                                        <span>";
            // line 106
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.csv_download"), "html", null, true);
            echo "</span>
                                    </button>
                                    <div class=\"dropdown-menu\">
                                        <a class=\"dropdown-item\" href=\"";
            // line 109
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("plugin_yamato_subscription_admin_export_order");
            echo "\" id=\"orderCsvDownload\">
                                            ";
            // line 110
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_csv"), "html", null, true);
            echo "
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"card rounded border-0 mb-4 d-block\">
                    <div class=\"card-body p-0\">
                        <table class=\"table table-sm\" id=\"search_result\">
                            <thead>
                                <tr>
                                    <th class=\"border-top-0 pt-2 pb-2 text-center\">";
            // line 123
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yamatosubscription.admin.list.table_header.id"), "html", null, true);
            echo "</th>
                                    <th class=\"border-top-0 pt-2 pb-2 text-center\">";
            // line 124
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yamatosubscription.admin.list.table_header.subs_month_period"), "html", null, true);
            echo "</th>
                                    <th class=\"border-top-0 pt-2 pb-2 text-center\">";
            // line 125
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yamatosubscription.admin.list.table_header.order_date"), "html", null, true);
            echo "</th>
                                    <th class=\"border-top-0 pt-2 pb-2 text-center\">";
            // line 126
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yamatosubscription.admin.list.table_header.order_id"), "html", null, true);
            echo "</th>
                                    <th class=\"border-top-0 pt-2 pb-2 text-center\">";
            // line 127
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yamatosubscription.admin.list.table_header.customer_name"), "html", null, true);
            echo "</th>
                                    <th class=\"border-top-0 pt-2 pb-2 text-center\">";
            // line 128
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yamatosubscription.admin.list.table_header.payment_method"), "html", null, true);
            echo "</th>
                                    <th class=\"border-top-0 pt-2 pb-2 text-center\">";
            // line 129
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yamatosubscription.admin.list.table_header.payment_total"), "html", null, true);
            echo "</th>
                                    <th class=\"border-top-0 pt-2 pb-2 text-center\">";
            // line 130
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yamatosubscription.admin.list.table_header.commit_date"), "html", null, true);
            echo "</th>
                                    <th class=\"border-top-0 pt-2 pb-2 text-center\">";
            // line 131
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yamatosubscription.admin.list.table_header.status_name"), "html", null, true);
            echo "</th>
                                </tr>
                            </thead>
                            <tbody>
                            ";
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["YamatoSubsHistory"]) {
                // line 136
                echo "                                <tr class=\"";
                if ((null === twig_get_attribute($this->env, $this->source, $context["YamatoSubsHistory"], "cancelled_date", [], "any", false, false, false, 136))) {
                    echo "active";
                } else {
                    echo "in-active";
                }
                echo "\">
                                    <td class=\"align-middle pl-4 text-left\">
                                        <a href=\"";
                // line 138
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("plugin_yamato_subscription_admin_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["YamatoSubsHistory"], "subs_id", [], "any", false, false, false, 138)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["YamatoSubsHistory"], "subs_id", [], "any", false, false, false, 138), "html", null, true);
                echo "</a>
                                    </td>
                                    <td class=\"align-middle pl-4 text-left\">
                                        ";
                // line 141
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["YamatoSubsHistory"], "subs_month_period", [], "any", false, false, false, 141), "html", null, true);
                echo "ヶ月
                                    </td>
                                    <td class=\"align-middle text-center\">
                                        ";
                // line 144
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getDateFormatFilter(twig_get_attribute($this->env, $this->source, $context["YamatoSubsHistory"], "order_date", [], "any", false, false, false, 144)), "html", null, true);
                echo "
                                    </td>
                                    <td class=\"align-middle pl-4 text-left\">
                                        <a href=\"";
                // line 147
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_order_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["YamatoSubsHistory"], "order_id", [], "any", false, false, false, 147)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["YamatoSubsHistory"], "order_id", [], "any", false, false, false, 147), "html", null, true);
                echo "</a>
                                    </td>
                                    <td class=\"align-middle pl-4 text-left\">
                                        ";
                // line 150
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["YamatoSubsHistory"], "customer_name", [], "any", false, false, false, 150), "html", null, true);
                echo "
                                    </td>
                                    <td class=\"align-middle pl-4 text-left\">
                                        ";
                // line 153
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["YamatoSubsHistory"], "payment_method", [], "any", false, false, false, 153), "html", null, true);
                echo "
                                    </td>
                                    <td class=\"align-middle pr-5 text-right\">
                                        ";
                // line 156
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["YamatoSubsHistory"], "payment_total", [], "any", false, false, false, 156)), "html", null, true);
                echo "
                                    </td>
                                    <td class=\"align-middle text-center\">
                                        ";
                // line 159
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getDateFormatFilter(twig_get_attribute($this->env, $this->source, $context["YamatoSubsHistory"], "shipping_date", [], "any", false, false, false, 159)), "html", null, true);
                echo "
                                    </td>
                                    <td class=\"align-middle pl-4 text-left\">
                                        ";
                // line 162
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["YamatoSubsHistory"], "status_name", [], "any", false, false, false, 162), "html", null, true);
                echo "
                                    </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['YamatoSubsHistory'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 166
            echo "                            </tbody>
                        </table>
                    </div>
                    <div class=\"row justify-content-md-center mb-4\">
                        ";
            // line 170
            if ((twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "totalItemCount", [], "any", false, false, false, 170) > 0)) {
                // line 171
                echo "                            ";
                $this->loadTemplate("@admin/pager.twig", "@YamatoSubscription/admin/index.twig", 171)->display(twig_array_merge($context, ["pages" => twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "paginationData", [], "any", false, false, false, 171), "routes" => "plugin_yamato_subscription_admin_list_page"]));
                // line 172
                echo "                        ";
            }
            // line 173
            echo "                    </div>
                </div>
            ";
            // line 184
            echo "            ";
        } else {
            // line 185
            echo "                ";
            // line 186
            echo "                <div class=\"card rounded border-0\">
                    <div class=\"card-body p-4\">
                        <div class=\"text-center text-muted mb-4 h5\">";
            // line 188
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_no_result"), "html", null, true);
            echo "</div>
                        ";
            // line 193
            echo "                    </div>
                </div>
            ";
        }
        // line 196
        echo "        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@YamatoSubscription/admin/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  398 => 196,  393 => 193,  389 => 188,  385 => 186,  383 => 185,  380 => 184,  376 => 173,  373 => 172,  370 => 171,  368 => 170,  362 => 166,  352 => 162,  346 => 159,  340 => 156,  334 => 153,  328 => 150,  320 => 147,  314 => 144,  308 => 141,  300 => 138,  290 => 136,  286 => 135,  279 => 131,  275 => 130,  271 => 129,  267 => 128,  263 => 127,  259 => 126,  255 => 125,  251 => 124,  247 => 123,  231 => 110,  227 => 109,  221 => 106,  212 => 99,  204 => 97,  199 => 96,  194 => 95,  190 => 94,  182 => 89,  178 => 88,  171 => 83,  169 => 82,  156 => 71,  150 => 69,  148 => 68,  144 => 67,  130 => 56,  125 => 54,  119 => 51,  112 => 47,  108 => 45,  104 => 44,  90 => 33,  85 => 30,  81 => 29,  71 => 21,  67 => 20,  60 => 16,  53 => 15,  48 => 11,  46 => 13,  39 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@YamatoSubscription/admin/index.twig", "/var/www/html/eccube-4-new/app/Plugin/YamatoSubscription/Resource/template/admin/index.twig");
    }
}
