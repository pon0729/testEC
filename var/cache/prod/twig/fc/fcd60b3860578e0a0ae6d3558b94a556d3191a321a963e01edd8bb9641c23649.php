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

/* Block/newArrival.twig */
class __TwigTemplate_566b2d688e7d30405132ceda84b6a726be27ead365a9a9bff4e51b8a746f5095 extends \Eccube\Twig\Template
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
        echo "<!-- ▼おすすめ商品 -->

<script>
    \$(function() {
        \$('.ec-newArrival__list').slick({
            swipe: true,
            autoplay: true,
            fade: false,
            speed: 500,
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            slide: '.ec-newArrival__listItem',
            responsive: [{
                    breakpoint: 2000,
                    settings: {
                        slidesToShow: 6,
                        slidesToScroll: 1,
                        dots: false,
                        arrows: false,
                    }
                },
                {
                    breakpoint: 1000,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        dots: false,
                        arrows: false,
                    }
                },
                {
                    breakpoint: 800,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        dots: false,
                        arrows: false,
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        dots: false,
                        arrows: false,
                    }
                }
            ]
        });
    });
</script>


<!-- ▼item_list▼ -->
<!--▼新着商品　※おすすめ商品ブロックにあります▼-->
<div class=\"ec-newArrival\">
    <div class=\"ec-newArrival__wrapper\">
        <h3 class=\"ec-newArrival__title\">
            New Arrival
        </h3>
        <ul class=\"ec-shelfGrid ec-newArrival__list\">
            ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["new_arrival_products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["NewArrivalProduct"]) {
            // line 65
            echo "                <li class=\"ec-shelfGrid__item ec-newArrival__listItem\">
                    <a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_detail", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["NewArrivalProduct"], "Product", [], "any", false, false, false, 66), "id", [], "any", false, false, false, 66)]), "html", null, true);
            echo "\">
                        <img src=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["NewArrivalProduct"], "Product", [], "any", false, false, false, 67), "mainFileName", [], "any", false, false, false, 67)), "save_image"), "html", null, true);
            echo "\">
                        ";
            // line 69
            echo "                        <dl>
                            <dt class=\"item_name\">";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["NewArrivalProduct"], "Product", [], "any", false, false, false, 70), "name", [], "any", false, false, false, 70), "html", null, true);
            echo "</dt>
                            <dd class=\"item_price\">
                                ";
            // line 72
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["NewArrivalProduct"], "Product", [], "any", false, false, false, 72), "hasProductClass", [], "any", false, false, false, 72)) {
                // line 73
                echo "                                    ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["NewArrivalProduct"], "Product", [], "any", false, false, false, 73), "getPrice02Min", [], "any", false, false, false, 73) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["NewArrivalProduct"], "Product", [], "any", false, false, false, 73), "getPrice02Max", [], "any", false, false, false, 73))) {
                    // line 74
                    echo "                                        ";
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["NewArrivalProduct"], "Product", [], "any", false, false, false, 74), "getPrice02IncTaxMin", [], "any", false, false, false, 74)), "html", null, true);
                    echo "
                                    ";
                } else {
                    // line 76
                    echo "                                        ";
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["NewArrivalProduct"], "Product", [], "any", false, false, false, 76), "getPrice02IncTaxMin", [], "any", false, false, false, 76)), "html", null, true);
                    echo " ～ ";
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["NewArrivalProduct"], "Product", [], "any", false, false, false, 76), "getPrice02IncTaxMax", [], "any", false, false, false, 76)), "html", null, true);
                    echo "
                                    ";
                }
                // line 78
                echo "                                ";
            } else {
                // line 79
                echo "                                    ";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["NewArrivalProduct"], "Product", [], "any", false, false, false, 79), "getPrice02IncTaxMin", [], "any", false, false, false, 79)), "html", null, true);
                echo "
                                ";
            }
            // line 81
            echo "                            </dd>
                        </dl>
                    </a>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['NewArrivalProduct'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "        </ul>
    </div>
    <a href=\"https://gift-communication.shop/products/list?category_id=2\">
        <label class=\"grad-btn-more\">
            <img src=\"/html/user_data/assets/img/new_arrival/arrow_next.png\">
        </label>
    </a>
</div>
<!--▲ 新着商品　※おすすめ商品ブロックにあります▲ -->
<!-- ▲item_list▲ -->";
    }

    public function getTemplateName()
    {
        return "Block/newArrival.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 86,  153 => 81,  147 => 79,  144 => 78,  136 => 76,  130 => 74,  127 => 73,  125 => 72,  120 => 70,  117 => 69,  113 => 67,  109 => 66,  106 => 65,  102 => 64,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Block/newArrival.twig", "/var/www/html/eccube-4-new/app/template/responceWebDesign/Block/newArrival.twig");
    }
}
