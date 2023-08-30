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

/* __string_template__a131ec10870f22124c4977c959070ebfef6c072ac04f448b94e84df0d4b12b58 */
class __TwigTemplate_5da53c510cb2a1bde724b4b283c1ce90bf28a0ef88623f1f76bf1aa78d206b1e extends \Eccube\Twig\Template
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
＆NE<br>
自然のモノ 素のモノ<br>
環境にやさしいモノ<br>
長くそっと<br>
あなたの日常によりそえますように<br>

    </div>
</div>
<br><br>

<div class=\"product-description\">
    <div class=\"product-description__title\">
        サイズ
    </div>
    <div class=\"product-description__contents\">
        約 幅17cm×高さ22cm
    </div>
</div>
<br><br>


<div class=\"product-description\">
    <div class=\"product-description__title\">
        使用方法
    </div>
    <div class=\"product-description__contents\">
        １，お湯に入れて優しく手で揉みます。<br>
２，水をたっぷり含ませて、優しく洗ってください。（ボディソープ使用可）<br>
３，使用後はよく洗い、軽く押さえて水で切ります。<br>
４，冷蔵庫にて保管して下さい。<br>
※天然繊維を利用しているため、ご使用期間は約3週間ほどが目安となります。<br>
    </div>
</div>
<br><br>

<div class=\"product-description\">
    <div class=\"product-description__title\">
        使用上の注意
    </div>
    <div class=\"product-description__contents\">
        <ul>
            <li>お肌に合わない時、異常のある時は使用しないでください。</li>
            <li>防腐剤を一切使用していないため湿気の多い時期はカビが生えやすいので、使用後は冷蔵庫にて保管、または風通しのよい場所で陰干しし浴室での乾燥はおやめください。</li>
            <li>天然繊維を使用しているため、ご使用期間は約3週間が目安となります。再度乾燥したスポンジを使う際は、水またはぬるま湯などでやわらかくしてからご使用ください。</li>
            <li>食べ物ではありません。口に含まないでください。</li>
 <li>お肌に異常のあるときは一時使用を中止してください。</li>
 <li>酵素配合のせっけんとの使用はしないでください。</li>
        </ul>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__a131ec10870f22124c4977c959070ebfef6c072ac04f448b94e84df0d4b12b58";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__a131ec10870f22124c4977c959070ebfef6c072ac04f448b94e84df0d4b12b58", "");
    }
}
