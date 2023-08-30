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

/* __string_template__06308e2469302f2156fc2a3751acb1d732f796286e0c760454eb886a3dec3f5a */
class __TwigTemplate_2272df5b5c91ef454c998b6dbf659b15a736e112e2c914f68d56e32fc34ff29c extends \Eccube\Twig\Template
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

Aenakのサッキングパッドセットは、ベルトカバーと胸当てがセットになったベビーギフトです。<br>
赤ちゃんに優しいやわらかパイル生地を使用しています。<br>
吸水性がよくよだれや汗をキャッチし、抱っこひもに、ベビーカーにお使いいただけます。<br>
<br>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__06308e2469302f2156fc2a3751acb1d732f796286e0c760454eb886a3dec3f5a";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__06308e2469302f2156fc2a3751acb1d732f796286e0c760454eb886a3dec3f5a", "");
    }
}
