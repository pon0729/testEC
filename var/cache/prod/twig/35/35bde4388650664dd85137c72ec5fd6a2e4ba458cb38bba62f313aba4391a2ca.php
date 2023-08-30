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

/* __string_template__46cd28b2b706b57b2fe149cd2062e904ebbcacf62cc16f9aa5fde0f530efe79a */
class __TwigTemplate_3ecf310d916b22e52ea2a78ec4672e65d714bbbce018f655d662548baeb73014 extends \Eccube\Twig\Template
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
【TEAtriCO.(ティートリコ)】は、日常にある\"ひととき\"のための香り高いひとしずくを生み出すブランドです。<br><br>
個性豊かなドライフルーツと世界中から集めた上質な茶葉、そしてブレンダーの確かな技術があなたを幸せなティータイムへ誘います。<br>
<br>
お茶の「Tea」 と食べる「Eat」 を組み合わせたネーミングの通り、茶葉であるドライフルーツも美味しく食べられるので、食物繊維やビタミンをいっしょにとれるのも嬉しいポイントです。<br>
<br>
すっきりとした甘さのティートシャルドネスイートは、頭をクリアにしたい朝におすすめです。<br>
マスカットの甘さと香りに癒されながら、1日をスタートしてみてはいかがでしょうか。<br>
<br>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__46cd28b2b706b57b2fe149cd2062e904ebbcacf62cc16f9aa5fde0f530efe79a";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__46cd28b2b706b57b2fe149cd2062e904ebbcacf62cc16f9aa5fde0f530efe79a", "");
    }
}
