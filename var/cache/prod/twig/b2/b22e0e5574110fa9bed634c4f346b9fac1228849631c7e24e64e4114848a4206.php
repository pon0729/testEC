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

/* __string_template__2d75d75b84c72625e20385b39561d33daea2e09a36ab1b5c43b6f65ea5e09921 */
class __TwigTemplate_4fd3c118692100207b2a942b76afe836e48642ecb69e5ce7e27ceefaa47b971f extends \Eccube\Twig\Template
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

Aenakのガーゼセットは、赤ちゃんのデリケートなお肌に優しい綿100%の汗とりパッドとおくるみのセットです。<br>
汗とりパッドは背中に天使の羽根が生えたようなデザインになっていて、とても可愛らしくなっています。<br>
<br>
 </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__2d75d75b84c72625e20385b39561d33daea2e09a36ab1b5c43b6f65ea5e09921";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__2d75d75b84c72625e20385b39561d33daea2e09a36ab1b5c43b6f65ea5e09921", "");
    }
}
