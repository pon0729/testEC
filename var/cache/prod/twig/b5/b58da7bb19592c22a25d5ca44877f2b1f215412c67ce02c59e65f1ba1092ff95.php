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

/* __string_template__bea278c65124abc6ee3a523df39de3ff9470ce2c6f0acd21e97bc6feaa57fe83 */
class __TwigTemplate_93067b200cd4d1e02c0386c7e86960dd97ee714b80f3579de07fcea6d191005e extends \Eccube\Twig\Template
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
        echo "<div class=\"product-description\">
    <div class=\"product-description__title\">
商品説明
    </div>
    <div class=\"product-description__contents\">
美容や健康のためにはビタミンを摂るのが良い。<br>その事実はよく知られていますが、どのビタミンをどれだけ摂れば良いのか、そのビタミンはどの食材に含まれているのか、すべてを知ろうとするには栄養の世界はとても奥が深く、難しいですよね。<br>
<br>
また、推奨される1日のビタミンの必要量を賄うには、30品目もの食品が必要と言われています。<br>ほとんどのビタミンは体内で合成することができないため、外から取り入れる必要があるのです。<br>
<br>
体に必要なビタミンは全部で13種類。<br> それぞれに役割が異なるため、バランスよく取り入れることが重要です。<br>
<br>
そんなビタミンを1粒にバランスよく配合したのがこちらのサプリメントです。<br>
<br>
寝不足や食生活の乱れが原因で肌荒れが気になる方、<br>
今よりもさらにお肌にツヤが欲しい方、<br>
風邪や感染症予防に気遣いたい方に。<br>
<br>
1日たった3粒の習慣で、周りから褒められる肌ツヤと、ワンランク上の健康を手に入れませんか。
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__bea278c65124abc6ee3a523df39de3ff9470ce2c6f0acd21e97bc6feaa57fe83";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__bea278c65124abc6ee3a523df39de3ff9470ce2c6f0acd21e97bc6feaa57fe83", "");
    }
}
