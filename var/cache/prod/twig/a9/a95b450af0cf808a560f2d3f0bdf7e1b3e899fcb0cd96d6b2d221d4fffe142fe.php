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

/* @admin/Content/news.twig */
class __TwigTemplate_711cbf38a052c465f6235c0a7b908e6b1e7fada8b9390483ebb64a0a8ef04371 extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'sub_title' => [$this, 'block_sub_title'],
            'stylesheet' => [$this, 'block_stylesheet'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return "@admin/default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        $context["menus"] = [0 => "content", 1 => "news"];
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Content/news.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.news_management"), "html", null, true);
    }

    // line 17
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.contents_management"), "html", null, true);
    }

    // line 19
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "    <style type=\"text/css\">
        li.list-group-item {
            z-index: inherit !important;
        }
    </style>
";
    }

    // line 27
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                <div class=\"d-block mb-3\">
                    <a id=\"addNew\" class=\"btn btn-ec-regular\"
                       href=\"";
        // line 33
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_content_news_new");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.create__new"), "html", null, true);
        echo "</a>
                </div>
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-body p-0\">
                        <ul class=\"list-group list-group-flush mb-4 sortable-container\">
                            <li class=\"list-group-item\">
                                <div class=\"row justify-content-around\">
                                    <div class=\"col-2\"><strong>";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.news.publish_date"), "html", null, true);
        echo "</strong>
                                    </div>
                                    <div class=\"col-1\"><strong>";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.news.display_status"), "html", null, true);
        echo "</strong>
                                    </div>
                                    <div class=\"col\"><strong>";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.news.title"), "html", null, true);
        echo "</strong></div>
                                </div>
                            </li>
                            ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["News"]) {
            // line 48
            echo "                                <li class=\"list-group-item sortable-item\" data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["News"], "id", [], "any", false, false, false, 48), "html", null, true);
            echo "\">
                                    <div class=\"row justify-content-around\">
                                        <div class=\"col-2 d-flex align-items-center\">
                                            <span>";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_min($this->env, twig_get_attribute($this->env, $this->source, $context["News"], "publishDate", [], "any", false, false, false, 51)), "html", null, true);
            echo "</span></div>
                                        <div class=\"col-1 d-flex align-items-center\">";
            // line 52
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["News"], "visible", [], "any", false, false, false, 52)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.news.display_status__show")) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.news.display_status__hide"))), "html", null, true);
            echo "</div>
                                        <div class=\"col d-flex align-items-center\"><a
                                                    href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_content_news_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["News"], "id", [], "any", false, false, false, 54)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["News"], "title", [], "any", false, false, false, 54), "html", null, true);
            echo "</a>
                                        </div>
                                        <div class=\"col-2\">
                                            <div class=\"row\">
                                                <div class=\"col px-0 text-center\">
                                                    <a class=\"btn btn-ec-actionIcon\"
                                                       href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_content_news_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["News"], "id", [], "any", false, false, false, 60)]), "html", null, true);
            echo "\"
                                                       data-toggle=\"tooltip\" data-placement=\"top\"
                                                       title=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.edit"), "html", null, true);
            echo "\">
                                                        <i class=\"fa fa-pencil fa-lg text-secondary\"></i>
                                                    </a>
                                                </div>
                                                <div class=\"col pl-0 text-center\" data-toggle=\"tooltip\"
                                                     data-placement=\"top\" title=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
            echo "\">
                                                    <a class=\"btn btn-ec-actionIcon\" data-toggle=\"modal\"
                                                       data-target=\"#delete_";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["News"], "id", [], "any", false, false, false, 69), "html", null, true);
            echo "\">
                                                        <i class=\"fa fa-close fa-lg text-secondary\"
                                                           aria-hidden=\"true\"></i>
                                                    </a>
                                                    <div class=\"modal fade\" id=\"delete_";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["News"], "id", [], "any", false, false, false, 73), "html", null, true);
            echo "\" tabindex=\"-1\"
                                                         role=\"dialog\"
                                                         aria-labelledby=\"delete_";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["News"], "id", [], "any", false, false, false, 75), "html", null, true);
            echo "\" aria-hidden=\"true\">
                                                        <div class=\"modal-dialog\" role=\"document\">
                                                            <div class=\"modal-content\">
                                                                <div class=\"modal-header\">
                                                                    <h5 class=\"modal-title font-weight-bold\">";
            // line 79
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__title"), "html", null, true);
            echo "</h5>
                                                                    <button class=\"close\" type=\"button\"
                                                                            data-dismiss=\"modal\"
                                                                            aria-label=\"Close\"><span
                                                                                aria-hidden=\"true\">×</span>
                                                                    </button>
                                                                </div>
                                                                <div class=\"modal-body text-left\">
                                                                    <p class=\"text-left\">";
            // line 87
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__message", ["%name%" => twig_get_attribute($this->env, $this->source, $context["News"], "title", [], "any", false, false, false, 87)]), "html", null, true);
            echo "</p>
                                                                </div>
                                                                <div class=\"modal-footer\">
                                                                    <button class=\"btn btn-ec-sub\" type=\"button\"
                                                                            data-dismiss=\"modal\">";
            // line 91
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
            echo "</button>
                                                                    <a class=\"btn btn-ec-delete\"
                                                                       href=\"";
            // line 93
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_content_news_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["News"], "id", [], "any", false, false, false, 93)]), "html", null, true);
            echo "\" ";
            echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
            echo "
                                                                       data-method=\"delete\"
                                                                       data-confirm=\"false\">";
            // line 95
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
            echo "</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['News'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "                        </ul>

                        ";
        // line 108
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "paginationData", [], "any", false, false, false, 108), "pageCount", [], "any", false, false, false, 108) > 1)) {
            // line 109
            echo "                            <div class=\"row justify-content-md-center mb-4\">
                                ";
            // line 110
            $this->loadTemplate("@admin/pager.twig", "@admin/Content/news.twig", 110)->display(twig_array_merge($context, ["pages" => twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "paginationData", [], "any", false, false, false, 110), "routes" => "admin_content_news_page"]));
            // line 111
            echo "                            </div>
                        ";
        }
        // line 113
        echo "                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@admin/Content/news.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 113,  244 => 111,  242 => 110,  239 => 109,  237 => 108,  233 => 106,  216 => 95,  209 => 93,  204 => 91,  197 => 87,  186 => 79,  179 => 75,  174 => 73,  167 => 69,  162 => 67,  154 => 62,  149 => 60,  138 => 54,  133 => 52,  129 => 51,  122 => 48,  118 => 47,  112 => 44,  107 => 42,  102 => 40,  90 => 33,  83 => 28,  79 => 27,  70 => 20,  66 => 19,  59 => 17,  52 => 16,  47 => 11,  45 => 13,  38 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Content/news.twig", "/var/www/html/eccube-4-new/src/Eccube/Resource/template/admin/Content/news.twig");
    }
}
