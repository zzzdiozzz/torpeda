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

/* default/template/d_quickcheckout/payment.twig */
class __TwigTemplate_ce1198d788534288bd43788b2697d680807bf78a69dd66d9b25f86bbb8f6b393 extends \Twig\Template
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
        echo "<div id=\"payment_view\" class=\"qc-step\" data-col=\"";
        echo ($context["col"] ?? null);
        echo "\" data-row=\"";
        echo ($context["row"] ?? null);
        echo "\"></div>
<script type=\"text/html\" id=\"payment_template\">
<% if(Number(model.payment_popup)) { %>
\t
<div class=\"modal fade\" id=\"payment_modal\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\"> &times; </span></button>
\t\t\t\t<h4 class=\"modal-title\"><span class=\"text\"><%= model.payment_popup_title %></span></h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body clearfix\">
\t\t\t\t<% if(model.payment){ %>
\t\t\t\t\t<%= model.payment %>
\t\t\t\t<% } %>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<% } else { %>
\t<% if(model.payment){ %>
\t\t<%= model.payment %>
\t<% } %>
<% } %>
</script>
<script>

\$(function() {
\tqc.payment = \$.extend(true, {}, new qc.Payment(";
        // line 29
        echo ($context["json"] ?? null);
        echo "));
\tqc.paymentView = \$.extend(true, {}, new qc.PaymentView({
\t\tel:\$(\"#payment_view\"), 
\t\tmodel: qc.payment, 
\t\ttemplate: _.template(\$(\"#payment_template\").html())
\t}));

});

</script>

";
    }

    public function getTemplateName()
    {
        return "default/template/d_quickcheckout/payment.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 29,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/d_quickcheckout/payment.twig", "");
    }
}
