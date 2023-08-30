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

/* SortProduct4Plus/Resource/template/admin/pager_custom.twig */
class __TwigTemplate_bb782db0410199831751eea0a6f5ad654916d487acc5c79ec77dce2a475822cf extends \Eccube\Twig\Template
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
        if ((twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "pageCount", [], "any", false, false, false, 1) > 1)) {
            // line 2
            echo "    ";
            $context["categoryId"] = (((isset($context["categoryId"]) || array_key_exists("categoryId", $context))) ? (_twig_default_filter(($context["categoryId"] ?? null), null)) : (null));
            // line 3
            echo "    <ul class=\"pagination\">
        ";
            // line 5
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "previous", [], "any", true, true, false, 5)) {
                // line 6
                echo "            <li class=\"page-item\">
                <a class=\"page-link\"
                   href=\"";
                // line 8
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath(((($context["routes"] ?? null)) ? (($context["routes"] ?? null)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 8), "attributes", [], "any", false, false, false, 8), "get", [0 => "_route"], "method", false, false, false, 8))), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 8), "query", [], "any", false, false, false, 8), "all", [], "any", false, false, false, 8), ["categoryId" => ($context["categoryId"] ?? null), "page_no" => twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "previous", [], "any", false, false, false, 8)])), "html", null, true);
                echo "\">
                    Previous
                </a>
            </li>
        ";
            }
            // line 13
            echo "
        ";
            // line 15
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "firstPageInRange", [], "any", false, false, false, 15) != 1)) {
                // line 16
                echo "            <li class=\"page-item\">...</li>
        ";
            }
            // line 18
            echo "
        ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "pagesInRange", [], "any", false, false, false, 19));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 20
                echo "            <li class=\"page-item";
                if (($context["page"] == twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "current", [], "any", false, false, false, 20))) {
                    echo " active";
                }
                echo "\">
                <a class=\"page-link\"
                   href=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath(((($context["routes"] ?? null)) ? (($context["routes"] ?? null)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 22), "attributes", [], "any", false, false, false, 22), "get", [0 => "_route"], "method", false, false, false, 22))), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 22), "query", [], "any", false, false, false, 22), "all", [], "any", false, false, false, 22), ["categoryId" => ($context["categoryId"] ?? null), "page_no" => $context["page"]])), "html", null, true);
                echo "\">
                    ";
                // line 23
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "
                </a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "
        ";
            // line 29
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "last", [], "any", false, false, false, 29) != twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "lastPageInRange", [], "any", false, false, false, 29))) {
                // line 30
                echo "            <li class=\"page-item\">...</li>
        ";
            }
            // line 32
            echo "
        ";
            // line 34
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "next", [], "any", true, true, false, 34)) {
                // line 35
                echo "            <li class=\"page-item\">
                <a class=\"page-link\"
                   href=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath(((($context["routes"] ?? null)) ? (($context["routes"] ?? null)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 37), "attributes", [], "any", false, false, false, 37), "get", [0 => "_route"], "method", false, false, false, 37))), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 37), "query", [], "any", false, false, false, 37), "all", [], "any", false, false, false, 37), ["categoryId" => ($context["categoryId"] ?? null), "page_no" => twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "next", [], "any", false, false, false, 37)])), "html", null, true);
                echo "\">
                    Next
                </a>
            </li>
        ";
            }
            // line 42
            echo "    </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "SortProduct4Plus/Resource/template/admin/pager_custom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 42,  119 => 37,  115 => 35,  112 => 34,  109 => 32,  105 => 30,  102 => 29,  99 => 27,  89 => 23,  85 => 22,  77 => 20,  73 => 19,  70 => 18,  66 => 16,  63 => 15,  60 => 13,  52 => 8,  48 => 6,  45 => 5,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SortProduct4Plus/Resource/template/admin/pager_custom.twig", "/var/www/html/eccube-4-new/app/Plugin/SortProduct4Plus/Resource/template/admin/pager_custom.twig");
    }
}
