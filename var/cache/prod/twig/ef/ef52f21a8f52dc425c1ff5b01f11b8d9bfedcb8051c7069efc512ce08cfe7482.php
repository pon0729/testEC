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

/* __string_template__0fc46cad8662677a9d68e96b821b221ba1ce580da983e3032198f2024e7e54b6 */
class __TwigTemplate_9be2ad338a7797116862127f3dccef8411c1b21a653d5f81bbc85626979b8583 extends \Eccube\Twig\Template
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
        配合成分
    </div>
    <div class=\"product-description__contents\">
オリーブ果実油、トリ（カプリル／カプリン酸）グリセリル、セスキオレイン酸ポリグリセリル-2、ホホバ種子油、カプリル酸ポリグリセリル-2、トコフェロール、（アスペルギルス／サッカロミセス）／（マグワ果実／コメ）発酵粕エキス、セージ葉エキス、チャ葉エキス、ツボクサ花／葉／茎エキス、ローズマリー葉エキス、ミシマサイコ花／葉／茎エキス、ソウハクヒエキス、ベルガモット果皮油、ラベンダー油、ヒマワリ種子油、水、ローズマリー葉油、グリチルリチン酸2K、シロキクラゲ多糖体、グリセリン、エタノール
    </div>
</div>
<br>
<div class=\"product-description\">
    <div class=\"product-description__title\">
        量
    </div>
    <div class=\"product-description__contents\">
150ml
    </div>
</div>

<br>
<div class=\"product-description\">
    <div class=\"product-description__title\">
        使用方法
    </div>
    <div class=\"product-description__contents\">
乾いた手に適量をとり、顔全体にやさしくなじませて、ぬるま湯で洗い流してください。<br>
    </div>
</div>
<br>
        </ul>";
    }

    public function getTemplateName()
    {
        return "__string_template__0fc46cad8662677a9d68e96b821b221ba1ce580da983e3032198f2024e7e54b6";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__0fc46cad8662677a9d68e96b821b221ba1ce580da983e3032198f2024e7e54b6", "");
    }
}
