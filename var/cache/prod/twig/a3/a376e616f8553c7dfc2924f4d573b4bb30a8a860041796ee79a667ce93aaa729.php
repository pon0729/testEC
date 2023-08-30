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

/* __string_template__94f9ca487f9c6a6f5f19a2fd6223606e80c85a93e2cf867b0122d25299096240 */
class __TwigTemplate_6779e6baf77edb144fe0592b34f3f2b0e4634855c004064e28d5b87a04a5598d extends \Eccube\Twig\Template
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

Aenakのおめかしセットは、ヘッドドレス、スタイ、ボトムスがセットになったベビーギフトです。<br>
フリーサイズのため、6ヶ月〜2歳頃まで長く使用できます。<br>
肌触りの良い綿100%のボトムスや、かわいらしいパターンメッシュ素材に品のあるサテン生地のリボンをあしらったスタイなど可愛らしさと触り心地の良さにこだわった商品です。<br>
<br>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__94f9ca487f9c6a6f5f19a2fd6223606e80c85a93e2cf867b0122d25299096240";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__94f9ca487f9c6a6f5f19a2fd6223606e80c85a93e2cf867b0122d25299096240", "");
    }
}
