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

/* __string_template__f230c20214586d62c7adcbdb8642a3efe5b8b7b6148d896c7b45fef196234f77 */
class __TwigTemplate_69e138fbd68023d65dc8d9b2c14248a6cf6bbfd30ba7370bf9fc66ecf3c42632 extends \Eccube\Twig\Template
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
        ご使用方法
    </div>
    <div class=\"product-description__contents\">
        ティーバッグを入れたカップに熱湯を注ぎ、3〜4分程蒸らしてからお召し上がりください。<br>
    </div>
</div>
<br><br>


<div class=\"product-description\">
    <div class=\"product-description__title\">
        ご使用上の注意
    </div>
    <div class=\"product-description__contents\">
     ・直射日光、高温多湿を避けて保存してください<br>
・開封後はお早めにお召し上がりください
    </div>
</div>
<br><br>


<div class=\"product-description\">
    <div class=\"product-description__title\">
        内容量
    </div>
    <div class=\"product-description__contents\">
       内容量/2.5gTB×8個　8杯分
    </div>
</div>
<br><br>


<div class=\"product-description\">
    <div class=\"product-description__title\">
        配合成分
    </div>
    <div class=\"product-description__contents\">
      有機ルイボス(南アフリカ共和国産)
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__f230c20214586d62c7adcbdb8642a3efe5b8b7b6148d896c7b45fef196234f77";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__f230c20214586d62c7adcbdb8642a3efe5b8b7b6148d896c7b45fef196234f77", "");
    }
}
