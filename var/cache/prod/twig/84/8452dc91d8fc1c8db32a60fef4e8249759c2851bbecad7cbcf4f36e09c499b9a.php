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

/* __string_template__a47d35078013d6ee5a9fbd00bcb3861e3d377686f1dd8e61eec2f14f4b9c47c4 */
class __TwigTemplate_8e605ee47c726da3ca9c1a8c0d07d3fd47cbedd452d5ebc31286713bc9bc99fe extends \Eccube\Twig\Template
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
        内容量
    </div>
    <div class=\"product-description__contents\">
1個    
<br>
    </div>
</div>
<br><br>
<div class=\"product-description\">
    <div class=\"product-description__title\">
        重さ
    </div>
    <div class=\"product-description__contents\">
33.5g
   </div>
</div>
<br><br>
<div class=\"product-description\">
    <div class=\"product-description__title\">
        サイズ
    </div>
    <div class=\"product-description__contents\">
28cm（縦:16cm,横:11cm,高さ:1cm,）
   </div>
</div>
<br><br>
<div class=\"product-description\">
    <div class=\"product-description__title\">
        原材料
    </div>
    <div class=\"product-description__contents\">
鶏卵（国内産）、小麦粉、砂糖、水飴、ショートニング、マーガリン、コーンスターチ／ソルビトール、膨張剤、乳化剤、pH調整剤、香料、酸化防止剤（V.E）、着色料（カロテン）、（一部に卵・小麦・大豆を含む）
    </div>
</div>
<br><br>

<div class=\"product-description\">
    <div class=\"product-description__title\">
       使用上の注意
    </div>
    <div class=\"product-description__contents\">
        <ul>
  <li>直射日光や高温多湿を避けた常温の場所に保管してください。</li>
  <li>開封後は出来るだけ早めにお召し上がりください。</li>
  <li>特に紅茶は匂いを吸着しやすいので、匂いの強い物の傍には置かないで下さい。</li>
         </ul>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__a47d35078013d6ee5a9fbd00bcb3861e3d377686f1dd8e61eec2f14f4b9c47c4";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__a47d35078013d6ee5a9fbd00bcb3861e3d377686f1dd8e61eec2f14f4b9c47c4", "");
    }
}
