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

/* __string_template__62a0ec8e920b6f5d51b25aeb8220dc5a98b1781f479605fedc95f723236195e6 */
class __TwigTemplate_4cefdc4ee6a08be367185df9b61bb7ab3729159827e15cee1f759741d215dffb extends \Eccube\Twig\Template
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
真正ラベンダー<br>
フローラルで穏やかなハーブの香りです。<br>
真正ラベンダーの香りは気持ちを落ち着かせてくれるので、リフレッシュ、リラックスしたい時に使用することで、緊張をほぐします。<br>
<br>
 </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__62a0ec8e920b6f5d51b25aeb8220dc5a98b1781f479605fedc95f723236195e6";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__62a0ec8e920b6f5d51b25aeb8220dc5a98b1781f479605fedc95f723236195e6", "");
    }
}
