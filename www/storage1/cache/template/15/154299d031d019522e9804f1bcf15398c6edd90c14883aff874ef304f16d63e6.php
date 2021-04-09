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

/* default/template/d_quickcheckout/shipping_method.twig */
class __TwigTemplate_2e27aad91bf878edf859be7f1d4190ae363c288144009abd975fb0caf6817df3 extends \Twig\Template
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
        echo "<div id=\"shipping_method\" class=\"qc-step\" data-col=\"";
        echo ($context["col"] ?? null);
        echo " \" data-row=\"";
        echo ($context["row"] ?? null);
        echo " \"></div>
<script type=\"text/html\" id=\"shipping_method_template\">

<form id=\"shipping_method_form\" <%= parseInt(model.config.display) && model.show_shipping_method ? '' : 'class=\"hidden\"' %>>
\t<% if (model.shipping_methods.length != 0 ) { %>
\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h4 class=\"panel-title\">
\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t<i class=\"<%= model.config.icon %>\"></i>
\t\t\t\t\t</span>
\t\t\t\t\t<span class=\"text\"><%= model.config.title %></span>
\t\t\t\t</h4>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t<% if(model.error){ %>
\t\t\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t\t\t<i class=\"fa fa-exclamation-circle\"></i> <%= model.error %>
\t\t\t\t\t</div>
\t\t\t\t<% } %>
\t\t\t\t<% if (model.config.description) { %> 
\t\t\t\t\t<p class=\"description\"><%= model.config.description %></p>
\t\t\t\t<% } %>
\t\t\t\t<div id=\"shipping_method_list\">
\t\t\t\t\t

\t\t\t\t\t\t<% if(model.config.input_style == 'select') { %>
\t\t\t\t\t\t\t<div class=\"select-input form-group\">
\t\t\t\t\t\t\t\t<select name=\"shipping_method\" class=\"form-control shipping-method-select\" data-refresh=\"5\" >
\t\t\t\t\t\t\t\t<% _.each(model.shipping_methods, function(shipping_method) { %>
\t\t\t\t\t\t\t\t\t<% if (parseInt(model.config.display_title)) { %> 
\t\t\t\t\t\t\t\t\t\t<optgroup label=\"<%= shipping_method.title %>\">
\t\t\t\t\t\t\t\t\t<% } %>
\t\t\t\t\t\t\t\t\t<% _.each(shipping_method.quote, function(quote) { %>
\t\t\t\t\t\t\t\t\t\t<% if (quote.code == model.shipping_method.code) { %>
\t\t\t\t\t\t\t\t\t\t\t<option  value=\"<%= quote.code %>\" id=\"<%= quote.code %>\" selected=\"selected\" ><%= quote.title %> <span class=\"price\"><%= quote.text %></span></option>
\t\t\t\t\t\t\t\t\t\t<% } else { %>
\t\t\t\t\t\t\t\t\t\t\t<option  value=\"<%= quote.code %>\" id=\"<%= quote.code %>\" ><%= quote.title %> <span class=\"price\"><%= quote.text %></span></option>
\t\t\t\t\t\t\t\t\t\t<% } %>
\t\t\t\t\t\t\t\t\t<% }) %>
\t\t\t\t\t\t\t\t\t<% if (parseInt(model.config.display_title)) { %> 
\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t<% } %>
\t\t\t\t\t\t\t\t<% }) %>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t<% }else{ %>
\t\t\t\t\t\t\t<% _.each(model.shipping_methods, function(shipping_method) { %>
\t\t\t\t\t\t\t\t<% if (parseInt(model.config.display_title)) { %> 
\t\t\t\t\t\t\t\t\t<strong class=\"title\"><%= shipping_method.title %></strong>
\t\t\t\t\t\t\t\t<% } %>

\t\t\t\t\t\t\t\t<% if (!shipping_method.error) { %>
\t\t\t\t\t\t\t\t\t<% _.each(shipping_method.quote, function(quote) { %>
\t\t\t\t\t\t\t\t\t  <div class=\"radio-input radio\">
\t\t\t\t\t\t\t\t\t    <label for=\"<%= quote.code %>\">
\t\t\t\t\t\t\t\t\t    <% if (quote.code == model.shipping_method.code) { %>
\t\t\t\t\t\t\t\t\t      <input type=\"radio\" name=\"shipping_method\" value=\"<%= quote.code %>\" id=\"<%= quote.code %>\" checked=\"checked\" data-refresh=\"5\" class=\"styled\"/> 
\t\t\t\t\t\t\t\t\t    <% } else { %>
\t\t\t\t\t\t\t\t\t      <input type=\"radio\" name=\"shipping_method\" value=\"<%= quote.code %>\" id=\"<%= quote.code %>\" data-refresh=\"5\" class=\"styled\"/> 
\t\t\t\t\t\t\t\t\t    <% } %>
\t\t\t\t\t\t\t\t\t    <span class=\"text\"><%= quote.title %></span><span class=\"price\"><%= quote.text %></span>
    \t\t\t\t<!-- START Shipping Data -->
\t\t\t\t\t<% if (quote.text_period !== null && quote.text_period) { %>
\t\t\t\t\t\t<br/>
\t\t\t\t\t\t<span class=\"text\"><%= quote.text_period %></span>
\t\t\t\t\t<% } %>
\t\t\t\t\t<!-- END Shipping Data -->
\t\t\t\t\t</label>
        \t\t
\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t<% }) %>
\t\t\t\t\t\t\t\t<% } else { %>
\t\t\t\t\t\t\t\t\t<div class=\"error alert alert-error\"><%= shipping_method.error %></div>
\t\t\t\t\t\t\t\t<% } %>
\t\t\t\t\t\t\t<% }) %>
\t\t\t\t\t\t<% } %>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t<% }else{ %>
    <% if (model.shipping_error) { %> 
       <div class=\"alert alert-warning\"><i class=\"fa fa-exclamation-circle\"></i> <%= model.shipping_error %></div>
   <% } %>
\t<% } %>
</form>
</script>
<script>
\$(function() {
\tqc.shippingMethod = \$.extend(true, {}, new qc.ShippingMethod(";
        // line 93
        echo ($context["json"] ?? null);
        echo " ));
\tqc.shippingMethodView = \$.extend(true, {}, new qc.ShippingMethodView({
\t\tel:\$(\"#shipping_method\"), 
\t\tmodel: qc.shippingMethod, 
\t\ttemplate: _.template(\$(\"#shipping_method_template\").html())
\t}));
});
</script>";
    }

    public function getTemplateName()
    {
        return "default/template/d_quickcheckout/shipping_method.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 93,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/d_quickcheckout/shipping_method.twig", "");
    }
}
