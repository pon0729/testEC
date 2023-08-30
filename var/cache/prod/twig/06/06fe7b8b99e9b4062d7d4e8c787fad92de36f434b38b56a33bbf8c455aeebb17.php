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

/* Help/tradelaw.twig */
class __TwigTemplate_b3563ae059e2115df59b527f5e46bca698fb496cee4029af4cbdff76d9466771 extends \Eccube\Twig\Template
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
        $this->parent = $this->loadTemplate("default_frame.twig", "Help/tradelaw.twig", 11);
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
        <li class=\"ec-topicpath_all_category\">特定商取引法に基づく表記</li>
    　</ol>
    </div>
    <div class=\"ec-role\">
        <div class=\"ec-pageHeader\">
            <h1> ";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("特定商取引法に基づく表記"), "html", null, true);
        echo "</h1>
        </div>
        <div class=\"ec-off1Grid\">
            <div class=\"ec-off1Grid__cell\">
                <div class=\"ec-borderedDefs\">
                    <dl>
                        <dt>
                            <label class=\"ec-label\">販売業者</label>
                        </dt>
                        <dd>株式会社SUN</dd>
                    </dl>
                    <dl>
                        <dt>
                            <label class=\"ec-label\">運営責任者</label>
                        </dt>
                        <dd>篠原継之助</dd>
                    </dl>
                    <dl>
                        <dt>
                            <label class=\"ec-label\">所在地</label>
                        </dt>
                        <dd>東京都品川区西五反田３−７−６レジディアタワー目黒不動前１６０３</dd>
                    </dl>

                    <dl>
                        <dt>
                            <label class=\"ec-label\">連絡先</label>
                        </dt>
                        <dd>電話　：03 6312 6612<br/>メール：<a href=\"mailto:\">tsugi.shino@gmail.com</a><br/>（お問い合わせ時間：11：00～19：00 土日祝、年末年始を除く）</dd>
                    </dl>

                    <dl>
                        <dt>
                            <label class=\"ec-label\">販売価格</label>
                        </dt>
                        <dd>各商品詳細ページに税込価格で表示。</dd>
                    </dl>

                    <dl>
                        <dt>
                            <label class=\"ec-label\">販売数量</label>
                        </dt>
                        <dd>商品ごとに在庫数に限りがあります。予めご了承ください。</dd>
                    </dl>

                    <dl>
                        <dt>
                            <label class=\"ec-label\">送料<br/>・表示金額は税抜です。</label>
                        </dt>
                        <dd>
                        <div id=\"x_shippingAreaDomestic\" class=\"shippingInfo__tabArea is_active\">
\t\t\t\t\t\t\t<div class=\"shippingList__table\">
\t\t\t\t\t\t\t<table border=\"1\">
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th class=\"size_three\">大きさ(3辺計)</th>
\t\t\t\t\t\t\t\t\t<th class=\"dead_weight\">重量</th>
\t\t\t\t\t\t\t\t\t<th><span>北海道</span>北海道</th>
\t\t\t\t\t\t\t\t\t<th><span>北東北</span>青森・岩手・秋田</th>
\t\t\t\t\t\t\t\t\t<th><span>★南東北</span>宮城・山形・福島</th>
\t\t\t\t\t\t\t\t\t<th><span>★関東</span>茨城・栃木・群馬・埼玉・千葉・東京・神奈川・山梨</th>
\t\t\t\t\t\t\t\t\t<th><span>★信越</span>新潟・長野</th>
\t\t\t\t\t\t\t\t\t<th><span>★北陸</span>富山・石川・福井</th>
\t\t\t\t\t\t\t\t\t<th><span>★中部</span>岐阜・静岡・愛知・三重</th>
\t\t\t\t\t\t\t\t\t<th><span>関西</span>滋賀・京都・大阪・兵庫・奈良・和歌山</th>
\t\t\t\t\t\t\t\t\t<th><span>中国</span>鳥取・島根・岡山・広島・山口</th>
\t\t\t\t\t\t\t\t\t<th><span>四国</span>徳島・香川・愛媛・高知</th>
\t\t\t\t\t\t\t\t\t<th><span>九州</span>福岡・佐賀・長崎・熊本・大分・宮崎・鹿児島</th>
\t\t\t\t\t\t\t\t\t<th><span>沖縄</span>沖縄</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th class=\"size_three\">60cm以内</th>
\t\t\t\t\t\t\t\t\t<th class=\"dead_weight\">2kg以内</th>
\t\t\t\t\t\t\t\t\t<td>1,370円</td>
\t\t\t\t\t\t\t\t\t<td>1,040円</td>
\t\t\t\t\t\t\t\t\t<td>930円</td>
\t\t\t\t\t\t\t\t\t<td>930円</td>
\t\t\t\t\t\t\t\t\t<td>930円</td>
\t\t\t\t\t\t\t\t\t<td>930円</td>
\t\t\t\t\t\t\t\t\t<td>930円</td>
\t\t\t\t\t\t\t\t\t<td>1,040円</td>
\t\t\t\t\t\t\t\t\t<td>1,150円</td>
\t\t\t\t\t\t\t\t\t<td>1,150円</td>
\t\t\t\t\t\t\t\t\t<td>1,370円</td>
\t\t\t\t\t\t\t\t\t<td>1,370円</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th class=\"size_three\">80cm以内</th>
\t\t\t\t\t\t\t\t\t<th class=\"dead_weight\">5kg以内</th>
\t\t\t\t\t\t\t\t\t<td>1,590円</td>
\t\t\t\t\t\t\t\t\t<td>1,260円</td>
\t\t\t\t\t\t\t\t\t<td>1,150円</td>
\t\t\t\t\t\t\t\t\t<td>1,150円</td>
\t\t\t\t\t\t\t\t\t<td>1,150円</td>
\t\t\t\t\t\t\t\t\t<td>1,150円</td>
\t\t\t\t\t\t\t\t\t<td>1,150円</td>
\t\t\t\t\t\t\t\t\t<td>1,260円</td>
\t\t\t\t\t\t\t\t\t<td>1,370円</td>
\t\t\t\t\t\t\t\t\t<td>1,370円</td>
\t\t\t\t\t\t\t\t\t<td>1,590円</td>
\t\t\t\t\t\t\t\t\t<td>1,920円</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th class=\"size_three\">100cm以内</th>
\t\t\t\t\t\t\t\t\t<th class=\"dead_weight\">10kg以内</th>
\t\t\t\t\t\t\t\t\t<td>1,830円</td>
\t\t\t\t\t\t\t\t\t<td>1,500円</td>
\t\t\t\t\t\t\t\t\t<td>1,390円</td>
\t\t\t\t\t\t\t\t\t<td>1,390円</td>
\t\t\t\t\t\t\t\t\t<td>1,390円</td>
\t\t\t\t\t\t\t\t\t<td>1,390円</td>
\t\t\t\t\t\t\t\t\t<td>1,390円</td>
\t\t\t\t\t\t\t\t\t<td>1,500円</td>
\t\t\t\t\t\t\t\t\t<td>1,610円</td>
\t\t\t\t\t\t\t\t\t<td>1,610円</td>
\t\t\t\t\t\t\t\t\t<td>1,830円</td>
\t\t\t\t\t\t\t\t\t<td>2,490円</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th class=\"size_three\">120cm以内</th>
\t\t\t\t\t\t\t\t\t<th class=\"dead_weight\">15kg以内</th>
\t\t\t\t\t\t\t\t\t<td>2,050円</td>
\t\t\t\t\t\t\t\t\t<td>1,720円</td>
\t\t\t\t\t\t\t\t\t<td>1,610円</td>
\t\t\t\t\t\t\t\t\t<td>1,610円</td>
\t\t\t\t\t\t\t\t\t<td>1,610円</td>
\t\t\t\t\t\t\t\t\t<td>1,610円</td>
\t\t\t\t\t\t\t\t\t<td>1,610円</td>
\t\t\t\t\t\t\t\t\t<td>1,720円</td>
\t\t\t\t\t\t\t\t\t<td>1,830円</td>
\t\t\t\t\t\t\t\t\t<td>1,830円</td>
\t\t\t\t\t\t\t\t\t<td>2,050円</td>
\t\t\t\t\t\t\t\t\t<td>3,040円</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th class=\"size_three\">140cm以内</th>
\t\t\t\t\t\t\t\t\t<th class=\"dead_weight\">20kg以内</th>
\t\t\t\t\t\t\t\t\t<td>2,290円</td>
\t\t\t\t\t\t\t\t\t<td>1,960円</td>
\t\t\t\t\t\t\t\t\t<td>1,850円</td>
\t\t\t\t\t\t\t\t\t<td>1,850円</td>
\t\t\t\t\t\t\t\t\t<td>1,850円</td>
\t\t\t\t\t\t\t\t\t<td>1,850円</td>
\t\t\t\t\t\t\t\t\t<td>1,850円</td>
\t\t\t\t\t\t\t\t\t<td>1,960円</td>
\t\t\t\t\t\t\t\t\t<td>2,070円</td>
\t\t\t\t\t\t\t\t\t<td>2,070円</td>
\t\t\t\t\t\t\t\t\t<td>2,290円</td>
\t\t\t\t\t\t\t\t\t<td>3,610円</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th class=\"size_three\">160cm以内</th>
\t\t\t\t\t\t\t\t\t<th class=\"dead_weight\">25kg以内</th>
\t\t\t\t\t\t\t\t\t<td>2,510円</td>
\t\t\t\t\t\t\t\t\t<td>2,180円</td>
\t\t\t\t\t\t\t\t\t<td>2,070円</td>
\t\t\t\t\t\t\t\t\t<td>2,070円</td>
\t\t\t\t\t\t\t\t\t<td>2,070円</td>
\t\t\t\t\t\t\t\t\t<td>2,070円</td>
\t\t\t\t\t\t\t\t\t<td>2,070円</td>
\t\t\t\t\t\t\t\t\t<td>2,180円</td>
\t\t\t\t\t\t\t\t\t<td>2,290円</td>
\t\t\t\t\t\t\t\t\t<td>2,290円</td>
\t\t\t\t\t\t\t\t\t<td>2,510円</td>
\t\t\t\t\t\t\t\t\t<td>4,160円</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"Delivery_sentence\">
\t\t\t\t\t\t\t<p>※上記表の★に該当する地域の場合、消費税込10,000円以上お買い上げいただくと、配送料無料でお届けいたします。</p>
\t\t\t\t\t\t</div>
                        </dd>
                    </dl>

                    <dl>
                        <dt>
                            <label class=\"ec-label\">申込有効期限</label>
                        </dt>
                        <dd>ご注文後7日以内といたします。ご注文後7日間ご入金がない場合は、購入の意思がないものとし、注文を自動的にキャンセルとさせていただきます。</dd>
                    </dl>

                    <dl>
                        <dt>
                            <label class=\"ec-label\">お支払い方法</label>
                        </dt>
                        <dd>・クレジットカード決済<br/>・コンビニ決済</dd>
                    </dl>

                    <dl>
                        <dt>
                            <label class=\"ec-label\">お支払い期限</label>
                        </dt>
                        <dd>・クレジットカード決済 : ご利用のカード会社ごとに異なります。<br/>・コンビニ決済：ご注文日から1週間以内にお支払いください。</dd>
                    </dl>

                    <dl>
                        <dt>
                            <label class=\"ec-label\">お届け方法</label>
                        </dt>
                        <dd>配送業者：ヤマト運輸株式会社</dd>
                    </dl>

                    <dl>
                        <dt>
                            <label class=\"ec-label\">商品の引渡し時期</label>
                        </dt>
                        <dd>配送地域によって異なりますが、ご注文・ご入金確認後４−１０日以内に発送となります。<br/>※交通状況や天候、地域、品薄商品の場合は、配送が遅れる場合がありますのでご了承ください。<br/>※土日祝日をはさむ場合は対応にお時間をいただくことがございます。あらかじめご了承ください。</dd>
                    </dl>

                    <dl>
                        <dt>
                            <label class=\"ec-label\">返品・交換について</label>
                        </dt>
                        <dd>商品の返品・交換は受け付けないものとします。<br/>ただし、商品が不良品の場合やご注文と異なる商品が到着した場合のみ、返品・交換の受付をいたします。<br/>返品・交換の送料は弊社負担となります。<br/>商品到着後７日以内に弊社連絡先までご連絡ください。<br/>※土日祝日をはさむ場合は対応にお時間をいただくことがございます。あらかじめご了承ください。</dd>
                    </dl>

                    <dl>
                        <dt>
                            <label class=\"ec-label\">サービスの停止について</label>
                        </dt>
                        <dd>何らかの理由により、システムがダウンしサービスが利用できない場合があります。 その際、システムの復旧にお時間をいただくことがございます。</dd>
                    </dl>

                    <dl>
                        <dt>
                            <label class=\"ec-label\">その他販売条件について</label>
                        </dt>
                        <dd>配送先は国内に限ります。</dd>
                    </dl>

                    <dl>
                        <dt>
                            <label class=\"ec-label\">ホームページ</label>
                        </dt>
                        <dd><a href=\"https://sun-sun-sun.com/\">https://sun-sun-sun.com/</a></dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "Help/tradelaw.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 23,  50 => 14,  46 => 13,  35 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Help/tradelaw.twig", "/var/www/html/eccube-4-new/app/template/responceWebDesign/Help/tradelaw.twig");
    }
}
