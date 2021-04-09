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

/* extension/dashboard/d_seo_module_target_keyword.twig */
class __TwigTemplate_8aa8707b5bdf8e5cbf25007a123d11f209344b4448b3f9e9a06a818f5b8b7c74 extends \Twig\Template
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
\t\t\t<div class=\"pull-right\">
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
\t\t\t";
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
\t\t\t\t<form action=\"";
        // line 30
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form\" class=\"form-horizontal\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-status\">";
        // line 32
        echo ($context["entry_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"dashboard_";
        // line 34
        echo ($context["codename"] ?? null);
        echo "_status\" value=\"0\" />
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"dashboard_";
        // line 35
        echo ($context["codename"] ?? null);
        echo "_status\" value=\"1\" class=\"switch\" data-label-text=\"";
        echo ($context["text_enabled"] ?? null);
        echo "\" ";
        if (($context["status"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " />
\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-width\">";
        // line 39
        echo ($context["entry_width"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t<select name=\"dashboard_";
        // line 41
        echo ($context["codename"] ?? null);
        echo "_width\" class=\"form-control\">
\t\t\t\t\t\t\t";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["columns"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 43
            echo "\t\t\t\t\t\t\t";
            if (($context["column"] == ($context["width"] ?? null))) {
                // line 44
                echo "\t\t\t\t\t\t\t\t<option value=\"";
                echo $context["column"];
                echo "\" selected=\"selected\">";
                echo $context["column"];
                echo "</option>
\t\t\t\t\t\t\t";
            } else {
                // line 46
                echo "\t\t\t\t\t\t\t\t<option value=\"";
                echo $context["column"];
                echo "\">";
                echo $context["column"];
                echo "</option>
\t\t\t\t\t\t\t";
            }
            // line 48
            echo "\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-sort-order\">";
        // line 53
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"dashboard_";
        // line 55
        echo ($context["codename"] ?? null);
        echo "_sort_order\" value=\"";
        echo ($context["sort_order"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sort_order"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-list-limit\">";
        // line 59
        echo ($context["entry_list_limit"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"dashboard_";
        // line 61
        echo ($context["codename"] ?? null);
        echo "_setting[list_limit]\" value=\"";
        echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["setting"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["list_limit"] ?? null) : null);
        echo "\" placeholder=\"";
        echo ($context["entry_list_limit"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-duplicate-status\">";
        // line 65
        echo ($context["entry_duplicate_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"dashboard_";
        // line 67
        echo ($context["codename"] ?? null);
        echo "_setting[duplicate_status]\" value=\"0\" />
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"dashboard_";
        // line 68
        echo ($context["codename"] ?? null);
        echo "_setting[duplicate_status]\" value=\"1\" class=\"switch\" data-label-text=\"";
        echo ($context["text_enabled"] ?? null);
        echo "\" ";
        if ((($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["setting"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["duplicate_status"] ?? null) : null)) {
            echo "checked=\"checked\"";
        }
        echo " />
\t\t\t\t\t\t\t&nbsp;<span class=\"info-window-item\" data-href=\"https://opencartseomodule.com/dashboard-widget-for-duplicate-target-keywords\"><i class=\"fa fa-question\"></i></span>
\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-empty-status\">";
        // line 73
        echo ($context["entry_empty_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"dashboard_";
        // line 75
        echo ($context["codename"] ?? null);
        echo "_setting[empty_status]\" value=\"0\" />
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"dashboard_";
        // line 76
        echo ($context["codename"] ?? null);
        echo "_setting[empty_status]\" value=\"1\" class=\"switch\" data-label-text=\"";
        echo ($context["text_enabled"] ?? null);
        echo "\" ";
        if ((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["setting"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["empty_status"] ?? null) : null)) {
            echo "checked=\"checked\"";
        }
        echo " />
\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-store\">";
        // line 80
        echo ($context["entry_store"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t<div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
\t\t\t\t\t\t\t\t";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 84
            echo "\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t";
            // line 86
            if (twig_in_filter((($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["store"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["store_id"] ?? null) : null), (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["setting"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["stores_id"] ?? null) : null))) {
                // line 87
                echo "\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"dashboard_";
                echo ($context["codename"] ?? null);
                echo "_setting[stores_id][]\" value=\"";
                echo (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["store"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["store_id"] ?? null) : null);
                echo "\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t";
                // line 88
                echo (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = $context["store"]) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["name"] ?? null) : null);
                echo "
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 90
                echo "\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"dashboard_";
                echo ($context["codename"] ?? null);
                echo "_setting[stores_id][]\" value=\"";
                echo (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = $context["store"]) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["store_id"] ?? null) : null);
                echo "\" />
\t\t\t\t\t\t\t\t\t\t";
                // line 91
                echo (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = $context["store"]) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["name"] ?? null) : null);
                echo "
\t\t\t\t\t\t\t\t\t";
            }
            // line 93
            echo "\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
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
        // line 154
        echo ($context["text_yes"] ?? null);
        echo "',
    'offText': '";
        // line 155
        echo ($context["text_no"] ?? null);
        echo "'
});

function showAlert(json) {
\t\$('.alert, .text-danger').remove();
\t\$('.form-group').removeClass('has-error');

\tif (json['error']) {
\t\tif (json['error']['warning']) {
\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button> ' + json['error']['warning'] + '</div>');
\t\t}

\t\tfor (i in json['error']) {
\t\t\tvar element = \$('#input_' + i);

\t\t\tif (element.parent().hasClass('input-group')) {
                \$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t} else {
\t\t\t\t\$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t}
\t\t}

\t\t\$('.text-danger').parents('.form-group').addClass('has-error');
\t}

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
        // line 228
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
        // line 238
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/dashboard/d_seo_module_target_keyword.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  465 => 238,  452 => 228,  376 => 155,  372 => 154,  312 => 96,  304 => 93,  299 => 91,  292 => 90,  287 => 88,  280 => 87,  278 => 86,  274 => 84,  270 => 83,  264 => 80,  251 => 76,  247 => 75,  242 => 73,  228 => 68,  224 => 67,  219 => 65,  208 => 61,  203 => 59,  192 => 55,  187 => 53,  181 => 49,  175 => 48,  167 => 46,  159 => 44,  156 => 43,  152 => 42,  148 => 41,  143 => 39,  130 => 35,  126 => 34,  121 => 32,  116 => 30,  110 => 27,  106 => 25,  100 => 23,  97 => 22,  91 => 20,  89 => 19,  83 => 15,  72 => 13,  68 => 12,  61 => 10,  54 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/dashboard/d_seo_module_target_keyword.twig", "");
    }
}
