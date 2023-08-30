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

/* __string_template__cca2e96187009c99896fbdf7ebdaac6797f579f26390b6063942f1f8f155a70a */
class __TwigTemplate_156b9ccd89fc7f97131a51f9f9788c52175adf601b8e5d64f14afe682611ca99 extends \Eccube\Twig\Template
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
未来の自分の美肌を守るため、大事なパートナーの美しい肌を守るため、お子様やご家族の大切な肌を守るため、今日から日焼け止め生活を応援します。<br>
ハーバルUVローション50を使って紫外線や外部刺激から肌を守りましょう<br>
<br>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__cca2e96187009c99896fbdf7ebdaac6797f579f26390b6063942f1f8f155a70a";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__cca2e96187009c99896fbdf7ebdaac6797f579f26390b6063942f1f8f155a70a", "");
    }
}
