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

/* extension/module/neoseo_bitrix24.twig */
class __TwigTemplate_51dd7057d988de84a7fd23276d7337c9d45a40b91db12a28c794b236f2ec9993 extends \Twig\Template
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
            echo "                <button type=\"submit\" name=\"action\" value=\"save\" form=\"form\" data-toggle=\"tooltip\" title=\"";
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
            echo "                <a href=\"";
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
            echo "                <li><a href=\"";
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
            echo "        <div class=\"alert alert-danger\">
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
            echo "        <div class=\"alert alert-success\">
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
                     ";
        // line 42
        if ((($context["license_error"] ?? null) == null)) {
            // line 43
            echo "                    <li><a href=\"#tab-contact\" data-toggle=\"tab\">";
            echo ($context["tab_contact"] ?? null);
            echo "</a></li>
                    <li><a href=\"#tab-lead\" data-toggle=\"tab\">";
            // line 44
            echo ($context["tab_lead"] ?? null);
            echo "</a></li>
                    <li><a href=\"#tab-deal\" data-toggle=\"tab\">";
            // line 45
            echo ($context["tab_deal"] ?? null);
            echo "</a></li>
                    <li><a href=\"#tab-logs\" data-toggle=\"tab\">";
            // line 46
            echo ($context["tab_logs"] ?? null);
            echo "</a></li>
                    ";
        }
        // line 48
        echo "                    <li><a href=\"#tab-support\" data-toggle=\"tab\">";
        echo ($context["tab_support"] ?? null);
        echo "</a></li>
                    <li><a href=\"#tab-license\" data-toggle=\"tab\">";
        // line 49
        echo ($context["tab_license"] ?? null);
        echo "</a></li>
                </ul>

                <form action=\"";
        // line 52
        echo ($context["save"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form\">
                    <div class=\"tab-content\">

                        <div class=\"tab-pane active\" id=\"tab-general\">
                            ";
        // line 56
        if ((($context["license_error"] ?? null) == null)) {
            // line 57
            echo "                            ";
            echo twig_get_attribute($this->env, $this->source, ($context["widgets"] ?? null), "dropdown", [0 => "status", 1 => [0 => ($context["text_disabled"] ?? null), 1 => ($context["text_enabled"] ?? null)]], "method", false, false, false, 57);
            echo "
                            ";
            // line 58
            echo twig_get_attribute($this->env, $this->source, ($context["widgets"] ?? null), "dropdown", [0 => "domain", 1 => ($context["domains"] ?? null)], "method", false, false, false, 58);
            echo "
                            ";
            // line 59
            echo twig_get_attribute($this->env, $this->source, ($context["widgets"] ?? null), "input", [0 => "portal_name"], "method", false, false, false, 59);
            echo "
                            ";
            // line 60
            echo twig_get_attribute($this->env, $this->source, ($context["widgets"] ?? null), "input", [0 => "id_user"], "method", false, false, false, 60);
            echo "
                            ";
            // line 61
            echo twig_get_attribute($this->env, $this->source, ($context["widgets"] ?? null), "input", [0 => "secret_code"], "method", false, false, false, 61);
            echo "
                            ";
        } else {
            // line 63
            echo "                            ";
            echo ($context["license_error"] ?? null);
            echo "
                            ";
        }
        // line 65
        echo "                        </div>

                        <div class=\"tab-pane\" id=\"tab-contact\">
                            ";
        // line 68
        if ((($context["license_error"] ?? null) == null)) {
            // line 69
            echo "                            ";
            echo twig_get_attribute($this->env, $this->source, ($context["widgets"] ?? null), "dropdown", [0 => "add_contact", 1 => [0 => ($context["text_disabled"] ?? null), 1 => ($context["text_enabled"] ?? null)]], "method", false, false, false, 69);
            echo "
                            ";
            // line 70
            echo twig_get_attribute($this->env, $this->source, ($context["widgets"] ?? null), "dropdown", [0 => "search_contact_by", 1 => [0 => ($context["text_telephone"] ?? null), 1 => ($context["text_email"] ?? null), 2 => ($context["text_bot"] ?? null)]], "method", false, false, false, 70);
            echo "
                            ";
            // line 71
            echo twig_get_attribute($this->env, $this->source, ($context["widgets"] ?? null), "dropdown", [0 => "contact_user_id", 1 => ($context["users"] ?? null)], "method", false, false, false, 71);
            echo "
                            ";
            // line 72
            echo twig_get_attribute($this->env, $this->source, ($context["widgets"] ?? null), "input", [0 => "custom_field_phone"], "method", false, false, false, 72);
            echo "
                            ";
            // line 73
            echo twig_get_attribute($this->env, $this->source, ($context["widgets"] ?? null), "dropdown", [0 => "source_contact", 1 => ($context["sources"] ?? null)], "method", false, false, false, 73);
            echo "
                            ";
            // line 74
            echo twig_get_attribute($this->env, $this->source, ($context["widgets"] ?? null), "dropdown", [0 => "type_contact_default", 1 => ($context["contact_types"] ?? null)], "method", false, false, false, 74);
            echo "
                            <legend>";
            // line 75
            echo ($context["text_match_table_contact_type"] ?? null);
            echo "</legend>
                            <table id=\"contact-to-customer\"
                                   class=\"table table-striped table-bordered table-hover\">
                                <thead>
                                <tr>
                                    <td class=\"text-left\">";
            // line 80
            echo ($context["column_customer_group"] ?? null);
            echo "</td>
                                    <td class=\"text-left\">";
            // line 81
            echo ($context["column_type_contact"] ?? null);
            echo "</td>
                                    <td></td>
                                </tr>
                                </thead>
                                <tbody>
                                ";
            // line 86
            $context["type_contact_to_customer_group_row"] = 0;
            // line 87
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["group_to_contact"] ?? null));
            foreach ($context['_seq'] as $context["customer_group_id"] => $context["contact_type"]) {
                // line 88
                echo "                                <tr id=\"contact-to-customer-row";
                echo ($context["type_contact_to_customer_group_row"] ?? null);
                echo "\">
                                    <td class=\"text-left\">
                                        <select name=\"group_to_contact[";
                // line 90
                echo ($context["type_contact_to_customer_group_row"] ?? null);
                echo "][customer_group_id]\"
                                               class=\"form-control\">
                                            ";
                // line 92
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["customer_group"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["group_name"]) {
                    // line 93
                    echo "                                            <option value=\"";
                    echo $context["key"];
                    echo "\"
                                            ";
                    // line 94
                    if (($context["customer_group_id"] == $context["key"])) {
                        echo " selected=\"selected\" ";
                    }
                    echo ">";
                    echo $context["group_name"];
                    echo "</option>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['group_name'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 96
                echo "                                        </select>
                                    </td>
                                    <td class=\"text-left\">
                                        <select name=\"group_to_contact[";
                // line 99
                echo ($context["type_contact_to_customer_group_row"] ?? null);
                echo "][contact_type]\"
                                                class=\"form-control\">
                                            ";
                // line 101
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["contact_types"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["type"]) {
                    // line 102
                    echo "                                            <option value=\"";
                    echo $context["key"];
                    echo "\"
                                            ";
                    // line 103
                    if (($context["contact_type"] == $context["key"])) {
                        echo " selected=\"selected\" ";
                    }
                    echo ">";
                    echo $context["type"];
                    echo "</option>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['type'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 105
                echo "                                        </select>
                                    </td>
                                    <td class=\"text-left\">
                                        <button type=\"button\"
                                                onclick=\"\$('#contact-to-customer-row";
                // line 109
                echo ($context["type_contact_to_customer_group_row"] ?? null);
                echo "').remove();\"
                                                data-toggle=\"tooltip\" title=\"";
                // line 110
                echo ($context["button_remove"] ?? null);
                echo "\"
                                                class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button>
                                    </td>
                                </tr>
                                ";
                // line 114
                $context["type_contact_to_customer_group_row"] = (($context["type_contact_to_customer_group_row"] ?? null) + 1);
                // line 115
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['customer_group_id'], $context['contact_type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            echo "                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan=\"2\"></td>
                                    <td class=\"text-left\">
                                        <button type=\"button\" onclick=\"addTypeContactCustomerGroup();\"
                                                data-toggle=\"tooltip\" title=\"";
            // line 122
            echo ($context["button_add"] ?? null);
            echo "\"
                                                class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>
                            ";
        } else {
            // line 129
            echo "                            ";
            echo ($context["license_error"] ?? null);
            echo "
                            ";
        }
        // line 131
        echo "                        </div>

                        <div class=\"tab-pane\" id=\"tab-lead\">
                            ";
        // line 134
        if ((($context["license_error"] ?? null) == null)) {
            // line 135
            echo "                            ";
            echo twig_get_attribute($this->env, $this->source, ($context["widgets"] ?? null), "dropdown", [0 => "add_lead_register", 1 => [0 => ($context["text_disabled"] ?? null), 1 => ($context["text_enabled"] ?? null)]], "method", false, false, false, 135);
            echo "
                            ";
            // line 136
            echo twig_get_attribute($this->env, $this->source, ($context["widgets"] ?? null), "dropdown", [0 => "lead_user_id", 1 => ($context["users"] ?? null)], "method", false, false, false, 136);
            echo "
                            ";
            // line 137
            echo twig_get_attribute($this->env, $this->source, ($context["widgets"] ?? null), "dropdown", [0 => "source_lead_register", 1 => ($context["sources"] ?? null)], "method", false, false, false, 137);
            echo "
                            ";
            // line 138
            echo twig_get_attribute($this->env, $this->source, ($context["widgets"] ?? null), "dropdown", [0 => "add_lead_neoseo_catch_contacts", 1 => [0 => ($context["text_disabled"] ?? null), 1 => ($context["text_enabled"] ?? null)]], "method", false, false, false, 138);
            echo "
                            ";
            // line 139
            echo twig_get_attribute($this->env, $this->source, ($context["widgets"] ?? null), "dropdown", [0 => "source_lead_neoseo_catch_contacts", 1 => ($context["sources"] ?? null)], "method", false, false, false, 139);
            echo "
                            ";
            // line 140
            echo twig_get_attribute($this->env, $this->source, ($context["widgets"] ?? null), "dropdown", [0 => "not_add_new_contact", 1 => ($context["sources"] ?? null)], "method", false, false, false, 140);
            echo "
                            ";
            // line 141
            echo twig_get_attribute($this->env, $this->source, ($context["widgets"] ?? null), "dropdown", [0 => "add_lead_neoseo_notify_when_available", 1 => [0 => ($context["text_disabled"] ?? null), 1 => ($context["text_enabled"] ?? null)]], "method", false, false, false, 141);
            echo "
                            ";
            // line 142
            echo twig_get_attribute($this->env, $this->source, ($context["widgets"] ?? null), "dropdown", [0 => "source_lead_neoseo_notify_when_available", 1 => ($context["sources"] ?? null)], "method", false, false, false, 142);
            echo "
                            ";
        } else {
            // line 144
            echo "                            ";
            echo ($context["license_error"] ?? null);
            echo "
                            ";
        }
        // line 146
        echo "                        </div>

                        <div class=\"tab-pane\" id=\"tab-deal\">
                            ";
        // line 149
        if ((($context["license_error"] ?? null) == null)) {
            // line 150
            echo "                            ";
            echo twig_get_attribute($this->env, $this->source, ($context["widgets"] ?? null), "dropdown", [0 => "add_deal_order", 1 => [0 => ($context["text_disabled"] ?? null), 1 => ($context["text_enabled"] ?? null)]], "method", false, false, false, 150);
            echo "
                            ";
            // line 151
            echo twig_get_attribute($this->env, $this->source, ($context["widgets"] ?? null), "dropdown", [0 => "one_deal", 1 => [0 => ($context["text_disabled"] ?? null), 1 => ($context["text_enabled"] ?? null)]], "method", false, false, false, 151);
            echo "
                            ";
            // line 152
            echo twig_get_attribute($this->env, $this->source, ($context["widgets"] ?? null), "dropdown", [0 => "product_model_name", 1 => [0 => ($context["text_disabled"] ?? null), 1 => ($context["text_enabled"] ?? null)]], "method", false, false, false, 152);
            echo "
                            ";
            // line 153
            echo twig_get_attribute($this->env, $this->source, ($context["widgets"] ?? null), "dropdown", [0 => "deal_user_id", 1 => ($context["users"] ?? null)], "method", false, false, false, 153);
            echo "
                            ";
            // line 154
            echo twig_get_attribute($this->env, $this->source, ($context["widgets"] ?? null), "dropdown", [0 => "deal_stage_default", 1 => ($context["deal_stage"] ?? null)], "method", false, false, false, 154);
            echo "
                            ";
            // line 155
            echo twig_get_attribute($this->env, $this->source, ($context["widgets"] ?? null), "dropdown", [0 => "deal_type_default", 1 => ($context["deal_types"] ?? null)], "method", false, false, false, 155);
            echo "
                            ";
            // line 156
            echo twig_get_attribute($this->env, $this->source, ($context["widgets"] ?? null), "textarea", [0 => "deal_extra_property"], "method", false, false, false, 156);
            echo "
                            ";
            // line 157
            echo twig_get_attribute($this->env, $this->source, ($context["widgets"] ?? null), "checklist", [0 => "unload_options", 1 => ($context["options"] ?? null)], "method", false, false, false, 157);
            echo "
                            ";
            // line 158
            echo twig_get_attribute($this->env, $this->source, ($context["widgets"] ?? null), "checklist", [0 => "unload_order_status", 1 => ($context["order_statuses"] ?? null)], "method", false, false, false, 158);
            echo "
                            <legend>";
            // line 159
            echo ($context["text_match_table_deal_stage"] ?? null);
            echo "</legend>
                            <table id=\"order-to-deal\"
                                   class=\"table table-striped table-bordered table-hover\">
                                <thead>
                                <tr>
                                    <td class=\"text-left\">";
            // line 164
            echo ($context["column_order_status"] ?? null);
            echo "</td>
                                    <td class=\"text-left\">";
            // line 165
            echo ($context["column_deal_stage"] ?? null);
            echo "</td>
                                    <td></td>
                                </tr>
                                </thead>
                                <tbody>
                                ";
            // line 170
            $context["order_status_to_deal_row"] = 0;
            // line 171
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["order_status_to_deal_stage"] ?? null));
            foreach ($context['_seq'] as $context["order_status_id"] => $context["stage_deal"]) {
                // line 172
                echo "                                <tr id=\"order-to-deal-row";
                echo ($context["order_status_to_deal_row"] ?? null);
                echo "\">
                                    <td class=\"text-left\">
                                        <select name=\"order_status_to_deal_stage[";
                // line 174
                echo ($context["order_status_to_deal_row"] ?? null);
                echo "][order_status_id]\"
                                                class=\"form-control\">
                                            ";
                // line 176
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["status"]) {
                    // line 177
                    echo "                                            <option value=\"";
                    echo $context["key"];
                    echo "\"
                                            ";
                    // line 178
                    if (($context["order_status_id"] == $context["key"])) {
                        echo " selected=\"selected\" ";
                    }
                    echo ">";
                    echo $context["status"];
                    echo "</option>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['status'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 180
                echo "                                        </select>
                                    </td>
                                    <td class=\"text-left\">
                                        <select name=\"order_status_to_deal_stage[";
                // line 183
                echo ($context["order_status_to_deal_row"] ?? null);
                echo "][deal_stage]\"
                                                class=\"form-control\">
                                            ";
                // line 185
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["deal_stage"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["deal"]) {
                    // line 186
                    echo "                                            <option value=\"";
                    echo $context["key"];
                    echo "\"
                                            ";
                    // line 187
                    if (($context["stage_deal"] == $context["key"])) {
                        echo " selected=\"selected\" ";
                    }
                    echo ">";
                    echo $context["deal"];
                    echo "</option>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['deal'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 189
                echo "                                        </select>
                                    </td>
                                    <td class=\"text-left\">
                                        <button type=\"button\"
                                                onclick=\"\$('#order-to-deal-row";
                // line 193
                echo ($context["order_status_to_deal_row"] ?? null);
                echo "').remove();\"
                                                data-toggle=\"tooltip\" title=\"";
                // line 194
                echo ($context["button_remove"] ?? null);
                echo "\"
                                                class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button>
                                    </td>
                                </tr>
                                ";
                // line 198
                $context["order_status_to_deal_row"] = (($context["order_status_to_deal_row"] ?? null) + 1);
                // line 199
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['order_status_id'], $context['stage_deal'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 200
            echo "                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan=\"2\"></td>
                                    <td class=\"text-left\">
                                        <button type=\"button\" onclick=\"addOrderStatusToDealStage();\"
                                                data-toggle=\"tooltip\" title=\"";
            // line 206
            echo ($context["button_add"] ?? null);
            echo "\"
                                                class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>
                            <legend>";
            // line 212
            echo ($context["text_match_table_deal_type"] ?? null);
            echo "</legend>
                            <table id=\"category-to-deal\"
                                   class=\"table table-striped table-bordered table-hover\">
                                <thead>
                                <tr>
                                    <td class=\"text-left\">";
            // line 217
            echo ($context["column_category"] ?? null);
            echo "</td>
                                    <td class=\"text-left\">";
            // line 218
            echo ($context["column_deal_type"] ?? null);
            echo "</td>
                                    <td></td>
                                </tr>
                                </thead>
                                <tbody>
                                ";
            // line 223
            $context["category_to_deal_row"] = 0;
            // line 224
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["category_to_deal_type"] ?? null));
            foreach ($context['_seq'] as $context["category_id"] => $context["deal_type"]) {
                // line 225
                echo "                                <tr id=\"category-to-deal-row";
                echo ($context["category_to_deal_row"] ?? null);
                echo "\">
                                    <td class=\"text-left\">
                                        <select name=\"category_to_deal_type[";
                // line 227
                echo ($context["category_to_deal_row"] ?? null);
                echo "][category_id]\"
                                                class=\"form-control\">
                                            ";
                // line 229
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["category"]) {
                    // line 230
                    echo "                                            <option value=\"";
                    echo $context["key"];
                    echo "\"
                                            ";
                    // line 231
                    if (($context["category_id"] == $context["key"])) {
                        echo " selected=\"selected\" ";
                    }
                    echo ">";
                    echo $context["category"];
                    echo "</option>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 233
                echo "                                        </select>
                                    </td>
                                    <td class=\"text-left\">
                                        <select name=\"category_to_deal_type[";
                // line 236
                echo ($context["category_to_deal_row"] ?? null);
                echo "][deal_type]\"
                                                class=\"form-control\">
                                            ";
                // line 238
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["deal_types"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["type"]) {
                    // line 239
                    echo "                                            <option value=\"";
                    echo $context["key"];
                    echo "\"
                                            ";
                    // line 240
                    if (($context["deal_type"] == $context["key"])) {
                        echo " selected=\"selected\" ";
                    }
                    echo ">";
                    echo $context["type"];
                    echo "</option>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['type'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 242
                echo "                                        </select>
                                    </td>
                                    <td class=\"text-left\">
                                        <button type=\"button\"
                                                onclick=\"\$('#category-to-deal-row";
                // line 246
                echo ($context["category_to_deal_row"] ?? null);
                echo "').remove();\"
                                                data-toggle=\"tooltip\" title=\"";
                // line 247
                echo ($context["button_remove"] ?? null);
                echo "\"
                                                class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button>
                                    </td>
                                </tr>
                                ";
                // line 251
                $context["category_to_deal_row"] = (($context["category_to_deal_row"] ?? null) + 1);
                // line 252
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['category_id'], $context['deal_type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 253
            echo "                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan=\"2\"></td>
                                    <td class=\"text-left\">
                                        <button type=\"button\" onclick=\"addCategoryToDealType();\"
                                                data-toggle=\"tooltip\" title=\"";
            // line 259
            echo ($context["button_add"] ?? null);
            echo "\"
                                                class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>
                            ";
        } else {
            // line 266
            echo "                            ";
            echo ($context["license_error"] ?? null);
            echo "
                            ";
        }
        // line 268
        echo "                        </div>

                        ";
        // line 270
        if ((($context["license_error"] ?? null) == null)) {
            // line 271
            echo "                        <div class=\"tab-pane\" id=\"tab-logs\">
                            ";
            // line 272
            echo twig_get_attribute($this->env, $this->source, ($context["widgets"] ?? null), "debug_download_logs", [0 => "debug", 1 => [0 => ($context["text_disabled"] ?? null), 1 => ($context["text_enabled"] ?? null)], 2 => ($context["clear"] ?? null), 3 => ($context["download"] ?? null), 4 => ($context["button_clear_log"] ?? null), 5 => ($context["button_download_log"] ?? null)], "method", false, false, false, 272);
            echo "
                            <textarea style=\"width: 100%; height: 300px; padding: 5px; border: 1px solid #CCCCCC; background: #FFFFFF; overflow: scroll;\">";
            // line 273
            echo ($context["logs"] ?? null);
            echo "</textarea>
                        </div>
                        ";
        }
        // line 276
        echo "                        <div class=\"tab-pane\" id=\"tab-support\">
                            ";
        // line 277
        echo ($context["mail_support"] ?? null);
        echo "
                        </div>
                        <div class=\"tab-pane\" id=\"tab-license\">
                            ";
        // line 280
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
    var category_to_deal_row = '";
        // line 289
        echo ($context["category_to_deal_row"] ?? null);
        echo "';

    function addCategoryToDealType() {
        html = '<tr id=\"category-to-deal-row' + category_to_deal_row + '\">';
        html += '<td class=\"text-left\">';
        html += '<select name=\"category_to_deal_type[' + category_to_deal_row + '][category_id]\" class=\"form-control\">';
       ";
        // line 295
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["category"]) {
            // line 296
            echo "            html += '<option value=\"";
            echo $context["key"];
            echo "\">";
            echo $context["category"];
            echo "</option>';
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 298
        echo "        html += '</select>';
        html += '</td>';
        html += '<td class=\"text-left\">';
        html += '<select name=\"category_to_deal_type[' + category_to_deal_row + '][deal_type]\" class=\"form-control\">';
       ";
        // line 302
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["deal_types"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["deal"]) {
            // line 303
            echo "            html += '<option value=\"";
            echo $context["key"];
            echo "\">";
            echo $context["deal"];
            echo "</option>';
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['deal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 305
        echo "        html += '</select>';
        html += '</td>';
        html += '  <td class=\"text-left\">';
        html += '<button type=\"button\" onclick=\"\$(\\'#category-to-deal-row' + category_to_deal_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 308
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button>';
        html += '</td>';
        html += '</tr>';

        \$('#category-to-deal tbody').append(html);

        order_status_to_deal_row++;
    }
    //--></script>
<script type=\"text/javascript\"><!--
    var order_status_to_deal_row = '";
        // line 318
        echo ($context["order_status_to_deal_row"] ?? null);
        echo "';

    function addOrderStatusToDealStage() {
        html = '<tr id=\"order-to-deal-row' + order_status_to_deal_row + '\">';
        html += '<td class=\"text-left\">';
        html += '<select name=\"order_status_to_deal_stage[' + order_status_to_deal_row + '][order_status_id]\" class=\"form-control\">';
       ";
        // line 324
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["status"]) {
            // line 325
            echo "            html += '<option value=\"";
            echo $context["key"];
            echo "\">";
            echo $context["status"];
            echo "</option>';
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 327
        echo "        html += '</select>';
        html += '</td>';
        html += '<td class=\"text-left\">';
        html += '<select name=\"order_status_to_deal_stage[' + order_status_to_deal_row + '][deal_stage]\" class=\"form-control\">';
        ";
        // line 331
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["deal_stage"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["deal"]) {
            // line 332
            echo "            html += '<option value=\"";
            echo $context["key"];
            echo "\">";
            echo $context["deal"];
            echo "</option>';
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['deal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 334
        echo "        html += '</select>';
        html += '</td>';
        html += '  <td class=\"text-left\">';
        html += '<button type=\"button\" onclick=\"\$(\\'#order-to-deal-row' + order_status_to_deal_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 337
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button>';
        html += '</td>';
        html += '</tr>';

        \$('#order-to-deal tbody').append(html);

        order_status_to_deal_row++;
    }
    //--></script>
<script type=\"text/javascript\"><!--
    var type_contact_to_customer_group_row = '";
        // line 347
        echo ($context["type_contact_to_customer_group_row"] ?? null);
        echo "';

    function addTypeContactCustomerGroup() {
        html = '<tr id=\"contact-to-customer-row' + type_contact_to_customer_group_row + '\">';
        html += '<td class=\"text-left\">';
        html += '<select name=\"group_to_contact[' + type_contact_to_customer_group_row + '][customer_group_id]\" class=\"form-control\">';
        ";
        // line 353
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_group"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["group_name"]) {
            // line 354
            echo "            html += '<option value=\"";
            echo $context["key"];
            echo "\">";
            echo $context["group_name"];
            echo "</option>';
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['group_name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 356
        echo "        html += '</select>';
        html += '</td>';
        html += '<td class=\"text-left\">';
        html += '<select name=\"group_to_contact[' + type_contact_to_customer_group_row + '][contact_type]\" class=\"form-control\">';
        ";
        // line 360
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["contact_types"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["type"]) {
            // line 361
            echo "            html += '<option value=\"";
            echo $context["key"];
            echo "\">";
            echo $context["type"];
            echo "</option>';
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 363
        echo "        html += '</select>';
        html += '</td>';
        html += '  <td class=\"text-left\">';
        html += '<button type=\"button\" onclick=\"\$(\\'#contact-to-customer-row' + type_contact_to_customer_group_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 366
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button>';
        html += '</td>';
        html += '</tr>';

        \$('#contact-to-customer tbody').append(html);

        type_contact_to_customer_group_row++;
    }
    //--></script>
<script type=\"text/javascript\"><!--
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
    // и по итогу этот hash становится частью token
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
        // line 417
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/neoseo_bitrix24.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1018 => 417,  964 => 366,  959 => 363,  948 => 361,  944 => 360,  938 => 356,  927 => 354,  923 => 353,  914 => 347,  901 => 337,  896 => 334,  885 => 332,  881 => 331,  875 => 327,  864 => 325,  860 => 324,  851 => 318,  838 => 308,  833 => 305,  822 => 303,  818 => 302,  812 => 298,  801 => 296,  797 => 295,  788 => 289,  776 => 280,  770 => 277,  767 => 276,  761 => 273,  757 => 272,  754 => 271,  752 => 270,  748 => 268,  742 => 266,  732 => 259,  724 => 253,  718 => 252,  716 => 251,  709 => 247,  705 => 246,  699 => 242,  687 => 240,  682 => 239,  678 => 238,  673 => 236,  668 => 233,  656 => 231,  651 => 230,  647 => 229,  642 => 227,  636 => 225,  631 => 224,  629 => 223,  621 => 218,  617 => 217,  609 => 212,  600 => 206,  592 => 200,  586 => 199,  584 => 198,  577 => 194,  573 => 193,  567 => 189,  555 => 187,  550 => 186,  546 => 185,  541 => 183,  536 => 180,  524 => 178,  519 => 177,  515 => 176,  510 => 174,  504 => 172,  499 => 171,  497 => 170,  489 => 165,  485 => 164,  477 => 159,  473 => 158,  469 => 157,  465 => 156,  461 => 155,  457 => 154,  453 => 153,  449 => 152,  445 => 151,  440 => 150,  438 => 149,  433 => 146,  427 => 144,  422 => 142,  418 => 141,  414 => 140,  410 => 139,  406 => 138,  402 => 137,  398 => 136,  393 => 135,  391 => 134,  386 => 131,  380 => 129,  370 => 122,  362 => 116,  356 => 115,  354 => 114,  347 => 110,  343 => 109,  337 => 105,  325 => 103,  320 => 102,  316 => 101,  311 => 99,  306 => 96,  294 => 94,  289 => 93,  285 => 92,  280 => 90,  274 => 88,  269 => 87,  267 => 86,  259 => 81,  255 => 80,  247 => 75,  243 => 74,  239 => 73,  235 => 72,  231 => 71,  227 => 70,  222 => 69,  220 => 68,  215 => 65,  209 => 63,  204 => 61,  200 => 60,  196 => 59,  192 => 58,  187 => 57,  185 => 56,  178 => 52,  172 => 49,  167 => 48,  162 => 46,  158 => 45,  154 => 44,  149 => 43,  147 => 42,  143 => 41,  138 => 38,  131 => 34,  127 => 32,  124 => 31,  117 => 27,  114 => 26,  112 => 25,  106 => 21,  95 => 19,  91 => 18,  84 => 16,  73 => 13,  63 => 11,  56 => 9,  49 => 8,  47 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/neoseo_bitrix24.twig", "");
    }
}
