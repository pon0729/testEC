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

/* __string_template__3df80bd7d8af39417bd077cd8a16760422294383d027b798ccf560ded28799b3 */
class __TwigTemplate_e57a582fad11974845bb45e0a88e660253b9b9f76a54c65b9145c643a403cb11 extends \Eccube\Twig\Template
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

ステンレスボトルと今治タオルのギフトセットです。<br>
普段から使いやすいステンレスボトルと綿100%の今治タオル。<br>
日頃お世話になってる方への感謝の気持ちを込めたプレゼントになります。
<br>
<br>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__3df80bd7d8af39417bd077cd8a16760422294383d027b798ccf560ded28799b3";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__3df80bd7d8af39417bd077cd8a16760422294383d027b798ccf560ded28799b3", "");
    }
}
