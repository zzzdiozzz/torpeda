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

/* extension/module/retailcrm.twig */
class __TwigTemplate_a3f3e1edbf9f04c58ff1c3abee997451c20fa4af2c49a7daa449335331d85d9a extends \Twig\Template
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
        echo " ";
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
    <div class=\"page-header\">
        <div class=\"container-fluid\">
            <div class=\"pull-right\">
                ";
        // line 6
        if (($context["export_file"] ?? null)) {
            // line 7
            echo "                    <button type=\"button\" id=\"export\" data-toggle=\"tooltip\" title=\"";
            echo ($context["text_button_export"] ?? null);
            echo "\" class=\"btn btn-success\"><i class=\"fa fa-download\"></i></button>
                ";
        }
        // line 9
        echo "                <button type=\"button\" id=\"icml\" data-toggle=\"tooltip\" title=\"";
        echo ($context["text_button_catalog"] ?? null);
        echo "\" class=\"btn btn-success\"><i class=\"fa fa-file-text-o\"></i></button>
                <button type=\"submit\" form=\"form-module\" data-toggle=\"tooltip\" title=\"";
        // line 10
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
                <a href=\"";
        // line 11
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
            <h1>";
        // line 12
        echo ($context["heading_title"] ?? null);
        echo "</h1>
            <ul class=\"breadcrumb\">
                ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 15
            echo "                    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 15);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 15);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "            </ul>
        </div>
    </div>
    <div class=\"container-fluid\">
        ";
        // line 21
        if (($context["error_warning"] ?? null)) {
            // line 22
            echo "            <div class=\"alert alert-danger\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                <i class=\"fa fa-exclamation-circle\"></i> ";
            // line 24
            echo ($context["error_warning"] ?? null);
            echo "
            </div>
        ";
        }
        // line 27
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_url", [], "any", true, true, false, 27)) {
            // line 28
            echo "            <div class=\"alert alert-info\"><i class=\"fa fa-exclamation-circle\"></i>
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                ";
            // line 30
            echo ($context["text_notice"] ?? null);
            echo "
                <a href=\"";
            // line 31
            echo twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_url", [], "any", false, false, false, 31);
            echo "/admin/settings#t-main\">";
            echo twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_url", [], "any", false, false, false, 31);
            echo "/admin/settings#t-main</a>
            </div>
        ";
        }
        // line 34
        echo "        <div class=\"panel panel-default\">
            <div class=\"panel-body\">
                <form action=\"";
        // line 36
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal\">
                    <ul class=\"nav nav-tabs\">
                        <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 38
        echo ($context["general_tab_text"] ?? null);
        echo "</a></li>
                        ";
        // line 39
        if ((((twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_apikey", [], "any", true, true, false, 39) && twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_apikey", [], "any", false, false, false, 39)) && twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_url", [], "any", true, true, false, 39)) && twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_url", [], "any", false, false, false, 39))) {
            // line 40
            echo "                            <li><a href=\"#tab-references\" data-toggle=\"tab\">";
            echo ($context["references_tab_text"] ?? null);
            echo "</a></li>
                            <li><a href=\"#tab-collector\" data-toggle=\"tab\">";
            // line 41
            echo ($context["collector_tab_text"] ?? null);
            echo "</a></li>
                            <li><a href=\"#tab-consultant\" data-toggle=\"tab\">";
            // line 42
            echo ($context["consultant_tab_text"] ?? null);
            echo "</a></li>
                            <li><a href=\"#tab-custom_fields\" data-toggle=\"tab\"> ";
            // line 43
            echo ($context["custom_fields_tab_text"] ?? null);
            echo " </a></li>
                            <li><a href=\"#tab-logs\" data-toggle=\"tab\">";
            // line 44
            echo ($context["logs_tab_text"] ?? null);
            echo "</a></li>
                        ";
        }
        // line 46
        echo "                    </ul>
                    <div class=\"tab-content\">
                        <div class=\"tab-pane active\" id=\"tab-general\">
                            <input type=\"hidden\" name=\"module_retailcrm_status\" value=\"1\">
                            <fieldset>
                                <legend>";
        // line 51
        echo ($context["retailcrm_base_settings"] ?? null);
        echo "</legend>
                                <div class=\"form-group retailcrm_unit\">
                                    <label class=\"col-sm-2 control-label\" for=\"retailcrm_url\">";
        // line 53
        echo ($context["retailcrm_url"] ?? null);
        echo "</label>
                                    <div class=\"col-lg-4 col-md-6 col-sm-10\">
                                        <input class=\"form-control\" id=\"retailcrm_url\" type=\"text\" name=\"module_retailcrm_url\" value=\"";
        // line 55
        if (twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_url", [], "any", true, true, false, 55)) {
            echo twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_url", [], "any", false, false, false, 55);
        }
        echo "\">
                                    </div>
                                </div>
                                <div class=\"form-group retailcrm_unit\">
                                    <label class=\"col-sm-2 control-label\" for=\"retailcrm_apikey\">";
        // line 59
        echo ($context["retailcrm_apikey"] ?? null);
        echo "</label>
                                    <div class=\"col-lg-4 col-md-6 col-sm-10\">
                                        <input class=\"form-control\" id=\"retailcrm_apikey\" type=\"text\" name=\"module_retailcrm_apikey\" value=\"";
        // line 61
        if (twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_apikey", [], "any", true, true, false, 61)) {
            echo twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_apikey", [], "any", false, false, false, 61);
        }
        echo "\">
                                    </div>
                                </div>
                                <div class=\"form-group retailcrm_unit\">
                                    <label class=\"col-sm-2 control-label\" for=\"module_retailcrm_corporate_enabled\">";
        // line 65
        echo ($context["corporate_enabled_label"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-10\">
                                        <label class=\"radio-inline\">
                                            <input type=\"radio\" name=\"module_retailcrm_corporate_enabled\" value=\"1\"
                                                    ";
        // line 69
        if ((twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_corporate_enabled", [], "any", true, true, false, 69) && (twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_corporate_enabled", [], "any", false, false, false, 69) == 1))) {
            // line 70
            echo "                                                        checked
                                                    ";
        }
        // line 71
        echo " />
                                            ";
        // line 72
        echo ($context["text_yes"] ?? null);
        echo "
                                        </label>
                                        <label class=\"radio-inline\">
                                            <input type=\"radio\" name=\"module_retailcrm_corporate_enabled\" value=\"0\"
                                                    ";
        // line 76
        if (( !twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_corporate_enabled", [], "any", true, true, false, 76) || (twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_corporate_enabled", [], "any", false, false, false, 76) == 0))) {
            // line 77
            echo "                                                        checked
                                                    ";
        }
        // line 78
        echo " />
                                            ";
        // line 79
        echo ($context["text_no"] ?? null);
        echo "
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>";
        // line 85
        echo ($context["retailcrm_countries_settings"] ?? null);
        echo "</legend>
                                <div class=\"form-group retailcrm_unit\">
                                    <label class=\"col-sm-2 control-label\"></label>
                                    <div class=\"col-lg-4 col-md-6 col-sm-10\">
                                        <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                                            ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 91
            echo "                                                <div class=\"checkbox\">
                                                    <label>
                                                        <input type=\"checkbox\" name=\"module_retailcrm_country[]\" value=\"";
            // line 93
            echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 93);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_country", [], "any", true, true, false, 93) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 93), twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_country", [], "any", false, false, false, 93)))) {
                echo " ";
                echo "checked";
                echo " ";
            }
            echo "\">
                                                        ";
            // line 94
            echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 94);
            echo "
                                                    </label>
                                                </div>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>";
        // line 103
        echo ($context["text_currency"] ?? null);
        echo "</legend>
                                <div class=\"form-group retailcrm_unit\">
                                    <label class=\"col-sm-2 control-label\">";
        // line 105
        echo ($context["text_currency_label"] ?? null);
        echo "</label>
                                    <div class=\"col-md-4 col-sm-10\">
                                        <select id=\"module_retailcrm_currency\" name=\"module_retailcrm_currency\" class=\"form-control\">
                                            ";
        // line 108
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 109
            echo "                                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["currency"], "status", [], "any", false, false, false, 109) == 1)) {
                // line 110
                echo "                                                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 110);
                echo "\" ";
                if ((twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_currency", [], "any", true, true, false, 110) && (twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_currency", [], "any", false, false, false, 110) == twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 110)))) {
                    echo " selected=\"selected\" ";
                }
                echo ">
                                                        ";
                // line 111
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 111);
                echo "
                                                    </option>
                                                ";
            }
            // line 114
            echo "                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "                                        </select>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>";
        // line 120
        echo ($context["text_lenght"] ?? null);
        echo "</legend>
                                <div class=\"form-group retailcrm_unit\">
                                    <label class=\"col-sm-2 control-label\">";
        // line 122
        echo ($context["text_lenght_label"] ?? null);
        echo "</label>
                                    <div class=\"col-md-4 col-sm-10\">
                                        <select id=\"module_retailcrm_lenght\" name=\"module_retailcrm_lenght\" class=\"form-control\">
                                            ";
        // line 125
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["lenghts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["lenght"]) {
            // line 126
            echo "                                                    <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["lenght"], "length_class_id", [], "any", false, false, false, 126);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_lenght", [], "any", true, true, false, 126) && (twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_lenght", [], "any", false, false, false, 126) == twig_get_attribute($this->env, $this->source, $context["lenght"], "length_class_id", [], "any", false, false, false, 126)))) {
                echo " selected=\"selected\" ";
            }
            echo ">
                                                        ";
            // line 127
            echo twig_get_attribute($this->env, $this->source, $context["lenght"], "title", [], "any", false, false, false, 127);
            echo "
                                                    </option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lenght'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "                                        </select>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>";
        // line 135
        echo ($context["status_changes"] ?? null);
        echo "</legend>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"module_retailcrm_status_changes\">";
        // line 137
        echo ($context["text_status_changes"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-10\">
                                        <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"module_retailcrm_status_changes\" value=\"1\"
                                            ";
        // line 141
        if ((twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_status_changes", [], "any", true, true, false, 141) && (twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_status_changes", [], "any", false, false, false, 141) == 1))) {
            // line 142
            echo "                                                checked
                                            ";
        }
        // line 143
        echo " />
                                        ";
        // line 144
        echo ($context["text_yes"] ?? null);
        echo "
                                    </label>
                                    <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"module_retailcrm_status_changes\" value=\"0\"
                                        ";
        // line 148
        if (( !twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_status_changes", [], "any", true, true, false, 148) || (twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_status_changes", [], "any", false, false, false, 148) == 0))) {
            // line 149
            echo "                                            checked
                                        ";
        }
        // line 150
        echo " />
                                        ";
        // line 151
        echo ($context["text_no"] ?? null);
        echo "
                                    </label>
                                  </div>
                                </div>
                            </fieldset>
                            ";
        // line 156
        if ((((twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_apikey", [], "any", true, true, false, 156) && twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_apikey", [], "any", false, false, false, 156)) && twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_url", [], "any", true, true, false, 156)) && twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_url", [], "any", false, false, false, 156))) {
            // line 157
            echo "                            ";
            if (twig_length_filter($this->env, ($context["retailcrm_errors"] ?? null))) {
                // line 158
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["retailcrm_errors"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["retailcrm_error"]) {
                    // line 159
                    echo "                                <div class=\"warning\">";
                    echo $context["retailcrm_error"];
                    echo "</div>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['retailcrm_error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 161
                echo "                            ";
            } else {
                // line 162
                echo "                            <fieldset>
                                <legend>";
                // line 163
                echo ($context["retailcrm_upload_order"] ?? null);
                echo "</legend>
                                <div class=\"form-group retailcrm_unit\">
                                    <label class=\"col-sm-2 control-label\">";
                // line 165
                echo ($context["text_button_export_order"] ?? null);
                echo " № </label>
                                    <div class=\"col-sm-10\">
                                        <div class=\"row\">
                                            <div class=\"col-lg-3 col-md-6 col-sm-6\">
                                                <input type=\"text\" name=\"order_id\" class=\"form-control\">
                                            </div>
                                            <div class=\"col-lg-3 col-md-4 col-sm-6\">
                                                <button type=\"button\" id=\"export_order\" data-toggle=\"tooltip\" title=\"";
                // line 172
                echo ($context["text_button_export_order"] ?? null);
                echo "\" class=\"btn btn-success\"><i class=\"fa fa-download\"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>";
                // line 179
                echo ($context["special_price_settings"] ?? null);
                echo "</legend>
                                <div class=\"form-group retailcrm_unit\">
                                    ";
                // line 181
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["customerGroups"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["customerGroup"]) {
                    // line 182
                    echo "                                        ";
                    $context["cud"] = twig_get_attribute($this->env, $this->source, $context["customerGroup"], "customer_group_id", [], "any", false, false, false, 182);
                    // line 183
                    echo "                                        <div class=\"row retailcrm_unit\">
                                            <label class=\"col-sm-2 control-label\" for=\"opencart_customer_group_";
                    // line 184
                    echo ($context["cud"] ?? null);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customerGroup"], "name", [], "any", false, false, false, 184);
                    echo "</label>
                                            <div class=\"col-md-4 col-sm-10\">
                                                <select id=\"module_retailcrm_special_";
                    // line 186
                    echo ($context["cud"] ?? null);
                    echo "\" name=\"module_retailcrm_special_";
                    echo ($context["cud"] ?? null);
                    echo "\" class=\"form-control\">
                                                    <option value=\"\" ";
                    // line 187
                    if (( !twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), ("module_retailcrm_special_" . ($context["cud"] ?? null)), [], "array", true, true, false, 187) || twig_test_empty((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["saved_settings"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[("module_retailcrm_special_" . ($context["cud"] ?? null))] ?? null) : null)))) {
                        echo "selected";
                    }
                    echo ">---</option>
                                                    ";
                    // line 188
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["priceTypes"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["priceType"]) {
                        // line 189
                        echo "                                                        ";
                        if (((twig_get_attribute($this->env, $this->source, $context["priceType"], "active", [], "any", false, false, false, 189) == true) && (twig_get_attribute($this->env, $this->source, $context["priceType"], "default", [], "any", false, false, false, 189) == false))) {
                            // line 190
                            echo "                                                            <option value =\"";
                            echo twig_get_attribute($this->env, $this->source, $context["priceType"], "code", [], "any", false, false, false, 190);
                            echo "\" ";
                            if ((twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), ("module_retailcrm_special_" . ($context["cud"] ?? null)), [], "array", true, true, false, 190) && (twig_get_attribute($this->env, $this->source, $context["priceType"], "code", [], "any", false, false, false, 190) == (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["saved_settings"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[("module_retailcrm_special_" . ($context["cud"] ?? null))] ?? null) : null)))) {
                                echo " selected=\"selected\" ";
                            }
                            echo ">
                                                                ";
                            // line 191
                            echo twig_get_attribute($this->env, $this->source, $context["priceType"], "name", [], "any", false, false, false, 191);
                            echo "
                                                            </option>
                                                        ";
                        }
                        // line 194
                        echo "                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['priceType'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 195
                    echo "                                                </select>
                                            </div>
                                        </div>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customerGroup'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 199
                echo "                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>";
                // line 202
                echo ($context["order_number"] ?? null);
                echo "</legend>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" class=\"col-sm-2 control-label\" for=\"module_retailcrm_order_number\">";
                // line 204
                echo ($context["text_order_number"] ?? null);
                echo "</label>
                                    <div class=\"col-sm-10\">
                                        <label class=\"control-label\" class=\"radio-inline\">
                                            <input type=\"radio\" name=\"module_retailcrm_order_number\" value=\"1\"
                                                ";
                // line 208
                if ((twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_order_number", [], "any", true, true, false, 208) && (twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_order_number", [], "any", false, false, false, 208) == 1))) {
                    // line 209
                    echo "                                                    checked
                                                ";
                }
                // line 210
                echo " />
                                            ";
                // line 211
                echo ($context["text_yes"] ?? null);
                echo "
                                        </label>
                                        <label class=\"control-label\" class=\"radio-inline\">
                                            <input type=\"radio\" name=\"module_retailcrm_order_number\" value=\"0\"
                                                ";
                // line 215
                if (( !twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_order_number", [], "any", true, true, false, 215) || (twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_order_number", [], "any", false, false, false, 215) == 0))) {
                    // line 216
                    echo "                                                    checked
                                                ";
                }
                // line 217
                echo " />
                                            ";
                // line 218
                echo ($context["text_no"] ?? null);
                echo "
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>";
                // line 224
                echo ($context["text_retailcrm_discount"] ?? null);
                echo "</legend>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"label_discount\">";
                // line 226
                echo ($context["text_retailcrm_label_discount"] ?? null);
                echo "</label>
                                    <div class=\"col-lg-4 col-md-6 col-sm-10\">
                                        <input name=\"module_retailcrm_label_discount\" id=\"label_discount\" class=\"form-control\" value=\"";
                // line 228
                if (twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_label_discount", [], "any", true, true, false, 228)) {
                    echo twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_label_discount", [], "any", false, false, false, 228);
                } else {
                    echo ($context["default_retailcrm_label_discount"] ?? null);
                }
                echo "\">
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>";
                // line 233
                echo ($context["sum_payment"] ?? null);
                echo "</legend>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"module_retailcrm_sum_payment\">";
                // line 235
                echo ($context["text_sum_payment"] ?? null);
                echo "</label>
                                    <div class=\"col-sm-10\">
                                        <label class=\"control-label radio-inline\">
                                            <input type=\"radio\" name=\"module_retailcrm_sum_payment\" value=\"1\"
                                                    ";
                // line 239
                if ((twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_sum_payment", [], "any", true, true, false, 239) && (twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_sum_payment", [], "any", false, false, false, 239) == 1))) {
                    // line 240
                    echo "                                                        checked
                                                    ";
                }
                // line 241
                echo " >
                                            ";
                // line 242
                echo ($context["text_yes"] ?? null);
                echo "
                                        </label>
                                        <label class=\"control-label radio-inline\">
                                            <input type=\"radio\" name=\"module_retailcrm_sum_payment\" value=\"0\"
                                                    ";
                // line 246
                if (( !twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_sum_payment", [], "any", true, true, false, 246) || (twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_sum_payment", [], "any", false, false, false, 246) == 0))) {
                    // line 247
                    echo "                                                        checked
                                                    ";
                }
                // line 248
                echo " >
                                            ";
                // line 249
                echo ($context["text_no"] ?? null);
                echo "
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <div class=\"tab-pane\" id=\"tab-references\">
                            <fieldset>
                                <legend>";
                // line 257
                echo ($context["retailcrm_dict_settings"] ?? null);
                echo "</legend>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\"> ";
                // line 259
                echo ($context["retailcrm_dict_delivery"] ?? null);
                echo "</label>
                                    <div class=\"col-sm-10\">
                                        <div class=\"row\">
                                            ";
                // line 262
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["delivery"] ?? null), "opencart", [], "any", false, false, false, 262))) {
                    // line 263
                    echo "                                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["delivery"] ?? null), "opencart", [], "any", false, false, false, 263));
                    foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                        // line 264
                        echo "                                                    <div class=\"col-sm-12\" style=\"margin-bottom:10px;\">
                                                        <div class=\"pm\">";
                        // line 265
                        echo (twig_get_attribute($this->env, $this->source, $context["value"], "title", [], "any", false, false, false, 265) . ":");
                        echo "</div>
                                                        ";
                        // line 266
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["value"]);
                        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                            // line 267
                            echo "                                                            ";
                            if (($context["key"] != "title")) {
                                // line 268
                                echo "                                                                <div class=\"form-group retailcrm_unit\">
                                                                    <div class=\"col-lg-4 col-md-6 col-sm-6\">
                                                                        <select id=\"retailcrm_delivery_";
                                // line 270
                                echo twig_get_attribute($this->env, $this->source, $context["val"], "code", [], "any", false, false, false, 270);
                                echo "\" name=\"module_retailcrm_delivery[";
                                echo twig_get_attribute($this->env, $this->source, $context["val"], "code", [], "any", false, false, false, 270);
                                echo "]\" class=\"form-control\">
                                                                            ";
                                // line 271
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["delivery"] ?? null), "retailcrm", [], "any", false, false, false, 271));
                                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                                    // line 272
                                    echo "                                                                                <option value=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["v"], "code", [], "any", false, false, false, 272);
                                    echo "\" ";
                                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_delivery", [], "any", false, true, false, 272), $context["key"], [], "array", true, true, false, 272) && (twig_get_attribute($this->env, $this->source, $context["v"], "code", [], "any", false, false, false, 272) == (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_delivery", [], "any", false, false, false, 272)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[$context["key"]] ?? null) : null)))) {
                                        echo " selected=\"selected\" ";
                                    }
                                    echo ">
                                                                                    ";
                                    // line 273
                                    echo twig_get_attribute($this->env, $this->source, $context["v"], "name", [], "any", false, false, false, 273);
                                    echo "
                                                                                </option>
                                                                            ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 276
                                echo "                                                                        </select>
                                                                    </div>
                                                                    <div class=\"col-lg-4 col-md-6 col-sm-6\">
                                                                        <label class=\"control-label\" for=\"retailcrm_pm_";
                                // line 279
                                echo twig_get_attribute($this->env, $this->source, $context["val"], "code", [], "any", false, false, false, 279);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["val"], "title", [], "any", false, false, false, 279);
                                echo "</label>
                                                                    </div>
                                                                </div>
                                                            ";
                            }
                            // line 283
                            echo "                                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 284
                        echo "                                                    </div>
                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 286
                    echo "                                            ";
                } else {
                    // line 287
                    echo "                                                <div class=\"alert alert-info\"><i class=\"fa fa-exclamation-circle\"></i>
                                                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                                                    ";
                    // line 289
                    echo ($context["text_error_delivery"] ?? null);
                    echo "
                                                </div>
                                            ";
                }
                // line 292
                echo "                                        </div>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\">";
                // line 296
                echo ($context["retailcrm_dict_status"] ?? null);
                echo "</label>
                                    <div class=\"col-sm-10\">
                                        ";
                // line 298
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["statuses"] ?? null), "opencart", [], "any", false, false, false, 298));
                foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
                    // line 299
                    echo "                                            ";
                    $context["uid"] = twig_get_attribute($this->env, $this->source, $context["status"], "order_status_id", [], "any", false, false, false, 299);
                    // line 300
                    echo "                                            <div class=\"row retailcrm_unit\">
                                                <div class=\"col-lg-4 col-md-6 col-sm-6\">
                                                    <select id=\"retailcrm_status_";
                    // line 302
                    echo ($context["uid"] ?? null);
                    echo "\" name=\"module_retailcrm_status[";
                    echo twig_get_attribute($this->env, $this->source, $context["status"], "order_status_id", [], "any", false, false, false, 302);
                    echo "]\" class=\"form-control\">
                                                        ";
                    // line 303
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["statuses"] ?? null), "retailcrm", [], "any", false, false, false, 303));
                    foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                        // line 304
                        echo "                                                            <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["v"], "code", [], "any", false, false, false, 304);
                        echo "\" ";
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_status", [], "any", false, true, false, 304), ($context["uid"] ?? null), [], "array", true, true, false, 304) && (twig_get_attribute($this->env, $this->source, $context["v"], "code", [], "any", false, false, false, 304) == (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_status", [], "any", false, false, false, 304)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[($context["uid"] ?? null)] ?? null) : null)))) {
                            echo " selected=\"selected\" ";
                        }
                        echo ">
                                                                ";
                        // line 305
                        echo twig_get_attribute($this->env, $this->source, $context["v"], "name", [], "any", false, false, false, 305);
                        echo "
                                                            </option>
                                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 308
                    echo "                                                    </select>
                                                </div>
                                                <div class=\"col-lg-4 col-md-6 col-sm-6\">
                                                    <label class=\"control-label\" for=\"retailcrm_status_";
                    // line 311
                    echo twig_get_attribute($this->env, $this->source, $context["status"], "order_status_id", [], "any", false, false, false, 311);
                    echo " \">";
                    echo twig_get_attribute($this->env, $this->source, $context["status"], "name", [], "any", false, false, false, 311);
                    echo "</label>
                                                </div>
                                            </div>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 315
                echo "                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\">";
                // line 318
                echo ($context["retailcrm_dict_payment"] ?? null);
                echo "</label>
                                    <div class=\"col-sm-10\">
                                        ";
                // line 320
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["payments"] ?? null), "opencart", [], "any", false, false, false, 320));
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 321
                    echo "                                            <div class=\"row retailcrm_unit\">
                                                <div class=\"col-lg-4 col-md-6 col-sm-6\">
                                                    <select id=\"retailcrm_payment_";
                    // line 323
                    echo $context["key"];
                    echo "\" name=\"module_retailcrm_payment[";
                    echo $context["key"];
                    echo "]\" class=\"form-control\">
                                                        ";
                    // line 324
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["payments"] ?? null), "retailcrm", [], "any", false, false, false, 324));
                    foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                        // line 325
                        echo "                                                            <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["v"], "code", [], "any", false, false, false, 325);
                        echo "\" ";
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_payment", [], "any", false, true, false, 325), $context["key"], [], "array", true, true, false, 325) && (twig_get_attribute($this->env, $this->source, $context["v"], "code", [], "any", false, false, false, 325) == (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_payment", [], "any", false, false, false, 325)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[$context["key"]] ?? null) : null)))) {
                            echo " selected=\"selected\" ";
                        }
                        echo ">
                                                                ";
                        // line 326
                        echo twig_get_attribute($this->env, $this->source, $context["v"], "name", [], "any", false, false, false, 326);
                        echo "
                                                            </option>
                                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 329
                    echo "                                                    </select>
                                                </div>
                                                <div class=\"col-lg-4 col-md-6 col-sm-6\">
                                                    <label class=\"control-label\" for=\"retailcrm_payment_";
                    // line 332
                    echo $context["key"];
                    echo "\">";
                    echo $context["value"];
                    echo "</label>
                                                </div>
                                            </div>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 336
                echo "                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\">";
                // line 339
                echo ($context["retailcrm_dict_default"] ?? null);
                echo "</label>
                                    <div class=\"col-sm-10\">
                                        <div class=\"row\">
                                            <div class=\"retailcrm_unit col-sm-12\">
                                                <div class=\"row\">
                                                    <div class=\"col-lg-4 col-md-6 col-sm-6\">
                                                        <select id=\"module_retailcrm_default_payment\" name=\"module_retailcrm_default_payment\" class=\"form-control\">
                                                            ";
                // line 346
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["payments"] ?? null), "opencart", [], "any", false, false, false, 346));
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    // line 347
                    echo "                                                                <option value=\"";
                    echo $context["k"];
                    echo "\" ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_default_payment", [], "any", true, true, false, 347) && ($context["k"] == twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_default_payment", [], "any", false, false, false, 347)))) {
                        echo " selected=\"selected\" ";
                    }
                    echo ">
                                                                    ";
                    // line 348
                    echo $context["v"];
                    echo "
                                                                </option>
                                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 351
                echo "                                                        </select>
                                                    </div>
                                                    <div class=\"col-lg-4 col-md-6 col-sm-6\">
                                                        <label class=\"col-sm-2 control-label\" for=\"module_retailcrm_default_payment\">";
                // line 354
                echo ($context["text_payment"] ?? null);
                echo "</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"retailcrm_unit col-sm-12\">
                                                <div class=\"row\">
                                                    <div class=\"col-lg-4 col-md-6 col-sm-6\">
                                                        <select id=\"module_retailcrm_default_shipping\" name=\"module_retailcrm_default_shipping\" class=\"form-control\">
                                                            ";
                // line 362
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["delivery"] ?? null), "opencart", [], "any", false, false, false, 362));
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 363
                    echo "                                                                <optgroup label=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["value"], "title", [], "any", false, false, false, 363);
                    echo "\">
                                                                    ";
                    // line 364
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["value"]);
                    foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                        // line 365
                        echo "                                                                        ";
                        if (($context["k"] != "title")) {
                            // line 366
                            echo "                                                                            <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["v"], "code", [], "any", false, false, false, 366);
                            echo "\" ";
                            if ((twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_default_shipping", [], "any", true, true, false, 366) && (twig_get_attribute($this->env, $this->source, $context["v"], "code", [], "any", false, false, false, 366) == twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_default_shipping", [], "any", false, false, false, 366)))) {
                                echo " selected=\"selected\" ";
                            }
                            echo ">
                                                                                ";
                            // line 367
                            echo twig_get_attribute($this->env, $this->source, $context["v"], "title", [], "any", false, false, false, 367);
                            echo "
                                                                            </option>
                                                                        ";
                        }
                        // line 370
                        echo "                                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 371
                    echo "                                                                </optgroup>
                                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 373
                echo "                                                        </select>
                                                    </div>
                                                    <div class=\"col-lg-4 col-md-6 col-sm-6\">
                                                        <label class=\"col-sm-2 control-label\" for=\"module_retailcrm_default_shipping\">";
                // line 376
                echo ($context["text_shipping"] ?? null);
                echo "</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\">";
                // line 384
                echo ($context["retailcrm_missing_status"] ?? null);
                echo "</label>
                                    <div class=\"col-sm-10\">
                                        <div class=\"row\">
                                            <div class=\"col-lg-4 col-md-6 col-sm-6\">
                                                <select id=\"retailcrm_missing_status\" name=\"module_retailcrm_missing_status\" class=\"form-control\">
                                                    <option></option>
                                                    ";
                // line 390
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["statuses"] ?? null), "retailcrm", [], "any", false, false, false, 390));
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    // line 391
                    echo "                                                        <option value=\"";
                    echo $context["k"];
                    echo "\" ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_missing_status", [], "any", true, true, false, 391) && ($context["k"] == twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_missing_status", [], "any", false, false, false, 391)))) {
                        echo " selected=\"selected\" ";
                    }
                    echo ">
                                                            ";
                    // line 392
                    echo twig_get_attribute($this->env, $this->source, $context["v"], "name", [], "any", false, false, false, 392);
                    echo "
                                                        </option>
                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 395
                echo "                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            ";
            }
            // line 402
            echo "                            ";
        }
        // line 403
        echo "                        </div>
                        <div class=\"tab-pane\" id=\"tab-collector\">
                            <fieldset>
                                <legend>";
        // line 406
        echo ($context["daemon_collector"] ?? null);
        echo "</legend>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"retailcrm_collector_active\" class=\"col-md-4\">";
        // line 408
        echo ($context["text_collector_activity"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-10\">
                                        <label class=\"control-label\" class=\"radio-inline\">
                                            <input type=\"radio\" name=\"module_retailcrm_collector_active\" value=\"1\" ";
        // line 411
        if ((twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_collector_active", [], "any", true, true, false, 411) && (twig_get_attribute($this->env, $this->source,         // line 412
($context["saved_settings"] ?? null), "module_retailcrm_collector_active", [], "any", false, false, false, 412) == 1))) {
            echo " ";
            echo "checked";
            echo "
                                            ";
        }
        // line 413
        echo ">
                                            ";
        // line 414
        echo ($context["text_yes"] ?? null);
        echo "
                                        </label>
                                        <label class=\"control-label\" class=\"radio-inline\">
                                            <input type=\"radio\" name=\"module_retailcrm_collector_active\" value=\"0\" ";
        // line 417
        if (( !twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_collector_active", [], "any", false, false, false, 417) || (twig_get_attribute($this->env, $this->source,         // line 418
($context["saved_settings"] ?? null), "module_retailcrm_collector_active", [], "any", false, false, false, 418) == 0))) {
            echo " ";
            echo "checked";
            echo "
                                            ";
        }
        // line 419
        echo ">
                                            ";
        // line 420
        echo ($context["text_no"] ?? null);
        echo "
                                        </label>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"retailcrm_collector\" class=\"col-md-4\">";
        // line 425
        echo ($context["collector_site_key"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-4\">
                                        <input class=\"form-control\" id=\"retailcrm_collector_site_key\" type=\"text\" name=\"module_retailcrm_collector[site_key]\" value=\"";
        // line 427
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_collector", [], "any", false, true, false, 427), "site_key", [], "any", true, true, false, 427)) {
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_collector", [], "any", false, false, false, 427), "site_key", [], "any", false, false, false, 427);
        }
        echo "\">
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"retailcrm_collector\" class=\"col-md-4\">";
        // line 431
        echo ($context["text_collector_form_capture"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-10\">
                                        <label class=\"control-label\" class=\"radio-inline\">
                                            <input type=\"radio\" name=\"module_retailcrm_collector[form_capture]\" value=\"1\" ";
        // line 434
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_collector", [], "any", false, true, false, 434), "form_capture", [], "any", true, true, false, 434) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 435
($context["saved_settings"] ?? null), "module_retailcrm_collector", [], "any", false, false, false, 435), "form_capture", [], "any", false, false, false, 435) == 1))) {
            echo " ";
            echo "checked";
            echo "
                                            ";
        }
        // line 436
        echo ">
                                            ";
        // line 437
        echo ($context["text_yes"] ?? null);
        echo "
                                        </label>
                                        <label class=\"control-label\" class=\"radio-inline\">
                                            <input type=\"radio\" name=\"module_retailcrm_collector[form_capture]\" value=\"0\" ";
        // line 440
        if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_collector", [], "any", false, true, false, 440), "form_capture", [], "any", true, true, false, 440) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 441
($context["saved_settings"] ?? null), "module_retailcrm_collector", [], "any", false, false, false, 441), "form_capture", [], "any", false, false, false, 441) == 0))) {
            echo " ";
            echo "checked";
            echo "
                                            ";
        }
        // line 442
        echo ">
                                            ";
        // line 443
        echo ($context["text_no"] ?? null);
        echo "
                                        </label>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"module_retailcrm_collector\" class=\"col-md-4\">";
        // line 448
        echo ($context["text_collector_period"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-2\">
                                        <input class=\"form-control\" id=\"module_retailcrm_collector_period\" type=\"text\" name=\"module_retailcrm_collector[period]\" value=\"";
        // line 450
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_collector", [], "any", false, true, false, 450), "period", [], "any", true, true, false, 450)) {
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_collector", [], "any", false, false, false, 450), "period", [], "any", false, false, false, 450);
        }
        echo "\">
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"module_retailcrm_collector\" class=\"col-md-4\">";
        // line 454
        echo ($context["text_label_promo"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-4\">
                                        <input class=\"form-control\" id=\"module_retailcrm_collector[]\" type=\"text\" name=\"module_retailcrm_collector[label_promo]\" value=\"";
        // line 456
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_collector", [], "any", false, true, false, 456), "label_promo", [], "any", true, true, false, 456)) {
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_collector", [], "any", false, false, false, 456), "label_promo", [], "any", false, false, false, 456);
        }
        echo "\">
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"module_retailcrm_collector\" class=\"col-md-4\">";
        // line 460
        echo ($context["text_label_send"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-4\">
                                        <input class=\"form-control\" id=\"module_retailcrm_collector_label_send\" type=\"text\" name=\"module_retailcrm_collector[label_send]\" value=\"";
        // line 462
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_collector", [], "any", false, true, false, 462), "label_send", [], "any", true, true, false, 462)) {
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_collector", [], "any", false, false, false, 462), "label_send", [], "any", false, false, false, 462);
        }
        echo "\">
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"module_retailcrm_collector\" class=\"col-md-4\">";
        // line 466
        echo ($context["collector_custom_text"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-10\">
                                        <label class=\"radio-inline\">
                                            <input type=\"radio\" name=\"module_retailcrm_collector[custom_form]\" value=\"1\" ";
        // line 469
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_collector", [], "any", false, true, false, 469), "custom_form", [], "any", true, true, false, 469) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 470
($context["saved_settings"] ?? null), "module_retailcrm_collector", [], "any", false, false, false, 470), "custom_form", [], "any", false, false, false, 470) == 1))) {
            echo " ";
            echo "checked";
            echo "
                                            ";
        }
        // line 471
        echo ">
                                            ";
        // line 472
        echo ($context["text_yes"] ?? null);
        echo "
                                        </label>
                                        <label class=\"radio-inline\">
                                            <input type=\"radio\" name=\"module_retailcrm_collector[custom_form]\" value=\"0\" ";
        // line 475
        if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_collector", [], "any", false, true, false, 475), "custom_form", [], "any", true, true, false, 475) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 476
($context["saved_settings"] ?? null), "module_retailcrm_collector", [], "any", false, false, false, 476), "custom_form", [], "any", false, false, false, 476) == 0))) {
            echo " ";
            echo "checked";
            echo "
                                            ";
        }
        // line 477
        echo ">
                                            ";
        // line 478
        echo ($context["text_no"] ?? null);
        echo "
                                        </label>
                                    </div>
                                </div>
                                ";
        // line 482
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collectorFields"] ?? null));
        foreach ($context['_seq'] as $context["field"] => $context["label"]) {
            // line 483
            echo "                                    <div class=\"form-group\">
                                        <label class=\"col-sm-2 control-label\" for=\"retailcrm_collector\">";
            // line 484
            echo $context["label"];
            echo "</label>
                                        <div class=\"col-sm-10\">
                                            <div class=\"row\">
                                                <div class=\"col-md-4 col-sm-6\">
                                                    <input class=\"form-control\" id=\"module_retailcrm_collector\" type=\"text\" name=\"module_retailcrm_collector[custom][";
            // line 488
            echo $context["field"];
            echo "]\" value=\"";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_collector", [], "any", false, true, false, 488), "custom", [], "any", false, true, false, 488), $context["field"], [], "array", true, true, false, 488)) {
                echo " ";
                echo (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_collector", [], "any", false, false, false, 488), "custom", [], "any", false, false, false, 488)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[$context["field"]] ?? null) : null);
                echo " ";
            }
            echo "\">
                                                </div>
                                                <div class=\"col-md-8 col-sm-6\" style=\"margin-top: 8px;\">
                                                    <input input style=\"margin-top: 0; vertical-align: middle;\" type=\"checkbox\"  name=\"module_retailcrm_collector[require][";
            // line 491
            echo $context["field"];
            echo "_require]\" value=\"1\" ";
            if ((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_collector", [], "any", false, false, false, 491), "require", [], "any", false, false, false, 491)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[($context["field"] . "_require")] ?? null) : null)) {
                echo " checked ";
            }
            echo ">
                                                    <label style=\"margin-bottom: 0; vertical-align: middle; margin-left: 5px;\" for=\"retailcrm_collector\">";
            // line 492
            echo ($context["text_require"] ?? null);
            echo "</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 498
        echo "                            </fieldset>
                        </div>
                        <div class=\"tab-pane\" id=\"tab-consultant\">
                            <legend>";
        // line 501
        echo ($context["consultant_tab_text"] ?? null);
        echo "</legend>
                            <fieldset>
                                ";
        // line 504
        echo "                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"input-code\">";
        // line 505
        echo ($context["entry_code"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-10\">
                                        <textarea name=\"module_retailcrm_online_consultant_code\" rows=\"5\" placeholder=\"";
        // line 507
        echo ($context["entry_code"] ?? null);
        echo "\" id=\"retailcrm_entry_code\" class=\"form-control\">
                                        ";
        // line 508
        if (twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_online_consultant_code", [], "any", true, true, false, 508)) {
            // line 509
            echo "                                            ";
            echo twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_online_consultant_code", [], "any", false, false, false, 509);
        }
        // line 510
        echo "                                        </textarea>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"retailcrm_online_consultant_active\" class=\"col-md-4\">";
        // line 514
        echo ($context["entry_status"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-10\">
                                        <label class=\"control-label\" class=\"radio-inline\">
                                            <input type=\"radio\" name=\"module_retailcrm_online_consultant_active\" value=\"1\" ";
        // line 517
        if ((twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_online_consultant_active", [], "any", true, true, false, 517) && (twig_get_attribute($this->env, $this->source,         // line 518
($context["saved_settings"] ?? null), "module_retailcrm_online_consultant_active", [], "any", false, false, false, 518) == 1))) {
            echo " ";
            echo "checked";
            echo "
                                            ";
        }
        // line 519
        echo ">
                                            ";
        // line 520
        echo ($context["text_yes"] ?? null);
        echo "
                                        </label>
                                        <label class=\"control-label\" class=\"radio-inline\">
                                            <input type=\"radio\" name=\"module_retailcrm_online_consultant_active\" value=\"0\" ";
        // line 523
        if (( !twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_online_consultant_active", [], "any", false, false, false, 523) || (twig_get_attribute($this->env, $this->source,         // line 524
($context["saved_settings"] ?? null), "module_retailcrm_online_consultant_active", [], "any", false, false, false, 524) == 0))) {
            echo " ";
            echo "checked";
            echo "
                                            ";
        }
        // line 525
        echo ">
                                            ";
        // line 526
        echo ($context["text_no"] ?? null);
        echo "
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <div class=\"tab-pane\" id=\"tab-custom_fields\">
                            <fieldset>
                                <legend>";
        // line 534
        echo ($context["retailcrm_dict_custom_fields"] ?? null);
        echo "</legend>
                                ";
        // line 535
        if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["customFields"] ?? null), "retailcrm", [], "any", false, false, false, 535)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["customFields"] ?? null), "opencart", [], "any", false, false, false, 535)))) {
            // line 536
            echo "                                    <div class=\"form-group\">
                                        <label class=\"col-sm-2 control-label\" for=\"retailcrm_custom_field_active\">";
            // line 537
            echo ($context["text_custom_field_activity"] ?? null);
            echo "</label>
                                        <div class=\"col-sm-10\">
                                            <label class=\"radio-inline\">
                                                <input type=\"radio\" name=\"module_retailcrm_custom_field_active\" value=\"1\" ";
            // line 540
            if ((twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_custom_field_active", [], "any", true, true, false, 540) && (twig_get_attribute($this->env, $this->source,             // line 541
($context["saved_settings"] ?? null), "module_retailcrm_custom_field_active", [], "any", false, false, false, 541) == 1))) {
                // line 542
                echo "                                                    checked ";
            }
            echo " >
                                                ";
            // line 543
            echo ($context["text_yes"] ?? null);
            echo "
                                            </label>
                                            <label class=\"radio-inline\">
                                                <input type=\"radio\" name=\"module_retailcrm_custom_field_active\" value=\"0\" ";
            // line 546
            if (( !twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_custom_field_active", [], "any", true, true, false, 546) || (twig_get_attribute($this->env, $this->source,             // line 547
($context["saved_settings"] ?? null), "module_retailcrm_custom_field_active", [], "any", false, false, false, 547) == 0))) {
                // line 548
                echo "                                                    checked ";
            }
            echo " >
                                                ";
            // line 549
            echo ($context["text_no"] ?? null);
            echo "
                                            </label>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"col-sm-2 control-label\">";
            // line 554
            echo ($context["text_customers_custom_fields"] ?? null);
            echo "</label>
                                        <div class=\"col-sm-10\">
                                            <div class=\"row\">
                                                ";
            // line 557
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["customFields"] ?? null), "opencart", [], "any", false, false, false, 557));
            foreach ($context['_seq'] as $context["_key"] => $context["customField"]) {
                // line 558
                echo "                                                    <div class=\"col-sm-12\" style=\"margin-bottom:5px;\">
                                                        <div class=\"row\">
                                                            ";
                // line 560
                $context["fid"] = ("c_" . twig_get_attribute($this->env, $this->source, $context["customField"], "custom_field_id", [], "any", false, false, false, 560));
                // line 561
                echo "                                                            <div class=\"col-sm-4\">
                                                                <select class=\"form-control\" id=\"module_retailcrm_custom_field_";
                // line 562
                echo ($context["fid"] ?? null);
                echo "\" name=\"module_retailcrm_custom_field[";
                echo ($context["fid"] ?? null);
                echo "]\" >
                                                                    ";
                // line 563
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customFields"] ?? null), "retailcrm", [], "any", false, false, false, 563), "customers", [], "any", false, false, false, 563));
                foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
                    // line 564
                    echo "                                                                        <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["v"], "code", [], "any", false, false, false, 564);
                    echo "\" ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_custom_field", [], "any", false, true, false, 564), ($context["fid"] ?? null), [], "array", true, true, false, 564) && (twig_get_attribute($this->env, $this->source, $context["v"], "code", [], "any", false, false, false, 564) == (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_custom_field", [], "any", false, false, false, 564)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[($context["fid"] ?? null)] ?? null) : null)))) {
                        echo " selected=\"selected\" ";
                    }
                    echo ">
                                                                            ";
                    // line 565
                    echo twig_get_attribute($this->env, $this->source, $context["v"], "name", [], "any", false, false, false, 565);
                    echo "
                                                                        </option>
                                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 568
                echo "                                                                </select>
                                                            </div>
                                                            <label style=\"padding-top: 9px;\" for=\"module_retailcrm_custom_field_";
                // line 570
                echo ($context["fid"] ?? null);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["customField"], "name", [], "any", false, false, false, 570);
                echo "</label>
                                                        </div>
                                                    </div>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customField'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 574
            echo "                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"col-sm-2 control-label\">";
            // line 578
            echo ($context["text_orders_custom_fields"] ?? null);
            echo "</label>
                                        <div class=\"col-sm-10\">
                                            <div class=\"row\">
                                                ";
            // line 581
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["customFields"] ?? null), "opencart", [], "any", false, false, false, 581));
            foreach ($context['_seq'] as $context["_key"] => $context["customField"]) {
                // line 582
                echo "                                                    <div class=\"col-sm-12\" style=\"margin-bottom:5px;\">
                                                        <div class=\"row\">
                                                            ";
                // line 584
                $context["fid"] = ("o_" . twig_get_attribute($this->env, $this->source, $context["customField"], "custom_field_id", [], "any", false, false, false, 584));
                // line 585
                echo "                                                            <div class=\"col-sm-4\">
                                                                <select class=\"form-control\" id=\"module_retailcrm_custom_field_";
                // line 586
                echo ($context["fid"] ?? null);
                echo "\" name=\"module_retailcrm_custom_field[";
                echo ($context["fid"] ?? null);
                echo "]\" >
                                                                    ";
                // line 587
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customFields"] ?? null), "retailcrm", [], "any", false, false, false, 587), "orders", [], "any", false, false, false, 587));
                foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
                    // line 588
                    echo "                                                                        <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["v"], "code", [], "any", false, false, false, 588);
                    echo "\" ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_custom_field", [], "any", false, true, false, 588), ($context["fid"] ?? null), [], "array", true, true, false, 588) && (twig_get_attribute($this->env, $this->source, $context["v"], "code", [], "any", false, false, false, 588) == (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_custom_field", [], "any", false, false, false, 588)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[($context["fid"] ?? null)] ?? null) : null)))) {
                        echo " selected=\"selected\" ";
                    }
                    echo ">
                                                                            ";
                    // line 589
                    echo twig_get_attribute($this->env, $this->source, $context["v"], "name", [], "any", false, false, false, 589);
                    echo "
                                                                        </option>
                                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 592
                echo "                                                                </select>
                                                            </div>
                                                            <label style=\"padding-top: 9px;\" for=\"module_retailcrm_custom_field_";
                // line 594
                echo ($context["fid"] ?? null);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["customField"], "name", [], "any", false, false, false, 594);
                echo "</label>
                                                        </div>
                                                    </div>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customField'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 598
            echo "                                            </div>
                                        </div>
                                    </div>
                                ";
        } elseif ((twig_test_empty(twig_get_attribute($this->env, $this->source,         // line 601
($context["customFields"] ?? null), "retailcrm", [], "any", false, false, false, 601)) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["customFields"] ?? null), "opencart", [], "any", false, false, false, 601)))) {
            // line 602
            echo "                                    <div class=\"alert alert-info\"><i class=\"fa fa-exclamation-circle\"></i>
                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                                        ";
            // line 604
            echo ($context["text_error_custom_field"] ?? null);
            echo "
                                    </div>
                                ";
        } elseif (twig_test_empty(twig_get_attribute($this->env, $this->source,         // line 606
($context["customFields"] ?? null), "retailcrm", [], "any", false, false, false, 606))) {
            // line 607
            echo "                                    <div class=\"alert alert-info\"><i class=\"fa fa-exclamation-circle\"></i>
                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                                        ";
            // line 609
            echo ($context["text_error_cf_retailcrm"] ?? null);
            echo "
                                    </div>
                                ";
        } elseif (twig_test_empty(twig_get_attribute($this->env, $this->source,         // line 611
($context["customFields"] ?? null), "opencart", [], "any", false, false, false, 611))) {
            // line 612
            echo "                                    <div class=\"alert alert-info\"><i class=\"fa fa-exclamation-circle\"></i>
                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                                        ";
            // line 614
            echo ($context["text_error_cf_opencart"] ?? null);
            echo "
                                    </div>
                                ";
        }
        // line 617
        echo "                            </fieldset>
                        </div>
                        <div class=\"tab-pane\" id=\"tab-logs\">
                            <fieldset style=\"margin-bottom: 30px;\">
                                <legend>Retailcrm API error log</legend>
                                <div class=\"retailcrm_unit\">
                                    <a onclick=\"confirm('";
        // line 623
        echo ($context["text_confirm_log"] ?? null);
        echo "') ? location.href='";
        echo ($context["clear_retailcrm"] ?? null);
        echo "' : false;\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_clear"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-eraser\"></i></a>
                                </div>
                                ";
        // line 625
        if (twig_get_attribute($this->env, $this->source, ($context["logs"] ?? null), "retailcrm_log", [], "any", true, true, false, 625)) {
            // line 626
            echo "                                    <div class=\"row\">
                                        <div class=\"col-sm-12\">
                                            <textarea wrap=\"off\" rows=\"15\" readonly class=\"form-control\">";
            // line 628
            echo twig_get_attribute($this->env, $this->source, ($context["logs"] ?? null), "retailcrm_log", [], "any", false, false, false, 628);
            echo "</textarea>
                                        </div>
                                    </div>
                                ";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 631
($context["logs"] ?? null), "retailcrm_error", [], "any", true, true, false, 631)) {
            // line 632
            echo "                                    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source, ($context["logs"] ?? null), "retailcrm_error", [], "any", false, false, false, 632);
            echo "
                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                                    </div>
                                ";
        }
        // line 636
        echo "                            </fieldset>
                            <fieldset>
                                <legend>Opencart API error log</legend>
                                <div class=\"retailcrm_unit\">
                                    <a onclick=\"confirm('";
        // line 640
        echo ($context["text_confirm_log"] ?? null);
        echo "') ? location.href='";
        echo ($context["clear_opencart"] ?? null);
        echo "' : false;\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_clear"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-eraser\"></i></a>
                                </div>
                                ";
        // line 642
        if (twig_get_attribute($this->env, $this->source, ($context["logs"] ?? null), "oc_api_log", [], "any", true, true, false, 642)) {
            // line 643
            echo "                                    <div class=\"row\">
                                        <div class=\"col-sm-12\">
                                            <textarea wrap=\"off\" rows=\"15\" readonly class=\"form-control\">";
            // line 645
            echo twig_get_attribute($this->env, $this->source, ($context["logs"] ?? null), "oc_api_log", [], "any", false, false, false, 645);
            echo "</textarea>
                                        </div>
                                    </div>
                                ";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 648
($context["logs"] ?? null), "oc_error", [], "any", true, true, false, 648)) {
            // line 649
            echo "                                    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source, ($context["logs"] ?? null), "oc_error", [], "any", false, false, false, 649);
            echo "
                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                                    </div>
                                ";
        }
        // line 653
        echo "                            </fieldset>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
";
        // line 661
        echo ($context["footer"] ?? null);
        echo "

<script type=\"text/javascript\">
    var token = '";
        // line 664
        echo ($context["user_token"] ?? null);
        echo "';
    \$('#icml').on('click', function() {
        \$.ajax({
            url: '";
        // line 667
        echo ($context["catalog"] ?? null);
        echo "' + 'admin/index.php?route=extension/module/retailcrm/icml&user_token=' + token,
            beforeSend: function() {
                \$('#icml').button('loading');
            },
            complete: function() {
                \$('.alert-success').remove();
                \$('#content > .container-fluid').prepend('<div class=\"alert alert-success\"><i class=\"fa fa-exclamation-circle\"></i> ";
        // line 673
        echo ($context["text_success_catalog"] ?? null);
        echo "</div>');
                \$('#icml').button('reset');
            },
            error: function(){
                alert('error');
            }
        });
    });

    \$('#export').on('click', function() {
        \$.ajax({
            url: '";
        // line 684
        echo ($context["catalog"] ?? null);
        echo "' + 'admin/index.php?route=extension/module/retailcrm/export&user_token=' + token,
            beforeSend: function() {
                \$('#export').button('loading');
            },
            complete: function() {
                \$('.alert-success').remove();
                \$('#content > .container-fluid').prepend('<div class=\"alert alert-success\"><i class=\"fa fa-exclamation-circle\"></i> ";
        // line 690
        echo ($context["text_success_export"] ?? null);
        echo "</div>');
                \$('#export').button('reset');
            },
            error: function(){
                alert('error');
            }
        });
    });

    \$('#export_order').on('click', function() {
        var order_id = \$('input[name=\\'order_id\\']').val();
        if (order_id && order_id > 0) {
            \$.ajax({
                url: '";
        // line 703
        echo ($context["catalog"] ?? null);
        echo "' + 'admin/index.php?route=extension/module/retailcrm/exportOrder&user_token=' + token + '&order_id=' + order_id,
                beforeSend: function() {
                    \$('#export_order').button('loading');
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                },
                success: function(data, textStatus, jqXHR) {
                    response = JSON.parse(jqXHR['responseText']);

                    if (response['status_code'] == '400') {
                        \$('.alert-danger').remove();
                        \$('#content > .container-fluid').prepend('<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i>";
        // line 715
        echo ($context["text_error_order"] ?? null);
        echo "' + response['error_msg'] + '</div>');
                        \$('#export_order').button('reset');
                    } else {
                        \$('.alert-success').remove();
                        \$('#content > .container-fluid').prepend('<div class=\"alert alert-success\"><i class=\"fa fa-exclamation-circle\"></i>";
        // line 719
        echo ($context["text_success_export_order"] ?? null);
        echo "</div>');
                        \$('#export_order').button('reset');
                        \$('input[name=\\'order_id\\']').val('');
                    }
                }
            });
        } else {
            \$('.alert-danger').remove();
            \$('#content > .container-fluid').prepend('<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
        // line 727
        echo ($context["text_error_order_id"] ?? null);
        echo "</div>');
            \$('#export_order').button('reset');
        }
    });
</script>

";
    }

    public function getTemplateName()
    {
        return "extension/module/retailcrm.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1762 => 727,  1751 => 719,  1744 => 715,  1729 => 703,  1713 => 690,  1704 => 684,  1690 => 673,  1681 => 667,  1675 => 664,  1669 => 661,  1659 => 653,  1651 => 649,  1649 => 648,  1643 => 645,  1639 => 643,  1637 => 642,  1628 => 640,  1622 => 636,  1614 => 632,  1612 => 631,  1606 => 628,  1602 => 626,  1600 => 625,  1591 => 623,  1583 => 617,  1577 => 614,  1573 => 612,  1571 => 611,  1566 => 609,  1562 => 607,  1560 => 606,  1555 => 604,  1551 => 602,  1549 => 601,  1544 => 598,  1532 => 594,  1528 => 592,  1519 => 589,  1510 => 588,  1506 => 587,  1500 => 586,  1497 => 585,  1495 => 584,  1491 => 582,  1487 => 581,  1481 => 578,  1475 => 574,  1463 => 570,  1459 => 568,  1450 => 565,  1441 => 564,  1437 => 563,  1431 => 562,  1428 => 561,  1426 => 560,  1422 => 558,  1418 => 557,  1412 => 554,  1404 => 549,  1399 => 548,  1397 => 547,  1396 => 546,  1390 => 543,  1385 => 542,  1383 => 541,  1382 => 540,  1376 => 537,  1373 => 536,  1371 => 535,  1367 => 534,  1356 => 526,  1353 => 525,  1346 => 524,  1345 => 523,  1339 => 520,  1336 => 519,  1329 => 518,  1328 => 517,  1322 => 514,  1316 => 510,  1312 => 509,  1310 => 508,  1306 => 507,  1301 => 505,  1298 => 504,  1293 => 501,  1288 => 498,  1276 => 492,  1268 => 491,  1256 => 488,  1249 => 484,  1246 => 483,  1242 => 482,  1235 => 478,  1232 => 477,  1225 => 476,  1224 => 475,  1218 => 472,  1215 => 471,  1208 => 470,  1207 => 469,  1201 => 466,  1192 => 462,  1187 => 460,  1178 => 456,  1173 => 454,  1164 => 450,  1159 => 448,  1151 => 443,  1148 => 442,  1141 => 441,  1140 => 440,  1134 => 437,  1131 => 436,  1124 => 435,  1123 => 434,  1117 => 431,  1108 => 427,  1103 => 425,  1095 => 420,  1092 => 419,  1085 => 418,  1084 => 417,  1078 => 414,  1075 => 413,  1068 => 412,  1067 => 411,  1061 => 408,  1056 => 406,  1051 => 403,  1048 => 402,  1039 => 395,  1030 => 392,  1021 => 391,  1017 => 390,  1008 => 384,  997 => 376,  992 => 373,  985 => 371,  979 => 370,  973 => 367,  964 => 366,  961 => 365,  957 => 364,  952 => 363,  948 => 362,  937 => 354,  932 => 351,  923 => 348,  914 => 347,  910 => 346,  900 => 339,  895 => 336,  883 => 332,  878 => 329,  869 => 326,  860 => 325,  856 => 324,  850 => 323,  846 => 321,  842 => 320,  837 => 318,  832 => 315,  820 => 311,  815 => 308,  806 => 305,  797 => 304,  793 => 303,  787 => 302,  783 => 300,  780 => 299,  776 => 298,  771 => 296,  765 => 292,  759 => 289,  755 => 287,  752 => 286,  745 => 284,  739 => 283,  730 => 279,  725 => 276,  716 => 273,  707 => 272,  703 => 271,  697 => 270,  693 => 268,  690 => 267,  686 => 266,  682 => 265,  679 => 264,  674 => 263,  672 => 262,  666 => 259,  661 => 257,  650 => 249,  647 => 248,  643 => 247,  641 => 246,  634 => 242,  631 => 241,  627 => 240,  625 => 239,  618 => 235,  613 => 233,  601 => 228,  596 => 226,  591 => 224,  582 => 218,  579 => 217,  575 => 216,  573 => 215,  566 => 211,  563 => 210,  559 => 209,  557 => 208,  550 => 204,  545 => 202,  540 => 199,  531 => 195,  525 => 194,  519 => 191,  510 => 190,  507 => 189,  503 => 188,  497 => 187,  491 => 186,  484 => 184,  481 => 183,  478 => 182,  474 => 181,  469 => 179,  459 => 172,  449 => 165,  444 => 163,  441 => 162,  438 => 161,  429 => 159,  424 => 158,  421 => 157,  419 => 156,  411 => 151,  408 => 150,  404 => 149,  402 => 148,  395 => 144,  392 => 143,  388 => 142,  386 => 141,  379 => 137,  374 => 135,  367 => 130,  358 => 127,  349 => 126,  345 => 125,  339 => 122,  334 => 120,  327 => 115,  321 => 114,  315 => 111,  306 => 110,  303 => 109,  299 => 108,  293 => 105,  288 => 103,  281 => 98,  271 => 94,  261 => 93,  257 => 91,  253 => 90,  245 => 85,  236 => 79,  233 => 78,  229 => 77,  227 => 76,  220 => 72,  217 => 71,  213 => 70,  211 => 69,  204 => 65,  195 => 61,  190 => 59,  181 => 55,  176 => 53,  171 => 51,  164 => 46,  159 => 44,  155 => 43,  151 => 42,  147 => 41,  142 => 40,  140 => 39,  136 => 38,  131 => 36,  127 => 34,  119 => 31,  115 => 30,  111 => 28,  108 => 27,  102 => 24,  98 => 22,  96 => 21,  90 => 17,  79 => 15,  75 => 14,  70 => 12,  64 => 11,  60 => 10,  55 => 9,  49 => 7,  47 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/retailcrm.twig", "");
    }
}
