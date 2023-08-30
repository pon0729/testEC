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

/* __string_template__4708c578b3428746be3aecbd24cfead616f26037d8f47d1570f3ac102421e6ca */
class __TwigTemplate_769bb9e0fea483b1d0da697beb849889fe11b5322ac56e992c2dfcddddb03917 extends \Eccube\Twig\Template
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
        echo "化粧水と同じく水へのこだわり。<br> 肌への潤いを考えた植物本来の香りを楽しめるボディソープ。";
    }

    public function getTemplateName()
    {
        return "__string_template__4708c578b3428746be3aecbd24cfead616f26037d8f47d1570f3ac102421e6ca";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__4708c578b3428746be3aecbd24cfead616f26037d8f47d1570f3ac102421e6ca", "");
    }
}
