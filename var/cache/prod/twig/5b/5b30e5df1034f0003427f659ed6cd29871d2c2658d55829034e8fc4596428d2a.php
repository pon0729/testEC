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

/* __string_template__cbde7e5b9d02c0bee7fd8ea9bbab872d93975d96e10c61d06c329b34d8e53200 */
class __TwigTemplate_a812d2bd88aad8db947bac7d5507568c8a44e83ac98098c11e745e0eebde73cf extends \Eccube\Twig\Template
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
        echo "伝統的なマルセイユソープの洗濯用洗剤で、肌にも衣類にも優しく。より丁寧な暮らしを助けるアイテムです。繊細な衣類の手洗いにおすすめです。";
    }

    public function getTemplateName()
    {
        return "__string_template__cbde7e5b9d02c0bee7fd8ea9bbab872d93975d96e10c61d06c329b34d8e53200";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__cbde7e5b9d02c0bee7fd8ea9bbab872d93975d96e10c61d06c329b34d8e53200", "");
    }
}
