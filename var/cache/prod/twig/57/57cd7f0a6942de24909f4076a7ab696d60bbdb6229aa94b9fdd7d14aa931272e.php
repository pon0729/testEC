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

/* __string_template__b209180e747abb2d3becef2da1fe8fb6226a1c7c843d7b9daff1779f702bec0e */
class __TwigTemplate_8b185f66b185579769625215a57b4728a22573bd73392d9e3e77a37554a8d5b7 extends \Eccube\Twig\Template
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
    </div>
    <div class=\"product-description__contents\">
オイルが入った容器を開け、付属のリードスティックを入れてください。<br>
香りを広げたい場所に置いてください。
<br>
<br>
    </div>
</div>


<div class=\"product-description\">
    <div class=\"product-description__title\">
        内容量
    </div>
    <div class=\"product-description__contents\">
      100ml<br>
　　<br>
    </div>
</div>

<div class=\"product-description\">
    <div class=\"product-description__title\">
        配合成分
    </div>
    <div class=\"product-description__contents\">
溶剤、香料 <br> <br> </div>
</div>

<div class=\"product-description\">
    <div class=\"product-description__title\">
        使用上の注意
    </div>
    <div class=\"product-description__contents\">
●肌や衣類につけないようご注意下さい。<br>
●火気に近づけないでください。<br>
●容器が転倒しないよう平らで安全な場所でご使用下さい。<br>
●スティックは本品の使用目的以外にはご使用にならないで下さい。<br>
●高温多湿直射日光を避け、乳幼児の手の届かないところで保管して下さい。
<br>
<br>
    </div>
</div>

<div class=\"product-description\">
    <div class=\"product-description__title\">
        保管上の注意
    </div>
    <div class=\"product-description__contents\">
●高温多湿・直射日光を避け、乳児・ペットの手の届かない所に保管してご使用ください。
<br>
<br>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__b209180e747abb2d3becef2da1fe8fb6226a1c7c843d7b9daff1779f702bec0e";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__b209180e747abb2d3becef2da1fe8fb6226a1c7c843d7b9daff1779f702bec0e", "");
    }
}
