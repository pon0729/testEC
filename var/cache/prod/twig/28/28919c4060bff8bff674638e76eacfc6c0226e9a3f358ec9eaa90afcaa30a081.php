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

/* __string_template__3126ac2156a458f21994159c9f99b340fa14df566f537fdac69cca24bc4357c5 */
class __TwigTemplate_d2c946bd3c5759c5d4998f11c930a7b6dd5e60a33c35a27dd9cd9fc5c919ec8d extends \Eccube\Twig\Template
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
     毎日のシンプルなケアで、まるでエステを受けたような艶のある素肌を手に入れたい方に。<br><br>
角質層までしっかりとうるおいを届け、きめ細やかな素肌に整える「 ローション」、パワープラント幹細胞エキス（整肌成分）・マリンプラント幹細胞エキス（保湿成分）などを配合し、肌にハリやうるおいを与えるエイジングケア※が期待できる「 エッセンスセラム」、肌なじみの良いやわらかなテクスチャーで、しっかりと肌をカバー・保湿する「 クリーム」の極上3点セットです。<br><br>
オリジナル発酵原料できめの整った明るくなめらかな肌に導き、一日の始まりと終わりはリラックスできるさわやかな香り、ラベンダー・ローズマリー・ベルガモットをベースとしたBe独自のオーガニック精油ブレンドの心地よい香りに包まれます。<br><br>
シンプルで賢く、贅沢なスキンケアを。アクティブな毎日の中でも、肌も心も毎日しっかりケアしたい方におすすめです。<br>
※エイジングケアとは、年を重ねた肌にうるおいを与えることをいいます。<br><br><br>

    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__3126ac2156a458f21994159c9f99b340fa14df566f537fdac69cca24bc4357c5";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__3126ac2156a458f21994159c9f99b340fa14df566f537fdac69cca24bc4357c5", "");
    }
}
