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

/* sale/order_list.twig */
class __TwigTemplate_4cd3f8ec263b05989be0700124d4d6ba327842cadf150368836db78c37911575 extends \Twig\Template
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
  <div class=\"container-fluid\">
    <div class=\"pull-right\">
      <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_filter"] ?? null);
        echo "\" onclick=\"\$('#filter-order').toggleClass('hidden-sm hidden-xs');\" class=\"btn btn-default hidden-md hidden-lg\"><i class=\"fa fa-filter\"></i></button>

                  <!-- NEOSEO NovaPoshta BEGIN -->
                  ";
        // line 9
        if (((isset($context["novaposhta_status"]) || array_key_exists("novaposhta_status", $context)) && (($context["novaposhta_status"] ?? null) == 1))) {
            // line 10
            echo "                  <a href=\"";
            echo ($context["track_all_link"] ?? null);
            echo "\" class='btn btn-success'><i class='fa fa-refresh'></i> ";
            echo ($context["text_track_all"] ?? null);
            echo "</a>
                  ";
        }
        // line 12
        echo "                  <!-- NEOSEO NovaPoshta END -->
      <button type=\"submit\" id=\"button-shipping\" form=\"form-order\" formaction=\"";
        // line 13
        echo ($context["shipping"] ?? null);
        echo "\" formtarget=\"_blank\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_shipping_print"] ?? null);
        echo "\" class=\"btn btn-info\"><i class=\"fa fa-truck\"></i></button>
      <button type=\"submit\" id=\"button-invoice\" form=\"form-order\" formaction=\"";
        // line 14
        echo ($context["invoice"] ?? null);
        echo "\" formtarget=\"_blank\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_invoice_print"] ?? null);
        echo "\" class=\"btn btn-info\"><i class=\"fa fa-print\"></i></button>
      <a href=\"";
        // line 15
        echo ($context["add"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a> </div>
    <h1>";
        // line 16
        echo ($context["heading_title"] ?? null);
        echo "</h1>
    <ul class=\"breadcrumb\">
      ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 19
            echo "      <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 19);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 19);
            echo "</a></li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    </ul>
  </div>
</div>
<div class=\"container-fluid\">";
        // line 24
        if (($context["error_warning"] ?? null)) {
            // line 25
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 29
        echo "  ";
        if (($context["success"] ?? null)) {
            // line 30
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 34
        echo "  <div class=\"row\">
    <div id=\"filter-order\" class=\"col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs\">
      <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
          <h3 class=\"panel-title\"><i class=\"fa fa-filter\"></i> ";
        // line 38
        echo ($context["text_filter"] ?? null);
        echo "</h3>
        </div>
        <div class=\"panel-body\">
          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-order-id\">";
        // line 42
        echo ($context["entry_order_id"] ?? null);
        echo "</label>
            <input type=\"text\" name=\"filter_order_id\" value=\"";
        // line 43
        echo ($context["filter_order_id"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_order_id"] ?? null);
        echo "\" id=\"input-order-id\" class=\"form-control\" />
          </div>
          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-customer\">";
        // line 46
        echo ($context["entry_customer"] ?? null);
        echo "</label>
            <input type=\"text\" name=\"filter_customer\" value=\"";
        // line 47
        echo ($context["filter_customer"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_customer"] ?? null);
        echo "\" id=\"input-customer\" class=\"form-control\" />
          </div>
          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-order-status\">";
        // line 50
        echo ($context["entry_order_status"] ?? null);
        echo "</label>
            <select name=\"filter_order_status_id\" id=\"input-order-status\" class=\"form-control\">
              <option value=\"\"></option>
              
              ";
        // line 54
        if ((($context["filter_order_status_id"] ?? null) == "0")) {
            // line 55
            echo "              
              <option value=\"0\" selected=\"selected\">";
            // line 56
            echo ($context["text_missing"] ?? null);
            echo "</option>
              
              ";
        } else {
            // line 59
            echo "              
              <option value=\"0\">";
            // line 60
            echo ($context["text_missing"] ?? null);
            echo "</option>
              
              ";
        }
        // line 63
        echo "              ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 64
            echo "              ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 64) == ($context["filter_order_status_id"] ?? null))) {
                // line 65
                echo "              
              <option value=\"";
                // line 66
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 66);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 66);
                echo "</option>
              
              ";
            } else {
                // line 69
                echo "              
              <option value=\"";
                // line 70
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 70);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 70);
                echo "</option>
              
              ";
            }
            // line 73
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "            
            </select>
          </div>
          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-total\">";
        // line 78
        echo ($context["entry_total"] ?? null);
        echo "</label>
            <input type=\"text\" name=\"filter_total\" value=\"";
        // line 79
        echo ($context["filter_total"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_total"] ?? null);
        echo "\" id=\"input-total\" class=\"form-control\" />
          </div>
          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-date-added\">";
        // line 82
        echo ($context["entry_date_added"] ?? null);
        echo "</label>
            <div class=\"input-group date\">
              <input type=\"text\" name=\"filter_date_added\" value=\"";
        // line 84
        echo ($context["filter_date_added"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_added"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-added\" class=\"form-control\" />
              <span class=\"input-group-btn\">
              <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
              </span> </div>
          </div>
          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-date-modified\">";
        // line 90
        echo ($context["entry_date_modified"] ?? null);
        echo "</label>
            <div class=\"input-group date\">
              <input type=\"text\" name=\"filter_date_modified\" value=\"";
        // line 92
        echo ($context["filter_date_modified"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_modified"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-modified\" class=\"form-control\" />
              <span class=\"input-group-btn\">
              <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
              </span> </div>
          </div>
          <div class=\"form-group text-right\">
            <button type=\"button\" id=\"button-filter\" class=\"btn btn-default\"><i class=\"fa fa-filter\"></i> ";
        // line 98
        echo ($context["button_filter"] ?? null);
        echo "</button>
          </div>
        </div>
      </div>
    </div>
    <div class=\"col-md-9 col-md-pull-3 col-sm-12\">
      <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
          <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 106
        echo ($context["text_list"] ?? null);
        echo "</h3>
        </div>
        <div class=\"panel-body\">
          <form method=\"post\" action=\"\" enctype=\"multipart/form-data\" id=\"form-order\">
            <div class=\"table-responsive\">
              <table class=\"table table-bordered table-hover\">
                <thead>
                  <tr>
                    <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                    <td class=\"text-right\">";
        // line 115
        if ((($context["sort"] ?? null) == "o.order_id")) {
            echo " <a href=\"";
            echo ($context["sort_order"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_order_id"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_order"] ?? null);
            echo "\">";
            echo ($context["column_order_id"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                    <td class=\"text-left\">";
        // line 116
        if ((($context["sort"] ?? null) == "customer")) {
            echo " <a href=\"";
            echo ($context["sort_customer"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_customer"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_customer"] ?? null);
            echo "\">";
            echo ($context["column_customer"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                    <td class=\"text-left\">";
        // line 117
        if ((($context["sort"] ?? null) == "order_status")) {
            echo " <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                    <td class=\"text-right\">";
        // line 118
        if ((($context["sort"] ?? null) == "o.total")) {
            echo " <a href=\"";
            echo ($context["sort_total"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_total"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_total"] ?? null);
            echo "\">";
            echo ($context["column_total"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                    <td class=\"text-left\">";
        // line 119
        if ((($context["sort"] ?? null) == "o.date_added")) {
            echo " <a href=\"";
            echo ($context["sort_date_added"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_date_added"] ?? null);
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                    <td class=\"text-left\">";
        // line 120
        if ((($context["sort"] ?? null) == "o.date_modified")) {
            echo " <a href=\"";
            echo ($context["sort_date_modified"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_date_modified"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_date_modified"] ?? null);
            echo "\">";
            echo ($context["column_date_modified"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                    <td class=\"text-right\">";
        // line 121
        echo ($context["column_action"] ?? null);
        echo "</td>
                  </tr>
                </thead>
                <tbody>
                
                ";
        // line 126
        if (($context["orders"] ?? null)) {
            // line 127
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 128
                echo "                <tr>
                  <td class=\"text-center\"> ";
                // line 129
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 129), ($context["selected"] ?? null))) {
                    // line 130
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 130);
                    echo "\" checked=\"checked\" />
                    ";
                } else {
                    // line 132
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 132);
                    echo "\" />
                    ";
                }
                // line 134
                echo "                    <input type=\"hidden\" name=\"shipping_code[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order"], "shipping_code", [], "any", false, false, false, 134);
                echo "\" /></td>
                  <td class=\"text-right\">";
                // line 135
                echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 135);
                echo "</td>
                  <td class=\"text-left\">";
                // line 136
                echo twig_get_attribute($this->env, $this->source, $context["order"], "customer", [], "any", false, false, false, 136);
                echo "</td>
                  <td class=\"text-left\">";
                // line 137
                echo twig_get_attribute($this->env, $this->source, $context["order"], "order_status", [], "any", false, false, false, 137);
                echo "</td>
                  <td class=\"text-right\">";
                // line 138
                echo twig_get_attribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 138);
                echo "</td>
                  <td class=\"text-left\">";
                // line 139
                echo twig_get_attribute($this->env, $this->source, $context["order"], "date_added", [], "any", false, false, false, 139);
                echo "</td>
                  <td class=\"text-left\">";
                // line 140
                echo twig_get_attribute($this->env, $this->source, $context["order"], "date_modified", [], "any", false, false, false, 140);
                echo "</td>
                  <td class=\"text-right\"><div style=\"min-width: 120px;\">

                  <!-- NEOSEO NovaPoshta BEGIN -->
                  ";
                // line 144
                if (((isset($context["novaposhta_status"]) || array_key_exists("novaposhta_status", $context)) && (($context["novaposhta_status"] ?? null) == 1))) {
                    // line 145
                    echo "                  ";
                    if (twig_get_attribute($this->env, $this->source, ($context["ttns"] ?? null), twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 145), [], "array", true, true, false, 145)) {
                        // line 146
                        echo "                  <div style='float: left;border: 1px dashed;padding: 3px;border-radius: 5px;/*max-width: 250px;*/text-align: left;'>
                    <b>";
                        // line 147
                        echo ($context["text_ttn"] ?? null);
                        echo ":</b> ";
                        echo twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["ttns"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 147)] ?? null) : null), "ttn", [], "any", false, false, false, 147);
                        echo " <br>
                    <b>";
                        // line 148
                        echo ($context["text_status"] ?? null);
                        echo ":</b> ";
                        echo twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["ttns"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 148)] ?? null) : null), "status", [], "any", false, false, false, 148);
                        echo "
                  </div>
                 ";
                    }
                    // line 151
                    echo "                 ";
                }
                // line 152
                echo "                  <!-- NEOSEO NovaPoshta END -->
                      <div class=\"btn-group\"> <a href=\"";
                // line 153
                echo twig_get_attribute($this->env, $this->source, $context["order"], "view", [], "any", false, false, false, 153);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_view"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-eye\"></i></a>
                        <button type=\"button\" data-toggle=\"dropdown\" class=\"btn btn-primary dropdown-toggle\"><span class=\"caret\"></span></button>
                        <ul class=\"dropdown-menu dropdown-menu-right\">
                          <li><a href=\"";
                // line 156
                echo twig_get_attribute($this->env, $this->source, $context["order"], "edit", [], "any", false, false, false, 156);
                echo "\"><i class=\"fa fa-pencil\"></i> ";
                echo ($context["button_edit"] ?? null);
                echo "</a></li>
                          <li><a href=\"";
                // line 157
                echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 157);
                echo "\"><i class=\"fa fa-trash-o\"></i> ";
                echo ($context["button_delete"] ?? null);
                echo "</a></li>
                        </ul>
                      </div>
                    </div></td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 163
            echo "                ";
        } else {
            // line 164
            echo "                <tr>
                  <td class=\"text-center\" colspan=\"8\">";
            // line 165
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                </tr>
                ";
        }
        // line 168
        echo "                  </tbody>
                
              </table>
            </div>
          </form>
          <div class=\"row\">
            <div class=\"col-sm-6 text-left\">";
        // line 174
        echo ($context["pagination"] ?? null);
        echo "</div>
            <div class=\"col-sm-6 text-right\">";
        // line 175
        echo ($context["results"] ?? null);
        echo "</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$('#button-filter').on('click', function() {
\turl = '';

\tvar filter_order_id = \$('input[name=\\'filter_order_id\\']').val();

\tif (filter_order_id) {
\t\turl += '&filter_order_id=' + encodeURIComponent(filter_order_id);
\t}

\tvar filter_customer = \$('input[name=\\'filter_customer\\']').val();

\tif (filter_customer) {
\t\turl += '&filter_customer=' + encodeURIComponent(filter_customer);
\t}

\tvar filter_order_status_id = \$('select[name=\\'filter_order_status_id\\']').val();

\tif (filter_order_status_id !== '') {
\t\turl += '&filter_order_status_id=' + encodeURIComponent(filter_order_status_id);
\t}

\tvar filter_total = \$('input[name=\\'filter_total\\']').val();

\tif (filter_total) {
\t\turl += '&filter_total=' + encodeURIComponent(filter_total);
\t}

\tvar filter_date_added = \$('input[name=\\'filter_date_added\\']').val();

\tif (filter_date_added) {
\t\turl += '&filter_date_added=' + encodeURIComponent(filter_date_added);
\t}

\tvar filter_date_modified = \$('input[name=\\'filter_date_modified\\']').val();

\tif (filter_date_modified) {
\t\turl += '&filter_date_modified=' + encodeURIComponent(filter_date_modified);
\t}

\tlocation = 'index.php?route=sale/order&user_token=";
        // line 221
        echo ($context["user_token"] ?? null);
        echo "' + url;
});
//--></script> 
  <script type=\"text/javascript\"><!--
\$('input[name=\\'filter_customer\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=customer/customer/autocomplete&user_token=";
        // line 228
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['customer_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'filter_customer\\']').val(item['label']);
\t}
});
//--></script> 
  <script type=\"text/javascript\"><!--
\$('input[name^=\\'selected\\']').on('change', function() {
\t\$('#button-shipping, #button-invoice').prop('disabled', true);

\tvar selected = \$('input[name^=\\'selected\\']:checked');

\tif (selected.length) {
\t\t\$('#button-invoice').prop('disabled', false);
\t}

\tfor (i = 0; i < selected.length; i++) {
\t\tif (\$(selected[i]).parent().find('input[name^=\\'shipping_code\\']').val()) {
\t\t\t\$('#button-shipping').prop('disabled', false);

\t\t\tbreak;
\t\t}
\t}
});

\$('#button-shipping, #button-invoice').prop('disabled', true);

\$('input[name^=\\'selected\\']:first').trigger('change');

// IE and Edge fix!
\$('#button-shipping, #button-invoice').on('click', function(e) {
\t\$('#form-order').attr('action', this.getAttribute('formAction'));
});

\$('#form-order li:last-child a').on('click', function(e) {
\te.preventDefault();
\t
\tvar element = this;
\t
\tif (confirm('";
        // line 278
        echo ($context["text_confirm"] ?? null);
        echo "')) {
\t\t\$.ajax({
\t\t\turl: '";
        // line 280
        echo ($context["catalog"] ?? null);
        echo "index.php?route=api/order/delete&api_token=";
        echo ($context["api_token"] ?? null);
        echo "&store_id=";
        echo ($context["store_id"] ?? null);
        echo "&order_id=' + \$(element).attr('href'),
\t\t\tdataType: 'json',
\t\t\tbeforeSend: function() {
\t\t\t\t\$(element).parent().parent().parent().find('button').button('loading');
\t\t\t},
\t\t\tcomplete: function() {
\t\t\t\t\$(element).parent().parent().parent().find('button').button('reset');
\t\t\t},
\t\t\tsuccess: function(json) {
\t\t\t\t\$('.alert-dismissible').remove();
\t
\t\t\t\tif (json['error']) {
\t\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t}
\t
\t\t\t\tif (json['success']) {
\t\t\t\t\tlocation = '";
        // line 296
        echo ($context["delete"] ?? null);
        echo "';
\t\t\t\t}
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t}
});
//--></script> 
  <script src=\"view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js\" type=\"text/javascript\"></script>
  <link href=\"view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
  <script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 310
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickTime: false
});
//--></script></div>

\t\t\t\t\t<!-- START Shipping Data -->
\t\t\t\t\t<!-- START Modal assignment CN to order -->
\t\t\t\t\t<div class=\"modal fade\" id=\"assignment-cn-to-order\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"assignment-cn-to-order-label\">
\t\t\t\t\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t\t\t\t\t\t<h4 class=\"modal-title\" id=\"assignment-cn-to-order-label\">";
        // line 322
        echo ($context["heading_cn"] ?? null);
        echo "</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group clearfix\">
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"cn_order_id\" value=\"\" id=\"cn_order_id\" />
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"cn_shipping_method\" value=\"\" id=\"cn_shipping_method\" />
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"cn_number\">";
        // line 328
        echo ($context["entry_cn_number"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"cn_number\" value=\"\" placeholder=\"";
        // line 330
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
\t\t\t\t\t\tfunction deleteCN(self, shipping_method) {
\t\t\t\t\t\t\tvar post_data = 'order_id=' + \$(self).parents('tr').find('input[name^=\"selected\"]').val();

\t\t\t\t\t\t\t\$.ajax( {
\t\t\t\t\t\t\t\turl: 'index.php?route=extension/shipping/' + shipping_method + '/deleteCNFromOrder&user_token=";
        // line 348
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

\t\t\t\t\t\tfunction assignmentCN(self, shipping_method) {
\t\t\t\t\t\t\tif (typeof(self) !== 'undefined') {
\t\t\t\t\t\t\t\t\$('#cn_order_id').val(\$(self).parents('tr').find('input[name^=\"selected\"]').val());
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\tif (shipping_method) {
\t\t\t\t\t\t\t\t\$('#cn_shipping_method').val(shipping_method);
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\tif (\$('#assignment-cn-to-order').is(':hidden')) {
\t\t\t\t\t\t\t\t\$('#assignment-cn-to-order').modal('show');
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tvar post_data = 'order_id=' + \$('#cn_order_id').val() + '&cn_number=' + \$('#cn_number').val();

\t\t\t\t\t\t\t\t\$.ajax( {
\t\t\t\t\t\t\t\t\turl: 'index.php?route=extension/shipping/' + \$('#cn_shipping_method').val() + '/addCNToOrder&user_token=";
        // line 403
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
\t\t\t\t\t\t\tvar post_data = \$('input[name^=\"selected\"]');

\t\t\t\t\t\t\t\$.ajax( {
\t\t\t\t\t\t\t\turl: 'index.php?route=sale/order/getShippingData&user_token=";
        // line 450
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
\t\t\t\t\t\t\t\t\t\tif (json['shipping_methods']) {
\t\t\t\t\t\t\t\t\t\t\tvar btn_l = '<div class=\"btn-group\"><button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"fa fa-list-ul\"></i> <span class=\"caret\"></span></button><ul class=\"dropdown-menu dropdown-menu-right\">';

\t\t\t\t\t\t\t\t\t\t\tfor (var i in json['shipping_methods']) {
\t\t\t\t\t\t\t\t\t\t\t\tbtn_l += '<li class=\"dropdown-header\">' + json['shipping_methods'][i]['heading'] + '</li>';
\t\t\t\t\t\t\t\t\t\t\t\tbtn_l += '<li role=\"separator\" class=\"divider\"></li>';

\t\t\t\t\t\t\t\t\t\t\t\tif (json['shipping_methods'][i]['cn_list']) {
\t\t\t\t\t\t\t\t\t\t\t\t\tbtn_l += '<li><a href=\"' + json['shipping_methods'][i]['cn_list']['href'] + '\">' + json['shipping_methods'][i]['cn_list']['text'] + '</a></li>';
\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t\tbtn_l += '</ul></div> ';

\t\t\t\t\t\t\t\t\t\t\t\$('div.container-fluid div.pull-right:last').prepend(btn_l);
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\tfor (var i in json['orders']) {
\t\t\t\t\t\t\t\t\t\t\tvar
\t\t\t\t\t\t\t\t\t\t\t\tf = false,
\t\t\t\t\t\t\t\t\t\t\t\tbtn_o = '<div class=\"btn-group\"><button type=\"button\" id=\"button-cn-' + i + '\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"fa fa-file-text-o\" aria-hidden=\"true\"></i> <span class=\"caret\"></span></button><ul class=\"dropdown-menu dropdown-menu-right\">';

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
\t\t\t\t\t\t\t\t\t\t\t\t\tbtn_o += '<li><a style=\"cursor: pointer;\" onclick=\"deleteCN(this, \\'' + ii + '\\');\">' + json['orders'][i][ii]['delete']['text'] + '</a></li>';
\t\t\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t\t\tif (json['orders'][i][ii]['assignment']) {
\t\t\t\t\t\t\t\t\t\t\t\t\tbtn_o += '<li><a style=\"cursor: pointer;\" onclick=\"assignmentCN(this, \\'' + ii + '\\');\">' + json['orders'][i][ii]['assignment']['text'] + '</a></li>';
\t\t\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t\t\tbtn_o += '<li role=\"separator\" class=\"divider\"></li>';
\t\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t\tbtn_o += '</ul></div> ';

\t\t\t\t\t\t\t\t\t\t\t\$('input[value=\"' + i + '\"]').parents('tr').find('td:last div:first').prepend(btn_o);

\t\t\t\t\t\t\t\t\t\t\tif (f) {
\t\t\t\t\t\t\t\t\t\t\t\t\$('input[value=\"' + i + '\"]').parents('tr').find('[id^=\"button-cn\"]').toggleClass('btn-default btn-info');
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
    \t\t\t
";
        // line 529
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "sale/order_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  951 => 529,  869 => 450,  819 => 403,  761 => 348,  740 => 330,  735 => 328,  726 => 322,  711 => 310,  694 => 296,  671 => 280,  666 => 278,  613 => 228,  603 => 221,  554 => 175,  550 => 174,  542 => 168,  536 => 165,  533 => 164,  530 => 163,  516 => 157,  510 => 156,  502 => 153,  499 => 152,  496 => 151,  488 => 148,  482 => 147,  479 => 146,  476 => 145,  474 => 144,  467 => 140,  463 => 139,  459 => 138,  455 => 137,  451 => 136,  447 => 135,  442 => 134,  436 => 132,  430 => 130,  428 => 129,  425 => 128,  420 => 127,  418 => 126,  410 => 121,  392 => 120,  374 => 119,  356 => 118,  338 => 117,  320 => 116,  302 => 115,  290 => 106,  279 => 98,  268 => 92,  263 => 90,  252 => 84,  247 => 82,  239 => 79,  235 => 78,  229 => 74,  223 => 73,  215 => 70,  212 => 69,  204 => 66,  201 => 65,  198 => 64,  193 => 63,  187 => 60,  184 => 59,  178 => 56,  175 => 55,  173 => 54,  166 => 50,  158 => 47,  154 => 46,  146 => 43,  142 => 42,  135 => 38,  129 => 34,  121 => 30,  118 => 29,  110 => 25,  108 => 24,  103 => 21,  92 => 19,  88 => 18,  83 => 16,  77 => 15,  71 => 14,  65 => 13,  62 => 12,  54 => 10,  52 => 9,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sale/order_list.twig", "");
    }
}
