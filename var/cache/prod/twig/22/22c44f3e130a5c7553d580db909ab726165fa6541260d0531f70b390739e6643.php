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

/* __string_template__7825db5fd632523f796650b05d7fc4d9d09ab33028b9ee37ab66e2b0ecc818de */
class __TwigTemplate_978daa830ff148197dca7d8e3366a3d4f3b26fa2f21a51264c50de774186cf46 extends \Eccube\Twig\Template
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

甘く上品なバニラに自然でウッディなパチュリをブレンドした香りをベースにオレンジコーヒーを感じる南国イメージの香りです。<br>
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
        return "__string_template__7825db5fd632523f796650b05d7fc4d9d09ab33028b9ee37ab66e2b0ecc818de";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__7825db5fd632523f796650b05d7fc4d9d09ab33028b9ee37ab66e2b0ecc818de", "");
    }
}
