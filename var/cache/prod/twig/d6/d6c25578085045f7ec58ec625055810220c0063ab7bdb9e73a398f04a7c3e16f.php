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

/* __string_template__4e87bae40fccc069df4422a9ddb06f3248e1b8f91bdbeaf726b12ba434ca76a8 */
class __TwigTemplate_220eec10724ec54b660672ca46b619d20a2aa519459b0c3ce4a66b9e61e06abf extends \Eccube\Twig\Template
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
優しい香りが楽しめる置き型ディフューザー、立体的なフォルムとストーン素材がオシャレさを演出します。<br>
アロマオイルを数滴垂らすことで、お楽しみいただけます。<br>
<br>
ディフューザーの形は様々なタイプがあります。<br>
そのため、どれにしようか迷ってしまいます。<br>
ディフューザーを選ぶ時のポイントは、ディフューザーを置く場所、見た目、使う方々の好みなどから選ぶことです。<br>
<br>
本商品の特徴は、土台がしっかりしていて安定感があるという点です。
また、フタが付いているため、開け閉めすることで香りの調節が可能というポイントもあります。<br>
<br>
そのため、寝室やリビング、お客様をお迎えする玄関などでの利用がオススメです。<br>
<br>
<br>";
    }

    public function getTemplateName()
    {
        return "__string_template__4e87bae40fccc069df4422a9ddb06f3248e1b8f91bdbeaf726b12ba434ca76a8";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__4e87bae40fccc069df4422a9ddb06f3248e1b8f91bdbeaf726b12ba434ca76a8", "");
    }
}
