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

/* __string_template__cc8b3927cca8bc1b3f4dc3d2df8982f75a4282a6dc497ff2784938127f620da8 */
class __TwigTemplate_16f91d4f5b56e8e486a41c9c067fafd93393bea5c02d851991f0237b65cedb7e extends \Eccube\Twig\Template
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
<li>クラウン表地：ポリエステル70％、綿27％、ポリウレタン3％</li>
<li>クラウン裏地：綿100％</li>
<li>スタイ表地：綿100％</li>
<li>スタイ裏地：綿80％、ポリエステル20％</li>
<li>スタイ別布：ポリエステル100％</li>
<li>スタイリボン：ポリエステル100％</li>
<li>パンツ：ポリエステル90％、綿10％</li>
        </ul>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__cc8b3927cca8bc1b3f4dc3d2df8982f75a4282a6dc497ff2784938127f620da8";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__cc8b3927cca8bc1b3f4dc3d2df8982f75a4282a6dc497ff2784938127f620da8", "");
    }
}
