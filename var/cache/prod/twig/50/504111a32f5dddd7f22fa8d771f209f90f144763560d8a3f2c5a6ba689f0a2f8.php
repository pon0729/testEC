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
class __TwigTemplate_065b74f191240bf9d12a590c20ebeddf52136ad577aceb42a3e6334383512c05 extends \Eccube\Twig\Template
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
        // line 2
        echo "<div class=\"ec-concept_text\">
    <p>日頃の感謝の気持ちを込めて、ありがとうを形に</p>
    <p>シチュエーションに応じた、お客様の気持ちに寄り添う贈り物選びをさせていただきます。</p>
    <p>ギフトの贈り手ともらい手のお二方の関係性がさらに良好なものにと願ったセレクトショップになります。</p>
</div>";
    }

    public function getTemplateName()
    {
        return "Block/concept_text.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "Block/concept_text.twig", "/var/www/html/eccube-4-new/app/template/responceWebDesign/Block/concept_text.twig");
    }
}
