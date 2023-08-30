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

/* __string_template__5463a63d89fb9bd8b85f4f4e93e8b1484313145c6ab406893a8a67c542c815d0 */
class __TwigTemplate_e9c55b07f5f9d21af0cd5b7016ce1b9886ac8f3083a91c895e2347dfa99313d4 extends \Eccube\Twig\Template
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
        echo "1日1杯でやせやすい身体づくり。 <br>女性にうれしい酵素やビタミン配合でキレイをつくるサポートをします。";
    }

    public function getTemplateName()
    {
        return "__string_template__5463a63d89fb9bd8b85f4f4e93e8b1484313145c6ab406893a8a67c542c815d0";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__5463a63d89fb9bd8b85f4f4e93e8b1484313145c6ab406893a8a67c542c815d0", "");
    }
}
