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

/* __string_template__4d15f2b12c87c74880eb9a172375bece33ddff704765c2b998d7af790c104da6 */
class __TwigTemplate_ab28ac9d022b714176148f40dd9b50fcd546210aed8612838b26b97c15e05708 extends \Eccube\Twig\Template
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

爽やかな香りと素肌に優しいボディスクラブで全身ケアをしながら至福のバスタイムをお楽しみください。<br> 
<br>
ボディスクラブは、スクラブ剤で肌を研磨し、傷付けることなく古い角質を落とします。<br>
さらに、毛穴に詰まった汚れも落ちやすくなるため肌の印象をワントーン明るい印象へ導きます。<br>
<br>
また、原材料や配合されている成分により、肌への優しさが変わります。<br>
本商品は、トウモロコシ穂軸をスクラブ剤として使用したボディスクラブです。<br>
また、コメヌカロウを配合していて、肌のうるおいを保ち、ツヤを与えます。<br>
さらには、保湿成分のアルガンオイルも配合しています。<br>
各成分のことは「商品詳細」に記載しました。<br>
<br>
ボディスクラブはボディソープなどで落とし切れなかった汚れもキレイに落とせるため、<br>
スペシャルケアとして週に2回程度を目安に使うことをオススメします。<br>
そして、ボディスクラブを使うタイミングは、体を一通り洗い清潔にした後に使います。<br>
この順番で使うことで、ボディソープでキレイにした肌に効果的にアプローチできます。<br>
<br>
<br>
</div></div>";
    }

    public function getTemplateName()
    {
        return "__string_template__4d15f2b12c87c74880eb9a172375bece33ddff704765c2b998d7af790c104da6";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__4d15f2b12c87c74880eb9a172375bece33ddff704765c2b998d7af790c104da6", "");
    }
}
