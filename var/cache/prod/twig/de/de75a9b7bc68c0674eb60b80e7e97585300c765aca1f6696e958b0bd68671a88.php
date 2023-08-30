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

/* __string_template__845b690ed8bff752f90cdf3413b3732347c5829e5656d4e23b07e5f6770070c2 */
class __TwigTemplate_de634ee381486dd45f0653c3dc7c7898245eaa9be7f1c68a744a22e4cd4cea3e extends \Eccube\Twig\Template
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
        サービス説明
    </div>
    <div class=\"product-description__contents\">

こちらはギフトラッピングサービスの申し込みページです。<br>
ラッピング袋単体での販売ページではありません。<br>
<br>
贈り物をする際のラッピングを承っております。<br>
<b>ラッピングをご希望のお客様はこちらのページの「ラッピングサービス」とご希望の商品を同じお買い物かごにいれて同時にご注文ください。</b><br>
<br>
ラッピングサービスは<b>１カートにつき１サービス</b>となりますので、カート内の商品全てがラッピングの対象となります。<br>
もし、メッセージカードなど個別の希望がありましたら、「お問い合わせフォーム」から注文番号を添えてご連絡ください。<br>
<br>
ギフトのサイズや種類に合わせて、１品１品スタッフが丁寧に包装いたします。<br>
ラッピングのサイズや種類、リボンの色はおまかせとなります。<br>
<br>
 </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__845b690ed8bff752f90cdf3413b3732347c5829e5656d4e23b07e5f6770070c2";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__845b690ed8bff752f90cdf3413b3732347c5829e5656d4e23b07e5f6770070c2", "");
    }
}
