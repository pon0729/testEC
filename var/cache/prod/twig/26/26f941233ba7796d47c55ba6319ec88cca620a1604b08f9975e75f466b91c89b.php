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

/* __string_template__f7b96d102ff9827005d0d3292b0dae09a598b39debef35de3a73ec1c7bd0dfa3 */
class __TwigTemplate_ebda766d6efcc05d855badccb26321d4b584f9441fa974fd36e9a0b4ea195190 extends \Eccube\Twig\Template
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
        echo "<div class=\"product-description\">
    <div class=\"product-description__title\">
ご使用方法    
    <div class=\"product-description__contents\">

1.温めたカップに熱湯を注ぎ、ティーバッグを1つ入れます。<br>
2.3分後ティーバッグをそっと取り出せばおいしい紅茶のできあがり！<br>
お好みで砂糖やミルクを加えてどうぞ。<br>
  </div>    </div>

<div class=\"product-description\">
    <div class=\"product-description__title\">
内容量
    <div class=\"product-description__contents\">
６g（2g×3個）<br>
  </div>  </div>

<div class=\"product-description\">
    <div class=\"product-description__title\">
配合成分  
    <div class=\"product-description__contents\">

 紅茶(スリランカ)/香料  </div>  </div>";
    }

    public function getTemplateName()
    {
        return "__string_template__f7b96d102ff9827005d0d3292b0dae09a598b39debef35de3a73ec1c7bd0dfa3";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__f7b96d102ff9827005d0d3292b0dae09a598b39debef35de3a73ec1c7bd0dfa3", "");
    }
}
