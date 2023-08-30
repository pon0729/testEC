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

/* __string_template__8da3dded5ab34be999287cb116502f9eff5aaff3b1c0e0bbbf68a39cd9420b8f */
class __TwigTemplate_41c190fe8131b0c9ed33b82d48f7c9456ae5573a7b5c50acfea312d44543bae9 extends \Eccube\Twig\Template
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
        原材料名
    </div>
    <div class=\"product-description__contents\">
プロポリスエキス（国内製造）、発酵高麗人参エキス、高麗人参エキス／エタノール、キラヤ抽出物、香料    </div>
</div>
<br>
<div class=\"product-description\">
    <div class=\"product-description__title\">
        量
    </div>
    <div class=\"product-description__contents\">
30ml
    </div>
</div>

<br>
<div class=\"product-description\">
    <div class=\"product-description__title\">
        お召し上がり方法
    </div>
    <div class=\"product-description__contents\">
健康補助食品として1日1ml（スポイトの1回分）を目安に150〜200ccのお湯または水で薄めてお飲みください。<br>
また、紅茶に入れてパイナップルのフルーツティーのようにも、そこへハチミツを加えるアレンジもお楽しみいただけます。<br>
初めてのお客様は少量からお召し上がりください。<br>
1日の摂取目安量をお守りください。<br>
    </div>
</div>
<br>
<div class=\"product-description\">
    <div class=\"product-description__title\">
        ご使用上の注意
    </div>
    <div class=\"product-description__contents\">
        <ul>
<li>食生活は、主食、主菜、副菜を基本に、食事のバランスを。</li>
<li>乳児の手の届かないところに保管してください。</li>
<li>原材料をご参照の上、アレルギーのある方はお召し上がりにならないでください。また、体質や体調に合わない場合は使用を中止してください。</li>
<li>薬を服用中の方、あるいは通院中の方、妊娠・授乳中の方はお医者様とご相談の上お召し上がりください。</li>
<li>開封後はなるべくお早めにお召し上がりください。</li>
<li>引火の恐れがありますので、火気に注意してください。</li>
<li>スポイトはガラス製のため、容器口部等に当てると破損する恐れがありますので、取り扱いには十分ご注意ください。</li>
<li>本品は独特のにおいや刺激があります。また、水に入れると白濁しますが、プロポリスの特性で、品質には問題ありません。</li>
<li>商品によっては色、味、香りなどに違いがありますが品質には問題ありません。
</li>
        </ul>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__8da3dded5ab34be999287cb116502f9eff5aaff3b1c0e0bbbf68a39cd9420b8f";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__8da3dded5ab34be999287cb116502f9eff5aaff3b1c0e0bbbf68a39cd9420b8f", "");
    }
}
