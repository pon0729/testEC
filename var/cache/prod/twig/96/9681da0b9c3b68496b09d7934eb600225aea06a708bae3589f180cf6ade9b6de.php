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

/* __string_template__3b596b471f9c281693af068b3826402fc99c2073b9a61141bbbabae2397a7609 */
class __TwigTemplate_a23dd4bb1e383a2097136d77ce8169e7fbb75cf8380e2680b24a2846322c0747 extends \Eccube\Twig\Template
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
        echo "フローラルな花の香りに包まれて、ラグジュアリーなバスタイムにバスソルトはいかがでしょう。<br> オシャレなパッケージなので、ギフトにもオススメです。";
    }

    public function getTemplateName()
    {
        return "__string_template__3b596b471f9c281693af068b3826402fc99c2073b9a61141bbbabae2397a7609";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__3b596b471f9c281693af068b3826402fc99c2073b9a61141bbbabae2397a7609", "");
    }
}
