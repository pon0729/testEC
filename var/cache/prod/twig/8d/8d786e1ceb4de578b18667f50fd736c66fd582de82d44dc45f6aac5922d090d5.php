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

/* __string_template__6d8419a7515e7e718c76a9cd76b706fc6b2eb03804b77fa106ddb258e544cf38 */
class __TwigTemplate_a57a29c49d8d8f62682c11c544b20d9ca9b14caf6fcb4d5809a73f52efbd1a47 extends \Eccube\Twig\Template
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
        echo "手先だけでなく全身の肌に使えるボディーソープです。<br> 4つのこだわりで、ご家族みなさんの大切なお肌を優しくキレイに保湿します。";
    }

    public function getTemplateName()
    {
        return "__string_template__6d8419a7515e7e718c76a9cd76b706fc6b2eb03804b77fa106ddb258e544cf38";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__6d8419a7515e7e718c76a9cd76b706fc6b2eb03804b77fa106ddb258e544cf38", "");
    }
}
