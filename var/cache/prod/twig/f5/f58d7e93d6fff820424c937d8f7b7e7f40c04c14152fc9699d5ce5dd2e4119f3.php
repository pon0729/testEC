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

/* __string_template__c4518e50cd278ec53c07e09504cd80b9c18b6d6f94198d260241a814ede80296 */
class __TwigTemplate_e0e3cedfc6de9199fbab80b8e40d6ef092064bc6b40c40ebf2f1ad9388260bc1 extends \Eccube\Twig\Template
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
        echo "マンゴーやグアバの甘い香りが広がるルイボスティー。 <br>すっきりとした甘さで、老若男女に愛される紅茶です。";
    }

    public function getTemplateName()
    {
        return "__string_template__c4518e50cd278ec53c07e09504cd80b9c18b6d6f94198d260241a814ede80296";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__c4518e50cd278ec53c07e09504cd80b9c18b6d6f94198d260241a814ede80296", "");
    }
}
