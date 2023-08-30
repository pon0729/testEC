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

/* Block/category.twig */
class __TwigTemplate_a05b16a37051d0e02675d6a869dd821be2e74f57d7b46ec7d8937c4083d5444a extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Block/category.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Block/category.twig"));

        // line 11
        echo "
<!--▼コンテンツ内カテゴリはPCのみ表示　カテゴリブロックにあります▼-->
<div class=\"ec-categoryRole\">
    <div class=\"ec-role\">
        ";
        // line 22
        echo "        <div class=\"ec-categoryRole__list\">
            <!--カテゴリー1-->
            <div class=\"ec-categoryRole__listItem\">
                <a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list", ["category_id" => 9]);
        echo "\">
                    <span><img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/assets/img/category/SP_category_cosmetic_bodycare.svg"), "html", null, true);
        echo "\"></span>
                    <p class = line>
                        <strong>COSMETIC・</strong>
                        <strong>BODYCARE</strong>
                    </p>
                </a>
            </div>

            <!--カテゴリー2-->
            <div class=\"ec-categoryRole__listItem\">
                <a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list", ["category_id" => 8]);
        echo "\">
                    <span>
                        <img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/assets/img/category/SP_category_daily.svg"), "html", null, true);
        echo "\">
                        <p><strong>DAILY</strong></p>
                    </span>
                </a>
            </div>

            <!--カテゴリー3-->
            <div class=\"ec-categoryRole__listItem\">
                <a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list", ["category_id" => 7]);
        echo "\">
                    <span>
                        <img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/assets/img/category/SP_category_food_drink.svg"), "html", null, true);
        echo "\">
                        <p><strong>FOOD・DRINK</strong></p>
                    </span>
                </a>
            </div>

            <!--カテゴリー4-->
            <div class=\"ec-categoryRole__listItem\">
                <a href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list", ["category_id" => 11]);
        echo "\">
                    <span>
                        <img src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/assets/img/category/SP_category_room.svg"), "html", null, true);
        echo "\">
                        <p><strong>ROOM</strong></p>
                    </span>
                </a>
            </div>

            <!--カテゴリー5-->
            <div class=\"ec-categoryRole__listItem\">
                <a href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list", ["category_id" => 10]);
        echo "\">
                    <span>
                        <img src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/assets/img/category/SP_category_baby.svg"), "html", null, true);
        echo "\">
                        <p><strong>BABY</strong></p>
                    </span>
                </a>
            </div>

            <!--カテゴリー6-->
            <div class=\"ec-categoryRole__listItem\">
                <a href=\"";
        // line 76
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list", ["category_id" => null]);
        echo "\">
                    <span>
                        <img src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/assets/img/category/SP_category_all.svg"), "html", null, true);
        echo "\">
                        <p><strong>ALL</strong></p>
                    </span>
                </a>
            </div>
        </div>
    </div>
</div>

<!--▲コンテンツ内カテゴリはPCのみ表示　カテゴリブロックにあります▲-->


";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Block/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 78,  135 => 76,  124 => 68,  119 => 66,  108 => 58,  103 => 56,  92 => 48,  87 => 46,  76 => 38,  71 => 36,  58 => 26,  54 => 25,  49 => 22,  43 => 11,);
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

<!--▼コンテンツ内カテゴリはPCのみ表示　カテゴリブロックにあります▼-->
<div class=\"ec-categoryRole\">
    <div class=\"ec-role\">
        {#
        <div class=\"ec-secHeading\">
            <h3 class=\"ec-secHeading__en_title\">
                <img src=\"{{ asset('/html/user_data/assets/img/category/tit_category@0.5x.png') }}\" alt=\"CATEGORY\">
            </h3>
        </div>
        #}
        <div class=\"ec-categoryRole__list\">
            <!--カテゴリー1-->
            <div class=\"ec-categoryRole__listItem\">
                <a href=\"{{ url('product_list', { category_id: 9 }) }}\">
                    <span><img src=\"{{ asset('/html/user_data/assets/img/category/SP_category_cosmetic_bodycare.svg') }}\"></span>
                    <p class = line>
                        <strong>COSMETIC・</strong>
                        <strong>BODYCARE</strong>
                    </p>
                </a>
            </div>

            <!--カテゴリー2-->
            <div class=\"ec-categoryRole__listItem\">
                <a href=\"{{ url('product_list', { category_id: 8 }) }}\">
                    <span>
                        <img src=\"{{ asset('/html/user_data/assets/img/category/SP_category_daily.svg') }}\">
                        <p><strong>DAILY</strong></p>
                    </span>
                </a>
            </div>

            <!--カテゴリー3-->
            <div class=\"ec-categoryRole__listItem\">
                <a href=\"{{ url('product_list', { category_id: 7 }) }}\">
                    <span>
                        <img src=\"{{ asset('/html/user_data/assets/img/category/SP_category_food_drink.svg') }}\">
                        <p><strong>FOOD・DRINK</strong></p>
                    </span>
                </a>
            </div>

            <!--カテゴリー4-->
            <div class=\"ec-categoryRole__listItem\">
                <a href=\"{{ url('product_list', { category_id: 11 }) }}\">
                    <span>
                        <img src=\"{{ asset('/html/user_data/assets/img/category/SP_category_room.svg') }}\">
                        <p><strong>ROOM</strong></p>
                    </span>
                </a>
            </div>

            <!--カテゴリー5-->
            <div class=\"ec-categoryRole__listItem\">
                <a href=\"{{ url('product_list', { category_id: 10 }) }}\">
                    <span>
                        <img src=\"{{ asset('/html/user_data/assets/img/category/SP_category_baby.svg') }}\">
                        <p><strong>BABY</strong></p>
                    </span>
                </a>
            </div>

            <!--カテゴリー6-->
            <div class=\"ec-categoryRole__listItem\">
                <a href=\"{{ url('product_list', { category_id: null }) }}\">
                    <span>
                        <img src=\"{{ asset('/html/user_data/assets/img/category/SP_category_all.svg') }}\">
                        <p><strong>ALL</strong></p>
                    </span>
                </a>
            </div>
        </div>
    </div>
</div>

<!--▲コンテンツ内カテゴリはPCのみ表示　カテゴリブロックにあります▲-->


{#
<div id=\"category_pc\" class=\"pc\">
    <h3 class=\"top_title\">
      <img src=\"{{ app.config.front_urlpath }}/img/top/tit_category.svg\">
      </h3>
    <ul>
        <li>
            <!--カテゴリー1-->
            <a href=\"{{url('product_list')}}?category_id=1\">
                <dl>
                    <dt><img src=\"{{ app.config.front_urlpath }}/img/top/category_01.png\"></dt>
                    <dd>食品</dd>
                </dl>
            </a>
        </li>
        <li>
            <!--カテゴリー2-->
            <a href=\"{{url('product_list')}}?category_id=1\">
                <dl>
                    <dt><img src=\"{{ app.config.front_urlpath }}/img/top/category_02.png\"></dt>
                    <dd>化粧品</dd>
                </dl>
            </a>
        </li>
        <li>
            <!--カテゴリー3-->
            <a href=\"{{url('product_list')}}?category_id=1\">
                <dl>
                    <dt><img src=\"{{ app.config.front_urlpath }}/img/top/category_03.png\"></dt>
                    <dd>日用品</dd>
                </dl>
            </a>
        </li>
        <li>
            <!--カテゴリー4-->
            <a href=\"{{url('product_list')}}?category_id=1\">
                <dl>
                    <dt><img src=\"{{ app.config.front_urlpath }}/img/top/category_04.png\"></dt>
                    <dd>雑貨</dd>
                </dl>
            </a>
        </li>
        <li>
            <!--カテゴリー5-->
            <a href=\"{{url('product_list')}}?category_id=1\">
                <dl>
                    <dt><img src=\"{{ app.config.front_urlpath }}/img/top/category_05.png\"></dt>
                    <dd>ベビー用品</dd>
                </dl>
            </a>
        </li>
        <li>
#}", "Block/category.twig", "/var/www/html/eccube-4-new/app/template/responceWebDesign/Block/category.twig");
    }
}
