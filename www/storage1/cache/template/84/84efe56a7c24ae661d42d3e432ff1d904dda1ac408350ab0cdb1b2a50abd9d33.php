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

/* extension/module/sainent_extensions.twig */
class __TwigTemplate_38bf8779057ea95e0edada48d82ef12e3e411a327cf8f3cb4a61a77ee0f0b3f3 extends \Twig\Template
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
\t\t<div class=\"pull-right\">
\t\t\t<button type=\"button\" id=\"button-setting\" title=\"Clear Cache\" data-loading-text=\"Loading...\" class=\"btn btn-danger\"><i class=\"fa fa-eraser\"></i> Clear Cache</button>
\t\t</div>
\t\t<h1>";
        // line 8
        echo ($context["text_title"] ?? null);
        echo "</h1>
\t\t<ul class=\"breadcrumb\">
\t\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "\t\t\t<li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "\t\t</ul>
\t  
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\"></div>
      <div class=\"panel-body\" style=\"padding:0px;\">
\t\t<h1 class=\"text-center\">";
        // line 21
        echo ($context["text_title"] ?? null);
        echo "</h1>
\t\t<h4 class=\"text-center\"><a href=\"https://www.opencart.com/index.php?route=marketplace/extension&filter_member=sainent\" target=\"_blank\">Checkout More Extensions for Opencart</a></h4>
\t\t<div class=\"extension-list\">
\t\t\t<iframe src=\"https://www.opencart.com/index.php?route=marketplace/extension&filter_member=sainent#input-sort\" style=\"width:100%;height:800px;border:none;border-top:1px solid #eee;\"></iframe>
\t\t</div>
\t  </div>
\t  <div class=\"panel-footer\"></div>
    </div>
    </div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-setting').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=common/developer&user_token=";
        // line 34
        echo ($context["user_token"] ?? null);
        echo "',
\t\tdataType: 'html',
\t\tbeforeSend: function() {
\t\t\t\$('#button-setting').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-setting').button('reset');
\t\t},
\t\tsuccess: function(html) {
\t\t\t\$('#modal-developer').remove();
\t\t\t
\t\t\t\$('body').prepend('<div id=\"modal-developer\" class=\"modal\">' + html + '</div>');
\t\t\t
\t\t\t\$('#modal-developer').modal('show');
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});\t
});\t
//--></script> 
";
        // line 55
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/sainent_extensions.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 55,  94 => 34,  78 => 21,  68 => 13,  57 => 11,  53 => 10,  48 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/sainent_extensions.twig", "");
    }
}
