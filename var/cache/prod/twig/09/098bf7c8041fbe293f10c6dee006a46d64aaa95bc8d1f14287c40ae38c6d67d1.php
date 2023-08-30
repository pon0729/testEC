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

/* __string_template__eaafca99021af3befe6f5fb38eb25a2fe39c8ff8755dbf4d0dfd772e178d0fcb */
class __TwigTemplate_c9a03fff6cca34808503dc801188f26c626858210cafa411d3cfcc375ec4dfaa extends \Eccube\Twig\Template
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
        ご使用方法
    </div>
    <div class=\"product-description__contents\">
     
シャンプーやトリートメント時はもちろん、ブローやアウトバスでのブラッシング、マッサージなどにもご使用いただけます。<br>
<br>
頭皮の毛穴に届く572本の先玉ピンは、頭皮を傷つけないように限りなく真球に近いピンになっていて、約4万個あるといわれる頭皮の毛穴をクレンジング&マッサージします。<br>
指では落とせない汚れをやさしく、しっかり落としてくれます。<br><br>
また、ブラシを立てて置けるブラシスタンド付きですので、使用後はブラシを立てて水切り・乾燥できるので衛生的です。<br>
<br>
    </div>
</div>
<br><br>


<div class=\"product-description\">
    <div class=\"product-description__title\">
        サイズ
    </div>
    <div class=\"product-description__contents\">
        長さ160×幅51×高さ40(mm) 約81g
    </div>
</div>
<br><br>";
    }

    public function getTemplateName()
    {
        return "__string_template__eaafca99021af3befe6f5fb38eb25a2fe39c8ff8755dbf4d0dfd772e178d0fcb";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__eaafca99021af3befe6f5fb38eb25a2fe39c8ff8755dbf4d0dfd772e178d0fcb", "");
    }
}
