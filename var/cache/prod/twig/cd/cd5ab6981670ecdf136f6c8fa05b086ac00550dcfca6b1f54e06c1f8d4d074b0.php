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

/* __string_template__f3bdeaec49d649aa9f110c4e9749475f82de053325d2bfb851b495bcd38c3ae8 */
class __TwigTemplate_8f39fd2eb476b3c8fb483f959024ab4b00a5dc9f1b625523b354aa25bbe11749 extends \Eccube\Twig\Template
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
        echo "皆さんはボディソープを選ぶときに何を基準にしていますか。<br>
化粧水や保湿クリームは成分表までチェックしているのについ、ボディソープは値段や香りで選んだり、またはCMで見かけたものを選ぶ方も多いのではないでしょうか。全身の皮膚につけるものだからこそ、保湿成分・整肌成分がしっかり入ってるか確認することが、とても大事です。<br>
このボディソープは植物由来の石鹸をベースとして、豊かな泡立ちとしっとりとした洗い上がりを実現したボディソープです。このボディソープに含まれているボタニカルウォーターとは、植物からとれた水のことで、最近とても注目されています。化粧水は水が命と言われていますが、ボディソープもこだわった水を使っていてほしいもの。植物から取れる天然保湿成分をふんだんに使ったボディソープをご紹介いたします。<br><br><br>";
    }

    public function getTemplateName()
    {
        return "__string_template__f3bdeaec49d649aa9f110c4e9749475f82de053325d2bfb851b495bcd38c3ae8";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__f3bdeaec49d649aa9f110c4e9749475f82de053325d2bfb851b495bcd38c3ae8", "");
    }
}
