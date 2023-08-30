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

/* default_frame.twig */
class __TwigTemplate_b0c515312a4114da101482b1c482c74ac80ddde34015f5caf01121442d9da13c extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheet' => [$this, 'block_stylesheet'],
            'main' => [$this, 'block_main'],
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default_frame.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default_frame.twig"));

        // line 1
        echo "<!doctype html>
";
        // line 12
        echo "<html lang=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 12, $this->source); })()), "locale", [], "any", false, false, false, 12), "html", null, true);
        echo "\">
<head prefix=\"og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# product: http://ogp.me/ns/product#\">
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"eccube-csrf-token\" content=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(twig_constant("Eccube\\Common\\Constant::TOKEN_NAME")), "html", null, true);
        echo "\">
    <title>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 17, $this->source); })()), "shop_name", [], "any", false, false, false, 17), "html", null, true);
        if (((isset($context["subtitle"]) || array_key_exists("subtitle", $context)) &&  !twig_test_empty((isset($context["subtitle"]) || array_key_exists("subtitle", $context) ? $context["subtitle"] : (function () { throw new RuntimeError('Variable "subtitle" does not exist.', 17, $this->source); })())))) {
            echo " / ";
            echo twig_escape_filter($this->env, (isset($context["subtitle"]) || array_key_exists("subtitle", $context) ? $context["subtitle"] : (function () { throw new RuntimeError('Variable "subtitle" does not exist.', 17, $this->source); })()), "html", null, true);
        } elseif (((isset($context["title"]) || array_key_exists("title", $context)) &&  !twig_test_empty((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 17, $this->source); })())))) {
            echo " / ";
            echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 17, $this->source); })()), "html", null, true);
        }
        echo "</title>
    ";
        // line 18
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["Page"]) || array_key_exists("Page", $context) ? $context["Page"] : (function () { throw new RuntimeError('Variable "Page" does not exist.', 18, $this->source); })()), "author", [], "any", false, false, false, 18))) {
            // line 19
            echo "        <meta name=\"author\" content=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Page"]) || array_key_exists("Page", $context) ? $context["Page"] : (function () { throw new RuntimeError('Variable "Page" does not exist.', 19, $this->source); })()), "author", [], "any", false, false, false, 19), "html", null, true);
            echo "\">
    ";
        }
        // line 21
        echo "    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["Page"]) || array_key_exists("Page", $context) ? $context["Page"] : (function () { throw new RuntimeError('Variable "Page" does not exist.', 21, $this->source); })()), "description", [], "any", false, false, false, 21))) {
            // line 22
            echo "        <meta name=\"description\" content=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Page"]) || array_key_exists("Page", $context) ? $context["Page"] : (function () { throw new RuntimeError('Variable "Page" does not exist.', 22, $this->source); })()), "description", [], "any", false, false, false, 22), "html", null, true);
            echo "\">
    ";
        }
        // line 24
        echo "    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["Page"]) || array_key_exists("Page", $context) ? $context["Page"] : (function () { throw new RuntimeError('Variable "Page" does not exist.', 24, $this->source); })()), "keyword", [], "any", false, false, false, 24))) {
            // line 25
            echo "        <meta name=\"keywords\" content=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Page"]) || array_key_exists("Page", $context) ? $context["Page"] : (function () { throw new RuntimeError('Variable "Page" does not exist.', 25, $this->source); })()), "keyword", [], "any", false, false, false, 25), "html", null, true);
            echo "\">
    ";
        }
        // line 27
        echo "    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["Page"]) || array_key_exists("Page", $context) ? $context["Page"] : (function () { throw new RuntimeError('Variable "Page" does not exist.', 27, $this->source); })()), "meta_robots", [], "any", false, false, false, 27))) {
            // line 28
            echo "        <meta name=\"robots\" content=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Page"]) || array_key_exists("Page", $context) ? $context["Page"] : (function () { throw new RuntimeError('Variable "Page" does not exist.', 28, $this->source); })()), "meta_robots", [], "any", false, false, false, 28), "html", null, true);
            echo "\">
    ";
        }
        // line 30
        echo "    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["Page"]) || array_key_exists("Page", $context) ? $context["Page"] : (function () { throw new RuntimeError('Variable "Page" does not exist.', 30, $this->source); })()), "meta_tags", [], "any", false, false, false, 30))) {
            // line 31
            echo "        ";
            echo twig_include($this->env, $context, twig_template_from_string($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Page"]) || array_key_exists("Page", $context) ? $context["Page"] : (function () { throw new RuntimeError('Variable "Page" does not exist.', 31, $this->source); })()), "meta_tags", [], "any", false, false, false, 31)));
            echo "
    ";
        }
        // line 33
        echo "    <link rel=\"icon\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/common/GC_favicon.ico", "user_data"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.3.1/css/all.css\" integrity=\"sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\">
    ";
        // line 38
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 39
        echo "    <script src=\"https://code.jquery.com/jquery-3.3.1.min.js\" integrity=\"sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=\" crossorigin=\"anonymous\"></script>
    <script>
        \$(function() {
            \$.ajaxSetup({
                'headers': {
                    'ECCUBE-CSRF-TOKEN': \$('meta[name=\"eccube-csrf-token\"]').attr('content')
                }
            });
        });
    </script>
    ";
        // line 50
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 50, $this->source); })()), "Head", [], "any", false, false, false, 50)) {
            // line 51
            echo "        ";
            echo twig_include($this->env, $context, "block.twig", ["Blocks" => twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 51, $this->source); })()), "Head", [], "any", false, false, false, 51)]);
            echo "
    ";
        }
        // line 53
        echo "    ";
        // line 54
        echo "    ";
        if ((isset($context["plugin_assets"]) || array_key_exists("plugin_assets", $context))) {
            echo twig_include($this->env, $context, "@admin/snippet.twig", ["snippets" => (isset($context["plugin_assets"]) || array_key_exists("plugin_assets", $context) ? $context["plugin_assets"] : (function () { throw new RuntimeError('Variable "plugin_assets" does not exist.', 54, $this->source); })())]);
        }
        // line 55
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/customize.css", "user_data"), "html", null, true);
        echo "\">
</head>
<body id=\"page_";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "request", [], "any", false, false, false, 57), "get", [0 => "_route"], "method", false, false, false, 57), "html", null, true);
        echo "\" class=\"";
        echo twig_escape_filter($this->env, (((isset($context["body_class"]) || array_key_exists("body_class", $context))) ? (_twig_default_filter((isset($context["body_class"]) || array_key_exists("body_class", $context) ? $context["body_class"] : (function () { throw new RuntimeError('Variable "body_class" does not exist.', 57, $this->source); })()), "other_page")) : ("other_page")), "html", null, true);
        echo "\">
";
        // line 59
        if (twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 59, $this->source); })()), "BodyAfter", [], "any", false, false, false, 59)) {
            // line 60
            echo "    ";
            echo twig_include($this->env, $context, "block.twig", ["Blocks" => twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 60, $this->source); })()), "BodyAfter", [], "any", false, false, false, 60)]);
            echo "
";
        }
        // line 62
        echo "
<div class=\"ec-layoutRole\">
    ";
        // line 65
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 65, $this->source); })()), "Header", [], "any", false, false, false, 65)) {
            // line 66
            echo "        <div class=\"ec-layoutRole__header\">
            ";
            // line 67
            echo twig_include($this->env, $context, "block.twig", ["Blocks" => twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 67, $this->source); })()), "Header", [], "any", false, false, false, 67)]);
            echo "
        </div>
    ";
        }
        // line 70
        echo "
    ";
        // line 72
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 72, $this->source); })()), "ContentsTop", [], "any", false, false, false, 72)) {
            // line 73
            echo "        <div class=\"ec-layoutRole__contentTop\">
            ";
            // line 74
            echo twig_include($this->env, $context, "block.twig", ["Blocks" => twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 74, $this->source); })()), "ContentsTop", [], "any", false, false, false, 74)]);
            echo "
        </div>
    ";
        }
        // line 77
        echo "
    <div class=\"ec-layoutRole__contents\">
        ";
        // line 80
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 80, $this->source); })()), "SideLeft", [], "any", false, false, false, 80)) {
            // line 81
            echo "            <div class=\"ec-layoutRole__left\">
                ";
            // line 82
            echo twig_include($this->env, $context, "block.twig", ["Blocks" => twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 82, $this->source); })()), "SideLeft", [], "any", false, false, false, 82)]);
            echo "
            </div>
        ";
        }
        // line 85
        echo "
        ";
        // line 86
        $context["layoutRoleMain"] = "ec-layoutRole__main";
        // line 87
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 87, $this->source); })()), "ColumnNum", [], "any", false, false, false, 87) == 2)) {
            // line 88
            echo "            ";
            $context["layoutRoleMain"] = "ec-layoutRole__mainWithColumn";
            // line 89
            echo "        ";
        } elseif ((twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 89, $this->source); })()), "ColumnNum", [], "any", false, false, false, 89) == 3)) {
            // line 90
            echo "            ";
            $context["layoutRoleMain"] = "ec-layoutRole__mainBetweenColumn";
            // line 91
            echo "        ";
        }
        // line 92
        echo "
        <div class=\"";
        // line 93
        echo twig_escape_filter($this->env, (isset($context["layoutRoleMain"]) || array_key_exists("layoutRoleMain", $context) ? $context["layoutRoleMain"] : (function () { throw new RuntimeError('Variable "layoutRoleMain" does not exist.', 93, $this->source); })()), "html", null, true);
        echo "\">
            ";
        // line 95
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 95, $this->source); })()), "MainTop", [], "any", false, false, false, 95)) {
            // line 96
            echo "                <div class=\"ec-layoutRole__mainTop\">
                    ";
            // line 97
            echo twig_include($this->env, $context, "block.twig", ["Blocks" => twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 97, $this->source); })()), "MainTop", [], "any", false, false, false, 97)]);
            echo "
                </div>
            ";
        }
        // line 100
        echo "
            ";
        // line 102
        echo "            ";
        $this->displayBlock('main', $context, $blocks);
        // line 103
        echo "
            ";
        // line 105
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 105, $this->source); })()), "MainBottom", [], "any", false, false, false, 105)) {
            // line 106
            echo "                <div class=\"ec-layoutRole__mainBottom\">
                    ";
            // line 107
            echo twig_include($this->env, $context, "block.twig", ["Blocks" => twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 107, $this->source); })()), "MainBottom", [], "any", false, false, false, 107)]);
            echo "
                </div>
            ";
        }
        // line 110
        echo "        </div>

        ";
        // line 113
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 113, $this->source); })()), "SideRight", [], "any", false, false, false, 113)) {
            // line 114
            echo "            <div class=\"ec-layoutRole__right\">
                ";
            // line 115
            echo twig_include($this->env, $context, "block.twig", ["Blocks" => twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 115, $this->source); })()), "SideRight", [], "any", false, false, false, 115)]);
            echo "
            </div>
        ";
        }
        // line 118
        echo "    </div>

    ";
        // line 121
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 121, $this->source); })()), "ContentsBottom", [], "any", false, false, false, 121)) {
            // line 122
            echo "        <div class=\"ec-layoutRole__contentBottom\">
            ";
            // line 123
            echo twig_include($this->env, $context, "block.twig", ["Blocks" => twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 123, $this->source); })()), "ContentsBottom", [], "any", false, false, false, 123)]);
            echo "
        </div>
    ";
        }
        // line 126
        echo "
    ";
        // line 128
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 128, $this->source); })()), "Footer", [], "any", false, false, false, 128)) {
            // line 129
            echo "        <div class=\"ec-layoutRole__footer\">
            ";
            // line 130
            echo twig_include($this->env, $context, "block.twig", ["Blocks" => twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 130, $this->source); })()), "Footer", [], "any", false, false, false, 130)]);
            echo "
        </div>
    ";
        }
        // line 133
        echo "</div><!-- ec-layoutRole -->

<div class=\"ec-overlayRole\"></div>
<div class=\"ec-drawerRoleClose\"><i class=\"fas fa-times\"></i></div>
<div class=\"ec-drawerRole\">
    ";
        // line 139
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 139, $this->source); })()), "Drawer", [], "any", false, false, false, 139)) {
            // line 140
            echo "        ";
            echo twig_include($this->env, $context, "block.twig", ["Blocks" => twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 140, $this->source); })()), "Drawer", [], "any", false, false, false, 140)]);
            echo "
    ";
        }
        // line 142
        echo "</div>
<div class=\"ec-blockTopBtn pagetop\">
  <img src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/assets/img/top/pagetop.svg"), "html", null, true);
        echo "\" alt=\"PAGE TOP\">
</div>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js\"></script>
";
        // line 148
        $this->loadTemplate("@common/lang.twig", "default_frame.twig", 148)->display($context);
        // line 149
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/function.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/eccube.js"), "html", null, true);
        echo "\"></script>
<script>
\$(function () {
  \$.ajax({
    url: '";
        // line 154
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/common/svg.html"), "html", null, true);
        echo "',
    type: 'GET',
    dataType: 'html',
  }).done(function(data){
    \$('body').prepend(data);
  });
});
</script>
";
        // line 162
        $this->displayBlock('javascript', $context, $blocks);
        // line 164
        if (twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 164, $this->source); })()), "CloseBodyBefore", [], "any", false, false, false, 164)) {
            // line 165
            echo "    ";
            echo twig_include($this->env, $context, "block.twig", ["Blocks" => twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 165, $this->source); })()), "CloseBodyBefore", [], "any", false, false, false, 165)]);
            echo "
";
        }
        // line 168
        if ((isset($context["plugin_snippets"]) || array_key_exists("plugin_snippets", $context))) {
            // line 169
            echo "    ";
            echo twig_include($this->env, $context, "snippet.twig", ["snippets" => (isset($context["plugin_snippets"]) || array_key_exists("plugin_snippets", $context) ? $context["plugin_snippets"] : (function () { throw new RuntimeError('Variable "plugin_snippets" does not exist.', 169, $this->source); })())]);
            echo "
";
        }
        // line 171
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/customize.js", "user_data"), "html", null, true);
        echo "\"></script>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 38
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 102
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 162
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "default_frame.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  453 => 162,  435 => 102,  417 => 38,  402 => 171,  396 => 169,  394 => 168,  388 => 165,  386 => 164,  384 => 162,  373 => 154,  366 => 150,  361 => 149,  359 => 148,  352 => 144,  348 => 142,  342 => 140,  339 => 139,  332 => 133,  326 => 130,  323 => 129,  320 => 128,  317 => 126,  311 => 123,  308 => 122,  305 => 121,  301 => 118,  295 => 115,  292 => 114,  289 => 113,  285 => 110,  279 => 107,  276 => 106,  273 => 105,  270 => 103,  267 => 102,  264 => 100,  258 => 97,  255 => 96,  252 => 95,  248 => 93,  245 => 92,  242 => 91,  239 => 90,  236 => 89,  233 => 88,  230 => 87,  228 => 86,  225 => 85,  219 => 82,  216 => 81,  213 => 80,  209 => 77,  203 => 74,  200 => 73,  197 => 72,  194 => 70,  188 => 67,  185 => 66,  182 => 65,  178 => 62,  172 => 60,  170 => 59,  164 => 57,  158 => 55,  153 => 54,  151 => 53,  145 => 51,  142 => 50,  130 => 39,  128 => 38,  124 => 37,  116 => 33,  110 => 31,  107 => 30,  101 => 28,  98 => 27,  92 => 25,  89 => 24,  83 => 22,  80 => 21,  74 => 19,  72 => 18,  61 => 17,  57 => 16,  49 => 12,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
{#
This file is part of EC-CUBE

Copyright(c) EC-CUBE CO.,LTD. All Rights Reserved.

http://www.ec-cube.co.jp/

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.
#}
<html lang=\"{{ eccube_config.locale }}\">
<head prefix=\"og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# product: http://ogp.me/ns/product#\">
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"eccube-csrf-token\" content=\"{{ csrf_token(constant('Eccube\\\\Common\\\\Constant::TOKEN_NAME')) }}\">
    <title>{{ BaseInfo.shop_name }}{% if subtitle is defined and subtitle is not empty %} / {{ subtitle }}{% elseif title is defined and title is not empty %} / {{ title }}{% endif %}</title>
    {% if Page.author is not empty %}
        <meta name=\"author\" content=\"{{ Page.author }}\">
    {% endif %}
    {% if Page.description is not empty %}
        <meta name=\"description\" content=\"{{ Page.description }}\">
    {% endif %}
    {% if Page.keyword is not empty %}
        <meta name=\"keywords\" content=\"{{ Page.keyword }}\">
    {% endif %}
    {% if Page.meta_robots is not empty %}
        <meta name=\"robots\" content=\"{{ Page.meta_robots }}\">
    {% endif %}
    {% if Page.meta_tags is not empty %}
        {{ include(template_from_string(Page.meta_tags)) }}
    {% endif %}
    <link rel=\"icon\" href=\"{{ asset('assets/img/common/GC_favicon.ico', 'user_data') }}\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.3.1/css/all.css\" integrity=\"sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/style.css') }}\">
    {% block stylesheet %}{% endblock %}
    <script src=\"https://code.jquery.com/jquery-3.3.1.min.js\" integrity=\"sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=\" crossorigin=\"anonymous\"></script>
    <script>
        \$(function() {
            \$.ajaxSetup({
                'headers': {
                    'ECCUBE-CSRF-TOKEN': \$('meta[name=\"eccube-csrf-token\"]').attr('content')
                }
            });
        });
    </script>
    {# Layout: HEAD #}
    {% if Layout.Head %}
        {{ include('block.twig', {'Blocks': Layout.Head}) }}
    {% endif %}
    {# プラグイン用styleseetやmetatagなど #}
    {% if plugin_assets is defined %}{{ include('@admin/snippet.twig', { snippets: plugin_assets }) }}{% endif %}
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/customize.css', 'user_data') }}\">
</head>
<body id=\"page_{{ app.request.get('_route') }}\" class=\"{{ body_class|default('other_page') }}\">
{# Layout: BODY_AFTER #}
{% if Layout.BodyAfter %}
    {{ include('block.twig', {'Blocks': Layout.BodyAfter}) }}
{% endif %}

<div class=\"ec-layoutRole\">
    {# Layout: HEADER #}
    {% if Layout.Header %}
        <div class=\"ec-layoutRole__header\">
            {{ include('block.twig', {'Blocks': Layout.Header}) }}
        </div>
    {% endif %}

    {# Layout: CONTENTS_TOP #}
    {% if Layout.ContentsTop %}
        <div class=\"ec-layoutRole__contentTop\">
            {{ include('block.twig', {'Blocks': Layout.ContentsTop}) }}
        </div>
    {% endif %}

    <div class=\"ec-layoutRole__contents\">
        {# Layout: SIDE_LEFT #}
        {% if Layout.SideLeft %}
            <div class=\"ec-layoutRole__left\">
                {{ include('block.twig', {'Blocks': Layout.SideLeft}) }}
            </div>
        {% endif %}

        {% set layoutRoleMain = 'ec-layoutRole__main' %}
        {% if Layout.ColumnNum == 2 %}
            {% set layoutRoleMain = 'ec-layoutRole__mainWithColumn' %}
        {% elseif Layout.ColumnNum == 3 %}
            {% set layoutRoleMain = 'ec-layoutRole__mainBetweenColumn' %}
        {% endif %}

        <div class=\"{{ layoutRoleMain }}\">
            {# Layout: MAIN_TOP #}
            {% if Layout.MainTop %}
                <div class=\"ec-layoutRole__mainTop\">
                    {{ include('block.twig', {'Blocks': Layout.MainTop}) }}
                </div>
            {% endif %}

            {# MAIN AREA #}
            {% block main %}{% endblock %}

            {# Layout: MAIN_Bottom #}
            {% if Layout.MainBottom %}
                <div class=\"ec-layoutRole__mainBottom\">
                    {{ include('block.twig', {'Blocks': Layout.MainBottom}) }}
                </div>
            {% endif %}
        </div>

        {# Layout: SIDE_RIGHT #}
        {% if Layout.SideRight %}
            <div class=\"ec-layoutRole__right\">
                {{ include('block.twig', {'Blocks': Layout.SideRight}) }}
            </div>
        {% endif %}
    </div>

    {# Layout: CONTENTS_BOTTOM #}
    {% if Layout.ContentsBottom %}
        <div class=\"ec-layoutRole__contentBottom\">
            {{ include('block.twig', {'Blocks': Layout.ContentsBottom}) }}
        </div>
    {% endif %}

    {# Layout: CONTENTS_FOOTER #}
    {% if Layout.Footer %}
        <div class=\"ec-layoutRole__footer\">
            {{ include('block.twig', {'Blocks': Layout.Footer}) }}
        </div>
    {% endif %}
</div><!-- ec-layoutRole -->

<div class=\"ec-overlayRole\"></div>
<div class=\"ec-drawerRoleClose\"><i class=\"fas fa-times\"></i></div>
<div class=\"ec-drawerRole\">
    {# Layout: DRAWER #}
    {% if Layout.Drawer %}
        {{ include('block.twig', {'Blocks': Layout.Drawer}) }}
    {% endif %}
</div>
<div class=\"ec-blockTopBtn pagetop\">
  <img src=\"{{ asset('/html/user_data/assets/img/top/pagetop.svg') }}\" alt=\"PAGE TOP\">
</div>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js\"></script>
{% include('@common/lang.twig') %}
<script src=\"{{ asset('assets/js/function.js') }}\"></script>
<script src=\"{{ asset('assets/js/eccube.js') }}\"></script>
<script>
\$(function () {
  \$.ajax({
    url: '{{ asset('assets/img/common/svg.html') }}',
    type: 'GET',
    dataType: 'html',
  }).done(function(data){
    \$('body').prepend(data);
  });
});
</script>
{% block javascript %}{% endblock %}
{# Layout: CLOSE_BODY_BEFORE #}
{% if Layout.CloseBodyBefore %}
    {{ include('block.twig', {'Blocks': Layout.CloseBodyBefore}) }}
{% endif %}
{# プラグイン用Snippet #}
{% if plugin_snippets is defined %}
    {{ include('snippet.twig', { snippets: plugin_snippets }) }}
{% endif %}
    <script src=\"{{ asset('assets/js/customize.js', 'user_data') }}\"></script>
</body>
</html>
", "default_frame.twig", "/var/www/html/eccube-4-new/app/template/responceWebDesign/default_frame.twig");
    }
}
