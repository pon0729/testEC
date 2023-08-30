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

/* __string_template__0a120680d559951e71ccfaa7d5c1d49334084eaeef28b91d4d6767d3f5a24adc */
class __TwigTemplate_7af732e52b44b4952b8a6182b72bae2b971b1abffb3bf24e5ba15ac8acf75f5b extends \Eccube\Twig\Template
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
        echo "3種のベリーを贅沢にブレンドした食べられる紅茶。 <br>甘いベリーの香りに癒される贅沢な一品です。";
    }

    public function getTemplateName()
    {
        return "__string_template__0a120680d559951e71ccfaa7d5c1d49334084eaeef28b91d4d6767d3f5a24adc";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__0a120680d559951e71ccfaa7d5c1d49334084eaeef28b91d4d6767d3f5a24adc", "");
    }
}
