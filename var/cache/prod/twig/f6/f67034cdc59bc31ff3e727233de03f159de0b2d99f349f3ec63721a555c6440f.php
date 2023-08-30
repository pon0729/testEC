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

/* @YamatoSubscription/default/Shopping/shopping_yamato_subscription_form.twig */
class __TwigTemplate_50503557c5c545a480a58d973a9f74e0400ba9b3d6cd65df408e1f2fdcf00532 extends \Eccube\Twig\Template
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
.purchase-method {
    margin: 1.2em auto;
    width: 100%;
}
.purchase-method-border {
    padding: 5px;
    border: 1px solid #ccc;
    border-radius: 2px;
    box-shadow: 1px 1px 2px #ccc;
}
.purchase_method_label {
    color:#525263;
    margin-bottom: 5px;
}
.purchase-method-area {
    margin-bottom: 0.25em;
    padding: 0.25em;
    color: #525263;
}
.subscription-flg-label {
    padding-top: 0.25em;
    padding-bottom: 0.25em;
    display: inline-block;
    background-color: #DFE1E1;
    border-radius: 24px;
    margin: 5px;
    padding-right: 0.75em;
    padding-left: 0.75em;
    cursor: pointer;
}

.purchase-method-button-area {
    margin-top: 8px;
}
</style>

<script>
\$(function() {
    var \$normalPurchaseSubmitButton = \$('.ec-totalBox__btn .ec-blockBtn--action');
    var normalPurchaseSubmitButtonEvents = \$._data(\$normalPurchaseSubmitButton.get(0), \"events\");
    var originalNormalPurchaseButtonClickEventHandler = normalPurchaseSubmitButtonEvents && normalPurchaseSubmitButtonEvents.click.length > 0
      ? normalPurchaseSubmitButtonEvents.click[0].handler
      : function() {};

    var confirmUrl = '";
        // line 46
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("shopping_confirm");
        echo "';
    var yamatoSubscriptionShoppingUrl = '";
        // line 47
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("plugin_yamato_subscription_shopping");
        echo "';

    // 「通常購入」と「定期購入」の切り替えパネルを追加
    \$('.ec-totalBox__btn').html(\$('#purchase_method'));
    \$('#purchase_method_wrapper').remove();

    // 「確認する」ボタンのバリデーションなどを「定期購入を申し込む」ボタンでも有効にする
    // そのために、通常購入のボタンも少し制御してる。。
    \$normalPurchaseSubmitButton = \$('.ec-totalBox__btn .normal-purchase .ec-blockBtn--action');
    \$normalPurchaseSubmitButton.off('click', originalNormalPurchaseButtonClickEventHandler);
    \$normalPurchaseSubmitButton.on('click', function(e) {
        \$(this).closest('form').prop('action', confirmUrl);
        originalNormalPurchaseButtonClickEventHandler();
        e.preventDefault();
        return false;
    });

    var \$applyYamatoSubscriptionButton = \$('#apply_yamatosubscription_button');
    \$applyYamatoSubscriptionButton.off('click', originalNormalPurchaseButtonClickEventHandler);
    \$applyYamatoSubscriptionButton.on('click', function(e) {
        \$(this).closest('form').prop('action', yamatoSubscriptionShoppingUrl);

        // 「このカードを登録する」のボタンの必須チェック（クレカを記憶しないと定期購入させられない）
        var \$registerCardCheckbox = \$('input[name=\"_shopping_order\\[register_card\\]\"]');
        var \$useRegisterCardCheckbox = \$('input[name=\"_shopping_order\\[use_registed_card\\]\"]');
        if ( !\$useRegisterCardCheckbox.prop('checked') && !\$registerCardCheckbox.prop('checked') ) {
            alert('";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yamatosubscription.shopping.error.please_check_register_card"), "html", null, true);
        echo "');
            \$('html,body').animate({ scrollTop: (\$registerCardCheckbox.offset().top - 150) }, 'slow');
            e.preventDefault();
            return false;
        }

        originalNormalPurchaseButtonClickEventHandler();
        e.preventDefault();
        return false;
    });

    ";
        // line 85
        echo "    var redirectCallback = function() {
        loadingOverlay();
        \$('#shopping-form').attr('action', '";
        // line 87
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("shopping");
        echo "').submit(); // post
        setTimeout(function () {
            loadingOverlay(\"hide\");
        }, 2000);
    };
    \$('.subscription-flg-radio-button').on('change', redirectCallback);
});
</script>

<div id=\"purchase_method_wrapper\" class=\"d-none\">
    <div id=\"purchase_method\" class=\"purchase-method\">
        <div class=\"purchase-method-border\">
            <p class=\"text-center purchase_method_label\">購入方法</p>
            <div class=\"purchase-method-area text-center\">
                <label for=\"subscription_flg_off\" class=\"subscription-flg-label\">
                    <input type=\"radio\" id=\"subscription_flg_off\" class=\"subscription-flg-radio-button\" name=\"subscription_flg\" value=\"0\" ";
        // line 102
        echo ((($context["subscription_flg"] ?? null)) ? ("") : ("checked=\"checked\""));
        echo " />
                    ";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yamatosubscription.shopping.normal_purchase_radio_button"), "html", null, true);
        echo "
                </label>
                <label for=\"subscription_flg_on\" class=\"subscription-flg-label\">
                    <input type=\"radio\" id=\"subscription_flg_on\" class=\"subscription-flg-radio-button\" name=\"subscription_flg\" value=\"1\" ";
        // line 106
        echo ((($context["subscription_flg"] ?? null)) ? ("checked=\"checked\"") : (""));
        echo " />
                    ";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yamatosubscription.shopping.yamatosubscription_purchase_radio_button"), "html", null, true);
        echo "
                </label>
            </div>
        </div>
        <div class=\"purchase-method-button-area\">
            ";
        // line 112
        if (($context["subscription_flg"] ?? null)) {
            // line 113
            echo "            <div class=\"purchase-method-button yamatosubscription\">
                <button type=\"submit\" id=\"apply_yamatosubscription_button\" class=\"ec-blockBtn--action apply-yamatosubscription-button\">";
            // line 114
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yamatosubscription.shopping.apply_yamatosubscription_button"), "html", null, true);
            echo "</button>
                <a href=\"";
            // line 115
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("cart");
            echo "\" class=\"ec-blockBtn--cancel\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("カートに戻る"), "html", null, true);
            echo "</a>
            </div>
            ";
        } else {
            // line 118
            echo "            <div class=\"purchase-method-button normal-purchase\">
                <button type=\"submit\" class=\"ec-blockBtn--action\">";
            // line 119
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("確認する"), "html", null, true);
            echo "</button>
                <a href=\"";
            // line 120
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("cart");
            echo "\" class=\"ec-blockBtn--cancel\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("カートに戻る"), "html", null, true);
            echo "</a>
            </div>
            ";
        }
        // line 123
        echo "        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@YamatoSubscription/default/Shopping/shopping_yamato_subscription_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 123,  199 => 120,  195 => 119,  192 => 118,  184 => 115,  180 => 114,  177 => 113,  175 => 112,  167 => 107,  163 => 106,  157 => 103,  153 => 102,  135 => 87,  131 => 85,  117 => 73,  88 => 47,  84 => 46,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@YamatoSubscription/default/Shopping/shopping_yamato_subscription_form.twig", "/var/www/html/eccube-4-new/app/Plugin/YamatoSubscription/Resource/template/default/Shopping/shopping_yamato_subscription_form.twig");
    }
}
