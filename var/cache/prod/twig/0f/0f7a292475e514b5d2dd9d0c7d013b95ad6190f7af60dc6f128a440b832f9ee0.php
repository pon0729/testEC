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

/* __string_template__5660399b48d3da400097b0c335a6ffc23fd037dfabf427d9bf65e50cea6c9583 */
class __TwigTemplate_783d8c2ac83fb7390fe600e8639925d08e2c2efbfc8ee0b1cac64e082dfa6cad extends \Eccube\Twig\Template
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
        echo "あざやかな水彩で描かれた桜のパッケージに包まれた、紅茶とクッキーのギフトセットです。<br>";
    }

    public function getTemplateName()
    {
        return "__string_template__5660399b48d3da400097b0c335a6ffc23fd037dfabf427d9bf65e50cea6c9583";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__5660399b48d3da400097b0c335a6ffc23fd037dfabf427d9bf65e50cea6c9583", "");
    }
}
