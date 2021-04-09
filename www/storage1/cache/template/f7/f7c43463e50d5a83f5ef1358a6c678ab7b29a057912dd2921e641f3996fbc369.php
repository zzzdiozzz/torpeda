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

/* default/template/account/voucher.twig */
class __TwigTemplate_7413c64cee8cf65579555408a1fec75d778c77dc48fcc84f20b0e6d812eb778c extends \Twig\Template
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
        echo "
<div id=\"account-voucher\" class=\"container\">
  <ul class=\"breadcrumb\">

    ";
        // line 5
        $context["breadcrumb_last"] = twig_last($this->env, ($context["breadcrumbs"] ?? null));
        // line 6
        echo "      
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 8
            echo "    
    ";
            // line 9
            if ((twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 9) != twig_get_attribute($this->env, $this->source, ($context["breadcrumb_last"] ?? null), "href", [], "any", false, false, false, 9))) {
                // line 10
                echo "    <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 10);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 10);
                echo "</a></li>
    ";
            } else {
                // line 12
                echo "    <li>";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
                echo "</li>
    ";
            }
            // line 14
            echo "      
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "  </ul>
  ";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "</div>
  ";
        }
        // line 20
        echo "  <div class=\"row\">";
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 21
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 22
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 23
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 24
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 25
            echo "    ";
        } else {
            // line 26
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 27
            echo "    ";
        }
        // line 28
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <h1>";
        // line 29
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <p>";
        // line 30
        echo ($context["text_description"] ?? null);
        echo "</p>
      <form action=\"";
        // line 31
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
        <div class=\"form-group required\">
          <label class=\"col-sm-2 control-label\" for=\"input-to-name\">";
        // line 33
        echo ($context["entry_to_name"] ?? null);
        echo "</label>
          <div class=\"col-sm-10\">
            <input type=\"text\" name=\"to_name\" value=\"";
        // line 35
        echo ($context["to_name"] ?? null);
        echo "\" id=\"input-to-name\" class=\"form-control\" />
            ";
        // line 36
        if (($context["error_to_name"] ?? null)) {
            // line 37
            echo "            <div class=\"text-danger\">";
            echo ($context["error_to_name"] ?? null);
            echo "</div>
            ";
        }
        // line 39
        echo "          </div>
        </div>
        <div class=\"form-group required\">
          <label class=\"col-sm-2 control-label\" for=\"input-to-email\">";
        // line 42
        echo ($context["entry_to_email"] ?? null);
        echo "</label>
          <div class=\"col-sm-10\">
            <input type=\"text\" name=\"to_email\" value=\"";
        // line 44
        echo ($context["to_email"] ?? null);
        echo "\" id=\"input-to-email\" class=\"form-control\" />
            ";
        // line 45
        if (($context["error_to_email"] ?? null)) {
            // line 46
            echo "            <div class=\"text-danger\">";
            echo ($context["error_to_email"] ?? null);
            echo "</div>
            ";
        }
        // line 48
        echo "          </div>
        </div>
        <div class=\"form-group required\">
          <label class=\"col-sm-2 control-label\" for=\"input-from-name\">";
        // line 51
        echo ($context["entry_from_name"] ?? null);
        echo "</label>
          <div class=\"col-sm-10\">
            <input type=\"text\" name=\"from_name\" value=\"";
        // line 53
        echo ($context["from_name"] ?? null);
        echo "\" id=\"input-from-name\" class=\"form-control\" />
            ";
        // line 54
        if (($context["error_from_name"] ?? null)) {
            // line 55
            echo "            <div class=\"text-danger\">";
            echo ($context["error_from_name"] ?? null);
            echo "</div>
            ";
        }
        // line 57
        echo "          </div>
        </div>
        <div class=\"form-group required\">
          <label class=\"col-sm-2 control-label\" for=\"input-from-email\">";
        // line 60
        echo ($context["entry_from_email"] ?? null);
        echo "</label>
          <div class=\"col-sm-10\">
            <input type=\"text\" name=\"from_email\" value=\"";
        // line 62
        echo ($context["from_email"] ?? null);
        echo "\" id=\"input-from-email\" class=\"form-control\" />
            ";
        // line 63
        if (($context["error_from_email"] ?? null)) {
            // line 64
            echo "            <div class=\"text-danger\">";
            echo ($context["error_from_email"] ?? null);
            echo "</div>
            ";
        }
        // line 66
        echo "          </div>
        </div>
        <div class=\"form-group required\">
          <label class=\"col-sm-2 control-label\">";
        // line 69
        echo ($context["entry_theme"] ?? null);
        echo "</label>
          <div class=\"col-sm-10\">
           ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["voucher_themes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher_theme"]) {
            // line 72
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["voucher_theme"], "voucher_theme_id", [], "any", false, false, false, 72) == ($context["voucher_theme_id"] ?? null))) {
                // line 73
                echo "            <div class=\"radio\">
              <label>
                <input type=\"radio\" name=\"voucher_theme_id\" value=\"";
                // line 75
                echo twig_get_attribute($this->env, $this->source, $context["voucher_theme"], "voucher_theme_id", [], "any", false, false, false, 75);
                echo "\" checked=\"checked\" />
                ";
                // line 76
                echo twig_get_attribute($this->env, $this->source, $context["voucher_theme"], "name", [], "any", false, false, false, 76);
                echo "</label>
            </div>
            ";
            } else {
                // line 79
                echo "            <div class=\"radio\">
              <label>
                <input type=\"radio\" name=\"voucher_theme_id\" value=\"";
                // line 81
                echo twig_get_attribute($this->env, $this->source, $context["voucher_theme"], "voucher_theme_id", [], "any", false, false, false, 81);
                echo "\" />
                ";
                // line 82
                echo twig_get_attribute($this->env, $this->source, $context["voucher_theme"], "name", [], "any", false, false, false, 82);
                echo "</label>
            </div>
            ";
            }
            // line 85
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher_theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "            ";
        if (($context["error_theme"] ?? null)) {
            // line 87
            echo "            <div class=\"text-danger\">";
            echo ($context["error_theme"] ?? null);
            echo "</div>
            ";
        }
        // line 89
        echo "          </div>
        </div>
        <div class=\"form-group\">
          <label class=\"col-sm-2 control-label\" for=\"input-message\"><span data-toggle=\"tooltip\" title=\"";
        // line 92
        echo ($context["help_message"] ?? null);
        echo "\">";
        echo ($context["entry_message"] ?? null);
        echo "</span></label>
          <div class=\"col-sm-10\">
            <textarea name=\"message\" cols=\"40\" rows=\"5\" id=\"input-message\" class=\"form-control\">";
        // line 94
        echo ($context["message"] ?? null);
        echo "</textarea>
          </div>
        </div>
        <div class=\"form-group\">
          <label class=\"col-sm-2 control-label\" for=\"input-amount\"><span data-toggle=\"tooltip\" title=\"";
        // line 98
        echo ($context["help_amount"] ?? null);
        echo "\">";
        echo ($context["entry_amount"] ?? null);
        echo "</span></label>
          <div class=\"col-sm-10\">
            <input type=\"text\" name=\"amount\" value=\"";
        // line 100
        echo ($context["amount"] ?? null);
        echo "\" id=\"input-amount\" class=\"form-control\" size=\"5\" />
            ";
        // line 101
        if (($context["error_amount"] ?? null)) {
            // line 102
            echo "            <div class=\"text-danger\">";
            echo ($context["error_amount"] ?? null);
            echo "</div>
            ";
        }
        // line 104
        echo "          </div>
        </div>
        <div class=\"buttons clearfix\">
          <div class=\"pull-right\"> ";
        // line 107
        echo ($context["text_agree"] ?? null);
        echo "
            ";
        // line 108
        if (($context["agree"] ?? null)) {
            // line 109
            echo "            <input type=\"checkbox\" name=\"agree\" value=\"1\" checked=\"checked\" />
            ";
        } else {
            // line 111
            echo "            <input type=\"checkbox\" name=\"agree\" value=\"1\" />
            ";
        }
        // line 113
        echo "            &nbsp;
            <input type=\"submit\" value=\"";
        // line 114
        echo ($context["button_continue"] ?? null);
        echo "\" class=\"btn btn-primary\" />
          </div>
        </div>
      </form>
      ";
        // line 118
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 119
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 121
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/account/voucher.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  354 => 121,  349 => 119,  345 => 118,  338 => 114,  335 => 113,  331 => 111,  327 => 109,  325 => 108,  321 => 107,  316 => 104,  310 => 102,  308 => 101,  304 => 100,  297 => 98,  290 => 94,  283 => 92,  278 => 89,  272 => 87,  269 => 86,  263 => 85,  257 => 82,  253 => 81,  249 => 79,  243 => 76,  239 => 75,  235 => 73,  232 => 72,  228 => 71,  223 => 69,  218 => 66,  212 => 64,  210 => 63,  206 => 62,  201 => 60,  196 => 57,  190 => 55,  188 => 54,  184 => 53,  179 => 51,  174 => 48,  168 => 46,  166 => 45,  162 => 44,  157 => 42,  152 => 39,  146 => 37,  144 => 36,  140 => 35,  135 => 33,  130 => 31,  126 => 30,  122 => 29,  115 => 28,  112 => 27,  109 => 26,  106 => 25,  103 => 24,  100 => 23,  97 => 22,  95 => 21,  90 => 20,  84 => 18,  82 => 17,  79 => 16,  72 => 14,  66 => 12,  58 => 10,  56 => 9,  53 => 8,  49 => 7,  46 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/voucher.twig", "");
    }
}
