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

/* __string_template__fa98abdde2ad3e0f1c728cd6edfce75cb8927561e441ac8cd8c1f9ab606cada0 */
class __TwigTemplate_64793af89b1a03abaed54847aa076d555a6836286a38a9cd3ed6fe8e6a3aa644 extends \Eccube\Twig\Template
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
        お肌にやさしい紫外線ケア。家族で使っていただける、フェイス&ボディ両用タイプです。<br>
瑞々しくさらっとした伸びのよいローションです。<br>
SPF30/PA++ 紫外線吸収剤不使用/パラベン不使用なのが特徴です。<br>
お肌に負担をかける「紫外線吸収剤」を使用せず、「紫外線散乱剤」で紫外線を防ぎ、植物エキスで優しくケアします。<br>
日常生活はもちろん、屋外でのスポーツ、レジャーにもお使いいただけます。<br>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__fa98abdde2ad3e0f1c728cd6edfce75cb8927561e441ac8cd8c1f9ab606cada0";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__fa98abdde2ad3e0f1c728cd6edfce75cb8927561e441ac8cd8c1f9ab606cada0", "");
    }
}
