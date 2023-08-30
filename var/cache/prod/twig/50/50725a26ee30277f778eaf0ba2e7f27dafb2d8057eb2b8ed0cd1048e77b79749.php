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

/* Block/category_nav_sp2.twig */
class __TwigTemplate_e4ccdd1ecd6830c57f74c8a7d52d6aa8195de137c4ef171676eac9245f613dd1 extends \Eccube\Twig\Template
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
        $macros["__internal_ee0642af0be390c0c576a1d653db3dbb80a265b900e405876ee2375166381458"] = $this->macros["__internal_ee0642af0be390c0c576a1d653db3dbb80a265b900e405876ee2375166381458"] = $this;
        // line 47
        echo "
<div class=\"ec-headerCategoryArea\">
    ";
        // line 63
        echo "    <div class=\"ec-categoryNav__list\">
        <div class=\"ec-categoryNav__listItem\">
            <a class = \"link\" href=\"";
        // line 65
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list", ["category_id" => 16]);
        echo "\">
                <img src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/assets/img/category/SP_GIFT.svg"), "html", null, true);
        echo "\">
                <p><strong>GIFT</strong></p>
            </a>
        <img src=\"/html/user_data/assets/img/category/sp_arrow.svg\">
        </div>
        <div class=\"ec-categoryNav__listItem\">
            <a class = \"link\" href=\"";
        // line 72
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list", ["category_id" => 9]);
        echo "\">
                <img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/assets/img/category/SP_category_cosmetic_bodycare.svg"), "html", null, true);
        echo "\">
                <p><strong>COSMETIC・BODYCARE</strong></p>
            </a>
        <img src=\"/html/user_data/assets/img/category/sp_arrow.svg\">
        </div>
        <div class=\"ec-categoryNav__listItem\">
            <a class = \"link\" href=\"";
        // line 79
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list", ["category_id" => 11]);
        echo "\">
                <img src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/assets/img/category/SP_category_room.svg"), "html", null, true);
        echo "\">
                <p><strong>ROOM</strong></p>
            </a>
        <img src=\"/html/user_data/assets/img/category/sp_arrow.svg\">
        </div>
        <div class=\"ec-categoryNav__listItem\">
            <a class = \"link\" href=\"";
        // line 86
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list", ["category_id" => 10]);
        echo "\">
                <img src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/assets/img/category/SP_category_baby.svg"), "html", null, true);
        echo "\">
                <p><strong>BABY</strong></p>
            </a>
        <img src=\"/html/user_data/assets/img/category/sp_arrow.svg\">
        </div>
        <div class=\"ec-categoryNav__listItem\">
            <a class = \"link\" href=\"";
        // line 93
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list", ["category_id" => 7]);
        echo "\">
                <img src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/assets/img/category/SP_category_food_drink.svg"), "html", null, true);
        echo "\">
                <p><strong>FOOD・DRINK</strong></p>
            </a>
        <img src=\"/html/user_data/assets/img/category/sp_arrow.svg\">
        </div>
        <div class=\"ec-categoryNav__listItem\">
            <a class = \"link\" href=\"";
        // line 100
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list", ["category_id" => null]);
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
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("help_about");
        echo "\">当サイトについて</a>
        </li>
        <li>
          <img src=\"/html/user_data/assets/img/category/sp_arrow.svg\">
          <a href=\"";
        // line 123
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("help_guide");
        echo "\">ご利用ガイド</a>
        </li>
      </ul>
      <ul>
        <li>
          <img src=\"/html/user_data/assets/img/category/sp_arrow.svg\">
          <a href=\"";
        // line 129
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("help_privacy");
        echo "\">プライバシーポリシー</a>
        </li>
        <li>
          <img src=\"/html/user_data/assets/img/category/sp_arrow.svg\">
          <a href=\"https://gift-communication.shop/user_data/faq\">FAQ</a>
        </li>
      </ul>
      <ul>
        <li>
          <img src=\"/html/user_data/assets/img/category/sp_arrow.svg\">
          <a href=\"";
        // line 139
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("help_tradelaw");
        echo "\">特定商取引法に基づく表記</a>
        </li>
      </ul>
    </div>
</div>";
    }

    // line 29
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
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

        ob_start(function () { return ''; });
        try {
            // line 14
            echo "    ";
            $macros["__internal_b370f2a26aabc283cc15ef3e3e802ce76fd4a966b37971177bb94f4893c715e8"] = $this;
            // line 15
            echo "    <a href=\"";
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
            echo "?category_id=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "id", [], "any", false, false, false, 15), "html", null, true);
            echo "\">
        ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "name", [], "any", false, false, false, 16), "html", null, true);
            echo "
    </a>
    ";
            // line 18
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "children", [], "any", false, false, false, 18)) > 0)) {
                // line 19
                echo "        <ul>
            ";
                // line 20
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "children", [], "any", false, false, false, 20));
                foreach ($context['_seq'] as $context["_key"] => $context["ChildCategory"]) {
                    // line 21
                    echo "                <li>
                    ";
                    // line 22
                    echo twig_call_macro($macros["__internal_b370f2a26aabc283cc15ef3e3e802ce76fd4a966b37971177bb94f4893c715e8"], "macro_tree", [$context["ChildCategory"]], 22, $context, $this->getSourceContext());
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

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "Block/category_nav_sp2.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 25,  244 => 22,  241 => 21,  237 => 20,  234 => 19,  232 => 18,  227 => 16,  220 => 15,  217 => 14,  204 => 13,  187 => 30,  183 => 29,  174 => 139,  161 => 129,  152 => 123,  145 => 119,  141 => 117,  130 => 101,  126 => 100,  117 => 94,  113 => 93,  104 => 87,  100 => 86,  91 => 80,  87 => 79,  78 => 73,  74 => 72,  65 => 66,  61 => 65,  57 => 63,  53 => 47,  51 => 46,  48 => 44,  46 => 29,  43 => 28,  40 => 12,  38 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Block/category_nav_sp2.twig", "/var/www/html/eccube-4-new/app/template/responceWebDesign/Block/category_nav_sp2.twig");
    }
}
