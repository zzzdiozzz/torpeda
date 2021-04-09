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

/* simplica/template/product/product.twig */
class __TwigTemplate_6c20a85aad2d63cb376186203a5f03385f23c2093019a57fb7e6e69a9f02ccc6 extends \Twig\Template
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
<div id=\"product-product\" class=\"container\">
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
      <div class=\"row\"> ";
        // line 26
        if ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 27
            echo "        ";
            $context["class"] = "col-sm-6";
            // line 28
            echo "        ";
        } else {
            // line 29
            echo "        ";
            $context["class"] = "col-sm-8";
            // line 30
            echo "        ";
        }
        // line 31
        echo "        <div class=\"";
        echo ($context["class"] ?? null);
        echo "\"> ";
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 32
            echo "          <ul class=\"thumbnails\">
            ";
            // line 33
            if (($context["thumb"] ?? null)) {
                // line 34
                echo "            <li><a class=\"thumbnail\" href=\"";
                echo ($context["popup"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\"><img src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" /></a></li>
            ";
            }
            // line 36
            echo "            ";
            if (($context["images"] ?? null)) {
                // line 37
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 38
                    echo "            <li class=\"image-additional\"><a class=\"thumbnail\" href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 38);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\"> <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 38);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" alt=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" /></a></li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 40
                echo "            ";
            }
            // line 41
            echo "          </ul>
          ";
        }
        // line 43
        echo "          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-description\" data-toggle=\"tab\">";
        // line 44
        echo ($context["tab_description"] ?? null);
        echo "</a></li>
            ";
        // line 45
        if (($context["attribute_groups"] ?? null)) {
            // line 46
            echo "            <li><a href=\"#tab-specification\" data-toggle=\"tab\">";
            echo ($context["tab_attribute"] ?? null);
            echo "</a></li>
            ";
        }
        // line 48
        echo "            ";
        if (($context["review_status"] ?? null)) {
            // line 49
            echo "            <li><a href=\"#tab-review\" data-toggle=\"tab\">";
            echo ($context["tab_review"] ?? null);
            echo "</a></li>
            ";
        }
        // line 51
        echo "          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-description\">";
        // line 53
        echo ($context["description"] ?? null);
        echo "</div>
            ";
        // line 54
        if (($context["attribute_groups"] ?? null)) {
            // line 55
            echo "            <div class=\"tab-pane\" id=\"tab-specification\">
              <table class=\"table table-bordered\">
                ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 58
                echo "                <thead>
                  <tr>
                    <td colspan=\"2\"><strong>";
                // line 60
                echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 60);
                echo "</strong></td>
                  </tr>
                </thead>
                <tbody>
                ";
                // line 64
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 64));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 65
                    echo "                <tr>
                  <td>";
                    // line 66
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 66);
                    echo "</td>
                  <td>";
                    // line 67
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 67);
                    echo "</td>
                </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 70
                echo "                  </tbody>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "              </table>
            </div>
            ";
        }
        // line 75
        echo "            ";
        if (($context["review_status"] ?? null)) {
            // line 76
            echo "            <div class=\"tab-pane\" id=\"tab-review\">
              <form class=\"form-horizontal\" id=\"form-review\">
                <div id=\"review\"></div>
                <h2>";
            // line 79
            echo ($context["text_write"] ?? null);
            echo "</h2>
                ";
            // line 80
            if (($context["review_guest"] ?? null)) {
                // line 81
                echo "                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\" for=\"input-name\">";
                // line 83
                echo ($context["entry_name"] ?? null);
                echo "</label>
                    <input type=\"text\" name=\"name\" value=\"";
                // line 84
                echo ($context["customer_name"] ?? null);
                echo "\" id=\"input-name\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\" for=\"input-review\">";
                // line 89
                echo ($context["entry_review"] ?? null);
                echo "</label>
                    <textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
                    <div class=\"help-block\">";
                // line 91
                echo ($context["text_note"] ?? null);
                echo "</div>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\">";
                // line 96
                echo ($context["entry_rating"] ?? null);
                echo "</label>
                    &nbsp;&nbsp;&nbsp; ";
                // line 97
                echo ($context["entry_bad"] ?? null);
                echo "&nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"1\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"2\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"3\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"4\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"5\" />
                    &nbsp;";
                // line 107
                echo ($context["entry_good"] ?? null);
                echo "</div>
                </div>
                ";
                // line 109
                echo ($context["captcha"] ?? null);
                echo "
                <div class=\"buttons clearfix\">
                  <div class=\"pull-right\">
                    <button type=\"button\" id=\"button-review\" data-loading-text=\"";
                // line 112
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"btn btn-primary\">";
                echo ($context["button_continue"] ?? null);
                echo "</button>
                  </div>
                </div>
                ";
            } else {
                // line 116
                echo "                ";
                echo ($context["text_login"] ?? null);
                echo "
                ";
            }
            // line 118
            echo "              </form>
            </div>
            ";
        }
        // line 120
        echo "</div>
        </div>
        ";
        // line 122
        if ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 123
            echo "        ";
            $context["class"] = "col-sm-6";
            // line 124
            echo "        ";
        } else {
            // line 125
            echo "        ";
            $context["class"] = "col-sm-4";
            // line 126
            echo "        ";
        }
        // line 127
        echo "        <div class=\"";
        echo ($context["class"] ?? null);
        echo "\">
          
          <h1>";
        // line 129
        echo ($context["heading_title"] ?? null);
        echo "</h1>
          <ul class=\"list-unstyled\">
            ";
        // line 131
        if (($context["manufacturer"] ?? null)) {
            // line 132
            echo "            <li>";
            echo ($context["text_manufacturer"] ?? null);
            echo " <a href=\"";
            echo ($context["manufacturers"] ?? null);
            echo "\">";
            echo ($context["manufacturer"] ?? null);
            echo "</a></li>
            ";
        }
        // line 134
        echo "            <li>";
        echo ($context["text_model"] ?? null);
        echo " ";
        echo ($context["model"] ?? null);
        echo "</li>
            ";
        // line 135
        if (($context["reward"] ?? null)) {
            // line 136
            echo "            <li>";
            echo ($context["text_reward"] ?? null);
            echo " ";
            echo ($context["reward"] ?? null);
            echo "</li>
            ";
        }
        // line 138
        echo "            <li>";
        echo ($context["text_stock"] ?? null);
        echo " ";
        echo ($context["stock"] ?? null);
        echo "</li>
          </ul>
          ";
        // line 140
        if (($context["price"] ?? null)) {
            // line 141
            echo "          <ul class=\"list-unstyled\">
            ";
            // line 142
            if ( !($context["special"] ?? null)) {
                // line 143
                echo "            <li>
              <h2>";
                // line 144
                echo ($context["price"] ?? null);
                echo "</h2>
            </li>
            ";
            } else {
                // line 147
                echo "            <li><span style=\"text-decoration: line-through;\">";
                echo ($context["price"] ?? null);
                echo "</span></li>
            <li>
              <h2>";
                // line 149
                echo ($context["special"] ?? null);
                echo "</h2>
            </li>
            ";
            }
            // line 152
            echo "            ";
            if (($context["tax"] ?? null)) {
                // line 153
                echo "            <li>";
                echo ($context["text_tax"] ?? null);
                echo " ";
                echo ($context["tax"] ?? null);
                echo "</li>
            ";
            }
            // line 155
            echo "            ";
            if (($context["points"] ?? null)) {
                // line 156
                echo "            <li>";
                echo ($context["text_points"] ?? null);
                echo " ";
                echo ($context["points"] ?? null);
                echo "</li>
            ";
            }
            // line 158
            echo "            ";
            if (($context["discounts"] ?? null)) {
                // line 159
                echo "            <li>
              <hr>
            </li>
            ";
                // line 162
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 163
                    echo "            <li>";
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 163);
                    echo ($context["text_discount"] ?? null);
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 163);
                    echo "</li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 165
                echo "            ";
            }
            // line 166
            echo "          </ul>
          ";
        }
        // line 168
        echo "          <div class=\"btn-group\">
            <button type=\"button\" data-toggle=\"tooltip\" class=\"btn btn-default\" title=\"";
        // line 169
        echo ($context["button_wishlist"] ?? null);
        echo "\" onclick=\"wishlist.add('";
        echo ($context["product_id"] ?? null);
        echo "');\"><i class=\"fa fa-heart\"></i></button>
            <button type=\"button\" data-toggle=\"tooltip\" class=\"btn btn-default\" title=\"";
        // line 170
        echo ($context["button_compare"] ?? null);
        echo "\" onclick=\"compare.add('";
        echo ($context["product_id"] ?? null);
        echo "');\"><i class=\"fa fa-exchange\"></i></button>
          </div>
          <div id=\"product\"> ";
        // line 172
        if (($context["options"] ?? null)) {
            // line 173
            echo "            <hr>
            <h3>";
            // line 174
            echo ($context["text_option"] ?? null);
            echo "</h3>
            ";
            // line 175
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 176
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 176) == "select")) {
                    // line 177
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 177)) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 178
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 178);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 178);
                    echo "</label>
              <select name=\"option[";
                    // line 179
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 179);
                    echo "]\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 179);
                    echo "\" class=\"form-control\">
                <option value=\"\">";
                    // line 180
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                ";
                    // line 181
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 181));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 182
                        echo "                <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 182);
                        echo "\" data-points=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "apo_points_value", [], "any", false, false, false, 182);
                        echo "\" data-prefix=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 182);
                        echo "\" data-price=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "apo_price_value", [], "any", false, false, false, 182);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 182);
                        echo "
                ";
                        // line 183
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 183)) {
                            // line 184
                            echo "                (";
                            if (((twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 184) == "+") || (twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 184) == "-"))) {
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 184);
                            }
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 184);
                            echo ")
                ";
                        }
                        // line 185
                        echo " </option>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 187
                    echo "              </select>
            </div>
            ";
                }
                // line 190
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 190) == "radio")) {
                    // line 191
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 191)) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\">";
                    // line 192
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 192);
                    echo "</label>
              <div id=\"input-option";
                    // line 193
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 193);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 193));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 194
                        echo "                <div class=\"radio\">
                  <label>
                    <input type=\"radio\" name=\"option[";
                        // line 196
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 196);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 196);
                        echo "\" data-points=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "apo_points_value", [], "any", false, false, false, 196);
                        echo "\" data-prefix=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 196);
                        echo "\" data-price=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "apo_price_value", [], "any", false, false, false, 196);
                        echo "\" />
                    ";
                        // line 197
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 197)) {
                            echo " <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 197);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 197);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 197)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 197);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 197);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\" /> ";
                        }
                        echo "                  
                    ";
                        // line 198
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 198);
                        echo "
                    ";
                        // line 199
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 199)) {
                            // line 200
                            echo "                    (";
                            if (((twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 200) == "+") || (twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 200) == "-"))) {
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 200);
                            }
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 200);
                            echo ")
                    ";
                        }
                        // line 201
                        echo " </label>
                </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 203
                    echo " </div>
            </div>
            ";
                }
                // line 206
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 206) == "checkbox")) {
                    // line 207
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 207)) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\">";
                    // line 208
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 208);
                    echo "</label>
              <div id=\"input-option";
                    // line 209
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 209);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 209));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 210
                        echo "                <div class=\"checkbox\">
                  <label>
                    <input type=\"checkbox\" name=\"option[";
                        // line 212
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 212);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 212);
                        echo "\" data-points=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "apo_points_value", [], "any", false, false, false, 212);
                        echo "\" data-prefix=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 212);
                        echo "\" data-price=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "apo_price_value", [], "any", false, false, false, 212);
                        echo "\" />
                    ";
                        // line 213
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 213)) {
                            echo " <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 213);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 213);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 213)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 213);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 213);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\" /> ";
                        }
                        // line 214
                        echo "                    ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 214);
                        echo "
                    ";
                        // line 215
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 215)) {
                            // line 216
                            echo "                    (";
                            if (((twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 216) == "+") || (twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 216) == "-"))) {
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 216);
                            }
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 216);
                            echo ")
                    ";
                        }
                        // line 217
                        echo " </label>
                </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 219
                    echo " </div>
            </div>
            ";
                }
                // line 222
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 222) == "text")) {
                    // line 223
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 223)) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 224
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 224);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 224);
                    echo "</label>
              <input type=\"text\" name=\"option[";
                    // line 225
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 225);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 225);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 225);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 225);
                    echo "\" class=\"form-control\" />
            </div>
            ";
                }
                // line 228
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 228) == "textarea")) {
                    // line 229
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 229)) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 230
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 230);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 230);
                    echo "</label>
              <textarea name=\"option[";
                    // line 231
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 231);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 231);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 231);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 231);
                    echo "</textarea>
            </div>
            ";
                }
                // line 234
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 234) == "file")) {
                    // line 235
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 235)) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\">";
                    // line 236
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 236);
                    echo "</label>
              <button type=\"button\" id=\"button-upload";
                    // line 237
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 237);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-default btn-block\"><i class=\"fa fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
              <input type=\"hidden\" name=\"option[";
                    // line 238
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 238);
                    echo "]\" value=\"\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 238);
                    echo "\" />
            </div>
            ";
                }
                // line 241
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 241) == "date")) {
                    // line 242
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 242)) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 243
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 243);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 243);
                    echo "</label>
              <div class=\"input-group date\">
                <input type=\"text\" name=\"option[";
                    // line 245
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 245);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 245);
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 245);
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 251
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 251) == "datetime")) {
                    // line 252
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 252)) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 253
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 253);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 253);
                    echo "</label>
              <div class=\"input-group datetime\">
                <input type=\"text\" name=\"option[";
                    // line 255
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 255);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 255);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 255);
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 261
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 261) == "time")) {
                    // line 262
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 262)) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 263
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 263);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 263);
                    echo "</label>
              <div class=\"input-group time\">
                <input type=\"text\" name=\"option[";
                    // line 265
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 265);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 265);
                    echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 265);
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 271
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 272
            echo "            ";
        }
        // line 273
        echo "            ";
        if (($context["recurrings"] ?? null)) {
            // line 274
            echo "            <hr>
            <h3>";
            // line 275
            echo ($context["text_payment_recurring"] ?? null);
            echo "</h3>
            <div class=\"form-group required\">
              <select name=\"recurring_id\" class=\"form-control\">
                <option value=\"\">";
            // line 278
            echo ($context["text_select"] ?? null);
            echo "</option>
                ";
            // line 279
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 280
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 280);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 280);
                echo "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 282
            echo "              </select>
              <div class=\"help-block\" id=\"recurring-description\"></div>
            </div>
            ";
        }
        // line 286
        echo "            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-quantity\">";
        // line 287
        echo ($context["entry_qty"] ?? null);
        echo "</label>
              <input type=\"text\" name=\"quantity\" value=\"";
        // line 288
        echo ($context["minimum"] ?? null);
        echo "\" size=\"2\" id=\"input-quantity\" class=\"form-control\" />
              <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 289
        echo ($context["product_id"] ?? null);
        echo "\" />
              <br />
              <button type=\"button\" id=\"button-cart\" data-loading-text=\"";
        // line 291
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary btn-lg btn-block\">";
        echo ($context["button_cart"] ?? null);
        echo "</button>
            </div>
            ";
        // line 293
        if ((($context["minimum"] ?? null) > 1)) {
            // line 294
            echo "            <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo ($context["text_minimum"] ?? null);
            echo "</div>
            ";
        }
        // line 295
        echo "</div>
          ";
        // line 296
        if (($context["review_status"] ?? null)) {
            // line 297
            echo "          <div class=\"rating\">
            <p>";
            // line 298
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 299
                echo "              ";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    echo "<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                } else {
                    echo "<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                }
                // line 300
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " <a href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
            echo ($context["reviews"] ?? null);
            echo "</a> / <a href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
            echo ($context["text_write"] ?? null);
            echo "</a></p>
            <hr>
            <!-- AddThis Button BEGIN -->
            <div class=\"addthis_toolbox addthis_default_style\" data-url=\"";
            // line 303
            echo ($context["share"] ?? null);
            echo "\"><a class=\"addthis_button_facebook_like\" fb:like:layout=\"button_count\"></a> <a class=\"addthis_button_tweet\"></a> <a class=\"addthis_button_pinterest_pinit\"></a> <a class=\"addthis_counter addthis_pill_style\"></a></div>
            <script type=\"text/javascript\" src=\"//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-515eeaf54693130e\"></script> 
            <!-- AddThis Button END --> 
          </div>
          ";
        }
        // line 307
        echo " </div>
      </div>
      ";
        // line 309
        if (($context["products"] ?? null)) {
            // line 310
            echo "      <h3>";
            echo ($context["text_related"] ?? null);
            echo "</h3>
      <div class=\"row\"> ";
            // line 311
            $context["i"] = 0;
            // line 312
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 313
                echo "        ";
                if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
                    // line 314
                    echo "        ";
                    $context["class"] = "col-xs-8 col-sm-6";
                    // line 315
                    echo "        ";
                } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
                    // line 316
                    echo "        ";
                    $context["class"] = "col-xs-6 col-md-4";
                    // line 317
                    echo "        ";
                } else {
                    // line 318
                    echo "        ";
                    $context["class"] = "col-xs-6 col-sm-3";
                    // line 319
                    echo "        ";
                }
                // line 320
                echo "        <div class=\"";
                echo ($context["class"] ?? null);
                echo "\">
          <div class=\"product-thumb transition\">
            <div class=\"image\"><a href=\"";
                // line 322
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 322);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 322);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 322);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 322);
                echo "\" class=\"img-responsive\" /></a></div>
            <div class=\"caption\">
              <h4><a href=\"";
                // line 324
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 324);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 324);
                echo "</a></h4>
              <p>";
                // line 325
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 325);
                echo "</p>
              ";
                // line 326
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 326)) {
                    // line 327
                    echo "              <div class=\"rating\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                        // line 328
                        echo "                ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 328) < $context["j"])) {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i></span> ";
                        } else {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span> ";
                        }
                        // line 329
                        echo "                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " </div>
              ";
                }
                // line 331
                echo "              ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 331)) {
                    // line 332
                    echo "              <p class=\"price\"> ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 332)) {
                        // line 333
                        echo "                ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 333);
                        echo "
                ";
                    } else {
                        // line 334
                        echo " <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 334);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 334);
                        echo "</span> ";
                    }
                    // line 335
                    echo "                ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 335)) {
                        echo " <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 335);
                        echo "</span> ";
                    }
                    echo " </p>
              ";
                }
                // line 336
                echo " </div>
            <div class=\"button-group\">
              <button type=\"button\" onclick=\"cart.add('";
                // line 338
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 338);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 338);
                echo "');\"><span class=\"hidden-xs hidden-sm hidden-md\">";
                echo ($context["button_cart"] ?? null);
                echo "</span> <i class=\"fa fa-shopping-cart\"></i></button>
              <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 339
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 339);
                echo "');\"><i class=\"fa fa-heart\"></i></button>
              <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 340
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 340);
                echo "');\"><i class=\"fa fa-exchange\"></i></button>
            </div>
          </div>
        </div>
        ";
                // line 344
                if (((($context["column_left"] ?? null) && ($context["column_right"] ?? null)) && (((($context["i"] ?? null) + 1) % 2) == 0))) {
                    // line 345
                    echo "        <div class=\"clearfix visible-md visible-sm\"></div>
        ";
                } elseif ((                // line 346
($context["column_left"] ?? null) || (($context["column_right"] ?? null) && (((($context["i"] ?? null) + 1) % 3) == 0)))) {
                    // line 347
                    echo "        <div class=\"clearfix visible-md\"></div>
        ";
                } elseif ((((                // line 348
($context["i"] ?? null) + 1) % 4) == 0)) {
                    // line 349
                    echo "        <div class=\"clearfix visible-md\"></div>
        ";
                }
                // line 351
                echo "        ";
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 352
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " </div>
        ";
        }
        // line 354
        echo "        ";
        if (($context["tags"] ?? null)) {
            // line 355
            echo "        <p>";
            echo ($context["text_tags"] ?? null);
            echo "
        ";
            // line 356
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, twig_length_filter($this->env, ($context["tags"] ?? null))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 357
                echo "        ";
                if (($context["i"] < (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1))) {
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["tags"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 357);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["tags"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 357);
                    echo "</a>,
        ";
                } else {
                    // line 358
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["tags"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 358);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["tags"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 358);
                    echo "</a> ";
                }
                // line 359
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " </p>
        ";
        }
        // line 361
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 362
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
<script type=\"text/javascript\"><!--
\$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function(){
\t\$.ajax({
\t\turl: 'index.php?route=product/product/getRecurringDescription',
\t\ttype: 'post',
\t\tdata: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#recurring-description').html('');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();

\t\t\tif (json['success']) {
\t\t\t\t\$('#recurring-description').html(json['success']);
\t\t\t}
\t\t}
\t});
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('#button-cart').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=checkout/cart/add',
\t\ttype: 'post',
\t\tdata: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-cart').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-cart').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

\t\t\tif (json['error']) {
\t\t\t\tif (json['error']['option']) {
\t\t\t\t\tfor (i in json['error']['option']) {
\t\t\t\t\t\tvar element = \$('#input-option' + i.replace('_', '-'));

\t\t\t\t\t\tif (element.parent().hasClass('input-group')) {
\t\t\t\t\t\t\telement.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\telement.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tif (json['error']['recurring']) {
\t\t\t\t\t\$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parent().addClass('has-error');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('.breadcrumb').after('<div class=\"alert alert-success alert-dismissible\">' + json['success'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\$('#cart > button').html('<span id=\"cart-total\"><i class=\"fa fa-shopping-cart\"></i> ' + json['total'] + '</span>');

\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');

\t\t\t\t\$('#cart > ul').load('index.php?route=common/cart/info ul li');
\t\t\t}
\t\t},
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
\t});
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 440
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickTime: false
});

\$('.datetime').datetimepicker({
\tlanguage: '";
        // line 445
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickDate: true,
\tpickTime: true
});

\$('.time').datetimepicker({
\tlanguage: '";
        // line 451
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickDate: false
});

\$('button[id^=\\'button-upload\\']').on('click', function() {
\tvar node = this;

\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\tif (typeof timer != 'undefined') {
    \tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(node).button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(node).button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$('.text-danger').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\$(node).parent().find('input').val(json['code']);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('#review').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    \$('#review').fadeOut('slow');

    \$('#review').load(this.href);

    \$('#review').fadeIn('slow');
});

\$('#review').load('index.php?route=product/product/review&product_id=";
        // line 518
        echo ($context["product_id"] ?? null);
        echo "');

\$('#button-review').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=product/product/write&product_id=";
        // line 522
        echo ($context["product_id"] ?? null);
        echo "',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tdata: \$(\"#form-review\").serialize(),
\t\tbeforeSend: function() {
\t\t\t\$('#button-review').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-review').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#review').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#review').after('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

\t\t\t\t\$('input[name=\\'name\\']').val('');
\t\t\t\t\$('textarea[name=\\'text\\']').val('');
\t\t\t\t\$('input[name=\\'rating\\']:checked').prop('checked', false);
\t\t\t}
\t\t}
\t});
});

\$(document).ready(function() {
\t\$('.thumbnails').magnificPopup({
\t\ttype:'image',
\t\tdelegate: 'a',
\t\tgallery: {
\t\t\tenabled: true
\t\t}
\t});
});
//--></script> 

<!--autocalc_price_option_v4-->
<script type=\"text/javascript\"><!--
function price_format(price) { 
c=";
        // line 564
        echo twig_get_attribute($this->env, $this->source, ($context["autocalc_currency"] ?? null), "decimals", [], "any", false, false, false, 564);
        echo ";d='";
        echo twig_get_attribute($this->env, $this->source, ($context["autocalc_currency"] ?? null), "decimal_point", [], "any", false, false, false, 564);
        echo "';t='";
        echo twig_get_attribute($this->env, $this->source, ($context["autocalc_currency"] ?? null), "thousand_point", [], "any", false, false, false, 564);
        echo "';sl='";
        echo twig_get_attribute($this->env, $this->source, ($context["autocalc_currency"] ?? null), "symbol_left", [], "any", false, false, false, 564);
        echo "';sr='";
        echo twig_get_attribute($this->env, $this->source, ($context["autocalc_currency"] ?? null), "symbol_right", [], "any", false, false, false, 564);
        echo "';n=price*";
        echo twig_get_attribute($this->env, $this->source, ($context["autocalc_currency"] ?? null), "value", [], "any", false, false, false, 564);
        echo ";i=parseInt(n=Math.abs(n).toFixed(c))+''; j=((j=i.length)>3)?j%3:0;price_text=sl+(j?i.substr(0,j)+t:'')+i.substr(j).replace(/(\\d{3})(?=\\d)/g,\"\$1\"+t)+(c?d+Math.abs(n-i).toFixed(c).slice(2):'')+sr;";
        if (($context["autocalc_currency2"] ?? null)) {
            echo "c=";
            echo twig_get_attribute($this->env, $this->source, ($context["autocalc_currency2"] ?? null), "decimals", [], "any", false, false, false, 564);
            echo ";d='";
            echo twig_get_attribute($this->env, $this->source, ($context["autocalc_currency2"] ?? null), "decimal_point", [], "any", false, false, false, 564);
            echo "';t='";
            echo twig_get_attribute($this->env, $this->source, ($context["autocalc_currency2"] ?? null), "thousand_point", [], "any", false, false, false, 564);
            echo "';sl='";
            echo twig_get_attribute($this->env, $this->source, ($context["autocalc_currency2"] ?? null), "symbol_left", [], "any", false, false, false, 564);
            echo "';sr='";
            echo twig_get_attribute($this->env, $this->source, ($context["autocalc_currency2"] ?? null), "symbol_right", [], "any", false, false, false, 564);
            echo "';n=price*";
            echo twig_get_attribute($this->env, $this->source, ($context["autocalc_currency2"] ?? null), "value", [], "any", false, false, false, 564);
            echo ";i=parseInt(n=Math.abs(n).toFixed(c))+''; j=((j=i.length)>3)?j%3:0; price_text+='  <span class=\"currency2\">(' + sl+(j?i.substr(0,j)+t:'')+i.substr(j).replace(/(\\d{3})(?=\\d)/g,\"\$1\"+t)+(c?d+Math.abs(n-i).toFixed(c).slice(2):'')+sr + ')</span>';";
        }
        echo "return price_text;
}
function points_format(v) {
return v.toFixed(0);
}
function process_discounts(price, quantity) {
";
        // line 570
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["discounts_raw"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["discounts"]) {
            echo "if(quantity>=";
            echo twig_get_attribute($this->env, $this->source, $context["discounts"], "quantity", [], "any", false, false, false, 570);
            echo "){price=";
            echo twig_get_attribute($this->env, $this->source, $context["discounts"], "price", [], "any", false, false, false, 570);
            echo ";}";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discounts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "return price;
}
function calculate_tax(price) {
var p=price;";
        // line 573
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tax_rates"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tax_rate"]) {
            if ((twig_get_attribute($this->env, $this->source, $context["tax_rate"], "type", [], "any", false, false, false, 573) == "F")) {
                echo "p+=";
                echo twig_get_attribute($this->env, $this->source, $context["tax_rate"], "rate", [], "any", false, false, false, 573);
                echo ";";
            }
            if ((twig_get_attribute($this->env, $this->source, $context["tax_rate"], "type", [], "any", false, false, false, 573) == "P")) {
                echo "p+=price*";
                echo (twig_get_attribute($this->env, $this->source, $context["tax_rate"], "rate", [], "any", false, false, false, 573) / 100.0);
                echo ";";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tax_rate'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "return p;
}
function autocalc_aap(s,p,ff){\$(s).each(function(){var \$t=\$(this);\$({value:\$t.data('value')||0}).animate({value:p},{easing:'swing',duration:500,step:function(value){\$t.html(ff(value));\$t.data('value',value);}});});}
function recalculateprice() {
    var main_price = ";
        // line 577
        echo (($context["apo_price_value"] ?? null) + 0.0);
        echo ";
    var special = ";
        // line 578
        echo (($context["apo_special_value"] ?? null) + 0.0);
        echo ";
    var input_quantity = Number(\$('#product input[name=\"quantity\"]').val()) || 1;
    var discount_coefficient = 1;
    var option_price = 0;
    var discount_quantity = 0;
    
    \$('#product .owq-option input[type=\"checkbox\"]').each(function() {
        \$qty = \$(this).closest('tr').find('.owq-input');
        if (\$(this).data('split')=='/') discount_quantity += Number(\$qty.val()) || 0;
    });    
    if (discount_quantity == 0) discount_quantity = input_quantity;
    
    ";
        // line 590
        if (($context["special"] ?? null)) {
            // line 591
            echo "    special_coefficient = ";
            echo (($context["apo_price_value"] ?? null) / ($context["apo_special_value"] ?? null));
            echo ";
    ";
        } else {
            // line 593
            echo "    ";
            if (($context["autocalc_option_discount"] ?? null)) {
                // line 594
                echo "    if (main_price) discount_coefficient = process_discounts(main_price, discount_quantity) / main_price;
    ";
            } else {
                // line 596
                echo "    main_price = process_discounts(main_price, discount_quantity);
    ";
            }
            // line 598
            echo "    ";
        }
        // line 599
        echo "    
    ";
        // line 600
        if (($context["points"] ?? null)) {
            // line 601
            echo "    var points = ";
            echo ($context["apo_points_value"] ?? null);
            echo ";
    \$('#product input:checked,#product option:selected').each(function() {
        if (\$(this).data('points')) points += Number(\$(this).data('points'));
    });
    autocalc_aap('.autocalc-product-points', points, points_format);
    ";
        }
        // line 607
        echo "    
    \$('#product input:checked,#product option:selected').each(function() {
    if (\$(this).data('prefix') == '=') {
        option_price += Number(\$(this).data('price'));
        main_price = 0;
        special = 0;
    }
    });
    
    \$('#product input:checked,#product option:selected').each(function() {
    if (\$(this).data('prefix') == '+') {
        option_price += Number(\$(this).data('price'));
    }
    if (\$(this).data('prefix') == '-') {
        option_price -= Number(\$(this).data('price'));
    }
    if (\$(this).data('prefix') == '%') {
        pcnt = 1.0 + (Number(\$(this).data('price')) / 100.0);
        option_price *= pcnt;
        main_price *= pcnt;
        special *= pcnt;
    }
    if (\$(this).data('prefix') == '*') {
        option_price *= Number(\$(this).data('price'));
        main_price *= Number(\$(this).data('price'));
        special *= Number(\$(this).data('price'));
    }
    if (\$(this).data('prefix') == '/') {
        option_price /= Number(\$(this).data('price'));
        main_price /= Number(\$(this).data('price'));
        special /= Number(\$(this).data('price'));
    }
    });
    
    special += option_price;
    main_price += option_price;

    ";
        // line 644
        if (($context["special"] ?? null)) {
            // line 645
            echo "    ";
            if (($context["autocalc_option_special"] ?? null)) {
                // line 646
                echo "    special = main_price / special_coefficient;
    ";
            } else {
                // line 648
                echo "    main_price = special * special_coefficient;
    ";
            }
            // line 650
            echo "    tax = special;
    ";
        } else {
            // line 652
            echo "    ";
            if (($context["autocalc_option_discount"] ?? null)) {
                // line 653
                echo "    main_price *= discount_coefficient;
    ";
            }
            // line 655
            echo "    tax = main_price;
    ";
        }
        // line 657
        echo "    
    ";
        // line 658
        if (($context["tax"] ?? null)) {
            // line 659
            echo "    main_price = calculate_tax(main_price);
    ";
            // line 660
            if (($context["special"] ?? null)) {
                // line 661
                echo "    special = calculate_tax(special);
    ";
            }
            // line 663
            echo "    ";
        }
        // line 664
        echo "    
    ";
        // line 665
        if ( !($context["autocalc_not_mul_qty"] ?? null)) {
            // line 666
            echo "    if (input_quantity > 0) {
        main_price *= input_quantity;
        special *= input_quantity;
        ";
            // line 669
            if (($context["tax"] ?? null)) {
                echo "tax *= input_quantity;";
            }
            // line 670
            echo "    }
    ";
        }
        // line 672
        echo "    
    autocalc_aap('.autocalc-product-price', main_price, price_format);
    ";
        // line 674
        if (($context["special"] ?? null)) {
            echo "autocalc_aap('.autocalc-product-special', special, price_format);";
        }
        // line 675
        echo "    ";
        if (($context["tax"] ?? null)) {
            echo "autocalc_aap('.autocalc-product-tax', tax, price_format);";
        }
        // line 676
        echo "}

\$(document).ready(function() {
    \$('#product input[type=\"checkbox\"],#product input[type=\"radio\"],#product select').each(function(){if(\$(this).data('autocalc'))return;\$(this).data('autocalc',1).on('change',function(){recalculateprice();});});    
    \$('#product input[name=\"quantity\"]').each(function(){if(\$(this).data('autocalc'))return;var \$q=\$(this);\$q.data('autocalc',1).data('val',\$q.val());(function(){if(\$q.val()!=\$q.data('val')){\$q.data('val',\$q.val());recalculateprice();}setTimeout(arguments.callee,250);})();});
    
    ";
        // line 682
        if (($context["autocalc_select_first"] ?? null)) {
            // line 683
            echo "    \$('#product select[name^=\"option\"] option[value=\"\"]').remove();
    last_name='';\$('#product input[type=\"radio\"][name^=\"option\"]').each(function(){if(\$(this).attr('name')!=last_name)\$(this).prop('checked',true);last_name=\$(this).attr('name');});
    ";
        }
        // line 686
        echo "    
    recalculateprice();
});
//--></script>
      
";
        // line 691
        echo ($context["footer"] ?? null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "simplica/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1763 => 691,  1756 => 686,  1751 => 683,  1749 => 682,  1741 => 676,  1736 => 675,  1732 => 674,  1728 => 672,  1724 => 670,  1720 => 669,  1715 => 666,  1713 => 665,  1710 => 664,  1707 => 663,  1703 => 661,  1701 => 660,  1698 => 659,  1696 => 658,  1693 => 657,  1689 => 655,  1685 => 653,  1682 => 652,  1678 => 650,  1674 => 648,  1670 => 646,  1667 => 645,  1665 => 644,  1626 => 607,  1616 => 601,  1614 => 600,  1611 => 599,  1608 => 598,  1604 => 596,  1600 => 594,  1597 => 593,  1591 => 591,  1589 => 590,  1574 => 578,  1570 => 577,  1547 => 573,  1530 => 570,  1495 => 564,  1450 => 522,  1443 => 518,  1373 => 451,  1364 => 445,  1356 => 440,  1275 => 362,  1270 => 361,  1261 => 359,  1254 => 358,  1244 => 357,  1240 => 356,  1235 => 355,  1232 => 354,  1223 => 352,  1220 => 351,  1216 => 349,  1214 => 348,  1211 => 347,  1209 => 346,  1206 => 345,  1204 => 344,  1195 => 340,  1189 => 339,  1181 => 338,  1177 => 336,  1165 => 335,  1158 => 334,  1152 => 333,  1149 => 332,  1146 => 331,  1137 => 329,  1130 => 328,  1125 => 327,  1123 => 326,  1119 => 325,  1113 => 324,  1102 => 322,  1096 => 320,  1093 => 319,  1090 => 318,  1087 => 317,  1084 => 316,  1081 => 315,  1078 => 314,  1075 => 313,  1070 => 312,  1068 => 311,  1063 => 310,  1061 => 309,  1057 => 307,  1049 => 303,  1035 => 300,  1028 => 299,  1024 => 298,  1021 => 297,  1019 => 296,  1016 => 295,  1010 => 294,  1008 => 293,  1001 => 291,  996 => 289,  992 => 288,  988 => 287,  985 => 286,  979 => 282,  968 => 280,  964 => 279,  960 => 278,  954 => 275,  951 => 274,  948 => 273,  945 => 272,  939 => 271,  926 => 265,  919 => 263,  912 => 262,  909 => 261,  896 => 255,  889 => 253,  882 => 252,  879 => 251,  866 => 245,  859 => 243,  852 => 242,  849 => 241,  841 => 238,  833 => 237,  829 => 236,  822 => 235,  819 => 234,  807 => 231,  801 => 230,  794 => 229,  791 => 228,  779 => 225,  773 => 224,  766 => 223,  763 => 222,  758 => 219,  750 => 217,  741 => 216,  739 => 215,  734 => 214,  718 => 213,  706 => 212,  702 => 210,  696 => 209,  692 => 208,  685 => 207,  682 => 206,  677 => 203,  669 => 201,  660 => 200,  658 => 199,  654 => 198,  636 => 197,  624 => 196,  620 => 194,  614 => 193,  610 => 192,  603 => 191,  600 => 190,  595 => 187,  588 => 185,  579 => 184,  577 => 183,  564 => 182,  560 => 181,  556 => 180,  550 => 179,  544 => 178,  537 => 177,  534 => 176,  530 => 175,  526 => 174,  523 => 173,  521 => 172,  514 => 170,  508 => 169,  505 => 168,  501 => 166,  498 => 165,  487 => 163,  483 => 162,  478 => 159,  475 => 158,  467 => 156,  464 => 155,  456 => 153,  453 => 152,  447 => 149,  441 => 147,  435 => 144,  432 => 143,  430 => 142,  427 => 141,  425 => 140,  417 => 138,  409 => 136,  407 => 135,  400 => 134,  390 => 132,  388 => 131,  383 => 129,  377 => 127,  374 => 126,  371 => 125,  368 => 124,  365 => 123,  363 => 122,  359 => 120,  354 => 118,  348 => 116,  339 => 112,  333 => 109,  328 => 107,  315 => 97,  311 => 96,  303 => 91,  298 => 89,  290 => 84,  286 => 83,  282 => 81,  280 => 80,  276 => 79,  271 => 76,  268 => 75,  263 => 72,  256 => 70,  247 => 67,  243 => 66,  240 => 65,  236 => 64,  229 => 60,  225 => 58,  221 => 57,  217 => 55,  215 => 54,  211 => 53,  207 => 51,  201 => 49,  198 => 48,  192 => 46,  190 => 45,  186 => 44,  183 => 43,  179 => 41,  176 => 40,  159 => 38,  154 => 37,  151 => 36,  137 => 34,  135 => 33,  132 => 32,  127 => 31,  124 => 30,  121 => 29,  118 => 28,  115 => 27,  113 => 26,  106 => 25,  103 => 24,  100 => 23,  97 => 22,  94 => 21,  91 => 20,  88 => 19,  86 => 18,  82 => 17,  79 => 16,  72 => 14,  66 => 12,  58 => 10,  56 => 9,  53 => 8,  49 => 7,  46 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "simplica/template/product/product.twig", "");
    }
}
