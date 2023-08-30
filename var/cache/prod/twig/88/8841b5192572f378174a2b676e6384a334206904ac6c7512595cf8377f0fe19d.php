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

/* __string_template__3e613aeb70e332e3be2308fe5e95b0a5899a41106112234abed413d04966cb6c */
class __TwigTemplate_4ad187c452ce851c42d03de245348b4a86a234fdea22f84c38b4591bf89cc1a7 extends \Eccube\Twig\Template
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
        echo "1日1杯でやせやすい身体づくり。<br> 女性にうれしい酵素やビタミン配合でキレイをつくるサポートをします。";
    }

    public function getTemplateName()
    {
        return "__string_template__3e613aeb70e332e3be2308fe5e95b0a5899a41106112234abed413d04966cb6c";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__3e613aeb70e332e3be2308fe5e95b0a5899a41106112234abed413d04966cb6c", "");
    }
}
