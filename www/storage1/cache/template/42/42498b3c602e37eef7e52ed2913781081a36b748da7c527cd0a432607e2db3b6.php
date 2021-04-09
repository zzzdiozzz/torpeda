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

/* extension/module/d_seo_module/dashboard.twig */
class __TwigTemplate_12563e59da2ee4ef3c4c9c5d65f842b77525a2c262991ce8c84c842e1887863c extends \Twig\Template
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
            echo ($context["href_dashboard"] ?? null);
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
        echo "\t\t\t\t<a href=\"";
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
\t\t\t</div>
\t\t\t<h1>";
        // line 19
        echo ($context["heading_title"] ?? null);
        echo " ";
        echo ($context["version"] ?? null);
        echo "</h1>
\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 22
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
        // line 24
        echo "\t\t\t</ul>
\t\t</div>
\t</div>
\t<div class=\"container-fluid\">
\t\t";
        // line 28
        if ((($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["error"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["warning"] ?? null) : null)) {
            // line 29
            echo "\t\t<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button> ";
            echo (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["error"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["warning"] ?? null) : null);
            echo "</div>
\t\t";
        }
        // line 31
        echo "\t\t";
        if (($context["success"] ?? null)) {
            // line 32
            echo "\t\t<div class=\"alert alert-success\"><i class=\"fa fa-exclamation-circle\"></i><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button> ";
            echo ($context["success"] ?? null);
            echo "</div>
\t\t";
        }
        // line 34
        echo "\t\t<div class=\"shopunity-widget-update\"></div>
\t\t";
        // line 35
        if (($context["d_seo_module_pack"] ?? null)) {
            // line 36
            echo "\t\t";
            echo (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["d_seo_module_pack"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["info"] ?? null) : null);
            echo "
\t\t";
        }
        // line 38
        echo "\t</div>
\t<div class=\"container-fluid ";
        // line 39
        if ((($context["d_shopunity"] ?? null) && ($context["d_seo_module_pack"] ?? null))) {
            echo "col-sm-9";
        }
        echo "\">
\t\t<div class=\"panel panel-default panel-resizable\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 42
        echo ($context["text_edit"] ?? null);
        echo "</h3>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t<a href=\"";
        // line 47
        echo ($context["href_dashboard"] ?? null);
        echo "\"><span class=\"fa fa-home\"></span> ";
        echo ($context["text_dashboard"] ?? null);
        echo "</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 50
        echo ($context["href_setting"] ?? null);
        echo "\"><span class=\"fa fa-cog\"></span> ";
        echo ($context["text_settings"] ?? null);
        echo "</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 53
        echo ($context["href_multi_store_field"] ?? null);
        echo "\"><span class=\"fa fa-list-alt\"></span> ";
        echo ($context["text_multi_store_fields"] ?? null);
        echo "</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 56
        echo ($context["href_target_keyword"] ?? null);
        echo "\"><span class=\"fa fa-key\"></span> ";
        echo ($context["text_target_keywords"] ?? null);
        echo "</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 59
        echo ($context["href_export_import"] ?? null);
        echo "\"><span class=\"fa fa-exchange\"></span> ";
        echo ($context["text_export_import"] ?? null);
        echo "</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 62
        echo ($context["href_instruction"] ?? null);
        echo "\"><span class=\"fa fa-graduation-cap\"></span> ";
        echo ($context["text_instructions"] ?? null);
        echo "</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t
\t\t\t\t<form action=\"";
        // line 66
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form\">
\t\t\t\t\t<div class=\"col-md-12 m-b-xl\">
\t\t\t\t\t\t";
        // line 68
        if (($context["control_extensions"] ?? null)) {
            // line 69
            echo "\t\t\t\t\t\t<div class=\"page-header\">
\t\t\t\t\t\t\t<h3><strong>";
            // line 70
            echo ($context["text_seo_extensions"] ?? null);
            echo "</strong> <span class=\"info-window-item\" data-href=\"https://opencartseomodule.com/seo-module-dashboard\"><i class=\"fa fa-question\"></i></span></h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"control-extensions\">
\t\t\t\t\t\t\t";
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["control_extensions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["control_extension"]) {
                // line 74
                echo "\t\t\t\t\t\t\t";
                if ((($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = $context["control_extension"]) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["installed"] ?? null) : null)) {
                    // line 75
                    echo "\t\t\t\t\t\t\t<div class=\"control-extension installed text-center\">
\t\t\t\t\t\t\t\t<img src=\"view/image/";
                    // line 76
                    echo (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = $context["control_extension"]) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["image"] ?? null) : null);
                    echo "\" title=\"";
                    echo (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = $context["control_extension"]) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["name"] ?? null) : null);
                    echo "\" alt=\"";
                    echo (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = $context["control_extension"]) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["name"] ?? null) : null);
                    echo "\" class=\"image\"/>
\t\t\t\t\t\t\t\t<h4 class=\"name m-b-md\">";
                    // line 77
                    echo (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = $context["control_extension"]) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["name"] ?? null) : null);
                    echo "</h4>
\t\t\t\t\t\t\t\t<a href=\"";
                    // line 78
                    echo (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = $context["control_extension"]) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760["href"] ?? null) : null);
                    echo "\" class=\"btn btn-primary\"><i class=\"fa fa-search\"></i> ";
                    echo ($context["button_view"] ?? null);
                    echo "</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                } else {
                    // line 81
                    echo "\t\t\t\t\t\t\t<div class=\"control-extension text-center\">
\t\t\t\t\t\t\t\t<img src=\"view/image/";
                    // line 82
                    echo (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = $context["control_extension"]) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce["image"] ?? null) : null);
                    echo "\" title=\"";
                    echo (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = $context["control_extension"]) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b["name"] ?? null) : null);
                    echo "\" alt=\"";
                    echo (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = $context["control_extension"]) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c["name"] ?? null) : null);
                    echo "\" class=\"image\"/>
\t\t\t\t\t\t\t\t<h4 class=\"name m-b-md\">";
                    // line 83
                    echo (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = $context["control_extension"]) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972["name"] ?? null) : null);
                    echo "</h4>
\t\t\t\t\t\t\t\t<a action=\"";
                    // line 84
                    echo (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = $context["control_extension"]) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216["install_href"] ?? null) : null);
                    echo "\" class=\"button-install btn btn-success\"><i class=\"fa fa-cog\"></i><i class=\"fa fa-refresh rotate hide\"></i> ";
                    echo ($context["button_install"] ?? null);
                    echo "</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                // line 87
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['control_extension'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "\t\t\t\t\t\t\t<br class=\"clear\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 91
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"table-responsive col-md-6\">
\t\t\t\t\t\t<table class=\"table table-bordered table-hover control-elements\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr class=\"fields\">
\t\t\t\t\t\t\t\t\t<td class=\"field\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"m-b-none\"><span class=\"fa fa-rocket\"></span> ";
        // line 97
        echo ($context["text_quick_setup"] ?? null);
        echo " <span class=\"info-window-item\" data-href=\"https://opencartseomodule.com/quick-setup\"><i class=\"fa fa-question\"></i></span></h4>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody class=\"control-elements\">
\t\t\t\t\t\t\t\t";
        // line 102
        if (($context["quick_setup_total"] ?? null)) {
            // line 103
            echo "\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["control_elements"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["control_element"]) {
                // line 104
                echo "\t\t\t\t\t\t\t\t";
                if (((($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = $context["control_element"]) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0["implemented"] ?? null) : null) == 0)) {
                    // line 105
                    echo "\t\t\t\t\t\t\t\t<tr class=\"control-element\">
\t\t\t\t\t\t\t\t\t<td class=\"field\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-3 text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<a action=\"";
                    // line 109
                    echo (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = $context["control_element"]) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c["edit_href"] ?? null) : null);
                    echo "\" confirm=\"";
                    echo (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = $context["control_element"]) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f["confirm"] ?? null) : null);
                    echo "\" class=\"button-edit btn btn-sm btn-success\"><i class=\"fa fa-cog\"></i><i class=\"fa fa-refresh rotate hide\"></i> ";
                    echo ($context["button_setup"] ?? null);
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-9\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"name m-b-sm\"><label class=\"control-label p-n text-left\"><span data-toggle=\"tooltip\" title=\"";
                    // line 112
                    echo (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = $context["control_element"]) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc["description"] ?? null) : null);
                    echo "\">";
                    echo (($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = $context["control_element"]) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55["name"] ?? null) : null);
                    echo "</span></label></h4>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"extension-name\">";
                    // line 113
                    echo (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = $context["control_element"]) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba["extension_name"] ?? null) : null);
                    echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 114
                    echo (($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = $context["control_element"]) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78["href"] ?? null) : null);
                    echo "\" target=\"_blank\" class=\"details\">";
                    echo ($context["text_details"] ?? null);
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t<br class=\"clear\"/>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
                }
                // line 121
                echo "\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['control_element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 122
            echo "\t\t\t\t\t\t\t\t";
        } else {
            // line 123
            echo "\t\t\t\t\t\t\t\t<tr class=\"control-element\">
\t\t\t\t\t\t\t\t\t<td class=\"field\">";
            // line 124
            echo ($context["text_no_control_elements"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
        }
        // line 127
        echo "\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"table-responsive col-md-6\">
\t\t\t\t\t\t<table class=\"table table-bordered table-hover control-elements\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr class=\"fields\">
\t\t\t\t\t\t\t\t\t<td class=\"field\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"m-b-none\"><span class=\"fa fa-refresh\"></span> ";
        // line 135
        echo ($context["text_implemented"] ?? null);
        echo "</h4>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t";
        // line 140
        if (($context["implemented_total"] ?? null)) {
            // line 141
            echo "\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["control_elements"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["control_element"]) {
                // line 142
                echo "\t\t\t\t\t\t\t\t";
                if (((($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = $context["control_element"]) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de["implemented"] ?? null) : null) == 1)) {
                    // line 143
                    echo "\t\t\t\t\t\t\t\t<tr class=\"control-element\">
\t\t\t\t\t\t\t\t\t<td class=\"field\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-3 text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<a action=\"";
                    // line 147
                    echo (($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = $context["control_element"]) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828["edit_href"] ?? null) : null);
                    echo "\" confirm=\"";
                    echo (($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = $context["control_element"]) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd["confirm"] ?? null) : null);
                    echo "\" class=\"button-edit btn btn-sm btn-primary\"><i class=\"fa fa-cog\"></i><i class=\"fa fa-refresh rotate hide\"></i> ";
                    echo ($context["button_reset"] ?? null);
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-9\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"name m-b-sm\"><label class=\"control-label p-n text-left\"><span data-toggle=\"tooltip\" title=\"";
                    // line 150
                    echo (($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = $context["control_element"]) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6["description"] ?? null) : null);
                    echo "\">";
                    echo (($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = $context["control_element"]) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855["name"] ?? null) : null);
                    echo "</span></label></h4>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"extension-name\">";
                    // line 151
                    echo (($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = $context["control_element"]) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b["extension_name"] ?? null) : null);
                    echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 152
                    echo (($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = $context["control_element"]) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f["href"] ?? null) : null);
                    echo "\" target=\"_blank\" class=\"details\">";
                    echo ($context["text_details"] ?? null);
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t<br class=\"clear\"/>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
                }
                // line 159
                echo "\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['control_element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 160
            echo "\t\t\t\t\t\t\t\t";
        } else {
            // line 161
            echo "\t\t\t\t\t\t\t\t<tr class=\"control-element\">
\t\t\t\t\t\t\t\t\t<td class=\"field\">";
            // line 162
            echo ($context["text_no_control_elements"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
        }
        // line 165
        echo "\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t\t<br class=\"clear\" />
\t\t\t\t<div class=\"p-lg text-center\">";
        // line 170
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
\t\t<br class=\"clear\" />
\t</div>
\t";
        // line 183
        if ((($context["d_shopunity"] ?? null) && ($context["d_seo_module_pack"] ?? null))) {
            // line 184
            echo "\t<div class=\"container-fluid col-sm-3\">
        <div class=\"shopunity-widget-seo-module-pack\"></div>
    </div>
\t<br class=\"clear\" />
\t";
        }
        // line 189
        echo "</div>
";
        // line 190
        if (($context["d_shopunity"] ?? null)) {
            // line 191
            echo "<script src=\"view/javascript/d_shopunity/d_shopunity_widget.js\" type=\"text/javascript\"></script>
<script type=\"text/javascript\">

var d_shopunity_widget_update = jQuery.extend(true, {}, d_shopunity_widget);
        
d_shopunity_widget_update.init({
    class: '.shopunity-widget-update',
    token: '";
            // line 198
            echo twig_last($this->env, twig_split_filter($this->env, ($context["url_token"] ?? null), "="));
            echo "',
    action: 'loadUpdate',
    extension_id: '";
            // line 200
            echo ($context["extension_id"] ?? null);
            echo "'
});

</script>
";
            // line 204
            if (($context["d_seo_module_pack"] ?? null)) {
                // line 205
                echo "<script type=\"text/javascript\">
    
var d_shopunity_widget_seo_module_pack = jQuery.extend(true, {}, d_shopunity_widget);

d_shopunity_widget_seo_module_pack.init({
    class: '.shopunity-widget-seo-module-pack',
    token: '";
                // line 211
                echo twig_last($this->env, twig_split_filter($this->env, ($context["url_token"] ?? null), "="));
                echo "',
    extension_id: '";
                // line 212
                echo (($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = ($context["d_seo_module_pack"] ?? null)) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0["extension_id"] ?? null) : null);
                echo "'
});

</script>
";
            }
        }
        // line 218
        echo "<script type=\"text/javascript\">

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

function refresh() {
\tvar url = 'index.php?route=";
        // line 257
        echo ($context["route"] ?? null);
        echo "/dashboard&";
        echo ($context["url_token"] ?? null);
        echo "&store_id=";
        echo ($context["store_id"] ?? null);
        echo "';
\t\t\t\t\t
\t\$('#form').load(url + ' #form >');
}

function showAlert(json) {
\t\$('.alert, .text-danger').remove();
\t\$('.form-group').removeClass('has-error');
\t\t\t\t\t\t
\tif (json['error']) {
\t\tif (json['error']['warning']) {
\t\t\t\$('#content > .container-fluid').first().prepend('<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button> ' + json['error']['warning'] + '</div>');
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
\t\t\$('#content > .container-fluid').first().prepend('<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button> ' + json['success'] + '</div>');
\t}
}

</script>
<script type=\"text/javascript\">

\$('body').on('click', '.button-install', function() {
\tvar button_install = \$(this);
\t
\t\$.ajax({
\t\ttype: 'post',
\t\turl: \$(this).attr('action'),
\t\tdata: '',
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\tbutton_install.children('.fa-refresh').removeClass('hide');
\t\t\tbutton_install.children('.fa-cog').addClass('hide');
\t\t},
\t\tcomplete: function() {
\t\t\tbutton_install.children('.fa-refresh').addClass('hide');
\t\t\tbutton_install.children('.fa-cog').removeClass('hide');
\t\t},
\t\tsuccess: function(json) {
\t\t\tshowAlert(json);
\t\t\t
\t\t\tif (json['success']) {
\t\t\t\trefresh();
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\tconsole.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
    });
});

\$('body').on('click', '.button-edit', function() {
\tvar button_edit = \$(this);
\tvar validate = false;
\t
\tif (\$(this).attr('confirm')) {
\t\tif (confirm(\$(this).attr('confirm'))) {
\t\t\tvalidate = true;
\t\t}
\t} else {
\t\tvalidate = true;
\t}
\t
\tif (validate) {
\t\t\$.ajax({
\t\t\ttype: 'post',
\t\t\turl: \$(this).attr('action'),
\t\t\tdata: '',
\t\t\tdataType: 'json',
\t\t\tbeforeSend: function() {
\t\t\t\tbutton_edit.children('.fa-refresh').removeClass('hide');
\t\t\t\tbutton_edit.children('.fa-cog').addClass('hide');
\t\t\t},
\t\t\tcomplete: function() {
\t\t\t\tbutton_edit.children('.fa-refresh').addClass('hide');
\t\t\t\tbutton_edit.children('.fa-cog').removeClass('hide');
\t\t\t},
\t\t\tsuccess: function(json) {
\t\t\t\tshowAlert(json);
\t\t\t
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
        // line 362
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/d_seo_module/dashboard.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  698 => 362,  586 => 257,  545 => 218,  536 => 212,  532 => 211,  524 => 205,  522 => 204,  515 => 200,  510 => 198,  501 => 191,  499 => 190,  496 => 189,  489 => 184,  487 => 183,  471 => 170,  464 => 165,  458 => 162,  455 => 161,  452 => 160,  446 => 159,  434 => 152,  430 => 151,  424 => 150,  414 => 147,  408 => 143,  405 => 142,  400 => 141,  398 => 140,  390 => 135,  380 => 127,  374 => 124,  371 => 123,  368 => 122,  362 => 121,  350 => 114,  346 => 113,  340 => 112,  330 => 109,  324 => 105,  321 => 104,  316 => 103,  314 => 102,  306 => 97,  298 => 91,  293 => 88,  287 => 87,  279 => 84,  275 => 83,  267 => 82,  264 => 81,  256 => 78,  252 => 77,  244 => 76,  241 => 75,  238 => 74,  234 => 73,  228 => 70,  225 => 69,  223 => 68,  218 => 66,  209 => 62,  201 => 59,  193 => 56,  185 => 53,  177 => 50,  169 => 47,  161 => 42,  153 => 39,  150 => 38,  144 => 36,  142 => 35,  139 => 34,  133 => 32,  130 => 31,  124 => 29,  122 => 28,  116 => 24,  105 => 22,  101 => 21,  94 => 19,  86 => 17,  82 => 15,  76 => 14,  68 => 12,  60 => 10,  57 => 9,  53 => 8,  48 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/d_seo_module/dashboard.twig", "");
    }
}
