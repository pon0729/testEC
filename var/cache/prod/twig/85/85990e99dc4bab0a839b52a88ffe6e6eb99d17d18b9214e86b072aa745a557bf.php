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

/* Mail/shipping_notify.twig */
class __TwigTemplate_a31b2c7ba882110917be75e098362f50a4f815eeff109f63d32dce7fbfbdd008 extends \Eccube\Twig\Template
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

この度、発送が遅れてしまい大変申し訳ありませんでした。
お客さまがご注文された以下の商品を発送いたしました。商品の到着まで、今しばらくお待ちください。
また、今回はご迷惑をかけてしまいましたので、お代は結構でございます。
今後ともよろしくお願い致します。

";
        // line 19
        if (twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "tracking_number", [], "any", false, false, false, 19)) {
            // line 20
            echo "お問い合わせ番号：";
            echo twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "tracking_number", [], "any", false, false, false, 20);
            echo "
";
            // line 21
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "Delivery", [], "any", false, false, false, 21), "confirm_url", [], "any", false, false, false, 21)) {
                // line 22
                echo "お問い合わせURL：";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "Delivery", [], "any", false, false, false, 22), "confirm_url", [], "any", false, false, false, 22);
                echo "
";
            }
        }
        // line 25
        echo "
************************************************
　ご注文商品明細
************************************************

";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "productOrderItems", [], "any", false, false, false, 30));
        foreach ($context['_seq'] as $context["_key"] => $context["OrderItem"]) {
            // line 31
            echo "商品コード：";
            echo twig_get_attribute($this->env, $this->source, $context["OrderItem"], "product_code", [], "any", false, false, false, 31);
            echo "
商品名：";
            // line 32
            echo twig_get_attribute($this->env, $this->source, $context["OrderItem"], "product_name", [], "any", false, false, false, 32);
            echo "  ";
            echo twig_get_attribute($this->env, $this->source, $context["OrderItem"], "classcategory_name1", [], "any", false, false, false, 32);
            echo "  ";
            echo twig_get_attribute($this->env, $this->source, $context["OrderItem"], "classcategory_name2", [], "any", false, false, false, 32);
            echo "
数量：";
            // line 33
            echo twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["OrderItem"], "quantity", [], "any", false, false, false, 33));
            echo "

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['OrderItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "
============================================

************************************************
　ご注文者情報
************************************************
お名前：";
        // line 42
        echo twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "name01", [], "any", false, false, false, 42);
        echo " ";
        echo twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "name02", [], "any", false, false, false, 42);
        echo " 様
お名前(カナ)：";
        // line 43
        echo twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "kana01", [], "any", false, false, false, 43);
        echo " ";
        echo twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "kana02", [], "any", false, false, false, 43);
        echo " 様
";
        // line 44
        if (twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "company_name", [], "any", false, false, false, 44)) {
            // line 45
            echo "会社名：";
            echo twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "company_name", [], "any", false, false, false, 45);
            echo "
";
        }
        // line 47
        echo "郵便番号：〒";
        echo twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "postal_code", [], "any", false, false, false, 47);
        echo "
住所：";
        // line 48
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "Pref", [], "any", false, false, false, 48), "name", [], "any", false, false, false, 48);
        echo twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "addr01", [], "any", false, false, false, 48);
        echo twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "addr02", [], "any", false, false, false, 48);
        echo "
電話番号：";
        // line 49
        echo twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "phone_number", [], "any", false, false, false, 49);
        echo "

************************************************
　配送情報
************************************************

お名前：";
        // line 55
        echo twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "name01", [], "any", false, false, false, 55);
        echo " ";
        echo twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "name02", [], "any", false, false, false, 55);
        echo " 様
お名前(カナ)：";
        // line 56
        echo twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "kana01", [], "any", false, false, false, 56);
        echo " ";
        echo twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "kana02", [], "any", false, false, false, 56);
        echo " 様
";
        // line 57
        if (twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "company_name", [], "any", false, false, false, 57)) {
            // line 58
            echo "会社名：";
            echo twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "company_name", [], "any", false, false, false, 58);
            echo "
";
        }
        // line 60
        echo "郵便番号：〒";
        echo twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "postal_code", [], "any", false, false, false, 60);
        echo "
住所：";
        // line 61
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "Pref", [], "any", false, false, false, 61), "name", [], "any", false, false, false, 61);
        echo twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "addr01", [], "any", false, false, false, 61);
        echo twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "addr02", [], "any", false, false, false, 61);
        echo "
電話番号：";
        // line 62
        echo twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "phone_number", [], "any", false, false, false, 62);
        echo "

お届け日：";
        // line 64
        echo ((twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "shipping_delivery_date", [], "any", false, false, false, 64))) ? ("指定なし") : ($this->extensions['Eccube\Twig\Extension\IntlExtension']->date_day($this->env, twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "shipping_delivery_date", [], "any", false, false, false, 64))));
        echo "
お届け時間：";
        // line 65
        echo ((twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "shipping_delivery_time", [], "any", true, true, false, 65)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "shipping_delivery_time", [], "any", false, false, false, 65), "指定なし")) : ("指定なし"));
        echo "
";
    }

    public function getTemplateName()
    {
        return "Mail/shipping_notify.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 65,  182 => 64,  177 => 62,  171 => 61,  166 => 60,  160 => 58,  158 => 57,  152 => 56,  146 => 55,  137 => 49,  131 => 48,  126 => 47,  120 => 45,  118 => 44,  112 => 43,  106 => 42,  98 => 36,  89 => 33,  81 => 32,  76 => 31,  72 => 30,  65 => 25,  58 => 22,  56 => 21,  51 => 20,  49 => 19,  37 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "Mail/shipping_notify.twig", "/var/www/html/eccube-4-new/app/template/responceWebDesign/Mail/shipping_notify.twig");
    }
}
