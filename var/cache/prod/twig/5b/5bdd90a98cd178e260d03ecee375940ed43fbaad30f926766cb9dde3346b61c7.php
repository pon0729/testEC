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

/* Forgot/complete.twig */
class __TwigTemplate_316290d0b99d3b36afdb978ce9743763f9818a44a168b255331dea49d1483689 extends \Eccube\Twig\Template
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
        $this->parent = $this->loadTemplate("default_frame.twig", "Forgot/complete.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "    <div class=\"all_topicpath\">
      <ol class=\"ec-topicpath_sub\">
        <li class=\"home_path\"><a href=\"https://gift-communication.shop/\">TOP</a></li>
        <li class=\"ec-topicpath_all_divider\"> ＞</li>
        <li class=\"ec-topicpath_all_category\">パスワードの再発行(メール送信)</li>
    　</ol>
    </div>
    <div class=\"ec-role\">
        <div class=\"ec-pageHeader\">
            <h1>";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("パスワードの再発行(メール送信)"), "html", null, true);
        echo "</h1>
        </div>
    </div>
    <div class=\"ec-forgetCompleteRole\">
        <div class=\"ec-off3Grid ec-text-ac\">
            <div class=\"ec-off3Grid__cell\">
                <div class=\"ec-reportHeading\">
                    <h2>";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("パスワード再発行メールの送信が完了しました。"), "html", null, true);
        echo "</h2>
                </div>
                <p class=\"ec-reportDescription\">";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご登録メールアドレスにパスワードを再発行するためのメールを送信いたしました。
メールの内容をご確認いただきますよう、お願いいたします。
※メールが届かない場合はメールアドレスをご確認の上、再度お試しください。
"), "html", null, true);
        // line 35
        echo "</p>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "Forgot/complete.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 35,  76 => 32,  71 => 30,  61 => 23,  50 => 14,  46 => 13,  35 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Forgot/complete.twig", "/var/www/html/eccube-4-new/app/template/responceWebDesign/Forgot/complete.twig");
    }
}
