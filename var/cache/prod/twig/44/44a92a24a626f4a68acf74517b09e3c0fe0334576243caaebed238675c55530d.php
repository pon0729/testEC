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

/* Block/topic.twig */
class __TwigTemplate_4c8b440c0a83f68f5f26114489ce81f5be6536c136614cd1ed15f79bf796d611 extends \Eccube\Twig\Template
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
        echo "<!-- トピックブロック[BEGIN] -->
<!--▼人気商品ランキング　※トピックブロックにあります▼-->
<div class=\"ec-rankingRole\">
    <h3 class=\"ec-rankingRole__title\">
        Ranking
    </h3>
    <ol class=\"ec-rankingRole__list\">
        <li class=\"ec-rankingRole__listItem\">
            <!--ランキング1位-->
            <a href=\"";
        // line 21
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_detail", ["id" => 395]);
        echo "\">
            <h4 class=\"ec-rankingRole__itemDetail\"></h4>
                <div class=\"ec-rankingRole__itemPhoto\"><img src=\"/html/upload/save_image/0612005256_6485edd87c786.png\"></div>
                <dl>
                    <dt class=\"ec-rankingRole__itemName\">【Lien】オールインワン美容液</dt>
                    <dd class=\"ec-rankingRole__itemPrice\">&yen;7,000</dd>
                </dl>
            </a>
        </li>
        <li class=\"ec-rankingRole__listItem\">
            <!--ランキング2位-->
            <a href=\"";
        // line 32
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_detail", ["id" => 198]);
        echo "\">
            <h4 class=\"ec-rankingRole__itemDetail\"></h4>
                <div class=\"ec-rankingRole__itemPhoto\"><img src=\"/html/upload/save_image/0423155001_6263a19906796.jpg\"></div>
                <dl>
                    <dt class=\"ec-rankingRole__itemName\">【Be】フォームウォッシング</dt>
                    <dd class=\"ec-rankingRole__itemPrice\">&yen;4,620  </dd>
                </dl>
            </a>
        </li>
        <li class=\"ec-rankingRole__listItem\">
            <!--ランキング3位-->
            <a href=\"";
        // line 43
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_detail", ["id" => 400]);
        echo "\">
            <h4 class=\"ec-rankingRole__itemDetail\"></h4>
                <div class=\"ec-rankingRole__itemPhoto\"><img src=\"/html/upload/save_image/0614223923_6489c30bcc483.png\"></div>
                <dl>
                    <dt class=\"ec-rankingRole__itemName\">【S・HEART・S】スカルプブラシ プレミアム　ショート（スタンド付）</dt>
                    <dd class=\"ec-rankingRole__itemPrice\">&yen;7,150 </dd>
                </dl>
            </a>
        </li>
        <li class=\"ec-rankingRole__listItem\">
            <!--ランキング4位-->
            <a href=\"";
        // line 54
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_detail", ["id" => 401]);
        echo "\">
            <h4 class=\"ec-rankingRole__itemDetail\"></h4>
                <div class=\"ec-rankingRole__itemPhoto\"><img src=\"/html/upload/save_image/0614223859_6489c2f30c9c3.png\"></div>
                <dl>
                    <dt class=\"ec-rankingRole__itemName\">【ナチュール】今治ウォッシュタオル5枚セット</dt>
                    <dd class=\"ec-rankingRole__itemPrice\">&yen;3,300  </dd>
                </dl>
            </a>
        </li>
        <li class=\"ec-rankingRole__listItem\">
            <!--ランキング5位-->
            <a href=\"";
        // line 65
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_detail", ["id" => 340]);
        echo "\">
            <h4 class=\"ec-rankingRole__itemDetail\"></h4>
                <div class=\"ec-rankingRole__itemPhoto\"><img src=\"/html/upload/save_image/0401085959_642773ff91edb.png\"></div>
                <dl>
                    <dt class=\"ec-rankingRole__itemName\">【TEAtriCO】ティート3種セット 「食べられるお茶」ス</dt>
                    <dd class=\"ec-rankingRole__itemPrice\">&yen;3,326</dd>
                </dl>
            </a>
        </li>
        <li class=\"ec-rankingRole__listItem\">
            <!--ランキング6位-->
            <a href=\"";
        // line 76
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_detail", ["id" => 403]);
        echo "\">
            <h4 class=\"ec-rankingRole__itemDetail\"></h4>
                <div class=\"ec-rankingRole__itemPhoto\"><img src=\"/html/upload/save_image/0614223822_6489c2ce5420f.png\"></div>
                <dl>
                    <dt class=\"ec-rankingRole__itemName\">【Aenak】ガーゼセット</dt>
                    <dd class=\"ec-rankingRole__itemPrice\">&yen;4,180 </dd>
                </dl>
            </a>
        </li>
        <li class=\"ec-rankingRole__listItem\">
            <!--ランキング7位以下は非表示にしています-->
            <h4 class=\"ec-rankingRole__itemRank\">
                <img src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/assets/img/ranking/ico_ranking07.png"), "html", null, true);
        echo "\">
            </h4>
            <a href=\"https://gift-communication.shop/products/detail/81\">
                <div class=\"ec-rankingRole__itemPhoto\"><img src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/top/ranking_07.jpg"), "html", null, true);
        echo "\"></div>
                <dl>
                    <dt class=\"ec-rankingRole__itemName\">【ColleenWilcox】ネオプレーントートバッグ</dt>
                    <dd class=\"ec-rankingRole__itemPrice\">&yen;6,050</dd>
                </dl>
            </a>
        </li>
        <li class=\"ec-rankingRole__listItem\">
            <!--ランキング8位-->
            <dt class=\"ec-rankingRole__itemRank\">
                <img src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/assets/img/ranking/ico_ranking08.png"), "html", null, true);
        echo "\">
            </dt>
            <a href=\"https://gift-communication.shop/products/detail/138\">
                <div class=\"ec-rankingRole__itemPhoto\"><img src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/top/ranking_08.jpg"), "html", null, true);
        echo "\"></div>
                <dl>
                    <dt class=\"ec-rankingRole__itemName\">ベビーバスラップ　ギフトセットドラゴン 0-24ヶ月</dt>
                    <dd class=\"ec-rankingRole__itemPrice\">&yen;5,390</dd>
                </dl>
            </a>
        </li>
        <li class=\"ec-rankingRole__listItem\">
            <!--ランキング9位-->
            <dt class=\"ec-rankingRole__itemRank\">
                <img src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/assets/img/ranking/ico_ranking09.png"), "html", null, true);
        echo "\">
            </dt>
            <a href=\"https://gift-communication.shop/products/detail/19\">
                <div class=\"ec-rankingRole__itemPhoto\"><img src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/top/ranking_09.jpg"), "html", null, true);
        echo "\"></div>
                <dl>
                    <dt class=\"ec-rankingRole__itemName\">ビオリス ボタニカルヘアオイル</dt>
                    <dd class=\"ec-rankingRole__itemPrice\">&yen;1,100</dd>
                </dl>
            </a>
        </li>
        <li class=\"ec-rankingRole__listItem\">
            <!--ランキング10位-->
            <dt class=\"ec-rankingRole__itemRank\">
                <img src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/assets/img/ranking/ico_ranking10.png"), "html", null, true);
        echo "\">
            </dt>
            <a href=\"https://gift-communication.shop/products/detail/132\">
                <div class=\"ec-rankingRole__itemPhoto\"><img src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/top/ranking_10.jpg"), "html", null, true);
        echo "\"></div>
                <dl>
                    <dt class=\"ec-rankingRole__itemName\">ミニバスソルトアソートボックス【入浴剤】スイートミックス</dt>
                    <dd class=\"ec-rankingRole__itemPrice\">&yen;1,320</dd>
                </dl>
            </a>
        </li>
    </ol>
</div>
<!--▲人気商品ランキング　※トピックブロックにあります▲-->

<!--▼ピックアップ　※トピックブロックにあります▼-->
";
        // line 195
        echo "<!-- トピックブロック[END] -->";
    }

    public function getTemplateName()
    {
        return "Block/topic.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 195,  196 => 130,  190 => 127,  177 => 117,  171 => 114,  158 => 104,  152 => 101,  139 => 91,  133 => 88,  118 => 76,  104 => 65,  90 => 54,  76 => 43,  62 => 32,  48 => 21,  37 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "Block/topic.twig", "/var/www/html/eccube-4-new/app/template/responceWebDesign/Block/topic.twig");
    }
}
