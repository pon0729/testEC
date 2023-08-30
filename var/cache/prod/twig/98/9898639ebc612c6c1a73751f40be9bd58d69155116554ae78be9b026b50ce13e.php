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

/* __string_template__16c1eedc9916b7403eec5c9b1f8179d3ec20ca4f0e6f7eb75509864ea871c7da */
class __TwigTemplate_71051087fdbcd92983634010bed1a97336a40f23cf4a321812964b35ae452a46 extends \Eccube\Twig\Template
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

ポプキンベビーは「楽しくて かわいくて 心地よい」をコンセプトに、赤ちゃんがなかなか手放してくれないような、遊び心のあるベビー雑貨シリーズを提供しています。<br>
<br>
ブランドのシンボルである「新芽と若葉」には、赤ちゃんの誕生をお祝いし、健やかな成長を願う気持ちが込められています。<br>
<br>
ポプキンベビーのオーガニックコットンシリーズは、無農薬有機栽培のコットンを使用した、赤ちゃんにも地球にもやさしいベビーグッズになっています。
<br>
このオーガニックコットンギフトは、かわいいひつじのキャラクターのおもちゃになっています。<br>
大切な赤ちゃんが触るので、触り心地が良く優しいコットンのギフト、オススメです。<br>
<br>
 </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__16c1eedc9916b7403eec5c9b1f8179d3ec20ca4f0e6f7eb75509864ea871c7da";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__16c1eedc9916b7403eec5c9b1f8179d3ec20ca4f0e6f7eb75509864ea871c7da", "");
    }
}
