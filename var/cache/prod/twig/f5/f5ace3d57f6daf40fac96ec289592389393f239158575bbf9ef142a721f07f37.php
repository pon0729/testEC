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

/* __string_template__198f0a5a023ab734325d7444a788a650e52c6375e3be7f1f369bb2fb77d281fe */
class __TwigTemplate_496ec6b1023f2714fceca8f56a2e0dceaf628d876d78b52ff8767c21f2e17997 extends \Eccube\Twig\Template
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
        echo "すっきりとした甘さのシャインマスカットをブレンドした<br>食べられる紅茶。<br> 白ぶどうの爽やかな香りや味を存分に味わえる一品です。";
    }

    public function getTemplateName()
    {
        return "__string_template__198f0a5a023ab734325d7444a788a650e52c6375e3be7f1f369bb2fb77d281fe";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__198f0a5a023ab734325d7444a788a650e52c6375e3be7f1f369bb2fb77d281fe", "");
    }
}
