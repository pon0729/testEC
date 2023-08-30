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

/* __string_template__7c783956d0fad7137c8f0b5e836015929923a6d19ae934b1c9eb86cc3f76c24e */
class __TwigTemplate_9f12c270dc4e279532aa3ba4f5a888f619d71d093d07d134dfa8dee60d59fcc1 extends \Eccube\Twig\Template
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
        echo "優しい香りを楽しめるディフューザー。<br> 安定した土台を持つ置き型ディフューザーなので、安心してお好きな場所でお楽しみいただけます。<br>";
    }

    public function getTemplateName()
    {
        return "__string_template__7c783956d0fad7137c8f0b5e836015929923a6d19ae934b1c9eb86cc3f76c24e";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__7c783956d0fad7137c8f0b5e836015929923a6d19ae934b1c9eb86cc3f76c24e", "");
    }
}
