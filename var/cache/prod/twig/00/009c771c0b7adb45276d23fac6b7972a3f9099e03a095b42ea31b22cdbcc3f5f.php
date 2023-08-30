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

/* __string_template__574bb8a4d0937dc66d849fd8e83cb5d776177a0b8621c45e3e783a0585d3f101 */
class __TwigTemplate_43261d0bc2846b90658f801a529797efbf3dda5a52b0d1b55aaddc47e098ca80 extends \Eccube\Twig\Template
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
ユーカリ<br>
クールで透明感のある清々しい香り<br>
ユーカリは消臭効果があり、お部屋や玄関など匂いが気になる場所で使用することで爽やかな香りになります。<br>
<br>
 </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__574bb8a4d0937dc66d849fd8e83cb5d776177a0b8621c45e3e783a0585d3f101";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__574bb8a4d0937dc66d849fd8e83cb5d776177a0b8621c45e3e783a0585d3f101", "");
    }
}
