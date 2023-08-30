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

/* __string_template__4ee370c5cd432df4b0b83521fb82ab1aa8c5de1cd2dca0cc52e3b495a7f8dc3e */
class __TwigTemplate_fab8716eb28bca87574690c6c79b0fd923fe053d65f94b54ccc94caf6629ad7a extends \Eccube\Twig\Template
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
        ブランドのこだわり
    </div>
    <div class=\"product-description__contents\">
        自然の恵みを存分に受けたティートリコのウェルネスティーは、健康と美をサポートしてくれます。
日々の生活に取り入れていただけるように飲みやすくアレンジしたブレンドは、メンタルケアにも役立ちます。
    </div>
</div>
<div class=\"product-description\">
    <div class=\"product-description__title\">
        商品のこだわり
    </div>
    <div class=\"product-description__contents\">
        南アフリカの大地でしか育たないルイボス。その中でも「ルイボスレッド」と言われる深い色と雑味のない上品な風味のトップグレードです。
    </div>
</div>
<div class=\"product-description\">
    <div class=\"product-description__title\">
        おすすめポイント
    </div>
    <div class=\"product-description__contents\">
        日々頑張るあなたに。健康と美のサポートにおすすめの紅茶です。素敵な香りで、一息いかがでしょうか。
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__4ee370c5cd432df4b0b83521fb82ab1aa8c5de1cd2dca0cc52e3b495a7f8dc3e";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__4ee370c5cd432df4b0b83521fb82ab1aa8c5de1cd2dca0cc52e3b495a7f8dc3e", "");
    }
}
