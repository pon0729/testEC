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

/* __string_template__b85b426848ba7b84fede53ea6183712262939b503a6e7283b028d381437e7cf3 */
class __TwigTemplate_948476b44aa6a5b8bc4aae3ab38aa783cea53b8ff6bc2b3c316634bcb731f52f extends \Eccube\Twig\Template
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

ナチュールの今治ウォッシュタオル5枚セットです。<br>
スッと取り出しサッと使える！お手軽コンパクトサイズになつています。<br>
<br>
 </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__b85b426848ba7b84fede53ea6183712262939b503a6e7283b028d381437e7cf3";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__b85b426848ba7b84fede53ea6183712262939b503a6e7283b028d381437e7cf3", "");
    }
}
