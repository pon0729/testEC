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

/* __string_template__93c4a8185490ae6f864b088d2a920d0ba627b2a76843022d96fd6e990e8dec1b */
class __TwigTemplate_3bf2400bda6cb32f128bdb15d71821998d2b73ab8a2af4917428d2472a0d6bc9 extends \Eccube\Twig\Template
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
        echo "お肌に優しい練り香水で、普段から癒しの香りをまといませんか。<br>自然な香りで日常をリラックスタイムにしてくれる練り香水です。";
    }

    public function getTemplateName()
    {
        return "__string_template__93c4a8185490ae6f864b088d2a920d0ba627b2a76843022d96fd6e990e8dec1b";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__93c4a8185490ae6f864b088d2a920d0ba627b2a76843022d96fd6e990e8dec1b", "");
    }
}
