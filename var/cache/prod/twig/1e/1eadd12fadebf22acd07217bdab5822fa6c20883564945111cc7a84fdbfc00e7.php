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

/* __string_template__33c5513df8f61c9efbfbc5ed407cde5a941da64432e2f69d894c192aa6ed8165 */
class __TwigTemplate_0936e1e84a5a55510f3d16f0f2c9b8e1a87d55b52c64c38bc1903d1a7602c03d extends \Eccube\Twig\Template
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
イランイラン<br>
イランイランはロマンティックなムードにピッタリなエレガントで甘く華やかな香りが特徴です。<br>
また、過度な緊張や不安、怒りを感じる時に心を落ち着かせ、気持ちをリラックスさせてくれたり、気持ちを高揚させ、喜びや幸福感の感情をもたらしてくれる香りです。<br>
<br>
 </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__33c5513df8f61c9efbfbc5ed407cde5a941da64432e2f69d894c192aa6ed8165";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__33c5513df8f61c9efbfbc5ed407cde5a941da64432e2f69d894c192aa6ed8165", "");
    }
}
