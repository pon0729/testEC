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

/* Shopping/login.twig */
class __TwigTemplate_72c8c750230be7c5727061522c1590d8f7ecd75a6a59edc02820bcb992c68feb extends \Eccube\Twig\Template
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
        $context["body_class"] = "cart_page";
        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "Shopping/login.twig", 11);
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
        <li class=\"ec-topicpath_all_category\">ログイン</li>
    　</ol>
    </div>
    <div class=\"ec-role\">
        <div class=\"ec-pageHeader\">
            <h1>";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ログイン"), "html", null, true);
        echo "</h1>
        </div>
    </div>

    <div class=\"ec-role ec-shoppingLoginRole\">
        <div class=\"ec-grid3\">

            <div class=\"ec-grid3__cell2\">
                <form name=\"shopping_login\" id=\"shopping_login\" method=\"post\" action=\"";
        // line 33
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("mypage_login");
        echo "\">
                    <input type=\"hidden\" name=\"_target_path\" value=\"shopping\" />
                    <input type=\"hidden\" name=\"_failure_path\" value=\"shopping_login\" />
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
                    <div class=\"ec-login\">
                        <div class=\"ec-login__icon\">
                            <div class=\"ec-icon\"><img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/user.svg"), "html", null, true);
        echo "\" alt=\"\"></div>
                        </div>
                        <div class=\"ec-login__input\">
                            <div class=\"ec-input\">
                                ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "login_email", [], "any", false, false, false, 43), 'widget', ["attr" => ["style" => "ime-mode: disabled;", "placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("メールアドレス"), "autofocus" => true]]);
        echo "
                                ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "login_pass", [], "any", false, false, false, 44), 'widget', ["attr" => ["placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("パスワード")]]);
        echo "
                            </div>
                            ";
        // line 46
        if (twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "option_remember_me", [], "any", false, false, false, 46)) {
            // line 47
            echo "                            <div class=\"ec-checkbox\">
                                <label>
                                    ";
            // line 49
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                // line 50
                echo "                                        <input type=\"hidden\" name=\"login_memory\" value=\"1\">
                                    ";
            } else {
                // line 52
                echo "                                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "login_memory", [], "any", false, false, false, 52), 'widget', ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("次回から自動的にログインする")]);
                echo "
                                    ";
            }
            // line 54
            echo "                                </label>
                            </div>
                            ";
        }
        // line 57
        echo "                        </div>
                        ";
        // line 58
        if (($context["error"] ?? null)) {
            // line 59
            echo "                            <p class=\"ec-errorMessage\">";
            echo nl2br(twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 59), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 59), "validators"), "html", null, true));
            echo "</p>
                        ";
        }
        // line 61
        echo "                        <div class=\"ec-grid2\">
                            <div class=\"ec-grid2__cell\">
                                <div class=\"ec-login__actions\">
                                    <button type=\"submit\" class=\"ec-blockBtn--cancel\">";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ログイン"), "html", null, true);
        echo "</button>
                                </div>
                            </div>
                            <div class=\"ec-grid2__cell\">
                                <div class=\"ec-login__link\"><a class=\"ec-link\" href=\"";
        // line 68
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("forgot");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ログイン情報をお忘れですか？"), "html", null, true);
        echo "</a>
                                </div>
                                <div class=\"ec-login__link\"><a class=\"ec-link\" href=\"";
        // line 70
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("entry");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("新規会員登録"), "html", null, true);
        echo "</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            ";
        // line 78
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED") == false)) {
            // line 79
            echo "                <div class=\"ec-grid3__cell\">
                    <div class=\"ec-guest\">
                        <div class=\"ec-guest__inner\">
                            <p>";
            // line 82
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("会員登録をせずに購入手続きをされたい方は、下記よりお進みください。"), "html", null, true);
            echo "</p>
                            <div class=\"ec-guest__actions\"><a class=\"ec-blockBtn--cancel\" href=\"";
            // line 83
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("shopping_nonmember");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ゲスト購入"), "html", null, true);
            echo "</a>
                            </div>
                        </div>
                    </div>
                </div>
            ";
        }
        // line 89
        echo "
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "Shopping/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 89,  180 => 83,  176 => 82,  171 => 79,  169 => 78,  156 => 70,  149 => 68,  142 => 64,  137 => 61,  131 => 59,  129 => 58,  126 => 57,  121 => 54,  115 => 52,  111 => 50,  109 => 49,  105 => 47,  103 => 46,  98 => 44,  94 => 43,  87 => 39,  81 => 36,  75 => 33,  64 => 25,  53 => 16,  49 => 15,  44 => 11,  42 => 13,  35 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Shopping/login.twig", "/var/www/html/eccube-4-new/app/template/responceWebDesign/Shopping/login.twig");
    }
}
