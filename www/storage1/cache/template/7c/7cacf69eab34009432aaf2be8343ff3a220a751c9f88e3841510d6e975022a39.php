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

/* catalog/category_list.twig */
class __TwigTemplate_71462946bbff453ea160cec9f518638c496e48fc718a0db0f7df985689ff0483 extends \Twig\Template
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
      <div class=\"pull-right\"><a href=\"";
        // line 5
        echo ($context["add"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a> <a href=\"";
        echo ($context["repair"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_rebuild"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-refresh\"></i></a>

        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 7
        echo ($context["button_filter"] ?? null);
        echo "\" onclick=\"\$('#filter-category').toggleClass('hidden-sm hidden-xs');\" class=\"btn btn-default hidden-md hidden-lg\"><i class=\"fa fa-filter\"></i></button>
      
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 9
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-category').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
      </div>
      <h1>";
        // line 11
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 14
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 14);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 14);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 20
        if (($context["error_warning"] ?? null)) {
            // line 21
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 25
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 26
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 30
        echo "
    <div class=\"row\">
      <div id=\"filter-category\" class=\"col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-filter\"></i> ";
        // line 35
        echo ($context["text_filter"] ?? null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-type\">";
        // line 39
        echo ($context["entry_type"] ?? null);
        echo "</label>
              <select name=\"filter_information\" id=\"input-type\" class=\"form-control\">
                <option value=\"\">";
        // line 41
        echo ($context["text_type_all"] ?? null);
        echo "</option>
                  ";
        // line 42
        if ((($context["filter_information"] ?? null) == "1")) {
            // line 43
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_type_information"] ?? null);
            echo "</option>
                  ";
        } else {
            // line 45
            echo "                <option value=\"1\">";
            echo ($context["text_type_information"] ?? null);
            echo "</option>
                  ";
        }
        // line 47
        echo "                  ";
        if ((($context["filter_information"] ?? null) == "0")) {
            // line 48
            echo "                <option value=\"0\" selected=\"selected\">";
            echo ($context["text_type_product"] ?? null);
            echo "</option>
                  ";
        } else {
            // line 50
            echo "                <option value=\"0\">";
            echo ($context["text_type_product"] ?? null);
            echo "</option>
                  ";
        }
        // line 52
        echo "              </select>
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-category\">";
        // line 55
        echo ($context["entry_category"] ?? null);
        echo "</label>
              <input type=\"text\" name=\"filter_name\" value=\"";
        // line 56
        echo ($context["filter_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_category"] ?? null);
        echo "\" id=\"input-category\" class=\"form-control\" />
              <input type=\"hidden\" name=\"filter_category_id\" value=\"";
        // line 57
        echo ($context["filter_category_id"] ?? null);
        echo "\" />
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-store\">";
        // line 60
        echo ($context["entry_store"] ?? null);
        echo "</label>
              <select name=\"filter_store_id\" id=\"input-store\" class=\"form-control\">
                <option value=\"\"></option>
                ";
        // line 63
        if ((($context["filter_store_id"] ?? null) == "0")) {
            // line 64
            echo "                <option value=\"0\" selected=\"selected\">";
            echo ($context["text_default"] ?? null);
            echo "</option>
                ";
        } else {
            // line 66
            echo "                <option value=\"0\">";
            echo ($context["text_default"] ?? null);
            echo "</option>
                ";
        }
        // line 67
        echo "                  
                ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 69
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 69) == ($context["filter_store_id"] ?? null))) {
                // line 70
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 70);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 70);
                echo "</option>
                ";
            } else {
                // line 72
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 72);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 72);
                echo "</option>
                ";
            }
            // line 74
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "              </select>
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-status\">";
        // line 78
        echo ($context["entry_status"] ?? null);
        echo "</label>
              <select name=\"filter_status\" id=\"input-status\" class=\"form-control\">
                <option value=\"\"></option>
                  ";
        // line 81
        if ((($context["filter_status"] ?? null) == "1")) {
            // line 82
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                  ";
        } else {
            // line 84
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                  ";
        }
        // line 86
        echo "                  ";
        if ((($context["filter_status"] ?? null) == "0")) {
            // line 87
            echo "                <option value=\"0\" selected=\"selected\">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        } else {
            // line 89
            echo "                <option value=\"0\">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        }
        // line 91
        echo "              </select>
            </div>
            <div class=\"form-group text-right\">
              <button type=\"button\" id=\"button-filter\" class=\"btn btn-default\"><i class=\"fa fa-filter\"></i> ";
        // line 94
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
        // line 103
        echo ($context["text_list"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 106
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-category\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                  <td class=\"text-left\">";
        // line 112
        if ((($context["sort"] ?? null) == "name")) {
            // line 113
            echo "                    <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 115
            echo "                    <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a>
                    ";
        }
        // line 116
        echo "</td>
                  <td class=\"text-right\">";
        // line 117
        if ((($context["sort"] ?? null) == "sort_order")) {
            // line 118
            echo "                    <a href=\"";
            echo ($context["sort_sort_order"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_sort_order"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 120
            echo "                    <a href=\"";
            echo ($context["sort_sort_order"] ?? null);
            echo "\">";
            echo ($context["column_sort_order"] ?? null);
            echo "</a>
                    ";
        }
        // line 121
        echo "</td>

                  <td class=\"text-left\">
                    ";
        // line 124
        if ((($context["sort"] ?? null) == "c1.status")) {
            // line 125
            echo "                    <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 127
            echo "                    <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a>
                    ";
        }
        // line 129
        echo "                  </td>
      
                  <td class=\"text-right\">";
        // line 131
        echo ($context["column_action"] ?? null);
        echo "</td>
                </tr>
              </thead>
              <tbody>
                ";
        // line 135
        if (($context["categories"] ?? null)) {
            // line 136
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 137
                echo "                <tr>
                  <td class=\"text-center\">";
                // line 138
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 138), ($context["selected"] ?? null))) {
                    // line 139
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 139);
                    echo "\" checked=\"checked\" />
                    ";
                } else {
                    // line 141
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 141);
                    echo "\" />
                    ";
                }
                // line 142
                echo "</td>
                  <td class=\"text-left\">";
                // line 143
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 143);
                echo "</td>
                  <td class=\"text-right\">";
                // line 144
                echo twig_get_attribute($this->env, $this->source, $context["category"], "sort_order", [], "any", false, false, false, 144);
                echo "</td>

                  <td class=\"text-left\">";
                // line 146
                echo twig_get_attribute($this->env, $this->source, $context["category"], "status", [], "any", false, false, false, 146);
                echo "</td>
      
                  <td class=\"text-right\"><a href=\"";
                // line 148
                echo twig_get_attribute($this->env, $this->source, $context["category"], "edit", [], "any", false, false, false, 148);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 151
            echo "                ";
        } else {
            // line 152
            echo "                <tr>
                  <td class=\"text-center\" colspan=\"4\">";
            // line 153
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                </tr>
                ";
        }
        // line 156
        echo "              </tbody>
            </table>
          </div>
        </form>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 161
        echo ($context["pagination"] ?? null);
        echo "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 162
        echo ($context["results"] ?? null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
</div>

      </div>
    </div>
      

  <script type=\"text/javascript\"><!--
\$('#button-filter').on('click', function() {
\tvar url = '';

\tvar filter_information = \$('select[name=\\'filter_information\\']').val();

    if (filter_information != '') {
        url += '&filter_information=' + encodeURIComponent(filter_information);
    }
        
\tvar filter_name = \$('input[name=\\'filter_name\\']').val();

    if (filter_name) {
        url += '&filter_name=' + encodeURIComponent(filter_name);
    }
        
    var filter_category_id = \$('input[name=\\'filter_category_id\\']').val();

    if (filter_category_id) {
        url += '&filter_category_id=' + encodeURIComponent(filter_category_id);
    }        
      
\tvar filter_store_id = \$('select[name=\\'filter_store_id\\']').val();

\tif (filter_store_id) {
\t\turl += '&filter_store_id=' + encodeURIComponent(filter_store_id);
\t}
\t
\tvar filter_status = \$('select[name=\\'filter_status\\']').val();

\tif (filter_status != '') {
\t\turl += '&filter_status=' + encodeURIComponent(filter_status);
\t}

\tlocation = 'index.php?route=catalog/category&user_token=";
        // line 207
        echo ($context["user_token"] ?? null);
        echo "' + url;
});
//--></script> 
  <script type=\"text/javascript\"><!--
// IE and Edge fix!
\$('button[form=\\'form-category\\']').on('click', function(e) {
\t\$('#form-category').attr('action', \$(this).attr('formaction'));
});
  
\$('input[name=\\'filter_name\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/category/autocomplete&user_token=";
        // line 219
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',\t\t\t
\t\t\tsuccess: function(json) {
\t\t\t\tjson.unshift({
\t\t\t\t\tcategory_id: 0,
\t\t\t\t\tname: '";
        // line 224
        echo ($context["text_none_category"] ?? null);
        echo "'
\t\t\t\t});

\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['category_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'filter_name\\']').val(item['label']);
        \$('input[name=\\'filter_category_id\\']').val(item['value']);
\t}
});

\$('input[name=\\'filter_name\\']').keyup(function() {
    var value = \$(this).val();
    if (value == '') {
        \$('input[name=\\'filter_category_id\\']').val('')
    }
});
      
//--></script>
      
";
        // line 251
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "catalog/category_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  567 => 251,  537 => 224,  529 => 219,  514 => 207,  466 => 162,  462 => 161,  455 => 156,  449 => 153,  446 => 152,  443 => 151,  432 => 148,  427 => 146,  422 => 144,  418 => 143,  415 => 142,  409 => 141,  403 => 139,  401 => 138,  398 => 137,  393 => 136,  391 => 135,  384 => 131,  380 => 129,  372 => 127,  362 => 125,  360 => 124,  355 => 121,  347 => 120,  337 => 118,  335 => 117,  332 => 116,  324 => 115,  314 => 113,  312 => 112,  303 => 106,  297 => 103,  285 => 94,  280 => 91,  274 => 89,  268 => 87,  265 => 86,  259 => 84,  253 => 82,  251 => 81,  245 => 78,  240 => 75,  234 => 74,  226 => 72,  218 => 70,  215 => 69,  211 => 68,  208 => 67,  202 => 66,  196 => 64,  194 => 63,  188 => 60,  182 => 57,  176 => 56,  172 => 55,  167 => 52,  161 => 50,  155 => 48,  152 => 47,  146 => 45,  140 => 43,  138 => 42,  134 => 41,  129 => 39,  122 => 35,  115 => 30,  107 => 26,  104 => 25,  96 => 21,  94 => 20,  88 => 16,  77 => 14,  73 => 13,  68 => 11,  61 => 9,  56 => 7,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/category_list.twig", "");
    }
}
