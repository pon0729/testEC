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

/* Block/header_facebook_brand.twig */
class __TwigTemplate_29fc85453eb885b5470d4363cfb81cb264d96e4e5760b2197abe48cdc5aa757b extends \Eccube\Twig\Template
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
        echo "<meta name=\"facebook-domain-verification\" content=\"taqv0q6tlbz3ik1575jebpqavpe51f\" />";
    }

    public function getTemplateName()
    {
        return "Block/header_facebook_brand.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Block/header_facebook_brand.twig", "/var/www/html/eccube-4-new/app/template/responceWebDesign/Block/header_facebook_brand.twig");
    }
}
