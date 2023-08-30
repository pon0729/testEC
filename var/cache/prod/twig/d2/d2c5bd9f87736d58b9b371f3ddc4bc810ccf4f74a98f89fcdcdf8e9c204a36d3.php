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

/* __string_template__daf3293caaafd7fefb6e5cfa63202007dbbbf31999eda79c5d4202a8ec79999a */
class __TwigTemplate_e02603120f4c123ae695cb616b447aca073741902e8afc4f34314b77ab469fc5 extends \Eccube\Twig\Template
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
中身はチョコレートの風味豊かなバームクーヘンです。
<br>
 </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__daf3293caaafd7fefb6e5cfa63202007dbbbf31999eda79c5d4202a8ec79999a";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__daf3293caaafd7fefb6e5cfa63202007dbbbf31999eda79c5d4202a8ec79999a", "");
    }
}
