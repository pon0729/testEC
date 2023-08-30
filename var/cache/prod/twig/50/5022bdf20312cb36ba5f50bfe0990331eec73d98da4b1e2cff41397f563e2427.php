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

/* __string_template__3f4700d002006c4ff1e45b87eac5ebc25256af7be00174eafcad06c555f85914 */
class __TwigTemplate_4f241adc3c045595dc2ee0260ad6fca9330c5628b52522749e66b2eb12d871ac extends \Eccube\Twig\Template
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
ユーロジャパンエレガンスは日常の生活を彩る香りを取り入れた、心が豊かになる生活を過ごしていただけるアイテムを中心にセレクトしています。<br> 香りの本場イギリス、ハーブ王国のタイなどから輸入したこだわりの香りをぜひお楽しみ下さい。
<br> 
<br> 
ユーカリのリラックスした穏やかな香りに、グリーンアップル、ピーチのフルーティーさとミュゲ、ジャスミンの優しさが重なった心地よい香りです。
<br> <br> 
春の訪れのような、ボタニカルの落ち着いた雰囲気が素敵を作り出します。 <br> 
仕事が忙しかった日や気分をリフレッシュしたい時に使ってみてください。 <br>  <br> 
デザイン性も高く、どんなお部屋にも馴染むシンプルなデザインになってます。 <br> 
大切な方や日頃お世話になっている方にギフトやプレゼントとして贈って見てはいかがでしょうか。 <br>  <br> 
日々の生活をさらに快適に、ディフューザーから香る華やかで品のある香りを楽しんでください。

<br> 
<br>

</div></div>";
    }

    public function getTemplateName()
    {
        return "__string_template__3f4700d002006c4ff1e45b87eac5ebc25256af7be00174eafcad06c555f85914";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__3f4700d002006c4ff1e45b87eac5ebc25256af7be00174eafcad06c555f85914", "");
    }
}
