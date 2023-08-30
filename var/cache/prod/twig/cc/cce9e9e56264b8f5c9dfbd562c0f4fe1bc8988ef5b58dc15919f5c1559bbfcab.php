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

/* Mail/order.twig */
class __TwigTemplate_d5ef0f64bffad5afc1236b32c953f8e096d768a9ffcae00c0d77145e64163122 extends \Eccube\Twig\Template
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
        // line 12
        echo twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "name01", [], "any", false, false, false, 12);
        echo " ";
        echo twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "name02", [], "any", false, false, false, 12);
        echo " 様

この度はご注文いただき誠にありがとうございます。下記ご注文内容にお間違えがないかご確認下さい。

************************************************
　ご請求金額
************************************************

ご注文日時：";
        // line 20
        echo $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_sec($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "order_date", [], "any", false, false, false, 20));
        echo "
ご注文番号：";
        // line 21
        echo twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "order_no", [], "any", false, false, false, 21);
        echo "
お支払い合計：";
        // line 22
        echo $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "payment_total", [], "any", false, false, false, 22));
        echo "
お支払い方法：";
        // line 23
        echo twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "payment_method", [], "any", false, false, false, 23);
        echo "
";
        // line 24
        if ((twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "isOptionPoint", [], "any", false, false, false, 24) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "Customer", [], "any", false, false, false, 24)))) {
            // line 25
            echo "ご利用ポイント：";
            echo twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "usePoint", [], "any", false, false, false, 25));
            echo " pt
加算ポイント：";
            // line 26
            echo twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "addPoint", [], "any", false, false, false, 26));
            echo " pt
";
        }
        // line 28
        echo "お問い合わせ：";
        echo twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "message", [], "any", false, false, false, 28);
        echo "


************************************************
　ご注文商品明細
************************************************

";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "MergedProductOrderItems", [], "any", false, false, false, 35));
        foreach ($context['_seq'] as $context["_key"] => $context["OrderItem"]) {
            // line 36
            echo "商品コード：";
            echo twig_get_attribute($this->env, $this->source, $context["OrderItem"], "product_code", [], "any", false, false, false, 36);
            echo "
商品名：";
            // line 37
            echo twig_get_attribute($this->env, $this->source, $context["OrderItem"], "product_name", [], "any", false, false, false, 37);
            echo "  ";
            echo twig_get_attribute($this->env, $this->source, $context["OrderItem"], "classcategory_name1", [], "any", false, false, false, 37);
            echo "  ";
            echo twig_get_attribute($this->env, $this->source, $context["OrderItem"], "classcategory_name2", [], "any", false, false, false, 37);
            echo " ";
            echo (($this->extensions['Eccube\Twig\Extension\TaxExtension']->isReducedTaxRate($context["OrderItem"])) ? ("※") : (""));
            echo "
単価：";
            // line 38
            echo $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["OrderItem"], "price_inctax", [], "any", false, false, false, 38));
            echo "
数量：";
            // line 39
            echo twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["OrderItem"], "quantity", [], "any", false, false, false, 39));
            echo "

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['OrderItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "※は軽減税率対象商品です。
-------------------------------------------------
小　計：";
        // line 44
        echo $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "subtotal", [], "any", false, false, false, 44));
        echo "
手数料：";
        // line 45
        echo $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "charge", [], "any", false, false, false, 45));
        echo "
送　料：";
        // line 46
        echo $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "delivery_fee_total", [], "any", false, false, false, 46));
        echo "
";
        // line 47
        if ((twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "taxable_discount", [], "any", false, false, false, 47) < 0)) {
            // line 48
            echo "値引き：";
            echo $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "taxable_discount", [], "any", false, false, false, 48));
            echo "
";
        }
        // line 50
        echo "-------------------------------------------------
合　計：";
        // line 51
        echo $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "taxable_total", [], "any", false, false, false, 51));
        echo "
    ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "taxable_total_by_tax_rate", [], "any", false, false, false, 52));
        foreach ($context['_seq'] as $context["rate"] => $context["total"]) {
            // line 53
            echo "    (";
            echo $context["rate"];
            echo " %対象：";
            echo $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($context["total"]);
            echo ")
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['rate'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "tax_free_discount_items", [], "any", false, false, false, 55));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 56
            echo "-------------------------------------------------
";
            // line 57
            echo twig_get_attribute($this->env, $this->source, $context["item"], "product_name", [], "any", false, false, false, 57);
            echo "：";
            echo $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["item"], "total_price", [], "any", false, false, false, 57));
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "============================================
お支払い合計：";
        // line 60
        echo $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "payment_total", [], "any", false, false, false, 60));
        echo "

************************************************
　ご注文者情報
************************************************
お名前：";
        // line 65
        echo twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "name01", [], "any", false, false, false, 65);
        echo " ";
        echo twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "name02", [], "any", false, false, false, 65);
        echo " 様
お名前(カナ)：";
        // line 66
        echo twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "kana01", [], "any", false, false, false, 66);
        echo " ";
        echo twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "kana02", [], "any", false, false, false, 66);
        echo " 様
";
        // line 67
        if (twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "company_name", [], "any", false, false, false, 67)) {
            // line 68
            echo "会社名：";
            echo twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "company_name", [], "any", false, false, false, 68);
            echo "
";
        }
        // line 70
        echo "郵便番号：〒";
        echo twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "postal_code", [], "any", false, false, false, 70);
        echo "
住所：";
        // line 71
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "Pref", [], "any", false, false, false, 71), "name", [], "any", false, false, false, 71);
        echo twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "addr01", [], "any", false, false, false, 71);
        echo twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "addr02", [], "any", false, false, false, 71);
        echo "
電話番号：";
        // line 72
        echo twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "phone_number", [], "any", false, false, false, 72);
        echo "
メールアドレス：";
        // line 73
        echo twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "email", [], "any", false, false, false, 73);
        echo "

************************************************
　配送情報
************************************************

";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "Shippings", [], "any", false, false, false, 79));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["Shipping"]) {
            // line 80
            echo "◎お届け先";
            if (twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "multiple", [], "any", false, false, false, 80)) {
                echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 80);
            }
            // line 81
            echo "
お名前：";
            // line 82
            echo twig_get_attribute($this->env, $this->source, $context["Shipping"], "name01", [], "any", false, false, false, 82);
            echo " ";
            echo twig_get_attribute($this->env, $this->source, $context["Shipping"], "name02", [], "any", false, false, false, 82);
            echo " 様
お名前(カナ)：";
            // line 83
            echo twig_get_attribute($this->env, $this->source, $context["Shipping"], "kana01", [], "any", false, false, false, 83);
            echo " ";
            echo twig_get_attribute($this->env, $this->source, $context["Shipping"], "kana02", [], "any", false, false, false, 83);
            echo " 様
";
            // line 84
            if (twig_get_attribute($this->env, $this->source, $context["Shipping"], "company_name", [], "any", false, false, false, 84)) {
                // line 85
                echo "会社名：";
                echo twig_get_attribute($this->env, $this->source, $context["Shipping"], "company_name", [], "any", false, false, false, 85);
                echo "
";
            }
            // line 87
            echo "郵便番号：〒";
            echo twig_get_attribute($this->env, $this->source, $context["Shipping"], "postal_code", [], "any", false, false, false, 87);
            echo "
住所：";
            // line 88
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Shipping"], "Pref", [], "any", false, false, false, 88), "name", [], "any", false, false, false, 88);
            echo twig_get_attribute($this->env, $this->source, $context["Shipping"], "addr01", [], "any", false, false, false, 88);
            echo twig_get_attribute($this->env, $this->source, $context["Shipping"], "addr02", [], "any", false, false, false, 88);
            echo "
電話番号：";
            // line 89
            echo twig_get_attribute($this->env, $this->source, $context["Shipping"], "phone_number", [], "any", false, false, false, 89);
            echo "

配送方法：";
            // line 91
            echo twig_get_attribute($this->env, $this->source, $context["Shipping"], "shipping_delivery_name", [], "any", false, false, false, 91);
            echo "
お届け日：";
            // line 92
            echo ((twig_test_empty(twig_get_attribute($this->env, $this->source, $context["Shipping"], "shipping_delivery_date", [], "any", false, false, false, 92))) ? ("指定なし") : ($this->extensions['Eccube\Twig\Extension\IntlExtension']->date_day($this->env, twig_get_attribute($this->env, $this->source, $context["Shipping"], "shipping_delivery_date", [], "any", false, false, false, 92))));
            echo "
お届け時間：";
            // line 93
            echo ((twig_get_attribute($this->env, $this->source, $context["Shipping"], "shipping_delivery_time", [], "any", true, true, false, 93)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["Shipping"], "shipping_delivery_time", [], "any", false, false, false, 93), "指定なし")) : ("指定なし"));
            echo "

";
            // line 95
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["Shipping"], "productOrderItems", [], "any", false, false, false, 95));
            foreach ($context['_seq'] as $context["_key"] => $context["OrderItem"]) {
                // line 96
                echo "商品コード：";
                echo twig_get_attribute($this->env, $this->source, $context["OrderItem"], "product_code", [], "any", false, false, false, 96);
                echo "
商品名：";
                // line 97
                echo twig_get_attribute($this->env, $this->source, $context["OrderItem"], "product_name", [], "any", false, false, false, 97);
                echo "  ";
                echo twig_get_attribute($this->env, $this->source, $context["OrderItem"], "classcategory_name1", [], "any", false, false, false, 97);
                echo "  ";
                echo twig_get_attribute($this->env, $this->source, $context["OrderItem"], "classcategory_name2", [], "any", false, false, false, 97);
                echo "
数量：";
                // line 98
                echo twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["OrderItem"], "quantity", [], "any", false, false, false, 98));
                echo "

";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['OrderItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Shipping'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "
";
        // line 103
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "complete_mail_message", [], "any", false, false, false, 103))) {
            // line 104
            echo twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "complete_mail_message", [], "any", false, false, false, 104);
            echo "
";
        }
        // line 106
        echo "
============================================

このメッセージはお客様へのお知らせ専用ですので、
このメッセージへの返信としてご質問をお送りいただいても回答できません。
ご了承ください。
";
    }

    public function getTemplateName()
    {
        return "Mail/order.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  361 => 106,  356 => 104,  354 => 103,  351 => 102,  330 => 98,  322 => 97,  317 => 96,  313 => 95,  308 => 93,  304 => 92,  300 => 91,  295 => 89,  289 => 88,  284 => 87,  278 => 85,  276 => 84,  270 => 83,  264 => 82,  261 => 81,  256 => 80,  239 => 79,  230 => 73,  226 => 72,  220 => 71,  215 => 70,  209 => 68,  207 => 67,  201 => 66,  195 => 65,  187 => 60,  184 => 59,  174 => 57,  171 => 56,  167 => 55,  156 => 53,  152 => 52,  148 => 51,  145 => 50,  139 => 48,  137 => 47,  133 => 46,  129 => 45,  125 => 44,  121 => 42,  112 => 39,  108 => 38,  98 => 37,  93 => 36,  89 => 35,  78 => 28,  73 => 26,  68 => 25,  66 => 24,  62 => 23,  58 => 22,  54 => 21,  50 => 20,  37 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "Mail/order.twig", "/var/www/html/eccube-4-new/app/template/responceWebDesign/Mail/order.twig");
    }
}
