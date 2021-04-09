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

/* default/template/d_quickcheckout/confirm.twig */
class __TwigTemplate_e281f1b992bbf71bf4bd98786558c00a5415362acb3f738dcd4fbb9c275c3d28 extends \Twig\Template
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
        echo "<div id=\"confirm_view\" class=\"qc-step\" data-col=\"";
        echo ($context["col"] ?? null);
        echo "\" data-row=\"";
        echo ($context["row"] ?? null);
        echo "\"></div>
<script type=\"text/html\" id=\"confirm_template\">
<div id=\"confirm_wrap\">
\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<form id=\"confirm_form\" class=\"form-horizontal\">
\t\t\t</form>
\t\t\t
\t\t\t<button id=\"qc_confirm_order\" class=\"btn btn-primary btn-lg btn-block \" <%= model.show_confirm ? '' : 'disabled=\"disabled\"' %>><% if(Number(model.payment_popup)) { %>";
        // line 9
        echo ($context["button_continue"] ?? null);
        echo "<% } else { %>";
        echo ($context["button_confirm"] ?? null);
        echo "<% } %></span></button>

\t\t</div>
\t</div>
</div>
</script>
<script>

\$(function() {
\tqc.confirm = \$.extend(true, {}, new qc.Confirm(";
        // line 18
        echo ($context["json"] ?? null);
        echo "));
\tqc.confirmView = \$.extend(true, {}, new qc.ConfirmView({
\t\tel:\$(\"#confirm_view\"), 
\t\tmodel: qc.confirm, 
\t\ttemplate: _.template(\$(\"#confirm_template\").html())
\t}));
});

</script>";
    }

    public function getTemplateName()
    {
        return "default/template/d_quickcheckout/confirm.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 18,  51 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/d_quickcheckout/confirm.twig", "");
    }
}
