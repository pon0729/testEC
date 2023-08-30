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

/* __string_template__3ba90673aca6e91e6d79e5c839d4a010e329ae494bad9a855e8e57ae623c0d80 */
class __TwigTemplate_684298c9d827ad064dd7cade1707474cb4e6697b4d480a9a3b59619651367b16 extends \Eccube\Twig\Template
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

ブランド名【BLEND】の名の通り、二つの種類(香り)をブレンドすることで自分好みの香りを作り出すことができます。<br>
あなただけのユニークな香りを作り出しましょう。<br>
<br>
液体を使用しないスティックタイプのルームフレグランス。<br>
スティック本体に香りがあり、使用する本数で香りの強度を調整することが可能。<br>
専用のセラミックアロマスティックホルダーに他の香りのスティックをブレンドしてオリジナルの香りを楽しめます。<br>
<br>
パロサント:インカ帝国の聖なる香木と呼ばれるパロサントの香りは、 濃厚な大地を思い起こさせます。<br>
シダーウッドのスモーキーなアロマが心踊らせ、レザーの渋さとタバコリーフの香りのアクセントが神秘的な香り。<br>

<br>
<br>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__3ba90673aca6e91e6d79e5c839d4a010e329ae494bad9a855e8e57ae623c0d80";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__3ba90673aca6e91e6d79e5c839d4a010e329ae494bad9a855e8e57ae623c0d80", "");
    }
}
