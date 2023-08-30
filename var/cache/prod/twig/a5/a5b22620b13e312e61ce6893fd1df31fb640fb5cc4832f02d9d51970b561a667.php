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

/* __string_template__0f338da100473b2e4091204075ff47f3d08753b030ed558c8292a8658146182f */
class __TwigTemplate_1aa79ac880ab3c8e13631a91621d9ab061b32e7b8883ce52537b9d4416b1aeb0 extends \Eccube\Twig\Template
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

MYTHOS スージングジェル アロエは、有機農法由来のアロエベラエキスやオリーブエキス、パンテノール＆トウゴマオイルを配合した爽やかなジェルです。<br>
1年を通して太陽の日差しが降り注ぐ地中海沿岸のギリシャで生まれた、「日焼け後用のジェル」になります。<br>
毎日の外出後や入浴後、運動後に乾いたお肌へ潤いと心地良い冷涼感を与え、しっとりとなめらかなお肌へと導きます。<br>
<br>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__0f338da100473b2e4091204075ff47f3d08753b030ed558c8292a8658146182f";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__0f338da100473b2e4091204075ff47f3d08753b030ed558c8292a8658146182f", "");
    }
}
