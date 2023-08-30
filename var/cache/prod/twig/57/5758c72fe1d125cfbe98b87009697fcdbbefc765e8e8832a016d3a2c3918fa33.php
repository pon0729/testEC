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

/* __string_template__fbe104236610e11adf69059b2f15fa76a4b5dc1d69c0ed14cd01e9adc6ba41d4 */
class __TwigTemplate_a13bb9b30dc2674b5b30503b67e88399ec53bb2577611faf312420f4622bb284 extends \Eccube\Twig\Template
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
        echo "おやすみ前のリラックスタイムに。<br>真正ラベンダーとスイートオレンジの香りで、リラックスした心地よい眠りを。";
    }

    public function getTemplateName()
    {
        return "__string_template__fbe104236610e11adf69059b2f15fa76a4b5dc1d69c0ed14cd01e9adc6ba41d4";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__fbe104236610e11adf69059b2f15fa76a4b5dc1d69c0ed14cd01e9adc6ba41d4", "");
    }
}
