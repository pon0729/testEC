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
class __TwigTemplate_b9b731711cd89af44dd9a35f9605db32fbba72befe859ac234eb58521df22e0a extends \Eccube\Twig\Template
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "RelatedProducts", [], "any", false, false, false, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["RelatedProduct"]) {
            // line 10
            echo "            ";
            $context["ChildProduct"] = twig_get_attribute($this->env, $this->source, $context["RelatedProduct"], "ChildProduct", [], "any", false, false, false, 10);
            // line 11
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ChildProduct"] ?? null), "Status", [], "any", false, false, false, 11), "id", [], "any", false, false, false, 11) == twig_constant("Eccube\\Entity\\Master\\ProductStatus::DISPLAY_SHOW"))) {
                // line 12
                echo "                <li class=\"ec-shelfGrid__item\">
                    <a href=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_detail", ["id" => twig_get_attribute($this->env, $this->source, ($context["ChildProduct"] ?? null), "id", [], "any", false, false, false, 13)]), "html", null, true);
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
        return array (  119 => 34,  113 => 33,  107 => 30,  103 => 28,  97 => 26,  94 => 25,  86 => 23,  80 => 21,  77 => 20,  75 => 19,  70 => 17,  65 => 15,  60 => 13,  57 => 12,  54 => 11,  51 => 10,  47 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@RelatedProduct4/front/related_product.twig", "/var/www/html/eccube-4-new/app/Plugin/RelatedProduct4/Resource/template/front/related_product.twig");
    }
}
