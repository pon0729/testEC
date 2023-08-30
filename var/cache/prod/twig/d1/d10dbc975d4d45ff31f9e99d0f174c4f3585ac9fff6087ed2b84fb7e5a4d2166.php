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

/* __string_template__bc8d4fde3155ffd7b44f17d01f4e8b36913b32e30b7081033b4eea298d8c1c5d */
class __TwigTemplate_0dcc7b26a8c607bb94aa93f4748ea7c21ee9def8e2228504f666f45147ea0802 extends \Eccube\Twig\Template
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
上品な花のイラストと、上質なメッセージタグが毎年人気のフラワーシリーズ。
<br>
中身はいちごの王様「あまおう」の風味豊かなバームクーヘンです。
<br>
 </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__bc8d4fde3155ffd7b44f17d01f4e8b36913b32e30b7081033b4eea298d8c1c5d";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__bc8d4fde3155ffd7b44f17d01f4e8b36913b32e30b7081033b4eea298d8c1c5d", "");
    }
}
