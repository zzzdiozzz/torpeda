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
class __TwigTemplate_472cb0f7de390dc43758586bb3db790aed09db59a01c6bdc08bd1ea9577b4756 extends \Twig\Template
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
            echo "                
<!-- NEOSEO NovaPoshta BEGIN -->
              <td class=\"text-left\">";
            // line 146
            echo ($context["shipping_address"] ?? null);
            echo "
                ";
            // line 147
            if ((isset($context["np_text"]) || array_key_exists("np_text", $context))) {
                // line 148
                echo "                  ";
                if ((($context["method"] ?? null) == "courier_delivery")) {
                    // line 149
                    echo "                    <div class='alert-danger'>";
                    echo ($context["text_check_fio"] ?? null);
                    echo "</div>
                  ";
                }
                // line 151
                echo "                  ";
                if ((isset($context["np_error_warning"]) || array_key_exists("np_error_warning", $context))) {
                    // line 152
                    echo "                    <div class='alert-danger'>";
                    echo ($context["np_error_warning"] ?? null);
                    echo "</div>
                  ";
                }
                // line 154
                echo "              <br> <a href=\"";
                echo ($context["np_link"] ?? null);
                echo "\" class=\"btn btn-success\"><i class=\"fa fa-plus\"></i>";
                echo ($context["np_text"] ?? null);
                echo "</a>
                ";
            }
            // line 156
            echo "                  ";
            if ((isset($context["enp"]) || array_key_exists("enp", $context))) {
                // line 157
                echo "                  <br><a href=\"https://my.novaposhta.ua/orders/printDocument/orders/";
                echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["enp"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["ttn"] ?? null) : null);
                echo "/type/pdf/apiKey/";
                echo ($context["np_api_key"] ?? null);
                echo "\" target=\"_blank\">";
                echo ($context["text_print_doc"] ?? null);
                echo "</a>
                  <br><a href=\"https://my.novaposhta.ua/orders/printMarkings/orders/";
                // line 158
                echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["enp"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["ttn"] ?? null) : null);
                echo "/type/pdf/apiKey/";
                echo ($context["np_api_key"] ?? null);
                echo "\" target=\"_blank\">";
                echo ($context["text_print_mark"] ?? null);
                echo "</a>
                  <br><a href=\"";
                // line 159
                echo ($context["del_link"] ?? null);
                echo "\" class='btn btn-warning' onclick=\"return confirm('";
                echo ($context["text_confirm"] ?? null);
                echo "')\"><i class=\"fa fa-trash-o\"></i> ";
                echo ($context["text_delete_ecp"] ?? null);
                echo "</a>
                <div class=\"info\">
                  <strong>";
                // line 161
                echo ($context["text_ttn"] ?? null);
                echo "</strong>: ";
                echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["enp"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["ttn"] ?? null) : null);
                echo "
                </div>
                <div class=\"warning\">
                  <strong>";
                // line 164
                echo ($context["text_status"] ?? null);
                echo "</strong>: ";
                echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["enp"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["status"] ?? null) : null);
                echo " <a href=\"";
                echo ($context["refresh_link"] ?? null);
                echo "\"><i class=\"fa fa-refresh\"></i></a>
                </div>
                <div class=\"info\">
                  <strong>";
                // line 167
                echo ($context["text_delivery_date"] ?? null);
                echo "</strong>: ";
                echo twig_get_attribute($this->env, $this->source, ($context["enp"] ?? null), "estimated_delivery_date", [], "any", false, false, false, 167);
                echo "
                </div>
                ";
            }
            // line 170
            echo "              </td>
<!-- NEOSEO NovaPoshta END -->
              ";
        }
        // line 172
        echo " </tr>
          </tbody>
        </table>
        <table class=\"table table-bordered\">
          <thead>
            <tr>

\t\t\t\t<td class=\"text-left\">";
        // line 179
        echo ($context["column_image"] ?? null);
        echo "</td>
\t\t\t
              <td class=\"text-left\">";
        // line 181
        echo ($context["column_product"] ?? null);
        echo "</td>
              <td class=\"text-left\">";
        // line 182
        echo ($context["column_model"] ?? null);
        echo "</td>
              <td class=\"text-right\">";
        // line 183
        echo ($context["column_quantity"] ?? null);
        echo "</td>
              <td class=\"text-right\">";
        // line 184
        echo ($context["column_price"] ?? null);
        echo "</td>
              <td class=\"text-right\">";
        // line 185
        echo ($context["column_total"] ?? null);
        echo "</td>
            </tr>
          </thead>
          <tbody>

            ";
        // line 190
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 191
            echo "              <tr>

\t\t\t\t<td style=\"text-align:center;\"><a data-fancybox=\"gallery\" data-caption=\"Name: ";
            // line 193
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 193);
            echo " <br> Model: ";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 193);
            echo " <br> Quantity: ";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 193);
            echo " <br> Unit Price: ";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 193);
            echo " <br> Total: ";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 193);
            echo "\" href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "imagelg", [], "any", false, false, false, 193);
            echo "\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "imagesm", [], "any", false, false, false, 193);
            echo "\"></a></td>
\t\t\t
                <td class=\"text-left\"><a href=\"";
            // line 195
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 195);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 195);
            echo "</a> ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 195));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 196
                echo "                    <br/>
                    ";
                // line 197
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 197) != "file")) {
                    // line 198
                    echo "                      &nbsp;
                      <small> - ";
                    // line 199
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 199);
                    echo ": ";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 199);
                    echo "</small> ";
                } else {
                    // line 200
                    echo "                      &nbsp;
                      <small> - ";
                    // line 201
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 201);
                    echo ": <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "href", [], "any", false, false, false, 201);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 201);
                    echo "</a></small> ";
                }
                // line 202
                echo "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</td>
                <td class=\"text-left\">";
            // line 203
            echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 203);
            echo "</td>
                <td class=\"text-right\">";
            // line 204
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 204);
            echo "</td>
                <td class=\"text-right\">";
            // line 205
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 205);
            echo "</td>
                <td class=\"text-right\">";
            // line 206
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 206);
            echo "</td>
              </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 209
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 210
            echo "              <tr>
                <td class=\"text-left\"><a href=\"";
            // line 211
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "href", [], "any", false, false, false, 211);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 211);
            echo "</a></td>
                <td class=\"text-left\"></td>
                <td class=\"text-right\">1</td>
                <td class=\"text-right\">";
            // line 214
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 214);
            echo "</td>
                <td class=\"text-right\">";
            // line 215
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 215);
            echo "</td>
              </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 218
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 219
            echo "              <tr>
                
\t\t\t\t<td colspan=\"5\" class=\"text-right\">";
            // line 221
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 221);
            echo "</td>
\t\t\t
                <td class=\"text-right\">";
            // line 223
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 223);
            echo "</td>
              </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 226
        echo "          </tbody>

        </table>
        ";
        // line 229
        if (($context["comment"] ?? null)) {
            // line 230
            echo "          <table class=\"table table-bordered\">
            <thead>
              <tr>
                <td>";
            // line 233
            echo ($context["text_comment"] ?? null);
            echo "</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>";
            // line 238
            echo ($context["comment"] ?? null);
            echo "</td>
              </tr>
            </tbody>
          </table>
        ";
        }
        // line 242
        echo " </div>
    </div>
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-comment-o\"></i> ";
        // line 246
        echo ($context["text_history"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <ul class=\"nav nav-tabs\">
          <li class=\"active\"><a href=\"#tab-history\" data-toggle=\"tab\">";
        // line 250
        echo ($context["tab_history"] ?? null);
        echo "</a></li>
          <li><a href=\"#tab-additional\" data-toggle=\"tab\">";
        // line 251
        echo ($context["tab_additional"] ?? null);
        echo "</a></li>
          ";
        // line 252
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tabs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 253
            echo "            <li><a href=\"#tab-";
            echo twig_get_attribute($this->env, $this->source, $context["tab"], "code", [], "any", false, false, false, 253);
            echo "\" data-toggle=\"tab\">";
            echo twig_get_attribute($this->env, $this->source, $context["tab"], "title", [], "any", false, false, false, 253);
            echo "</a></li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 255
        echo "        </ul>
        <div class=\"tab-content\">
          <div class=\"tab-pane active\" id=\"tab-history\">
            <div id=\"history\"></div>
            <br/>
            <fieldset>
              <legend>";
        // line 261
        echo ($context["text_history_add"] ?? null);
        echo "</legend>
              <form class=\"form-horizontal\">
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-order-status\">";
        // line 264
        echo ($context["entry_order_status"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"order_status_id\" id=\"input-order-status\" class=\"form-control\">


                      ";
        // line 269
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["order_statuses"]);
        foreach ($context['_seq'] as $context["_key"] => $context["order_statuses"]) {
            // line 270
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_statuses"], "order_status_id", [], "any", false, false, false, 270) == ($context["order_status_id"] ?? null))) {
                // line 271
                echo "

                          <option value=\"";
                // line 273
                echo twig_get_attribute($this->env, $this->source, $context["order_statuses"], "order_status_id", [], "any", false, false, false, 273);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_statuses"], "name", [], "any", false, false, false, 273);
                echo "</option>


                        ";
            } else {
                // line 277
                echo "

                          <option value=\"";
                // line 279
                echo twig_get_attribute($this->env, $this->source, $context["order_statuses"], "order_status_id", [], "any", false, false, false, 279);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_statuses"], "name", [], "any", false, false, false, 279);
                echo "</option>


                        ";
            }
            // line 283
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_statuses'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 284
        echo "

                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-override\"><span data-toggle=\"tooltip\" title=\"";
        // line 290
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
        // line 298
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
        // line 306
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
        // line 314
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i> ";
        echo ($context["button_history_add"] ?? null);
        echo "</button>
            </div>
          </div>
          <div class=\"tab-pane\" id=\"tab-additional\"> ";
        // line 317
        if (($context["account_custom_fields"] ?? null)) {
            // line 318
            echo "              <div class=\"table-responsive\">
                <table class=\"table table-bordered\">
                  <thead>
                    <tr>
                      <td colspan=\"2\">";
            // line 322
            echo ($context["text_account_custom_field"] ?? null);
            echo "</td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
            // line 327
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["account_custom_fields"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
                // line 328
                echo "                      <tr>
                        <td>";
                // line 329
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 329);
                echo "</td>
                        <td>";
                // line 330
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 330);
                echo "</td>
                      </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 333
            echo "                  </tbody>

                </table>
              </div>
            ";
        }
        // line 338
        echo "            ";
        if (($context["payment_custom_fields"] ?? null)) {
            // line 339
            echo "              <div class=\"table-responsive\">
                <table class=\"table table-bordered\">
                  <thead>
                    <tr>
                      <td colspan=\"2\">";
            // line 343
            echo ($context["text_payment_custom_field"] ?? null);
            echo "</td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
            // line 348
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["payment_custom_fields"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
                // line 349
                echo "                      <tr>
                        <td>";
                // line 350
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 350);
                echo "</td>
                        <td>";
                // line 351
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 351);
                echo "</td>
                      </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 354
            echo "                  </tbody>

                </table>
              </div>
            ";
        }
        // line 359
        echo "            ";
        if ((($context["shipping_method"] ?? null) && ($context["shipping_custom_fields"] ?? null))) {
            // line 360
            echo "              <div class=\"table-responsive\">
                <table class=\"table table-bordered\">
                  <thead>
                    <tr>
                      <td colspan=\"2\">";
            // line 364
            echo ($context["text_shipping_custom_field"] ?? null);
            echo "</td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
            // line 369
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["shipping_custom_fields"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
                // line 370
                echo "                      <tr>
                        <td>";
                // line 371
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 371);
                echo "</td>
                        <td>";
                // line 372
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 372);
                echo "</td>
                      </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 375
            echo "                  </tbody>

                </table>
              </div>
            ";
        }
        // line 380
        echo "            <div class=\"table-responsive\">
              <table class=\"table table-bordered\">
                <thead>
                  <tr>
                    <td colspan=\"2\">";
        // line 384
        echo ($context["text_browser"] ?? null);
        echo "</td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>";
        // line 389
        echo ($context["text_ip"] ?? null);
        echo "</td>
                    <td>";
        // line 390
        echo ($context["ip"] ?? null);
        echo "</td>
                  </tr>
                  ";
        // line 392
        if (($context["forwarded_ip"] ?? null)) {
            // line 393
            echo "                    <tr>
                      <td>";
            // line 394
            echo ($context["text_forwarded_ip"] ?? null);
            echo "</td>
                      <td>";
            // line 395
            echo ($context["forwarded_ip"] ?? null);
            echo "</td>
                    </tr>
                  ";
        }
        // line 398
        echo "                  <tr>
                    <td>";
        // line 399
        echo ($context["text_user_agent"] ?? null);
        echo "</td>
                    <td>";
        // line 400
        echo ($context["user_agent"] ?? null);
        echo "</td>
                  </tr>
                  <tr>
                    <td>";
        // line 403
        echo ($context["text_accept_language"] ?? null);
        echo "</td>
                    <td>";
        // line 404
        echo ($context["accept_language"] ?? null);
        echo "</td>
                  </tr>
                </tbody>

              </table>
            </div>
          </div>
          ";
        // line 411
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tabs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 412
            echo "            <div class=\"tab-pane\" id=\"tab-";
            echo twig_get_attribute($this->env, $this->source, $context["tab"], "code", [], "any", false, false, false, 412);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["tab"], "content", [], "any", false, false, false, 412);
            echo "</div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 413
        echo " </div>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
  \$(document).delegate('#button-invoice', 'click', function() {
\t  \$.ajax({
\t\t  url: 'index.php?route=sale/order/createinvoiceno&user_token=";
        // line 420
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
        // line 449
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
        // line 468
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
        // line 479
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
        // line 498
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
        // line 509
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
        // line 528
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
        // line 539
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
        // line 558
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
        // line 570
        echo ($context["catalog"] ?? null);
        echo "index.php?route=api/login',
\t  type: 'post',
\t  dataType: 'json',
\t  data: 'key=";
        // line 573
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
        // line 582
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
        // line 600
        echo ($context["user_token"] ?? null);
        echo "&order_id=";
        echo ($context["order_id"] ?? null);
        echo "');

  \$('#button-history').on('click', function() {
\t  \$.ajax({
\t\t  url: '";
        // line 604
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
        // line 622
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
        // line 644
        echo ($context["heading_cn"] ?? null);
        echo "</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group clearfix\">
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"cn_shipping_method\" value=\"\" id=\"cn_shipping_method\" />
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"cn_number\">";
        // line 649
        echo ($context["entry_cn_number"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"cn_number\" value=\"\" placeholder=\"";
        // line 651
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
        // line 666
        echo ($context["order_id"] ?? null);
        echo "';

\t\t\t\t\t\t\t\$.ajax( {
\t\t\t\t\t\t\t\turl: 'index.php?route=extension/shipping/' + shipping_method + '/deleteCNFromOrder&user_token=";
        // line 669
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
        // line 717
        echo ($context["order_id"] ?? null);
        echo "&cn_number=' + \$('#cn_number').val();

\t\t\t\t\t\t\t\t\$.ajax( {
\t\t\t\t\t\t\t\t\turl: 'index.php?route=extension/shipping/' + \$('#cn_shipping_method').val() + '/addCNToOrder&user_token=";
        // line 720
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
        // line 764
        echo ($context["order_id"] ?? null);
        echo "';

\t\t\t\t\t\t\t\$.ajax( {
\t\t\t\t\t\t\t\turl: 'index.php?route=sale/order/getShippingData&user_token=";
        // line 767
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
        // line 829
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
        return array (  1575 => 829,  1510 => 767,  1504 => 764,  1457 => 720,  1451 => 717,  1400 => 669,  1394 => 666,  1376 => 651,  1371 => 649,  1363 => 644,  1336 => 622,  1309 => 604,  1300 => 600,  1277 => 582,  1265 => 573,  1259 => 570,  1244 => 558,  1220 => 539,  1206 => 528,  1182 => 509,  1168 => 498,  1144 => 479,  1130 => 468,  1106 => 449,  1072 => 420,  1063 => 413,  1052 => 412,  1048 => 411,  1038 => 404,  1034 => 403,  1028 => 400,  1024 => 399,  1021 => 398,  1015 => 395,  1011 => 394,  1008 => 393,  1006 => 392,  1001 => 390,  997 => 389,  989 => 384,  983 => 380,  976 => 375,  967 => 372,  963 => 371,  960 => 370,  956 => 369,  948 => 364,  942 => 360,  939 => 359,  932 => 354,  923 => 351,  919 => 350,  916 => 349,  912 => 348,  904 => 343,  898 => 339,  895 => 338,  888 => 333,  879 => 330,  875 => 329,  872 => 328,  868 => 327,  860 => 322,  854 => 318,  852 => 317,  844 => 314,  833 => 306,  822 => 298,  809 => 290,  801 => 284,  795 => 283,  786 => 279,  782 => 277,  773 => 273,  769 => 271,  766 => 270,  762 => 269,  754 => 264,  748 => 261,  740 => 255,  729 => 253,  725 => 252,  721 => 251,  717 => 250,  710 => 246,  704 => 242,  696 => 238,  688 => 233,  683 => 230,  681 => 229,  676 => 226,  667 => 223,  662 => 221,  658 => 219,  653 => 218,  644 => 215,  640 => 214,  632 => 211,  629 => 210,  624 => 209,  615 => 206,  611 => 205,  607 => 204,  603 => 203,  595 => 202,  587 => 201,  584 => 200,  578 => 199,  575 => 198,  573 => 197,  570 => 196,  562 => 195,  545 => 193,  541 => 191,  537 => 190,  529 => 185,  525 => 184,  521 => 183,  517 => 182,  513 => 181,  508 => 179,  499 => 172,  494 => 170,  486 => 167,  476 => 164,  468 => 161,  459 => 159,  451 => 158,  442 => 157,  439 => 156,  431 => 154,  425 => 152,  422 => 151,  416 => 149,  413 => 148,  411 => 147,  407 => 146,  403 => 144,  401 => 143,  397 => 142,  391 => 138,  385 => 137,  383 => 136,  379 => 135,  370 => 129,  359 => 120,  355 => 119,  352 => 118,  344 => 116,  336 => 114,  333 => 113,  331 => 112,  327 => 111,  324 => 110,  314 => 109,  312 => 108,  308 => 107,  303 => 104,  299 => 103,  296 => 102,  288 => 100,  280 => 98,  277 => 97,  275 => 96,  271 => 95,  267 => 94,  262 => 91,  258 => 90,  250 => 88,  248 => 87,  244 => 86,  240 => 85,  232 => 80,  221 => 72,  217 => 71,  209 => 68,  205 => 67,  199 => 64,  195 => 63,  190 => 60,  182 => 59,  172 => 58,  168 => 57,  161 => 53,  151 => 45,  145 => 42,  141 => 41,  138 => 40,  136 => 39,  131 => 37,  127 => 36,  121 => 33,  117 => 32,  109 => 29,  105 => 28,  97 => 23,  87 => 15,  76 => 13,  72 => 12,  67 => 10,  49 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sale/order_info.twig", "");
    }
}
