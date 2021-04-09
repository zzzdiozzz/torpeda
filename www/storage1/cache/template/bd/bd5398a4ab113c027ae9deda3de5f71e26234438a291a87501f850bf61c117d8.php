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

/* setting/setting.twig */
class __TwigTemplate_1cc52bcc5412f938db60c70fde9a3fe17f9b775269c4e3e132364fc61a89daa7 extends \Twig\Template
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
        <button type=\"submit\" id=\"button-save\" form=\"form-setting\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" disabled=\"disabled\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\"> ";
        // line 16
        if (($context["error_warning"] ?? null)) {
            // line 17
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 21
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 22
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 26
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 28
        echo ($context["text_edit"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 31
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-setting\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 33
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-store\" data-toggle=\"tab\">";
        // line 34
        echo ($context["tab_store"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-local\" data-toggle=\"tab\">";
        // line 35
        echo ($context["tab_local"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-option\" data-toggle=\"tab\">";
        // line 36
        echo ($context["tab_option"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-image\" data-toggle=\"tab\">";
        // line 37
        echo ($context["tab_image"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-mail\" data-toggle=\"tab\">";
        // line 38
        echo ($context["tab_mail"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-server\" data-toggle=\"tab\">";
        // line 39
        echo ($context["tab_server"] ?? null);
        echo "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-meta-title\">";
        // line 44
        echo ($context["entry_meta_title"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_meta_title\" value=\"";
        // line 46
        echo ($context["config_meta_title"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_meta_title"] ?? null);
        echo "\" id=\"input-meta-title\" class=\"form-control\" />
                  ";
        // line 47
        if (($context["error_meta_title"] ?? null)) {
            // line 48
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_meta_title"] ?? null);
            echo "</div>
                  ";
        }
        // line 49
        echo " </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-meta-description\">";
        // line 52
        echo ($context["entry_meta_description"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_meta_description\" rows=\"5\" placeholder=\"";
        // line 54
        echo ($context["entry_meta_description"] ?? null);
        echo "\" id=\"input-meta-description\" class=\"form-control\">";
        echo ($context["config_meta_description"] ?? null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-meta-keyword\">";
        // line 58
        echo ($context["entry_meta_keyword"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_meta_keyword\" rows=\"5\" placeholder=\"";
        // line 60
        echo ($context["entry_meta_keyword"] ?? null);
        echo "\" id=\"input-meta-keyword\" class=\"form-control\">";
        echo ($context["config_meta_keyword"] ?? null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-theme\">";
        // line 64
        echo ($context["entry_theme"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_theme\" id=\"input-theme\" class=\"form-control\">
                    
                    ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["themes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
            // line 69
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["theme"], "value", [], "any", false, false, false, 69) == ($context["config_theme"] ?? null))) {
                // line 70
                echo "                    
                    <option value=\"";
                // line 71
                echo twig_get_attribute($this->env, $this->source, $context["theme"], "value", [], "any", false, false, false, 71);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["theme"], "text", [], "any", false, false, false, 71);
                echo "</option>
                    
                    ";
            } else {
                // line 74
                echo "                    
                    <option value=\"";
                // line 75
                echo twig_get_attribute($this->env, $this->source, $context["theme"], "value", [], "any", false, false, false, 75);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["theme"], "text", [], "any", false, false, false, 75);
                echo "</option>
                    
                    ";
            }
            // line 78
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "                  
                  </select>
                  <br />
                  <img src=\"\" alt=\"\" id=\"theme\" class=\"img-thumbnail\" /></div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-layout\">";
        // line 85
        echo ($context["entry_layout"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_layout_id\" id=\"input-layout\" class=\"form-control\">
                    
                    ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layouts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
            // line 90
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 90) == ($context["config_layout_id"] ?? null))) {
                // line 91
                echo "                    
                    <option value=\"";
                // line 92
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 92);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 92);
                echo "</option>
                    
                    ";
            } else {
                // line 95
                echo "                    
                    <option value=\"";
                // line 96
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 96);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 96);
                echo "</option>
                    
                    ";
            }
            // line 99
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "                  
                  </select>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-store\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 107
        echo ($context["entry_name"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_name\" value=\"";
        // line 109
        echo ($context["config_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
                  ";
        // line 110
        if (($context["error_name"] ?? null)) {
            // line 111
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
                  ";
        }
        // line 112
        echo " </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-owner\">";
        // line 115
        echo ($context["entry_owner"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_owner\" value=\"";
        // line 117
        echo ($context["config_owner"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_owner"] ?? null);
        echo "\" id=\"input-owner\" class=\"form-control\" />
                  ";
        // line 118
        if (($context["error_owner"] ?? null)) {
            // line 119
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_owner"] ?? null);
            echo "</div>
                  ";
        }
        // line 120
        echo " </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-address\">";
        // line 123
        echo ($context["entry_address"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_address\" placeholder=\"";
        // line 125
        echo ($context["entry_address"] ?? null);
        echo "\" rows=\"5\" id=\"input-address\" class=\"form-control\">";
        echo ($context["config_address"] ?? null);
        echo "</textarea>
                  ";
        // line 126
        if (($context["error_address"] ?? null)) {
            // line 127
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_address"] ?? null);
            echo "</div>
                  ";
        }
        // line 128
        echo " </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-geocode\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 131
        echo ($context["help_geocode"] ?? null);
        echo "\">";
        echo ($context["entry_geocode"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_geocode\" value=\"";
        // line 133
        echo ($context["config_geocode"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_geocode"] ?? null);
        echo "\" id=\"input-geocode\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 137
        echo ($context["entry_email"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_email\" value=\"";
        // line 139
        echo ($context["config_email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
                  ";
        // line 140
        if (($context["error_email"] ?? null)) {
            // line 141
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
                  ";
        }
        // line 142
        echo " </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-telephone\">";
        // line 145
        echo ($context["entry_telephone"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_telephone\" value=\"";
        // line 147
        echo ($context["config_telephone"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-telephone\" class=\"form-control\" />
                  ";
        // line 148
        if (($context["error_telephone"] ?? null)) {
            // line 149
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_telephone"] ?? null);
            echo "</div>
                  ";
        }
        // line 150
        echo " </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-fax\">";
        // line 153
        echo ($context["entry_fax"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_fax\" value=\"";
        // line 155
        echo ($context["config_fax"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_fax"] ?? null);
        echo "\" id=\"input-fax\" class=\"form-control\" />
                </div>
              </div>              
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-image\">";
        // line 159
        echo ($context["entry_image"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 160
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"config_image\" value=\"";
        // line 161
        echo ($context["config_image"] ?? null);
        echo "\" id=\"input-image\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-open\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 165
        echo ($context["help_open"] ?? null);
        echo "\">";
        echo ($context["entry_open"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_open\" rows=\"5\" placeholder=\"";
        // line 167
        echo ($context["entry_open"] ?? null);
        echo "\" id=\"input-open\" class=\"form-control\">";
        echo ($context["config_open"] ?? null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-comment\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 171
        echo ($context["help_comment"] ?? null);
        echo "\">";
        echo ($context["entry_comment"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_comment\" rows=\"5\" placeholder=\"";
        // line 173
        echo ($context["entry_comment"] ?? null);
        echo "\" id=\"input-comment\" class=\"form-control\">";
        echo ($context["config_comment"] ?? null);
        echo "</textarea>
                </div>
              </div>
              ";
        // line 176
        if (($context["locations"] ?? null)) {
            // line 177
            echo "              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
            // line 178
            echo ($context["help_location"] ?? null);
            echo "\">";
            echo ($context["entry_location"] ?? null);
            echo "</span></label>
                <div class=\"col-sm-10\"> ";
            // line 179
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 180
                echo "                  <div class=\"checkbox\">
                    <label> ";
                // line 181
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 181), ($context["config_location"] ?? null))) {
                    // line 182
                    echo "                      <input type=\"checkbox\" name=\"config_location[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 182);
                    echo "\" checked=\"checked\" />
                      ";
                    // line 183
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 183);
                    echo "
                      ";
                } else {
                    // line 185
                    echo "                      <input type=\"checkbox\" name=\"config_location[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 185);
                    echo "\" />
                      ";
                    // line 186
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 186);
                    echo "
                      ";
                }
                // line 187
                echo " </label>
                  </div>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 189
            echo " </div>
              </div>
              ";
        }
        // line 191
        echo " </div>
            <div class=\"tab-pane\" id=\"tab-local\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-country\">";
        // line 194
        echo ($context["entry_country"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_country_id\" id=\"input-country\" class=\"form-control\">
                    
                    ";
        // line 198
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 199
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 199) == ($context["config_country_id"] ?? null))) {
                // line 200
                echo "                    
                    <option value=\"";
                // line 201
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 201);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 201);
                echo "</option>
                    
                    ";
            } else {
                // line 204
                echo "                    
                    <option value=\"";
                // line 205
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 205);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 205);
                echo "</option>
                    
                    ";
            }
            // line 208
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 209
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-zone\">";
        // line 214
        echo ($context["entry_zone"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_zone_id\" id=\"input-zone\" class=\"form-control\">
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-timezone\">";
        // line 221
        echo ($context["entry_timezone"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_timezone\" id=\"input-timezone\" class=\"form-control\">
                    ";
        // line 224
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["timezones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["timezone"]) {
            // line 225
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["timezone"], "value", [], "any", false, false, false, 225) == ($context["config_timezone"] ?? null))) {
                // line 226
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["timezone"], "value", [], "any", false, false, false, 226);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["timezone"], "text", [], "any", false, false, false, 226);
                echo "</option>
                      ";
            } else {
                // line 228
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["timezone"], "value", [], "any", false, false, false, 228);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["timezone"], "text", [], "any", false, false, false, 228);
                echo "</option>
                      ";
            }
            // line 230
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['timezone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 231
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-language\">";
        // line 235
        echo ($context["entry_language"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_language\" id=\"input-language\" class=\"form-control\">
                    
                    ";
        // line 239
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 240
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 240) == ($context["config_language"] ?? null))) {
                // line 241
                echo "                    
                    <option value=\"";
                // line 242
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 242);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 242);
                echo "</option>
                    
                    ";
            } else {
                // line 245
                echo "                    
                    <option value=\"";
                // line 246
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 246);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 246);
                echo "</option>
                    
                    ";
            }
            // line 249
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 250
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-admin-language\">";
        // line 255
        echo ($context["entry_admin_language"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_admin_language\" id=\"input-admin-language\" class=\"form-control\">
                    
                    ";
        // line 259
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 260
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 260) == ($context["config_admin_language"] ?? null))) {
                // line 261
                echo "                    
                    <option value=\"";
                // line 262
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 262);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 262);
                echo "</option>
                    
                    ";
            } else {
                // line 265
                echo "                    
                    <option value=\"";
                // line 266
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 266);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 266);
                echo "</option>
                    
                    ";
            }
            // line 269
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 270
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-currency\"><span data-toggle=\"tooltip\" title=\"";
        // line 275
        echo ($context["help_currency"] ?? null);
        echo "\">";
        echo ($context["entry_currency"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <select name=\"config_currency\" id=\"input-currency\" class=\"form-control\">
                    
                    ";
        // line 279
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 280
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 280) == ($context["config_currency"] ?? null))) {
                // line 281
                echo "                    
                    <option value=\"";
                // line 282
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 282);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 282);
                echo "</option>
                    
                    ";
            } else {
                // line 285
                echo "                    
                    <option value=\"";
                // line 286
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 286);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 286);
                echo "</option>
                    
                    ";
            }
            // line 289
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 290
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">

          <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"Выводится модулем autocalc_price_option в карточке товара\">Дополнительная валюта <i>(autocalc)</i>:</span></label>
          <div class=\"col-sm-10\">
            <select name=\"config_currency2\" id=\"input-currency\" class=\"form-control\">
              <option value=\"\">";
        // line 299
        echo ($context["text_none"] ?? null);
        echo "</option>
              ";
        // line 300
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 301
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 301) == ($context["config_currency2"] ?? null))) {
                // line 302
                echo "                  <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 302);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 302);
                echo "</option>
                ";
            } else {
                // line 304
                echo "                  <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 304);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 304);
                echo "</option>
                ";
            }
            // line 306
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 307
        echo "            </select>
          </div>
        </div>
        <div class=\"form-group\">
          <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"Акция на опции пропорционально акции на товар (autocalc_price_option)\">Акция на опции <i>(autocalc)</i>:</span></label>
          <div class=\"col-sm-10\">
            <label class=\"radio-inline\"> 
              ";
        // line 314
        if (($context["config_autocalc_option_special"] ?? null)) {
            // line 315
            echo "              <input type=\"radio\" name=\"config_autocalc_option_special\" value=\"1\" checked=\"checked\" />
              ";
            // line 316
            echo ($context["text_yes"] ?? null);
            echo "
              ";
        } else {
            // line 318
            echo "              <input type=\"radio\" name=\"config_autocalc_option_special\" value=\"1\" />
              ";
            // line 319
            echo ($context["text_yes"] ?? null);
            echo "
              ";
        }
        // line 321
        echo "            </label>
            <label class=\"radio-inline\">
              ";
        // line 323
        if ( !($context["config_autocalc_option_special"] ?? null)) {
            // line 324
            echo "              <input type=\"radio\" name=\"config_autocalc_option_special\" value=\"0\" checked=\"checked\" />
              ";
            // line 325
            echo ($context["text_no"] ?? null);
            echo "
              ";
        } else {
            // line 327
            echo "              <input type=\"radio\" name=\"config_autocalc_option_special\" value=\"0\" />
              ";
            // line 328
            echo ($context["text_no"] ?? null);
            echo "
              ";
        }
        // line 330
        echo "            </label>
          </div>
        </div>
        <div class=\"form-group\">
          <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"Скидка на опции пропорционально скидке на товар (autocalc_price_option)\">Скидка на опции <i>(autocalc)</i>:</span></label>
          <div class=\"col-sm-10\">
            <label class=\"radio-inline\">
              ";
        // line 337
        if (($context["config_autocalc_option_discount"] ?? null)) {
            // line 338
            echo "              <input type=\"radio\" name=\"config_autocalc_option_discount\" value=\"1\" checked=\"checked\" />
              ";
            // line 339
            echo ($context["text_yes"] ?? null);
            echo "
              ";
        } else {
            // line 341
            echo "              <input type=\"radio\" name=\"config_autocalc_option_discount\" value=\"1\" />
              ";
            // line 342
            echo ($context["text_yes"] ?? null);
            echo "
              ";
        }
        // line 344
        echo "            </label>
            <label class=\"radio-inline\">
              ";
        // line 346
        if ( !($context["config_autocalc_option_discount"] ?? null)) {
            // line 347
            echo "              <input type=\"radio\" name=\"config_autocalc_option_discount\" value=\"0\" checked=\"checked\" />
              ";
            // line 348
            echo ($context["text_no"] ?? null);
            echo "
              ";
        } else {
            // line 350
            echo "              <input type=\"radio\" name=\"config_autocalc_option_discount\" value=\"0\" />
              ";
            // line 351
            echo ($context["text_no"] ?? null);
            echo "
              ";
        }
        // line 353
        echo "            </label>
          </div>
        </div>
        <div class=\"form-group\">
          <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"Отключении функции умножения на количество (autocalc_price_option)\">Не умножать на количество <i>(autocalc)</i>:</span></label>
          <div class=\"col-sm-10\">
            <label class=\"radio-inline\">
              ";
        // line 360
        if (($context["config_autocalc_not_mul_qty"] ?? null)) {
            // line 361
            echo "              <input type=\"radio\" name=\"config_autocalc_not_mul_qty\" value=\"1\" checked=\"checked\" />
              ";
            // line 362
            echo ($context["text_yes"] ?? null);
            echo "
              ";
        } else {
            // line 364
            echo "              <input type=\"radio\" name=\"config_autocalc_not_mul_qty\" value=\"1\" />
              ";
            // line 365
            echo ($context["text_yes"] ?? null);
            echo "
              ";
        }
        // line 366
        echo " </label>
            <label class=\"radio-inline\">
              ";
        // line 368
        if ( !($context["config_autocalc_not_mul_qty"] ?? null)) {
            // line 369
            echo "              <input type=\"radio\" name=\"config_autocalc_not_mul_qty\" value=\"0\" checked=\"checked\" />
              ";
            // line 370
            echo ($context["text_no"] ?? null);
            echo "
              ";
        } else {
            // line 372
            echo "              <input type=\"radio\" name=\"config_autocalc_not_mul_qty\" value=\"0\" />
              ";
            // line 373
            echo ($context["text_no"] ?? null);
            echo "
              ";
        }
        // line 375
        echo "            </label>
          </div>
        </div>
        <div class=\"form-group\">
          <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"Автоматический выбор первой опции (radio,select). (autocalc_price_option)\">Выбор первой опции <i>(autocalc)</i>:</span></label>
          <div class=\"col-sm-10\">
            <label class=\"radio-inline\">
              ";
        // line 382
        if (($context["config_autocalc_select_first"] ?? null)) {
            // line 383
            echo "              <input type=\"radio\" name=\"config_autocalc_select_first\" value=\"1\" checked=\"checked\" />
              ";
            // line 384
            echo ($context["text_yes"] ?? null);
            echo "
              ";
        } else {
            // line 386
            echo "              <input type=\"radio\" name=\"config_autocalc_select_first\" value=\"1\" />
              ";
            // line 387
            echo ($context["text_yes"] ?? null);
            echo "
              ";
        }
        // line 389
        echo "            </label>
            <label class=\"radio-inline\">
              ";
        // line 391
        if ( !($context["config_autocalc_select_first"] ?? null)) {
            // line 392
            echo "              <input type=\"radio\" name=\"config_autocalc_select_first\" value=\"0\" checked=\"checked\" />
              ";
            // line 393
            echo ($context["text_no"] ?? null);
            echo "
              ";
        } else {
            // line 395
            echo "              <input type=\"radio\" name=\"config_autocalc_select_first\" value=\"0\" />
              ";
            // line 396
            echo ($context["text_no"] ?? null);
            echo "
              ";
        }
        // line 398
        echo "            </label>
          </div>
        </div>
        <div class=\"form-group\">
          <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"Скрыть вывод наценки для опции. (autocalc_price_option)\">Не показывать цену опции <i>(autocalc)</i>:</span></label>
          <div class=\"col-sm-10\">
            <label class=\"radio-inline\">
              ";
        // line 405
        if (($context["config_autocalc_hide_option_price"] ?? null)) {
            // line 406
            echo "              <input type=\"radio\" name=\"config_autocalc_hide_option_price\" value=\"1\" checked=\"checked\" />
              ";
            // line 407
            echo ($context["text_yes"] ?? null);
            echo "
              ";
        } else {
            // line 409
            echo "              <input type=\"radio\" name=\"config_autocalc_hide_option_price\" value=\"1\" />
              ";
            // line 410
            echo ($context["text_yes"] ?? null);
            echo "
              ";
        }
        // line 412
        echo "            </label>
            <label class=\"radio-inline\">
              ";
        // line 414
        if ( !($context["config_autocalc_hide_option_price"] ?? null)) {
            // line 415
            echo "              <input type=\"radio\" name=\"config_autocalc_hide_option_price\" value=\"0\" checked=\"checked\" />
              ";
            // line 416
            echo ($context["text_no"] ?? null);
            echo "
              ";
        } else {
            // line 418
            echo "              <input type=\"radio\" name=\"config_autocalc_hide_option_price\" value=\"0\" />
              ";
            // line 419
            echo ($context["text_no"] ?? null);
            echo "
              ";
        }
        // line 421
        echo "            </label>
          </div>
        </div>
        <div class=\"form-group\">
      
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 426
        echo ($context["help_currency_auto"] ?? null);
        echo "\">";
        echo ($context["entry_currency_auto"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\"> ";
        // line 428
        if (($context["config_currency_auto"] ?? null)) {
            // line 429
            echo "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"1\" checked=\"checked\" />
                    ";
            // line 430
            echo ($context["text_yes"] ?? null);
            echo "
                    ";
        } else {
            // line 432
            echo "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"1\" />
                    ";
            // line 433
            echo ($context["text_yes"] ?? null);
            echo "
                    ";
        }
        // line 434
        echo " </label>
                  <label class=\"radio-inline\"> ";
        // line 435
        if ( !($context["config_currency_auto"] ?? null)) {
            // line 436
            echo "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"0\" checked=\"checked\" />
                    ";
            // line 437
            echo ($context["text_no"] ?? null);
            echo "
                    ";
        } else {
            // line 439
            echo "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"0\" />
                    ";
            // line 440
            echo ($context["text_no"] ?? null);
            echo "
                    ";
        }
        // line 441
        echo " </label>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-length-class\">";
        // line 445
        echo ($context["entry_length_class"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_length_class_id\" id=\"input-length-class\" class=\"form-control\">
                    
                    ";
        // line 449
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["length_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["length_class"]) {
            // line 450
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 450) == ($context["config_length_class_id"] ?? null))) {
                // line 451
                echo "                    
                    <option value=\"";
                // line 452
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 452);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 452);
                echo "</option>
                    
                    ";
            } else {
                // line 455
                echo "                    
                    <option value=\"";
                // line 456
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 456);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 456);
                echo "</option>
                    
                    ";
            }
            // line 459
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['length_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 460
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-weight-class\">";
        // line 465
        echo ($context["entry_weight_class"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_weight_class_id\" id=\"input-weight-class\" class=\"form-control\">
                    
                    ";
        // line 469
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["weight_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["weight_class"]) {
            // line 470
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 470) == ($context["config_weight_class_id"] ?? null))) {
                // line 471
                echo "                    
                    <option value=\"";
                // line 472
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 472);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 472);
                echo "</option>
                    
                    ";
            } else {
                // line 475
                echo "                    
                    <option value=\"";
                // line 476
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 476);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 476);
                echo "</option>
                    
                    ";
            }
            // line 479
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weight_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 480
        echo "                  
                  </select>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-option\">
              <fieldset>
                <legend>";
        // line 487
        echo ($context["text_product"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 489
        echo ($context["help_product_count"] ?? null);
        echo "\">";
        echo ($context["entry_product_count"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 491
        if (($context["config_product_count"] ?? null)) {
            // line 492
            echo "                      <input type=\"radio\" name=\"config_product_count\" value=\"1\" checked=\"checked\" />
                      ";
            // line 493
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 495
            echo "                      <input type=\"radio\" name=\"config_product_count\" value=\"1\" />
                      ";
            // line 496
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 497
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 498
        if ( !($context["config_product_count"] ?? null)) {
            // line 499
            echo "                      <input type=\"radio\" name=\"config_product_count\" value=\"0\" checked=\"checked\" />
                      ";
            // line 500
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 502
            echo "                      <input type=\"radio\" name=\"config_product_count\" value=\"0\" />
                      ";
            // line 503
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 504
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-admin-limit\"><span data-toggle=\"tooltip\" title=\"";
        // line 508
        echo ($context["help_limit_admin"] ?? null);
        echo "\">";
        echo ($context["entry_limit_admin"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_limit_admin\" value=\"";
        // line 510
        echo ($context["config_limit_admin"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_limit_admin"] ?? null);
        echo "\" id=\"input-admin-limit\" class=\"form-control\" />
                    ";
        // line 511
        if (($context["error_limit_admin"] ?? null)) {
            // line 512
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_limit_admin"] ?? null);
            echo "</div>
                    ";
        }
        // line 513
        echo " </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 517
        echo ($context["text_review"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 519
        echo ($context["help_review"] ?? null);
        echo "\">";
        echo ($context["entry_review"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 521
        if (($context["config_review_status"] ?? null)) {
            // line 522
            echo "                      <input type=\"radio\" name=\"config_review_status\" value=\"1\" checked=\"checked\" />
                      ";
            // line 523
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 525
            echo "                      <input type=\"radio\" name=\"config_review_status\" value=\"1\" />
                      ";
            // line 526
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 527
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 528
        if ( !($context["config_review_status"] ?? null)) {
            // line 529
            echo "                      <input type=\"radio\" name=\"config_review_status\" value=\"0\" checked=\"checked\" />
                      ";
            // line 530
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 532
            echo "                      <input type=\"radio\" name=\"config_review_status\" value=\"0\" />
                      ";
            // line 533
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 534
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 538
        echo ($context["help_review_guest"] ?? null);
        echo "\">";
        echo ($context["entry_review_guest"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 540
        if (($context["config_review_guest"] ?? null)) {
            // line 541
            echo "                      <input type=\"radio\" name=\"config_review_guest\" value=\"1\" checked=\"checked\" />
                      ";
            // line 542
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 544
            echo "                      <input type=\"radio\" name=\"config_review_guest\" value=\"1\" />
                      ";
            // line 545
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 546
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 547
        if ( !($context["config_review_guest"] ?? null)) {
            // line 548
            echo "                      <input type=\"radio\" name=\"config_review_guest\" value=\"0\" checked=\"checked\" />
                      ";
            // line 549
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 551
            echo "                      <input type=\"radio\" name=\"config_review_guest\" value=\"0\" />
                      ";
            // line 552
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 553
        echo " </label>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 558
        echo ($context["text_voucher"] ?? null);
        echo "</legend>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-voucher-min\"><span data-toggle=\"tooltip\" title=\"";
        // line 560
        echo ($context["help_voucher_min"] ?? null);
        echo "\">";
        echo ($context["entry_voucher_min"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_voucher_min\" value=\"";
        // line 562
        echo ($context["config_voucher_min"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_voucher_min"] ?? null);
        echo "\" id=\"input-voucher-min\" class=\"form-control\" />
                    ";
        // line 563
        if (($context["error_voucher_min"] ?? null)) {
            // line 564
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_voucher_min"] ?? null);
            echo "</div>
                    ";
        }
        // line 565
        echo " </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-voucher-max\"><span data-toggle=\"tooltip\" title=\"";
        // line 568
        echo ($context["help_voucher_max"] ?? null);
        echo "\">";
        echo ($context["entry_voucher_max"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_voucher_max\" value=\"";
        // line 570
        echo ($context["config_voucher_max"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_voucher_max"] ?? null);
        echo "\" id=\"input-voucher-max\" class=\"form-control\" />
                    ";
        // line 571
        if (($context["error_voucher_max"] ?? null)) {
            // line 572
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_voucher_max"] ?? null);
            echo "</div>
                    ";
        }
        // line 573
        echo " </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 577
        echo ($context["text_tax"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 579
        echo ($context["entry_tax"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 581
        if (($context["config_tax"] ?? null)) {
            // line 582
            echo "                      <input type=\"radio\" name=\"config_tax\" value=\"1\" checked=\"checked\" />
                      ";
            // line 583
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 585
            echo "                      <input type=\"radio\" name=\"config_tax\" value=\"1\" />
                      ";
            // line 586
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 587
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 588
        if ( !($context["config_tax"] ?? null)) {
            // line 589
            echo "                      <input type=\"radio\" name=\"config_tax\" value=\"0\" checked=\"checked\" />
                      ";
            // line 590
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 592
            echo "                      <input type=\"radio\" name=\"config_tax\" value=\"0\" />
                      ";
            // line 593
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 594
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-tax-default\"><span data-toggle=\"tooltip\" title=\"";
        // line 598
        echo ($context["help_tax_default"] ?? null);
        echo "\">";
        echo ($context["entry_tax_default"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_tax_default\" id=\"input-tax-default\" class=\"form-control\">
                      <option value=\"\">";
        // line 601
        echo ($context["text_none"] ?? null);
        echo "</option>
                      
                      ";
        // line 603
        if ((($context["config_tax_default"] ?? null) == "shipping")) {
            // line 604
            echo "                      
                      <option value=\"shipping\" selected=\"selected\">";
            // line 605
            echo ($context["text_shipping"] ?? null);
            echo "</option>
                      
                      ";
        } else {
            // line 608
            echo "                      
                      <option value=\"shipping\">";
            // line 609
            echo ($context["text_shipping"] ?? null);
            echo "</option>
                      
                      ";
        }
        // line 612
        echo "                      ";
        if ((($context["config_tax_default"] ?? null) == "payment")) {
            // line 613
            echo "                      
                      <option value=\"payment\" selected=\"selected\">";
            // line 614
            echo ($context["text_payment"] ?? null);
            echo "</option>
                      
                      ";
        } else {
            // line 617
            echo "                      
                      <option value=\"payment\">";
            // line 618
            echo ($context["text_payment"] ?? null);
            echo "</option>
                      
                      ";
        }
        // line 621
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-tax-customer\"><span data-toggle=\"tooltip\" title=\"";
        // line 626
        echo ($context["help_tax_customer"] ?? null);
        echo "\">";
        echo ($context["entry_tax_customer"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_tax_customer\" id=\"input-tax-customer\" class=\"form-control\">
                      <option value=\"\">";
        // line 629
        echo ($context["text_none"] ?? null);
        echo "</option>
                      
                      ";
        // line 631
        if ((($context["config_tax_customer"] ?? null) == "shipping")) {
            // line 632
            echo "                      
                      <option value=\"shipping\" selected=\"selected\">";
            // line 633
            echo ($context["text_shipping"] ?? null);
            echo "</option>
                      
                      ";
        } else {
            // line 636
            echo "                      
                      <option value=\"shipping\">";
            // line 637
            echo ($context["text_shipping"] ?? null);
            echo "</option>
                      
                      ";
        }
        // line 640
        echo "                      ";
        if ((($context["config_tax_customer"] ?? null) == "payment")) {
            // line 641
            echo "                      
                      <option value=\"payment\" selected=\"selected\">";
            // line 642
            echo ($context["text_payment"] ?? null);
            echo "</option>
                      
                      ";
        } else {
            // line 645
            echo "                      
                      <option value=\"payment\">";
            // line 646
            echo ($context["text_payment"] ?? null);
            echo "</option>
                      
                      ";
        }
        // line 649
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 655
        echo ($context["text_account"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 657
        echo ($context["help_customer_online"] ?? null);
        echo "\">";
        echo ($context["entry_customer_online"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 659
        if (($context["config_customer_online"] ?? null)) {
            // line 660
            echo "                      <input type=\"radio\" name=\"config_customer_online\" value=\"1\" checked=\"checked\" />
                      ";
            // line 661
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 663
            echo "                      <input type=\"radio\" name=\"config_customer_online\" value=\"1\" />
                      ";
            // line 664
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 665
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 666
        if ( !($context["config_customer_online"] ?? null)) {
            // line 667
            echo "                      <input type=\"radio\" name=\"config_customer_online\" value=\"0\" checked=\"checked\" />
                      ";
            // line 668
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 670
            echo "                      <input type=\"radio\" name=\"config_customer_online\" value=\"0\" />
                      ";
            // line 671
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 672
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 676
        echo ($context["help_customer_activity"] ?? null);
        echo "\">";
        echo ($context["entry_customer_activity"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 678
        if (($context["config_customer_activity"] ?? null)) {
            // line 679
            echo "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"1\" checked=\"checked\" />
                      ";
            // line 680
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 682
            echo "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"1\" />
                      ";
            // line 683
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 684
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 685
        if ( !($context["config_customer_activity"] ?? null)) {
            // line 686
            echo "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"0\" checked=\"checked\" />
                      ";
            // line 687
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 689
            echo "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"0\" />
                      ";
            // line 690
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 691
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 695
        echo ($context["entry_customer_search"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 697
        if (($context["config_customer_search"] ?? null)) {
            // line 698
            echo "                      <input type=\"radio\" name=\"config_customer_search\" value=\"1\" checked=\"checked\" />
                      ";
            // line 699
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 701
            echo "                      <input type=\"radio\" name=\"config_customer_search\" value=\"1\" />
                      ";
            // line 702
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 703
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 704
        if ( !($context["config_customer_search"] ?? null)) {
            // line 705
            echo "                      <input type=\"radio\" name=\"config_customer_search\" value=\"0\" checked=\"checked\" />
                      ";
            // line 706
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 708
            echo "                      <input type=\"radio\" name=\"config_customer_search\" value=\"0\" />
                      ";
            // line 709
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 710
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-customer-group\"><span data-toggle=\"tooltip\" title=\"";
        // line 714
        echo ($context["help_customer_group"] ?? null);
        echo "\">";
        echo ($context["entry_customer_group"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_customer_group_id\" id=\"input-customer-group\" class=\"form-control\">
                      
                      ";
        // line 718
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 719
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 719) == ($context["config_customer_group_id"] ?? null))) {
                // line 720
                echo "                      
                      <option value=\"";
                // line 721
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 721);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 721);
                echo "</option>
                      
                      ";
            } else {
                // line 724
                echo "                      
                      <option value=\"";
                // line 725
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 725);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 725);
                echo "</option>
                      
                      ";
            }
            // line 728
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 729
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 734
        echo ($context["help_customer_group_display"] ?? null);
        echo "\">";
        echo ($context["entry_customer_group_display"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\"> ";
        // line 735
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 736
            echo "                    <div class=\"checkbox\">
                      <label> ";
            // line 737
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 737), ($context["config_customer_group_display"] ?? null))) {
                // line 738
                echo "                        <input type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 738);
                echo "\" checked=\"checked\" />
                        ";
                // line 739
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 739);
                echo "
                        ";
            } else {
                // line 741
                echo "                        <input type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 741);
                echo "\" />
                        ";
                // line 742
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 742);
                echo "
                        ";
            }
            // line 743
            echo " </label>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 746
        echo "                    ";
        if (($context["error_customer_group_display"] ?? null)) {
            // line 747
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_customer_group_display"] ?? null);
            echo "</div>
                    ";
        }
        // line 748
        echo " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 751
        echo ($context["help_customer_price"] ?? null);
        echo "\">";
        echo ($context["entry_customer_price"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 753
        if (($context["config_customer_price"] ?? null)) {
            // line 754
            echo "                      <input type=\"radio\" name=\"config_customer_price\" value=\"1\" checked=\"checked\" />
                      ";
            // line 755
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 757
            echo "                      <input type=\"radio\" name=\"config_customer_price\" value=\"1\" />
                      ";
            // line 758
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 759
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 760
        if ( !($context["config_customer_price"] ?? null)) {
            // line 761
            echo "                      <input type=\"radio\" name=\"config_customer_price\" value=\"0\" checked=\"checked\" />
                      ";
            // line 762
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 764
            echo "                      <input type=\"radio\" name=\"config_customer_price\" value=\"0\" />
                      ";
            // line 765
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 766
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-login-attempts\"><span data-toggle=\"tooltip\" title=\"";
        // line 770
        echo ($context["help_login_attempts"] ?? null);
        echo "\">";
        echo ($context["entry_login_attempts"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_login_attempts\" value=\"";
        // line 772
        echo ($context["config_login_attempts"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_login_attempts"] ?? null);
        echo "\" id=\"input-login-attempts\" class=\"form-control\" />
                    ";
        // line 773
        if (($context["error_login_attempts"] ?? null)) {
            // line 774
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_login_attempts"] ?? null);
            echo "</div>
                    ";
        }
        // line 775
        echo " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-account\"><span data-toggle=\"tooltip\" title=\"";
        // line 778
        echo ($context["help_account"] ?? null);
        echo "\">";
        echo ($context["entry_account"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_account_id\" id=\"input-account\" class=\"form-control\">
                      <option value=\"0\">";
        // line 781
        echo ($context["text_none"] ?? null);
        echo "</option>
                      
                      ";
        // line 783
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 784
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 784) == ($context["config_account_id"] ?? null))) {
                // line 785
                echo "                      
                      <option value=\"";
                // line 786
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 786);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 786);
                echo "</option>
                      
                      ";
            } else {
                // line 789
                echo "                      
                      <option value=\"";
                // line 790
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 790);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 790);
                echo "</option>
                      
                      ";
            }
            // line 793
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 794
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 800
        echo ($context["text_checkout"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-invoice-prefix\"><span data-toggle=\"tooltip\" title=\"";
        // line 802
        echo ($context["help_invoice_prefix"] ?? null);
        echo "\">";
        echo ($context["entry_invoice_prefix"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_invoice_prefix\" value=\"";
        // line 804
        echo ($context["config_invoice_prefix"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_invoice_prefix"] ?? null);
        echo "\" id=\"input-invoice-prefix\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 808
        echo ($context["help_cart_weight"] ?? null);
        echo "\">";
        echo ($context["entry_cart_weight"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 810
        if (($context["config_cart_weight"] ?? null)) {
            // line 811
            echo "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"1\" checked=\"checked\" />
                      ";
            // line 812
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 814
            echo "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"1\" />
                      ";
            // line 815
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 816
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 817
        if ( !($context["config_cart_weight"] ?? null)) {
            // line 818
            echo "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"0\" checked=\"checked\" />
                      ";
            // line 819
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 821
            echo "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"0\" />
                      ";
            // line 822
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 823
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 827
        echo ($context["help_checkout_guest"] ?? null);
        echo "\">";
        echo ($context["entry_checkout_guest"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 829
        if (($context["config_checkout_guest"] ?? null)) {
            // line 830
            echo "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"1\" checked=\"checked\" />
                      ";
            // line 831
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 833
            echo "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"1\" />
                      ";
            // line 834
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 835
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 836
        if ( !($context["config_checkout_guest"] ?? null)) {
            // line 837
            echo "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"0\" checked=\"checked\" />
                      ";
            // line 838
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 840
            echo "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"0\" />
                      ";
            // line 841
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 842
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-checkout\"><span data-toggle=\"tooltip\" title=\"";
        // line 846
        echo ($context["help_checkout"] ?? null);
        echo "\">";
        echo ($context["entry_checkout"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_checkout_id\" id=\"input-checkout\" class=\"form-control\">
                      <option value=\"0\">";
        // line 849
        echo ($context["text_none"] ?? null);
        echo "</option>
                      
                      ";
        // line 851
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 852
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 852) == ($context["config_checkout_id"] ?? null))) {
                // line 853
                echo "                      
                      <option value=\"";
                // line 854
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 854);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 854);
                echo "</option>
                      
                      ";
            } else {
                // line 857
                echo "                      
                      <option value=\"";
                // line 858
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 858);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 858);
                echo "</option>
                      
                      ";
            }
            // line 861
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 862
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-order-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 867
        echo ($context["help_order_status"] ?? null);
        echo "\">";
        echo ($context["entry_order_status"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_order_status_id\" id=\"input-order-status\" class=\"form-control\">
                      
                      ";
        // line 871
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 872
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 872) == ($context["config_order_status_id"] ?? null))) {
                // line 873
                echo "                      
                      <option value=\"";
                // line 874
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 874);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 874);
                echo "</option>
                      
                      ";
            } else {
                // line 877
                echo "                      
                      <option value=\"";
                // line 878
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 878);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 878);
                echo "</option>
                      
                      ";
            }
            // line 881
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 882
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-process-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 887
        echo ($context["help_processing_status"] ?? null);
        echo "\">";
        echo ($context["entry_processing_status"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 889
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 890
            echo "                      <div class=\"checkbox\">
                        <label> ";
            // line 891
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 891), ($context["config_processing_status"] ?? null))) {
                // line 892
                echo "                          <input type=\"checkbox\" name=\"config_processing_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 892);
                echo "\" checked=\"checked\" />
                          ";
                // line 893
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 893);
                echo "
                          ";
            } else {
                // line 895
                echo "                          <input type=\"checkbox\" name=\"config_processing_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 895);
                echo "\" />
                          ";
                // line 896
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 896);
                echo "
                          ";
            }
            // line 897
            echo " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 899
        echo " </div>
                    ";
        // line 900
        if (($context["error_processing_status"] ?? null)) {
            // line 901
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_processing_status"] ?? null);
            echo "</div>
                    ";
        }
        // line 902
        echo " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-complete-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 905
        echo ($context["help_complete_status"] ?? null);
        echo "\">";
        echo ($context["entry_complete_status"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 907
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 908
            echo "                      <div class=\"checkbox\">
                        <label> ";
            // line 909
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 909), ($context["config_complete_status"] ?? null))) {
                // line 910
                echo "                          <input type=\"checkbox\" name=\"config_complete_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 910);
                echo "\" checked=\"checked\" />
                          ";
                // line 911
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 911);
                echo "
                          ";
            } else {
                // line 913
                echo "                          <input type=\"checkbox\" name=\"config_complete_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 913);
                echo "\" />
                          ";
                // line 914
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 914);
                echo "
                          ";
            }
            // line 915
            echo " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 917
        echo " </div>
                    ";
        // line 918
        if (($context["error_complete_status"] ?? null)) {
            // line 919
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_complete_status"] ?? null);
            echo "</div>
                    ";
        }
        // line 920
        echo " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-fraud-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 923
        echo ($context["help_fraud_status"] ?? null);
        echo "\">";
        echo ($context["entry_fraud_status"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_fraud_status_id\" id=\"input-fraud-status\" class=\"form-control\">
                      
                      ";
        // line 927
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 928
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 928) == ($context["config_fraud_status_id"] ?? null))) {
                // line 929
                echo "                      
                      <option value=\"";
                // line 930
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 930);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 930);
                echo "</option>
                      
                      ";
            } else {
                // line 933
                echo "                      
                      <option value=\"";
                // line 934
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 934);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 934);
                echo "</option>
                      
                      ";
            }
            // line 937
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 938
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-api\"><span data-toggle=\"tooltip\" title=\"";
        // line 943
        echo ($context["help_api"] ?? null);
        echo "\">";
        echo ($context["entry_api"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_api_id\" id=\"input-api\" class=\"form-control\">
                      <option value=\"0\">";
        // line 946
        echo ($context["text_none"] ?? null);
        echo "</option>
                      
                      ";
        // line 948
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["apis"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["api"]) {
            // line 949
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["api"], "api_id", [], "any", false, false, false, 949) == ($context["config_api_id"] ?? null))) {
                // line 950
                echo "                      
                      <option value=\"";
                // line 951
                echo twig_get_attribute($this->env, $this->source, $context["api"], "api_id", [], "any", false, false, false, 951);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["api"], "username", [], "any", false, false, false, 951);
                echo "</option>
                      
                      ";
            } else {
                // line 954
                echo "                      
                      <option value=\"";
                // line 955
                echo twig_get_attribute($this->env, $this->source, $context["api"], "api_id", [], "any", false, false, false, 955);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["api"], "username", [], "any", false, false, false, 955);
                echo "</option>
                      
                      ";
            }
            // line 958
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['api'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 959
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 965
        echo ($context["text_stock"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 967
        echo ($context["help_stock_display"] ?? null);
        echo "\">";
        echo ($context["entry_stock_display"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 969
        if (($context["config_stock_display"] ?? null)) {
            // line 970
            echo "                      <input type=\"radio\" name=\"config_stock_display\" value=\"1\" checked=\"checked\" />
                      ";
            // line 971
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 973
            echo "                      <input type=\"radio\" name=\"config_stock_display\" value=\"1\" />
                      ";
            // line 974
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 975
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 976
        if ( !($context["config_stock_display"] ?? null)) {
            // line 977
            echo "                      <input type=\"radio\" name=\"config_stock_display\" value=\"0\" checked=\"checked\" />
                      ";
            // line 978
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 980
            echo "                      <input type=\"radio\" name=\"config_stock_display\" value=\"0\" />
                      ";
            // line 981
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 982
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 986
        echo ($context["help_stock_warning"] ?? null);
        echo "\">";
        echo ($context["entry_stock_warning"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 988
        if (($context["config_stock_warning"] ?? null)) {
            // line 989
            echo "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"1\" checked=\"checked\" />
                      ";
            // line 990
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 992
            echo "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"1\" />
                      ";
            // line 993
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 994
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 995
        if ( !($context["config_stock_warning"] ?? null)) {
            // line 996
            echo "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"0\" checked=\"checked\" />
                      ";
            // line 997
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 999
            echo "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"0\" />
                      ";
            // line 1000
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1001
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1005
        echo ($context["help_stock_checkout"] ?? null);
        echo "\">";
        echo ($context["entry_stock_checkout"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1007
        if (($context["config_stock_checkout"] ?? null)) {
            // line 1008
            echo "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1009
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1011
            echo "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"1\" />
                      ";
            // line 1012
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1013
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1014
        if ( !($context["config_stock_checkout"] ?? null)) {
            // line 1015
            echo "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1016
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1018
            echo "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"0\" />
                      ";
            // line 1019
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1020
        echo " </label>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1025
        echo ($context["text_affiliate"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate-group\">";
        // line 1027
        echo ($context["entry_affiliate_group"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_affiliate_group_id\" id=\"input-affiliate-group\" class=\"form-control\">
                      
                      ";
        // line 1031
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1032
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1032) == ($context["config_affiliate_group_id"] ?? null))) {
                // line 1033
                echo "                      
                      <option value=\"";
                // line 1034
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1034);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1034);
                echo "</option>
                      
                      ";
            } else {
                // line 1037
                echo "                      
                      <option value=\"";
                // line 1038
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1038);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1038);
                echo "</option>
                      
                      ";
            }
            // line 1041
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1042
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1047
        echo ($context["help_affiliate_approval"] ?? null);
        echo "\">";
        echo ($context["entry_affiliate_approval"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1049
        if (($context["config_affiliate_approval"] ?? null)) {
            // line 1050
            echo "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1051
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1053
            echo "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"1\" />
                      ";
            // line 1054
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1055
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1056
        if ( !($context["config_affiliate_approval"] ?? null)) {
            // line 1057
            echo "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1058
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1060
            echo "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"0\" />
                      ";
            // line 1061
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1062
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1066
        echo ($context["help_affiliate_auto"] ?? null);
        echo "\">";
        echo ($context["entry_affiliate_auto"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1068
        if (($context["config_affiliate_auto"] ?? null)) {
            // line 1069
            echo "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1070
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1072
            echo "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"1\" />
                      ";
            // line 1073
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1074
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1075
        if ( !($context["config_affiliate_auto"] ?? null)) {
            // line 1076
            echo "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1077
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1079
            echo "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"0\" />
                      ";
            // line 1080
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1081
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate-commission\"><span data-toggle=\"tooltip\" title=\"";
        // line 1085
        echo ($context["help_affiliate_commission"] ?? null);
        echo "\">";
        echo ($context["entry_affiliate_commission"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_affiliate_commission\" value=\"";
        // line 1087
        echo ($context["config_affiliate_commission"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_affiliate_commission"] ?? null);
        echo "\" id=\"input-affiliate-commission\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate\"><span data-toggle=\"tooltip\" title=\"";
        // line 1091
        echo ($context["help_affiliate"] ?? null);
        echo "\">";
        echo ($context["entry_affiliate"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_affiliate_id\" id=\"input-affiliate\" class=\"form-control\">
                      <option value=\"0\">";
        // line 1094
        echo ($context["text_none"] ?? null);
        echo "</option>
                      
                      ";
        // line 1096
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 1097
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 1097) == ($context["config_affiliate_id"] ?? null))) {
                // line 1098
                echo "                      
                      <option value=\"";
                // line 1099
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 1099);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 1099);
                echo "</option>
                      
                      ";
            } else {
                // line 1102
                echo "                      
                      <option value=\"";
                // line 1103
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 1103);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 1103);
                echo "</option>
                      
                      ";
            }
            // line 1106
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1107
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1113
        echo ($context["text_return"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-return\"><span data-toggle=\"tooltip\" title=\"";
        // line 1115
        echo ($context["help_return"] ?? null);
        echo "\">";
        echo ($context["entry_return"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_return_id\" id=\"input-return\" class=\"form-control\">
                      <option value=\"0\">";
        // line 1118
        echo ($context["text_none"] ?? null);
        echo "</option>
                      
                      ";
        // line 1120
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 1121
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 1121) == ($context["config_return_id"] ?? null))) {
                // line 1122
                echo "                      
                      <option value=\"";
                // line 1123
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 1123);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 1123);
                echo "</option>
                      
                      ";
            } else {
                // line 1126
                echo "                      
                      <option value=\"";
                // line 1127
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 1127);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 1127);
                echo "</option>
                      
                      ";
            }
            // line 1130
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1131
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-return-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 1136
        echo ($context["help_return_status"] ?? null);
        echo "\">";
        echo ($context["entry_return_status"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_return_status_id\" id=\"input-return-status\" class=\"form-control\">
                      
                      ";
        // line 1140
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["return_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["return_status"]) {
            // line 1141
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 1141) == ($context["config_return_status_id"] ?? null))) {
                // line 1142
                echo "                      
                      <option value=\"";
                // line 1143
                echo twig_get_attribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 1143);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["return_status"], "name", [], "any", false, false, false, 1143);
                echo "</option>
                      
                      ";
            } else {
                // line 1146
                echo "                      
                      <option value=\"";
                // line 1147
                echo twig_get_attribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 1147);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["return_status"], "name", [], "any", false, false, false, 1147);
                echo "</option>
                      
                      ";
            }
            // line 1150
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['return_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1151
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1157
        echo ($context["text_captcha"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1159
        echo ($context["help_captcha"] ?? null);
        echo "\">";
        echo ($context["entry_captcha"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_captcha\" id=\"input-captcha\" class=\"form-control\">
                      <option value=\"\">";
        // line 1162
        echo ($context["text_none"] ?? null);
        echo "</option>
                      
                      ";
        // line 1164
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["captchas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["captcha"]) {
            // line 1165
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["captcha"], "value", [], "any", false, false, false, 1165) == ($context["config_captcha"] ?? null))) {
                // line 1166
                echo "                      
                      <option value=\"";
                // line 1167
                echo twig_get_attribute($this->env, $this->source, $context["captcha"], "value", [], "any", false, false, false, 1167);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["captcha"], "text", [], "any", false, false, false, 1167);
                echo "</option>
                      
                      ";
            } else {
                // line 1170
                echo "                      
                      <option value=\"";
                // line 1171
                echo twig_get_attribute($this->env, $this->source, $context["captcha"], "value", [], "any", false, false, false, 1171);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["captcha"], "text", [], "any", false, false, false, 1171);
                echo "</option>
                      
                      ";
            }
            // line 1174
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['captcha'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1175
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 1180
        echo ($context["entry_captcha_page"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 1182
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["captcha_pages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["captcha_page"]) {
            // line 1183
            echo "                      <div class=\"checkbox\">
                        <label> ";
            // line 1184
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["captcha_page"], "value", [], "any", false, false, false, 1184), ($context["config_captcha_page"] ?? null))) {
                // line 1185
                echo "                          <input type=\"checkbox\" name=\"config_captcha_page[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["captcha_page"], "value", [], "any", false, false, false, 1185);
                echo "\" checked=\"checked\" />
                          ";
                // line 1186
                echo twig_get_attribute($this->env, $this->source, $context["captcha_page"], "text", [], "any", false, false, false, 1186);
                echo "
                          ";
            } else {
                // line 1188
                echo "                          <input type=\"checkbox\" name=\"config_captcha_page[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["captcha_page"], "value", [], "any", false, false, false, 1188);
                echo "\" />
                          ";
                // line 1189
                echo twig_get_attribute($this->env, $this->source, $context["captcha_page"], "text", [], "any", false, false, false, 1189);
                echo "
                          ";
            }
            // line 1190
            echo " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['captcha_page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1192
        echo " </div>
                  </div>
                </div>
              </fieldset>
            </div>
            <div class=\"tab-pane\" id=\"tab-image\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-logo\">";
        // line 1199
        echo ($context["entry_logo"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-logo\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 1200
        echo ($context["logo"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"config_logo\" value=\"";
        // line 1201
        echo ($context["config_logo"] ?? null);
        echo "\" id=\"input-logo\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-icon\"><span data-toggle=\"tooltip\" title=\"";
        // line 1205
        echo ($context["help_icon"] ?? null);
        echo "\">";
        echo ($context["entry_icon"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-icon\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 1206
        echo ($context["icon"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"config_icon\" value=\"";
        // line 1207
        echo ($context["config_icon"] ?? null);
        echo "\" id=\"input-icon\" />
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-mail\">
              <fieldset>
                <legend>";
        // line 1213
        echo ($context["text_general"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-engine\"><span data-toggle=\"tooltip\" title=\"";
        // line 1215
        echo ($context["help_mail_engine"] ?? null);
        echo "\">";
        echo ($context["entry_mail_engine"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_mail_engine\" id=\"input-mail-engine\" class=\"form-control\">
                      
                      ";
        // line 1219
        if ((($context["config_mail_engine"] ?? null) == "mail")) {
            // line 1220
            echo "                      
                      <option value=\"mail\" selected=\"selected\">";
            // line 1221
            echo ($context["text_mail"] ?? null);
            echo "</option>
                      
                      ";
        } else {
            // line 1224
            echo "                      
                      <option value=\"mail\">";
            // line 1225
            echo ($context["text_mail"] ?? null);
            echo "</option>
                      
                      ";
        }
        // line 1228
        echo "                      ";
        if ((($context["config_mail_engine"] ?? null) == "smtp")) {
            // line 1229
            echo "                      
                      <option value=\"smtp\" selected=\"selected\">";
            // line 1230
            echo ($context["text_smtp"] ?? null);
            echo "</option>
                      
                      ";
        } else {
            // line 1233
            echo "                      
                      <option value=\"smtp\">";
            // line 1234
            echo ($context["text_smtp"] ?? null);
            echo "</option>
                      
                      ";
        }
        // line 1237
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-parameter\"><span data-toggle=\"tooltip\" title=\"";
        // line 1242
        echo ($context["help_mail_parameter"] ?? null);
        echo "\">";
        echo ($context["entry_mail_parameter"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_parameter\" value=\"";
        // line 1244
        echo ($context["config_mail_parameter"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_parameter"] ?? null);
        echo "\" id=\"input-mail-parameter\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-hostname\"><span data-toggle=\"tooltip\" title=\"";
        // line 1248
        echo ($context["help_mail_smtp_hostname"] ?? null);
        echo "\">";
        echo ($context["entry_mail_smtp_hostname"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_hostname\" value=\"";
        // line 1250
        echo ($context["config_mail_smtp_hostname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_hostname"] ?? null);
        echo "\" id=\"input-mail-smtp-hostname\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-username\">";
        // line 1254
        echo ($context["entry_mail_smtp_username"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_username\" value=\"";
        // line 1256
        echo ($context["config_mail_smtp_username"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_username"] ?? null);
        echo "\" id=\"input-mail-smtp-username\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-password\"><span data-toggle=\"tooltip\" title=\"";
        // line 1260
        echo ($context["help_mail_smtp_password"] ?? null);
        echo "\">";
        echo ($context["entry_mail_smtp_password"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_password\" value=\"";
        // line 1262
        echo ($context["config_mail_smtp_password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_password"] ?? null);
        echo "\" id=\"input-mail-smtp-password\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-port\">";
        // line 1266
        echo ($context["entry_mail_smtp_port"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_port\" value=\"";
        // line 1268
        echo ($context["config_mail_smtp_port"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_port"] ?? null);
        echo "\" id=\"input-mail-smtp-port\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-timeout\">";
        // line 1272
        echo ($context["entry_mail_smtp_timeout"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_timeout\" value=\"";
        // line 1274
        echo ($context["config_mail_smtp_timeout"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_timeout"] ?? null);
        echo "\" id=\"input-mail-smtp-timeout\" class=\"form-control\" />
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1279
        echo ($context["text_mail_alert"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1281
        echo ($context["help_mail_alert"] ?? null);
        echo "\">";
        echo ($context["entry_mail_alert"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 1283
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mail_alerts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["mail_alert"]) {
            // line 1284
            echo "                      <div class=\"checkbox\">
                        <label> ";
            // line 1285
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["mail_alert"], "value", [], "any", false, false, false, 1285), ($context["config_mail_alert"] ?? null))) {
                // line 1286
                echo "                          <input type=\"checkbox\" name=\"config_mail_alert[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "value", [], "any", false, false, false, 1286);
                echo "\" checked=\"checked\" />
                          ";
                // line 1287
                echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "text", [], "any", false, false, false, 1287);
                echo "
                          ";
            } else {
                // line 1289
                echo "                          <input type=\"checkbox\" name=\"config_mail_alert[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "value", [], "any", false, false, false, 1289);
                echo "\" />
                          ";
                // line 1290
                echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "text", [], "any", false, false, false, 1290);
                echo "
                          ";
            }
            // line 1291
            echo " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mail_alert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1293
        echo " </div>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-alert-email\"><span data-toggle=\"tooltip\" title=\"";
        // line 1297
        echo ($context["help_mail_alert_email"] ?? null);
        echo "\">";
        echo ($context["entry_mail_alert_email"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_mail_alert_email\" rows=\"5\" placeholder=\"";
        // line 1299
        echo ($context["entry_mail_alert_email"] ?? null);
        echo "\" id=\"input-alert-email\" class=\"form-control\">";
        echo ($context["config_mail_alert_email"] ?? null);
        echo "</textarea>
                  </div>
                </div>
              </fieldset>
            </div>
            <div class=\"tab-pane\" id=\"tab-server\">
              <fieldset>
                <legend>";
        // line 1306
        echo ($context["text_general"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1308
        echo ($context["help_maintenance"] ?? null);
        echo "\">";
        echo ($context["entry_maintenance"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1310
        if (($context["config_maintenance"] ?? null)) {
            // line 1311
            echo "                      <input type=\"radio\" name=\"config_maintenance\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1312
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1314
            echo "                      <input type=\"radio\" name=\"config_maintenance\" value=\"1\" />
                      ";
            // line 1315
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1316
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1317
        if ( !($context["config_maintenance"] ?? null)) {
            // line 1318
            echo "                      <input type=\"radio\" name=\"config_maintenance\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1319
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1321
            echo "                      <input type=\"radio\" name=\"config_maintenance\" value=\"0\" />
                      ";
            // line 1322
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1323
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1327
        echo ($context["help_seo_url"] ?? null);
        echo "\">";
        echo ($context["entry_seo_url"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1329
        if (($context["config_seo_url"] ?? null)) {
            // line 1330
            echo "                      <input type=\"radio\" name=\"config_seo_url\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1331
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1333
            echo "                      <input type=\"radio\" name=\"config_seo_url\" value=\"1\" />
                      ";
            // line 1334
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1335
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1336
        if ( !($context["config_seo_url"] ?? null)) {
            // line 1337
            echo "                      <input type=\"radio\" name=\"config_seo_url\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1338
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1340
            echo "                      <input type=\"radio\" name=\"config_seo_url\" value=\"0\" />
                      ";
            // line 1341
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1342
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-robots\"><span data-toggle=\"tooltip\" title=\"";
        // line 1346
        echo ($context["help_robots"] ?? null);
        echo "\">";
        echo ($context["entry_robots"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_robots\" rows=\"5\" placeholder=\"";
        // line 1348
        echo ($context["entry_robots"] ?? null);
        echo "\" id=\"input-robots\" class=\"form-control\">";
        echo ($context["config_robots"] ?? null);
        echo "</textarea>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-compression\"><span data-toggle=\"tooltip\" title=\"";
        // line 1352
        echo ($context["help_compression"] ?? null);
        echo "\">";
        echo ($context["entry_compression"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_compression\" value=\"";
        // line 1354
        echo ($context["config_compression"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_compression"] ?? null);
        echo "\" id=\"input-compression\" class=\"form-control\" />
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1359
        echo ($context["text_security"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1361
        echo ($context["help_secure"] ?? null);
        echo "\">";
        echo ($context["entry_secure"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1363
        if (($context["config_secure"] ?? null)) {
            // line 1364
            echo "                      <input type=\"radio\" name=\"config_secure\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1365
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1367
            echo "                      <input type=\"radio\" name=\"config_secure\" value=\"1\" />
                      ";
            // line 1368
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1369
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1370
        if ( !($context["config_secure"] ?? null)) {
            // line 1371
            echo "                      <input type=\"radio\" name=\"config_secure\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1372
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1374
            echo "                      <input type=\"radio\" name=\"config_secure\" value=\"0\" />
                      ";
            // line 1375
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1376
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1380
        echo ($context["help_password"] ?? null);
        echo "\">";
        echo ($context["entry_password"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1382
        if (($context["config_password"] ?? null)) {
            // line 1383
            echo "                      <input type=\"radio\" name=\"config_password\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1384
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1386
            echo "                      <input type=\"radio\" name=\"config_password\" value=\"1\" />
                      ";
            // line 1387
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1388
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1389
        if ( !($context["config_password"] ?? null)) {
            // line 1390
            echo "                      <input type=\"radio\" name=\"config_password\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1391
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1393
            echo "                      <input type=\"radio\" name=\"config_password\" value=\"0\" />
                      ";
            // line 1394
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1395
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1399
        echo ($context["help_shared"] ?? null);
        echo "\">";
        echo ($context["entry_shared"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1401
        if (($context["config_shared"] ?? null)) {
            // line 1402
            echo "                      <input type=\"radio\" name=\"config_shared\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1403
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1405
            echo "                      <input type=\"radio\" name=\"config_shared\" value=\"1\" />
                      ";
            // line 1406
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1407
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1408
        if ( !($context["config_shared"] ?? null)) {
            // line 1409
            echo "                      <input type=\"radio\" name=\"config_shared\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1410
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1412
            echo "                      <input type=\"radio\" name=\"config_shared\" value=\"0\" />
                      ";
            // line 1413
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1414
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-encryption\"><span data-toggle=\"tooltip\" title=\"";
        // line 1418
        echo ($context["help_encryption"] ?? null);
        echo "\">";
        echo ($context["entry_encryption"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_encryption\" rows=\"5\" placeholder=\"";
        // line 1420
        echo ($context["entry_encryption"] ?? null);
        echo "\" id=\"input-encryption\" class=\"form-control\">";
        echo ($context["config_encryption"] ?? null);
        echo "</textarea>
                    ";
        // line 1421
        if (($context["error_encryption"] ?? null)) {
            // line 1422
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_encryption"] ?? null);
            echo "</div>
                    ";
        }
        // line 1423
        echo " </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1427
        echo ($context["text_upload"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-max-size\"><span data-toggle=\"tooltip\" title=\"";
        // line 1429
        echo ($context["help_file_max_size"] ?? null);
        echo "\">";
        echo ($context["entry_file_max_size"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_file_max_size\" value=\"";
        // line 1431
        echo ($context["config_file_max_size"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_file_max_size"] ?? null);
        echo "\" id=\"input-file-max-size\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-ext-allowed\"><span data-toggle=\"tooltip\" title=\"";
        // line 1435
        echo ($context["help_file_ext_allowed"] ?? null);
        echo "\">";
        echo ($context["entry_file_ext_allowed"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_ext_allowed\" rows=\"5\" placeholder=\"";
        // line 1437
        echo ($context["entry_file_ext_allowed"] ?? null);
        echo "\" id=\"input-file-ext-allowed\" class=\"form-control\">";
        echo ($context["config_file_ext_allowed"] ?? null);
        echo "</textarea>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-mime-allowed\"><span data-toggle=\"tooltip\" title=\"";
        // line 1441
        echo ($context["help_file_mime_allowed"] ?? null);
        echo "\">";
        echo ($context["entry_file_mime_allowed"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_mime_allowed\" rows=\"5\" placeholder=\"";
        // line 1443
        echo ($context["entry_file_mime_allowed"] ?? null);
        echo "\" id=\"input-file-mime-allowed\" class=\"form-control\">";
        echo ($context["config_file_mime_allowed"] ?? null);
        echo "</textarea>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1448
        echo ($context["text_error"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 1450
        echo ($context["entry_error_display"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1452
        if (($context["config_error_display"] ?? null)) {
            // line 1453
            echo "                      <input type=\"radio\" name=\"config_error_display\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1454
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1456
            echo "                      <input type=\"radio\" name=\"config_error_display\" value=\"1\" />
                      ";
            // line 1457
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1458
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1459
        if ( !($context["config_error_display"] ?? null)) {
            // line 1460
            echo "                      <input type=\"radio\" name=\"config_error_display\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1461
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1463
            echo "                      <input type=\"radio\" name=\"config_error_display\" value=\"0\" />
                      ";
            // line 1464
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1465
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 1469
        echo ($context["entry_error_log"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1471
        if (($context["config_error_log"] ?? null)) {
            // line 1472
            echo "                      <input type=\"radio\" name=\"config_error_log\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1473
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1475
            echo "                      <input type=\"radio\" name=\"config_error_log\" value=\"1\" />
                      ";
            // line 1476
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1477
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1478
        if ( !($context["config_error_log"] ?? null)) {
            // line 1479
            echo "                      <input type=\"radio\" name=\"config_error_log\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1480
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1482
            echo "                      <input type=\"radio\" name=\"config_error_log\" value=\"0\" />
                      ";
            // line 1483
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1484
        echo "</label>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-error-filename\">";
        // line 1488
        echo ($context["entry_error_filename"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_error_filename\" value=\"";
        // line 1490
        echo ($context["config_error_filename"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_error_filename"] ?? null);
        echo "\" id=\"input-error-filename\" class=\"form-control\" />
                    ";
        // line 1491
        if (($context["error_log"] ?? null)) {
            // line 1492
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_log"] ?? null);
            echo "</div>
                    ";
        }
        // line 1493
        echo " </div>
                </div>
              </fieldset>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$('select[name=\\'config_theme\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=setting/setting/theme&user_token=";
        // line 1505
        echo ($context["user_token"] ?? null);
        echo "&theme=' + this.value,
\t\tdataType: 'html',
\t\tbeforeSend: function() {
\t\t\t\$('select[name=\\'config_theme\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('select[name=\\'config_theme\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(html) {
\t\t\t\$('#theme').attr('src', html);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('select[name=\\'config_theme\\']').trigger('change');
//--></script> 
  <script type=\"text/javascript\"><!--
\$('select[name=\\'config_country_id\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=localisation/country/country&user_token=";
        // line 1527
        echo ($context["user_token"] ?? null);
        echo "&country_id=' + this.value,
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('select[name=\\'config_country_id\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('select[name=\\'config_country_id\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(json) {
\t\t\thtml = '<option value=\"\">";
        // line 1536
        echo ($context["text_select"] ?? null);
        echo "</option>';

\t\t\tif (json['zone'] && json['zone'] != '') {
\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
          \t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

\t\t\t\t\tif (json['zone'][i]['zone_id'] == '";
        // line 1542
        echo ($context["config_zone_id"] ?? null);
        echo "') {
            \t\t\thtml += ' selected=\"selected\"';
\t\t\t\t\t}

\t\t\t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t}
\t\t\t} else {
\t\t\t\thtml += '<option value=\"0\" selected=\"selected\">";
        // line 1549
        echo ($context["text_none"] ?? null);
        echo "</option>';
\t\t\t}

\t\t\t\$('select[name=\\'config_zone_id\\']').html(html);
\t\t\t
\t\t\t\$('#button-save').prop('disabled', false);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('select[name=\\'config_country_id\\']').trigger('change');
//--></script></div>
";
        // line 1564
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "setting/setting.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  4013 => 1564,  3995 => 1549,  3985 => 1542,  3976 => 1536,  3964 => 1527,  3939 => 1505,  3925 => 1493,  3919 => 1492,  3917 => 1491,  3911 => 1490,  3906 => 1488,  3900 => 1484,  3895 => 1483,  3892 => 1482,  3887 => 1480,  3884 => 1479,  3882 => 1478,  3879 => 1477,  3874 => 1476,  3871 => 1475,  3866 => 1473,  3863 => 1472,  3861 => 1471,  3856 => 1469,  3850 => 1465,  3845 => 1464,  3842 => 1463,  3837 => 1461,  3834 => 1460,  3832 => 1459,  3829 => 1458,  3824 => 1457,  3821 => 1456,  3816 => 1454,  3813 => 1453,  3811 => 1452,  3806 => 1450,  3801 => 1448,  3791 => 1443,  3784 => 1441,  3775 => 1437,  3768 => 1435,  3759 => 1431,  3752 => 1429,  3747 => 1427,  3741 => 1423,  3735 => 1422,  3733 => 1421,  3727 => 1420,  3720 => 1418,  3714 => 1414,  3709 => 1413,  3706 => 1412,  3701 => 1410,  3698 => 1409,  3696 => 1408,  3693 => 1407,  3688 => 1406,  3685 => 1405,  3680 => 1403,  3677 => 1402,  3675 => 1401,  3668 => 1399,  3662 => 1395,  3657 => 1394,  3654 => 1393,  3649 => 1391,  3646 => 1390,  3644 => 1389,  3641 => 1388,  3636 => 1387,  3633 => 1386,  3628 => 1384,  3625 => 1383,  3623 => 1382,  3616 => 1380,  3610 => 1376,  3605 => 1375,  3602 => 1374,  3597 => 1372,  3594 => 1371,  3592 => 1370,  3589 => 1369,  3584 => 1368,  3581 => 1367,  3576 => 1365,  3573 => 1364,  3571 => 1363,  3564 => 1361,  3559 => 1359,  3549 => 1354,  3542 => 1352,  3533 => 1348,  3526 => 1346,  3520 => 1342,  3515 => 1341,  3512 => 1340,  3507 => 1338,  3504 => 1337,  3502 => 1336,  3499 => 1335,  3494 => 1334,  3491 => 1333,  3486 => 1331,  3483 => 1330,  3481 => 1329,  3474 => 1327,  3468 => 1323,  3463 => 1322,  3460 => 1321,  3455 => 1319,  3452 => 1318,  3450 => 1317,  3447 => 1316,  3442 => 1315,  3439 => 1314,  3434 => 1312,  3431 => 1311,  3429 => 1310,  3422 => 1308,  3417 => 1306,  3405 => 1299,  3398 => 1297,  3392 => 1293,  3384 => 1291,  3379 => 1290,  3374 => 1289,  3369 => 1287,  3364 => 1286,  3362 => 1285,  3359 => 1284,  3355 => 1283,  3348 => 1281,  3343 => 1279,  3333 => 1274,  3328 => 1272,  3319 => 1268,  3314 => 1266,  3305 => 1262,  3298 => 1260,  3289 => 1256,  3284 => 1254,  3275 => 1250,  3268 => 1248,  3259 => 1244,  3252 => 1242,  3245 => 1237,  3239 => 1234,  3236 => 1233,  3230 => 1230,  3227 => 1229,  3224 => 1228,  3218 => 1225,  3215 => 1224,  3209 => 1221,  3206 => 1220,  3204 => 1219,  3195 => 1215,  3190 => 1213,  3181 => 1207,  3175 => 1206,  3169 => 1205,  3162 => 1201,  3156 => 1200,  3152 => 1199,  3143 => 1192,  3135 => 1190,  3130 => 1189,  3125 => 1188,  3120 => 1186,  3115 => 1185,  3113 => 1184,  3110 => 1183,  3106 => 1182,  3101 => 1180,  3094 => 1175,  3088 => 1174,  3080 => 1171,  3077 => 1170,  3069 => 1167,  3066 => 1166,  3063 => 1165,  3059 => 1164,  3054 => 1162,  3046 => 1159,  3041 => 1157,  3033 => 1151,  3027 => 1150,  3019 => 1147,  3016 => 1146,  3008 => 1143,  3005 => 1142,  3002 => 1141,  2998 => 1140,  2989 => 1136,  2982 => 1131,  2976 => 1130,  2968 => 1127,  2965 => 1126,  2957 => 1123,  2954 => 1122,  2951 => 1121,  2947 => 1120,  2942 => 1118,  2934 => 1115,  2929 => 1113,  2921 => 1107,  2915 => 1106,  2907 => 1103,  2904 => 1102,  2896 => 1099,  2893 => 1098,  2890 => 1097,  2886 => 1096,  2881 => 1094,  2873 => 1091,  2864 => 1087,  2857 => 1085,  2851 => 1081,  2846 => 1080,  2843 => 1079,  2838 => 1077,  2835 => 1076,  2833 => 1075,  2830 => 1074,  2825 => 1073,  2822 => 1072,  2817 => 1070,  2814 => 1069,  2812 => 1068,  2805 => 1066,  2799 => 1062,  2794 => 1061,  2791 => 1060,  2786 => 1058,  2783 => 1057,  2781 => 1056,  2778 => 1055,  2773 => 1054,  2770 => 1053,  2765 => 1051,  2762 => 1050,  2760 => 1049,  2753 => 1047,  2746 => 1042,  2740 => 1041,  2732 => 1038,  2729 => 1037,  2721 => 1034,  2718 => 1033,  2715 => 1032,  2711 => 1031,  2704 => 1027,  2699 => 1025,  2692 => 1020,  2687 => 1019,  2684 => 1018,  2679 => 1016,  2676 => 1015,  2674 => 1014,  2671 => 1013,  2666 => 1012,  2663 => 1011,  2658 => 1009,  2655 => 1008,  2653 => 1007,  2646 => 1005,  2640 => 1001,  2635 => 1000,  2632 => 999,  2627 => 997,  2624 => 996,  2622 => 995,  2619 => 994,  2614 => 993,  2611 => 992,  2606 => 990,  2603 => 989,  2601 => 988,  2594 => 986,  2588 => 982,  2583 => 981,  2580 => 980,  2575 => 978,  2572 => 977,  2570 => 976,  2567 => 975,  2562 => 974,  2559 => 973,  2554 => 971,  2551 => 970,  2549 => 969,  2542 => 967,  2537 => 965,  2529 => 959,  2523 => 958,  2515 => 955,  2512 => 954,  2504 => 951,  2501 => 950,  2498 => 949,  2494 => 948,  2489 => 946,  2481 => 943,  2474 => 938,  2468 => 937,  2460 => 934,  2457 => 933,  2449 => 930,  2446 => 929,  2443 => 928,  2439 => 927,  2430 => 923,  2425 => 920,  2419 => 919,  2417 => 918,  2414 => 917,  2406 => 915,  2401 => 914,  2396 => 913,  2391 => 911,  2386 => 910,  2384 => 909,  2381 => 908,  2377 => 907,  2370 => 905,  2365 => 902,  2359 => 901,  2357 => 900,  2354 => 899,  2346 => 897,  2341 => 896,  2336 => 895,  2331 => 893,  2326 => 892,  2324 => 891,  2321 => 890,  2317 => 889,  2310 => 887,  2303 => 882,  2297 => 881,  2289 => 878,  2286 => 877,  2278 => 874,  2275 => 873,  2272 => 872,  2268 => 871,  2259 => 867,  2252 => 862,  2246 => 861,  2238 => 858,  2235 => 857,  2227 => 854,  2224 => 853,  2221 => 852,  2217 => 851,  2212 => 849,  2204 => 846,  2198 => 842,  2193 => 841,  2190 => 840,  2185 => 838,  2182 => 837,  2180 => 836,  2177 => 835,  2172 => 834,  2169 => 833,  2164 => 831,  2161 => 830,  2159 => 829,  2152 => 827,  2146 => 823,  2141 => 822,  2138 => 821,  2133 => 819,  2130 => 818,  2128 => 817,  2125 => 816,  2120 => 815,  2117 => 814,  2112 => 812,  2109 => 811,  2107 => 810,  2100 => 808,  2091 => 804,  2084 => 802,  2079 => 800,  2071 => 794,  2065 => 793,  2057 => 790,  2054 => 789,  2046 => 786,  2043 => 785,  2040 => 784,  2036 => 783,  2031 => 781,  2023 => 778,  2018 => 775,  2012 => 774,  2010 => 773,  2004 => 772,  1997 => 770,  1991 => 766,  1986 => 765,  1983 => 764,  1978 => 762,  1975 => 761,  1973 => 760,  1970 => 759,  1965 => 758,  1962 => 757,  1957 => 755,  1954 => 754,  1952 => 753,  1945 => 751,  1940 => 748,  1934 => 747,  1931 => 746,  1923 => 743,  1918 => 742,  1913 => 741,  1908 => 739,  1903 => 738,  1901 => 737,  1898 => 736,  1894 => 735,  1888 => 734,  1881 => 729,  1875 => 728,  1867 => 725,  1864 => 724,  1856 => 721,  1853 => 720,  1850 => 719,  1846 => 718,  1837 => 714,  1831 => 710,  1826 => 709,  1823 => 708,  1818 => 706,  1815 => 705,  1813 => 704,  1810 => 703,  1805 => 702,  1802 => 701,  1797 => 699,  1794 => 698,  1792 => 697,  1787 => 695,  1781 => 691,  1776 => 690,  1773 => 689,  1768 => 687,  1765 => 686,  1763 => 685,  1760 => 684,  1755 => 683,  1752 => 682,  1747 => 680,  1744 => 679,  1742 => 678,  1735 => 676,  1729 => 672,  1724 => 671,  1721 => 670,  1716 => 668,  1713 => 667,  1711 => 666,  1708 => 665,  1703 => 664,  1700 => 663,  1695 => 661,  1692 => 660,  1690 => 659,  1683 => 657,  1678 => 655,  1670 => 649,  1664 => 646,  1661 => 645,  1655 => 642,  1652 => 641,  1649 => 640,  1643 => 637,  1640 => 636,  1634 => 633,  1631 => 632,  1629 => 631,  1624 => 629,  1616 => 626,  1609 => 621,  1603 => 618,  1600 => 617,  1594 => 614,  1591 => 613,  1588 => 612,  1582 => 609,  1579 => 608,  1573 => 605,  1570 => 604,  1568 => 603,  1563 => 601,  1555 => 598,  1549 => 594,  1544 => 593,  1541 => 592,  1536 => 590,  1533 => 589,  1531 => 588,  1528 => 587,  1523 => 586,  1520 => 585,  1515 => 583,  1512 => 582,  1510 => 581,  1505 => 579,  1500 => 577,  1494 => 573,  1488 => 572,  1486 => 571,  1480 => 570,  1473 => 568,  1468 => 565,  1462 => 564,  1460 => 563,  1454 => 562,  1447 => 560,  1442 => 558,  1435 => 553,  1430 => 552,  1427 => 551,  1422 => 549,  1419 => 548,  1417 => 547,  1414 => 546,  1409 => 545,  1406 => 544,  1401 => 542,  1398 => 541,  1396 => 540,  1389 => 538,  1383 => 534,  1378 => 533,  1375 => 532,  1370 => 530,  1367 => 529,  1365 => 528,  1362 => 527,  1357 => 526,  1354 => 525,  1349 => 523,  1346 => 522,  1344 => 521,  1337 => 519,  1332 => 517,  1326 => 513,  1320 => 512,  1318 => 511,  1312 => 510,  1305 => 508,  1299 => 504,  1294 => 503,  1291 => 502,  1286 => 500,  1283 => 499,  1281 => 498,  1278 => 497,  1273 => 496,  1270 => 495,  1265 => 493,  1262 => 492,  1260 => 491,  1253 => 489,  1248 => 487,  1239 => 480,  1233 => 479,  1225 => 476,  1222 => 475,  1214 => 472,  1211 => 471,  1208 => 470,  1204 => 469,  1197 => 465,  1190 => 460,  1184 => 459,  1176 => 456,  1173 => 455,  1165 => 452,  1162 => 451,  1159 => 450,  1155 => 449,  1148 => 445,  1142 => 441,  1137 => 440,  1134 => 439,  1129 => 437,  1126 => 436,  1124 => 435,  1121 => 434,  1116 => 433,  1113 => 432,  1108 => 430,  1105 => 429,  1103 => 428,  1096 => 426,  1089 => 421,  1084 => 419,  1081 => 418,  1076 => 416,  1073 => 415,  1071 => 414,  1067 => 412,  1062 => 410,  1059 => 409,  1054 => 407,  1051 => 406,  1049 => 405,  1040 => 398,  1035 => 396,  1032 => 395,  1027 => 393,  1024 => 392,  1022 => 391,  1018 => 389,  1013 => 387,  1010 => 386,  1005 => 384,  1002 => 383,  1000 => 382,  991 => 375,  986 => 373,  983 => 372,  978 => 370,  975 => 369,  973 => 368,  969 => 366,  964 => 365,  961 => 364,  956 => 362,  953 => 361,  951 => 360,  942 => 353,  937 => 351,  934 => 350,  929 => 348,  926 => 347,  924 => 346,  920 => 344,  915 => 342,  912 => 341,  907 => 339,  904 => 338,  902 => 337,  893 => 330,  888 => 328,  885 => 327,  880 => 325,  877 => 324,  875 => 323,  871 => 321,  866 => 319,  863 => 318,  858 => 316,  855 => 315,  853 => 314,  844 => 307,  838 => 306,  830 => 304,  822 => 302,  819 => 301,  815 => 300,  811 => 299,  800 => 290,  794 => 289,  786 => 286,  783 => 285,  775 => 282,  772 => 281,  769 => 280,  765 => 279,  756 => 275,  749 => 270,  743 => 269,  735 => 266,  732 => 265,  724 => 262,  721 => 261,  718 => 260,  714 => 259,  707 => 255,  700 => 250,  694 => 249,  686 => 246,  683 => 245,  675 => 242,  672 => 241,  669 => 240,  665 => 239,  658 => 235,  652 => 231,  646 => 230,  638 => 228,  630 => 226,  627 => 225,  623 => 224,  617 => 221,  607 => 214,  600 => 209,  594 => 208,  586 => 205,  583 => 204,  575 => 201,  572 => 200,  569 => 199,  565 => 198,  558 => 194,  553 => 191,  548 => 189,  540 => 187,  535 => 186,  530 => 185,  525 => 183,  520 => 182,  518 => 181,  515 => 180,  511 => 179,  505 => 178,  502 => 177,  500 => 176,  492 => 173,  485 => 171,  476 => 167,  469 => 165,  462 => 161,  456 => 160,  452 => 159,  443 => 155,  438 => 153,  433 => 150,  427 => 149,  425 => 148,  419 => 147,  414 => 145,  409 => 142,  403 => 141,  401 => 140,  395 => 139,  390 => 137,  381 => 133,  374 => 131,  369 => 128,  363 => 127,  361 => 126,  355 => 125,  350 => 123,  345 => 120,  339 => 119,  337 => 118,  331 => 117,  326 => 115,  321 => 112,  315 => 111,  313 => 110,  307 => 109,  302 => 107,  293 => 100,  287 => 99,  279 => 96,  276 => 95,  268 => 92,  265 => 91,  262 => 90,  258 => 89,  251 => 85,  243 => 79,  237 => 78,  229 => 75,  226 => 74,  218 => 71,  215 => 70,  212 => 69,  208 => 68,  201 => 64,  192 => 60,  187 => 58,  178 => 54,  173 => 52,  168 => 49,  162 => 48,  160 => 47,  154 => 46,  149 => 44,  141 => 39,  137 => 38,  133 => 37,  129 => 36,  125 => 35,  121 => 34,  117 => 33,  112 => 31,  106 => 28,  102 => 26,  94 => 22,  91 => 21,  83 => 17,  81 => 16,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "setting/setting.twig", "");
    }
}
