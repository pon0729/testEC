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

/* __string_template__5161603c67ed0827b3e39494f09f110538b4521acf99e4693c663b600d99c0b2 */
class __TwigTemplate_34c00d0354cbcc00ca8ea6609ac8cb285cae48b1230c064026034772b5c51ac0 extends \Eccube\Twig\Template
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
        echo "天然成分だけでつくられたお肌に優しいクレンジングミルクです。 <br> うるおいを与え、キレイなお肌を保ちます。";
    }

    public function getTemplateName()
    {
        return "__string_template__5161603c67ed0827b3e39494f09f110538b4521acf99e4693c663b600d99c0b2";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__5161603c67ed0827b3e39494f09f110538b4521acf99e4693c663b600d99c0b2", "");
    }
}
