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

/* __string_template__9967cb0b8dd083cecfd55a3765e69dbc131eb8f857f9aaf9607d349ba8e80601 */
class __TwigTemplate_bbf599ba9d4bd1bddf6573b4ed9909d343ca27e21d1c2eb3bc3e34aa16140c0f extends \Eccube\Twig\Template
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

すべすべなお肌を手に入れたい、古い角質を落としたい、そんな方にオススメなのがボディスクラブ。<br>
ボディスクラブは、スクラブ剤で肌を研磨し、傷付けることなく古い角質を落とします。<br>
さらに、毛穴に詰まった汚れも落ちやすくなるため肌の印象をワントーン明るい印象へ導きます。<br>
<br>
また、原材料や配合されている成分により、肌への優しさが変わります。<br>
本商品は、トウモロコシ穂軸をスクラブ剤として使用したボディスクラブです。<br>
<br>
また、コメヌカロウを配合していて、肌のうるおいを保ち、ツヤを与えます。<br>
さらには、保湿成分のアルガンオイルも配合しています。<br>
各成分のことは「商品詳細」に記載しました。<br>
<br>
ボディスクラブはボディソープなどで落とし切れなかった汚れもキレイに落とせますので、スペシャルケアとして週に2回程度を目安に使うことをオススメします。<br>
そして、ボディスクラブを使うタイミングは、体を一通り洗い清潔にした後に使います。<br>
この順番で使うことで、ボディソープでキレイにした肌に効果的にアプローチできます。<br>
<br>
ボディスクラブをお肌の手入れの習慣に取り入れて、すべすべで素敵なお肌を手に入れていきましょう。<br>
<br>
<br>
</div></div>";
    }

    public function getTemplateName()
    {
        return "__string_template__9967cb0b8dd083cecfd55a3765e69dbc131eb8f857f9aaf9607d349ba8e80601";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__9967cb0b8dd083cecfd55a3765e69dbc131eb8f857f9aaf9607d349ba8e80601", "");
    }
}
