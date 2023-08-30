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

/* __string_template__b6404a59e059d06ac0643961b873fcd8fd053e3089787009f2340b74b2d5ec54 */
class __TwigTemplate_4ff9bd5871bef6e84a3c3d126dd16f18bf688a338330c07b81e08556028bc900 extends \Eccube\Twig\Template
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
        echo "頑固な汚れに。キッチン周りからガーデニング用品まで、様々な場面に使えるペーストタイプのホームクリーナーです。";
    }

    public function getTemplateName()
    {
        return "__string_template__b6404a59e059d06ac0643961b873fcd8fd053e3089787009f2340b74b2d5ec54";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__b6404a59e059d06ac0643961b873fcd8fd053e3089787009f2340b74b2d5ec54", "");
    }
}
