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

/* index.twig */
class __TwigTemplate_f0aa392252ca60e0d2642f26560ecafc995a49ba3a5aa2b43c36adf08faf8b61 extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheet' => [$this, 'block_stylesheet'],
            'javascript' => [$this, 'block_javascript'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $context["body_class"] = "front_page";
        // line 1
        $this->parent = $this->loadTemplate("default_frame.twig", "index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 8
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "<script>
\$(function() {
  \$('.main_visual')
    .slick({
      dots: true,
      infinite: true,
      speed: 1000,
      fade: true,
      arrows: false,
      accessibility: false,
      draggable: true,
      slidesToScroll: 1,
      vertical: false,
      autoplay: true,
      cssEase: 'linear',
      centerMode: true,
      lazyLoad: 'ondemand',
      pauseOnHover: false
    });
});
</script>
";
    }

    // line 32
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "<div class=\"ec-sliderRole\">
  <div class=\"main_visual\">
    <div class=\"item slick-slide\">
      <a href=\"#\" class=\"main_visual_01\"></a>
    </div>
    <div class=\"item slick-slide\">
      <a href=\"#\" class=\"main_visual_02\"></a>
    </div>
    <div class=\"item slick-slide\">
      <a href=\"#\" class=\"main_visual_03\"></a>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 33,  86 => 32,  61 => 9,  57 => 8,  51 => 5,  46 => 1,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index.twig", "/var/www/html/eccube-4-new/app/template/responceWebDesign/index.twig");
    }
}
