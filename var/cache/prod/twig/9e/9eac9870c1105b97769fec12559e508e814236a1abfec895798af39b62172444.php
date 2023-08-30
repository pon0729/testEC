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

/* __string_template__ecaa4090df836d10aa80f914d7e5bcf8feb5dad715e4256448f891c1feabca7b */
class __TwigTemplate_dfc358a64f5580a253acfdd1131e4038e75b0857f2be156b91d558c30ddb8fa5 extends \Eccube\Twig\Template
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
タンブラー(容量=約350ml)、蓋・ウォッシュタオル各1
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
        return "__string_template__ecaa4090df836d10aa80f914d7e5bcf8feb5dad715e4256448f891c1feabca7b";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__ecaa4090df836d10aa80f914d7e5bcf8feb5dad715e4256448f891c1feabca7b", "");
    }
}
