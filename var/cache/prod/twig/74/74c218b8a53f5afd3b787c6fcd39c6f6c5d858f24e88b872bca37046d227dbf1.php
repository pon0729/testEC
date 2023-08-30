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

/* __string_template__5521469aff37fdfe99b2a6cb7fc960122b21badf76c6c4995466cba048e61613 */
class __TwigTemplate_f510d98011cf2bf2144a2af81951042e0075a16723b8225958294b47a945b454 extends \Eccube\Twig\Template
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
        echo "いつまでも健康に元気でいてほしい。<br>あなたの大切な人に、すてきな贈り物はいかがですか。";
    }

    public function getTemplateName()
    {
        return "__string_template__5521469aff37fdfe99b2a6cb7fc960122b21badf76c6c4995466cba048e61613";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__5521469aff37fdfe99b2a6cb7fc960122b21badf76c6c4995466cba048e61613", "");
    }
}
