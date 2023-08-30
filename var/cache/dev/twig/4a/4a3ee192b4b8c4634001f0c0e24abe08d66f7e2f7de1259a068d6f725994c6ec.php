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

/* Block/login.twig */
class __TwigTemplate_182e16a05c1bebab69cca4b13fc15da3af5604a593cbda94f86e88f6d8e83ec9 extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Block/login.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Block/login.twig"));

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
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mypage");
            echo "\">
                <img src=\"/html/user_data/assets/img/memu/sp_mypage.svg\">
                <span class=\"ec-headerNav__itemLink\">";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("マイページ"), "html", null, true);
            echo "</span>
            </a>
        </div>
        <div class=\"ec-headerNav__item\">
            <a href=\"";
            // line 21
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("logout");
            echo "\">
                <img src=\"/html/user_data/assets/img/memu/sp_logout.svg\">
                <span class=\"ec-headerNav__itemLink\">";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ログアウト"), "html", null, true);
            echo "</span>
            </a>
        </div>
        ";
            // line 26
            if (twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 26, $this->source); })()), "option_favorite_product", [], "any", false, false, false, 26)) {
                // line 27
                echo "            <div class=\"ec-headerNav__item\">
                <a href=\"";
                // line 28
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mypage_favorite");
                echo "\">
                    <img src=\"/html/user_data/assets/img/memu/sp_favorite.svg\">
                    <span class=\"ec-headerNav__itemLink\">";
                // line 30
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お気に入り"), "html", null, true);
                echo "</span>
                </a>
            </div>
        ";
            }
            // line 34
            echo "    ";
        } else {
            // line 35
            echo "        <div class=\"ec-headerNav__item\">
            <a href=\"";
            // line 36
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("entry");
            echo "\">
                <img src=\"/html/user_data/assets/img/memu/sp_new_entry.svg\">
                <span class=\"ec-headerNav__itemLink\">";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("新規会員登録"), "html", null, true);
            echo "</span>
            </a>
        </div>
        <div class=\"ec-headerNav__item\">
            <a href=\"";
            // line 42
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mypage_login");
            echo "\">
                <img src=\"/html/user_data/assets/img/memu/sp_login.svg\">
                <span class=\"ec-headerNav__itemLink\">";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ログイン"), "html", null, true);
            echo "</span>
            </a>
        </div>
        ";
            // line 47
            if (twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 47, $this->source); })()), "option_favorite_product", [], "any", false, false, false, 47)) {
                // line 48
                echo "            <div class=\"ec-headerNav__item\">
                <a href=\"";
                // line 49
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mypage_favorite");
                echo "\">
                    <img src=\"/html/user_data/assets/img/memu/sp_favorite.svg\">
                    <span class=\"ec-headerNav__itemLink\">";
                // line 51
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お気に入り"), "html", null, true);
                echo "</span>
                </a>
            </div>
        ";
            }
            // line 55
            echo "    ";
        }
        // line 56
        echo "</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Block/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 56,  138 => 55,  131 => 51,  126 => 49,  123 => 48,  121 => 47,  115 => 44,  110 => 42,  103 => 38,  98 => 36,  95 => 35,  92 => 34,  85 => 30,  80 => 28,  77 => 27,  75 => 26,  69 => 23,  64 => 21,  57 => 17,  52 => 15,  49 => 14,  47 => 13,  43 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("{#
This file is part of EC-CUBE

Copyright(c) EC-CUBE CO.,LTD. All Rights Reserved.

http://www.ec-cube.co.jp/

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.
#}

<div class=\"ec-headerNav\">
    {% if is_granted('ROLE_USER') %}
        <div class=\"ec-headerNav__item\">
            <a href=\"{{ url('mypage') }}\">
                <img src=\"/html/user_data/assets/img/memu/sp_mypage.svg\">
                <span class=\"ec-headerNav__itemLink\">{{ 'マイページ'|trans }}</span>
            </a>
        </div>
        <div class=\"ec-headerNav__item\">
            <a href=\"{{ url('logout') }}\">
                <img src=\"/html/user_data/assets/img/memu/sp_logout.svg\">
                <span class=\"ec-headerNav__itemLink\">{{ 'ログアウト'|trans }}</span>
            </a>
        </div>
        {% if BaseInfo.option_favorite_product %}
            <div class=\"ec-headerNav__item\">
                <a href=\"{{ url('mypage_favorite') }}\">
                    <img src=\"/html/user_data/assets/img/memu/sp_favorite.svg\">
                    <span class=\"ec-headerNav__itemLink\">{{ 'お気に入り'|trans }}</span>
                </a>
            </div>
        {% endif %}
    {% else %}
        <div class=\"ec-headerNav__item\">
            <a href=\"{{ url('entry') }}\">
                <img src=\"/html/user_data/assets/img/memu/sp_new_entry.svg\">
                <span class=\"ec-headerNav__itemLink\">{{ '新規会員登録'|trans }}</span>
            </a>
        </div>
        <div class=\"ec-headerNav__item\">
            <a href=\"{{ url('mypage_login') }}\">
                <img src=\"/html/user_data/assets/img/memu/sp_login.svg\">
                <span class=\"ec-headerNav__itemLink\">{{ 'ログイン'|trans }}</span>
            </a>
        </div>
        {% if BaseInfo.option_favorite_product %}
            <div class=\"ec-headerNav__item\">
                <a href=\"{{ url('mypage_favorite') }}\">
                    <img src=\"/html/user_data/assets/img/memu/sp_favorite.svg\">
                    <span class=\"ec-headerNav__itemLink\">{{ 'お気に入り'|trans }}</span>
                </a>
            </div>
        {% endif %}
    {% endif %}
</div>", "Block/login.twig", "/var/www/html/eccube-4-new/app/template/responceWebDesign/Block/login.twig");
    }
}
