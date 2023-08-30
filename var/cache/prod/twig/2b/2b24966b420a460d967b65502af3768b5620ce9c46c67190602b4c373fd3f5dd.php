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

/* __string_template__193cc445e92d9a79e1bd47145369524d1f84f670114e4a8d46481a4f25d08979 */
class __TwigTemplate_cb813968a2aa3a6190b1a2a284aa127a0a705788ee58202629fd447fb2e52efd extends \Eccube\Twig\Template
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
        配合成分
    </div>
    <div class=\"product-description__contents\">
ルイボス(南アフリカ共和国産)・ローズレッド・有機マリーゴールド・コーンフラワー香料
    </div>
</div>
<br>
<div class=\"product-description\">
    <div class=\"product-description__title\">
        量
    </div>
    <div class=\"product-description__contents\">
20g(内容量/2.5g 8個)
    </div>
</div>

<br>
<div class=\"product-description\">
    <div class=\"product-description__title\">
        使用方法
    </div>
    <div class=\"product-description__contents\">
ティーバッグを入れたカップに熱湯を注ぎ、3～4分程蒸らしてからお召し上がりください。<br>
    </div>
</div>

<br>
<div class=\"product-description\">
    <div class=\"product-description__title\">
        サイズ
    </div>
    <div class=\"product-description__contents\">
W10.5×H17×D4.5cm
    </div>
</div>
<br>
<div class=\"product-description\">
    <div class=\"product-description__title\">
        ご使用上の注意
    </div>
    <div class=\"product-description__contents\">
        <ul>
<li>直射日光、高温多湿を避けて保存してください</li>
<li>開封後はお早めにお召し上がりください</li>
        </ul>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__193cc445e92d9a79e1bd47145369524d1f84f670114e4a8d46481a4f25d08979";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__193cc445e92d9a79e1bd47145369524d1f84f670114e4a8d46481a4f25d08979", "");
    }
}
