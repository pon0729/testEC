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

/* @YamatoPayment4/admin/payment_status.twig */
class __TwigTemplate_7bf0e1bc40ea5b732629f2449ec2ebf69db005c782ed6d7314ac439859f83f04 extends \Eccube\Twig\Template
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
        $context["menus"] = [0 => "order", 1 => "yamato_payment4_admin_payment_status"];
        // line 18
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["searchForm"] ?? null), [0 => "@admin/Form/bootstrap_4_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@YamatoPayment4/admin/payment_status.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yamato_payment.admin.payment_status.title"), "html", null, true);
    }

    // line 16
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yamato_payment.admin.payment_status.sub_title"), "html", null, true);
    }

    // line 20
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 23
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "
    <script>
        \$(function () {
            if (\$('[type=\"date\"]').prop('type') != 'date') {
                // input type属性でdateが利用できるかどうか(カレンダー表示できないブラウザ対応)
                \$.when(
                    \$.getScript(\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/moment.min.js", "admin"), "html", null, true);
        echo "\"),
                    \$.getScript(\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/moment-with-locales.min.js", "admin"), "html", null, true);
        echo "\"),
                    \$.getScript(\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/tempusdominus-bootstrap-4.min.js", "admin"), "html", null, true);
        echo "\")
                ).done(function() {
                    \$('input[id\$=_date_starts][type!=text]').datetimepicker({
                        locale: '";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["eccube_config"] ?? null), "locale", [], "any", false, false, false, 35), "html", null, true);
        echo "',
                        format: 'YYYY-MM-DD',
                        useCurrent: false,
                        buttons: {
                            showToday: true,
                            showClose: true
                        }
                    });

                    \$('input[id\$=_date_ends][type!=text]').datetimepicker({
                        locale: '";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["eccube_config"] ?? null), "locale", [], "any", false, false, false, 45), "html", null, true);
        echo "',
                        format: 'YYYY-MM-DD',
                        useCurrent: false,
                        buttons: {
                            showToday: true,
                            showClose: true
                        }
                    });

                    \$('input[id^=scheduled_shipping_date]').datetimepicker({
                        locale: '";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["eccube_config"] ?? null), "locale", [], "any", false, false, false, 55), "html", null, true);
        echo "',
                        format: 'YYYY-MM-DD',
                        useCurrent: false,
                        buttons: {
                            showToday: true,
                            showClose: true
                        }
                    });
                });
            }

            // 登録チェックボックス
            \$('#check_all').on('change', function() {
                var checked = \$(this).prop('checked');
                if (checked) {
                    \$('input[id^=\"yamato_check_\"]').prop('checked', true);
                } else {
                    \$('input[id^=\"yamato_check_\"]').prop('checked', false);
                }
            });

            \$('#change_status').click(function(){
                var check_cnt = countCheck();
                if(check_cnt == 0) {
                    alert(\"チェックボックスが選択されていません\");
                    return false;
                }
                if(\$('#search_payment_status').val().length == 0) {
                    alert(\"対応状況が選択されていません\");
                    return false;
                }
                if(confirm('対応状況を更新します。よろしいですか？')) {
                    \$('#yamato_request').val('change_status');
                    \$('#yamato_mode').val(\$('#search_payment_status').val());
                    \$('#form_bulk').submit();
                }
            });

            \$('#change_payment_status').click(function(){
                var check_cnt = countCheck();
                if(check_cnt == 0) {
                    alert(\"チェックボックスが選択されていません\");
                    return false;
                }
                \$payment_status_selector = getPaymentStatusSelector();
                if (\$payment_status_selector == null) {
                    return false;
                }
                if (\$payment_status_selector.val().length == 0) {
                    alert(\"決済処理が選択されていません\");
                    return false;
                }
                if (confirm('決済処理を行います。よろしいですか？')) {
                    \$('#yamato_request').val('change_payment_status');
                    \$('#yamato_mode').val(\$payment_status_selector.val());
                    \$('#form_bulk').submit();
                }
            });

            // コンビニ決済の場合は決済処理から取引照会以外の選択肢を削除する
            if (\$('#search_payment_payment_method').val() == '";
        // line 115
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["eccube_config"] ?? null), "YAMATO_PAYID_CVS", [], "any", false, false, false, 115), "html", null, true);
        echo "') {
                \$payment_status = \$('#search_payment_payment_status');
                \$payment_status.children().each(function () {
                    if (\$(this).val() === '') {
                        // プレースホルダーはスキップ
                        return;
                    }
                    if (\$(this).val() !== 'inquiry') {
                        // 取引照会以外はremove
                        \$(this).remove();
                    }
                })
            }
        });

        function countCheck() {
            var check_count = 0;
            \$('input[id^=\"yamato_check_\"]').each(function(){
                if(\$(this).prop('checked')) {
                    check_count++;
                }
            });
            return check_count;
        }

        function getPaymentStatusSelector() {
            if (\$('#search_payment_payment_status').length > 0) {
                return \$('#search_payment_payment_status');
            }
            if (\$('#search_payment_deferred_status').length > 0) {
                return \$('#search_payment_deferred_status');
            }
            return null;
        }

        function fnChangeScheduledShippingDate(order_id) {
            if(confirm('出荷予定日を変更します。よろしいですか？')) {
                \$('#yamato_request').val('change_scheduled_shipping_date');
                \$('#order_id').val(order_id);
                \$('#scheduled_shipping_date').val(\$('#scheduled_shipping_date--' + order_id).val());
                \$('#form_bulk').submit();
            }
        }
    </script>
";
    }

    // line 161
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 162
        echo "    <!--検索条件設定テーブルここから-->
    <div class=\"c-outsideBlock\">
        <form name=\"search_form\" method=\"POST\" action=\"";
        // line 164
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("yamato_payment4_admin_payment_status");
        echo "\">
            ";
        // line 165
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "_token", [], "any", false, false, false, 165), 'widget');
        echo "
            <div class=\"c-outsideBlock__contents\">
                <div class=\"row\">
                    <div class=\"col\">
                        <label class=\"col-form-label\">";
        // line 169
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yamato_payment.admin.payment_status.search_condition_order_date"), "html", null, true);
        echo "</label>
                        <div class=\"form-row align-items-center\">
                            <div class=\"col\">
                                ";
        // line 172
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "order_date_starts", [], "any", false, false, false, 172), 'widget');
        echo "
                                ";
        // line 173
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "order_date_starts", [], "any", false, false, false, 173), 'errors');
        echo "
                            </div>
                            <div class=\"col-form-label\">";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__range"), "html", null, true);
        echo "</div>
                            <div class=\"col\">
                                ";
        // line 177
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "order_date_ends", [], "any", false, false, false, 177), 'widget');
        echo "
                                ";
        // line 178
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "order_date_ends", [], "any", false, false, false, 178), 'errors');
        echo "
                            </div>
                            <div class=\"col\"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"c-outsideBlock__contents\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        <div class=\"form-row\">
                            <div class=\"form-group col-12\">
                                <p class=\"col-form-label\">";
        // line 190
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yamato_payment.admin.payment_status.search_condition_order_status"), "html", null, true);
        echo "</p>
                                ";
        // line 191
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "OrderStatuses", [], "any", false, false, false, 191), 'widget', ["label_attr" => ["class" => "checkbox-inline"]]);
        echo "
                                ";
        // line 192
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "OrderStatuses", [], "any", false, false, false, 192), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"c-outsideBlock__contents\">
                <div class=\"row\">
                    <div class=\"col-6\">
                        <div class=\"form-row\">
                            <div class=\"form-group col-6\">
                                <p class=\"col-form-label\">";
        // line 203
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yamato_payment.admin.payment_status.search_condition_payment_method"), "html", null, true);
        echo "</p>
                                ";
        // line 204
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "payment_method", [], "any", false, false, false, 204), 'widget');
        echo "
                                ";
        // line 205
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "payment_method", [], "any", false, false, false, 205), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"c-outsideBlock__contents\">
                <div class=\"row\">
                    <div class=\"mb-4\">
                        <div class=\"col-12\">
                            <button class=\"btn btn-ec-conversion px-5\" type=\"submit\">検索</button>
                            ";
        // line 216
        if (($context["pagination"] ?? null)) {
            // line 217
            echo "                                <span class=\"font-weight-bold ml-2\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yamato_payment.admin.payment_status.search_result_count", ["%count%" => twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "totalItemCount", [], "any", false, false, false, 217)]), "html", null, true);
            echo "</span>
                            ";
        }
        // line 219
        echo "                        </div>
                    </div>
                </div>
            </div>


            <div class=\"c-outsideBlock__contents\" id=\"collective_setting_box__body\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">一括設定</h3>
                </div>

                <div id=\"collective_setting__body\" class=\"box-body\">
                    <div id=\"collective_setting__list\" class=\"table_list\">
                        <div id=\"collective_setting__list_body\" class=\"table-responsive with-border\">
                            <table class=\"table\">
                                <tr>
                                    <td class=\"text-center\" style=\"background-color: #f9f9f9;\">
                                        <label class=\"control-label required \">対応状況更新</label>
                                    </td>
                                    <td>";
        // line 238
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "status", [], "any", false, false, false, 238), 'widget');
        echo "</td>
                                    <td><a href=\"#\" class=\"btn btn-success\" id=\"change_status\">一括更新</a></td>
                                </tr>
                                <tr>
                                    <td class=\"text-center\" style=\"background-color: #f9f9f9;\">
                                        <label class=\"control-label required \">決済処理</label>
                                    </td>
                                    ";
        // line 245
        if (((($context["payment_method"] ?? null) == twig_get_attribute($this->env, $this->source, ($context["eccube_config"] ?? null), "YAMATO_PAYID_CREDIT", [], "any", false, false, false, 245)) || (($context["payment_method"] ?? null) == twig_get_attribute($this->env, $this->source, ($context["eccube_config"] ?? null), "YAMATO_PAYID_CVS", [], "any", false, false, false, 245)))) {
            // line 246
            echo "                                        <td>";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "payment_status", [], "any", false, false, false, 246), 'widget');
            echo "</td>
                                    ";
        } else {
            // line 248
            echo "                                        <td>";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "deferred_status", [], "any", false, false, false, 248), 'widget');
            echo "</td>
                                    ";
        }
        // line 250
        echo "                                    <td><a href=\"#\" class=\"btn btn-success\" id=\"change_payment_status\">一括処理</a></td>
                                </tr>
                            </table>
                        </div>
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
        // line 265
        if ((($context["pagination"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "totalItemCount", [], "any", false, false, false, 265))) {
            // line 266
            echo "                    <form id=\"form_bulk\" method=\"POST\" action=\"";
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("yamato_payment4_admin_payment_status_request");
            echo "\">
                        <input type=\"hidden\" name=\"yamato_request\" id=\"yamato_request\" value=\"\" />
                        <input type=\"hidden\" name=\"yamato_mode\" id=\"yamato_mode\" value=\"\" />
                        <input type=\"hidden\" name=\"order_id\" id=\"order_id\" value=\"\" />
                        <input type=\"hidden\" name=\"scheduled_shipping_date\" id=\"scheduled_shipping_date\" value=\"\" />
                        <input type=\"hidden\" name=\"";
            // line 271
            echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::TOKEN_NAME"), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(twig_constant("Eccube\\Common\\Constant::TOKEN_NAME")), "html", null, true);
            echo "\">
                        <input type=\"hidden\" name=\"yamato_payment_method\" id=\"yamato_payment_method\" value=\"";
            // line 272
            echo twig_escape_filter($this->env, ($context["payment_method"] ?? null), "html", null, true);
            echo "\" />
                        <div class=\"row justify-content-between mb-2\">
                            <div class=\"col-6\"></div>
                            <div class=\"col-5 text-right\">
                                <div class=\"d-inline-block\">
                                    <select class=\"custom-select\" onchange=\"location.href = this.value;\">
                                        ";
            // line 278
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pageMaxis"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["pageMax"]) {
                // line 279
                echo "                                            <option ";
                if ((twig_get_attribute($this->env, $this->source, $context["pageMax"], "name", [], "any", false, false, false, 279) == ($context["page_count"] ?? null))) {
                    echo " selected ";
                }
                // line 280
                echo "                                                    value=\"";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("yamato_payment4_admin_payment_status", ["page_no" => 1, "page_count" => twig_get_attribute($this->env, $this->source, $context["pageMax"], "name", [], "any", false, false, false, 280)]), "html", null, true);
                echo "\">
                                                ";
                // line 281
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yamato_payment.admin.payment_status.display_count", ["%count%" => twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pageMax"], "name", [], "any", false, false, false, 281))]), "html", null, true);
                echo "</option>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pageMax'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 283
            echo "                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class=\"card rounded border-0 mb-4\">
                            <div class=\"card-body p-0\">
                                <table class=\"table table-sm\" id=\"search_result\">
                                    <thead>
                                    <tr>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center pl-3\">
                                            <input type=\"checkbox\" id=\"check_all\" name=\"filter\" value=\"open\">
                                        </th>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center\">";
            // line 295
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yamato_payment.admin.payment_status.col_order_date"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center\">";
            // line 296
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yamato_payment.admin.payment_status.col_order_no"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center\">";
            // line 297
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yamato_payment.admin.payment_status.col_order_id"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center\">";
            // line 298
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yamato_payment.admin.payment_status.col_order_name"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center\">";
            // line 299
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yamato_payment.admin.payment_status.col_order_payment"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center\">";
            // line 300
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yamato_payment.admin.payment_status.col_order_price"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center\">";
            // line 301
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yamato_payment.admin.payment_status.col_order_staus"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center\">決済状況</th>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center\">与信承認日</th>
                                        ";
            // line 304
            if ((($context["payment_method"] ?? null) == twig_get_attribute($this->env, $this->source, ($context["eccube_config"] ?? null), "YAMATO_PAYID_CREDIT", [], "any", false, false, false, 304))) {
                // line 305
                echo "                                            <th class=\"border-top-0 pt-2 pb-2 text-center\">出荷予定日</th>
                                            <th class=\"border-top-0 pt-2 pb-2 text-center\">出荷予定日変更</th>
                                        ";
            }
            // line 308
            echo "                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
            // line 311
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["Order"]) {
                // line 312
                echo "                                        <tr>
                                            <td class=\"align-middle text-center pl-3\">
                                                <input type=\"checkbox\"  name=\"ids[]\" id=\"yamato_check_";
                // line 314
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "id", [], "any", false, false, false, 314), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "id", [], "any", false, false, false, 314), "html", null, true);
                echo "\">
                                            </td>
                                            <td class=\"align-middle text-left\" id=\"order_date--";
                // line 316
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "id", [], "any", false, false, false, 316), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_min($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "order_date", [], "any", false, false, false, 316)), "html", null, true);
                echo "</td>
                                            <td class=\"align-middle text-center\" id=\"id--";
                // line 317
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "id", [], "any", false, false, false, 317), "html", null, true);
                echo "\"><a class=\"action-edit\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_order_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["Order"], "id", [], "any", false, false, false, 317)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "order_no", [], "any", false, false, false, 317), "html", null, true);
                echo "</a></td>
                                            <td class=\"align-middle text-center\" id=\"id--";
                // line 318
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "id", [], "any", false, false, false, 318), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "id", [], "any", false, false, false, 318), "html", null, true);
                echo "</td>
                                            <td class=\"align-middle text-center\" id=\"name--";
                // line 319
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "id", [], "any", false, false, false, 319), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "name01", [], "any", false, false, false, 319), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "name02", [], "any", false, false, false, 319), "html", null, true);
                echo "</td>
                                            <td class=\"align-middle text-center\" id=\"payment_method--";
                // line 320
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "id", [], "any", false, false, false, 320), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "payment_method", [], "any", false, false, false, 320), "html", null, true);
                echo "</td>
                                            <td class=\"align-middle text-right\" id=\"payment_total--";
                // line 321
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "id", [], "any", false, false, false, 321), "html", null, true);
                echo "\">
                                                ";
                // line 322
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["Order"], "payment_total", [], "any", false, false, false, 322)), "html", null, true);
                echo "
                                                ";
                // line 323
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["Order"], "YamatoOrder", [], "any", false, false, false, 323));
                foreach ($context['_seq'] as $context["_key"] => $context["yamato"]) {
                    // line 324
                    echo "                                                    ";
                    if ((twig_get_attribute($this->env, $this->source, $context["yamato"], "memo07", [], "any", false, false, false, 324) != twig_get_attribute($this->env, $this->source, $context["Order"], "payment_total", [], "any", false, false, false, 324))) {
                        // line 325
                        echo "                                                        <br /><span class=\"badge badge-danger\">[金額変更未連携:";
                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["yamato"], "memo07", [], "any", false, false, false, 325)), "html", null, true);
                        echo "]</span>
                                                    ";
                    }
                    // line 327
                    echo "                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['yamato'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 328
                echo "
                                            </td>
                                            <td class=\"align-middle text-center\"  id=\"order_status--";
                // line 330
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "id", [], "any", false, false, false, 330), "html", null, true);
                echo "\">
                                                <span class=\"badge ";
                // line 331
                echo $this->extensions['Plugin\YamatoPayment4\Twig\Extension\YamatoExtension']->getCssWithOrderStatus(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Order"], "OrderStatus", [], "any", false, false, false, 331), "id", [], "any", false, false, false, 331));
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "OrderStatus", [], "any", false, false, false, 331), "html", null, true);
                echo "</span>
                                            </td>
                                            <td class=\"align-middle text-center\"  id=\"order_yamato_status--";
                // line 333
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "id", [], "any", false, false, false, 333), "html", null, true);
                echo "\">
                                            ";
                // line 334
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["Order"], "YamatoOrder", [], "any", false, false, false, 334));
                foreach ($context['_seq'] as $context["_key"] => $context["yamato"]) {
                    // line 335
                    echo "                                                ";
                    if (((($context["payment_method"] ?? null) == twig_get_attribute($this->env, $this->source, ($context["eccube_config"] ?? null), "YAMATO_PAYID_CREDIT", [], "any", false, false, false, 335)) || (($context["payment_method"] ?? null) == twig_get_attribute($this->env, $this->source, ($context["eccube_config"] ?? null), "YAMATO_PAYID_CVS", [], "any", false, false, false, 335)))) {
                        // line 336
                        echo "                                                    ";
                        echo $this->extensions['Plugin\YamatoPayment4\Twig\Extension\YamatoExtension']->getYamatoCreditStatusName(twig_get_attribute($this->env, $this->source, $context["yamato"], "memo04", [], "any", false, false, false, 336));
                        echo "
                                                ";
                    } elseif ((                    // line 337
($context["payment_method"] ?? null) == twig_get_attribute($this->env, $this->source, ($context["eccube_config"] ?? null), "YAMATO_PAYID_DEFERRED", [], "any", false, false, false, 337))) {
                        // line 338
                        echo "                                                    ";
                        echo $this->extensions['Plugin\YamatoPayment4\Twig\Extension\YamatoExtension']->getYamatoDefferedStatusName(twig_get_attribute($this->env, $this->source, $context["yamato"], "memo04", [], "any", false, false, false, 338));
                        echo "
                                                ";
                    } else {
                        // line 340
                        echo "                                                    不明
                                                ";
                    }
                    // line 342
                    echo "                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['yamato'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 343
                echo "                                            </td>
                                            <td class=\"align-middle text-center\"  id=\"order_yamato_auth_datetime--";
                // line 344
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "id", [], "any", false, false, false, 344), "html", null, true);
                echo "\">
                                                ";
                // line 345
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_min($this->env, twig_get_attribute($this->env, $this->source, ($context["lastAuthDates"] ?? null), twig_get_attribute($this->env, $this->source, $context["Order"], "id", [], "any", false, false, false, 345), [], "any", false, false, false, 345)), "html", null, true);
                echo "
                                            </td>
                                            ";
                // line 347
                if ((($context["payment_method"] ?? null) == twig_get_attribute($this->env, $this->source, ($context["eccube_config"] ?? null), "YAMATO_PAYID_CREDIT", [], "any", false, false, false, 347))) {
                    // line 348
                    echo "                                                <td class=\"align-middle\" align=\"center\">
                                                    ";
                    // line 349
                    if (twig_get_attribute($this->env, $this->source, $context["Order"], "scheduled_shipping_date", [], "any", false, false, false, 349)) {
                        // line 350
                        echo "                                                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["Order"], "YamatoOrder", [], "any", false, false, false, 350));
                        foreach ($context['_seq'] as $context["_key"] => $context["yamato"]) {
                            // line 351
                            echo "                                                            ";
                            if ((twig_get_attribute($this->env, $this->source, $context["yamato"], "memo04", [], "any", false, false, false, 351) == "5")) {
                                // line 352
                                echo "                                                                <input id=\"scheduled_shipping_date--";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "id", [], "any", false, false, false, 352), "html", null, true);
                                echo "\" class=\"datetimepicker-input form-control\" data-toggle=\"datetimepicker\" type=\"date\" style=\"width:auto;\" value=\"";
                                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "scheduled_shipping_date", [], "any", false, false, false, 352), "Y-m-d"), "html", null, true);
                                echo "\"/>
                                                            ";
                            } else {
                                // line 354
                                echo "                                                                ";
                                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "scheduled_shipping_date", [], "any", false, false, false, 354), "Y/m/d"), "html", null, true);
                                echo "
                                                            ";
                            }
                            // line 356
                            echo "                                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['yamato'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 357
                        echo "                                                    ";
                    }
                    // line 358
                    echo "                                                </td>
                                                <td class=\"align-middle text-center\">
                                                    ";
                    // line 360
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["Order"], "YamatoOrder", [], "any", false, false, false, 360));
                    foreach ($context['_seq'] as $context["_key"] => $context["yamato"]) {
                        // line 361
                        echo "                                                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["yamato"], "memo04", [], "any", false, false, false, 361) == "5")) {
                            // line 362
                            echo "                                                            <button class=\"btn btn-success\" onclick=\"fnChangeScheduledShippingDate(";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "id", [], "any", false, false, false, 362), "html", null, true);
                            echo "); return false;\">出荷予定日変更</button>
                                                        ";
                        }
                        // line 364
                        echo "                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['yamato'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 365
                    echo "                                                </td>
                                            ";
                }
                // line 367
                echo "                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 369
            echo "                                    </tbody>
                                </table>
                                <div class=\"row justify-content-md-center mb-4\"></div>
                            </div>

                            <div class=\"row justify-content-md-center mb-4\">
                                ";
            // line 375
            if ((twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "totalItemCount", [], "any", false, false, false, 375) > 0)) {
                // line 376
                echo "                                    ";
                $this->loadTemplate("@admin/pager.twig", "@YamatoPayment4/admin/payment_status.twig", 376)->display(twig_array_merge($context, ["pages" => twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "paginationData", [], "any", false, false, false, 376), "routes" => "yamato_payment4_admin_payment_status_pageno"]));
                // line 377
                echo "                                ";
            }
            // line 378
            echo "                            </div>

                        </div>
                    </form>
                ";
            // line 383
            echo "                ";
        } elseif (($context["has_errors"] ?? null)) {
            // line 384
            echo "                    <div class=\"card rounded border-0\">
                        <div class=\"card-body p-4\">
                            <div class=\"text-center text-muted mb-4 h5\">";
            // line 386
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yamato_payment.admin.payment_status.invalid_condition"), "html", null, true);
            echo "</div>
                            <div class=\"text-center text-muted\">";
            // line 387
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yamato_payment.admin.payment_status.change_condition"), "html", null, true);
            echo "</div>
                        </div>
                    </div>
                ";
        } else {
            // line 391
            echo "                    <div class=\"card rounded border-0\">
                        <div class=\"card-body p-4\">
                            <div class=\"text-center text-muted mb-4 h5\">";
            // line 393
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yamato_payment.admin.payment_status.no_result"), "html", null, true);
            echo "</div>
                            <div class=\"text-center text-muted\">";
            // line 394
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yamato_payment.admin.payment_status.change_condition"), "html", null, true);
            echo "</div>
                        </div>
                    </div>
                ";
        }
        // line 398
        echo "            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@YamatoPayment4/admin/payment_status.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  779 => 398,  772 => 394,  768 => 393,  764 => 391,  757 => 387,  753 => 386,  749 => 384,  746 => 383,  740 => 378,  737 => 377,  734 => 376,  732 => 375,  724 => 369,  717 => 367,  713 => 365,  707 => 364,  701 => 362,  698 => 361,  694 => 360,  690 => 358,  687 => 357,  681 => 356,  675 => 354,  667 => 352,  664 => 351,  659 => 350,  657 => 349,  654 => 348,  652 => 347,  647 => 345,  643 => 344,  640 => 343,  634 => 342,  630 => 340,  624 => 338,  622 => 337,  617 => 336,  614 => 335,  610 => 334,  606 => 333,  599 => 331,  595 => 330,  591 => 328,  585 => 327,  579 => 325,  576 => 324,  572 => 323,  568 => 322,  564 => 321,  558 => 320,  550 => 319,  544 => 318,  536 => 317,  530 => 316,  523 => 314,  519 => 312,  515 => 311,  510 => 308,  505 => 305,  503 => 304,  497 => 301,  493 => 300,  489 => 299,  485 => 298,  481 => 297,  477 => 296,  473 => 295,  459 => 283,  451 => 281,  446 => 280,  441 => 279,  437 => 278,  428 => 272,  422 => 271,  413 => 266,  411 => 265,  394 => 250,  388 => 248,  382 => 246,  380 => 245,  370 => 238,  349 => 219,  343 => 217,  341 => 216,  327 => 205,  323 => 204,  319 => 203,  305 => 192,  301 => 191,  297 => 190,  282 => 178,  278 => 177,  273 => 175,  268 => 173,  264 => 172,  258 => 169,  251 => 165,  247 => 164,  243 => 162,  239 => 161,  190 => 115,  127 => 55,  114 => 45,  101 => 35,  95 => 32,  91 => 31,  87 => 30,  79 => 24,  75 => 23,  69 => 20,  62 => 16,  55 => 15,  50 => 11,  48 => 18,  46 => 13,  39 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@YamatoPayment4/admin/payment_status.twig", "/var/www/html/eccube-4-new/app/Plugin/YamatoPayment4/Resource/template/admin/payment_status.twig");
    }
}
