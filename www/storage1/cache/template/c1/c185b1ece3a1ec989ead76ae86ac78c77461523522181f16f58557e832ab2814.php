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

/* extension/d_seo_module/d_seo_module/category_form_style.twig */
class __TwigTemplate_29d3d9254cf7812b58f73a83da001c910fb18b9772910b34342fdc3dbec9d33f extends \Twig\Template
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
        echo "<link href=\"view/stylesheet/d_bootstrap_extra/bootstrap.css\" rel=\"stylesheet\" />
<link href=\"view/javascript/d_rubaxa_sortable/sortable.css\" rel=\"stylesheet\" />
<style type=\"text/css\">
\t.target-keywords.well {
\t\toverflow-y: auto;
\t\theight: 150px;
\t\tmargin-bottom: 0px;
\t}
\t.target-keywords.well .sort-item {
\t\tposition: relative;
\t}
\t.target-keywords.well .sort-item .icons {
\t\tposition: absolute;
\t\tright: 10px;
\t\tcursor: pointer;
\t}
\t.target-keywords.well > .sort-item .icons .icon-delete {
\t\tmargin-right: 5px;
\t}\t
</style>";
    }

    public function getTemplateName()
    {
        return "extension/d_seo_module/d_seo_module/category_form_style.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/d_seo_module/d_seo_module/category_form_style.twig", "");
    }
}
