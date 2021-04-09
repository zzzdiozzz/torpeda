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

/* default/template/checkout/d_quickcheckout.twig */
class __TwigTemplate_974323f731aae35f046b257cc2ad6dbd85f27de68ee21d0b2de8ab397dd58c9e extends \Twig\Template
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
<div class=\"container\" id=\"container\">
  <ul class=\"breadcrumb qc-breadcrumb\">

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
            echo " 
    <li><a href=\"";
            // line 8
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 8);
            echo " \">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 8);
            echo " </a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo " 
  </ul>
  ";
        // line 11
        if (($context["error_warning"] ?? null)) {
            echo " 
  <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            // line 12
            echo ($context["error_warning"] ?? null);
            echo " 
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 15
        echo " 
  <div class=\"row\">";
        // line 16
        echo ($context["column_left"] ?? null);
        echo " 
    ";
        // line 17
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            echo " 
    ";
            // line 18
            $context["class"] = "col-sm-6";
            // line 19
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            echo " 
    ";
            // line 20
            $context["class"] = "col-sm-9";
            // line 21
            echo "     ";
        } else {
            echo "   
    ";
            // line 22
            $context["class"] = "col-sm-12";
            // line 23
            echo "      ";
        }
        // line 24
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo " \">";
        echo ($context["content_top"] ?? null);
        echo " 

<!-- Quick Checkout v4.0 by Dreamvention.com checkout/quickcheckout -->
  ";
        // line 27
        echo ($context["d_quickcheckout"] ?? null);
        echo " 

      ";
        // line 29
        echo ($context["content_bottom"] ?? null);
        echo " </div>
    ";
        // line 30
        echo ($context["column_right"] ?? null);
        echo " </div>
</div>
";
        // line 32
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "default/template/checkout/d_quickcheckout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 32,  128 => 30,  124 => 29,  119 => 27,  110 => 24,  107 => 23,  105 => 22,  100 => 21,  98 => 20,  93 => 19,  91 => 18,  87 => 17,  83 => 16,  80 => 15,  73 => 12,  69 => 11,  65 => 9,  55 => 8,  49 => 7,  46 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/checkout/d_quickcheckout.twig", "");
    }
}
