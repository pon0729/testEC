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

/* Block/news.twig */
class __TwigTemplate_8bfe794a8fbdd896fa48e5e96659cf586da547a7130570f1c7b0ed248733828f extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        $context["NewsList"] = twig_get_attribute($this->env, $this->source, call_user_func_array($this->env->getFunction('repository')->getCallable(), ["Eccube\\Entity\\News"]), "getList", [], "method", false, false, false, 11);
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('javascript', $context, $blocks);
        // line 49
        echo "<div class=\"ec-newsRole\">
    <div class=\"ec-newsRole__wrapper\">
        <h3 class=\"ec-secHeading\">
            News
        </h3>
        <div class=\"ec-newsRole__news\">
            ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["NewsList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["News"]) {
            // line 56
            echo "                <div class=\"ec-newsRole__newsItem\">
                    <div class=\"ec-newsRole__newsHeading\">
                        <div class=\"ec-newsRole__newsDate\">
                            ";
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_day($this->env, twig_get_attribute($this->env, $this->source, $context["News"], "publish_date", [], "any", false, false, false, 59)), "html", null, true);
            echo "
                        </div>
                        <div class=\"ec-newsRole__newsColumn\">
                            <div class=\"ec-newsRole__newsTitle\">
                                ";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["News"], "title", [], "any", false, false, false, 63), "html", null, true);
            echo "
                            </div>
                            ";
            // line 65
            if ((twig_get_attribute($this->env, $this->source, $context["News"], "description", [], "any", false, false, false, 65) || twig_get_attribute($this->env, $this->source, $context["News"], "url", [], "any", false, false, false, 65))) {
                // line 66
                echo "                                <div class=\"ec-newsRole__newsClose\">
                                    <a class=\"ec-newsRole__newsCloseBtn\">
                                        <svg class=\"cb cb-angle-down\">
                                            <use xlink:href=\"#cb-angle-down\" />
                                        </svg>
                                    </a>
                                </div>
                            ";
            }
            // line 74
            echo "                        </div>
                    </div>
                    <div class=\"ec-newsRole__newsDescription\">
                        ";
            // line 77
            echo nl2br(twig_get_attribute($this->env, $this->source, $context["News"], "description", [], "any", false, false, false, 77));
            echo "
                        ";
            // line 78
            if (twig_get_attribute($this->env, $this->source, $context["News"], "url", [], "any", false, false, false, 78)) {
                // line 79
                echo "                            <br>
                            <a href=\"";
                // line 80
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["News"], "url", [], "any", false, false, false, 80), "html", null, true);
                echo "\" ";
                if ((twig_get_attribute($this->env, $this->source, $context["News"], "link_method", [], "any", false, false, false, 80) == "1")) {
                    echo "target=\"_blank\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("詳しくはこちら"), "html", null, true);
                echo "</a>
                        ";
            }
            // line 82
            echo "                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['News'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "        </div>
    </div>
</div>

<!--▼ガイド　※新着情報ブロックにあります▼-->
<div class=\"ec-guideRole\">
    <div class=\"ec-guideRole__wrapper\">
        <h3 class=\"ec-guideRole__title\">
            Guide
        </h3>
        <ul class=\"ec-guideRole__list\">
            <li class=\"ec-guideRole__listItem\">
                <a href=\"/user_data/return_exchange\">
                    返品・交換
                </a>
            </li>
            <li class=\"ec-guideRole__listItem\">
                <a href=\"";
        // line 102
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("help_guide");
        echo "#shipping\">
                    送料について
                </a>
            </li>
            <li class=\"ec-guideRole__listItem\">
                <a href=\"";
        // line 107
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("help_guide");
        echo "#payment\">
                    お支払いについて
                </a>
            </li>
        </ul>
    </div>
</div>
<!--▲ガイド　※新着情報ブロックにあります▲-->";
    }

    // line 13
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "    <script>
        \$(function() {
            \$('.ec-newsRole__news').each(function() {
                var listLength = \$(this).find('.ec-newsRole__newsItem').length;
                if (listLength > 5) {
                    \$(this).find('.ec-newsRole__newsItem:gt(4)').each(function() {
                        \$(this).hide();
                    });
                    \$(this).append('<a id=\"news_readmore\" class=\"ec-inlineBtn--top\">More</a>');
                    var dispNum = 5;
                    \$(this).find('#news_readmore').click(function() {
                        dispNum += 5;
                        \$(this).parent().find('.ec-newsRole__newsItem:lt(' + dispNum + ')').show();
                        if (dispNum >= listLength) {
                            \$(this).hide();
                        }
                    })
                }
            });

            \$('.ec-newsRole__newsHeading').on('click', function() {
                \$newsItem = \$(this).parent('.ec-newsRole__newsItem');
                \$newsDescription = \$newsItem.children('.ec-newsRole__newsDescription');
                if (\$newsDescription.css('display') == 'none') {
                    \$newsItem.addClass('is_active');
                    \$newsDescription.slideDown(300);
                } else {
                    \$newsItem.removeClass('is_active');
                    \$newsDescription.slideUp(300);
                }
                return false;
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "Block/news.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 14,  158 => 13,  146 => 107,  138 => 102,  119 => 85,  111 => 82,  100 => 80,  97 => 79,  95 => 78,  91 => 77,  86 => 74,  76 => 66,  74 => 65,  69 => 63,  62 => 59,  57 => 56,  53 => 55,  45 => 49,  43 => 13,  40 => 12,  38 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Block/news.twig", "/var/www/html/eccube-4-new/app/template/responceWebDesign/Block/news.twig");
    }
}
