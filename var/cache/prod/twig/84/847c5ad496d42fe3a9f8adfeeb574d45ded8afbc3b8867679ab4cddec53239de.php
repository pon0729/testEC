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

/* __string_template__fd33497ae59c1b65053de15ec209c28579e7de581e4003ea5cf50ef4e83c2807 */
class __TwigTemplate_56a62309e3da82c67d2c627d4d8be1ae2ed4691b7d66ec8189cdc2dbfaaa43ad extends \Eccube\Twig\Template
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
        echo "3種類の優しい香りに癒される。ドライフラワーが入ったおしゃれなジェルライトです。<br>好きな香りをお試しください。";
    }

    public function getTemplateName()
    {
        return "__string_template__fd33497ae59c1b65053de15ec209c28579e7de581e4003ea5cf50ef4e83c2807";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__fd33497ae59c1b65053de15ec209c28579e7de581e4003ea5cf50ef4e83c2807", "");
    }
}
