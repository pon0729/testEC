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

/* __string_template__611d61e2cda2eb6503355b0227174084a872d7fde7e396c0276692ee01fb0272 */
class __TwigTemplate_1300a4cf5140591f18d824afedc9767c178340fcde5790500447f07e3795477f extends \Eccube\Twig\Template
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
        echo "いつもお世話になっている同僚の方やご家族、ご友人のプレゼントに、<br>ドライブやアウトドア・オフィスなど様々な場面で使える、<br>ステンレスカップとミニボトルはいかがですか。";
    }

    public function getTemplateName()
    {
        return "__string_template__611d61e2cda2eb6503355b0227174084a872d7fde7e396c0276692ee01fb0272";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__611d61e2cda2eb6503355b0227174084a872d7fde7e396c0276692ee01fb0272", "");
    }
}
