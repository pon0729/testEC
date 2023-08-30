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

/* __string_template__7fa1304b9d628ddab36461a94e258ba32c89a6b2d38c08be36ff1382e21ce18b */
class __TwigTemplate_c2eab15908cc539230793a9be0655f3755d690e993e593df09a4bd038e7bcbe0 extends \Eccube\Twig\Template
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
        echo "ありがとうの気持ちを美味しい紅茶に込めました。ひと目で気持ちが伝わる可愛らしいプチギフトです。";
    }

    public function getTemplateName()
    {
        return "__string_template__7fa1304b9d628ddab36461a94e258ba32c89a6b2d38c08be36ff1382e21ce18b";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__7fa1304b9d628ddab36461a94e258ba32c89a6b2d38c08be36ff1382e21ce18b", "");
    }
}
