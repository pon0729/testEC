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

/* Block/concept_text.twig */
class __TwigTemplate_e30c82bc01a659ecdb45cf9397e4ed5ec981fb6a49e7d6ff1fc2646f80f75702 extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Block/concept_text.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Block/concept_text.twig"));

        // line 2
        echo "<div class=\"ec-concept_text\">
    <p>日頃の感謝の気持ちを込めて、ありがとうを形に</p>
    <p>シチュエーションに応じた、お客様の気持ちに寄り添う贈り物選びをさせていただきます。</p>
    <p>ギフトの贈り手ともらい手のお二方の関係性がさらに良好なものにと願ったセレクトショップになります。</p>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Block/concept_text.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{#TOP画面の店舗コンセプト文#}
<div class=\"ec-concept_text\">
    <p>日頃の感謝の気持ちを込めて、ありがとうを形に</p>
    <p>シチュエーションに応じた、お客様の気持ちに寄り添う贈り物選びをさせていただきます。</p>
    <p>ギフトの贈り手ともらい手のお二方の関係性がさらに良好なものにと願ったセレクトショップになります。</p>
</div>", "Block/concept_text.twig", "/var/www/html/eccube-4-new/app/template/responceWebDesign/Block/concept_text.twig");
    }
}
