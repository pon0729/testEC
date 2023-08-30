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

/* __string_template__3f166f0633fd0c2e3ba62f22fb8cc51d7a526712eeeb861b1d6af535576c6cac */
class __TwigTemplate_4e2e9eeeffbacdb77fbddbffe7ff3f69ee66efb91cb8429d4a189fecdf0664c6 extends \Eccube\Twig\Template
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

スリムな体を目指す全ての女性におすすめのダイエットサポート食品です。<br>
合成着色料、人工甘味料、保存料フリーで自然派にこだわった配合です。<br>
活動前の朝にたんぱく質を補給することで、代謝アップが期待できます。<br>
<br>
高たんぱく食品と言われている大豆、玄米、サチャインチの3種類の植物性たんぱく質を使用しています。<br>
さらに、植物由来の乳酸菌が入っていることで、腸内環境を整えるサポートが出来ます。<br>
<br>
ほうじ茶の香り成分であるピラジンにはリラックス効果が期待できるという報告もあります。朝の1杯でリラックスして1日を始められますね。<br>
<br>
朝起きての1杯の代謝アップ、または運動のお供にたんぱく質の補給を。<br>
気軽に美味しく飲めるプロテイン生活をはじめてみませんか。<br>
 </div> </div>";
    }

    public function getTemplateName()
    {
        return "__string_template__3f166f0633fd0c2e3ba62f22fb8cc51d7a526712eeeb861b1d6af535576c6cac";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__3f166f0633fd0c2e3ba62f22fb8cc51d7a526712eeeb861b1d6af535576c6cac", "");
    }
}
