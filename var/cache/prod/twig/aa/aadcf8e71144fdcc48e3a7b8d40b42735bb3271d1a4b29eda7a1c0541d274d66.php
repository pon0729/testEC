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

/* __string_template__aa81c87e74136ac2e5c71788b500cfe54cc85dae9ba23294beba64f95e701c21 */
class __TwigTemplate_9ea60e9b9a386f1110ac59714e706e61a9f0b573e654af3a5633dbad1454b757 extends \Eccube\Twig\Template
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
        毎日頑張っているお肌にご褒美をあげたい。よりお肌に良い成分が入っているものを選びたい。そう思っている方におすすめなのが、このエッセンスです。<br>
このエッセンスをはじめとするローションとクリームには、お肌のハリや弾力に効果のあるパワープラント幹細胞エリンジウムマリチマムや、お肌の透明感を引き出すマリンプラント幹細胞クリスマムマリチマムが配合されています。角質層にうるおいを与え、ハリのあるお肌だと毎日が楽しいですよね。<br>
<br>
天然由来成分を多く含んでいる化粧品は、化学物質や添加物を最低限に抑えているのが特徴です。このエッセンスには、肌にダメージの少ない天然由来成分が配合されているので、女性ホルモンの乱れや体調崩れによる肌トラブルにお悩みのかたも、イキイキとした美肌を実感できます。<br>
<br>
本製品にはエッセンスの他に、ローションとクリームがあります。スキンケアの多くは同じメーカーのシリーズ製品を使うことで、お肌に必要な成分を得ることができます。お肌にうるおいを与えるローション、美容成分が凝縮されたエッセンス、そして美容成分をお肌に閉じ込めるクリームの3セットでご使用いただくと、よりうるおいをお肌に閉じ込めることができます。ローション→エッセンス→クリームの順番でお使いいただくのがおすすめです。
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__aa81c87e74136ac2e5c71788b500cfe54cc85dae9ba23294beba64f95e701c21";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__aa81c87e74136ac2e5c71788b500cfe54cc85dae9ba23294beba64f95e701c21", "");
    }
}
