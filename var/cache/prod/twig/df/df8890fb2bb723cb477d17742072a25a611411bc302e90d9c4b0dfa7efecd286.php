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

/* __string_template__dc332bb6cad1f4bb308d14ded635e555f9e65a5a2a42d515dc4d401c21919f63 */
class __TwigTemplate_e60a95092e192daab85360224ab2452fae59ddd101792d96e33b9e240d172ebe extends \Eccube\Twig\Template
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
        echo "化学薬品も使わない安心・安全なカフェインレスコーヒー";
    }

    public function getTemplateName()
    {
        return "__string_template__dc332bb6cad1f4bb308d14ded635e555f9e65a5a2a42d515dc4d401c21919f63";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__dc332bb6cad1f4bb308d14ded635e555f9e65a5a2a42d515dc4d401c21919f63", "");
    }
}
