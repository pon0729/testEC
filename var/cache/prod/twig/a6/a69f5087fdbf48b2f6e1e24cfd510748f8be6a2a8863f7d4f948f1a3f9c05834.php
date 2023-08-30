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

/* Block/sns_header.twig */
class __TwigTemplate_1a903fe8ee526a655d3b3f05730441e86b21641e3a11087f7bbf4f5380ae1d84 extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('javascript', $context, $blocks);
        // line 48
        echo "
<div class=\"ec-headerNaviRole\">
    <div class=\"ec-headerNaviRole__right\">
        <div class=\"ec-headerNaviRole__nav\">
            ";
        // line 52
        echo twig_include($this->env, $context, "Block/login_sns.twig");
        echo "
        </div>
        <div class=\"ec-headerRole__cart\">
            ";
        // line 55
        echo twig_include($this->env, $context, "Block/cart.twig");
        echo "
        </div>
    </div>
    <div class=\"ec-headerNaviRole__left\">
        <div class=\"ec-headerNaviRole__search\">
            ";
        // line 60
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("block_search_product"));
        echo "
        </div>
        <div class=\"ec-headerRole__navSP\">
            ";
        // line 63
        echo twig_include($this->env, $context, "Block/nav_sp.twig");
        echo "
        </div>
    </div>
</div>";
    }

    // line 12
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "<script>
";
        // line 46
        echo "</script>
";
    }

    public function getTemplateName()
    {
        return "Block/sns_header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 46,  81 => 13,  77 => 12,  69 => 63,  63 => 60,  55 => 55,  49 => 52,  43 => 48,  41 => 12,  38 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Block/sns_header.twig", "/var/www/html/eccube-4-new/app/template/responceWebDesign/Block/sns_header.twig");
    }
}
