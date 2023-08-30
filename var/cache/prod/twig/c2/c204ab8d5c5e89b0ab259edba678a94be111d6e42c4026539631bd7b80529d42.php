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

/* __string_template__7299c13863fc4e7f836733d765677111952c22e37920396c0b14c5633ba80482 */
class __TwigTemplate_8d5772e7453e49ac71dddfc788708007fdd188234ccf4ac981a5ede38e9f5bc6 extends \Eccube\Twig\Template
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
有機ドライアップル(オーストリア製造)・加糖ドライストロベリー・加糖ドライマンゴー・加糖ドライブルーベリー・加糖ドライクランベリー・有機ハイビスカス・香料・クエン酸・リンゴ酸着色料(赤40)・保存料(亜硫酸塩)
    </div>
</div>
<br>
<div class=\"product-description\">
    <div class=\"product-description__title\">
        量
    </div>
    <div class=\"product-description__contents\">
50g(内容量/50g　5杯から6杯分) 
    </div>
</div>

<br>
<div class=\"product-description\">
    <div class=\"product-description__title\">
        使用方法
    </div>
    <div class=\"product-description__contents\">
大さじ山盛り1杯(10g程)をカップに入れ、熱湯100～150mlを注ぎ5分程蒸らした後、軽く混ぜてからフルーツも一緒にお召し上がりください。<br>
    </div>
</div>

<br>
<div class=\"product-description\">
    <div class=\"product-description__title\">
        サイズ
    </div>
    <div class=\"product-description__contents\">
W6×H17×D3.5cm
    </div>
</div>
<br>
<div class=\"product-description\">
    <div class=\"product-description__title\">
        ご使用上の注意
    </div>
    <div class=\"product-description__contents\">
        <ul>
<li>直射日光、高温多湿を避けて保存してください</li>
<li>開封後はお早めにお召し上がりください</li>
        </ul>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__7299c13863fc4e7f836733d765677111952c22e37920396c0b14c5633ba80482";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__7299c13863fc4e7f836733d765677111952c22e37920396c0b14c5633ba80482", "");
    }
}
