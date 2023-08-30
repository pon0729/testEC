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

/* __string_template__048678084ada7ac53b6d88096a8b47df9655a5cedb6a51d2b0b5904fbd144c5f */
class __TwigTemplate_0a56b48d961ecef614569e240fc8d6d3799fe3d7a6ee4f8e3365861096b18e6f extends \Eccube\Twig\Template
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
        使用方法
    </div>
    <div class=\"product-description__contents\">
クローゼットや車の中、靴箱などに吊り下げて香りを楽しんでいただけます。<br>
芳香期間：2か月<br>
<br>

 </div> </div>

<div class=\"product-description\">
    <div class=\"product-description__title\">
        内容量
    </div>
    <div class=\"product-description__contents\">
サイズ：w98 × h196mm　容量 30m
<br>
<br>

 </div> </div>

<div class=\"product-description\">
    <div class=\"product-description__title\">
        配合成分
    </div>
    <div class=\"product-description__contents\">
バーミキュライト、精油、香料
<br>
<br>

 </div> </div>

<div class=\"product-description\">
    <div class=\"product-description__title\">
        使用上の注意
    </div>
    <div class=\"product-description__contents\">
<ul>
<li>本品は食べ物ではありません。本品はフレグランスオイルを含んでいます。</li>
<li>フレグランスオイルが染み出す可能性がありますので、洋服や布、絨毯、カーペット、革製、木製、プラスチック製、<br>また塗装仕上げ面に直接触れないようにしてください。</li>
<li>長時間肌に触れないようにしてください。</li>
<li>内容物が目に入ると炎症を起こす場合があります。</li>
<li>万が一目に入った場合は必ず医師の診察を受けてください。</li>
<li>直射日光、高温多湿、子供やペットの手の届く所では使用・保管を避けてください。</li>

</ul>
 </div> </div>";
    }

    public function getTemplateName()
    {
        return "__string_template__048678084ada7ac53b6d88096a8b47df9655a5cedb6a51d2b0b5904fbd144c5f";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__048678084ada7ac53b6d88096a8b47df9655a5cedb6a51d2b0b5904fbd144c5f", "");
    }
}
