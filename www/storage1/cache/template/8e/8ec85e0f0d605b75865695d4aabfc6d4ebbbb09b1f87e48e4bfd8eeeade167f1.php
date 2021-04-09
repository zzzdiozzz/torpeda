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

/* default/template/d_quickcheckout/login.twig */
class __TwigTemplate_ddb7ad8cad196a65b3d692974cf9cfa32b4a0f0bbd86f3ae60b62029ed3d6736 extends \Twig\Template
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
        echo "<div class=\"qc-step\" data-col=\"";
        echo ($context["col"] ?? null);
        echo "\" data-row=\"";
        echo ($context["row"] ?? null);
        echo "\">
\t<div id=\"login_view\"></div>
\t<div id=\"login_social_login\">";
        // line 3
        echo ($context["d_social_login"] ?? null);
        echo "</div>
</div>

<script type=\"text/html\" id=\"login_template\">

<% if(model.account == 'logged'){ %> 
\t<% \$('#login_social_login').hide() %>
<% }else{ %>

\t<% if(model.error) { %>
\t\t<div class=\"alert alert-danger\">
\t\t\t<i class=\"fa fa-exclamation-circle\"></i> <%= model.error %>
\t\t</div>
\t<% } %>
\t<% if(parseInt(model.config.option.guest.display) || parseInt(model.config.option.register.display) || (config.design.login_style == 'popup' && parseInt(model.config.option.login.display))){ %>
\t<div class=\"login-btn-group\">
\t\t<div class=\"btn-group btn-group-justified\">
\t\t<% if(parseInt(model.config.option.guest.display)){ %>
\t\t\t<div class=\"btn-group\" role=\"group\">
\t\t\t\t<label class=\"btn <%= model.account == 'guest' ? 'btn-primary active' : 'btn-default' %>\">
\t\t\t\t\t<input class=\"hidden\" type=\"radio\" name=\"account\" id=\"guest\" value=\"guest\" autocomplete=\"off\" <%= model.account == 'guest' ? 'checked=\"checked\"' : '' %>> <%= model.config.option.guest.title %>
\t\t\t\t</label>
\t\t\t</div>
\t\t<% } %>
\t\t<% if(parseInt(model.config.option.register.display)){ %>
\t\t\t<div class=\"btn-group\" role=\"group\">
\t\t\t\t<label  class=\"btn <%= model.account == 'register' ? 'btn-primary active' : 'btn-default' %> <%= parseInt(model.config.option.register.display) ? '' : 'hidden' %>\">
\t\t\t\t\t<input  class=\"hidden\" type=\"radio\" name=\"account\" id=\"register\" value=\"register\" autocomplete=\"off\" <%= model.account == 'register' ? 'checked=\"checked\"' : '' %> > <%= model.config.option.register.title %>
\t\t\t\t</label>
\t\t\t</div>\t
\t\t<% } %>
\t\t<% if(config.design.login_style == 'popup' && parseInt(model.config.option.login.display)){ %> 
\t\t\t<div class=\"btn-group\" role=\"group\">\t
\t\t\t\t<button id=\"login_button_popup\" type=\"button\" class=\"btn btn-default\"  data-toggle=\"modal\" data-target=\"#login_model\"><%= model.config.option.login.title %></button>
\t\t\t</div>
\t\t<% } %>
\t\t</div>
\t</div>
\t<% } %>
\t<% if(model.config.description){ %><p class=\"description\"><%= model.config.description %></p><% } %>
\t<div class=\"<%= parseInt(model.config.option.login.display) ? '' : 'hidden' %>\">
\t\t
\t\t<% if(config.design.login_style == 'block'){ %> 
\t\t<div class=\"panel panel-default \">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<span class=\"icon\">
\t\t\t\t\t<i class=\"<%= model.config.icon %>\"></i>
\t\t\t\t</span>
\t\t\t\t<span class=\"text\">";
        // line 51
        echo ($context["text_returning_customer"] ?? null);
        echo "</span>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">

\t\t\t\t<form id=\"login_form\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"form-group col-lg-12 email\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"login_email\">";
        // line 58
        echo ($context["entry_email"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t<input type=\"text\" name=\"email\" value=\"<%= model.email %>\" id=\"login_email\" placeholder=\"";
        // line 59
        echo ($context["entry_email"] ?? null);
        echo "\" class=\"form-control\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group  col-lg-12 password\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"login_password\">";
        // line 62
        echo ($context["entry_password"] ?? null);
        echo "</label> 
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" value=\"<%= model.password %>\" id=\"login_password\" placeholder=\"";
        // line 64
        echo ($context["entry_password"] ?? null);
        echo "\" class=\"form-control\"/>
\t\t\t\t\t\t\t<a id=\"remeber_password\" href=\"";
        // line 65
        echo ($context["forgotten"] ?? null);
        echo "\"><i class=\"fa fa-angle-right \"></i> ";
        echo ($context["text_forgotten"] ?? null);
        echo "</a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group col-sm-12\">
\t\t\t\t\t\t\t<label class=\"control-label hidden-lg\" >&ensp;</label> 
\t\t\t\t\t\t\t<button id=\"button_login\" class=\"btn btn-primary btn-block\">";
        // line 70
        echo ($context["button_login"] ?? null);
        echo "</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t\t<% }else{ %>
\t\t

<div class=\"modal fade\" role=\"dialog\" id=\"login_model\" >
  <div class=\"modal-dialog modal-sm\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        <h4 class=\"modal-title\">
        \t<span class=\"icon\">
\t\t\t\t<i class=\"<%= model.config.icon %>\"></i>
\t\t\t</span> 
\t\t\t";
        // line 89
        echo ($context["button_login"] ?? null);
        echo " 
\t\t</h4>
      </div>
      <div class=\"modal-body\">
        <form id=\"login_form\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"form-group col-lg-12 email\">
\t\t\t\t\t<label class=\"control-label\" for=\"login_email\">";
        // line 96
        echo ($context["entry_email"] ?? null);
        echo "</label>
\t\t\t\t\t<input type=\"text\" name=\"email\" value=\"<%= model.email %>\" id=\"login_email\" placeholder=\"";
        // line 97
        echo ($context["entry_email"] ?? null);
        echo "\" class=\"form-control\"/>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group  col-lg-12 password\">
\t\t\t\t\t<label class=\"control-label\" for=\"login_password\">";
        // line 100
        echo ($context["entry_password"] ?? null);
        echo "</label> 
\t\t\t\t\t
\t\t\t\t\t<input type=\"password\" name=\"password\" value=\"<%= model.password %>\" id=\"login_password\" placeholder=\"";
        // line 102
        echo ($context["entry_password"] ?? null);
        echo "\" class=\"form-control\"/>
\t\t\t\t\t<a id=\"remeber_password\" href=\"";
        // line 103
        echo ($context["forgotten"] ?? null);
        echo "\"><i class=\"fa fa-angle-right \"></i> ";
        echo ($context["text_forgotten"] ?? null);
        echo "</a>
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group col-sm-12\">
\t\t\t\t\t<label class=\"control-label hidden-lg\" >&ensp;</label> 
\t\t\t\t\t<button id=\"button_login\" class=\"btn btn-primary btn-block\">";
        // line 108
        echo ($context["button_login"] ?? null);
        echo "</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</form>
      </div>
      
    </div>
  </div>
</div>
<% } %>
</div>
<% } %>
</script>
<script>
\$(function() {
\tqc.login = \$.extend(true, {}, new qc.Login(";
        // line 123
        echo ($context["json"] ?? null);
        echo "));
\tqc.loginView = \$.extend(true, {}, new qc.LoginView({
\t\tel:\$(\"#login_view\"), 
\t\tmodel: qc.login, 
\t\ttemplate: _.template(\$(\"#login_template\").html())
\t}));
});

</script>
";
    }

    public function getTemplateName()
    {
        return "default/template/d_quickcheckout/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 123,  196 => 108,  186 => 103,  182 => 102,  177 => 100,  171 => 97,  167 => 96,  157 => 89,  135 => 70,  125 => 65,  121 => 64,  116 => 62,  110 => 59,  106 => 58,  96 => 51,  45 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/d_quickcheckout/login.twig", "");
    }
}
