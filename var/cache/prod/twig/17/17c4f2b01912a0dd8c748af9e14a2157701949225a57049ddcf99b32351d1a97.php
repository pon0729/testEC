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

/* __string_template__46ac1c24413eb346c9a03b3865c51d0508c8c4a3c37aae0440f9d934790182ce */
class __TwigTemplate_d6113d66177c85853bdd99611c7e114287effa9342c7fef0df8cb5f75385df9b extends \Eccube\Twig\Template
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
 日常生活にアロマを取り入れていますか？<br>
アロマの香りは様々あり、その種類によってシャキッとするものや、リラックスできるものなどがあります。<br>
日常のシーンによって使い分けることで、感情のコントロールに役立ちます。<br>

<br>

こちらのnight(ナイト)は、真正ラベンダーとスイートオレンジのエッセンシャルオイルを2：1の割合でブレンドしました。<br>
気持ちをやわらげ安眠へと導いてくれる香りです。<br>

<br>

就寝前に手首にひと塗り、心地よい香りに包まれて心身ともにリラックスします。<br>

<br>

使いやすいロールオンタイプなので、香りをいつでもどこでも気軽にお楽しみいただけます。<br>
ポーチに入れて、旅行など持ち運びにも便利。<br>
毎日の癒しにぜひ取り入れてみてください。<br>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__46ac1c24413eb346c9a03b3865c51d0508c8c4a3c37aae0440f9d934790182ce";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__46ac1c24413eb346c9a03b3865c51d0508c8c4a3c37aae0440f9d934790182ce", "");
    }
}
