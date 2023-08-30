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

/* __string_template__2562987c667d64aa8ca28d5ed2a8719040380504d92b09a960e20b204641896a */
class __TwigTemplate_15cc302cff7564e6e826574504dca5e242bde637f1f6059d1805a6401a7efb6c extends \Eccube\Twig\Template
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
      BLEND シリーズのアロマスティック（別売）専用のホルダーです。<br>
スタイリッシュなデザインはインテリアとしてもとてもお洒落です。<br>
色はホワイトでデザインもシンプルなため、<br>
どんな系統のお部屋、インテリアとも合います。<br>
<br>
このホルダーにアロマスティック（別売）を挿すことで、<br>
液体を使わずに香りを広げられるディフューザーとして使用できます。<br>
液体を使っていないため、溢れてお部屋を汚す心配もありません。<br>
お子様やペットのいるご家庭でも安心してお使いいただけます。<br>
<br>
アロマスティック（別売）は6種類の香りがあります。<br>
アロマスティックを差し替えるだけで香りを変えることもできます。<br>
また、何種類かのアロマスティックを併せて使用することで、<br>
自分だけのお好みの香りを創ることも可能です。<br>
お部屋の雰囲気や気分によって香りを変えることもできます。<br>
 <br>
    </div>
</div>
<br><br>";
    }

    public function getTemplateName()
    {
        return "__string_template__2562987c667d64aa8ca28d5ed2a8719040380504d92b09a960e20b204641896a";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__2562987c667d64aa8ca28d5ed2a8719040380504d92b09a960e20b204641896a", "");
    }
}
