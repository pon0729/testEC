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

/* __string_template__605adcd9988f28aab335793963a6d63743ef8dd34adb4d5c49c06b0f8bac7abe */
class __TwigTemplate_a6727dd67b791c2dea335454ff188df80e2361f30fc25c8cc806e784e3ea6fc3 extends \Eccube\Twig\Template
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
日頃の疲れを癒してくれるバスタイム。<br>
リフレッシュする時間にアクセントを加えてみませんか。<br>
フローラルな花の香りのバスソルトはいかがでしょう。<br>
バスソルトを使うことで、含まれている成分により、湯舟に浸かること以上に身体が癒され、フローラルな香りにより気持ちもリフレッシュすることができます。<br>
このフレグランスソルトは、ミネラルが豊富に含まれたヒマラヤ山脈の天然塩ピンクソルトを使用したバスソルトです。<br>
塩分を含んだお湯は体に熱を伝えやすいという性質があるため、体の芯からポカポカ温まります。<br>
そして、たくさん汗をかくことでの美肌効果も期待できます。<br>
更に、塩の中に含まれるマグネシウムが保湿効果をもたらしすべすべの肌も期待できます。<br>
香りの面では、優しい花の香りに包まれるような香りがするので、1日の終わりのリラックスタイムを有意義なものにし、ぐっすり眠りにつくことができるでしょう。<br>
毎日の癒しの時間のお供にお試しください。<br>
<br>
<br>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__605adcd9988f28aab335793963a6d63743ef8dd34adb4d5c49c06b0f8bac7abe";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__605adcd9988f28aab335793963a6d63743ef8dd34adb4d5c49c06b0f8bac7abe", "");
    }
}
