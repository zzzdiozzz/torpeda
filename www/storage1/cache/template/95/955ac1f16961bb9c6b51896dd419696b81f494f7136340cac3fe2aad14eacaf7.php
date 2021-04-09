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

/* default/template/d_quickcheckout/field.twig */
class __TwigTemplate_7fdd0645900047a8fb198261cf7c4b908f5d0cce5ed017d996d4c78182a9c2b7 extends \Twig\Template
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
        echo "<script type=\"text/html\" id=\"field_template\">

<% var col_left = (config.design.block_style == 'block') ? 'col-xs-12' : 'col-xs-5' %>
<% var col_right = (config.design.block_style == 'block') ? 'col-xs-12' : 'col-xs-7' %>
<% var autocomplete = (Number(config.design.autocomplete)) ? 'on' : 'off' %>
<% var telephone_countries = config.design.telephone_countries.split(',') %>
<% var telephone_preferred_countries = config.design.telephone_preferred_countries.split(',') %>
<% var telephone_validation = (Number(config.design.telephone_validation)) %>
<% _.each(model.config.fields,  function(f){ %>
\t<% if(model[model.config.id][f.id] !== undefined || f.type == \"heading\" || f.type == \"label\"){ %>
\t\t<% if(f.type){ %>
\t\t  \t<% var display = Number(f.display) %>
\t\t  \t<% var require = Number(f.require) %>

\t\t  \t<% if(f.type == \"heading\"){ %>

\t        \t<% if(display) { %>

\t\t\t\t<div id=\"<%= model.config.id %>_<%= f.id %>_heading\" class=\"sort-item <%= f.id %> <%= f.class ? f.class : '' %>\" data-sort=\"<%= f.sort_order %>\">
\t\t\t\t    <i class=\"fa fa-book\"></i>
\t\t\t\t    <%= htmlDecode(f.title) %>
\t\t\t\t    <hr/>
\t\t\t\t</div>

\t\t\t\t<% } %>

\t\t\t<% }else if(f.type == \"label\"){ %>

\t\t\t\t<div id=\"<%= model.config.id %>_<%= f.id %>_label\"
\t\t\t\t\tclass=\"label-input form-group  sort-item <%= display ? '' : 'hidden' %> <%= f.class ? f.class : '' %> <%= require ? 'required' : '' %>\"
\t\t\t\t\tdata-sort=\"<%= f.sort_order %>\">
\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t<label class=\"control-label\" for=\"<%= model.config.id %>_<%= f.id %>\">
\t\t\t\t\t\t\t<%= htmlDecode(f.title) %>
\t\t\t\t\t\t</label>

\t\t\t\t\t\t<p id=\"<%= model.config.id %>_<%= f.id %>\" class=\"label-text\" />
\t\t\t\t\t\t\t<%= model[f.id] %>
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t    \t<% }else if(f.type == \"radio\"){ %>

\t    \t\t<% if(f.options){ %>
\t\t\t    \t<div id=\"<%= model.config.id %>_<%= f.id %>_input\"
\t\t\t\t        class=\"radio-input form-group  sort-item <%= display ? '' : 'hidden' %> <%= f.class ? f.class : '' %> <%= require ? 'required' : '' %>\"
\t\t\t\t        data-sort=\"<%= f.sort_order %>\">
\t\t\t\t        <div class=\"<%= col_left %>\">
\t\t\t\t        \t<label class=\"control-label\">
\t\t\t\t        \t\t<span <%= f.tooltip ? 'data-toggle=\"tooltip\"' : '' %> title=\"<%= f.tooltip %>\"><%= htmlDecode(f.title) %></span>
\t\t\t\t        \t</label>
\t\t\t\t        </div>
\t\t\t\t        <div class=\"<%= col_right %>\">

\t\t\t            \t<% _.each(f.options, function(option){ %>
\t\t\t\t            <div class=\"radio\">
\t\t\t\t            \t<label for=\"<%= model.config.id %>_<%= f.id %>_<%= option.value %>\">
\t\t\t\t            \t\t<input type=\"radio\"
\t\t\t\t            \t\t\tautocomplete=\"<%= autocomplete %>\"
\t\t\t\t\t\t                name=\"<%= model.config.id %>.<%= f.id %>\"
\t\t\t\t\t\t                value=\"<%= option.value %>\"
\t\t\t\t\t\t                <%= require ? 'required' : '' %>
\t\t\t\t\t\t                id=\"<%= model.config.id %>_<%= f.id %>_<%= option.value %>\"
\t\t\t\t\t\t                <%= option.value == model[model.config.id][f.id] ? 'checked=\"checked\"' : '' %>
\t\t\t\t\t\t                class=\"validate <%= require ? 'required' : 'not-required' %>\"  />
\t\t\t\t                \t<%= option.name %>
\t\t\t\t                </label>
\t\t\t\t            </div>
\t\t\t        \t\t<% }) %>
\t\t\t    \t\t</div>
\t\t\t    \t</div>
\t\t\t    <% } %>

\t    \t<% }else if(f.type == \"checkbox\"){ %>


\t\t\t    <div id=\"<%= model.config.id %>_<%= f.id %>_input\"
\t\t\t    class=\"checkbox-input form-group sort-item <%= display ? '' : 'hidden' %> <%= f.class ? f.class : '' %> <%= require ? 'required' : '' %>\"
\t\t\t    data-sort=\"<%= f.sort_order %>\">

\t\t\t    \t<% if(f.options){ %>
\t\t\t    \t\t<%  var i = 0 %>
\t\t\t    \t\t<% _.each(f.options, function(option){ %>
\t\t    \t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t      <label for=\"<%= model.config.id %>_<%= f.id %>\" >
\t\t\t\t\t\t      <input type=\"hidden\"
\t\t\t\t\t\t          name=\"<%= model.config.id %>.<%= f.id %>\"
\t\t\t\t\t\t          value=\"0\" />
\t\t\t\t\t          <input type=\"checkbox\"
\t\t\t\t\t          autocomplete=\"<%= autocomplete %>\"
\t\t\t\t\t          name=\"<%= model.config.id %>.<%= f.id %>.<%= i %>\"
\t\t\t\t\t          id=\"<%= model.config.id %>_<%= f.id %>_<%= option.value %>\"
\t\t\t\t\t          class=\"validate not-required\"
\t\t\t\t\t          <%= require ? ' required ' : '' %>
\t\t\t\t\t          value=\"<%= option.value %>\"
\t\t\t\t\t          <%= model[model.config.id][f.id][i] > 0 ? 'checked=\"checked\"' : '' %> />

\t\t\t\t\t          <span <%= f.tooltip ? 'data-toggle=\"tooltip\"' : '' %> title=\"<%= f.tooltip %>\"><%= htmlDecode(option.name) %></span>
\t\t\t\t\t        </label>
\t\t\t\t\t    </div>
\t\t\t\t\t    <% i++ %>
\t\t\t\t\t    <% })%>
\t\t\t    \t<% }else{ %>
\t\t\t    \t\t<div class=\"col-xs-12\">
\t\t\t\t\t      <label for=\"<%= model.config.id %>_<%= f.id %>\" class=\"control-label\" >
\t\t\t\t\t\t      <input type=\"hidden\"
\t\t\t\t\t\t          name=\"<%= model.config.id %>.<%= f.id %>\"
\t\t\t\t\t\t          value=\"0\" />
\t\t\t\t\t          <input type=\"checkbox\"
\t\t\t\t\t          autocomplete=\"<%= autocomplete %>\"
\t\t\t\t\t          name=\"<%= model.config.id %>.<%= f.id %>\"
\t\t\t\t\t          id=\"<%= model.config.id %>_<%= f.id %>\"
\t\t\t\t\t          class=\"validate <%= require ? ' required ' : ' not-required ' %>\"
\t\t\t\t\t          <%= require ? ' required ' : '' %>
\t\t\t\t\t          value=\"1\"
\t\t\t\t\t          <%= model[model.config.id][f.id] == 1 ? 'checked=\"checked\"' : '' %> />

\t\t\t\t\t          <span <%= f.tooltip ? 'data-toggle=\"tooltip\"' : '' %> title=\"<%= f.tooltip %>\"><%= htmlDecode(f.title) %></span>
\t\t\t\t\t        </label>
\t\t\t\t\t    </div>
\t\t\t    \t<% } %>



\t\t\t    </div>

\t    \t<% }else if(f.type == \"select\"){ %>

\t\t\t\t<div id=\"<%= model.config.id %>_<%= f.id %>_input\"
\t\t        class=\"select-input form-group  sort-item <%= display ? '' : 'hidden' %> <%= f.class ? f.class : '' %> <%= require ? ' required ' : '' %>\"
\t\t        data-sort=\"<%= f.sort_order %>\">
\t\t        <div class=\"<%= col_left %>\">
\t\t          <label class=\"control-label\" for=\"<%= model.config.id %>_<%= f.id %>\">
\t\t            <span class=\"text\" <%= f.tooltip ? 'data-toggle=\"tooltip\"' : '' %> title=\"<%= f.tooltip %>\"><%= f.title %></span>
\t\t          </label>
\t\t        </div>
\t\t        <div class=\"<%= col_right %>\">
\t\t          <select name=\"<%= model.config.id %>.<%= f.id %>\"
\t\t            <%= require ? ' required ' : '' %>
\t\t            id=\"<%= model.config.id %>_<%= f.id %>\"
\t\t            class=\"form-control <%= require ? ' required ' : ' not-required ' %> <%= f.id %>\"  autocomplete=\"<%= autocomplete %>\"  >
\t\t            <option value=\"\">";
        // line 143
        echo ($context["text_select"] ?? null);
        echo "</option>
\t\t            <% if(f.options){ %>
\t\t                <% _.each(f.options, function(option){ %>
\t\t                    <option value=\"<%= option.value %>\" <%= option.value == model[model.config.id][f.id] ? 'selected=\"selected\"' : '' %> ><%= option.name %></option>
\t\t                <% }) %>
\t\t            <% } %>
\t\t          </select>
\t\t        </div>
\t\t      </div>

\t      \t<% }else if(f.type == \"date\" || f.type == \"time\" || f.type == \"datetime\"){ %>
\t      \t\t<div id=\"<%= model.config.id %>_<%= f.id %>_input\"
\t\t\t        class=\"text-input form-group  sort-item <%= display ? '' : 'hidden' %> <%= f.class ? f.class : '' %> <%= require ? ' required ' : '' %>\"
\t\t\t        data-sort=\"<%= f.sort_order %>\">
\t\t\t        <div class=\"<%= col_left %>\">
\t\t\t          <label class=\"control-label\" for=\"<%= model.config.id %>_<%= f.id %>\">
\t\t\t            <span class=\"text\" <%= f.tooltip ? 'data-toggle=\"tooltip\"' : '' %> title=\"<%= f.tooltip %>\"> <%= htmlDecode(f.title) %></span>
\t\t\t          </label>
\t\t\t        </div>
\t\t\t        <div class=\"<%= col_right %>\">
\t\t\t        \t<div class=\"input-group\">
\t\t\t\t        \t<input type=\"text\"
\t\t\t\t\t            name=\"<%= model.config.id %>.<%= f.id %>\"
\t\t\t\t\t            id=\"<%= model.config.id %>_<%= f.id %>\"
\t\t\t\t\t            value=\"<%= model[model.config.id][f.id] %>\"
\t\t\t\t\t            class=\"form-control  <%= f.mask ? 'qc-mask': '' %> <%= f.type %> validate <%= require ? ' required ' : ' not-required ' %> <%= f.id %>\"
\t\t\t\t\t            autocomplete=\"<%= autocomplete %>\"
\t\t\t\t\t            qc-mask=\"<%=f.mask%>\"
\t\t\t\t\t            <% if(f.type == \"date\"){ %>data-date-format=\"MM/DD/YYYY\" <% } %>
\t\t\t\t\t            <% if(f.type == \"time\"){ %>data-date-format=\"HH:mm\" <% } %>
\t\t\t\t\t            <% if(f.type == \"datetime\"){ %>data-date-format=\"YYYY-MM-DD HH:mm\" <% } %>

\t\t\t\t\t            <% if(Number(config.design.placeholder)) {  %>placeholder=\"<%= require ? '*' : '' %> <%= htmlDecode(f.title).replace(':', '') %>\" <% } %>
\t\t\t\t\t            <%= setValidateRules(f.error) %> />
\t\t\t                <span class=\"input-group-btn\" >
\t\t\t                \t<label type=\"button\" class=\"btn btn-default\" for=\"<%= model.config.id %>_<%= f.id %>\"><i class=\"fa fa-calendar\"></i></label>
\t\t\t                </span>
\t\t                </div>
\t\t\t        </div>
\t\t\t      </div>

\t\t\t<% }else if(f.type == \"textarea\"){ %>
\t      \t\t<div id=\"<%= model.config.id %>_<%= f.id %>_input\"
\t\t\t        class=\"text-input form-group  sort-item <%= display ? '' : 'hidden' %> <%= f.class ? f.class : '' %> <%= require ? ' required ' : '' %>\"
\t\t\t        data-sort=\"<%= f.sort_order %>\">
\t\t\t        <div class=\"col-xs-12\">
\t\t\t          <label class=\"control-label\" for=\"<%= model.config.id %>_<%= f.id %>\">
\t\t\t            <span class=\"text\" <%= f.tooltip ? 'data-toggle=\"tooltip\"' : '' %> title=\"<%= f.tooltip %>\"> <%= htmlDecode(f.title) %></span>
\t\t\t          </label>
\t\t\t        </div>
\t\t\t        <div class=\"col-xs-12\">
\t\t\t          <textarea
\t\t\t            name=\"<%= model.config.id %>.<%= f.id %>\"
\t\t\t            id=\"<%= model.config.id %>_<%= f.id %>\"
\t\t\t            class=\"form-control validate <%= require ? ' required ' : 'not-required' %> <%= f.type %> <%= f.id %>\"
\t\t\t            autocomplete=\"<%= autocomplete %>\"
\t\t\t            <% if(Number(config.design.placeholder)) {  %>placeholder=\"<%= require ? '*' : '' %> <%= htmlDecode(f.title).replace(':', '') %>\"<% } %>
\t\t\t            <%= setValidateRules(f.error) %> ><%= model[model.config.id][f.id] %></textarea>
\t\t\t        </div>
\t\t\t      </div>
\t\t\t<% }else if(f.type == \"tel\"){ %>
\t\t\t      <div id=\"<%= model.config.id %>_<%= f.id %>_input\"
\t\t\t        class=\"text-input form-group  sort-item <%= display ? '' : 'hidden' %> <%= f.class ? f.class : '' %> <%= require ? ' required ' : '' %>\"
\t\t\t        data-sort=\"<%= f.sort_order %>\">
\t\t\t        <div class=\"<%= col_left %>\">
\t\t\t          <label class=\"control-label\" for=\"<%= model.config.id %>_<%= f.id %>\">
\t\t\t            <span class=\"text\" <%= f.tooltip ? 'data-toggle=\"tooltip\"' : '' %> title=\"<%= f.tooltip %>\"> <%= htmlDecode(f.title) %></span>
\t\t\t          </label>
\t\t\t        </div>
\t\t\t        <div class=\"<%= col_right %>\">
\t\t\t          <input type=\"<%= f.type %>\"
\t\t\t            name=\"<%= model.config.id %>.<%= f.id %>\"
\t\t\t            id=\"<%= model.config.id %>_<%= f.id %>\"
\t\t\t            value=\"<%= model[model.config.id][f.id] %>\"
\t\t\t            class=\"form-control <%= f.mask ? 'qc-mask': '' %> <%= require ? ' required ' : ' not-required ' %> <%= f.id %> <%= telephone_validation ? 'telephone-validation' : '' %> \"
\t\t\t            autocomplete=\"<%= autocomplete %>\"
\t\t\t            data-telephone_countries=\"<%= telephone_countries %>\"
\t\t\t            data-telephone_preferred_countries=\"<%= telephone_preferred_countries %>\"

\t\t\t            <% if(f.mask){ %>
\t\t\t            qc-mask=\"<%= f.mask %>\"
\t\t\t            <% } %>
\t\t\t            <% if(Number(config.design.placeholder)) {  %>placeholder=\"<%= htmlDecode(f.placeholder).replace(':', '') %>\"<% } %>
\t\t\t            <%= setValidateRules(f.error) %> />
\t\t\t        </div>
\t\t\t      </div>

\t    \t<% }else{ %>
\t    \t\t<div id=\"<%= model.config.id %>_<%= f.id %>_input\"
\t\t\t        class=\"text-input form-group  sort-item <%= display ? '' : 'hidden' %> <%= f.class ? f.class : '' %> <%= require ? ' required ' : '' %>\"
\t\t\t        data-sort=\"<%= f.sort_order %>\">
\t\t\t        <div class=\"<%= col_left %>\">
\t\t\t          <label class=\"control-label\" for=\"<%= model.config.id %>_<%= f.id %>\">
\t\t\t            <span class=\"text\" <%= f.tooltip ? 'data-toggle=\"tooltip\"' : '' %> title=\"<%= f.tooltip %>\"> <%= htmlDecode(f.title) %></span>
\t\t\t          </label>
\t\t\t        </div>
\t\t\t        <div class=\"<%= col_right %>\">
\t\t\t          <input type=\"<%= f.type %>\"
\t\t\t            name=\"<%= model.config.id %>.<%= f.id %>\"
\t\t\t            id=\"<%= model.config.id %>_<%= f.id %>\"
\t\t\t            value=\"<%= model[model.config.id][f.id] %>\"
\t\t\t            class=\"form-control <%= f.mask ? 'qc-mask': '' %> <%= require ? ' required ' : ' not-required ' %> <%= f.id %>\"
\t\t\t            autocomplete=\"<%= autocomplete %>\"
\t\t\t            <% if(f.mask){ %>
\t\t\t            qc-mask=\"<%= f.mask %>\"
\t\t\t            <% } %>
\t\t\t            <% if(Number(config.design.placeholder)) {  %>placeholder=\"<%= require ? '*' : '' %> <%= htmlDecode(f.title).replace(':', '') %>\"<% } %>
\t\t\t            <%= setValidateRules(f.error) %> />
\t\t\t        </div>
\t\t\t      </div>
\t    \t<% } %>
\t    <% } %>
\t<% } %>
<% }) %>
</script>
<script>

function htmlDecode(value) {
\treturn \$(\"<textarea/>\").html(value).text();
}

function htmlEncode(value) {
\treturn \$('<textarea/>').text(value).html();
}

function setValidateRules(rules){
\tvar result = '';
\t_.each(rules, function(rule){

\t\tif(rule.min_length){
\t\t\tresult+= 'data-rule-minlength=\"'+rule.min_length+'\" ';
\t\t\tif(rule.text){
\t\t\t\tresult+= 'data-msg-minlength=\"'+rule.text+'\" ';
\t\t\t}
\t\t}
\t\tif(rule.min_length){
\t\t\tresult+= 'data-rule-minlength=\"'+rule.min_length+'\" ';
\t\t\tif(rule.text){
\t\t\t\tresult+= 'data-msg-minlength=\"'+rule.text+'\" ';
\t\t\t}
\t\t}
\t\tif(rule.max_length){
\t\t\tresult+= 'data-rule-maxlength=\"'+rule.max_length+'\" ';
\t\t\tif(rule.text){
\t\t\t\tresult+= 'data-msg-maxlength=\"'+rule.text+'\" ';
\t\t\t}
\t\t}
\t\tif(rule.checked){
\t\t\tresult+= 'data-rule-min=\"1\" ';
\t\t\tif(rule.text){
\t\t\t\tresult+= 'data-msg-min=\"'+rule.text+'\" ';
\t\t\t}
\t\t}

\t\tif(rule.compare_to){
\t\t\tresult+= 'data-rule-equalto=\"'+rule.compare_to+'\" ';
\t\t\tif(rule.text){
\t\t\t\tresult+= 'data-msg-equalto=\"'+rule.text+'\" ';
\t\t\t}
\t\t}

\t\tif(rule.telephone){
\t\t\tif(rule.text){
\t\t\t\tresult+= 'data-msg-telephone=\"'+rule.text+'\" ';
\t\t\t}
\t\t}

\t\tif(rule.email_exists){
\t\t\tresult+= 'data-rule-remote=\"index.php?route=extension/d_quickcheckout/field/validate_email\" ';
\t\t\tif(rule.text){
\t\t\t\tresult+= 'data-msg-remote=\"'+rule.text+'\" ';
\t\t\t}
\t\t}else if(rule.regex){
\t\t\tresult+= 'data-rule-remote=\"index.php?route=extension/d_quickcheckout/field/validate_regex&regex='+encodeURIComponent(rule.regex)+'\" ';
\t\t\tif(rule.text){
\t\t\t\tresult+= 'data-msg-remote=\"'+rule.text+'\" ';
\t\t\t}
\t\t}





\t})
\treturn result;
}
jQuery.extend(jQuery.validator.messages, {
    required: function(_,e){
     var msg = \$('#'+e.id).data('msg-minlength');
     return msg;
    },
    email: \"";
        // line 334
        echo ($context["error_email"] ?? null);
        echo "\",
    // remote: \"Please fix this field.\",
    // url: \"Please enter a valid URL.\",
    // date: \"Please enter a valid date.\",
    // dateISO: \"Please enter a valid date (ISO).\",
    // number: \"Please enter a valid number.\",
    // digits: \"Please enter only digits.\",
    // creditcard: \"Please enter a valid credit card number.\",
    // equalTo: \"Please enter the same value again.\",
    // accept: \"Please enter a value with a valid extension.\",
    // maxlength: jQuery.validator.format(\"Please enter no more than {0} characters.\"),
    // minlength: jQuery.validator.format(\"Please enter at least {0} characters.\"),
    // rangelength: jQuery.validator.format(\"Please enter a value between {0} and {1} characters long.\"),
    // range: jQuery.validator.format(\"Please enter a value between {0} and {1}.\"),
    // max: jQuery.validator.format(\"Please enter a value less than or equal to {0}.\"),
    // min: jQuery.validator.format(\"Please enter a value greater than or equal to {0}.\")
});

</script>";
    }

    public function getTemplateName()
    {
        return "default/template/d_quickcheckout/field.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  375 => 334,  181 => 143,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/d_quickcheckout/field.twig", "");
    }
}
