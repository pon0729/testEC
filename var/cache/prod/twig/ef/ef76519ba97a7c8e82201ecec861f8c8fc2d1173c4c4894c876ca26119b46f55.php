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

/* Block/category_navi_2.twig */
class __TwigTemplate_c2ce4ef8b1086266a9b2c935d3feac159713075a5d05d8b615dd6f77fe6e74d5 extends \Eccube\Twig\Template
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
        $macros["__internal_6238073685d42078008e9699cfea6f51696c4da16d8983295775344365fa415c"] = $this->macros["__internal_6238073685d42078008e9699cfea6f51696c4da16d8983295775344365fa415c"] = $this;
        // line 47
        echo "
<div class=\"ec-headerCategoryArea\">
    ";
        // line 63
        echo "    <div class=\"ec-categoryNav__list\">
        <div class=\"ec-categoryNav__listItem\">
            <a href=\"";
        // line 65
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list", ["category_id" => 7]);
        echo "\">
                <img src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/assets/img/category/SP_category_food.svg"), "html", null, true);
        echo "\">
                <p><strong>食品</strong></p>
                <p>FOOD</p>
            </a>
        <img src=\"/html/user_data/assets/img/category/sp_arrow.svg\">
        </div>
        <div class=\"ec-categoryNav__listItem\">
            <a href=\"";
        // line 73
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list", ["category_id" => 8]);
        echo "\">
                <img src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/assets/img/category/SP_category_daily.svg"), "html", null, true);
        echo "\">
                <p><strong>日用品</strong></p>
                <p>DAILY ITEM</p>
            </a>
        <img src=\"/html/user_data/assets/img/category/sp_arrow.svg\">
        </div>
        <div class=\"ec-categoryNav__listItem\">
            <a href=\"";
        // line 81
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list", ["category_id" => 11]);
        echo "\">
                <img src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/assets/img/category/SP_category_general.svg"), "html", null, true);
        echo "\">
                <p><strong>日常を彩るもの</strong></p>
                <p>GENERAL ITEM</p>
            </a>
        <img src=\"/html/user_data/assets/img/category/sp_arrow.svg\">
        </div>
        <div class=\"ec-categoryNav__listItem\">
            <a href=\"";
        // line 89
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list", ["category_id" => 10]);
        echo "\">
                <img src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/assets/img/category/SP_category_baby.svg"), "html", null, true);
        echo "\">
                <p><strong>ベビー用品</strong></p>
                <p>BABY</p>
            </a>
        <img src=\"/html/user_data/assets/img/category/sp_arrow.svg\">
        </div>
        <div class=\"ec-categoryNav__listItem\">
            <a href=\"";
        // line 97
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list", ["category_id" => 14]);
        echo "\">
                <img src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/assets/img/category/PC_category_supplement.svg"), "html", null, true);
        echo "\">
                <p><strong>サプリメント</strong></p>
                <p>SUPPLEMENT</p>
            </a>
        <img src=\"/html/user_data/assets/img/category/sp_arrow.svg\">
        </div>
        <div class=\"ec-categoryNav__listItem\">
            <a href=\"";
        // line 105
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list", ["category_id" => null]);
        echo "\">
                <img src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/assets/img/category/SP_category_all.svg"), "html", null, true);
        echo "\">
                <p><strong>全商品</strong></p>
                <p>ALL</p>
            </a>
        <img src=\"/html/user_data/assets/img/category/sp_arrow.svg\">
        </div>
    </div>
    <div class=\"ec-itemPageLinkNav\">
      <ul>
        ";
        // line 123
        echo "        <li>
          <img src=\"/html/user_data/assets/img/category/sp_arrow.svg\">
          <a href=\"";
        // line 125
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("help_about");
        echo "\">当サイトについて</a>
        </li>
        <li>
          <img src=\"/html/user_data/assets/img/category/sp_arrow.svg\">
          <a href=\"";
        // line 129
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("help_guide");
        echo "\">ご利用ガイド</a>
        </li>
        <li>
          <img src=\"/html/user_data/assets/img/category/sp_arrow.svg\">
          <a href=\"";
        // line 133
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("help_privacy");
        echo "\">プライバシーポリシー</a>
        </li>
        <li>
          <img src=\"/html/user_data/assets/img/category/sp_arrow.svg\">
          <a href=\"";
        // line 137
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("help_tradelaw");
        echo "\">特定商取引法に基づく表記</a>
        </li>
        <li>
          <img src=\"/html/user_data/assets/img/category/sp_arrow.svg\">
          <a href=\"";
        // line 141
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("contact");
        echo "\">お問い合わせ</a>
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
            $macros["__internal_250e6575963fdad7fdcb18e19b6751fcc45aea14d432714173ccc9ada04cae92"] = $this;
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
                    echo twig_call_macro($macros["__internal_250e6575963fdad7fdcb18e19b6751fcc45aea14d432714173ccc9ada04cae92"], "macro_tree", [$context["ChildCategory"]], 22, $context, $this->getSourceContext());
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
        return "Block/category_navi_2.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 25,  249 => 22,  246 => 21,  242 => 20,  239 => 19,  237 => 18,  232 => 16,  225 => 15,  222 => 14,  209 => 13,  192 => 30,  188 => 29,  179 => 141,  172 => 137,  165 => 133,  158 => 129,  151 => 125,  147 => 123,  135 => 106,  131 => 105,  121 => 98,  117 => 97,  107 => 90,  103 => 89,  93 => 82,  89 => 81,  79 => 74,  75 => 73,  65 => 66,  61 => 65,  57 => 63,  53 => 47,  51 => 46,  48 => 44,  46 => 29,  43 => 28,  40 => 12,  38 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Block/category_navi_2.twig", "/var/www/html/eccube-4-new/app/template/responceWebDesign/Block/category_navi_2.twig");
    }
}
