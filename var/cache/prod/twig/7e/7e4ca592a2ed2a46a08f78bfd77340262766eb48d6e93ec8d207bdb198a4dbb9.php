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

/* __string_template__abff03394a4dfd2a8ff160f147d3ac2de405911c4caa248e1aa66b2904e2004a */
class __TwigTemplate_fef69abb9bce6143a335576282390f960b7969494b3eea780d6d7fb963d92a5c extends \Eccube\Twig\Template
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
        日常的によく使う洗剤。成分にこだわりたいけどコスパで選んでしまう。そういう方は結構多いのではないでしょうか。<br>コスパはもちろん大事ですが、日常的に使うものだからこそ、いいものを使うと気分が上がりますよね。<br>例えば、衣類や肌に優しかったり、香りが良かったり、パッケージがおしゃれだったりと。<br>
そんな、ワンランク上の日常を手に入れたい方におすすめなのが、こだわりの製法でマルセイユソープをつくり続けているFER a CHEVAL（フェールシュヴァル）の洗剤シリーズです。<br>
<br>
天然成分でつくられているため肌に優しく、敏感な赤ちゃんの衣類にも安心してご使用いただけます。<br>また、自然回帰する成分のみを使用しており、環境にも配慮された商品です。<br>
<br>
また、お肌だけでなく、大切な衣類にも優しい方がいいですよね。<br>
繊細な衣類の中には手洗いの必要なものもありますが、フレークタイプのマルセイユソープは手洗いにも適しています。<br>
<br>
パッケージはシンプルで洗練されたデザインで、ギフトとしてもおすすめです。<br>
最近赤ちゃんが産まれたご家庭に、離れて暮らすご家族や恋人に、お世話になっている大切な方に、普段と少し違ったプレゼントとしていかがでしょうか。<br>
<br>
日常的に使うものだからこそ、成分にこだわったワンランク上の製品を。<br>
マルセイユソープがあなたと大切な方のお肌を優しく守ります。
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__abff03394a4dfd2a8ff160f147d3ac2de405911c4caa248e1aa66b2904e2004a";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__abff03394a4dfd2a8ff160f147d3ac2de405911c4caa248e1aa66b2904e2004a", "");
    }
}
