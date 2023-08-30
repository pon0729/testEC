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

/* __string_template__1dd694e3513b98e4d714167c1393005c00a70d418cc21fbffad66a1f30721a47 */
class __TwigTemplate_5480a38327cc65177fcad7ce959c44e735912c40dbf2ef7f0d26266d759ea76a extends \Eccube\Twig\Template
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
        echo "有機農法由来のアロエベラエキスとオリーブエキスで、お肌に心地良い冷涼感と潤いを。";
    }

    public function getTemplateName()
    {
        return "__string_template__1dd694e3513b98e4d714167c1393005c00a70d418cc21fbffad66a1f30721a47";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__1dd694e3513b98e4d714167c1393005c00a70d418cc21fbffad66a1f30721a47", "");
    }
}
