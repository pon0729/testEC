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

/* __string_template__d55099d12c136c48b1f957f8fc6394134b284c9a4a37fde2c7f421204e669f9e */
class __TwigTemplate_0981be03b7fd7a83cb1e026d8c665b26f32b6011ff6e13f9d0ad624a799d9075 extends \Eccube\Twig\Template
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
        商品説明
    </div>
    <div class=\"product-description__contents\">

DailyAromaのエッセンシャルオイルは、自然由来の天然精油です。<br>
合成香料フリー、着色料フリー、エタノールフリーであり、ＡＥＡＪ（日本アロマ環境協会）の表示基準適合認定精油なので、安心してお使いいただけます。<br>
<br>
<div class=\"product-description\">
    <div class=\"product-description__title\">
種類の説明
    </div>
    <div class=\"product-description__contents\">
ティートリー<br>
ティートリーは清潔感の漂うクリアでグリーン調の香りが特徴です。<br>
<br>
 </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__d55099d12c136c48b1f957f8fc6394134b284c9a4a37fde2c7f421204e669f9e";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__d55099d12c136c48b1f957f8fc6394134b284c9a4a37fde2c7f421204e669f9e", "");
    }
}
