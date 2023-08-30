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

/* @admin/Content/page_edit.twig */
class __TwigTemplate_6b15e15c85c0689cbe8d9edc9485ae843bc397582bf99dc01e6081fb8390df8d extends \Eccube\Twig\Template
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
        // line 14
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 14), "query", [], "any", false, false, false, 14), "get", [0 => "return"], "method", false, false, false, 14) == "tradelaw")) {
            // line 15
            $context["menus"] = [0 => "setting", 1 => "shop", 2 => "shop_tradelaw"];
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 16
($context["app"] ?? null), "request", [], "any", false, false, false, 16), "query", [], "any", false, false, false, 16), "get", [0 => "return"], "method", false, false, false, 16) == "agreement")) {
            // line 17
            $context["menus"] = [0 => "setting", 1 => "shop", 2 => "shop_agreement"];
        } else {
            // line 19
            $context["menus"] = [0 => "content", 1 => "page"];
        }
        // line 25
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Content/page_edit.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 22
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.page_management"), "html", null, true);
    }

    // line 23
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.contents_management"), "html", null, true);
    }

    // line 27
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
    <style>
        .ui-resizable-se {
            right: -3px;
            bottom: -3px;
        }
    </style>
";
    }

    // line 37
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo "    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/ace/1.2.8/ace.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/ace/1.2.8/ext-language_tools.js\"></script>
    <script>
        ace.require('ace/ext/language_tools');
        var editor = ace.edit('editor');
        editor.session.setMode('ace/mode/twig');
        editor.setTheme('ace/theme/tomorrow');
        editor.setValue('";
        // line 46
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "tpl_data", [], "any", false, false, false, 46), "vars", [], "any", false, false, false, 46), "value", [], "any", false, false, false, 46), "js"), "html", null, true);
        echo "');
        editor.setOptions({
            enableBasicAutocompletion: true,
            enableSnippets: true,
            enableLiveAutocompletion: true,
            showInvisibles: true
        });

        \$(\"#editor\").resizable({
            resize: function (event, ui) {
                editor.resize();
            }
        });

        \$('#content_page_form').on('submit', function(elem) {
            \$('#main_edit_tpl_data').val(editor.getValue());
        });
    </script>
";
    }

    // line 66
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 67
        echo "    <form id=\"content_page_form\" method=\"post\"
          action=\"";
        // line 68
        if ( !(null === ($context["page_id"] ?? null))) {
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_content_page_edit", ["id" => ($context["page_id"] ?? null)]), "html", null, true);
        } else {
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_content_page_new");
        }
        echo "\">
        ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, false, 69), 'widget');
        echo "

        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <!-- ページ設定 -->
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\"><span class=\"card-title\">";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.page__card_title"), "html", null, true);
        echo "</span></div>
                                <div class=\"col-4 text-right\">
                                    <a data-toggle=\"collapse\" href=\"#pageDetail\" aria-expanded=\"false\" aria-controls=\"pageDetail\">
                                        <i class=\"fa fa-angle-up fa-lg\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"pageDetail\">
                            <div class=\"card-body\">
                                <!-- ページ名 -->
                                <div class=\"row mb-2\">
                                    <div class=\"col-2\">
                                        <span>";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.page_name"), "html", null, true);
        echo "</span>
                                        <span class=\"badge badge-primary ml-1\">";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col-10\">
                                        ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 95), 'widget');
        echo "
                                        ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 96), 'errors');
        echo "
                                    </div>
                                </div>
                                <!-- URL -->
                                <div class=\"row mb-2\">
                                    <div class=\"col-2\">
                                        <span>";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.page_url"), "html", null, true);
        echo "</span>
                                        <span class=\"badge badge-primary ml-1\">";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col-10\">
                                        <div class=\"form-row\">
                                            ";
        // line 107
        if (($context["is_user_data_page"] ?? null)) {
            // line 108
            echo "                                                <div class=\"col-3 pr-0\"><span class=\"align-middle\">";
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("homepage");
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["eccube_config"] ?? null), "eccube_user_data_route", [], "any", false, false, false, 108), "html", null, true);
            echo "/</span></div>
                                                <div class=\"col-9 pl-0\">";
            // line 109
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "url", [], "any", false, false, false, 109), 'widget');
            echo "</div>
                                            ";
        } else {
            // line 111
            echo "                                                <div class=\"col pr-0\"><span class=\"align-middle\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 111), "schemeAndHttpHost", [], "any", false, false, false, 111), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 111), "basePath", [], "any", false, false, false, 111), "html", null, true);
            echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
            echo "</span></div>
                                                <div>";
            // line 112
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "url", [], "any", false, false, false, 112), 'widget', ["type" => "hidden"]);
            echo "</div>
                                            ";
        }
        // line 114
        echo "                                            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "url", [], "any", false, false, false, 114), 'errors');
        echo "
                                        </div>
                                    </div>
                                </div>
                                <!-- ファイル名 -->
                                <div class=\"row mb-2\">
                                    <div class=\"col-2\">
                                        <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.content.page_file_name"), "html", null, true);
        echo "\">
                                            <span>";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.page_file_name"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                        </div>
                                        <span class=\"badge badge-primary ml-1\">";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col-10\">
                                        <div class=\"form-row\">
                                            ";
        // line 128
        if (($context["is_user_data_page"] ?? null)) {
            // line 129
            echo "                                                <div class=\"col-3 pr-0 align-middle\"><span class=\"align-middle\">";
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/</span></div>
                                                <div class=\"col-7 pl-0\">
                                                    ";
            // line 131
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file_name", [], "any", false, false, false, 131), 'widget');
            echo "
                                                </div>
                                                <div class=\"col-2 pl-0\">.twig</div>
                                            ";
        } else {
            // line 135
            echo "                                                <div class=\"col pr-0 align-middle\">
                                                    <span class=\"align-middle\">";
            // line 136
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file_name", [], "any", false, false, false, 136), "vars", [], "any", false, false, false, 136), "value", [], "any", false, false, false, 136), "html", null, true);
            echo ".twig</span>
                                                    <div>";
            // line 137
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file_name", [], "any", false, false, false, 137), 'widget', ["type" => "hidden"]);
            echo "</div>
                                                </div>
                                            ";
        }
        // line 140
        echo "                                            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file_name", [], "any", false, false, false, 140), 'errors');
        echo "
                                        </div>
                                    </div>
                                </div>
                                <!-- コード -->
                                <div class=\"row mb-2\">
                                    <div class=\"col-2\">
                                        <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.content.page_source_code"), "html", null, true);
        echo "\">
                                            <span>";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.page_source_code"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                        </div>
                                        <span class=\"badge badge-primary ml-1\">";
        // line 150
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col-10\">
                                        <div id=\"editor\" style=\"height: 480px\" class=\"form-control";
        // line 153
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "tpl_data", [], "any", false, false, false, 153))) ? (" is-invalid") : (""));
        echo "\"></div>
                                        <div style=\"display: none\">";
        // line 154
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "tpl_data", [], "any", false, false, false, 154), 'widget');
        echo "</div>
                                        ";
        // line 155
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "tpl_data", [], "any", false, false, false, 155), 'errors');
        echo "
                                    </div>
                                </div>
                                ";
        // line 159
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 159), "eccube_form_options", [], "any", false, false, false, 159), "auto_render", [], "any", false, false, false, 159)) {
                // line 160
                echo "                                    ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 160), "eccube_form_options", [], "any", false, false, false, 160), "form_theme", [], "any", false, false, false, 160)) {
                    // line 161
                    echo "                                        ";
                    $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($context["f"], [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 161), "eccube_form_options", [], "any", false, false, false, 161), "form_theme", [], "any", false, false, false, 161)], true);
                    // line 162
                    echo "                                        ";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'row');
                    echo "
                                    ";
                } else {
                    // line 164
                    echo "                                        <div class=\"row\">
                                            <div class=\"col-2\"><span>";
                    // line 165
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 165), "label", [], "any", false, false, false, 165)), "html", null, true);
                    echo "</span></div>
                                            <div class=\"col-10\">
                                                ";
                    // line 167
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'widget');
                    echo "
                                                ";
                    // line 168
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'errors');
                    echo "
                                            </div>
                                        </div>
                                    ";
                }
                // line 172
                echo "                                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 173
        echo "                            </div>
                        </div>
                    </div>
                    <!-- レイアウト設定 -->
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                                         title=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.content.page_layout"), "html", null, true);
        echo "\">
                                        <span class=\"card-title\">
                                            ";
        // line 184
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.page_layout__card_title"), "html", null, true);
        echo "
                                            <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class=\"col-4 text-right\">
                                    <a data-toggle=\"collapse\" href=\"#pageLayout\" aria-expanded=\"false\" aria-controls=\"pageLayout\">
                                        <i class=\"fa fa-angle-up fa-lg\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"pageLayout\">
                            <div class=\"card-body\">
                                <!-- PC -->
                                <div class=\"row mb-2\">
                                    <div class=\"col-2\"><span>";
        // line 200
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.page_pc"), "html", null, true);
        echo "</span></div>
                                    <div class=\"col-10\">
                                        ";
        // line 202
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "PcLayout", [], "any", false, false, false, 202), 'widget');
        echo "
                                        ";
        // line 203
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "PcLayout", [], "any", false, false, false, 203), 'errors');
        echo "
                                    </div>
                                </div>
                                <!-- モバイル -->
                                <div class=\"row mb-2\">
                                    <div class=\"col-2\"><span>";
        // line 208
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.page_mobile"), "html", null, true);
        echo "</span></div>
                                    <div class=\"col-10\">
                                        ";
        // line 210
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "SpLayout", [], "any", false, false, false, 210), 'widget');
        echo "
                                        ";
        // line 211
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "SpLayout", [], "any", false, false, false, 211), 'errors');
        echo "
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- メタ設定 -->
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.content.page_meta"), "html", null, true);
        echo "\">
                                        <span class=\"card-title\">";
        // line 223
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.page_meta__card_title"), "html", null, true);
        echo "</span>
                                        <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                    </div>
                                </div>
                                <div class=\"col-4 text-right\">
                                    <a data-toggle=\"collapse\" href=\"#pageMeta\" aria-expanded=\"false\" aria-controls=\"pageMeta\">
                                        <i class=\"fa fa-angle-up fa-lg\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"pageMeta\">
                            <div class=\"card-body\">
                                <!-- author -->
                                <div class=\"row mb-2\">
                                    <div class=\"col-2\"><span>";
        // line 238
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.page_meta_author"), "html", null, true);
        echo "</span></div>
                                    <div class=\"col-10\">
                                        ";
        // line 240
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "author", [], "any", false, false, false, 240), 'widget');
        echo "
                                        ";
        // line 241
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "author", [], "any", false, false, false, 241), 'errors');
        echo "
                                    </div>
                                </div>
                                <!-- description -->
                                <div class=\"row mb-2\">
                                    <div class=\"col-2\"><span>";
        // line 246
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.page_meta_description"), "html", null, true);
        echo "</span></div>
                                    <div class=\"col-10\">
                                        ";
        // line 248
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, false, 248), 'widget');
        echo "
                                        ";
        // line 249
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, false, 249), 'errors');
        echo "
                                    </div>
                                </div>
                                <!-- keyword -->
                                <div class=\"row mb-2\">
                                    <div class=\"col-2\"><span>";
        // line 254
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.page_meta_keyword"), "html", null, true);
        echo "</span></div>
                                    <div class=\"col-10\">
                                        ";
        // line 256
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "keyword", [], "any", false, false, false, 256), 'widget');
        echo "
                                        ";
        // line 257
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "keyword", [], "any", false, false, false, 257), 'errors');
        echo "
                                    </div>
                                </div>
                                <!-- robot -->
                                <div class=\"row mb-2\">
                                    <div class=\"col-2\"><span>";
        // line 262
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.page_meta_robot"), "html", null, true);
        echo "</span></div>
                                    <div class=\"col-10\">
                                        ";
        // line 264
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "meta_robots", [], "any", false, false, false, 264), 'widget');
        echo "
                                        ";
        // line 265
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "meta_robots", [], "any", false, false, false, 265), 'errors');
        echo "
                                    </div>
                                </div>
                                <!-- metatag -->
                                <div class=\"row\">
                                    <div class=\"col-2\">
                                        <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.content.page_meta_tags"), "html", null, true);
        echo "\">
                                            <span>";
        // line 272
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.page_meta_metatag"), "html", null, true);
        echo "</span>
                                            <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                        </div>
                                    </div>
                                    <div class=\"col-10\">
                                        ";
        // line 277
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "meta_tags", [], "any", false, false, false, 277), 'widget', ["attr" => ["placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.page_meta_metatag_placeholder"), "rows" => "10"]]);
        echo "
                                        ";
        // line 278
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "meta_tags", [], "any", false, false, false, 278), 'errors');
        echo "
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"c-conversionArea\">
            <div class=\"c-conversionArea__container\">
                <div class=\"row justify-content-between align-items-center\">
                    <div class=\"col-6\">
                        <div class=\"c-conversionArea__leftBlockItem\">
                            <a class=\"c-baseLink\" href=\"";
        // line 292
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_content_page");
        echo "\">
                                <i class=\"fa fa-backward\" aria-hidden=\"true\"></i>
                                <span>";
        // line 294
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.page_management"), "html", null, true);
        echo "</span>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div id=\"ex-conversion-action\" class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                <button class=\"btn btn-ec-conversion px-5\" type=\"submit\">";
        // line 301
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.registration"), "html", null, true);
        echo "</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
";
    }

    public function getTemplateName()
    {
        return "@admin/Content/page_edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  588 => 301,  578 => 294,  573 => 292,  556 => 278,  552 => 277,  544 => 272,  540 => 271,  531 => 265,  527 => 264,  522 => 262,  514 => 257,  510 => 256,  505 => 254,  497 => 249,  493 => 248,  488 => 246,  480 => 241,  476 => 240,  471 => 238,  453 => 223,  449 => 222,  435 => 211,  431 => 210,  426 => 208,  418 => 203,  414 => 202,  409 => 200,  390 => 184,  385 => 182,  374 => 173,  367 => 172,  360 => 168,  356 => 167,  351 => 165,  348 => 164,  342 => 162,  339 => 161,  336 => 160,  330 => 159,  324 => 155,  320 => 154,  316 => 153,  310 => 150,  305 => 148,  301 => 147,  290 => 140,  284 => 137,  278 => 136,  275 => 135,  268 => 131,  262 => 129,  260 => 128,  253 => 124,  248 => 122,  244 => 121,  233 => 114,  228 => 112,  221 => 111,  216 => 109,  210 => 108,  208 => 107,  201 => 103,  197 => 102,  188 => 96,  184 => 95,  178 => 92,  174 => 91,  158 => 78,  146 => 69,  138 => 68,  135 => 67,  131 => 66,  108 => 46,  98 => 38,  94 => 37,  83 => 28,  79 => 27,  72 => 23,  65 => 22,  60 => 11,  58 => 25,  55 => 19,  52 => 17,  50 => 16,  48 => 15,  46 => 14,  39 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Content/page_edit.twig", "/var/www/html/eccube-4-new/src/Eccube/Resource/template/admin/Content/page_edit.twig");
    }
}
