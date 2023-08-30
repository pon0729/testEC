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

/* __string_template__a17f28bd3198ca0c2a814aa8e5691a91e6aabadae5979832c43a335c3e60cc32 */
class __TwigTemplate_881f3bc15e892f134f78b24a9ea028745eb4172383d08929b123c11d6fabd020 extends \Eccube\Twig\Template
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
        echo "上品さをまとった今年のフラワーシリーズはナチュラル感溢れる雰囲気に仕上がりました。金箔で書かれた「THANK YOU」 は、様々なシーンで気持ちを伝えてくれます。";
    }

    public function getTemplateName()
    {
        return "__string_template__a17f28bd3198ca0c2a814aa8e5691a91e6aabadae5979832c43a335c3e60cc32";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__a17f28bd3198ca0c2a814aa8e5691a91e6aabadae5979832c43a335c3e60cc32", "");
    }
}
