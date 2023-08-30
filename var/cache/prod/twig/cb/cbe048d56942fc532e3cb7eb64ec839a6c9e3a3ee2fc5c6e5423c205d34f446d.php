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

/* @YamatoSubscription/default/Shopping/subscription_attention_message.twig */
class __TwigTemplate_805dd589472872c886b2989f84c596da0e90c26c21723673d1368da2702975fa extends \Eccube\Twig\Template
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
        // line 1
        echo "<style>
.subscription-attention-message-area {
    margin: 0.5em auto;
}

.subscription-attention-message {
    margin-top: 1em;
    color: #DE5D50;
}
</style>

<script>
\$(function() {
    // 定期購入の注意書きを常に表示させる事で、定期購入がある事をユーザーに認知させる
    \$('.ec-totalBox').append(\$('#subscription_attention_message_area'));
    \$('#subscription_attention_message_area_wrapper').remove();
});
</script>

<div id=\"subscription_attention_message_area_wrapper\" class=\"d-none\">
    <div id=\"subscription_attention_message_area\" class=\"subscription-attention-message-area\">
        <p class=\"subscription-attention-message\">※定期購入をご希望の方はお支払い方法をクレジットカードに選択してください。</p>
        ";
        // line 23
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER") == false)) {
            // line 24
            echo "        <p class=\"subscription-attention-message\">※定期購入をご希望の方はログインが必要です。ログインしてから「定期購入」メニューを選択してください。</p>
        ";
        }
        // line 26
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@YamatoSubscription/default/Shopping/subscription_attention_message.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 26,  63 => 24,  61 => 23,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@YamatoSubscription/default/Shopping/subscription_attention_message.twig", "/var/www/html/eccube-4-new/app/Plugin/YamatoSubscription/Resource/template/default/Shopping/subscription_attention_message.twig");
    }
}
