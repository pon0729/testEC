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

/* __string_template__9f1c7d4a3bc18d914e0bafa269ade30fb7de27a6348f2b8e523f6b9f9c12e56a */
class __TwigTemplate_0a35f72ebab10c558141227e29c2c96f8bb09cbdcf108b0756fa3a21be20e346 extends \Eccube\Twig\Template
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
        echo "天然成分だけでつくられたお肌に優しいクレンジングミルクです。
うるおいを与え、キレイなお肌を保ちます。";
    }

    public function getTemplateName()
    {
        return "__string_template__9f1c7d4a3bc18d914e0bafa269ade30fb7de27a6348f2b8e523f6b9f9c12e56a";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__9f1c7d4a3bc18d914e0bafa269ade30fb7de27a6348f2b8e523f6b9f9c12e56a", "");
    }
}
