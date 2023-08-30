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

/* @CategoryRecommend4/default/Product/list.twig */
class __TwigTemplate_ab89f97a0d156c76b7a0411dbdb596dfc20f77f2c7eaff2becddff24c1694922 extends \Eccube\Twig\Template
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
        if ( !twig_test_empty(($context["Category"] ?? null))) {
            // line 2
            echo "  ";
            $context["category_recommend_products"] = twig_get_attribute($this->env, $this->source, call_user_func_array($this->env->getFunction('repository')->getCallable(), ["Plugin\\CategoryRecommend4\\Entity\\CategoryRecommendProduct"]), "getCategoryRecommendProduct", [0 => ($context["Category"] ?? null)], "method", false, false, false, 2);
            // line 3
            echo "  ";
            if ((twig_length_filter($this->env, ($context["category_recommend_products"] ?? null)) > 0)) {
                // line 4
                echo "    <script>
      \$(function () {
          \$('.ec-layoutRole__contents').after(\$('#category_recommend_products'))
      })
    </script>
    <!-- ▼item_list▼ -->
    <div id=\"category_recommend_products\" class=\"ec-shelfRole\">
      <div class=\"tw-wrapper\">
        <h3 class=\"tw-text-5xl tw-font-bold tw-mb-4\">「";
                // line 12
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "name", [], "any", false, false, false, 12), "html", null, true);
                echo "」のおすすめ商品</h3>
        <ul class=\"ec-shelfGrid\">
          ";
                // line 14
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["category_recommend_products"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["CategoryRecommendProduct"]) {
                    // line 15
                    echo "            ";
                    $context["Product"] = twig_get_attribute($this->env, $this->source, $context["CategoryRecommendProduct"], "Product", [], "any", false, false, false, 15);
                    // line 16
                    echo "            <li class=\"ec-shelfGrid__item\">
            <a href=\"";
                    // line 17
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_detail", ["id" => twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "id", [], "any", false, false, false, 17)]), "html", null, true);
                    echo "\" class='tw-item-list tw-rounded'>
              <div class=\"tw-shadow-lg tw-flex tw-flex-col tw-justify-between tw-h-full tw-bg-white\">
                <div class='tw-item-list-header tw-relative'>
                  <p class='ec-shelfGrid__item-image'>
                    <img src=\"";
                    // line 21
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "main_list_image", [], "any", false, false, false, 21)), "save_image"), "html", null, true);
                    echo "\" alt=\"\">
                  </p>
                </div>
                <div class='tw-item-list-body'>
                  <p>";
                    // line 25
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "name", [], "any", false, false, false, 25), "html", null, true);
                    echo "</p>
                  <p class='price02-default'>
                    ";
                    // line 27
                    if (twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "hasProductClass", [], "any", false, false, false, 27)) {
                        // line 28
                        echo "                      ";
                        if ((twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "getPrice02Min", [], "any", false, false, false, 28) == twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "getPrice02Max", [], "any", false, false, false, 28))) {
                            // line 29
                            echo "                        ";
                            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "getPrice02IncTaxMin", [], "any", false, false, false, 29)), "html", null, true);
                            echo "
                      ";
                        } else {
                            // line 31
                            echo "                        ";
                            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "getPrice02IncTaxMin", [], "any", false, false, false, 31)), "html", null, true);
                            echo " ～ ";
                            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "getPrice02IncTaxMax", [], "any", false, false, false, 31)), "html", null, true);
                            echo "
                      ";
                        }
                        // line 33
                        echo "                    ";
                    } else {
                        // line 34
                        echo "                      ";
                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "getPrice02IncTaxMin", [], "any", false, false, false, 34)), "html", null, true);
                        echo "
                    ";
                    }
                    // line 36
                    echo "                  </p>
                </div>
              </div>
            </a>
            </li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['CategoryRecommendProduct'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 42
                echo "        </ul>
      </div>
    </div>
  ";
            }
        }
    }

    public function getTemplateName()
    {
        return "@CategoryRecommend4/default/Product/list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 42,  117 => 36,  111 => 34,  108 => 33,  100 => 31,  94 => 29,  91 => 28,  89 => 27,  84 => 25,  77 => 21,  70 => 17,  67 => 16,  64 => 15,  60 => 14,  55 => 12,  45 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@CategoryRecommend4/default/Product/list.twig", "/var/www/html/eccube-4-new/app/Plugin/CategoryRecommend4/Resource/template/default/Product/list.twig");
    }
}
