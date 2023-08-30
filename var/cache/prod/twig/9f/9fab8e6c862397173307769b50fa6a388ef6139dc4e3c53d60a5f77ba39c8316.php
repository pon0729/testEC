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

/* __string_template__53b6dcae3d891bdad1db33f200718417acdcc28e329ecd9221d0c43b43eea761 */
class __TwigTemplate_ebac0ad130bb7984a506c794649f898c2fd20bee8d10d3adae80273bbd6eabce extends \Eccube\Twig\Template
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
        echo "いつもの食事の前に。簡単ダイエットで理想のボディへ。同時にお口を爽やかに維持できます。";
    }

    public function getTemplateName()
    {
        return "__string_template__53b6dcae3d891bdad1db33f200718417acdcc28e329ecd9221d0c43b43eea761";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__53b6dcae3d891bdad1db33f200718417acdcc28e329ecd9221d0c43b43eea761", "");
    }
}
