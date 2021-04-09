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
class __TwigTemplate_3f4af461dcfdf81a4957b7e29f2021392c08a063139dd37bab622d82ed5b4c4e extends \Twig\Template
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
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            echo " 
    <li><a href=\"";
            // line 5
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            echo " \">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            echo " </a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo " 
  </ul>
  ";
        // line 8
        if (($context["error_warning"] ?? null)) {
            echo " 
  <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            // line 9
            echo ($context["error_warning"] ?? null);
            echo " 
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 12
        echo " 
  <div class=\"row\">";
        // line 13
        echo ($context["column_left"] ?? null);
        echo " 
    ";
        // line 14
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            echo " 
    ";
            // line 15
            $context["class"] = "col-sm-6";
            // line 16
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            echo " 
    ";
            // line 17
            $context["class"] = "col-sm-9";
            // line 18
            echo "     ";
        } else {
            echo "   
    ";
            // line 19
            $context["class"] = "col-sm-12";
            // line 20
            echo "      ";
        }
        // line 21
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo " \">";
        echo ($context["content_top"] ?? null);
        echo " 

<!-- Quick Checkout v4.0 by Dreamvention.com checkout/quickcheckout -->
  ";
        // line 24
        echo ($context["d_quickcheckout"] ?? null);
        echo " 

      ";
        // line 26
        echo ($context["content_bottom"] ?? null);
        echo " </div>
    ";
        // line 27
        echo ($context["column_right"] ?? null);
        echo " </div>
</div>
";
        // line 29
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
        return array (  127 => 29,  122 => 27,  118 => 26,  113 => 24,  104 => 21,  101 => 20,  99 => 19,  94 => 18,  92 => 17,  87 => 16,  85 => 15,  81 => 14,  77 => 13,  74 => 12,  67 => 9,  63 => 8,  59 => 6,  49 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/checkout/d_quickcheckout.twig", "");
    }
}
