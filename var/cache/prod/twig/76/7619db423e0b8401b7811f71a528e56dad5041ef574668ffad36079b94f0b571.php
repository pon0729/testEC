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

/* __string_template__b84d7371b4f3c55634e8803c66db91ae80f9c4eb49c59077cdc4045bb84ca6df */
class __TwigTemplate_2d6a94cbc8e2356b0c77b173ce5de63bf8a421f416e59e6e15ead9fba4dd740d extends \Eccube\Twig\Template
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
忙しくて生活が不規則になると、食生活が乱れたり、運動不足になりがちですよね。<br>
<br>
このままでは良くないと感じてはいても、なかなか時間が取れずにいたり、<br>体力が低下していて運動を始めること自体に気後れしてしまっている方も多いのではないでしょうか。<br>
<br>
こうした悩みに心当たりのある方におすすめなサプリメントが、オイルセレクトです。<br>
<br>
ココナッツや母乳にも含まれる天然成分のMCT(中鎖脂肪酸)が素早くエネルギーに変わるため、運動不足やパワー不足を補うように働きます。<br>
<br>
MCT(中鎖脂肪酸)を習慣的に摂取することで、ジョギングやサイクリングのように持久力を必要とする運動でも疲れにくく、<br>より長く続けることを可能にするため、運動との組み合わせでこちらのサプリをお飲みいただくのもおすすめです。<br>
<br>
また、亜鉛含有酵母を配合しているため、食事の偏りやお酒の飲みすぎによる亜鉛の欠乏を補います。<br>亜鉛は免疫機能に関わる栄養素ですので、風邪やその他の感染症予防にも役立ちます。<br>
<br>
他にも、免疫機能を高めるビタミンEやピクノジェノール®︎(フランス海外松樹皮)が、不規則な生活の中でもあなたの身体の健康を維持してくれます。<br>
<br>
定期的に運動することが難しい方も、1日3粒の簡単な習慣からご自身の大切な身体をメンテナンスしてみませんか。
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__b84d7371b4f3c55634e8803c66db91ae80f9c4eb49c59077cdc4045bb84ca6df";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__b84d7371b4f3c55634e8803c66db91ae80f9c4eb49c59077cdc4045bb84ca6df", "");
    }
}
