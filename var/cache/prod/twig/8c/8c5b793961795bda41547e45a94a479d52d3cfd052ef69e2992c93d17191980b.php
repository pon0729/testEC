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

/* __string_template__c4c6cf08182d655c4f26ad85c98c3fee899f8f5a241fbb7d5bd79f198e14e670 */
class __TwigTemplate_a4c29834546bbb34e94c43998c655bf0cb3539b4a41d3fb7e9f01f9cb7e308bf extends \Eccube\Twig\Template
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
        素材
    </div>
    <div class=\"product-description__contents\">
胸当てカバー：表　綿80%ポリエステル20%、裏　綿100%<br>
ベルトカバー：表　綿80ポリエステル20%、裏　綿100%<br>
    </div>
</div>
<br><br>
<div class=\"product-description\">
    <div class=\"product-description__title\">
        サイズ
    </div>
    <div class=\"product-description__contents\">
胸当てカバー：上横65cm/下横27cm/縦21.5cm<br>
ベルトカバー：21cm×18cm<br>

    </div>
</div>
<br><br>
<div class=\"product-description\">
    <div class=\"product-description__title\">
        原産国
    </div>
    <div class=\"product-description__contents\">
        中国
    </div>
</div>
<br><br>
<div class=\"product-description\">
    <div class=\"product-description__title\">
        カラー
    </div>
    <div class=\"product-description__contents\">
ブルー<br>

    </div>
</div>
<br><br>";
    }

    public function getTemplateName()
    {
        return "__string_template__c4c6cf08182d655c4f26ad85c98c3fee899f8f5a241fbb7d5bd79f198e14e670";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__c4c6cf08182d655c4f26ad85c98c3fee899f8f5a241fbb7d5bd79f198e14e670", "");
    }
}
