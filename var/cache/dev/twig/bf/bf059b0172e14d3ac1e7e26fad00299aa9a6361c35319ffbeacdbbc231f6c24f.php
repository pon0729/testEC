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
class __TwigTemplate_d142444ff4ef082837a8ce1f98e59842b5ab461e80a9c2ce32d9853036c70142 extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Block/login_sp.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Block/login_sp.twig"));

        // line 11
        echo "
<div class=\"ec-headerLinkArea\">
    <div class=\"ec-headerLink__list\">
        ";
        // line 14
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 15
            echo "            <a class=\"ec-headerLink__item\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("logout");
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
            if (twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 21, $this->source); })()), "option_favorite_product", [], "any", false, false, false, 21)) {
                // line 22
                echo "                <a class=\"ec-headerLink__item\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mypage_favorite");
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
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mypage");
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
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mypage_login");
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
            if (twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 42, $this->source); })()), "option_favorite_product", [], "any", false, false, false, 42)) {
                // line 43
                echo "                <a class=\"ec-headerLink__item\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mypage_favorite");
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
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("entry");
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  136 => 57,  130 => 54,  122 => 50,  116 => 47,  108 => 43,  106 => 42,  101 => 40,  93 => 36,  87 => 33,  79 => 29,  73 => 26,  65 => 22,  63 => 21,  58 => 19,  50 => 15,  48 => 14,  43 => 11,);
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

<div class=\"ec-headerLinkArea\">
    <div class=\"ec-headerLink__list\">
        {% if is_granted('ROLE_USER') %}
            <a class=\"ec-headerLink__item\" href=\"{{ url('logout') }}\">
                <div class=\"ec-headerLink__icon\">
                  <img src=\"/html/user_data/assets/img/memu/sp_logout.svg\">
                </div>
                <span>{{ 'ログアウト'|trans }}</span>
            </a>
            {% if BaseInfo.option_favorite_product %}
                <a class=\"ec-headerLink__item\" href=\"{{ url('mypage_favorite') }}\">
                    <div class=\"ec-headerLink__icon\">
                      <img src=\"/html/user_data/assets/img/memu/sp_favorite.svg\">
                    </div>
                    <span>{{ 'お気に入り'|trans }}</span>
                </a>
            {% endif %}
            <a class=\"ec-headerLink__item\" href=\"{{ url('mypage') }}\">
                <div class=\"ec-headerLink__icon\">
                  <img src=\"/html/user_data/assets/img/memu/sp_mypage.svg\">
                </div>
                <span>{{ 'マイページ'|trans }}</span>
            </a>
        {% else %}
            <a class=\"ec-headerLink__item\" href=\"{{ url('mypage_login') }}\">
                <div class=\"ec-headerLink__icon\">
                  <img src=\"/html/user_data/assets/img/memu/sp_login.svg\">
                </div>
                <span>{{ 'ログイン'|trans }}</span>
            </a>
            {% if BaseInfo.option_favorite_product %}
                <a class=\"ec-headerLink__item\" href=\"{{ url('mypage_favorite') }}\">
                    <div class=\"ec-headerLink__icon\">
                      <img src=\"/html/user_data/assets/img/memu/sp_favorite.svg\">
                    </div>
                    <span>{{ 'お気に入り'|trans }}</span>
                </a>
            {% endif %}
            <a class=\"ec-headerLink__item\" href=\"{{ url('entry') }}\">
                <div class=\"ec-headerLink__icon\">
                  <img src=\"/html/user_data/assets/img/memu/sp_new_entry.svg\">
                </div>
                <span>{{ '新規登録'|trans }}</span>
            </a>
        {% endif %}
    </div>
</div>", "Block/login_sp.twig", "/var/www/html/eccube-4-new/app/template/responceWebDesign/Block/login_sp.twig");
    }
}
