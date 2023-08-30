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

/* __string_template__fee33d87bdc62635e40058292b2b42dbb200481483d362819dbf55d7f970dc1f */
class __TwigTemplate_78667ac7ecdfb900462ed5eccc0427637ab49bcc0cda2f7633c5b561dd8ddb51 extends \Eccube\Twig\Template
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
「カンパニー ド プロバンス」の「グルーミングフォーメン ホイップシェービングクリーム」は、フォームタイプになります。<br>
<br>
フォームタイプの特徴はスピーディーで軽い泡立ち、洗い流しやすいなどの特徴があります。<br>
<br>
市販のシェービング剤は価格を抑えるために、一部の成分に特化している物がほとんどです。<br>
本製品は剃り心地を良くするための髭を柔らかくする成分や保湿成分だけでなく、肌細胞の生まれ変わりを促すコンディショニング剤も配合されているため、一本で欲しい成分が全て満たされる製品となっております。<br>
<br>
メントール不使用で敏感肌の男性にも使用できるため、人を選ばず、贈り物に最適です。<br>
また髭の形を整えている男性にも喜ばれる一本になっております。
誕生日の贈り物や仕事でお世話になった方へのギフトにいかがでしょうか。<br>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__fee33d87bdc62635e40058292b2b42dbb200481483d362819dbf55d7f970dc1f";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__fee33d87bdc62635e40058292b2b42dbb200481483d362819dbf55d7f970dc1f", "");
    }
}
