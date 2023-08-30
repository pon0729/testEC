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

/* Block/search_product.twig */
class __TwigTemplate_5f224a8425d272bd8633768cf3e1d6870e7f78beaf25854a343a04013ea1008e extends \Eccube\Twig\Template
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
        // line 11
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "Form/form_div_layout.twig"], true);
        // line 12
        echo "
<div class=\"ec-headerSearch\">
    <form method=\"get\" class=\"searchform\" action=\"";
        // line 14
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("product_list");
        echo "\">
        ";
        // line 20
        echo "        <div class=\"ec-headerSearch__keyword\">
            <div class=\"ec-input\">
                ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 22), 'widget', ["id" => null, "attr" => ["class" => "search-name", "placeholder" => "検索キーワードを入力"]]);
        echo "
            </div>
        </div>
        <button class=\"ec-headerSearch__keywordBtn\" type=\"submit\">
            <div class=\"ec-icon\">
                <img src=\"/html/user_data/assets/img/memu/sp_loupe.svg\"/>
                ";
        // line 31
        echo "            </div>
        </button>
    </form>
</div>";
    }

    public function getTemplateName()
    {
        return "Block/search_product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 31,  51 => 22,  47 => 20,  43 => 14,  39 => 12,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Block/search_product.twig", "/var/www/html/eccube-4-new/app/template/responceWebDesign/Block/search_product.twig");
    }
}
