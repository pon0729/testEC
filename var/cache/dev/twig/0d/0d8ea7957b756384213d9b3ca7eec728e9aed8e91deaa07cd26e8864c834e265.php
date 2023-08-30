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

/* @admin/Content/layout_block.twig */
class __TwigTemplate_bc071b40e8221033c17760ea0a173613c623ba442569cb26c569045730e2b198 extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Content/layout_block.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Content/layout_block.twig"));

        // line 11
        echo "<div id=\"detail_box__layout_item--";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["BlockPosition"]) || array_key_exists("BlockPosition", $context) ? $context["BlockPosition"] : (function () { throw new RuntimeError('Variable "BlockPosition" does not exist.', 11, $this->source); })()), "Block", [], "any", false, false, false, 11), "id", [], "any", false, false, false, 11), "html", null, true);
        echo "\" class=\"block sort border border-ec-gray bg-ec-lightGray p-2 mb-2\">
    <div class=\"row justify-content-between\">
        <div class=\"col\">
            <i class=\"fa fa-bars text-ec-gray mr-3\"></i>
            <span class=\"view_readme\" data-toggle=\"modal\"
               data-target=\"#blockModal\"
               data-id=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["BlockPosition"]) || array_key_exists("BlockPosition", $context) ? $context["BlockPosition"] : (function () { throw new RuntimeError('Variable "BlockPosition" does not exist.', 17, $this->source); })()), "Block", [], "any", false, false, false, 17), "id", [], "any", false, false, false, 17), "html", null, true);
        echo "\"
               data-name=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["BlockPosition"]) || array_key_exists("BlockPosition", $context) ? $context["BlockPosition"] : (function () { throw new RuntimeError('Variable "BlockPosition" does not exist.', 18, $this->source); })()), "Block", [], "any", false, false, false, 18), "name", [], "any", false, false, false, 18), "html", null, true);
        echo "\"
               title=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["BlockPosition"]) || array_key_exists("BlockPosition", $context) ? $context["BlockPosition"] : (function () { throw new RuntimeError('Variable "BlockPosition" does not exist.', 19, $this->source); })()), "Block", [], "any", false, false, false, 19), "name", [], "any", false, false, false, 19), "html", null, true);
        echo "\"
            >";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["BlockPosition"]) || array_key_exists("BlockPosition", $context) ? $context["BlockPosition"] : (function () { throw new RuntimeError('Variable "BlockPosition" does not exist.', 20, $this->source); })()), "Block", [], "any", false, false, false, 20), "name", [], "any", false, false, false, 20), "html", null, true);
        echo "</span>
        </div>
        <div class=\"col-auto text-right\">
            <div class=\"d-inline-block px-3 sort";
        // line 23
        if (twig_get_attribute($this->env, $this->source, (isset($context["loop"]) || array_key_exists("loop", $context) ? $context["loop"] : (function () { throw new RuntimeError('Variable "loop" does not exist.', 23, $this->source); })()), "first", [], "any", false, false, false, 23)) {
            echo " first";
        }
        echo "\">
                <input type=\"hidden\" class=\"name\" name=\"name_";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["loop_index"]) || array_key_exists("loop_index", $context) ? $context["loop_index"] : (function () { throw new RuntimeError('Variable "loop_index" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["BlockPosition"]) || array_key_exists("BlockPosition", $context) ? $context["BlockPosition"] : (function () { throw new RuntimeError('Variable "BlockPosition" does not exist.', 24, $this->source); })()), "Block", [], "any", false, false, false, 24), "name", [], "any", false, false, false, 24), "html", null, true);
        echo "\"/>
                <input type=\"hidden\" class=\"block-id\" name=\"block_id_";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["loop_index"]) || array_key_exists("loop_index", $context) ? $context["loop_index"] : (function () { throw new RuntimeError('Variable "loop_index" does not exist.', 25, $this->source); })()), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["BlockPosition"]) || array_key_exists("BlockPosition", $context) ? $context["BlockPosition"] : (function () { throw new RuntimeError('Variable "BlockPosition" does not exist.', 25, $this->source); })()), "Block", [], "any", false, false, false, 25), "id", [], "any", false, false, false, 25), "html", null, true);
        echo "\"/>
                <input type=\"hidden\" class=\"target-id\" name=\"section_";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["loop_index"]) || array_key_exists("loop_index", $context) ? $context["loop_index"] : (function () { throw new RuntimeError('Variable "loop_index" does not exist.', 26, $this->source); })()), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["BlockPosition"]) || array_key_exists("BlockPosition", $context) ? $context["BlockPosition"] : (function () { throw new RuntimeError('Variable "BlockPosition" does not exist.', 26, $this->source); })()), "section", [], "any", false, false, false, 26), "html", null, true);
        echo "\"/>
                <input type=\"hidden\" class=\"block-row\" name=\"block_row_";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["loop_index"]) || array_key_exists("loop_index", $context) ? $context["loop_index"] : (function () { throw new RuntimeError('Variable "loop_index" does not exist.', 27, $this->source); })()), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["BlockPosition"]) || array_key_exists("BlockPosition", $context) ? $context["BlockPosition"] : (function () { throw new RuntimeError('Variable "BlockPosition" does not exist.', 27, $this->source); })()), "block_row", [], "any", false, false, false, 27), "html", null, true);
        echo "\"/>
                <div class=\"block-context-menu d-inline-block px-3\"><i class=\"fa fa-ellipsis-v fa-lg text-secondary\"></i></div>
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
        return "@admin/Content/layout_block.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 27,  89 => 26,  83 => 25,  77 => 24,  71 => 23,  65 => 20,  61 => 19,  57 => 18,  53 => 17,  43 => 11,);
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
<div id=\"detail_box__layout_item--{{ BlockPosition.Block.id }}\" class=\"block sort border border-ec-gray bg-ec-lightGray p-2 mb-2\">
    <div class=\"row justify-content-between\">
        <div class=\"col\">
            <i class=\"fa fa-bars text-ec-gray mr-3\"></i>
            <span class=\"view_readme\" data-toggle=\"modal\"
               data-target=\"#blockModal\"
               data-id=\"{{ BlockPosition.Block.id }}\"
               data-name=\"{{ BlockPosition.Block.name }}\"
               title=\"{{ BlockPosition.Block.name }}\"
            >{{ BlockPosition.Block.name }}</span>
        </div>
        <div class=\"col-auto text-right\">
            <div class=\"d-inline-block px-3 sort{% if loop.first %} first{% endif %}\">
                <input type=\"hidden\" class=\"name\" name=\"name_{{ loop_index }}\" value=\"{{ BlockPosition.Block.name }}\"/>
                <input type=\"hidden\" class=\"block-id\" name=\"block_id_{{ loop_index }}\" value=\"{{ BlockPosition.Block.id }}\"/>
                <input type=\"hidden\" class=\"target-id\" name=\"section_{{ loop_index }}\" value=\"{{ BlockPosition.section }}\"/>
                <input type=\"hidden\" class=\"block-row\" name=\"block_row_{{ loop_index }}\" value=\"{{ BlockPosition.block_row }}\"/>
                <div class=\"block-context-menu d-inline-block px-3\"><i class=\"fa fa-ellipsis-v fa-lg text-secondary\"></i></div>
            </div>
        </div>
    </div>
</div>
", "@admin/Content/layout_block.twig", "/var/www/html/eccube-4-new/src/Eccube/Resource/template/admin/Content/layout_block.twig");
    }
}
