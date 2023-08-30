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

/* @YamatoPayment4/credit_confirm.twig */
class __TwigTemplate_a47c88e2376d7c7a1c7e211b68dbd9328ff260fc41e42585d05982b6639d739a extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'yamato_payment_credit_form_confirm' => [$this, 'block_yamato_payment_credit_form_confirm'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        $this->displayBlock('yamato_payment_credit_form_confirm', $context, $blocks);
    }

    public function block_yamato_payment_credit_form_confirm($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "Payment", [], "any", false, false, false, 6), "method_class", [], "any", false, false, false, 6) == "Plugin\\YamatoPayment4\\Service\\Method\\Credit")) {
            // line 7
            echo "<script>
\$(function() {
    \$('div.ec-rectHeading h2').each(function() {
        if(\$(this).html() == 'お支払方法') {
            \$(this).closest('.ec-orderPayment').after(\$('#yamato_payment4_payment'))
        }
    });
})</script>
<div id=\"yamato_payment4_payment\">
";
            // line 16
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "webcollectToken", [], "any", false, false, false, 16), 'widget');
            echo "
";
            // line 17
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "pay_way", [], "any", false, false, false, 17), 'widget', ["type" => "hidden"]);
            echo "
";
            // line 18
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "register_card", [], "any", false, false, false, 18), 'widget', ["type" => "hidden"]);
            echo "
";
            // line 19
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "use_registed_card", [], "any", false, false, false, 19), 'widget', ["type" => "hidden"]);
            echo "
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@YamatoPayment4/credit_confirm.twig";
    }

    public function getDebugInfo()
    {
        return array (  70 => 19,  66 => 18,  62 => 17,  58 => 16,  47 => 7,  45 => 6,  38 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("", "@YamatoPayment4/credit_confirm.twig", "/var/www/html/eccube-4-new/app/Plugin/YamatoPayment4/Resource/template/credit_confirm.twig");
    }
}
