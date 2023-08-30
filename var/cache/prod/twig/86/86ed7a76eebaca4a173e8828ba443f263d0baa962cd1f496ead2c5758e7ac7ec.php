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
class __TwigTemplate_e167a6d7c0d99319cf20a02f7d501dfdcdf45d15059434ee1d36e6862ddd2427 extends \Eccube\Twig\Template
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
        // line 13
        $context["body_class"] = "product_page";
        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "Product/detail.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "    <script>
        eccube.classCategories = ";
        // line 17
        echo $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getClassCategoriesAsJson(($context["Product"] ?? null));
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
            echo json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id2", [], "any", false, false, false, 30), "vars", [], "any", false, false, false, 30), "value", [], "any", false, false, false, 30));
            echo "
        );
        ";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 32
($context["form"] ?? null), "classcategory_id1", [], "any", true, true, false, 32)) {
            // line 33
            echo "        eccube.checkStock(\$('#form1'), ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "id", [], "any", false, false, false, 33), "html", null, true);
            echo ", ";
            echo json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id1", [], "any", false, false, false, 33), "vars", [], "any", false, false, false, 33), "value", [], "any", false, false, false, 33));
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
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("block_cart");
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
    }

    // line 247
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 248
        echo "    <div class=\"ec-productRole\">
      <div class=\"all_topicpath\">
        <ol class=\"ec-topicpath_all\">
          <li class=\"home_path\"><a href=\"https://gift-communication.shop/\">TOP</a></li>
          <li class=\"ec-topicpath_all_divider\"> ＞</li>
            ";
        // line 253
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "ProductCategories", [], "any", false, false, false, 253));
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
                echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "name", [], "any", false, false, false, 262), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "ProductImage", [], "any", false, false, false, 269));
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "ProductImage", [], "any", false, false, false, 276));
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "name", [], "any", false, false, false, 286), "html", null, true);
        echo "</h2>
                    </div>
                    ";
        // line 288
        if (twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "message", [], "any", false, false, false, 288)) {
            // line 289
            echo "                        <div class=\"ec-productRole__summary\">
                             ";
            // line 290
            echo twig_include($this->env, $context, twig_template_from_string($this->env, twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "message", [], "any", false, false, false, 290)));
            echo "
                        </div>
                    ";
        }
        // line 293
        echo "                    ";
        // line 294
        echo "                    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "Tags", [], "any", false, false, false, 294))) {
            // line 295
            echo "                        <ul class=\"ec-productRole__tags\">
                            ";
            // line 296
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "Tags", [], "any", false, false, false, 296));
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
        if (twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "hasProductClass", [], "any", false, false, false, 302)) {
            // line 303
            echo "<div class=\"ec-productRole__priceRegular\">
                            ";
            // line 304
            if (( !(null === twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "getPrice01Min", [], "any", false, false, false, 304)) && (twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "getPrice01IncTaxMin", [], "any", false, false, false, 304) == twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "getPrice01IncTaxMax", [], "any", false, false, false, 304)))) {
                // line 305
                echo "                                <span class=\"ec-productRole__priceRegularPrice\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("通常価格"), "html", null, true);
                echo "：<span class=\"price01-default\">";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "getPrice01IncTaxMin", [], "any", false, false, false, 305)), "html", null, true);
                echo "</span></span>
                                <span class=\"ec-productRole__priceRegularTax\">";
                // line 306
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("(税込)"), "html", null, true);
                echo "</span>
                            ";
            } elseif (( !(null === twig_get_attribute($this->env, $this->source,             // line 307
($context["Product"] ?? null), "getPrice01Min", [], "any", false, false, false, 307)) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "getPrice01Max", [], "any", false, false, false, 307)))) {
                // line 308
                echo "                                <span class=\"ec-productRole__priceRegularPrice\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("通常価格"), "html", null, true);
                echo "：<span class=\"price01-default\">";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "getPrice01IncTaxMin", [], "any", false, false, false, 308)), "html", null, true);
                echo "～ ";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "getPrice01IncTaxMax", [], "any", false, false, false, 308)), "html", null, true);
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
            if ( !(null === twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "getPrice01Max", [], "any", false, false, false, 313))) {
                // line 314
                echo "                            <span class=\"ec-productRole__priceRegularPrice\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("通常価格"), "html", null, true);
                echo "：<span class=\"price01-default\">";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "getPrice01IncTaxMin", [], "any", false, false, false, 314)), "html", null, true);
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
        if (twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "hasProductClass", [], "any", false, false, false, 320)) {
            // line 321
            if ((twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "getPrice02IncTaxMin", [], "any", false, false, false, 321) == twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "getPrice02IncTaxMax", [], "any", false, false, false, 321))) {
                // line 322
                echo "                                <div class=\"ec-price\">
                                    <span class=\"ec-price__price price02-default\">";
                // line 323
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "getPrice02IncTaxMin", [], "any", false, false, false, 323)), "html", null, true);
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
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "getPrice02IncTaxMin", [], "any", false, false, false, 328)), "html", null, true);
                echo " ～ ";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "getPrice02IncTaxMax", [], "any", false, false, false, 328)), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "getPrice02IncTaxMin", [], "any", false, false, false, 334)), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_add_cart", ["id" => twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "id", [], "any", false, false, false, 345)]), "html", null, true);
        echo "\" method=\"post\" id=\"form1\" name=\"form1\">
                            ";
        // line 346
        if (twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "stock_find", [], "any", false, false, false, 346)) {
            // line 347
            echo "                                <div class=\"ec-productRole__actions\">
                                    ";
            // line 348
            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id1", [], "any", true, true, false, 348)) {
                // line 349
                echo "                                        <div class=\"ec-select\">
                                            ";
                // line 350
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id1", [], "any", false, false, false, 350), 'widget');
                echo "
                                            ";
                // line 351
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id1", [], "any", false, false, false, 351), 'errors');
                echo "
                                        </div>
                                        ";
                // line 353
                if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id2", [], "any", true, true, false, 353)) {
                    // line 354
                    echo "                                            <div class=\"ec-select\">
                                                ";
                    // line 355
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id2", [], "any", false, false, false, 355), 'widget');
                    echo "
                                                ";
                    // line 356
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id2", [], "any", false, false, false, 356), 'errors');
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
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "quantity", [], "any", false, false, false, 361), 'widget');
            echo "
                                        ";
            // line 362
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "quantity", [], "any", false, false, false, 362), 'errors');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
                        </form>
                        ";
        // line 380
        if (twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "stock_find", [], "any", false, false, false, 380)) {
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
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("cart");
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
        if (twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "option_favorite_product", [], "any", false, false, false, 404)) {
            // line 405
            echo "                            <form action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_add_favorite", ["id" => twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "id", [], "any", false, false, false, 405)]), "html", null, true);
            echo "\" method=\"post\">
                                <div class=\"ec-productRole__btn\">
                                    ";
            // line 407
            if ((($context["is_favorite"] ?? null) == false)) {
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
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "code_min", [], "any", false, false, false, 424))) {
            // line 425
            echo "                        <div class=\"ec-productRole__code\">
                            ";
            // line 426
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("商品コード"), "html", null, true);
            echo "： <span class=\"product-code-default\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "code_min", [], "any", false, false, false, 426), "html", null, true);
            if ((twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "code_min", [], "any", false, false, false, 426) != twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "code_max", [], "any", false, false, false, 426))) {
                echo " ～ ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "code_max", [], "any", false, false, false, 426), "html", null, true);
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
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("help_guide");
        echo "#shipping\">
                            <span><img src=\"/html/user_data/assets/img/guide/guide_shipping.svg\"></span>
                            <p>送料について</p>
                        </a>
                    </div>
                    <div class=\"ec-productRole-guide__payment\">
                        <a href=\"";
        // line 438
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("help_guide");
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
        echo twig_include($this->env, $context, twig_template_from_string($this->env, twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "description_detail", [], "any", false, false, false, 452)));
        echo "
            </div>
        </div>
        ";
        // line 455
        if (twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "freearea", [], "any", false, false, false, 455)) {
            // line 456
            echo "            <div class=\"ec-productRole__description\">
              <input id=\"trigger-syousai\" class=\"grad-trigger-syousai\" type=\"checkbox\">
                <label class=\"grad-btn-syousai\" for=\"trigger-syousai\">
                  <img src=\"/html/user_data/assets/img/new_arrival/arrow_next.png\">
                </label>
              <div class=\"ec-productRole__description-item-syousai\">
                 ";
            // line 462
            echo twig_include($this->env, $context, twig_template_from_string($this->env, twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "freearea", [], "any", false, false, false, 462)));
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
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("help_guide");
        echo "#shipping\">
                            送料について
                        </a>
                    </li>
                    <li class=\"ec-guideRole__listItem\">
                        <a href=\"";
        // line 492
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("help_guide");
        echo "#payment\">
                            お支払いについて
                        </a>
                    </li>
                </ul>
            </div>
            
        </div>
        <!--▲ガイド　※新着情報ブロックにあります▲-->

        ";
        // line 503
        echo "        ";
        // line 517
        echo " 

    </div>
";
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
        return array (  926 => 517,  924 => 503,  911 => 492,  903 => 487,  881 => 467,  879 => 466,  872 => 462,  864 => 456,  862 => 455,  856 => 452,  839 => 438,  830 => 432,  825 => 429,  813 => 426,  810 => 425,  807 => 424,  803 => 421,  798 => 418,  793 => 415,  790 => 413,  785 => 410,  782 => 408,  780 => 407,  774 => 405,  772 => 404,  761 => 398,  757 => 397,  751 => 394,  747 => 393,  740 => 388,  736 => 386,  729 => 381,  727 => 380,  722 => 378,  719 => 377,  712 => 373,  708 => 371,  701 => 367,  693 => 362,  689 => 361,  684 => 360,  681 => 359,  675 => 356,  671 => 355,  668 => 354,  666 => 353,  661 => 351,  657 => 350,  654 => 349,  652 => 348,  649 => 347,  647 => 346,  643 => 345,  640 => 344,  638 => 340,  635 => 338,  629 => 335,  625 => 334,  622 => 333,  619 => 332,  613 => 329,  607 => 328,  604 => 327,  598 => 324,  594 => 323,  591 => 322,  589 => 321,  587 => 320,  584 => 319,  582 => 318,  579 => 317,  574 => 315,  567 => 314,  564 => 313,  560 => 311,  555 => 309,  546 => 308,  544 => 307,  540 => 306,  533 => 305,  531 => 304,  528 => 303,  525 => 302,  523 => 301,  519 => 299,  508 => 297,  504 => 296,  501 => 295,  498 => 294,  496 => 293,  490 => 290,  487 => 289,  485 => 288,  480 => 286,  477 => 285,  470 => 279,  451 => 277,  434 => 276,  430 => 274,  421 => 272,  413 => 270,  408 => 269,  397 => 262,  389 => 259,  374 => 257,  365 => 256,  348 => 255,  345 => 254,  341 => 253,  334 => 248,  330 => 247,  209 => 129,  199 => 122,  169 => 95,  164 => 92,  155 => 86,  151 => 84,  149 => 83,  146 => 82,  137 => 76,  133 => 74,  131 => 73,  91 => 35,  83 => 33,  81 => 32,  76 => 30,  73 => 29,  71 => 28,  57 => 17,  54 => 16,  50 => 15,  45 => 11,  43 => 13,  36 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Product/detail.twig", "/var/www/html/eccube-4-new/app/template/responceWebDesign/Product/detail.twig");
    }
}
