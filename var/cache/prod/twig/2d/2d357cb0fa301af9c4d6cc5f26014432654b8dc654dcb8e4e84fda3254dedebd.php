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

/* __string_template__f369bea191c9ea86aba10be572d949c9fcd7d17a2d63237802dcedeb6f8984d2 */
class __TwigTemplate_8bb12139dda809b5c6b3f3e4c8cbc343894b818a127167122c810b2eff60f562 extends \Eccube\Twig\Template
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
頭皮の毛穴に届く376本の先玉ピンは、頭皮を傷つけないように限りなく真球に近いピンになっていて、約4万個あるといわれる頭皮の毛穴をクレンジング&マッサージします。<br>
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
        長さ196×幅45×高さ40(mm) 約85g
    </div>
</div>
<br><br>";
    }

    public function getTemplateName()
    {
        return "__string_template__f369bea191c9ea86aba10be572d949c9fcd7d17a2d63237802dcedeb6f8984d2";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__f369bea191c9ea86aba10be572d949c9fcd7d17a2d63237802dcedeb6f8984d2", "");
    }
}
