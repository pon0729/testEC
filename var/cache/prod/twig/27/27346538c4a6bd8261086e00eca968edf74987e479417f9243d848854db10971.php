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

/* @ReferralCode/admin/edit.twig */
class __TwigTemplate_89e4db60c8508e643018ab604ce52c536c6a224d61a2993ef01d6c14ff7e9af9 extends \Eccube\Twig\Template
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
            '__internal_65764051a9ac64bb859f95dfa26e872d04756f4188fdbd455dbf0f418e46ba04' => [$this, 'block___internal_65764051a9ac64bb859f95dfa26e872d04756f4188fdbd455dbf0f418e46ba04'],
            '__internal_42ae6ba99368c8444668dc0ac6493e9a413d8bd9b98437039f32913de8e63a45' => [$this, 'block___internal_42ae6ba99368c8444668dc0ac6493e9a413d8bd9b98437039f32913de8e63a45'],
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
        $context["menus"] = [0 => "order", 1 => "plugin_referral_code_admin_new"];
        // line 18
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@ReferralCode/admin/edit.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("referral_code.admin.edit.title"), "html", null, true);
    }

    // line 16
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("referral_code.admin.edit.sub_title"), "html", null, true);
    }

    // line 20
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "<script>
var \$productCollectionHolder = null;
var \$categoryCollectionHolder = null;
var productDetailLength = 0;
var categoryDetailLength = 0;
var detailFormIdPrefix = '#referral_code_ReferralCodeDetails_';

\$(function() {
    // ==================================
    // 商品の追加 ボタンクリック時表示
    // ==================================
    \$('#showProductSearchModalButton').on('click', function() {
        \$('#searchProductModalList').children().remove();
    });

    // ==================================
    // カテゴリの追加 ボタンクリック時表示
    // ==================================
    \$('#showCategorySearchModalButton').on('click', function() {
        \$('#searchCategoryModalList').children().remove();
    });

    // ==================================
    // 商品検索ダイアログ - エンターキー押された時に検索
    // ==================================
    \$('.modal-dialog input[name=\"admin_search_product\\[id\\]\"], .modal-dialog select[name=\"admin_search_product\\[category_id\\]\"]').on('keypress', function(e) {
        if (e.which === 13) {
            \$('#searchProductModalButton').trigger('click');
            e.preventDefault();
            return false;
        }
    });

    // ==================================
    // 商品検索ダイアログ - 検索ボタンクリック時表示
    // ==================================
    \$('#searchProductModalButton').on('click', function() {
        var existProductId = \"\";
        \$(\"input[id^=\" + detailFormIdPrefix.replace('#', '') + \"][id\$=_Product]\").each(function(index, elem) {
            existProductId = existProductId == \"\" ? elem.value : existProductId + ',' + elem.value;
        });

        var \$list = \$('#searchProductModalList');
        \$list.children().remove();
        \$.ajax({
            url: '";
        // line 66
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("plugin_referral_code_admin_search_product");
        echo "',
            type: 'POST',
            dataType: 'html',
            data: {
                'id' : \$('#admin_search_product_id').val(),
                'category_id' : \$('#admin_search_product_category_id').val(),
                'exist_product_id' : existProductId
            }
        }).done(function(data) {
            \$list.html(data);
        }).fail(function(data) {
            alert('search product failed.');
        });
    });
    // ページング処理
    \$(document).on('click', '#searchProductModalList ul.pagination li.page-item a.page-link', function(e) {
        e.preventDefault();
        var \$list = \$('#searchProductModalList');
        \$list.children().remove();
        var url = \$(this).attr('href');
        \$.ajax({
            url: url,
            type: 'GET',
            dataType: 'html'
        }).done(function(data) {
            \$list.html(data);
        }).fail(function(data) {
            alert('search product failed.');
        });
    });


    // ==================================
    // カテゴリ検索ダイアログ - エンターキー押された時に検索
    // ==================================
    \$('.modal-dialog input[name=\"plugin_referral_code_admin_search_category\\[id\\]\"]').on('keypress', function(e) {
        if (e.which === 13) {
            \$('#searchCategoryModalButton').trigger('click');
            e.preventDefault();
            return false;
        }
    });

    // ==================================
    // カテゴリ検索ダイアログ - 検索ボタンクリック時表示
    // ==================================
    \$('#searchCategoryModalButton').on('click', function() {
        var existCategorytId = \"\";
        \$(\"input[id^=\" + detailFormIdPrefix.replace('#', '') + \"][id\$=_Category]\").each(function(index, elem) {
            existCategorytId = existCategorytId == \"\" ? elem.value : existCategorytId + ',' + elem.value;
        });


        var \$list = \$('#searchCategoryModalList');
        \$list.children().remove();
        \$.ajax({
            url: '";
        // line 122
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("plugin_referral_code_admin_search_category");
        echo "',
            type: 'POST',
            dataType: 'html',
            data: {
                'id' : \$('#plugin_referral_code_admin_search_category_id').val(),
                'exist_category_id' : existCategorytId
            }
        }).done(function(data) {
            \$list.html(data);
        }).fail(function(data) {
            alert('search category failed.');
        });
    });
    // ページング処理
    \$(document).on('click', '#searchCategoryModalList ul.pagination li.page-item a.page-link', function(e) {
        e.preventDefault();
        var \$list = \$('#searchCategoryModalList');
        \$list.children().remove();
        var url = \$(this).attr('href');
        \$.ajax({
            url: url,
            type: 'GET',
            dataType: 'html'
        }).done(function(data) {
            \$list.html(data);
        }).fail(function(data) {
            alert('search category failed.');
        });
    });

    // 商品管理
    var \$referralCodeDetailProductArea = \$('#referral_code_detail_product_area');
    \$productCollectionHolder = \$('#product_table_form_field');
    productDetailLength = \$productCollectionHolder.find('tbody > tr').length;
    \$(document).on('click', '.delete-product-row', function(e) {
        var \$self = \$(this);
        var rowIndex = \$self.data('row-index');
        \$('#delete_product_modal_' + rowIndex.toString()).modal('hide');
        setTimeout(function() {
            \$self.closest('tr').remove();
        }, 500);
        productDetailLength--;
        return false;
    });

    // カテゴリ管理
    var \$referralCodeDetailCategoryArea = \$('#referral_code_detail_category_area');
    \$categoryCollectionHolder = \$('#category_table_form_field');
    categoryDetailLength = \$categoryCollectionHolder.find('tbody > tr').length;
    \$(document).on('click', '.delete-category-row', function(e) {
        var \$self = \$(this);
        var rowIndex = \$self.data('row-index');
        \$('#delete_category_modal_' + rowIndex.toString()).modal('hide');
        setTimeout(function() {
            \$self.closest('tr').remove();
        }, 500);
        categoryDetailLength--;
        return false;
    });

    // 各種項目宣言
    var \$referralCodeTypeProduct = \$('#referral_code_referral_code_type_0');
    var \$referralCodeTypeCategory = \$('#referral_code_referral_code_type_1');
    var \$referralCodeTypeAll = \$('#referral_code_referral_code_type_2');
    //
    var \$referralCodeMemberEnabled = \$('#referral_code_referral_code_member_0');
    //
    var \$discountTypePrice = \$(\"#referral_code_discount_type_0\");
    var \$discountTypeRate = \$(\"#referral_code_discount_type_1\");
    //
    var \$discountPrice = \$('input[name=\"referral_code\\[discount_price\\]\"]');
    var \$discountRate = \$('input[name=\"referral_code\\[discount_rate\\]\"]');

    // 値引き種別などのラジオボタン デフォルト値を設定
    if (\$('input[name=\"referral_code\\[referral_code_type\\]\"]:checked').length == 0) {
        \$referralCodeTypeProduct.attr('checked', 'checked');
    }
    if (\$('input[name=\"referral_code\\[referral_code_member\\]\"]:checked').length == 0) {
        \$referralCodeMemberEnabled.attr('checked', 'checked');
    }
    if (\$('input[name=\"referral_code\\[discount_type\\]\"]:checked').length == 0) {
        \$discountTypePrice.attr('checked', 'checked');
    }

    // ラジオボタン選択時の制御
    // 値引き額
    \$discountTypePrice.on(\"change\", function() {
        \$discountPrice.removeAttr('disabled');
        \$discountRate.attr('disabled', 'disabled');
    });
    // 値引き率
    \$discountTypeRate.on(\"change\", function() {
        \$discountPrice.attr('disabled', 'disabled');
        \$discountRate.removeAttr('disabled');
    });
    // 紹介コード種別 - 商品
    \$referralCodeTypeProduct.on(\"change\", function() {
        if(\$categoryCollectionHolder.find('tbody > tr').length > 0) {
            if(confirm(\"";
        // line 220
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("referral_code.admin.edit.delete_existing_cagetories__confirm_message"), "html", null, true);
        echo "\")) {
                \$categoryCollectionHolder.find('tbody > tr').remove();
                categoryDetailLength = 0;
            } else {
                \$referralCodeTypeCategory.prop('checked', 'checked');
                return false;
            }
        }
        \$referralCodeDetailProductArea.show();
        \$referralCodeDetailCategoryArea.hide();
    });
    // 紹介コード種別 - カテゴリ
    \$referralCodeTypeCategory.on(\"change\", function() {
        if(\$productCollectionHolder.find('tbody > tr').length > 0) {
            if(confirm(\"";
        // line 234
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("referral_code.admin.edit.delete_existing_products__confirm_message"), "html", null, true);
        echo "\")) {
                \$productCollectionHolder.find('tbody > tr').remove();
                categoryDetailLength = 0;
            } else {
                \$referralCodeTypeProduct.prop('checked', 'checked');
                return false;
            }
        }
        \$referralCodeDetailProductArea.hide();
        \$referralCodeDetailCategoryArea.show();
    });
    // 紹介コード種別 - 全商品
    \$referralCodeTypeAll.on(\"change\", function() {
        if(\$productCollectionHolder.find(\"tbody > tr\").length > 0 || \$categoryCollectionHolder.find(\"tbody > tr\").length > 0) {
            if(confirm(\"";
        // line 248
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("referral_code.admin.edit.delete_existing_products_and_categories__confirm_message"), "html", null, true);
        echo "\")) {
                \$productCollectionHolder.find('tbody > tr').remove();
                \$categoryCollectionHolder.find('tbody > tr').remove();
                productDetailLength = 0;
                categoryDetailLength = 0;
            } else {
                if(\$productCollectionHolder.find(\"tbody > tr\").length > 0) {
                    \$referralCodeTypeProduct.prop('checked', 'checked');
                }
                if(\$categoryCollectionHolder.find(\"tbody > tr\").length > 0) {
                    \$referralCodeTypeCategory.prop('checked', 'checked');
                }
                return false;
            }
        }
        \$referralCodeDetailProductArea.hide();
        \$referralCodeDetailCategoryArea.hide();
    });

    // ==========================
    // 初期表示処理
    // ==========================
    // 値引き額
    if (\$discountTypePrice.prop('checked')) {
        \$discountPrice.removeAttr('disabled');
    } else {
        \$discountPrice.attr('disabled', 'disabled');
    }
    // 値引率
    if(\$discountTypeRate.prop('checked')) {
        \$discountRate.removeAttr('disabled');
    } else {
        \$discountRate.attr('disabled', 'disabled');
    }
    // 紹介コード種別 - 商品
    if(\$referralCodeTypeProduct.prop('checked')) {
        \$referralCodeDetailProductArea.show();
    } else {
        \$referralCodeDetailProductArea.hide();
    }
    // 紹介コード種別 - カテゴリ
    if(\$referralCodeTypeCategory.prop('checked')) {
        \$referralCodeDetailCategoryArea.show();
    } else {
        \$referralCodeDetailCategoryArea.hide();
    }

    // ==================================
    // ユーザーによっては金額にカンマつけられちゃうのでカンマを消す。。。
    // ==================================
    \$('form').on('submit', function(e) {
        const \$discountPriceInput = \$('input[name=\"referral_code\\[discount_price\\]\"]');
        const \$referralCodeLowerLimitInput = \$('input[name=\"referral_code\\[referral_code_lower_limit\\]\"]');
        \$discountPriceInput.val(\$discountPriceInput.val().replace(/,/g, ''));
        \$referralCodeLowerLimitInput.val(\$referralCodeLowerLimitInput.val().replace(/,/g, ''));
    });
});
</script>
";
    }

    // line 308
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 309
        echo "<form role=\"form\" name=\"form1\" id=\"form1\" method=\"post\" action=\"\">
    <input type=\"hidden\" name=\"mode\" value=\"\">
    ";
        // line 311
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, false, 311), 'widget');
        echo "
    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                <!-- 紹介コード情報 -->
                <div id=\"referral_code_info\" class=\"card rounded border-0 mb-4\">
                    <div class=\"card-header\">
                        <div class=\"row\">
                            <div class=\"col-8\">
                                <div class=\"d-inline-block\"><span class=\"card-title\">";
        // line 320
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("referral_code.admin.edit.header1"), "html", null, true);
        echo "</span></div>
                            </div>
                            <div class=\"col-4 text-right\"><a data-toggle=\"collapse\" href=\"#referralCodeOverview\" aria-expanded=\"false\" aria-controls=\"referralCodeOverview\"><i class=\"fa fa-angle-up fa-lg\"></i></a></div>
                        </div>
                    </div>
                    <div class=\"collapse show ec-cardCollapse\" id=\"referralCodeOverview\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-12\">
                                    <div class=\"row mb-3 form-group\">
                                        <label class=\"col-2 col-form-label\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 330
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("referral_code.admin.edit.tooltip.referral_code"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("referral_code.admin.edit.referral_code"), "html", null, true);
        echo "<i class=\"fa fa-question-circle fa-lg ml-1\"></i></label>
                                        <div class=\"col\">
                                            ";
        // line 332
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "referral_code", [], "any", false, false, false, 332), 'widget');
        echo "
                                            ";
        // line 333
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "referral_code", [], "any", false, false, false, 333), 'errors');
        echo "
                                        </div>
                                    </div>
                                    <div class=\"row mb-3 form-group\">
                                        <label class=\"col-2 col-form-label\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 337
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("referral_code.admin.edit.tooltip.referral_code_name"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("referral_code.admin.edit.referral_code_name"), "html", null, true);
        echo "<i class=\"fa fa-question-circle fa-lg ml-1\"></i></label>
                                        <div class=\"col\">
                                            ";
        // line 339
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "referral_code_name", [], "any", false, false, false, 339), 'widget');
        echo "
                                            ";
        // line 340
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "referral_code_name", [], "any", false, false, false, 340), 'errors');
        echo "
                                        </div>
                                    </div>
                                    <div class=\"row mb-3 form-group\">
                                        <label class=\"col-2 col-form-label\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 344
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("referral_code.admin.edit.tooltip.referral_code_type"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("referral_code.admin.edit.referral_code_type"), "html", null, true);
        echo "<i class=\"fa fa-question-circle fa-lg ml-1\"></i></label>
                                        <div class=\"col\">
                                            ";
        // line 346
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "referral_code_type", [], "any", false, false, false, 346), 'widget');
        echo "
                                            ";
        // line 347
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "referral_code_type", [], "any", false, false, false, 347), 'errors');
        echo "
                                        </div>
                                    </div>
                                    <div class=\"row mb-3 form-group\">
                                        <label class=\"col-2 col-form-label\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 351
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("referral_code.admin.edit.tooltip.referral_code_member"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("referral_code.admin.edit.referral_code_member"), "html", null, true);
        echo "<i class=\"fa fa-question-circle fa-lg ml-1\"></i></label>
                                        <div class=\"col\">
                                            ";
        // line 353
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "referral_code_member", [], "any", false, false, false, 353), 'widget');
        echo "
                                            ";
        // line 354
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "referral_code_member", [], "any", false, false, false, 354), 'errors');
        echo "
                                        </div>
                                    </div>
                                    <div class=\"row mb-3 form-group\">
                                        <label class=\"col-2 col-form-label\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 358
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("referral_code.admin.edit.tooltip.discount_type"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("referral_code.admin.edit.discount_type"), "html", null, true);
        echo "<i class=\"fa fa-question-circle fa-lg ml-1\"></i></label>
                                        <div class=\"col\">
                                            ";
        // line 360
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "discount_type", [], "any", false, false, false, 360), 'widget');
        echo "
                                            ";
        // line 361
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "discount_type", [], "any", false, false, false, 361), 'errors');
        echo "
                                        </div>
                                    </div>
                                    <div class=\"row mb-3 form-group\">
                                        <label class=\"col-2 col-form-label\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 365
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("referral_code.admin.edit.tooltip.discount_price"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("referral_code.admin.edit.discount_price"), "html", null, true);
        echo "<i class=\"fa fa-question-circle fa-lg ml-1\"></i></label>
                                        <div class=\"col\">
                                            ";
        // line 367
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "discount_price", [], "any", false, false, false, 367), 'widget');
        echo "
                                            ";
        // line 368
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "discount_price", [], "any", false, false, false, 368), 'errors');
        echo "
                                        </div>
                                    </div>
                                    <div class=\"row mb-3 form-group\">
                                        <label class=\"col-2 col-form-label\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 372
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("referral_code.admin.edit.tooltip.discount_rate"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("referral_code.admin.edit.discount_rate"), "html", null, true);
        echo "<i class=\"fa fa-question-circle fa-lg ml-1\"></i></label>
                                        <div class=\"col\">
                                            ";
        // line 374
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "discount_rate", [], "any", false, false, false, 374), 'widget');
        echo "
                                            ";
        // line 375
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "discount_rate", [], "any", false, false, false, 375), 'errors');
        echo "
                                        </div>
                                    </div>
                                    <div class=\"row mb-3 form-group\">
                                        <label class=\"col-2 col-form-label\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 379
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("referral_code.admin.edit.tooltip.referral_code_release"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("referral_code.admin.edit.referral_code_release"), "html", null, true);
        echo "<i class=\"fa fa-question-circle fa-lg ml-1\"></i></label>
                                        <div class=\"col\">
                                            ";
        // line 381
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "referral_code_release", [], "any", false, false, false, 381), 'widget');
        echo "
                                            ";
        // line 382
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "referral_code_release", [], "any", false, false, false, 382), 'errors');
        echo "
                                        </div>
                                        ";
        // line 385
        echo "                                        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "referral_code_use_time", [], "any", false, false, false, 385), 'widget');
        echo "
                                        <input type=\"hidden\" name=\"referral_code_release_old\" value=\"";
        // line 386
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 386), "value", [], "any", false, false, false, 386), "referralCodeRelease", [], "any", false, false, false, 386), "html", null, true);
        echo "\">
                                    </div>
                                    <div class=\"row mb-3 form-group\">
                                        <label class=\"col-2 col-form-label\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 389
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("referral_code.admin.edit.tooltip.referral_code_lower_limit"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("referral_code.admin.edit.referral_code_lower_limit"), "html", null, true);
        echo "<i class=\"fa fa-question-circle fa-lg ml-1\"></i></label>
                                        <div class=\"col\">
                                            ";
        // line 391
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "referral_code_lower_limit", [], "any", false, false, false, 391), 'widget');
        echo "
                                            ";
        // line 392
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "referral_code_lower_limit", [], "any", false, false, false, 392), 'errors');
        echo "
                                        </div>
                                    </div>
                                    <div class=\"row mb-3 form-group\">
                                        <label class=\"col-2 col-form-label\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 396
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("referral_code.admin.edit.tooltip.available_from_date"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("referral_code.admin.edit.available_from_date"), "html", null, true);
        echo "<i class=\"fa fa-question-circle fa-lg ml-1\"></i></label>
                                        <div class=\"col form-inline\">
                                            ";
        // line 398
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "available_from_date", [], "any", false, false, false, 398), 'widget');
        echo "&nbsp;～&nbsp;";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "available_to_date", [], "any", false, false, false, 398), 'widget');
        echo "
                                            ";
        // line 399
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "available_from_date", [], "any", false, false, false, 399), 'errors');
        echo "
                                            ";
        // line 400
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "available_to_date", [], "any", false, false, false, 400), 'errors');
        echo "
                                        </div>
                                    </div>
                                </div>
                            </div><!-- .row -->
                        </div>
                    </div><!-- #referralCodeOverview -->
                </div><!-- #referral_code_info -->

                ";
        // line 409
        $context["referralCodeDetailPrototypeForm"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "ReferralCodeDetails", [], "any", false, false, false, 409), "vars", [], "any", false, false, false, 409), "prototype", [], "any", false, false, false, 409);
        // line 410
        echo "
                <!-- 商品情報 -->
                <div id=\"referral_code_detail_product_area\" class=\"card rounded border-0 mb-4\">
                    <div class=\"card-header\">
                        <div class=\"row\">
                            <div class=\"col-8\">
                                <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 416
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("referral_code.admin.edit.tooltip.product_info"), "html", null, true);
        echo "\"><span class=\"card-title\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("referral_code.admin.edit.product_info"), "html", null, true);
        echo "<i class=\"fa fa-question-circle fa-lg ml-1\"></i></span></div>
                            </div>
                            <div class=\"col-4 text-right\"><a data-toggle=\"collapse\" href=\"#referral_code_detail_product\" aria-expanded=\"false\" aria-controls=\"referral_code_detail_product\"><i class=\"fa fa-angle-up fa-lg\"></i></a></div>
                        </div>
                    </div>
                    <div class=\"collapse show ec-cardCollapse\" id=\"referral_code_detail_product\">
                        <div class=\"card-body\">
                            <div class=\"row justify-content-between mb-2\">
                                <div class=\"col-6\">
                                    <a id=\"showProductSearchModalButton\" class=\"btn btn-ec-regular mr-2 add\" data-toggle=\"modal\" data-target=\"#addProduct\">";
        // line 425
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("referral_code.admin.edit.add_product_item"), "html", null, true);
        echo "</a>
                                    <div class=\"modal fade\" id=\"addProduct\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"addProduct\" aria-hidden=\"true\">
                                        <div class=\"modal-dialog modal-lg\" role=\"document\">
                                            <div class=\"modal-content\">
                                                <div class=\"modal-header\">
                                                    <h5 class=\"modal-title\">";
        // line 430
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("referral_code.admin.edit.add_product_item"), "html", null, true);
        echo "</h5>
                                                    <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                                                </div>
                                                <div class=\"modal-body\">
                                                    ";
        // line 434
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchProductModalForm"] ?? null), "id", [], "any", false, false, false, 434), 'widget', ["attr" => ["class" => "mb-3", "placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("referral_code.admin.edit.product.multi_search_label")]]);
        echo "
                                                    ";
        // line 435
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchProductModalForm"] ?? null), "category_id", [], "any", false, false, false, 435), 'widget');
        echo "
                                                    <button type=\"button\" id=\"searchProductModalButton\" class=\"btn btn-ec-conversion px-5 mb-4 mt-2\">";
        // line 436
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search"), "html", null, true);
        echo "</button>
                                                    <div id=\"searchProductModalList\"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- .row -->

                            <!-- 商品明細 -->
                            <table id=\"product_table_form_field\" class=\"table table-striped table-sm mb-0\"
";
        // line 450
        echo "                                   data-prototype=\"";
        echo twig_escape_filter($this->env,         $this->renderBlock("__internal_65764051a9ac64bb859f95dfa26e872d04756f4188fdbd455dbf0f418e46ba04", $context, $blocks));
        echo "\">
                                <thead class=\"table-active\">
                                    <tr class=\"text-nowrap\">
                                        <th class=\"pt-2 pb-2 pl-3\">";
        // line 453
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("referral_code.admin.edit.table_header.product_name"), "html", null, true);
        echo "</th>
                                        <th class=\"pt-2 pb-2 pr-3\"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                ";
        // line 458
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "ReferralCodeDetails", [], "any", false, false, false, 458));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["referralCodeDetailForm"]) {
            // line 459
            echo "                                    ";
            $context["ReferralCodeDetail"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["referralCodeDetailForm"], "vars", [], "any", false, false, false, 459), "data", [], "any", false, false, false, 459);
            // line 460
            echo "                                    ";
            if (( !(null === twig_get_attribute($this->env, $this->source, ($context["ReferralCodeDetail"] ?? null), "Product", [], "any", false, false, false, 460)) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ReferralCodeDetail"] ?? null), "Product", [], "any", false, false, false, 460), "name", [], "any", false, false, false, 460)))) {
                // line 461
                echo "                                        <tr>
                                            ";
                // line 463
                echo "                                            ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["referralCodeDetailForm"], "referral_code_type", [], "any", false, false, false, 463), 'widget');
                echo "
                                            ";
                // line 464
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["referralCodeDetailForm"], "Product", [], "any", false, false, false, 464), 'widget');
                echo "
                                            ";
                // line 465
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["referralCodeDetailForm"], "Category", [], "any", false, false, false, 465), 'widget');
                echo "
                                            <td class=\"align-middle w-25 pl-3\">
                                                <p class=\"mb-0 font-weight-bold\">
                                                    <a href=\"";
                // line 468
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product_product_edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ReferralCodeDetail"] ?? null), "Product", [], "any", false, false, false, 468), "id", [], "any", false, false, false, 468)]), "html", null, true);
                echo "\" target=\"_blank\">
                                                        ";
                // line 469
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ReferralCodeDetail"] ?? null), "Product", [], "any", false, false, false, 469), "name", [], "any", false, false, false, 469), "html", null, true);
                echo "
                                                    </a>
                                                </p>
                                            </td>
                                            <td class=\"align-middle text-right pr-3\">
                                                <div class=\"row justify-content-end\">
                                                    <div class=\"col-auto text-center\">
                                                        <div class=\"d-inline-block mr-3\" data-tooltip=\"true\"
                                                             data-placement=\"top\" title=\"";
                // line 477
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                echo "\">
                                                            <a class=\"btn btn-ec-actionIcon\" data-toggle=\"modal\" data-target=\"#delete_product_modal_";
                // line 478
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 478), "html", null, true);
                echo "\">
                                                                <i class=\"fa fa-close fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                            </a>
                                                        </div>
                                                        <!-- 明細の削除確認モーダル -->
                                                        <div class=\"modal fade\" id=\"delete_product_modal_";
                // line 483
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 483), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"delete_product_modal_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 483), "html", null, true);
                echo "\" aria-hidden=\"true\">
                                                            <div class=\"modal-dialog\" role=\"document\">
                                                                <div class=\"modal-content\">
                                                                    <div class=\"modal-header\">
                                                                        <h5 class=\"modal-title font-weight-bold\">";
                // line 487
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__title"), "html", null, true);
                echo "</h5>
                                                                        <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                                            <span aria-hidden=\"true\">×</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class=\"modal-body text-left\">
                                                                        <p class=\"text-left\">";
                // line 493
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("referral_code.admin.delete_item__confirm_message", ["%name%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ReferralCodeDetail"] ?? null), "Product", [], "any", false, false, false, 493), "name", [], "any", false, false, false, 493)]), "html", null, true);
                echo "</p>
                                                                    </div>
                                                                    <div class=\"modal-footer\">
                                                                        <button class=\"btn btn-ec-sub\" type=\"button\" data-dismiss=\"modal\">";
                // line 496
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
                echo "</button>
                                                                        <a href=\"#delete_product_modal_";
                // line 497
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 497), "html", null, true);
                echo "\" class=\"btn delete-product-row btn-ec-delete\" data-row-index=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 497), "html", null, true);
                echo "\">";
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
            // line 507
            echo "                                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['referralCodeDetailForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 508
        echo "                                </tbody>
                            </table>
                        </div><!-- .card-body -->
                    </div><!-- #referral_code_detail_product -->
                </div><!-- #referral_code_detail_product_area -->

                <!-- カテゴリ情報 -->
                <div id=\"referral_code_detail_category_area\" class=\"card rounded border-0 mb-4\">
                    <div class=\"card-header\">
                        <div class=\"row\">
                            <div class=\"col-8\">
                                <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 519
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("referral_code.admin.edit.tooltip.category_info"), "html", null, true);
        echo "\"><span class=\"card-title\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("referral_code.admin.edit.category_info"), "html", null, true);
        echo "<i class=\"fa fa-question-circle fa-lg ml-1\"></i></span></div>
                            </div>
                            <div class=\"col-4 text-right\"><a data-toggle=\"collapse\" href=\"#referral_code_detail_category\" aria-expanded=\"false\" aria-controls=\"referral_code_detail_category\"><i class=\"fa fa-angle-up fa-lg\"></i></a></div>
                        </div>
                    </div>
                    <div class=\"collapse show ec-cardCollapse\" id=\"referral_code_detail_category\">
                        <div class=\"card-body\">
                            <div class=\"row justify-content-between mb-2\">
                                <div class=\"col-6\">
                                    <a id=\"showCategorySearchModalButton\" class=\"btn btn-ec-regular mr-2 add\" data-toggle=\"modal\" data-target=\"#addCategory\">";
        // line 528
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("referral_code.admin.edit.add_category_item"), "html", null, true);
        echo "</a>
                                    <div class=\"modal fade\" id=\"addCategory\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"addCategory\" aria-hidden=\"true\">
                                        <div class=\"modal-dialog modal-lg\" role=\"document\">
                                            <div class=\"modal-content\">
                                                <div class=\"modal-header\">
                                                    <h5 class=\"modal-title\">";
        // line 533
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("referral_code.admin.edit.add_category_item"), "html", null, true);
        echo "</h5>
                                                    <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                                                </div>
                                                <div class=\"modal-body\">
                                                    ";
        // line 537
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchCategoryModalForm"] ?? null), "id", [], "any", false, false, false, 537), 'widget', ["attr" => ["class" => "mb-3", "placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("referral_code.admin.edit.category.multi_search_label")]]);
        echo "
                                                    <button type=\"button\" id=\"searchCategoryModalButton\" class=\"btn btn-ec-conversion px-5 mb-4 mt-2\">";
        // line 538
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search"), "html", null, true);
        echo "</button>
                                                    <div id=\"searchCategoryModalList\"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- .row -->

                            <!-- カテゴリ明細 -->
                            <table id=\"category_table_form_field\" class=\"table table-striped table-sm mb-0\"
";
        // line 552
        echo "                                   data-prototype=\"";
        echo twig_escape_filter($this->env,         $this->renderBlock("__internal_42ae6ba99368c8444668dc0ac6493e9a413d8bd9b98437039f32913de8e63a45", $context, $blocks));
        echo "\">
                                <thead class=\"table-active\">
                                    <tr class=\"text-nowrap\">
                                        <th class=\"pt-2 pb-2 pl-3\">";
        // line 555
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("referral_code.admin.edit.add_category_item"), "html", null, true);
        echo "</th>
                                        <th class=\"pt-2 pb-2 pr-3\"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                ";
        // line 560
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "ReferralCodeDetails", [], "any", false, false, false, 560));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["referralCodeDetailForm"]) {
            // line 561
            echo "                                    ";
            $context["ReferralCodeDetail"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["referralCodeDetailForm"], "vars", [], "any", false, false, false, 561), "data", [], "any", false, false, false, 561);
            // line 562
            echo "                                    ";
            if (( !(null === twig_get_attribute($this->env, $this->source, ($context["ReferralCodeDetail"] ?? null), "Category", [], "any", false, false, false, 562)) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["ReferralCodeDetail"] ?? null), "categoryFullName", [], "any", false, false, false, 562)))) {
                // line 563
                echo "                                        <tr>
                                            ";
                // line 565
                echo "                                            ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["referralCodeDetailForm"], "referral_code_type", [], "any", false, false, false, 565), 'widget');
                echo "
                                            ";
                // line 566
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["referralCodeDetailForm"], "Product", [], "any", false, false, false, 566), 'widget');
                echo "
                                            ";
                // line 567
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["referralCodeDetailForm"], "Category", [], "any", false, false, false, 567), 'widget');
                echo "
                                            <td class=\"align-middle w-25 pl-3\">
                                                <p class=\"mb-0 font-weight-bold\">
                                                    <a href=\"";
                // line 570
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product_category_edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ReferralCodeDetail"] ?? null), "Category", [], "any", false, false, false, 570), "id", [], "any", false, false, false, 570)]), "html", null, true);
                echo "\" target=\"_blank\">
                                                        ";
                // line 571
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ReferralCodeDetail"] ?? null), "categoryFullName", [], "any", false, false, false, 571), "html", null, true);
                echo "
                                                    </a>
                                                </p>
                                            </td>
                                            <td class=\"align-middle text-right pr-3\">
                                                <div class=\"row justify-content-end\">
                                                    <div class=\"col-auto text-center\">
                                                        <div class=\"d-inline-block mr-3\" data-tooltip=\"true\"
                                                             data-placement=\"top\" title=\"";
                // line 579
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                echo "\">
                                                            <a class=\"btn btn-ec-actionIcon\" data-toggle=\"modal\" data-target=\"#delete_category_modal_";
                // line 580
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 580), "html", null, true);
                echo "\">
                                                                <i class=\"fa fa-close fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                            </a>
                                                        </div>
                                                        <!-- 明細の削除確認モーダル -->
                                                        <div class=\"modal fade\" id=\"delete_category_modal_";
                // line 585
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 585), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"delete_category_modal_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 585), "html", null, true);
                echo "\" aria-hidden=\"true\">
                                                            <div class=\"modal-dialog\" role=\"document\">
                                                                <div class=\"modal-content\">
                                                                    <div class=\"modal-header\">
                                                                        <h5 class=\"modal-title font-weight-bold\">";
                // line 589
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__title"), "html", null, true);
                echo "</h5>
                                                                        <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                                            <span aria-hidden=\"true\">×</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class=\"modal-body text-left\">
                                                                        <p class=\"text-left\">";
                // line 595
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("referral_code.admin.delete_item__confirm_message", ["%name%" => twig_get_attribute($this->env, $this->source, ($context["ReferralCodeDetail"] ?? null), "categoryFullName", [], "any", false, false, false, 595)]), "html", null, true);
                echo "</p>
                                                                    </div>
                                                                    <div class=\"modal-footer\">
                                                                        <button class=\"btn btn-ec-sub\" type=\"button\" data-dismiss=\"modal\">";
                // line 598
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
                echo "</button>
                                                                        <a href=\"#delete_category_modal_";
                // line 599
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 599), "html", null, true);
                echo "\" class=\"btn delete-category-row btn-ec-delete\" data-row-index=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 599), "html", null, true);
                echo "\">";
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
            // line 609
            echo "                                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['referralCodeDetailForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 610
        echo "                                </tbody>
                            </table>
                        </div><!-- .card-body -->
                    </div><!-- #referral_code_detail_category -->
                </div><!-- #referral_code_detail_category_area -->

            </div><!-- .c-primaryCol -->
        </div><!-- .c-contentsArea__primaryCol -->
    </div><!-- .c-contentsArea__cols -->

    <!-- コンバージョンエリア -->
    <div class=\"c-conversionArea\">
        <div class=\"c-conversionArea__container\">
            <div class=\"row justify-content-between align-items-center\">
                <div class=\"col-6\">
                    <div class=\"c-conversionArea__leftBlockItem\">
                        <a class=\"c-baseLink\" href=\"";
        // line 626
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("plugin_referral_code_admin_list");
        echo "\"><i class=\"fa fa-backward\" aria-hidden=\"true\"></i><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("referral_code.admin.nav.referral_code_list"), "html", null, true);
        echo "</span></a>
                    </div>
                </div>
                <div class=\"col-6\">
                    <div class=\"row align-items-center justify-content-end\">
                        <div class=\"col-auto\">
                            <button type=\"submit\" class=\"btn btn-ec-conversion px-5\" name=\"mode\" value=\"register\">";
        // line 632
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.registration"), "html", null, true);
        echo "</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
";
    }

    // line 450
    public function block___internal_65764051a9ac64bb859f95dfa26e872d04756f4188fdbd455dbf0f418e46ba04($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_include($this->env, $context, "@ReferralCode/admin/product_prototype.twig");
    }

    // line 552
    public function block___internal_42ae6ba99368c8444668dc0ac6493e9a413d8bd9b98437039f32913de8e63a45($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_include($this->env, $context, "@ReferralCode/admin/category_prototype.twig");
    }

    public function getTemplateName()
    {
        return "@ReferralCode/admin/edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1065 => 552,  1058 => 450,  1045 => 632,  1034 => 626,  1016 => 610,  1002 => 609,  985 => 599,  981 => 598,  975 => 595,  966 => 589,  957 => 585,  949 => 580,  945 => 579,  934 => 571,  930 => 570,  924 => 567,  920 => 566,  915 => 565,  912 => 563,  909 => 562,  906 => 561,  889 => 560,  881 => 555,  874 => 552,  860 => 538,  856 => 537,  849 => 533,  841 => 528,  827 => 519,  814 => 508,  800 => 507,  783 => 497,  779 => 496,  773 => 493,  764 => 487,  755 => 483,  747 => 478,  743 => 477,  732 => 469,  728 => 468,  722 => 465,  718 => 464,  713 => 463,  710 => 461,  707 => 460,  704 => 459,  687 => 458,  679 => 453,  672 => 450,  658 => 436,  654 => 435,  650 => 434,  643 => 430,  635 => 425,  621 => 416,  613 => 410,  611 => 409,  599 => 400,  595 => 399,  589 => 398,  582 => 396,  575 => 392,  571 => 391,  564 => 389,  558 => 386,  553 => 385,  548 => 382,  544 => 381,  537 => 379,  530 => 375,  526 => 374,  519 => 372,  512 => 368,  508 => 367,  501 => 365,  494 => 361,  490 => 360,  483 => 358,  476 => 354,  472 => 353,  465 => 351,  458 => 347,  454 => 346,  447 => 344,  440 => 340,  436 => 339,  429 => 337,  422 => 333,  418 => 332,  411 => 330,  398 => 320,  386 => 311,  382 => 309,  378 => 308,  315 => 248,  298 => 234,  281 => 220,  180 => 122,  121 => 66,  74 => 21,  70 => 20,  63 => 16,  56 => 15,  51 => 11,  49 => 18,  47 => 13,  40 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@ReferralCode/admin/edit.twig", "/var/www/html/eccube-4-new/app/Plugin/ReferralCode/Resource/template/admin/edit.twig");
    }
}
