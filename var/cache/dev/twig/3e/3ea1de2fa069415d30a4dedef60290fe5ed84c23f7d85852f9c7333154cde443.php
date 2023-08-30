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

/* @admin/Store/plugin_table.twig */
class __TwigTemplate_45bdd507c600959eb6e83209f22b07eed9c554239104ce9b957d48976b65887e extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Store/plugin_table.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Store/plugin_table.twig"));

        // line 11
        echo "<script>
\$(function() {
    \$('#localPluginDeleteModal').on('show.bs.modal', function(e) {
        var deleteUrl = \$(e.relatedTarget).data('delete-url');
        \$('div.modal-footer a', this).attr('href', deleteUrl);
    });
});
</script>
";
        // line 19
        if ((twig_length_filter($this->env, (isset($context["Plugins"]) || array_key_exists("Plugins", $context) ? $context["Plugins"] : (function () { throw new RuntimeError('Variable "Plugins" does not exist.', 19, $this->source); })())) > 0)) {
            // line 20
            echo "    <div class=\"card-body p-0\">
        <table class=\"table table-sm\">
            <thead>
            <tr>
                <th class=\"border-top-0 pl-3 pt-2 pb-2\">";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table.887"), "html", null, true);
            echo "</th>
                <th class=\"border-top-0 pt-2 pb-2\">";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table.888"), "html", null, true);
            echo "</th>
                <th class=\"border-top-0 pt-2 pb-2\">";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table.889"), "html", null, true);
            echo "</th>
                <th class=\"border-top-0 pt-2 pb-2\">";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table.901"), "html", null, true);
            echo "</th>
                <th class=\"border-top-0 pt-2 pb-2\">";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table.890"), "html", null, true);
            echo "</th>
                <th class=\"border-top-0 pt-2 pb-2\">&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["Plugins"]) || array_key_exists("Plugins", $context) ? $context["Plugins"] : (function () { throw new RuntimeError('Variable "Plugins" does not exist.', 33, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["Plugin"]) {
                // line 34
                echo "                ";
                $context["form"] = twig_get_attribute($this->env, $this->source, (isset($context["plugin_forms"]) || array_key_exists("plugin_forms", $context) ? $context["plugin_forms"] : (function () { throw new RuntimeError('Variable "plugin_forms" does not exist.', 34, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["Plugin"], "id", [], "any", false, false, false, 34), [], "array", false, false, false, 34);
                // line 35
                echo "                <form id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "vars", [], "any", false, false, false, 35), "name", [], "any", false, false, false, 35), "html", null, true);
                echo "\" name=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "vars", [], "any", false, false, false, 35), "name", [], "any", false, false, false, 35), "html", null, true);
                echo "\" method=\"post\" action=\"\"
                      enctype=\"multipart/form-data\">
                    <tr class=\"";
                // line 37
                if ((twig_get_attribute($this->env, $this->source, $context["Plugin"], "enabled", [], "any", false, false, false, 37) == false)) {
                    echo "active";
                }
                echo "\">
                        <td class=\"align-middle pl-3\">
                            ";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Plugin"], "name", [], "any", false, false, false, 39), "html", null, true);
                echo "
                        </td>
                        <td class=\"align-middle\">";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Plugin"], "version", [], "any", false, false, false, 41), "html", null, true);
                echo "</td>
                        <td class=\"align-middle\">";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Plugin"], "code", [], "any", false, false, false, 42), "html", null, true);
                echo "
                            ";
                // line 44
                echo "                            ";
                // line 50
                echo "                        </td>
                        <td class=\"align-middle\">
                            ";
                // line 52
                if (twig_get_attribute($this->env, $this->source, $context["Plugin"], "enabled", [], "any", false, false, false, 52)) {
                    // line 53
                    echo "                                <span class=\"text-success\">";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.enabled"), "html", null, true);
                    echo "</span>
                            ";
                } else {
                    // line 55
                    echo "                                <span class=\"text-secondary\">";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.disabled"), "html", null, true);
                    echo "</span>
                            ";
                }
                // line 57
                echo "                        </td>
                        <td class=\"align-middle\">
                            ";
                // line 59
                if ((twig_get_attribute($this->env, $this->source, $context["Plugin"], "source", [], "any", false, false, false, 59) == 0)) {
                    // line 60
                    echo "                                ";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "_token", [], "any", false, false, false, 60), 'widget');
                    echo "
                                ";
                    // line 61
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "plugin_id", [], "any", false, false, false, 61), 'widget');
                    echo "
                                ";
                    // line 62
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "plugin_archive", [], "any", false, false, false, 62), 'widget', ["attr" => ["accept" => "application/zip,application/x-tar,application/x-gzip"]]);
                    echo "
                                ";
                    // line 63
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "plugin_archive", [], "any", false, false, false, 63), 'errors');
                    echo "

                                <button class=\"btn btn-primary btn-xs mt-2\"
                                        onclick=\"changeActionSubmit('";
                    // line 66
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_store_plugin_update", ["id" => twig_get_attribute($this->env, $this->source, $context["Plugin"], "id", [], "any", false, false, false, 66)]), "html", null, true);
                    echo "', '";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "vars", [], "any", false, false, false, 66), "name", [], "any", false, false, false, 66), "html", null, true);
                    echo "');\">
                                    ";
                    // line 67
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table.898"), "html", null, true);
                    echo "
                                </button>
                            ";
                }
                // line 70
                echo "                        </td>
                        <td class=\"align-middle\">
                            <div class=\"col-12 col-xs-11 col-md-12 col-lg-12 pull-right text-center\">
                                <div class=\"row\">
                                        ";
                // line 74
                if ((twig_get_attribute($this->env, $this->source, $context["Plugin"], "enabled", [], "any", false, false, false, 74) == false)) {
                    // line 75
                    echo "                                        <div class=\"col-6 px-0\">
                                            <a href=\"#\" class=\"btn btn-ec-actionIcon\"
                                               data-toggle=\"modal\"
                                               data-target=\"#localPluginDeleteModal\"
                                               data-delete-url=\"";
                    // line 79
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_store_plugin_uninstall", ["id" => twig_get_attribute($this->env, $this->source, $context["Plugin"], "id", [], "any", false, false, false, 79)]), "html", null, true);
                    echo "\">
                                                <i class=\"fa fa-close fa-lg text-secondary\" data-tooltip=\"true\" data-placement=\"top\" title=\"削除\"></i>
                                            </a>
                                        </div>
                                        ";
                }
                // line 84
                echo "                                        ";
                if (twig_get_attribute($this->env, $this->source, $context["Plugin"], "enabled", [], "any", false, false, false, 84)) {
                    // line 85
                    echo "                                        <div class=\"col-6 px-0\">
                                            <a href=\"";
                    // line 86
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_store_plugin_disable", ["id" => twig_get_attribute($this->env, $this->source, $context["Plugin"], "id", [], "any", false, false, false, 86)]), "html", null, true);
                    echo "\" ";
                    echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
                    echo "
                                               class=\"btn btn-ec-actionIcon\"
                                               data-method=\"post\" data-confirm=\"false\">
                                                <i class=\"fa fa-pause fa-lg text-secondary\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
                    // line 89
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table.903"), "html", null, true);
                    echo "\"></i>
                                            </a>
                                        </div>
                                        ";
                } else {
                    // line 93
                    echo "                                        <div class=\"col-6 px-0\">
                                            <a href=\"";
                    // line 94
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_store_plugin_enable", ["id" => twig_get_attribute($this->env, $this->source, $context["Plugin"], "id", [], "any", false, false, false, 94)]), "html", null, true);
                    echo "\" ";
                    echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
                    echo "
                                               class=\"btn btn-ec-actionIcon\"
                                               data-method=\"post\" data-confirm=\"false\">
                                                <i class=\"fa fa-play fa-lg text-secondary\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
                    // line 97
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table.902"), "html", null, true);
                    echo "\"></i>
                                            </a>
                                        </div>
                                        ";
                }
                // line 101
                echo "                                        ";
                if (twig_get_attribute($this->env, $this->source, ($context["configPages"] ?? null), twig_get_attribute($this->env, $this->source, $context["Plugin"], "code", [], "any", false, false, false, 101), [], "array", true, true, false, 101)) {
                    // line 102
                    echo "                                        <div class=\"col-6 px-0\">
                                            <a href='";
                    // line 103
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["configPages"]) || array_key_exists("configPages", $context) ? $context["configPages"] : (function () { throw new RuntimeError('Variable "configPages" does not exist.', 103, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["Plugin"], "code", [], "any", false, false, false, 103), [], "array", false, false, false, 103), "html", null, true);
                    echo "'
                                               class=\"btn btn-ec-actionIcon\">
                                                <i class=\"fa fa-cog fa-lg text-secondary\" data-tooltip=\"true\"
                                                   data-placement=\"top\" title=\"";
                    // line 106
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table.891"), "html", null, true);
                    echo "\"></i></a>
                                        </div>
                                        ";
                }
                // line 109
                echo "                                </div>
                            </div>
                        </td>
                    </tr>
                </form>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Plugin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 115
            echo "            </tbody>
        </table>
    </div>
";
        } else {
            // line 119
            echo "    <div class=\"card-body\">
        <div class=\"text-danger\">
            ";
            // line 121
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table.900"), "html", null, true);
            echo "
        </div>
    </div>
";
        }
        // line 125
        echo "
<div class=\"modal fade\" id=\"localPluginDeleteModal\" tabindex=\"-1\"
     role=\"dialog\"
     aria-labelledby=\"localPluginDeleteModal\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title font-weight-bold\">
                    ";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin.popup.delete.confirm.title"), "html", null, true);
        echo "</h5>
                <button class=\"close\" type=\"button\"
                        data-dismiss=\"modal\"
                        aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                </button>
            </div>
            <div class=\"modal-body text-left\">
                <p class=\"text-left\">
                    ";
        // line 141
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin.popup.delete.confirm.message"), "html", null, true);
        echo "</p>
            </div>
            <div class=\"modal-footer\">
                <button class=\"btn btn-ec-sub\" type=\"button\"
                        data-dismiss=\"modal\">";
        // line 145
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
        echo "
                </button>
                <a href=\"#\" ";
        // line 147
        echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
        echo "
                   class=\"btn btn-ec-delete\"
                   data-confirm=\"false\"
                   data-method=\"delete\">
                    ";
        // line 151
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
        echo "
                </a>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@admin/Store/plugin_table.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  324 => 151,  317 => 147,  312 => 145,  305 => 141,  294 => 133,  284 => 125,  277 => 121,  273 => 119,  267 => 115,  256 => 109,  250 => 106,  244 => 103,  241 => 102,  238 => 101,  231 => 97,  223 => 94,  220 => 93,  213 => 89,  205 => 86,  202 => 85,  199 => 84,  191 => 79,  185 => 75,  183 => 74,  177 => 70,  171 => 67,  165 => 66,  159 => 63,  155 => 62,  151 => 61,  146 => 60,  144 => 59,  140 => 57,  134 => 55,  128 => 53,  126 => 52,  122 => 50,  120 => 44,  116 => 42,  112 => 41,  107 => 39,  100 => 37,  92 => 35,  89 => 34,  85 => 33,  77 => 28,  73 => 27,  69 => 26,  65 => 25,  61 => 24,  55 => 20,  53 => 19,  43 => 11,);
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
<script>
\$(function() {
    \$('#localPluginDeleteModal').on('show.bs.modal', function(e) {
        var deleteUrl = \$(e.relatedTarget).data('delete-url');
        \$('div.modal-footer a', this).attr('href', deleteUrl);
    });
});
</script>
{% if Plugins|length > 0 %}
    <div class=\"card-body p-0\">
        <table class=\"table table-sm\">
            <thead>
            <tr>
                <th class=\"border-top-0 pl-3 pt-2 pb-2\">{{ 'admin.store.plugin_table.887'|trans }}</th>
                <th class=\"border-top-0 pt-2 pb-2\">{{ 'admin.store.plugin_table.888'|trans }}</th>
                <th class=\"border-top-0 pt-2 pb-2\">{{ 'admin.store.plugin_table.889'|trans }}</th>
                <th class=\"border-top-0 pt-2 pb-2\">{{ 'admin.store.plugin_table.901'|trans }}</th>
                <th class=\"border-top-0 pt-2 pb-2\">{{ 'admin.store.plugin_table.890'|trans }}</th>
                <th class=\"border-top-0 pt-2 pb-2\">&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            {% for Plugin in Plugins %}
                {% set form = plugin_forms[Plugin.id] %}
                <form id=\"{{ form.vars.name }}\" name=\"{{ form.vars.name }}\" method=\"post\" action=\"\"
                      enctype=\"multipart/form-data\">
                    <tr class=\"{% if Plugin.enabled == false %}active{% endif %}\">
                        <td class=\"align-middle pl-3\">
                            {{ Plugin.name }}
                        </td>
                        <td class=\"align-middle\">{{ Plugin.version }}</td>
                        <td class=\"align-middle\">{{ Plugin.code }}
                            {#TODO: readme of plugin #}
                            {#{% if attribute(app.config[Plugin.code].const, 'readme') is defined %}
                                <br>
                                <a href=\"#\" class=\"view_readme\" data-toggle=\"modal\" data-target=\"#readmeModal\"
                                   data-name=\"{{ Plugin.name }}\"
                                   data-readme=\"{{ attribute(app.config[Plugin.code].const, 'readme') }}\">{{ 'admin.store.plugin_table.897'|trans }}</a>
                            {% endif %}#}
                        </td>
                        <td class=\"align-middle\">
                            {% if Plugin.enabled %}
                                <span class=\"text-success\">{{ 'common.enabled'|trans }}</span>
                            {% else %}
                                <span class=\"text-secondary\">{{ 'common.disabled'|trans }}</span>
                            {% endif %}
                        </td>
                        <td class=\"align-middle\">
                            {% if Plugin.source == 0 %}
                                {{ form_widget(form._token) }}
                                {{ form_widget(form.plugin_id) }}
                                {{ form_widget(form.plugin_archive, {'attr': {'accept': 'application/zip,application/x-tar,application/x-gzip'}}) }}
                                {{ form_errors(form.plugin_archive) }}

                                <button class=\"btn btn-primary btn-xs mt-2\"
                                        onclick=\"changeActionSubmit('{{ url('admin_store_plugin_update', { id : Plugin.id }) }}', '{{ form.vars.name }}');\">
                                    {{ 'admin.store.plugin_table.898'|trans }}
                                </button>
                            {% endif %}
                        </td>
                        <td class=\"align-middle\">
                            <div class=\"col-12 col-xs-11 col-md-12 col-lg-12 pull-right text-center\">
                                <div class=\"row\">
                                        {% if Plugin.enabled == false %}
                                        <div class=\"col-6 px-0\">
                                            <a href=\"#\" class=\"btn btn-ec-actionIcon\"
                                               data-toggle=\"modal\"
                                               data-target=\"#localPluginDeleteModal\"
                                               data-delete-url=\"{{ url('admin_store_plugin_uninstall', { id : Plugin.id }) }}\">
                                                <i class=\"fa fa-close fa-lg text-secondary\" data-tooltip=\"true\" data-placement=\"top\" title=\"削除\"></i>
                                            </a>
                                        </div>
                                        {% endif %}
                                        {% if Plugin.enabled %}
                                        <div class=\"col-6 px-0\">
                                            <a href=\"{{ url('admin_store_plugin_disable', { id : Plugin.id }) }}\" {{ csrf_token_for_anchor() }}
                                               class=\"btn btn-ec-actionIcon\"
                                               data-method=\"post\" data-confirm=\"false\">
                                                <i class=\"fa fa-pause fa-lg text-secondary\" data-tooltip=\"true\" data-placement=\"top\" title=\"{{ 'admin.store.plugin_table.903'|trans }}\"></i>
                                            </a>
                                        </div>
                                        {% else %}
                                        <div class=\"col-6 px-0\">
                                            <a href=\"{{ url('admin_store_plugin_enable', { id : Plugin.id }) }}\" {{ csrf_token_for_anchor() }}
                                               class=\"btn btn-ec-actionIcon\"
                                               data-method=\"post\" data-confirm=\"false\">
                                                <i class=\"fa fa-play fa-lg text-secondary\" data-tooltip=\"true\" data-placement=\"top\" title=\"{{ 'admin.store.plugin_table.902'|trans }}\"></i>
                                            </a>
                                        </div>
                                        {% endif %}
                                        {% if configPages[Plugin.code] is defined %}
                                        <div class=\"col-6 px-0\">
                                            <a href='{{ configPages[Plugin.code] }}'
                                               class=\"btn btn-ec-actionIcon\">
                                                <i class=\"fa fa-cog fa-lg text-secondary\" data-tooltip=\"true\"
                                                   data-placement=\"top\" title=\"{{ 'admin.store.plugin_table.891'|trans }}\"></i></a>
                                        </div>
                                        {% endif %}
                                </div>
                            </div>
                        </td>
                    </tr>
                </form>
            {% endfor %}
            </tbody>
        </table>
    </div>
{% else %}
    <div class=\"card-body\">
        <div class=\"text-danger\">
            {{ 'admin.store.plugin_table.900'|trans }}
        </div>
    </div>
{% endif %}

<div class=\"modal fade\" id=\"localPluginDeleteModal\" tabindex=\"-1\"
     role=\"dialog\"
     aria-labelledby=\"localPluginDeleteModal\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title font-weight-bold\">
                    {{ 'admin.store.plugin.popup.delete.confirm.title'|trans }}</h5>
                <button class=\"close\" type=\"button\"
                        data-dismiss=\"modal\"
                        aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                </button>
            </div>
            <div class=\"modal-body text-left\">
                <p class=\"text-left\">
                    {{ 'admin.store.plugin.popup.delete.confirm.message'|trans }}</p>
            </div>
            <div class=\"modal-footer\">
                <button class=\"btn btn-ec-sub\" type=\"button\"
                        data-dismiss=\"modal\">{{ 'admin.common.cancel'|trans }}
                </button>
                <a href=\"#\" {{ csrf_token_for_anchor() }}
                   class=\"btn btn-ec-delete\"
                   data-confirm=\"false\"
                   data-method=\"delete\">
                    {{ 'admin.common.delete'|trans }}
                </a>
            </div>
        </div>
    </div>
</div>
", "@admin/Store/plugin_table.twig", "/var/www/html/eccube-4-new/src/Eccube/Resource/template/admin/Store/plugin_table.twig");
    }
}
