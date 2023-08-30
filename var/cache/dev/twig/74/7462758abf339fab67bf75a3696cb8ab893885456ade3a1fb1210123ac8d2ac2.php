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

/* __string_template__3299595ac3ca803f8a00c934d1ada08789d85175da708bc6dffc28ab0cb0f8b6 */
class __TwigTemplate_a0ddfbda74890e07e707ce8115f50b0cf24f12abd715c9cf06e5e1ac34017a96 extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__3299595ac3ca803f8a00c934d1ada08789d85175da708bc6dffc28ab0cb0f8b6"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__3299595ac3ca803f8a00c934d1ada08789d85175da708bc6dffc28ab0cb0f8b6"));

        // line 1
        echo "<meta name=\"twitter:card\" content=\"summary_large_image\"/> <!--①-->
<meta name=\"twitter:site\" content=\"@giftcommunicat1\" /> <!--②-->
<meta name=\"twitter:creator\" content=\"@giftcommunicat1\" />
<meta property=\"og:url\" content=\"https://gift-communication.shop/products/detail/";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 4, $this->source); })()), "id", [], "any", false, false, false, 4), "html", null, true);
        echo "\" /> <!--③-->
<meta property=\"og:title\" content=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 5, $this->source); })()), "name", [], "any", false, false, false, 5), "html", null, true);
        echo "\" /> <!--④-->
<meta property=\"og:description\" content=\"";
        // line 6
        echo twig_include($this->env, $context, twig_template_from_string($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 6, $this->source); })()), "message", [], "any", false, false, false, 6)));
        echo "\" /> <!--⑤-->
<meta property=\"twitter:image\" content=\"https://gift-communication.shop/html/user_data/data/";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7), "html", null, true);
        echo "_a.jpg\" /> <!--⑥-->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__3299595ac3ca803f8a00c934d1ada08789d85175da708bc6dffc28ab0cb0f8b6";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 7,  56 => 6,  52 => 5,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<meta name=\"twitter:card\" content=\"summary_large_image\"/> <!--①-->
<meta name=\"twitter:site\" content=\"@giftcommunicat1\" /> <!--②-->
<meta name=\"twitter:creator\" content=\"@giftcommunicat1\" />
<meta property=\"og:url\" content=\"https://gift-communication.shop/products/detail/{{ Product.id }}\" /> <!--③-->
<meta property=\"og:title\" content=\"{{ Product.name }}\" /> <!--④-->
<meta property=\"og:description\" content=\"{{ include(template_from_string(Product.message)) }}\" /> <!--⑤-->
<meta property=\"twitter:image\" content=\"https://gift-communication.shop/html/user_data/data/{{Product.id }}/{{Product.id }}_a.jpg\" /> <!--⑥-->", "__string_template__3299595ac3ca803f8a00c934d1ada08789d85175da708bc6dffc28ab0cb0f8b6", "");
    }
}
