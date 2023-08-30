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

/* Block/category_nav_sp.twig */
class __TwigTemplate_be7ad0ce1c10d71f7357ae13c3bc26ea40bf2459d20359e89a2560d042e603a0 extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Block/category_nav_sp.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Block/category_nav_sp.twig"));

        // line 11
        $context["Categories"] = twig_get_attribute($this->env, $this->source, call_user_func_array($this->env->getFunction('repository')->getCallable(), ["Eccube\\Entity\\Category"]), "getList", [], "method", false, false, false, 11);
        // line 12
        echo "
";
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('javascript', $context, $blocks);
        // line 44
        echo "
";
        // line 46
        $macros["__internal_76af16c6165e9dfc506e50b374cb2717d1796c8501f9ce9ae9fdcac399da81e3"] = $this->macros["__internal_76af16c6165e9dfc506e50b374cb2717d1796c8501f9ce9ae9fdcac399da81e3"] = $this;
        // line 47
        echo "
<div class=\"ec-headerCategoryArea\">
    ";
        // line 63
        echo "    <div class=\"ec-categoryNav__list\">
        <div class=\"ec-categoryNav__listItem\">
            <a class = \"link\" href=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list", ["category_id" => 9]);
        echo "\">
                <img src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/assets/img/category/SP_category_cosmetic_bodycare.svg"), "html", null, true);
        echo "\">
                <p><strong>COSMETIC・BODYCARE</strong></p>
            </a>
        <img src=\"/html/user_data/assets/img/category/sp_arrow.svg\">
        </div>
        <div class=\"ec-categoryNav__listItem\">
            <a class = \"link\" href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list", ["category_id" => 8]);
        echo "\">
                <img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/assets/img/category/SP_category_daily.svg"), "html", null, true);
        echo "\">
                <p><strong>DAILY</strong></p>
            </a>
        <img src=\"/html/user_data/assets/img/category/sp_arrow.svg\">
        </div>
        <div class=\"ec-categoryNav__listItem\">
            <a class = \"link\" href=\"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list", ["category_id" => 7]);
        echo "\">
                <img src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/assets/img/category/SP_category_food_drink.svg"), "html", null, true);
        echo "\">
                <p><strong>FOOD・DRINK</strong></p>
            </a>
        <img src=\"/html/user_data/assets/img/category/sp_arrow.svg\">
        </div>
        <div class=\"ec-categoryNav__listItem\">
            <a class = \"link\" href=\"";
        // line 86
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list", ["category_id" => 11]);
        echo "\">
                <img src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/assets/img/category/SP_category_room.svg"), "html", null, true);
        echo "\">
                <p><strong>ROOM</strong></p>
            </a>
        <img src=\"/html/user_data/assets/img/category/sp_arrow.svg\">
        </div>
        <div class=\"ec-categoryNav__listItem\">
            <a class = \"link\" href=\"";
        // line 93
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list", ["category_id" => 10]);
        echo "\">
                <img src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/assets/img/category/SP_category_baby.svg"), "html", null, true);
        echo "\">
                <p><strong>BABY</strong></p>
            </a>
        <img src=\"/html/user_data/assets/img/category/sp_arrow.svg\">
        </div>
        <div class=\"ec-categoryNav__listItem\">
            <a class = \"link\" href=\"";
        // line 100
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list", ["category_id" => null]);
        echo "\">
                <img src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/assets/img/category/SP_category_all.svg"), "html", null, true);
        echo "\">
                <p><strong>ALL</strong></p>
            </a>
        <img src=\"/html/user_data/assets/img/category/sp_arrow.svg\">
        </div>
    </div>
    <div class=\"ec-itemPageLinkNav\">
      <ul>
        ";
        // line 117
        echo "        <li>
          <img src=\"/html/user_data/assets/img/category/sp_arrow.svg\">
          <a href=\"";
        // line 119
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("help_about");
        echo "\">当サイトについて</a>
        </li>
        <li>
          <img src=\"/html/user_data/assets/img/category/sp_arrow.svg\">
          <a href=\"";
        // line 123
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("help_guide");
        echo "\">ご利用ガイド</a>
        </li>
      </ul>
      <ul>
        <li>
          <img src=\"/html/user_data/assets/img/category/sp_arrow.svg\">
          <a href=\"";
        // line 129
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("help_privacy");
        echo "\">プライバシーポリシー</a>
        </li>
        <li>
          <img src=\"/html/user_data/assets/img/category/sp_arrow.svg\">
          <a href=\"";
        // line 133
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("contact");
        echo "\">お問い合わせ</a>
        </li>
      </ul>
      <ul>
        <li>
          <img src=\"/html/user_data/assets/img/category/sp_arrow.svg\">
          <a href=\"";
        // line 139
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("help_tradelaw");
        echo "\">特定商取引法に基づく表記</a>
        </li>
      </ul>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 29
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 30
        echo "<script>
\$(function() {
  var isSlideUp = true;
  \$('.ec-headerCategoryArea__heading').on('click', function() {
    \$(this).toggleClass('active');
    if (isSlideUp = !isSlideUp) {
      \$(this).next('.ec-itemNav').slideUp();
    } else {
      \$(this).next('.ec-itemNav').slideDown();
    }
  });
});
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function macro_tree($__Category__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "Category" => $__Category__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "tree"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "tree"));

            // line 14
            echo "    ";
            $macros["__internal_7c3f32318288f72b036bd80f24cf6c25e608f7e77b7ca1dc2acca85598ff60d9"] = $this;
            // line 15
            echo "    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
            echo "?category_id=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15), "html", null, true);
            echo "\">
        ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), "html", null, true);
            echo "
    </a>
    ";
            // line 18
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 18, $this->source); })()), "children", [], "any", false, false, false, 18)) > 0)) {
                // line 19
                echo "        <ul>
            ";
                // line 20
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 20, $this->source); })()), "children", [], "any", false, false, false, 20));
                foreach ($context['_seq'] as $context["_key"] => $context["ChildCategory"]) {
                    // line 21
                    echo "                <li>
                    ";
                    // line 22
                    echo twig_call_macro($macros["__internal_7c3f32318288f72b036bd80f24cf6c25e608f7e77b7ca1dc2acca85598ff60d9"], "macro_tree", [$context["ChildCategory"]], 22, $context, $this->getSourceContext());
                    echo "
                </li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ChildCategory'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 25
                echo "        </ul>
    ";
            }
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "Block/category_nav_sp.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 25,  277 => 22,  274 => 21,  270 => 20,  267 => 19,  265 => 18,  260 => 16,  253 => 15,  250 => 14,  231 => 13,  208 => 30,  198 => 29,  183 => 139,  174 => 133,  167 => 129,  158 => 123,  151 => 119,  147 => 117,  136 => 101,  132 => 100,  123 => 94,  119 => 93,  110 => 87,  106 => 86,  97 => 80,  93 => 79,  84 => 73,  80 => 72,  71 => 66,  67 => 65,  63 => 63,  59 => 47,  57 => 46,  54 => 44,  52 => 29,  49 => 28,  46 => 12,  44 => 11,);
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
{% set Categories = repository('Eccube\\\\Entity\\\\Category').getList() %}

{% macro tree(Category) %}
    {% from _self import tree %}
    <a href=\"{{ url('product_list') }}?category_id={{ Category.id }}\">
        {{ Category.name }}
    </a>
    {% if Category.children|length > 0 %}
        <ul>
            {% for ChildCategory in Category.children %}
                <li>
                    {{ tree(ChildCategory) }}
                </li>
            {% endfor %}
        </ul>
    {% endif %}
{% endmacro %}

{% block javascript %}
<script>
\$(function() {
  var isSlideUp = true;
  \$('.ec-headerCategoryArea__heading').on('click', function() {
    \$(this).toggleClass('active');
    if (isSlideUp = !isSlideUp) {
      \$(this).next('.ec-itemNav').slideUp();
    } else {
      \$(this).next('.ec-itemNav').slideDown();
    }
  });
});
</script>
{% endblock %}

{# @see https://github.com/bolt/bolt/pull/2388 #}
{% from _self import tree %}

<div class=\"ec-headerCategoryArea\">
    {#
    <div class=\"ec-headerCategoryArea__heading\">
        <p>カテゴリから探す</p>
    </div>
    <div class=\"ec-itemNav\" style=\"display: none\">
        <ul class=\"ec-itemNav__nav\">
            {% for Category in Categories %}
                <li>
                    {{ tree(Category) }}
                </li>
            {% endfor %}
        </ul>
    </div>
    #}
    <div class=\"ec-categoryNav__list\">
        <div class=\"ec-categoryNav__listItem\">
            <a class = \"link\" href=\"{{ url('product_list', { category_id: 9 }) }}\">
                <img src=\"{{ asset('/html/user_data/assets/img/category/SP_category_cosmetic_bodycare.svg') }}\">
                <p><strong>COSMETIC・BODYCARE</strong></p>
            </a>
        <img src=\"/html/user_data/assets/img/category/sp_arrow.svg\">
        </div>
        <div class=\"ec-categoryNav__listItem\">
            <a class = \"link\" href=\"{{ url('product_list', { category_id: 8 }) }}\">
                <img src=\"{{ asset('/html/user_data/assets/img/category/SP_category_daily.svg') }}\">
                <p><strong>DAILY</strong></p>
            </a>
        <img src=\"/html/user_data/assets/img/category/sp_arrow.svg\">
        </div>
        <div class=\"ec-categoryNav__listItem\">
            <a class = \"link\" href=\"{{ url('product_list', { category_id: 7 }) }}\">
                <img src=\"{{ asset('/html/user_data/assets/img/category/SP_category_food_drink.svg') }}\">
                <p><strong>FOOD・DRINK</strong></p>
            </a>
        <img src=\"/html/user_data/assets/img/category/sp_arrow.svg\">
        </div>
        <div class=\"ec-categoryNav__listItem\">
            <a class = \"link\" href=\"{{ url('product_list', { category_id: 11 }) }}\">
                <img src=\"{{ asset('/html/user_data/assets/img/category/SP_category_room.svg') }}\">
                <p><strong>ROOM</strong></p>
            </a>
        <img src=\"/html/user_data/assets/img/category/sp_arrow.svg\">
        </div>
        <div class=\"ec-categoryNav__listItem\">
            <a class = \"link\" href=\"{{ url('product_list', { category_id: 10 }) }}\">
                <img src=\"{{ asset('/html/user_data/assets/img/category/SP_category_baby.svg') }}\">
                <p><strong>BABY</strong></p>
            </a>
        <img src=\"/html/user_data/assets/img/category/sp_arrow.svg\">
        </div>
        <div class=\"ec-categoryNav__listItem\">
            <a class = \"link\" href=\"{{ url('product_list', { category_id: null }) }}\">
                <img src=\"{{ asset('/html/user_data/assets/img/category/SP_category_all.svg') }}\">
                <p><strong>ALL</strong></p>
            </a>
        <img src=\"/html/user_data/assets/img/category/sp_arrow.svg\">
        </div>
    </div>
    <div class=\"ec-itemPageLinkNav\">
      <ul>
        {#
        <li>
          <a href=\"{{ url('homepage') }}\">ホーム</a>
        </li>
        <li>
          <a href=\"{{ url('product_list') }}\">商品一覧</a>
        </li>
        #}
        <li>
          <img src=\"/html/user_data/assets/img/category/sp_arrow.svg\">
          <a href=\"{{ url('help_about') }}\">当サイトについて</a>
        </li>
        <li>
          <img src=\"/html/user_data/assets/img/category/sp_arrow.svg\">
          <a href=\"{{ url('help_guide') }}\">ご利用ガイド</a>
        </li>
      </ul>
      <ul>
        <li>
          <img src=\"/html/user_data/assets/img/category/sp_arrow.svg\">
          <a href=\"{{ url('help_privacy') }}\">プライバシーポリシー</a>
        </li>
        <li>
          <img src=\"/html/user_data/assets/img/category/sp_arrow.svg\">
          <a href=\"{{ url('contact') }}\">お問い合わせ</a>
        </li>
      </ul>
      <ul>
        <li>
          <img src=\"/html/user_data/assets/img/category/sp_arrow.svg\">
          <a href=\"{{ url('help_tradelaw') }}\">特定商取引法に基づく表記</a>
        </li>
      </ul>
    </div>
</div>", "Block/category_nav_sp.twig", "/var/www/html/eccube-4-new/app/template/responceWebDesign/Block/category_nav_sp.twig");
    }
}
