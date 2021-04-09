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

/* default/template/d_quickcheckout/payment_method.twig */
class __TwigTemplate_bc6d011ef9451df50cd35895958968c0355c8607b5d8c88cecc6e7863bb45902 extends \Twig\Template
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
        echo "<div id=\"payment_method\" class=\"qc-step\" data-col=\"";
        echo ($context["col"] ?? null);
        echo " \" data-row=\"";
        echo ($context["row"] ?? null);
        echo " \"></div>
<script type=\"text/html\" id=\"payment_method_template\" >
<form id=\"payment_method_form\" <%= parseInt(model.config.display) ? '' : 'class=\"hidden\"' %>>
\t<% if (model.error_warning) { %>
\t\t<div class=\"error\"><%= model.error_warning %></div>
\t<% } %>
\t<% if (model.payment_methods.length != 0) { %>
\t\t<div class=\"panel panel-default\" >
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
\t\t\t\t<div id=\"payment_method_list\" class=\"<%= parseInt(model.config.display_options) ? '' : 'hidden' %>\">
\t\t\t\t<% if(model.config.input_style == 'select') { %>
\t\t\t\t\t<div class=\"select-input form-group\">
\t\t\t\t\t\t<select name=\"payment_method\" class=\"form-control payment-method-select\" data-refresh=\"6\" >
\t\t\t\t\t\t<% _.each(model.payment_methods, function(payment_method) { %>
\t\t\t\t\t\t\t<% if (payment_method.code == model.payment_method.code) { %>
\t\t\t\t\t\t\t\t<option  value=\"<%= payment_method.code %>\" id=\"<%= payment_method.code %>\" selected=\"selected\" ><%= payment_method.title %> <span class=\"price\"><%= (payment_method.cost) ? payment_method.cost : '' %></span></option>
\t\t\t\t\t\t\t<% } else { %>
\t\t\t\t\t\t\t\t<option  value=\"<%= payment_method.code %>\" id=\"<%= payment_method.code %>\" ><%= payment_method.title %> <span class=\"price\"><%= (payment_method.cost) ? payment_method.cost : '' %></span></option>
\t\t\t\t\t\t\t<% } %>
\t\t\t\t\t\t<% }) %>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<% _.each(model.payment_methods, function(payment_method) { %>
\t\t\t\t\t\t<% if (payment_method.terms) { %>
\t\t\t\t\t\t\t<% if (payment_method.code == model.payment_method.code) { %>
\t\t\t\t\t\t\t\t<p class=\"payment-method-terms <%= payment_method.code %>\">(<%= payment_method.terms %>)</p>
\t\t\t\t\t\t\t<% } else { %>
\t\t\t\t\t\t\t\t<p class=\"payment-method-terms <%= payment_method.code %> hidden\">(<%= payment_method.terms %>)</p>
\t\t\t\t\t\t\t<% } %>
\t\t\t\t\t\t\t
\t\t\t\t\t\t<% } %>
\t\t\t\t\t<% }) %>

\t\t\t\t<% }else{ %>
\t\t\t\t\t<% _.each(model.payment_methods, function(payment_method) { %>
\t\t\t\t\t\t<div class=\"radio-input radio\">
\t\t\t\t\t\t\t<label for=\"<%= payment_method.code %>\">
\t\t\t\t\t\t\t\t<% if (payment_method.code == model.payment_method.code) { %>
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"payment_method\" value=\"<%= payment_method.code %>\" id=\"<%= payment_method.code %>\" checked=\"checked\" class=\"styled\"  data-refresh=\"6\"/>
\t\t\t\t\t\t\t\t<% } else { %>
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"payment_method\" value=\"<%= payment_method.code %>\" id=\"<%= payment_method.code %>\" class=\"styled\"  data-refresh=\"6\"/>
\t\t\t\t\t\t\t\t<% } %>

\t\t\t\t\t\t\t\t<% if(parseInt(model.config.display_images)) { %>
\t\t\t\t\t\t\t\t\t<img class=\"payment-image\" src=\"<%= payment_method.image %>\" />
\t\t\t\t\t\t\t\t<% } %>
      
\t\t\t\t\t\t\t\t<%= payment_method.title %>
\t\t\t\t\t\t\t\t<span class=\"price\"><%= payment_method.cost ? payment_method.cost : '' %></span>

\t\t\t\t\t\t\t\t<% if (payment_method.terms) { %>
\t\t\t\t\t\t\t\t    <p class=\"payment-method-terms <%= payment_method.code %>\">(<%= payment_method.terms %>)</p>
\t\t\t\t\t\t\t\t<% } %>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t<% }) %>
\t\t\t\t<% } %>
\t\t\t\t</div>\t\t\t\t\t\t\t\t\t
\t\t\t</div>
\t\t</div>
\t<% } else{ %>
    <% if (model.payment_error) { %> 
       <div class=\"alert alert-warning\"><i class=\"fa fa-exclamation-circle\"></i> <%= model.payment_error %></div>
   <% } %>
\t<% } %>
</form>
</script>
<script>
\$(function() {
\tqc.paymentMethod = \$.extend(true, {}, new qc.PaymentMethod(";
        // line 86
        echo ($context["json"] ?? null);
        echo " ));
\tqc.paymentMethodView = \$.extend(true, {}, new qc.PaymentMethodView({
\t\tel:\$(\"#payment_method\"), 
\t\tmodel: qc.paymentMethod, 
\t\ttemplate: _.template(\$(\"#payment_method_template\").html())
\t}));
});
</script>";
    }

    public function getTemplateName()
    {
        return "default/template/d_quickcheckout/payment_method.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 86,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/d_quickcheckout/payment_method.twig", "");
    }
}
