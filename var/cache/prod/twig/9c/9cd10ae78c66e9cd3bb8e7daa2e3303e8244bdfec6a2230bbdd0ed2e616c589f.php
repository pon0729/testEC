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

/* __string_template__6d3c35605752538b0c33399bac4935d7f495b749b6d65cb7b3e632223ebb0a11 */
class __TwigTemplate_9ebf3394700416774b08251752cc72185a12684c00294b215bd947630436da49 extends \Eccube\Twig\Template
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
        echo "原材料は希少なこんにゃく粉のみで作られたタオルです。<br> 130年の伝統を守り抜いた、プルプルとした肌触りを体感ください。";
    }

    public function getTemplateName()
    {
        return "__string_template__6d3c35605752538b0c33399bac4935d7f495b749b6d65cb7b3e632223ebb0a11";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__6d3c35605752538b0c33399bac4935d7f495b749b6d65cb7b3e632223ebb0a11", "");
    }
}
