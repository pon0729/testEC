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

/* __string_template__743963e37295695b3e48a11c199141f2728534739fab687f5a8049bf6d05e2d2 */
class __TwigTemplate_a713805ad7a053afd1039a524fa381a8e3a9eea6af170b2f905d4cde19aca4ef extends \Eccube\Twig\Template
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
        echo "耐久性に優れたセラミック製のアロマスティックホルダー<br> シンプルなデザインで、場所を選ばずご使用いただけます。";
    }

    public function getTemplateName()
    {
        return "__string_template__743963e37295695b3e48a11c199141f2728534739fab687f5a8049bf6d05e2d2";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__743963e37295695b3e48a11c199141f2728534739fab687f5a8049bf6d05e2d2", "");
    }
}
