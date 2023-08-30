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

/* __string_template__dc5939064f1c6f2a57ffbf6806d2e0fb19da86dbc574a37deae44ab8af60d54f */
class __TwigTemplate_e1ded71570c7b6192efca6261d403078794050f8a042d1788bcf3349443e4404 extends \Eccube\Twig\Template
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
爽やかな甘みのあるフローラルフルーティなすみれの香り。<br>
可憐で清楚な、少し甘く愛らしいすみれの香りで「ちいさな幸せ」をあなたにお届けします。<br>
お肌に密着するスクラブが古くなった角質を取り除きすべすべのなめらかな肌へ導きます。<br>
シアバターのうるおいベールが乾燥からお肌を守ります。
<br>

    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__dc5939064f1c6f2a57ffbf6806d2e0fb19da86dbc574a37deae44ab8af60d54f";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__dc5939064f1c6f2a57ffbf6806d2e0fb19da86dbc574a37deae44ab8af60d54f", "");
    }
}
