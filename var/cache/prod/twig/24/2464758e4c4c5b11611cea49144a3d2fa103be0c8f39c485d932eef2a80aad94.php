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

/* __string_template__1f303dad4859827324b805f78ef10f26c0c00220aa760fd150bf0cd34df8da22 */
class __TwigTemplate_66a69a008f57bce6b8bfdcae3cb667b44a941da371e6d504bf6668784d372eb1 extends \Eccube\Twig\Template
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

家族みんなで使えるオーガニックシェアコスメ【Wishing】ウィッシング。<br>
手から身体まで全身に使えるソープ「ORGANIC HAND & BODY SOAP」とカラダ、環境にも優しい「Wishing BATH SALT」がギフトボックスに入ったセット。
<br>
<br>
すっきりとした新緑の香り、心地良い柑橘の香り、リラックス効果がある甘い香りの選べる3タイプです。<br>
オーガニック認証のチャ葉エキスなどで抗菌・洗浄効果が期待できます。<br>
包み込まれるような泡立ちと、泡切れの良さ、ほんのり香る良い香り・保湿力でバスタイムを楽しく過ごして頂けます。<br>
<br>
スノーリーフは、すっきりとした新緑の香りで、強い香りが苦手な方や男性にもおすすめです。<br>
宇治茶葉エキス(京都産)、オリーブ葉エキス(国産)を使用しており、ポリフェノールなどを含むため美肌をサポートする成分です。<br>
バスソルトは3種類の香りがあります。<br>
ローズマリー：フレッシュでクリアな香りで気分を高揚させ、集中力アップ、リフレッシュにも最適です。<br>
ラベンダー：リラックス効果があり肌にも優しい精油です。<br>
スイートオレンジ：明るく甘い香りは心を落ち着かせ、エネルギーを与えてくれます。<br>

 </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__1f303dad4859827324b805f78ef10f26c0c00220aa760fd150bf0cd34df8da22";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__1f303dad4859827324b805f78ef10f26c0c00220aa760fd150bf0cd34df8da22", "");
    }
}
