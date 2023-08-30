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

/* @admin/Content/layout.twig */
class __TwigTemplate_424fbf37605255d268c85e7842e202403abde90875d100b3212d978de8cc176f extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Content/layout.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Content/layout.twig"));

        // line 13
        $context["menus"] = [0 => "content", 1 => "layout"];
        // line 18
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), [0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Content/layout.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_management"), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sub_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sub_title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.contents_management"), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 20
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 21
        echo "    <script>
        var sections = {
            ";
        // line 23
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Entity\\Layout::TARGET_ID_UNUSED"), "html", null, true);
        echo " : '";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_section__unused"), "html", null, true);
        echo "',
            ";
        // line 24
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Entity\\Layout::TARGET_ID_HEAD"), "html", null, true);
        echo " : '";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_section__head"), "html", null, true);
        echo "',
            ";
        // line 25
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Entity\\Layout::TARGET_ID_BODY_AFTER"), "html", null, true);
        echo " : '";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_section__body_after"), "html", null, true);
        echo "',
            ";
        // line 26
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Entity\\Layout::TARGET_ID_HEADER"), "html", null, true);
        echo " : '";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_section__header"), "html", null, true);
        echo "',
            ";
        // line 27
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Entity\\Layout::TARGET_ID_CONTENTS_TOP"), "html", null, true);
        echo " : '";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_section__contents_top"), "html", null, true);
        echo "',
            ";
        // line 28
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Entity\\Layout::TARGET_ID_SIDE_LEFT"), "html", null, true);
        echo " : '";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_section__side_left"), "html", null, true);
        echo "',
            ";
        // line 29
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Entity\\Layout::TARGET_ID_MAIN_TOP"), "html", null, true);
        echo " : '";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_section__main_top"), "html", null, true);
        echo "',
            ";
        // line 30
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Entity\\Layout::TARGET_ID_MAIN_BOTTOM"), "html", null, true);
        echo " : '";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_section__main_bottom"), "html", null, true);
        echo "',
            ";
        // line 31
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Entity\\Layout::TARGET_ID_SIDE_RIGHT"), "html", null, true);
        echo " : '";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_section__side_right"), "html", null, true);
        echo "',
            ";
        // line 32
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Entity\\Layout::TARGET_ID_CONTENTS_BOTTOM"), "html", null, true);
        echo " : '";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_section__contents_bottom"), "html", null, true);
        echo "',
            ";
        // line 33
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Entity\\Layout::TARGET_ID_FOOTER"), "html", null, true);
        echo " : '";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_section__footer"), "html", null, true);
        echo "',
            ";
        // line 34
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Entity\\Layout::TARGET_ID_DRAWER"), "html", null, true);
        echo " : '";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_section__drawer"), "html", null, true);
        echo "',
            ";
        // line 35
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Entity\\Layout::TARGET_ID_CLOSE_BODY_BEFORE"), "html", null, true);
        echo " : '";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_section__close_body_before"), "html", null, true);
        echo "'
        };

        // use for layout_design.js
        var els = Object.keys(sections).map(function(id) {
            return '#position_' + id;
        });
    </script>
    <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery.ui/jquery.ui.core.min.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery.ui/jquery.ui.widget.min.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery.ui/jquery.ui.mouse.min.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery.ui/jquery.ui.sortable.min.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/layout_design.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/ace/1.2.8/ace.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/ace/1.2.8/ext-language_tools.js\"></script>

    <script>
        \$(function(){
            \$('.block-context-menu').popover({
                placement: 'bottom',
                html: true,
                container: 'body',
                content: function () {
                    return \$('#context-menu').html();
                }
            }).on('shown.bs.popover', function () {
                \$('.block-context-menu').not(this).popover('hide');
                var \$menu = \$(this);
                var \$block = \$menu.closest('[id^=\"detail_box__layout_item\"]');
                var block = {
                    'menu': \$menu,
                    'current': \$block,
                    'prev': \$block.prev('[id^=\"detail_box__layout_item\"]'),
                    'next': \$block.next('[id^=\"detail_box__layout_item\"]')
                };
                \$('.context-moveup').on('click', block, function() {
                    if (block.prev.length) {
                        block.current.insertBefore(block.prev);
                        block.menu.popover('hide');
                        window.updateUpDown(\$block.parent('.ui-sortable').first());
                    }
                });
                \$('.context-movedown').on('click', block, function() {
                    if (block.next.length) {
                        block.current.insertAfter(block.next);
                        block.menu.popover('hide');
                        window.updateUpDown(\$block.parent('.ui-sortable').first());
                    }
                });
                \$('.context-movesection').on('click', block, function() {
                    \$('#clickStreamConfirm').modal();
                    \$('#target-block').val(\$(block.current).attr('id'));
                    block.menu.popover('hide');
                });
                \$('#clickStreamConfirm').on('show.bs.modal', function(event) {
                    \$('#move-section').children('option').remove();
                    for (var target_id in sections) {
                        \$('#move-section').append('<option value=\"' + target_id + '\">' + sections[target_id] + '</option>');
                    }
                });
                \$('#move-to-section').on('click', function() {
                    var \$position = \$('#position_' + \$('#move-section').val());
                    var \$target = \$('#' + \$('#target-block').val());
                    var \$parent = \$target.parent();

                    \$position.append(\$target);
                    window.updateUpDown(\$position);
                    window.updateUpDown(\$parent);

                    if (\$position.children('.block').length > 0) {
                        // hide placeholder
                        \$position.children('.target-placeholder').remove();
                    }
                    if (\$parent.children('.block').length <= 0) {
                        // show placeholder
                        \$parent.append(\$('#target-placeholder').html());
                    }
                });

                \$('.context-preview').on('click', block, function() {
                    \$('#codePreview').modal();
                    block.menu.popover('hide');
                });

                \$('#codePreview').on('show.bs.modal', block, function(event) {
                    var attr_id = block.current.attr('id').match(/^detail_box__layout_item--([0-9]+)/);
                    var block_id = attr_id[1];
                    var \$modal = \$(this);
                    var \$block_edit = \$modal.find('#block-edit');
                    var onclick = \$block_edit.attr('onclick').replace(/";
        // line 124
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Controller\\Admin\\Content\\LayoutController::DUMMY_BLOCK_ID"), "html", null, true);
        echo "/, block_id);
                    \$block_edit.attr('onclick', onclick);

                    ace.require(\"ace/ext/language_tools\");
                    var editor = ace.edit(\"block-source-code\");
                    editor.session.setMode(\"ace/mode/twig\");
                    editor.setTheme(\"ace/theme/tomorrow\");
                    editor.setOptions({
                        readOnly: true,
                        autoScrollEditorIntoView: true,
                        minLines: 20,
                        maxLines: 20
                    });

                    \$.ajax({
                        url: '";
        // line 139
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_content_layout_view_block");
        echo "',
                        type: 'GET',
                        data: {
                            id: block_id
                        }
                    }).done(function(json, statusText, jqXHR) {
                        editor.setValue(json.source);
                        editor.gotoLine(1);
                        editor.scrollToLine(1);
                    }).fail(function(jqXHR, statusText, errorThrown) {
                        editor.setValue(statusText + ' ' + errorThrown);
                    });
                });
            });
        });
    </script>
    <script>
        // プレビューボタンクリック時
        ";
        // line 157
        if (twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 157, $this->source); })()), "id", [], "any", false, false, false, 157)) {
            // line 158
            echo "\$('#preview-button').on('click', function(){
            var page_id = \$('#";
            // line 159
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 159, $this->source); })()), "Page", [], "any", false, false, false, 159), "vars", [], "any", false, false, false, 159), "id", [], "any", false, false, false, 159), "html", null, true);
            echo "').val();
            if (!page_id) {
                alert(\"";
            // line 161
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_preview_select_page"), "html", null, true);
            echo "\");
                return false;
            }

            \$('#form1').attr('action', \"";
            // line 165
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_content_layout_preview", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 165, $this->source); })()), "id", [], "any", false, false, false, 165)]), "html", null, true);
            echo "\");
            \$('#form1').attr('target', '_blank');
            \$('#form1').submit();

            // submit後に元に戻す
            \$('#form1').attr('action', \"";
            // line 170
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_content_layout_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 170, $this->source); })()), "id", [], "any", false, false, false, 170)]), "html", null, true);
            echo "\");
            \$('#form1').attr('target', '_self');

            return false;
        });
        ";
        }
        // line 176
        echo "
        // searchWordの実行
        \$('#search-block').on('input', function () {
            searchWord(\$(this).val(), \$('#unused-block .sort'));
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 184
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 185
        echo "    ";
        $context["loop_index"] = 0;
        // line 186
        echo "    <form name=\"form1\" id=\"form1\" method=\"post\" action=\"";
        if (twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 186, $this->source); })()), "id", [], "any", false, false, false, 186)) {
            // line 187
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_content_layout_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 187, $this->source); })()), "id", [], "any", false, false, false, 187)]), "html", null, true);
        } else {
            // line 189
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_content_layout_new");
        }
        // line 190
        echo "\">
        ";
        // line 191
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 191, $this->source); })()), "_token", [], "any", false, false, false, 191), 'widget');
        echo "
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\"><span class=\"card-title\">";
        // line 198
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout__card_title"), "html", null, true);
        echo "</span></div>
                                <div class=\"col-4 text-right\"><a data-toggle=\"collapse\" href=\"#layoutOverview\" aria-expanded=\"false\" aria-controls=\"layoutOverview\"><i class=\"fa fa-angle-up fa-lg\"></i></a></div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"layoutOverview\">
                            <div class=\"card-body\">
                                <div class=\"row mb-2\">
                                    <div class=\"col-3 pr-0\"><span>";
        // line 205
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_name"), "html", null, true);
        echo "</span><span class=\"badge badge-primary ml-1\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span></div>
                                    <div class=\"col\">
                                        ";
        // line 207
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 207, $this->source); })()), "name", [], "any", false, false, false, 207), 'widget');
        echo "
                                        ";
        // line 208
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 208, $this->source); })()), "name", [], "any", false, false, false, 208), 'errors');
        echo "
                                    </div>
                                </div>
                                <div class=\"row mb-2\">
                                    <div class=\"col-3 pr-0\"><span>";
        // line 212
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.device_type"), "html", null, true);
        echo "</span></div>
                                    <div class=\"col\">
                                        <span>
                                            ";
        // line 215
        if (twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 215, $this->source); })()), "id", [], "any", false, false, false, 215)) {
            // line 216
            echo "                                                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 216, $this->source); })()), "DeviceType", [], "any", false, false, false, 216), "vars", [], "any", false, false, false, 216), "data", [], "any", false, false, false, 216), "name", [], "any", false, false, false, 216), "html", null, true);
            echo "
                                                <input type=\"hidden\" name=\"";
            // line 217
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 217, $this->source); })()), "DeviceType", [], "any", false, false, false, 217), "vars", [], "any", false, false, false, 217), "full_name", [], "any", false, false, false, 217), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 217, $this->source); })()), "DeviceType", [], "any", false, false, false, 217), "vars", [], "any", false, false, false, 217), "value", [], "any", false, false, false, 217), "html", null, true);
            echo "\" />
                                            ";
        } else {
            // line 219
            echo "                                                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 219, $this->source); })()), "DeviceType", [], "any", false, false, false, 219), 'widget');
            echo "
                                            ";
        }
        // line 221
        echo "                                            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 221, $this->source); })()), "DeviceType", [], "any", false, false, false, 221), 'errors');
        echo "
                                        </span>
                                    </div>
                                </div>
                                ";
        // line 226
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 226, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 226), "eccube_form_options", [], "any", false, false, false, 226), "auto_render", [], "any", false, false, false, 226)) {
                // line 227
                echo "                                    ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 227), "eccube_form_options", [], "any", false, false, false, 227), "form_theme", [], "any", false, false, false, 227)) {
                    // line 228
                    echo "                                        ";
                    $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($context["f"], [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 228), "eccube_form_options", [], "any", false, false, false, 228), "form_theme", [], "any", false, false, false, 228)], true);
                    // line 229
                    echo "                                        ";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'row');
                    echo "
                                    ";
                } else {
                    // line 231
                    echo "                                        <div class=\"row mb-2\">
                                            <div class=\"col-3 pr-0\"><span>";
                    // line 232
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 232), "label", [], "any", false, false, false, 232)), "html", null, true);
                    echo "</span></div>
                                            <div class=\"col\">
                                                ";
                    // line 234
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'widget');
                    echo "
                                                ";
                    // line 235
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'errors');
                    echo "
                                            </div>
                                        </div>
                                    ";
                }
                // line 239
                echo "                                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 240
        echo "                            </div>
                        </div>
                    </div>
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.content.layout_edit"), "html", null, true);
        echo "\"><span class=\"card-title\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_edit__card_title"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ml-1\"></i></div>
                                </div>
                                <div class=\"col-4 text-right\"><a data-toggle=\"collapse\" href=\"#layoutBlockEdit\" aria-expanded=\"false\" aria-controls=\"layoutBlockEdit\"><i class=\"fa fa-angle-up fa-lg\"></i></a></div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"layoutBlockEdit\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col p-2\">
                                        <div class=\"d-block border border-ec-gray\">
                                            ";
        // line 257
        $context["target_id"] = twig_constant("Eccube\\Entity\\Layout::TARGET_ID_HEAD");
        // line 258
        echo "                                            <div id=\"position_";
        echo twig_escape_filter($this->env, (isset($context["target_id"]) || array_key_exists("target_id", $context) ? $context["target_id"] : (function () { throw new RuntimeError('Variable "target_id" does not exist.', 258, $this->source); })()), "html", null, true);
        echo "\"
                                                 class=\"d-block p-3 border border-ec-gray border-top-0 border-right-0 border-left-0 ui-sortable\">
                                                <p class=\"font-weight-bold mb-2\">";
        // line 260
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_section__head"), "html", null, true);
        echo "</p>
                                                ";
        // line 261
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 261, $this->source); })()), "getBlockPositionsByTargetId", [0 => (isset($context["target_id"]) || array_key_exists("target_id", $context) ? $context["target_id"] : (function () { throw new RuntimeError('Variable "target_id" does not exist.', 261, $this->source); })())], "method", false, false, false, 261));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["BlockPosition"]) {
            // line 262
            echo "                                                    ";
            echo twig_include($this->env, $context, "@admin/Content/layout_block.twig");
            echo "
                                                    ";
            // line 263
            $context["loop_index"] = ((isset($context["loop_index"]) || array_key_exists("loop_index", $context) ? $context["loop_index"] : (function () { throw new RuntimeError('Variable "loop_index" does not exist.', 263, $this->source); })()) + 1);
            // line 264
            echo "                                                ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 265
            echo "                                                    <div class=\"target-placeholder d-block text-center border-ec-dashed p-3\"><span class=\"text-ec-gray\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_drag_and_drop_message"), "html", null, true);
            echo "</span></div>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['BlockPosition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 267
        echo "                                            </div>
                                            ";
        // line 268
        $context["target_id"] = twig_constant("Eccube\\Entity\\Layout::TARGET_ID_BODY_AFTER");
        // line 269
        echo "                                            <div id=\"position_";
        echo twig_escape_filter($this->env, (isset($context["target_id"]) || array_key_exists("target_id", $context) ? $context["target_id"] : (function () { throw new RuntimeError('Variable "target_id" does not exist.', 269, $this->source); })()), "html", null, true);
        echo "\"
                                                 class=\"d-block p-3 border border-ec-gray border-top-0 border-right-0 border-left-0 ui-sortable\">
                                                <p class=\"font-weight-bold mb-2\">";
        // line 271
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_section__body_after"), "html", null, true);
        echo "</p>
                                                ";
        // line 272
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 272, $this->source); })()), "getBlockPositionsByTargetId", [0 => (isset($context["target_id"]) || array_key_exists("target_id", $context) ? $context["target_id"] : (function () { throw new RuntimeError('Variable "target_id" does not exist.', 272, $this->source); })())], "method", false, false, false, 272));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["BlockPosition"]) {
            // line 273
            echo "                                                    ";
            echo twig_include($this->env, $context, "@admin/Content/layout_block.twig");
            echo "
                                                    ";
            // line 274
            $context["loop_index"] = ((isset($context["loop_index"]) || array_key_exists("loop_index", $context) ? $context["loop_index"] : (function () { throw new RuntimeError('Variable "loop_index" does not exist.', 274, $this->source); })()) + 1);
            // line 275
            echo "                                                ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 276
            echo "                                                    <div class=\"target-placeholder d-block text-center border-ec-dashed p-3\"><span class=\"text-ec-gray\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_drag_and_drop_message"), "html", null, true);
            echo "</span></div>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['BlockPosition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 278
        echo "                                            </div>
                                            ";
        // line 279
        $context["target_id"] = twig_constant("Eccube\\Entity\\Layout::TARGET_ID_HEADER");
        // line 280
        echo "                                            <div id=\"position_";
        echo twig_escape_filter($this->env, (isset($context["target_id"]) || array_key_exists("target_id", $context) ? $context["target_id"] : (function () { throw new RuntimeError('Variable "target_id" does not exist.', 280, $this->source); })()), "html", null, true);
        echo "\"
                                                 class=\"d-block p-3 border border-ec-gray border-top-0 border-right-0 border-left-0 ui-sortable\">
                                                <p class=\"font-weight-bold mb-2\">";
        // line 282
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_section__header"), "html", null, true);
        echo "</p>
                                                ";
        // line 283
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 283, $this->source); })()), "getBlockPositionsByTargetId", [0 => (isset($context["target_id"]) || array_key_exists("target_id", $context) ? $context["target_id"] : (function () { throw new RuntimeError('Variable "target_id" does not exist.', 283, $this->source); })())], "method", false, false, false, 283));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["BlockPosition"]) {
            // line 284
            echo "                                                    ";
            echo twig_include($this->env, $context, "@admin/Content/layout_block.twig");
            echo "
                                                    ";
            // line 285
            $context["loop_index"] = ((isset($context["loop_index"]) || array_key_exists("loop_index", $context) ? $context["loop_index"] : (function () { throw new RuntimeError('Variable "loop_index" does not exist.', 285, $this->source); })()) + 1);
            // line 286
            echo "                                                ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 287
            echo "                                                    <div class=\"target-placeholder d-block text-center border-ec-dashed p-3\"><span class=\"text-ec-gray\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_drag_and_drop_message"), "html", null, true);
            echo "</span></div>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['BlockPosition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 289
        echo "                                            </div>
                                            ";
        // line 290
        $context["target_id"] = twig_constant("Eccube\\Entity\\Layout::TARGET_ID_CONTENTS_TOP");
        // line 291
        echo "                                            <div id=\"position_";
        echo twig_escape_filter($this->env, (isset($context["target_id"]) || array_key_exists("target_id", $context) ? $context["target_id"] : (function () { throw new RuntimeError('Variable "target_id" does not exist.', 291, $this->source); })()), "html", null, true);
        echo "\"
                                                 class=\"d-block p-3 border border-ec-gray border-top-0 border-right-0 border-left-0 ui-sortable\">
                                                <p class=\"font-weight-bold mb-2\">";
        // line 293
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_section__contents_top"), "html", null, true);
        echo "</p>
                                                ";
        // line 294
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 294, $this->source); })()), "getBlockPositionsByTargetId", [0 => (isset($context["target_id"]) || array_key_exists("target_id", $context) ? $context["target_id"] : (function () { throw new RuntimeError('Variable "target_id" does not exist.', 294, $this->source); })())], "method", false, false, false, 294));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["BlockPosition"]) {
            // line 295
            echo "                                                    ";
            echo twig_include($this->env, $context, "@admin/Content/layout_block.twig");
            echo "
                                                    ";
            // line 296
            $context["loop_index"] = ((isset($context["loop_index"]) || array_key_exists("loop_index", $context) ? $context["loop_index"] : (function () { throw new RuntimeError('Variable "loop_index" does not exist.', 296, $this->source); })()) + 1);
            // line 297
            echo "                                                ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 298
            echo "                                                    <div class=\"target-placeholder d-block text-center border-ec-dashed p-3\"><span class=\"text-ec-gray\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_drag_and_drop_message"), "html", null, true);
            echo "</span></div>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['BlockPosition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 300
        echo "                                            </div>
                                            <div class=\"d-block pl-3 pr-3\">
                                                <div class=\"row\">
                                                    <div class=\"col align-items-start pr-0 p-3 border border-ec-gray border-top-0\">
                                                        ";
        // line 304
        $context["target_id"] = twig_constant("Eccube\\Entity\\Layout::TARGET_ID_SIDE_LEFT");
        // line 305
        echo "                                                        <div id=\"position_";
        echo twig_escape_filter($this->env, (isset($context["target_id"]) || array_key_exists("target_id", $context) ? $context["target_id"] : (function () { throw new RuntimeError('Variable "target_id" does not exist.', 305, $this->source); })()), "html", null, true);
        echo "\"
                                                             class=\"d-block ui-sortable\">
                                                            <p class=\"font-weight-bold mb-2\">";
        // line 307
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_section__side_left"), "html", null, true);
        echo "</p>
                                                            ";
        // line 308
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 308, $this->source); })()), "getBlockPositionsByTargetId", [0 => (isset($context["target_id"]) || array_key_exists("target_id", $context) ? $context["target_id"] : (function () { throw new RuntimeError('Variable "target_id" does not exist.', 308, $this->source); })())], "method", false, false, false, 308));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["BlockPosition"]) {
            // line 309
            echo "                                                                ";
            echo twig_include($this->env, $context, "@admin/Content/layout_block.twig");
            echo "
                                                                ";
            // line 310
            $context["loop_index"] = ((isset($context["loop_index"]) || array_key_exists("loop_index", $context) ? $context["loop_index"] : (function () { throw new RuntimeError('Variable "loop_index" does not exist.', 310, $this->source); })()) + 1);
            // line 311
            echo "                                                            ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 312
            echo "                                                                <div class=\"target-placeholder d-block text-center border-ec-dashed p-3\"><span class=\"text-ec-gray\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_drag_and_drop_message"), "html", null, true);
            echo "</span></div>
                                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['BlockPosition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 314
        echo "                                                        </div>
                                                    </div>
                                                    <div class=\"col align-items-start pl-0 pr-0 border border-ec-gray border-top-0 border-left-0 border-bottom-0\">
                                                        <div class=\"d-block h-100\">
                                                            ";
        // line 318
        $context["target_id"] = twig_constant("Eccube\\Entity\\Layout::TARGET_ID_MAIN_TOP");
        // line 319
        echo "                                                            <div id=\"position_";
        echo twig_escape_filter($this->env, (isset($context["target_id"]) || array_key_exists("target_id", $context) ? $context["target_id"] : (function () { throw new RuntimeError('Variable "target_id" does not exist.', 319, $this->source); })()), "html", null, true);
        echo "\"
                                                                 class=\"d-block p-3 border border-ec-gray border-top-0 border-left-0 border-right-0 ui-sortable\">
                                                                <p class=\"font-weight-bold mb-2\">";
        // line 321
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_section__main_top"), "html", null, true);
        echo "</p>
                                                                ";
        // line 322
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 322, $this->source); })()), "getBlockPositionsByTargetId", [0 => (isset($context["target_id"]) || array_key_exists("target_id", $context) ? $context["target_id"] : (function () { throw new RuntimeError('Variable "target_id" does not exist.', 322, $this->source); })())], "method", false, false, false, 322));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["BlockPosition"]) {
            // line 323
            echo "                                                                    ";
            echo twig_include($this->env, $context, "@admin/Content/layout_block.twig");
            echo "
                                                                    ";
            // line 324
            $context["loop_index"] = ((isset($context["loop_index"]) || array_key_exists("loop_index", $context) ? $context["loop_index"] : (function () { throw new RuntimeError('Variable "loop_index" does not exist.', 324, $this->source); })()) + 1);
            // line 325
            echo "                                                                ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 326
            echo "                                                                    <div class=\"target-placeholder d-block text-center border-ec-dashed p-3\"><span class=\"text-ec-gray\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_drag_and_drop_message"), "html", null, true);
            echo "</span></div>
                                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['BlockPosition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 328
        echo "                                                            </div>
                                                            <div class=\"d-block p-3 border border-ec-gray border-top-0 border-left-0 border-right-0 bg-ec-lightGray\">
                                                                <div class=\"d-block text-center p-3\">
                                                                    <p class=\"font-weight-bold mb-2\">";
        // line 331
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_section__main"), "html", null, true);
        echo "</p>
                                                                </div>
                                                            </div>
                                                            ";
        // line 334
        $context["target_id"] = twig_constant("Eccube\\Entity\\Layout::TARGET_ID_MAIN_BOTTOM");
        // line 335
        echo "                                                            <div id=\"position_";
        echo twig_escape_filter($this->env, (isset($context["target_id"]) || array_key_exists("target_id", $context) ? $context["target_id"] : (function () { throw new RuntimeError('Variable "target_id" does not exist.', 335, $this->source); })()), "html", null, true);
        echo "\"
                                                                 class=\"d-block p-3 border border-ec-gray border-top-0 border-left-0 border-right-0 ui-sortable\">
                                                                <p class=\"font-weight-bold mb-2\">";
        // line 337
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_section__main_bottom"), "html", null, true);
        echo "</p>
                                                                ";
        // line 338
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 338, $this->source); })()), "getBlockPositionsByTargetId", [0 => (isset($context["target_id"]) || array_key_exists("target_id", $context) ? $context["target_id"] : (function () { throw new RuntimeError('Variable "target_id" does not exist.', 338, $this->source); })())], "method", false, false, false, 338));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["BlockPosition"]) {
            // line 339
            echo "                                                                    ";
            echo twig_include($this->env, $context, "@admin/Content/layout_block.twig");
            echo "
                                                                    ";
            // line 340
            $context["loop_index"] = ((isset($context["loop_index"]) || array_key_exists("loop_index", $context) ? $context["loop_index"] : (function () { throw new RuntimeError('Variable "loop_index" does not exist.', 340, $this->source); })()) + 1);
            // line 341
            echo "                                                                ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 342
            echo "                                                                    <div class=\"target-placeholder d-block text-center border-ec-dashed p-3\"><span class=\"text-ec-gray\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_drag_and_drop_message"), "html", null, true);
            echo "</span></div>
                                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['BlockPosition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 344
        echo "                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"col align-items-start pl-0 border border-ec-gray border-top-0 border-left-0\">
                                                        ";
        // line 348
        $context["target_id"] = twig_constant("Eccube\\Entity\\Layout::TARGET_ID_SIDE_RIGHT");
        // line 349
        echo "                                                        <div id=\"position_";
        echo twig_escape_filter($this->env, (isset($context["target_id"]) || array_key_exists("target_id", $context) ? $context["target_id"] : (function () { throw new RuntimeError('Variable "target_id" does not exist.', 349, $this->source); })()), "html", null, true);
        echo "\"
                                                             class=\"d-block p-3 h-100 ui-sortable\">
                                                            <p class=\"font-weight-bold mb-2\">";
        // line 351
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_section__side_right"), "html", null, true);
        echo "</p>
                                                            ";
        // line 352
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 352, $this->source); })()), "getBlockPositionsByTargetId", [0 => (isset($context["target_id"]) || array_key_exists("target_id", $context) ? $context["target_id"] : (function () { throw new RuntimeError('Variable "target_id" does not exist.', 352, $this->source); })())], "method", false, false, false, 352));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["BlockPosition"]) {
            // line 353
            echo "                                                                ";
            echo twig_include($this->env, $context, "@admin/Content/layout_block.twig");
            echo "
                                                                ";
            // line 354
            $context["loop_index"] = ((isset($context["loop_index"]) || array_key_exists("loop_index", $context) ? $context["loop_index"] : (function () { throw new RuntimeError('Variable "loop_index" does not exist.', 354, $this->source); })()) + 1);
            // line 355
            echo "                                                            ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 356
            echo "                                                                <div class=\"target-placeholder d-block text-center border-ec-dashed p-3\"><span class=\"text-ec-gray\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_drag_and_drop_message"), "html", null, true);
            echo "</span></div>
                                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['BlockPosition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 358
        echo "                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"d-block border border-ec-gray border-top-0 border-right-0 border-left-0\">
                                                ";
        // line 363
        $context["target_id"] = twig_constant("Eccube\\Entity\\Layout::TARGET_ID_CONTENTS_BOTTOM");
        // line 364
        echo "                                                <div id=\"position_";
        echo twig_escape_filter($this->env, (isset($context["target_id"]) || array_key_exists("target_id", $context) ? $context["target_id"] : (function () { throw new RuntimeError('Variable "target_id" does not exist.', 364, $this->source); })()), "html", null, true);
        echo "\"
                                                     class=\"d-block p-3 ui-sortable\">
                                                    <p class=\"font-weight-bold mb-2\">";
        // line 366
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_section__contents_bottom"), "html", null, true);
        echo "</p>
                                                    ";
        // line 367
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 367, $this->source); })()), "getBlockPositionsByTargetId", [0 => (isset($context["target_id"]) || array_key_exists("target_id", $context) ? $context["target_id"] : (function () { throw new RuntimeError('Variable "target_id" does not exist.', 367, $this->source); })())], "method", false, false, false, 367));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["BlockPosition"]) {
            // line 368
            echo "                                                        ";
            echo twig_include($this->env, $context, "@admin/Content/layout_block.twig");
            echo "
                                                        ";
            // line 369
            $context["loop_index"] = ((isset($context["loop_index"]) || array_key_exists("loop_index", $context) ? $context["loop_index"] : (function () { throw new RuntimeError('Variable "loop_index" does not exist.', 369, $this->source); })()) + 1);
            // line 370
            echo "                                                    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 371
            echo "                                                        <div class=\"target-placeholder d-block text-center border-ec-dashed p-3\"><span class=\"text-ec-gray\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_drag_and_drop_message"), "html", null, true);
            echo "</span></div>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['BlockPosition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 373
        echo "                                                </div>
                                            </div>
                                            <div class=\"d-block border border-ec-gray border-top-0 border-right-0 border-left-0\">
                                                ";
        // line 376
        $context["target_id"] = twig_constant("Eccube\\Entity\\Layout::TARGET_ID_FOOTER");
        // line 377
        echo "                                                <div id=\"position_";
        echo twig_escape_filter($this->env, (isset($context["target_id"]) || array_key_exists("target_id", $context) ? $context["target_id"] : (function () { throw new RuntimeError('Variable "target_id" does not exist.', 377, $this->source); })()), "html", null, true);
        echo "\"
                                                     class=\"d-block p-3 ui-sortable\">
                                                    <p class=\"font-weight-bold mb-2\">";
        // line 379
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_section__footer"), "html", null, true);
        echo "</p>
                                                    ";
        // line 380
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 380, $this->source); })()), "getBlockPositionsByTargetId", [0 => (isset($context["target_id"]) || array_key_exists("target_id", $context) ? $context["target_id"] : (function () { throw new RuntimeError('Variable "target_id" does not exist.', 380, $this->source); })())], "method", false, false, false, 380));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["BlockPosition"]) {
            // line 381
            echo "                                                        ";
            echo twig_include($this->env, $context, "@admin/Content/layout_block.twig");
            echo "
                                                        ";
            // line 382
            $context["loop_index"] = ((isset($context["loop_index"]) || array_key_exists("loop_index", $context) ? $context["loop_index"] : (function () { throw new RuntimeError('Variable "loop_index" does not exist.', 382, $this->source); })()) + 1);
            // line 383
            echo "                                                    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 384
            echo "                                                        <div class=\"target-placeholder d-block text-center border-ec-dashed p-3\"><span class=\"text-ec-gray\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_drag_and_drop_message"), "html", null, true);
            echo "</span></div>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['BlockPosition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 386
        echo "                                                </div>
                                            </div>
                                            <div class=\"d-block border border-ec-gray border-top-0 border-right-0 border-left-0\">
                                                ";
        // line 389
        $context["target_id"] = twig_constant("Eccube\\Entity\\Layout::TARGET_ID_DRAWER");
        // line 390
        echo "                                                <div id=\"position_";
        echo twig_escape_filter($this->env, (isset($context["target_id"]) || array_key_exists("target_id", $context) ? $context["target_id"] : (function () { throw new RuntimeError('Variable "target_id" does not exist.', 390, $this->source); })()), "html", null, true);
        echo "\"
                                                     class=\"d-block p-3 ui-sortable\">
                                                    <p class=\"font-weight-bold mb-2\">";
        // line 392
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_section__drawer"), "html", null, true);
        echo "</p>
                                                    ";
        // line 393
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 393, $this->source); })()), "getBlockPositionsByTargetId", [0 => (isset($context["target_id"]) || array_key_exists("target_id", $context) ? $context["target_id"] : (function () { throw new RuntimeError('Variable "target_id" does not exist.', 393, $this->source); })())], "method", false, false, false, 393));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["BlockPosition"]) {
            // line 394
            echo "                                                        ";
            echo twig_include($this->env, $context, "@admin/Content/layout_block.twig");
            echo "
                                                        ";
            // line 395
            $context["loop_index"] = ((isset($context["loop_index"]) || array_key_exists("loop_index", $context) ? $context["loop_index"] : (function () { throw new RuntimeError('Variable "loop_index" does not exist.', 395, $this->source); })()) + 1);
            // line 396
            echo "                                                    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 397
            echo "                                                        <div class=\"target-placeholder d-block text-center border-ec-dashed p-3\"><span class=\"text-ec-gray\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_drag_and_drop_message"), "html", null, true);
            echo "</span></div>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['BlockPosition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 399
        echo "                                                </div>
                                            </div>
                                            <div class=\"d-block\">
                                                ";
        // line 402
        $context["target_id"] = twig_constant("Eccube\\Entity\\Layout::TARGET_ID_CLOSE_BODY_BEFORE");
        // line 403
        echo "                                                <div id=\"position_";
        echo twig_escape_filter($this->env, (isset($context["target_id"]) || array_key_exists("target_id", $context) ? $context["target_id"] : (function () { throw new RuntimeError('Variable "target_id" does not exist.', 403, $this->source); })()), "html", null, true);
        echo "\"
                                                     class=\"d-block p-3 border-top-0 border-right-0 border-left-0 ui-sortable\">
                                                    <p class=\"font-weight-bold mb-2\">";
        // line 405
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_section__close_body_before"), "html", null, true);
        echo "</p>
                                                    ";
        // line 406
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 406, $this->source); })()), "getBlockPositionsByTargetId", [0 => (isset($context["target_id"]) || array_key_exists("target_id", $context) ? $context["target_id"] : (function () { throw new RuntimeError('Variable "target_id" does not exist.', 406, $this->source); })())], "method", false, false, false, 406));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["BlockPosition"]) {
            // line 407
            echo "                                                        ";
            echo twig_include($this->env, $context, "@admin/Content/layout_block.twig");
            echo "
                                                        ";
            // line 408
            $context["loop_index"] = ((isset($context["loop_index"]) || array_key_exists("loop_index", $context) ? $context["loop_index"] : (function () { throw new RuntimeError('Variable "loop_index" does not exist.', 408, $this->source); })()) + 1);
            // line 409
            echo "                                                    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 410
            echo "                                                        <div class=\"target-placeholder d-block text-center border-ec-dashed p-3\"><span class=\"text-ec-gray\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_drag_and_drop_message"), "html", null, true);
            echo "</span></div>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['BlockPosition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 412
        echo "                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-3 p-2\">
                                        ";
        // line 417
        if ((twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 417, $this->source); })()), "id", [], "any", false, false, false, 417) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 417, $this->source); })()), "Page", [], "any", false, false, false, 417), "vars", [], "any", false, false, false, 417), "choices", [], "any", false, false, false, 417)) > 0))) {
            // line 418
            echo "<div id=\"preview-block\" class=\"d-block border border-ec-gray mb-4\">
                                            <div class=\"card-body\">
                                                <div class=\"d-block text-center mb-3\">
                                                    ";
            // line 421
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 421, $this->source); })()), "Page", [], "any", false, false, false, 421), 'widget');
            echo "
                                                </div>
                                                <div class=\"d-block text-center\">
                                                    <a id=\"preview-button\" class=\"btn btn-block btn-ec-regular\">";
            // line 424
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_preview"), "html", null, true);
            echo "</a>
                                                </div>
                                            </div>
                                        </div>
                                        ";
        }
        // line 429
        echo "                                        <div id=\"unused-block\" class=\"d-block border border-ec-gray\">
                                            ";
        // line 430
        $context["unused_target_id"] = twig_constant("Eccube\\Entity\\Layout::TARGET_ID_UNUSED");
        // line 431
        echo "                                            <div id=\"position_";
        echo twig_escape_filter($this->env, (isset($context["unused_target_id"]) || array_key_exists("unused_target_id", $context) ? $context["unused_target_id"] : (function () { throw new RuntimeError('Variable "unused_target_id" does not exist.', 431, $this->source); })()), "html", null, true);
        echo "\" class=\"d-block p-3 ui-sortable\">
                                                <p class=\"font-weight-bold mb-2\">";
        // line 432
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_section__unused"), "html", null, true);
        echo "</p>
                                                <div class=\"mb-3\">
                                                    <div class=\"form-row\">
                                                        <div class=\"col\">
                                                            <div class=\"input-group mb-3\">
                                                                <div class=\"input-group-prepend\">
                                                                    <span class=\"input-group-text\" id=\"basic-addon1\"><i class=\"fa fa-search\"></i></span>
                                                                </div>
                                                                <input id=\"search-block\" class=\"form-control\" type=\"search\" aria-label=\"Search\">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                ";
        // line 445
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["UnusedBlocks"]) || array_key_exists("UnusedBlocks", $context) ? $context["UnusedBlocks"] : (function () { throw new RuntimeError('Variable "UnusedBlocks" does not exist.', 445, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["UnusedBlock"]) {
            // line 446
            echo "                                                    <div id=\"detail_box__layout_item--";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["UnusedBlock"], "id", [], "any", false, false, false, 446), "html", null, true);
            echo "\"
                                                         class=\"block sort";
            // line 447
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 447)) {
                echo " first";
            }
            echo " border border-ec-gray bg-ec-lightGray p-2 mb-2\">
                                                        <div class=\"row justify-content-between\">
                                                            <div class=\"col\">
                                                                <i class=\"fa fa-bars text-ec-gray mr-3\"></i>
                                                                <span class=\"view_readme\" data-toggle=\"modal\"
                                                                   data-target=\"#blockModal\"
                                                                   data-id=\"";
            // line 453
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["UnusedBlock"], "id", [], "any", false, false, false, 453), "html", null, true);
            echo "\"
                                                                   data-name=\"";
            // line 454
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["UnusedBlock"], "name", [], "any", false, false, false, 454), "html", null, true);
            echo "\"
                                                                   title=\"";
            // line 455
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["UnusedBlock"], "name", [], "any", false, false, false, 455), "html", null, true);
            echo "\"
                                                                >";
            // line 456
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["UnusedBlock"], "name", [], "any", false, false, false, 456), "html", null, true);
            echo "</span>
                                                            </div>
                                                            <div class=\"col-auto text-right\">
                                                                <div class=\"d-inline-block px-3\">
                                                                    <input type=\"hidden\" class=\"name\" name=\"name_";
            // line 460
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) || array_key_exists("loop_index", $context) ? $context["loop_index"] : (function () { throw new RuntimeError('Variable "loop_index" does not exist.', 460, $this->source); })()), "html", null, true);
            echo "\"
                                                                        value=\"";
            // line 461
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["UnusedBlock"], "name", [], "any", false, false, false, 461), "html", null, true);
            echo "\"/>
                                                                    <input type=\"hidden\" class=\"id\" name=\"block_id_";
            // line 462
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) || array_key_exists("loop_index", $context) ? $context["loop_index"] : (function () { throw new RuntimeError('Variable "loop_index" does not exist.', 462, $this->source); })()), "html", null, true);
            echo "\"
                                                                        value=\"";
            // line 463
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["UnusedBlock"], "id", [], "any", false, false, false, 463), "html", null, true);
            echo "\"/>
                                                                    <input type=\"hidden\" class=\"target-id\"
                                                                        name=\"section_";
            // line 465
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) || array_key_exists("loop_index", $context) ? $context["loop_index"] : (function () { throw new RuntimeError('Variable "loop_index" does not exist.', 465, $this->source); })()), "html", null, true);
            echo "\"
                                                                        value=\"";
            // line 466
            echo twig_escape_filter($this->env, (isset($context["unused_target_id"]) || array_key_exists("unused_target_id", $context) ? $context["unused_target_id"] : (function () { throw new RuntimeError('Variable "unused_target_id" does not exist.', 466, $this->source); })()), "html", null, true);
            echo "\"/>
                                                                    <input type=\"hidden\" class=\"block-row\"
                                                                        name=\"block_row_";
            // line 468
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) || array_key_exists("loop_index", $context) ? $context["loop_index"] : (function () { throw new RuntimeError('Variable "loop_index" does not exist.', 468, $this->source); })()), "html", null, true);
            echo "\"
                                                                        value=\"";
            // line 469
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["UnusedBlock"], "id", [], "any", false, false, false, 469), "html", null, true);
            echo "\"/>
                                                                    <div class=\"block-context-menu d-inline-block px-3\"><i class=\"fa fa-ellipsis-v fa-lg text-secondary\"></i></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    ";
            // line 475
            $context["loop_index"] = ((isset($context["loop_index"]) || array_key_exists("loop_index", $context) ? $context["loop_index"] : (function () { throw new RuntimeError('Variable "loop_index" does not exist.', 475, $this->source); })()) + 1);
            // line 476
            echo "                                                ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['UnusedBlock'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 477
        echo "                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"modal fade\" id=\"clickStreamConfirm\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"clickStreamConfirm\" aria-hidden=\"true\">
                                    <div class=\"modal-dialog\" role=\"document\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <h5 class=\"modal-title\">";
        // line 485
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_move_to__confirm_title"), "html", null, true);
        echo "</h5>
                                                <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                                            </div>
                                            <div class=\"modal-body\">
                                                <p>";
        // line 489
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_move_to__confirm_message"), "html", null, true);
        echo "</p>
                                                <div>
                                                    <select id=\"move-section\" class=\"form-control\">
                                                    </select>
                                                    <input type=\"hidden\" id=\"target-block\" />
                                                </div>
                                            </div>
                                            <div class=\"modal-footer\">
                                                <button class=\"btn btn-ec-regular w-25\" type=\"button\" data-dismiss=\"modal\">";
        // line 497
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
        echo "</button>
                                                <button id=\"move-to-section\" class=\"btn btn-ec-conversion w-25\" type=\"button\" data-dismiss=\"modal\">";
        // line 498
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_move_to__execute"), "html", null, true);
        echo "</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"modal fade\" id=\"codePreview\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"codePreview\" aria-hidden=\"true\">
                                    <div class=\"modal-dialog\" role=\"document\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <h5 class=\"modal-title\">";
        // line 507
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_preview_code__confirm_title"), "html", null, true);
        echo "</h5>
                                                <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                                            </div>
                                            <div class=\"modal-body\">
                                                <p>";
        // line 511
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_preview_code__confirm_message"), "html", null, true);
        echo "</p>
                                                <div id=\"block-source-code\" class=\"d-block border bg-ec-lightGray p-2\"></div>
                                            </div>
                                            <div class=\"modal-footer\">
                                                <button class=\"btn btn-ec-regular\" type=\"button\" data-dismiss=\"modal\">";
        // line 515
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
        echo "</button>
                                                <button id=\"block-edit\" onclick=\"location.href='";
        // line 516
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_content_block_edit", ["id" => twig_constant("Eccube\\Controller\\Admin\\Content\\LayoutController::DUMMY_BLOCK_ID")]), "html", null, true);
        echo "'\" class=\"btn btn-ec-conversion w-25\" type=\"button\" data-dismiss=\"modal\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_preview_code__confirm_move_to_block"), "html", null, true);
        echo "</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id=\"context-menu\" style=\"display: none\">
                                    <div class='list-group'>
                                        <a href='javascript:;' class='context-moveup list-group-item list-group-item-action border-0'>
                                            <i class='fa fa-long-arrow-up mr-1'></i>";
        // line 524
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_up"), "html", null, true);
        echo "
                                        </a>
                                        <a href='javascript:;' class='context-movedown list-group-item list-group-item-action border-0'>
                                            <i class='fa fa-long-arrow-down mr-1'></i>";
        // line 527
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_down"), "html", null, true);
        echo "
                                        </a>
                                        <a href='javascript:;' class='context-movesection list-group-item list-group-item-action border-0'>
                                            <i class='fa fa-arrows mr-1'></i>";
        // line 530
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_move_to"), "html", null, true);
        echo "
                                        </a>
                                        <a href='javascript:;' class='context-preview list-group-item list-group-item-action border-0'>
                                            <i class='fa fa-code mr-1'></i>";
        // line 533
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_preview_code"), "html", null, true);
        echo "
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id=\"target-placeholder\" style=\"display: none\"><div class=\"target-placeholder d-block text-center border-ec-dashed p-3\"><span class=\"text-ec-gray\">";
        // line 542
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_drag_and_drop_message"), "html", null, true);
        echo "</span></div></div>
            <div class=\"c-conversionArea\">
                <div class=\"c-conversionArea__container\">
                    <div class=\"row justify-content-between align-items-center\">
                        <div class=\"col-6\">
                            <div class=\"c-conversionArea__leftBlockItem\">
                                <a class=\"c-baseLink\" href=\"";
        // line 548
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_content_layout");
        echo "\"><i class=\"fa fa-backward\" aria-hidden=\"true\"></i><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_management"), "html", null, true);
        echo "</span></a>
                            </div>
                        </div>
                        <div class=\"col-6\">
                            <div id=\"ex-conversion-action\" class=\"row align-items-center justify-content-end\">
                                <div class=\"col-auto\">
                                    <button class=\"btn btn-ec-conversion px-5\" type=\"submit\">";
        // line 554
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.registration"), "html", null, true);
        echo "</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@admin/Content/layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1607 => 554,  1596 => 548,  1587 => 542,  1575 => 533,  1569 => 530,  1563 => 527,  1557 => 524,  1544 => 516,  1540 => 515,  1533 => 511,  1526 => 507,  1514 => 498,  1510 => 497,  1499 => 489,  1492 => 485,  1482 => 477,  1468 => 476,  1466 => 475,  1457 => 469,  1453 => 468,  1448 => 466,  1444 => 465,  1439 => 463,  1435 => 462,  1431 => 461,  1427 => 460,  1420 => 456,  1416 => 455,  1412 => 454,  1408 => 453,  1397 => 447,  1392 => 446,  1375 => 445,  1359 => 432,  1354 => 431,  1352 => 430,  1349 => 429,  1341 => 424,  1335 => 421,  1330 => 418,  1328 => 417,  1321 => 412,  1312 => 410,  1299 => 409,  1297 => 408,  1292 => 407,  1274 => 406,  1270 => 405,  1264 => 403,  1262 => 402,  1257 => 399,  1248 => 397,  1235 => 396,  1233 => 395,  1228 => 394,  1210 => 393,  1206 => 392,  1200 => 390,  1198 => 389,  1193 => 386,  1184 => 384,  1171 => 383,  1169 => 382,  1164 => 381,  1146 => 380,  1142 => 379,  1136 => 377,  1134 => 376,  1129 => 373,  1120 => 371,  1107 => 370,  1105 => 369,  1100 => 368,  1082 => 367,  1078 => 366,  1072 => 364,  1070 => 363,  1063 => 358,  1054 => 356,  1041 => 355,  1039 => 354,  1034 => 353,  1016 => 352,  1012 => 351,  1006 => 349,  1004 => 348,  998 => 344,  989 => 342,  976 => 341,  974 => 340,  969 => 339,  951 => 338,  947 => 337,  941 => 335,  939 => 334,  933 => 331,  928 => 328,  919 => 326,  906 => 325,  904 => 324,  899 => 323,  881 => 322,  877 => 321,  871 => 319,  869 => 318,  863 => 314,  854 => 312,  841 => 311,  839 => 310,  834 => 309,  816 => 308,  812 => 307,  806 => 305,  804 => 304,  798 => 300,  789 => 298,  776 => 297,  774 => 296,  769 => 295,  751 => 294,  747 => 293,  741 => 291,  739 => 290,  736 => 289,  727 => 287,  714 => 286,  712 => 285,  707 => 284,  689 => 283,  685 => 282,  679 => 280,  677 => 279,  674 => 278,  665 => 276,  652 => 275,  650 => 274,  645 => 273,  627 => 272,  623 => 271,  617 => 269,  615 => 268,  612 => 267,  603 => 265,  590 => 264,  588 => 263,  583 => 262,  565 => 261,  561 => 260,  555 => 258,  553 => 257,  538 => 247,  529 => 240,  522 => 239,  515 => 235,  511 => 234,  506 => 232,  503 => 231,  497 => 229,  494 => 228,  491 => 227,  485 => 226,  477 => 221,  471 => 219,  464 => 217,  459 => 216,  457 => 215,  451 => 212,  444 => 208,  440 => 207,  433 => 205,  423 => 198,  413 => 191,  410 => 190,  407 => 189,  404 => 187,  401 => 186,  398 => 185,  388 => 184,  372 => 176,  363 => 170,  355 => 165,  348 => 161,  343 => 159,  340 => 158,  338 => 157,  317 => 139,  299 => 124,  219 => 47,  215 => 46,  211 => 45,  207 => 44,  203 => 43,  190 => 35,  184 => 34,  178 => 33,  172 => 32,  166 => 31,  160 => 30,  154 => 29,  148 => 28,  142 => 27,  136 => 26,  130 => 25,  124 => 24,  118 => 23,  114 => 21,  104 => 20,  85 => 16,  66 => 15,  55 => 11,  53 => 18,  51 => 13,  38 => 11,);
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
{% extends '@admin/default_frame.twig' %}

{% set menus = ['content', 'layout'] %}

{% block title %}{{'admin.content.layout_management'|trans}}{% endblock %}
{% block sub_title %}{{'admin.content.contents_management'|trans}}{% endblock %}

{% form_theme form '@admin/Form/bootstrap_4_horizontal_layout.html.twig' %}

{% block javascript %}
    <script>
        var sections = {
            {{ constant('Eccube\\\\Entity\\\\Layout::TARGET_ID_UNUSED') }} : '{{ 'admin.content.layout_section__unused'|trans }}',
            {{ constant('Eccube\\\\Entity\\\\Layout::TARGET_ID_HEAD') }} : '{{ 'admin.content.layout_section__head'|trans }}',
            {{ constant('Eccube\\\\Entity\\\\Layout::TARGET_ID_BODY_AFTER') }} : '{{ 'admin.content.layout_section__body_after'|trans }}',
            {{ constant('Eccube\\\\Entity\\\\Layout::TARGET_ID_HEADER') }} : '{{ 'admin.content.layout_section__header'|trans }}',
            {{ constant('Eccube\\\\Entity\\\\Layout::TARGET_ID_CONTENTS_TOP') }} : '{{ 'admin.content.layout_section__contents_top'|trans }}',
            {{ constant('Eccube\\\\Entity\\\\Layout::TARGET_ID_SIDE_LEFT') }} : '{{ 'admin.content.layout_section__side_left'|trans }}',
            {{ constant('Eccube\\\\Entity\\\\Layout::TARGET_ID_MAIN_TOP') }} : '{{ 'admin.content.layout_section__main_top'|trans }}',
            {{ constant('Eccube\\\\Entity\\\\Layout::TARGET_ID_MAIN_BOTTOM') }} : '{{ 'admin.content.layout_section__main_bottom'|trans }}',
            {{ constant('Eccube\\\\Entity\\\\Layout::TARGET_ID_SIDE_RIGHT') }} : '{{ 'admin.content.layout_section__side_right'|trans }}',
            {{ constant('Eccube\\\\Entity\\\\Layout::TARGET_ID_CONTENTS_BOTTOM') }} : '{{ 'admin.content.layout_section__contents_bottom'|trans }}',
            {{ constant('Eccube\\\\Entity\\\\Layout::TARGET_ID_FOOTER') }} : '{{ 'admin.content.layout_section__footer'|trans }}',
            {{ constant('Eccube\\\\Entity\\\\Layout::TARGET_ID_DRAWER') }} : '{{ 'admin.content.layout_section__drawer'|trans }}',
            {{ constant('Eccube\\\\Entity\\\\Layout::TARGET_ID_CLOSE_BODY_BEFORE') }} : '{{ 'admin.content.layout_section__close_body_before'|trans }}'
        };

        // use for layout_design.js
        var els = Object.keys(sections).map(function(id) {
            return '#position_' + id;
        });
    </script>
    <script src=\"{{ asset('assets/js/vendor/jquery.ui/jquery.ui.core.min.js', 'admin') }}\"></script>
    <script src=\"{{ asset('assets/js/vendor/jquery.ui/jquery.ui.widget.min.js', 'admin') }}\"></script>
    <script src=\"{{ asset('assets/js/vendor/jquery.ui/jquery.ui.mouse.min.js', 'admin') }}\"></script>
    <script src=\"{{ asset('assets/js/vendor/jquery.ui/jquery.ui.sortable.min.js', 'admin') }}\"></script>
    <script src=\"{{ asset('assets/js/layout_design.js', 'admin') }}\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/ace/1.2.8/ace.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/ace/1.2.8/ext-language_tools.js\"></script>

    <script>
        \$(function(){
            \$('.block-context-menu').popover({
                placement: 'bottom',
                html: true,
                container: 'body',
                content: function () {
                    return \$('#context-menu').html();
                }
            }).on('shown.bs.popover', function () {
                \$('.block-context-menu').not(this).popover('hide');
                var \$menu = \$(this);
                var \$block = \$menu.closest('[id^=\"detail_box__layout_item\"]');
                var block = {
                    'menu': \$menu,
                    'current': \$block,
                    'prev': \$block.prev('[id^=\"detail_box__layout_item\"]'),
                    'next': \$block.next('[id^=\"detail_box__layout_item\"]')
                };
                \$('.context-moveup').on('click', block, function() {
                    if (block.prev.length) {
                        block.current.insertBefore(block.prev);
                        block.menu.popover('hide');
                        window.updateUpDown(\$block.parent('.ui-sortable').first());
                    }
                });
                \$('.context-movedown').on('click', block, function() {
                    if (block.next.length) {
                        block.current.insertAfter(block.next);
                        block.menu.popover('hide');
                        window.updateUpDown(\$block.parent('.ui-sortable').first());
                    }
                });
                \$('.context-movesection').on('click', block, function() {
                    \$('#clickStreamConfirm').modal();
                    \$('#target-block').val(\$(block.current).attr('id'));
                    block.menu.popover('hide');
                });
                \$('#clickStreamConfirm').on('show.bs.modal', function(event) {
                    \$('#move-section').children('option').remove();
                    for (var target_id in sections) {
                        \$('#move-section').append('<option value=\"' + target_id + '\">' + sections[target_id] + '</option>');
                    }
                });
                \$('#move-to-section').on('click', function() {
                    var \$position = \$('#position_' + \$('#move-section').val());
                    var \$target = \$('#' + \$('#target-block').val());
                    var \$parent = \$target.parent();

                    \$position.append(\$target);
                    window.updateUpDown(\$position);
                    window.updateUpDown(\$parent);

                    if (\$position.children('.block').length > 0) {
                        // hide placeholder
                        \$position.children('.target-placeholder').remove();
                    }
                    if (\$parent.children('.block').length <= 0) {
                        // show placeholder
                        \$parent.append(\$('#target-placeholder').html());
                    }
                });

                \$('.context-preview').on('click', block, function() {
                    \$('#codePreview').modal();
                    block.menu.popover('hide');
                });

                \$('#codePreview').on('show.bs.modal', block, function(event) {
                    var attr_id = block.current.attr('id').match(/^detail_box__layout_item--([0-9]+)/);
                    var block_id = attr_id[1];
                    var \$modal = \$(this);
                    var \$block_edit = \$modal.find('#block-edit');
                    var onclick = \$block_edit.attr('onclick').replace(/{{ constant('Eccube\\\\Controller\\\\Admin\\\\Content\\\\LayoutController::DUMMY_BLOCK_ID') }}/, block_id);
                    \$block_edit.attr('onclick', onclick);

                    ace.require(\"ace/ext/language_tools\");
                    var editor = ace.edit(\"block-source-code\");
                    editor.session.setMode(\"ace/mode/twig\");
                    editor.setTheme(\"ace/theme/tomorrow\");
                    editor.setOptions({
                        readOnly: true,
                        autoScrollEditorIntoView: true,
                        minLines: 20,
                        maxLines: 20
                    });

                    \$.ajax({
                        url: '{{ url('admin_content_layout_view_block') }}',
                        type: 'GET',
                        data: {
                            id: block_id
                        }
                    }).done(function(json, statusText, jqXHR) {
                        editor.setValue(json.source);
                        editor.gotoLine(1);
                        editor.scrollToLine(1);
                    }).fail(function(jqXHR, statusText, errorThrown) {
                        editor.setValue(statusText + ' ' + errorThrown);
                    });
                });
            });
        });
    </script>
    <script>
        // プレビューボタンクリック時
        {% if Layout.id -%}
        \$('#preview-button').on('click', function(){
            var page_id = \$('#{{ form.Page.vars.id }}').val();
            if (!page_id) {
                alert(\"{{ 'admin.content.layout_preview_select_page'|trans }}\");
                return false;
            }

            \$('#form1').attr('action', \"{{ url('admin_content_layout_preview', {id: Layout.id}) }}\");
            \$('#form1').attr('target', '_blank');
            \$('#form1').submit();

            // submit後に元に戻す
            \$('#form1').attr('action', \"{{ url('admin_content_layout_edit', {id: Layout.id}) }}\");
            \$('#form1').attr('target', '_self');

            return false;
        });
        {% endif %}

        // searchWordの実行
        \$('#search-block').on('input', function () {
            searchWord(\$(this).val(), \$('#unused-block .sort'));
        });
    </script>
{% endblock javascript %}

{% block main %}
    {% set loop_index = 0 %}
    <form name=\"form1\" id=\"form1\" method=\"post\" action=\"{% if Layout.id -%}
                {{ url('admin_content_layout_edit', {id: Layout.id}) }}
    {%- else -%}
                {{ url('admin_content_layout_new') }}
    {%- endif %}\">
        {{ form_widget(form._token) }}
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\"><span class=\"card-title\">{{ 'admin.content.layout__card_title'|trans }}</span></div>
                                <div class=\"col-4 text-right\"><a data-toggle=\"collapse\" href=\"#layoutOverview\" aria-expanded=\"false\" aria-controls=\"layoutOverview\"><i class=\"fa fa-angle-up fa-lg\"></i></a></div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"layoutOverview\">
                            <div class=\"card-body\">
                                <div class=\"row mb-2\">
                                    <div class=\"col-3 pr-0\"><span>{{ 'admin.content.layout_name'|trans }}</span><span class=\"badge badge-primary ml-1\">{{ 'admin.common.required'|trans }}</span></div>
                                    <div class=\"col\">
                                        {{ form_widget(form.name) }}
                                        {{ form_errors(form.name) }}
                                    </div>
                                </div>
                                <div class=\"row mb-2\">
                                    <div class=\"col-3 pr-0\"><span>{{ 'admin.common.device_type'|trans }}</span></div>
                                    <div class=\"col\">
                                        <span>
                                            {% if Layout.id %}
                                                {{ form.DeviceType.vars.data.name }}
                                                <input type=\"hidden\" name=\"{{ form.DeviceType.vars.full_name }}\" value=\"{{ form.DeviceType.vars.value }}\" />
                                            {% else %}
                                                {{ form_widget(form.DeviceType) }}
                                            {% endif %}
                                            {{ form_errors(form.DeviceType) }}
                                        </span>
                                    </div>
                                </div>
                                {# エンティティ拡張の自動出力 #}
                                {% for f in form if f.vars.eccube_form_options.auto_render %}
                                    {% if f.vars.eccube_form_options.form_theme %}
                                        {% form_theme f f.vars.eccube_form_options.form_theme %}
                                        {{ form_row(f) }}
                                    {% else %}
                                        <div class=\"row mb-2\">
                                            <div class=\"col-3 pr-0\"><span>{{ f.vars.label|trans }}</span></div>
                                            <div class=\"col\">
                                                {{ form_widget(f) }}
                                                {{ form_errors(f) }}
                                            </div>
                                        </div>
                                    {% endif %}
                                {% endfor %}
                            </div>
                        </div>
                    </div>
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"{{ 'tooltip.content.layout_edit'|trans }}\"><span class=\"card-title\">{{ 'admin.content.layout_edit__card_title'|trans }}</span><i class=\"fa fa-question-circle fa-lg ml-1\"></i></div>
                                </div>
                                <div class=\"col-4 text-right\"><a data-toggle=\"collapse\" href=\"#layoutBlockEdit\" aria-expanded=\"false\" aria-controls=\"layoutBlockEdit\"><i class=\"fa fa-angle-up fa-lg\"></i></a></div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"layoutBlockEdit\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col p-2\">
                                        <div class=\"d-block border border-ec-gray\">
                                            {% set target_id = constant('Eccube\\\\Entity\\\\Layout::TARGET_ID_HEAD') %}
                                            <div id=\"position_{{ target_id }}\"
                                                 class=\"d-block p-3 border border-ec-gray border-top-0 border-right-0 border-left-0 ui-sortable\">
                                                <p class=\"font-weight-bold mb-2\">{{ 'admin.content.layout_section__head'|trans }}</p>
                                                {% for BlockPosition in Layout.getBlockPositionsByTargetId(target_id) %}
                                                    {{ include('@admin/Content/layout_block.twig') }}
                                                    {% set loop_index = loop_index + 1 %}
                                                {% else %}
                                                    <div class=\"target-placeholder d-block text-center border-ec-dashed p-3\"><span class=\"text-ec-gray\">{{ 'admin.content.layout_drag_and_drop_message'|trans }}</span></div>
                                                {% endfor %}
                                            </div>
                                            {% set target_id = constant('Eccube\\\\Entity\\\\Layout::TARGET_ID_BODY_AFTER') %}
                                            <div id=\"position_{{ target_id }}\"
                                                 class=\"d-block p-3 border border-ec-gray border-top-0 border-right-0 border-left-0 ui-sortable\">
                                                <p class=\"font-weight-bold mb-2\">{{ 'admin.content.layout_section__body_after'|trans }}</p>
                                                {% for BlockPosition in Layout.getBlockPositionsByTargetId(target_id) %}
                                                    {{ include('@admin/Content/layout_block.twig') }}
                                                    {% set loop_index = loop_index + 1 %}
                                                {% else %}
                                                    <div class=\"target-placeholder d-block text-center border-ec-dashed p-3\"><span class=\"text-ec-gray\">{{ 'admin.content.layout_drag_and_drop_message'|trans }}</span></div>
                                                {% endfor %}
                                            </div>
                                            {% set target_id = constant('Eccube\\\\Entity\\\\Layout::TARGET_ID_HEADER') %}
                                            <div id=\"position_{{ target_id }}\"
                                                 class=\"d-block p-3 border border-ec-gray border-top-0 border-right-0 border-left-0 ui-sortable\">
                                                <p class=\"font-weight-bold mb-2\">{{ 'admin.content.layout_section__header'|trans }}</p>
                                                {% for BlockPosition in Layout.getBlockPositionsByTargetId(target_id) %}
                                                    {{ include('@admin/Content/layout_block.twig') }}
                                                    {% set loop_index = loop_index + 1 %}
                                                {% else %}
                                                    <div class=\"target-placeholder d-block text-center border-ec-dashed p-3\"><span class=\"text-ec-gray\">{{ 'admin.content.layout_drag_and_drop_message'|trans }}</span></div>
                                                {% endfor %}
                                            </div>
                                            {% set target_id = constant('Eccube\\\\Entity\\\\Layout::TARGET_ID_CONTENTS_TOP') %}
                                            <div id=\"position_{{ target_id }}\"
                                                 class=\"d-block p-3 border border-ec-gray border-top-0 border-right-0 border-left-0 ui-sortable\">
                                                <p class=\"font-weight-bold mb-2\">{{ 'admin.content.layout_section__contents_top'|trans }}</p>
                                                {% for BlockPosition in Layout.getBlockPositionsByTargetId(target_id) %}
                                                    {{ include('@admin/Content/layout_block.twig') }}
                                                    {% set loop_index = loop_index + 1 %}
                                                {% else %}
                                                    <div class=\"target-placeholder d-block text-center border-ec-dashed p-3\"><span class=\"text-ec-gray\">{{ 'admin.content.layout_drag_and_drop_message'|trans }}</span></div>
                                                {% endfor %}
                                            </div>
                                            <div class=\"d-block pl-3 pr-3\">
                                                <div class=\"row\">
                                                    <div class=\"col align-items-start pr-0 p-3 border border-ec-gray border-top-0\">
                                                        {% set target_id = constant('Eccube\\\\Entity\\\\Layout::TARGET_ID_SIDE_LEFT') %}
                                                        <div id=\"position_{{ target_id }}\"
                                                             class=\"d-block ui-sortable\">
                                                            <p class=\"font-weight-bold mb-2\">{{ 'admin.content.layout_section__side_left'|trans }}</p>
                                                            {% for BlockPosition in Layout.getBlockPositionsByTargetId(target_id) %}
                                                                {{ include('@admin/Content/layout_block.twig') }}
                                                                {% set loop_index = loop_index + 1 %}
                                                            {% else %}
                                                                <div class=\"target-placeholder d-block text-center border-ec-dashed p-3\"><span class=\"text-ec-gray\">{{ 'admin.content.layout_drag_and_drop_message'|trans }}</span></div>
                                                            {% endfor %}
                                                        </div>
                                                    </div>
                                                    <div class=\"col align-items-start pl-0 pr-0 border border-ec-gray border-top-0 border-left-0 border-bottom-0\">
                                                        <div class=\"d-block h-100\">
                                                            {% set target_id = constant('Eccube\\\\Entity\\\\Layout::TARGET_ID_MAIN_TOP') %}
                                                            <div id=\"position_{{ target_id }}\"
                                                                 class=\"d-block p-3 border border-ec-gray border-top-0 border-left-0 border-right-0 ui-sortable\">
                                                                <p class=\"font-weight-bold mb-2\">{{ 'admin.content.layout_section__main_top'|trans }}</p>
                                                                {% for BlockPosition in Layout.getBlockPositionsByTargetId(target_id) %}
                                                                    {{ include('@admin/Content/layout_block.twig') }}
                                                                    {% set loop_index = loop_index + 1 %}
                                                                {% else %}
                                                                    <div class=\"target-placeholder d-block text-center border-ec-dashed p-3\"><span class=\"text-ec-gray\">{{ 'admin.content.layout_drag_and_drop_message'|trans }}</span></div>
                                                                {% endfor %}
                                                            </div>
                                                            <div class=\"d-block p-3 border border-ec-gray border-top-0 border-left-0 border-right-0 bg-ec-lightGray\">
                                                                <div class=\"d-block text-center p-3\">
                                                                    <p class=\"font-weight-bold mb-2\">{{ 'admin.content.layout_section__main'|trans }}</p>
                                                                </div>
                                                            </div>
                                                            {% set target_id = constant('Eccube\\\\Entity\\\\Layout::TARGET_ID_MAIN_BOTTOM') %}
                                                            <div id=\"position_{{ target_id }}\"
                                                                 class=\"d-block p-3 border border-ec-gray border-top-0 border-left-0 border-right-0 ui-sortable\">
                                                                <p class=\"font-weight-bold mb-2\">{{ 'admin.content.layout_section__main_bottom'|trans }}</p>
                                                                {% for BlockPosition in Layout.getBlockPositionsByTargetId(target_id) %}
                                                                    {{ include('@admin/Content/layout_block.twig') }}
                                                                    {% set loop_index = loop_index + 1 %}
                                                                {% else %}
                                                                    <div class=\"target-placeholder d-block text-center border-ec-dashed p-3\"><span class=\"text-ec-gray\">{{ 'admin.content.layout_drag_and_drop_message'|trans }}</span></div>
                                                                {% endfor %}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"col align-items-start pl-0 border border-ec-gray border-top-0 border-left-0\">
                                                        {% set target_id = constant('Eccube\\\\Entity\\\\Layout::TARGET_ID_SIDE_RIGHT') %}
                                                        <div id=\"position_{{ target_id }}\"
                                                             class=\"d-block p-3 h-100 ui-sortable\">
                                                            <p class=\"font-weight-bold mb-2\">{{ 'admin.content.layout_section__side_right'|trans }}</p>
                                                            {% for BlockPosition in Layout.getBlockPositionsByTargetId(target_id) %}
                                                                {{ include('@admin/Content/layout_block.twig') }}
                                                                {% set loop_index = loop_index + 1 %}
                                                            {% else %}
                                                                <div class=\"target-placeholder d-block text-center border-ec-dashed p-3\"><span class=\"text-ec-gray\">{{ 'admin.content.layout_drag_and_drop_message'|trans }}</span></div>
                                                            {% endfor %}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"d-block border border-ec-gray border-top-0 border-right-0 border-left-0\">
                                                {% set target_id = constant('Eccube\\\\Entity\\\\Layout::TARGET_ID_CONTENTS_BOTTOM') %}
                                                <div id=\"position_{{ target_id }}\"
                                                     class=\"d-block p-3 ui-sortable\">
                                                    <p class=\"font-weight-bold mb-2\">{{ 'admin.content.layout_section__contents_bottom'|trans }}</p>
                                                    {% for BlockPosition in Layout.getBlockPositionsByTargetId(target_id) %}
                                                        {{ include('@admin/Content/layout_block.twig') }}
                                                        {% set loop_index = loop_index + 1 %}
                                                    {% else %}
                                                        <div class=\"target-placeholder d-block text-center border-ec-dashed p-3\"><span class=\"text-ec-gray\">{{ 'admin.content.layout_drag_and_drop_message'|trans }}</span></div>
                                                    {% endfor %}
                                                </div>
                                            </div>
                                            <div class=\"d-block border border-ec-gray border-top-0 border-right-0 border-left-0\">
                                                {% set target_id = constant('Eccube\\\\Entity\\\\Layout::TARGET_ID_FOOTER') %}
                                                <div id=\"position_{{ target_id }}\"
                                                     class=\"d-block p-3 ui-sortable\">
                                                    <p class=\"font-weight-bold mb-2\">{{ 'admin.content.layout_section__footer'|trans }}</p>
                                                    {% for BlockPosition in Layout.getBlockPositionsByTargetId(target_id) %}
                                                        {{ include('@admin/Content/layout_block.twig') }}
                                                        {% set loop_index = loop_index + 1 %}
                                                    {% else %}
                                                        <div class=\"target-placeholder d-block text-center border-ec-dashed p-3\"><span class=\"text-ec-gray\">{{ 'admin.content.layout_drag_and_drop_message'|trans }}</span></div>
                                                    {% endfor %}
                                                </div>
                                            </div>
                                            <div class=\"d-block border border-ec-gray border-top-0 border-right-0 border-left-0\">
                                                {% set target_id = constant('Eccube\\\\Entity\\\\Layout::TARGET_ID_DRAWER') %}
                                                <div id=\"position_{{ target_id }}\"
                                                     class=\"d-block p-3 ui-sortable\">
                                                    <p class=\"font-weight-bold mb-2\">{{ 'admin.content.layout_section__drawer'|trans }}</p>
                                                    {% for BlockPosition in Layout.getBlockPositionsByTargetId(target_id) %}
                                                        {{ include('@admin/Content/layout_block.twig') }}
                                                        {% set loop_index = loop_index + 1 %}
                                                    {% else %}
                                                        <div class=\"target-placeholder d-block text-center border-ec-dashed p-3\"><span class=\"text-ec-gray\">{{ 'admin.content.layout_drag_and_drop_message'|trans }}</span></div>
                                                    {% endfor %}
                                                </div>
                                            </div>
                                            <div class=\"d-block\">
                                                {% set target_id = constant('Eccube\\\\Entity\\\\Layout::TARGET_ID_CLOSE_BODY_BEFORE') %}
                                                <div id=\"position_{{ target_id }}\"
                                                     class=\"d-block p-3 border-top-0 border-right-0 border-left-0 ui-sortable\">
                                                    <p class=\"font-weight-bold mb-2\">{{ 'admin.content.layout_section__close_body_before'|trans }}</p>
                                                    {% for BlockPosition in Layout.getBlockPositionsByTargetId(target_id) %}
                                                        {{ include('@admin/Content/layout_block.twig') }}
                                                        {% set loop_index = loop_index + 1 %}
                                                    {% else %}
                                                        <div class=\"target-placeholder d-block text-center border-ec-dashed p-3\"><span class=\"text-ec-gray\">{{ 'admin.content.layout_drag_and_drop_message'|trans }}</span></div>
                                                    {% endfor %}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-3 p-2\">
                                        {% if Layout.id and form.Page.vars.choices|length > 0 -%}
                                        <div id=\"preview-block\" class=\"d-block border border-ec-gray mb-4\">
                                            <div class=\"card-body\">
                                                <div class=\"d-block text-center mb-3\">
                                                    {{ form_widget(form.Page) }}
                                                </div>
                                                <div class=\"d-block text-center\">
                                                    <a id=\"preview-button\" class=\"btn btn-block btn-ec-regular\">{{ 'admin.content.layout_preview'|trans }}</a>
                                                </div>
                                            </div>
                                        </div>
                                        {% endif %}
                                        <div id=\"unused-block\" class=\"d-block border border-ec-gray\">
                                            {% set unused_target_id = constant('Eccube\\\\Entity\\\\Layout::TARGET_ID_UNUSED') %}
                                            <div id=\"position_{{ unused_target_id }}\" class=\"d-block p-3 ui-sortable\">
                                                <p class=\"font-weight-bold mb-2\">{{ 'admin.content.layout_section__unused'|trans }}</p>
                                                <div class=\"mb-3\">
                                                    <div class=\"form-row\">
                                                        <div class=\"col\">
                                                            <div class=\"input-group mb-3\">
                                                                <div class=\"input-group-prepend\">
                                                                    <span class=\"input-group-text\" id=\"basic-addon1\"><i class=\"fa fa-search\"></i></span>
                                                                </div>
                                                                <input id=\"search-block\" class=\"form-control\" type=\"search\" aria-label=\"Search\">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {% for UnusedBlock in UnusedBlocks %}
                                                    <div id=\"detail_box__layout_item--{{ UnusedBlock.id }}\"
                                                         class=\"block sort{% if loop.first %} first{% endif %} border border-ec-gray bg-ec-lightGray p-2 mb-2\">
                                                        <div class=\"row justify-content-between\">
                                                            <div class=\"col\">
                                                                <i class=\"fa fa-bars text-ec-gray mr-3\"></i>
                                                                <span class=\"view_readme\" data-toggle=\"modal\"
                                                                   data-target=\"#blockModal\"
                                                                   data-id=\"{{ UnusedBlock.id }}\"
                                                                   data-name=\"{{ UnusedBlock.name }}\"
                                                                   title=\"{{ UnusedBlock.name }}\"
                                                                >{{ UnusedBlock.name }}</span>
                                                            </div>
                                                            <div class=\"col-auto text-right\">
                                                                <div class=\"d-inline-block px-3\">
                                                                    <input type=\"hidden\" class=\"name\" name=\"name_{{ loop_index }}\"
                                                                        value=\"{{ UnusedBlock.name }}\"/>
                                                                    <input type=\"hidden\" class=\"id\" name=\"block_id_{{ loop_index }}\"
                                                                        value=\"{{ UnusedBlock.id }}\"/>
                                                                    <input type=\"hidden\" class=\"target-id\"
                                                                        name=\"section_{{ loop_index }}\"
                                                                        value=\"{{ unused_target_id }}\"/>
                                                                    <input type=\"hidden\" class=\"block-row\"
                                                                        name=\"block_row_{{ loop_index }}\"
                                                                        value=\"{{ UnusedBlock.id }}\"/>
                                                                    <div class=\"block-context-menu d-inline-block px-3\"><i class=\"fa fa-ellipsis-v fa-lg text-secondary\"></i></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {% set loop_index = loop_index + 1 %}
                                                {% endfor %}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"modal fade\" id=\"clickStreamConfirm\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"clickStreamConfirm\" aria-hidden=\"true\">
                                    <div class=\"modal-dialog\" role=\"document\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <h5 class=\"modal-title\">{{ 'admin.content.layout_move_to__confirm_title'|trans }}</h5>
                                                <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                                            </div>
                                            <div class=\"modal-body\">
                                                <p>{{ 'admin.content.layout_move_to__confirm_message'|trans }}</p>
                                                <div>
                                                    <select id=\"move-section\" class=\"form-control\">
                                                    </select>
                                                    <input type=\"hidden\" id=\"target-block\" />
                                                </div>
                                            </div>
                                            <div class=\"modal-footer\">
                                                <button class=\"btn btn-ec-regular w-25\" type=\"button\" data-dismiss=\"modal\">{{ 'admin.common.cancel'|trans }}</button>
                                                <button id=\"move-to-section\" class=\"btn btn-ec-conversion w-25\" type=\"button\" data-dismiss=\"modal\">{{ 'admin.content.layout_move_to__execute'|trans }}</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"modal fade\" id=\"codePreview\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"codePreview\" aria-hidden=\"true\">
                                    <div class=\"modal-dialog\" role=\"document\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <h5 class=\"modal-title\">{{ 'admin.content.layout_preview_code__confirm_title'|trans }}</h5>
                                                <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                                            </div>
                                            <div class=\"modal-body\">
                                                <p>{{ 'admin.content.layout_preview_code__confirm_message'|trans }}</p>
                                                <div id=\"block-source-code\" class=\"d-block border bg-ec-lightGray p-2\"></div>
                                            </div>
                                            <div class=\"modal-footer\">
                                                <button class=\"btn btn-ec-regular\" type=\"button\" data-dismiss=\"modal\">{{ 'admin.common.cancel'|trans }}</button>
                                                <button id=\"block-edit\" onclick=\"location.href='{{ url('admin_content_block_edit', {id: constant('Eccube\\\\Controller\\\\Admin\\\\Content\\\\LayoutController::DUMMY_BLOCK_ID')}) }}'\" class=\"btn btn-ec-conversion w-25\" type=\"button\" data-dismiss=\"modal\">{{ 'admin.content.layout_preview_code__confirm_move_to_block'|trans }}</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id=\"context-menu\" style=\"display: none\">
                                    <div class='list-group'>
                                        <a href='javascript:;' class='context-moveup list-group-item list-group-item-action border-0'>
                                            <i class='fa fa-long-arrow-up mr-1'></i>{{ 'admin.content.layout_up'|trans }}
                                        </a>
                                        <a href='javascript:;' class='context-movedown list-group-item list-group-item-action border-0'>
                                            <i class='fa fa-long-arrow-down mr-1'></i>{{ 'admin.content.layout_down'|trans }}
                                        </a>
                                        <a href='javascript:;' class='context-movesection list-group-item list-group-item-action border-0'>
                                            <i class='fa fa-arrows mr-1'></i>{{ 'admin.content.layout_move_to'|trans }}
                                        </a>
                                        <a href='javascript:;' class='context-preview list-group-item list-group-item-action border-0'>
                                            <i class='fa fa-code mr-1'></i>{{ 'admin.content.layout_preview_code'|trans }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id=\"target-placeholder\" style=\"display: none\"><div class=\"target-placeholder d-block text-center border-ec-dashed p-3\"><span class=\"text-ec-gray\">{{ 'admin.content.layout_drag_and_drop_message'|trans }}</span></div></div>
            <div class=\"c-conversionArea\">
                <div class=\"c-conversionArea__container\">
                    <div class=\"row justify-content-between align-items-center\">
                        <div class=\"col-6\">
                            <div class=\"c-conversionArea__leftBlockItem\">
                                <a class=\"c-baseLink\" href=\"{{ url('admin_content_layout') }}\"><i class=\"fa fa-backward\" aria-hidden=\"true\"></i><span>{{ 'admin.content.layout_management'|trans }}</span></a>
                            </div>
                        </div>
                        <div class=\"col-6\">
                            <div id=\"ex-conversion-action\" class=\"row align-items-center justify-content-end\">
                                <div class=\"col-auto\">
                                    <button class=\"btn btn-ec-conversion px-5\" type=\"submit\">{{ 'admin.common.registration'|trans }}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
{% endblock %}
", "@admin/Content/layout.twig", "/var/www/html/eccube-4-new/src/Eccube/Resource/template/admin/Content/layout.twig");
    }
}
