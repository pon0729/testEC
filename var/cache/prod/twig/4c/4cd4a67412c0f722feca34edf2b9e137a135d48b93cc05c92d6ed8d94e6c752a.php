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

/* __string_template__824b282d480f11525be8187d11a99fa2c2ab1e597c09e74127b27e5f7f9b2b1d */
class __TwigTemplate_fcc6e09acacd3da28a6c7f92b43270d1710e40bdf6f8671ef4d094c351427b0b extends \Eccube\Twig\Template
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
        echo "健康に良い食事とは・・・<br>
野菜不足は感じているけれど、ついつい手が伸びるのは冷凍食品やコンビニのサラダ。<br>
仕事や家事育児に奮闘していると、ついつい自分の健康は後回しにしがちですよね。<br>
そろそろ健康的な食事を始めたいな、手軽に栄養不足を補いたいな、そう感じている方にぴったりの商品です。<br>
<br>
グリーンは大麦若葉を中心として、有胞子性乳酸菌、キダチアロエ、その他15種類もの国産野菜を配合したいわゆる青汁です。<br>
青汁といっても、苦みもなく、粉っぽくないため、とても飲みやすくなっております。<br>
グリーンの特徴は生きて腸まで届く乳酸菌と15種類もの国産野菜。これらが身体を健康に導く理由であり、グリーンが選ばれる理由です。<br><br><br>";
    }

    public function getTemplateName()
    {
        return "__string_template__824b282d480f11525be8187d11a99fa2c2ab1e597c09e74127b27e5f7f9b2b1d";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__824b282d480f11525be8187d11a99fa2c2ab1e597c09e74127b27e5f7f9b2b1d", "");
    }
}
