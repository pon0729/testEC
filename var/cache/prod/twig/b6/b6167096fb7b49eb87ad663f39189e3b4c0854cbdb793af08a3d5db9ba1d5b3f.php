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

/* __string_template__78e9a0b6bdca69d93c4a7ab36ca49ca3a8f5d9e84dfd8d405e4c89b6311ff984 */
class __TwigTemplate_bf6fb34d8bf1f8924e5f5b8ec055b25a0aef4c22b79788a59420db5f7bf2008b extends \Eccube\Twig\Template
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
        echo "身体の内から美しく健康に";
    }

    public function getTemplateName()
    {
        return "__string_template__78e9a0b6bdca69d93c4a7ab36ca49ca3a8f5d9e84dfd8d405e4c89b6311ff984";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__78e9a0b6bdca69d93c4a7ab36ca49ca3a8f5d9e84dfd8d405e4c89b6311ff984", "");
    }
}
