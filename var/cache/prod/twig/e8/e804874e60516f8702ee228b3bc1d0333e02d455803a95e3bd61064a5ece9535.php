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

/* @admin/Content/page.twig */
class __TwigTemplate_9b5cc079c6521d1582ee952161e62a50c3155f9b519ae77127d0933a9280991b extends \Eccube\Twig\Template
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
            'javascript' => [$this, 'block_javascript'],
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
        $context["menus"] = [0 => "content", 1 => "page"];
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Content/page.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.page_management"), "html", null, true);
    }

    // line 16
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.contents_management"), "html", null, true);
    }

    // line 18
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "<script>
    // searchWordの実行
    \$('#search-page').on('input', function () {
        searchWord(\$(this).val(), \$('table.table tbody tr'));
    });
</script>
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
                <div class=\"row justify-content-between mb-2\">
                    <div class=\"col-9\">
                        <a class=\"btn btn-ec-regular\" href=\"";
        // line 33
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_content_page_new");
        echo "\">
                            ";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.create__new"), "html", null, true);
        echo "
                        </a>
                    </div>
                    <div class=\"col-3\">
                        <div class=\"form-row\">
                            <div class=\"col\">
                                <div class=\"input-group mb-3\">
                                    <div class=\"input-group-prepend\">
                                        <span class=\"input-group-text\" id=\"basic-addon1\"><i class=\"fa fa-search\"></i></span>
                                    </div>
                                    <input id=\"search-page\" class=\"form-control\" type=\"search\" aria-label=\"Search\">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-body p-0\">
                        <table class=\"table table-sm\">
                            <thead>
                            <th class=\"border-0 pt-2 pb-2 pl-3\">";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.page_name"), "html", null, true);
        echo "</th>
                            <th class=\"border-0 pt-2 pb-2\">";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_name"), "html", null, true);
        echo "</th>
                            <th class=\"border-0 pt-2 pb-2 pr-3\"></th>
                            </thead>
                            ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Pages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["Page"]) {
            // line 59
            echo "                                <tr id=\"ex-page-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Page"], "id", [], "any", false, false, false, 59), "html", null, true);
            echo "\">
                                    <td class=\"align-middle pl-3\">
                                        <a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_content_page_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["Page"], "id", [], "any", false, false, false, 61)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Page"], "name", [], "any", false, false, false, 61), "html", null, true);
            echo "</a>
                                    </td>
                                    ";
            // line 64
            echo "                                    <td class=\"align-middle";
            echo (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Page"], "layouts", [], "any", false, false, false, 64)) < 2)) ? (" pb-4") : (""));
            echo "\">
                                        ";
            // line 65
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["Page"], "layouts", [], "any", false, false, false, 65));
            foreach ($context['_seq'] as $context["_key"] => $context["Layout"]) {
                // line 66
                echo "                                            ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Layout"], "device_type", [], "any", false, false, false, 66), "id", [], "any", false, false, false, 66) == twig_constant("Eccube\\Entity\\Master\\DeviceType::DEVICE_TYPE_PC"))) {
                    // line 67
                    echo "                                                ";
                    $context["icon"] = "fa-desktop";
                    // line 68
                    echo "                                            ";
                } else {
                    // line 69
                    echo "                                                ";
                    $context["icon"] = "fa-mobile fa-2x";
                    // line 70
                    echo "                                            ";
                }
                // line 71
                echo "                                            <div class=\"d-block\">
                                                <i class=\"fa ";
                // line 72
                echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
                echo " mr-2\"></i>
                                                <span>";
                // line 73
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Layout"], "name", [], "any", false, false, false, 73), "html", null, true);
                echo "</span>
                                            </div>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Layout'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "                                    </td>
                                    <td class=\"align-middle pr-3\">
                                        <div class=\"row justify-content-end\">
                                            ";
            // line 79
            if ((twig_get_attribute($this->env, $this->source, $context["Page"], "edit_type", [], "any", false, false, false, 79) == twig_constant("Eccube\\Entity\\Page::EDIT_TYPE_USER"))) {
                // line 80
                echo "                                                <div class=\"col-auto text-center\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                echo "\">
                                                    <a class=\"btn btn-ec-actionIcon\" data-toggle=\"modal\" data-target=\"#delete_";
                // line 81
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Page"], "id", [], "any", false, false, false, 81), "html", null, true);
                echo "\">
                                                        <i class=\"fa fa-close fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                    </a>
                                                </div>
                                                <div class=\"modal fade\" id=\"delete_";
                // line 85
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Page"], "id", [], "any", false, false, false, 85), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\"
                                                    aria-labelledby=\"delete_";
                // line 86
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Page"], "id", [], "any", false, false, false, 86), "html", null, true);
                echo "\" aria-hidden=\"true\">
                                                    <div class=\"modal-dialog\" role=\"document\">
                                                        <div class=\"modal-content\">
                                                            <div class=\"modal-header\">
                                                                <h5 class=\"modal-title font-weight-bold\">";
                // line 90
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__title"), "html", null, true);
                echo "</h5>
                                                                <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                                    <span aria-hidden=\"true\">×</span>
                                                                </button>
                                                            </div>
                                                            <div class=\"modal-body text-left\">
                                                                <p class=\"text-left\">";
                // line 96
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__message", ["%name%" => twig_get_attribute($this->env, $this->source, $context["Page"], "name", [], "any", false, false, false, 96)]), "html", null, true);
                echo "</p>
                                                            </div>
                                                            <div class=\"modal-footer\">
                                                                <button class=\"btn btn-ec-sub\" type=\"button\" data-dismiss=\"modal\">";
                // line 99
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
                echo "</button>
                                                                <a class=\"btn btn-ec-delete\" href=\"";
                // line 100
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_content_page_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["Page"], "id", [], "any", false, false, false, 100)]), "html", null, true);
                echo "\"
                                                                    ";
                // line 101
                echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
                echo " data-method=\"delete\" data-confirm=\"false\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                echo "</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            ";
            }
            // line 107
            echo "                                        </div>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "@admin/Content/page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 111,  249 => 107,  238 => 101,  234 => 100,  230 => 99,  224 => 96,  215 => 90,  208 => 86,  204 => 85,  197 => 81,  192 => 80,  190 => 79,  185 => 76,  176 => 73,  172 => 72,  169 => 71,  166 => 70,  163 => 69,  160 => 68,  157 => 67,  154 => 66,  150 => 65,  145 => 64,  138 => 61,  132 => 59,  128 => 58,  122 => 55,  118 => 54,  95 => 34,  91 => 33,  84 => 28,  80 => 27,  70 => 19,  66 => 18,  59 => 16,  52 => 15,  47 => 11,  45 => 13,  38 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Content/page.twig", "/var/www/html/eccube-4-new/src/Eccube/Resource/template/admin/Content/page.twig");
    }
}
