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

/* default/template/account/transaction.twig */
class __TwigTemplate_0af62ef9c9b35fcf221dd3472b7544912765518e441f1652ec36c5d2dbfaad6f extends \Twig\Template
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
<div id=\"account-transaction\" class=\"container\">
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
  <div class=\"row\">";
        // line 17
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 18
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 19
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 20
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 21
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 22
            echo "    ";
        } else {
            // line 23
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 24
            echo "    ";
        }
        // line 25
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <h1>";
        // line 26
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <p>";
        // line 27
        echo ($context["text_total"] ?? null);
        echo " <b>";
        echo ($context["total"] ?? null);
        echo "</b>.</p>
      <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <td class=\"text-left\">";
        // line 32
        echo ($context["column_date_added"] ?? null);
        echo "</td>
              <td class=\"text-left\">";
        // line 33
        echo ($context["column_description"] ?? null);
        echo "</td>
              <td class=\"text-right\">";
        // line 34
        echo ($context["column_amount"] ?? null);
        echo "</td>
            </tr>
          </thead>
          <tbody>
          
          ";
        // line 39
        if (($context["transactions"] ?? null)) {
            // line 40
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["transactions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["transaction"]) {
                // line 41
                echo "          <tr>
            <td class=\"text-left\">";
                // line 42
                echo twig_get_attribute($this->env, $this->source, $context["transaction"], "date_added", [], "any", false, false, false, 42);
                echo "</td>
            <td class=\"text-left\">";
                // line 43
                echo twig_get_attribute($this->env, $this->source, $context["transaction"], "description", [], "any", false, false, false, 43);
                echo "</td>
            <td class=\"text-right\">";
                // line 44
                echo twig_get_attribute($this->env, $this->source, $context["transaction"], "amount", [], "any", false, false, false, 44);
                echo "</td>
          </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transaction'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "          ";
        } else {
            // line 48
            echo "          <tr>
            <td class=\"text-center\" colspan=\"5\">";
            // line 49
            echo ($context["text_empty"] ?? null);
            echo "</td>
          </tr>
          ";
        }
        // line 52
        echo "            </tbody>
          
        </table>
      </div>
      <div class=\"row\">
        <div class=\"col-sm-6 text-left\">";
        // line 57
        echo ($context["pagination"] ?? null);
        echo "</div>
        <div class=\"col-sm-6 text-right\">";
        // line 58
        echo ($context["results"] ?? null);
        echo "</div>
      </div>
      <div class=\"buttons clearfix\">
        <div class=\"pull-right\"><a href=\"";
        // line 61
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
      </div>
      ";
        // line 63
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 64
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 66
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/account/transaction.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 66,  210 => 64,  206 => 63,  199 => 61,  193 => 58,  189 => 57,  182 => 52,  176 => 49,  173 => 48,  170 => 47,  161 => 44,  157 => 43,  153 => 42,  150 => 41,  145 => 40,  143 => 39,  135 => 34,  131 => 33,  127 => 32,  117 => 27,  113 => 26,  106 => 25,  103 => 24,  100 => 23,  97 => 22,  94 => 21,  91 => 20,  88 => 19,  86 => 18,  82 => 17,  79 => 16,  72 => 14,  66 => 12,  58 => 10,  56 => 9,  53 => 8,  49 => 7,  46 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/transaction.twig", "");
    }
}
