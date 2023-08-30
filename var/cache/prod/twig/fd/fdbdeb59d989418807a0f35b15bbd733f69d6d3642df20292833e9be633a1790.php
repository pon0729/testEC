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

/* __string_template__817b5d283ccd8a387f81b2a0733bcdd185af4ccc45c55b5b134aa00cc606e72c */
class __TwigTemplate_cff2f661662ff26d92cd53acc97011fca20ee2a5f32818837785283500287373 extends \Eccube\Twig\Template
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

「S・HEART・S」のスカルプブラシ プレミアム　ショートは、ショートヘア、ミドルヘアの特徴に合わせ、ハンドルはショートタイプになります。<br>
シャンプー、トリートメント時の使いやすさを重視。ブロー、起床時のアウトバスシーンでも利用可能です。<br>
ブラシも572本の先玉ピンと段差植毛、頭皮密着設計で毛穴の汚れを除去します。<br>
<br>
「S・HEART・S」の商品は、健康な頭皮から美しい髪をつくり、さらに髪のお悩みを解決すべく、シャンプー、トリートメント、ブロー、マッサージ、ボリュームアップ等のシーンでご利用いただける商品です。<br>
 </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__817b5d283ccd8a387f81b2a0733bcdd185af4ccc45c55b5b134aa00cc606e72c";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__817b5d283ccd8a387f81b2a0733bcdd185af4ccc45c55b5b134aa00cc606e72c", "");
    }
}
