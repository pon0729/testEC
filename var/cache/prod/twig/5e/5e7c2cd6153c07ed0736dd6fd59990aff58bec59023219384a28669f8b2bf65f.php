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

/* Block/category3.twig */
class __TwigTemplate_be24bc3877183666e328f84aa2a256ba34944836730ae3713a94722475a4b6c4 extends \Eccube\Twig\Template
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
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list", ["category_id" => 16]);
        echo "\">
                    <span>
                        <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/assets/img/category/SP_GIFT.svg"), "html", null, true);
        echo "\">
                        <p><strong>GIFT</strong></p>
                    </span>
                </a>
            </div>

            <!--カテゴリー2-->
            <div class=\"ec-categoryRole__listItem\">
                <a href=\"";
        // line 35
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list", ["category_id" => 9]);
        echo "\">
                    <span>
                        <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/assets/img/category/SP_category_cosmetic_bodycare.svg"), "html", null, true);
        echo "\">
                        <p class = line>
                            <strong>COSMETIC・</strong>
                            <strong>BODYCARE</strong>
                        </p>
                    </span>
                </a>
            </div>

            <!--カテゴリー3-->
            <div class=\"ec-categoryRole__listItem\">
                <a href=\"";
        // line 48
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list", ["category_id" => 11]);
        echo "\">
                    <span>
                        <img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/assets/img/category/SP_category_room.svg"), "html", null, true);
        echo "\">
                        <p><strong>ROOM</strong></p>
                    </span>
                </a>
            </div>

            <!--カテゴリー4-->
            <div class=\"ec-categoryRole__listItem\">
                <a href=\"";
        // line 58
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list", ["category_id" => 10]);
        echo "\">
                    <span>
                        <img src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/assets/img/category/SP_category_baby.svg"), "html", null, true);
        echo "\">
                        <p><strong>BABY</strong></p>
                    </span>
                </a>
            </div>

            <!--カテゴリー5-->
            <div class=\"ec-categoryRole__listItem\">
                <a href=\"";
        // line 68
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list", ["category_id" => 7]);
        echo "\">
                    <span>
                        <img src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/assets/img/category/SP_category_food_drink.svg"), "html", null, true);
        echo "\">
                        <p><strong>FOOD・DRINK</strong></p>
                    </span>
                </a>
            </div>

            <!--カテゴリー6-->
            <div class=\"ec-categoryRole__listItem\">
                <a href=\"";
        // line 78
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list", ["category_id" => null]);
        echo "\">
                    <span>
                        <img src=\"";
        // line 80
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
    }

    public function getTemplateName()
    {
        return "Block/category3.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 80,  131 => 78,  120 => 70,  115 => 68,  104 => 60,  99 => 58,  88 => 50,  83 => 48,  69 => 37,  64 => 35,  53 => 27,  48 => 25,  43 => 22,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Block/category3.twig", "/var/www/html/eccube-4-new/app/template/responceWebDesign/Block/category3.twig");
    }
}
