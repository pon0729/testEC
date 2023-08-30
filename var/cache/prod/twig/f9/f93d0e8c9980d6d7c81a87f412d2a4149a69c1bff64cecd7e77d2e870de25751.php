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

/* __string_template__b8a0f7bf73ff86b1ac99c2f552178484f6655c1bd20aaa9fd3c24c871b65de52 */
class __TwigTemplate_b87ad3c093333f524f748d358d3922778555b58793a4a5856b21f29d954345d4 extends \Eccube\Twig\Template
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
        echo "<div class=\"product-description\">
    <div class=\"product-description__title\">
商品説明
    </div>
    <div class=\"product-description__contents\">
日々の家事や仕事に追われていると、外食や既製品の食事に頼ってしまうこともありますよね。<br>豊富なメニューの中から選ぶと、ついつい自分の好きな脂っこいものや甘いものを選んでしまう、という方も多いのではないでしょうか。<br>
<br>
そんな栄養価の偏りがちなアクティブワーカーにおすすめなのが、チュアブリーズです。<br>
<br>

脂質や糖の吸収を抑える成分を配合しているため、食事の前に取り入れるだけで簡単にダイエットをサポートします。<br>好きなものを我慢しすぎずに食べることができれば、日々の生活がより豊かになりますよね。<br>
<br>
また、食べ過ぎ・飲み過ぎ・ストレスなどが原因で胃腸が荒れてしまったり、消化力の弱った時にもおすすめです。<br>便通や腸内環境を整える成分が、あなたのお腹を健康な状態に戻すのを助けてくれます。<br>
<br>
日々の食事はそのままで、1日3粒の簡単習慣をプラスして、ダイエットや胃腸の健康維持に挑戦してみませんか。<br>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__b8a0f7bf73ff86b1ac99c2f552178484f6655c1bd20aaa9fd3c24c871b65de52";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__b8a0f7bf73ff86b1ac99c2f552178484f6655c1bd20aaa9fd3c24c871b65de52", "");
    }
}
