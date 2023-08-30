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

/* Block/logo3.twig */
class __TwigTemplate_249ced401e0d3ff6c5421f708ee7f11dafba8b542848c77950e420a63ddbbff7 extends \Eccube\Twig\Template
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
        // line 12
        echo "<div class=\"ec-headerRole nav_02 anime_off\">
  <div class=\"ec-headerRole__title\">
    <div class=\"ec-headerTitle\">
      <h1 class=\"ec-headerTitle__title\">
        <a href=\"";
        // line 16
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("homepage");
        echo "\">
          <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/assets/img/top/logo.svg"), "html", null, true);
        echo "\">
        </a>
      </h1>
    </div>
  </div>
  <div class=\"ec-headerRole__navigation\">
    <ul class=\"ec-headerNavigation\">
      <li>
        <a href=\"";
        // line 25
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list", ["category_id" => 16]);
        echo "\">
          <span><img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/assets/img/category/SP_GIFT.svg"), "html", null, true);
        echo "\"></span>
          <p>GIFT</p>
        </a>
      </li>
      <li>
        <a href=\"";
        // line 31
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list", ["category_id" => 9]);
        echo "\">
          <span><img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/assets/img/category/PC_category_cosmetic_bodycare.svg"), "html", null, true);
        echo "\"></span>
          <p>COSMETIC・BODYCARE</p>
        </a>
      </li>
      <li>
        <a href=\"";
        // line 37
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list", ["category_id" => 11]);
        echo "\">
          <span><img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/assets/img/category/PC_category_room.svg"), "html", null, true);
        echo "\"></span>
          <p>ROOM</p>
        </a>
      </li>
      <li>
        <a href=\"";
        // line 43
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list", ["category_id" => 10]);
        echo "\">
          <span><img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/assets/img/category/PC_category_baby.svg"), "html", null, true);
        echo "\"></span>
          <p>BABY</p>
        </a>
      </li>
      <li>
        <a href=\"";
        // line 49
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list", ["category_id" => 7]);
        echo "\">
          <span><img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/assets/img/category/PC_category_food_drink.svg"), "html", null, true);
        echo "\"></span>
          <p>FOOD・DRINK</p>
        </a>
      </li>
      <li>
        <a href=\"";
        // line 55
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list", ["category_id" => null]);
        echo "\">
          <span><img src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/assets/img/category/PC_category_all.svg"), "html", null, true);
        echo "\"></span>
          <p>ALL</p>
        </a>
      </li>
    </ul>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "Block/logo3.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 56,  118 => 55,  110 => 50,  106 => 49,  98 => 44,  94 => 43,  86 => 38,  82 => 37,  74 => 32,  70 => 31,  62 => 26,  58 => 25,  47 => 17,  43 => 16,  37 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "Block/logo3.twig", "/var/www/html/eccube-4-new/app/template/responceWebDesign/Block/logo3.twig");
    }
}
