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

/* __string_template__6edb0ec4c3ee556256ad9c5f5c2f5deed6e99bad67dc856fef3df063c1ac0165 */
class __TwigTemplate_f306b4ad3f231d8935d0610da8e897171193ab01776fdf6a94d120a65b2f37fe extends \Eccube\Twig\Template
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
        echo "日頃お世話になっている方に。普段使い用のタンブラーとタオルのギフトセット。";
    }

    public function getTemplateName()
    {
        return "__string_template__6edb0ec4c3ee556256ad9c5f5c2f5deed6e99bad67dc856fef3df063c1ac0165";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__6edb0ec4c3ee556256ad9c5f5c2f5deed6e99bad67dc856fef3df063c1ac0165", "");
    }
}
