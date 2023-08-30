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

/* __string_template__58b2dfa77a4867e18379e13e99c295824ac4a93c02bb836d53b0142bd3d19b3f */
class __TwigTemplate_deba73c9c488f90145cbc28dd2c66e80d8f36b40ea76392575e508c9663b7aa0 extends \Eccube\Twig\Template
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
【TEAtriCO.(ティートリコ)】は、日常にある\"ひととき\"のための香り高いひとしずくを生み出すブランドです。<br>
個性豊かなドライフルーツと世界中から集めた上質な茶葉、そしてブレンダーの確かな技術があなたを幸せなティータイムへ誘います。
<br><br>
TEAtriCO.(ティートリコ)のウェルネスティーは、毎日の生活に取り入れやすいように飲みやすくアレンジされているため、紅茶が初めてという方にもおすすめです。
<br><br>
南国の海を感じさせるオレンジや青色の茶葉は、飲むとマンゴーやグァバの優しい甘さを感じることができます。元気を出して、もうひと頑張りしたいときにいかがでしょうか。
<br>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__58b2dfa77a4867e18379e13e99c295824ac4a93c02bb836d53b0142bd3d19b3f";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__58b2dfa77a4867e18379e13e99c295824ac4a93c02bb836d53b0142bd3d19b3f", "");
    }
}
