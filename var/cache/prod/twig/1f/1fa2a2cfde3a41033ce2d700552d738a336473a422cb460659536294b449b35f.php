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

/* SortProduct4Plus/Resource/template/admin/block/block_category_tree.twig */
class __TwigTemplate_9b1c215ee8bdd4b09bb17cc157babc5ecc224ffd38333e17b3b3fcdcc4275eb6 extends \Eccube\Twig\Template
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
        echo "<style>
    .c-directoryTree ul>li>ul li:not(:last-of-type)>label:before,
    .c-directoryTree ul>li>ul li:last-of-type>label:before{ margin-right: 1.6em;}
</style>

";
        // line 30
        echo "
";
        // line 31
        $context["TopCategories"] = twig_get_attribute($this->env, $this->source, call_user_func_array($this->env->getFunction('repository')->getCallable(), ["Eccube\\Entity\\Category"]), "findBy", [0 => ["Parent" => null], 1 => ["sort_no" => "DESC"]], "method", false, false, false, 31);
        // line 32
        $context["TargetCategoryId"] = (((isset($context["categoryId"]) || array_key_exists("categoryId", $context))) ? (_twig_default_filter(($context["categoryId"] ?? null), null)) : (null));
        // line 33
        $context["Ids"] = [];
        // line 34
        if ( !(null === ($context["TargetCategoryId"] ?? null))) {
            // line 35
            echo "    ";
            $context["TargetCategory"] = twig_get_attribute($this->env, $this->source, call_user_func_array($this->env->getFunction('repository')->getCallable(), ["Eccube\\Entity\\Category"]), "find", [0 => ($context["TargetCategoryId"] ?? null)], "method", false, false, false, 35);
            // line 36
            echo "    ";
            if (( !(null === ($context["TargetCategory"] ?? null)) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["TargetCategory"] ?? null), "Parents", [], "any", false, false, false, 36)))) {
                // line 37
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["TargetCategory"] ?? null), "Parents", [], "any", false, false, false, 37));
                foreach ($context['_seq'] as $context["_key"] => $context["cate"]) {
                    // line 38
                    echo "            ";
                    $context["Ids"] = twig_array_merge(($context["Ids"] ?? null), [0 => twig_get_attribute($this->env, $this->source, $context["cate"], "id", [], "any", false, false, false, 38)]);
                    // line 39
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cate'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 40
                echo "    ";
            }
            // line 41
            echo "    ";
            $context["Ids"] = twig_array_merge(($context["Ids"] ?? null), [0 => ($context["TargetCategoryId"] ?? null)]);
        }
        // line 43
        echo "
<div class=\"card-header\">
    <span class=\"card-title\"><a href=\"";
        // line 45
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("plugin_SortProduct");
        echo "\">全カテゴリー</a></span>
</div>
<div class=\"card-body\">
    <div class=\"c-directoryTree mb-3\">
        <ul id=\"category_tree\">
            ";
        // line 50
        $macros["renderMacro"] = $this->macros["renderMacro"] = $this;
        // line 51
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["TopCategories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["TopCategory"]) {
            // line 52
            echo "                ";
            echo twig_call_macro($macros["renderMacro"], "macro_tree", [$context["TopCategory"], (((isset($context["TargetCategoryId"]) || array_key_exists("TargetCategoryId", $context))) ? (_twig_default_filter(($context["TargetCategoryId"] ?? null), null)) : (null)), 0, ($context["Ids"] ?? null)], 52, $context, $this->getSourceContext());
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['TopCategory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "        </ul>
    </div>
</div>

";
    }

    // line 7
    public function macro_tree($__Category__ = null, $__TargetId__ = null, $__level__ = null, $__Ids__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "Category" => $__Category__,
            "TargetId" => $__TargetId__,
            "level" => $__level__,
            "Ids" => $__Ids__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 8
            echo "    ";
            $macros["selfMacro"] = $this;
            // line 9
            echo "    ";
            $context["level"] = (($context["level"] ?? null) + 1);
            // line 10
            echo "
    <li>
        <label ";
            // line 12
            if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "children", [], "any", false, false, false, 12)) > 0) && !twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "id", [], "any", false, false, false, 12), ($context["Ids"] ?? null)))) {
                echo "class=\"collapsed\"
               ";
            }
            // line 13
            echo "data-toggle=\"collapse\"
               href=\"#directory_category";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "id", [], "any", false, false, false, 14), "html", null, true);
            echo "\"
               aria-expanded=\"";
            // line 15
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "id", [], "any", false, false, false, 15), ($context["Ids"] ?? null))) {
                echo "true";
            }
            echo "\"
               aria-controls=\"directory_category";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "id", [], "any", false, false, false, 16), "html", null, true);
            echo "\"></label>
        <span>
            <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("plugin_SortProduct_byCategory", ["categoryId" => twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "id", [], "any", false, false, false, 18)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "name", [], "any", false, false, false, 18), "html", null, true);
            echo "(";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "children", [], "any", false, false, false, 18)), "html", null, true);
            echo ")</a>
        </span>
        ";
            // line 20
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "children", [], "any", false, false, false, 20)) > 0)) {
                // line 21
                echo "            <ul class=\"collapse ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "id", [], "any", false, false, false, 21), ($context["Ids"] ?? null))) {
                    echo "show";
                }
                echo "\"
                id=\"directory_category";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "id", [], "any", false, false, false, 22), "html", null, true);
                echo "\">
                ";
                // line 23
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "children", [], "any", false, false, false, 23));
                foreach ($context['_seq'] as $context["_key"] => $context["ChildCategory"]) {
                    // line 24
                    echo "                    ";
                    echo twig_call_macro($macros["selfMacro"], "macro_tree", [$context["ChildCategory"], ($context["TargetId"] ?? null), ($context["level"] ?? null), ($context["Ids"] ?? null)], 24, $context, $this->getSourceContext());
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ChildCategory'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 26
                echo "            </ul>
        ";
            }
            // line 28
            echo "    </li>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "SortProduct4Plus/Resource/template/admin/block/block_category_tree.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 28,  202 => 26,  193 => 24,  189 => 23,  185 => 22,  178 => 21,  176 => 20,  167 => 18,  162 => 16,  156 => 15,  152 => 14,  149 => 13,  144 => 12,  140 => 10,  137 => 9,  134 => 8,  118 => 7,  110 => 54,  101 => 52,  96 => 51,  94 => 50,  86 => 45,  82 => 43,  78 => 41,  75 => 40,  69 => 39,  66 => 38,  61 => 37,  58 => 36,  55 => 35,  53 => 34,  51 => 33,  49 => 32,  47 => 31,  44 => 30,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SortProduct4Plus/Resource/template/admin/block/block_category_tree.twig", "/var/www/html/eccube-4-new/app/Plugin/SortProduct4Plus/Resource/template/admin/block/block_category_tree.twig");
    }
}
