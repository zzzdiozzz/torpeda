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

/* extension/module/d_seo_module/setting.twig */
class __TwigTemplate_99ce9e0bf8120afbfbea983947d4e06b27976b96b17b2ff83c2215b9af201523 extends \Twig\Template
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
\t<div class=\"page-header\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"form-inline pull-right\">
\t\t\t\t";
        // line 6
        if ((twig_length_filter($this->env, ($context["stores"] ?? null)) > 1)) {
            // line 7
            echo "\t\t\t\t<select class=\"form-control\" onChange=\"location='";
            echo ($context["href_setting"] ?? null);
            echo "&store_id='+\$(this).val()\">
\t\t\t\t";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                // line 9
                echo "\t\t\t\t";
                if (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["store"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["store_id"] ?? null) : null) == ($context["store_id"] ?? null))) {
                    // line 10
                    echo "\t\t\t\t\t<option value=\"";
                    echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["store"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["store_id"] ?? null) : null);
                    echo "\" selected=\"selected\">";
                    echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["store"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["name"] ?? null) : null);
                    echo "</option>
\t\t\t\t";
                } else {
                    // line 12
                    echo "\t\t\t\t\t<option value=\"";
                    echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["store"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["store_id"] ?? null) : null);
                    echo "\">";
                    echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["store"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["name"] ?? null) : null);
                    echo "</option>
\t\t\t\t";
                }
                // line 14
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "\t\t\t\t</select>
\t\t\t\t";
        }
        // line 17
        echo "\t\t\t\t<button id=\"button_save_and_stay\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_save_and_stay"] ?? null);
        echo "\" class=\"btn btn-success\"><i class=\"fa fa-save\"></i><i class=\"fa fa-refresh rotate hide\"></i></button>
\t\t\t\t<button id=\"button_save_and_exit\" data-toggle=\"tooltip\" title=\"";
        // line 18
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i><i class=\"fa fa-refresh rotate hide\"></i></button>
\t\t\t\t<a href=\"";
        // line 19
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
\t\t\t</div>
\t\t\t<h1>";
        // line 21
        echo ($context["heading_title"] ?? null);
        echo " ";
        echo ($context["version"] ?? null);
        echo "</h1>
\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 24
            echo "\t\t\t\t<li><a href=\"";
            echo (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["breadcrumb"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["href"] ?? null) : null);
            echo "\">";
            echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["breadcrumb"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["text"] ?? null) : null);
            echo "</a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "\t\t\t</ul>
\t\t</div>
\t</div>
\t<div class=\"container-fluid\">
\t\t";
        // line 30
        if ((($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["error"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["warning"] ?? null) : null)) {
            // line 31
            echo "\t\t<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button> ";
            echo (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["error"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["warning"] ?? null) : null);
            echo "</div>
\t\t";
        }
        // line 33
        echo "\t\t";
        if (($context["success"] ?? null)) {
            // line 34
            echo "\t\t<div class=\"alert alert-success\"><i class=\"fa fa-exclamation-circle\"></i><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button> ";
            echo ($context["success"] ?? null);
            echo "</div>
\t\t";
        }
        // line 36
        echo "\t\t<div class=\"panel panel-default panel-resizable\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 38
        echo ($context["text_edit"] ?? null);
        echo "</h3>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 43
        echo ($context["href_dashboard"] ?? null);
        echo "\"><span class=\"fa fa-home\"></span> ";
        echo ($context["text_dashboard"] ?? null);
        echo "</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t<a href=\"";
        // line 46
        echo ($context["href_setting"] ?? null);
        echo "\"><span class=\"fa fa-cog\"></span> ";
        echo ($context["text_settings"] ?? null);
        echo "</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 49
        echo ($context["href_multi_store_field"] ?? null);
        echo "\"><span class=\"fa fa-list-alt\"></span> ";
        echo ($context["text_multi_store_fields"] ?? null);
        echo "</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 52
        echo ($context["href_target_keyword"] ?? null);
        echo "\"><span class=\"fa fa-key\"></span> ";
        echo ($context["text_target_keywords"] ?? null);
        echo "</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 55
        echo ($context["href_export_import"] ?? null);
        echo "\"><span class=\"fa fa-exchange\"></span> ";
        echo ($context["text_export_import"] ?? null);
        echo "</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 58
        echo ($context["href_instruction"] ?? null);
        echo "\"><span class=\"fa fa-graduation-cap\"></span> ";
        echo ($context["text_instructions"] ?? null);
        echo "</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t
\t\t\t\t<form action=\"";
        // line 62
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form\" class=\"form-horizontal\">
\t\t\t\t\t<div class=\"flex row\">
\t\t\t\t\t\t<div class=\"flex col-sm-3\">
\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\">
\t\t\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t\t\t<a href=\"#vtab_basic_setting\" data-toggle=\"tab\"><span class=\"fa fa-cog\"></span> ";
        // line 67
        echo ($context["text_basic_settings"] ?? null);
        echo "</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#vtab_htaccess\" data-toggle=\"tab\"><span class=\"fa fa-file-text-o\"></span> ";
        // line 70
        echo ($context["text_htaccess"] ?? null);
        echo "</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#vtab_robots\" data-toggle=\"tab\"><span class=\"fa fa-file-code-o\"></span> ";
        // line 73
        echo ($context["text_robots"] ?? null);
        echo "</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t<div id=\"vtab_basic_setting\" class=\"tab-pane active\">
\t\t\t\t\t\t\t\t\t<div class=\"page-header\">
\t\t\t\t\t\t\t\t\t\t<h3><strong>";
        // line 81
        echo ($context["text_basic_settings"] ?? null);
        echo "</strong></h3>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-status\">";
        // line 84
        echo ($context["entry_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"module_";
        // line 86
        echo ($context["codename"] ?? null);
        echo "_status\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"module_";
        // line 87
        echo ($context["codename"] ?? null);
        echo "_status\" value=\"1\" class=\"switch\" data-label-text=\"";
        echo ($context["text_enabled"] ?? null);
        echo "\" ";
        if (($context["status"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-list-limit\">";
        // line 91
        echo ($context["entry_list_limit"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"module_";
        // line 93
        echo ($context["codename"] ?? null);
        echo "_setting[list_limit]\" value=\"";
        echo (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["setting"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["list_limit"] ?? null) : null);
        echo "\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-uninstall\">";
        // line 97
        echo ($context["entry_uninstall"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<a action=\"";
        // line 99
        echo ($context["uninstall"] ?? null);
        echo "\" id=\"button_uninstall\" class=\"btn btn-danger\"><i class=\"fa fa-trash\"></i><i class=\"fa fa-refresh rotate hide\"></i> ";
        echo ($context["button_uninstall"] ?? null);
        echo "</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div id=\"vtab_htaccess\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t<div class=\"page-header\">
\t\t\t\t\t\t\t\t\t\t<h3><strong>";
        // line 105
        echo ($context["text_htaccess"] ?? null);
        echo "</strong> <span class=\"info-window-item\" data-href=\"https://opencartseomodule.com/opencart-htaccess-editor\"><i class=\"fa fa-question\"></i></span></h3>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-status\">";
        // line 108
        echo ($context["entry_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"htaccess[status]\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"htaccess[status]\" value=\"1\" class=\"switch\" data-label-text=\"";
        // line 111
        echo ($context["text_enabled"] ?? null);
        echo "\" ";
        if ((($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["htaccess"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["status"] ?? null) : null)) {
            echo "checked=\"checked\"";
        }
        echo " />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9 col-sm-offset-3\">
\t\t\t\t\t\t\t\t\t\t\t<p><a href=\"";
        // line 116
        echo ($context["store_setting"] ?? null);
        echo "\" target=\"_blank\" class=\"btn btn-primary\"><i class=\"fa fa-cog fw\"></i> ";
        echo ($context["button_view_store_setting"] ?? null);
        echo "</a></p>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"bs-callout bs-callout-info\">";
        // line 117
        echo ($context["help_htaccess_setting"] ?? null);
        echo "</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-text\">";
        // line 121
        echo ($context["entry_text"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<p><textarea name=\"htaccess[text]\" class=\"form-control\" rows=\"20\">";
        // line 123
        echo (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["htaccess"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["text"] ?? null) : null);
        echo "</textarea></p>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"bs-callout bs-callout-info\">";
        // line 124
        echo ($context["help_htaccess_subfolder"] ?? null);
        echo "</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div id=\"vtab_robots\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t<div class=\"page-header\">
\t\t\t\t\t\t\t\t\t\t<h3><strong>";
        // line 130
        echo ($context["text_robots"] ?? null);
        echo "</strong> <span class=\"info-window-item\" data-href=\"https://opencartseomodule.com/robots-txt-editor\"><i class=\"fa fa-question\"></i></span></h3>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-status\">";
        // line 133
        echo ($context["entry_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"robots[status]\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"robots[status]\" value=\"1\" class=\"switch\" data-label-text=\"";
        // line 136
        echo ($context["text_enabled"] ?? null);
        echo "\" ";
        if ((($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["robots"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["status"] ?? null) : null)) {
            echo "checked=\"checked\"";
        }
        echo " />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-text\">";
        // line 140
        echo ($context["entry_text"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<p><textarea name=\"robots[text]\" class=\"form-control\" rows=\"20\">";
        // line 142
        echo (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["robots"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["text"] ?? null) : null);
        echo "</textarea></p>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"bs-callout bs-callout-info\">";
        // line 143
        echo ($context["help_robots"] ?? null);
        echo "</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t\t<div class=\"p-lg text-center\">";
        // line 151
        echo ($context["text_powered_by"] ?? null);
        echo "</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"info-window\">
\t\t\t<div class=\"info-window-wrap\">
\t\t\t\t<div class=\"info-window-block\">
\t\t\t\t\t<div class=\"info-window-close\"><i class=\"fa fa-close\"></i></div>
\t\t\t\t\t<div class=\"info-window-description\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<br class=\"clear\"/>
\t</div>
</div>
<script type=\"text/javascript\">

var info_window = {
\t'item' : new Array(),
\t'current_url' : ''
}
\t
\$.each(\$('.info-window-item'), function(key, value) {
\tvar url = \$(this).attr('data-href');
\t\t
\tif (url) {
\t\t\$.getJSON(url + '?format=json&callback=?', function(data) {
\t\t\tinfo_window.item[url] = data['description'];
\t\t});
\t}
});
\t
\$('.info-window-item').on('click', function() {
\tvar url = \$(this).attr('data-href');
\t
\tif (url == info_window.current_url) {
\t\tinfo_window.current_url = '';
\t\t\$('.info-window').removeClass('resized');
\t\t\$('.panel-resizable').removeClass('resized');
\t} else {
\t\tinfo_window.current_url = url;
\t\t\$('.info-window .info-window-description').html(info_window.item[url]);
\t\t\$('.panel-resizable').addClass('resized');
\t\t\$('.info-window').addClass('resized');
\t}
});
\t
\$('.info-window .info-window-close').on('click', function() {
\tinfo_window.current_url = '';
\t\$('.info-window').removeClass('resized');
\t\$('.panel-resizable').removeClass('resized');
});

\$('.switch').bootstrapSwitch({
    'onColor': 'success',
\t'labelWidth': '50',
    'onText': '";
        // line 206
        echo ($context["text_yes"] ?? null);
        echo "',
    'offText': '";
        // line 207
        echo ($context["text_no"] ?? null);
        echo "'
});

function showAlert(json) {
\t\$('.alert, .text-danger').remove();
\t\$('.form-group').removeClass('has-error');
\t\t\t\t\t\t
\tif (json['error']) {
\t\tif (json['error']['warning']) {
\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button> ' + json['error']['warning'] + '</div>');
\t\t}\t\t\t\t
\t\t\t\t
\t\tfor (i in json['error']) {
\t\t\tvar element = \$('#input_' + i);
\t\t\t\t\t
\t\t\tif (element.parent().hasClass('input-group')) {
                \$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t} else {
\t\t\t\t\$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t}
\t\t}\t\t\t\t
\t\t\t\t
\t\t\$('.text-danger').parents('.form-group').addClass('has-error');
\t}
\t\t\t
\tif (json['success']) {
\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button> ' + json['success'] + '</div>');
\t}
}
</script> 
<script type=\"text/javascript\">

\$('body').on('click', '#button_uninstall', function(event) {
\tif (confirm(\"";
        // line 240
        echo ($context["text_uninstall_confirm"] ?? null);
        echo "\")) {\t\t
\t\t\$.ajax({
\t\t\ttype: 'post',
\t\t\turl: \$(this).attr('action'),
\t\t\tdata: '',
\t\t\tdataType: 'json',
\t\t\tbeforeSend: function() {
\t\t\t\t\$('#button_uninstall .fa-refresh').removeClass('hide');
\t\t\t\t\$('#button_uninstall .fa-trash').addClass('hide');
\t\t\t},
\t\t\tcomplete: function() {
\t\t\t\t\$('#button_uninstall .fa-refresh').addClass('hide');
\t\t\t\t\$('#button_uninstall .fa-trash').removeClass('hide');
\t\t\t},
\t\t\tsuccess: function(json) {
\t\t\t\tshowAlert(json);
\t\t\t\t
\t\t\t\tif (json['success']) {
\t\t\t\t\tlocation = '";
        // line 258
        echo twig_replace_filter(($context["module_link"] ?? null), ["&amp;" => "&"]);
        echo "';
\t\t\t\t}
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\tconsole.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});  
\t}
});

\$('body').on('click', '#button_save_and_stay', function() {
    \$.ajax({
\t\ttype: 'post',
\t\turl: \$('#form').attr('action'),
\t\tdata: \$('#form').serialize(),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button_save_and_stay .fa-refresh').removeClass('hide');
\t\t\t\$('#button_save_and_stay .fa-save').addClass('hide');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button_save_and_stay .fa-refresh').addClass('hide');
\t\t\t\$('#button_save_and_stay .fa-save').removeClass('hide');
\t\t},
\t\tsuccess: function(json) {
\t\t\tshowAlert(json);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\tconsole.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
    });  
});
\t
\$('body').on('click', '#button_save_and_exit', function() {
    \$.ajax({
\t\ttype: 'post',
\t\turl: \$('#form').attr('action'),
\t\tdata: \$('#form').serialize(),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button_save_and_exit .fa-refresh').removeClass('hide');
\t\t\t\$('#button_save_and_exit .fa-save').addClass('hide');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button_save_and_exit .fa-refresh').addClass('hide');
\t\t\t\$('#button_save_and_exit .fa-save').removeClass('hide');
\t\t},
\t\tsuccess: function(json) {
\t\t\tshowAlert(json);
\t\t\t
\t\t\tif (json['success']) {
\t\t\t\tlocation = '";
        // line 309
        echo twig_replace_filter(($context["cancel"] ?? null), ["&amp;" => "&"]);
        echo "';
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\tconsole.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
    });  
});

</script>
";
        // line 319
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/d_seo_module/setting.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  581 => 319,  568 => 309,  514 => 258,  493 => 240,  457 => 207,  453 => 206,  395 => 151,  384 => 143,  380 => 142,  375 => 140,  364 => 136,  358 => 133,  352 => 130,  343 => 124,  339 => 123,  334 => 121,  327 => 117,  321 => 116,  309 => 111,  303 => 108,  297 => 105,  286 => 99,  281 => 97,  272 => 93,  267 => 91,  254 => 87,  250 => 86,  245 => 84,  239 => 81,  228 => 73,  222 => 70,  216 => 67,  208 => 62,  199 => 58,  191 => 55,  183 => 52,  175 => 49,  167 => 46,  159 => 43,  151 => 38,  147 => 36,  141 => 34,  138 => 33,  132 => 31,  130 => 30,  124 => 26,  113 => 24,  109 => 23,  102 => 21,  95 => 19,  91 => 18,  86 => 17,  82 => 15,  76 => 14,  68 => 12,  60 => 10,  57 => 9,  53 => 8,  48 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/d_seo_module/setting.twig", "");
    }
}
