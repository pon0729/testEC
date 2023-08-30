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

/* Product/list.twig */
class __TwigTemplate_5f7865d26e4664b31329403ca2ed1ef18f49b1a8e1f8a837dd07b3d397052f97 extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'javascript' => [$this, 'block_javascript'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return "default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Product/list.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Product/list.twig"));

        // line 13
        $context["body_class"] = "product_page";
        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "Product/list.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 15
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 16
        echo "    <script>
        eccube.productsClassCategories = {
            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 18, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["Product"]) {
            // line 19
            echo "            \"";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, false, 19), "js"), "html", null, true);
            echo "\": ";
            echo $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getClassCategoriesAsJson($context["Product"]);
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 19) == false)) {
                echo ", ";
            }
            // line 20
            echo "            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "        };

        \$(function() {

            // 表示件数を変更
            \$('.disp-number').change(function() {
                var dispNumber = \$(this).val();
                \$('#disp_number').val(dispNumber);
                \$('#pageno').val(1);
                \$(\"#form1\").submit();
            });

            // 並び順を変更
            \$('.order-by').change(function() {
                var orderBy = \$(this).val();
                \$('#orderby').val(orderBy);
                \$('#pageno').val(1);
                \$(\"#form1\").submit();
            });

            \$('.add-cart').on('click', function(e) {
                var \$form = \$(this).parents('li').find('form');

                // 個数フォームのチェック
                var \$quantity = \$form.parent().find('.quantity');
                if (\$quantity.val() < 1) {
                    \$quantity[0].setCustomValidity('";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("1以上で入力してください。"), "html", null, true);
        echo "');
                    setTimeout(function() {
                        loadingOverlay('hide');
                    }, 100);
                    return true;
                } else {
                    \$quantity[0].setCustomValidity('');
                }
                e.preventDefault();
                \$.ajax({
                    url: \$form.attr('action'),
                    type: \$form.attr('method'),
                    data: \$form.serialize(),
                    dataType: 'json',
                    beforeSend: function(xhr, settings) {
                        // Buttonを無効にする
                        \$('.add-cart').prop('disabled', true);
                    }
                }).done(function(data) {
                    // レスポンス内のメッセージをalertで表示
                    \$.each(data.messages, function() {
                        \$('#ec-modal-header').html(this);
                    });

                    \$('#ec-modal-checkbox').prop('checked', true);

                    // カートブロックを更新する
                    \$.ajax({
                        url: '";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("block_cart");
        echo "',
                        type: 'GET',
                        dataType: 'html'
                    }).done(function(html) {
                        \$('.ec-headerRole__cart').html(html);
                    });
                }).fail(function(data) {
                    alert('";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("カートへの追加に失敗しました。"), "html", null, true);
        echo "');
                }).always(function(data) {
                    // Buttonを有効にする
                    \$('.add-cart').prop('disabled', false);
                });
            });
        });
    </script>
\t<script>
\t    // 数量ボタンアクション
      (() => {
        const num = document.getElementById('quantity');
        const up = document.getElementById('btn-up');
        const down = document.getElementById('btn-down');
        //ボタンが押されたらカウント減
        down.addEventListener('click', (event) => {
          if(num.value >= 1) {
            num.value--;
          }
        });
        //ボタンが押されたらカウント増
        up.addEventListener('click', (event) => {
            num.value++;
          })
      })();
\t</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 110
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 111
        echo "    ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["search_form"]) || array_key_exists("search_form", $context) ? $context["search_form"] : (function () { throw new RuntimeError('Variable "search_form" does not exist.', 111, $this->source); })()), "category_id", [], "any", false, false, false, 111), "vars", [], "any", false, false, false, 111), "errors", [], "any", false, false, false, 111)) > 0)) {
            // line 112
            echo "        <div class=\"ec-searchnavRole\">
            <p class=\"errormsg text-danger\">";
            // line 113
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご指定のカテゴリは存在しません"), "html", null, true);
            echo "</p>
        </div>
    ";
        } else {
            // line 116
            echo "        <div class=\"ec-searchnavRole\">
            <form name=\"form1\" id=\"form1\" method=\"get\" action=\"?\">
                ";
            // line 118
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["search_form"]) || array_key_exists("search_form", $context) ? $context["search_form"] : (function () { throw new RuntimeError('Variable "search_form" does not exist.', 118, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 119
                echo "                    <input type=\"hidden\" id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "vars", [], "any", false, false, false, 119), "id", [], "any", false, false, false, 119), "html", null, true);
                echo "\"
                           name=\"";
                // line 120
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "vars", [], "any", false, false, false, 120), "full_name", [], "any", false, false, false, 120), "html", null, true);
                echo "\"
                           ";
                // line 121
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "vars", [], "any", false, false, false, 121), "value", [], "any", false, false, false, 121))) {
                    echo "value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "vars", [], "any", false, false, false, 121), "value", [], "any", false, false, false, 121), "html", null, true);
                    echo "\" ";
                }
                echo "/>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            echo "            </form>
            <div class=\"ec-searchnavRole__topicpath\">
                <ol class=\"ec-topicpath\">
                    <li class=\"ec-topicpath__item";
            // line 126
            if ((null === (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 126, $this->source); })()))) {
                echo "--active";
            }
            echo "\"><a>ALL ITEM</a>
                    </li>
                    ";
            // line 128
            if ( !(null === (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 128, $this->source); })()))) {
                // line 129
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 129, $this->source); })()), "path", [], "any", false, false, false, 129));
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
                foreach ($context['_seq'] as $context["_key"] => $context["Path"]) {
                    // line 130
                    echo "                            <li class=\"ec-topicpath__divider\">|</li>
                            <li class=\"ec-topicpath__item";
                    // line 131
                    if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 131)) {
                        echo "--active";
                    }
                    echo "\"><a
                                        href=\"";
                    // line 132
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
                    echo "?category_id=";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Path"], "id", [], "any", false, false, false, 132), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Path"], "name", [], "any", false, false, false, 132), "html", null, true);
                    echo "</a>
                            </li>
                        ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Path'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 135
                echo "                    ";
            }
            // line 136
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["search_form"]) || array_key_exists("search_form", $context) ? $context["search_form"] : (function () { throw new RuntimeError('Variable "search_form" does not exist.', 136, $this->source); })()), "vars", [], "any", false, false, false, 136), "value", [], "any", false, false, false, 136) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["search_form"]) || array_key_exists("search_form", $context) ? $context["search_form"] : (function () { throw new RuntimeError('Variable "search_form" does not exist.', 136, $this->source); })()), "vars", [], "any", false, false, false, 136), "value", [], "any", false, false, false, 136), "name", [], "any", false, false, false, 136))) {
                // line 137
                echo "                        <li class=\"ec-topicpath__divider\">|</li>
                        <li class=\"ec-topicpath__item\">";
                // line 138
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("「%name%」の検索結果", ["%name%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["search_form"]) || array_key_exists("search_form", $context) ? $context["search_form"] : (function () { throw new RuntimeError('Variable "search_form" does not exist.', 138, $this->source); })()), "vars", [], "any", false, false, false, 138), "value", [], "any", false, false, false, 138), "name", [], "any", false, false, false, 138)]), "html", null, true);
                echo "</li>
                    ";
            }
            // line 140
            echo "                </ol>
            </div>
            <div class=\"ec-searchnavRole__infos\">
                <div class=\"ec-searchnavRole__counter\">
                    ";
            // line 144
            if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 144, $this->source); })()), "totalItemCount", [], "any", false, false, false, 144) > 0)) {
                // line 145
                echo "                        ";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("<span class=\"ec-font-bold\">%count%件</span>", ["%count%" => twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 145, $this->source); })()), "totalItemCount", [], "any", false, false, false, 145)]);
                echo "
                    ";
            } else {
                // line 147
                echo "                        <span>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お探しの商品はみつかりませんでした"), "html", null, true);
                echo "</span>
                    ";
            }
            // line 149
            echo "                </div>
                ";
            // line 150
            if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 150, $this->source); })()), "totalItemCount", [], "any", false, false, false, 150) > 0)) {
                // line 151
                echo "                    <div class=\"ec-searchnavRole__actions\">
                        <div class=\"ec-select\">
                            ";
                // line 153
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["disp_number_form"]) || array_key_exists("disp_number_form", $context) ? $context["disp_number_form"] : (function () { throw new RuntimeError('Variable "disp_number_form" does not exist.', 153, $this->source); })()), 'widget', ["id" => "", "attr" => ["class" => "disp-number"]]);
                echo "
                            ";
                // line 154
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["order_by_form"]) || array_key_exists("order_by_form", $context) ? $context["order_by_form"] : (function () { throw new RuntimeError('Variable "order_by_form" does not exist.', 154, $this->source); })()), 'widget', ["id" => "", "attr" => ["class" => "order-by"]]);
                echo "
                        </div>
                    </div>
                ";
            }
            // line 158
            echo "            </div>
        </div>
        ";
            // line 160
            if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 160, $this->source); })()), "totalItemCount", [], "any", false, false, false, 160) > 0)) {
                // line 161
                echo "            <div class=\"ec-shelfRole\">
                <ul class=\"ec-shelfGrid\">
                    ";
                // line 163
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 163, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["Product"]) {
                    // line 164
                    echo "                        <li class=\"ec-shelfGrid__item\">
                            <a href=\"";
                    // line 165
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, false, 165)]), "html", null, true);
                    echo "\">
                                <p class=\"ec-shelfGrid__item-image\">
                                    <img src=\"";
                    // line 167
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct(twig_get_attribute($this->env, $this->source, $context["Product"], "main_list_image", [], "any", false, false, false, 167)), "save_image"), "html", null, true);
                    echo "\">
                                </p>
                                <p class=\"ec-shelfGrid__item-name\">";
                    // line 169
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Product"], "name", [], "any", false, false, false, 169), "html", null, true);
                    echo "</p>
                                ";
                    // line 170
                    if (twig_get_attribute($this->env, $this->source, $context["Product"], "description_list", [], "any", false, false, false, 170)) {
                        // line 171
                        echo "                                    <p class=\"ec-shelfGrid__item-description\">";
                        echo nl2br(twig_get_attribute($this->env, $this->source, $context["Product"], "description_list", [], "any", false, false, false, 171));
                        echo "</p>
                                ";
                    }
                    // line 173
                    echo "                                <p class=\"price02-default\">
                                    ";
                    // line 174
                    if (twig_get_attribute($this->env, $this->source, $context["Product"], "hasProductClass", [], "any", false, false, false, 174)) {
                        // line 175
                        echo "                                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["Product"], "getPrice02Min", [], "any", false, false, false, 175) == twig_get_attribute($this->env, $this->source, $context["Product"], "getPrice02Max", [], "any", false, false, false, 175))) {
                            // line 176
                            echo "                                            ";
                            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["Product"], "getPrice02IncTaxMin", [], "any", false, false, false, 176)), "html", null, true);
                            echo "
                                        ";
                        } else {
                            // line 178
                            echo "                                            ";
                            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["Product"], "getPrice02IncTaxMin", [], "any", false, false, false, 178)), "html", null, true);
                            echo " ～ ";
                            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["Product"], "getPrice02IncTaxMax", [], "any", false, false, false, 178)), "html", null, true);
                            echo "
                                        ";
                        }
                        // line 180
                        echo "                                    ";
                    } else {
                        // line 181
                        echo "                                        ";
                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["Product"], "getPrice02IncTaxMin", [], "any", false, false, false, 181)), "html", null, true);
                        echo "
                                    ";
                    }
                    // line 183
                    echo "                                </p>
                            </a>

                            ";
                    // line 186
                    if (twig_get_attribute($this->env, $this->source, $context["Product"], "stock_find", [], "any", false, false, false, 186)) {
                        // line 187
                        echo "                                ";
                        $context["form"] = twig_get_attribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 187, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, false, 187), [], "array", false, false, false, 187);
                        // line 188
                        echo "                                <form name=\"form";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, false, 188), "html", null, true);
                        echo "\" id=\"productForm";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, false, 188), "html", null, true);
                        echo "\" action=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_add_cart", ["id" => twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, false, 188)]), "html", null, true);
                        echo "\" method=\"post\">
                                    <div class=\"ec-productRole__actions\">
                                        ";
                        // line 190
                        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id1", [], "any", true, true, false, 190)) {
                            // line 191
                            echo "                                            <div class=\"ec-select\">
                                                ";
                            // line 192
                            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 192, $this->source); })()), "classcategory_id1", [], "any", false, false, false, 192), 'widget');
                            echo "
                                                ";
                            // line 193
                            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 193, $this->source); })()), "classcategory_id1", [], "any", false, false, false, 193), 'errors');
                            echo "
                                            </div>
                                            ";
                            // line 195
                            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id2", [], "any", true, true, false, 195)) {
                                // line 196
                                echo "                                                <div class=\"ec-select\">
                                                    ";
                                // line 197
                                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 197, $this->source); })()), "classcategory_id2", [], "any", false, false, false, 197), 'widget');
                                echo "
                                                    ";
                                // line 198
                                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 198, $this->source); })()), "classcategory_id2", [], "any", false, false, false, 198), 'errors');
                                echo "
                                                </div>
                                            ";
                            }
                            // line 201
                            echo "                                        ";
                        }
                        // line 202
                        echo "                                        <div class=\"ec-numberInput\"><span>";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("数量"), "html", null, true);
                        echo "</span>
                                            ";
                        // line 203
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 203, $this->source); })()), "quantity", [], "any", false, false, false, 203), 'widget', ["attr" => ["class" => "quantity"]]);
                        echo "
                                            ";
                        // line 204
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 204, $this->source); })()), "quantity", [], "any", false, false, false, 204), 'errors');
                        echo "
                                        </div>
                                    </div>
                                    ";
                        // line 207
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 207, $this->source); })()), 'rest');
                        echo "
                                </form>
                                    <div class=\"quantity-btn\">
                                     <button id=\"btn-up\" class=\"input-btn\" onclick=\"fnOrderPlusMinus(";
                        // line 210
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, false, 210), "html", null, true);
                        echo ",true)\">＋</button>
                                     <button id=\"btn-down\" class=\"input-btn\" onclick=\"fnOrderPlusMinus(";
                        // line 211
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, false, 211), "html", null, true);
                        echo ",false)\">－</button>
                                    </div>
                                <div class=\"ec-productRole__btn\">
                                    <button type=\"submit\" class=\"ec-blockBtn--action add-cart\" data-cartid=\"";
                        // line 214
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, false, 214), "html", null, true);
                        echo "\" form=\"productForm";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, false, 214), "html", null, true);
                        echo "\">
                                        ";
                        // line 215
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("カートに入れる"), "html", null, true);
                        echo "
                                    </button>
                                </div>
                            ";
                    } else {
                        // line 219
                        echo "                                <div class=\"ec-productRole__btn\">
                                    <button type=\"button\" class=\"ec-blockBtn--action\" disabled=\"disabled\">
                                        ";
                        // line 221
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ただいま品切れ中です。"), "html", null, true);
                        echo "
                                    </button>
                                </div>
                            ";
                    }
                    // line 225
                    echo "                        </li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 227
                echo "                </ul>
            </div>
            <div class=\"ec-modal\">
                <input type=\"checkbox\" id=\"ec-modal-checkbox\" class=\"checkbox\">
                <div class=\"ec-modal-overlay\">
                    <label for=\"ec-modal-checkbox\" class=\"ec-modal-overlay-close\"></label>
                    <div class=\"ec-modal-wrap\">
                        <label for=\"ec-modal-checkbox\" class=\"ec-modal-close\"><span class=\"ec-icon\"><img src=\"";
                // line 234
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/cross-dark.svg"), "html", null, true);
                echo "\" alt=\"\"/></span></label>
                        <div id=\"ec-modal-header\" class=\"text-center\">";
                // line 235
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("カートに追加しました。"), "html", null, true);
                echo "</div>
                        <div class=\"ec-modal-box\">
                            <div class=\"ec-role\">
                                <label for=\"ec-modal-checkbox\" class=\"ec-inlineBtn--cancel\">";
                // line 238
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お買い物を続ける"), "html", null, true);
                echo "</label>
                                <a href=\"";
                // line 239
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("cart");
                echo "\" class=\"ec-inlineBtn--action\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("カートへ進む"), "html", null, true);
                echo "</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"ec-pagerRole\">
                ";
                // line 246
                $this->loadTemplate("pager.twig", "Product/list.twig", 246)->display(twig_array_merge($context, ["pages" => twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 246, $this->source); })()), "paginationData", [], "any", false, false, false, 246)]));
                // line 247
                echo "            </div>
        ";
            }
            // line 249
            echo "    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Product/list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  613 => 249,  609 => 247,  607 => 246,  595 => 239,  591 => 238,  585 => 235,  581 => 234,  572 => 227,  565 => 225,  558 => 221,  554 => 219,  547 => 215,  541 => 214,  535 => 211,  531 => 210,  525 => 207,  519 => 204,  515 => 203,  510 => 202,  507 => 201,  501 => 198,  497 => 197,  494 => 196,  492 => 195,  487 => 193,  483 => 192,  480 => 191,  478 => 190,  468 => 188,  465 => 187,  463 => 186,  458 => 183,  452 => 181,  449 => 180,  441 => 178,  435 => 176,  432 => 175,  430 => 174,  427 => 173,  421 => 171,  419 => 170,  415 => 169,  410 => 167,  405 => 165,  402 => 164,  398 => 163,  394 => 161,  392 => 160,  388 => 158,  381 => 154,  377 => 153,  373 => 151,  371 => 150,  368 => 149,  362 => 147,  356 => 145,  354 => 144,  348 => 140,  343 => 138,  340 => 137,  337 => 136,  334 => 135,  313 => 132,  307 => 131,  304 => 130,  286 => 129,  284 => 128,  277 => 126,  272 => 123,  260 => 121,  256 => 120,  251 => 119,  247 => 118,  243 => 116,  237 => 113,  234 => 112,  231 => 111,  221 => 110,  184 => 82,  174 => 75,  143 => 47,  115 => 21,  101 => 20,  93 => 19,  76 => 18,  72 => 16,  62 => 15,  51 => 11,  49 => 13,  36 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("{#
This file is part of EC-CUBE

Copyright(c) EC-CUBE CO.,LTD. All Rights Reserved.

http://www.ec-cube.co.jp/

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.
#}
{% extends 'default_frame.twig' %}

{% set body_class = 'product_page' %}

{% block javascript %}
    <script>
        eccube.productsClassCategories = {
            {% for Product in pagination %}
            \"{{ Product.id|escape('js') }}\": {{ class_categories_as_json(Product)|raw }}{% if loop.last == false %}, {% endif %}
            {% endfor %}
        };

        \$(function() {

            // 表示件数を変更
            \$('.disp-number').change(function() {
                var dispNumber = \$(this).val();
                \$('#disp_number').val(dispNumber);
                \$('#pageno').val(1);
                \$(\"#form1\").submit();
            });

            // 並び順を変更
            \$('.order-by').change(function() {
                var orderBy = \$(this).val();
                \$('#orderby').val(orderBy);
                \$('#pageno').val(1);
                \$(\"#form1\").submit();
            });

            \$('.add-cart').on('click', function(e) {
                var \$form = \$(this).parents('li').find('form');

                // 個数フォームのチェック
                var \$quantity = \$form.parent().find('.quantity');
                if (\$quantity.val() < 1) {
                    \$quantity[0].setCustomValidity('{{ '1以上で入力してください。'|trans }}');
                    setTimeout(function() {
                        loadingOverlay('hide');
                    }, 100);
                    return true;
                } else {
                    \$quantity[0].setCustomValidity('');
                }
                e.preventDefault();
                \$.ajax({
                    url: \$form.attr('action'),
                    type: \$form.attr('method'),
                    data: \$form.serialize(),
                    dataType: 'json',
                    beforeSend: function(xhr, settings) {
                        // Buttonを無効にする
                        \$('.add-cart').prop('disabled', true);
                    }
                }).done(function(data) {
                    // レスポンス内のメッセージをalertで表示
                    \$.each(data.messages, function() {
                        \$('#ec-modal-header').html(this);
                    });

                    \$('#ec-modal-checkbox').prop('checked', true);

                    // カートブロックを更新する
                    \$.ajax({
                        url: '{{ url('block_cart') }}',
                        type: 'GET',
                        dataType: 'html'
                    }).done(function(html) {
                        \$('.ec-headerRole__cart').html(html);
                    });
                }).fail(function(data) {
                    alert('{{ 'カートへの追加に失敗しました。'|trans }}');
                }).always(function(data) {
                    // Buttonを有効にする
                    \$('.add-cart').prop('disabled', false);
                });
            });
        });
    </script>
\t<script>
\t    // 数量ボタンアクション
      (() => {
        const num = document.getElementById('quantity');
        const up = document.getElementById('btn-up');
        const down = document.getElementById('btn-down');
        //ボタンが押されたらカウント減
        down.addEventListener('click', (event) => {
          if(num.value >= 1) {
            num.value--;
          }
        });
        //ボタンが押されたらカウント増
        up.addEventListener('click', (event) => {
            num.value++;
          })
      })();
\t</script>
{% endblock %}

{% block main %}
    {% if search_form.category_id.vars.errors|length > 0 %}
        <div class=\"ec-searchnavRole\">
            <p class=\"errormsg text-danger\">{{ 'ご指定のカテゴリは存在しません'|trans }}</p>
        </div>
    {% else %}
        <div class=\"ec-searchnavRole\">
            <form name=\"form1\" id=\"form1\" method=\"get\" action=\"?\">
                {% for item in search_form %}
                    <input type=\"hidden\" id=\"{{ item.vars.id }}\"
                           name=\"{{ item.vars.full_name }}\"
                           {% if item.vars.value is not empty %}value=\"{{ item.vars.value }}\" {% endif %}/>
                {% endfor %}
            </form>
            <div class=\"ec-searchnavRole__topicpath\">
                <ol class=\"ec-topicpath\">
                    <li class=\"ec-topicpath__item{% if Category is null %}--active{% endif %}\"><a>ALL ITEM</a>
                    </li>
                    {% if Category is not null %}
                        {% for Path in Category.path %}
                            <li class=\"ec-topicpath__divider\">|</li>
                            <li class=\"ec-topicpath__item{% if loop.last %}--active{% endif %}\"><a
                                        href=\"{{ url('product_list') }}?category_id={{ Path.id }}\">{{ Path.name }}</a>
                            </li>
                        {% endfor %}
                    {% endif %}
                    {% if search_form.vars.value and search_form.vars.value.name %}
                        <li class=\"ec-topicpath__divider\">|</li>
                        <li class=\"ec-topicpath__item\">{{ '「%name%」の検索結果'|trans({ '%name%': search_form.vars.value.name }) }}</li>
                    {% endif %}
                </ol>
            </div>
            <div class=\"ec-searchnavRole__infos\">
                <div class=\"ec-searchnavRole__counter\">
                    {% if pagination.totalItemCount > 0 %}
                        {{ '<span class=\"ec-font-bold\">%count%件</span>'|trans({ '%count%': pagination.totalItemCount })|raw }}
                    {% else %}
                        <span>{{ 'お探しの商品はみつかりませんでした'|trans }}</span>
                    {% endif %}
                </div>
                {% if pagination.totalItemCount > 0 %}
                    <div class=\"ec-searchnavRole__actions\">
                        <div class=\"ec-select\">
                            {{ form_widget(disp_number_form, {'id': '', 'attr': {'class': 'disp-number'}}) }}
                            {{ form_widget(order_by_form, {'id': '', 'attr': {'class': 'order-by'}}) }}
                        </div>
                    </div>
                {% endif %}
            </div>
        </div>
        {% if pagination.totalItemCount > 0 %}
            <div class=\"ec-shelfRole\">
                <ul class=\"ec-shelfGrid\">
                    {% for Product in pagination %}
                        <li class=\"ec-shelfGrid__item\">
                            <a href=\"{{ url('product_detail', {'id': Product.id}) }}\">
                                <p class=\"ec-shelfGrid__item-image\">
                                    <img src=\"{{ asset(Product.main_list_image|no_image_product, 'save_image') }}\">
                                </p>
                                <p class=\"ec-shelfGrid__item-name\">{{ Product.name }}</p>
                                {% if Product.description_list %}
                                    <p class=\"ec-shelfGrid__item-description\">{{ Product.description_list|raw|nl2br }}</p>
                                {% endif %}
                                <p class=\"price02-default\">
                                    {% if Product.hasProductClass %}
                                        {% if Product.getPrice02Min == Product.getPrice02Max %}
                                            {{ Product.getPrice02IncTaxMin|price }}
                                        {% else %}
                                            {{ Product.getPrice02IncTaxMin|price }} ～ {{ Product.getPrice02IncTaxMax|price }}
                                        {% endif %}
                                    {% else %}
                                        {{ Product.getPrice02IncTaxMin|price }}
                                    {% endif %}
                                </p>
                            </a>

                            {% if Product.stock_find %}
                                {% set form = forms[Product.id] %}
                                <form name=\"form{{ Product.id }}\" id=\"productForm{{ Product.id }}\" action=\"{{ url('product_add_cart', {id:Product.id}) }}\" method=\"post\">
                                    <div class=\"ec-productRole__actions\">
                                        {% if form.classcategory_id1 is defined %}
                                            <div class=\"ec-select\">
                                                {{ form_widget(form.classcategory_id1) }}
                                                {{ form_errors(form.classcategory_id1) }}
                                            </div>
                                            {% if form.classcategory_id2 is defined %}
                                                <div class=\"ec-select\">
                                                    {{ form_widget(form.classcategory_id2) }}
                                                    {{ form_errors(form.classcategory_id2) }}
                                                </div>
                                            {% endif %}
                                        {% endif %}
                                        <div class=\"ec-numberInput\"><span>{{ '数量'|trans }}</span>
                                            {{ form_widget(form.quantity, {'attr': {'class': 'quantity'}}) }}
                                            {{ form_errors(form.quantity) }}
                                        </div>
                                    </div>
                                    {{ form_rest(form) }}
                                </form>
                                    <div class=\"quantity-btn\">
                                     <button id=\"btn-up\" class=\"input-btn\" onclick=\"fnOrderPlusMinus({{ Product.id }},true)\">＋</button>
                                     <button id=\"btn-down\" class=\"input-btn\" onclick=\"fnOrderPlusMinus({{ Product.id }},false)\">－</button>
                                    </div>
                                <div class=\"ec-productRole__btn\">
                                    <button type=\"submit\" class=\"ec-blockBtn--action add-cart\" data-cartid=\"{{ Product.id }}\" form=\"productForm{{ Product.id }}\">
                                        {{ 'カートに入れる'|trans }}
                                    </button>
                                </div>
                            {% else %}
                                <div class=\"ec-productRole__btn\">
                                    <button type=\"button\" class=\"ec-blockBtn--action\" disabled=\"disabled\">
                                        {{ 'ただいま品切れ中です。'|trans }}
                                    </button>
                                </div>
                            {% endif %}
                        </li>
                    {% endfor %}
                </ul>
            </div>
            <div class=\"ec-modal\">
                <input type=\"checkbox\" id=\"ec-modal-checkbox\" class=\"checkbox\">
                <div class=\"ec-modal-overlay\">
                    <label for=\"ec-modal-checkbox\" class=\"ec-modal-overlay-close\"></label>
                    <div class=\"ec-modal-wrap\">
                        <label for=\"ec-modal-checkbox\" class=\"ec-modal-close\"><span class=\"ec-icon\"><img src=\"{{ asset('assets/icon/cross-dark.svg') }}\" alt=\"\"/></span></label>
                        <div id=\"ec-modal-header\" class=\"text-center\">{{ 'カートに追加しました。'|trans }}</div>
                        <div class=\"ec-modal-box\">
                            <div class=\"ec-role\">
                                <label for=\"ec-modal-checkbox\" class=\"ec-inlineBtn--cancel\">{{ 'お買い物を続ける'|trans }}</label>
                                <a href=\"{{ url('cart') }}\" class=\"ec-inlineBtn--action\">{{ 'カートへ進む'|trans }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"ec-pagerRole\">
                {% include \"pager.twig\" with {'pages': pagination.paginationData} %}
            </div>
        {% endif %}
    {% endif %}
{% endblock %}", "Product/list.twig", "/var/www/html/eccube-4-new/app/template/responceWebDesign/Product/list.twig");
    }
}
