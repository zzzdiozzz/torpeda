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

/* extension/shipping/neoseo_novaposhta.twig */
class __TwigTemplate_856359995d98c764fa7f026a4460041ae6f51f7fed62f6c3951b2726c33c69f0 extends \Twig\Template
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
                ";
        // line 7
        if ((($context["license_error"] ?? null) == null)) {
            // line 8
            echo "                    <button type=\"submit\" name=\"action\" value=\"save\" form=\"form\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_save"] ?? null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i> ";
            echo ($context["button_save"] ?? null);
            echo "</button>
                    <button type=\"submit\" name=\"action\" value=\"save_and_close\" form=\"form\" data-toggle=\"tooltip\" title=\"";
            // line 9
            echo ($context["button_save_and_close"] ?? null);
            echo "\" class=\"btn btn-default\"><i class=\"fa fa-save\"></i> ";
            echo ($context["button_save_and_close"] ?? null);
            echo "</button>
                ";
        } else {
            // line 11
            echo "                    <a href=\"";
            echo ($context["recheck"] ?? null);
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_recheck"] ?? null);
            echo "\"class=\"btn btn-primary\" /><i class=\"fa fa-check\"></i> ";
            echo ($context["button_recheck"] ?? null);
            echo "</a>
                ";
        }
        // line 13
        echo "                <a href=\"";
        echo ($context["close"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_close"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-close\"></i> ";
        echo ($context["button_close"] ?? null);
        echo "</a>
            </div>
            <img width=\"36\" height=\"36\" style=\"float:left\" src=\"view/image/neoseo.png\" alt=\"\"/>
            <h1>";
        // line 16
        echo ($context["heading_title_raw"] ?? null);
        echo " ";
        echo ($context["text_module_version"] ?? null);
        echo "</h1>
            <ul class=\"breadcrumb\">
                ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 19
            echo "                    <li><a href=\"";
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
        echo "            </ul>
        </div>
    </div>
    <div class=\"container-fluid\">
        ";
        // line 25
        if (($context["error_warning"] ?? null)) {
            // line 26
            echo "            <div class=\"alert alert-danger\">
                <i class=\"fa fa-exclamation-circle\"></i> ";
            // line 27
            echo ($context["error_warning"] ?? null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
        ";
        }
        // line 31
        echo "        ";
        if (((isset($context["success"]) || array_key_exists("success", $context)) && ($context["success"] ?? null))) {
            // line 32
            echo "            <div class=\"alert alert-success\">
                <i class=\"fa fa-check-circle\"></i>
                ";
            // line 34
            echo ($context["success"] ?? null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
        ";
        }
        // line 38
        echo "        <div class=\"panel panel-default\">
            <div class=\"panel-body\">
                <ul class=\"nav nav-tabs\">
                    <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 41
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
                    <li><a href=\"#tab-depth\" data-toggle=\"tab\">";
        // line 42
        echo ($context["tab_depth"] ?? null);
        echo "</a></li>
                    <li><a href=\"#tab-courier\" data-toggle=\"tab\">";
        // line 43
        echo ($context["entry_courier_delivery_status"] ?? null);
        echo "</a></li>
                    <li><a href=\"#tab-warehouse\" data-toggle=\"tab\">";
        // line 44
        echo ($context["entry_warehouse_delivery_status"] ?? null);
        echo "</a></li>
                    <li><a href=\"#tab-handbook\" data-toggle=\"tab\">";
        // line 45
        echo ($context["tab_handbook"] ?? null);
        echo "</a></li>
                    <li><a href=\"#tab-package\" data-toggle=\"tab\">";
        // line 46
        echo ($context["tab_package"] ?? null);
        echo "</a></li>
                    <li><a href=\"#tab-tarifs\" data-toggle=\"tab\">";
        // line 47
        echo ($context["tab_tarifs"] ?? null);
        echo "</a></li>
                    ";
        // line 48
        if ((($context["license_error"] ?? null) == null)) {
            // line 49
            echo "                        <li><a href=\"#tab-logs\" data-toggle=\"tab\">";
            echo ($context["tab_logs"] ?? null);
            echo "</a></li>
                    ";
        }
        // line 51
        echo "                    <li><a href=\"#tab-support\" data-toggle=\"tab\">";
        echo ($context["tab_support"] ?? null);
        echo "</a></li>
                    <li><a href=\"#tab-license\" data-toggle=\"tab\">";
        // line 52
        echo ($context["tab_license"] ?? null);
        echo "</a></li>
                </ul>

                <form action=\"";
        // line 55
        echo ($context["save"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form\">
                    <div class=\"tab-content\">
                        <div class=\"tab-pane active\" id=\"tab-general\">
                            ";
        // line 58
        if ((($context["license_error"] ?? null) == null)) {
            // line 59
            echo "                                ";
            echo twig_get_attribute($this->env, $this->source, ($context["widgets"] ?? null), "dropdown", [0 => "status", 1 => [0 => ($context["text_disabled"] ?? null), 1 => ($context["text_enabled"] ?? null)]], "method", false, false, false, 59);
            echo "
                                ";
            // line 60
            echo twig_get_attribute($this->env, $this->source, ($context["widgets"] ?? null), "input", [0 => "api_key"], "method", false, false, false, 60);
            echo "
                                ";
            // line 61
            echo twig_get_attribute($this->env, $this->source, ($context["widgets"] ?? null), "input", [0 => "api_url"], "method", false, false, false, 61);
            echo "
                                ";
            // line 62
            echo twig_get_attribute($this->env, $this->source, ($context["widgets"] ?? null), "checklist", [0 => "order_status", 1 => ($context["order_statuses"] ?? null)], "method", false, false, false, 62);
            echo "
                                ";
            // line 63
            echo twig_get_attribute($this->env, $this->source, ($context["widgets"] ?? null), "dropdown", [0 => "cod_status", 1 => [0 => ($context["text_disabled"] ?? null), 1 => ($context["text_enabled"] ?? null)]], "method", false, false, false, 63);
            echo "
                                ";
            // line 64
            echo twig_get_attribute($this->env, $this->source, ($context["widgets"] ?? null), "dropdown", [0 => "cod_order_status_id", 1 => ($context["order_statuses"] ?? null)], "method", false, false, false, 64);
            echo "
                                ";
            // line 65
            echo twig_get_attribute($this->env, $this->source, ($context["widgets"] ?? null), "dropdown", [0 => "city_list_lang", 1 => [1 => "В зависимости от языка пользователя", 2 => "Русский", 3 => "Украинский"]], "method", false, false, false, 65);
            echo "
                                ";
            // line 66
            echo twig_get_attribute($this->env, $this->source, ($context["widgets"] ?? null), "input", [0 => "sort_order"], "method", false, false, false, 66);
            echo "
                                ";
            // line 67
            echo twig_get_attribute($this->env, $this->source, ($context["widgets"] ?? null), "dropdown", [0 => "before", 1 => [0 => ($context["text_disabled"] ?? null), 1 => ($context["text_enabled"] ?? null)]], "method", false, false, false, 67);
            echo "
                            ";
        } else {
            // line 69
            echo "                                ";
            echo ($context["license_error"] ?? null);
            echo "
                            ";
        }
        // line 71
        echo "                        </div>
                        ";
        // line 72
        if ((($context["license_error"] ?? null) == null)) {
            // line 73
            echo "                            <div class=\"tab-pane\" id=\"tab-depth\">
                                ";
            // line 74
            echo twig_get_attribute($this->env, $this->source, ($context["widgets"] ?? null), "input", [0 => "min_weight"], "method", false, false, false, 74);
            echo "
                                ";
            // line 75
            echo twig_get_attribute($this->env, $this->source, ($context["widgets"] ?? null), "input", [0 => "min_width"], "method", false, false, false, 75);
            echo "
                                ";
            // line 76
            echo twig_get_attribute($this->env, $this->source, ($context["widgets"] ?? null), "input", [0 => "min_height"], "method", false, false, false, 76);
            echo "
                                ";
            // line 77
            echo twig_get_attribute($this->env, $this->source, ($context["widgets"] ?? null), "input", [0 => "min_depth"], "method", false, false, false, 77);
            echo "
                                ";
            // line 78
            echo twig_get_attribute($this->env, $this->source, ($context["widgets"] ?? null), "dropdown", [0 => "weight_class_id", 1 => ($context["weight_classes"] ?? null)], "method", false, false, false, 78);
            echo "
                                ";
            // line 79
            echo twig_get_attribute($this->env, $this->source, ($context["widgets"] ?? null), "dropdown", [0 => "length_class_id", 1 => ($context["length_classes"] ?? null)], "method", false, false, false, 79);
            echo "
                            </div>
                            <div class=\"tab-pane\" id=\"tab-courier\">
                                ";
            // line 82
            echo twig_get_attribute($this->env, $this->source, ($context["widgets"] ?? null), "dropdown", [0 => "courier_delivery_status", 1 => [0 => ($context["text_disabled"] ?? null), 1 => ($context["text_enabled"] ?? null)]], "method", false, false, false, 82);
            echo "
                                ";
            // line 83
            echo twig_get_attribute($this->env, $this->source, ($context["widgets"] ?? null), "dropdown", [0 => "courier_delivery_send_type", 1 => (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["handbook_handbooks"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["service"] ?? null) : null)], "method", false, false, false, 83);
            echo "
                                ";
            // line 84
            echo twig_get_attribute($this->env, $this->source, ($context["widgets"] ?? null), "dropdown", [0 => "courier_delivery_pay_type", 1 => (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["handbook_handbooks"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["payment"] ?? null) : null)], "method", false, false, false, 84);
            echo "
                                ";
            // line 85
            echo twig_get_attribute($this->env, $this->source, ($context["widgets"] ?? null), "localeInput", [0 => "courier_delivery_name", 1 => ($context["full_languages"] ?? null)], "method", false, false, false, 85);
            echo "
                            </div>
                            <div class=\"tab-pane\" id=\"tab-warehouse\">
                                ";
            // line 88
            echo twig_get_attribute($this->env, $this->source, ($context["widgets"] ?? null), "dropdown", [0 => "warehouse_delivery_status", 1 => [0 => ($context["text_disabled"] ?? null), 1 => ($context["text_enabled"] ?? null)]], "method", false, false, false, 88);
            echo "
                                ";
            // line 89
            echo twig_get_attribute($this->env, $this->source, ($context["widgets"] ?? null), "dropdown", [0 => "warehouse_delivery_send_type", 1 => (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["handbook_handbooks"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["service"] ?? null) : null)], "method", false, false, false, 89);
            echo "
                                ";
            // line 90
            echo twig_get_attribute($this->env, $this->source, ($context["widgets"] ?? null), "dropdown", [0 => "warehouse_delivery_pay_type", 1 => (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["handbook_handbooks"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["payment"] ?? null) : null)], "method", false, false, false, 90);
            echo "
                                ";
            // line 91
            echo twig_get_attribute($this->env, $this->source, ($context["widgets"] ?? null), "localeInput", [0 => "warehouse_delivery_name", 1 => ($context["full_languages"] ?? null)], "method", false, false, false, 91);
            echo "
                            </div>
                        <div class=\"tab-pane\" id=\"tab-handbook\">
                            ";
            // line 94
            echo twig_get_attribute($this->env, $this->source, ($context["widgets"] ?? null), "text", [0 => "cron"], "method", false, false, false, 94);
            echo "
                            <table class=\"table table-striped table-bordered table-hover\">
                                <thead>
                                <tr>
                                    <td class=\"text-left\">";
            // line 98
            echo ($context["text_name"] ?? null);
            echo "</td>
                                    <td class=\"text-left\">";
            // line 99
            echo ($context["text_last_up"] ?? null);
            echo "</td>
                                    <td class=\"text-left\">";
            // line 100
            echo ($context["text_count"] ?? null);
            echo "</td>
                                    <td class=\"text-left\">";
            // line 101
            echo ($context["text_description"] ?? null);
            echo "</td>
                                </tr>
                                </thead>
                                ";
            // line 104
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["handbook_data"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["hd"]) {
                // line 105
                echo "                                <tr>
                                    <td class=\"text-left\">";
                // line 106
                echo twig_get_attribute($this->env, $this->source, $context, (("text_" . twig_get_attribute($this->env, $this->source, $context["hd"], "id", [], "any", false, false, false, 106)) . "_name"), [], "any", false, false, false, 106);
                echo "</td>
                                    <td class=\"text-left\">";
                // line 107
                echo twig_get_attribute($this->env, $this->source, $context["hd"], "up_date", [], "any", false, false, false, 107);
                echo "</td>
                                    <td class=\"text-left\">";
                // line 108
                echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["hd"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["count"] ?? null) : null);
                echo "</td>
                                    <td class=\"text-left\">";
                // line 109
                echo twig_get_attribute($this->env, $this->source, $context, (("text_" . twig_get_attribute($this->env, $this->source, $context["hd"], "id", [], "any", false, false, false, 109)) . "_description"), [], "any", false, false, false, 109);
                echo "</td>
                                </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hd'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 112
            echo "                            </table>
                            <a href=\"";
            // line 113
            echo ($context["uphblink"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["text_update_handbook"] ?? null);
            echo "</a>
                        </div>

                        <div class=\"tab-pane\" id=\"tab-package\">
                            ";
            // line 117
            if ((($context["api_key"] ?? null) == "")) {
                // line 118
                echo "                            <div class=\"alert alert-danger\">
                                <i class=\"fa fa-exclamation-circle\"></i> ";
                // line 119
                echo ($context["text_no_api_key"] ?? null);
                echo "
                            </div>
                            ";
            }
            // line 122
            echo "                            ";
            if ((( !twig_get_attribute($this->env, $this->source, ($context["sender"] ?? null), "sender", [], "any", true, true, false, 122) ||  !twig_get_attribute($this->env, $this->source, ($context["sender"] ?? null), "contacts", [], "any", true, true, false, 122)) || (twig_get_attribute($this->env, $this->source, ($context["sender"] ?? null), "contacts", [], "any", false, false, false, 122) == 0))) {
                // line 123
                echo "                            <div class=\"alert alert-danger\">
                                <i class=\"fa fa-exclamation-circle\"></i> ";
                // line 124
                echo ($context["text_no_np_sender"] ?? null);
                echo "
                            </div>
                            ";
            }
            // line 127
            echo "                            <input type=\"hidden\" name=\"";
            echo ($context["sysname"] ?? null);
            echo "_np_sender_ref\" value=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["sender"] ?? null), "sender", [], "any", false, false, false, 127);
            echo "\">
                            ";
            // line 128
            echo twig_get_attribute($this->env, $this->source, ($context["widgets"] ?? null), "dropdown", [0 => "np_sender_contact", 1 => (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["sender"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["contacts"] ?? null) : null)], "method", false, false, false, 128);
            echo "
                            ";
            // line 129
            echo twig_get_attribute($this->env, $this->source, ($context["widgets"] ?? null), "input", [0 => "np_sender_phone"], "method", false, false, false, 129);
            echo "
                            <div class=\"form-group\" style=\"display: inline-block; width: 100%;\">
                                <div class=\"col-sm-5\">
                                    <label class=\"control-label\" for=\"cityselect\">";
            // line 132
            echo ($context["entry_sender_city"] ?? null);
            echo "</label>
                                    <br>";
            // line 133
            echo ($context["entry_sender_city_desc"] ?? null);
            echo "
                                </div>
                                <div class=\"col-sm-7\">
                                    <input type=\"hidden\" name=\"";
            // line 136
            echo ($context["sysname"] ?? null);
            echo "_sender_city\" id=\"neoseo_novaposhta_sender_city\" value=\"";
            echo ($context["sender_city"] ?? null);
            echo "\">
                                    <input type=\"text\" name=\"cityselect\" class=\"form-control\" value=\"";
            // line 137
            echo ($context["cityname"] ?? null);
            echo "\">

                                </div>
                        </div>
                        <div class=\"form-group\" style=\"display: inline-block; width: 100%;\">
                            <div class=\"col-sm-5\">
                                <label class=\"control-label\" for=\"";
            // line 143
            echo ($context["sysname"] ?? null);
            echo "sender_warehouse\">";
            echo ($context["entry_sender_warehouse"] ?? null);
            echo "</label>
                                <br>";
            // line 144
            echo ($context["entry_sender_warehouse_desc"] ?? null);
            echo "
                            </div>
                            <div class=\"col-sm-7\">
                                <select name=\"";
            // line 147
            echo ($context["sysname"] ?? null);
            echo "_sender_warehouse\" id=\"";
            echo ($context["sysname"] ?? null);
            echo "_sender_warehouse\" class=\"form-control\">
                                    ";
            // line 148
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["warehouses"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["warehouse"]) {
                // line 149
                echo "                                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["warehouse"], "ref", [], "any", false, false, false, 149) == ($context["sender_warehouse"] ?? null))) {
                    // line 150
                    echo "                                        <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["warehouse"], "ref", [], "any", false, false, false, 150);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["warehouse"], "descriptionru", [], "any", false, false, false, 150);
                    echo "</option>
                                        ";
                } else {
                    // line 152
                    echo "                                        <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["warehouse"], "ref", [], "any", false, false, false, 152);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["warehouse"], "descriptionru", [], "any", false, false, false, 152);
                    echo "</option>
                                        ";
                }
                // line 154
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['warehouse'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 155
            echo "                                </select>
                            </div>
                        </div>
                             ";
            // line 158
            echo twig_get_attribute($this->env, $this->source, ($context["widgets"] ?? null), "dropdown", [0 => "package_type", 1 => (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["handbook_handbooks"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["cargo"] ?? null) : null)], "method", false, false, false, 158);
            echo "
                             ";
            // line 159
            echo twig_get_attribute($this->env, $this->source, ($context["widgets"] ?? null), "dropdown", [0 => "payer", 1 => (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["handbook_handbooks"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["payer"] ?? null) : null)], "method", false, false, false, 159);
            echo "
                             ";
            // line 160
            echo twig_get_attribute($this->env, $this->source, ($context["widgets"] ?? null), "dropdown", [0 => "delivery_day", 1 => [0 => ($context["text_p0day"] ?? null), 1 => ($context["text_p1day"] ?? null), 2 => ($context["text_p2day"] ?? null), 3 => ($context["text_p3day"] ?? null)]], "method", false, false, false, 160);
            echo "
                             ";
            // line 161
            echo twig_get_attribute($this->env, $this->source, ($context["widgets"] ?? null), "input", [0 => "description"], "method", false, false, false, 161);
            echo "
                    </div>

                    <div class=\"tab-pane\" id=\"tab-tarifs\">
                        ";
            // line 165
            echo twig_get_attribute($this->env, $this->source, ($context["widgets"] ?? null), "input", [0 => "add_tax"], "method", false, false, false, 165);
            echo "
                        ";
            // line 166
            echo twig_get_attribute($this->env, $this->source, ($context["widgets"] ?? null), "dropdown", [0 => "use_custom_cost", 1 => [0 => ($context["text_disabled"] ?? null), 1 => ($context["text_enabled"] ?? null)]], "method", false, false, false, 166);
            echo "
                        ";
            // line 167
            echo twig_get_attribute($this->env, $this->source, ($context["widgets"] ?? null), "dropdown", [0 => "custom_cost_type", 1 => [0 => ($context["text_by_weight"] ?? null), 1 => ($context["text_by_total"] ?? null)]], "method", false, false, false, 167);
            echo "
                        <table id=\"wt-table\" class=\"table table-striped table-bordered table-hover\" style=\"";
            // line 168
            if ((($context["current_cost_type"] ?? null) == 1)) {
                echo "display:none;";
            }
            echo "\">
                            <thead>
                            <tr>
                                <td class=\"text-left\" style=\"width: 200px;\">";
            // line 171
            echo ($context["text_weight"] ?? null);
            echo "</td>
                                <td class=\"text-left\">";
            // line 172
            echo ($context["text_price_for"] ?? null);
            echo ($context["text_warehouse_shipping"] ?? null);
            echo "</td>
                                <td class=\"text-left\">";
            // line 173
            echo ($context["text_price_for"] ?? null);
            echo ($context["text_courier_shipping"] ?? null);
            echo "</td>
                                <td class=\"text-left\" style=\"width: 50px;\">&nbsp;</td>
                            </tr>
                            </thead>
                            <tbody>
                            ";
            // line 178
            $context["wt_row"] = 0;
            // line 179
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["weigh_table"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["wt"]) {
                // line 180
                echo "                            <tr id=\"tw-row";
                echo ($context["wt_row"] ?? null);
                echo "\">
                                <td><input type=\"text\" class=\"form-control\" name=\"";
                // line 181
                echo ($context["sysname"] ?? null);
                echo "_custom_costs[";
                echo ($context["wt_row"] ?? null);
                echo "][weight]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["wt"], "weight", [], "any", false, false, false, 181);
                echo "\"></td>
                                <td><input type=\"text\" class=\"form-control\" name=\"";
                // line 182
                echo ($context["sysname"] ?? null);
                echo "_custom_costs[";
                echo ($context["wt_row"] ?? null);
                echo "][warehouse]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["wt"], "warehouse", [], "any", false, false, false, 182);
                echo "\"></td>
                                <td><input type=\"text\" class=\"form-control\" name=\"";
                // line 183
                echo ($context["sysname"] ?? null);
                echo "_custom_costs[";
                echo ($context["wt_row"] ?? null);
                echo "][courier]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["wt"], "courier", [], "any", false, false, false, 183);
                echo "\"></td>
                                <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#tw-row";
                // line 184
                echo ($context["wt_row"] ?? null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                            </tr>
                            ";
                // line 186
                $context["wt_row"] = (($context["wt_row"] ?? null) + 1);
                // line 187
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['wt'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 188
            echo "                            </tbody>
                            <tfoot>
                            <tr>
                                <td colspan=\"3\"></td>
                                <td class=\"text-left\"><button type=\"button\" onclick=\"addrow();\" data-toggle=\"tooltip\" title=\"";
            // line 192
            echo ($context["text_add"] ?? null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                            </tr>
                            </tfoot>
                        </table>

                        <table id=\"wtt-table\" class=\"table table-striped table-bordered table-hover\" style=\"";
            // line 197
            if ((($context["current_cost_type"] ?? null) == 0)) {
                echo "display:none;";
            }
            echo "\">
                            <thead>
                            <tr>
                                <td class=\"text-left\" style=\"width: 200px;\">";
            // line 200
            echo ($context["text_total"] ?? null);
            echo "</td>
                                <td class=\"text-left\">";
            // line 201
            echo ($context["text_price_for"] ?? null);
            echo ($context["text_warehouse_shipping"] ?? null);
            echo "</td>
                                <td class=\"text-left\">";
            // line 202
            echo ($context["text_price_for"] ?? null);
            echo ($context["text_courier_shipping"] ?? null);
            echo "</td>
                                <td class=\"text-left\" style=\"width: 50px;\">&nbsp;</td>
                            </tr>
                            </thead>
                            <tbody>
                            ";
            // line 207
            $context["wtt_row"] = 0;
            // line 208
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["totals_table"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["wtt"]) {
                // line 209
                echo "                                <tr id=\"ttw-row";
                echo ($context["wtt_row"] ?? null);
                echo "\">
                                    <td><input type=\"text\" class=\"form-control\" name=\"";
                // line 210
                echo ($context["sysname"] ?? null);
                echo "_custom_costs_total[";
                echo ($context["wtt_row"] ?? null);
                echo "][total]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["wtt"], "total", [], "any", false, false, false, 210);
                echo "\"></td>
                                    <td><input type=\"text\" class=\"form-control\" name=\"";
                // line 211
                echo ($context["sysname"] ?? null);
                echo "_custom_costs_total[";
                echo ($context["wtt_row"] ?? null);
                echo "][warehouse]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["wtt"], "warehouse", [], "any", false, false, false, 211);
                echo "\"></td>
                                    <td><input type=\"text\" class=\"form-control\" name=\"";
                // line 212
                echo ($context["sysname"] ?? null);
                echo "_custom_costs_total[";
                echo ($context["wtt_row"] ?? null);
                echo "][courier]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["wtt"], "courier", [], "any", false, false, false, 212);
                echo "\"></td>
                                    <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#ttw-row";
                // line 213
                echo ($context["wt_row"] ?? null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                                </tr>
                                ";
                // line 215
                $context["wtt_row"] = (($context["wtt_row"] ?? null) + 1);
                // line 216
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['wtt'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 217
            echo "                            </tbody>
                            <tfoot>
                            <tr>
                                <td colspan=\"3\"></td>
                                <td class=\"text-left\"><button type=\"button\" onclick=\"addrowt();\" data-toggle=\"tooltip\" title=\"";
            // line 221
            echo ($context["text_add"] ?? null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                            </tr>
                            </tfoot>
                        </table>

                    </div>
                            <div class=\"tab-pane\" id=\"tab-logs\">
                                ";
            // line 228
            echo twig_get_attribute($this->env, $this->source, ($context["widgets"] ?? null), "debug_download_logs", [0 => "debug", 1 => [0 => ($context["text_disabled"] ?? null), 1 => ($context["text_enabled"] ?? null)], 2 => ($context["clear"] ?? null), 3 => ($context["download"] ?? null), 4 => ($context["button_clear_log"] ?? null), 5 => ($context["button_download_log"] ?? null)], "method", false, false, false, 228);
            echo "
                                <textarea style=\"width: 100%; height: 300px; padding: 5px; border: 1px solid #CCCCCC; background: #FFFFFF; overflow: scroll;\">";
            // line 229
            echo ($context["logs"] ?? null);
            echo "</textarea>
                            </div>
                        ";
        }
        // line 232
        echo "                        <div class=\"tab-pane\" id=\"tab-support\">
                            ";
        // line 233
        echo ($context["mail_support"] ?? null);
        echo "
                        </div>
                        <div class=\"tab-pane\" id=\"tab-license\">
                            ";
        // line 236
        echo ($context["module_licence"] ?? null);
        echo "
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script type=\"text/javascript\"><!--
    var wt_row = ";
        // line 246
        echo ($context["wt_row"] ?? null);
        echo ";
    function addrow()
    {
        html = '<tr id=\"tw-row'+wt_row+'\">';
        html += '<td><input type=\"text\" class=\"form-control\" name=\"";
        // line 250
        echo ($context["sysname"] ?? null);
        echo "_custom_costs['+wt_row+'][weight]\" value=\"\"></td>';
        html += '<td><input type=\"text\" class=\"form-control\" name=\"";
        // line 251
        echo ($context["sysname"] ?? null);
        echo "_custom_costs['+wt_row+'][warehouse]\" value=\"\"></td>';
        html += '<td><input type=\"text\" class=\"form-control\" name=\"";
        // line 252
        echo ($context["sysname"] ?? null);
        echo "_custom_costs['+wt_row+'][courier]\" value=\"\"></td>';
        html += '<td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#tw-row'+wt_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 253
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
        html += '</tr>';
        \$('#wt-table tbody').append(html);
        wt_row++;
    }

    var wtt_row = ";
        // line 259
        echo ($context["wtt_row"] ?? null);
        echo ";
    function addrowt()
    {
        html = '<tr id=\"ttw-row'+wtt_row+'\">';
        html += '<td><input type=\"text\" class=\"form-control\" name=\"";
        // line 263
        echo ($context["sysname"] ?? null);
        echo "_custom_costs_total['+wtt_row+'][total]\" value=\"\"></td>';
        html += '<td><input type=\"text\" class=\"form-control\" name=\"";
        // line 264
        echo ($context["sysname"] ?? null);
        echo "_custom_costs_total['+wtt_row+'][warehouse]\" value=\"\"></td>';
        html += '<td><input type=\"text\" class=\"form-control\" name=\"";
        // line 265
        echo ($context["sysname"] ?? null);
        echo "_custom_costs_total['+wtt_row+'][courier]\" value=\"\"></td>';
        html += '<td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#ttw-row'+wtt_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"<?php echo \$button_remove; ?>\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
        html += '</tr>';
        \$('#wtt-table tbody').append(html);
        wtt_row++;
    }

    \$('#";
        // line 272
        echo ($context["sysname"] ?? null);
        echo "_custom_cost_type').on('change',function () {
        //alert(\$(this).val())
        if(\$(this).val() == 1){
            \$('#wt-table').hide();
            \$('#wtt-table').show();
        } else {
            \$('#wtt-table').hide();
            \$('#wt-table').show();
        }
    });

    \$('input[name=\\'cityselect\\']').autocomplete({
        'source': function(request, response) {
            \$.ajax({
                url: 'index.php?route=extension/shipping/";
        // line 286
        echo ($context["sysname"] ?? null);
        echo "/cityautocomplete&user_token=";
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
                dataType: 'json',
                success: function(json) {
                    response(\$.map(json, function(item) {
                        return {
                            label: item['name'],
                            value: item['id'],
                        }
                    }));
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                }
            });
        },
        'select': function(item) {
            \$(this).val(item['label']);
            \$('input[name=\"";
        // line 303
        echo ($context["sysname"] ?? null);
        echo "_sender_city\"]').val(item['value']);
            \$('#";
        // line 304
        echo ($context["sysname"] ?? null);
        echo "_sender_warehouse').load('index.php?route=extension/shipping/";
        echo ($context["sysname"] ?? null);
        echo "/warehouseAutocomplete&city_ref=' + item['value'] + '&user_token=";
        echo ($context["user_token"] ?? null);
        echo "');

        }
    });



    if (window.location.hash.indexOf('#tab') == 0 && \$(\"[href=\" + window.location.hash + \"]\").length) {
        \$(\".panel-body > .nav-tabs li\").removeClass(\"active\");
        \$(\"[href=\" + window.location.hash + \"]\").parents('li').addClass(\"active\");
        \$(\".panel-body:first .tab-content:first .tab-pane:first\").removeClass(\"active\");
        \$(window.location.hash).addClass(\"active\");
    }
    \$(\".nav-tabs li a\").click(function () {
        var url = \$(this).prop('href');
        window.location.hash = url.substring(url.indexOf('#'));
    });

    // Специальный фикс системной функции, поскольку даниель понятия не имеет о том что в url может быть еще и hash
    // и по итогу этот hash становится частью user_token
    function getURLVar(key) {
        var value = [];

        var url = String(document.location);
        if( url.indexOf('#') != -1 ) {
            url = url.substring(0, url.indexOf('#'));
        }
        var query = url.split('?');

        if (query[1]) {
            var part = query[1].split('&');

            for (i = 0; i < part.length; i++) {
                var data = part[i].split('=');

                if (data[0] && data[1]) {
                    value[data[0]] = data[1];
                }
            }

            if (value[key]) {
                return value[key];
            } else {
                return '';
            }
        }
    }
    //--></script>
";
        // line 352
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/shipping/neoseo_novaposhta.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  892 => 352,  837 => 304,  833 => 303,  811 => 286,  794 => 272,  784 => 265,  780 => 264,  776 => 263,  769 => 259,  760 => 253,  756 => 252,  752 => 251,  748 => 250,  741 => 246,  728 => 236,  722 => 233,  719 => 232,  713 => 229,  709 => 228,  699 => 221,  693 => 217,  687 => 216,  685 => 215,  678 => 213,  670 => 212,  662 => 211,  654 => 210,  649 => 209,  644 => 208,  642 => 207,  633 => 202,  628 => 201,  624 => 200,  616 => 197,  608 => 192,  602 => 188,  596 => 187,  594 => 186,  587 => 184,  579 => 183,  571 => 182,  563 => 181,  558 => 180,  553 => 179,  551 => 178,  542 => 173,  537 => 172,  533 => 171,  525 => 168,  521 => 167,  517 => 166,  513 => 165,  506 => 161,  502 => 160,  498 => 159,  494 => 158,  489 => 155,  483 => 154,  475 => 152,  467 => 150,  464 => 149,  460 => 148,  454 => 147,  448 => 144,  442 => 143,  433 => 137,  427 => 136,  421 => 133,  417 => 132,  411 => 129,  407 => 128,  400 => 127,  394 => 124,  391 => 123,  388 => 122,  382 => 119,  379 => 118,  377 => 117,  368 => 113,  365 => 112,  356 => 109,  352 => 108,  348 => 107,  344 => 106,  341 => 105,  337 => 104,  331 => 101,  327 => 100,  323 => 99,  319 => 98,  312 => 94,  306 => 91,  302 => 90,  298 => 89,  294 => 88,  288 => 85,  284 => 84,  280 => 83,  276 => 82,  270 => 79,  266 => 78,  262 => 77,  258 => 76,  254 => 75,  250 => 74,  247 => 73,  245 => 72,  242 => 71,  236 => 69,  231 => 67,  227 => 66,  223 => 65,  219 => 64,  215 => 63,  211 => 62,  207 => 61,  203 => 60,  198 => 59,  196 => 58,  190 => 55,  184 => 52,  179 => 51,  173 => 49,  171 => 48,  167 => 47,  163 => 46,  159 => 45,  155 => 44,  151 => 43,  147 => 42,  143 => 41,  138 => 38,  131 => 34,  127 => 32,  124 => 31,  117 => 27,  114 => 26,  112 => 25,  106 => 21,  95 => 19,  91 => 18,  84 => 16,  73 => 13,  63 => 11,  56 => 9,  49 => 8,  47 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/shipping/neoseo_novaposhta.twig", "");
    }
}
