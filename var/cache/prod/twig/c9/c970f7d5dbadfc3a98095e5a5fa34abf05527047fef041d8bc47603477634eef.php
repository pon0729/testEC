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

/* __string_template__87215c4fe94d14ca8c1f6b8befdba56e5aaffa70cf784eaa072c580783252e2c */
class __TwigTemplate_af0548c9e8a8b220fc788ac37cddbb5af75dc7783347622422b9955e86e0a65b extends \Eccube\Twig\Template
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

身体に優しいオーガニックカフェインレスコーヒーです。<br>
煎りたて、挽きたてを独自の技法で密閉してるので、フレッシュな薫りとコクを提供します。<br>
豆はコーヒー発祥の地・エチオピアから届いた有機栽培コーヒー「モカ・シダモ」です。<br>
甘い薫りと、独特の酸味、まろやかなコクがあり、柑橘を思わせる上品なフレーバーが特徴的です。<br>
<br>
 </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__87215c4fe94d14ca8c1f6b8befdba56e5aaffa70cf784eaa072c580783252e2c";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__87215c4fe94d14ca8c1f6b8befdba56e5aaffa70cf784eaa072c580783252e2c", "");
    }
}
