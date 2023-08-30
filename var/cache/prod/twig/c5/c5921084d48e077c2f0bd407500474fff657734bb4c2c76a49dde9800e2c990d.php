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

/* __string_template__41d119c6fe13471c32e2c5b9221d7eaabcf2a413e72e194ebba149020272c5fc */
class __TwigTemplate_1b524a298183fc5e862c85f4aee4d21c73d67fe23a5fb14310aa0bf543c9b533 extends \Eccube\Twig\Template
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

Aenakのおめかしセットは、ヘッドドレス、スタイ、ボトムスがセットになったベビーギフトセットです。<br>
フリーサイズのため、6ヶ月〜2歳頃まで長く使用できます。<br>
肌触りの良い綿100%のボトムスや、かわいらしいパターンメッシュ素材に品のあるサテン生地のリボンをあしらったスタイなど可愛らしさと触り心地の良さにこだわった商品です。<br>
<br>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__41d119c6fe13471c32e2c5b9221d7eaabcf2a413e72e194ebba149020272c5fc";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__41d119c6fe13471c32e2c5b9221d7eaabcf2a413e72e194ebba149020272c5fc", "");
    }
}
