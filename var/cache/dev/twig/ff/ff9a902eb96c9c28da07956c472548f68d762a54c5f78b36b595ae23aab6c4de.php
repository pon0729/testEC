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

/* Product/detail.twig */
class __TwigTemplate_0ff3c8039b35d571796054adaea2a93d62bb74e658b4703415da2e51e7ad336c extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Product/detail.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Product/detail.twig"));

        // line 13
        $context["body_class"] = "product_page";
        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "Product/detail.twig", 11);
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
        eccube.classCategories = ";
        // line 17
        echo $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getClassCategoriesAsJson((isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 17, $this->source); })()));
        echo ";

        // 規格2に選択肢を割り当てる。
        function fnSetClassCategories(form, classcat_id2_selected) {
            var \$form = \$(form);
            var product_id = \$form.find('input[name=product_id]').val();
            var \$sele1 = \$form.find('select[name=classcategory_id1]');
            var \$sele2 = \$form.find('select[name=classcategory_id2]');
            eccube.setClassCategories(\$form, product_id, \$sele1, \$sele2, classcat_id2_selected);
        }

        ";
        // line 28
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id2", [], "any", true, true, false, 28)) {
            // line 29
            echo "        fnSetClassCategories(
            \$('#form1'), ";
            // line 30
            echo json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "classcategory_id2", [], "any", false, false, false, 30), "vars", [], "any", false, false, false, 30), "value", [], "any", false, false, false, 30));
            echo "
        );
        ";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 32
($context["form"] ?? null), "classcategory_id1", [], "any", true, true, false, 32)) {
            // line 33
            echo "        eccube.checkStock(\$('#form1'), ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 33, $this->source); })()), "id", [], "any", false, false, false, 33), "html", null, true);
            echo ", ";
            echo json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "classcategory_id1", [], "any", false, false, false, 33), "vars", [], "any", false, false, false, 33), "value", [], "any", false, false, false, 33));
            echo ", null);
        ";
        }
        // line 35
        echo "    </script>
    <script>
        \$(function() {
            // bfcache無効化
            \$(window).bind('pageshow', function(event) {
                if (event.originalEvent.persisted) {
                    location.reload(true);
                }
            });
        });
        \$(window).on('load', function() {
            \$('.item_visual').slick(
                {
                dots: false,
                arrows: false,
                responsive: [{
                    breakpoint: 1000,
                    settings: {
                        dots: true
                    }
                },
                {
                    breakpoint: 415,
                    settings: {
                        dots: false
                    }
                }]
            });

            \$('.slideThumb').on('click', function() {
                var index = \$(this).attr('data-index');
                \$('.item_visual').slick('slickGoTo', index, false);
            });
        });
    </script>
    <script>
        \$(function() {
            \$('.add-cart').on('click', function(event) {
                ";
        // line 73
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id1", [], "any", true, true, false, 73)) {
            // line 74
            echo "                // 規格1フォームの必須チェック
                if (\$('#classcategory_id1').val() == '__unselected' || \$('#classcategory_id1').val() == '') {
                    \$('#classcategory_id1')[0].setCustomValidity('";
            // line 76
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("項目が選択されていません"), "html", null, true);
            echo "');
                    return true;
                } else {
                    \$('#classcategory_id1')[0].setCustomValidity('');
                }
                ";
        }
        // line 82
        echo "
                ";
        // line 83
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id2", [], "any", true, true, false, 83)) {
            // line 84
            echo "                // 規格2フォームの必須チェック
                if (\$('#classcategory_id2').val() == '__unselected' || \$('#classcategory_id2').val() == '') {
                    \$('#classcategory_id2')[0].setCustomValidity('";
            // line 86
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("項目が選択されていません"), "html", null, true);
            echo "');
                    return true;
                } else {
                    \$('#classcategory_id2')[0].setCustomValidity('');
                }
                ";
        }
        // line 92
        echo "
                // 個数フォームのチェック
                if (\$('#quantity').val() < 1) {
                    \$('#quantity')[0].setCustomValidity('";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("1以上で入力してください。"), "html", null, true);
        echo "');
                    return true;
                } else {
                    \$('#quantity')[0].setCustomValidity('');
                }

                event.preventDefault();
                \$form = \$('#form1');
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
                        url: \"";
        // line 122
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("block_cart");
        echo "\",
                        type: 'GET',
                        dataType: 'html'
                    }).done(function(html) {
                        \$('.ec-headerRole__cart').html(html);
                    });
                }).fail(function(data) {
                    alert('";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("カートへの追加に失敗しました。"), "html", null, true);
        echo "');
                }).always(function(data) {
                    // Buttonを有効にする
                    \$('.add-cart').prop('disabled', false);
                });
            });
        });
    </script>
    <script>
    (function() {
      // 関連商品プラグインの表示位置調整、およびslick適応
      function plgRelatedProduct_onLoad() {
        var attachSlick = function attachSlick() {
          \$wrapper
            .find('.ec-productRelatedRole__plugin .ec-shelfGrid')
            .slick({
              swipe: true,
              autoplay: true,
              fade: false,
              speed: 500,
              infinite: true,
              slidesToShow: 6,
              slidesToScroll: 6,
              prevArrow:'<button type=\"button\" class=\"slick-prev\"><span class=\"angle-circle\"><svg class=\"cb cb-angle-right\"><use xlink:href=\"#cb-angle-right\" /></svg></span></button>',
              nextArrow:'<button type=\"button\" class=\"slick-next\"><span class=\"angle-circle\"><svg class=\"cb cb-angle-right\"><use xlink:href=\"#cb-angle-right\" /></svg></span></button>',
              responsive: [
                {
                  breakpoint: 1020,
                  settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    arrows: false,
                    dots: true,
                  }
                },
                {
                  breakpoint: 800,
                  settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    dots: true,
                    arrows: false,
                  }
                },
                {
                  breakpoint: 480,
                  settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    dots: true,
                    arrows: false,
                  }
                }
              ]
            });
          /*
            .slick({
              infinite: false,
              speed: 300,
              slidesToShow: 4,
              slidesToScroll: 4,
              responsive: [{
                breakpoint: 768,
                settings: {
                  slidesToShow: 3,
                  slidesToScroll: 3
                }
              }]
            });
            */
        };

        var \$plgRelatedProduct = \$('#RelatedProduct-product_area'),
            \$wrapper = \$('.ec-productRelatedRole'),
            item_count = \$plgRelatedProduct.find('.ec-shelfGrid__item').length;

        if (item_count > 0) {
          \$plgRelatedProduct.prependTo(\$wrapper.find('.ec-productRelatedRole__plugin'));
          setTimeout(attachSlick, 100);
        } else {
          \$plgRelatedProduct.hide();
          \$wrapper.hide();
        }
      }

      // 商品レビュープラグインのタイトル位置調整
      function plgProductReview_onLoad() {
        \$('#product_review_area #reviewContent li').each(function() {
          var \$title = \$(this).find('.review_date + strong');
          \$('.review_date .recommend_name').after(\$title);
        });
      }

      \$(window).on('load', function() {
        plgRelatedProduct_onLoad();
        plgProductReview_onLoad();
      });
    })();
    // 数量ボタンアクション
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
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 247
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 248
        echo "    <div class=\"ec-productRole\">
      <div class=\"all_topicpath\">
        <ol class=\"ec-topicpath_all\">
          <li class=\"home_path\"><a href=\"https://gift-communication.shop/\">TOP</a></li>
          <li class=\"ec-topicpath_all_divider\"> ＞</li>
            ";
        // line 253
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 253, $this->source); })()), "ProductCategories", [], "any", false, false, false, 253));
        foreach ($context['_seq'] as $context["_key"] => $context["ProductCategory"]) {
            // line 254
            echo "                <li class=\"ec-topicpath_all_category\">
                    ";
            // line 255
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ProductCategory"], "Category", [], "any", false, false, false, 255), "path", [], "any", false, false, false, 255));
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
            foreach ($context['_seq'] as $context["_key"] => $context["Category"]) {
                // line 256
                echo "                        <a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
                echo "?category_id=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 256), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Category"], "name", [], "any", false, false, false, 256), "html", null, true);
                echo "</a>";
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 256) == false)) {
                    // line 257
                    echo "                        ";
                }
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 259
            echo "                </li>
                <li class=\"ec-topicpath_all_divider\"> ＞</li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ProductCategory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 262
        echo "          <li class=\"ec-topicpath_all_product\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 262, $this->source); })()), "name", [], "any", false, false, false, 262), "html", null, true);
        echo "</li>
      　</ol>
      </div>
        <div class=\"ec-grid2\">
            <div class=\"ec-grid2__cell\">
                <div class=\"ec-sliderItemRole ec-productRole__slider\">
                    <div class=\"item_visual\">
                        ";
        // line 269
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 269, $this->source); })()), "ProductImage", [], "any", false, false, false, 269));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["ProductImage"]) {
            // line 270
            echo "                            <div class=\"slide-item\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($context["ProductImage"], "save_image"), "html", null, true);
            echo "\"></div>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 272
            echo "                            <div class=\"slide-item\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct(""), "save_image"), "html", null, true);
            echo "\"/></div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ProductImage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 274
        echo "                    </div>
                    <div class=\"item_nav\">
                        ";
        // line 276
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 276, $this->source); })()), "ProductImage", [], "any", false, false, false, 276));
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
        foreach ($context['_seq'] as $context["_key"] => $context["ProductImage"]) {
            // line 277
            echo "                            <div class=\"slideThumb\" data-index=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 277), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($context["ProductImage"], "save_image"), "html", null, true);
            echo "\"></div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ProductImage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 279
        echo "                    </div>
                </div>
            </div>
            <div class=\"ec-grid2__cell\">
                <div class=\"ec-productRole__profile\">
                    ";
        // line 285
        echo "                    <div class=\"ec-productRole__title\">
                        <h2 class=\"ec-headingTitle\">";
        // line 286
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 286, $this->source); })()), "name", [], "any", false, false, false, 286), "html", null, true);
        echo "</h2>
                    </div>
                    ";
        // line 288
        if (twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 288, $this->source); })()), "message", [], "any", false, false, false, 288)) {
            // line 289
            echo "                        <div class=\"ec-productRole__summary\">
                             ";
            // line 290
            echo twig_include($this->env, $context, twig_template_from_string($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 290, $this->source); })()), "message", [], "any", false, false, false, 290)));
            echo "
                        </div>
                    ";
        }
        // line 293
        echo "                    ";
        // line 294
        echo "                    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 294, $this->source); })()), "Tags", [], "any", false, false, false, 294))) {
            // line 295
            echo "                        <ul class=\"ec-productRole__tags\">
                            ";
            // line 296
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 296, $this->source); })()), "Tags", [], "any", false, false, false, 296));
            foreach ($context['_seq'] as $context["_key"] => $context["Tag"]) {
                // line 297
                echo "                                <li class=\"ec-productRole__tag tag_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Tag"], "id", [], "any", false, false, false, 297), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["Tag"], "html", null, true);
                echo "</li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 299
            echo "                        </ul>
                    ";
        }
        // line 301
        echo "                    ";
        // line 302
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 302, $this->source); })()), "hasProductClass", [], "any", false, false, false, 302)) {
            // line 303
            echo "<div class=\"ec-productRole__priceRegular\">
                            ";
            // line 304
            if (( !(null === twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 304, $this->source); })()), "getPrice01Min", [], "any", false, false, false, 304)) && (twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 304, $this->source); })()), "getPrice01IncTaxMin", [], "any", false, false, false, 304) == twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 304, $this->source); })()), "getPrice01IncTaxMax", [], "any", false, false, false, 304)))) {
                // line 305
                echo "                                <span class=\"ec-productRole__priceRegularPrice\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("通常価格"), "html", null, true);
                echo "：<span class=\"price01-default\">";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 305, $this->source); })()), "getPrice01IncTaxMin", [], "any", false, false, false, 305)), "html", null, true);
                echo "</span></span>
                                <span class=\"ec-productRole__priceRegularTax\">";
                // line 306
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("(税込)"), "html", null, true);
                echo "</span>
                            ";
            } elseif (( !(null === twig_get_attribute($this->env, $this->source,             // line 307
(isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 307, $this->source); })()), "getPrice01Min", [], "any", false, false, false, 307)) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 307, $this->source); })()), "getPrice01Max", [], "any", false, false, false, 307)))) {
                // line 308
                echo "                                <span class=\"ec-productRole__priceRegularPrice\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("通常価格"), "html", null, true);
                echo "：<span class=\"price01-default\">";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 308, $this->source); })()), "getPrice01IncTaxMin", [], "any", false, false, false, 308)), "html", null, true);
                echo "～ ";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 308, $this->source); })()), "getPrice01IncTaxMax", [], "any", false, false, false, 308)), "html", null, true);
                echo "</span></span>
                                <span class=\"ec-productRole__priceRegularTax\">";
                // line 309
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("(税込)"), "html", null, true);
                echo "</span>
                            ";
            }
            // line 311
            echo "                        </div>
                    ";
        } else {
            // line 313
            echo "                        ";
            if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 313, $this->source); })()), "getPrice01Max", [], "any", false, false, false, 313))) {
                // line 314
                echo "                            <span class=\"ec-productRole__priceRegularPrice\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("通常価格"), "html", null, true);
                echo "：<span class=\"price01-default\">";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 314, $this->source); })()), "getPrice01IncTaxMin", [], "any", false, false, false, 314)), "html", null, true);
                echo "</span></span>
                            <span class=\"ec-productRole__priceRegularTax\">";
                // line 315
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("(税込)"), "html", null, true);
                echo "</span>
                        ";
            }
            // line 317
            echo "                    ";
        }
        // line 318
        echo "                    ";
        // line 319
        echo "                    <div class=\"ec-productRole__price\">
                        ";
        // line 320
        if (twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 320, $this->source); })()), "hasProductClass", [], "any", false, false, false, 320)) {
            // line 321
            if ((twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 321, $this->source); })()), "getPrice02IncTaxMin", [], "any", false, false, false, 321) == twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 321, $this->source); })()), "getPrice02IncTaxMax", [], "any", false, false, false, 321))) {
                // line 322
                echo "                                <div class=\"ec-price\">
                                    <span class=\"ec-price__price price02-default\">";
                // line 323
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 323, $this->source); })()), "getPrice02IncTaxMin", [], "any", false, false, false, 323)), "html", null, true);
                echo "</span>
                                    <span class=\"ec-price__tax\">";
                // line 324
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("(税込)"), "html", null, true);
                echo "</span>
                                </div>
                            ";
            } else {
                // line 327
                echo "                                <div class=\"ec-price\">
                                    <span class=\"ec-price__price price02-default\">";
                // line 328
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 328, $this->source); })()), "getPrice02IncTaxMin", [], "any", false, false, false, 328)), "html", null, true);
                echo " ～ ";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 328, $this->source); })()), "getPrice02IncTaxMax", [], "any", false, false, false, 328)), "html", null, true);
                echo "</span>
                                    <span class=\"ec-price__tax\">";
                // line 329
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("(税込)"), "html", null, true);
                echo "</span>
                                </div>
                            ";
            }
            // line 332
            echo "                        ";
        } else {
            // line 333
            echo "                            <div class=\"ec-price\">
                                <span class=\"ec-price__price\">";
            // line 334
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 334, $this->source); })()), "getPrice02IncTaxMin", [], "any", false, false, false, 334)), "html", null, true);
            echo "</span>
                                <span class=\"ec-price__tax\">";
            // line 335
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("(税込)"), "html", null, true);
            echo "</span>
                            </div>
                        ";
        }
        // line 338
        echo "                    </div>
                    ";
        // line 340
        echo "                    ";
        // line 344
        echo "                    <div class=\"ec-productRole__cartWrapper\">
                        <form action=\"";
        // line 345
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_add_cart", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 345, $this->source); })()), "id", [], "any", false, false, false, 345)]), "html", null, true);
        echo "\" method=\"post\" id=\"form1\" name=\"form1\">
                            ";
        // line 346
        if (twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 346, $this->source); })()), "stock_find", [], "any", false, false, false, 346)) {
            // line 347
            echo "                                <div class=\"ec-productRole__actions\">
                                    ";
            // line 348
            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id1", [], "any", true, true, false, 348)) {
                // line 349
                echo "                                        <div class=\"ec-select\">
                                            ";
                // line 350
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 350, $this->source); })()), "classcategory_id1", [], "any", false, false, false, 350), 'widget');
                echo "
                                            ";
                // line 351
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 351, $this->source); })()), "classcategory_id1", [], "any", false, false, false, 351), 'errors');
                echo "
                                        </div>
                                        ";
                // line 353
                if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id2", [], "any", true, true, false, 353)) {
                    // line 354
                    echo "                                            <div class=\"ec-select\">
                                                ";
                    // line 355
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 355, $this->source); })()), "classcategory_id2", [], "any", false, false, false, 355), 'widget');
                    echo "
                                                ";
                    // line 356
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 356, $this->source); })()), "classcategory_id2", [], "any", false, false, false, 356), 'errors');
                    echo "
                                            </div>
                                        ";
                }
                // line 359
                echo "                                    ";
            }
            // line 360
            echo "                                    <div class=\"ec-numberInput\"><span>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("数量"), "html", null, true);
            echo "</span>
                                        ";
            // line 361
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 361, $this->source); })()), "quantity", [], "any", false, false, false, 361), 'widget');
            echo "
                                        ";
            // line 362
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 362, $this->source); })()), "quantity", [], "any", false, false, false, 362), 'errors');
            echo "
                                    </div>
                                </div>
                                <div class=\"ec-productRole__btn\">
                                    <button type=\"submit\" class=\"ec-blockBtn--action add-cart\">
                                        ";
            // line 367
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("カートに入れる"), "html", null, true);
            echo "
                                    </button>
                                </div>
                            ";
        } else {
            // line 371
            echo "                                <div class=\"ec-productRole__btn\">
                                    <button type=\"button\" class=\"ec-blockBtn--action\" disabled=\"disabled\">
                                        ";
            // line 373
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ただいま品切れ中です。"), "html", null, true);
            echo "
                                    </button>
                                </div>
                            ";
        }
        // line 377
        echo "
                            ";
        // line 378
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 378, $this->source); })()), 'rest');
        echo "
                        </form>
                        ";
        // line 380
        if (twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 380, $this->source); })()), "stock_find", [], "any", false, false, false, 380)) {
            // line 381
            echo "                            <div class=\"quantity-btn\">
                                <button id=\"btn-up\" class=\"input-btn\">＋</button>
                                <button id=\"btn-down\" class=\"input-btn\">－</button>
                            </div>
                            ";
        } else {
            // line 386
            echo "                            <div class=\"empty-area\"></div>
                        ";
        }
        // line 388
        echo "                        <div class=\"ec-modal\">
                            <input type=\"checkbox\" id=\"ec-modal-checkbox\" class=\"checkbox\">
                            <div class=\"ec-modal-overlay\">
                                <label for=\"ec-modal-checkbox\" class=\"ec-modal-overlay-close\"></label>
                                <div class=\"ec-modal-wrap\">
                                    <label for=\"ec-modal-checkbox\" class=\"ec-modal-close\"><span class=\"ec-icon\"><img src=\"";
        // line 393
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/cross-dark.svg"), "html", null, true);
        echo "\" alt=\"\"/></span></label>
                                    <div id=\"ec-modal-header\" class=\"text-center\">";
        // line 394
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("カートに追加しました。"), "html", null, true);
        echo "</div>
                                    <div class=\"ec-modal-box\">
                                        <div class=\"ec-role\">
                                            <label for=\"ec-modal-checkbox\" class=\"ec-inlineBtn--cancel\">";
        // line 397
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お買い物を続ける"), "html", null, true);
        echo "</label>
                                            <a href=\"";
        // line 398
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("cart");
        echo "\" class=\"ec-inlineBtn--action\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("カートへ進む"), "html", null, true);
        echo "</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        ";
        // line 404
        if (twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 404, $this->source); })()), "option_favorite_product", [], "any", false, false, false, 404)) {
            // line 405
            echo "                            <form action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_add_favorite", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 405, $this->source); })()), "id", [], "any", false, false, false, 405)]), "html", null, true);
            echo "\" method=\"post\">
                                <div class=\"ec-productRole__btn\">
                                    ";
            // line 407
            if (((isset($context["is_favorite"]) || array_key_exists("is_favorite", $context) ? $context["is_favorite"] : (function () { throw new RuntimeError('Variable "is_favorite" does not exist.', 407, $this->source); })()) == false)) {
                // line 408
                echo "                                        <button type=\"submit\" id=\"favorite\" class=\"ec-blockBtn--cancel\">
                                            ";
                // line 410
                echo "                                            <img src=\"/html/user_data/assets/img/memu/sp_favorite.svg\">
                                        </button>
                                    ";
            } else {
                // line 413
                echo "                                        <button type=\"submit\" id=\"favorite\" class=\"ec-blockBtn--cancel\"
                                                disabled=\"disabled\">";
                // line 415
                echo "                                                <img src=\"/html/user_data/assets/img/top/sp_favorite_over.svg\">
                                        </button>
                                    ";
            }
            // line 418
            echo "                                </div>
                            </form>
                        ";
        }
        // line 421
        echo "                    </div> <!-- ec-productRole__cartWrapper[END] -->

                    ";
        // line 424
        echo "                    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 424, $this->source); })()), "code_min", [], "any", false, false, false, 424))) {
            // line 425
            echo "                        <div class=\"ec-productRole__code\">
                            ";
            // line 426
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("商品コード"), "html", null, true);
            echo "： <span class=\"product-code-default\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 426, $this->source); })()), "code_min", [], "any", false, false, false, 426), "html", null, true);
            if ((twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 426, $this->source); })()), "code_min", [], "any", false, false, false, 426) != twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 426, $this->source); })()), "code_max", [], "any", false, false, false, 426))) {
                echo " ～ ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 426, $this->source); })()), "code_max", [], "any", false, false, false, 426), "html", null, true);
            }
            echo "</span>
                        </div>
                    ";
        }
        // line 429
        echo "                </div>
                <div class=\"ec-productRole-guide\">
                    <div class=\"ec-productRole-guide__shipping\">
                        <a href=\"";
        // line 432
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("help_guide");
        echo "#shipping\">
                            <span><img src=\"/html/user_data/assets/img/guide/guide_shipping.svg\"></span>
                            <p>送料について</p>
                        </a>
                    </div>
                    <div class=\"ec-productRole-guide__payment\">
                        <a href=\"";
        // line 438
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("help_guide");
        echo "#payment\">
                            <span><img src=\"/html/user_data/assets/img/guide/guide_paument.svg\"></span>
                            <p>お支払いについて</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"ec-productRole__description\">
            <input id=\"trigger1\" class=\"grad-trigger\" type=\"checkbox\">
            <label class=\"grad-btn\" for=\"trigger1\">
                <img src=\"/html/user_data/assets/img/new_arrival/arrow_next.png\">
            </label>
            <div class=\"ec-productRole__description-item\">
                ";
        // line 452
        echo twig_include($this->env, $context, twig_template_from_string($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 452, $this->source); })()), "description_detail", [], "any", false, false, false, 452)));
        echo "
            </div>
        </div>
        ";
        // line 455
        if (twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 455, $this->source); })()), "freearea", [], "any", false, false, false, 455)) {
            // line 456
            echo "            <div class=\"ec-productRole__description\">
              <input id=\"trigger-syousai\" class=\"grad-trigger-syousai\" type=\"checkbox\">
                <label class=\"grad-btn-syousai\" for=\"trigger-syousai\">
                  <img src=\"/html/user_data/assets/img/new_arrival/arrow_next.png\">
                </label>
              <div class=\"ec-productRole__description-item-syousai\">
                 ";
            // line 462
            echo twig_include($this->env, $context, twig_template_from_string($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 462, $this->source); })()), "freearea", [], "any", false, false, false, 462)));
            echo "
              </div>
            </div>
        ";
        }
        // line 466
        echo "        ";
        // line 467
        echo "        <div class=\"ec-productRole__plugins\">
          <div class=\"ec-productRole__plugins--relatedProducts ec-productRelatedRole\">
            <h2 class=\"ec-productRelatedRole__title\">Recommend</h2>
            <div class=\"ec-productRelatedRole__plugin\"></div>
          </div>
        </div>

        <!--▼ガイド　※新着情報ブロックにあります▼-->
        <div class=\"ec-guideRole\">
            <div class=\"ec-guideRole__wrapper\">
                <h3 class=\"ec-guideRole__title\">
                    Guide
                </h3>
                <ul class=\"ec-guideRole__list\">
                    <li class=\"ec-guideRole__listItem\">
                        <a href=\"/user_data/return_exchange\">
                            返品・交換
                        </a>
                    </li>
                    <li class=\"ec-guideRole__listItem\">
                        <a href=\"";
        // line 487
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("help_guide");
        echo "#shipping\">
                            送料について
                        </a>
                    </li>
                    <li class=\"ec-guideRole__listItem\">
                        <a href=\"";
        // line 492
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("help_guide");
        echo "#payment\">
                            お支払いについて
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!--▲ガイド　※新着情報ブロックにあります▲-->

        ";
        // line 502
        echo "        ";
        // line 517
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Product/detail.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  955 => 517,  953 => 502,  941 => 492,  933 => 487,  911 => 467,  909 => 466,  902 => 462,  894 => 456,  892 => 455,  886 => 452,  869 => 438,  860 => 432,  855 => 429,  843 => 426,  840 => 425,  837 => 424,  833 => 421,  828 => 418,  823 => 415,  820 => 413,  815 => 410,  812 => 408,  810 => 407,  804 => 405,  802 => 404,  791 => 398,  787 => 397,  781 => 394,  777 => 393,  770 => 388,  766 => 386,  759 => 381,  757 => 380,  752 => 378,  749 => 377,  742 => 373,  738 => 371,  731 => 367,  723 => 362,  719 => 361,  714 => 360,  711 => 359,  705 => 356,  701 => 355,  698 => 354,  696 => 353,  691 => 351,  687 => 350,  684 => 349,  682 => 348,  679 => 347,  677 => 346,  673 => 345,  670 => 344,  668 => 340,  665 => 338,  659 => 335,  655 => 334,  652 => 333,  649 => 332,  643 => 329,  637 => 328,  634 => 327,  628 => 324,  624 => 323,  621 => 322,  619 => 321,  617 => 320,  614 => 319,  612 => 318,  609 => 317,  604 => 315,  597 => 314,  594 => 313,  590 => 311,  585 => 309,  576 => 308,  574 => 307,  570 => 306,  563 => 305,  561 => 304,  558 => 303,  555 => 302,  553 => 301,  549 => 299,  538 => 297,  534 => 296,  531 => 295,  528 => 294,  526 => 293,  520 => 290,  517 => 289,  515 => 288,  510 => 286,  507 => 285,  500 => 279,  481 => 277,  464 => 276,  460 => 274,  451 => 272,  443 => 270,  438 => 269,  427 => 262,  419 => 259,  404 => 257,  395 => 256,  378 => 255,  375 => 254,  371 => 253,  364 => 248,  354 => 247,  227 => 129,  217 => 122,  187 => 95,  182 => 92,  173 => 86,  169 => 84,  167 => 83,  164 => 82,  155 => 76,  151 => 74,  149 => 73,  109 => 35,  101 => 33,  99 => 32,  94 => 30,  91 => 29,  89 => 28,  75 => 17,  72 => 16,  62 => 15,  51 => 11,  49 => 13,  36 => 11,);
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
        eccube.classCategories = {{ class_categories_as_json(Product)|raw }};

        // 規格2に選択肢を割り当てる。
        function fnSetClassCategories(form, classcat_id2_selected) {
            var \$form = \$(form);
            var product_id = \$form.find('input[name=product_id]').val();
            var \$sele1 = \$form.find('select[name=classcategory_id1]');
            var \$sele2 = \$form.find('select[name=classcategory_id2]');
            eccube.setClassCategories(\$form, product_id, \$sele1, \$sele2, classcat_id2_selected);
        }

        {% if form.classcategory_id2 is defined %}
        fnSetClassCategories(
            \$('#form1'), {{ form.classcategory_id2.vars.value|json_encode|raw }}
        );
        {% elseif form.classcategory_id1 is defined %}
        eccube.checkStock(\$('#form1'), {{ Product.id }}, {{ form.classcategory_id1.vars.value|json_encode|raw }}, null);
        {% endif %}
    </script>
    <script>
        \$(function() {
            // bfcache無効化
            \$(window).bind('pageshow', function(event) {
                if (event.originalEvent.persisted) {
                    location.reload(true);
                }
            });
        });
        \$(window).on('load', function() {
            \$('.item_visual').slick(
                {
                dots: false,
                arrows: false,
                responsive: [{
                    breakpoint: 1000,
                    settings: {
                        dots: true
                    }
                },
                {
                    breakpoint: 415,
                    settings: {
                        dots: false
                    }
                }]
            });

            \$('.slideThumb').on('click', function() {
                var index = \$(this).attr('data-index');
                \$('.item_visual').slick('slickGoTo', index, false);
            });
        });
    </script>
    <script>
        \$(function() {
            \$('.add-cart').on('click', function(event) {
                {% if form.classcategory_id1 is defined %}
                // 規格1フォームの必須チェック
                if (\$('#classcategory_id1').val() == '__unselected' || \$('#classcategory_id1').val() == '') {
                    \$('#classcategory_id1')[0].setCustomValidity('{{ '項目が選択されていません'|trans }}');
                    return true;
                } else {
                    \$('#classcategory_id1')[0].setCustomValidity('');
                }
                {% endif %}

                {% if form.classcategory_id2 is defined %}
                // 規格2フォームの必須チェック
                if (\$('#classcategory_id2').val() == '__unselected' || \$('#classcategory_id2').val() == '') {
                    \$('#classcategory_id2')[0].setCustomValidity('{{ '項目が選択されていません'|trans }}');
                    return true;
                } else {
                    \$('#classcategory_id2')[0].setCustomValidity('');
                }
                {% endif %}

                // 個数フォームのチェック
                if (\$('#quantity').val() < 1) {
                    \$('#quantity')[0].setCustomValidity('{{ '1以上で入力してください。'|trans }}');
                    return true;
                } else {
                    \$('#quantity')[0].setCustomValidity('');
                }

                event.preventDefault();
                \$form = \$('#form1');
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
                        url: \"{{ url('block_cart') }}\",
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
    <script>
    (function() {
      // 関連商品プラグインの表示位置調整、およびslick適応
      function plgRelatedProduct_onLoad() {
        var attachSlick = function attachSlick() {
          \$wrapper
            .find('.ec-productRelatedRole__plugin .ec-shelfGrid')
            .slick({
              swipe: true,
              autoplay: true,
              fade: false,
              speed: 500,
              infinite: true,
              slidesToShow: 6,
              slidesToScroll: 6,
              prevArrow:'<button type=\"button\" class=\"slick-prev\"><span class=\"angle-circle\"><svg class=\"cb cb-angle-right\"><use xlink:href=\"#cb-angle-right\" /></svg></span></button>',
              nextArrow:'<button type=\"button\" class=\"slick-next\"><span class=\"angle-circle\"><svg class=\"cb cb-angle-right\"><use xlink:href=\"#cb-angle-right\" /></svg></span></button>',
              responsive: [
                {
                  breakpoint: 1020,
                  settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    arrows: false,
                    dots: true,
                  }
                },
                {
                  breakpoint: 800,
                  settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    dots: true,
                    arrows: false,
                  }
                },
                {
                  breakpoint: 480,
                  settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    dots: true,
                    arrows: false,
                  }
                }
              ]
            });
          /*
            .slick({
              infinite: false,
              speed: 300,
              slidesToShow: 4,
              slidesToScroll: 4,
              responsive: [{
                breakpoint: 768,
                settings: {
                  slidesToShow: 3,
                  slidesToScroll: 3
                }
              }]
            });
            */
        };

        var \$plgRelatedProduct = \$('#RelatedProduct-product_area'),
            \$wrapper = \$('.ec-productRelatedRole'),
            item_count = \$plgRelatedProduct.find('.ec-shelfGrid__item').length;

        if (item_count > 0) {
          \$plgRelatedProduct.prependTo(\$wrapper.find('.ec-productRelatedRole__plugin'));
          setTimeout(attachSlick, 100);
        } else {
          \$plgRelatedProduct.hide();
          \$wrapper.hide();
        }
      }

      // 商品レビュープラグインのタイトル位置調整
      function plgProductReview_onLoad() {
        \$('#product_review_area #reviewContent li').each(function() {
          var \$title = \$(this).find('.review_date + strong');
          \$('.review_date .recommend_name').after(\$title);
        });
      }

      \$(window).on('load', function() {
        plgRelatedProduct_onLoad();
        plgProductReview_onLoad();
      });
    })();
    // 数量ボタンアクション
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
    </script>
{% endblock %}

{% block main %}
    <div class=\"ec-productRole\">
      <div class=\"all_topicpath\">
        <ol class=\"ec-topicpath_all\">
          <li class=\"home_path\"><a href=\"https://gift-communication.shop/\">TOP</a></li>
          <li class=\"ec-topicpath_all_divider\"> ＞</li>
            {% for ProductCategory in Product.ProductCategories %}
                <li class=\"ec-topicpath_all_category\">
                    {% for Category in ProductCategory.Category.path %}
                        <a href=\"{{ url('product_list') }}?category_id={{ Category.id }}\">{{ Category.name }}</a> {%- if loop.last == false %}
                        {% endif -%}
                    {% endfor %}
                </li>
                <li class=\"ec-topicpath_all_divider\"> ＞</li>
            {% endfor %}
          <li class=\"ec-topicpath_all_product\">{{ Product.name }}</li>
      　</ol>
      </div>
        <div class=\"ec-grid2\">
            <div class=\"ec-grid2__cell\">
                <div class=\"ec-sliderItemRole ec-productRole__slider\">
                    <div class=\"item_visual\">
                        {% for ProductImage in Product.ProductImage %}
                            <div class=\"slide-item\"><img src=\"{{ asset(ProductImage, 'save_image') }}\"></div>
                        {% else %}
                            <div class=\"slide-item\"><img src=\"{{ asset(''|no_image_product, 'save_image') }}\"/></div>
                        {% endfor %}
                    </div>
                    <div class=\"item_nav\">
                        {% for ProductImage in Product.ProductImage %}
                            <div class=\"slideThumb\" data-index=\"{{ loop.index0 }}\"><img src=\"{{ asset(ProductImage, 'save_image') }}\"></div>
                        {% endfor %}
                    </div>
                </div>
            </div>
            <div class=\"ec-grid2__cell\">
                <div class=\"ec-productRole__profile\">
                    {# 商品名 #}
                    <div class=\"ec-productRole__title\">
                        <h2 class=\"ec-headingTitle\">{{ Product.name }}</h2>
                    </div>
                    {% if Product.message %}
                        <div class=\"ec-productRole__summary\">
                             {{ include(template_from_string(Product.message)) }}
                        </div>
                    {% endif %}
                    {# タグ #}
                    {% if Product.Tags is not empty %}
                        <ul class=\"ec-productRole__tags\">
                            {% for Tag in Product.Tags %}
                                <li class=\"ec-productRole__tag tag_{{ Tag.id }}\">{{ Tag }}</li>
                            {% endfor %}
                        </ul>
                    {% endif %}
                    {# 通常価格 #}
                    {% if Product.hasProductClass -%}
                        <div class=\"ec-productRole__priceRegular\">
                            {% if Product.getPrice01Min is not null and Product.getPrice01IncTaxMin == Product.getPrice01IncTaxMax %}
                                <span class=\"ec-productRole__priceRegularPrice\">{{ '通常価格'|trans }}：<span class=\"price01-default\">{{ Product.getPrice01IncTaxMin|price }}</span></span>
                                <span class=\"ec-productRole__priceRegularTax\">{{ '(税込)'|trans }}</span>
                            {% elseif Product.getPrice01Min is not null and Product.getPrice01Max is not null %}
                                <span class=\"ec-productRole__priceRegularPrice\">{{ '通常価格'|trans }}：<span class=\"price01-default\">{{ Product.getPrice01IncTaxMin|price }}～ {{ Product.getPrice01IncTaxMax|price }}</span></span>
                                <span class=\"ec-productRole__priceRegularTax\">{{ '(税込)'|trans }}</span>
                            {% endif %}
                        </div>
                    {% else %}
                        {% if Product.getPrice01Max is not null %}
                            <span class=\"ec-productRole__priceRegularPrice\">{{ '通常価格'|trans }}：<span class=\"price01-default\">{{ Product.getPrice01IncTaxMin|price }}</span></span>
                            <span class=\"ec-productRole__priceRegularTax\">{{ '(税込)'|trans }}</span>
                        {% endif %}
                    {% endif %}
                    {# 販売価格 #}
                    <div class=\"ec-productRole__price\">
                        {% if Product.hasProductClass -%}
                            {% if Product.getPrice02IncTaxMin == Product.getPrice02IncTaxMax %}
                                <div class=\"ec-price\">
                                    <span class=\"ec-price__price price02-default\">{{ Product.getPrice02IncTaxMin|price }}</span>
                                    <span class=\"ec-price__tax\">{{ '(税込)'|trans }}</span>
                                </div>
                            {% else %}
                                <div class=\"ec-price\">
                                    <span class=\"ec-price__price price02-default\">{{ Product.getPrice02IncTaxMin|price }} ～ {{ Product.getPrice02IncTaxMax|price }}</span>
                                    <span class=\"ec-price__tax\">{{ '(税込)'|trans }}</span>
                                </div>
                            {% endif %}
                        {% else %}
                            <div class=\"ec-price\">
                                <span class=\"ec-price__price\">{{ Product.getPrice02IncTaxMin|price }}</span>
                                <span class=\"ec-price__tax\">{{ '(税込)'|trans }}</span>
                            </div>
                        {% endif %}
                    </div>
                    {# 重さとサイズ #}
                    {# <div>
                        {{ include('Product/weight_size.twig') }}
                    </div>
                    #}
                    <div class=\"ec-productRole__cartWrapper\">
                        <form action=\"{{ url('product_add_cart', {id:Product.id}) }}\" method=\"post\" id=\"form1\" name=\"form1\">
                            {% if Product.stock_find %}
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
                                        {{ form_widget(form.quantity) }}
                                        {{ form_errors(form.quantity) }}
                                    </div>
                                </div>
                                <div class=\"ec-productRole__btn\">
                                    <button type=\"submit\" class=\"ec-blockBtn--action add-cart\">
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

                            {{ form_rest(form) }}
                        </form>
                        {% if Product.stock_find %}
                            <div class=\"quantity-btn\">
                                <button id=\"btn-up\" class=\"input-btn\">＋</button>
                                <button id=\"btn-down\" class=\"input-btn\">－</button>
                            </div>
                            {% else %}
                            <div class=\"empty-area\"></div>
                        {% endif %}
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
                        {% if BaseInfo.option_favorite_product %}
                            <form action=\"{{ url('product_add_favorite', {id:Product.id}) }}\" method=\"post\">
                                <div class=\"ec-productRole__btn\">
                                    {% if is_favorite == false %}
                                        <button type=\"submit\" id=\"favorite\" class=\"ec-blockBtn--cancel\">
                                            {#{{ 'お気に入りに追加'|trans }} #}
                                            <img src=\"/html/user_data/assets/img/memu/sp_favorite.svg\">
                                        </button>
                                    {% else %}
                                        <button type=\"submit\" id=\"favorite\" class=\"ec-blockBtn--cancel\"
                                                disabled=\"disabled\">{#{{ 'お気に入りに追加済です。'|trans }}#}
                                                <img src=\"/html/user_data/assets/img/top/sp_favorite_over.svg\">
                                        </button>
                                    {% endif %}
                                </div>
                            </form>
                        {% endif %}
                    </div> <!-- ec-productRole__cartWrapper[END] -->

                    {# 商品コード #}
                    {% if Product.code_min is not empty %}
                        <div class=\"ec-productRole__code\">
                            {{ '商品コード'|trans }}： <span class=\"product-code-default\">{{ Product.code_min }}{% if Product.code_min != Product.code_max %} ～ {{ Product.code_max }}{% endif %}</span>
                        </div>
                    {% endif %}
                </div>
                <div class=\"ec-productRole-guide\">
                    <div class=\"ec-productRole-guide__shipping\">
                        <a href=\"{{ url('help_guide') }}#shipping\">
                            <span><img src=\"/html/user_data/assets/img/guide/guide_shipping.svg\"></span>
                            <p>送料について</p>
                        </a>
                    </div>
                    <div class=\"ec-productRole-guide__payment\">
                        <a href=\"{{ url('help_guide') }}#payment\">
                            <span><img src=\"/html/user_data/assets/img/guide/guide_paument.svg\"></span>
                            <p>お支払いについて</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"ec-productRole__description\">
            <input id=\"trigger1\" class=\"grad-trigger\" type=\"checkbox\">
            <label class=\"grad-btn\" for=\"trigger1\">
                <img src=\"/html/user_data/assets/img/new_arrival/arrow_next.png\">
            </label>
            <div class=\"ec-productRole__description-item\">
                {{ include(template_from_string(Product.description_detail)) }}
            </div>
        </div>
        {% if Product.freearea %}
            <div class=\"ec-productRole__description\">
              <input id=\"trigger-syousai\" class=\"grad-trigger-syousai\" type=\"checkbox\">
                <label class=\"grad-btn-syousai\" for=\"trigger-syousai\">
                  <img src=\"/html/user_data/assets/img/new_arrival/arrow_next.png\">
                </label>
              <div class=\"ec-productRole__description-item-syousai\">
                 {{ include(template_from_string(Product.freearea)) }}
              </div>
            </div>
        {% endif %}
        {# プラグインラッパー #}
        <div class=\"ec-productRole__plugins\">
          <div class=\"ec-productRole__plugins--relatedProducts ec-productRelatedRole\">
            <h2 class=\"ec-productRelatedRole__title\">Recommend</h2>
            <div class=\"ec-productRelatedRole__plugin\"></div>
          </div>
        </div>

        <!--▼ガイド　※新着情報ブロックにあります▼-->
        <div class=\"ec-guideRole\">
            <div class=\"ec-guideRole__wrapper\">
                <h3 class=\"ec-guideRole__title\">
                    Guide
                </h3>
                <ul class=\"ec-guideRole__list\">
                    <li class=\"ec-guideRole__listItem\">
                        <a href=\"/user_data/return_exchange\">
                            返品・交換
                        </a>
                    </li>
                    <li class=\"ec-guideRole__listItem\">
                        <a href=\"{{ url('help_guide') }}#shipping\">
                            送料について
                        </a>
                    </li>
                    <li class=\"ec-guideRole__listItem\">
                        <a href=\"{{ url('help_guide') }}#payment\">
                            お支払いについて
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!--▲ガイド　※新着情報ブロックにあります▲-->

        {# 関連カテゴリ #}
        {# {% if Product.ProductCategories is not empty %}
            <div class=\"ec-productRole__category\">
                <div>{{ '関連カテゴリ'|trans }}</div>
                {% for ProductCategory in Product.ProductCategories %}
                    <ul>
                        <li>
                            {% for Category in ProductCategory.Category.path %}
                                <a href=\"{{ url('product_list') }}?category_id={{ Category.id }}\">{{ Category.name }}</a> {%- if loop.last == false %}
                                <span>＞</span>{% endif -%}
                            {% endfor %}
                        </li>
                    </ul>
                {% endfor %}
            </div>
        {% endif %} #}

    </div>
{% endblock %}", "Product/detail.twig", "/var/www/html/eccube-4-new/app/template/responceWebDesign/Product/detail.twig");
    }
}
