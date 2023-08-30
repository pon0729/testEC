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

/* __string_template__70afb804b9fdb2130acf4d97b94ad2ed8ce9aa01a99ac829c6afb797fb8f34ac */
class __TwigTemplate_3e452f2a04a936b6425cc3411585351b064fcce5b8b9c88bfe3720b6f0858ed0 extends \Eccube\Twig\Template
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

【MYTHOS】スージングジェル アロエは、有機農法由来のアロエベラエキスやオリーブエキス、パンテノール＆トウゴマオイルを配合した爽やかなジェルです。<br>
1年を通して太陽の日差しが降り注ぐ地中海沿岸のギリシャで生まれた、「日焼け後用のジェル」になります。<br>
毎日の外出後や入浴後、運動後に乾いたお肌へ潤いと心地良い冷涼感を与え、しっとりとなめらかなお肌へと導きます。<br>
<br>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__70afb804b9fdb2130acf4d97b94ad2ed8ce9aa01a99ac829c6afb797fb8f34ac";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__70afb804b9fdb2130acf4d97b94ad2ed8ce9aa01a99ac829c6afb797fb8f34ac", "");
    }
}
