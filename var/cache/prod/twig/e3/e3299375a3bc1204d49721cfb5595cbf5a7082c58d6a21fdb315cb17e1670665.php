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

/* __string_template__a227543bebbcd5b20013f9871500296931955dd8270664d4836f6c3f536d4b6a */
class __TwigTemplate_b3bc72af59972f2e8ef00ce4d9d4f6ed32b306a5c9cc111b14a14783c5fc90bd extends \Eccube\Twig\Template
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
配合成分 
 </div>
    <div class=\"product-description__contents\">
シア脂
</div>
</div>
<br><br>


<div class=\"product-description\">
    <div class=\"product-description__title\">
内容量
 </div>
    <div class=\"product-description__contents\">
    10ml
</div>
</div>
<br><br>


<div class=\"product-description\">
    <div class=\"product-description__title\">
サイズ
</div>
  <div class=\"product-description__contents\">
 縦3.8㎝、横3.8㎝、高さ2cm
</div>
</div>
<br><br>

<div class=\"product-description\">
    <div class=\"product-description__title\">
使用方法
</div>
    <div class=\"product-description__contents\">
フェイスケアとして肌、目元、唇に適量お塗り下さい。髭剃り後の肌、メイク落としの際などにもご使用になれます。<br>
ハンドケアとして手肌、爪先に。<br>
かさつきがちな肘やかかとなどにもご使用になれます。<br>
首や手首などに適量塗ることで練り香水としてもお使いいただけます。
</div>
</div>
<br><br>

<div class=\"product-description\">
    <div class=\"product-description__title\">
ご使用上の注意
</div>
    <div class=\"product-description__contents\">
<ul><li>傷や湿疹、皮膚炎等の皮膚障害がある場合は悪化させる恐れがありますのでご使用にならないで下さい。</li>
<li>使用中にかぶれ、刺激等を感じた場合は使用を中止し、皮膚科専門医等へのご相談をお勧めします。</li>
<li>目に入らないようご注意下さい。</li>
<li>お子様の手の届かないところに置いてください。</li>
<li>直射日光の当たらないところに置いて下さい。</li>
<li>シアバターについて、天然成分を使用しているため、気温の変化などで配合成分がまれに表面に浮き出る場合がありますが、使用上に問題はありません。</li></ul>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__a227543bebbcd5b20013f9871500296931955dd8270664d4836f6c3f536d4b6a";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__a227543bebbcd5b20013f9871500296931955dd8270664d4836f6c3f536d4b6a", "");
    }
}
