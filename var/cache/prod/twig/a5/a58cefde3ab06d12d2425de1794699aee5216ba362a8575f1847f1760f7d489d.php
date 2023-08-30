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

/* __string_template__bc6456eac0b20f874fe9974d5b1430c1ced6573ea4739e9fc5f8b1db6aec8a99 */
class __TwigTemplate_c6d16a62388a7b0520dc3d4554911b6b6a73a8b14d0bc82b28e7c9a3c23ffdc3 extends \Eccube\Twig\Template
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
ベルガモット<br>
ベルガモットはフローラルでフルーティな柑橘系の香りが特徴です。<br>
<br>
 </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__bc6456eac0b20f874fe9974d5b1430c1ced6573ea4739e9fc5f8b1db6aec8a99";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__bc6456eac0b20f874fe9974d5b1430c1ced6573ea4739e9fc5f8b1db6aec8a99", "");
    }
}
