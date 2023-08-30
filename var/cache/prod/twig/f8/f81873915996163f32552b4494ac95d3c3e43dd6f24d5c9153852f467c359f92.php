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

/* __string_template__552992e2add7ee1820633a7a915f8b6fc030ed257a0a77e34de1099cf82a522a */
class __TwigTemplate_f3594567b4e238e4603ea0efaed3a6ec7341964222d75fcb4f7dc68ece7e7e1c extends \Eccube\Twig\Template
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
        // line 1
        echo "<meta name=\"twitter:card\" content=\"summary_large_image\"/> <!--①-->
<meta name=\"twitter:site\" content=\"@giftcommunicat1\" /> <!--②-->
<meta name=\"twitter:creator\" content=\"@giftcommunicat1\" />
<meta property=\"og:url\" content=\"https://gift-communication.shop\" /> <!--③-->
<meta property=\"og:title\" content=\"GIFT COMMUNICATION\" /> <!--④-->
<meta property=\"og:description\" content=\"ギフトの贈り手ともらい手のお二方の関係性がさらに良好なものにと願った「ありがとうを形に」がテーマにしたギフトのセレクトショップ\" /> <!--⑤-->
<meta property=\"twitter:image\" content=\"https://gift-communication.shop/html/user_data/assets/img/top/SP_MV_01.jpg\" /> <!--⑥-->";
    }

    public function getTemplateName()
    {
        return "__string_template__552992e2add7ee1820633a7a915f8b6fc030ed257a0a77e34de1099cf82a522a";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__552992e2add7ee1820633a7a915f8b6fc030ed257a0a77e34de1099cf82a522a", "");
    }
}
