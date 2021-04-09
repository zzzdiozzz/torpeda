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

/* extension/module/d_seo_module/install.twig */
class __TwigTemplate_0d55ea991ecfa857f189b90826d20eb5921dc20f02b7db442b8d6e029b21e4e0 extends \Twig\Template
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
\t\t\t\t<a href=\"";
        // line 6
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
\t\t\t</div>
\t\t\t<h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo " ";
        echo ($context["version"] ?? null);
        echo "</h1>
\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
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
        // line 13
        echo "\t\t\t</ul>
\t\t</div>
\t</div>
\t<div class=\"container-fluid\">
\t\t";
        // line 17
        if ((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["error"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["warning"] ?? null) : null)) {
            // line 18
            echo "\t\t<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button> ";
            echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["error"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["warning"] ?? null) : null);
            echo "</div>
\t\t";
        }
        // line 20
        echo "\t\t";
        if (($context["success"] ?? null)) {
            // line 21
            echo "\t\t<div class=\"alert alert-success\"><i class=\"fa fa-exclamation-circle\"></i><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button> ";
            echo ($context["success"] ?? null);
            echo "</div>
\t\t";
        }
        // line 23
        echo "\t\t<div class=\"panel panel-default panel-resizable\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h3 class=\"panel-title\">";
        // line 25
        echo ($context["text_install"] ?? null);
        echo "</h3>
\t\t\t</div>
\t\t\t<div class=\"panel-body panel-setup\" style=\"background-image: url(view/image/";
        // line 27
        echo ($context["codename"] ?? null);
        echo "/background.svg)\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-8 col-md-offset-2 text-center\">
\t\t\t\t\t\t<div class=\"setup-info\">
\t\t\t\t\t\t\t<h1 class=\"title m-t-lg m-b-lg\">";
        // line 31
        echo ($context["text_setup"] ?? null);
        echo "</h1>
\t\t\t\t\t\t\t<p class=\"description m-b-lg\">";
        // line 32
        echo ($context["help_setup"] ?? null);
        echo "</p>
\t\t\t\t\t\t\t<div class=\"btn-group m-b-lg\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t<label class=\"btn btn-info active\" data-toggle=\"tooltip\" title=\"";
        // line 34
        echo ($context["help_full_setup"] ?? null);
        echo "\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"action\" value=\"";
        // line 35
        echo ($context["setup"] ?? null);
        echo "\" checked=\"checked\" /> ";
        echo ($context["text_full_setup"] ?? null);
        echo "
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<label class=\"btn btn-info\" data-toggle=\"tooltip\" title=\"";
        // line 37
        echo ($context["help_custom_setup"] ?? null);
        echo "\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"action\" value=\"";
        // line 38
        echo ($context["install"] ?? null);
        echo "\" /> ";
        echo ($context["text_custom_setup"] ?? null);
        echo "
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t<a action=\"";
        // line 42
        echo ($context["setup"] ?? null);
        echo "\" id=\"button_setup\" class=\"btn btn-danger btn-lg\"><i class=\"fa fa-cog\"></i><i class=\"fa fa-refresh rotate hide\"></i> ";
        echo ($context["button_setup"] ?? null);
        echo "</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-8 col-md-offset-2 text-center\">
\t\t\t\t\t\t<div class=\"features\">
\t\t\t\t\t\t\t";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["features"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
            // line 50
            echo "\t\t\t\t\t\t\t<div class=\"feature info-window-item\" data-href=\"";
            echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["feature"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["href"] ?? null) : null);
            echo "\">
\t\t\t\t\t\t\t\t<div class=\"feature-wrap\">
\t\t\t\t\t\t\t\t\t<img src=\"view/image/";
            // line 52
            echo (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["feature"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["image"] ?? null) : null);
            echo "\" class=\"image\" />
\t\t\t\t\t\t\t\t\t<p class=\"name\">";
            // line 53
            echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["feature"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["name"] ?? null) : null);
            echo "</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "\t\t\t\t\t\t\t<br class=\"clear\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<img src=\"view/image/";
        // line 61
        echo ($context["codename"] ?? null);
        echo "/planet.svg\" class=\"planet\" />
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

var column_count = 5;
var feature_count = \$('.features .feature').length;

\$('.features .feature').eq(column_count * Math.floor(feature_count / column_count)).css('margin-left', (column_count - (feature_count % column_count)) * (50 / column_count) + '%');

</script>
<script type=\"text/javascript\">

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

\$('body').on('click', '#button_setup', function(){
\t\$.ajax({
\t\ttype: 'post',
\t\turl: \$('[name=\"action\"]:checked').val(),
\t\tdata: '',
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button_setup .fa-refresh').removeClass('hide');
\t\t\t\$('#button_setup .fa-cog').addClass('hide');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button_setup .fa-refresh').addClass('hide');
\t\t\t\$('#button_setup .fa-cog').removeClass('hide');
\t\t},
\t\tsuccess: function(json) {
\t\t\tshowAlert(json);
\t\t\t
\t\t\tif (json['success']) {
\t\t\t\tlocation = '";
        // line 168
        echo twig_replace_filter(($context["module_link"] ?? null), ["&amp;" => "&"]);
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
        // line 178
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/module/d_seo_module/install.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  312 => 178,  299 => 168,  189 => 61,  183 => 57,  173 => 53,  169 => 52,  163 => 50,  159 => 49,  147 => 42,  138 => 38,  134 => 37,  127 => 35,  123 => 34,  118 => 32,  114 => 31,  107 => 27,  102 => 25,  98 => 23,  92 => 21,  89 => 20,  83 => 18,  81 => 17,  75 => 13,  64 => 11,  60 => 10,  53 => 8,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/d_seo_module/install.twig", "");
    }
}
