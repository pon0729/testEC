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

/* __string_template__dfc577f8975270f602f6de33319a8be5f1c1f9806d609ae3aee78f87edea1136 */
class __TwigTemplate_85f72c61935e577c95224e4c9d2309d12b1fec85c8593091948fd4e6cebbf346 extends \Eccube\Twig\Template
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
本製品は、Davidsの創立者が健康的でより良い歯磨き粉を追い求めて、4年間にわたり多くの専門家と徹底的な研究を行った末に完成した100%天然原料の歯磨き粉です。<br>
<br>
そのため、ほとんどの歯磨き粉に入っている以下の6原料を本製品には使用しておりません。<br>
・フッ化物<br>
・硫酸塩系発泡剤<br>
・人工香味料<br>
・人工甘味料<br>
・着色剤<br>
・保存料<br>
<br>
Davidsの歯磨き粉が生まれたアメリカでは予防の意識が高く、オーラルケアに関して日本人の約6倍のお金をかけていると言われています。<br>
アメリカ人男性の４人に1人は虫歯経験ゼロ。日本人男性では20人にたった1人と圧倒的な差があります。<br>
近年、日本でも治療ではなく予防に対する意識が高まってきています。<br>
<br>
綺麗な歯は、食事・人付き合い・ビジネスなど人生における様々な部分で大切な要素になってきます。<br>
毎日使うものだからこそ、身体のことを第一に考えた天然由来の歯磨き粉でケアしていきませんか。<br>
<br>
天然成分のためお子さまから大人まで様々な人に送ることが出来ます。<br>
マスクで口を覆うことが多い時期だからこそ、口内環境を常に清潔に保っておくことはかなり重要です。<br>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__dfc577f8975270f602f6de33319a8be5f1c1f9806d609ae3aee78f87edea1136";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__dfc577f8975270f602f6de33319a8be5f1c1f9806d609ae3aee78f87edea1136", "");
    }
}
