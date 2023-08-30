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

/* __string_template__b26cd996f741442875176e2d096f4c7d133647fa881afb9eb53bfa1549b51562 */
class __TwigTemplate_c1c81649fa82b29a32d55f58b25b3851009921b8b69bab2df2b5f6533affdedc extends \Eccube\Twig\Template
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
日本人の女性調香師によって作られた本格的なミモザの香りが楽しめるハンド&ボディークリームです。<br>
塗った瞬間に豊潤な香りが広がります。<br>
アルガンオイルとシアバターをたっぷり使った保湿力の高いクリームですので、全身のケアにおすすめです。<br>
ほのかな柑橘から上品なフローラルノートへと変化し、奥深い甘さの余韻が広がります。<br>
ミモザの花言葉は感謝・思いやり・真実の愛。<br>
やわらかな香りに包まれながら、心に大切な人を思い浮かべてみてください。<br>
<br>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__b26cd996f741442875176e2d096f4c7d133647fa881afb9eb53bfa1549b51562";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__b26cd996f741442875176e2d096f4c7d133647fa881afb9eb53bfa1549b51562", "");
    }
}
