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

/* __string_template__9f289d7d1b7aec38321cf9e787ff9bd6caee574d7aae8067decfb0719233266e */
class __TwigTemplate_b57d4b8c3a7d7baee4088f4e12a5a63b69d5c359a6accd2e404446ea6dd34bf5 extends \Eccube\Twig\Template
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
        echo "髭剃りをより上質に。<br>忙しい朝のルーティンに楽しみをつくりませんか。";
    }

    public function getTemplateName()
    {
        return "__string_template__9f289d7d1b7aec38321cf9e787ff9bd6caee574d7aae8067decfb0719233266e";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__9f289d7d1b7aec38321cf9e787ff9bd6caee574d7aae8067decfb0719233266e", "");
    }
}
