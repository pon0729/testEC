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

/* __string_template__60e0c30e8030856a45ce1179b22215e11737bed3428baa8c37defeb629ffccae */
class __TwigTemplate_840111dde149c18d834a9be2f665326e3496149d662ff403266bf8880dd5862b extends \Eccube\Twig\Template
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
        echo "普段のお肌のお手入れをワンランクアップして、自分のお肌をいたわる時間に。<br>角質層までしっかりとうるおいを届け、みずみずしくやわらかなお肌を手に入れませんか。";
    }

    public function getTemplateName()
    {
        return "__string_template__60e0c30e8030856a45ce1179b22215e11737bed3428baa8c37defeb629ffccae";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__60e0c30e8030856a45ce1179b22215e11737bed3428baa8c37defeb629ffccae", "");
    }
}
