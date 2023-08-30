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

/* __string_template__0f66ce2f624fdbc2a98ab13fb8f6c4d6b7258d544e93403f826826e4130ded04 */
class __TwigTemplate_2096cdb868a8b4c592234b4229bb8233278fa84c969c688b4ecd297b3026449a extends \Eccube\Twig\Template
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

DailyAromaのエッセンシャルオイルは、自然由来の天然精油です。<br>
合成香料フリー、着色料フリー、エタノールフリーであり、ＡＥＡＪ（日本アロマ環境協会）の表示基準適合認定精油なので、安心してお使いいただけます。<br>
<br>
<div class=\"product-description\">
    <div class=\"product-description__title\">
種類の説明
    </div>
    <div class=\"product-description__contents\">
ペパーミント<br>
クリアで清涼感のある爽やかなミントの香りです。<br>
ペパーミントは、スッと鼻通りが良くなるような香りが特徴的で、リフレッシュ、眠気スッキリ、消臭、抗菌、抗ウイルス、防虫など様々な効果が期待できる精油です。<br>
<br>
 </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__0f66ce2f624fdbc2a98ab13fb8f6c4d6b7258d544e93403f826826e4130ded04";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__0f66ce2f624fdbc2a98ab13fb8f6c4d6b7258d544e93403f826826e4130ded04", "");
    }
}
