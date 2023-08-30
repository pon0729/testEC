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

/* __string_template__1c86942ffb954dd9b9bd73f04cb038d12afa14b100113e5d7cd63a9f40ef8b8a */
class __TwigTemplate_d2f1a8124fc5b1a4c8c4a2f3e9d008cfde1b10703af611a1fb9eed2adc93f136 extends \Eccube\Twig\Template
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
        echo "一日中ナチュラルを楽しむ。<br> オーガニックのオイルで髪や肌を乾燥から守ります。";
    }

    public function getTemplateName()
    {
        return "__string_template__1c86942ffb954dd9b9bd73f04cb038d12afa14b100113e5d7cd63a9f40ef8b8a";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__1c86942ffb954dd9b9bd73f04cb038d12afa14b100113e5d7cd63a9f40ef8b8a", "");
    }
}
