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

/* __string_template__b54eb16a1ed43d2198d3ef683d889326b242e717aeb3764127072e7b9ed18cab */
class __TwigTemplate_1064ca4bebb9db86dd64242f4e50584e0717539c549c6bcc6ad61b751b0ef093 extends \Eccube\Twig\Template
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
   こんな方におすすめ<br>
健康的な毎日をすごしたい方<br>
栄養バランスに興味のある方<br>
細かい作業が多い方<br>
生活が不規則な方<br>
魚を食べることが少ない方<br>
<br>
アクティブな毎日の中でも、しっかり健康的に過ごしたい方に。<br>アミノ酸を含む麹菌発酵エキスや還元型コエンザイムQ10でエネルギーをサポート、ビタミン・ミネラルをベースとした「 ビタミンバランス」、スッキリせず、疲れが残っていると感じる方を応援する「 ギャバサポート」、一般的な油よりも消化・吸収が早く、4倍早くエネルギーに変わると言われる、天然成分のMCT（中鎖脂肪酸）を配合した「 オイルセレクト」。<br>身体のベースをしっかりと補う3つをセットにしました。<br>毎日の土台となる身体だから、繊細で充実したケアを。仕事もプライベートもアクティブな方にこそおすすめです。<br>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__b54eb16a1ed43d2198d3ef683d889326b242e717aeb3764127072e7b9ed18cab";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__b54eb16a1ed43d2198d3ef683d889326b242e717aeb3764127072e7b9ed18cab", "");
    }
}
