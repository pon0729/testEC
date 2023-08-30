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

/* __string_template__4f7ebbfa2682de98e9504ad6b558ae4e3abfbfdb3056f14f3296f187d3ce8b86 */
class __TwigTemplate_41119583757323301ba6104a5bba9f66b6c9786f112256ea31d300e683eb2da9 extends \Eccube\Twig\Template
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
「エナジードリンクって眠気は覚めるけど健康に悪そう」
これは多くの方が持つエナジードリンクのイメージです。<br>
<br>
この一本は配合成分に拘っており、 人工甘味料や人工保存料を使用せず、自然素材である精製はちみつやクロレラ抽出物などを使用し、健康的に内側から元気を引き出すエナジードリンクになっています。<br>
<br>
また一本当たりの内容量が100mlの為、鞄にも入りやすいお手頃サイズとなっているので、仕事でここぞという時に手軽に飲み切れるサイズになっています。<br>
<br>
健康において、若いうちから気を使うべき病気の一つに糖尿病があります。<br>
糖尿病予防には、糖質制限が効果的と言われています。<br>
一般的なエナジードリンクには人工甘味料などの糖質が多く含まれていますが、
本製品であれば自然素材から甘さを引き出している為、一本当たりの
炭水化物(糖質)も市販のエナジードリンクの1/3となり、糖質の取りすぎが気になる方にも安心してお飲みいただけます。<br>
<br>
最近残業や出張が続いている、プレゼンを控えている、
そんな仕事を頑張るあなたや、家族のために家事を頑張るあなたのために<br>
<br>
元気を支える為の一本を鞄に入れてみませんか。<br>

    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__4f7ebbfa2682de98e9504ad6b558ae4e3abfbfdb3056f14f3296f187d3ce8b86";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__4f7ebbfa2682de98e9504ad6b558ae4e3abfbfdb3056f14f3296f187d3ce8b86", "");
    }
}
