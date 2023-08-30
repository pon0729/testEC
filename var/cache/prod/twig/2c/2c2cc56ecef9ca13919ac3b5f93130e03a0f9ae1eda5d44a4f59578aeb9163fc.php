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

/* Block/sns_link.twig */
class __TwigTemplate_a06ce1278170c32b2ebd4183b3a1155b7c35865e86f39b1d4ade91737948c7d4 extends \Eccube\Twig\Template
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
        echo "
<div class=\"ec-headerLinkArea\">
    <div class=\"ec-headerLink__list\">
        <a class=\"ec-headerLink__item\" href=\"";
        // line 14
        echo "https://mobile.twitter.com/giftcommunicat1";
        echo "\">
            <div class=\"ec-headerLink__icon\">
              <img src=\"/html/user_data/assets/img/sns/SP_Twitter_2.svg\">
            </div>
            <span>";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Twitter"), "html", null, true);
        echo "</span>
        </a>
        <a class=\"ec-headerLink__item\" href=\"";
        // line 20
        echo "https://instagram.com/giftcommunication?igshid=YmMyMTA2M2Y=";
        echo "\">
            <div class=\"ec-headerLink__icon\">
              <img src=\"/html/user_data/assets/img/sns/SP_Instagram_2.svg\">
            </div>
            <span>";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("instagram"), "html", null, true);
        echo "</span>
        </a>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "Block/sns_link.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 24,  54 => 20,  49 => 18,  42 => 14,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Block/sns_link.twig", "/var/www/html/eccube-4-new/app/template/responceWebDesign/Block/sns_link.twig");
    }
}
