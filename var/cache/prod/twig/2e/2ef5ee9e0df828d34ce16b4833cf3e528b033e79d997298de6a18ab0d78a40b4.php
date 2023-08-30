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

/* __string_template__573a3e476b2809e6433f97876967a8aa6df021a36f34a80f66b813ebdceba520 */
class __TwigTemplate_8ef17f0ddedc7b78826912facf6cfc3e7a04015b920b5650ac9d6257fbb9eada extends \Eccube\Twig\Template
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
        echo "ギフトにもぴったりなサイズのキャニスターセット。 おしゃれなインテリアにも。バスルームに常備してデイリーユースに。";
    }

    public function getTemplateName()
    {
        return "__string_template__573a3e476b2809e6433f97876967a8aa6df021a36f34a80f66b813ebdceba520";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__573a3e476b2809e6433f97876967a8aa6df021a36f34a80f66b813ebdceba520", "");
    }
}
