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

/* __string_template__e94cfc2ba6b072baf7517caef52c8274d567c3e9cc1ea80377bd6166f3e0fab1 */
class __TwigTemplate_5f93b07570c972ce5e201443eb116c2f25d76873d68cf187d3000ab875fe01f9 extends \Eccube\Twig\Template
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
Lien(リアン)のオールインワン美容液は、美容鍼灸の島優太先生（こもの鍼灸院院長）が監修されており、お肌に合う美容品が中々みつからない敏感肌の方に向けて作られました。<br>
そして、美容に時間をかけるのが難しい方のために、さっとお肌に浸透させればいいオールインワンにしました<br>
また、この美容液は毎日生まれ変わる大切なお肌を守るために、「保湿」、「肌荒れ予防」、「抗酸化作用」の３つのテーマがあります。<br>
<br>
１．保湿<br>
14種類の保湿成分が配合されています。<br>
その中でもセラミドが、角質層の水分を上げ乾燥を抑制し肌キメの向上を促します。<br>
<br>
２．肌荒れ予防<br>
α-グルカンオリゴカッサリドにより、お肌の菌環境やpHの値を整えることで皮膚全体の水分量の維持や回復に繋げ、肌荒れの予防となります。<br>
<br>
３．抗酸化作用<br>
ビタミンCの100倍の抗酸化力を備えるフラーレンにより、お肌の老化を防ぎハリの維持やシミなどの色素沈着の予防に働きます。<br>
<br>
 </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__e94cfc2ba6b072baf7517caef52c8274d567c3e9cc1ea80377bd6166f3e0fab1";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__e94cfc2ba6b072baf7517caef52c8274d567c3e9cc1ea80377bd6166f3e0fab1", "");
    }
}
