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

/* __string_template__bf7e6bbd10551eaf83a14c0dea393be2b7718058016afd7e02893cf905fecc0b */
class __TwigTemplate_13d02dff1e82e9bb81616ec903ab1ac014fc7836aa5fa20161204f27750baf07 extends \Eccube\Twig\Template
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
     毎日アクティブに過ごす中で、健やかな美しさも手に入れたい方に。<br>
髪や頭皮にやさしいシリコーンフリー処方で、ホホバ種子油やアルガンオイルなどの植物油が指通りなめらかな髪をつくる「 シャンプー」と「 トリートメント」。<br><br>ふんわりと弾力のある泡が肌を包み込み、毛穴汚れや余分な角質をやさしく洗い流すアミノ酸系の洗顔料「 フォームウォッシング」、健やかな肌を保つアロエベラ液汁をベースにした植物成分をベースとした「 ボディソープ」のセットです。<br><br>毎日のケアで、シンプルでこだわりのある美しさを。ラベンダーやローズマリーなどのやわらかなハーブの香りに包まれながら、極上のバスタイムを過ごしてみてください。<br><br><br>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__bf7e6bbd10551eaf83a14c0dea393be2b7718058016afd7e02893cf905fecc0b";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__bf7e6bbd10551eaf83a14c0dea393be2b7718058016afd7e02893cf905fecc0b", "");
    }
}
