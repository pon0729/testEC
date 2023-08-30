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

/* __string_template__4b03dabf4a42c8031263355a2aa635c6e9db1a952cb9ee30a5331eaf709b9210 */
class __TwigTemplate_698c3bec65437b8750945304e6806a18bbed32972ed3ba86feb64186ba0e929f extends \Eccube\Twig\Template
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

北欧・スウェーデン生まれの歯ブラシブランドTHE HUMBLE CO.(ザハンブルコー)からまるでキャンディーのようなPOPなパッケージのデンタルフロスです。<br>
ゼラチンやPFCは使用されておらず、天然のキャンデリラワックスをコーティングしており、なめらかな使い心地はフロス初心者にオススメのアイテムです。<br>
<br>
 </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__4b03dabf4a42c8031263355a2aa635c6e9db1a952cb9ee30a5331eaf709b9210";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__4b03dabf4a42c8031263355a2aa635c6e9db1a952cb9ee30a5331eaf709b9210", "");
    }
}
