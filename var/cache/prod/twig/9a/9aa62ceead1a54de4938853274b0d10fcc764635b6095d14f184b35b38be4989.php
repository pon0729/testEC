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

/* __string_template__defd7ca1cbc03ff0947feca42282bb00dd38f1f2f58448a6ff27ad6043cbb379 */
class __TwigTemplate_5805a9a42913de00799d69fce09caa42a3b90eea830fada2797c6b02cd3998a8 extends \Eccube\Twig\Template
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
INSTITUT KARITEはシアバター専門のスキンケア・トリートメントブランドです。<br>
フランス発祥で、天然素材にこだわっています。肌に優しくリッチな気分をお届けします。<br><br>

        100％天然シアバター。保湿力、栄養、保護力の高さからとても人気で、女性に嬉しいケアの味方です。<br>
日々のケアにはもちろん、かさつく肌や唇のケア、パサつく髪の毛先など全身にご利用いただけます。<br>
<br>
主成分は人の皮脂とよく似たステアリン酸やオレイン酸なので肌になじみやすく、ビタミンも含まれています。<br>
ピュアシアバターは少し硬めなので、体温でゆっくりと温めながら肌になじませてください。
<br>

    </div>
</div>

<div class=\"product-description\">
    <div class=\"product-description__title\">
メイク直しにも
</div>
    <div class=\"product-description__contents\">
保湿だけでなく、リップの上からぬってつや出しに、メイク直しに、男性にも髭剃り後のケアにご使用いただけます。<br>
また100％天然由来であるため肌に敏感なお子様にもご使用になれるので、旦那様やお子様へ、もちろんご自分用でも。
</div>
</div>
<br><br>



<div class=\"product-description\">
    <div class=\"product-description__title\">
持ち運びにうれしいミニサイズ
 </div>
    <div class=\"product-description__contents\">
保湿クリームは意外とかさばり、ポーチがパンパンという方もいらっしゃるのではないでしょうか。この商品は、500円玉ほどのコンパクトなサイズなのもうれしいポイントです。<br>
女子力がアップするアイテムとしてご自分用へのご褒美や、お友達へのすてきなプレゼントとして、是非いかがでしょうか。
</div>
</div>
<br><br>";
    }

    public function getTemplateName()
    {
        return "__string_template__defd7ca1cbc03ff0947feca42282bb00dd38f1f2f58448a6ff27ad6043cbb379";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__defd7ca1cbc03ff0947feca42282bb00dd38f1f2f58448a6ff27ad6043cbb379", "");
    }
}
