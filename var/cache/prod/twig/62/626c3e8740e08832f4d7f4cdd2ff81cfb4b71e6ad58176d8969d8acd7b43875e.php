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

/* __string_template__55b98982a3b7a65b4cd0be50ff3707d392609fdf2d0e6eb980edb060cb5f305b */
class __TwigTemplate_2ff7765c36b45f3fc1eb606ae0ff693bd133b674b587091fafe605b23a614e9d extends \Eccube\Twig\Template
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
        商品詳細
    </div>
    <div class=\"product-description__contents\">
     
cotoha：coffeeのカフェインレスコーヒーは、ブラジル公認のコーヒー鑑定士が品質管理を行うエチオピア豆100％を使用しています。<br>
また、カフェインを抽出する際、薬品などを使用しない、ウォータープロセスを採用しています。<br>
そのため、より一層、身体への負担がありません。<br>
妊娠中・子育て中のママでしたり、爽やかな朝や夜お休み前のひとときに一息ついたりする方にもオススメです。<br>
<br>
<br>
    </div>
</div>
<br><br>


<div class=\"product-description\">
    <div class=\"product-description__title\">
        内容量
    </div>
    <div class=\"product-description__contents\">
        10g（1パック当たり）<br>
    </div>
</div>
<br><br>
<div class=\"product-description\">
    <div class=\"product-description__title\">
        原材料
    </div>
    <div class=\"product-description__contents\">
有機コーヒー豆（生豆生産国/エチオピア）<br>
<br>

    </div>
</div>
<br><br>

<div class=\"product-description\">
    <div class=\"product-description__title\">
       使用上の注意
    </div>
    <div class=\"product-description__contents\">
        <ul>
  <li>開封後はできるだけ早く使用してください</li>
  <li>高温多湿な場所を避け涼しいところで保存してください</li>
  <li>賞味期限：製造より1年（商品裏面に記載）</li>
         </ul>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__55b98982a3b7a65b4cd0be50ff3707d392609fdf2d0e6eb980edb060cb5f305b";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__55b98982a3b7a65b4cd0be50ff3707d392609fdf2d0e6eb980edb060cb5f305b", "");
    }
}
