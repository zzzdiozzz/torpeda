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

/* extension/d_seo_module/d_seo_module/setting_tab_general_language.twig */
class __TwigTemplate_4bdecc9adee5d8ea42562dd56796cfd181f2ac7721e55a1cd93c00fadcb17b6a extends \Twig\Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 2
            if (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["field"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["code"] ?? null) : null) == "target_keyword")) {
                // line 3
                echo "<div class=\"form-group sort-item\" data-sort-order=\"";
                echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["field"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["sort_order"] ?? null) : null);
                echo "\">
    <label class=\"col-sm-2 control-label\" for=\"input_target_keyword_";
                // line 4
                echo ($context["language_id"] ?? null);
                echo "\"><span data-toggle=\"tooltip\" title=\"";
                echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["field"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["description"] ?? null) : null);
                echo "\">";
                echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["field"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["name"] ?? null) : null);
                echo "</span></label>
    <div class=\"col-sm-10\">
\t\t<div class=\"input-group\">
\t\t\t<input type=\"text\" value=\"\" placeholder=\"";
                // line 7
                echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["field"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["name"] ?? null) : null);
                echo "\" id=\"input_target_keyword_";
                echo ($context["language_id"] ?? null);
                echo "\" class=\"input-target-keyword form-control\" language_id=\"";
                echo ($context["language_id"] ?? null);
                echo "\"/>
\t\t\t<span class=\"input-group-addon btn btn-target-keyword-add\"><i class=\"fa fa-plus\"></i></span>
        </div>
        <div id=\"target_keywords_";
                // line 10
                echo ($context["language_id"] ?? null);
                echo "\" class=\"target-keywords well well-sm\" language_id=\"";
                echo ($context["language_id"] ?? null);
                echo "\">
\t\t\t";
                // line 11
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["target_keyword"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[($context["language_id"] ?? null)] ?? null) : null));
                foreach ($context['_seq'] as $context["sort_order"] => $context["keyword"]) {
                    // line 12
                    echo "\t\t\t<div class=\"target-keyword sort-item\">
\t\t\t\t<span class=\"target-keyword-title ";
                    // line 13
                    if ((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["target_keyword_duplicate"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[$context["sort_order"]] ?? null) : null)) {
                        echo "text-danger";
                    }
                    echo "\">";
                    echo $context["keyword"];
                    echo "</span>
\t\t\t\t<span class=\"icons\"><i class=\"icon-delete fa fa-minus-circle\" onclick=\"\$(this).parents('.target-keyword').remove()\"></i><i class=\"icon-drag fa fa-bars\"></i></span>
\t\t\t\t<input type=\"hidden\" name=\"target_keyword[";
                    // line 15
                    echo ($context["language_id"] ?? null);
                    echo "][]\" value=\"";
                    echo $context["keyword"];
                    echo "\" />
\t\t\t</div>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['sort_order'], $context['keyword'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 18
                echo "        </div>
    </div>
</div>
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "extension/d_seo_module/d_seo_module/setting_tab_general_language.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 18,  90 => 15,  81 => 13,  78 => 12,  74 => 11,  68 => 10,  58 => 7,  48 => 4,  43 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/d_seo_module/d_seo_module/setting_tab_general_language.twig", "");
    }
}
