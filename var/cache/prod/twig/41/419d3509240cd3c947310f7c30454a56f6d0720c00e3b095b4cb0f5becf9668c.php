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

/* __string_template__e95c79dc65e2071f5d413ea8d7b48df4450831490b6cb65c60bb4c44cbb3ccc8 */
class __TwigTemplate_a034959617070eec89d089692524edd778a44cc4dacd66957b4bfb4cb4a136cf extends \Eccube\Twig\Template
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
        セット内容
    </div>
    <div class=\"product-description__contents\">
タンブラー(容量=約400ml)、蓋・ウォッシュタオル各1
    </div>
</div>
<br><br>
<div class=\"product-description\">
    <div class=\"product-description__title\">
        材質
    </div>
    <div class=\"product-description__contents\">
タンブラー=ステンレス・蓋=ポリプロピレン・TPE・シリコン、ウォッシュタオル=綿100%
div>
</div>
<br><br>
<div class=\"product-description\">
    <div class=\"product-description__title\">
        原産国
    </div>
    <div class=\"product-description__contents\">
タンブラー＝中国製・タオル＝日本製<br>

    </div>
</div>
<br><br>



<div class=\"product-description\">
    <div class=\"product-description__title\">
       使用上の注意
    </div>
    <div class=\"product-description__contents\">
        <ul>
<li>メーカー都合により予告なく商品のデザイン・内容が変更になる場合がございます。</li>
        </ul>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__e95c79dc65e2071f5d413ea8d7b48df4450831490b6cb65c60bb4c44cbb3ccc8";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__e95c79dc65e2071f5d413ea8d7b48df4450831490b6cb65c60bb4c44cbb3ccc8", "");
    }
}
