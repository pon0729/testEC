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

/* __string_template__2a0378afb20a6ae6f16a68a5d6bc735e0723f852a581bf23069c48484af161f9 */
class __TwigTemplate_b83a37cf16545b1a58ccd7e7be21028c5bb0b711c44355b0de0e6c9be0d05e3c extends \Eccube\Twig\Template
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
        商品詳細
    </div>
    <div class=\"product-description__contents\">
     
ジューシーなフレーバーを楽しみながら、しっかりと汚れをからめ取ることができる、デンタルフロスです。<br>
ワックスには、天然素材のナチュラルフレーバーに加え、樺の木からとれたキシリトールが配合されており、フロッシング後は心地よいスッキリ感が続きます。<br>
パッケージは、毎年7億個ものプラスチック製フロスケースが捨てられることに着目し、今までにない新たな紙製のパッケージを開発しました。<br>
再利用可能な紙製の外装パッケージは外装パッケージ自体がフロスディペンサーの役割を担ってくれ、プラスチックケースの必要性を排除したデザインとなっています。<br>
エコフレンドリーでソーシャルグッドなハンブルブラッシュらしいデザインになっています。<br>
<br>
    </div>
</div>
<br><br>


<div class=\"product-description\">
    <div class=\"product-description__title\">
        内容量
    </div>
    <div class=\"product-description__contents\">
        50ml（約125回分）<br>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__2a0378afb20a6ae6f16a68a5d6bc735e0723f852a581bf23069c48484af161f9";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__2a0378afb20a6ae6f16a68a5d6bc735e0723f852a581bf23069c48484af161f9", "");
    }
}
