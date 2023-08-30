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

/* @RelatedProduct4/front/related_product.twig */
class __TwigTemplate_b7dbfb4505a56a6681e2f30b82ae5323a19a881ef1f8d62837975f68b5de8b6d extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@RelatedProduct4/front/related_product.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@RelatedProduct4/front/related_product.twig"));

        // line 1
        echo "<script>
    \$(function () {
        \$('#RelatedProduct-product_area').appendTo(\$('.ec-layoutRole__main, .ec-layoutRole__mainWithColumn, .ec-layoutRole__mainBetweenColumn'));
    });
</script>

<div id=\"RelatedProduct-product_area\" class=\"ec-shelfRole\">
    <ul class=\"ec-shelfGrid\">
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 9, $this->source); })()), "RelatedProducts", [], "any", false, false, false, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["RelatedProduct"]) {
            // line 10
            echo "            ";
            $context["ChildProduct"] = twig_get_attribute($this->env, $this->source, $context["RelatedProduct"], "ChildProduct", [], "any", false, false, false, 10);
            // line 11
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ChildProduct"]) || array_key_exists("ChildProduct", $context) ? $context["ChildProduct"] : (function () { throw new RuntimeError('Variable "ChildProduct" does not exist.', 11, $this->source); })()), "Status", [], "any", false, false, false, 11), "id", [], "any", false, false, false, 11) == twig_constant("Eccube\\Entity\\Master\\ProductStatus::DISPLAY_SHOW"))) {
                // line 12
                echo "                <li class=\"ec-shelfGrid__item\">
                    <a href=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_detail", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["ChildProduct"]) || array_key_exists("ChildProduct", $context) ? $context["ChildProduct"] : (function () { throw new RuntimeError('Variable "ChildProduct" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13)]), "html", null, true);
                echo "\">
                        <p class=\"ec-shelfGrid__item-image\">
                            <img src=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RelatedProduct"], "ChildProduct", [], "any", false, false, false, 15), "main_list_image", [], "any", false, false, false, 15)), "save_image"), "html", null, true);
                echo "\">
                        </p>
                        <p>";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RelatedProduct"], "ChildProduct", [], "any", false, false, false, 17), "name", [], "any", false, false, false, 17), "html", null, true);
                echo "</p>
                        <p>
                            ";
                // line 19
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RelatedProduct"], "ChildProduct", [], "any", false, false, false, 19), "hasProductClass", [], "any", false, false, false, 19)) {
                    // line 20
                    echo "                                ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RelatedProduct"], "ChildProduct", [], "any", false, false, false, 20), "getPrice02Min", [], "any", false, false, false, 20) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RelatedProduct"], "ChildProduct", [], "any", false, false, false, 20), "getPrice02Max", [], "any", false, false, false, 20))) {
                        // line 21
                        echo "                                    ";
                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RelatedProduct"], "ChildProduct", [], "any", false, false, false, 21), "getPrice02IncTaxMin", [], "any", false, false, false, 21)), "html", null, true);
                        echo "
                                ";
                    } else {
                        // line 23
                        echo "                                    ";
                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RelatedProduct"], "ChildProduct", [], "any", false, false, false, 23), "getPrice02IncTaxMin", [], "any", false, false, false, 23)), "html", null, true);
                        echo " ～ ";
                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RelatedProduct"], "ChildProduct", [], "any", false, false, false, 23), "getPrice02IncTaxMax", [], "any", false, false, false, 23)), "html", null, true);
                        echo "
                                ";
                    }
                    // line 25
                    echo "                            ";
                } else {
                    // line 26
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RelatedProduct"], "ChildProduct", [], "any", false, false, false, 26), "getPrice02IncTaxMin", [], "any", false, false, false, 26)), "html", null, true);
                    echo "
                            ";
                }
                // line 28
                echo "                        </p>
                    </a>
                    <span>";
                // line 30
                echo twig_get_attribute($this->env, $this->source, $context["RelatedProduct"], "content", [], "any", false, false, false, 30);
                echo "</span>
                </li>
            ";
            }
            // line 33
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['RelatedProduct'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "    </ul>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@RelatedProduct4/front/related_product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 34,  119 => 33,  113 => 30,  109 => 28,  103 => 26,  100 => 25,  92 => 23,  86 => 21,  83 => 20,  81 => 19,  76 => 17,  71 => 15,  66 => 13,  63 => 12,  60 => 11,  57 => 10,  53 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script>
    \$(function () {
        \$('#RelatedProduct-product_area').appendTo(\$('.ec-layoutRole__main, .ec-layoutRole__mainWithColumn, .ec-layoutRole__mainBetweenColumn'));
    });
</script>

<div id=\"RelatedProduct-product_area\" class=\"ec-shelfRole\">
    <ul class=\"ec-shelfGrid\">
        {% for RelatedProduct in Product.RelatedProducts %}
            {% set ChildProduct = RelatedProduct.ChildProduct %}
            {% if ChildProduct.Status.id == constant(\"Eccube\\\\Entity\\\\Master\\\\ProductStatus::DISPLAY_SHOW\") %}
                <li class=\"ec-shelfGrid__item\">
                    <a href=\"{{ url('product_detail', {id : ChildProduct.id}) }}\">
                        <p class=\"ec-shelfGrid__item-image\">
                            <img src=\"{{ asset(RelatedProduct.ChildProduct.main_list_image|no_image_product, 'save_image') }}\">
                        </p>
                        <p>{{ RelatedProduct.ChildProduct.name }}</p>
                        <p>
                            {% if RelatedProduct.ChildProduct.hasProductClass %}
                                {% if RelatedProduct.ChildProduct.getPrice02Min == RelatedProduct.ChildProduct.getPrice02Max %}
                                    {{ RelatedProduct.ChildProduct.getPrice02IncTaxMin|price }}
                                {% else %}
                                    {{ RelatedProduct.ChildProduct.getPrice02IncTaxMin|price }} ～ {{ RelatedProduct.ChildProduct.getPrice02IncTaxMax|price }}
                                {% endif %}
                            {% else %}
                                {{ RelatedProduct.ChildProduct.getPrice02IncTaxMin|price }}
                            {% endif %}
                        </p>
                    </a>
                    <span>{{ RelatedProduct.content|raw }}</span>
                </li>
            {% endif %}
        {% endfor %}
    </ul>
</div>
", "@RelatedProduct4/front/related_product.twig", "/var/www/html/eccube-4-new/app/Plugin/RelatedProduct4/Resource/template/front/related_product.twig");
    }
}
