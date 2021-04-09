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

/* default/template/product/category.twig */
class __TwigTemplate_85f456ec7df691e7e5c6495d15dad2205b0245c72889d917122fafe838499a78 extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo "
<div id=\"product-category\" class=\"container\">
  <ul class=\"breadcrumb\">

    ";
        // line 5
        $context["breadcrumb_last"] = twig_last($this->env, ($context["breadcrumbs"] ?? null));
        // line 6
        echo "      
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 8
            echo "    
    ";
            // line 9
            if ((twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 9) != twig_get_attribute($this->env, $this->source, ($context["breadcrumb_last"] ?? null), "href", [], "any", false, false, false, 9))) {
                // line 10
                echo "    <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 10);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 10);
                echo "</a></li>
    ";
            } else {
                // line 12
                echo "    <li>";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
                echo "</li>
    ";
            }
            // line 14
            echo "      
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "  </ul>
  <div class=\"row\">";
        // line 17
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 18
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 19
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 20
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 21
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 22
            echo "    ";
        } else {
            // line 23
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 24
            echo "    ";
        }
        // line 25
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <h1>";
        // line 26
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      ";
        // line 27
        if ((($context["thumb"] ?? null) || ($context["description"] ?? null))) {
            // line 28
            echo "      <div class=\"row\"> ";
            if (($context["thumb"] ?? null)) {
                // line 29
                echo "        <div class=\"col-sm-2\"><img src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" class=\"img-thumbnail\" /></div>
        ";
            }
            // line 31
            echo "        ";
            if (($context["description"] ?? null)) {
                // line 32
                echo "        <div class=\"col-sm-10\">";
                echo ($context["description"] ?? null);
                echo "</div>
        ";
            }
            // line 33
            echo "</div>
      <hr>
      ";
        }
        // line 36
        echo "      ";
        if (($context["categories"] ?? null)) {
            // line 37
            echo "      <h3>";
            echo ($context["text_refine"] ?? null);
            echo "</h3>
      ";
            // line 38
            if ((twig_length_filter($this->env, ($context["categories"] ?? null)) <= 5)) {
                // line 39
                echo "      <div class=\"row\">
        <div class=\"col-sm-3\">
          <ul>
            ";
                // line 42
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 43
                    echo "            <li><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 43);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 43);
                    echo "</a></li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo "          </ul>
        </div>
      </div>
      ";
            } else {
                // line 49
                echo "      <div class=\"row\">";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_batch(($context["categories"] ?? null), twig_round((twig_length_filter($this->env, ($context["categories"] ?? null)) / 4), 1, "ceil")));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 50
                    echo "        <div class=\"col-sm-3\">
          <ul>
            ";
                    // line 52
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["category"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 53
                        echo "            <li><a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 53);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 53);
                        echo "</a></li>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 55
                    echo "          </ul>
        </div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 57
                echo "</div>
      <br />
      ";
            }
            // line 60
            echo "      ";
        }
        // line 61
        echo "      ";
        if (($context["products"] ?? null)) {
            // line 62
            echo "      <div class=\"row\">
        <div class=\"col-md-2 col-sm-6 hidden-xs\">
          <div class=\"btn-group btn-group-sm\">
            <button type=\"button\" id=\"list-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
            // line 65
            echo ($context["button_list"] ?? null);
            echo "\"><i class=\"fa fa-th-list\"></i></button>
            <button type=\"button\" id=\"grid-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
            // line 66
            echo ($context["button_grid"] ?? null);
            echo "\"><i class=\"fa fa-th\"></i></button>
          </div>
        </div>
        <div class=\"col-md-3 col-sm-6\">
          <div class=\"form-group\"><a href=\"";
            // line 70
            echo ($context["compare"] ?? null);
            echo "\" id=\"compare-total\" class=\"btn btn-link\">";
            echo ($context["text_compare"] ?? null);
            echo "</a></div>
        </div>
        <div class=\"col-md-4 col-xs-6\">
          <div class=\"form-group input-group input-group-sm\">
            <label class=\"input-group-addon\" for=\"input-sort\">";
            // line 74
            echo ($context["text_sort"] ?? null);
            echo "</label>
            <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
              
              
              
              ";
            // line 79
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 80
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 80) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 81
                    echo "              
              
              
              <option value=\"";
                    // line 84
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 84);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 84);
                    echo "</option>
              
              
              
              ";
                } else {
                    // line 89
                    echo "              
              
              
              <option value=\"";
                    // line 92
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 92);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 92);
                    echo "</option>
              
              
              
              ";
                }
                // line 97
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "            
            
            
            </select>
          </div>
        </div>
        <div class=\"col-md-3 col-xs-6\">
          <div class=\"form-group input-group input-group-sm\">
            <label class=\"input-group-addon\" for=\"input-limit\">";
            // line 106
            echo ($context["text_limit"] ?? null);
            echo "</label>
            <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
              
              
              
              ";
            // line 111
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 112
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 112) == ($context["limit"] ?? null))) {
                    // line 113
                    echo "              
              
              
              <option value=\"";
                    // line 116
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 116);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 116);
                    echo "</option>
              
              
              
              ";
                } else {
                    // line 121
                    echo "              
              
              
              <option value=\"";
                    // line 124
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 124);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 124);
                    echo "</option>
              
              
              
              ";
                }
                // line 129
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 130
            echo "            
            
            
            </select>
          </div>
        </div>
      </div>
      <div class=\"row\"> ";
            // line 137
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 138
                echo "        <div class=\"product-layout product-list col-xs-12\">
          <div class=\"product-thumb\">
            <div class=\"image\"><a href=\"";
                // line 140
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 140);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 140);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 140);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 140);
                echo "\" class=\"img-responsive\" /></a></div>
            <div>
              <div class=\"caption\">
                <h4><a href=\"";
                // line 143
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 143);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 143);
                echo "</a></h4>
                <p>";
                // line 144
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 144);
                echo "</p>
                ";
                // line 145
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 145)) {
                    // line 146
                    echo "                <p class=\"price\"> ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 146)) {
                        // line 147
                        echo "                  ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 147);
                        echo "
                  ";
                    } else {
                        // line 148
                        echo " <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 148);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 148);
                        echo "</span> ";
                    }
                    // line 149
                    echo "                  ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 149)) {
                        echo " <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 149);
                        echo "</span> ";
                    }
                    echo " </p>
                ";
                }
                // line 151
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 151)) {
                    // line 152
                    echo "                <div class=\"rating\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 153
                        echo "                  ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 153) < $context["i"])) {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                        } else {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>";
                        }
                        // line 154
                        echo "                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " </div>
                ";
                }
                // line 155
                echo " </div>
              <div class=\"button-group\">
                <button type=\"button\" onclick=\"cart.add('";
                // line 157
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 157);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 157);
                echo "');\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
                echo ($context["button_cart"] ?? null);
                echo "</span></button>
                <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 158
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 158);
                echo "');\"><i class=\"fa fa-heart\"></i></button>
                <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 159
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 159);
                echo "');\"><i class=\"fa fa-exchange\"></i></button>
              </div>
            </div>
          </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 164
            echo " </div>
      <div class=\"row\">
        <div class=\"col-sm-6 text-left\">";
            // line 166
            echo ($context["pagination"] ?? null);
            echo "</div>
        <div class=\"col-sm-6 text-right\">";
            // line 167
            echo ($context["results"] ?? null);
            echo "</div>
      </div>
      ";
        }
        // line 170
        echo "      
      ";
        // line 171
        if (($context["informations"] ?? null)) {
            // line 172
            echo "      ";
            if (((($context["view_show"] ?? null) || ($context["sort_show"] ?? null)) || ($context["limit_show"] ?? null))) {
                // line 173
                echo "      <div class=\"row\">
        ";
                // line 174
                if (($context["view_show"] ?? null)) {
                    // line 175
                    echo "        <div class=\"col-sm-5 hidden-xs\">
          <div class=\"btn-group btn-group-sm\">
            <button type=\"button\" id=\"information-block-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
                    // line 177
                    echo ($context["button_block"] ?? null);
                    echo "\"><i class=\"fa fa-align-justify\"></i></button>
            <button type=\"button\" id=\"information-list-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
                    // line 178
                    echo ($context["button_list"] ?? null);
                    echo "\"><i class=\"fa fa-th-list\"></i></button>
            <button type=\"button\" id=\"information-grid-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
                    // line 179
                    echo ($context["button_grid"] ?? null);
                    echo "\"><i class=\"fa fa-th\"></i></button>
          </div>
        </div>
        ";
                }
                // line 183
                echo "        ";
                if (($context["sort_show"] ?? null)) {
                    // line 184
                    echo "        <div class=\"col-sm-4 col-xs-6 ";
                    echo ((( !($context["limit_show"] ?? null) ||  !($context["view_show"] ?? null))) ? ("col-sm-offset-5 col-xs-offset-6") : (""));
                    echo "\">
          <div class=\"form-group input-group input-group-sm\">
            <label class=\"input-group-addon\" for=\"input-sort\">";
                    // line 186
                    echo ($context["text_sort"] ?? null);
                    echo "</label>
            <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
              ";
                    // line 188
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["sorts"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                        // line 189
                        echo "              ";
                        if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 189) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                            // line 190
                            echo "              <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 190);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 190);
                            echo "</option>
              ";
                        } else {
                            // line 192
                            echo "              <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 192);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 192);
                            echo "</option>
              ";
                        }
                        // line 194
                        echo "              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 195
                    echo "            </select>
          </div>
        </div>
        ";
                }
                // line 199
                echo "        ";
                if (($context["limit_show"] ?? null)) {
                    // line 200
                    echo "        <div class=\"col-sm-3 col-xs-6 ";
                    echo (( !($context["sort_show"] ?? null)) ? ("col-sm-offset-4 col-xs-offset-6") : (""));
                    echo " ";
                    echo (( !($context["view_show"] ?? null)) ? ("pull-right") : (""));
                    echo "\">
          <div class=\"form-group input-group input-group-sm\">
            <label class=\"input-group-addon\" for=\"input-limit\">";
                    // line 202
                    echo ($context["text_limit"] ?? null);
                    echo "</label>
            <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
              ";
                    // line 204
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["limits"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                        // line 205
                        echo "              ";
                        if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 205) == ($context["limit"] ?? null))) {
                            // line 206
                            echo "              <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 206);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 206);
                            echo "</option>
              ";
                        } else {
                            // line 208
                            echo "              <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 208);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 208);
                            echo "</option>
              ";
                        }
                        // line 210
                        echo "              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 211
                    echo "            </select>
          </div>
        </div>
        ";
                }
                // line 215
                echo "      </div>
      ";
            }
            // line 217
            echo "      <div class=\"row\">
        ";
            // line 218
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 219
                echo "        <div class=\"information-layout ";
                echo ($context["view"] ?? null);
                echo " col-xs-12\">
          <div class=\"thumbnail media\">
            ";
                // line 221
                if (twig_get_attribute($this->env, $this->source, $context["information"], "thumb", [], "any", false, false, false, 221)) {
                    // line 222
                    echo "            <div class=\"image pull-left\"><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 222);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["information"], "thumb", [], "any", false, false, false, 222);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 222);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 222);
                    echo "\" class=\"img-responsive\" /></a></div>
            ";
                }
                // line 224
                echo "            <div class=\"caption media-body\">
              <h4><a href=\"";
                // line 225
                echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 225);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 225);
                echo "</a></h4>
              ";
                // line 226
                if (((($context["show_author"] ?? null) || ($context["show_date"] ?? null)) || ($context["show_review"] ?? null))) {
                    // line 227
                    echo "              <ul class=\"list-inline text-muted small\">
                ";
                    // line 228
                    if (($context["show_date"] ?? null)) {
                        // line 229
                        echo "                <li><i class=\"fa fa-calendar-o\" aria-hidden=\"true\"></i> ";
                        echo twig_get_attribute($this->env, $this->source, $context["information"], "date_added", [], "any", false, false, false, 229);
                        echo "</li>
                ";
                    }
                    // line 231
                    echo "                ";
                    if (($context["show_author"] ?? null)) {
                        // line 232
                        echo "                <li><i class=\"fa fa-user-o\" aria-hidden=\"true\"></i> ";
                        echo twig_get_attribute($this->env, $this->source, $context["information"], "author", [], "any", false, false, false, 232);
                        echo "</li>
                ";
                    }
                    // line 234
                    echo "                ";
                    if (($context["show_review"] ?? null)) {
                        // line 235
                        echo "                <li><i class=\"fa fa-comment-o\" aria-hidden=\"true\"></i> ";
                        echo twig_get_attribute($this->env, $this->source, $context["information"], "reviews", [], "any", false, false, false, 235);
                        echo "</li>
                ";
                    }
                    // line 237
                    echo "                ";
                    if (twig_get_attribute($this->env, $this->source, $context["information"], "rating", [], "any", false, false, false, 237)) {
                        // line 238
                        echo "                <li class=\"rating\"> ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(1, 5));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            // line 239
                            echo "                  ";
                            if ((twig_get_attribute($this->env, $this->source, $context["information"], "rating", [], "any", false, false, false, 239) < $context["i"])) {
                                echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                            } else {
                                echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>";
                            }
                            // line 240
                            echo "                  ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        echo " </li>
                ";
                    }
                    // line 242
                    echo "              </ul>
              ";
                }
                // line 244
                echo "              <p>";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "description", [], "any", false, false, false, 244);
                echo "</p>
              <a href=\"";
                // line 245
                echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 245);
                echo "\" type=\"button\" class=\"btn btn-primary\" title=\"";
                echo ($context["text_read"] ?? null);
                echo "\">";
                echo ($context["text_read"] ?? null);
                echo "</a>
            </div>
          </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 250
            echo "      </div>
      <div class=\"row\">
        <div class=\"col-sm-6 text-left\">";
            // line 252
            echo ($context["pagination"] ?? null);
            echo "</div>
        <div class=\"col-sm-6 text-right\">";
            // line 253
            echo ($context["results"] ?? null);
            echo "</div>
      </div>
      ";
        }
        // line 256
        echo "      
      ";
        // line 257
        if (((( !($context["categories"] ?? null) &&  !($context["products"] ?? null)) &&  !($context["informations"] ?? null)) &&  !($context["category_information"] ?? null))) {
            // line 258
            echo "        
      <p>";
            // line 259
            echo ($context["text_empty"] ?? null);
            echo "</p>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
            // line 261
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
      </div>
      ";
        }
        // line 264
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 265
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 267
        echo ($context["footer"] ?? null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "default/template/product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  797 => 267,  792 => 265,  787 => 264,  779 => 261,  774 => 259,  771 => 258,  769 => 257,  766 => 256,  760 => 253,  756 => 252,  752 => 250,  737 => 245,  732 => 244,  728 => 242,  719 => 240,  712 => 239,  707 => 238,  704 => 237,  698 => 235,  695 => 234,  689 => 232,  686 => 231,  680 => 229,  678 => 228,  675 => 227,  673 => 226,  667 => 225,  664 => 224,  652 => 222,  650 => 221,  644 => 219,  640 => 218,  637 => 217,  633 => 215,  627 => 211,  621 => 210,  613 => 208,  605 => 206,  602 => 205,  598 => 204,  593 => 202,  585 => 200,  582 => 199,  576 => 195,  570 => 194,  562 => 192,  554 => 190,  551 => 189,  547 => 188,  542 => 186,  536 => 184,  533 => 183,  526 => 179,  522 => 178,  518 => 177,  514 => 175,  512 => 174,  509 => 173,  506 => 172,  504 => 171,  501 => 170,  495 => 167,  491 => 166,  487 => 164,  473 => 159,  467 => 158,  459 => 157,  455 => 155,  446 => 154,  439 => 153,  434 => 152,  431 => 151,  419 => 149,  412 => 148,  406 => 147,  403 => 146,  401 => 145,  397 => 144,  391 => 143,  379 => 140,  375 => 138,  371 => 137,  362 => 130,  356 => 129,  346 => 124,  341 => 121,  331 => 116,  326 => 113,  323 => 112,  319 => 111,  311 => 106,  301 => 98,  295 => 97,  285 => 92,  280 => 89,  270 => 84,  265 => 81,  262 => 80,  258 => 79,  250 => 74,  241 => 70,  234 => 66,  230 => 65,  225 => 62,  222 => 61,  219 => 60,  214 => 57,  206 => 55,  195 => 53,  191 => 52,  187 => 50,  182 => 49,  176 => 45,  165 => 43,  161 => 42,  156 => 39,  154 => 38,  149 => 37,  146 => 36,  141 => 33,  135 => 32,  132 => 31,  122 => 29,  119 => 28,  117 => 27,  113 => 26,  106 => 25,  103 => 24,  100 => 23,  97 => 22,  94 => 21,  91 => 20,  88 => 19,  86 => 18,  82 => 17,  79 => 16,  72 => 14,  66 => 12,  58 => 10,  56 => 9,  53 => 8,  49 => 7,  46 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/product/category.twig", "");
    }
}
