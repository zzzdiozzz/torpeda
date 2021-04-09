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

/* extension/module/store.twig */
class __TwigTemplate_9d7c33a7be68456d203d0b0f98335fadb51b178e6ad3ec952e77348cb3d92221 extends \Twig\Template
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
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-module\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        echo ($context["text_edit"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 27
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal\">
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 29
        echo ($context["help_admin"] ?? null);
        echo "\">";
        echo ($context["entry_admin"] ?? null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <label class=\"radio-inline\">
                ";
        // line 32
        if (($context["module_store_admin"] ?? null)) {
            // line 33
            echo "                <input type=\"radio\" name=\"module_store_admin\" value=\"1\" checked=\"checked\" />
                ";
            // line 34
            echo ($context["text_yes"] ?? null);
            echo "
                ";
        } else {
            // line 36
            echo "                <input type=\"radio\" name=\"module_store_admin\" value=\"1\" />
                ";
            // line 37
            echo ($context["text_yes"] ?? null);
            echo "
                ";
        }
        // line 39
        echo "              </label>
              <label class=\"radio-inline\">
                ";
        // line 41
        if ( !($context["module_store_admin"] ?? null)) {
            // line 42
            echo "                <input type=\"radio\" name=\"module_store_admin\" value=\"0\" checked=\"checked\" />
                ";
            // line 43
            echo ($context["text_no"] ?? null);
            echo "
                ";
        } else {
            // line 45
            echo "                <input type=\"radio\" name=\"module_store_admin\" value=\"0\" />
                ";
            // line 46
            echo ($context["text_no"] ?? null);
            echo "
                ";
        }
        // line 48
        echo "              </label>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 52
        echo ($context["entry_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"module_store_status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 55
        if (($context["module_store_status"] ?? null)) {
            // line 56
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 57
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 59
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 60
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 62
        echo "              </select>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 70
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/store.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 70,  189 => 62,  184 => 60,  179 => 59,  174 => 57,  169 => 56,  167 => 55,  161 => 52,  155 => 48,  150 => 46,  147 => 45,  142 => 43,  139 => 42,  137 => 41,  133 => 39,  128 => 37,  125 => 36,  120 => 34,  117 => 33,  115 => 32,  107 => 29,  102 => 27,  96 => 24,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/store.twig", "");
    }
}
