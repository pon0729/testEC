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

/* __string_template__7268ef5723fdcd6459fd8f7cf711ff68dad7d4c15064a43d6a323f06b278cb5f */
class __TwigTemplate_5723316d71e1235582547b2deba9f59381878421bfa0ae239700adc17e818f8f extends \Eccube\Twig\Template
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
        echo "日頃お世話になっている方に。普段使い用のボトルとタオルのギフトセット。";
    }

    public function getTemplateName()
    {
        return "__string_template__7268ef5723fdcd6459fd8f7cf711ff68dad7d4c15064a43d6a323f06b278cb5f";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__7268ef5723fdcd6459fd8f7cf711ff68dad7d4c15064a43d6a323f06b278cb5f", "");
    }
}
