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

/* __string_template__6dcbbed4100723e0089b7a99cfd375ec68f0b36e411c35a7a6b11c9422831948 */
class __TwigTemplate_40950ae3b0158fc91eb2251218a0a40c719e4d383ad0f80ddcbfac4ed3b95d8b extends \Eccube\Twig\Template
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
        echo "見た目も香りも味も、フルーツをそのまま楽しめるティートはいかがですか。<br>アイスクリームやヨーグルトと一緒に、食べられるフルーツティーのギフトです。<br>";
    }

    public function getTemplateName()
    {
        return "__string_template__6dcbbed4100723e0089b7a99cfd375ec68f0b36e411c35a7a6b11c9422831948";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__6dcbbed4100723e0089b7a99cfd375ec68f0b36e411c35a7a6b11c9422831948", "");
    }
}
