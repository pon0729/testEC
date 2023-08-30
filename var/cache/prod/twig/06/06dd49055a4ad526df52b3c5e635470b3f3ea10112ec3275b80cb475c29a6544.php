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
class __TwigTemplate_b14cfa7d90f36062fbd29e9e2a557d0dab0834b355dfa97731d22a1e75d4d902 extends \Eccube\Twig\Template
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
        echo "<meta name=\"twitter:card\" content=\"summary_large_image\"/> <!--①-->
<meta name=\"twitter:site\" content=\"@giftcommunicat1\" /> <!--②-->
<meta name=\"twitter:creator\" content=\"@giftcommunicat1\" />
<meta property=\"og:url\" content=\"https://gift-communication.shop/products/detail/";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "id", [], "any", false, false, false, 4), "html", null, true);
        echo "\" /> <!--③-->
<meta property=\"og:title\" content=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "name", [], "any", false, false, false, 5), "html", null, true);
        echo "\" /> <!--④-->
<meta property=\"og:description\" content=\"";
        // line 6
        echo twig_include($this->env, $context, twig_template_from_string($this->env, twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "message", [], "any", false, false, false, 6)));
        echo "\" /> <!--⑤-->
<meta property=\"twitter:image\" content=\"https://gift-communication.shop/html/user_data/data/";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "id", [], "any", false, false, false, 7), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "id", [], "any", false, false, false, 7), "html", null, true);
        echo "_a.jpg\" /> <!--⑥-->";
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
        return array (  54 => 7,  50 => 6,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__3299595ac3ca803f8a00c934d1ada08789d85175da708bc6dffc28ab0cb0f8b6", "");
    }
}
