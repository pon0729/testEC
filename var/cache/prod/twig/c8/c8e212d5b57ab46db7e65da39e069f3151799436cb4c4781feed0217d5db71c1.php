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

/* __string_template__faa13c4871178d0e1b58d87fdb06d6230b4c9f760f6a69a2cbf382f33b576ef3 */
class __TwigTemplate_de3854118e6f78a0094d165eabf332085a018fc0f9697f71f684ab632e60677f extends \Eccube\Twig\Template
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
ドライブの際には、コンビニやドライブスルーのカフェでコーヒーを購入されることもありますよね。<br>
冬にはホットを、夏はコールドの飲み物が飲みたくなりますが、すぐに冷めてしまったり、ぬるくなってしまいますよね。<br>
そんなときにおすすめなのが、ステンレスカップです。<br>
<br>
このステンレスカップは、コンビニのLサイズのコーヒーカップが十分に入る大きさとなっており、保温・保冷のどちらの役割も果たす優れものです。<br>
カップの内側と外側の間には真空断熱層があり、保温保冷効果を上げています。また、結露しない加工になっているので、アイスコーヒーを持つ手が濡れる心配もありません。<br>
お出かけの際はもちろん、オフィスでも大活躍間違いなしの一品です。<br>
<br>
また、ミニボトルは、容量が120mlで女性でも持ちやすい、スマホよりもひと回り大きいサイズとなっております。カバンの中でかさばらず、重くないのが女性にとってはとてもうれしいですよね。<br>
温冷どちらも対応しているので、暑い夏の通勤時やお出かけ時には冷たい飲み物を、寒い冬には暖かい飲み物を入れておでかけすると、ペットボトルを買う必要がないので、エコであり、節約もできちゃいます。<br>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__faa13c4871178d0e1b58d87fdb06d6230b4c9f760f6a69a2cbf382f33b576ef3";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__faa13c4871178d0e1b58d87fdb06d6230b4c9f760f6a69a2cbf382f33b576ef3", "");
    }
}
