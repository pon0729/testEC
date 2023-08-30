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

/* @YamatoPayment4/kuronekoToken.twig */
class __TwigTemplate_25651abef4211e76977c6a549e4047c136575a5e5960e1c598b80f5a373fa43d extends \Eccube\Twig\Template
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
        // line 3
        echo "<script>
    \$('button.ec-blockBtn--action').click( function () {
        r = executePay();
        if( r == false || r == undefined) {
            loadingOverlay('hide');
            r = false;
        }
        return r;
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "@YamatoPayment4/kuronekoToken.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "@YamatoPayment4/kuronekoToken.twig", "/var/www/html/eccube-4-new/app/Plugin/YamatoPayment4/Resource/template/kuronekoToken.twig");
    }
}
