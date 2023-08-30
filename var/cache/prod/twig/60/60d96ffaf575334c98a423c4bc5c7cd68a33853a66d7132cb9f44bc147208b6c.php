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

/* __string_template__6461d1c071f7a8f848fc6acf95f821a78ff81155011114636fad37f61d846141 */
class __TwigTemplate_97841c01fa25c5223495e6816435aaa5603ce645efd9a8b7a907b4a63f68f50e extends \Eccube\Twig\Template
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
        ご使用時期の目安
    </div>
    <div class=\"product-description__contents\">
6ヶ月〜2歳頃（身長70〜80cm、体重9〜11kg）<br>
    </div>
</div>
<br><br>
<div class=\"product-description\">
    <div class=\"product-description__title\">
        生産国
    </div>
    <div class=\"product-description__contents\">
        中国
    </div>
</div>
<br><br>
</div>
<br><br>

<div class=\"product-description\">
    <div class=\"product-description__title\">
       素材
    </div>
    <div class=\"product-description__contents\">
        <ul>
<li>ヘアバンド：綿100％</li>
<li>スタイ表地：綿100％</li>
<li>スタイ裏地：綿80％、ポリエステル20％</li>
<li>スタイ別布：ポリエステル100％</li>
<li>ブルマ本体：ポリエステル90％、綿10％</li>
<li>ブルマウエストリブ：綿95％、ポリウレタン5％</li>
<li>パンツ：ポリエステル90％、綿10％</li>
        </ul>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__6461d1c071f7a8f848fc6acf95f821a78ff81155011114636fad37f61d846141";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__6461d1c071f7a8f848fc6acf95f821a78ff81155011114636fad37f61d846141", "");
    }
}
