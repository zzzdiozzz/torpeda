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

/* extension/module/d_seo_module/target_keyword.twig */
class __TwigTemplate_da5327ca14bbc92d5ab8301d86b9c023481e5e98cbc7480d9bb8596a729f9b17 extends \Twig\Template
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
            echo ($context["store_url"] ?? null);
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
        echo "\t\t\t\t";
        if ((($context["sheet_code"] ?? null) == "custom_page")) {
            // line 18
            echo "\t\t\t\t<button id=\"button_create_default_target_elements\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_create_default_target_keywords"] ?? null);
            echo "\" class=\"btn btn-success\"><i class=\"fa fa-cogs\"></i></button>
\t\t\t\t";
        }
        // line 20
        echo "\t\t\t\t<button id=\"button_add\" type=\"button\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add_target_keyword"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></button>
\t\t\t\t<button id=\"button_delete\" type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 21
        echo ($context["button_delete_target_keywords"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-trash-o\"></i></button>
\t\t\t\t<a href=\"";
        // line 22
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
\t\t\t</div>
\t\t\t<h1>";
        // line 24
        echo ($context["heading_title"] ?? null);
        echo " ";
        echo ($context["version"] ?? null);
        echo "</h1>
\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 27
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
        // line 29
        echo "\t\t\t</ul>
\t\t</div>
\t</div>
\t<div class=\"container-fluid\">
\t\t";
        // line 33
        if ((($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["error"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["warning"] ?? null) : null)) {
            // line 34
            echo "\t\t<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button> ";
            echo (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["error"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["warning"] ?? null) : null);
            echo "</div>
\t\t";
        }
        // line 36
        echo "\t\t";
        if (($context["success"] ?? null)) {
            // line 37
            echo "\t\t<div class=\"alert alert-success\"><i class=\"fa fa-exclamation-circle\"></i><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button> ";
            echo ($context["success"] ?? null);
            echo "</div>
\t\t";
        }
        // line 39
        echo "\t\t<div class=\"panel panel-default panel-resizable\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 41
        echo ($context["text_edit"] ?? null);
        echo "</h3>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 46
        echo ($context["href_dashboard"] ?? null);
        echo "\"><span class=\"fa fa-home\"></span> ";
        echo ($context["text_dashboard"] ?? null);
        echo "</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 49
        echo ($context["href_setting"] ?? null);
        echo "\"><span class=\"fa fa-cog\"></span> ";
        echo ($context["text_settings"] ?? null);
        echo "</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 52
        echo ($context["href_multi_store_field"] ?? null);
        echo "\"><span class=\"fa fa-list-alt\"></span> ";
        echo ($context["text_multi_store_fields"] ?? null);
        echo "</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t<a href=\"";
        // line 55
        echo ($context["href_target_keyword"] ?? null);
        echo "\"><span class=\"fa fa-key\"></span> ";
        echo ($context["text_target_keywords"] ?? null);
        echo "</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 58
        echo ($context["href_export_import"] ?? null);
        echo "\"><span class=\"fa fa-exchange\"></span> ";
        echo ($context["text_export_import"] ?? null);
        echo "</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 61
        echo ($context["href_instruction"] ?? null);
        echo "\"><span class=\"fa fa-graduation-cap\"></span> ";
        echo ($context["text_instructions"] ?? null);
        echo "</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t
\t\t\t\t<div class=\"page-header\">
\t\t\t\t\t<h3><strong>";
        // line 66
        echo ($context["text_target_keywords"] ?? null);
        echo "</strong> <span class=\"info-window-item\" data-href=\"https://opencartseomodule.com/target-keyword-planner\"><i class=\"fa fa-question\"></i></span></h3>
\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t<ul class=\"nav nav-pills\">
\t\t\t\t";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sheets"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["sheet"]) {
            echo " 
\t\t\t\t\t<li ";
            // line 71
            if (((($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["sheet"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["code"] ?? null) : null) == ($context["sheet_code"] ?? null))) {
                echo " class=\"active\" ";
            }
            echo ">
\t\t\t\t\t\t<a href=\"";
            // line 72
            echo (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = $context["sheet"]) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["url"] ?? null) : null);
            echo "\"><span class=\"fa ";
            echo (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = $context["sheet"]) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["icon"] ?? null) : null);
            echo "\"></span> ";
            echo (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = $context["sheet"]) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["name"] ?? null) : null);
            echo "</a>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sheet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "\t\t\t\t</ul>
\t\t\t\t
\t\t\t\t<div class=\"page-header\">
\t\t\t\t\t<a id=\"button_filter\" class=\"btn btn-primary pull-right\"><i class=\"fa fa-search\"></i> ";
        // line 78
        echo ($context["button_filter"] ?? null);
        echo "</a>
\t\t\t\t\t";
        // line 79
        if (($context["filter"] ?? null)) {
            // line 80
            echo "\t\t\t\t\t<a id=\"button_clear_filter\" class=\"btn btn-danger pull-right m-r-sm\"><i class=\"fa fa-remove\"></i> ";
            echo ($context["button_clear_filter"] ?? null);
            echo "</a>
\t\t\t\t\t";
        }
        // line 82
        echo "\t\t\t\t\t<br class=\"clear\"/>
\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t<form method=\"post\" enctype=\"multipart/form-data\" id=\"form\" class=\"form-horizontal\">
\t\t\t\t\t<input type=\"hidden\" name=\"clear_filter\" value=\"\" id=\"clear_filter\"/>
\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t<table class=\"table table-bordered table-hover\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked).trigger('change');\" /></td>
\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 92
        echo ($context["column_route"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 94
            echo "\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
            echo ($context["column_target_keyword"] ?? null);
            echo "(";
            echo (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = $context["language"]) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["code"] ?? null) : null);
            echo ")</td>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><input type=\"text\" name=\"filter[route]\" value=\"";
        // line 101
        echo (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = ($context["filter"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["route"] ?? null) : null);
        echo "\" class=\"form-control\"/></td>
\t\t\t\t\t\t\t\t\t";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 103
            echo "\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><input type=\"text\" name=\"filter[target_keyword][";
            echo (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = $context["language"]) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760["language_id"] ?? null) : null);
            echo "]\" value=\"";
            echo (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = ($context["filter"] ?? null)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b["target_keyword"] ?? null) : null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce[(($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = $context["language"]) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c["language_id"] ?? null) : null)] ?? null) : null);
            echo "\" class=\"form-control\"/></td>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
        // line 106
        if (($context["target_elements"] ?? null)) {
            // line 107
            echo "\t\t\t\t\t\t\t\t";
            $context["target_element_row"] = 0;
            // line 108
            echo "\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["target_elements"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["target_element"]) {
                // line 109
                echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"target-element-cell text-left\">
\t\t\t\t\t\t\t\t\t";
                // line 111
                if (twig_in_filter((($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = $context["target_element"]) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972["route"] ?? null) : null), ($context["selected"] ?? null))) {
                    // line 112
                    echo "\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = $context["target_element"]) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216["route"] ?? null) : null);
                    echo "\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 114
                    echo "\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = $context["target_element"]) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0["route"] ?? null) : null);
                    echo "\" />
\t\t\t\t\t\t\t\t\t";
                }
                // line 116
                echo "\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"target-element-cell text-left\">
\t\t\t\t\t\t\t\t\t\t<div class=\"target-field\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 119
                if ((($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = $context["target_element"]) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c["link"] ?? null) : null)) {
                    // line 120
                    echo "\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = $context["target_element"]) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f["link"] ?? null) : null);
                    echo "\" target=\"_blank\"><span class=\"text-field\">";
                    echo (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = $context["target_element"]) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc["route"] ?? null) : null);
                    echo "</span></a>
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 122
                    echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-field\">";
                    echo (($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = $context["target_element"]) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55["route"] ?? null) : null);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 124
                echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t";
                // line 126
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 127
                    echo "\t\t\t\t\t\t\t\t\t<td class=\"target-element-cell text-left\">
\t\t\t\t\t\t\t\t\t\t<div id=\"target_element_";
                    // line 128
                    echo ($context["target_element_row"] ?? null);
                    echo "_target_keyword_";
                    echo (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = $context["language"]) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba["language_id"] ?? null) : null);
                    echo "\" class=\"target-element-field\" route=\"";
                    echo (($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = $context["target_element"]) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78["route"] ?? null) : null);
                    echo "\" language_id=\"";
                    echo (($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = $context["language"]) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de["language_id"] ?? null) : null);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-field\">";
                    // line 129
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = (($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = $context["target_element"]) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd["target_keyword"] ?? null) : null)) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828[(($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = $context["language"]) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6["language_id"] ?? null) : null)] ?? null) : null));
                    foreach ($context['_seq'] as $context["sort_order"] => $context["keyword"]) {
                        if ((($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = (($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = (($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = $context["target_element"]) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f["target_keyword_duplicate"] ?? null) : null)) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b[(($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = $context["language"]) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0["language_id"] ?? null) : null)] ?? null) : null)) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855[$context["sort_order"]] ?? null) : null)) {
                            echo "<span class=\"text-danger\">[";
                            echo $context["keyword"];
                            echo "]</span>";
                        } else {
                            echo "<span>[";
                            echo $context["keyword"];
                            echo "]</span>";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['sort_order'], $context['keyword'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t<textarea class=\"input-field form-control hide\">";
                    // line 130
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 = (($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a = $context["target_element"]) && is_array($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a) || $__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a instanceof ArrayAccess ? ($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a["target_keyword"] ?? null) : null)) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55[(($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 = $context["language"]) && is_array($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88) || $__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 instanceof ArrayAccess ? ($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88["language_id"] ?? null) : null)] ?? null) : null));
                    foreach ($context['_seq'] as $context["sort_order"] => $context["keyword"]) {
                        echo "[";
                        echo $context["keyword"];
                        echo "]";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['sort_order'], $context['keyword'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "</textarea>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 133
                echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
                // line 135
                $context["target_element_row"] = (($context["target_element_row"] ?? null) + 1);
                // line 136
                echo "\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['target_element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 137
            echo "\t\t\t\t\t\t\t\t";
        } else {
            // line 138
            echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"text-center\" colspan=\"";
            // line 139
            echo (twig_length_filter($this->env, ($context["languages"] ?? null)) + 2);
            echo "\">";
            echo ($context["text_no_results"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
        }
        // line 142
        echo "\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row m-t-lg m-b-lg\">
\t\t\t\t\t\t<div class=\"col-sm-6 text-left\">";
        // line 146
        echo ($context["pagination"] ?? null);
        echo "</div>
\t\t\t\t\t\t<div class=\"col-sm-6 text-right\">";
        // line 147
        echo ($context["results"] ?? null);
        echo "</div>
\t\t\t\t\t</div>\t
\t\t\t\t</form>
\t\t\t\t<div class=\"p-lg text-center\">";
        // line 150
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

update();

function update() {
\t\$('[name^=\\'selected\\']').on('change', function() {
\t\t\$('#button_delete').prop('disabled', true);
\t
\t\tvar selected = \$('[name^=\\'selected\\']:checked');
\t\t
\t\tif (selected.length) {
\t\t\t\$('#button_delete').prop('disabled', false);
\t\t}
\t});

\t\$('[name^=\\'selected\\']:first').trigger('change');
}

function refresh() {
\tvar url = 'index.php?route=";
        // line 219
        echo ($context["route"] ?? null);
        echo "/target_keyword&";
        echo ($context["url_token"] ?? null);
        echo "&store_id=";
        echo ($context["store_id"] ?? null);
        echo "';
\t
\tvar sheet_code = '";
        // line 221
        echo ($context["sheet_code"] ?? null);
        echo "';\t
\t
\tif (sheet_code) {
\t\turl += '&sheet_code=' + encodeURIComponent(sheet_code);
\t}
\t
\tvar page = '";
        // line 227
        echo ($context["page"] ?? null);
        echo "';\t
\t
\tif (page) {
\t\turl += '&page=' + encodeURIComponent(page);
\t}
\t\t\t\t
\t\$(\"#form\").load(url + ' #form >', function() {
\t\tupdate();
\t});
}

function showAlert(json) {
\t\$('.alert').remove();
\t\$('.form-group').removeClass('has-error');
\t\t\t\t\t\t
\tif (json['error']) {
\t\tif (json['error']['warning']) {
\t\t\tif (\$('#modal-dialog').length > 0) {
\t\t\t\t\$('#modal-dialog .modal-body').prepend('<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button> ' + json['error']['warning'] + '</div>');
\t\t\t} else {
\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button> ' + json['error']['warning'] + '</div>');
\t\t\t}
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

\$('body').on('click', '#button_filter', function() {
\t\$('#form').submit();
});

\$('body').on('click', '#button_clear_filter', function() {
\t\$('#clear_filter').val('1');
\t\$('#form').submit();
});

\$('body').on('click', '.target-element-cell', function() {
\tvar target_element = \$(this).children('.target-element-field');
\t\t
\tif (\$(target_element).children('.input-field').hasClass('hide') && (\$(target_element).children('.input-field').attr('type') != 'hidden')) {
\t\t\$('.popover').popover('hide', function() {
\t\t\t\$('.popover').remove();
\t\t});
\t
\t\t\$('.text-field').removeClass('hide');
\t\t\$('.input-field').addClass('hide');

\t\t\$(target_element).popover({
\t\t\thtml: true,
\t\t\tplacement: 'top',
\t\t\ttrigger: 'manual',
\t\t\tcontent: function() {
\t\t\t\treturn '<button type=\"button\" id=\"button_save\" class=\"btn btn-primary\" target_element_field_id=\"' + target_element.attr('id') + '\"><i class=\"fa fa-save\"></i></button> <button type=\"button\" id=\"button_cancel\" class=\"btn btn-danger\" target_element_field_id=\"' + target_element.attr('id') + '\"><i class=\"fa fa-remove\"></i></button>';
\t\t\t}
\t\t});

\t\t\$(target_element).popover('show');
\t
\t\t\$(target_element).children('.text-field').addClass('hide');
\t\t\$(target_element).children('.input-field').removeClass('hide');
\t}
});

\$('body').on('click', '#button_save', function() {
\tvar target_element = \$('#' + \$(this).attr('target_element_field_id'));
\tvar route = \$(target_element).attr('route');
\tvar language_id = \$(target_element).attr('language_id');
\tvar target_keyword = \$(target_element).children('.input-field').val();
\t\t
\t\$.ajax({
\t\turl: 'index.php?route=";
        // line 314
        echo ($context["route"] ?? null);
        echo "/editTargetElement&";
        echo ($context["url_token"] ?? null);
        echo "&store_id=";
        echo ($context["store_id"] ?? null);
        echo "',
\t\ttype: 'post',
\t\tdata: 'route=' + route + '&language_id=' + language_id + '&target_keyword=' + encodeURIComponent(target_keyword),
\t\tdataType: 'json',
\t\tsuccess: function(json) {
\t\t\tshowAlert(json);
\t\t\t\t\t\t
\t\t\t\$(target_element).popover('hide', function() {
\t\t\t\t\$('.popover').remove();
\t\t\t});
\t\t\t
\t\t\tsetTimeout(function() {
\t\t\t\tif (json['error'].length == 0) {
\t\t\t\t\t\$(target_element).children('.text-field').text(\$(target_element).children('.input-field').val());
\t\t\t\t\trefresh();
\t\t\t\t} else {
\t\t\t\t\t\$(target_element).children('.input-field').val(\$(target_element).children('.text-field').text().replace(/<.*?>/g, ''));
\t\t\t\t}
\t\t\t\t
\t\t\t\t\$(target_element).children('.text-field').removeClass('hide');
\t\t\t\t\$(target_element).children('.input-field').addClass('hide');
\t\t\t}, 200);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\tconsole.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});
\t\t
\$('body').on('click', '#button_cancel', function() {
\tvar target_element = \$('#' + \$(this).attr('target_element_field_id'));
\t\t
\t\$(target_element).popover('hide', function() {
\t\t\$('.popover').remove();
\t});
\t\t\t
\tsetTimeout(function() {
\t\t\$(target_element).children('.input-field').val(\$(target_element).children('.text-field').text().replace(/<.*?>/g, ''));
\t\t\$(target_element).children('.text-field').removeClass('hide');
\t\t\$(target_element).children('.input-field').addClass('hide');
\t}, 200);
});

\$('body').on('click', '#button_create_default_target_elements', function() {
\tif (confirm(\"";
        // line 358
        echo ($context["text_create_default_target_keywords_confirm"] ?? null);
        echo "\")) {\t
\t\t\$.ajax({
\t\t\turl: 'index.php?route=";
        // line 360
        echo ($context["route"] ?? null);
        echo "/createDefaultTargetElements&";
        echo ($context["url_token"] ?? null);
        echo "&store_id=";
        echo ($context["store_id"] ?? null);
        echo "',
\t\t\ttype: 'post',
\t\t\tdata: '',
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tshowAlert(json);
\t\t\t\t
\t\t\t\tif (json['success']) {
\t\t\t\t\t\$('#modal-dialog').modal('hide');
\t\t\t\t\trefresh();
\t\t\t\t}
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\tconsole.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t}
});

\$('body').on('click', '#button_add', function() {
\tmodal_html  = '<div id=\"modal-dialog\" class=\"modal\"><div class=\"modal-dialog modal-lg\"><div class=\"modal-content\"><div class=\"modal-header\"><button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">X</button><h4 class=\"modal-title\">";
        // line 380
        echo ($context["text_add_target_keyword"] ?? null);
        echo "</h4></div>';
\tmodal_html += '<div class=\"modal-body\"><div class=\"form-horizontal\">';
\tmodal_html += '<div class=\"row\"><label class=\"col-sm-3 control-label\" for=\"input-custom-page-route\">";
        // line 382
        echo ($context["entry_route"] ?? null);
        echo "</label><div class=\"col-sm-9\"><input type=\"text\" name=\"target_element[route]\" value=\"\" id=\"input_target_element_route\" class=\"form-control\"/></div></div><br/>';
\tmodal_html += '<div class=\"row\"><label class=\"col-sm-3 control-label\" for=\"input-custom-page-seo-keyword\">";
        // line 383
        echo ($context["entry_target_keyword"] ?? null);
        echo "</label><div class=\"col-sm-9\">';
\t";
        // line 384
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 385
            echo "\tmodal_html += '<div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"";
            echo (($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 = $context["language"]) && is_array($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758) || $__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 instanceof ArrayAccess ? ($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758["flag"] ?? null) : null);
            echo "\" title=\"";
            echo (($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 = $context["language"]) && is_array($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35) || $__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 instanceof ArrayAccess ? ($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35["name"] ?? null) : null);
            echo "\"></span><textarea name=\"target_element[target_keyword][";
            echo (($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b = $context["language"]) && is_array($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b) || $__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b instanceof ArrayAccess ? ($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b["language_id"] ?? null) : null);
            echo "]\" id=\"input_target_element_target_keyword_";
            echo (($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae = $context["language"]) && is_array($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae) || $__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae instanceof ArrayAccess ? ($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae["language_id"] ?? null) : null);
            echo "\" class=\"form-control\"></textarea></div>';
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 387
        echo "\tmodal_html += '</div></div>';\t\t
\tmodal_html += '</div></div>';\t\t
\tmodal_html += '<div class=\"modal-footer\"><button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 389
        echo ($context["button_add_target_keyword"] ?? null);
        echo "\"  id=\"button_add_target_element\" class=\"btn btn-primary\">";
        echo ($context["button_add_target_keyword"] ?? null);
        echo "</button></div>';\t\t
\tmodal_html += '</div></div></div>';
\t\t
\t\$('#modal-dialog').remove();
\t\t
\t\$('body').append(modal_html);
\t\t
\t\$('#modal-dialog').modal('show');
});

\$('body').on('click', '#button_add_target_element', function() {
\t\$.ajax({
\t\ttype: 'post',
\t\turl: 'index.php?route=";
        // line 402
        echo ($context["route"] ?? null);
        echo "/addTargetElement&";
        echo ($context["url_token"] ?? null);
        echo "&store_id=";
        echo ($context["store_id"] ?? null);
        echo "',
\t\tdata: \$('[name^=\"target_element\"]'),
\t\tdataType: 'json',
\t\tsuccess: function(json) {
\t\t\tshowAlert(json);
\t\t\t
\t\t\tif (json['success']) {
\t\t\t\t\$('#modal-dialog').modal('hide');
\t\t\t\trefresh();
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\tconsole.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});  
});

\$('body').on('click', '#button_delete', function() {
\tif (confirm('";
        // line 420
        echo ($context["text_delete_target_keywords_confirm"] ?? null);
        echo "')) {
\t\t\$.ajax({
\t\t\ttype: 'post',
\t\t\turl: 'index.php?route=";
        // line 423
        echo ($context["route"] ?? null);
        echo "/deleteTargetElements&";
        echo ($context["url_token"] ?? null);
        echo "&store_id=";
        echo ($context["store_id"] ?? null);
        echo "',
\t\t\tdata: \$('#form').serialize(),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tshowAlert(json);
\t\t\t\t
\t\t\t\tif (json['success']) {
\t\t\t\t\trefresh();
\t\t\t\t}
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\tconsole.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});  
\t}
});

</script>
";
        // line 441
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/d_seo_module/target_keyword.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  850 => 441,  825 => 423,  819 => 420,  794 => 402,  776 => 389,  772 => 387,  757 => 385,  753 => 384,  749 => 383,  745 => 382,  740 => 380,  713 => 360,  708 => 358,  657 => 314,  567 => 227,  558 => 221,  549 => 219,  477 => 150,  471 => 147,  467 => 146,  461 => 142,  453 => 139,  450 => 138,  447 => 137,  441 => 136,  439 => 135,  435 => 133,  416 => 130,  397 => 129,  387 => 128,  384 => 127,  380 => 126,  376 => 124,  370 => 122,  362 => 120,  360 => 119,  355 => 116,  349 => 114,  343 => 112,  341 => 111,  337 => 109,  332 => 108,  329 => 107,  327 => 106,  324 => 105,  313 => 103,  309 => 102,  305 => 101,  298 => 96,  287 => 94,  283 => 93,  279 => 92,  267 => 82,  261 => 80,  259 => 79,  255 => 78,  250 => 75,  237 => 72,  231 => 71,  225 => 70,  218 => 66,  208 => 61,  200 => 58,  192 => 55,  184 => 52,  176 => 49,  168 => 46,  160 => 41,  156 => 39,  150 => 37,  147 => 36,  141 => 34,  139 => 33,  133 => 29,  122 => 27,  118 => 26,  111 => 24,  104 => 22,  100 => 21,  95 => 20,  89 => 18,  86 => 17,  82 => 15,  76 => 14,  68 => 12,  60 => 10,  57 => 9,  53 => 8,  48 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/d_seo_module/target_keyword.twig", "");
    }
}
