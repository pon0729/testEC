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

/* @user_data/subscription.twig */
class __TwigTemplate_3a09808820a718ce34cbeaf8b0d4d359572425f9c6b3ffc03cf9896d28d9b186 extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
            'javascript' => [$this, 'block_javascript'],
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
        $this->parent = $this->loadTemplate("default_frame.twig", "@user_data/subscription.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "    <div class=\"ec-role\">
        <div id=\"guide\" class=\"ec-pageHeader\">
            <h1>";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご利用ガイド"), "html", null, true);
        echo "</h1>
        </div>
        <div id=\"payment\">
            <h3>お支払い方法について</h3>
            <h4>《店舗》</h4>
            <p><span>現金、クレジットカード</span>にてお支払いいただけます。</p>
            <p>※VISA、マスターに限る</p>
            <br/>
            <h4>《オンラインストア》</h4>
            <p><span>代引き</span>がご利用いただけます。</p>
            <p>１万円未満３００円　３万円未満４００円　１０万円未満６００円　３０万円まで１０００円(税別）</p>
        </div>
        <div id=\"shipping\">
            <h3>送料について</h3>
            <p>この商品の送料は、配送方法によって異なります。</p>
            <p>配送方法は、ご購入時に選択することができます。</p>
            <p>ヤマト宅急便</p>
            <p>ヤマトが提供する定番の配送方法です。荷物追跡に対応しています。（地域別設定）</p>
        </div>
            <div class=\"shippingInfoBlock\">
                <div class=\"shippingInfo__inner\">
                    <div id=\"x_shippingAreaDomestic\" class=\"shippingInfo__tabArea is_active\">
                        <ul class=\"shippingListBlock\">
                            <li class=\"shippingList\">
                                <div class=\"shippingList__table\">
                                    <table border=\"1\">
                                        <tr>
                                            <th class=\"size_three\">大きさ(3辺計)</th>
                                            <th class=\"dead_weight\">重量</th>
                                            <th><span>北海道</span>北海道</th>
                                            <th><span>北東北</span>青森・岩手・秋田</th>
                                            <th><span>★南東北</span>宮城・山形・福島</th>
            \t\t\t\t\t\t\t\t<th><span>★関東</span>茨城・栃木・群馬・埼玉・千葉・東京・神奈川・山梨</th>
                                            <th><span>★信越</span>新潟・長野</th>
                                            <th><span>★北陸</span>富山・石川・福井</th>
            \t\t\t\t\t\t\t\t<th><span>★中部</span>岐阜・静岡・愛知・三重</th>
                                            <th><span>関西</span>滋賀・京都・大阪・兵庫・奈良・和歌山</th>
                                            <th><span>中国</span>鳥取・島根・岡山・広島・山口</th>
            \t\t\t\t\t\t\t\t<th><span>四国</span>徳島・香川・愛媛・高知</th>
                                            <th><span>九州</span>福岡・佐賀・長崎・熊本・大分・宮崎・鹿児島</th>
                                            <th><span>沖縄</span>沖縄</th>
                                        </tr>
                                        <tr>
                                            <th class=\"size_three\">60cm以内</th>
                                            <th class=\"dead_weight\">2kg以内</th>
                                            <td>1,370円</td>
                                            <td>1,040円</td>
                                            <td>930円</td>
            \t\t\t\t\t\t\t\t<td>930円</td>
                                            <td>930円</td>
                                            <td>930円</td>
            \t\t\t\t\t\t\t\t<td>930円</td>
                                            <td>1,040円</td>
                                            <td>1,150円</td>
            \t\t\t\t\t\t\t\t<td>1,150円</td>
                                            <td>1,370円</td>
                                            <td>1,370円</td>
                                        </tr>
                                        <tr>
                                            <th class=\"size_three\">80cm以内</th>
                                            <th class=\"dead_weight\">5kg以内</th>
                                            <td>1,590円</td>
                                            <td>1,260円</td>
                                            <td>1,150円</td>
            \t\t\t\t\t\t\t\t<td>1,150円</td>
                                            <td>1,150円</td>
                                            <td>1,150円</td>
            \t\t\t\t\t\t\t\t<td>1,150円</td>
                                            <td>1,260円</td>
                                            <td>1,370円</td>
            \t\t\t\t\t\t\t\t<td>1,370円</td>
                                            <td>1,590円</td>
                                            <td>1,920円</td>
                                        </tr>
                                        <tr>
                                            <th class=\"size_three\">100cm以内</th>
                                            <th class=\"dead_weight\">10kg以内</th>
                                            <td>1,830円</td>
                                            <td>1,500円</td>
                                            <td>1,390円</td>
            \t\t\t\t\t\t\t\t<td>1,390円</td>
                                            <td>1,390円</td>
                                            <td>1,390円</td>
            \t\t\t\t\t\t\t\t<td>1,390円</td>
                                            <td>1,500円</td>
                                            <td>1,610円</td>
            \t\t\t\t\t\t\t\t<td>1,610円</td>
                                            <td>1,830円</td>
                                            <td>2,490円</td>
                                        </tr>
                                        <tr>
                                            <th class=\"size_three\">120cm以内</th>
                                            <th class=\"dead_weight\">15kg以内</th>
                                            <td>2,050円</td>
                                            <td>1,720円</td>
                                            <td>1,610円</td>
            \t\t\t\t\t\t\t\t<td>1,610円</td>
                                            <td>1,610円</td>
                                            <td>1,610円</td>
            \t\t\t\t\t\t\t\t<td>1,610円</td>
                                            <td>1,720円</td>
                                            <td>1,830円</td>
            \t\t\t\t\t\t\t\t<td>1,830円</td>
                                            <td>2,050円</td>
                                            <td>3,040円</td>
                                        </tr>
                                        <tr>
                                            <th class=\"size_three\">140cm以内</th>
                                            <th class=\"dead_weight\">20kg以内</th>
                                            <td>2,290円</td>
                                            <td>1,960円</td>
                                            <td>1,850円</td>
            \t\t\t\t\t\t\t\t<td>1,850円</td>
                                            <td>1,850円</td>
                                            <td>1,850円</td>
            \t\t\t\t\t\t\t\t<td>1,850円</td>
                                            <td>1,960円</td>
                                            <td>2,070円</td>
            \t\t\t\t\t\t\t\t<td>2,070円</td>
                                            <td>2,290円</td>
                                            <td>3,610円</td>
                                        </tr>
                                        <tr>
                                            <th class=\"size_three\">160cm以内</th>
                                            <th class=\"dead_weight\">25kg以内</th>
                                            <td>2,510円</td>
                                            <td>2,180円</td>
                                            <td>2,070円</td>
            \t\t\t\t\t\t\t\t<td>2,070円</td>
                                            <td>2,070円</td>
                                            <td>2,070円</td>
            \t\t\t\t\t\t\t\t<td>2,070円</td>
                                            <td>2,180円</td>
                                            <td>2,290円</td>
            \t\t\t\t\t\t\t\t<td>2,290円</td>
                                            <td>2,510円</td>
                                            <td>4,160円</td>
                                        </tr>
                                    </table>
                                </div>
                            </li>
                        <!-- <li class=\"shippingList\">
                            <h4 class=\"shippingList__title\">
                                ゆうパック </h4>
        
                            <p class=\"shippingList__description\">
                                日本郵便が提供する宅配サービスです。荷物追跡に対応しています。 </p> --><!-- /.shippingList__description -->
                        <!--    <div class=\"priceSet\">
                                地域別設定 </div>
                            <div class=\"shippingList__info\">
                                <ul class=\"areaSetting_map\">
                                    <li class=\"area1 postageArea\">
                                        <div>
                                            <p class=\"areaTitle\">北海道</p>
                                            <ul class=\"prefBox clearfix\">
                                                <li class=\"prefBox__list \">
                                                    <div>
                                                        <span class=\"prefecture\">北海道</span>
                                                        <span class=\"postage\">
                                                            1,300円 </span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class=\"area2 postageArea\">
                                        <div>
                                            <p class=\"areaTitle\">東北</p>
                                            <ul class=\"prefBox clearfix\">
                                                <li class=\"prefBox__list \">
                                                    <div>
                                                        <span class=\"prefecture\">青森県</span>
                                                        <span class=\"postage\">
                                                            870円 </span>
                                                    </div>
                                                </li>
                                                <li class=\"prefBox__list \">
                                                    <div>
                                                        <span class=\"prefecture\">岩手県</span>
                                                        <span class=\"postage\">
                                                            870円 </span>
                                                    </div>
                                                </li>
                                                <li class=\"prefBox__list \">
                                                    <div>
                                                        <span class=\"prefecture\">宮城県</span>
                                                        <span class=\"postage\">
                                                            870円 </span>
                                                    </div>
                                                </li>
                                                <li class=\"prefBox__list \">
                                                    <div>
                                                        <span class=\"prefecture\">秋田県</span>
                                                        <span class=\"postage\">
                                                            870円 </span>
                                                    </div>
                                                </li>
                                                <li class=\"prefBox__list \">
                                                    <div>
                                                        <span class=\"prefecture\">山形県</span>
                                                        <span class=\"postage\">
                                                            870円 </span>
                                                    </div>
                                                </li>
                                                <li class=\"prefBox__list \">
                                                    <div>
                                                        <span class=\"prefecture\">福島県</span>
                                                        <span class=\"postage\">
                                                            870円 </span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class=\"area3 postageArea\">
                                        <div>
                                            <p class=\"areaTitle\">関東</p>
                                            <ul class=\"prefBox clearfix\">
                                                <li class=\"prefBox__list \">
                                                    <div>
                                                        <span class=\"prefecture\">茨城県</span>
                                                        <span class=\"postage\">
                                                            870円 </span>
                                                    </div>
                                                </li>
                                                <li class=\"prefBox__list \">
                                                    <div>
                                                        <span class=\"prefecture\">栃木県</span>
                                                        <span class=\"postage\">
                                                            870円 </span>
                                                    </div>
                                                </li>
                                                <li class=\"prefBox__list \">
                                                    <div>
                                                        <span class=\"prefecture\">群馬県</span>
                                                        <span class=\"postage\">
                                                            870円 </span>
                                                    </div>
                                                </li>
                                                <li class=\"prefBox__list \">
                                                    <div>
                                                        <span class=\"prefecture\">埼玉県</span>
                                                        <span class=\"postage\">
                                                            870円 </span>
                                                    </div>
                                                </li>
                                                <li class=\"prefBox__list \">
                                                    <div>
                                                        <span class=\"prefecture\">千葉県</span>
                                                        <span class=\"postage\">
                                                            870円 </span>
                                                    </div>
                                                </li>
                                                <li class=\"prefBox__list \">
                                                    <div>
                                                        <span class=\"prefecture\">東京都</span>
                                                        <span class=\"postage\">
                                                            810円 </span>
                                                    </div>
                                                </li>
                                                <li class=\"prefBox__list \">
                                                    <div>
                                                        <span class=\"prefecture\">神奈川県</span>
                                                        <span class=\"postage\">
                                                            870円 </span>
                                                    </div>
                                                </li>
                                                <li class=\"prefBox__list \">
                                                    <div>
                                                        <span class=\"prefecture\">山梨県</span>
                                                        <span class=\"postage\">
                                                            870円 </span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class=\"area4 postageArea\">
                                        <div>
                                            <p class=\"areaTitle\">信越</p>
                                            <ul class=\"prefBox clearfix\">
                                                <li class=\"prefBox__list \">
                                                    <div>
                                                        <span class=\"prefecture\">新潟県</span>
                                                        <span class=\"postage\">
                                                            870円 </span>
                                                    </div>
                                                </li>
                                                <li class=\"prefBox__list \">
                                                    <div>
                                                        <span class=\"prefecture\">長野県</span>
                                                        <span class=\"postage\">
                                                            870円 </span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class=\"area5 postageArea\">
                                        <div>
                                            <p class=\"areaTitle\">北陸</p>
                                            <ul class=\"prefBox clearfix\">
                                                <li class=\"prefBox__list \">
                                                    <div>
                                                        <span class=\"prefecture\">富山県</span>
                                                        <span class=\"postage\">
                                                            870円 </span>
                                                    </div>
                                                </li>
                                                <li class=\"prefBox__list \">
                                                    <div>
                                                        <span class=\"prefecture\">石川県</span>
                                                        <span class=\"postage\">
                                                            870円 </span>
                                                    </div>
                                                </li>
                                                <li class=\"prefBox__list \">
                                                    <div>
                                                        <span class=\"prefecture\">福井県</span>
                                                        <span class=\"postage\">
                                                            870円 </span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class=\"area6 postageArea\">
                                        <div>
                                            <p class=\"areaTitle\">東海</p>
                                            <ul class=\"prefBox clearfix\">
                                                <li class=\"prefBox__list \">
                                                    <div>
                                                        <span class=\"prefecture\">岐阜県</span>
                                                        <span class=\"postage\">
                                                            870円 </span>
                                                    </div>
                                                </li>
                                                <li class=\"prefBox__list \">
                                                    <div>
                                                        <span class=\"prefecture\">静岡県</span>
                                                        <span class=\"postage\">
                                                            870円 </span>
                                                    </div>
                                                </li>
                                                <li class=\"prefBox__list \">
                                                    <div>
                                                        <span class=\"prefecture\">愛知県</span>
                                                        <span class=\"postage\">
                                                            870円 </span>
                                                    </div>
                                                </li>
                                                <li class=\"prefBox__list \">
                                                    <div>
                                                        <span class=\"prefecture\">三重県</span>
                                                        <span class=\"postage\">
                                                            870円 </span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class=\"area7 postageArea\">
                                        <div>
                                            <p class=\"areaTitle\">近畿</p>
                                            <ul class=\"prefBox clearfix\">
                                                <li class=\"prefBox__list \">
                                                    <div>
                                                        <span class=\"prefecture\">滋賀県</span>
                                                        <span class=\"postage\">
                                                            970円 </span>
                                                    </div>
                                                </li>
                                                <li class=\"prefBox__list \">
                                                    <div>
                                                        <span class=\"prefecture\">京都府</span>
                                                        <span class=\"postage\">
                                                            970円 </span>
                                                    </div>
                                                </li>
                                                <li class=\"prefBox__list \">
                                                    <div>
                                                        <span class=\"prefecture\">大阪府</span>
                                                        <span class=\"postage\">
                                                            970円 </span>
                                                    </div>
                                                </li>
                                                <li class=\"prefBox__list \">
                                                    <div>
                                                        <span class=\"prefecture\">兵庫県</span>
                                                        <span class=\"postage\">
                                                            970円 </span>
                                                    </div>
                                                </li>
                                                <li class=\"prefBox__list \">
                                                    <div>
                                                        <span class=\"prefecture\">奈良県</span>
                                                        <span class=\"postage\">
                                                            970円 </span>
                                                    </div>
                                                </li>
                                                <li class=\"prefBox__list \">
                                                    <div>
                                                        <span class=\"prefecture\">和歌山県</span>
                                                        <span class=\"postage\">
                                                            970円 </span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class=\"area8 postageArea\">
                                        <div>
                                            <p class=\"areaTitle\">中国</p>
                                            <ul class=\"prefBox clearfix\">
                                                <li class=\"prefBox__list \">
                                                    <div>
                                                        <span class=\"prefecture\">鳥取県</span>
                                                        <span class=\"postage\">
                                                            1,100円 </span>
                                                    </div>
                                                </li>
                                                <li class=\"prefBox__list \">
                                                    <div>
                                                        <span class=\"prefecture\">島根県</span>
                                                        <span class=\"postage\">
                                                            1,100円 </span>
                                                    </div>
                                                </li>
                                                <li class=\"prefBox__list \">
                                                    <div>
                                                        <span class=\"prefecture\">岡山県</span>
                                                        <span class=\"postage\">
                                                            1,100円 </span>
                                                    </div>
                                                </li>
                                                <li class=\"prefBox__list \">
                                                    <div>
                                                        <span class=\"prefecture\">広島県</span>
                                                        <span class=\"postage\">
                                                            1,100円 </span>
                                                    </div>
                                                </li>
                                                <li class=\"prefBox__list \">
                                                    <div>
                                                        <span class=\"prefecture\">山口県</span>
                                                        <span class=\"postage\">
                                                            1,100円 </span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class=\"area9 postageArea\">
                                        <div>
                                            <p class=\"areaTitle\">四国</p>
                                            <ul class=\"prefBox clearfix\">
                                                <li class=\"prefBox__list \">
                                                    <div>
                                                        <span class=\"prefecture\">徳島県</span>
                                                        <span class=\"postage\">
                                                            1,100円 </span>
                                                    </div>
                                                </li>
                                                <li class=\"prefBox__list \">
                                                    <div>
                                                        <span class=\"prefecture\">香川県</span>
                                                        <span class=\"postage\">
                                                            1,100円 </span>
                                                    </div>
                                                </li>
                                                <li class=\"prefBox__list \">
                                                    <div>
                                                        <span class=\"prefecture\">愛媛県</span>
                                                        <span class=\"postage\">
                                                            1,100円 </span>
                                                    </div>
                                                </li>
                                                <li class=\"prefBox__list \">
                                                    <div>
                                                        <span class=\"prefecture\">高知県</span>
                                                        <span class=\"postage\">
                                                            1,100円 </span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class=\"area10 postageArea\">
                                        <div>
                                            <p class=\"areaTitle\">九州</p>
                                            <ul class=\"prefBox clearfix\">
                                                <li class=\"prefBox__list \">
                                                    <div>
                                                        <span class=\"prefecture\">福岡県</span>
                                                        <span class=\"postage\">
                                                            1,300円 </span>
                                                    </div>
                                                </li>
                                                <li class=\"prefBox__list \">
                                                    <div>
                                                        <span class=\"prefecture\">佐賀県</span>
                                                        <span class=\"postage\">
                                                            1,300円 </span>
                                                    </div>
                                                </li>
                                                <li class=\"prefBox__list \">
                                                    <div>
                                                        <span class=\"prefecture\">長崎県</span>
                                                        <span class=\"postage\">
                                                            1,300円 </span>
                                                    </div>
                                                </li>
                                                <li class=\"prefBox__list \">
                                                    <div>
                                                        <span class=\"prefecture\">熊本県</span>
                                                        <span class=\"postage\">
                                                            1,300円 </span>
                                                    </div>
                                                </li>
                                                <li class=\"prefBox__list \">
                                                    <div>
                                                        <span class=\"prefecture\">大分県</span>
                                                        <span class=\"postage\">
                                                            1,300円 </span>
                                                    </div>
                                                </li>
                                                <li class=\"prefBox__list \">
                                                    <div>
                                                        <span class=\"prefecture\">宮崎県</span>
                                                        <span class=\"postage\">
                                                            1,300円 </span>
                                                    </div>
                                                </li>
                                                <li class=\"prefBox__list \">
                                                    <div>
                                                        <span class=\"prefecture\">鹿児島県</span>
                                                        <span class=\"postage\">
                                                            1,300円 </span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class=\"area11 postageArea\">
                                        <div>
                                            <p class=\"areaTitle\">沖縄</p>
                                            <ul class=\"prefBox clearfix\">
                                                <li class=\"prefBox__list \">
                                                    <div>
                                                        <span class=\"prefecture\">沖縄県</span>
                                                        <span class=\"postage\">
                                                            1,350円 </span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>--><!-- /.areaSetting_map -->
                            <!--</div>--><!-- /.shippingList__info -->
                        <!--</li>-->
                        </ul>
                    </div>
                </div>
            <div id=\"Delivery_sentence\">
            <p>※上記表の★に該当する地域の場合、消
            費税込10,000円以上お買い上げいただくと、配送料無料でお届けいたします。</p>
            </div>
            </div>
        <div id=\"subscription\">
        　　<h3>定期配送について</h3>
        　　<p>毎日使い続けるものだからこそ、ストレスフリーに継続していただきたい。そんな想いから定期お届けサービスを開始しております。<br></p>
            <p>お客様のお気に入り商品を、ご希望のお届け期間でお届けいたします。お届け期間は 1ヶ月ごと、2ヶ月ごと、3ヶ月ごと からお選びいただけます。<br></p>
                <div>
                <strong class=\"regular\">定期お届けサービスの詳細</strong>
                    <table class=\"table table-bordered regular\">
                        <thead>
                        <tr><th>ご注文日</th><th>お届け予定日（初回）</th><th>お届け予定日（2回目以降）</th></tr>
                        </thead>
                        <tbody>
                        <tr><td>毎月1日〜10日</td><td>当月15日ごろ</td><td>該当月15日ごろ</td></tr>
                        <tr><td>毎月11日〜20日</td><td>当月25日ごろ</td><td>該当月25日ごろ</td></tr>
                        <tr><td>毎月21日〜末日</td><td>翌月5日ごろ</td><td>該当月5日ごろ</td></tr>
                        </tbody>
                    </table>
                </div>
            <br>
            <p><br>
            ※定期お届けサービスは、いつでも解約することが可能です。解約をご希望の方はお届け予定日の14日前までに
        <a href=\"https://gift-communication.shop/contact\"><strong>こちら</strong></a>から解約の旨をご連絡ください。<br></p>
    　　</div>
    </div>

";
    }

    // line 610
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 611
        echo "<script>
   \$('#responsive-example-table').stacktable({myClass:'stacktable small-only'});
</script>
";
    }

    public function getTemplateName()
    {
        return "@user_data/subscription.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  656 => 611,  652 => 610,  55 => 16,  51 => 14,  47 => 13,  36 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@user_data/subscription.twig", "/var/www/html/eccube-4-new/app/template/user_data/subscription.twig");
    }
}
