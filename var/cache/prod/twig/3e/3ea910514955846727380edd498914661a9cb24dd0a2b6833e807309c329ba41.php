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

/* __string_template__add15d80ddfce2eefd5256c266918fadfe392c9d72ae3785e9e95e5b3d28c5d9 */
class __TwigTemplate_bcc9471ea30cfa7f95f90be037024aa268f120d6e0685e6985797952b9f97cfe extends \Eccube\Twig\Template
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
       　素材
    </div>
    <div class=\"product-description__contents\">
        陶器
    </div>
</div>
<br><br>


<div class=\"product-description\">
    <div class=\"product-description__title\">
       　サイズ
    </div>
    <div class=\"product-description__contents\">
        口径3×幅11×高さ10.5cm
    </div>
</div>
<br><br>

<div class=\"product-description\">
    <div class=\"product-description__title\">
        使用上の注意
    </div>
    <div class=\"product-description__contents\">
        <ul>
            <li>本品は食べ物、飲み物ではありません。</li>
            <li>商品は使用用途以外で使用しないでください。</li>
            <li>肌や衣服に付着しないようご注意ください。</li>
            <li>火気の近くで使用しないでください。</li>
            <li>高温多湿・直射日光を避け、乳児・ペットの手の届かない所に保管して使用してください。</li>
        </ul>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__add15d80ddfce2eefd5256c266918fadfe392c9d72ae3785e9e95e5b3d28c5d9";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__add15d80ddfce2eefd5256c266918fadfe392c9d72ae3785e9e95e5b3d28c5d9", "");
    }
}
