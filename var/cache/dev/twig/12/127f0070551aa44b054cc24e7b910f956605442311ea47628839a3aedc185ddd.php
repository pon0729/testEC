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

/* @YamatoPayment4/admin/config.twig */
class __TwigTemplate_ba23edf439ffa99836f5e7d5b605d32665fa9c18bf68aea635d1f50399c159d4 extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@YamatoPayment4/admin/config.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@YamatoPayment4/admin/config.twig"));

        // line 13
        $context["menus"] = [0 => "store", 1 => "plugin", 2 => "plugin_list"];
        // line 18
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), [0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@YamatoPayment4/admin/config.twig", 11);
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yamato_payment.admin.config.title"), "html", null, true);
        
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yamato_payment.admin.config.sub_title"), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 20
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 21
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 24
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 25
        echo "<script>
function getGlobalIpAddress() {
    \$.ajax({
        url: \"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("yamato_payment4_admin_config_ip_address");
        echo "\",
        type: \"GET\",
    }).done(function (data) {
        if (data.status == 'OK') {
            \$('.global_ip_address').text(data.ip_address);
        }
    }).fail(function (data) {
        if (data.responseJSON.status == 'NG') {
            data.responseJSON.error_messages.forEach(function (err) {
                alert(err);
            })
        } else {
            alert('get global ip address failed.');
        }
    })
}
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 47
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 48
        echo "    <form role=\"form\" method=\"post\">

        ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "_token", [], "any", false, false, false, 50), 'widget');
        echo "

        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\"><span>";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yamato_payment.admin.config.header1"), "html", null, true);
        echo "</span></div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\"><span>";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yamato_payment.admin.config.exec_mode"), "html", null, true);
        echo "</span><span
                                            class=\"badge badge-primary ml-1\">";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yamato_payment.admin.config.required"), "html", null, true);
        echo "</span></div>
                                <div class=\"col mb-2\">
                                    ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "exec_mode", [], "any", false, false, false, 62), 'widget', ["label_attr" => ["class" => "radio-inline"]]);
        echo "
                                    ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "exec_mode", [], "any", false, false, false, 63), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\"><span>";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yamato_payment.admin.config.enable_payment_type"), "html", null, true);
        echo "</span><span
                                            class=\"badge badge-primary ml-1\">";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yamato_payment.admin.config.required"), "html", null, true);
        echo "</span>
                                </div>
                                <div class=\"col mb-2\">
                                    ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "enable_payment_type", [], "any", false, false, false, 71), 'widget', ["label_attr" => ["class" => "checkbox-inline"]]);
        echo "
                                    ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "enable_payment_type", [], "any", false, false, false, 72), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\"><span>";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yamato_payment.admin.config.header2"), "html", null, true);
        echo "</span></div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\"><span>";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yamato_payment.admin.config.shop_id"), "html", null, true);
        echo "</span>
                                </div>
                                <div class=\"col mb-2\">
                                    ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "shop_id", [], "any", false, false, false, 86), 'widget');
        echo "
                                    ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "shop_id", [], "any", false, false, false, 87), 'errors');
        echo "
                                    (半角数字 9 桁)
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\"><span>";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yamato_payment.admin.config.access_key"), "html", null, true);
        echo "</span>
                                </div>
                                <div class=\"col mb-2\">
                                    ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "access_key", [], "any", false, false, false, 95), 'widget');
        echo "
                                    ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "access_key", [], "any", false, false, false, 96), 'errors');
        echo "
                                    (半角数字 7 桁)
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\"><span>";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yamato_payment.admin.config.use_option"), "html", null, true);
        echo "</span>
                                </div>
                                <div class=\"col mb-2\">
                                    ";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "use_option", [], "any", false, false, false, 104), 'widget', ["label_attr" => ["class" => "radio-inline"]]);
        echo "
                                    ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "use_option", [], "any", false, false, false, 105), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\"><span>";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yamato_payment.admin.config.advance_sale"), "html", null, true);
        echo "</span>
                                </div>
                                <div class=\"col mb-2\">
                                    ";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "advance_sale", [], "any", false, false, false, 112), 'widget', ["label_attr" => ["class" => "radio-inline"]]);
        echo "
                                    ";
        // line 113
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 113, $this->source); })()), "advance_sale", [], "any", false, false, false, 113), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\"><span>";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yamato_payment.admin.config.header3"), "html", null, true);
        echo "</span></div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\"><span>";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yamato_payment.admin.config.ycf_str_code"), "html", null, true);
        echo "</span>
                                </div>
                                <div class=\"col mb-2\">
                                    ";
        // line 126
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 126, $this->source); })()), "ycf_str_code", [], "any", false, false, false, 126), 'widget');
        echo "
                                    ";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 127, $this->source); })()), "ycf_str_code", [], "any", false, false, false, 127), 'errors');
        echo "
                                    (半角数字 11 桁)
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\"><span>";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yamato_payment.admin.config.ycf_str_password"), "html", null, true);
        echo "</span>
                                </div>
                                <div class=\"col mb-2\">
                                    ";
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 135, $this->source); })()), "ycf_str_password", [], "any", false, false, false, 135), 'widget');
        echo "
                                    ";
        // line 136
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 136, $this->source); })()), "ycf_str_password", [], "any", false, false, false, 136), 'errors');
        echo "
                                    (半角数字 8 桁)
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <span>";
        // line 142
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yamato_payment.admin.config.ycf_send_div"), "html", null, true);
        echo "</span>
                                </div>
                                <div class=\"col mb-2\">
                                    ";
        // line 145
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 145, $this->source); })()), "ycf_send_div", [], "any", false, false, false, 145), 'widget', ["label_attr" => ["class" => "radio-inline"]]);
        echo "
                                    ";
        // line 146
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 146, $this->source); })()), "ycf_send_div", [], "any", false, false, false, 146), 'errors');
        echo "
                                    (同梱は事前申し込みがないとご利用いただけません。)
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <span>";
        // line 152
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yamato_payment.admin.config.ycf_sms_flg"), "html", null, true);
        echo "</span>
                                </div>
                                <div class=\"col mb-2\">
                                    ";
        // line 155
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 155, $this->source); })()), "ycf_sms_flg", [], "any", false, false, false, 155), 'widget', ["label_attr" => ["class" => "radio-inline"]]);
        echo "
                                    ";
        // line 156
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 156, $this->source); })()), "ycf_sms_flg", [], "any", false, false, false, 156), 'errors');
        echo "
                                    (スマホタイプは事前申し込みがないとご利用いただけません。)
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\"><span>";
        // line 161
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yamato_payment.admin.config.ycf_ship_ymd"), "html", null, true);
        echo "</span>
                                </div>
                                <div class=\"col mb-2\">
                                    ";
        // line 164
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 164, $this->source); })()), "ycf_ship_ymd", [], "any", false, false, false, 164), 'widget');
        echo "
                                    ";
        // line 165
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 165, $this->source); })()), "ycf_ship_ymd", [], "any", false, false, false, 165), 'errors');
        echo "
                                    (半角数字 2 桁 / 当該日を経過して伝票番号が未登録の場合に「受注日+出荷予定日」という設定でアラート表示します。)
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <span>";
        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yamato_payment.admin.config.ycf_deliv_disp"), "html", null, true);
        echo "</span>
                                </div>
                                <div class=\"col mb-2\">
                                    ";
        // line 174
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 174, $this->source); })()), "ycf_deliv_disp", [], "any", false, false, false, 174), 'widget', ["label_attr" => ["class" => "radio-inline"]]);
        echo "
                                    ";
        // line 175
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 175, $this->source); })()), "ycf_deliv_disp", [], "any", false, false, false, 175), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\"><span>";
        // line 179
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yamato_payment.admin.config.ycf_invoice_reissue_mail_address"), "html", null, true);
        echo "</span>
                                </div>
                                <div class=\"col mb-2\">
                                    ";
        // line 182
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 182, $this->source); })()), "ycf_invoice_reissue_mail_address", [], "any", false, false, false, 182), 'widget');
        echo "
                                    ";
        // line 183
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 183, $this->source); })()), "ycf_invoice_reissue_mail_address", [], "any", false, false, false, 183), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\"><span>";
        // line 187
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yamato_payment.admin.config.ycf_invoice_reissue_mail_header"), "html", null, true);
        echo "</span>
                                </div>
                                <div class=\"col mb-2\">
                                    ";
        // line 190
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 190, $this->source); })()), "ycf_invoice_reissue_mail_header", [], "any", false, false, false, 190), 'widget');
        echo "
                                    ";
        // line 191
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 191, $this->source); })()), "ycf_invoice_reissue_mail_header", [], "any", false, false, false, 191), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\"><span>";
        // line 195
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yamato_payment.admin.config.ycf_invoice_reissue_mail_footer"), "html", null, true);
        echo "</span>
                                </div>
                                <div class=\"col mb-2\">
                                    ";
        // line 198
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 198, $this->source); })()), "ycf_invoice_reissue_mail_footer", [], "any", false, false, false, 198), 'widget');
        echo "
                                    ";
        // line 199
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 199, $this->source); })()), "ycf_invoice_reissue_mail_footer", [], "any", false, false, false, 199), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\"><span>";
        // line 206
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yamato_payment.admin.config.header4"), "html", null, true);
        echo "</span></div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <span>";
        // line 210
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yamato_payment.admin.config.delivery_service_code"), "html", null, true);
        echo "</span>
                                    <span class=\"badge badge-primary ml-1\">";
        // line 211
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yamato_payment.admin.config.required"), "html", null, true);
        echo "</span>
                                </div>
                                <div class=\"col mb-2\">
                                    ";
        // line 214
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 214, $this->source); })()), "delivery_service_code", [], "any", false, false, false, 214), 'widget', ["label_attr" => ["class" => "radio-inline"]]);
        echo "
                                    ";
        // line 215
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 215, $this->source); })()), "delivery_service_code", [], "any", false, false, false, 215), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <span>";
        // line 220
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yamato_payment.admin.config.result_notification_url"), "html", null, true);
        echo "</span>
                                </div>
                                <div class=\"col mb-2\">
                                    <div>";
        // line 223
        echo twig_escape_filter($this->env, (isset($context["sms_result_notification_url"]) || array_key_exists("sms_result_notification_url", $context) ? $context["sms_result_notification_url"] : (function () { throw new RuntimeError('Variable "sms_result_notification_url" does not exist.', 223, $this->source); })()), "html", null, true);
        echo "</div>
                                    <div>
                                        ※クロネコ代金後払いサービス画面よりログイン頂き、「加盟店情報修正」＞判定結果のPOST受信設定で「POSTで受信する」を選択後、判定結果のPOST受信URLに設定してください。
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <span>";
        // line 231
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yamato_payment.admin.config.cvs_result_notification_url"), "html", null, true);
        echo "</span>
                                </div>
                                <div class=\"col mb-2\">
                                    <div>";
        // line 234
        echo twig_escape_filter($this->env, (isset($context["cvs_result_notification_url"]) || array_key_exists("cvs_result_notification_url", $context) ? $context["cvs_result_notification_url"] : (function () { throw new RuntimeError('Variable "cvs_result_notification_url" does not exist.', 234, $this->source); })()), "html", null, true);
        echo "</div>
                                    <div>
                                        ※クロネコwebコレクト画面よりログイン頂き、「加盟店情報・動作環境設定」＞決済結果データ受信設定で「POSTで受信する」を選択後、決済結果受取URLに設定してください。
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <span>";
        // line 242
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yamato_payment.admin.config.global_ip_address"), "html", null, true);
        echo "</span>
                                </div>
                                <div class=\"col mb-2\">
                                    <p class=\"global_ip_address\"></p>
                                    <button type=\"button\" class=\"btn btn-ec-conversion px-5\" onClick=\"getGlobalIpAddress();return false;\">
                                        チェック
                                    </button>
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
                            <a class=\"c-beseLink\"
                               href=\"";
        // line 262
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_store_plugin");
        echo "\">
                                <i class=\"fa fa-backward\" aria-hidden=\"true\"></i>
                                <span>";
        // line 264
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yamato_payment.admin.config.back"), "html", null, true);
        echo "</span>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                <button class=\"btn btn-ec-conversion px-5\"
                                        type=\"submit\">";
        // line 272
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yamato_payment.admin.config.save"), "html", null, true);
        echo "</button>
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
        return "@YamatoPayment4/admin/config.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  594 => 272,  583 => 264,  578 => 262,  555 => 242,  544 => 234,  538 => 231,  527 => 223,  521 => 220,  513 => 215,  509 => 214,  503 => 211,  499 => 210,  492 => 206,  482 => 199,  478 => 198,  472 => 195,  465 => 191,  461 => 190,  455 => 187,  448 => 183,  444 => 182,  438 => 179,  431 => 175,  427 => 174,  421 => 171,  412 => 165,  408 => 164,  402 => 161,  394 => 156,  390 => 155,  384 => 152,  375 => 146,  371 => 145,  365 => 142,  356 => 136,  352 => 135,  346 => 132,  338 => 127,  334 => 126,  328 => 123,  322 => 120,  312 => 113,  308 => 112,  302 => 109,  295 => 105,  291 => 104,  285 => 101,  277 => 96,  273 => 95,  267 => 92,  259 => 87,  255 => 86,  249 => 83,  243 => 80,  232 => 72,  228 => 71,  222 => 68,  218 => 67,  211 => 63,  207 => 62,  202 => 60,  198 => 59,  192 => 56,  183 => 50,  179 => 48,  169 => 47,  141 => 28,  136 => 25,  126 => 24,  115 => 21,  105 => 20,  86 => 16,  67 => 15,  56 => 11,  54 => 18,  52 => 13,  39 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("{#
This file is part of EC-CUBE

Copyright(c) LOCKON CO.,LTD. All Rights Reserved.

http://www.lockon.co.jp/

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.
#}
{% extends '@admin/default_frame.twig' %}

{% set menus = ['store', 'plugin', 'plugin_list'] %}

{% block title %}{{ 'yamato_payment.admin.config.title'|trans }}{% endblock %}
{% block sub_title %}{{ 'yamato_payment.admin.config.sub_title'|trans }}{% endblock %}

{% form_theme form '@admin/Form/bootstrap_4_horizontal_layout.html.twig' %}

{% block stylesheet %}

{% endblock stylesheet %}

{% block javascript %}
<script>
function getGlobalIpAddress() {
    \$.ajax({
        url: \"{{ url('yamato_payment4_admin_config_ip_address') }}\",
        type: \"GET\",
    }).done(function (data) {
        if (data.status == 'OK') {
            \$('.global_ip_address').text(data.ip_address);
        }
    }).fail(function (data) {
        if (data.responseJSON.status == 'NG') {
            data.responseJSON.error_messages.forEach(function (err) {
                alert(err);
            })
        } else {
            alert('get global ip address failed.');
        }
    })
}
</script>
{% endblock javascript %}

{% block main %}
    <form role=\"form\" method=\"post\">

        {{ form_widget(form._token) }}

        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\"><span>{{ 'yamato_payment.admin.config.header1'|trans }}</span></div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\"><span>{{ 'yamato_payment.admin.config.exec_mode'|trans }}</span><span
                                            class=\"badge badge-primary ml-1\">{{ 'yamato_payment.admin.config.required'|trans }}</span></div>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.exec_mode, {'label_attr': {'class': 'radio-inline'}}) }}
                                    {{ form_errors(form.exec_mode) }}
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\"><span>{{ 'yamato_payment.admin.config.enable_payment_type'|trans }}</span><span
                                            class=\"badge badge-primary ml-1\">{{ 'yamato_payment.admin.config.required'|trans }}</span>
                                </div>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.enable_payment_type, {'label_attr': {'class': 'checkbox-inline'}}) }}
                                    {{ form_errors(form.enable_payment_type) }}
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\"><span>{{ 'yamato_payment.admin.config.header2'|trans }}</span></div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\"><span>{{ 'yamato_payment.admin.config.shop_id'|trans }}</span>
                                </div>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.shop_id) }}
                                    {{ form_errors(form.shop_id) }}
                                    (半角数字 9 桁)
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\"><span>{{ 'yamato_payment.admin.config.access_key'|trans }}</span>
                                </div>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.access_key) }}
                                    {{ form_errors(form.access_key) }}
                                    (半角数字 7 桁)
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\"><span>{{ 'yamato_payment.admin.config.use_option'|trans }}</span>
                                </div>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.use_option, {'label_attr': {'class': 'radio-inline'}}) }}
                                    {{ form_errors(form.use_option) }}
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\"><span>{{ 'yamato_payment.admin.config.advance_sale'|trans }}</span>
                                </div>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.advance_sale, {'label_attr': {'class': 'radio-inline'}}) }}
                                    {{ form_errors(form.advance_sale) }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\"><span>{{ 'yamato_payment.admin.config.header3'|trans }}</span></div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\"><span>{{ 'yamato_payment.admin.config.ycf_str_code'|trans }}</span>
                                </div>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.ycf_str_code) }}
                                    {{ form_errors(form.ycf_str_code) }}
                                    (半角数字 11 桁)
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\"><span>{{ 'yamato_payment.admin.config.ycf_str_password'|trans }}</span>
                                </div>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.ycf_str_password) }}
                                    {{ form_errors(form.ycf_str_password) }}
                                    (半角数字 8 桁)
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <span>{{ 'yamato_payment.admin.config.ycf_send_div'|trans }}</span>
                                </div>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.ycf_send_div, {'label_attr': {'class': 'radio-inline'}}) }}
                                    {{ form_errors(form.ycf_send_div) }}
                                    (同梱は事前申し込みがないとご利用いただけません。)
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <span>{{ 'yamato_payment.admin.config.ycf_sms_flg'|trans }}</span>
                                </div>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.ycf_sms_flg, {'label_attr': {'class': 'radio-inline'}}) }}
                                    {{ form_errors(form.ycf_sms_flg) }}
                                    (スマホタイプは事前申し込みがないとご利用いただけません。)
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\"><span>{{ 'yamato_payment.admin.config.ycf_ship_ymd'|trans }}</span>
                                </div>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.ycf_ship_ymd) }}
                                    {{ form_errors(form.ycf_ship_ymd) }}
                                    (半角数字 2 桁 / 当該日を経過して伝票番号が未登録の場合に「受注日+出荷予定日」という設定でアラート表示します。)
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <span>{{ 'yamato_payment.admin.config.ycf_deliv_disp'|trans }}</span>
                                </div>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.ycf_deliv_disp, {'label_attr': {'class': 'radio-inline'}}) }}
                                    {{ form_errors(form.ycf_deliv_disp) }}
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\"><span>{{ 'yamato_payment.admin.config.ycf_invoice_reissue_mail_address'|trans }}</span>
                                </div>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.ycf_invoice_reissue_mail_address) }}
                                    {{ form_errors(form.ycf_invoice_reissue_mail_address) }}
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\"><span>{{ 'yamato_payment.admin.config.ycf_invoice_reissue_mail_header'|trans }}</span>
                                </div>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.ycf_invoice_reissue_mail_header) }}
                                    {{ form_errors(form.ycf_invoice_reissue_mail_header) }}
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\"><span>{{ 'yamato_payment.admin.config.ycf_invoice_reissue_mail_footer'|trans }}</span>
                                </div>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.ycf_invoice_reissue_mail_footer) }}
                                    {{ form_errors(form.ycf_invoice_reissue_mail_footer) }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\"><span>{{ 'yamato_payment.admin.config.header4'|trans }}</span></div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <span>{{ 'yamato_payment.admin.config.delivery_service_code'|trans }}</span>
                                    <span class=\"badge badge-primary ml-1\">{{ 'yamato_payment.admin.config.required'|trans }}</span>
                                </div>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.delivery_service_code, {'label_attr': {'class': 'radio-inline'}}) }}
                                    {{ form_errors(form.delivery_service_code) }}
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <span>{{ 'yamato_payment.admin.config.result_notification_url'|trans }}</span>
                                </div>
                                <div class=\"col mb-2\">
                                    <div>{{ sms_result_notification_url }}</div>
                                    <div>
                                        ※クロネコ代金後払いサービス画面よりログイン頂き、「加盟店情報修正」＞判定結果のPOST受信設定で「POSTで受信する」を選択後、判定結果のPOST受信URLに設定してください。
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <span>{{ 'yamato_payment.admin.config.cvs_result_notification_url'|trans }}</span>
                                </div>
                                <div class=\"col mb-2\">
                                    <div>{{ cvs_result_notification_url }}</div>
                                    <div>
                                        ※クロネコwebコレクト画面よりログイン頂き、「加盟店情報・動作環境設定」＞決済結果データ受信設定で「POSTで受信する」を選択後、決済結果受取URLに設定してください。
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <span>{{ 'yamato_payment.admin.config.global_ip_address'|trans }}</span>
                                </div>
                                <div class=\"col mb-2\">
                                    <p class=\"global_ip_address\"></p>
                                    <button type=\"button\" class=\"btn btn-ec-conversion px-5\" onClick=\"getGlobalIpAddress();return false;\">
                                        チェック
                                    </button>
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
                            <a class=\"c-beseLink\"
                               href=\"{{ url('admin_store_plugin') }}\">
                                <i class=\"fa fa-backward\" aria-hidden=\"true\"></i>
                                <span>{{ 'yamato_payment.admin.config.back'|trans }}</span>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                <button class=\"btn btn-ec-conversion px-5\"
                                        type=\"submit\">{{ 'yamato_payment.admin.config.save'|trans }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
{% endblock %}", "@YamatoPayment4/admin/config.twig", "/var/www/html/eccube-4-new/app/Plugin/YamatoPayment4/Resource/template/admin/config.twig");
    }
}
