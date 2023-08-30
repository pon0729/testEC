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

/* __string_template__2cb1e910b1c4a50b800eed232224cacb9f9c1ca6598b534503cf5c0f837aab0d */
class __TwigTemplate_aa5f34be8161005f884d93c595957b30b29a57ba14b4b7d6573f18ca30e61bf6 extends \Eccube\Twig\Template
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

タンブラーと今治タオルのギフトセットです。<br>
普段から使いやすいタンブラーと綿100%の今治タオル。<br>
日頃お世話になってる方への感謝の気持ちを込めたプレゼントになります。
<br>
<br>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__2cb1e910b1c4a50b800eed232224cacb9f9c1ca6598b534503cf5c0f837aab0d";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__2cb1e910b1c4a50b800eed232224cacb9f9c1ca6598b534503cf5c0f837aab0d", "");
    }
}
