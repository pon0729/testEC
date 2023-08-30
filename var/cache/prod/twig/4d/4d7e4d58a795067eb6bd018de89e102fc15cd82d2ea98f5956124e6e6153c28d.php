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

/* Block/login_sp.twig */
class __TwigTemplate_4790672ef0671fdc2cad37a8fc38671f999c87747fd55d4361bd76aa51f386b4 extends \Eccube\Twig\Template
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
        ";
        // line 14
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 15
            echo "            <a class=\"ec-headerLink__item\" href=\"";
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("logout");
            echo "\">
                <div class=\"ec-headerLink__icon\">
                  <img src=\"/html/user_data/assets/img/memu/sp_logout.svg\">
                </div>
                <span>";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ログアウト"), "html", null, true);
            echo "</span>
            </a>
            ";
            // line 21
            if (twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "option_favorite_product", [], "any", false, false, false, 21)) {
                // line 22
                echo "                <a class=\"ec-headerLink__item\" href=\"";
                echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("mypage_favorite");
                echo "\">
                    <div class=\"ec-headerLink__icon\">
                      <img src=\"/html/user_data/assets/img/memu/sp_favorite.svg\">
                    </div>
                    <span>";
                // line 26
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お気に入り"), "html", null, true);
                echo "</span>
                </a>
            ";
            }
            // line 29
            echo "            <a class=\"ec-headerLink__item\" href=\"";
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("mypage");
            echo "\">
                <div class=\"ec-headerLink__icon\">
                  <img src=\"/html/user_data/assets/img/memu/sp_mypage.svg\">
                </div>
                <span>";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("マイページ"), "html", null, true);
            echo "</span>
            </a>
        ";
        } else {
            // line 36
            echo "            <a class=\"ec-headerLink__item\" href=\"";
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("mypage_login");
            echo "\">
                <div class=\"ec-headerLink__icon\">
                  <img src=\"/html/user_data/assets/img/memu/sp_login.svg\">
                </div>
                <span>";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ログイン"), "html", null, true);
            echo "</span>
            </a>
            ";
            // line 42
            if (twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "option_favorite_product", [], "any", false, false, false, 42)) {
                // line 43
                echo "                <a class=\"ec-headerLink__item\" href=\"";
                echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("mypage_favorite");
                echo "\">
                    <div class=\"ec-headerLink__icon\">
                      <img src=\"/html/user_data/assets/img/memu/sp_favorite.svg\">
                    </div>
                    <span>";
                // line 47
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お気に入り"), "html", null, true);
                echo "</span>
                </a>
            ";
            }
            // line 50
            echo "            <a class=\"ec-headerLink__item\" href=\"";
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("entry");
            echo "\">
                <div class=\"ec-headerLink__icon\">
                  <img src=\"/html/user_data/assets/img/memu/sp_new_entry.svg\">
                </div>
                <span>";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("新規登録"), "html", null, true);
            echo "</span>
            </a>
        ";
        }
        // line 57
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "Block/login_sp.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 57,  124 => 54,  116 => 50,  110 => 47,  102 => 43,  100 => 42,  95 => 40,  87 => 36,  81 => 33,  73 => 29,  67 => 26,  59 => 22,  57 => 21,  52 => 19,  44 => 15,  42 => 14,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Block/login_sp.twig", "/var/www/html/eccube-4-new/app/template/responceWebDesign/Block/login_sp.twig");
    }
}
