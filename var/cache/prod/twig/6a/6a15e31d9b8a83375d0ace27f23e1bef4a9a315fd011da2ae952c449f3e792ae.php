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

/* __string_template__c7b3e95f04ed2579e87ecfd27c05663f26b11ff86e8357a9d72ee58d0eaf5c7a */
class __TwigTemplate_ce7857276d065fe0426718481f7e7c2e0299951ad19b9d46175349ee5a014656 extends \Eccube\Twig\Template
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
【TEAtriCO.(ティートリコ)】は、日常にある\"ひととき\"のための香り高いひとしずくを生み出すブランドです<br>
<br>
個性豊かなドライフルーツと世界中から集めた上質な茶葉、そしてブレンダーの確かな技術があなたを幸せなティータイムへ誘います。<br>
<br>
お茶の「Tea」 と食べる「Eat」 を組み合わせたネーミングの通り、茶葉であるドライフルーツも美味しく食べられるので、食物繊維やビタミンをいっしょにとれるのも嬉しいポイントです。<br>
<br>
3種のベリーが香るベリーミックスは、疲れた体を癒したいおやつの時間におすすめです。<br>
ベリーの優しい甘さに、ほっこり一息ついてみてはいかがでしょうか。<br>
<br>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__c7b3e95f04ed2579e87ecfd27c05663f26b11ff86e8357a9d72ee58d0eaf5c7a";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__c7b3e95f04ed2579e87ecfd27c05663f26b11ff86e8357a9d72ee58d0eaf5c7a", "");
    }
}
