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

/* __string_template__88f329b1927ceea8b0ff7cf0605642bbbb03d655939d596027466ecf67e9198f */
class __TwigTemplate_21bbb1cbb6cac8fd61239a2d3a8e9934eee65a8476ec5fdda312b3a47a66b396 extends \Eccube\Twig\Template
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
GRASSE TOKYOとは<br>
香水産業の発祥地、フランス・グラースと<br>
職人技が残る街、日本・トウキョウ。<br>
熟練の調香技術によって日本人の感性に響く深い香りが生まれました。<br>
最高のフレグランスをMade in JAPANでお届けします。<br>
<br>

ブラックラカントとはリキュールで有名なカシスの事であり、その甘い香りとスミレ、ローズの華やかな香りを加えた芳醇な香りです。<br>
<br>
消臭成分には沖縄県産にこだわったサトウキビ由来の成分を使用。悪臭の素を中和・分解する効果があるため、悪臭とサシェの香りが混ざり合う事がありません。<br>
<br>
フックと袋一体型のため、クローゼットや靴箱などにおいのこもりが気になる部分にすぐかけるだけで使用することが出来るため、簡単ににおい対策が出来ます。<br>
枕元に吊るせば寝る時に心地よい香りに包まれることが出来ます。<br>
<br>
<br>

 </div> </div>";
    }

    public function getTemplateName()
    {
        return "__string_template__88f329b1927ceea8b0ff7cf0605642bbbb03d655939d596027466ecf67e9198f";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__88f329b1927ceea8b0ff7cf0605642bbbb03d655939d596027466ecf67e9198f", "");
    }
}
