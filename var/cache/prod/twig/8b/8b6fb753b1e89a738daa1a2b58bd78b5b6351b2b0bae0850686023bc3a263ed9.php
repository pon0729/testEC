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

/* __string_template__12a09ebb090408564f1282e26c928dd68ede94b2381bdc3e219a6b62a3eb278f */
class __TwigTemplate_867c36256e00430ff7a0a7a3167505171507766455c50028a957b146027b01cb extends \Eccube\Twig\Template
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
        echo "野菜と乳酸菌の栄養・美容ドリンク。<br>毎日の飲む習慣から健康を手に入れませんか。";
    }

    public function getTemplateName()
    {
        return "__string_template__12a09ebb090408564f1282e26c928dd68ede94b2381bdc3e219a6b62a3eb278f";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__12a09ebb090408564f1282e26c928dd68ede94b2381bdc3e219a6b62a3eb278f", "");
    }
}
