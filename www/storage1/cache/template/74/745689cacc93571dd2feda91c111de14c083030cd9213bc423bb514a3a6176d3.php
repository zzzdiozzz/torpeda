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

/* extension/d_seo_module/d_seo_module/category_form_script.twig */
class __TwigTemplate_6be4b11460913c5f0182c8abb8b744b1833f06537c7bd343a18b3bf9466e6909 extends \Twig\Template
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
        echo "<script type=\"text/javascript\" src=\"view/javascript/d_tinysort/tinysort.min.js\"></script>
<script type=\"text/javascript\" src=\"view/javascript/d_tinysort/jquery.tinysort.min.js\"></script>
<script type=\"text/javascript\" src=\"view/javascript/d_rubaxa_sortable/sortable.js\"></script>
<script type=\"text/javascript\">
\tif (\$('#tab-general > .sort-item').length) {
\t\ttinysort('#tab-general > .sort-item', {attr: 'data-sort-order'});
\t}
\t\t
\t\$('#tab-general > #language > li > a').each(function(index) {
\t\tif (\$(\$(this).attr('href') + ' > .sort-item').length) {
\t\t\ttinysort(\$(this).attr('href') + ' > .sort-item', {attr: 'data-sort-order'});
\t\t}
\t});
\t
\t\$('#tab-general > #store > li > a').each(function(index) {
\t\tif (\$(\$(this).attr('href') + ' > .sort-item').length) {
\t\t\ttinysort(\$(this).attr('href') + ' > .sort-item', {attr: 'data-sort-order'});
\t\t}
\t\t
\t\t\$('#tab-general ' + \$(this).attr('href') + '_language > li > a').each(function(index) {
\t\t\tif (\$(\$(this).attr('href') + ' > .sort-item').length) {
\t\t\t\ttinysort(\$(this).attr('href') + ' > .sort-item', {attr: 'data-sort-order'});
\t\t\t}
\t\t});\t
\t});
\t
\tif (\$('#tab-data > .sort-item').length) {
\t\ttinysort('#tab-data > .sort-item', {attr: 'data-sort-order'});
\t}
\t\t
\t\$('.btn-target-keyword-add').on('click', function(event) {
\t\tvar element = \$(this).parents('.form-group').find('.input-target-keyword');
\t\tvar store_id = \$(element).attr('store_id');
\t\tvar language_id = \$(element).attr('language_id');
\t\tvar keyword = \$(element).val();
\t\tvar is_keyword = 0;
\t\t
\t\t\$('[name^=\"target_keyword[' + store_id + '][' + language_id + ']\"]').each(function(index) {
\t\t\tif (keyword == \$(this).val()) is_keyword = 1;
\t\t});
\t\t
\t\tif (keyword && !is_keyword) {
\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=extension/module/d_seo_module/getTargetKeywords&";
        // line 44
        echo ($context["url_token"] ?? null);
        echo "',
\t\t\t\ttype: 'post',
\t\t\t\tdata: 'store_id=' + store_id + '&keyword=' + keyword,
\t\t\t\tdataType: 'json',
\t\t\t\tsuccess: function(json) {
\t\t\t\t\thtml  = '<div class=\"target-keyword target-keyword-' + keyword + ' sort-item\">';
\t\t\t\t\t
\t\t\t\t\tif (json['target_keywords'].length != 0) {
\t\t\t\t\t\thtml += '<span class=\"target-keyword-title text-danger\">' + keyword + '</span>';
\t\t\t\t\t} else {
\t\t\t\t\t\thtml += '<span class=\"target-keyword-title\">' + keyword + '</span>';
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t\thtml += '<span class=\"icons\"><i class=\"icon-delete fa fa-minus-circle\" onclick=\"\$(this).parents(\\'.target-keyword\\').remove()\"></i><i class=\"icon-drag fa fa-bars\"></i></span>';
\t\t\t\t\thtml += '<input type=\"hidden\" name=\"target_keyword[' + store_id + '][' + language_id + '][]\" value=\"' + keyword + '\" />';
\t\t\t\t\thtml += '</div>';
\t\t\t\t\t
\t\t\t\t\t\$(element).val('');
\t\t\t\t\t
\t\t\t\t\t\$('#target_keywords_' + store_id + '_' + language_id).append(html);
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\tconsole.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t});
\t
\t\$('.target-keywords').each(function(index) {
\t\tvar store_id = \$(this).attr('store_id');
\t\tvar language_id = \$(this).attr('language_id');
\t\t
\t\tSortable.create(document.getElementById('target_keywords_' + store_id + '_' + language_id), {
\t\t\tgroup: \"sorting\",
\t\t\tsort: true,
\t\t\tanimation: 150,
\t\t\thandle: \".icon-drag\"
\t\t});
\t});
</script>";
    }

    public function getTemplateName()
    {
        return "extension/d_seo_module/d_seo_module/category_form_script.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 44,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/d_seo_module/d_seo_module/category_form_script.twig", "");
    }
}
