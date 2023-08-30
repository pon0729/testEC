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

/* @user_data/recommendation/recommendation.twig */
class __TwigTemplate_54bf330f06e3490281298fb34b82a6b4d47c8cde55ce0f1280351290e104dc5a extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheet' => [$this, 'block_stylesheet'],
            'javascript' => [$this, 'block_javascript'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $context["body_class"] = "front_page";
        // line 1
        $this->parent = $this->loadTemplate("default_frame.twig", "@user_data/recommendation/recommendation.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 8
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "<script>

</script>
";
    }

    // line 14
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "<div class=\"recommendation\">
    ";
        // line 21
        echo "    <div class=\"recommendation_banner\">
        <img class=\"recommendation_banner_SP\" src=\"/html/user_data/data/bathgoods_SP.jpg\">
        <img class=\"recommendation_banner_PC\" src=\"/html/user_data/data/bathgoods_PC.jpg\">
    </div>

    ";
        // line 27
        echo "    <div class=\"recommendation_text\">
        ";
        // line 35
        echo "    </div>

    ";
        // line 38
        echo "    <div class=\"recommendation_item_01\">
        <img class=\"recommendation_item_01_image\" src=\"/html/upload/save_image/1013225541_6166e55da5e55.png\" width=\"300px\" height=\"300px\" />
    
        <div class=\"recommendation_item_01_name\">
            <p>【CLAYD for bath】CANISTER SET 400</p>
        </div>
        
        <div class=\"recommendation_item_01_disc\">
            <p>天然成分100%、アメリカ西海岸のクレイを使用した入浴料。<br>
               遠赤外線が出ているCRAYDのクレイは温浴効果をサポートし、身体の芯まで温まります。<br>
               また、老廃物を取り去ったり、きめ細かさとみずみずしい潤い感のある肌へ。<br>
               そして、質の高い深い眠りへとなります。

        </div>
    
        <div class=\"recommendation_item_01_price\">
            <p>￥5,390</p>
        </div>
    
        <div class=\"recommendation_item_01_tax\">
            <p>(税込み)</p>
        </div>
    
        <button class=\"recommendation_item_01_button\" onclick=\"location.href='https://gift-communication.shop/products/detail/236'\">詳細を見る</button>
    </div>
    
    ";
        // line 65
        echo "    <div class=\"recommendation_item_02\">
        <img class=\"recommendation_item_02_image\" src=\"/html/upload/save_image/1013224932_6166e3ec74091.png\" width=\"300px\" height=\"300px\" />
    
        <div class=\"recommendation_item_02_name\">
            <p>【CLAYD for bath】ONETIME（2個）</p>
        </div>
        
        <div class=\"recommendation_item_02_disc\">
            <p>天然成分100%、アメリカ西海岸のクレイを使用した入浴料。<br>
               遠赤外線が出ているCRAYDのクレイは温浴効果をサポートし、身体の芯まで温まります。<br>
               また、老廃物を取り去ったり、きめ細かさとみずみずしい潤い感のある肌へ。<br>
               そして、質の高い深い眠りへとなります。
        </div>
    
        <div class=\"recommendation_item_02_price\">
            <p>￥1,100</p>
        </div>
    
        <div class=\"recommendation_item_02_tax\">
            <p>(税込み)</p>
        </div>
    
        <button class=\"recommendation_item_02_button\" onclick=\"location.href='https://gift-communication.shop/products/detail/234'\">詳細を見る</button>
    </div>
    
    ";
        // line 91
        echo "    <div class=\"recommendation_item_03\">
        <img class=\"recommendation_item_03_image\" src=\"/html/upload/save_image/1124234046_5fbd1b6e8a865.jpg\" width=\"300px\" height=\"300px\" />
    
        <div class=\"recommendation_item_03_name\">
            <p>スカルプヘアブラシプレミアム　ショート　ギフトセット（スタンド・携帯ケース付）【日本製】</p>
        </div>
        
        <div class=\"recommendation_item_03_disc\">
            <p>頭を洗う時に手で洗っている方必見。<br>
               手洗いでは落としにくい毛穴の皮脂汚れを効果的に落とすだけでなく、<br>
               頭皮から繋がる顔のたるみ防止などにも良い影響を与えます。<br>
               髪の毛を洗う新習慣にブラシを取り入れてみませんか。
</p>
        </div>
    
        <div class=\"recommendation_item_03_price\">
            <p>￥6,380</p>
        </div>
    
        <div class=\"recommendation_item_03_tax\">
            <p>(税込み)</p>
        </div>
    
        <button class=\"recommendation_item_03_button\" onclick=\"location.href='https://gift-communication.shop/products/detail/152'\">詳細を見る</button>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "@user_data/recommendation/recommendation.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 91,  117 => 65,  89 => 38,  85 => 35,  82 => 27,  75 => 21,  72 => 19,  68 => 14,  61 => 9,  57 => 8,  51 => 5,  46 => 1,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@user_data/recommendation/recommendation.twig", "/var/www/html/eccube-4-new/app/template/user_data/recommendation/recommendation.twig");
    }
}
