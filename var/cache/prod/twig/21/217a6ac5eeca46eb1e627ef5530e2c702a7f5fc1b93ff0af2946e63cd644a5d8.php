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

/* Help/privacy.twig */
class __TwigTemplate_5da9300c44842763913f8143c1144789aded196cba8c5dffddc8ff8a29b867e8 extends \Eccube\Twig\Template
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
        $this->parent = $this->loadTemplate("default_frame.twig", "Help/privacy.twig", 11);
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
        <li class=\"ec-topicpath_all_category\">プライバシーポリシー</li>
    　</ol>
    </div>
    <div class=\"ec-role\">
        <div class=\"ec-pageHeader\">
            <h1>";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("プライバシーポリシー"), "html", null, true);
        echo "</h1>
        </div>
        <div class=\"ec-off1Grid\">
            <div class=\"ec-off1Grid__cell\">
                <p>
                    当ショップは、お客様の個人情報保護の重要性について認識し、個人情報の保護に関する法律（以下「個人情報保護法」といいます。）を遵守すると共に、以下のプライバシーポリシー（以下「本プライバシーポリシー」といいます。）に従い、適切な取扱い及び保護に努めます。
                </p>
            </div>
        </div>
        <div class=\"ec-off1Grid\">
            <div class=\"ec-off1Grid__cell\">
                <div class=\"ec-heading-bold\">1. 個人情報の定義</div>
                <p>本プライバシーポリシーにおいて、個人情報とは、個人情報保護法第2条第1項により定義された個人情報、すなわち、生存する個人に関する情報であって、当該情報に含まれる氏名、生年月日その他の記述等により特定の個人を識別することができるもの（他の情報と容易に照合することができ、それにより特定の個人を識別することができることとなるものを含みます。）、もしくは個人識別符号が含まれる情報を意味するものとします。</p>
            </div>
        </div>
        <div class=\"ec-off1Grid\">
            <div class=\"ec-off1Grid__cell\">
                <div class=\"ec-heading-bold\">2. 個人情報の利用目的</div>
                <p>当ショップは、お客様の個人情報を、以下の目的で利用致します。</p>
                <br>
                <p>１) 当ショップサービスの提供のため</p>
                <p>２) 当ショップサービスに関するご案内、お問い合わせ等への対応のため</p>
                <p>３) 当ショップの商品、サービス等のご案内のため</p>
                <p>４) 当ショップサービスに関する当ショップの規約、ポリシー等以)「規約等」といいます。）に違反する行為に対する対応のため</p>
                <p>５) 当ショップサービスに関する規約等の変更などを通知するため</p>
                <p>６) 当ショップサービスの改善、新サービスの開発等に役立てるため</p>
                <p>７) 当ショップサービスに関連して、個別を識別できない形式に加工した統計データを作成するため</p>
                <p>８) その他、上記利用目的に付随する目的のため</p>
            </div>
        </div>
        <div class=\"ec-off1Grid\">
            <div class=\"ec-off1Grid__cell\">
                <div class=\"ec-heading-bold\">3. 個人情報利用目的の変更</div>
                <p>当ショップは、個人情報の利用目的を、関連性を有すると合理的に認められる範囲内において変更することがあり、変更した場合にはお客様に通知又は公表します。</p>
            </div>
        </div>
        <div class=\"ec-off1Grid\">
            <div class=\"ec-off1Grid__cell\">
                <div class=\"ec-heading-bold\">4. 個人情報利用の制限</div>
                <p>当ショップは、個人情報保護法その他の法令により許容される場合を除き、お客様の同意を得ず、利用目的の達成に必要な範囲を超えて個人情報を取り扱いません。但し、次の場合はこの限りではありません。</p>
                <br>
                <p>１) 法令に基づく場合</p>
                <p>２) 人の生命、身体又は財産の保護のために必要がある場合であって、お客様の同意を得ることが困難であるとき</p>
                <p>３) 公衆衛生の向上又は児童の健全な育成の推進のために特に必要がある場合であって、お客様の同意を得ることが困難であるとき</p>
                <p>４) 国の機関もしくは地方公共団体又はその委託を受けた者が法令の定める事務を遂行することに対して協力する必要がある場合であって、お客様の同意を得ることにより当該事務の遂行に支障を及ぼすおそれがあるとき</p>
            </div>
        </div>
        <div class=\"ec-off1Grid\">
            <div class=\"ec-off1Grid__cell\">
                <div class=\"ec-heading-bold\">5. 個人情報の適正な取得</div>
                <p>当ショップは、適正に個人情報を取得し、偽りその他不正の手段により取得しません。</p>
            </div>
        </div>
        <div class=\"ec-off1Grid\">
            <div class=\"ec-off1Grid__cell\">
                <div class=\"ec-heading-bold\">6. 個人情報の安全管理</div>
                <p>当ショップは、個人情報の紛失、破壊、改ざん及び漏洩などのリスクに対して、個人情報の安全管理が図られるよう、当ショップの従業員に対し、必要かつ適切な監督を行います。また、当ショップは、個人情報の取扱いの全部又は一部を委託する場合は、委託先において個人情報の安全管理が図られるよう、必要かつ適切な監督を行います。</p>
            </div>
        </div>
        <div class=\"ec-off1Grid\">
            <div class=\"ec-off1Grid__cell\">
                <div class=\"ec-heading-bold\">7. 第三者提供</div>
                <p>当ショップは、個人情報保護法その他の法令に基づき開示が認められる場合を除くほか、あらかじめお客様の同意を得ないで、個人情報を第三者に提供しません。但し、次に掲げる場合は上記に定める第三者への提供には該当しません。
                <br>
                <p>１) 当ショップが利用目的の達成に必要な範囲内において個人情報の取扱いの全部又は一部を委託することに伴って個人情報を提供する場合</p>
                <p>２) 合併その他の事由による事業の承継に伴って個人情報が提供される場合</p>
                <p>３) 個人情報保護法の定めに基づき共同利用する場合</p>
            </div>
        </div>
        <div class=\"ec-off1Grid\">
            <div class=\"ec-off1Grid__cell\">
                <div class=\"ec-heading-bold\">8. 個人情報の開示</div>
                <p>当ショップは、お客様から、個人情報保護法の定めに基づき個人情報の開示を求められたときは、お客様ご本人からのご請求であることを確認の上で、お客様に対し、遅滞なく開示を行います（当該個人情報が存在しないときにはその旨を通知いたします。）。但し、個人情報保護法その他の法令により、当ショップが開示の義務を負わない場合は、この限りではありません。</p>
            </div>
        </div>
        <div class=\"ec-off1Grid\">
            <div class=\"ec-off1Grid__cell\">
                <div class=\"ec-heading-bold\">9. 個人情報の訂正等</div>
                <p>当ショップは、お客様から、個人情報が真実でないという理由によって、個人情報保護法の定めに基づきその内容の訂正、追加又は削除（以下「訂正等」といいます。）を求められた場合には、お客様ご本人からのご請求であることを確認の上で、利用目的の達成に必要な範囲内において、遅滞なく必要な調査を行い、その結果に基づき、個人情報の内容の訂正等を行い、その旨をお客様に通知します（訂正等を行わない旨の決定をしたときは、お客様に対しその旨を通知いたします。）。但し、個人情報保護法その他の法令により、当ショップが訂正等の義務を負わない場合は、この限りではありません。</p>
            </div>
        </div>
        <div class=\"ec-off1Grid\">
            <div class=\"ec-off1Grid__cell\">
                <div class=\"ec-heading-bold\">10. 個人情報の利用停止等</div>
                <p>当ショップは、お客様から、お客様の個人情報が、あらかじめ公表された利用目的の範囲を超えて取り扱われているという理由又は偽りその他不正の手段により取得されたものであるという理由により、個人情報保護法の定めに基づきその利用の停止又は消去（以下「利用停止等」といいます。）を求められた場合において、そのご請求に理由があることが判明した場合には、お客様ご本人からのご請求であることを確認の上で、遅滞なく個人情報の利用停止等を行い、その旨をお客様に通知します。但し、個人情報保護法その他の法令により、当ショップが利用停止等の義務を負わない場合は、この限りではありません。</p>
            </div>
        </div>
        <div class=\"ec-off1Grid\">
            <div class=\"ec-off1Grid__cell\">
                <div class=\"ec-heading-bold\">11. Cookie（クッキー）その他の技術の利用</div>
                <p>当ショップのサービスは、Cookie及びこれに類する技術を利用することがあります。これらの技術は、当ショップによる当ショップのサービスの利用状況等の把握に役立ち、サービス向上に資するものです。Cookieを無効化されたいユーザーは、ウェブブラウザの設定を変更することによりCookieを無効化することができます。但し、Cookieを無効化すると、当ショップのサービスの一部の機能をご利用いただけなくなる場合があります。</p>
            </div>
        </div>
        <div class=\"ec-off1Grid\">
            <div class=\"ec-off1Grid__cell\">
                <div class=\"ec-heading-bold\">12. お問い合わせ</div>
                <p>開示等のお申出、ご意見、ご質問、苦情のお申出その他個人情報の取扱いに関するお問い合わせは、当ショップの「特定商取引法に基づく表記」内にある連絡先へご連絡いただくか、ショップページ内のお問い合わせフォームよりお問い合わせください。</p>
            </div>
        </div>
        <div class=\"ec-off1Grid\">
            <div class=\"ec-off1Grid__cell\">
                <div class=\"ec-heading-bold\">13. 継続的改善</div>
                <p>当ショップは、個人情報の取扱いに関する運用状況を適宜見直し、継続的な改善に努めるものとし、必要に応じて、本プライバシーポリシーを変更することがあります。</p>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "Help/privacy.twig";
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
        return new Source("", "Help/privacy.twig", "/var/www/html/eccube-4-new/app/template/responceWebDesign/Help/privacy.twig");
    }
}
