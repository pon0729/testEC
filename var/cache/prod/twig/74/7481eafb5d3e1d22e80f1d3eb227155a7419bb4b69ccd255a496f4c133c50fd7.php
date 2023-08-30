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

/* __string_template__3c5238024e20ef88327508569f9ae170cc7efa6bb8ac91e268f37c0efc53a3ab */
class __TwigTemplate_5ffa27a711895b9ca450c746e759c4eefafe719b7735067a42a9a514fb31ea1a extends \Eccube\Twig\Template
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
       ニュージーランド『The Aromatherapy Co.』のBLENDシリーズ。<br> 単品ではもちろん、異なる種類をブレンドすることで自分だけのオリジナルの香りが作り出せます。<br> スティックの本数で香りの強度も調整できるので、リビングからバスルームまで場所を選ばず楽しめるルームフレグランスです。 <br>（※専用ホルダーは付属しておりませんのでご注意ください）<br>
    </div>
</div>
<br><br>


<div class=\"product-description\">
    <div class=\"product-description__title\">
        サイズ
    </div>
    <div class=\"product-description__contents\">
        23cm
    </div>
</div>
<br><br>


<div class=\"product-description\">
    <div class=\"product-description__title\">
        内容量
    </div>
    <div class=\"product-description__contents\">
        6本
    </div>
</div>
<br><br>



<div class=\"product-description\">
    <div class=\"product-description__title\">
        芳香期間
    </div>
    <div class=\"product-description__contents\">
        1本/1か月<br>
※使用環境により異なります。
    </div>
</div>
<br><br>


<div class=\"product-description\">
    <div class=\"product-description__title\">
        ご使用上の注意
    </div>
    <div class=\"product-description__contents\">
        <ul>
            <li>本品は食べ物、飲み物ではありません。</li>
            <li>商品は使用用途以外で使用しないでください。</li>
            <li>肌や衣服に付着しないようご注意ください。</li>
            <li>火気の近くで使用しないでください。</li>
            <li>高温多湿・直射日光を避け、乳児・ペットの手の届かない所に保管してご使用ください。</li>
        </ul>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__3c5238024e20ef88327508569f9ae170cc7efa6bb8ac91e268f37c0efc53a3ab";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__3c5238024e20ef88327508569f9ae170cc7efa6bb8ac91e268f37c0efc53a3ab", "");
    }
}
