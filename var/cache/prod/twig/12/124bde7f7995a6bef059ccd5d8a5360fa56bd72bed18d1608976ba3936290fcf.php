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

/* __string_template__b71eef050a223a1aae8e6b06c0b64f170f6ae21c008cd66d158bb8d2de390d5f */
class __TwigTemplate_076354d2b91ab878aca63393c9058f60f0640510773a9c6653c41e25d016805c extends \Eccube\Twig\Template
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
        echo "手先だけでなく全身の肌に使える保湿クリームです。<br>4つのこだわりで、ご家族みなさんの大切なお肌を優しく保湿します。";
    }

    public function getTemplateName()
    {
        return "__string_template__b71eef050a223a1aae8e6b06c0b64f170f6ae21c008cd66d158bb8d2de390d5f";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__b71eef050a223a1aae8e6b06c0b64f170f6ae21c008cd66d158bb8d2de390d5f", "");
    }
}
