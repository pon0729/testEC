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

/* __string_template__9e410134c8c6c3ad9bccd9490d911adfa0f95d8da54b108e34062fee5cc66ca6 */
class __TwigTemplate_b91c64fc8d0874579da7624eded1f3f987d09d140b8413ee57faf1bf00df361f extends \Eccube\Twig\Template
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
        毎日のスキンケアに欠かせないローション。よりお肌に良い成分が入っているものを選びたいですよね。そこでおすすめなのが、このローションです。<br>
<br>
        このローションをはじめとするエッセンスとクリームには、お肌のハリや弾力に効果のあるパワープラント幹細胞エリンジウムマリチマムや、お肌の透明感を引き出すマリンプラント幹細胞クリスマムマリチマムが配合されています。角質層にうるおいを与え、ハリのあるお肌だと毎日が楽しいですよね。<br>
しっとりタイプのローションで伸びがよく、お肌にたっぷりとうるおいを与えます。肌なじみが良いので、ローションをつけた後、時間を置かずにお化粧することができます。<br>
<br>
天然由来成分を多く含んでいる化粧品は、化学物質や添加物を最低限に抑えているのが特徴です。このローションには、肌にダメージの少ない天然由来成分が配合されているので、女性ホルモンの乱れや体調崩れによる肌トラブルにお悩みのかたも、イキイキとした美肌を実感できます。<br>
<br>
本製品にはローションの他に、美容エッセンスとクリームがあります。スキンケアの多くは同じメーカーのシリーズ製品を使うことで、お肌に必要な成分を得ることができます。お肌にうるおいを与えるローション、美容成分が凝縮されたエッセンス、そして美容成分をお肌に閉じ込めるクリームの3セットでご使用いただくと、よりうるおいをお肌に閉じ込めることができます。ローション→エッセンス→クリームの順番でお使いいただくのがおすすめです。
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__9e410134c8c6c3ad9bccd9490d911adfa0f95d8da54b108e34062fee5cc66ca6";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__9e410134c8c6c3ad9bccd9490d911adfa0f95d8da54b108e34062fee5cc66ca6", "");
    }
}
