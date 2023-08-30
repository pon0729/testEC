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

/* __string_template__e020da4cde98c78f834f28d38363c5cc84c859d2c4feb1decaf9be3e533a594e */
class __TwigTemplate_b40a17f6b1bbfd0e8c4d09eed6729092418d61ca9e4c76d610ce2fe790c323b7 extends \Eccube\Twig\Template
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
        商品詳細
    </div>
    <div class=\"product-description__contents\">

美味しいクッキーと桜の香りをつけた緑茶のギフトセットです。<br>     
クッキーはサクサクした食感で、見た目は可愛らしいお花の形をしています。<br>
緑茶は国産の茶葉を香ばしく焙じたお茶です。
<br>
香りに、桜の香りをつけて、お茶菓子にぴったりな香りにしています<br>
    </div>
</div>
<br><br>


<div class=\"product-description\">
    <div class=\"product-description__title\">
        内容量
    </div>
    <div class=\"product-description__contents\">
クッキー（ストロベリー）18g<br>
緑茶（桜ほうじ茶）2g×2個<br>
    </div>
</div>
<br><br>
<div class=\"product-description\">
    <div class=\"product-description__title\">
        原材料
    </div>
    <div class=\"product-description__contents\">
焼菓子｛小麦粉（国内製造）、マーガリン、砂糖、鶏卵、ストロベリー果汁、食塩／香料、乳化剤、ベーキングパウダー、酸化防止剤（V.E）、増粘剤（キサンタンガム）、安定剤（ペクチン）、着色料（ラック、アナトー）、酸味料、（一部に小麦・卵・乳成分・大豆を含む）｝、紅茶｛紅茶（スリランカ）／香料｝

    </div>
</div>
<br><br>

<div class=\"product-description\">
    <div class=\"product-description__title\">
       使用上の注意
    </div>
    <div class=\"product-description__contents\">
        <ul>
  <li>直射日光、高温多湿を避けて保存してください。</li>
  <li>開封後はお早めにお召しあがりください。</li>
         </ul>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__e020da4cde98c78f834f28d38363c5cc84c859d2c4feb1decaf9be3e533a594e";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__e020da4cde98c78f834f28d38363c5cc84c859d2c4feb1decaf9be3e533a594e", "");
    }
}
