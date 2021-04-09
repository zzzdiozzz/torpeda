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

/* extension/module/d_seo_module/multi_store_field.twig */
class __TwigTemplate_9fdf30722c5103ff33c59ae238975f45fac1b854d38d5c29a98a4f905e959a60 extends \Twig\Template
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
\t\t\t\t<button id=\"button_save_and_stay\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save_and_stay"] ?? null);
        echo "\" class=\"btn btn-success\"><i class=\"fa fa-save\"></i><i class=\"fa fa-refresh rotate hide\"></i></button>
\t\t\t\t<button id=\"button_save_and_exit\" data-toggle=\"tooltip\" title=\"";
        // line 7
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i><i class=\"fa fa-refresh rotate hide\"></i></button>
\t\t\t\t<a href=\"";
        // line 8
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
\t\t\t</div>
\t\t\t<h1>";
        // line 10
        echo ($context["heading_title"] ?? null);
        echo " ";
        echo ($context["version"] ?? null);
        echo "</h1>
\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 13
            echo "\t\t\t\t<li><a href=\"";
            echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["breadcrumb"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["href"] ?? null) : null);
            echo "\">";
            echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["breadcrumb"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["text"] ?? null) : null);
            echo "</a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "\t\t\t</ul>
\t\t</div>
\t</div>
\t<div class=\"container-fluid\">
\t\t";
        // line 19
        if ((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["error"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["warning"] ?? null) : null)) {
            // line 20
            echo "\t\t<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button> ";
            echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["error"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["warning"] ?? null) : null);
            echo "</div>
\t\t";
        }
        // line 22
        echo "\t\t";
        if (($context["success"] ?? null)) {
            // line 23
            echo "\t\t<div class=\"alert alert-success\"><i class=\"fa fa-exclamation-circle\"></i><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button> ";
            echo ($context["success"] ?? null);
            echo "</div>
\t\t";
        }
        // line 25
        echo "\t\t<div class=\"panel panel-default panel-resizable\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 27
        echo ($context["text_edit"] ?? null);
        echo "</h3>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 32
        echo ($context["href_dashboard"] ?? null);
        echo "\"><span class=\"fa fa-home\"></span> ";
        echo ($context["text_dashboard"] ?? null);
        echo "</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 35
        echo ($context["href_setting"] ?? null);
        echo "\"><span class=\"fa fa-cog\"></span> ";
        echo ($context["text_settings"] ?? null);
        echo "</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t<a href=\"";
        // line 38
        echo ($context["href_multi_store_field"] ?? null);
        echo "\"><span class=\"fa fa-list-alt\"></span> ";
        echo ($context["text_multi_store_fields"] ?? null);
        echo "</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 41
        echo ($context["href_target_keyword"] ?? null);
        echo "\"><span class=\"fa fa-key\"></span> ";
        echo ($context["text_target_keywords"] ?? null);
        echo "</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 44
        echo ($context["href_export_import"] ?? null);
        echo "\"><span class=\"fa fa-exchange\"></span> ";
        echo ($context["text_export_import"] ?? null);
        echo "</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 47
        echo ($context["href_instruction"] ?? null);
        echo "\"><span class=\"fa fa-graduation-cap\"></span> ";
        echo ($context["text_instructions"] ?? null);
        echo "</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t
\t\t\t\t<form action=\"";
        // line 51
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form\" class=\"form-horizontal\">
\t\t\t\t\t<div class=\"flex row\">
\t\t\t\t\t\t<div class=\"flex col-sm-3\">
\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\">
\t\t\t\t\t\t\t\t";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["field_setting"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["sheet"] ?? null) : null));
        foreach ($context['_seq'] as $context["_key"] => $context["sheet"]) {
            // line 56
            echo "\t\t\t\t\t\t\t\t<li ";
            if (($context["sheet"] == twig_first($this->env, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["field_setting"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["sheet"] ?? null) : null)))) {
                echo "class=\"active\"";
            }
            echo ">
\t\t\t\t\t\t\t\t\t<a href=\"#vtab_";
            // line 57
            echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["sheet"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["code"] ?? null) : null);
            echo "\" data-toggle=\"tab\"><span class=\"fa ";
            echo (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["sheet"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["icon"] ?? null) : null);
            echo "\"></span> ";
            echo (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = $context["sheet"]) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["name"] ?? null) : null);
            echo "</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sheet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["field_setting"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["sheet"] ?? null) : null));
        foreach ($context['_seq'] as $context["_key"] => $context["sheet"]) {
            // line 65
            echo "\t\t\t\t\t\t\t\t<div id=\"vtab_";
            echo (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = $context["sheet"]) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["code"] ?? null) : null);
            echo "\" class=\"tab-pane ";
            if (($context["sheet"] == twig_first($this->env, (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["field_setting"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["sheet"] ?? null) : null)))) {
                echo "active";
            }
            echo "\">
\t\t\t\t\t\t\t\t\t<div class=\"page-header\">
\t\t\t\t\t\t\t\t\t\t<h3><strong>";
            // line 67
            echo (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = $context["sheet"]) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["name"] ?? null) : null);
            echo "</strong></h3>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t\t<table class=\"table table-bordered table-hover m-b-none\">
\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
            // line 73
            echo ($context["column_field"] ?? null);
            echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
            // line 74
            echo ($context["column_multi_store_status"] ?? null);
            echo " <span class=\"info-window-item\" data-href=\"https://opencartseomodule.com/multistore-seo-support\"><i class=\"fa fa-question\"></i></span></th>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 78
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = $context["sheet"]) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["field"] ?? null) : null));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 79
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                if ((($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = $context["field"]) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["multi_store"] ?? null) : null)) {
                    // line 80
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\"><label class=\"control-label p-n\">";
                    // line 81
                    echo (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = $context["field"]) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760["name"] ?? null) : null);
                    echo "</label></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"module_";
                    // line 83
                    echo ($context["codename"] ?? null);
                    echo "_field_setting[sheet][";
                    echo (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = $context["sheet"]) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce["code"] ?? null) : null);
                    echo "][field][";
                    echo (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = $context["field"]) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b["code"] ?? null) : null);
                    echo "][multi_store_status]\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"module_";
                    // line 84
                    echo ($context["codename"] ?? null);
                    echo "_field_setting[sheet][";
                    echo (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = $context["sheet"]) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c["code"] ?? null) : null);
                    echo "][field][";
                    echo (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = $context["field"]) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972["code"] ?? null) : null);
                    echo "][multi_store_status]\" value=\"1\" class=\"switch\" data-label-text=\"";
                    echo ($context["text_enabled"] ?? null);
                    echo "\" ";
                    if ((($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = $context["field"]) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216["multi_store_status"] ?? null) : null)) {
                        echo "checked=\"checked\"";
                    }
                    echo " />
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 88
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            echo "\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sheet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t\t<div class=\"p-lg text-center\">";
        // line 98
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
        // line 153
        echo ($context["text_yes"] ?? null);
        echo "',
    'offText': '";
        // line 154
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
        // line 227
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
        // line 237
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/d_seo_module/multi_store_field.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  451 => 237,  438 => 227,  362 => 154,  358 => 153,  300 => 98,  294 => 94,  284 => 89,  278 => 88,  261 => 84,  253 => 83,  248 => 81,  245 => 80,  242 => 79,  238 => 78,  231 => 74,  227 => 73,  218 => 67,  208 => 65,  204 => 64,  198 => 60,  185 => 57,  178 => 56,  174 => 55,  167 => 51,  158 => 47,  150 => 44,  142 => 41,  134 => 38,  126 => 35,  118 => 32,  110 => 27,  106 => 25,  100 => 23,  97 => 22,  91 => 20,  89 => 19,  83 => 15,  72 => 13,  68 => 12,  61 => 10,  54 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/d_seo_module/multi_store_field.twig", "");
    }
}
