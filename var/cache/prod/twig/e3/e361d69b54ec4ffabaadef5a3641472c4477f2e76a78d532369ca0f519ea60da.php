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

/* __string_template__a86dc3a7bc0960dd7bf4b8f02ebc36bf64d46c12ddaeba20b0ce40d5e06b972f */
class __TwigTemplate_18182968748dbd73a47ff40e335dea981574858c5ed224b26704ccc7bca51559 extends \Eccube\Twig\Template
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
このオーガニックコットンギフトは、かわいいてんとうむしのキャラクターのおもちゃになっています。<br>
大切な赤ちゃんが触るので、触り心地が良く優しいコットンのギフト、オススメです。<br>
<br>
 </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__a86dc3a7bc0960dd7bf4b8f02ebc36bf64d46c12ddaeba20b0ce40d5e06b972f";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__a86dc3a7bc0960dd7bf4b8f02ebc36bf64d46c12ddaeba20b0ce40d5e06b972f", "");
    }
}
