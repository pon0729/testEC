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

/* __string_template__8cd28c2f091a0e78ad0c8bf87301266965f8b32b137f3abccdeec18965d5a79b */
class __TwigTemplate_d3efdbcbb8bf8618098ee8d2ae2f1ebb557f35c2dbda8bcf069d9085ae228b5c extends \Eccube\Twig\Template
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
        純植物性こんにゃく澱粉という食用こんにゃく粉で作られたボディタオルです。<br>
極細繊維が水の膜をつくり、肌に優しく洗うことが出来ます。<br>
明治20年から130年続く伝統製法を5代に渡って守り抜いた日本の伝統品です。<br>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__8cd28c2f091a0e78ad0c8bf87301266965f8b32b137f3abccdeec18965d5a79b";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__8cd28c2f091a0e78ad0c8bf87301266965f8b32b137f3abccdeec18965d5a79b", "");
    }
}
