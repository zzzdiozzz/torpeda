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

/* extension/module/d_quickcheckout.twig */
class __TwigTemplate_3f119d0f1f8480c0bdfe6612bdbae12478ff4d11a8a75b8ac2acc2afa843dc3e extends \Twig\Template
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
            <div class=\"form-inline pull-right\">
                ";
        // line 6
        if ((twig_length_filter($this->env, ($context["stores"] ?? null)) > 1)) {
            // line 7
            echo "                <select class=\"form-control\" onChange=\"location = '";
            echo ($context["module_link"] ?? null);
            echo " & store_id=' + \$(this).val()\">
                    ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                // line 9
                echo "                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 9) == ($context["store_id"] ?? null))) {
                    // line 10
                    echo "                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 10);
                    echo "\" selected=\"selected\" >";
                    echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 10);
                    echo "</option>
                        ";
                } else {
                    // line 12
                    echo "                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 12);
                    echo "\" >";
                    echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 12);
                    echo "</option>
                        ";
                }
                // line 14
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "
                </select>
                 ";
        }
        // line 18
        echo "                <button id=\"save_and_stay\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_save_and_stay"] ?? null);
        echo "\" class=\"btn btn-success\"><i class=\"fa fa-save\"></i></button>
                <button type=\"submit\" form=\"form\" data-toggle=\"tooltip\" title=\"";
        // line 19
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
                <a href=\"";
        // line 20
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
            </div>
            <h1>";
        // line 22
        echo ($context["heading_title"] ?? null);
        echo " ";
        echo ($context["version"] ?? null);
        echo "</h1>
            <ul class=\"breadcrumb\">
                ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 25
            echo "                <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 25);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 25);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "            </ul>
        </div>
    </div>

    <div class=\"container-fluid\">
        ";
        // line 32
        if (twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "warning", [], "any", false, false, false, 32)) {
            // line 33
            echo "        <div class=\"alert alert-danger\">
            <i class=\"fa fa-exclamation-circle\"></i> ";
            // line 34
            echo twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "warning", [], "any", false, false, false, 34);
            echo "
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        </div>
        ";
        }
        // line 38
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "shopunity", [], "any", false, false, false, 38)) {
            // line 39
            echo "        <div class=\"alert alert-danger\">
            <i class=\"fa fa-exclamation-circle\"></i>
           ";
            // line 41
            echo twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "shopunity", [], "any", false, false, false, 41);
            echo "
        </div>
        ";
        }
        // line 44
        echo "        ";
        if (($context["success"] ?? null)) {
            // line 45
            echo "        <div class=\"alert alert-success\">
            <i class=\"fa fa-exclamation-circle\"></i> ";
            // line 46
            echo ($context["success"] ?? null);
            echo "
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        </div>
        ";
        }
        // line 50
        echo "
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 53
        echo ($context["text_edit"] ?? null);
        echo " ";
        echo ($context["setting_name"] ?? null);
        echo "</h3>
            </div>
            <div class=\"panel-body\">
                <form action=\"";
        // line 56
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form\" class=\"form-horizontal\">

                    <ul  class=\"nav nav-tabs\">
                        <li class=\"active\">
                            <a href=\"#setting\" data-toggle=\"tab\">
                                <span class=\"fa fa-cog\"></span>
                               ";
        // line 62
        echo ($context["tab_setting"] ?? null);
        echo "
                            </a>
                        </li>
                        ";
        // line 65
        if (($context["debug"] ?? null)) {
            // line 66
            echo "                        <li>
                            <a href=\"#debug\" data-toggle=\"tab\">
                                <span class=\"fa fa-bug\"></span>
                               ";
            // line 69
            echo ($context["tab_debug"] ?? null);
            echo "
                            </a>
                        </li>
                        ";
        }
        // line 73
        echo "                        ";
        if (twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "support", [], "any", false, false, false, 73)) {
            // line 74
            echo "                        <li>
                            <a href=\"#support\" data-toggle=\"tab\">
                                <span class=\"fa fa-support\"></span>
                               ";
            // line 77
            echo ($context["tab_support"] ?? null);
            echo "
                            </a>
                        </li>
                        ";
        }
        // line 81
        echo "                        <li>
                            <a href=\"#instruction\" data-toggle=\"tab\">
                                <span class=\"fa fa-graduation-cap\"></span>
                               ";
        // line 84
        echo ($context["tab_instruction"] ?? null);
        echo "
                            </a>
                        </li>
                    </ul>

                    <div class=\"tab-content\">
                        <div class=\"tab-pane active\" id=\"setting\" >
                            <div class=\"tab-body\">
                                <div class=\"row\">
                                    <div class=\"col-sm-2\">
                                        <ul class=\"nav nav-pills s-nav-stacked\">
                                            <li class=\"active\">
                                                <a href=\"#d_home\" data-toggle=\"tab\">
                                                    <span class=\"fa fa-home fa-fw\"></span> <span>";
        // line 97
        echo ($context["text_home"] ?? null);
        echo "</span>
                                                </a>
                                            </li>
                                            ";
        // line 100
        if (($context["setting_id"] ?? null)) {
            // line 101
            echo "                                            <li>
                                                <a href=\"#d_general\" data-toggle=\"tab\">
                                                    <i class=\"fa fa-cog fa-fw\"></i> <span>";
            // line 103
            echo ($context["text_general"] ?? null);
            echo "</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#d_login\" data-toggle=\"tab\">
                                                    <i class=\"fa fa-key fa-fw\"></i> <span>";
            // line 108
            echo ($context["text_login"] ?? null);
            echo "</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#d_payment_address\" data-toggle=\"tab\">
                                                    <i class=\"fa fa-book fa-fw\"></i> <span>";
            // line 113
            echo ($context["text_payment_address"] ?? null);
            echo "</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#d_shipping_address\" data-toggle=\"tab\">
                                                    <i class=\"fa fa-book fa-fw\"></i> <span>";
            // line 118
            echo ($context["text_shipping_address"] ?? null);
            echo "</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#d_shipping_method\" data-toggle=\"tab\">
                                                    <i class=\"fa fa-truck fa-fw\"></i> <span>";
            // line 123
            echo ($context["text_shipping_method"] ?? null);
            echo "</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#d_payment_method\" data-toggle=\"tab\">
                                                    <i class=\"fa fa-credit-card fa-fw\"></i> <span>";
            // line 128
            echo ($context["text_payment_method"] ?? null);
            echo "</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#d_confirm\" data-toggle=\"tab\">
                                                    <i class=\"fa fa-shopping-cart fa-fw\"></i> <span>";
            // line 133
            echo ($context["text_cart"] ?? null);
            echo " & ";
            echo ($context["text_confirm"] ?? null);
            echo "</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#d_design\" data-toggle=\"tab\">
                                                    <i class=\"fa fa-paint-brush fa-fw\"></i> <span>";
            // line 138
            echo ($context["text_design"] ?? null);
            echo "</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#d_analytics\" data-toggle=\"tab\">
                                                    <i class=\"fa fa-bar-chart fa-fw\"></i> <span>";
            // line 143
            echo ($context["text_analytics"] ?? null);
            echo "</span>
                                                </a>
                                            </li>
                                           ";
        }
        // line 147
        echo "                                        </ul>
                                    </div>
                                    <div class=\"col-sm-10\">
                                        <div class=\"tab-content\">

                                        <div id=\"d_home\" class=\"tab-pane active\">
                                                <div class=\"page-header\">
                                                    <h3><span class=\"fa fa-home\"></span> <span>";
        // line 154
        echo ($context["text_home"] ?? null);
        echo "</span></h3>
                                                </div>
                                                ";
        // line 156
        if ( !($context["settings"] ?? null)) {
            echo " 
                                                <div class=\"bs-callout bs-callout-warning\">";
            // line 157
            echo ($context["text_intro_create_setting"] ?? null);
            echo "</div>
                                                ";
        }
        // line 158
        echo " 
                                                <div class=\"row\">
                                                    ";
        // line 160
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["settings"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["setting_value"]) {
            // line 161
            echo "                                                    <div id=\"setting_id_";
            echo twig_get_attribute($this->env, $this->source, $context["setting_value"], "setting_id", [], "any", false, false, false, 161);
            echo "\" class=\"col-lg-3 col-md-4 col-sm-6 \">
                                                        <div class=\"tile ";
            // line 162
            echo (((twig_get_attribute($this->env, $this->source, $context["setting_value"], "setting_id", [], "any", false, false, false, 162) == ($context["setting_id"] ?? null))) ? ("selected") : (""));
            echo "\">
                                                            <a href=\"#\" class=\"view-setting \" data-setting-id=\"";
            // line 163
            echo twig_get_attribute($this->env, $this->source, $context["setting_value"], "setting_id", [], "any", false, false, false, 163);
            echo "\" >
                                                                <div class=\"tile-heading clearfix\">
                                                                   ";
            // line 165
            echo twig_get_attribute($this->env, $this->source, $context["setting_value"], "name", [], "any", false, false, false, 165);
            echo "
                                                                    <span class=\"pull-right\" data-toggle=\"tooltip\" title=\"";
            // line 166
            echo ($context["help_average_time"] ?? null);
            echo "\" >";
            echo twig_date_format_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, $context["setting_value"], "average_checkout_time", [], "any", false, false, false, 166) / 100)), "H:i:s");
            echo "</span>
                                                                </div>
                                                                <div class=\"tile-body\">
                                                                    <a href=\"";
            // line 169
            echo twig_get_attribute($this->env, $this->source, $context["setting_value"], "href", [], "any", false, false, false, 169);
            echo " \" target=\"_blank\" data-toggle=\"tooltip\" title=\"";
            echo ($context["help_view_shop"] ?? null);
            echo "\"><i class=\"fa fa-eye\"></i></a>
                                                                    <a href=\"#\" class=\"view-setting \" data-setting-id=\"";
            // line 170
            echo twig_get_attribute($this->env, $this->source, $context["setting_value"], "setting_id", [], "any", false, false, false, 170);
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo ($context["help_view_setting"] ?? null);
            echo "\"><i class=\"fa fa-pencil\"></i></a>
                                                                    <h3 class=\"pull-right\" data-toggle=\"tooltip\" title=\"";
            // line 171
            echo ($context["help_average_rating"] ?? null);
            echo "\">";
            echo twig_round((twig_get_attribute($this->env, $this->source, $context["setting_value"], "average_rating", [], "any", false, false, false, 171) * 100));
            echo "%</h3>
                                                                </div>
                                                            </a>
                                                            <div class=\"tile-footer form-inline clearfix\">
                                                                <div class=\"\">
                                                                   ";
            // line 176
            echo ($context["text_probability"] ?? null);
            echo ":
                                                                    <div class=\"input-group pull-right probability\">
                                                                        <span class=\"input-group-btn probability-down\">
                                                                            <button class=\"btn btn-default btn-sm \" type=\"button\"><i class=\"fa fa-chevron-down\"></i></button>
                                                                        </span>
                                                                        <input type=\"text\" style=\"width:50px; text-align:center\" class=\"form-control input-sm probability-value\" name=\"";
            // line 181
            echo ($context["id"] ?? null);
            echo "_setting_cycle[";
            echo twig_get_attribute($this->env, $this->source, $context["setting_value"], "setting_id", [], "any", false, false, false, 181);
            echo "]\" value=\"";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting_cycle"] ?? null), "setting_value", [], "any", false, false, false, 181), "setting_id", [], "any", false, false, false, 181)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting_cycle"] ?? null), "setting_value", [], "any", false, false, false, 181), "setting_id", [], "any", false, false, false, 181)) : (""));
            echo "1  \" aria-describedby=\"sizing-addon2\" />
                                                                        <span class=\"input-group-btn probability-up\">
                                                                            <button class=\"btn btn-default btn-sm \" type=\"button\"><i class=\"fa fa-chevron-up\"></i></button>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['setting_value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 191
        echo "                                                    <script>
                                                                \$('.probability .probability-down').on('click', function(){
                                                        \$(this).next().val(\$(this).next().val() - 1);
                                                                \$('.probability-value').trigger('change');
                                                        })
                                                                \$('.probability .probability-up').on('click', function(){
                                                        \$(this).prev().val(Number(\$(this).prev().val()) + 1);
                                                                \$('.probability-value').trigger('change');
                                                        })

                                                                \$('.probability-value').on('change', function(){
                                                        if (\$(this).val() < 0){
                                                        \$(this).val(0)
                                                        }
                                                        })
                                                    </script>
                                                    <div class=\"col-lg-3 col-md-4 col-sm-6\">
                                                        <div class=\"tile\">
                                                            <div class=\"tile-heading\">
                                                               ";
        // line 210
        echo ($context["text_create_setting_heading"] ?? null);
        echo "
                                                            </div>
                                                            <a href=\"#\" id=\"create_setting\" class=\"create-setting\" >
                                                                <div class=\"tile-body\">
                                                                    <i class=\"fa fa-plus\"></i>
                                                                    <h3 class=\"pull-right\">";
        // line 215
        echo ($context["text_create_setting"] ?? null);
        echo "</h3>
                                                                </div>
                                                            </a>
                                                            <div class=\"tile-footer\">
                                                               ";
        // line 219
        echo ($context["text_create_setting_probability"] ?? null);
        echo "
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr/>
                                                <div class=\"row\">
                                                    <div class=\"col-md-6\">
                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\" for=\"input_status\">";
        // line 228
        echo ($context["entry_status"] ?? null);
        echo "</label>
                                                            <div class=\"col-sm-8\">
                                                                <input type=\"hidden\" value=\"0\" name=\"";
        // line 230
        echo ($context["id"] ?? null);
        echo "_status\" id=\"input_status\" class=\"form-control\" />
                                                                <input type=\"checkbox\"  value=\"1\" name=\"";
        // line 231
        echo ($context["id"] ?? null);
        echo "_status\" id=\"input_status\" ";
        if (twig_get_attribute($this->env, $this->source, $context, (($context["id"] ?? null) . "_status"), [], "any", false, false, false, 231)) {
            echo "  checked=\"checked\" ";
        }
        echo " class=\"form-control\" />
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\" for=\"input-catalog-limit\">
                                                                <span data-toggle=\"tooltip\" title=\"";
        // line 237
        echo ($context["help_trigger"] ?? null);
        echo "\">
                                                                   ";
        // line 238
        echo ($context["entry_trigger"] ?? null);
        echo "
                                                                </span>
                                                            </label>
                                                            <div class=\"col-sm-8\">
                                                                <input type=\"text\" value=\"";
        // line 242
        echo twig_get_attribute($this->env, $this->source, $context, (($context["id"] ?? null) . "_trigger"), [], "any", false, false, false, 242);
        echo "\" name=\"";
        echo ($context["id"] ?? null);
        echo "_trigger\" id=\"trigger\" class=\"form-control\"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"col-md-6\">
                                                        <div class=\"form-group\">
                                                            
                                                        </div>
                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\" for=\"input_debug\">";
        // line 251
        echo ($context["entry_debug"] ?? null);
        echo "</label>
                                                            <div class=\"col-sm-8\">
                                                                <input type=\"hidden\" name=\"";
        // line 253
        echo ($context["id"] ?? null);
        echo "_debug\" value=\"0\" />
                                                                <input type=\"checkbox\" id=\"input_debug\" name=\"";
        // line 254
        echo ($context["id"] ?? null);
        echo "_debug\" ";
        echo ((($context["debug"] ?? null)) ? ("checked=\"checked\"") : (""));
        echo " value=\"1\" />
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <script>
                                                \$('.tab-content a[data-toggle]').click(function(){
                                                    \$('.panel .nav-stacked li.active').removeClass('active')
                                                    \$('.panel .nav-stacked li a[href=\"' + \$(this).attr('href') + '\"]').parent().addClass('active')
                                                    
                                                })
                                            </script>


                                        <div id=\"d_general\" class=\"tab-pane\">

                                                <h3 class=\"page-header\">
                                                    <span class=\"fa fa-cog fa-fw\"></span> <span>";
        // line 273
        echo ($context["text_general"] ?? null);
        echo "</span>
                                                </h3>

                                                <div class=\"row\">
                                                    <div class=\"col-md-6\">

                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\" for=\"input_setting_name\">
                                                                <span data-toggle=\"tooltip\" title=\"";
        // line 281
        echo ($context["help_name"] ?? null);
        echo "\">
                                                                   ";
        // line 282
        echo ($context["entry_name"] ?? null);
        echo "
                                                                </span>
                                                            </label>
                                                            <div class=\"col-sm-8\">
                                                                <input type=\"text\" value=\"";
        // line 286
        echo ($context["setting_name"] ?? null);
        echo "\" name=\"";
        echo ($context["id"] ?? null);
        echo "_setting[name]\" id=\"input_setting_name\" class=\"form-control\"/>
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\" for=\"input-catalog-limit\">
                                                                <span data-toggle=\"tooltip\" title=\"";
        // line 292
        echo ($context["help_general_clear_session"] ?? null);
        echo "\">
                                                                   ";
        // line 293
        echo ($context["entry_general_clear_session"] ?? null);
        echo "
                                                                </span>
                                                            </label>
                                                            <div class=\"col-sm-8\">
                                                                <input type=\"hidden\" value=\"0\" name=\"";
        // line 297
        echo ($context["id"] ?? null);
        echo "_setting[general][clear_session]\" />
                                                                <input type=\"checkbox\" value=\"1\" name=\"";
        // line 298
        echo ($context["id"] ?? null);
        echo "_setting[general][clear_session]\" ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "general", [], "any", false, false, false, 298), "clear_session", [], "any", false, false, false, 298) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "general", [], "any", false, false, false, 298), "clear_session", [], "any", false, false, false, 298) == 1))) {
            echo " checked=\"checked\"";
        }
        echo "  id=\"general_clear_session\" />
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\" for=\"input-catalog-limit\">
                                                                <span data-toggle=\"tooltip\" title=\"";
        // line 304
        echo ($context["help_general_login_refresh"] ?? null);
        echo "\">
                                                                   ";
        // line 305
        echo ($context["entry_general_login_refresh"] ?? null);
        echo "
                                                                </span>
                                                            </label>
                                                            <div class=\"col-sm-8\">
                                                                <input type=\"hidden\" value=\"0\" name=\"";
        // line 309
        echo ($context["id"] ?? null);
        echo "_setting[general][login_refresh]\" />
                                                                <input type=\"checkbox\" value=\"1\" name=\"";
        // line 310
        echo ($context["id"] ?? null);
        echo "_setting[general][login_refresh]\" ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "general", [], "any", false, false, false, 310), "login_refresh", [], "any", false, false, false, 310) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "general", [], "any", false, false, false, 310), "login_refresh", [], "any", false, false, false, 310) == 1))) {
            echo " checked=\"checked\"";
        }
        echo "  id=\"general_login_refresh\" />
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\" for=\"input-catalog-limit\">
                                                                <span data-toggle=\"tooltip\" title=\"";
        // line 316
        echo ($context["help_general_analytics_event"] ?? null);
        echo "\">
                                                                   ";
        // line 317
        echo ($context["entry_general_analytics_event"] ?? null);
        echo "
                                                                </span>
                                                            </label>
                                                            <div class=\"col-sm-2\">
                                                                <input type=\"hidden\" value=\"0\" name=\"";
        // line 321
        echo ($context["id"] ?? null);
        echo "_setting[general][analytics_event]\" />
                                                                <input type=\"checkbox\" value=\"1\" name=\"";
        // line 322
        echo ($context["id"] ?? null);
        echo "_setting[general][analytics_event]\" ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "general", [], "any", false, false, false, 322), "analytics_event", [], "any", false, false, false, 322) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "general", [], "any", false, false, false, 322), "analytics_event", [], "any", false, false, false, 322) == 1))) {
            echo " checked=\"checked\"";
        }
        echo "  id=\"general_analytics_event\" />
                                                            </div>
                                                            <script>
                                                                \$(\"#general_analytics_event\").on('switchChange.bootstrapSwitch', function(event, state){
                                                                    if (state){
                                                                        if ( ";
        // line 327
        echo ((($context["analytics"] ?? null)) ? (0) : (1));
        echo " ){
                                                                            \$(\"#analytics_message\").removeClass('hidden');
                                                                        }
                                                                    } else{
                                                                        \$(\"#analytics_message\").addClass('hidden');
                                                                    }
                                                                })
                                                            </script>
                                                            <div class=\"col-sm-6\">
                                                                <div id=\"analytics_message\" class=\"alert alert-danger alert-inline    ";
        // line 336
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "general", [], "any", false, false, false, 336), "analytics_event", [], "any", false, false, false, 336) != 1) || ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "general", [], "any", false, false, false, 336), "analytics_event", [], "any", false, false, false, 336) == 1) && ($context["analytics"] ?? null)))) {
            echo " ";
            echo "hidden";
        }
        echo " \"  >";
        echo ($context["warning_analytics_event"] ?? null);
        echo "</div>
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\" for=\"input-catalog-limit\">
                                                                <span data-toggle=\"tooltip\" title=\"";
        // line 342
        echo ($context["help_general_update_mini_cart"] ?? null);
        echo "\">
                                                                   ";
        // line 343
        echo ($context["entry_general_update_mini_cart"] ?? null);
        echo "
                                                                </span>
                                                            </label>
                                                            <div class=\"col-sm-8\">
                                                                <input type=\"hidden\" value=\"0\" name=\"";
        // line 347
        echo ($context["id"] ?? null);
        echo "_setting[general][update_mini_cart]\" />
                                                                <input type=\"checkbox\" value=\"1\" name=\"";
        // line 348
        echo ($context["id"] ?? null);
        echo "_setting[general][update_mini_cart]\" ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "general", [], "any", false, false, false, 348), "update_mini_cart", [], "any", false, false, false, 348) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "general", [], "any", false, false, false, 348), "update_mini_cart", [], "any", false, false, false, 348) == 1))) {
            echo " checked=\"checked\"";
        }
        echo "  id=\"general_update_mini_cart\" />
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\" for=\"input-catalog-limit\">
                                                                <span data-toggle=\"tooltip\" title=\"";
        // line 354
        echo ($context["help_general_compress"] ?? null);
        echo "\">
                                                                   ";
        // line 355
        echo ($context["entry_general_compress"] ?? null);
        echo "
                                                                </span>
                                                            </label>
                                                            <div class=\"col-sm-4\">
                                                                <input type=\"hidden\" value=\"0\" name=\"";
        // line 359
        echo ($context["id"] ?? null);
        echo "_setting[general][compress]\" />
                                                                <input type=\"checkbox\" value=\"1\" name=\"";
        // line 360
        echo ($context["id"] ?? null);
        echo "_setting[general][compress]\" ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "general", [], "any", false, false, false, 360), "compress", [], "any", false, false, false, 360) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "general", [], "any", false, false, false, 360), "compress", [], "any", false, false, false, 360) == 1))) {
            echo " checked=\"checked\"";
        }
        echo "  id=\"general_compress\" />
                                                            </div>
                                                            <div class=\"col-sm-4\">
                                                                <button class=\"btn btn-primary btn-block\" id=\"compress_update\"><i class=\"fa fa-refresh\"></i> ";
        // line 363
        echo ($context["compress_update"] ?? null);
        echo "</button>
                                                            </div>
                                                            <div id=\"compress-notification\" class=\"col-sm-offset-4 help-block col-sm-8\" >
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class=\"col-md-6\">

                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\" for=\"input-catalog-limit\">
                                                                <span data-toggle=\"tooltip\" title=\"";
        // line 375
        echo ($context["help_general_min_order"] ?? null);
        echo "\">
                                                                   ";
        // line 376
        echo ($context["entry_general_min_order"] ?? null);
        echo "
                                                                </span>
                                                            </label>
                                                            <div class=\"col-sm-8\">
                                                                <div class=\"input-group\">
                                                                    <label for=\"general_min_order_value\" id=\"label_general_min_order_value\" class=\"input-group-addon\">%s</label>
                                                                    ";
        // line 382
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "general", [], "any", false, false, false, 382), "min_order", [], "any", false, false, false, 382), "value", [], "any", false, false, false, 382) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "general", [], "any", false, false, false, 382), "min_order", [], "any", false, false, false, 382), "value", [], "any", false, false, false, 382) != ""))) {
            echo " 
                                                                    <input type=\"text\" value=\"";
            // line 383
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "general", [], "any", false, false, false, 383), "min_order", [], "any", false, false, false, 383), "value", [], "any", false, false, false, 383);
            echo "\" name=\"";
            echo ($context["id"] ?? null);
            echo "_setting[general][min_order][value]\" id=\"general_min_order_value\" class=\"form-control\"/>
                                                                    ";
        } else {
            // line 384
            echo "  
                                                                    <input type=\"text\" value=\"0\" name=\"";
            // line 385
            echo ($context["id"] ?? null);
            echo "_setting[general][min_order][value]\" class=\"form-control\" id=\"general_min_order_value\"/>
                                                                    ";
        }
        // line 387
        echo "                                                                </div>

                                                                ";
        // line 389
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            echo " 
                                                                <div id=\"tab_general_min_order_text_";
            // line 390
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 390);
            echo "\" class=\"input-group\">
                                                                    <label class=\"input-group-addon\" for=\"general_min_order_text_";
            // line 391
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 391);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 391);
            echo "\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "flag", [], "any", false, false, false, 391);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 391);
            echo "\" /></label>
                                                                    <input type=\"text\" name=\"";
            // line 392
            echo ($context["id"] ?? null);
            echo "_setting[general][min_order][text][";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 392);
            echo "]\" id=\"general_min_order_text_";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 392);
            echo "\" value=\"";
            echo (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "general", [], "any", false, false, false, 392), "min_order", [], "any", false, false, false, 392), "text", [], "any", false, false, false, 392)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 392)] ?? null) : null)) ? ((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "general", [], "any", false, false, false, 392), "min_order", [], "any", false, false, false, 392), "text", [], "any", false, false, false, 392)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 392)] ?? null) : null)) : (($context["text_value_min_order"] ?? null)));
            echo "  \" class=\"form-control\" >
                                                                </div>
                                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 394
        echo " 
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\" for=\"input-catalog-limit\">
                                                                <span data-toggle=\"tooltip\" title=\"";
        // line 400
        echo ($context["help_general_min_quantity"] ?? null);
        echo "\">
                                                                   ";
        // line 401
        echo ($context["entry_general_min_quantity"] ?? null);
        echo "
                                                                </span>
                                                            </label>
                                                            <div class=\"col-sm-8\">
                                                                <div class=\"input-group\">
                                                                    <label for=\"general_min_quantity_value\" id=\"label_general_min_quantity_value\" class=\"input-group-addon\">%s</label>
                                                                    ";
        // line 407
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "general", [], "any", false, false, false, 407), "min_quantity", [], "any", false, false, false, 407), "value", [], "any", false, false, false, 407) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "general", [], "any", false, false, false, 407), "min_quantity", [], "any", false, false, false, 407), "value", [], "any", false, false, false, 407) != ""))) {
            echo " 
                                                                    <input type=\"text\" value=\"";
            // line 408
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "general", [], "any", false, false, false, 408), "min_quantity", [], "any", false, false, false, 408), "value", [], "any", false, false, false, 408);
            echo "\" name=\"";
            echo ($context["id"] ?? null);
            echo "_setting[general][min_quantity][value]\" id=\"general_min_quantity_value\" class=\"form-control\"/>
                                                                    ";
        } else {
            // line 409
            echo "  
                                                                    <input type=\"text\" value=\"0\" name=\"";
            // line 410
            echo ($context["id"] ?? null);
            echo "_setting[general][min_quantity][value]\" class=\"form-control\" id=\"general_min_quantity_value\"/>
                                                                     ";
        }
        // line 412
        echo "                                                                </div>

                                                                ";
        // line 414
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            echo " 
                                                                <div id=\"tab_general_min_quantity_text_";
            // line 415
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 415);
            echo "\" class=\"input-group\">
                                                                    <label class=\"input-group-addon\" for=\"general_min_quantity_text_";
            // line 416
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 416);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 416);
            echo "\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "flag", [], "any", false, false, false, 416);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 416);
            echo "\" /></label>
                                                                    <input type=\"text\" name=\"";
            // line 417
            echo ($context["id"] ?? null);
            echo "_setting[general][min_quantity][text][";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 417);
            echo "]\" id=\"general_min_quantity_text_";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 417);
            echo "\" value=\"";
            echo (((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "general", [], "any", false, false, false, 417), "min_quantity", [], "any", false, false, false, 417), "text", [], "any", false, false, false, 417)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 417)] ?? null) : null)) ? ((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "general", [], "any", false, false, false, 417), "min_quantity", [], "any", false, false, false, 417), "text", [], "any", false, false, false, 417)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 417)] ?? null) : null)) : (($context["text_value_min_quantity"] ?? null)));
            echo " \" class=\"form-control\" >
                                                                </div>
                                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 419
        echo " 
                                                            </div>
                                                        </div>

                                                        ";
        // line 423
        if (($context["config_files"] ?? null)) {
            echo " 
                                                            <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\" for=\"select_config\">";
            // line 425
            echo ($context["entry_config_files"] ?? null);
            echo "</label>
                                                            <div class=\"col-sm-8\">
                                                                <div class=\"input-group\">
                                                                    <select id=\"select_config\"  class=\"form-control\" name=\"";
            // line 428
            echo ($context["id"] ?? null);
            echo "_setting[general][config]\">
                                                                        ";
            // line 429
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["config_files"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["config_file"]) {
                echo " 
                                                                        <option value=\"";
                // line 430
                echo $context["config_file"];
                echo "\" ";
                echo ((($context["config_file"] == ($context["config"] ?? null))) ? ("selected=\"selected\"") : (""));
                echo " >";
                echo $context["config_file"];
                echo "</option>
                                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['config_file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 432
            echo "                                                                        ";
        }
        echo " 
                                                                    </select>
                                                                    <span class=\"input-group-btn\">
                                                                        <button class=\"btn btn-primary\" id=\"select_config_submit\" type=\"button\">Apply</button>
                                                                    </span>
                                                                </div>

                                                            </div>
                                                            </div>
                                                         
                                                      

                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\" for=\"button_delete_setting\">";
        // line 445
        echo ($context["entry_delete_setting"] ?? null);
        echo "</label>
                                                            <div class=\"col-sm-4\">
                                                                <a onclick=\"confirm('";
        // line 447
        echo ($context["text_confirm_delete_setting"] ?? null);
        echo "') ? location.href = '";
        echo ($context["delete_setting"] ?? null);
        echo "' : false;\" id=\"button_delete_setting\" class=\"btn btn-primary btn-block\"><i class=\"fa fa-trash-o\"></i> ";
        echo ($context["button_delete_setting"] ?? null);
        echo "</a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <hr/>
                                                <div class=\"form-group\">
                                                    <label class=\"col-sm-2 control-label\" for=\"button_delete_setting\">
                                                        <span data-toggle=\"tooltip\" title=\"";
        // line 456
        echo ($context["help_action_bulk_setting"] ?? null);
        echo "\">
                                                           ";
        // line 457
        echo ($context["entry_action_bulk_setting"] ?? null);
        echo "
                                                        </span>
                                                    </label>
                                                    <div class=\"col-sm-2\">
                                                        <button class=\"btn btn-primary btn-block\" id=\"generate_setting\"><i class=\"fa fa-cog\"></i> ";
        // line 461
        echo ($context["button_create_bulk_setting"] ?? null);
        echo "</button>
                                                    </div>
                                                    <div class=\"col-sm-2\">
                                                        <button class=\"btn btn-primary btn-block\" id=\"save_bulk_setting\"><i class=\"fa fa-floppy-o\"></i> ";
        // line 464
        echo ($context["button_save_bulk_setting"] ?? null);
        echo "</button>
                                                    </div>
                                                    <div class=\"col-sm-6\" id=\"notification_setting\">
                                                    </div>
                                                </div>

                                                <div class=\"form-group\">
                                                    <label class=\"col-sm-2 control-label\" for=\"button_delete_setting\">
                                                        <span data-toggle=\"tooltip\" title=\"";
        // line 472
        echo ($context["help_bulk_setting"] ?? null);
        echo "\">
                                                           ";
        // line 473
        echo ($context["entry_bulk_setting"] ?? null);
        echo "
                                                        </span>
                                                    </label>
                                                    <div class=\"col-sm-10\">
                                                        <textarea id=\"bulk_setting\" class=\"form-control\"></textarea>
                                                    </div>
                                                </div>

                                            </div>

\t\t\t\t\t\t\t\t\t        <div id=\"d_login\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t          
\t\t\t\t\t\t\t\t\t         \t<h3 class=\"page-header\">
\t\t\t\t\t\t\t\t\t         \t\t<span class=\"fa fa-key fa-fw\"></span> <span>";
        // line 486
        echo ($context["text_login"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t         \t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"bs-callout bs-callout-warning\">";
        // line 488
        echo ($context["text_need_full_version"] ?? null);
        echo "</div>
\t\t\t\t\t\t\t\t\t         \t";
        // line 489
        if (($context["social_login"] ?? null)) {
            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-catalog-limit\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
            // line 492
            echo ($context["help_social_login"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 493
            echo ($context["entry_social_login"] ?? null);
            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" value=\"0\" name=\"";
            // line 497
            echo ($context["id"] ?? null);
            echo "_setting[general][social_login]\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" value=\"1\" name=\"";
            // line 498
            echo ($context["id"] ?? null);
            echo "_setting[general][social_login]\" ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "general", [], "array", false, true, false, 498), "social_login", [], "array", true, true, false, 498) && ((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["setting"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["general"] ?? null) : null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["social_login"] ?? null) : null) == 1))) {
                echo "checked=\"checked\"";
            }
            echo " id=\"social_login\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-offset-3 col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 504
            echo ($context["link_social_login_edit"] ?? null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i> ";
            echo ($context["button_social_login_edit"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t\t\t        \t";
        } else {
            // line 507
            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"bs-callout bs-callout-warning\">";
            // line 508
            echo ($context["text_social_login_required"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t\t        \t";
        }
        // line 509
        echo " 

\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t<div id=\"d_payment_address\" class=\"tab-pane\">

\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"page-header\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-book fa-fw\"></span> <span>";
        // line 517
        echo ($context["text_payment_address"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t <div class=\"bs-callout bs-callout-warning\">";
        // line 519
        echo ($context["text_need_full_version"] ?? null);
        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t<div id=\"d_shipping_address\" class=\"tab-pane\">

\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"page-header\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-book fa-fw\"></span> <span>";
        // line 527
        echo ($context["text_shipping_address"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"bs-callout bs-callout-warning\">";
        // line 529
        echo ($context["text_need_full_version"] ?? null);
        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t<div id=\"d_shipping_method\" class=\"tab-pane\">

\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"page-header\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-truck fa-fw\"></span> <span>";
        // line 537
        echo ($context["text_shipping_method"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"bs-callout bs-callout-warning\">";
        // line 539
        echo ($context["text_need_full_version"] ?? null);
        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t   
\t\t\t\t\t\t\t\t\t\t\t<div id=\"d_payment_method\" class=\"tab-pane\">

\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"page-header\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-credit-card fa-fw\"></span> <span>";
        // line 546
        echo ($context["text_payment_method"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"bs-callout bs-callout-warning\">";
        // line 548
        echo ($context["text_need_full_version"] ?? null);
        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div id=\"d_confirm\" class=\"tab-pane\">

\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"page-header\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-shopping-cart fa-fw\"></span> <span>";
        // line 554
        echo ($context["text_cart"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"bs-callout bs-callout-warning\">";
        // line 556
        echo ($context["text_need_full_version"] ?? null);
        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t<div id=\"d_design\" class=\"tab-pane\">

\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"page-header\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-paint-brush fa-fw\"></span> <span>";
        // line 564
        echo ($context["text_design"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t <div class=\"bs-callout bs-callout-warning\">";
        // line 566
        echo ($context["text_need_full_version"] ?? null);
        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div id=\"d_analytics\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"page-header\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-bar-chart fa-fw\"></span> <span>";
        // line 573
        echo ($context["text_analytics"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t <div class=\"bs-callout bs-callout-warning\">";
        // line 575
        echo ($context["text_need_full_version"] ?? null);
        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>


<div class=\"tab-pane\" id=\"debug\" >
                            <div class=\"tab-body\">
                                <textarea id=\"textarea_debug_log\" wrap=\"off\" rows=\"15\" readonly=\"readonly\" class=\"form-control\">";
        // line 587
        echo ($context["debug_log"] ?? null);
        echo "</textarea>
                                <br/>

                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"input_debug_file\">";
        // line 591
        echo ($context["entry_debug_file"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-10\">
                                        <input type=\"text\" id=\"input_debug_file\" name=\"";
        // line 593
        echo ($context["id"] ?? null);
        echo "_debug_file\" value=\"";
        echo ($context["debug_file"] ?? null);
        echo "\"  class=\"form-control\"/>
                                    </div>
                                </div>

                                <div class=\"form-group\">
                                    <div class=\"col-sm-10 col-sm-offset-2\">
                                        <a class=\"btn btn-danger\" id=\"clear_debug_file\">";
        // line 599
        echo ($context["button_clear"] ?? null);
        echo "</a>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class=\"tab-pane\" id=\"support\" >
                            <div class=\"tab-body\">
                            </div>
                        </div>

                        <div class=\"tab-pane\" id=\"instruction\" >
                            <div class=\"tab-body\">
                               ";
        // line 613
        echo ($context["text_instruction"] ?? null);
        echo "
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    ";
        // line 622
        $context["column_1"] = (((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "design", [], "any", false, false, false, 622), "column_width", [], "any", false, false, false, 622)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[1] ?? null) : null) / 12) * 100);
        // line 623
        echo "    ";
        $context["column_2"] = (((($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "design", [], "any", false, false, false, 623), "column_width", [], "any", false, false, false, 623)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[2] ?? null) : null) / 12) * 100);
        // line 624
        echo "    ";
        $context["column_3"] = (((($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "design", [], "any", false, false, false, 624), "column_width", [], "any", false, false, false, 624)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[3] ?? null) : null) / 12) * 100);
        // line 625
        echo "    ";
        $context["column_4"] = (($context["column_2"] ?? null) + ($context["column_3"] ?? null));
        // line 626
        echo "

<style>
    #column_width_1,
    #column_1{
        width: ";
        // line 631
        echo ($context["column_1"] ?? null);
        echo "%;
    }
    #column_width_2,
    #column_2{
        width: ";
        // line 635
        echo ($context["column_2"] ?? null);
        echo "%;
    }
    #column_width_3,
    #column_3{
        width: ";
        // line 639
        echo ($context["column_3"] ?? null);
        echo "%;
    }

    #column_4{
        width: ";
        // line 643
        echo ($context["column_4"] ?? null);
        echo "%
    }
</style>

<script type=\"text/javascript\"><!--
    \$('#column_slider').slider({
        'tooltip': 'hide'
    }).on('slide', function(ev){
        var val1 = Number(ev.value[0]);
        var pos1 = (val1 / 12) * 100;
        var val2 = Number(ev.value[1]);
        var pos2 = (val2 / 12) * 100;
        \$(\"#column_1, #column_width_1\").css({'width' : pos1+'%'})
        \$(\"#column_width_1\").val(val1)
        \$(\"#column_2, #column_width_2\").css({'width' : pos2-pos1 +'%'})
        \$(\"#column_width_2\").val(val2 - val1)
        \$(\"#column_3, #column_width_3\").css({'width' : Number(100-pos2) +'%'})
        \$(\"#column_width_3\").val(Number(12 - val2))
        \$(\"#column_4\").css({'width' : Number(100 - pos1) +'%'})
        \$(\"#column_width_4\").val(Number(12 - val1))
        console.log(ev.value[0])
        console.log(\$('#form').serializeArray())
    })
    var adjustment;
    var group = \$(\"#column_groups ul.column\").sortable({
        group: 'column',
        pullPlaceholder: false,
        // animation on drop
        onDrop: function  (item, targetContainer, _super) {
            var clonedItem = \$('<li/>').css({height: 0})
            item.before(clonedItem)
            clonedItem.animate({'height': item.height()})
            item.animate(clonedItem.position(), function  () {
                clonedItem.detach()
                _super(item)
            })
            console.log(\$('#form').serializeArray())
            var data = group.sortable(\"serialize\").get();
            var jsonString = JSON.stringify(data, null, ' ');
            \$.each(data, function(column, column_value) {
                \$.each(column_value, function(row, row_value) {
                    console.log(row_value['id'] + ' column: ' + column + 1 + 'row: ' + row)
                    \$('#step_' + row_value['id'] + ' .data-column').val(column + 1)
                    \$('#step_' + row_value['id'] + ' .data-row').val(row)
                });
            });
        },
        // set item relative to cursor position
        onDragStart: function (\$item, container, _super) {
            var offset = \$item.offset(),
                    pointer = container.rootGroup.pointer

            adjustment = {
                left: pointer.left - offset.left,
                top: pointer.top - offset.top
            }

            _super(\$item, container)
        },
        onDrag: function (\$item, position) {
            \$item.css({
                left: position.left - adjustment.left,
                top: position.top - adjustment.top
            })
        }
    })

    \$('.sortable > tr').tsort({attr:'sort-data'});


    \$(function () {
        \$(\"[type='checkbox']\").bootstrapSwitch({
            'onColor': 'success',
            'onText': '";
        // line 716
        echo ($context["text_yes"] ?? null);
        echo "',
            'offText': '";
        // line 717
        echo ($context["text_no"] ?? null);
        echo "',
        });
        \$('[data-toggle=\"popover\"]').popover()

        \$('.qc-step').each(function(){
            \$(this).appendTo('.qc-col-' + \$(this).attr('data-col'));
            })
        \$('.qc-step').tsort({attr:'data-row'});
        \$(\".table-sortable\").sortable({
            containerSelector: 'table',
            itemPath: '',
            itemSelector: 'tr',
            distance: '10',
            pullPlaceholder: false,
            placeholder: '<tr class=\"placeholder\"><td colspan=\"5\" /></tr>',
            onDragStart: function (item, container, _super) {
                var offset = item.offset(),
                        pointer = container.rootGroup.pointer

                adjustment = {
                    left: pointer.left - offset.left,
                    top: pointer.top - offset.top
                }

                _super(item, container)
            },
            onDrag: function (item, position) {
                item.css({
                    left: position.left - adjustment.left,
                    top: position.top - adjustment.top
                })
            },
            onDrop: function  (item, container, _super) {
                item.closest('tbody').find('tr').each(function (i, row) {
                    console.log(i)
                    \$(row).find('.sort').val(i)

                })

                _super(item)
            }
        })

        \$('#select_config_submit').on('click', function(){
            var config = \$('#select_config').val();
            var setting_id = '";
        // line 762
        echo ($context["setting_id"] ?? null);
        echo "';
            var store_id = '";
        // line 763
        echo ($context["store_id"] ?? null);
        echo "';
            \$('#content').append('<form action=\"";
        // line 764
        echo ($context["module_link"] ?? null);
        echo ((($context["stores"] ?? null)) ? ("&store_id=' + store_id + '") : (""));
        echo " ";
        echo ((($context["setting_id"] ?? null)) ? ("&setting_id=' + setting_id + '") : (""));
        echo " \" id=\"config_update\" method=\"post\" style=\"display:none;\"><input type=\"text\" name=\"config\" value=\"' + config + '\" /><input type=\"text\" name=\"setting_id\" value=\"' + setting_id + '\" /></form>');
            \$('#config_update').submit();
        })

        \$('body').on('click', '#save_and_stay', function(){
            \$.ajax({
                type: 'post',
                url: \$('#form').attr('action') + '&save',
                data: \$('#form').serialize(),
                beforeSend: function() {
                    \$('#form').fadeTo('slow', 0.5);
                },
                complete: function() {
                    \$('#form').fadeTo('slow', 1);
                },
                success: function(response) {
                    console.log(response);
                }
            });
        });
        \$('body').on('click', '#button_update', function(){
            \$.ajax({
                url: '";
        // line 786
        echo ($context["update"] ?? null);
        echo "',
                type: 'post',
                dataType: 'json',
                beforeSend: function() {
                    \$('#button_update').find('.fa-refresh').addClass('fa-spin');
                },
                complete: function() {
                    \$('#button_update').find('.fa-refresh').removeClass('fa-spin');
                },
                success: function(json) {
                    console.log(json);
                    if (json['error']){
                        \$('#notification_update').html('<div class=\"alert alert-danger m-b-none\">' + json['error'] + '</div>')
                    }

                    if (json['warning']){
                        \$html = '';
                        if (json['update']){
                            \$.each(json['update'], function(k, v) {
                                \$html += '<div>Version: ' + k + '</div><div>' + v + '</div>';
                            });
                        }
                        \$('#notification_update').html('<div class=\"alert alert-warning alert-inline\">' + json['warning'] + \$html + '</div>')
                    }

                    if (json['success']){
                        \$('#notification_update').html('<div class=\"alert alert-success alert-inline\">' + json['success'] + '</div>')
                    }
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                }
            });
        });
        \$('body').on('click', '#clear_debug_file', function(){
            \$.ajax({
                url: '";
        // line 822
        echo ($context["clear_debug_file"] ?? null);
        echo "',
                type: 'post',
                dataType: 'json',
                data: 'debug_file=";
        // line 825
        echo ($context["debug_file"] ?? null);
        echo "',
                beforeSend: function() {
                    \$('#form').fadeTo('slow', 0.5);
                },
                complete: function() {
                    \$('#form').fadeTo('slow', 1);
                },
                success: function(json) {
                    \$('.alert').remove();
                    console.log(json);
                    if (json['error']){
                        \$('#debug .tab-body').prepend('<div class=\"alert alert-danger\">' + json['error'] + '</div>')
                    }

                    if (json['success']){
                        \$('#debug .tab-body').prepend('<div class=\"alert alert-success\">' + json['success'] + '</div>')
                        \$('#textarea_debug_log').val('');
                    }
                }
            });
        });

        \$('body').on('click', '.view-setting', function(){
            var setting_id = \$(this).attr('data-setting-id');
            location.href = updateURLParameter(\$(location).attr('href'), 'setting_id', setting_id);
            return false;
        });
        \$('body').on('click', '#create_setting', function(){
            \$.ajax({
                url: '";
        // line 854
        echo ($context["create_setting"] ?? null);
        echo "',
                type: 'post',
                dataType: 'json',
                data:  \$('#form').serialize(),
                beforeSend: function() {
                    \$('#form').fadeTo('slow', 0.5);
                },
                complete: function() {
                    \$('#form').fadeTo('slow', 1);
                },
                success: function(json) {
                    \$('.alert').remove();
                    console.log(json);
                    if (json['error']){
                        \$('#content > .container-fluid').prepend('<div class=\"alert alert-warning\">' + json['error'] + '</div>')
                    }

                    if (json['redirect']){
                        location.href = json['redirect'];
                    }
                }
            });
            return false;
        });
        \$('body').on('click', '#generate_setting', function () {
            \$('#bulk_setting').val(JSON.stringify(\$('#form').serializeObject().";
        // line 879
        echo ($context["id"] ?? null);
        echo "_setting));
            return false;
        })

         \$('body').on('click', '#compress_update', function (e) {
            \$.ajax({
                url: '";
        // line 885
        echo ($context["update_compress_url"] ?? null);
        echo "',
                type: 'post',
                dataType: 'json',
                data: 'setting_id=";
        // line 888
        echo ($context["setting_id"] ?? null);
        echo "&setting=' + \$('#bulk_setting').val(),
                beforeSend: function () {
                    \$('#form').fadeTo('slow', 0.5);
                },
                complete: function () {
                    \$('#form').fadeTo('slow', 1);
                },
                success: function (json) {
                    \$('.alert').remove();
                    console.log(json);
                    if (json['success']) {
                        \$('#compress-notification').prepend('<div class=\"alert alert-success alert-inline\">' + json['success'] + '</div>')
                    }
                    if (json['error']) {
                        \$('#compress-notification').prepend('<div class=\"alert alert-warning alert-inline\">' + json['error'] + '</div>')
                    }
                }
            });
            e.preventDefault();
        });
        \$('body').on('click', '#save_bulk_setting', function () {
            \$.ajax({
                url: '";
        // line 910
        echo ($context["save_bulk_setting"] ?? null);
        echo "',
                type: 'post',
                dataType: 'json',
                data: 'setting_id=";
        // line 913
        echo ($context["setting_id"] ?? null);
        echo "&setting=' + \$('#bulk_setting').val(),
                beforeSend: function () {
                    \$('#form').fadeTo('slow', 0.5);
                },
                complete: function () {
                    \$('#form').fadeTo('slow', 1);
                },
                success: function (json) {
                    \$('.alert').remove();
                    console.log(json);
                    if (json['error']) {
                        \$('#notification_setting').prepend('<div class=\"alert alert-warning alert-inline\">' + json['error'] + '</div>')
                    }

                    if (json['redirect']) {
                        location.href = json['redirect'];
                    }
                }
            });
            return false;
        });
    });

    function updateURLParameter(url, param, paramVal) {
        var TheAnchor = null;
        var newAdditionalURL = \"\";
        var tempArray = url.split(\"?\");
        var baseURL = tempArray[0];
        var additionalURL = tempArray[1];
        var temp = \"\";
        if (additionalURL) {
            var tmpAnchor = additionalURL.split(\"#\");
            var TheParams = tmpAnchor[0];
            TheAnchor = tmpAnchor[1];
            if (TheAnchor)
                additionalURL = TheParams;
            tempArray = additionalURL.split(\"&\");
            for (i = 0; i < tempArray.length; i++) {
                if (tempArray[i].split('=')[0] != param) {
                    newAdditionalURL += temp + tempArray[i];
                    temp = \"&\";
                }
            }
        }
        else {
            var tmpAnchor = baseURL.split(\"#\");
            var TheParams = tmpAnchor[0];
            TheAnchor = tmpAnchor[1];
            if (TheParams)
                baseURL = TheParams;
        }

        if (TheAnchor)
            paramVal += \"#\" + TheAnchor;
        var rows_txt = temp + \"\" + param + \"=\" + paramVal;
        return baseURL + \"?\" + newAdditionalURL + rows_txt;
    }

    \$('body').on('change', '#payment_address_country_id_input select', function () {
        \$.ajax({
            url: 'index.php?route=extension/module/d_quickcheckout/getZone&user_token=";
        // line 973
        echo ($context["token"] ?? null);
        echo "&country_id=' + this.value,
            dataType: 'json',
            success: function(json) {
                html = '<option value=\"\">";
        // line 976
        echo ($context["text_select"] ?? null);
        echo "</option>';
                if (json && json != '') {
                    for (i = 0; i < json.length; i++) {
                        html += '<option value=\"' + json[i]['value'] + '\"';
                        html += '>' + json[i]['name'] + '</option>';
                    }
                } else {
                    html += '<option value=\"0\" selected=\"selected\">";
        // line 983
        echo ($context["text_none"] ?? null);
        echo "</option>';
                }

                \$('#payment_address_zone_id_input select').html(html);
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
    \$('body').on('change', '#shipping_address_country_id_input select', function() {
        \$.ajax({
            url: 'index.php?route=extension/module/d_quickcheckout/getZone&user_token=";
        // line 995
        echo ($context["token"] ?? null);
        echo "&country_id=' + this.value,
            dataType: 'json',
            success: function(json) {
                html = '<option value=\"\">";
        // line 998
        echo ($context["text_select"] ?? null);
        echo "</option>';
                if (json && json != '') {
                    for (i = 0; i < json.length; i++) {
                        html += '<option value=\"' + json[i]['value'] + '\"';
                        html += '>' + json[i]['name'] + '</option>';
                    }
                } else {
                    html += '<option value=\"0\" selected=\"selected\">";
        // line 1005
        echo ($context["text_none"] ?? null);
        echo "</option>';
                }

                \$('#shipping_address_zone_id_input select').html(html);
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
    \$('body').on('click', '.pagination li a', function() {
        var pag_url = \$(this).attr('href');

        \$.ajax({
            url: pag_url,
            type: 'get',
            data: pag_url,
            dataType: 'html',
            success: function(html) {
                var data_analytics = \$(html).find(\"#d_analytics\").html();
                \$(\"#d_analytics\").html(data_analytics);
            }
        });
        return false;

    });
    //--></script>

";
        // line 1033
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/d_quickcheckout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1782 => 1033,  1751 => 1005,  1741 => 998,  1735 => 995,  1720 => 983,  1710 => 976,  1704 => 973,  1641 => 913,  1635 => 910,  1610 => 888,  1604 => 885,  1595 => 879,  1567 => 854,  1535 => 825,  1529 => 822,  1490 => 786,  1462 => 764,  1458 => 763,  1454 => 762,  1406 => 717,  1402 => 716,  1326 => 643,  1319 => 639,  1312 => 635,  1305 => 631,  1298 => 626,  1295 => 625,  1292 => 624,  1289 => 623,  1287 => 622,  1275 => 613,  1258 => 599,  1247 => 593,  1242 => 591,  1235 => 587,  1220 => 575,  1215 => 573,  1205 => 566,  1200 => 564,  1189 => 556,  1184 => 554,  1175 => 548,  1170 => 546,  1160 => 539,  1155 => 537,  1144 => 529,  1139 => 527,  1128 => 519,  1123 => 517,  1113 => 509,  1108 => 508,  1105 => 507,  1096 => 504,  1083 => 498,  1079 => 497,  1072 => 493,  1068 => 492,  1062 => 489,  1058 => 488,  1053 => 486,  1037 => 473,  1033 => 472,  1022 => 464,  1016 => 461,  1009 => 457,  1005 => 456,  989 => 447,  984 => 445,  967 => 432,  955 => 430,  949 => 429,  945 => 428,  939 => 425,  934 => 423,  928 => 419,  913 => 417,  903 => 416,  899 => 415,  893 => 414,  889 => 412,  884 => 410,  881 => 409,  874 => 408,  870 => 407,  861 => 401,  857 => 400,  849 => 394,  834 => 392,  824 => 391,  820 => 390,  814 => 389,  810 => 387,  805 => 385,  802 => 384,  795 => 383,  791 => 382,  782 => 376,  778 => 375,  763 => 363,  753 => 360,  749 => 359,  742 => 355,  738 => 354,  725 => 348,  721 => 347,  714 => 343,  710 => 342,  696 => 336,  684 => 327,  672 => 322,  668 => 321,  661 => 317,  657 => 316,  644 => 310,  640 => 309,  633 => 305,  629 => 304,  616 => 298,  612 => 297,  605 => 293,  601 => 292,  590 => 286,  583 => 282,  579 => 281,  568 => 273,  544 => 254,  540 => 253,  535 => 251,  521 => 242,  514 => 238,  510 => 237,  497 => 231,  493 => 230,  488 => 228,  476 => 219,  469 => 215,  461 => 210,  440 => 191,  420 => 181,  412 => 176,  402 => 171,  396 => 170,  390 => 169,  382 => 166,  378 => 165,  373 => 163,  369 => 162,  364 => 161,  360 => 160,  356 => 158,  351 => 157,  347 => 156,  342 => 154,  333 => 147,  326 => 143,  318 => 138,  308 => 133,  300 => 128,  292 => 123,  284 => 118,  276 => 113,  268 => 108,  260 => 103,  256 => 101,  254 => 100,  248 => 97,  232 => 84,  227 => 81,  220 => 77,  215 => 74,  212 => 73,  205 => 69,  200 => 66,  198 => 65,  192 => 62,  183 => 56,  175 => 53,  170 => 50,  163 => 46,  160 => 45,  157 => 44,  151 => 41,  147 => 39,  144 => 38,  137 => 34,  134 => 33,  132 => 32,  125 => 27,  114 => 25,  110 => 24,  103 => 22,  96 => 20,  92 => 19,  87 => 18,  82 => 15,  76 => 14,  68 => 12,  60 => 10,  57 => 9,  53 => 8,  48 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/d_quickcheckout.twig", "");
    }
}
