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

/* default/template/module/d_quickcheckout.twig */
class __TwigTemplate_4a1734521e67297cd6c176112eb9137ba8f6ee8cbe071238429d07c05e437518 extends \Twig\Template
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
        echo "<script>
var config = ";
        // line 2
        echo ($context["json_config"] ?? null);
        echo " ;
if(typeof(ga) == \"undefined\")
   config.general.analytics_event = 0;
</script>
<style>
";
        // line 7
        echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["config"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["design"] ?? null) : null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["custom_style"] ?? null) : null);
        echo "
";
        // line 8
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "design", [], "any", false, false, false, 8), "only_quickcheckout", [], "any", false, false, false, 8)) {
            echo " 
body > *{
\tdisplay: none
}
body > #d_quickcheckout{
\tdisplay: block;
} 
#d_quickcheckout.container #d_logo{
\tmargin: 20px 0px;
}
";
        }
        // line 18
        echo " 
</style>
<div id=\"d_quickcheckout\">
\t";
        // line 21
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "design", [], "any", false, false, false, 21), "only_quickcheckout", [], "any", false, false, false, 21)) {
            echo " 
\t<div id=\"d_logo\" class=\"center-block text-center\"></div>
\t";
        }
        // line 23
        echo " 
\t";
        // line 24
        echo ($context["field"] ?? null);
        echo " 
\t<div class=\"row\">
\t\t<div class=\"col-md-12\"></div>
\t</div>
\t<div class=\"qc-col-0\">
\t\t";
        // line 29
        echo ($context["login"] ?? null);
        echo " 
\t\t";
        // line 30
        echo ($context["payment_address"] ?? null);
        echo " 
\t\t";
        // line 31
        echo ($context["shipping_address"] ?? null);
        echo " 
\t\t";
        // line 32
        echo ($context["shipping_method"] ?? null);
        echo " 
\t\t";
        // line 33
        echo ($context["payment_method"] ?? null);
        echo " 
\t\t";
        // line 34
        echo ($context["cart"] ?? null);
        echo " 
\t\t";
        // line 35
        echo ($context["payment"] ?? null);
        echo " 
\t\t";
        // line 36
        echo ($context["confirm"] ?? null);
        echo " 
\t</div>
\t<div class=\"row\">
\t\t<div class=\"qc-col-1 col-md-";
        // line 39
        echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "design", [], "any", false, false, false, 39), "column_width", [], "any", false, false, false, 39)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[1] ?? null) : null);
        echo "\">
\t\t</div>
\t\t<div class=\"col-md-";
        // line 41
        echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "design", [], "any", false, false, false, 41), "column_width", [], "any", false, false, false, 41)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[4] ?? null) : null);
        echo "\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"qc-col-2 col-md-";
        // line 43
        echo (((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "design", [], "any", false, false, false, 43), "column_width", [], "any", false, false, false, 43)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[4] ?? null) : null)) ? (twig_round((((($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "design", [], "any", false, false, false, 43), "column_width", [], "any", false, false, false, 43)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[2] ?? null) : null) / (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "design", [], "any", false, false, false, 43), "column_width", [], "any", false, false, false, 43)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[4] ?? null) : null)) * 12))) : ("0"));
        echo "  \">
    \t\t\t</div>
    \t\t\t<div class=\"qc-col-3 col-md-";
        // line 45
        echo (((($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "design", [], "any", false, false, false, 45), "column_width", [], "any", false, false, false, 45)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[4] ?? null) : null)) ? ((12 - twig_round((((($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "design", [], "any", false, false, false, 45), "column_width", [], "any", false, false, false, 45)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[2] ?? null) : null) / (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "design", [], "any", false, false, false, 45), "column_width", [], "any", false, false, false, 45)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[4] ?? null) : null)) * 12)))) : ("0"));
        echo " \">
    \t\t\t</div>
\t\t\t\t<div class=\"qc-col-4 col-md-12\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<script>
\$(function() {
\t
\t\$('.qc-step').each(function(){
\t\t\$(this).appendTo('.qc-col-' + \$(this).attr('data-col'));\t
\t})
\t\$('.qc-step').tsort({attr:'data-row'});
";
        // line 60
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "design", [], "any", false, false, false, 60), "only_quickcheckout", [], "any", false, false, false, 60)) {
            echo " 
\t\$('body').prepend(\$('#d_quickcheckout'));
\t\$('#d_quickcheckout').addClass('container')
\t\$('#d_quickcheckout #d_logo ').prepend(\$('header #logo').html())
";
        }
        // line 64
        echo " 
";
        // line 65
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "design", [], "any", false, false, false, 65), "breadcrumb", [], "any", false, false, false, 65)) {
            echo " 
\t\$('.qc-breadcrumb').hide();
";
        }
        // line 67
        echo " 
})
</script>";
    }

    public function getTemplateName()
    {
        return "default/template/module/d_quickcheckout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 67,  166 => 65,  163 => 64,  155 => 60,  137 => 45,  132 => 43,  127 => 41,  122 => 39,  116 => 36,  112 => 35,  108 => 34,  104 => 33,  100 => 32,  96 => 31,  92 => 30,  88 => 29,  80 => 24,  77 => 23,  71 => 21,  66 => 18,  52 => 8,  48 => 7,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/module/d_quickcheckout.twig", "");
    }
}
