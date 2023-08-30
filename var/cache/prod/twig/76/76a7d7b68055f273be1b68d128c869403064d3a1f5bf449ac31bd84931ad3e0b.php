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

/* __string_template__4beb979563b211fd3685e626aa46f750821739b24b54c27d94c912bcf00afcc4 */
class __TwigTemplate_38a6745e601878c41d271660f76a769f083aec064c2385002a38fb5fa09f8de3 extends \Eccube\Twig\Template
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
        echo "スパイシーな香りでお肌をシャキッと。<br> 無添加にこだわった素材でお肌を健康的になめらかに。";
    }

    public function getTemplateName()
    {
        return "__string_template__4beb979563b211fd3685e626aa46f750821739b24b54c27d94c912bcf00afcc4";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__4beb979563b211fd3685e626aa46f750821739b24b54c27d94c912bcf00afcc4", "");
    }
}
