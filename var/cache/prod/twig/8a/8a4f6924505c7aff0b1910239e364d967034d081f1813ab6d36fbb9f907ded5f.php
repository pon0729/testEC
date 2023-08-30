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

/* __string_template__b072e642fe644b9dc0c68673f9811aa3a9585f2fab1eccfc5896a10482586f1b */
class __TwigTemplate_98b391b1470d187c42d4d98c0605c0c807ec95e48c3d0a0447016bcdf80b75e8 extends \Eccube\Twig\Template
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
        echo "環境にも配慮した洗剤でお家をさらにキレイに。<br> 屋内外どこでもお掃除が出来るフロアクリーナ―です。<br>";
    }

    public function getTemplateName()
    {
        return "__string_template__b072e642fe644b9dc0c68673f9811aa3a9585f2fab1eccfc5896a10482586f1b";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__b072e642fe644b9dc0c68673f9811aa3a9585f2fab1eccfc5896a10482586f1b", "");
    }
}
