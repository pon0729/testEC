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

/* __string_template__58651d9221e2f4b71e63042354dc210a0d6f1996466649809e8d19ac4410457a */
class __TwigTemplate_39539427d978317df80289f69c17f91bd3aec1144a6597596abd763f6cbc4d65 extends \Eccube\Twig\Template
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
     
このタオルは一般的な「今治タオル＝ふんわり分厚い白タオル」というイメージとは異なるタオルです。<br>
<br>
薄手タイプの特徴 をいかした洗濯しやすく使い勝手の良いタオルに仕上がっています。<br>
清潔感あふれる木の葉模様のホワイトリーフ柄がアクセントに、寒い季節や湿気の多い時期でも、一日で乾く使いやすさで、主婦の方・一人暮らしの方などをはじめ、ご自宅用に長く愛用していただけるタオルになっています。<br>
また、薄手でかさばらず、バッグなどにも簡単に収納出来ます。<br><br>
    </div>
</div>
<br><br>


<div class=\"product-description\">
    <div class=\"product-description__title\">
        サイズ
    </div>
    <div class=\"product-description__contents\">
        34cm×34cm
    </div>
</div>
<br><br>
<div class=\"product-description\">
    <div class=\"product-description__title\">
        内容量
    </div>
    <div class=\"product-description__contents\">
        タオル（綿100%）5枚
    </div>
</div>
<br><br>
<div class=\"product-description\">
    <div class=\"product-description__title\">
        生産国
    </div>
    <div class=\"product-description__contents\">
日本<br>

    </div>
</div>
<br><br>";
    }

    public function getTemplateName()
    {
        return "__string_template__58651d9221e2f4b71e63042354dc210a0d6f1996466649809e8d19ac4410457a";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__58651d9221e2f4b71e63042354dc210a0d6f1996466649809e8d19ac4410457a", "");
    }
}
