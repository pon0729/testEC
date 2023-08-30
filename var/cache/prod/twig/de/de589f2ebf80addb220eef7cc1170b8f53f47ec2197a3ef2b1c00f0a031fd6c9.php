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

/* __string_template__35837f2b241f7f3b65e8f1480955089961269bc5a59b21039d291fb3a46faf09 */
class __TwigTemplate_3718c1434f6d79cfd1666f6f4858fe7d014408d2f7bddc9c8d7a494ceb08184b extends \Eccube\Twig\Template
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
        echo "近年健康食品で注目されているマヌカハニー。 <br>使いやすい個包装で日頃の健康管理におすすめの商品です。";
    }

    public function getTemplateName()
    {
        return "__string_template__35837f2b241f7f3b65e8f1480955089961269bc5a59b21039d291fb3a46faf09";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__35837f2b241f7f3b65e8f1480955089961269bc5a59b21039d291fb3a46faf09", "");
    }
}
