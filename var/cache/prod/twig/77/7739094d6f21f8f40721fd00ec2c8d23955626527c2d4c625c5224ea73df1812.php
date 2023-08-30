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

/* __string_template__17098e74c3e849f616f664e31b06146681f0eb15adb7739b6783f18d1c13a976 */
class __TwigTemplate_f49cec94335d313560ff51c63f50f23a077a40b2e22dee06ed4e6186b55c27f3 extends \Eccube\Twig\Template
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

「S・HEART・S」のスカルプブラシ　ワールドモデルロングは、髪の長い方でも使いやすいロングタイプのハンドルになつています。<br>
ブラシも376本の先玉ピンと段差植毛、頭皮密着設計で毛穴の汚れを除去します。<br>
<br>
「S・HEART・S」の商品は、健康な頭皮から美しい髪をつくり、さらに髪のお悩みを解決すべく、シャンプー、トリートメント、ブロー、マッサージ、ボリュームアップ等のシーンでご利用いただける商品です。<br>
 </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__17098e74c3e849f616f664e31b06146681f0eb15adb7739b6783f18d1c13a976";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__17098e74c3e849f616f664e31b06146681f0eb15adb7739b6783f18d1c13a976", "");
    }
}
