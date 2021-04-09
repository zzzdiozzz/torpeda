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

/* sale/order_info.twig */
class __TwigTemplate_65543e5add3c19662655e6aa602a8ee38198e24da8ba9148f4ce911857161480 extends \Twig\Template
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
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">

\t\t\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css\" />
\t\t\t\t<script src=\"https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js\"></script>
\t\t\t
    <div class=\"container-fluid\">
      <div class=\"pull-right\"><a href=\"";
        // line 9
        echo ($context["invoice"] ?? null);
        echo "\" target=\"_blank\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_invoice_print"] ?? null);
        echo "\" class=\"btn btn-info\"><i class=\"fa fa-print\"></i></a> <a href=\"";
        echo ($context["shipping"] ?? null);
        echo "\" target=\"_blank\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_shipping_print"] ?? null);
        echo "\" class=\"btn btn-info\"><i class=\"fa fa-truck\"></i></a> <a href=\"";
        echo ($context["edit"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_edit"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a> <a href=\"";
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 10
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 13
            echo "          <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 13);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 13);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"row\">
      <div class=\"col-md-4\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-shopping-cart\"></i> ";
        // line 23
        echo ($context["text_order_detail"] ?? null);
        echo "</h3>
          </div>
          <table class=\"table\">
            <tbody>
              <tr>
                <td style=\"width: 1%;\"><button data-toggle=\"tooltip\" title=\"";
        // line 28
        echo ($context["text_store"] ?? null);
        echo "\" class=\"btn btn-info btn-xs\"><i class=\"fa fa-shopping-cart fa-fw\"></i></button></td>
                <td><a href=\"";
        // line 29
        echo ($context["store_url"] ?? null);
        echo "\" target=\"_blank\">";
        echo ($context["store_name"] ?? null);
        echo "</a></td>
              </tr>
              <tr>
                <td><button data-toggle=\"tooltip\" title=\"";
        // line 32
        echo ($context["text_date_added"] ?? null);
        echo "\" class=\"btn btn-info btn-xs\"><i class=\"fa fa-calendar fa-fw\"></i></button></td>
                <td>";
        // line 33
        echo ($context["date_added"] ?? null);
        echo "</td>
              </tr>
              <tr>
                <td><button data-toggle=\"tooltip\" title=\"";
        // line 36
        echo ($context["text_payment_method"] ?? null);
        echo "\" class=\"btn btn-info btn-xs\"><i class=\"fa fa-credit-card fa-fw\"></i></button></td>
                <td>";
        // line 37
        echo ($context["payment_method"] ?? null);
        echo "</td>
              </tr>
              ";
        // line 39
        if (($context["shipping_method"] ?? null)) {
            // line 40
            echo "                <tr>
                  <td><button data-toggle=\"tooltip\" title=\"";
            // line 41
            echo ($context["text_shipping_method"] ?? null);
            echo "\" class=\"btn btn-info btn-xs\"><i class=\"fa fa-truck fa-fw\"></i></button></td>
                  <td>";
            // line 42
            echo ($context["shipping_method"] ?? null);
            echo "</td>
                </tr>
              ";
        }
        // line 45
        echo "            </tbody>

          </table>
        </div>
      </div>
      <div class=\"col-md-4\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-user\"></i> ";
        // line 53
        echo ($context["text_customer_detail"] ?? null);
        echo "</h3>
          </div>
          <table class=\"table\">
            <tr>
              <td style=\"width: 1%;\"><button data-toggle=\"tooltip\" title=\"";
        // line 57
        echo ($context["text_customer"] ?? null);
        echo "\" class=\"btn btn-info btn-xs\"><i class=\"fa fa-user fa-fw\"></i></button></td>
              <td>";
        // line 58
        if (($context["customer"] ?? null)) {
            echo " <a href=\"";
            echo ($context["customer"] ?? null);
            echo "\" target=\"_blank\">";
            echo ($context["firstname"] ?? null);
            echo " ";
            echo ($context["lastname"] ?? null);
            echo "</a> ";
        } else {
            // line 59
            echo "                  ";
            echo ($context["firstname"] ?? null);
            echo " ";
            echo ($context["lastname"] ?? null);
            echo "
                ";
        }
        // line 60
        echo "</td>
            </tr>
            <tr>
              <td><button data-toggle=\"tooltip\" title=\"";
        // line 63
        echo ($context["text_customer_group"] ?? null);
        echo "\" class=\"btn btn-info btn-xs\"><i class=\"fa fa-group fa-fw\"></i></button></td>
              <td>";
        // line 64
        echo ($context["customer_group"] ?? null);
        echo "</td>
            </tr>
            <tr>
              <td><button data-toggle=\"tooltip\" title=\"";
        // line 67
        echo ($context["text_email"] ?? null);
        echo "\" class=\"btn btn-info btn-xs\"><i class=\"fa fa-envelope-o fa-fw\"></i></button></td>
              <td><a href=\"mailto:";
        // line 68
        echo ($context["email"] ?? null);
        echo "\">";
        echo ($context["email"] ?? null);
        echo "</a></td>
            </tr>
            <tr>
              <td><button data-toggle=\"tooltip\" title=\"";
        // line 71
        echo ($context["text_telephone"] ?? null);
        echo "\" class=\"btn btn-info btn-xs\"><i class=\"fa fa-phone fa-fw\"></i></button></td>
              <td>";
        // line 72
        echo ($context["telephone"] ?? null);
        echo "</td>
            </tr>
          </table>
        </div>
      </div>
      <div class=\"col-md-4\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-cog\"></i> ";
        // line 80
        echo ($context["text_option"] ?? null);
        echo "</h3>
          </div>
          <table class=\"table\">
            <tbody>
              <tr>
                <td>";
        // line 85
        echo ($context["text_invoice"] ?? null);
        echo "</td>
                <td id=\"invoice\" class=\"text-right\">";
        // line 86
        echo ($context["invoice_no"] ?? null);
        echo "</td>
                <td style=\"width: 1%;\" class=\"text-center\">";
        // line 87
        if ( !($context["invoice_no"] ?? null)) {
            // line 88
            echo "                    <button id=\"button-invoice\" data-loading-text=\"";
            echo ($context["text_loading"] ?? null);
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_generate"] ?? null);
            echo "\" class=\"btn btn-success btn-xs\"><i class=\"fa fa-cog\"></i></button>
                  ";
        } else {
            // line 90
            echo "                    <button disabled=\"disabled\" class=\"btn btn-success btn-xs\"><i class=\"fa fa-refresh\"></i></button>
                  ";
        }
        // line 91
        echo "</td>
              </tr>
              <tr>
                <td>";
        // line 94
        echo ($context["text_reward"] ?? null);
        echo "</td>
                <td class=\"text-right\">";
        // line 95
        echo ($context["reward"] ?? null);
        echo "</td>
                <td class=\"text-center\">";
        // line 96
        if ((($context["customer"] ?? null) && ($context["reward"] ?? null))) {
            // line 97
            echo "                    ";
            if ( !($context["reward_total"] ?? null)) {
                // line 98
                echo "                      <button id=\"button-reward-add\" data-loading-text=\"";
                echo ($context["text_loading"] ?? null);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_reward_add"] ?? null);
                echo "\" class=\"btn btn-success btn-xs\"><i class=\"fa fa-plus-circle\"></i></button>
                    ";
            } else {
                // line 100
                echo "                      <button id=\"button-reward-remove\" data-loading-text=\"";
                echo ($context["text_loading"] ?? null);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_reward_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-minus-circle\"></i></button>
                    ";
            }
            // line 102
            echo "                  ";
        } else {
            // line 103
            echo "                    <button disabled=\"disabled\" class=\"btn btn-success btn-xs\"><i class=\"fa fa-plus-circle\"></i></button>
                  ";
        }
        // line 104
        echo "</td>
              </tr>
              <tr>
                <td>";
        // line 107
        echo ($context["text_affiliate"] ?? null);
        echo "
                  ";
        // line 108
        if (($context["affiliate"] ?? null)) {
            // line 109
            echo "                    (<a href=\"";
            echo ($context["affiliate"] ?? null);
            echo "\">";
            echo ($context["affiliate_firstname"] ?? null);
            echo " ";
            echo ($context["affiliate_lastname"] ?? null);
            echo "</a>)
                  ";
        }
        // line 110
        echo "</td>
                <td class=\"text-right\">";
        // line 111
        echo ($context["commission"] ?? null);
        echo "</td>
                <td class=\"text-center\">";
        // line 112
        if (($context["affiliate"] ?? null)) {
            // line 113
            echo "                    ";
            if ( !($context["commission_total"] ?? null)) {
                // line 114
                echo "                      <button id=\"button-commission-add\" data-loading-text=\"";
                echo ($context["text_loading"] ?? null);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_commission_add"] ?? null);
                echo "\" class=\"btn btn-success btn-xs\"><i class=\"fa fa-plus-circle\"></i></button>
                    ";
            } else {
                // line 116
                echo "                      <button id=\"button-commission-remove\" data-loading-text=\"";
                echo ($context["text_loading"] ?? null);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_commission_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-minus-circle\"></i></button>
                    ";
            }
            // line 118
            echo "                  ";
        } else {
            // line 119
            echo "                    <button disabled=\"disabled\" class=\"btn btn-success btn-xs\"><i class=\"fa fa-plus-circle\"></i></button>
                  ";
        }
        // line 120
        echo "</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-info-circle\"></i> ";
        // line 129
        echo ($context["text_order"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <table class=\"table table-bordered\">
          <thead>
            <tr>
              <td style=\"width: 50%;\" class=\"text-left\">";
        // line 135
        echo ($context["text_payment_address"] ?? null);
        echo "</td>
              ";
        // line 136
        if (($context["shipping_method"] ?? null)) {
            // line 137
            echo "                <td style=\"width: 50%;\" class=\"text-left\">";
            echo ($context["text_shipping_address"] ?? null);
            echo "</td>
              ";
        }
        // line 138
        echo " </tr>
          </thead>
          <tbody>
            <tr>
              <td class=\"text-left\">";
        // line 142
        echo ($context["payment_address"] ?? null);
        echo "</td>
              ";
        // line 143
        if (($context["shipping_method"] ?? null)) {
            // line 144
            echo "                <td class=\"text-left\">";
            echo ($context["shipping_address"] ?? null);
            echo "</td>
              ";
        }
        // line 145
        echo " </tr>
          </tbody>
        </table>
        <table class=\"table table-bordered\">
          <thead>
            <tr>

\t\t\t\t<td class=\"text-left\">";
        // line 152
        echo ($context["column_image"] ?? null);
        echo "</td>
\t\t\t
              <td class=\"text-left\">";
        // line 154
        echo ($context["column_product"] ?? null);
        echo "</td>
              <td class=\"text-left\">";
        // line 155
        echo ($context["column_model"] ?? null);
        echo "</td>
              <td class=\"text-right\">";
        // line 156
        echo ($context["column_quantity"] ?? null);
        echo "</td>
              <td class=\"text-right\">";
        // line 157
        echo ($context["column_price"] ?? null);
        echo "</td>
              <td class=\"text-right\">";
        // line 158
        echo ($context["column_total"] ?? null);
        echo "</td>
            </tr>
          </thead>
          <tbody>

            ";
        // line 163
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 164
            echo "              <tr>

\t\t\t\t<td style=\"text-align:center;\"><a data-fancybox=\"gallery\" data-caption=\"Name: ";
            // line 166
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 166);
            echo " <br> Model: ";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 166);
            echo " <br> Quantity: ";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 166);
            echo " <br> Unit Price: ";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 166);
            echo " <br> Total: ";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 166);
            echo "\" href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "imagelg", [], "any", false, false, false, 166);
            echo "\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "imagesm", [], "any", false, false, false, 166);
            echo "\"></a></td>
\t\t\t
                <td class=\"text-left\"><a href=\"";
            // line 168
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 168);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 168);
            echo "</a> ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 168));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 169
                echo "                    <br/>
                    ";
                // line 170
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 170) != "file")) {
                    // line 171
                    echo "                      &nbsp;
                      <small> - ";
                    // line 172
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 172);
                    echo ": ";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 172);
                    echo "</small> ";
                } else {
                    // line 173
                    echo "                      &nbsp;
                      <small> - ";
                    // line 174
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 174);
                    echo ": <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "href", [], "any", false, false, false, 174);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 174);
                    echo "</a></small> ";
                }
                // line 175
                echo "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</td>
                <td class=\"text-left\">";
            // line 176
            echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 176);
            echo "</td>
                <td class=\"text-right\">";
            // line 177
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 177);
            echo "</td>
                <td class=\"text-right\">";
            // line 178
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 178);
            echo "</td>
                <td class=\"text-right\">";
            // line 179
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 179);
            echo "</td>
              </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 182
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 183
            echo "              <tr>
                <td class=\"text-left\"><a href=\"";
            // line 184
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "href", [], "any", false, false, false, 184);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 184);
            echo "</a></td>
                <td class=\"text-left\"></td>
                <td class=\"text-right\">1</td>
                <td class=\"text-right\">";
            // line 187
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 187);
            echo "</td>
                <td class=\"text-right\">";
            // line 188
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 188);
            echo "</td>
              </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 191
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 192
            echo "              <tr>
                
\t\t\t\t<td colspan=\"5\" class=\"text-right\">";
            // line 194
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 194);
            echo "</td>
\t\t\t
                <td class=\"text-right\">";
            // line 196
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 196);
            echo "</td>
              </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 199
        echo "          </tbody>

        </table>
        ";
        // line 202
        if (($context["comment"] ?? null)) {
            // line 203
            echo "          <table class=\"table table-bordered\">
            <thead>
              <tr>
                <td>";
            // line 206
            echo ($context["text_comment"] ?? null);
            echo "</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>";
            // line 211
            echo ($context["comment"] ?? null);
            echo "</td>
              </tr>
            </tbody>
          </table>
        ";
        }
        // line 215
        echo " </div>
    </div>
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-comment-o\"></i> ";
        // line 219
        echo ($context["text_history"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <ul class=\"nav nav-tabs\">
          <li class=\"active\"><a href=\"#tab-history\" data-toggle=\"tab\">";
        // line 223
        echo ($context["tab_history"] ?? null);
        echo "</a></li>
          <li><a href=\"#tab-additional\" data-toggle=\"tab\">";
        // line 224
        echo ($context["tab_additional"] ?? null);
        echo "</a></li>
          ";
        // line 225
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tabs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 226
            echo "            <li><a href=\"#tab-";
            echo twig_get_attribute($this->env, $this->source, $context["tab"], "code", [], "any", false, false, false, 226);
            echo "\" data-toggle=\"tab\">";
            echo twig_get_attribute($this->env, $this->source, $context["tab"], "title", [], "any", false, false, false, 226);
            echo "</a></li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 228
        echo "        </ul>
        <div class=\"tab-content\">
          <div class=\"tab-pane active\" id=\"tab-history\">
            <div id=\"history\"></div>
            <br/>
            <fieldset>
              <legend>";
        // line 234
        echo ($context["text_history_add"] ?? null);
        echo "</legend>
              <form class=\"form-horizontal\">
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-order-status\">";
        // line 237
        echo ($context["entry_order_status"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"order_status_id\" id=\"input-order-status\" class=\"form-control\">


                      ";
        // line 242
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["order_statuses"]);
        foreach ($context['_seq'] as $context["_key"] => $context["order_statuses"]) {
            // line 243
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_statuses"], "order_status_id", [], "any", false, false, false, 243) == ($context["order_status_id"] ?? null))) {
                // line 244
                echo "

                          <option value=\"";
                // line 246
                echo twig_get_attribute($this->env, $this->source, $context["order_statuses"], "order_status_id", [], "any", false, false, false, 246);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_statuses"], "name", [], "any", false, false, false, 246);
                echo "</option>


                        ";
            } else {
                // line 250
                echo "

                          <option value=\"";
                // line 252
                echo twig_get_attribute($this->env, $this->source, $context["order_statuses"], "order_status_id", [], "any", false, false, false, 252);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_statuses"], "name", [], "any", false, false, false, 252);
                echo "</option>


                        ";
            }
            // line 256
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_statuses'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 257
        echo "

                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-override\"><span data-toggle=\"tooltip\" title=\"";
        // line 263
        echo ($context["help_override"] ?? null);
        echo "\">";
        echo ($context["entry_override"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"checkbox\">
                      <input type=\"checkbox\" name=\"override\" value=\"1\" id=\"input-override\"/>
                    </div>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-notify\">";
        // line 271
        echo ($context["entry_notify"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"checkbox\">
                      <input type=\"checkbox\" name=\"notify\" value=\"1\" id=\"input-notify\"/>
                    </div>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-comment\">";
        // line 279
        echo ($context["entry_comment"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"comment\" rows=\"8\" id=\"input-comment\" class=\"form-control\"></textarea>
                  </div>
                </div>
              </form>
            </fieldset>
            <div class=\"text-right\">
              <button id=\"button-history\" data-loading-text=\"";
        // line 287
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i> ";
        echo ($context["button_history_add"] ?? null);
        echo "</button>
            </div>
          </div>
          <div class=\"tab-pane\" id=\"tab-additional\"> ";
        // line 290
        if (($context["account_custom_fields"] ?? null)) {
            // line 291
            echo "              <div class=\"table-responsive\">
                <table class=\"table table-bordered\">
                  <thead>
                    <tr>
                      <td colspan=\"2\">";
            // line 295
            echo ($context["text_account_custom_field"] ?? null);
            echo "</td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
            // line 300
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["account_custom_fields"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
                // line 301
                echo "                      <tr>
                        <td>";
                // line 302
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 302);
                echo "</td>
                        <td>";
                // line 303
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 303);
                echo "</td>
                      </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 306
            echo "                  </tbody>

                </table>
              </div>
            ";
        }
        // line 311
        echo "            ";
        if (($context["payment_custom_fields"] ?? null)) {
            // line 312
            echo "              <div class=\"table-responsive\">
                <table class=\"table table-bordered\">
                  <thead>
                    <tr>
                      <td colspan=\"2\">";
            // line 316
            echo ($context["text_payment_custom_field"] ?? null);
            echo "</td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
            // line 321
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["payment_custom_fields"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
                // line 322
                echo "                      <tr>
                        <td>";
                // line 323
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 323);
                echo "</td>
                        <td>";
                // line 324
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 324);
                echo "</td>
                      </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 327
            echo "                  </tbody>

                </table>
              </div>
            ";
        }
        // line 332
        echo "            ";
        if ((($context["shipping_method"] ?? null) && ($context["shipping_custom_fields"] ?? null))) {
            // line 333
            echo "              <div class=\"table-responsive\">
                <table class=\"table table-bordered\">
                  <thead>
                    <tr>
                      <td colspan=\"2\">";
            // line 337
            echo ($context["text_shipping_custom_field"] ?? null);
            echo "</td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
            // line 342
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["shipping_custom_fields"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
                // line 343
                echo "                      <tr>
                        <td>";
                // line 344
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 344);
                echo "</td>
                        <td>";
                // line 345
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 345);
                echo "</td>
                      </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 348
            echo "                  </tbody>

                </table>
              </div>
            ";
        }
        // line 353
        echo "            <div class=\"table-responsive\">
              <table class=\"table table-bordered\">
                <thead>
                  <tr>
                    <td colspan=\"2\">";
        // line 357
        echo ($context["text_browser"] ?? null);
        echo "</td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>";
        // line 362
        echo ($context["text_ip"] ?? null);
        echo "</td>
                    <td>";
        // line 363
        echo ($context["ip"] ?? null);
        echo "</td>
                  </tr>
                  ";
        // line 365
        if (($context["forwarded_ip"] ?? null)) {
            // line 366
            echo "                    <tr>
                      <td>";
            // line 367
            echo ($context["text_forwarded_ip"] ?? null);
            echo "</td>
                      <td>";
            // line 368
            echo ($context["forwarded_ip"] ?? null);
            echo "</td>
                    </tr>
                  ";
        }
        // line 371
        echo "                  <tr>
                    <td>";
        // line 372
        echo ($context["text_user_agent"] ?? null);
        echo "</td>
                    <td>";
        // line 373
        echo ($context["user_agent"] ?? null);
        echo "</td>
                  </tr>
                  <tr>
                    <td>";
        // line 376
        echo ($context["text_accept_language"] ?? null);
        echo "</td>
                    <td>";
        // line 377
        echo ($context["accept_language"] ?? null);
        echo "</td>
                  </tr>
                </tbody>

              </table>
            </div>
          </div>
          ";
        // line 384
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tabs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 385
            echo "            <div class=\"tab-pane\" id=\"tab-";
            echo twig_get_attribute($this->env, $this->source, $context["tab"], "code", [], "any", false, false, false, 385);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["tab"], "content", [], "any", false, false, false, 385);
            echo "</div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 386
        echo " </div>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
  \$(document).delegate('#button-invoice', 'click', function() {
\t  \$.ajax({
\t\t  url: 'index.php?route=sale/order/createinvoiceno&user_token=";
        // line 393
        echo ($context["user_token"] ?? null);
        echo "&order_id=";
        echo ($context["order_id"] ?? null);
        echo "',
\t\t  dataType: 'json',
\t\t  beforeSend: function() {
\t\t\t  \$('#button-invoice').button('loading');
\t\t  },
\t\t  complete: function() {
\t\t\t  \$('#button-invoice').button('reset');
\t\t  },
\t\t  success: function(json) {
\t\t\t  \$('.alert-dismissible').remove();

\t\t\t  if (json['error']) {
\t\t\t\t  \$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
\t\t\t  }

\t\t\t  if (json['invoice_no']) {
\t\t\t\t  \$('#invoice').html(json['invoice_no']);

\t\t\t\t  \$('#button-invoice').replaceWith('<button disabled=\"disabled\" class=\"btn btn-success btn-xs\"><i class=\"fa fa-cog\"></i></button>');
\t\t\t  }
\t\t  },
\t\t  error: function(xhr, ajaxOptions, thrownError) {
\t\t\t  alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t  }
\t  });
  });

  \$(document).delegate('#button-reward-add', 'click', function() {
\t  \$.ajax({
\t\t  url: 'index.php?route=sale/order/addreward&user_token=";
        // line 422
        echo ($context["user_token"] ?? null);
        echo "&order_id=";
        echo ($context["order_id"] ?? null);
        echo "',
\t\t  type: 'post',
\t\t  dataType: 'json',
\t\t  beforeSend: function() {
\t\t\t  \$('#button-reward-add').button('loading');
\t\t  },
\t\t  complete: function() {
\t\t\t  \$('#button-reward-add').button('reset');
\t\t  },
\t\t  success: function(json) {
\t\t\t  \$('.alert-dismissible').remove();

\t\t\t  if (json['error']) {
\t\t\t\t  \$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
\t\t\t  }

\t\t\t  if (json['success']) {
\t\t\t\t  \$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

\t\t\t\t  \$('#button-reward-add').replaceWith('<button id=\"button-reward-remove\" data-toggle=\"tooltip\" title=\"";
        // line 441
        echo ($context["button_reward_remove"] ?? null);
        echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-minus-circle\"></i></button>');
\t\t\t  }
\t\t  },
\t\t  error: function(xhr, ajaxOptions, thrownError) {
\t\t\t  alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t  }
\t  });
  });

  \$(document).delegate('#button-reward-remove', 'click', function() {
\t  \$.ajax({
\t\t  url: 'index.php?route=sale/order/removereward&user_token=";
        // line 452
        echo ($context["user_token"] ?? null);
        echo "&order_id=";
        echo ($context["order_id"] ?? null);
        echo "',
\t\t  type: 'post',
\t\t  dataType: 'json',
\t\t  beforeSend: function() {
\t\t\t  \$('#button-reward-remove').button('loading');
\t\t  },
\t\t  complete: function() {
\t\t\t  \$('#button-reward-remove').button('reset');
\t\t  },
\t\t  success: function(json) {
\t\t\t  \$('.alert-dismissible').remove();

\t\t\t  if (json['error']) {
\t\t\t\t  \$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
\t\t\t  }

\t\t\t  if (json['success']) {
\t\t\t\t  \$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

\t\t\t\t  \$('#button-reward-remove').replaceWith('<button id=\"button-reward-add\" data-toggle=\"tooltip\" title=\"";
        // line 471
        echo ($context["button_reward_add"] ?? null);
        echo "\" class=\"btn btn-success btn-xs\"><i class=\"fa fa-plus-circle\"></i></button>');
\t\t\t  }
\t\t  },
\t\t  error: function(xhr, ajaxOptions, thrownError) {
\t\t\t  alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t  }
\t  });
  });

  \$(document).delegate('#button-commission-add', 'click', function() {
\t  \$.ajax({
\t\t  url: 'index.php?route=sale/order/addcommission&user_token=";
        // line 482
        echo ($context["user_token"] ?? null);
        echo "&order_id=";
        echo ($context["order_id"] ?? null);
        echo "',
\t\t  type: 'post',
\t\t  dataType: 'json',
\t\t  beforeSend: function() {
\t\t\t  \$('#button-commission-add').button('loading');
\t\t  },
\t\t  complete: function() {
\t\t\t  \$('#button-commission-add').button('reset');
\t\t  },
\t\t  success: function(json) {
\t\t\t  \$('.alert-dismissible').remove();

\t\t\t  if (json['error']) {
\t\t\t\t  \$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
\t\t\t  }

\t\t\t  if (json['success']) {
\t\t\t\t  \$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

\t\t\t\t  \$('#button-commission-add').replaceWith('<button id=\"button-commission-remove\" data-toggle=\"tooltip\" title=\"";
        // line 501
        echo ($context["button_commission_remove"] ?? null);
        echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-minus-circle\"></i></button>');
\t\t\t  }
\t\t  },
\t\t  error: function(xhr, ajaxOptions, thrownError) {
\t\t\t  alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t  }
\t  });
  });

  \$(document).delegate('#button-commission-remove', 'click', function() {
\t  \$.ajax({
\t\t  url: 'index.php?route=sale/order/removecommission&user_token=";
        // line 512
        echo ($context["user_token"] ?? null);
        echo "&order_id=";
        echo ($context["order_id"] ?? null);
        echo "',
\t\t  type: 'post',
\t\t  dataType: 'json',
\t\t  beforeSend: function() {
\t\t\t  \$('#button-commission-remove').button('loading');
\t\t  },
\t\t  complete: function() {
\t\t\t  \$('#button-commission-remove').button('reset');
\t\t  },
\t\t  success: function(json) {
\t\t\t  \$('.alert-dismissible').remove();

\t\t\t  if (json['error']) {
\t\t\t\t  \$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
\t\t\t  }

\t\t\t  if (json['success']) {
\t\t\t\t  \$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

\t\t\t\t  \$('#button-commission-remove').replaceWith('<button id=\"button-commission-add\" data-toggle=\"tooltip\" title=\"";
        // line 531
        echo ($context["button_commission_add"] ?? null);
        echo "\" class=\"btn btn-success btn-xs\"><i class=\"fa fa-plus-circle\"></i></button>');
\t\t\t  }
\t\t  },
\t\t  error: function(xhr, ajaxOptions, thrownError) {
\t\t\t  alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t  }
\t  });
  });

  var api_token = '';

  \$.ajax({
\t  url: '";
        // line 543
        echo ($context["catalog"] ?? null);
        echo "index.php?route=api/login',
\t  type: 'post',
\t  dataType: 'json',
\t  data: 'key=";
        // line 546
        echo ($context["api_key"] ?? null);
        echo "',
\t  crossDomain: true,
\t  success: function(json) {
\t\t  \$('.alert').remove();
\t\t  if (json['error']) {
\t\t\t  if (json['error']['key']) {
\t\t\t\t  \$('#content > .container-fluid').prepend('<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['key'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t  }
\t\t\t  if (json['error']['ip']) {
\t\t\t\t  \$('#content > .container-fluid').prepend('<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['ip'] + ' <button type=\"button\" id=\"button-ip-add\" data-loading-text=\"";
        // line 555
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-danger btn-xs pull-right\"><i class=\"fa fa-plus\"></i>";
        echo ($context["button_ip_add"] ?? null);
        echo "</button></div>');
\t\t\t  }
\t\t  }
\t\t  if (json['token']) {
\t\t\t  api_token = json['token'];
\t\t  }
\t  },
\t  error: function(xhr, ajaxOptions, thrownError) {
\t\t  alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t  }
  });

  \$('#history').delegate('.pagination a', 'click', function(e) {
\t  e.preventDefault();

\t  \$('#history').load(this.href);
  });

  \$('#history').load('index.php?route=sale/order/history&user_token=";
        // line 573
        echo ($context["user_token"] ?? null);
        echo "&order_id=";
        echo ($context["order_id"] ?? null);
        echo "');

  \$('#button-history').on('click', function() {
\t  \$.ajax({
\t\t  url: '";
        // line 577
        echo ($context["catalog"] ?? null);
        echo "index.php?route=api/order/history&api_token=";
        echo ($context["api_token"] ?? null);
        echo "&store_id=";
        echo ($context["store_id"] ?? null);
        echo "&order_id=";
        echo ($context["order_id"] ?? null);
        echo "',
\t\t  type: 'post',
\t\t  dataType: 'json',
\t\t  data: 'order_status_id=' + encodeURIComponent(\$('select[name=\\'order_status_id\\']').val()) + '&notify=' + (\$('input[name=\\'notify\\']').prop('checked') ? 1 : 0) + '&override=' + (\$('input[name=\\'override\\']').prop('checked') ? 1 : 0) + '&append=' + (\$('input[name=\\'append\\']').prop('checked') ? 1 : 0) + '&comment=' + encodeURIComponent(\$('textarea[name=\\'comment\\']').val()),
\t\t  beforeSend: function() {
\t\t\t  \$('#button-history').button('loading');
\t\t  },
\t\t  complete: function() {
\t\t\t  \$('#button-history').button('reset');
\t\t  },
\t\t  success: function(json) {
\t\t\t  \$('.alert-dismissible').remove();

\t\t\t  if (json['error']) {
\t\t\t\t  \$('#history').before('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t  }

\t\t\t  if (json['success']) {
\t\t\t\t  \$('#history').load('index.php?route=sale/order/history&user_token=";
        // line 595
        echo ($context["user_token"] ?? null);
        echo "&order_id=";
        echo ($context["order_id"] ?? null);
        echo "');

\t\t\t\t  \$('#history').before('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t  \$('textarea[name=\\'comment\\']').val('');
\t\t\t  }
\t\t  },
\t\t  error: function(xhr, ajaxOptions, thrownError) {
\t\t\t  alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t  }
\t  });
  });
  //--></script>
</div>

\t\t\t\t\t<!-- START Shipping Data -->
\t\t\t\t\t<!-- START Modal assignment CN to order -->
\t\t\t\t\t<div class=\"modal fade\" id=\"assignment-cn-to-order\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"assignment-cn-to-order-label\">
\t\t\t\t\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t\t\t\t\t\t<h4 class=\"modal-title\" id=\"assignment-cn-to-order-label\">";
        // line 617
        echo ($context["heading_cn"] ?? null);
        echo "</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group clearfix\">
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"cn_shipping_method\" value=\"\" id=\"cn_shipping_method\" />
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"cn_number\">";
        // line 622
        echo ($context["entry_cn_number"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"cn_number\" value=\"\" placeholder=\"";
        // line 624
        echo ($context["entry_cn_number"] ?? null);
        echo "\" id=\"cn_number\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\" onclick=\"assignmentCN();\"><i class=\"fa fa-check\"></i></button>
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i></button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- END Modal assignment CN to order -->

\t\t\t\t\t<script type=\"text/javascript\"><!--
\t\t\t\t\t\tfunction deleteCN(shipping_method) {
\t\t\t\t\t\t\tvar post_data = 'order_id=";
        // line 639
        echo ($context["order_id"] ?? null);
        echo "';

\t\t\t\t\t\t\t\$.ajax( {
\t\t\t\t\t\t\t\turl: 'index.php?route=extension/shipping/' + shipping_method + '/deleteCNFromOrder&user_token=";
        // line 642
        echo ($context["user_token"] ?? null);
        echo "',
\t\t\t\t\t\t\t\ttype: 'POST',
\t\t\t\t\t\t\t\tdata: post_data,
\t\t\t\t\t\t\t\tdataType: 'json',
\t\t\t\t\t\t\t\tbeforeSend: function () {
\t\t\t\t\t\t\t\t\t\$('body').fadeTo('fast', 0.7).prepend('<div id=\"ocmax-loader\" style=\"position: fixed; top: 50%;\tleft: 50%; z-index: 9999;\"><i class=\"fa fa-spinner fa-spin fa-3x fa-fw\"></i></div>');
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\tcomplete: function () {
\t\t\t\t\t\t\t\t\tvar \$alerts = \$('.alert-danger, .alert-success');

\t\t\t\t\t\t\t\t\tif (\$alerts.length !== 0) {
\t\t\t\t\t\t\t\t\t\tsetTimeout(function() { \$alerts.fadeOut() }, 5000);
\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\$('body').fadeTo('fast', 1)
\t\t\t\t\t\t\t\t\t\$('#ocmax-loader').remove();
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\t\t\t\tif(json['error']) {
\t\t\t\t\t\t\t\t\t\t\$('.container-fluid:eq(1)').prepend('<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\t\t\t\t\t\$('.container-fluid:eq(1)').prepend('<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\t\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\t\t\t\t\t\t\tlocation.reload();
\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\t2000
\t\t\t\t\t\t\t\t\t\t);
\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\terror: function (jqXHR, textStatus, errorThrown) {
\t\t\t\t\t\t\t\t\tconsole.log(textStatus);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t} );
\t\t\t\t\t\t}

\t\t\t\t\t\tfunction assignmentCN(shipping_method) {
\t\t\t\t\t\t\tif (shipping_method) {
\t\t\t\t\t\t\t\t\$('#cn_shipping_method').val(shipping_method);
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\tif (\$('#assignment-cn-to-order').is(':hidden')) {
\t\t\t\t\t\t\t\t\$('#assignment-cn-to-order').modal('show');
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tvar post_data = 'order_id=";
        // line 690
        echo ($context["order_id"] ?? null);
        echo "&cn_number=' + \$('#cn_number').val();

\t\t\t\t\t\t\t\t\$.ajax( {
\t\t\t\t\t\t\t\t\turl: 'index.php?route=extension/shipping/' + \$('#cn_shipping_method').val() + '/addCNToOrder&user_token=";
        // line 693
        echo ($context["user_token"] ?? null);
        echo "',
\t\t\t\t\t\t\t\t\ttype: 'POST',
\t\t\t\t\t\t\t\t\tdata: post_data,
\t\t\t\t\t\t\t\t\tdataType: 'json',
\t\t\t\t\t\t\t\t\tbeforeSend: function () {
\t\t\t\t\t\t\t\t\t\t\$('body').fadeTo('fast', 0.7).prepend('<div id=\"ocmax-loader\" style=\"position: fixed; top: 50%;\tleft: 50%; z-index: 9999;\"><i class=\"fa fa-spinner fa-spin fa-3x fa-fw\"></i></div>');
\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\tcomplete: function () {
\t\t\t\t\t\t\t\t\t\tvar \$alerts = \$('.alert-danger, .alert-success');

\t\t\t\t\t\t\t\t\t\tif (\$alerts.length !== 0) {
\t\t\t\t\t\t\t\t\t\t\tsetTimeout(function() { \$alerts.fadeOut() }, 5000);
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t\$('body').fadeTo('fast', 1)
\t\t\t\t\t\t\t\t\t\t\$('#ocmax-loader').remove();
\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\t\t\t\t\tif(json['error']) {
\t\t\t\t\t\t\t\t\t\t\t\$('.container-fluid:eq(1)').prepend('<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\t\t\t\t\t\t\$('.container-fluid:eq(1)').prepend('<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\t\t\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\t\t\t\t\t\t\t\tlocation.reload();
\t\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\t\t2000
\t\t\t\t\t\t\t\t\t\t\t);
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\terror: function (jqXHR, textStatus, errorThrown) {
\t\t\t\t\t\t\t\t\t\tconsole.log(textStatus);
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t} );

\t\t\t\t\t\t\t\t\$('#assignment-cn-to-order').modal('hide');
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}

\t\t\t\t\t\t\$(function() {
\t\t\t\t\t\t\tvar post_data = 'selected[]=";
        // line 737
        echo ($context["order_id"] ?? null);
        echo "';

\t\t\t\t\t\t\t\$.ajax( {
\t\t\t\t\t\t\t\turl: 'index.php?route=sale/order/getShippingData&user_token=";
        // line 740
        echo ($context["user_token"] ?? null);
        echo "',
\t\t\t\t\t\t\t\ttype: 'POST',
\t\t\t\t\t\t\t\tdata: post_data,
\t\t\t\t\t\t\t\tdataType: 'json',
\t\t\t\t\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\t\t\t\tif(json['error']) {
\t\t\t\t\t\t\t\t\t\t\$('.container-fluid:eq(1)').prepend('<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\t\t\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\tif (json instanceof Object) {
\t\t\t\t\t\t\t\t\t\tfor (var i in json['orders']) {
\t\t\t\t\t\t\t\t\t\t\tvar
\t\t\t\t\t\t\t\t\t\t\t\tf = false,
\t\t\t\t\t\t\t\t\t\t\t\tbtn_o = '<div class=\"btn-group\"><button type=\"button\" id=\"button-cn\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"fa fa-file-text-o\" aria-hidden=\"true\"></i> <span class=\"caret\"></span></button><ul class=\"dropdown-menu dropdown-menu-right\">';

\t\t\t\t\t\t\t\t\t\t\tbtn_o += '<li class=\"dropdown-header\">' + json['heading_cn'] + '</li>';
\t\t\t\t\t\t\t\t\t\t\tbtn_o += '<li role=\"separator\" class=\"divider\"></li>';

\t\t\t\t\t\t\t\t\t\t\tfor (var ii in json['orders'][i]) {
\t\t\t\t\t\t\t\t\t\t\t\tbtn_o += '<li class=\"dropdown-header\">' + json['shipping_methods'][ii]['heading'] + '</li>';

\t\t\t\t\t\t\t\t\t\t\t\tif (json['orders'][i][ii]['create']) {
\t\t\t\t\t\t\t\t\t\t\t\t\tbtn_o += '<li><a href=\"' + json['orders'][i][ii]['create']['href'] + '\">' + json['orders'][i][ii]['create']['text'] + '</a></li>';
\t\t\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t\t\tif (json['orders'][i][ii]['edit']) {
\t\t\t\t\t\t\t\t\t\t\t\t\tf = true;
\t\t\t\t\t\t\t\t\t\t\t\t\tbtn_o += '<li><a href=\"' + json['orders'][i][ii]['edit']['href'] + '\">' + json['orders'][i][ii]['edit']['text'] + '</a></li>';
\t\t\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t\t\tif (json['orders'][i][ii]['delete']) {
\t\t\t\t\t\t\t\t\t\t\t\t\tf = true;
\t\t\t\t\t\t\t\t\t\t\t\t\tbtn_o += '<li><a style=\"cursor: pointer;\" onclick=\"deleteCN(\\'' + ii + '\\');\">' + json['orders'][i][ii]['delete']['text'] + '</a></li>';
\t\t\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t\t\tif (json['orders'][i][ii]['assignment']) {
\t\t\t\t\t\t\t\t\t\t\t\t\tbtn_o += '<li><a style=\"cursor: pointer;\" onclick=\"assignmentCN(\\'' + ii + '\\');\">' + json['orders'][i][ii]['assignment']['text'] + '</a></li>';
\t\t\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t\t\tbtn_o += '<li role=\"separator\" class=\"divider\"></li>';
\t\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t\tbtn_o += '</ul></div> ';

\t\t\t\t\t\t\t\t\t\t\t\$('div.container-fluid div.pull-right:last').prepend(btn_o);

\t\t\t\t\t\t\t\t\t\t\tif (f) {
\t\t\t\t\t\t\t\t\t\t\t\t\$('div.container-fluid div.pull-right #button-cn').toggleClass('btn-default btn-info');
\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\terror: function (jqXHR, textStatus, errorThrown) {
\t\t\t\t\t\t\t\t\tconsole.log(textStatus);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t} );
\t\t\t\t\t\t} );
\t\t\t\t\t//--></script>
\t\t\t\t\t<!-- END Shipping Data -->
\t\t\t\t
";
        // line 802
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "sale/order_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1485 => 802,  1420 => 740,  1414 => 737,  1367 => 693,  1361 => 690,  1310 => 642,  1304 => 639,  1286 => 624,  1281 => 622,  1273 => 617,  1246 => 595,  1219 => 577,  1210 => 573,  1187 => 555,  1175 => 546,  1169 => 543,  1154 => 531,  1130 => 512,  1116 => 501,  1092 => 482,  1078 => 471,  1054 => 452,  1040 => 441,  1016 => 422,  982 => 393,  973 => 386,  962 => 385,  958 => 384,  948 => 377,  944 => 376,  938 => 373,  934 => 372,  931 => 371,  925 => 368,  921 => 367,  918 => 366,  916 => 365,  911 => 363,  907 => 362,  899 => 357,  893 => 353,  886 => 348,  877 => 345,  873 => 344,  870 => 343,  866 => 342,  858 => 337,  852 => 333,  849 => 332,  842 => 327,  833 => 324,  829 => 323,  826 => 322,  822 => 321,  814 => 316,  808 => 312,  805 => 311,  798 => 306,  789 => 303,  785 => 302,  782 => 301,  778 => 300,  770 => 295,  764 => 291,  762 => 290,  754 => 287,  743 => 279,  732 => 271,  719 => 263,  711 => 257,  705 => 256,  696 => 252,  692 => 250,  683 => 246,  679 => 244,  676 => 243,  672 => 242,  664 => 237,  658 => 234,  650 => 228,  639 => 226,  635 => 225,  631 => 224,  627 => 223,  620 => 219,  614 => 215,  606 => 211,  598 => 206,  593 => 203,  591 => 202,  586 => 199,  577 => 196,  572 => 194,  568 => 192,  563 => 191,  554 => 188,  550 => 187,  542 => 184,  539 => 183,  534 => 182,  525 => 179,  521 => 178,  517 => 177,  513 => 176,  505 => 175,  497 => 174,  494 => 173,  488 => 172,  485 => 171,  483 => 170,  480 => 169,  472 => 168,  455 => 166,  451 => 164,  447 => 163,  439 => 158,  435 => 157,  431 => 156,  427 => 155,  423 => 154,  418 => 152,  409 => 145,  403 => 144,  401 => 143,  397 => 142,  391 => 138,  385 => 137,  383 => 136,  379 => 135,  370 => 129,  359 => 120,  355 => 119,  352 => 118,  344 => 116,  336 => 114,  333 => 113,  331 => 112,  327 => 111,  324 => 110,  314 => 109,  312 => 108,  308 => 107,  303 => 104,  299 => 103,  296 => 102,  288 => 100,  280 => 98,  277 => 97,  275 => 96,  271 => 95,  267 => 94,  262 => 91,  258 => 90,  250 => 88,  248 => 87,  244 => 86,  240 => 85,  232 => 80,  221 => 72,  217 => 71,  209 => 68,  205 => 67,  199 => 64,  195 => 63,  190 => 60,  182 => 59,  172 => 58,  168 => 57,  161 => 53,  151 => 45,  145 => 42,  141 => 41,  138 => 40,  136 => 39,  131 => 37,  127 => 36,  121 => 33,  117 => 32,  109 => 29,  105 => 28,  97 => 23,  87 => 15,  76 => 13,  72 => 12,  67 => 10,  49 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sale/order_info.twig", "");
    }
}
