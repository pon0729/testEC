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

/* __string_template__096b3d4de8cf64c5d789b8687ccb9db39f3fa393757594391919fccabdfd37a2 */
class __TwigTemplate_abd8c65dd7b7fae332efa96fa89d9251294205e5bd9ee443f898885353174a8a extends \Eccube\Twig\Template
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
        echo "近年健康食品で注目されているマヌカハニー。 使いやすい個包装で日々の栄養補給におすすめの商品です。";
    }

    public function getTemplateName()
    {
        return "__string_template__096b3d4de8cf64c5d789b8687ccb9db39f3fa393757594391919fccabdfd37a2";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__096b3d4de8cf64c5d789b8687ccb9db39f3fa393757594391919fccabdfd37a2", "");
    }
}
