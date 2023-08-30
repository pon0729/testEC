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

/* __string_template__a188a7ba3f90b580f116d3d195e6090fb18b125b098c44a6266acb04c416df7e */
class __TwigTemplate_6437b61285684686686430ad7f6a281bb65b7b9b90d67be11e8c0f4f1daaa915 extends \Eccube\Twig\Template
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
    こんな方におすすめ<br>
外食や偏食が多い方<br>
野菜不足が気になる方<br>
油っこい食事が好きな方<br>
インナー美人を目指したい方<br>
理想のボディラインを目指している方<br>
<br>
身体の内側から健やかで美しい毎日を過ごしたい方に。<br>
食物繊維をはじめ、ビタミン、ミネラルなどの栄養素を豊富に含む国産大麦若葉をベースとした「 グリーン」と、脂質や糖質の取りすぎが気になる方をサポートする、キトサン、白インゲン豆抽出物を含む「 チュアブリーズ」のインナーケアに特化したセットです。<br>
身体のベースをつくる栄養素はより良いものを摂り、余分なカロリーはしっかりカット。<br>
賢く美しい身体づくりを目指す方におすすめです。<br><br>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__a188a7ba3f90b580f116d3d195e6090fb18b125b098c44a6266acb04c416df7e";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__a188a7ba3f90b580f116d3d195e6090fb18b125b098c44a6266acb04c416df7e", "");
    }
}
