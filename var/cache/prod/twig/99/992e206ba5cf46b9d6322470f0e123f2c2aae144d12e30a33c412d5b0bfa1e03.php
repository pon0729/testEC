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

/* __string_template__090022a81bf687febe5cc2243467c095b258870c6080cb9a80d25d48ce5c42cb */
class __TwigTemplate_4fc4eb0208f35115b1b86f9b861eb0b9f64cc9cc1653f99ef69d300258869538 extends \Eccube\Twig\Template
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
鶏卵（国内産）、小麦粉、砂糖、水飴、ショートニング、マーガリン、コーンスターチ、イチゴピューレ（博多あまおう、ブドウ糖）／ソルビトール、膨張剤、着色料（ラック、カロテン、紅麹）、乳化剤、香料、酸化防止剤（V.E）、増粘剤、酸味料、pH調整剤、（一部に卵・小麦・大豆・りんごを含む）

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
        return "__string_template__090022a81bf687febe5cc2243467c095b258870c6080cb9a80d25d48ce5c42cb";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__090022a81bf687febe5cc2243467c095b258870c6080cb9a80d25d48ce5c42cb", "");
    }
}
