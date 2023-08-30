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

/* @SortProduct4Plus/admin/index.twig */
class __TwigTemplate_3ffbb59edbde074b523c1f81fc1c191308c1dea4973c256142c7f9f1d259f996 extends \Eccube\Twig\Template
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
        // line 2
        return "@admin/default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        $context["menus"] = [0 => "product", 1 => "sort_product"];
        // line 2
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@SortProduct4Plus/admin/index.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sort_product.title"), "html", null, true);
    }

    // line 7
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sort_product.subtitle"), "html", null, true);
    }

    // line 9
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "
";
    }

    // line 13
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "    <meta http-equiv=\"Content-Script-Type\" content=\"text/javascript\">

    <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery.ui/jquery.ui.core.min.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery.ui/jquery.ui.widget.min.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery.ui/jquery.ui.mouse.min.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery.ui/jquery.ui.sortable.min.js", "admin"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\">

        ";
        // line 24
        echo "        var sortNoById = {};
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ProductPlus"]) {
            // line 26
            echo "            ";
            $context["id"] = twig_get_attribute($this->env, $this->source, $context["ProductPlus"], "product_id", [], "any", false, false, false, 26);
            // line 27
            echo "            sortNoById[";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "] = ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ProductPlus"], "sort_no", [], "any", false, false, false, 27), "html", null, true);
            echo ";
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ProductPlus'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "
        ";
        // line 31
        echo "        var sortNoByRank = {};

        \$(function() {

            ";
        // line 36
        echo "            refreshSortNoByRank();

            ";
        // line 39
        echo "            \$('.sortable-container').sortable({
                items: '> .sortable-item',
                cursor: 'move',
                update: function (e, ui) {
                    ";
        // line 44
        echo "                    var fromProductId = ui.item[0].dataset.id;
                    ";
        // line 46
        echo "                    \$('body').append(\$('<div class=\"modal-backdrop show\"></div>'));
                    ";
        // line 48
        echo "                    updateSortNo(fromProductId);
                }
            });

            ";
        // line 53
        echo "            var updateSortNo = function (fromProductId) {

                ";
        // line 56
        echo "                var rank = getRankById(fromProductId);

                ";
        // line 59
        echo "                var toSortNo = sortNoByRank[rank];

                \$.ajax({
                    url: '";
        // line 62
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("plg_SortProduct_product_rank_move");
        echo "',
                    type: 'POST',
                    data: {
                        ";
        // line 66
        echo "                        'from_id': fromProductId,
                        ";
        // line 68
        echo "                        'to_id':   toSortNo,
                        ";
        // line 69
        if ((($context["category_id"] ?? null) != null)) {
            echo "'category_id': ";
            echo twig_escape_filter($this->env, ($context["category_id"] ?? null), "html", null, true);
            echo ",";
        }
        // line 70
        echo "                        'page_no': ";
        echo twig_escape_filter($this->env, ($context["page_no"] ?? null), "html", null, true);
        echo ",
                        'page_count': ";
        // line 71
        echo twig_escape_filter($this->env, ($context["page_count"] ?? null), "html", null, true);
        echo "
                    }
                }).done(function(result){
                    ";
        // line 75
        echo "                    setSortNo(JSON.parse(result));

                }).always(function () {
                    ";
        // line 79
        echo "                    \$(\".modal-backdrop\").remove();
                });
            };

        });

        ";
        // line 86
        echo "        function getRankById(id) {
            ";
        // line 88
        echo "            var rank = 1;
            var result = null;
            ";
        // line 91
        echo "            \$('.sortable-item').each(function () {
                if (this.dataset.id == id) {
                    result = rank;
                }
                rank++;
            });

            return result;
        }

        ";
        // line 102
        echo "        function setSortNo(result) {

            ";
        // line 105
        echo "            sortNoById = result;

            ";
        // line 108
        echo "            var rank = 1;
            \$('.sortable-item').each(function () {

                var id = this.dataset.id;

                ";
        // line 114
        echo "                \$('#rank_view_' + id).text(rank);
                rank++;

                ";
        // line 117
        if ((($context["onDebug"] ?? null) == true)) {
            // line 118
            echo "                    ";
            // line 119
            echo "                    \$('#sort_no_view_' + id).html('[' + sortNoById[id] + ']');
                ";
        }
        // line 121
        echo "            });

            ";
        // line 124
        echo "            refreshSortNoByRank();

            return true;
        }

        ";
        // line 130
        echo "        function refreshSortNoByRank() {
            ";
        // line 132
        echo "            sortNoByRank = {};

            ";
        // line 135
        echo "            var rank = 1;
            ";
        // line 137
        echo "            \$('.sortable-item').each(function () {
                ";
        // line 139
        echo "                var id = this.dataset.id;
                ";
        // line 141
        echo "                sortNoByRank[rank] = sortNoById[id];
                rank++;
            });

            return true;
        }


        ";
        // line 150
        echo "        function clickMoveRankButton(fromId, selectBoxNo) {

            ";
        // line 153
        echo "            var fromProductId = parseInt(fromId);

            ";
        // line 156
        echo "            ";
        // line 157
        echo "            var toRank = parseInt(\$('#text_box_' + selectBoxNo).val());

            ";
        // line 160
        echo "            var selector = '#changeRankForm';
            ";
        // line 162
        echo "            var html ='';
            ";
        // line 164
        echo "            html +='<input type=\"hidden\" name=\"from_id\" value=\"' + fromProductId + '\">';
            ";
        // line 166
        echo "            html +='<input type=\"hidden\" name=\"to_id\" value=\"' + toRank + '\">';
            addHTML(selector, html);
            ";
        // line 169
        echo "            \$(selector).submit();
        }

        function addHTML(selector,html){
            \$(selector).append(html);
            return true;
        }

    </script>


";
    }

    // line 182
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 183
        echo "
    ";
        // line 184
        if ( !(null === ($context["category_id"] ?? null))) {
            // line 185
            echo "        ";
            $context["actionLink"] = $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl(($context["this_page_by"] ?? null), ["categoryId" => ($context["category_id"] ?? null)]);
            // line 186
            echo "    ";
        } else {
            // line 187
            echo "        ";
            $context["actionLink"] = $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl(($context["this_page"] ?? null));
            // line 188
            echo "    ";
        }
        // line 189
        echo "
    ";
        // line 191
        echo "    ";
        if ((null === ($context["category_id"] ?? null))) {
            // line 192
            echo "    <form id=\"changeRankForm\" method=\"post\" action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("plugin_SortProduct", ["page_no" => ($context["page_no"] ?? null), "page_count" => ($context["page_count"] ?? null)]), "html", null, true);
            echo "\">
    ";
        } else {
            // line 194
            echo "    <form id=\"changeRankForm\" method=\"post\" action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("plugin_SortProduct_byCategory", ["categoryId" => ($context["category_id"] ?? null), "page_no" => ($context["page_no"] ?? null), "page_count" => ($context["page_count"] ?? null)]), "html", null, true);
            echo "\">
    ";
        }
        // line 196
        echo "    </form>

    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                <div class=\"card rounded border-0 mb-4\">
                    ";
        // line 202
        if ((twig_length_filter($this->env, ($context["pagination"] ?? null)) <= 0)) {
            // line 203
            echo "
                        ";
            // line 205
            echo "                        <div class=\"card-header\">
                            ";
            // line 206
            if ((($context["category_id"] ?? null) == null)) {
                // line 207
                echo "                                ";
                // line 208
                echo "                                ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sort_product.header.no_product"), "html", null, true);
                echo "
                            ";
            } else {
                // line 210
                echo "                                ";
                // line 211
                echo "                                ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sort_product.header.no_product_cat"), "html", null, true);
                echo "
                            ";
            }
            // line 213
            echo "                        </div>

                    ";
        } else {
            // line 216
            echo "                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-9\">
                                    ";
            // line 219
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sort_product.header"), "html", null, true);
            echo "
                                </div>

                                <!-- 表示件数指定 -->
                                <div class=\"col-3 text-right\">
                                    <div class=\"d-inline-block mr-2\">
                                        <div>
                                            <select class=\"custom-select\" onchange=\"location = this.value;\">
                                                ";
            // line 227
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pageMaxis"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["pageMax"]) {
                // line 228
                echo "                                                    ";
                $context["pageLink"] = $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath(($context["this_page"] ?? null), ["page_no" => 1, "page_count" => twig_get_attribute($this->env, $this->source, $context["pageMax"], "name", [], "any", false, false, false, 228)]);
                // line 229
                echo "                                                    ";
                if ( !(null === ($context["category_id"] ?? null))) {
                    // line 230
                    echo "                                                        ";
                    $context["pageLink"] = $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath(($context["this_page_by"] ?? null), ["categoryId" => ($context["category_id"] ?? null), "page_no" => 1, "page_count" => twig_get_attribute($this->env, $this->source, $context["pageMax"], "name", [], "any", false, false, false, 230)]);
                    // line 231
                    echo "                                                    ";
                }
                // line 232
                echo "                                                    <option ";
                if ((twig_get_attribute($this->env, $this->source, $context["pageMax"], "name", [], "any", false, false, false, 232) == ($context["page_count"] ?? null))) {
                    echo "selected=\"selected\"";
                }
                // line 233
                echo "                                                            value=\"";
                echo twig_escape_filter($this->env, ($context["pageLink"] ?? null), "html", null, true);
                echo "\">
                                                        ";
                // line 234
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.count", ["%count%" => twig_get_attribute($this->env, $this->source, $context["pageMax"], "name", [], "any", false, false, false, 234)]), "html", null, true);
                echo "
                                                    </option>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pageMax'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 237
            echo "                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div><!-- /.box-header -->

                        <div class=\"card-body p-0\">
                            <div class=\"card rounded border-0 mb-2\">
                                <table class=\"table table-sm\">
                                    <thead>
                                        <tr>
                                            <th class=\"border-top-0 pl-3 pt-2 pb-2\"><i class=\"fa fa-bars text-ec-gray\"></i></th>
                                            <th class=\"border-top-0 pt-2 pb-2\">表示順</th>
                                            <th class=\"border-top-0 pt-2 pb-2\">並び順</th>
                                            <th class=\"border-top-0 pt-2 pb-2\">ID</th>
                                            <th class=\"border-top-0 pt-2 pb-2\">画像</th>
                                            <th class=\"border-top-0 pt-2 pb-2\">商品名</th>
                                            <th class=\"border-top-0 pt-2 pb-2 text-nowrap\">公開状態</th>
                                            <th class=\"border-top-0 pt-2 pb-2 text-nowrap\">Sort No</th>
                                        </tr>
                                    </thead>
                                    <tbody class=\"sortable-container\">
                                        ";
            // line 262
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["ProductPlus"]) {
                // line 263
                echo "                                            ";
                $context["id"] = twig_get_attribute($this->env, $this->source, $context["ProductPlus"], "product_id", [], "any", false, false, false, 263);
                // line 264
                echo "                                            <tr class=\" sortable-item\" data-id=\"";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "\" data-sort_no=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ProductPlus"], "sort_no", [], "any", false, false, false, 264), "html", null, true);
                echo "\" style=\"background: white;\">
                                                <td class=\"align-middle pl-3 mode-view\">
                                                    <i class=\"fa fa-bars text-ec-gray\"></i>
                                                </td>

                                                ";
                // line 270
                echo "                                                ";
                // line 271
                echo "                                                ";
                $context["this_no"] = (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 271) + (($context["page_count"] ?? null) * (($context["page_no"] ?? null) - 1)));
                // line 272
                echo "                                                <td id=\"rank_view_";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "\" class=\"align-middle\">
                                                    ";
                // line 273
                echo twig_escape_filter($this->env, ($context["this_no"] ?? null), "html", null, true);
                echo "
                                                </td>

                                                ";
                // line 277
                echo "                                                <td class=\"align-middle\">
                                                    <input type=\"number\" id=\"text_box_";
                // line 278
                echo twig_escape_filter($this->env, ($context["this_no"] ?? null), "html", null, true);
                echo "\" class=\"form-control\" style=\"width:50%; display: inline-block;\" placeholder=\"(1〜";
                echo twig_escape_filter($this->env, ($context["maxRank"] ?? null), "html", null, true);
                echo ")\" />
                                                    &nbsp;
                                                    <button type=\"button\" id=\"changeRank\" class=\"btn btn-ec-conversion\"
                                                            onclick=\"clickMoveRankButton('";
                // line 281
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ProductPlus"], "product_id", [], "any", false, false, false, 281), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, ($context["this_no"] ?? null), "html", null, true);
                echo "')\" >";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sort_product.move.button"), "html", null, true);
                echo "</button>
                                                </td>
                                                ";
                // line 284
                echo "
                                                ";
                // line 286
                echo "                                                <td class=\"align-middle\">
                                                    ";
                // line 287
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ProductPlus"], "product_id", [], "any", false, false, false, 287), "html", null, true);
                echo "
                                                </td>
                                                ";
                // line 290
                echo "                                                <td class=\"align-middle\">
                                                    <a href=\"";
                // line 291
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product_product_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["ProductPlus"], "product_id", [], "any", false, false, false, 291)]), "html", null, true);
                echo "\">
                                                        <img src=\"";
                // line 292
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ProductPlus"], "Product", [], "any", false, false, false, 292), "mainFileName", [], "any", false, false, false, 292)), "save_image"), "html", null, true);
                echo "\" style=\"max-width: 60px\" />
                                                    </a>
                                                </td>

                                                ";
                // line 297
                echo "                                                <td id=\"sortable_list__item_body--";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ProductPlus"], "sort_no", [], "any", false, false, false, 297), "html", null, true);
                echo "\" class=\"align-middle\">
                                                    ";
                // line 298
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ProductPlus"], "Product", [], "any", false, false, false, 298), "name", [], "any", false, false, false, 298), "html", null, true);
                echo "
                                                </td>

                                                ";
                // line 302
                echo "                                                <td class=\"align-middle\">
                                                    ";
                // line 303
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ProductPlus"], "Product", [], "any", false, false, false, 303), "Status", [], "any", false, false, false, 303), "id", [], "any", false, false, false, 303) == 1)) {
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ProductPlus"], "Product", [], "any", false, false, false, 303), "Status", [], "any", false, false, false, 303), "name", [], "any", false, false, false, 303), "html", null, true);
                } else {
                    echo "<span style=\"color:red;\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ProductPlus"], "Product", [], "any", false, false, false, 303), "Status", [], "any", false, false, false, 303), "name", [], "any", false, false, false, 303), "html", null, true);
                    echo "</span>";
                }
                // line 304
                echo "                                                </td>

                                                ";
                // line 307
                echo "                                                <td class=\"align-middle\">
                                                    ";
                // line 308
                if ((($context["onDebug"] ?? null) == true)) {
                    echo "<span id=\"sort_no_view_";
                    echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                    echo "\">[";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ProductPlus"], "sort_no", [], "any", false, false, false, 308), "html", null, true);
                    echo "]</span>";
                }
                // line 309
                echo "                                                </td>
                                            </tr>
                                        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ProductPlus'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 312
            echo "                                        ";
            // line 313
            echo "                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class=\"row justify-content-md-center mb-4\">
                            ";
            // line 319
            echo "                            ";
            if ((twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "totalItemCount", [], "any", false, false, false, 319) > 0)) {
                // line 320
                echo "                                ";
                if ( !(null === ($context["category_id"] ?? null))) {
                    // line 321
                    echo "                                    ";
                    $this->loadTemplate("SortProduct4Plus/Resource/template/admin/pager_custom.twig", "@SortProduct4Plus/admin/index.twig", 321)->display(twig_array_merge($context, ["pages" => twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "paginationData", [], "any", false, false, false, 321), "routes" => ($context["this_page_by"] ?? null), "categoryId" => ($context["category_id"] ?? null)]));
                    // line 322
                    echo "                                ";
                } else {
                    // line 323
                    echo "                                    ";
                    $this->loadTemplate("@admin/pager.twig", "@SortProduct4Plus/admin/index.twig", 323)->display(twig_array_merge($context, ["pages" => twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "paginationData", [], "any", false, false, false, 323), "routes" => ($context["this_page"] ?? null)]));
                    // line 324
                    echo "                                ";
                }
                // line 325
                echo "                            ";
            }
            // line 326
            echo "                            ";
            // line 327
            echo "                        </div>
                    ";
        }
        // line 329
        echo "                </div>
            </div>
        </div>

        <div class=\"c-contentsArea__secondaryCol\">
            <div class=\"c-secondaryCol\">
                <div class=\"card rounded border-0 mb-4\">
                    ";
        // line 337
        echo "                    ";
        if ((null === ($context["category_id"] ?? null))) {
            // line 338
            echo "                        ";
            $this->loadTemplate("SortProduct4Plus/Resource/template/admin/block/block_category_tree.twig", "@SortProduct4Plus/admin/index.twig", 338)->display(twig_to_array(["categoryId" => 0]));
            // line 339
            echo "                    ";
        } else {
            // line 340
            echo "                        ";
            $this->loadTemplate("SortProduct4Plus/Resource/template/admin/block/block_category_tree.twig", "@SortProduct4Plus/admin/index.twig", 340)->display(twig_to_array(["categoryId" => ($context["category_id"] ?? null)]));
            // line 341
            echo "                    ";
        }
        // line 342
        echo "                    ";
        // line 343
        echo "                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@SortProduct4Plus/admin/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  699 => 343,  697 => 342,  694 => 341,  691 => 340,  688 => 339,  685 => 338,  682 => 337,  673 => 329,  669 => 327,  667 => 326,  664 => 325,  661 => 324,  658 => 323,  655 => 322,  652 => 321,  649 => 320,  646 => 319,  639 => 313,  637 => 312,  621 => 309,  613 => 308,  610 => 307,  606 => 304,  598 => 303,  595 => 302,  589 => 298,  584 => 297,  577 => 292,  573 => 291,  570 => 290,  565 => 287,  562 => 286,  559 => 284,  550 => 281,  542 => 278,  539 => 277,  533 => 273,  528 => 272,  525 => 271,  523 => 270,  512 => 264,  509 => 263,  491 => 262,  465 => 237,  456 => 234,  451 => 233,  446 => 232,  443 => 231,  440 => 230,  437 => 229,  434 => 228,  430 => 227,  419 => 219,  414 => 216,  409 => 213,  403 => 211,  401 => 210,  395 => 208,  393 => 207,  391 => 206,  388 => 205,  385 => 203,  383 => 202,  375 => 196,  369 => 194,  363 => 192,  360 => 191,  357 => 189,  354 => 188,  351 => 187,  348 => 186,  345 => 185,  343 => 184,  340 => 183,  336 => 182,  321 => 169,  317 => 166,  314 => 164,  311 => 162,  308 => 160,  304 => 157,  302 => 156,  298 => 153,  294 => 150,  284 => 141,  281 => 139,  278 => 137,  275 => 135,  271 => 132,  268 => 130,  261 => 124,  257 => 121,  253 => 119,  251 => 118,  249 => 117,  244 => 114,  237 => 108,  233 => 105,  229 => 102,  217 => 91,  213 => 88,  210 => 86,  202 => 79,  197 => 75,  191 => 71,  186 => 70,  180 => 69,  177 => 68,  174 => 66,  168 => 62,  163 => 59,  159 => 56,  155 => 53,  149 => 48,  146 => 46,  143 => 44,  137 => 39,  133 => 36,  127 => 31,  124 => 29,  113 => 27,  110 => 26,  106 => 25,  103 => 24,  96 => 19,  92 => 18,  88 => 17,  84 => 16,  80 => 14,  76 => 13,  71 => 10,  67 => 9,  60 => 7,  53 => 6,  48 => 2,  46 => 4,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SortProduct4Plus/admin/index.twig", "/var/www/html/eccube-4-new/app/Plugin/SortProduct4Plus/Resource/template/admin/index.twig");
    }
}
