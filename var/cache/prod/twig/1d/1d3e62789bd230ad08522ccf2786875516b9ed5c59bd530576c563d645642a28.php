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

/* __string_template__95c69c301e9452a4d3bb8f1af79ad253944b8c51d67a7b7d89c9a47477529a65 */
class __TwigTemplate_cd700a17821a57268cf150aefa3b05063e6a07e0d6eea7890ff0f603f130ee38 extends \Eccube\Twig\Template
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
上品な花のイラストと、上質なメッセージタグが毎年人気のフラワーシリーズ。
<br>
中身は風味豊かなプレーンバームクーヘンです。
<br>
 </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__95c69c301e9452a4d3bb8f1af79ad253944b8c51d67a7b7d89c9a47477529a65";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__95c69c301e9452a4d3bb8f1af79ad253944b8c51d67a7b7d89c9a47477529a65", "");
    }
}
