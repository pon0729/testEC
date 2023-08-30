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

/* Block/login_sns.twig */
class __TwigTemplate_ca9b9848220eebb6996e79e28f915808693ec9ce85d01ccfd2e08ee6477d8cde extends \Eccube\Twig\Template
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
<div class=\"ec-headerNav\">
    ";
        // line 13
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 14
            echo "        <div class=\"ec-headerNav__item\">
            <a href=\"";
            // line 15
            echo "https://instagram.com/giftcommunication?igshid=YmMyMTA2M2Y=";
            echo "\">
                <img src=\"/html/user_data/assets/img/sns/SP_Instagram_2.svg\">
                <span class=\"ec-headerNav__itemLink\">";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("インスタグラム"), "html", null, true);
            echo "</span>
            </a>
        </div>
        <div class=\"ec-headerNav__item\">
            <a href=\"";
            // line 21
            echo "https://mobile.twitter.com/giftcommunicat1";
            echo "\">
                <img src=\"/html/user_data/assets/img/sns/SP_Twitter_2.svg\">
                <span class=\"ec-headerNav__itemLink\">";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ツイッター"), "html", null, true);
            echo "</span>
            </a>
        </div>
        <div class=\"ec-headerNav__item\">
            <a href=\"";
            // line 27
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("mypage");
            echo "\">
                <img src=\"/html/user_data/assets/img/memu/sp_mypage.svg\">
                <span class=\"ec-headerNav__itemLink\">";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("マイページ"), "html", null, true);
            echo "</span>
            </a>
        </div>
        <div class=\"ec-headerNav__item\">
            <a href=\"";
            // line 33
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("logout");
            echo "\">
                <img src=\"/html/user_data/assets/img/memu/sp_logout.svg\">
                <span class=\"ec-headerNav__itemLink\">";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ログアウト"), "html", null, true);
            echo "</span>
            </a>
        </div>
        ";
            // line 38
            if (twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "option_favorite_product", [], "any", false, false, false, 38)) {
                // line 39
                echo "            <div class=\"ec-headerNav__item\">
                <a href=\"";
                // line 40
                echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("mypage_favorite");
                echo "\">
                    <img src=\"/html/user_data/assets/img/memu/sp_favorite.svg\">
                    <span class=\"ec-headerNav__itemLink\">";
                // line 42
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お気に入り"), "html", null, true);
                echo "</span>
                </a>
            </div>
        ";
            }
            // line 46
            echo "    ";
        } else {
            // line 47
            echo "        <div class=\"ec-headerNav__item\">
            <a href=\"";
            // line 48
            echo "https://instagram.com/giftcommunication?igshid=YmMyMTA2M2Y=";
            echo "\">
                <img src=\"/html/user_data/assets/img/sns/SP_Instagram_2.svg\">
                <span class=\"ec-headerNav__itemLink\">";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("インスタグラム"), "html", null, true);
            echo "</span>
            </a>
        </div>
        <div class=\"ec-headerNav__item\">
            <a href=\"";
            // line 54
            echo "https://mobile.twitter.com/giftcommunicat1";
            echo "\">
                <img src=\"/html/user_data/assets/img/sns/SP_Twitter_2.svg\">
                <span class=\"ec-headerNav__itemLink\">";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ツイッター"), "html", null, true);
            echo "</span>
            </a>
        </div>
        <div class=\"ec-headerNav__item\">
            <a href=\"";
            // line 60
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("entry");
            echo "\">
                <img src=\"/html/user_data/assets/img/memu/sp_new_entry.svg\">
                <span class=\"ec-headerNav__itemLink\">";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("新規会員登録"), "html", null, true);
            echo "</span>
            </a>
        </div>
        <div class=\"ec-headerNav__item\">
            <a href=\"";
            // line 66
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("mypage_login");
            echo "\">
                <img src=\"/html/user_data/assets/img/memu/sp_login.svg\">
                <span class=\"ec-headerNav__itemLink\">";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ログイン"), "html", null, true);
            echo "</span>
            </a>
        </div>
        ";
            // line 71
            if (twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "option_favorite_product", [], "any", false, false, false, 71)) {
                // line 72
                echo "            <div class=\"ec-headerNav__item\">
                <a href=\"";
                // line 73
                echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("mypage_favorite");
                echo "\">
                    <img src=\"/html/user_data/assets/img/memu/sp_favorite.svg\">
                    <span class=\"ec-headerNav__itemLink\">";
                // line 75
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お気に入り"), "html", null, true);
                echo "</span>
                </a>
            </div>
        ";
            }
            // line 79
            echo "    ";
        }
        // line 80
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "Block/login_sns.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 80,  180 => 79,  173 => 75,  168 => 73,  165 => 72,  163 => 71,  157 => 68,  152 => 66,  145 => 62,  140 => 60,  133 => 56,  128 => 54,  121 => 50,  116 => 48,  113 => 47,  110 => 46,  103 => 42,  98 => 40,  95 => 39,  93 => 38,  87 => 35,  82 => 33,  75 => 29,  70 => 27,  63 => 23,  58 => 21,  51 => 17,  46 => 15,  43 => 14,  41 => 13,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Block/login_sns.twig", "/var/www/html/eccube-4-new/app/template/responceWebDesign/Block/login_sns.twig");
    }
}
