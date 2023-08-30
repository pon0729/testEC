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

/* __string_template__27bd38a7a98eb59ffee9de02a66eb7219ab4791493b33ebc991642d0a8b6403e */
class __TwigTemplate_c16567667664266604de626eb693d582082ec5a00bc3aa75ce48530e97dc3cae extends \Eccube\Twig\Template
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
ご存知の通り、シェービング剤は大きく分けて、泡のフォームタイプとジェルタイプに分かれます。<br>
「カンパニー ド プロバンス」の「グルーミングフォーメン アフターシェービングジェル」はジェルタイプになります。<br>
<br>
ジェルの特徴は、潤滑性が高い、カミソリの滑りがよりなめらかである、肌をより強力に保護するなどの特徴があります。<br>
<br>
シェービングジェルは剃りやすいかどうかだけでなく、配合成分が大切であり、市販の物はメントールで爽快感を強めているだけで、肌ケアまでこだわった製品はあまり多くありません。<br>
本製品は保湿に大切なグリセリンやヒアルロン酸を配合しており、カミソリ後の保湿ケア対策も同時に行えます。<br>
<br>
最近はマスクを常時装着するため、口周りに吹き出物ができやすくなります。<br>
クリームだと吹き出物を隠してしまいますが、ジェルタイプの場合は透明な物が多いため、吹き出物を避けて剃ることが出来ます。<br>
また髭の形を整える時も今の髭の形を見ながら剃ることが出来るため、イメージ通りの仕上がりを作ることが出来ます。<br>
<br>

メントール不使用で敏感肌の男性にも使用できるため、人を選ばず贈り物に最適です。<br>
また髭の形を整えている男性にも喜ばれる一本になっております。<br>
誕生日の贈り物や仕事でお世話になった方へのギフトにいかがでしょうか。<br>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__27bd38a7a98eb59ffee9de02a66eb7219ab4791493b33ebc991642d0a8b6403e";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__27bd38a7a98eb59ffee9de02a66eb7219ab4791493b33ebc991642d0a8b6403e", "");
    }
}
