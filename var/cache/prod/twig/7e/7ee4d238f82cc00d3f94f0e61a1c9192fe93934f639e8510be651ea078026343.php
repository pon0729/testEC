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

/* @RelatedProduct4/admin/related_product.twig */
class __TwigTemplate_9508c2ff09c6a31c4dba45dd443643bd5136eb6c67ca858e18d327ef3fc3e76a extends \Eccube\Twig\Template
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
        // line 10
        echo "
<script>
\$(function() {
    \$('#plugin_related_product_related_product').appendTo('.c-contentsArea__primaryCol');
    \$('#plugin_related_product_related_product').removeClass('d-none');

    var dataId = null;

    \$(document).on('click', 'button[id^=\"RelatedProduct-delete\"]', function() {
        var data = \$(this).data();
        \$('.RelatedProduct-view' + data.id ).addClass('d-none');
        \$('#admin_product_RelatedProducts_' + data.id + '_ChildProduct').val('');
        \$('#admin_product_RelatedProducts_' + data.id + '_content' ).val('');
        \$('#RelatedProductSearchResult').children().remove();
    });

    \$(document).on(\"click\", 'button[id^=\"RelatedProduct-search\"]', function () {
        dataId = \$(this).attr(\"data-id\");
        \$(\"#RelatedProductDataId\").val(dataId);
        \$(\"#RelatedProductSearchResult\").children().remove();
    });

    \$(\"#RelatedProductSearchButton\").on(\"click\", function () {
        var formIdVal = \$(\"#";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "id", [], "any", false, false, false, 33), "vars", [], "any", false, false, false, 33), "id", [], "any", false, false, false, 33), "html", null, true);
        echo "\").val();
        var formCatIdVal = \$(\"#";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "category_id", [], "any", false, false, false, 34), "vars", [], "any", false, false, false, 34), "id", [], "any", false, false, false, 34), "html", null, true);
        echo "\").val();
        var data = {
            id: formIdVal,
            category_id: formCatIdVal,
            product_id: ";
        // line 38
        ((twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "id", [], "any", false, false, false, 38)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "id", [], "any", false, false, false, 38), "html", null, true))) : (print (0)));
        echo "
        };
        \$(\"#RelatedProductSearchResult\")
                .children()
                .remove();
        \$.ajax({
            type: \"POST\",
            url: \"";
        // line 45
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_related_product_search");
        echo "\",
            data: data,
            success: function(data){
                \$(\"#RelatedProductSearchResult\").append(data);
            },
            error: function() {
                alert('product search failed.');
            }
        });
    });
});
</script>

<div id=\"plugin_related_product_related_product\" class=\"d-none\">
    <div class=\"card rounded border-0 mb-4\">
        <div class=\"card-header\">
            <span class=\"card-title\">";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "RelatedProducts", [], "any", false, false, false, 61), "vars", [], "any", false, false, false, 61), "label", [], "any", false, false, false, 61)), "html", null, true);
        echo "</span>
        </div>
        <div class=\"card-body\">
            ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "RelatedProducts", [], "any", false, false, false, 64));
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
        foreach ($context['_seq'] as $context["_key"] => $context["RelatedProductForm"]) {
            // line 65
            echo "            ";
            $context["RelatedProduct"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RelatedProductForm"], "vars", [], "any", false, false, false, 65), "value", [], "any", false, false, false, 65);
            // line 66
            echo "            ";
            $context["ChildProduct"] = twig_get_attribute($this->env, $this->source, ($context["RelatedProduct"] ?? null), "ChildProduct", [], "any", false, false, false, 66);
            // line 67
            echo "            <div class=\"row mb-2\">
                <div class=\"col-3\">
                    <label>
                        ";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RelatedProductForm"], "ChildProduct", [], "any", false, false, false, 70), "vars", [], "any", false, false, false, 70), "label", [], "any", false, false, false, 70), "html", null, true);
            echo "
                    </label>
                </div>
                <div class=\"col-9\">
                    ";
            // line 74
            if (($context["ChildProduct"] ?? null)) {
                // line 75
                echo "                        <div>
                            <a href=\"";
                // line 76
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product_product_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["ChildProduct"] ?? null), "id", [], "any", false, false, false, 76)]), "html", null, true);
                echo "\" id=\"RelatedProduct-product_image_link";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 76), "html", null, true);
                echo "\" class=\"RelatedProduct-view";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 76), "html", null, true);
                echo "\" >
                                <img src=\"";
                // line 77
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct(twig_get_attribute($this->env, $this->source, ($context["ChildProduct"] ?? null), "mainFileName", [], "any", false, false, false, 77)), "save_image"), "html", null, true);
                echo "\" id=\"RelatedProduct-product_image_img";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 77), "html", null, true);
                echo "\" style=\"max-width: 100px;margin-right: 10px;\" />
                            </a>
                            <span id=\"RelatedProduct-product_name";
                // line 79
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 79), "html", null, true);
                echo "\" class=\"RelatedProduct-view";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 79), "html", null, true);
                echo "\" style=\"margin-right: 10px;\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ChildProduct"] ?? null), "name", [], "any", false, false, false, 79), "html", null, true);
                echo "</span>
                            ";
                // line 80
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["RelatedProductForm"], "ChildProduct", [], "any", false, false, false, 80), 'widget', ["attr" => ["style" => "display: none", "class" => "child-product"]]);
                echo "
                            <br>
                            <span class=\"RelatedProduct-view";
                // line 82
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 82), "html", null, true);
                echo "\" id=\"RelatedProduct-product_code";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 82), "html", null, true);
                echo "\">
                        ";
                // line 83
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ChildProduct"] ?? null), "code_min", [], "any", false, false, false, 83), "html", null, true);
                echo "
                                ";
                // line 84
                if ((twig_get_attribute($this->env, $this->source, ($context["ChildProduct"] ?? null), "code_min", [], "any", false, false, false, 84) != twig_get_attribute($this->env, $this->source, ($context["ChildProduct"] ?? null), "code_max", [], "any", false, false, false, 84))) {
                    echo " ～ ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ChildProduct"] ?? null), "code_max", [], "any", false, false, false, 84), "html", null, true);
                    echo "
                                ";
                }
                // line 86
                echo "                            </span>
                        </div>
                        <div>
                            <button type=\"button\" id=\"RelatedProduct-search";
                // line 89
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 89), "html", null, true);
                echo "\" class=\"btn btn-ec-regular\" data-toggle=\"modal\" data-target=\"#RelatedProductSearchProductModal\" data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 89), "html", null, true);
                echo "\">
                                ";
                // line 90
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("related_product.select_product"), "html", null, true);
                echo "
                            </button>
                            <button type=\"button\" id=\"RelatedProduct-delete";
                // line 92
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 92), "html", null, true);
                echo "\" class=\"btn btn-default text-right RelatedProduct-view";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 92), "html", null, true);
                echo "\" data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 92), "html", null, true);
                echo "\">
                                ";
                // line 93
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("related_product.remove_product"), "html", null, true);
                echo "
                            </button>
                        </div>
                    ";
            } else {
                // line 97
                echo "                        <div>
                            <a href=\"\" id=\"RelatedProduct-product_image_link";
                // line 98
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 98), "html", null, true);
                echo "\" class=\"RelatedProduct-view";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 98), "html", null, true);
                echo " hidden\" >
                                <img src=\"\" id=\"RelatedProduct-product_image_img";
                // line 99
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 99), "html", null, true);
                echo "\" style=\"max-width: 100px;margin-right: 10px;\" />
                            </a>
                            <span id=\"RelatedProduct-product_name";
                // line 101
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 101), "html", null, true);
                echo "\" class=\"RelatedProduct-view";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 101), "html", null, true);
                echo " hidden\" ></span>
                            ";
                // line 102
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["RelatedProductForm"], "ChildProduct", [], "any", false, false, false, 102), 'widget', ["attr" => ["style" => "display: none", "class" => "child-product"]]);
                echo "
                            <br>
                            <span id=\"RelatedProduct-product_code";
                // line 104
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 104), "html", null, true);
                echo "\" class=\"RelatedProduct-view";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 104), "html", null, true);
                echo " hidden\"></span>
                        </div>
                        <div>
                            <button type=\"button\" id=\"RelatedProduct-search";
                // line 107
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 107), "html", null, true);
                echo "\" class=\"btn btn-ec-regular\" data-toggle=\"modal\" data-target=\"#RelatedProductSearchProductModal\" data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 107), "html", null, true);
                echo "\">
                                ";
                // line 108
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("related_product.select_product"), "html", null, true);
                echo "
                            </button>
                            <button  type=\"button\" id=\"RelatedProduct-delete";
                // line 110
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 110), "html", null, true);
                echo "\" class=\"btn text-right RelatedProduct-view";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 110), "html", null, true);
                echo " d-none\" data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 110), "html", null, true);
                echo "\">
                                ";
                // line 111
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("related_product.remove_product"), "html", null, true);
                echo "
                            </button>
                        </div>
                    ";
            }
            // line 115
            echo "                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-3\">
                    <label>
                        ";
            // line 120
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RelatedProductForm"], "content", [], "any", false, false, false, 120), "vars", [], "any", false, false, false, 120), "label", [], "any", false, false, false, 120), "html", null, true);
            echo "
                    </label>
                </div>
                <div class=\"col-9\">
                    <div>
                        ";
            // line 125
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["RelatedProductForm"], "content", [], "any", false, false, false, 125), 'widget', ["attr" => ["rows" => 8]]);
            echo "
                        ";
            // line 126
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["RelatedProductForm"], "content", [], "any", false, false, false, 126), 'errors');
            echo "
                    </div>
                </div>
            </div>
            <hr>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['RelatedProductForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        echo "            <input type=\"hidden\" id=\"RelatedProductDataId\" value=\"\">
        </div>
    </div>
</div>

";
        // line 137
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["searchForm"] ?? null), [0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 138
        echo "
<div class=\"modal fade\" id=\"RelatedProductSearchProductModal\" tabindex=\"-1\" role=\"dialog\"
     aria-labelledby=\"RelatedProductSearchProductModal\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("related_product.modal.product_search.title"), "html", null, true);
        echo "</h5>
                <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">×</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <div class=\"form-group\">
                    ";
        // line 151
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "id", [], "any", false, false, false, 151), 'widget', ["attr" => ["placeholder" => "related_product.modal.product_search.input_name"]]);
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 154
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "category_id", [], "any", false, false, false, 154), 'widget');
        echo "
                </div>
                <div class=\"form-group\">
                    <button type=\"button\" id=\"RelatedProductSearchButton\" class=\"btn btn-primary\" >
                        ";
        // line 158
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.execute"), "html", null, true);
        echo "
                    </button>
                </div>
                <div class=\"form-group\" id=\"RelatedProductSearchResult\">
                </div>
            </div>
        </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "@RelatedProduct4/admin/related_product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  362 => 158,  355 => 154,  349 => 151,  339 => 144,  331 => 138,  329 => 137,  322 => 132,  302 => 126,  298 => 125,  290 => 120,  283 => 115,  276 => 111,  268 => 110,  263 => 108,  257 => 107,  249 => 104,  244 => 102,  238 => 101,  233 => 99,  227 => 98,  224 => 97,  217 => 93,  209 => 92,  204 => 90,  198 => 89,  193 => 86,  186 => 84,  182 => 83,  176 => 82,  171 => 80,  163 => 79,  156 => 77,  148 => 76,  145 => 75,  143 => 74,  136 => 70,  131 => 67,  128 => 66,  125 => 65,  108 => 64,  102 => 61,  83 => 45,  73 => 38,  66 => 34,  62 => 33,  37 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "@RelatedProduct4/admin/related_product.twig", "/var/www/html/eccube-4-new/app/Plugin/RelatedProduct4/Resource/template/admin/related_product.twig");
    }
}
