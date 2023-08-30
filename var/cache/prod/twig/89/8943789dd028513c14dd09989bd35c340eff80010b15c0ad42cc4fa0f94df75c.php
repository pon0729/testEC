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

/* __string_template__b66aa61c0b468b5aed8f929df97d15a5a1fec98d23881b09b87d4bdcca9a2600 */
class __TwigTemplate_31aeb28a7295e84d3f004d53ee92568fd3ed7e6313370fd5a990c9e0223c18bc extends \Eccube\Twig\Template
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
        echo "ベルトカバーと胸当てでセットになったベビーギフトです。";
    }

    public function getTemplateName()
    {
        return "__string_template__b66aa61c0b468b5aed8f929df97d15a5a1fec98d23881b09b87d4bdcca9a2600";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__b66aa61c0b468b5aed8f929df97d15a5a1fec98d23881b09b87d4bdcca9a2600", "");
    }
}
