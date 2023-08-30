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

/* __string_template__b38dccf679942789abea3dde46f3e39b19fbd790d82a21e2493666acbbaff552 */
class __TwigTemplate_c4b627ed05dd5ef5e2b847088ca501a93d4515b69aaf1eab1c529e554a3f4de7 extends \Eccube\Twig\Template
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
        echo "有機農法由来のアロエベラエキスやオリーブエキスで、お肌に心地良い冷涼感と潤いを。";
    }

    public function getTemplateName()
    {
        return "__string_template__b38dccf679942789abea3dde46f3e39b19fbd790d82a21e2493666acbbaff552";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__b38dccf679942789abea3dde46f3e39b19fbd790d82a21e2493666acbbaff552", "");
    }
}
