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

/* __string_template__239e49f5b1678e4c22b9d7e3f3f572720ec322017b41a9494b355a34ae0276ae */
class __TwigTemplate_82a4282264df5cebb0de1d800f9c286bcc8226c310a63f5da263b28697b30cde extends \Eccube\Twig\Template
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
        毎日のスキンケアの最後の仕上げに必要なクリーム。クリームを選ぶ際は、使用感がお好みのものであることだけでなく、お肌が喜ぶ成分が入っているものを選びたいですよね。そこでおすすめなのが、このクリームです。<br>
<br>
このクリームをはじめとするローションとエッセンスには、お肌のハリや弾力に効果のあるパワープラント幹細胞エリンジウムマリチマムや、お肌の透明感を引き出すマリンプラント幹細胞クリスマムマリチマムが配合されています。角質層にうるおいを与え、ハリのあるお肌だと毎日が楽しいですよね。<br>
本製品は、肌なじみの良い使用感でみずみずしくやわらかな肌へとみちびいてくれます。肌に乗せると溶け込むような感覚で、角質層までしっかりとうるおいを届けます。つけた瞬間はパックをしているかのようにお肌の表面をカバーし、時間を置くと肌にすーっとなじみます。<br>
目元や頬、口元など乾燥が気になるところには、より丁寧にケアしていただくことをおすすめします。<br>
<br>
天然由来成分を多く含んでいる化粧品は、化学物質や添加物を最低限に抑えているのが特徴です。このクリームには、肌にダメージの少ない天然由来成分が配合されているので、女性ホルモンの乱れや体調崩れによる肌トラブルにお悩みのかたも、イキイキとした美肌を実感できます。<br>
<br>
本製品にはクリームの他に、ローションと美容エッセンスがあります。スキンケアの多くは同じメーカーのシリーズ製品を使うことで、お肌に必要な成分を得ることができます。お肌にうるおいを与えるローション、美容成分が凝縮されたエッセンス、そして美容成分をお肌に閉じ込めるクリームの3セットでご使用いただくと、よりうるおいをお肌に閉じ込めることができます。ローション→エッセンス→クリームの順番でお使いいただくのがおすすめです。
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__239e49f5b1678e4c22b9d7e3f3f572720ec322017b41a9494b355a34ae0276ae";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__239e49f5b1678e4c22b9d7e3f3f572720ec322017b41a9494b355a34ae0276ae", "");
    }
}
