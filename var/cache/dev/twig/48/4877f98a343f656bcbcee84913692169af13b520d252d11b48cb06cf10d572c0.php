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

/* @admin/pager.twig */
class __TwigTemplate_51204098e989a99b137a5204e8731ef85aac14d410ff2501d94e971c2ff02403 extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/pager.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/pager.twig"));

        // line 11
        if ((twig_get_attribute($this->env, $this->source, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 11, $this->source); })()), "pageCount", [], "any", false, false, false, 11) > 1)) {
            // line 12
            echo "    <ul class=\"pagination\">

        <!-- 最初へ -->
        ";
            // line 15
            if ((twig_get_attribute($this->env, $this->source, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 15, $this->source); })()), "firstPageInRange", [], "any", false, false, false, 15) != 1)) {
                // line 16
                echo "            <li class=\"page-item\">
                ";
                // line 18
                echo "                <a class=\"page-link\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(((                // line 19
(isset($context["routes"]) || array_key_exists("routes", $context) ? $context["routes"] : (function () { throw new RuntimeError('Variable "routes" does not exist.', 19, $this->source); })())) ? ((isset($context["routes"]) || array_key_exists("routes", $context) ? $context["routes"] : (function () { throw new RuntimeError('Variable "routes" does not exist.', 19, $this->source); })())) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "request", [], "any", false, false, false, 19), "attributes", [], "any", false, false, false, 19), "get", [0 => "_route"], "method", false, false, false, 19))), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 20
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "request", [], "any", false, false, false, 20), "query", [], "any", false, false, false, 20), "all", [], "any", false, false, false, 20), ["page_no" => twig_get_attribute($this->env, $this->source, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 20, $this->source); })()), "first", [], "any", false, false, false, 20)])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.first"), "html", null, true);
                echo "</a></li>

        ";
            }
            // line 23
            echo "
        <!-- 前へ -->
        ";
            // line 25
            if (twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "previous", [], "any", true, true, false, 25)) {
                // line 26
                echo "            <li class=\"page-item\">
                ";
                // line 28
                echo "                <a class=\"page-link\"
                   href=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((((isset($context["routes"]) || array_key_exists("routes", $context) ? $context["routes"] : (function () { throw new RuntimeError('Variable "routes" does not exist.', 29, $this->source); })())) ? ((isset($context["routes"]) || array_key_exists("routes", $context) ? $context["routes"] : (function () { throw new RuntimeError('Variable "routes" does not exist.', 29, $this->source); })())) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "request", [], "any", false, false, false, 29), "attributes", [], "any", false, false, false, 29), "get", [0 => "_route"], "method", false, false, false, 29))), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "request", [], "any", false, false, false, 29), "query", [], "any", false, false, false, 29), "all", [], "any", false, false, false, 29), ["page_no" => twig_get_attribute($this->env, $this->source, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 29, $this->source); })()), "previous", [], "any", false, false, false, 29)])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.prev"), "html", null, true);
                echo "</a>
            </li>
        ";
            }
            // line 32
            echo "
        <!-- 1ページリンクが表示されない場合、「...」を表示 -->
        ";
            // line 34
            if ((twig_get_attribute($this->env, $this->source, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 34, $this->source); })()), "firstPageInRange", [], "any", false, false, false, 34) != 1)) {
                // line 35
                echo "            <li class=\"page-item\">...</li>
        ";
            }
            // line 37
            echo "
        ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 38, $this->source); })()), "pagesInRange", [], "any", false, false, false, 38));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 39
                echo "            <li class=\"page-item";
                if (($context["page"] == twig_get_attribute($this->env, $this->source, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 39, $this->source); })()), "current", [], "any", false, false, false, 39))) {
                    echo " active";
                }
                echo "\">
                ";
                // line 41
                echo "                <a class=\"page-link\"
                   href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((((isset($context["routes"]) || array_key_exists("routes", $context) ? $context["routes"] : (function () { throw new RuntimeError('Variable "routes" does not exist.', 42, $this->source); })())) ? ((isset($context["routes"]) || array_key_exists("routes", $context) ? $context["routes"] : (function () { throw new RuntimeError('Variable "routes" does not exist.', 42, $this->source); })())) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "request", [], "any", false, false, false, 42), "attributes", [], "any", false, false, false, 42), "get", [0 => "_route"], "method", false, false, false, 42))), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "request", [], "any", false, false, false, 42), "query", [], "any", false, false, false, 42), "all", [], "any", false, false, false, 42), ["page_no" => $context["page"]])), "html", null, true);
                echo "\">
                    ";
                // line 43
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "
                </a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "
        <!-- 最終ページリンクが表示されない場合、「...」を表示 -->
        ";
            // line 49
            if ((twig_get_attribute($this->env, $this->source, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 49, $this->source); })()), "last", [], "any", false, false, false, 49) != twig_get_attribute($this->env, $this->source, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 49, $this->source); })()), "lastPageInRange", [], "any", false, false, false, 49))) {
                // line 50
                echo "            <li class=\"page-item\">...</li>
        ";
            }
            // line 52
            echo "
        <!-- 次へ -->
        ";
            // line 54
            if (twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "next", [], "any", true, true, false, 54)) {
                // line 55
                echo "            <li class=\"page-item\">
                ";
                // line 57
                echo "                <a class=\"page-link\"
                   href=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((((isset($context["routes"]) || array_key_exists("routes", $context) ? $context["routes"] : (function () { throw new RuntimeError('Variable "routes" does not exist.', 58, $this->source); })())) ? ((isset($context["routes"]) || array_key_exists("routes", $context) ? $context["routes"] : (function () { throw new RuntimeError('Variable "routes" does not exist.', 58, $this->source); })())) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "request", [], "any", false, false, false, 58), "attributes", [], "any", false, false, false, 58), "get", [0 => "_route"], "method", false, false, false, 58))), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "request", [], "any", false, false, false, 58), "query", [], "any", false, false, false, 58), "all", [], "any", false, false, false, 58), ["page_no" => twig_get_attribute($this->env, $this->source, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 58, $this->source); })()), "next", [], "any", false, false, false, 58)])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.next"), "html", null, true);
                echo "</a>
            </li>
        ";
            }
            // line 61
            echo "
        <!-- 最後へ -->
        ";
            // line 63
            if ((twig_get_attribute($this->env, $this->source, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 63, $this->source); })()), "last", [], "any", false, false, false, 63) != twig_get_attribute($this->env, $this->source, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 63, $this->source); })()), "lastPageInRange", [], "any", false, false, false, 63))) {
                // line 64
                echo "            <li class=\"page-item\">
                ";
                // line 66
                echo "                <a class=\"page-link\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(((                // line 67
(isset($context["routes"]) || array_key_exists("routes", $context) ? $context["routes"] : (function () { throw new RuntimeError('Variable "routes" does not exist.', 67, $this->source); })())) ? ((isset($context["routes"]) || array_key_exists("routes", $context) ? $context["routes"] : (function () { throw new RuntimeError('Variable "routes" does not exist.', 67, $this->source); })())) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "request", [], "any", false, false, false, 67), "attributes", [], "any", false, false, false, 67), "get", [0 => "_route"], "method", false, false, false, 67))), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 68
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "request", [], "any", false, false, false, 68), "query", [], "any", false, false, false, 68), "all", [], "any", false, false, false, 68), ["page_no" => twig_get_attribute($this->env, $this->source, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 68, $this->source); })()), "last", [], "any", false, false, false, 68)])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.last"), "html", null, true);
                echo "</a></li>
        ";
            }
            // line 70
            echo "
    </ul>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@admin/pager.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 70,  169 => 68,  168 => 67,  166 => 66,  163 => 64,  161 => 63,  157 => 61,  149 => 58,  146 => 57,  143 => 55,  141 => 54,  137 => 52,  133 => 50,  131 => 49,  127 => 47,  117 => 43,  113 => 42,  110 => 41,  103 => 39,  99 => 38,  96 => 37,  92 => 35,  90 => 34,  86 => 32,  78 => 29,  75 => 28,  72 => 26,  70 => 25,  66 => 23,  58 => 20,  57 => 19,  55 => 18,  52 => 16,  50 => 15,  45 => 12,  43 => 11,);
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
{% if pages.pageCount > 1 %}
    <ul class=\"pagination\">

        <!-- 最初へ -->
        {% if pages.firstPageInRange != 1 %}
            <li class=\"page-item\">
                {# FIXME: Need check pass routes before use default _route from request #}
                <a class=\"page-link\" href=\"{{ path(
                    routes ? routes : app.request.attributes.get('_route'),
                    app.request.query.all|merge({'page_no': pages.first})) }}\">{{ 'admin.common.first'|trans }}</a></li>

        {% endif %}

        <!-- 前へ -->
        {% if pages.previous is defined %}
            <li class=\"page-item\">
                {# FIXME: Need check pass routes before use default _route from request #}
                <a class=\"page-link\"
                   href=\"{{ path(routes ? routes : app.request.attributes.get('_route'), app.request.query.all|merge({'page_no': pages.previous})) }}\">{{ 'admin.common.prev'|trans }}</a>
            </li>
        {% endif %}

        <!-- 1ページリンクが表示されない場合、「...」を表示 -->
        {% if pages.firstPageInRange != 1 %}
            <li class=\"page-item\">...</li>
        {% endif %}

        {% for page in pages.pagesInRange %}
            <li class=\"page-item{% if page == pages.current %} active{% endif %}\">
                {# FIXME: Need check pass routes before use default _route from request #}
                <a class=\"page-link\"
                   href=\"{{ path(routes ? routes : app.request.attributes.get('_route'),app.request.query.all|merge({'page_no': page})) }}\">
                    {{ page }}
                </a>
            </li>
        {% endfor %}

        <!-- 最終ページリンクが表示されない場合、「...」を表示 -->
        {% if pages.last != pages.lastPageInRange %}
            <li class=\"page-item\">...</li>
        {% endif %}

        <!-- 次へ -->
        {% if pages.next is defined %}
            <li class=\"page-item\">
                {# FIXME: Need check pass routes before use default _route from request #}
                <a class=\"page-link\"
                   href=\"{{ path(routes ? routes : app.request.attributes.get('_route'),app.request.query.all|merge({'page_no': pages.next})) }}\">{{ 'admin.common.next'|trans }}</a>
            </li>
        {% endif %}

        <!-- 最後へ -->
        {% if pages.last != pages.lastPageInRange %}
            <li class=\"page-item\">
                {# FIXME: Need check pass routes before use default _route from request #}
                <a class=\"page-link\" href=\"{{ path(
                    routes ? routes : app.request.attributes.get('_route'),
                    app.request.query.all|merge({'page_no': pages.last})) }}\">{{ 'admin.common.last'|trans }}</a></li>
        {% endif %}

    </ul>
{% endif %}
", "@admin/pager.twig", "/var/www/html/eccube-4-new/src/Eccube/Resource/template/admin/pager.twig");
    }
}
