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
class __TwigTemplate_4d335408491c32e373fa6f23dc493c52bb0a442aac0d145f00c5380f16bd5ba8 extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Block/topic.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Block/topic.twig"));

        // line 11
        echo "<!-- トピックブロック[BEGIN] -->
<!--▼人気商品ランキング　※トピックブロックにあります▼-->
<div class=\"ec-rankingRole\">
    <h3 class=\"ec-rankingRole__title\">
        Ranking
    </h3>
    <ol class=\"ec-rankingRole__list\">
        <li class=\"ec-rankingRole__listItem\">
            <!--ランキング１位-->
            <a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_detail", ["id" => 244]);
        echo "\">
            <h4 class=\"ec-rankingRole__itemDetail\"></h4>
                <div class=\"ec-rankingRole__itemPhoto\"><img src=\"/html/upload/save_image/0316142333_623174558e2da.jpeg\"></div>
                <dl>
                    <dt class=\"ec-rankingRole__itemName\">【GRASSE TOKYO】 フレグランスソルト360ｇ　ピーチローズ</dt>
                    <dd class=\"ec-rankingRole__itemPrice\">&yen;2,640</dd>
                </dl>
            </a>
        </li>
        <li class=\"ec-rankingRole__listItem\">
            <!--ランキング2位-->
            <a href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_detail", ["id" => 235]);
        echo "\">
            <h4 class=\"ec-rankingRole__itemDetail\"></h4>
                <div class=\"ec-rankingRole__itemPhoto\"><img src=\"/html/upload/save_image/1013225425_6166e51193c4d.png\"></div>
                <dl>
                    <dt class=\"ec-rankingRole__itemName\">【CLAYD for bath】WEEKBOOK</dt>
                    <dd class=\"ec-rankingRole__itemPrice\">&yen;3,850</dd>
                </dl>
            </a>
        </li>
        <li class=\"ec-rankingRole__listItem\">
            <!--ランキング3位-->
            <a href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_detail", ["id" => 186]);
        echo "\">
            <h4 class=\"ec-rankingRole__itemDetail\"></h4>
                <div class=\"ec-rankingRole__itemPhoto\"><img src=\"/html/upload/save_image/0430223124_608c06ace8a40.jpeg\"></div>
                <dl>
                    <dt class=\"ec-rankingRole__itemName\">【EARTH】アースハート ナチュラルオイル ヘア&ボディ&ハンド用オイル</dt>
                    <dd class=\"ec-rankingRole__itemPrice\">&yen;3,190</dd>
                </dl>
            </a>
        </li>
        <li class=\"ec-rankingRole__listItem\">
            <!--ランキング4位-->
            <a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_detail", ["id" => 152]);
        echo "\">
            <h4 class=\"ec-rankingRole__itemDetail\"></h4>
                <div class=\"ec-rankingRole__itemPhoto\"><img src=\"/html/upload/save_image/0609020155_62a0d6032aae1.png\"></div>
                <dl>
                    <dt class=\"ec-rankingRole__itemName\">スカルプヘアブラシプレミアム　ショート　ギフトセット（スタンド・携帯ケース付）【日本製】</dt>
                    <dd class=\"ec-rankingRole__itemPrice\">&yen;7,390</dd>
                </dl>
            </a>
        </li>
        <li class=\"ec-rankingRole__listItem\">
            <!--ランキング5位-->
            <a href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_detail", ["id" => 193]);
        echo "\">
            <h4 class=\"ec-rankingRole__itemDetail\"></h4>
                <div class=\"ec-rankingRole__itemPhoto\"><img src=\"/html/upload/save_image/0630003543_62bc714fc2b34.png\"></div>
                <dl>
                    <dt class=\"ec-rankingRole__itemName\">【Davids】ホワイトニングトゥースペースト（スペアミント）</dt>
                    <dd class=\"ec-rankingRole__itemPrice\">&yen;1,980</dd>
                </dl>
            </a>
        </li>
        <li class=\"ec-rankingRole__listItem\">
            <!--ランキング6位-->
            <a href=\"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_detail", ["id" => 33]);
        echo "\">
            <h4 class=\"ec-rankingRole__itemDetail\"></h4>
                <div class=\"ec-rankingRole__itemPhoto\"><img src=\"/html/upload/save_image/0831081651_612d66e351e44.png\"></div>
                <dl>
                    <dt class=\"ec-rankingRole__itemName\">【INSTITUT KARITE】センシッドシアバター10ｍｌ　ローズ</dt>
                    <dd class=\"ec-rankingRole__itemPrice\">&yen;990</dd>
                </dl>
            </a>
        </li>
        <li class=\"ec-rankingRole__listItem\">
            <!--ランキング7位以下は非表示にしています-->
            <h4 class=\"ec-rankingRole__itemRank\">
                <img src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/assets/img/ranking/ico_ranking07.png"), "html", null, true);
        echo "\">
            </h4>
            <a href=\"https://gift-communication.shop/products/detail/81\">
                <div class=\"ec-rankingRole__itemPhoto\"><img src=\"";
        // line 90
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
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/assets/img/ranking/ico_ranking08.png"), "html", null, true);
        echo "\">
            </dt>
            <a href=\"https://gift-communication.shop/products/detail/138\">
                <div class=\"ec-rankingRole__itemPhoto\"><img src=\"";
        // line 103
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
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/assets/img/ranking/ico_ranking09.png"), "html", null, true);
        echo "\">
            </dt>
            <a href=\"https://gift-communication.shop/products/detail/19\">
                <div class=\"ec-rankingRole__itemPhoto\"><img src=\"";
        // line 116
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
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/assets/img/ranking/ico_ranking10.png"), "html", null, true);
        echo "\">
            </dt>
            <a href=\"https://gift-communication.shop/products/detail/132\">
                <div class=\"ec-rankingRole__itemPhoto\"><img src=\"";
        // line 129
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
        // line 194
        echo "<!-- トピックブロック[END] -->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  217 => 194,  202 => 129,  196 => 126,  183 => 116,  177 => 113,  164 => 103,  158 => 100,  145 => 90,  139 => 87,  124 => 75,  110 => 64,  96 => 53,  82 => 42,  68 => 31,  54 => 20,  43 => 11,);
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
<!-- トピックブロック[BEGIN] -->
<!--▼人気商品ランキング　※トピックブロックにあります▼-->
<div class=\"ec-rankingRole\">
    <h3 class=\"ec-rankingRole__title\">
        Ranking
    </h3>
    <ol class=\"ec-rankingRole__list\">
        <li class=\"ec-rankingRole__listItem\">
            <!--ランキング１位-->
            <a href=\"{{ url('product_detail', {'id': 244}) }}\">
            <h4 class=\"ec-rankingRole__itemDetail\"></h4>
                <div class=\"ec-rankingRole__itemPhoto\"><img src=\"/html/upload/save_image/0316142333_623174558e2da.jpeg\"></div>
                <dl>
                    <dt class=\"ec-rankingRole__itemName\">【GRASSE TOKYO】 フレグランスソルト360ｇ　ピーチローズ</dt>
                    <dd class=\"ec-rankingRole__itemPrice\">&yen;2,640</dd>
                </dl>
            </a>
        </li>
        <li class=\"ec-rankingRole__listItem\">
            <!--ランキング2位-->
            <a href=\"{{ url('product_detail', {'id': 235}) }}\">
            <h4 class=\"ec-rankingRole__itemDetail\"></h4>
                <div class=\"ec-rankingRole__itemPhoto\"><img src=\"/html/upload/save_image/1013225425_6166e51193c4d.png\"></div>
                <dl>
                    <dt class=\"ec-rankingRole__itemName\">【CLAYD for bath】WEEKBOOK</dt>
                    <dd class=\"ec-rankingRole__itemPrice\">&yen;3,850</dd>
                </dl>
            </a>
        </li>
        <li class=\"ec-rankingRole__listItem\">
            <!--ランキング3位-->
            <a href=\"{{ url('product_detail', {'id': 186}) }}\">
            <h4 class=\"ec-rankingRole__itemDetail\"></h4>
                <div class=\"ec-rankingRole__itemPhoto\"><img src=\"/html/upload/save_image/0430223124_608c06ace8a40.jpeg\"></div>
                <dl>
                    <dt class=\"ec-rankingRole__itemName\">【EARTH】アースハート ナチュラルオイル ヘア&ボディ&ハンド用オイル</dt>
                    <dd class=\"ec-rankingRole__itemPrice\">&yen;3,190</dd>
                </dl>
            </a>
        </li>
        <li class=\"ec-rankingRole__listItem\">
            <!--ランキング4位-->
            <a href=\"{{ url('product_detail', {'id': 152}) }}\">
            <h4 class=\"ec-rankingRole__itemDetail\"></h4>
                <div class=\"ec-rankingRole__itemPhoto\"><img src=\"/html/upload/save_image/0609020155_62a0d6032aae1.png\"></div>
                <dl>
                    <dt class=\"ec-rankingRole__itemName\">スカルプヘアブラシプレミアム　ショート　ギフトセット（スタンド・携帯ケース付）【日本製】</dt>
                    <dd class=\"ec-rankingRole__itemPrice\">&yen;7,390</dd>
                </dl>
            </a>
        </li>
        <li class=\"ec-rankingRole__listItem\">
            <!--ランキング5位-->
            <a href=\"{{ url('product_detail', {'id': 193}) }}\">
            <h4 class=\"ec-rankingRole__itemDetail\"></h4>
                <div class=\"ec-rankingRole__itemPhoto\"><img src=\"/html/upload/save_image/0630003543_62bc714fc2b34.png\"></div>
                <dl>
                    <dt class=\"ec-rankingRole__itemName\">【Davids】ホワイトニングトゥースペースト（スペアミント）</dt>
                    <dd class=\"ec-rankingRole__itemPrice\">&yen;1,980</dd>
                </dl>
            </a>
        </li>
        <li class=\"ec-rankingRole__listItem\">
            <!--ランキング6位-->
            <a href=\"{{ url('product_detail', {'id': 33}) }}\">
            <h4 class=\"ec-rankingRole__itemDetail\"></h4>
                <div class=\"ec-rankingRole__itemPhoto\"><img src=\"/html/upload/save_image/0831081651_612d66e351e44.png\"></div>
                <dl>
                    <dt class=\"ec-rankingRole__itemName\">【INSTITUT KARITE】センシッドシアバター10ｍｌ　ローズ</dt>
                    <dd class=\"ec-rankingRole__itemPrice\">&yen;990</dd>
                </dl>
            </a>
        </li>
        <li class=\"ec-rankingRole__listItem\">
            <!--ランキング7位以下は非表示にしています-->
            <h4 class=\"ec-rankingRole__itemRank\">
                <img src=\"{{ asset('/html/user_data/assets/img/ranking/ico_ranking07.png') }}\">
            </h4>
            <a href=\"https://gift-communication.shop/products/detail/81\">
                <div class=\"ec-rankingRole__itemPhoto\"><img src=\"{{ asset('assets/img/top/ranking_07.jpg') }}\"></div>
                <dl>
                    <dt class=\"ec-rankingRole__itemName\">【ColleenWilcox】ネオプレーントートバッグ</dt>
                    <dd class=\"ec-rankingRole__itemPrice\">&yen;6,050</dd>
                </dl>
            </a>
        </li>
        <li class=\"ec-rankingRole__listItem\">
            <!--ランキング8位-->
            <dt class=\"ec-rankingRole__itemRank\">
                <img src=\"{{ asset('/html/user_data/assets/img/ranking/ico_ranking08.png') }}\">
            </dt>
            <a href=\"https://gift-communication.shop/products/detail/138\">
                <div class=\"ec-rankingRole__itemPhoto\"><img src=\"{{ asset('assets/img/top/ranking_08.jpg') }}\"></div>
                <dl>
                    <dt class=\"ec-rankingRole__itemName\">ベビーバスラップ　ギフトセットドラゴン 0-24ヶ月</dt>
                    <dd class=\"ec-rankingRole__itemPrice\">&yen;5,390</dd>
                </dl>
            </a>
        </li>
        <li class=\"ec-rankingRole__listItem\">
            <!--ランキング9位-->
            <dt class=\"ec-rankingRole__itemRank\">
                <img src=\"{{ asset('/html/user_data/assets/img/ranking/ico_ranking09.png') }}\">
            </dt>
            <a href=\"https://gift-communication.shop/products/detail/19\">
                <div class=\"ec-rankingRole__itemPhoto\"><img src=\"{{ asset('assets/img/top/ranking_09.jpg') }}\"></div>
                <dl>
                    <dt class=\"ec-rankingRole__itemName\">ビオリス ボタニカルヘアオイル</dt>
                    <dd class=\"ec-rankingRole__itemPrice\">&yen;1,100</dd>
                </dl>
            </a>
        </li>
        <li class=\"ec-rankingRole__listItem\">
            <!--ランキング10位-->
            <dt class=\"ec-rankingRole__itemRank\">
                <img src=\"{{ asset('/html/user_data/assets/img/ranking/ico_ranking10.png') }}\">
            </dt>
            <a href=\"https://gift-communication.shop/products/detail/132\">
                <div class=\"ec-rankingRole__itemPhoto\"><img src=\"{{ asset('assets/img/top/ranking_10.jpg') }}\"></div>
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
{#
<div class=\"ec-pickupRole\">
  <div class=\"ec-pickupRole__wrapper\">
    <h3 class=\"ec-pickupRole__title\">
      <img src=\"{{ asset('assets/img/top/tit_pick_up.svg') }}\">
    </h3>
    <div class=\"ec-pickupRole__list\">
      <ul class=\"col-sm-4 col-xs-12\">
        <li>
          <a href=\"{{ url('product_detail', {id: 2}) }}\">
            <img src=\"{{ asset('assets/img/top/pick_up_01.jpg') }}\">
          </a>
        </li>
        <li>
          <a href=\"{{ url('product_detail', {id: 2}) }}\">
            <img src=\"{{ asset('assets/img/top/pick_up_02.jpg') }}\">
          </a>
        </li>
      </ul>
      <ul class=\"col-sm-4 col-xs-12\">
        <li class=\"col-sm-6 col-xs-6\">
          <a href=\"{{ url('product_detail', {id: 2}) }}\">
            <img src=\"{{ asset('assets/img/top/pick_up_03.jpg') }}\">
          </a>
        </li>
        <li class=\"col-sm-6 col-xs-6 floatRight\">
          <a href=\"{{ url('product_detail', {id: 2}) }}\">
            <img src=\"{{ asset('assets/img/top/pick_up_04.jpg') }}\">
          </a>
        </li>
        <li class=\"col-sm-12 col-xs-12\">
          <a href=\"{{ url('product_detail', {id: 2}) }}\">
            <img src=\"{{ asset('assets/img/top/pick_up_05.jpg') }}\">
          </a>
        </li>
      </ul>
      <ul class=\"col-sm-4 col-xs-12\">
        <li>
          <a href=\"{{ url('product_detail', {id: 2}) }}\">
            <img src=\"{{ asset('assets/img/top/pick_up_06.jpg') }}\">
          </a>
        </li>
        <li>
          <a href=\"{{ url('product_detail', {id: 2}) }}\">
            <img src=\"{{ asset('assets/img/top/pick_up_07.jpg') }}\">
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>
<!--▲ピックアップ　※トピックブロックにあります▲-->
#}
<!-- トピックブロック[END] -->", "Block/topic.twig", "/var/www/html/eccube-4-new/app/template/responceWebDesign/Block/topic.twig");
    }
}
