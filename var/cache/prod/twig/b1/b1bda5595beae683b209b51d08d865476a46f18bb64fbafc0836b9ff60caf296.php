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

/* @YamatoPayment4/credit.twig */
class __TwigTemplate_98d05e499da1525a106be941ce8194e7549200ecb98f98ae5ef593ac92fd6f78 extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'yamato_payment_credit_form' => [$this, 'block_yamato_payment_credit_form'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        $this->displayBlock('yamato_payment_credit_form', $context, $blocks);
    }

    public function block_yamato_payment_credit_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "Payment", [], "any", false, false, false, 6), "getMethodClass", [], "any", false, false, false, 6) == "Plugin\\YamatoPayment4\\Service\\Method\\Credit")) {
            // line 7
            echo "<script>
\$(function() {
    \$('div.ec-rectHeading h2').each(function() {
        if(\$(this).html() == 'お支払方法') {
            \$(this).closest('.ec-orderPayment').after(\$('#yamato_payment4_credit'))
            \$(this).closest('.ec-orderPayment').after(\$('#yamato_payment4_payment'))
        }
    });
})</script>
<script type=\"text/javascript\" class=\"webcollect-embedded-token\" src=\"";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["moduleSettings"] ?? null), "tokenUrl", [], "any", false, false, false, 16), "html", null, true);
            echo "\"></script>
<script id=\"yamatoTokenJs\">

    var formId = 'shopping-form';
    var formPrefix = 'shopping_order';

    var lastUseDate = [];
";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["creditCardList"] ?? null), "cardData", [], "any", false, false, false, 23));
            foreach ($context['_seq'] as $context["_key"] => $context["cardData"]) {
                // line 24
                echo "    lastUseDate[";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cardData"], "card_key", [], "any", false, false, false, 24), "html", null, true);
                echo "] = '";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cardData"], "lastCreditDate", [], "any", false, false, false, 24), "html", null, true);
                echo "';
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cardData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "
    /*
     * 登録上限チェック
     */
    function fnCheckMaxRegist() {
        var saveLimit = \"";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["moduleSettings"] ?? null), "saveLimit", [], "any", false, false, false, 31), "html", null, true);
            echo "\";
        if(saveLimit == \"\") {
            saveLimit = 0;
        }
        if(";
            // line 35
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["creditCardList"] ?? null), "cardData", [], "any", false, false, false, 35)), "html", null, true);
            echo " >= saveLimit) {
            alert(\"カードお預かりは\"+saveLimit+\"件までとなっております。\\n新たなカードを登録する場合は、マイページから登録済みカードを削除してください。\");
            if(\$('#'+formPrefix+'_register_card')) {
                \$('#'+formPrefix+'_register_card').prop('checked', false);
            }
            return false;
        }
        return true;
    }

    /*
     * 送信ボタン押下時に実行するJavaScript関数
     */
    var isJsSend = false;
    function executePay() {
        // 自動カード登録時はチェックしない
        ";
            // line 51
            if (((($context["isPeriodic"] ?? null) || ($context["reservService"] ?? null)) && ((twig_get_attribute($this->env, $this->source, ($context["moduleSettings"] ?? null), "use_option", [], "any", false, false, false, 51) == "1") || (($context["autoRegist"] ?? null) == "0")))) {
                // line 52
                echo "            if (\$('#use_registed_card').prop('checked') === false || typeof \$('#use_registed_card').val() === \"undefined\") {
                if (\$('#'+formPrefix+'_register_card').prop('checked') === false) {
                    ";
                // line 54
                if (($context["isPeriodic"] ?? null)) {
                    // line 55
                    echo "                        alert(\"定期商品のご購入にはカード情報のお預かりが必須となります。\");
                    ";
                } elseif (                // line 56
($context["reservService"] ?? null)) {
                    // line 57
                    echo "                        alert(\"※ 予約商品購入はカード情報お預かり、もしくは登録済カード情報でのご購入が必要です。\");
                    ";
                }
                // line 59
                echo "                    return;
                }
            }
        ";
            }
            // line 63
            echo "
        if(isJsSend) {
            alert(\"只今、処理中です。しばらくお待ち下さい。\");
            return false;
        } else {
            isJsSend = true;

            // クレジット決済以外は無視する
            selectPayment = \$(\"input[name='_\"+formPrefix+\"[Payment]']:checked\").val();
            if(selectPayment != \"";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["moduleSettings"] ?? null), "Payment", [], "any", false, false, false, 72), "paymentId", [], "any", false, false, false, 72), "html", null, true);
            echo "\") {
                return true;
            }

            \$('#'+formPrefix+'_card_no').css({'background-color': '#ffffff'});
            \$('#'+formPrefix+'_card_owner').css({'background-color': '#ffffff'})
            \$('#'+formPrefix+'_card_exp_month').css({'background-color': '#ffffff'});
            \$('#'+formPrefix+'_card_exp_year').css({'background-color': '#ffffff'});
            \$('#'+formPrefix+'_security_code').css({'background-color': '#ffffff'});

            // コールバック関数（「正常」の場合）
            var callbackSuccess = function(response) {
                var formElement = document.getElementById(formId);
                // カード情報がリクエストパラメータに含まれないようにする
                removeCardData();

                // formに発行したトークンを追加する
                if(\$('#'+formPrefix+'_webcollectToken').length) {
                    \$('#'+formPrefix+'_webcollectToken').val(response.token);
                } else {
                    var hiddenElement = document.createElement(\"input\");
                    hiddenElement.type = \"hidden\";
                    hiddenElement.name = \"regist_credit[webcollectToken]\";
                    hiddenElement.value = response.token;

                    formElement.appendChild(hiddenElement);
                }

                // formをサブミットする
                formElement.submit();
            }

            // コールバック関数（「異常」の場合）
            var callbackFailure = function(response) {
                //エラー情報を取得
                var errorInfo = response.errorInfo;

                //errorItemの内容に応じてテキストボックスの背景色を変更する関数
                function changeColor(errorItem) {
                    switch(errorItem) {
                        case \"cardNo\":
                            \$('#'+formPrefix+'_card_no').css({'background-color': '#fdeef1'});
                            break;
                        case \"cardOwner\":
                            \$('#'+formPrefix+'_card_owner').css({'background-color': '#fdeef1'})
                            break;
                        case \"cardExp\":
                            \$('#'+formPrefix+'_card_exp_month').css({'background-color': '#fdeef1'});
                            \$('#'+formPrefix+'_card_exp_year').css({'background-color': '#fdeef1'});
                            break;
";
            // line 122
            if ((twig_get_attribute($this->env, $this->source, ($context["moduleSettings"] ?? null), "useSecurityCode", [], "any", false, false, false, 122) == "1")) {
                // line 123
                echo "                        case \"securityCode\":
                            \$('#'+formPrefix+'_security_code').css({'background-color': '#fdeef1'});
                            break;
";
            }
            // line 127
            echo "                    }
                }

                //エラーの数だけ処理を繰り返す
                for (var i = 0; i<errorInfo.length; i++) {
                    if (errorInfo[i].errorItem) {
                        changeColor(errorInfo[i].errorItem);
                    }

                    //メッセージをalertで出力
                    alert(errorInfo[i].errorCode + \" : \" + errorInfo[i].errorMsg);
                }

                isJsSend = false;
                return false;
            }

            // トークン発行APIへ渡すパラメータ(共通)
            var createTokenInfo = {
                traderCode: \"";
            // line 146
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["moduleSettings"] ?? null), "shop_id", [], "any", false, false, false, 146), "html", null, true);
            echo "\",
                authDiv: \"";
            // line 147
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["moduleSettings"] ?? null), "auth_div", [], "any", false, false, false, 147), "html", null, true);
            echo "\",
                optServDiv: \"00\",
";
            // line 149
            if ((twig_get_attribute($this->env, $this->source, ($context["moduleSettings"] ?? null), "useSecurityCode", [], "any", false, false, false, 149) == "1")) {
                // line 150
                echo "                securityCode: \$('#'+formPrefix+'_security_code').val(),
";
            }
            // line 152
            echo "                checkSum: \"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["moduleSettings"] ?? null), "check_sum", [], "any", false, false, false, 152), "html", null, true);
            echo "\"
            }

            var isRegist    = false;
            if(\$('#'+formPrefix+'_register_card') != null) {
                isRegist    = \$('#'+formPrefix+'_register_card').prop('checked')
            }

            var isUseRegist = false;
            if(lastUseDate.length) {
                isUseRegist = \$('#use_registed_card').prop('checked');
            }

            ";
            // line 165
            if ((($context["reservService"] ?? null) == true)) {
                // line 166
                echo "                // 予約商品の場合
                isRegist = true;
            ";
            }
            // line 169
            echo "
            // オプションサービス「契約済み」　かつ　自動カード登録設定が「利用する」の場合
            ";
            // line 171
            if (((twig_get_attribute($this->env, $this->source, ($context["moduleSettings"] ?? null), "use_option", [], "any", false, false, false, 171) == "0") && (($context["autoRegist"] ?? null) == "1"))) {
                // line 172
                echo "                // 登録済みカードを使用しない場合は登録件数チェック
                if (!isUseRegist && fnCheckMaxRegist() == false) {
                    isJsSend = false;
                    return false;
                }

                isRegist = true;
            ";
            }
            // line 180
            echo "
            if(isRegist || isUseRegist) {
                createTokenInfo[\"optServDiv\"] = \"01\";
                createTokenInfo[\"memberId\"]   = \"";
            // line 183
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["moduleSettings"] ?? null), "member_id", [], "any", false, false, false, 183), "html", null, true);
            echo "\";
                createTokenInfo[\"authKey\"]    = \"";
            // line 184
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["moduleSettings"] ?? null), "authentication_key", [], "any", false, false, false, 184), "html", null, true);
            echo "\";
            } else {
                createTokenInfo[\"checkSum\"]   = \"";
            // line 186
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["moduleSettings"] ?? null), "no_member_check_sum", [], "any", false, false, false, 186), "html", null, true);
            echo "\";
            }

            // 登録済みカードを使用
            if(isUseRegist) {
                //選択されたものを探し出す
                card_key_num = \$(\"input[name='_\"+formPrefix+\"[card_key]']:checked\").val();
                createTokenInfo[\"cardKey\"]        = card_key_num;
                createTokenInfo[\"lastCreditDate\"] = lastUseDate[card_key_num];
            } else {
                createTokenInfo[\"cardNo\"]    = \$('#'+formPrefix+'_card_no').val();
                createTokenInfo[\"cardOwner\"] = \$('#'+formPrefix+'_card_owner').val();
                createTokenInfo[\"cardExp\"]   = \$('#'+formPrefix+'_card_exp_month').val() + \$('#'+formPrefix+'_card_exp_year').val();
            }

            // webコレクトが提供するJavaScript関数を実行し、トークンを発行する。
            return WebcollectTokenLib.createToken(createTokenInfo, callbackSuccess, callbackFailure);
        }
    }


    \$(function() {
        var use_registed_card = \$('#use_registed_card').prop('checked');
        togleCardSet(use_registed_card);

        \$('#use_registed_card').change(function () {
            togleCardSet(\$(this).prop('checked'));
        });
        
        \$('#'+formPrefix+'_register_card').change(function() {
            if(\$(this).prop('checked')) {
                fnCheckMaxRegist();
            }
        });
    });

    function togleCardSet(flg) {
        if (flg) {
            \$('.dispTarget').hide();
            \$('.dispCardKey').show();
        } else {
            \$('.dispTarget').show();
            \$('.dispCardKey').hide();
        }
    }

     function removeCardData() {
         \$('#'+formPrefix+'_card_no').removeAttr(\"name\");
         \$('#'+formPrefix+'_card_owner').removeAttr(\"name\");
         \$('#'+formPrefix+'_card_exp_month').removeAttr(\"name\");
         \$('#'+formPrefix+'_card_exp_year').removeAttr(\"name\");
";
            // line 237
            if ((twig_get_attribute($this->env, $this->source, ($context["moduleSettings"] ?? null), "useSecurityCode", [], "any", false, false, false, 237) == "1")) {
                // line 238
                echo "         \$('#'+formPrefix+'_security_code').removeAttr(\"name\");
";
            }
            // line 240
            echo "     }
</script>

<div class=\"ec-orderPayment\" id=\"yamato_payment4_payment\"></div>
<div class=\"ec-borderedDefs\" id=\"yamato_payment4_credit\">
    <div class=\"ec-rectHeading\">
        <h2>クレジットカード情報入力</h2>
    </div>

    ";
            // line 250
            echo "    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "webcollectToken", [], "any", false, false, false, 250), 'widget');
            echo "
    <input type=\"hidden\" id=\"mode\" name=\"_shopping_order[mode]\" value=\"\">


";
            // line 254
            if (twig_get_attribute($this->env, $this->source, ($context["creditCardList"] ?? null), "cardData", [], "any", false, false, false, 254)) {
                // line 255
                echo "    <div class=\"ec-blockRadio\">
        <div class=\"checkbox\">
            <label><input type=\"checkbox\" id=\"use_registed_card\" name=\"_shopping_order[use_registed_card]\" ";
                // line 257
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "use_registed_card", [], "any", false, false, false, 257), "vars", [], "any", false, false, false, 257), "data", [], "any", false, false, false, 257) == true)) {
                    echo "checked=\"checked\"";
                }
                echo "> 登録カードを利用する(";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["creditCardList"] ?? null), "cardUnit", [], "any", false, false, false, 257), "html", null, true);
                echo "件)</label>
        </div>
    </div>
";
                // line 260
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["creditCardList"] ?? null), "cardData", [], "any", false, false, false, 260));
                foreach ($context['_seq'] as $context["_key"] => $context["cardData"]) {
                    // line 261
                    echo "    <dl id=\"detail_box__card_key\" class=\"dispCardKey\">
        <dt class=\"text-right\">
            <input id=\"shopping_order_card_key_";
                    // line 263
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cardData"], "card_key", [], "any", false, false, false, 263), "html", null, true);
                    echo "\" name=\"_shopping_order[card_key]\" required=\"required\" class=\"payment\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cardData"], "card_key", [], "any", false, false, false, 263), "html", null, true);
                    echo "\" type=\"radio\" ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["creditCardList"] ?? null), "default_card_key", [], "any", false, false, false, 263) == twig_get_attribute($this->env, $this->source, $context["cardData"], "card_key", [], "any", false, false, false, 263))) {
                        echo " checked=\"checked\" ";
                    }
                    echo "/>
        </dt>
        <dd>
            <label for=\"shopping_order_card_key_";
                    // line 266
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cardData"], "card_key", [], "any", false, false, false, 266), "html", null, true);
                    echo "\"><span>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cardData"], "data", [], "any", false, false, false, 266), "html", null, true);
                    echo "</span></label>
        </dd>
    </dl>
";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cardData'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            } else {
                // line 271
                echo "    ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "use_registed_card", [], "any", false, false, false, 271), 'widget', ["type" => "hidden"]);
                echo "
";
            }
            // line 273
            echo "
        <dl id=\"detail_box__card_number\" class=\"dispTarget\">
            <dt><label class=\"ec-label\">カード番号</label><span class=\"ec-required\">必須</span></dt>
            <dd>
                <div class=\"form-group form-inline ";
            // line 277
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "card_no", [], "any", false, false, false, 277), "vars", [], "any", false, false, false, 277), "errors", [], "any", false, false, false, 277))) {
                echo "has-error";
            }
            echo "\">
                    ";
            // line 278
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "card_no", [], "any", false, false, false, 278), 'widget');
            echo "
                    ";
            // line 279
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "card_no", [], "any", false, false, false, 279), 'errors');
            echo "
                </div>
            </dd>
        </dl>

        <dl id=\"detail_box__card_expire\" class=\"dispTarget\">
            <dt><label class=\"ec-label\">カード有効期限</label><span class=\"ec-required\">必須</span></dt>
            <dd>
                <div class=\"form-group form-inline\"";
            // line 287
            if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "card_exp_month", [], "any", false, false, false, 287), "vars", [], "any", false, false, false, 287), "errors", [], "any", false, false, false, 287)) ||  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "card_exp_year", [], "any", false, false, false, 287), "vars", [], "any", false, false, false, 287), "errors", [], "any", false, false, false, 287)))) {
                echo "has-error";
            }
            echo ">
                    ";
            // line 288
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "card_exp_month", [], "any", false, false, false, 288), 'widget');
            echo "月 / 20 ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "card_exp_year", [], "any", false, false, false, 288), 'widget');
            echo "年
                    ";
            // line 289
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "card_exp_month", [], "any", false, false, false, 289), 'errors');
            echo "
                    ";
            // line 290
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "card_exp_year", [], "any", false, false, false, 290), 'errors');
            echo "
                </div>
            </dd>
        </dl>

        <dl id=\"detail_box__card_name\" class=\"dispTarget\">
            <dt><label class=\"ec-label\">カード名義</label><span class=\"ec-required\">必須</span></dt>
            <dd>
                <div class=\"form-group form-inline ";
            // line 298
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "card_owner", [], "any", false, false, false, 298), "vars", [], "any", false, false, false, 298), "errors", [], "any", false, false, false, 298))) {
                echo "has-error";
            }
            echo "\">
                    ";
            // line 299
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "card_owner", [], "any", false, false, false, 299), 'widget');
            echo "
                    ";
            // line 300
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "card_owner", [], "any", false, false, false, 300), 'errors');
            echo "
                    <p>カードに記載の名前をご記入下さい。ご本人名義のカードをご使用ください。半角英文字入力（例：TAROU YAMADA）</p>
                </div>
            </dd>
        </dl>

";
            // line 306
            if ((twig_get_attribute($this->env, $this->source, ($context["moduleSettings"] ?? null), "useSecurityCode", [], "any", false, false, false, 306) == "1")) {
                // line 307
                echo "        <dl id=\"detail_box__security_code\">
            <dt><label class=\"ec-label\">セキュリティコード</label><span class=\"ec-required\">必須</span></dt>
            <dd>
                <div class=\"form-group form-inline ec-telInput ";
                // line 310
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "security_code", [], "any", false, false, false, 310), "vars", [], "any", false, false, false, 310), "errors", [], "any", false, false, false, 310))) {
                    echo "has-error";
                }
                echo "\">
                    ";
                // line 311
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "security_code", [], "any", false, false, false, 311), 'widget');
                echo "
                    ";
                // line 312
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "security_code", [], "any", false, false, false, 312), 'errors');
                echo "
                    <p>主にカード裏面の署名欄に記載されている末尾３桁～４桁の数をご記入ください。半角入力（例：123）</p>
                </div>
            </dd>
        </dl>
";
            }
            // line 318
            echo "
        <dl id=\"detail_box__method\">
            <dt><label class=\"ec-label\">支払い方法</label><span class=\"ec-required\">必須</span></dt>
            <dd>
                <div class=\"form-group form-inline ";
            // line 322
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "pay_way", [], "any", false, false, false, 322), "vars", [], "any", false, false, false, 322), "errors", [], "any", false, false, false, 322))) {
                echo "has-error";
            }
            echo "\">
                    ";
            // line 323
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "pay_way", [], "any", false, false, false, 323), 'widget');
            echo "
                    ";
            // line 324
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "pay_way", [], "any", false, false, false, 324), 'errors');
            echo "
                </div>
            </dd>
        </dl>


";
            // line 330
            if (((twig_get_attribute($this->env, $this->source, ($context["moduleSettings"] ?? null), "use_option", [], "any", false, false, false, 330) == "1") || (($context["autoRegist"] ?? null) == "1"))) {
                // line 331
                echo "        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "register_card", [], "any", false, false, false, 331), 'widget', ["type" => "hidden"]);
                echo "
";
            } else {
                // line 333
                echo "        <dl id=\"detail_box__save_card\" class=\"dispTarget\">
            <dt><label class=\"ec-label\">カード情報登録</label>";
                // line 334
                if ((($context["isPeriodic"] ?? null) || ($context["reservService"] ?? null))) {
                    echo "<span class=\"ec-required\">必須</span>";
                }
                echo "</dt>
            <dd>
                <div class=\"form-group form-inline ";
                // line 336
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "register_card", [], "any", false, false, false, 336), "vars", [], "any", false, false, false, 336), "errors", [], "any", false, false, false, 336))) {
                    echo "has-error";
                }
                echo "\">
                    ";
                // line 337
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "register_card", [], "any", false, false, false, 337), 'widget');
                echo "
                    ";
                // line 338
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "register_card", [], "any", false, false, false, 338), 'errors');
                echo "
                    ";
                // line 339
                if (($context["reservService"] ?? null)) {
                    // line 340
                    echo "                        <p style=\"color: #DE5D50;\">予約商品販売はカードお預かりが必須になります。<br /></p>
                    ";
                }
                // line 342
                echo "                    <p>カード情報を登録すると次回より入力無しで購入出来ます。<br />カード情報は当店では保管いたしません。<br />委託する決済代行会社にて安全に保管されます。</p>
                </div>
            </dd>
        </dl>
";
            }
            // line 347
            echo "
 </div>

";
        }
    }

    public function getTemplateName()
    {
        return "@YamatoPayment4/credit.twig";
    }

    public function getDebugInfo()
    {
        return array (  604 => 347,  597 => 342,  593 => 340,  591 => 339,  587 => 338,  583 => 337,  577 => 336,  570 => 334,  567 => 333,  561 => 331,  559 => 330,  550 => 324,  546 => 323,  540 => 322,  534 => 318,  525 => 312,  521 => 311,  515 => 310,  510 => 307,  508 => 306,  499 => 300,  495 => 299,  489 => 298,  478 => 290,  474 => 289,  468 => 288,  462 => 287,  451 => 279,  447 => 278,  441 => 277,  435 => 273,  429 => 271,  416 => 266,  404 => 263,  400 => 261,  396 => 260,  386 => 257,  382 => 255,  380 => 254,  372 => 250,  361 => 240,  357 => 238,  355 => 237,  301 => 186,  296 => 184,  292 => 183,  287 => 180,  277 => 172,  275 => 171,  271 => 169,  266 => 166,  264 => 165,  247 => 152,  243 => 150,  241 => 149,  236 => 147,  232 => 146,  211 => 127,  205 => 123,  203 => 122,  150 => 72,  139 => 63,  133 => 59,  129 => 57,  127 => 56,  124 => 55,  122 => 54,  118 => 52,  116 => 51,  97 => 35,  90 => 31,  83 => 26,  72 => 24,  68 => 23,  58 => 16,  47 => 7,  45 => 6,  38 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("", "@YamatoPayment4/credit.twig", "/var/www/html/eccube-4-new/app/Plugin/YamatoPayment4/Resource/template/credit.twig");
    }
}
