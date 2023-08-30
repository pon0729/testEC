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

/* __string_template__4a2799861d5e915cf6060a60e8effcf99cb01ffb4f891ae802bb04d00b618ce2 */
class __TwigTemplate_27f2c85bb1862831910de4bd3a69e542f882dc9f25cc5bad051e0e39592ea218 extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__4a2799861d5e915cf6060a60e8effcf99cb01ffb4f891ae802bb04d00b618ce2"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__4a2799861d5e915cf6060a60e8effcf99cb01ffb4f891ae802bb04d00b618ce2"));

        // line 11
        echo "<script>
\$(function() {
    var currentPlugin = null;
    var modal = \$('#officialPluginDeleteModal');
    modal.on('show.bs.modal', function(e) {
        currentPlugin = \$(e.relatedTarget).data();
    });
    \$('#officialPluginDeleteButton').on('click', function() {

        var footer = \$('div.modal-footer', modal).hide();
        var message = \$('div.modal-body p', modal).text('「' + currentPlugin.name + ' (' + currentPlugin.version + ')」を削除中。この処理には数分かかる場合があります。画面をリロードせずにこのままお待ち下さい。')
        var progress = \$('div.progress', modal).show();
        \$.ajax({url: currentPlugin['deleteUrl'], type: 'delete'}).then(
            function(data) {
                message.text('削除が完了しました。');
                \$('#deleteLog').text(data.log);
                \$('#deleteLogPane').show();
                progress.hide();
                footer.show().find('button').toggle();
            },
            function(res) {
                if (res.responseJSON.message) {
                    message.text(res.responseJSON.message);
                } else {
                    message.text('削除に失敗しました。');
                }
                if (res.responseJSON.log) {
                    \$('#deleteLog').text(res.responseJSON.log);
                }
                progress.hide();
                \$('#deleteLogPane').show();
                footer.show().find('button').toggle();
            }
        );
    });
});
</script>

";
        // line 49
        if ((twig_length_filter($this->env, (isset($context["Plugins"]) || array_key_exists("Plugins", $context) ? $context["Plugins"] : (function () { throw new RuntimeError('Variable "Plugins" does not exist.', 49, $this->source); })())) > 0)) {
            // line 50
            echo "    <div class=\"card-body p-0\">
        <table class=\"table table-sm\">
            <thead>
            <tr>
                <th class=\"border-top-0 pl-3 pt-2 pb-2\">";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table_official.901"), "html", null, true);
            echo "</th>
                <th class=\"border-top-0 pt-2 pb-2\">";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.unregistered_plugin_table.942"), "html", null, true);
            echo "</th>
                <th class=\"border-top-0 pt-2 pb-2\">";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.unregistered_plugin_table.943"), "html", null, true);
            echo "</th>
                <th class=\"border-top-0 pt-2 pb-2\">";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table.901"), "html", null, true);
            echo "</th>
                <th class=\"border-top-0 pt-2 pb-2\">";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table_official.905"), "html", null, true);
            echo "</th>
                <th class=\"border-top-0 pt-2 pb-2\">&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["Plugins"]) || array_key_exists("Plugins", $context) ? $context["Plugins"] : (function () { throw new RuntimeError('Variable "Plugins" does not exist.', 63, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["Plugin"]) {
                // line 64
                echo "                ";
                $context["pluginDetail"] = ((twig_get_attribute($this->env, $this->source, ($context["officialPluginsDetail"] ?? null), $context["key"], [], "array", true, true, false, 64)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["officialPluginsDetail"] ?? null), $context["key"], [], "array", false, false, false, 64), null)) : (null));
                // line 65
                echo "                <tr class=\"";
                if ((twig_get_attribute($this->env, $this->source, $context["Plugin"], "enabled", [], "any", false, false, false, 65) == false)) {
                    echo "active";
                }
                echo "\">
                    <td class=\"align-middle pl-3\">
                        <a href=\"#\" target=\"_blank\" class=\"plugin-image pr-3\">
                            <img height=\"60\" src=\"";
                // line 68
                echo twig_escape_filter($this->env, (((isset($context["pluginDetail"]) || array_key_exists("pluginDetail", $context) ? $context["pluginDetail"] : (function () { throw new RuntimeError('Variable "pluginDetail" does not exist.', 68, $this->source); })())) ? (twig_get_attribute($this->env, $this->source, (isset($context["pluginDetail"]) || array_key_exists("pluginDetail", $context) ? $context["pluginDetail"] : (function () { throw new RuntimeError('Variable "pluginDetail" does not exist.', 68, $this->source); })()), "image", [], "any", false, false, false, 68)) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("noimage_plugin_list.png", "save_image"))), "html", null, true);
                echo "\" alt=\"\">
                        </a>
                        <span>";
                // line 70
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Plugin"], "name", [], "any", false, false, false, 70), "html", null, true);
                echo "</span>
                    </td>
                    <td class=\"align-middle\" style=\"width: 136px\">";
                // line 72
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Plugin"], "version", [], "any", false, false, false, 72), "html", null, true);
                echo "</td>
                    <td class=\"align-middle\"><p class=\"mb-0\">";
                // line 73
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Plugin"], "code", [], "any", false, false, false, 73), "html", null, true);
                echo "</p></td>
                    <td class=\"align-middle\">
                        ";
                // line 75
                if (twig_get_attribute($this->env, $this->source, $context["Plugin"], "id", [], "any", false, false, false, 75)) {
                    // line 76
                    echo "                            ";
                    if (twig_get_attribute($this->env, $this->source, $context["Plugin"], "enabled", [], "any", false, false, false, 76)) {
                        // line 77
                        echo "                                <span class=\"text-success\">";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.enabled"), "html", null, true);
                        echo "</span>
                            ";
                    } else {
                        // line 79
                        echo "                                <span class=\"text-secondary\">";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.disabled"), "html", null, true);
                        echo "</span>
                            ";
                    }
                    // line 81
                    echo "                        ";
                }
                // line 82
                echo "                    </td>
                    <td class=\"align-middle\">
                        ";
                // line 84
                if ((isset($context["pluginDetail"]) || array_key_exists("pluginDetail", $context) ? $context["pluginDetail"] : (function () { throw new RuntimeError('Variable "pluginDetail" does not exist.', 84, $this->source); })())) {
                    // line 85
                    echo "                            ";
                    if (twig_get_attribute($this->env, $this->source, $context["Plugin"], "id", [], "any", false, false, false, 85)) {
                        // line 86
                        echo "                                ";
                        if ((twig_get_attribute($this->env, $this->source, (isset($context["pluginDetail"]) || array_key_exists("pluginDetail", $context) ? $context["pluginDetail"] : (function () { throw new RuntimeError('Variable "pluginDetail" does not exist.', 86, $this->source); })()), "update_status", [], "any", false, false, false, 86) == 3)) {
                            // line 87
                            echo "                                    <a href=\"";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_store_plugin_update_confirm", ["id" => twig_get_attribute($this->env, $this->source, $context["Plugin"], "id", [], "any", false, false, false, 87)]), "html", null, true);
                            echo "\"
                                       class=\"btn btn-ec-regular\">";
                            // line 88
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table_official.916"), "html", null, true);
                            echo "</a>
                                    <ul class=\"plugin-meta dl-horizontal\">
                                        <li class=\"plugin-version\">";
                            // line 90
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table_official.917", ["%version%" => twig_get_attribute($this->env, $this->source, (isset($context["pluginDetail"]) || array_key_exists("pluginDetail", $context) ? $context["pluginDetail"] : (function () { throw new RuntimeError('Variable "pluginDetail" does not exist.', 90, $this->source); })()), "version", [], "any", false, false, false, 90)]), "html", null, true);
                            echo "</li>
                                        <li class=\"plugin-version\">
                                            ";
                            // line 92
                            $context["versions"] = "";
                            // line 93
                            echo "                                            ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["pluginDetail"]) || array_key_exists("pluginDetail", $context) ? $context["pluginDetail"] : (function () { throw new RuntimeError('Variable "pluginDetail" does not exist.', 93, $this->source); })()), "supported_versions", [], "any", false, false, false, 93));
                            $context['loop'] = [
                              'parent' => $context['_parent'],
                              'index0' => 0,
                              'index'  => 1,
                              'first'  => true,
                            ];
                            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                                $length = count($context['_seq']);
                                $context['loop']['revindex0'] = $length - 1;
                                $context['loop']['revindex'] = $length;
                                $context['loop']['length'] = $length;
                                $context['loop']['last'] = 1 === $length;
                            }
                            foreach ($context['_seq'] as $context["_key"] => $context["version"]) {
                                // line 94
                                echo "                                                ";
                                $context["versions"] = ((isset($context["versions"]) || array_key_exists("versions", $context) ? $context["versions"] : (function () { throw new RuntimeError('Variable "versions" does not exist.', 94, $this->source); })()) . $context["version"]);
                                // line 95
                                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 95) == false)) {
                                    $context["versions"] = ((isset($context["versions"]) || array_key_exists("versions", $context) ? $context["versions"] : (function () { throw new RuntimeError('Variable "versions" does not exist.', 95, $this->source); })()) . ",");
                                }
                                ++$context['loop']['index0'];
                                ++$context['loop']['index'];
                                $context['loop']['first'] = false;
                                if (isset($context['loop']['length'])) {
                                    --$context['loop']['revindex0'];
                                    --$context['loop']['revindex'];
                                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                                }
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['version'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 97
                            echo "                                            ";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table_official.918", ["%versions%" => (isset($context["versions"]) || array_key_exists("versions", $context) ? $context["versions"] : (function () { throw new RuntimeError('Variable "versions" does not exist.', 97, $this->source); })())]), "html", null, true);
                            echo "
                                        </li>
                                        <li class=\"plugin-update\">";
                            // line 99
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table_official.919", ["%update_date%" => $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getTimeAgo(twig_get_attribute($this->env, $this->source, (isset($context["pluginDetail"]) || array_key_exists("pluginDetail", $context) ? $context["pluginDetail"] : (function () { throw new RuntimeError('Variable "pluginDetail" does not exist.', 99, $this->source); })()), "update_date", [], "any", false, false, false, 99))]), "html", null, true);
                            echo "</li>
                                    </ul>
                                ";
                        } else {
                            // line 102
                            echo "                                    <p class=\"mb-0\">";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table_official.920"), "html", null, true);
                            echo "。</p>
                                ";
                        }
                        // line 104
                        echo "                            ";
                    } else {
                        // line 105
                        echo "                                <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_store_plugin_install_confirm", ["id" => twig_get_attribute($this->env, $this->source, $context["Plugin"], "source", [], "any", false, false, false, 105)]), "html", null, true);
                        echo "\" class=\"btn btn-ec-regular\">";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin.install"), "html", null, true);
                        echo "</a>
                            ";
                    }
                    // line 107
                    echo "                        ";
                }
                // line 108
                echo "                    </td>
                    <td class=\"align-middle\">
                        ";
                // line 110
                if (twig_get_attribute($this->env, $this->source, $context["Plugin"], "id", [], "any", false, false, false, 110)) {
                    // line 111
                    echo "                            <div class=\"col-12 col-xs-11 col-md-10 col-lg-8 pull-right text-center\">
                                <div class=\"row\">
                                    <div class=\"col-4 px-0\">
                                        ";
                    // line 114
                    if ((twig_get_attribute($this->env, $this->source, $context["Plugin"], "enabled", [], "any", false, false, false, 114) == false)) {
                        // line 115
                        echo "                                            <a href=\"#\"\t\t\t
\t\t\t\t\t\t\t\t\t\t\t   ";
                        // line 116
                        if ((twig_get_attribute($this->env, $this->source, $context["Plugin"], "getCode", [], "method", false, false, false, 116) == "YamatoPayment4")) {
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t   \t  style=\"pointer-events:none; opacity:0.5;\" 
\t\t\t\t\t\t\t\t\t\t\t   ";
                        }
                        // line 118
                        echo "\t\t\t\t\t\t\t\t   
                                               data-toggle=\"modal\"
                                               data-target=\"#officialPluginDeleteModal\"
                                               data-id=\"";
                        // line 121
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Plugin"], "id", [], "any", false, false, false, 121), "html", null, true);
                        echo "\"
                                               data-delete-url=\"";
                        // line 122
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_store_plugin_api_uninstall", ["id" => twig_get_attribute($this->env, $this->source, $context["Plugin"], "id", [], "any", false, false, false, 122)]), "html", null, true);
                        echo "\"
                                               data-name=\"";
                        // line 123
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Plugin"], "name", [], "any", false, false, false, 123), "html", null, true);
                        echo "\"
                                               data-version=\"";
                        // line 124
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Plugin"], "version", [], "any", false, false, false, 124), "html", null, true);
                        echo "\"
                                               class=\"btn btn-ec-actionIcon\">
                                                <i class=\"fa fa-close fa-lg text-secondary\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
                        // line 126
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                        echo "\"></i>
                                            </a>
                                        ";
                    }
                    // line 129
                    echo "                                    </div>
                                    <div class=\"col-4 px-0\">
                                        ";
                    // line 131
                    if (twig_get_attribute($this->env, $this->source, $context["Plugin"], "enabled", [], "any", false, false, false, 131)) {
                        // line 132
                        echo "                                            <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_store_plugin_disable", ["id" => twig_get_attribute($this->env, $this->source, $context["Plugin"], "id", [], "any", false, false, false, 132)]), "html", null, true);
                        echo "\" ";
                        echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
                        echo "
                                               class=\"btn btn-ec-actionIcon\"
                                               data-method=\"post\" data-confirm=\"false\">
                                                <i class=\"fa fa-pause fa-lg text-secondary\" data-tooltip=\"true\"
                                                   data-placement=\"top\" title=\"";
                        // line 136
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table_official.925"), "html", null, true);
                        echo "\"></i>
                                            </a>
                                        ";
                    } else {
                        // line 139
                        echo "                                            <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_store_plugin_enable", ["id" => twig_get_attribute($this->env, $this->source, $context["Plugin"], "id", [], "any", false, false, false, 139)]), "html", null, true);
                        echo "\" ";
                        echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
                        echo "
                                               class=\"btn btn-ec-actionIcon\"
                                               data-method=\"post\" data-confirm=\"false\">
                                                <i class=\"fa fa-play fa-lg text-secondary\" data-tooltip=\"true\"
                                                   data-placement=\"top\" title=\"";
                        // line 143
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table_official.924"), "html", null, true);
                        echo "\"></i>
                                            </a>
                                        ";
                    }
                    // line 146
                    echo "                                    </div>
                                    <div class=\"col-4 pl-0\">
                                        ";
                    // line 148
                    if (twig_get_attribute($this->env, $this->source, ($context["configPages"] ?? null), twig_get_attribute($this->env, $this->source, $context["Plugin"], "code", [], "any", false, false, false, 148), [], "array", true, true, false, 148)) {
                        // line 149
                        echo "                                            <a class=\"btn btn-ec-actionIcon\" href=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["configPages"]) || array_key_exists("configPages", $context) ? $context["configPages"] : (function () { throw new RuntimeError('Variable "configPages" does not exist.', 149, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["Plugin"], "code", [], "any", false, false, false, 149), [], "array", false, false, false, 149), "html", null, true);
                        echo "\">
                                                <i class=\"fa fa-cog fa-lg text-secondary\" data-tooltip=\"true\"
                                                   data-placement=\"top\" title=\"";
                        // line 151
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table_official.906"), "html", null, true);
                        echo "\"></i>
                                            </a>
                                        ";
                    }
                    // line 154
                    echo "                                    </div>
                                </div>
                            </div>
                        ";
                }
                // line 158
                echo "                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['Plugin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 161
            echo "            </tbody>
        </table>
    </div>
    ";
            // line 164
            if ((twig_length_filter($this->env, (isset($context["officialPluginsDetail"]) || array_key_exists("officialPluginsDetail", $context) ? $context["officialPluginsDetail"] : (function () { throw new RuntimeError('Variable "officialPluginsDetail" does not exist.', 164, $this->source); })())) == 0)) {
                // line 165
                echo "    <p class=\"ml-3\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin.help"), "html", null, true);
                echo "</p>
    ";
            }
        } else {
            // line 168
            echo "    <div class=\"card-body\">
        <div class=\"text-danger\">
            ";
            // line 170
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table_official.923"), "html", null, true);
            echo "
        </div>
    </div>
";
        }
        // line 174
        echo "
<div class=\"modal fade\" id=\"officialPluginDeleteModal\" tabindex=\"-1\" role=\"dialog\"
     aria-labelledby=\"officialPluginDeleteModal\" aria-hidden=\"true\"
     data-keyboard=\"false\" data-backdrop=\"static\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title font-weight-bold\">
                    ";
        // line 182
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin.popup.delete.confirm.title"), "html", null, true);
        echo "</h5>
            </div>
            <div class=\"modal-body text-left\">
                <p class=\"text-left\">";
        // line 185
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin.popup.delete.confirm.message"), "html", null, true);
        echo "</p>
                <div class=\"progress\" style=\"display: none\">
                    <div class=\"progress-bar progress-bar-striped progress-bar-animated\" role=\"progressbar\" style=\"width: 100%\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                </div>
                <div id=\"deleteLogPane\" style=\"display: none;\">
                    <div class=\"d-inline-block collapsed\" data-toggle=\"collapse\" href=\"#deleteLog\" aria-expanded=\"false\" aria-controls=\"deleteLog\">
                        <a><i class=\"fa font-weight-bold mr-1 fa-plus-square-o\"></i><span class=\"font-weight-bold\">ログを確認</span></a>
                    </div>
                    <pre class=\"collapsed collapse\" id=\"deleteLog\"></pre>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button class=\"btn btn-ec-sub\" type=\"button\" data-dismiss=\"modal\">";
        // line 197
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
        echo "</button>
                <button id=\"officialPluginDeleteButton\" class=\"btn btn-ec-delete\" type=\"button\">";
        // line 198
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
        echo "</button>
                <button class=\"btn btn-ec-sub\" style=\"display: none\" onclick=\"location.reload(true);\">完了</button>
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
        return "__string_template__4a2799861d5e915cf6060a60e8effcf99cb01ffb4f891ae802bb04d00b618ce2";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  448 => 198,  444 => 197,  429 => 185,  423 => 182,  413 => 174,  406 => 170,  402 => 168,  395 => 165,  393 => 164,  388 => 161,  380 => 158,  374 => 154,  368 => 151,  362 => 149,  360 => 148,  356 => 146,  350 => 143,  340 => 139,  334 => 136,  324 => 132,  322 => 131,  318 => 129,  312 => 126,  307 => 124,  303 => 123,  299 => 122,  295 => 121,  290 => 118,  284 => 116,  281 => 115,  279 => 114,  274 => 111,  272 => 110,  268 => 108,  265 => 107,  257 => 105,  254 => 104,  248 => 102,  242 => 99,  236 => 97,  220 => 95,  217 => 94,  199 => 93,  197 => 92,  192 => 90,  187 => 88,  182 => 87,  179 => 86,  176 => 85,  174 => 84,  170 => 82,  167 => 81,  161 => 79,  155 => 77,  152 => 76,  150 => 75,  145 => 73,  141 => 72,  136 => 70,  131 => 68,  122 => 65,  119 => 64,  115 => 63,  107 => 58,  103 => 57,  99 => 56,  95 => 55,  91 => 54,  85 => 50,  83 => 49,  43 => 11,);
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
    var currentPlugin = null;
    var modal = \$('#officialPluginDeleteModal');
    modal.on('show.bs.modal', function(e) {
        currentPlugin = \$(e.relatedTarget).data();
    });
    \$('#officialPluginDeleteButton').on('click', function() {

        var footer = \$('div.modal-footer', modal).hide();
        var message = \$('div.modal-body p', modal).text('「' + currentPlugin.name + ' (' + currentPlugin.version + ')」を削除中。この処理には数分かかる場合があります。画面をリロードせずにこのままお待ち下さい。')
        var progress = \$('div.progress', modal).show();
        \$.ajax({url: currentPlugin['deleteUrl'], type: 'delete'}).then(
            function(data) {
                message.text('削除が完了しました。');
                \$('#deleteLog').text(data.log);
                \$('#deleteLogPane').show();
                progress.hide();
                footer.show().find('button').toggle();
            },
            function(res) {
                if (res.responseJSON.message) {
                    message.text(res.responseJSON.message);
                } else {
                    message.text('削除に失敗しました。');
                }
                if (res.responseJSON.log) {
                    \$('#deleteLog').text(res.responseJSON.log);
                }
                progress.hide();
                \$('#deleteLogPane').show();
                footer.show().find('button').toggle();
            }
        );
    });
});
</script>

{% if Plugins|length > 0 %}
    <div class=\"card-body p-0\">
        <table class=\"table table-sm\">
            <thead>
            <tr>
                <th class=\"border-top-0 pl-3 pt-2 pb-2\">{{ 'admin.store.plugin_table_official.901'|trans }}</th>
                <th class=\"border-top-0 pt-2 pb-2\">{{ 'admin.store.unregistered_plugin_table.942'|trans }}</th>
                <th class=\"border-top-0 pt-2 pb-2\">{{ 'admin.store.unregistered_plugin_table.943'|trans }}</th>
                <th class=\"border-top-0 pt-2 pb-2\">{{ 'admin.store.plugin_table.901'|trans }}</th>
                <th class=\"border-top-0 pt-2 pb-2\">{{ 'admin.store.plugin_table_official.905'|trans }}</th>
                <th class=\"border-top-0 pt-2 pb-2\">&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            {% for key,Plugin in Plugins %}
                {% set pluginDetail = officialPluginsDetail[key]|default(NULL) %}
                <tr class=\"{% if Plugin.enabled == false %}active{% endif %}\">
                    <td class=\"align-middle pl-3\">
                        <a href=\"#\" target=\"_blank\" class=\"plugin-image pr-3\">
                            <img height=\"60\" src=\"{{ pluginDetail ? pluginDetail.image : asset('noimage_plugin_list.png', 'save_image') }}\" alt=\"\">
                        </a>
                        <span>{{ Plugin.name }}</span>
                    </td>
                    <td class=\"align-middle\" style=\"width: 136px\">{{ Plugin.version }}</td>
                    <td class=\"align-middle\"><p class=\"mb-0\">{{ Plugin.code }}</p></td>
                    <td class=\"align-middle\">
                        {% if Plugin.id %}
                            {% if Plugin.enabled %}
                                <span class=\"text-success\">{{ 'common.enabled'|trans }}</span>
                            {% else %}
                                <span class=\"text-secondary\">{{ 'common.disabled'|trans }}</span>
                            {% endif %}
                        {% endif %}
                    </td>
                    <td class=\"align-middle\">
                        {% if pluginDetail %}
                            {% if Plugin.id %}
                                {% if pluginDetail.update_status == 3 %}
                                    <a href=\"{{ url('admin_store_plugin_update_confirm', {'id': Plugin.id}) }}\"
                                       class=\"btn btn-ec-regular\">{{ 'admin.store.plugin_table_official.916'|trans }}</a>
                                    <ul class=\"plugin-meta dl-horizontal\">
                                        <li class=\"plugin-version\">{{ 'admin.store.plugin_table_official.917'|trans({'%version%' : pluginDetail.version}) }}</li>
                                        <li class=\"plugin-version\">
                                            {% set versions = '' %}
                                            {% for version in pluginDetail.supported_versions %}
                                                {% set versions = versions ~ version %}
                                                {%- if loop.last == false%}{% set versions = versions ~ ',' %}{% endif -%}
                                            {% endfor %}
                                            {{ 'admin.store.plugin_table_official.918'|trans({'%versions%' : versions}) }}
                                        </li>
                                        <li class=\"plugin-update\">{{ 'admin.store.plugin_table_official.919'|trans({'%update_date%' : pluginDetail.update_date|time_ago}) }}</li>
                                    </ul>
                                {% else %}
                                    <p class=\"mb-0\">{{ 'admin.store.plugin_table_official.920'|trans }}。</p>
                                {% endif %}
                            {% else %}
                                <a href=\"{{ url('admin_store_plugin_install_confirm', {'id': Plugin.source}) }}\" class=\"btn btn-ec-regular\">{{ 'admin.store.plugin.install'|trans }}</a>
                            {% endif %}
                        {% endif %}
                    </td>
                    <td class=\"align-middle\">
                        {% if Plugin.id %}
                            <div class=\"col-12 col-xs-11 col-md-10 col-lg-8 pull-right text-center\">
                                <div class=\"row\">
                                    <div class=\"col-4 px-0\">
                                        {% if Plugin.enabled == false %}
                                            <a href=\"#\"\t\t\t
\t\t\t\t\t\t\t\t\t\t\t   {% if Plugin.getCode() ==  'YamatoPayment4'%} 
\t\t\t\t\t\t\t\t\t\t\t   \t  style=\"pointer-events:none; opacity:0.5;\" 
\t\t\t\t\t\t\t\t\t\t\t   {% endif %}\t\t\t\t\t\t\t\t   
                                               data-toggle=\"modal\"
                                               data-target=\"#officialPluginDeleteModal\"
                                               data-id=\"{{ Plugin.id }}\"
                                               data-delete-url=\"{{ url('admin_store_plugin_api_uninstall', { id: Plugin.id }) }}\"
                                               data-name=\"{{ Plugin.name }}\"
                                               data-version=\"{{ Plugin.version }}\"
                                               class=\"btn btn-ec-actionIcon\">
                                                <i class=\"fa fa-close fa-lg text-secondary\" data-tooltip=\"true\" data-placement=\"top\" title=\"{{ 'admin.common.delete'|trans }}\"></i>
                                            </a>
                                        {% endif %}
                                    </div>
                                    <div class=\"col-4 px-0\">
                                        {% if Plugin.enabled %}
                                            <a href=\"{{ url('admin_store_plugin_disable', { id : Plugin.id }) }}\" {{ csrf_token_for_anchor() }}
                                               class=\"btn btn-ec-actionIcon\"
                                               data-method=\"post\" data-confirm=\"false\">
                                                <i class=\"fa fa-pause fa-lg text-secondary\" data-tooltip=\"true\"
                                                   data-placement=\"top\" title=\"{{ 'admin.store.plugin_table_official.925'|trans }}\"></i>
                                            </a>
                                        {% else %}
                                            <a href=\"{{ url('admin_store_plugin_enable', { id : Plugin.id }) }}\" {{ csrf_token_for_anchor() }}
                                               class=\"btn btn-ec-actionIcon\"
                                               data-method=\"post\" data-confirm=\"false\">
                                                <i class=\"fa fa-play fa-lg text-secondary\" data-tooltip=\"true\"
                                                   data-placement=\"top\" title=\"{{ 'admin.store.plugin_table_official.924'|trans }}\"></i>
                                            </a>
                                        {% endif %}
                                    </div>
                                    <div class=\"col-4 pl-0\">
                                        {% if configPages[Plugin.code] is defined %}
                                            <a class=\"btn btn-ec-actionIcon\" href=\"{{ configPages[Plugin.code] }}\">
                                                <i class=\"fa fa-cog fa-lg text-secondary\" data-tooltip=\"true\"
                                                   data-placement=\"top\" title=\"{{ 'admin.store.plugin_table_official.906'|trans }}\"></i>
                                            </a>
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                        {% endif %}
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>
    {% if officialPluginsDetail|length == 0 %}
    <p class=\"ml-3\">{{ 'admin.store.plugin.help'|trans }}</p>
    {% endif %}
{% else %}
    <div class=\"card-body\">
        <div class=\"text-danger\">
            {{ 'admin.store.plugin_table_official.923'|trans }}
        </div>
    </div>
{% endif %}

<div class=\"modal fade\" id=\"officialPluginDeleteModal\" tabindex=\"-1\" role=\"dialog\"
     aria-labelledby=\"officialPluginDeleteModal\" aria-hidden=\"true\"
     data-keyboard=\"false\" data-backdrop=\"static\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title font-weight-bold\">
                    {{ 'admin.store.plugin.popup.delete.confirm.title'|trans }}</h5>
            </div>
            <div class=\"modal-body text-left\">
                <p class=\"text-left\">{{ 'admin.store.plugin.popup.delete.confirm.message'|trans }}</p>
                <div class=\"progress\" style=\"display: none\">
                    <div class=\"progress-bar progress-bar-striped progress-bar-animated\" role=\"progressbar\" style=\"width: 100%\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                </div>
                <div id=\"deleteLogPane\" style=\"display: none;\">
                    <div class=\"d-inline-block collapsed\" data-toggle=\"collapse\" href=\"#deleteLog\" aria-expanded=\"false\" aria-controls=\"deleteLog\">
                        <a><i class=\"fa font-weight-bold mr-1 fa-plus-square-o\"></i><span class=\"font-weight-bold\">ログを確認</span></a>
                    </div>
                    <pre class=\"collapsed collapse\" id=\"deleteLog\"></pre>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button class=\"btn btn-ec-sub\" type=\"button\" data-dismiss=\"modal\">{{ 'admin.common.cancel'|trans }}</button>
                <button id=\"officialPluginDeleteButton\" class=\"btn btn-ec-delete\" type=\"button\">{{ 'admin.common.delete'|trans }}</button>
                <button class=\"btn btn-ec-sub\" style=\"display: none\" onclick=\"location.reload(true);\">完了</button>
            </div>
        </div>
    </div>
</div>
", "__string_template__4a2799861d5e915cf6060a60e8effcf99cb01ffb4f891ae802bb04d00b618ce2", "");
    }
}
