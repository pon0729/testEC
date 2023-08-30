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
class __TwigTemplate_000de6c94c81c879622297409c18a0b27a09bcae3d35e933e9b1948766d03803 extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@CategoryRecommend4/default/Product/list.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@CategoryRecommend4/default/Product/list.twig"));

        // line 1
        if ( !twig_test_empty((isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 1, $this->source); })()))) {
            // line 2
            echo "  ";
            $context["category_recommend_products"] = twig_get_attribute($this->env, $this->source, call_user_func_array($this->env->getFunction('repository')->getCallable(), ["Plugin\\CategoryRecommend4\\Entity\\CategoryRecommendProduct"]), "getCategoryRecommendProduct", [0 => (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 2, $this->source); })())], "method", false, false, false, 2);
            // line 3
            echo "  ";
            if ((twig_length_filter($this->env, (isset($context["category_recommend_products"]) || array_key_exists("category_recommend_products", $context) ? $context["category_recommend_products"] : (function () { throw new RuntimeError('Variable "category_recommend_products" does not exist.', 3, $this->source); })())) > 0)) {
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
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 12, $this->source); })()), "name", [], "any", false, false, false, 12), "html", null, true);
                echo "」のおすすめ商品</h3>
        <ul class=\"ec-shelfGrid\">
          ";
                // line 14
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["category_recommend_products"]) || array_key_exists("category_recommend_products", $context) ? $context["category_recommend_products"] : (function () { throw new RuntimeError('Variable "category_recommend_products" does not exist.', 14, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["CategoryRecommendProduct"]) {
                    // line 15
                    echo "            ";
                    $context["Product"] = twig_get_attribute($this->env, $this->source, $context["CategoryRecommendProduct"], "Product", [], "any", false, false, false, 15);
                    // line 16
                    echo "            <li class=\"ec-shelfGrid__item\">
            <a href=\"";
                    // line 17
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_detail", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 17, $this->source); })()), "id", [], "any", false, false, false, 17)]), "html", null, true);
                    echo "\" class='tw-item-list tw-rounded'>
              <div class=\"tw-shadow-lg tw-flex tw-flex-col tw-justify-between tw-h-full tw-bg-white\">
                <div class='tw-item-list-header tw-relative'>
                  <p class='ec-shelfGrid__item-image'>
                    <img src=\"";
                    // line 21
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 21, $this->source); })()), "main_list_image", [], "any", false, false, false, 21)), "save_image"), "html", null, true);
                    echo "\" alt=\"\">
                  </p>
                </div>
                <div class='tw-item-list-body'>
                  <p>";
                    // line 25
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 25, $this->source); })()), "name", [], "any", false, false, false, 25), "html", null, true);
                    echo "</p>
                  <p class='price02-default'>
                    ";
                    // line 27
                    if (twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 27, $this->source); })()), "hasProductClass", [], "any", false, false, false, 27)) {
                        // line 28
                        echo "                      ";
                        if ((twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 28, $this->source); })()), "getPrice02Min", [], "any", false, false, false, 28) == twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 28, $this->source); })()), "getPrice02Max", [], "any", false, false, false, 28))) {
                            // line 29
                            echo "                        ";
                            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 29, $this->source); })()), "getPrice02IncTaxMin", [], "any", false, false, false, 29)), "html", null, true);
                            echo "
                      ";
                        } else {
                            // line 31
                            echo "                        ";
                            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 31, $this->source); })()), "getPrice02IncTaxMin", [], "any", false, false, false, 31)), "html", null, true);
                            echo " ～ ";
                            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 31, $this->source); })()), "getPrice02IncTaxMax", [], "any", false, false, false, 31)), "html", null, true);
                            echo "
                      ";
                        }
                        // line 33
                        echo "                    ";
                    } else {
                        // line 34
                        echo "                      ";
                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 34, $this->source); })()), "getPrice02IncTaxMin", [], "any", false, false, false, 34)), "html", null, true);
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  134 => 42,  123 => 36,  117 => 34,  114 => 33,  106 => 31,  100 => 29,  97 => 28,  95 => 27,  90 => 25,  83 => 21,  76 => 17,  73 => 16,  70 => 15,  66 => 14,  61 => 12,  51 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if Category is not empty %}
  {% set category_recommend_products = repository('Plugin\\\\CategoryRecommend4\\\\Entity\\\\CategoryRecommendProduct').getCategoryRecommendProduct(Category) %}
  {% if category_recommend_products | length > 0 %}
    <script>
      \$(function () {
          \$('.ec-layoutRole__contents').after(\$('#category_recommend_products'))
      })
    </script>
    <!-- ▼item_list▼ -->
    <div id=\"category_recommend_products\" class=\"ec-shelfRole\">
      <div class=\"tw-wrapper\">
        <h3 class=\"tw-text-5xl tw-font-bold tw-mb-4\">「{{ Category.name }}」のおすすめ商品</h3>
        <ul class=\"ec-shelfGrid\">
          {% for CategoryRecommendProduct in category_recommend_products %}
            {% set Product = CategoryRecommendProduct.Product %}
            <li class=\"ec-shelfGrid__item\">
            <a href=\"{{ url('product_detail', {'id': Product.id}) }}\" class='tw-item-list tw-rounded'>
              <div class=\"tw-shadow-lg tw-flex tw-flex-col tw-justify-between tw-h-full tw-bg-white\">
                <div class='tw-item-list-header tw-relative'>
                  <p class='ec-shelfGrid__item-image'>
                    <img src=\"{{ asset(Product.main_list_image|no_image_product, 'save_image') }}\" alt=\"\">
                  </p>
                </div>
                <div class='tw-item-list-body'>
                  <p>{{ Product.name }}</p>
                  <p class='price02-default'>
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
                </div>
              </div>
            </a>
            </li>
          {% endfor %}
        </ul>
      </div>
    </div>
  {% endif %}
{% endif %}", "@CategoryRecommend4/default/Product/list.twig", "/var/www/html/eccube-4-new/app/Plugin/CategoryRecommend4/Resource/template/default/Product/list.twig");
    }
}
