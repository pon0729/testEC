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

/* Block/logo.twig */
class __TwigTemplate_0a840989e2da4a103a8ae47705f0f1351f1faf90edfe4b08e5371a591aa843b7 extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Block/logo.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Block/logo.twig"));

        // line 12
        echo "<div class=\"ec-headerRole nav_02 anime_off\">
  <div class=\"ec-headerRole__title\">
    <div class=\"ec-headerTitle\">
      <h1 class=\"ec-headerTitle__title\">
        <a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage");
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list", ["category_id" => 9]);
        echo "\">
          <span><img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/assets/img/category/PC_category_cosmetic_bodycare.svg"), "html", null, true);
        echo "\"></span>
          <p>COSMETIC・BODYCARE</p>
        </a>
      </li>
      <li>
        <a href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list", ["category_id" => 8]);
        echo "\">
          <span><img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/assets/img/category/PC_category_daily.svg"), "html", null, true);
        echo "\"></span>
          <p>DAILY</p>
        </a>
      </li>
      <li>
        <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list", ["category_id" => 7]);
        echo "\">
          <span><img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/assets/img/category/PC_category_food_drink.svg"), "html", null, true);
        echo "\"></span>
          <p>FOOD・DRINK</p>
        </a>
      </li>
      <li>
        <a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list", ["category_id" => 11]);
        echo "\">
          <span><img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/assets/img/category/PC_category_room.svg"), "html", null, true);
        echo "\"></span>
          <p>ROOM</p>
        </a>
      </li>
      <li>
        <a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list", ["category_id" => 10]);
        echo "\">
          <span><img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/assets/img/category/PC_category_baby.svg"), "html", null, true);
        echo "\"></span>
          <p>BABY</p>
        </a>
      </li>
      <li>
        <a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list", ["category_id" => null]);
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Block/logo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 56,  124 => 55,  116 => 50,  112 => 49,  104 => 44,  100 => 43,  92 => 38,  88 => 37,  80 => 32,  76 => 31,  68 => 26,  64 => 25,  53 => 17,  49 => 16,  43 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("{#
This file is part of EC-CUBE

Copyright(c) EC-CUBE CO.,LTD. All Rights Reserved.

http://www.ec-cube.co.jp/

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.
#}
{#<div class=\"ec-headerRole\">#}
<div class=\"ec-headerRole nav_02 anime_off\">
  <div class=\"ec-headerRole__title\">
    <div class=\"ec-headerTitle\">
      <h1 class=\"ec-headerTitle__title\">
        <a href=\"{{ url('homepage') }}\">
          <img src=\"{{ asset('/html/user_data/assets/img/top/logo.svg') }}\">
        </a>
      </h1>
    </div>
  </div>
  <div class=\"ec-headerRole__navigation\">
    <ul class=\"ec-headerNavigation\">
      <li>
        <a href=\"{{ url('product_list', {'category_id': 9}) }}\">
          <span><img src=\"{{ asset('/html/user_data/assets/img/category/PC_category_cosmetic_bodycare.svg') }}\"></span>
          <p>COSMETIC・BODYCARE</p>
        </a>
      </li>
      <li>
        <a href=\"{{ url('product_list', {'category_id': 8}) }}\">
          <span><img src=\"{{ asset('/html/user_data/assets/img/category/PC_category_daily.svg') }}\"></span>
          <p>DAILY</p>
        </a>
      </li>
      <li>
        <a href=\"{{ url('product_list', {'category_id': 7}) }}\">
          <span><img src=\"{{ asset('/html/user_data/assets/img/category/PC_category_food_drink.svg') }}\"></span>
          <p>FOOD・DRINK</p>
        </a>
      </li>
      <li>
        <a href=\"{{ url('product_list', {'category_id': 11}) }}\">
          <span><img src=\"{{ asset('/html/user_data/assets/img/category/PC_category_room.svg') }}\"></span>
          <p>ROOM</p>
        </a>
      </li>
      <li>
        <a href=\"{{ url('product_list', {'category_id': 10}) }}\">
          <span><img src=\"{{ asset('/html/user_data/assets/img/category/PC_category_baby.svg') }}\"></span>
          <p>BABY</p>
        </a>
      </li>
      <li>
        <a href=\"{{ url('product_list', {'category_id': null }) }}\">
          <span><img src=\"{{ asset('/html/user_data/assets/img/category/PC_category_all.svg') }}\"></span>
          <p>ALL</p>
        </a>
      </li>
    </ul>
  </div>
</div>", "Block/logo.twig", "/var/www/html/eccube-4-new/app/template/responceWebDesign/Block/logo.twig");
    }
}
