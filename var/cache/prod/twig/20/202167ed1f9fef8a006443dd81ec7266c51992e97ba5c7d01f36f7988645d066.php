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

/* __string_template__a1bae2adac6e13df358e742e52ac92baf297ad3b7a34e24ca80d1ea9bacf807c */
class __TwigTemplate_23a04d6ffb0a1ca3fbcb0ba51f20a64d5f04d1ca292d314b0c93c67fb7fd6b2f extends \Eccube\Twig\Template
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
        echo "朝の1杯でスリムなダイエット生活を。 <br>ビタミン・ミネラルも豊富に含まれる自然派食品です。";
    }

    public function getTemplateName()
    {
        return "__string_template__a1bae2adac6e13df358e742e52ac92baf297ad3b7a34e24ca80d1ea9bacf807c";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__a1bae2adac6e13df358e742e52ac92baf297ad3b7a34e24ca80d1ea9bacf807c", "");
    }
}
