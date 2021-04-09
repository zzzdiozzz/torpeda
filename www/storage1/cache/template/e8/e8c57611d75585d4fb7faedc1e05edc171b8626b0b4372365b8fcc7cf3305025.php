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

/* default/template/d_quickcheckout/payment_address.twig */
class __TwigTemplate_e600a38a94d029c9b268a86664faf60bdfc22e3cd981e95bf98529cfd54545b2 extends \Twig\Template
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
        echo "<div id=\"payment_address\" class=\"qc-step\" data-col=\"";
        echo ($context["col"] ?? null);
        echo "\" data-row=\"";
        echo ($context["row"] ?? null);
        echo "\"></div>
<script type=\"text/html\" id=\"payment_address_template\">
<div class=\"<%= parseInt(model.config.display) ? '' : 'hidden' %>\">
\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-heading\">
\t\t\t<h4 class=\"panel-title\">
\t\t\t\t<span class=\"icon\">
\t\t\t\t\t<i class=\"<%= model.config.icon %>\"></i>
\t\t\t\t</span>
\t\t\t\t<span class=\"text\"><%= model.config.title %></span>
\t\t\t</h4>
\t\t</div>
\t\t<div class=\"panel-body\">
\t\t\t<% if(model.config.description){ %><p class=\"description\"><%= model.config.description %></p><% } %>
\t\t\t<% if(model.account == 'logged'){ %>
\t\t\t\t<% if(_.size(model.addresses) > 0){ %>
\t\t\t\t\t<p>";
        // line 17
        echo ($context["text_address_existing"] ?? null);
        echo "</p>

\t\t\t\t\t<% if(config.design.address_style == 'list') { %>
\t\t\t\t\t<div class=\"list-group\">
\t\t\t\t\t<% _.each (model.addresses, function(address) { %>
\t\t\t\t\t\t<div class=\"list-group-item <%= address.address_id == model.payment_address.address_id ? 'active' : '' %>\">
\t\t\t\t            <label for=\"payment_address_exists_<%= address.address_id %>\">
\t\t\t\t            \t<input type=\"radio\" name=\"payment_address[address_id]\" class=\"payment-address\"  value=\"<%= address.address_id %>\" id=\"payment_address_exists_<%= address.address_id %>\" <%= address.address_id == model.payment_address.address_id ? 'checked=\"checked\"' : '' %> data-refresh=\"2\" autocomplete='off' />
\t\t\t\t              \t<div class=\"address-item\" ><%= sformat(address.address_format, address) %> </div>
\t\t\t\t            </label>
\t\t\t\t        </div>
\t\t\t        <% }) %>
\t\t\t\t\t</div>
\t\t\t\t\t<% }else{ %>
\t\t\t\t\t\t<% _.each (model.addresses, function(address) { %>
\t\t\t\t\t\t<div class=\"radio-input\">
\t\t\t\t\t\t\t<label for=\"payment_address_exists_<%= address.address_id %>\">
\t\t\t\t            \t<input type=\"radio\" name=\"payment_address[address_id]\" class=\"payment-address\" value=\"<%= address.address_id %>\" id=\"payment_address_exists_<%= address.address_id %>\" <%= address.address_id == model.payment_address.address_id ? 'checked=\"checked\"' : '' %> data-refresh=\"2\" autocomplete='off' />
\t\t\t\t                <strong> <%= address.firstname %>
\t\t\t\t                <%= address.lastname %></strong>
\t\t\t\t                <%= address.address_1 %>
\t\t\t\t                <%= address.address_2 %>
\t\t\t\t                <%= address.city %>
\t\t\t\t                <%= address.zone %>
\t\t\t\t                <%= address.country %>,
\t\t\t\t                <%= address.postcode %>
\t\t\t\t            </label>
\t\t\t            </div>
\t\t\t            <% }) %>
\t\t\t\t\t<% } %>
\t\t\t\t<% } %>
\t\t\t\t<div class=\"radio-input\">
\t\t            <input type=\"radio\" name=\"payment_address[address_id]\" class=\"payment-address\" value=\"new\" id=\"payment_address_exists_new\" <%= (model.payment_address.address_id == 'new' || model.payment_address.address_id == 0) ? 'checked=\"checked\"' : '' %> data-refresh=\"2\" autocomplete='off' />
\t\t            <label for=\"payment_address_exists_new\">
\t\t                ";
        // line 51
        echo ($context["text_address_new"] ?? null);
        echo "
\t\t            </label>
\t\t        </div>
\t\t        <form id=\"payment_address_form\" class=\"form-horizontal <%= (model.payment_address.address_id == 'new' || model.payment_address.address_id == '0') ? '' : 'hidden' %>\">

\t\t\t\t</form>

\t\t\t<% }else{ %>
\t\t\t<form id=\"payment_address_form\" class=\"form-horizontal\">

\t\t\t</form>
\t\t\t<% } %>
\t\t</div>
\t</div>
</div>
</script>

<script>
\$(function() {
\tqc.paymentAddress = \$.extend(true, {}, new qc.PaymentAddress(";
        // line 70
        echo ($context["json"] ?? null);
        echo "));
\tqc.paymentAddressView = \$.extend(true, {}, new qc.PaymentAddressView({
\t\tel:\$(\"#payment_address\"),
\t\tmodel: qc.paymentAddress,
\t\ttemplate: _.template(\$(\"#payment_address_template\").html())
\t}));
\tqc.paymentAddressView.setZone(qc.paymentAddress.get('payment_address.country_id'));

})

</script>";
    }

    public function getTemplateName()
    {
        return "default/template/d_quickcheckout/payment_address.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 70,  96 => 51,  59 => 17,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/d_quickcheckout/payment_address.twig", "");
    }
}
