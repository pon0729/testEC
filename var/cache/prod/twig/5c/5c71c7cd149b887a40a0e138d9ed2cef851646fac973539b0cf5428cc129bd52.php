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

/* __string_template__174ba79434f54190e4e36bf06ad8e0bd4017971fcc10e6fe1bae462bf012f1ac */
class __TwigTemplate_a91c4ba1d19d82a16c85cefb9c34d82b52cb5e07e279e7a9e6b0803bfd488564 extends \Eccube\Twig\Template
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
自宅にいることが増えた新しい生活様式の中、おうちでふわっと香りが楽しめるアロマオイルです。<br>
<br>
<div class=\"product-description\">
    <div class=\"product-description__title\">
商品詳細
    </div>
    <div class=\"product-description__contents\">
アロマをディフューザーやストーンに垂らすだけで、お手軽に香りが楽しめます。<br>
アロマの香りによって、身体の緊張がほぐれたり、気持ちが落ち着くので、心身共にリラックスします。<br>
そのため、ストレスを感じやすい場所やリラックスする場所で使用するのがオススメです。<br>
例えば、デスク周りやベッドサイドです。<br>
ぜひ試してみてください。<br>

28mLと容量が多めで香りを充分に楽しんでいただけます。<br>

<br>
<div class=\"product-description\">
    <div class=\"product-description__title\">
種類の説明
    </div>
    <div class=\"product-description__contents\">
ムスク＋サボン<br>
フレッシュな果実とすっきりとした花々の香りが清々しい。 ホワイトムスクの優しさと、洗い立てのリネンのような香りがするサボンが混じり合う心地よい香り。<br>

<br>
<div class=\"product-description\">
    <div class=\"product-description__title\">
量
    </div>
    <div class=\"product-description__contents\">
28mL<br>
φ55×H150mm

<div class=\"product-description\">
    <div class=\"product-description__title\">
使用方法etc
    </div>
    <div class=\"product-description__contents\">
ディフューザーなどに数滴垂らしてお楽しみください。<br>
ディフューザーがない場合もティッシュ等に垂らして御使用いただけます。
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__174ba79434f54190e4e36bf06ad8e0bd4017971fcc10e6fe1bae462bf012f1ac";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__174ba79434f54190e4e36bf06ad8e0bd4017971fcc10e6fe1bae462bf012f1ac", "");
    }
}
