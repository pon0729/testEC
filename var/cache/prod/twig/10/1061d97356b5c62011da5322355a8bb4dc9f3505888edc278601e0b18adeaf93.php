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

/* __string_template__87446ea5aefdb1940acc0ae2f58bd21dfb5d676d75a9b50fe598a598b8c5bd5a */
class __TwigTemplate_4f3d5db2b4a6ffbbb9e97bca24597848230267e78756a2eb864e95b5829e0661 extends \Eccube\Twig\Template
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
     
cotoha：coffeeのカフェインレスコーヒーは、ブラジル公認のコーヒー鑑定士が品質管理を行うエチオピア豆100％を使用しています。<br>
また、カフェインを抽出する際、薬品などを使用しない、ウォータープロセスを採用しています。<br>
そのため、より一層、身体への負担がありません。<br>
妊娠中・子育て中のママでしたり、爽やかな朝や夜お休み前のひとときに一息ついたりする方にもオススメです。<br>
<br>
<br>
    </div>
</div>
<br><br>";
    }

    public function getTemplateName()
    {
        return "__string_template__87446ea5aefdb1940acc0ae2f58bd21dfb5d676d75a9b50fe598a598b8c5bd5a";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__87446ea5aefdb1940acc0ae2f58bd21dfb5d676d75a9b50fe598a598b8c5bd5a", "");
    }
}
