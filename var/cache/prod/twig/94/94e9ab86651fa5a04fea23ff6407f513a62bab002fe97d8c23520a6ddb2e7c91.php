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

/* Cart/weight_size.twig */
class __TwigTemplate_10aeeae01335c88a0f5daa0399b2716e4d063b16e4d7311d114157752b54ae5c extends \Eccube\Twig\Template
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
        // line 10
        echo "
";
        // line 11
        if ((twig_get_attribute($this->env, $this->source, ($context["Cart"] ?? null), "deliveryplus_total_weight", [], "any", false, false, false, 11) || twig_get_attribute($this->env, $this->source, ($context["Cart"] ?? null), "deliveryplus_total_size", [], "any", false, false, false, 11))) {
            // line 12
            echo "<style>
.weight_size_wrap {
  width: 100%;
  text-align: center;
}
.weight_size {
  border: 1px solid #d9d9d9;
  margin-bottom: 20px;
  padding: 10px;
  text-align: center;
  background: #f8f8f8;
  display: inline-block;
}
.weight_size p {
  display: inline-block;
  margin: 0 15px;
}
</style>

<div class=\"weight_size_wrap\">
    <div class=\"weight_size\">
";
            // line 33
            if (twig_get_attribute($this->env, $this->source, ($context["Cart"] ?? null), "deliveryplus_total_weight", [], "any", false, false, false, 33)) {
                // line 34
                echo "        <p>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("deliveryplus.common.1"), "html", null, true);
                echo "： <span>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Cart"] ?? null), "deliveryplus_total_weight", [], "any", false, false, false, 34), "html", null, true);
                echo " g</span> </p>
";
            }
            // line 36
            echo "
";
            // line 37
            if (twig_get_attribute($this->env, $this->source, ($context["Cart"] ?? null), "deliveryplus_total_size", [], "any", false, false, false, 37)) {
                // line 38
                echo "        <p>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("deliveryplus.common.2"), "html", null, true);
                echo "： <span>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Cart"] ?? null), "deliveryplus_total_size", [], "any", false, false, false, 38), "html", null, true);
                echo " ㎤</span> </p>
";
            }
            // line 40
            echo "    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "Cart/weight_size.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 40,  80 => 38,  78 => 37,  75 => 36,  67 => 34,  65 => 33,  42 => 12,  40 => 11,  37 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "Cart/weight_size.twig", "/var/www/html/eccube-4-new/app/template/responceWebDesign/Cart/weight_size.twig");
    }
}
