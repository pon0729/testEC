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

/* __string_template__da3b4c34f244d09df743d09a46bacfedb4765a62ea8bab1d87d574bffda9c0a5 */
class __TwigTemplate_b408c7554f2d91b786ab7e1103e273bc236b7f0218e98ea32acb99645e8024e1 extends \Eccube\Twig\Template
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

美味しいクッキーと桜の香りをつけた緑茶のギフトセットです。<br>
<br>
キレイな桜が描かれたパッケージと可愛いリボンでラッピングしました。<br>
<br>
“Thank you”のメッセージ付きで、プチギフトにぴったりです。<br>
<br>
 </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__da3b4c34f244d09df743d09a46bacfedb4765a62ea8bab1d87d574bffda9c0a5";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__da3b4c34f244d09df743d09a46bacfedb4765a62ea8bab1d87d574bffda9c0a5", "");
    }
}
