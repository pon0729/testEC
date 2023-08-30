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

/* __string_template__4b7e848b8f98138c81b21d1339cf4fb899d60fd873943c3e729e962039f9bf9b */
class __TwigTemplate_3ed5f5624cd2c2e2d8374b1002da5475e286e4b0aa8053704e5181cadfb802c3 extends \Eccube\Twig\Template
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
        echo "エコフレンドリーなフレーバーデンタルフロスです。<br>";
    }

    public function getTemplateName()
    {
        return "__string_template__4b7e848b8f98138c81b21d1339cf4fb899d60fd873943c3e729e962039f9bf9b";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__4b7e848b8f98138c81b21d1339cf4fb899d60fd873943c3e729e962039f9bf9b", "");
    }
}
