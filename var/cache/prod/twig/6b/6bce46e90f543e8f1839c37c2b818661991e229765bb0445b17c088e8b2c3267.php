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

/* __string_template__88d487240ba8d11821347125a940b33823b30f60e40174e05b9750b7e5b6d986 */
class __TwigTemplate_2d959b215bd3174e9688d92359118a4d533116fe90fbe554f0eafd5f091f9b4f extends \Eccube\Twig\Template
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
        echo "髪もファッションの一部として考え、カラーリングやパーマなどでおしゃれを楽しみたい。<br>でも髪や頭皮のダメージも気になる。そう考えたことはありませんか。<br>
ダメージケアは美容室でのトリートメントだけという方も多いかと思います。しかし、痛んだ髪を薬液で元気にするよりも、日頃のシャンプーでこまめにケアをする、又はダメージを減らす方がいいと思いませんか。<br>
本シャンプーは髪と頭皮の健康を考え、こだわりのオーガニック素材かつシリコンフリーで出来ています。また天然成分の優しい香りも楽しめるので、毎日のお風呂やシャワーの時間が優雅なリラックスタイムとなります。<br>
カラーやパーマでおしゃれも楽しみつつ、髪と頭皮を気遣いたい方へおすすめのシャンプーです。<br><br><br>";
    }

    public function getTemplateName()
    {
        return "__string_template__88d487240ba8d11821347125a940b33823b30f60e40174e05b9750b7e5b6d986";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__88d487240ba8d11821347125a940b33823b30f60e40174e05b9750b7e5b6d986", "");
    }
}
