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

/* __string_template__3878a2980afce5c8090ba883deb452ff2df70304c54f0b3f762731b0ce636c41 */
class __TwigTemplate_34c500cfb72527d1bf193d8e5743f4c1471219c5e8317ceac9e524595d994d09 extends \Eccube\Twig\Template
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
        用途によって様々な種類がある掃除用クリーナーですが、場所別に揃えるのは少し大変ですよね。<br>
<br>
FER A CHEVAL（フェールシュヴァル）のブラックソープペーストは、普段のお掃除では取れない頑固汚れにマルチに対応する高濃縮度のクリーナーです。<br>バスルーム、木、革製品、ガーデニング用品など、幅広くご使用いただけるため、頑固汚れにはこれ一つあれば十分です。<br>
<br>
オリーブ油を原料としているため、ガス台や換気扇といった、食品を扱うキッチン周りにも安心してご使用いただけます。<br>
<br>
さらに、成分中のオリーブ油が拭き取った表面に自然な油膜を張るため、金属製品や家具のメンテナンスも同時に行えます。<br>
大切なお家や家具をいつでも清潔に、いつまでも美しく保ちませんか。<br>
<br>
お引越しや新築祝いのギフトにも。実用的で気の利いたプレゼントは、相手に喜ばれること間違いありません。
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__3878a2980afce5c8090ba883deb452ff2df70304c54f0b3f762731b0ce636c41";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__3878a2980afce5c8090ba883deb452ff2df70304c54f0b3f762731b0ce636c41", "");
    }
}
