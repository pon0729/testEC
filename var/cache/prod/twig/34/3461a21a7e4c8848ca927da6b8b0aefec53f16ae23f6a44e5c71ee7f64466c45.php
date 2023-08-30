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

/* __string_template__a377cf78000ac2fe872d18d8f3383a05df739671b78aed3a586c6d34eb4790f2 */
class __TwigTemplate_68a345769a0961b6e87ad38018878bf25d6032556b17b57b1c29d153d5ff084d extends \Eccube\Twig\Template
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
        echo "肌触りが良く可愛いヘッドドレス、スタイ、ボトムスがセットになったベビーギフトです。";
    }

    public function getTemplateName()
    {
        return "__string_template__a377cf78000ac2fe872d18d8f3383a05df739671b78aed3a586c6d34eb4790f2";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__a377cf78000ac2fe872d18d8f3383a05df739671b78aed3a586c6d34eb4790f2", "");
    }
}
