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

/* __string_template__4bc018b1881c14f97f76eb53988db9ae46d2aa992d4590210957e193cddea886 */
class __TwigTemplate_4ef2c1662318477d89f6f9f75f497884cc43bb083378d0c0e1053e5ad755ef17 extends \Eccube\Twig\Template
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
        echo "手先だけでなく全身の肌に使える保湿クリームです。
4つのこだわりで、ご家族みなさんの大切なお肌を優しく保湿します。";
    }

    public function getTemplateName()
    {
        return "__string_template__4bc018b1881c14f97f76eb53988db9ae46d2aa992d4590210957e193cddea886";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__4bc018b1881c14f97f76eb53988db9ae46d2aa992d4590210957e193cddea886", "");
    }
}
