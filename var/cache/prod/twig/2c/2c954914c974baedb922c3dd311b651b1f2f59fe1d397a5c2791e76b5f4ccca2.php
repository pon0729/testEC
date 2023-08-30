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

/* Entry/activate.twig */
class __TwigTemplate_819f94816ee8b6febc27d0a98e32e0bc4c5db016c922a5eb76c8141b9a8b40f5 extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return "default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        $context["body_class"] = "registration_page";
        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "Entry/activate.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "    <div class=\"all_topicpath\">
      <ol class=\"ec-topicpath_sub\">
        <li class=\"home_path\"><a href=\"https://gift-communication.shop/\">TOP</a></li>
        <li class=\"ec-topicpath_all_divider\"> ＞</li>
        <li class=\"ec-topicpath_all_category\">新規会員登録(完了)</li>
    　</ol>
    </div>
    <div class=\"ec-role\">
        <div class=\"ec-pageHeader\">
            <h1>";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("新規会員登録(完了)"), "html", null, true);
        echo "</h1>
        </div>
    </div>
    <div class=\"ec-registerCompleteRole\">
        <div class=\"ec-off3Grid ec-text-ac\">
            <div class=\"ec-off3Grid__cell\">
                <div class=\"ec-reportHeading\">
                    <h2>";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("会員登録ありがとうございます"), "html", null, true);
        echo "</h2>
                </div>
                <p class=\"ec-reportDescription\">";
        // line 34
        echo nl2br(twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("会員登録が完了しました。
それでは、ショッピングをお楽しみください。
"), "html", null, true));
        // line 36
        echo "</p>
                <div class=\"ec-off4Grid\">
                    <div class=\"ec-off4Grid__cell\">
                        ";
        // line 39
        if (($context["qtyInCart"] ?? null)) {
            // line 40
            echo "                            <a class=\"ec-blockBtn--action\" style=\"margin-bottom: 3px\" href=\"";
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("cart");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("カートへ進む"), "html", null, true);
            echo "</a>
                        ";
        }
        // line 42
        echo "                        <a class=\"ec-blockBtn--cancel\" href=\"";
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("homepage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("トップページへ"), "html", null, true);
        echo "</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "Entry/activate.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 42,  90 => 40,  88 => 39,  83 => 36,  79 => 34,  74 => 32,  64 => 25,  53 => 16,  49 => 15,  44 => 11,  42 => 13,  35 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Entry/activate.twig", "/var/www/html/eccube-4-new/app/template/responceWebDesign/Entry/activate.twig");
    }
}
