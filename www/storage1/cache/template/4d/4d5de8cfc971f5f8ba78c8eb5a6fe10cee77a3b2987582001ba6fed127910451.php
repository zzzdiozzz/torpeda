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

/* extension/module/ocfilter.twig */
class __TwigTemplate_52369a0122073beb8f73f2cf5c700d38b7503c5e8a90149e37f7cadda6335920 extends \Twig\Template
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
        <button type=\"submit\" form=\"form-ocfilter\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\" onclick=\"\$('#form-ocfilter').attr('action','";
        echo ($context["save"] ?? null);
        echo "');\"><i class=\"fa fa-save\"></i></button>
        <button type=\"submit\" form=\"form-ocfilter\" data-toggle=\"tooltip\" title=\"";
        // line 7
        echo ($context["button_apply"] ?? null);
        echo "\" class=\"btn btn-success\" onclick=\"\$('#form-ocfilter').attr('action','";
        echo ($context["apply"] ?? null);
        echo "');\"><i class=\"fa fa-save\"></i></button>
\t\t\t\t<a href=\"";
        // line 8
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
\t\t\t</div>
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
            echo "        <li><a href=\"";
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
    ";
        // line 20
        if (($context["error_warning"] ?? null)) {
            // line 21
            echo "    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
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
            echo "    <div class=\"alert alert-success\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 30
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <ul class=\"list-inline pull-right\">
          <li><a href=\"";
        // line 33
        echo ($context["filter_list"] ?? null);
        echo "\" target=\"_blank\"><i class=\"fa fa-fw fa-code-fork\"></i> ";
        echo ($context["text_filter_list"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 34
        echo ($context["filter_page_list"] ?? null);
        echo "\" target=\"_blank\"><i class=\"fa fa-fw fa-file-text-o\"></i> ";
        echo ($context["text_filter_page_list"] ?? null);
        echo "</a></li>
          <li><a href=\"https://ocfilter.com/faq\" target=\"_blank\"><i class=\"fa fa-fw fa-question-circle\"></i> ";
        // line 35
        echo ($context["text_faq"] ?? null);
        echo "</a></li>
        </ul>
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 37
        echo ($context["text_edit"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-ocfilter\" class=\"form-horizontal\">
          <div role=\"tabs\">
            <ul class=\"nav nav-tabs\" role=\"tablist\">
              <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 43
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
              <li><a href=\"#tab-option\" data-toggle=\"tab\">";
        // line 44
        echo ($context["tab_option"] ?? null);
        echo "</a></li>
              <li><a href=\"#tab-price-filtering\" data-toggle=\"tab\">";
        // line 45
        echo ($context["tab_price_filtering"] ?? null);
        echo "</a></li>
              <li><a href=\"#tab-other\" data-toggle=\"tab\">";
        // line 46
        echo ($context["tab_other"] ?? null);
        echo "</a></li>
              <li><a href=\"#tab-copy\" data-toggle=\"tab\">";
        // line 47
        echo ($context["tab_copy"] ?? null);
        echo "</a></li>
            </ul>

          \t<div class=\"tab-content\">
              <div id=\"tab-general\" class=\"tab-pane active\">
                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-status\">";
        // line 53
        echo ($context["entry_status"] ?? null);
        echo "</label>
                  <div class=\"col-sm-9\">
                    <div class=\"btn-group\" data-toggle=\"buttons\">
                      ";
        // line 56
        if (($context["status"] ?? null)) {
            // line 57
            echo "                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"status\" value=\"1\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 58
            echo ($context["text_enabled"] ?? null);
            echo "
                      </label>
                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"status\" value=\"0\" autocomplete=\"off\" /> ";
            // line 61
            echo ($context["text_disabled"] ?? null);
            echo "
                      </label>
                      ";
        } else {
            // line 64
            echo "                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"status\" value=\"1\" autocomplete=\"off\" /> ";
            // line 65
            echo ($context["text_enabled"] ?? null);
            echo "
                      </label>
                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"status\" value=\"0\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 68
            echo ($context["text_disabled"] ?? null);
            echo "
                      </label>
                      ";
        }
        // line 71
        echo "                    </div>

                    <p class=\"help-block\">";
        // line 73
        echo ($context["help_status"] ?? null);
        echo "</p>
                  </div>
                </div>

                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-status\">";
        // line 78
        echo ($context["entry_sub_category"] ?? null);
        echo "</label>
                  <div class=\"col-sm-9\">
                    <div class=\"btn-group\" data-toggle=\"buttons\">
                      ";
        // line 81
        if (($context["sub_category"] ?? null)) {
            // line 82
            echo "                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"sub_category\" value=\"1\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 83
            echo ($context["text_enabled"] ?? null);
            echo "
                      </label>
                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"sub_category\" value=\"0\" autocomplete=\"off\" /> ";
            // line 86
            echo ($context["text_disabled"] ?? null);
            echo "
                      </label>
                      ";
        } else {
            // line 89
            echo "                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"sub_category\" value=\"1\" autocomplete=\"off\" /> ";
            // line 90
            echo ($context["text_enabled"] ?? null);
            echo "
                      </label>
                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"sub_category\" value=\"0\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 93
            echo ($context["text_disabled"] ?? null);
            echo "
                      </label>
                      ";
        }
        // line 96
        echo "                    </div>

                    <p class=\"help-block\">";
        // line 98
        echo ($context["help_sub_category"] ?? null);
        echo "</p>
                  </div>
                </div>

                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-sitemap-status\">";
        // line 103
        echo ($context["entry_sitemap"] ?? null);
        echo "</label>
                  <div class=\"col-sm-9\">
                    <div class=\"btn-group\" data-toggle=\"buttons\">
                      ";
        // line 106
        if (($context["sitemap_status"] ?? null)) {
            // line 107
            echo "                      <label class=\"btn btn-default active\" data-toggle=\"trigger\" onclick=\"\$('#sitemap-link').collapse('show')\">
                        <input type=\"radio\" name=\"sitemap_status\" value=\"1\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 108
            echo ($context["text_enabled"] ?? null);
            echo "
                      </label>
                      <label class=\"btn btn-default\" onclick=\"\$('#sitemap-link').collapse('hide')\">
                        <input type=\"radio\" name=\"sitemap_status\" value=\"0\" autocomplete=\"off\" /> ";
            // line 111
            echo ($context["text_disabled"] ?? null);
            echo "
                      </label>
                      ";
        } else {
            // line 114
            echo "                      <label class=\"btn btn-default\" onclick=\"\$('#sitemap-link').collapse('show')\">
                        <input type=\"radio\" name=\"sitemap_status\" value=\"1\" autocomplete=\"off\" /> ";
            // line 115
            echo ($context["text_enabled"] ?? null);
            echo "
                      </label>
                      <label class=\"btn btn-default active\" data-toggle=\"trigger\" onclick=\"\$('#sitemap-link').collapse('hide')\">
                        <input type=\"radio\" name=\"sitemap_status\" value=\"0\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 118
            echo ($context["text_disabled"] ?? null);
            echo "
                      </label>
                      ";
        }
        // line 121
        echo "                    </div>
                  </div>
                </div>

                <div class=\"collapse\" id=\"sitemap-link\">
                  <div class=\"form-group\">
                    <label class=\"col-sm-3 control-label\">";
        // line 127
        echo ($context["entry_sitemap_link"] ?? null);
        echo "</label>
                    <div class=\"col-sm-9\">
                      <input type=\"text\" name=\"sitemap_link\" value=\"";
        // line 129
        echo ($context["sitemap_link"] ?? null);
        echo "\" class=\"form-control\" onclick=\"\$(this).select();\" readonly=\"readonly\" />
                    </div>
                  </div>
                </div>
  \t\t        </div>

  \t\t        <div id=\"tab-option\" class=\"tab-pane\">
                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-status\">";
        // line 137
        echo ($context["entry_search_button"] ?? null);
        echo "</label>
                  <div class=\"col-sm-9\">
                    <div class=\"btn-group\" data-toggle=\"buttons\">
                      ";
        // line 140
        if (($context["search_button"] ?? null)) {
            // line 141
            echo "                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"search_button\" value=\"1\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 142
            echo ($context["text_enabled"] ?? null);
            echo "
                      </label>
                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"search_button\" value=\"0\" autocomplete=\"off\" /> ";
            // line 145
            echo ($context["text_disabled"] ?? null);
            echo "
                      </label>
                      ";
        } else {
            // line 148
            echo "                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"search_button\" value=\"1\" autocomplete=\"off\" /> ";
            // line 149
            echo ($context["text_enabled"] ?? null);
            echo "
                      </label>
                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"search_button\" value=\"0\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 152
            echo ($context["text_disabled"] ?? null);
            echo "
                      </label>
                      ";
        }
        // line 155
        echo "                    </div>

                    <p class=\"help-block\">";
        // line 157
        echo ($context["help_search_button"] ?? null);
        echo "</p>
                  </div>
                </div>

                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-show-selected\">";
        // line 162
        echo ($context["entry_show_selected"] ?? null);
        echo "</label>
                  <div class=\"col-sm-9\">
                    <div class=\"btn-group\" data-toggle=\"buttons\">
                      ";
        // line 165
        if (($context["show_selected"] ?? null)) {
            // line 166
            echo "                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"show_selected\" value=\"1\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 167
            echo ($context["text_enabled"] ?? null);
            echo "
                      </label>
                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"show_selected\" value=\"0\" autocomplete=\"off\" /> ";
            // line 170
            echo ($context["text_disabled"] ?? null);
            echo "
                      </label>
                      ";
        } else {
            // line 173
            echo "                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"show_selected\" value=\"1\" autocomplete=\"off\" /> ";
            // line 174
            echo ($context["text_enabled"] ?? null);
            echo "
                      </label>
                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"show_selected\" value=\"0\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 177
            echo ($context["text_disabled"] ?? null);
            echo "
                      </label>
                      ";
        }
        // line 180
        echo "                    </div>

                    <p class=\"help-block\">";
        // line 182
        echo ($context["help_show_selected"] ?? null);
        echo "</p>
                  </div>
                </div>

                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-show-price\">";
        // line 187
        echo ($context["entry_show_price"] ?? null);
        echo "</label>
                  <div class=\"col-sm-9\">
                    <div class=\"btn-group\" data-toggle=\"buttons\">
                      ";
        // line 190
        if (($context["show_price"] ?? null)) {
            // line 191
            echo "                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"show_price\" value=\"1\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 192
            echo ($context["text_enabled"] ?? null);
            echo "
                      </label>
                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"show_price\" value=\"0\" autocomplete=\"off\" /> ";
            // line 195
            echo ($context["text_disabled"] ?? null);
            echo "
                      </label>
                      ";
        } else {
            // line 198
            echo "                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"show_price\" value=\"1\" autocomplete=\"off\" /> ";
            // line 199
            echo ($context["text_enabled"] ?? null);
            echo "
                      </label>
                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"show_price\" value=\"0\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 202
            echo ($context["text_disabled"] ?? null);
            echo "
                      </label>
                      ";
        }
        // line 205
        echo "                    </div>

                    <p class=\"help-block\">";
        // line 207
        echo ($context["help_show_price"] ?? null);
        echo "</p>
                  </div>
                </div>

                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-show-counter\">";
        // line 212
        echo ($context["entry_show_counter"] ?? null);
        echo "</label>
                  <div class=\"col-sm-9\">
                    <div class=\"btn-group\" data-toggle=\"buttons\">
                      ";
        // line 215
        if (($context["show_counter"] ?? null)) {
            // line 216
            echo "                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"show_counter\" value=\"1\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 217
            echo ($context["text_enabled"] ?? null);
            echo "
                      </label>
                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"show_counter\" value=\"0\" autocomplete=\"off\" /> ";
            // line 220
            echo ($context["text_disabled"] ?? null);
            echo "
                      </label>
                      ";
        } else {
            // line 223
            echo "                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"show_counter\" value=\"1\" autocomplete=\"off\" /> ";
            // line 224
            echo ($context["text_enabled"] ?? null);
            echo "
                      </label>
                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"show_counter\" value=\"0\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 227
            echo ($context["text_disabled"] ?? null);
            echo "
                      </label>
                      ";
        }
        // line 230
        echo "                    </div>

                    <p class=\"help-block\">";
        // line 232
        echo ($context["help_show_counter"] ?? null);
        echo "</p>
                  </div>
                </div>

                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-manufacturer\">";
        // line 237
        echo ($context["entry_manufacturer"] ?? null);
        echo "</label>
                  <div class=\"col-sm-9\">
                    <div class=\"btn-group\" data-toggle=\"buttons\">
                      ";
        // line 240
        if (($context["manufacturer"] ?? null)) {
            // line 241
            echo "                      <label class=\"btn btn-default active\" data-toggle=\"trigger\" onclick=\"\$('#manufacturer-type').collapse('show')\">
                        <input type=\"radio\" name=\"manufacturer\" value=\"1\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 242
            echo ($context["text_enabled"] ?? null);
            echo "
                      </label>
                      <label class=\"btn btn-default\" onclick=\"\$('#manufacturer-type').collapse('hide')\">
                        <input type=\"radio\" name=\"manufacturer\" value=\"0\" autocomplete=\"off\" /> ";
            // line 245
            echo ($context["text_disabled"] ?? null);
            echo "
                      </label>
                      ";
        } else {
            // line 248
            echo "                      <label class=\"btn btn-default\" onclick=\"\$('#manufacturer-type').collapse('show')\">
                        <input type=\"radio\" name=\"manufacturer\" value=\"1\" autocomplete=\"off\" /> ";
            // line 249
            echo ($context["text_enabled"] ?? null);
            echo "
                      </label>
                      <label class=\"btn btn-default active\" data-toggle=\"trigger\" onclick=\"\$('#manufacturer-type').collapse('hide')\">
                        <input type=\"radio\" name=\"manufacturer\" value=\"0\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 252
            echo ($context["text_disabled"] ?? null);
            echo "
                      </label>
                      ";
        }
        // line 255
        echo "                    </div>

                    <p class=\"help-block\">";
        // line 257
        echo ($context["help_manufacturer"] ?? null);
        echo "</p>
                  </div>
                </div>

                <div class=\"collapse\" id=\"manufacturer-type\">
                  <div class=\"form-group\">
                    <label class=\"col-sm-3 control-label\" for=\"input-manufacturer-type\">";
        // line 263
        echo ($context["entry_type"] ?? null);
        echo "</label>
                    <div class=\"col-sm-5\">
                      <select name=\"manufacturer_type\" id=\"input-manufacturer-type\" class=\"form-control\">
                        ";
        // line 266
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["types"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 267
            echo "                        ";
            if (($context["type"] == ($context["manufacturer_type"] ?? null))) {
                // line 268
                echo "                        <option value=\"";
                echo $context["type"];
                echo "\" selected=\"selected\">";
                echo twig_capitalize_string_filter($this->env, $context["type"]);
                echo "</option>
                        ";
            } else {
                // line 270
                echo "                        <option value=\"";
                echo $context["type"];
                echo "\">";
                echo twig_capitalize_string_filter($this->env, $context["type"]);
                echo "</option>
                        ";
            }
            // line 272
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 273
        echo "                      </select>
                    </div>
                  </div>
                </div>

                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-stock-status\">";
        // line 279
        echo ($context["entry_stock_status"] ?? null);
        echo "</label>
                  <div class=\"col-sm-9\">
                    <div class=\"btn-group\" data-toggle=\"buttons\">
                      ";
        // line 282
        if (($context["stock_status"] ?? null)) {
            // line 283
            echo "                      <label class=\"btn btn-default active\" data-toggle=\"trigger\" onclick=\"\$('#stock-status-method').collapse('show')\">
                        <input type=\"radio\" name=\"stock_status\" value=\"1\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 284
            echo ($context["text_enabled"] ?? null);
            echo "
                      </label>
                      <label class=\"btn btn-default\" onclick=\"\$('#stock-status-method').collapse('hide')\">
                        <input type=\"radio\" name=\"stock_status\" value=\"0\" autocomplete=\"off\" /> ";
            // line 287
            echo ($context["text_disabled"] ?? null);
            echo "
                      </label>
                      ";
        } else {
            // line 290
            echo "                      <label class=\"btn btn-default\" onclick=\"\$('#stock-status-method').collapse('show')\">
                        <input type=\"radio\" name=\"stock_status\" value=\"1\" autocomplete=\"off\" /> ";
            // line 291
            echo ($context["text_enabled"] ?? null);
            echo "
                      </label>
                      <label class=\"btn btn-default active\" data-toggle=\"trigger\" onclick=\"\$('#stock-status-method').collapse('hide')\">
                        <input type=\"radio\" name=\"stock_status\" value=\"0\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 294
            echo ($context["text_disabled"] ?? null);
            echo "
                      </label>
                      ";
        }
        // line 297
        echo "                    </div>

                    <p class=\"help-block\">";
        // line 299
        echo ($context["help_stock_status"] ?? null);
        echo "</p>
                  </div>
                </div>

                <div class=\"collapse\" id=\"stock-status-method\">
                  <div class=\"form-group\">
                    <label class=\"col-sm-3 control-label\" for=\"input-stock-status-method\">";
        // line 305
        echo ($context["entry_stock_status_method"] ?? null);
        echo "</label>
                    <div class=\"col-sm-9\">
                      <div class=\"btn-group\" data-toggle=\"buttons\">
                        ";
        // line 308
        if ((($context["stock_status_method"] ?? null) == "quantity")) {
            // line 309
            echo "                        <label class=\"btn btn-default active\" data-toggle=\"trigger\" onclick=\"\$('.collapse-group-1').collapse('hide').filter('#stock-status-quantity').collapse('show')\">
                          <input type=\"radio\" name=\"stock_status_method\" value=\"quantity\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 310
            echo ($context["text_stock_by_quantity"] ?? null);
            echo "
                        </label>
                        <label class=\"btn btn-default\" onclick=\"\$('.collapse-group-1').collapse('hide').filter('#stock-status-id').collapse('show')\">
                          <input type=\"radio\" name=\"stock_status_method\" value=\"stock_status_id\" autocomplete=\"off\" /> ";
            // line 313
            echo ($context["text_stock_by_status_id"] ?? null);
            echo "
                        </label>
                        ";
        } else {
            // line 316
            echo "                        <label class=\"btn btn-default\" onclick=\"\$('.collapse-group-1').collapse('hide').filter('#stock-status-quantity').collapse('show')\">
                          <input type=\"radio\" name=\"stock_status_method\" value=\"quantity\" autocomplete=\"off\" /> ";
            // line 317
            echo ($context["text_stock_by_quantity"] ?? null);
            echo "
                        </label>
                        <label class=\"btn btn-default active\" data-toggle=\"trigger\" onclick=\"\$('.collapse-group-1').collapse('hide').filter('#stock-status-id').collapse('show')\">
                          <input type=\"radio\" name=\"stock_status_method\" value=\"stock_status_id\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 320
            echo ($context["text_stock_by_status_id"] ?? null);
            echo "
                        </label>
                        ";
        }
        // line 323
        echo "                      </div>
                    </div>
                  </div>

                  <div class=\"collapse collapse-group-1\" id=\"stock-status-id\">
                    <div class=\"form-group\">
                      <label class=\"col-sm-3 control-label\" for=\"input-stocks-tatus-type\">";
        // line 329
        echo ($context["entry_type"] ?? null);
        echo "</label>
                      <div class=\"col-sm-5\">
                        <select name=\"stock_status_type\" id=\"input-stocks-tatus-type\" class=\"form-control\">
                          ";
        // line 332
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["types"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 333
            echo "                          ";
            if (($context["type"] == ($context["stock_status_type"] ?? null))) {
                // line 334
                echo "                          <option value=\"";
                echo $context["type"];
                echo "\" selected=\"selected\">";
                echo twig_capitalize_string_filter($this->env, $context["type"]);
                echo "</option>
                          ";
            } else {
                // line 336
                echo "                          <option value=\"";
                echo $context["type"];
                echo "\">";
                echo twig_capitalize_string_filter($this->env, $context["type"]);
                echo "</option>
                          ";
            }
            // line 338
            echo "                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 339
        echo "                        </select>
                      </div>
                    </div>
                  </div>

                  <div class=\"collapse collapse-group-1\" id=\"stock-status-quantity\">
                    <div class=\"form-group\">
                      <label class=\"col-sm-3 control-label\" for=\"input-stock-out-value\">";
        // line 346
        echo ($context["entry_stock_out_value"] ?? null);
        echo "</label>
                      <div class=\"col-sm-9\">
                        <div class=\"btn-group\" data-toggle=\"buttons\">
                          ";
        // line 349
        if (($context["stock_out_value"] ?? null)) {
            // line 350
            echo "                          <label class=\"btn btn-default active\">
                            <input type=\"radio\" name=\"stock_out_value\" value=\"1\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 351
            echo ($context["text_enabled"] ?? null);
            echo "
                          </label>
                          <label class=\"btn btn-default\">
                            <input type=\"radio\" name=\"stock_out_value\" value=\"0\" autocomplete=\"off\" /> ";
            // line 354
            echo ($context["text_disabled"] ?? null);
            echo "
                          </label>
                          ";
        } else {
            // line 357
            echo "                          <label class=\"btn btn-default\">
                            <input type=\"radio\" name=\"stock_out_value\" value=\"1\" autocomplete=\"off\" /> ";
            // line 358
            echo ($context["text_enabled"] ?? null);
            echo "
                          </label>
                          <label class=\"btn btn-default active\">
                            <input type=\"radio\" name=\"stock_out_value\" value=\"0\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 361
            echo ($context["text_disabled"] ?? null);
            echo "
                          </label>
                          ";
        }
        // line 364
        echo "                        </div>
                      </div>
                    </div>
                  </div>
                </div>
  \t\t        </div>
  \t\t        <div id=\"tab-price-filtering\" class=\"tab-pane\">
                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-manual-price\">";
        // line 372
        echo ($context["entry_manual_price"] ?? null);
        echo "</label>
                  <div class=\"col-sm-9\">
                    <div class=\"btn-group\" data-toggle=\"buttons\">
                      ";
        // line 375
        if (($context["manual_price"] ?? null)) {
            // line 376
            echo "                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"manual_price\" value=\"1\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 377
            echo ($context["text_enabled"] ?? null);
            echo "
                      </label>
                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"manual_price\" value=\"0\" autocomplete=\"off\" /> ";
            // line 380
            echo ($context["text_disabled"] ?? null);
            echo "
                      </label>
                      ";
        } else {
            // line 383
            echo "                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"manual_price\" value=\"1\" autocomplete=\"off\" /> ";
            // line 384
            echo ($context["text_enabled"] ?? null);
            echo "
                      </label>
                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"manual_price\" value=\"0\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 387
            echo ($context["text_disabled"] ?? null);
            echo "
                      </label>
                      ";
        }
        // line 390
        echo "                    </div>

                    <p class=\"help-block\">";
        // line 392
        echo ($context["help_manual_price"] ?? null);
        echo "</p>
                  </div>
                </div>

                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-consider-discount\">";
        // line 397
        echo ($context["entry_consider_discount"] ?? null);
        echo "</label>
                  <div class=\"col-sm-9\">
                    <div class=\"btn-group\" data-toggle=\"buttons\">
                      ";
        // line 400
        if (($context["consider_discount"] ?? null)) {
            // line 401
            echo "                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"consider_discount\" value=\"1\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 402
            echo ($context["text_enabled"] ?? null);
            echo "
                      </label>
                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"consider_discount\" value=\"0\" autocomplete=\"off\" /> ";
            // line 405
            echo ($context["text_disabled"] ?? null);
            echo "
                      </label>
                      ";
        } else {
            // line 408
            echo "                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"consider_discount\" value=\"1\" autocomplete=\"off\" /> ";
            // line 409
            echo ($context["text_enabled"] ?? null);
            echo "
                      </label>
                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"consider_discount\" value=\"0\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 412
            echo ($context["text_disabled"] ?? null);
            echo "
                      </label>
                      ";
        }
        // line 415
        echo "                    </div>
                    <p class=\"help-block\">";
        // line 416
        echo ($context["help_consider_discount"] ?? null);
        echo "</p>
                  </div>
                </div>

                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-consider-special\">";
        // line 421
        echo ($context["entry_consider_special"] ?? null);
        echo "</label>
                  <div class=\"col-sm-9\">
                    <div class=\"btn-group\" data-toggle=\"buttons\">
                      ";
        // line 424
        if (($context["consider_special"] ?? null)) {
            // line 425
            echo "                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"consider_special\" value=\"1\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 426
            echo ($context["text_enabled"] ?? null);
            echo "
                      </label>
                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"consider_special\" value=\"0\" autocomplete=\"off\" /> ";
            // line 429
            echo ($context["text_disabled"] ?? null);
            echo "
                      </label>
                      ";
        } else {
            // line 432
            echo "                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"consider_special\" value=\"1\" autocomplete=\"off\" /> ";
            // line 433
            echo ($context["text_enabled"] ?? null);
            echo "
                      </label>
                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"consider_special\" value=\"0\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 436
            echo ($context["text_disabled"] ?? null);
            echo "
                      </label>
                      ";
        }
        // line 439
        echo "                    </div>

                    <p class=\"help-block\">";
        // line 441
        echo ($context["help_consider_special"] ?? null);
        echo "</p>
                  </div>
                </div>

                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-consider-option\">";
        // line 446
        echo ($context["entry_consider_option"] ?? null);
        echo "</label>
                  <div class=\"col-sm-9\">
                    <div class=\"btn-group\" data-toggle=\"buttons\">
                      ";
        // line 449
        if (($context["consider_option"] ?? null)) {
            // line 450
            echo "                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"consider_option\" value=\"1\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 451
            echo ($context["text_enabled"] ?? null);
            echo "
                      </label>
                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"consider_option\" value=\"0\" autocomplete=\"off\" /> ";
            // line 454
            echo ($context["text_disabled"] ?? null);
            echo "
                      </label>
                      ";
        } else {
            // line 457
            echo "                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"consider_option\" value=\"1\" autocomplete=\"off\" /> ";
            // line 458
            echo ($context["text_enabled"] ?? null);
            echo "
                      </label>
                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"consider_option\" value=\"0\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 461
            echo ($context["text_disabled"] ?? null);
            echo "
                      </label>
                      ";
        }
        // line 464
        echo "                    </div>
                    <p class=\"help-block\">";
        // line 465
        echo ($context["help_consider_option"] ?? null);
        echo "</p>
                  </div>
                </div>
  \t\t        </div>

  \t\t        <div id=\"tab-other\" class=\"tab-pane\">
                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-show-options-limit\">";
        // line 472
        echo ($context["entry_show_first_limit"] ?? null);
        echo "</label>
                  <div class=\"col-sm-4\">
                    <div class=\"input-group\">
                      <input type=\"number\" name=\"show_options_limit\" min=\"0\" value=\"";
        // line 475
        echo ($context["show_options_limit"] ?? null);
        echo "\" class=\"form-control\" id=\"input-show-options-limit\" />
                      <span class=\"input-group-addon\">";
        // line 476
        echo ($context["text_options"] ?? null);
        echo "</span>
                    </div><!-- /.input-group -->
                    <p class=\"help-block\">";
        // line 478
        echo ($context["help_show_options_limit"] ?? null);
        echo "</p>
                  </div>
                </div>

                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-show-values-limit\">";
        // line 483
        echo ($context["entry_show_first_limit"] ?? null);
        echo "</label>
                  <div class=\"col-sm-4\">
                    <div class=\"input-group\">
                      <input type=\"number\" name=\"show_values_limit\" min=\"0\" value=\"";
        // line 486
        echo ($context["show_values_limit"] ?? null);
        echo "\" class=\"form-control\" id=\"input-show-values-limit\" />
                      <span class=\"input-group-addon\">";
        // line 487
        echo ($context["text_values"] ?? null);
        echo "</span>
                    </div><!-- /.input-group -->
                    <p class=\"help-block\">";
        // line 489
        echo ($context["help_show_values_limit"] ?? null);
        echo "</p>
                  </div>
                </div>

                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-hide-empty-values\">";
        // line 494
        echo ($context["entry_hide_empty_values"] ?? null);
        echo "</label>
                  <div class=\"col-sm-9\">
                    <div class=\"btn-group\" data-toggle=\"buttons\">
                      ";
        // line 497
        if (($context["hide_empty_values"] ?? null)) {
            // line 498
            echo "                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"hide_empty_values\" value=\"1\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 499
            echo ($context["text_enabled"] ?? null);
            echo "
                      </label>
                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"hide_empty_values\" value=\"0\" autocomplete=\"off\" /> ";
            // line 502
            echo ($context["text_disabled"] ?? null);
            echo "
                      </label>
                      ";
        } else {
            // line 505
            echo "                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"hide_empty_values\" value=\"1\" autocomplete=\"off\" /> ";
            // line 506
            echo ($context["text_enabled"] ?? null);
            echo "
                      </label>
                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"hide_empty_values\" value=\"0\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 509
            echo ($context["text_disabled"] ?? null);
            echo "
                      </label>
                      ";
        }
        // line 512
        echo "                    </div>
                    <p class=\"help-block\">";
        // line 513
        echo ($context["help_hide_empty_values"] ?? null);
        echo "</p>
                  </div>
                </div>
  \t\t        </div>

  \t\t        <div id=\"tab-copy\" class=\"tab-pane\">
                <h4>";
        // line 519
        echo ($context["nav_copy_filter"] ?? null);
        echo "</h4>

                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-copy-type\">";
        // line 522
        echo ($context["entry_copy_type"] ?? null);
        echo "</label>
                  <div class=\"col-sm-5\">
                    <select name=\"copy_type\" id=\"input-copy-type\" class=\"form-control\">
                      ";
        // line 525
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["types"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 526
            echo "                      ";
            if (($context["type"] == ($context["copy_type"] ?? null))) {
                // line 527
                echo "                      <option value=\"";
                echo $context["type"];
                echo "\" selected=\"selected\">";
                echo twig_capitalize_string_filter($this->env, $context["type"]);
                echo "</option>
                      ";
            } else {
                // line 529
                echo "                      <option value=\"";
                echo $context["type"];
                echo "\">";
                echo twig_capitalize_string_filter($this->env, $context["type"]);
                echo "</option>
                      ";
            }
            // line 531
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 532
        echo "                    </select>
                  </div>
                </div>

                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-truncate\">";
        // line 537
        echo ($context["entry_copy_status"] ?? null);
        echo "</label>
                  <div class=\"col-sm-9\">
                    <div class=\"btn-group\" data-toggle=\"buttons\">
                      ";
        // line 540
        if ((($context["copy_status"] ?? null) > 0)) {
            // line 541
            echo "                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"copy_status\" value=\"1\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 542
            echo ($context["text_enabled"] ?? null);
            echo "
                      </label>
                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"copy_status\" value=\"0\" autocomplete=\"off\" /> ";
            // line 545
            echo ($context["text_disabled"] ?? null);
            echo "
                      </label>
                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"copy_status\" value=\"-1\" autocomplete=\"off\" /> ";
            // line 548
            echo ($context["text_auto"] ?? null);
            echo "
                      </label>
                      ";
        } elseif ((        // line 550
($context["copy_status"] ?? null) < 0)) {
            // line 551
            echo "                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"copy_status\" value=\"1\" autocomplete=\"off\" /> ";
            // line 552
            echo ($context["text_enabled"] ?? null);
            echo "
                      </label>
                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"copy_status\" value=\"0\" autocomplete=\"off\" /> ";
            // line 555
            echo ($context["text_disabled"] ?? null);
            echo "
                      </label>
                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"copy_status\" value=\"-1\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 558
            echo ($context["text_auto"] ?? null);
            echo "
                      </label>
                      ";
        } else {
            // line 561
            echo "                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"copy_status\" value=\"1\" autocomplete=\"off\" /> ";
            // line 562
            echo ($context["text_enabled"] ?? null);
            echo "
                      </label>
                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"copy_status\" value=\"0\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 565
            echo ($context["text_disabled"] ?? null);
            echo "
                      </label>
                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"copy_status\" value=\"-1\" autocomplete=\"off\" /> ";
            // line 568
            echo ($context["text_auto"] ?? null);
            echo "
                      </label>
                      ";
        }
        // line 571
        echo "                    </div>
                    <p class=\"help-block\">";
        // line 572
        echo ($context["help_copy_status_auto"] ?? null);
        echo "</p>
                  </div>
                </div>

                <h4>";
        // line 576
        echo ($context["nav_copy_source"] ?? null);
        echo "</h4>

                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-copy-attribute\">";
        // line 579
        echo ($context["entry_copy_attribute"] ?? null);
        echo "</label>
                  <div class=\"col-sm-4\">
                    <div class=\"input-group\">
                      <span class=\"input-group-btn\" data-toggle=\"buttons\">
                        ";
        // line 583
        if (($context["copy_attribute"] ?? null)) {
            // line 584
            echo "                        <label class=\"btn btn-default active\" data-toggle=\"trigger\" onclick=\"\$('[name=\\'attribute_separator\\']').prop('disabled', false)\">
                          <input type=\"radio\" name=\"copy_attribute\" value=\"1\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 585
            echo ($context["text_yes"] ?? null);
            echo "
                        </label>
                        <label class=\"btn btn-default\" onclick=\"\$('[name=\\'attribute_separator\\']').prop('disabled', true)\">
                          <input type=\"radio\" name=\"copy_attribute\" value=\"0\" autocomplete=\"off\" /> ";
            // line 588
            echo ($context["text_no"] ?? null);
            echo "
                        </label>
                        ";
        } else {
            // line 591
            echo "                        <label class=\"btn btn-default\" onclick=\"\$('[name=\\'attribute_separator\\']').prop('disabled', false)\">
                          <input type=\"radio\" name=\"copy_attribute\" value=\"1\" autocomplete=\"off\" /> ";
            // line 592
            echo ($context["text_yes"] ?? null);
            echo "
                        </label>
                        <label class=\"btn btn-default active\" data-toggle=\"trigger\" onclick=\"\$('[name=\\'attribute_separator\\']').prop('disabled', true)\">
                          <input type=\"radio\" name=\"copy_attribute\" value=\"0\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 595
            echo ($context["text_no"] ?? null);
            echo "
                        </label>
                        ";
        }
        // line 598
        echo "                      </span>
                      <input name=\"attribute_separator\" type=\"text\" class=\"form-control\" placeholder=\"";
        // line 599
        echo ($context["entry_copy_attribute_separator"] ?? null);
        echo "\" value=\"";
        echo ($context["copy_attribute_separator"] ?? null);
        echo "\" disabled=\"disabled\" />
                    </div>
                  </div>
                </div>

                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-copy-filter\">";
        // line 605
        echo ($context["entry_copy_filter"] ?? null);
        echo "</label>
                  <div class=\"col-sm-9\">
                    <div class=\"btn-group\" data-toggle=\"buttons\">
                      ";
        // line 608
        if (($context["copy_filter"] ?? null)) {
            // line 609
            echo "                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"copy_filter\" value=\"1\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 610
            echo ($context["text_yes"] ?? null);
            echo "
                      </label>
                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"copy_filter\" value=\"0\" autocomplete=\"off\" /> ";
            // line 613
            echo ($context["text_no"] ?? null);
            echo "
                      </label>
                      ";
        } else {
            // line 616
            echo "                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"copy_filter\" value=\"1\" autocomplete=\"off\" /> ";
            // line 617
            echo ($context["text_yes"] ?? null);
            echo "
                      </label>
                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"copy_filter\" value=\"0\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 620
            echo ($context["text_no"] ?? null);
            echo "
                      </label>
                      ";
        }
        // line 623
        echo "                    </div>
                  </div>
                </div>

                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-copy-option\">";
        // line 628
        echo ($context["entry_copy_option"] ?? null);
        echo "</label>
                  <div class=\"col-sm-9\">
                    <div class=\"btn-group\" data-toggle=\"buttons\">
                      ";
        // line 631
        if (($context["copy_option"] ?? null)) {
            // line 632
            echo "                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"copy_option\" value=\"1\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 633
            echo ($context["text_yes"] ?? null);
            echo "
                      </label>
                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"copy_option\" value=\"0\" autocomplete=\"off\" /> ";
            // line 636
            echo ($context["text_no"] ?? null);
            echo "
                      </label>
                      ";
        } else {
            // line 639
            echo "                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"copy_option\" value=\"1\" autocomplete=\"off\" /> ";
            // line 640
            echo ($context["text_yes"] ?? null);
            echo "
                      </label>
                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"copy_option\" value=\"0\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 643
            echo ($context["text_no"] ?? null);
            echo "
                      </label>
                      ";
        }
        // line 646
        echo "                    </div>
                  </div>
                </div>

                <h4>";
        // line 650
        echo ($context["nav_copy_other"] ?? null);
        echo "</h4>

                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\">";
        // line 653
        echo ($context["entry_copy_clear_filter"] ?? null);
        echo "</label>
                  <div class=\"col-sm-9\">
                    <div class=\"btn-group\" data-toggle=\"buttons\">
                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"copy_truncate\" value=\"1\" autocomplete=\"off\" /> ";
        // line 657
        echo ($context["text_yes"] ?? null);
        echo "
                      </label>
                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"copy_truncate\" value=\"0\" autocomplete=\"off\" checked=\"checked\" /> ";
        // line 660
        echo ($context["text_no"] ?? null);
        echo "
                      </label>
                    </div>
                  </div>
                </div>

                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\">";
        // line 667
        echo ($context["entry_copy_category"] ?? null);
        echo "</label>
                  <div class=\"col-sm-9\">
                    <div class=\"btn-group\" data-toggle=\"buttons\">
                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"copy_category\" value=\"1\" autocomplete=\"off\" checked=\"checked\" /> ";
        // line 671
        echo ($context["text_yes"] ?? null);
        echo "
                      </label>
                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"copy_category\" value=\"0\" autocomplete=\"off\" /> ";
        // line 674
        echo ($context["text_no"] ?? null);
        echo "
                      </label>
                    </div>
                    <p class=\"help-block\">";
        // line 677
        echo ($context["help_copy_category"] ?? null);
        echo "</p>
                  </div>
                </div>

                <div class=\"form-group\">
                  <div class=\"col-sm-offset-3 col-sm-9\">
                    <button type=\"button\" class=\"btn btn-lg btn-primary\" id=\"button-copy-filter\" data-loading-text=\"";
        // line 683
        echo ($context["text_loading"] ?? null);
        echo "\" data-complete-text=\"";
        echo ($context["text_complete"] ?? null);
        echo "\"><i class=\"fa fa-copy\"></i> ";
        echo ($context["button_copy"] ?? null);
        echo "</button>
                  </div>
                </div>
  \t\t        </div>
            </div>
          </div>
        </form>
\t\t\t</div>
    </div>
  </div>
<script type=\"text/javascript\"><!--
\$(function() {
  \$('[data-toggle=\"trigger\"][onclick]').trigger('click');

  var timer;

  \$('#button-copy-filter').on('click', function(e) {
    clearTimeout(timer);

    \$('#tab-copy > .alert').remove();

    var \$button = \$(this).button('loading');

    \$.post('index.php?route=extension/module/ocfilter/copyFilters&user_token=";
        // line 706
        echo ($context["user_token"] ?? null);
        echo "', \$('[name^=\"copy_\"], [name=\"attribute_separator\"]').serialize(), function(response) {
      if (response['error']) {
        \$button.button('reset');

        \$('#tab-copy').prepend('<div class=\"alert alert-danger\" role=\"alert\">' + response['error'] + '</div>');
      }

      if (response['success']) {
        \$button.button('complete');

        \$('#tab-copy').prepend('<div class=\"alert alert-success\" role=\"alert\">' + response['success'] + '</div>');

        timer = setTimeout(function() {
          \$button.button('reset');
        }, 10 * 1000);
      }
    }, 'json');
  });
});
//--></script>
</div>
";
        // line 727
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/ocfilter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1499 => 727,  1475 => 706,  1445 => 683,  1436 => 677,  1430 => 674,  1424 => 671,  1417 => 667,  1407 => 660,  1401 => 657,  1394 => 653,  1388 => 650,  1382 => 646,  1376 => 643,  1370 => 640,  1367 => 639,  1361 => 636,  1355 => 633,  1352 => 632,  1350 => 631,  1344 => 628,  1337 => 623,  1331 => 620,  1325 => 617,  1322 => 616,  1316 => 613,  1310 => 610,  1307 => 609,  1305 => 608,  1299 => 605,  1288 => 599,  1285 => 598,  1279 => 595,  1273 => 592,  1270 => 591,  1264 => 588,  1258 => 585,  1255 => 584,  1253 => 583,  1246 => 579,  1240 => 576,  1233 => 572,  1230 => 571,  1224 => 568,  1218 => 565,  1212 => 562,  1209 => 561,  1203 => 558,  1197 => 555,  1191 => 552,  1188 => 551,  1186 => 550,  1181 => 548,  1175 => 545,  1169 => 542,  1166 => 541,  1164 => 540,  1158 => 537,  1151 => 532,  1145 => 531,  1137 => 529,  1129 => 527,  1126 => 526,  1122 => 525,  1116 => 522,  1110 => 519,  1101 => 513,  1098 => 512,  1092 => 509,  1086 => 506,  1083 => 505,  1077 => 502,  1071 => 499,  1068 => 498,  1066 => 497,  1060 => 494,  1052 => 489,  1047 => 487,  1043 => 486,  1037 => 483,  1029 => 478,  1024 => 476,  1020 => 475,  1014 => 472,  1004 => 465,  1001 => 464,  995 => 461,  989 => 458,  986 => 457,  980 => 454,  974 => 451,  971 => 450,  969 => 449,  963 => 446,  955 => 441,  951 => 439,  945 => 436,  939 => 433,  936 => 432,  930 => 429,  924 => 426,  921 => 425,  919 => 424,  913 => 421,  905 => 416,  902 => 415,  896 => 412,  890 => 409,  887 => 408,  881 => 405,  875 => 402,  872 => 401,  870 => 400,  864 => 397,  856 => 392,  852 => 390,  846 => 387,  840 => 384,  837 => 383,  831 => 380,  825 => 377,  822 => 376,  820 => 375,  814 => 372,  804 => 364,  798 => 361,  792 => 358,  789 => 357,  783 => 354,  777 => 351,  774 => 350,  772 => 349,  766 => 346,  757 => 339,  751 => 338,  743 => 336,  735 => 334,  732 => 333,  728 => 332,  722 => 329,  714 => 323,  708 => 320,  702 => 317,  699 => 316,  693 => 313,  687 => 310,  684 => 309,  682 => 308,  676 => 305,  667 => 299,  663 => 297,  657 => 294,  651 => 291,  648 => 290,  642 => 287,  636 => 284,  633 => 283,  631 => 282,  625 => 279,  617 => 273,  611 => 272,  603 => 270,  595 => 268,  592 => 267,  588 => 266,  582 => 263,  573 => 257,  569 => 255,  563 => 252,  557 => 249,  554 => 248,  548 => 245,  542 => 242,  539 => 241,  537 => 240,  531 => 237,  523 => 232,  519 => 230,  513 => 227,  507 => 224,  504 => 223,  498 => 220,  492 => 217,  489 => 216,  487 => 215,  481 => 212,  473 => 207,  469 => 205,  463 => 202,  457 => 199,  454 => 198,  448 => 195,  442 => 192,  439 => 191,  437 => 190,  431 => 187,  423 => 182,  419 => 180,  413 => 177,  407 => 174,  404 => 173,  398 => 170,  392 => 167,  389 => 166,  387 => 165,  381 => 162,  373 => 157,  369 => 155,  363 => 152,  357 => 149,  354 => 148,  348 => 145,  342 => 142,  339 => 141,  337 => 140,  331 => 137,  320 => 129,  315 => 127,  307 => 121,  301 => 118,  295 => 115,  292 => 114,  286 => 111,  280 => 108,  277 => 107,  275 => 106,  269 => 103,  261 => 98,  257 => 96,  251 => 93,  245 => 90,  242 => 89,  236 => 86,  230 => 83,  227 => 82,  225 => 81,  219 => 78,  211 => 73,  207 => 71,  201 => 68,  195 => 65,  192 => 64,  186 => 61,  180 => 58,  177 => 57,  175 => 56,  169 => 53,  160 => 47,  156 => 46,  152 => 45,  148 => 44,  144 => 43,  135 => 37,  130 => 35,  124 => 34,  118 => 33,  113 => 30,  105 => 26,  102 => 25,  94 => 21,  92 => 20,  85 => 15,  74 => 13,  70 => 12,  65 => 10,  58 => 8,  52 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/ocfilter.twig", "");
    }
}
