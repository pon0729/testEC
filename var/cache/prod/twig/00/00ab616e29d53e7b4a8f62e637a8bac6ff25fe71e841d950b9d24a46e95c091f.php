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

/* __string_template__5cf6ae8345a3fa8b3a4132e4326314339e1044c7ddcfa1ec1e91ecdf2d146a8a */
class __TwigTemplate_110936ebf7c5e37c38b102a0a252b01d494e85ed2c5a5ef754f75ad55eb70a6a extends \Eccube\Twig\Template
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

BE-MAX　the SUNは、きらめく太陽のように自らを輝かせ、透明感のある華やかさを目指す女性に続けてほしい新習慣サプリメントです。<br>
1日2粒で透明感のある美しさをサポートします。<br>
BE-MAX　the SUNは、1日2粒をお出かけ前にとると効果的なので、毎朝とるなど忘れにくいタイミングを決めて、毎日の習慣にしましょう。<br>
続けることで、もっとキレイに、もっと自由にのびのびとした1日を過ごすことができるようになります。<br>
<br>
日差しが気になるスーパーやコンビニへのちょっとした外出、外に洗濯ものを干すタイミング、出先で上着を脱ぐときや髪をまとめた時、屋外でのレジャーやスポーツを楽しむ時などに向けて新習慣をつくりましょう。<br>
<br>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__5cf6ae8345a3fa8b3a4132e4326314339e1044c7ddcfa1ec1e91ecdf2d146a8a";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__5cf6ae8345a3fa8b3a4132e4326314339e1044c7ddcfa1ec1e91ecdf2d146a8a", "");
    }
}
