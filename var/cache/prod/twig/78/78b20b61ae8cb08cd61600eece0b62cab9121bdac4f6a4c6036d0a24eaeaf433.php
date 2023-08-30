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

/* __string_template__01f35e1b4117d3869609d1884437eeadca254591dc9cc20100fa4114c28cc484 */
class __TwigTemplate_80b9e64959cdf20162ba6df0bcd47446346d0a2985a9930560892f7c446ba1c7 extends \Eccube\Twig\Template
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


①ブランドのこだわり<br>
ミート&グリートティーバックThank Youを作る株式会社陶和は「ちょっと一息が素敵な時間になりますように、そんな思いを込めて、大人かわいいパッケージとパッケージ負けしない中身を吟味して、商品を作っております。<br><br>

②商品のこだわり<br>
人気・知名度ともにNO.1のフレーバーとなっております。ベルガモットという柑橘系の果物の香りで香りを付けてます。ストレートでもミルクティーでも美味しく召し上がっていただけます。<br><br>
　
③おすすめポイント<br>
おしゃれなデザインと上品な味わいで、ちょっとしたプレゼントにピッタリとなっております。仕事の休憩時間などホッと一息つく時間がいつもよりも優雅に感じていただけるでしょう。
職場の友人や大切な人への何気ないプレゼントで喜ばれること間違いなしです。
<br>
 </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__01f35e1b4117d3869609d1884437eeadca254591dc9cc20100fa4114c28cc484";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__01f35e1b4117d3869609d1884437eeadca254591dc9cc20100fa4114c28cc484", "");
    }
}
