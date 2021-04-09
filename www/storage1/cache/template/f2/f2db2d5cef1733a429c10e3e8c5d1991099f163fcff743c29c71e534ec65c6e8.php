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

/* default/template/information/information.twig */
class __TwigTemplate_ec896804822a0b570be5b095bb7d7ab9431847933ca73535e8a0e02b3ebed7a1 extends \Twig\Template
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
<div id=\"information-information\" class=\"container\">
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
      
      ";
        // line 28
        if ( !($context["information_exclusion"] ?? null)) {
            // line 29
            echo "      <ul class=\"list-inline text-muted\">
        ";
            // line 30
            if (($context["show_date"] ?? null)) {
                // line 31
                echo "        <li><i class=\"fa fa-calendar-o\" aria-hidden=\"true\"></i> ";
                echo ($context["date_added"] ?? null);
                echo "</li>
        ";
            }
            // line 33
            echo "        ";
            if (($context["show_author"] ?? null)) {
                // line 34
                echo "        <li><i class=\"fa fa-user-o\" aria-hidden=\"true\"></i> ";
                echo ($context["author"] ?? null);
                echo "</li>
        ";
            }
            // line 36
            echo "        ";
            if ((($context["manufacturer"] ?? null) && ($context["show_manufacturer"] ?? null))) {
                // line 37
                echo "        <li>";
                echo ($context["text_manufacturer"] ?? null);
                echo " <a href=\"";
                echo ($context["manufacturers"] ?? null);
                echo "\">";
                echo ($context["manufacturer"] ?? null);
                echo "</a></li>
        ";
            }
            // line 39
            echo "        ";
            if (($context["show_review"] ?? null)) {
                // line 40
                echo "        <li><a href=\"\" onclick=\"\$('html, body').animate({ scrollTop: \$('#review').offset().top }, 'slow'); return false;\"><i class=\"fa fa-comment-o\" aria-hidden=\"true\"></i> ";
                echo ($context["reviews"] ?? null);
                echo "</a></li>
        <li class=\"rating\">";
                // line 41
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 42
                    echo "          ";
                    if ((($context["rating"] ?? null) < $context["i"])) {
                        echo "<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                    } else {
                        echo "<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                    }
                    // line 43
                    echo "          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "</li>
        ";
            }
            // line 45
            echo "      </ul>
      ";
        }
        // line 47
        echo "      ";
        if ((($context["thumb"] ?? null) &&  !($context["images"] ?? null))) {
            // line 48
            echo "      <div class=\"images\">
        <a class=\"thumbnail\" href=\"";
            // line 49
            echo ($context["popup"] ?? null);
            echo "\" title=\"";
            echo ($context["heading_title"] ?? null);
            echo "\"><img src=\"";
            echo ($context["thumb"] ?? null);
            echo "\" title=\"";
            echo ($context["heading_title"] ?? null);
            echo "\" alt=\"";
            echo ($context["heading_title"] ?? null);
            echo "\" class=\"img-responsive\" /></a>
      </div>
      ";
        } elseif (( !        // line 51
($context["thumb"] ?? null) && (twig_length_filter($this->env, ($context["images"] ?? null)) == 1))) {
            // line 52
            echo "      <div class=\"images\">
      ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 54
                echo "        <a class=\"thumbnail\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 54);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\"> <img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 54);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" /></a>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "      </div>
      ";
        } elseif ((twig_length_filter($this->env,         // line 57
($context["images"] ?? null)) > 1)) {
            // line 58
            echo "      <div class=\"swiper-viewport\">
        <div id=\"slideshow-information\" class=\"swiper-container\">
          <div class=\"swiper-wrapper images\">
            ";
            // line 61
            if (($context["thumb"] ?? null)) {
                // line 62
                echo "            <div class=\"swiper-slide text-center\">
              <a href=\"";
                // line 63
                echo ($context["popup"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\"><img src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" class=\"img-responsive\" /></a>
            </div>
            ";
            }
            // line 66
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 67
                echo "            <div class=\"swiper-slide text-center\">
              <a href=\"";
                // line 68
                echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 68);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 68);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" class=\"img-responsive\" /></a>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "          </div>
        </div>
        <div class=\"swiper-pagination slideshow-information\"></div>
        <div class=\"swiper-pager\">
          <div class=\"swiper-button-next\"></div>
          <div class=\"swiper-button-prev\"></div>
        </div>
      </div>
      <script type=\"text/javascript\"><!--
      \$('#slideshow-information').swiper({
      \tmode: 'horizontal',
      \tslidesPerView: 1,
      \tpagination: '.slideshow-information',
      \tpaginationClickable: true,
      \tnextButton: '.swiper-button-next',
      \tprevButton: '.swiper-button-prev',
      \tspaceBetween: 30,
      \tautoplay: 5000,
      \tautoplayDisableOnInteraction: true
      });
      --></script>
      ";
        }
        // line 93
        echo "\t  ";
        echo ($context["description"] ?? null);
        echo "
      ";
        // line 94
        if (($context["attribute_groups"] ?? null)) {
            // line 95
            echo "      <div id=\"specification\">
        <h3>";
            // line 96
            echo ($context["text_attribute"] ?? null);
            echo "</h3>
        <table class=\"table table-bordered\">
          ";
            // line 98
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 99
                echo "          <thead>
            <tr>
              <td colspan=\"2\"><strong>";
                // line 101
                echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 101);
                echo "</strong></td>
            </tr>
          </thead>
          <tbody>
            ";
                // line 105
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 105));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 106
                    echo "            <tr>
              <td>";
                    // line 107
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 107);
                    echo "</td>
              <td>";
                    // line 108
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 108);
                    echo "</td>
            </tr>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 111
                echo "          </tbody>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 113
            echo "        </table>
      </div>
      ";
        }
        // line 116
        echo "      ";
        if ((($context["show_review"] ?? null) &&  !($context["information_exclusion"] ?? null))) {
            // line 117
            echo "      <h3>";
            echo ($context["text_review"] ?? null);
            echo "</h3>
      <div id=\"review\"></div>
      ";
        }
        // line 120
        echo "      ";
        if ((($context["review_status"] ?? null) &&  !($context["information_exclusion"] ?? null))) {
            // line 121
            echo "      <form class=\"form-horizontal\" id=\"form-review\">
        <h4>";
            // line 122
            echo ($context["text_write"] ?? null);
            echo "</h4>
        ";
            // line 123
            if (($context["review_guest"] ?? null)) {
                // line 124
                echo "        <div class=\"form-group required\">
          <div class=\"col-sm-12\">
            <label class=\"control-label\" for=\"input-name\">";
                // line 126
                echo ($context["entry_name"] ?? null);
                echo "</label>
            <input type=\"text\" name=\"name\" value=\"";
                // line 127
                echo ($context["customer_name"] ?? null);
                echo "\" id=\"input-name\" class=\"form-control\" />
          </div>
        </div>
        <div class=\"form-group required\">
          <div class=\"col-sm-12\">
            <label class=\"control-label\" for=\"input-review\">";
                // line 132
                echo ($context["entry_review"] ?? null);
                echo "</label>
            <textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
            <div class=\"help-block\">";
                // line 134
                echo ($context["text_note"] ?? null);
                echo "</div>
          </div>
        </div>
        <div class=\"form-group required\">
          <div class=\"col-sm-12\">
            <label class=\"control-label\">";
                // line 139
                echo ($context["entry_rating"] ?? null);
                echo "</label>
            &nbsp;&nbsp;&nbsp; ";
                // line 140
                echo ($context["entry_bad"] ?? null);
                echo "&nbsp;
            <input type=\"radio\" name=\"rating\" value=\"1\" />
            &nbsp;
            <input type=\"radio\" name=\"rating\" value=\"2\" />
            &nbsp;
            <input type=\"radio\" name=\"rating\" value=\"3\" />
            &nbsp;
            <input type=\"radio\" name=\"rating\" value=\"4\" />
            &nbsp;
            <input type=\"radio\" name=\"rating\" value=\"5\" />
            &nbsp;";
                // line 150
                echo ($context["entry_good"] ?? null);
                echo "</div>
        </div>
        ";
                // line 152
                echo ($context["captcha"] ?? null);
                echo "
        <div class=\"buttons clearfix\">
          <div class=\"pull-right\">
            <button type=\"button\" id=\"button-review\" data-loading-text=\"";
                // line 155
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"btn btn-primary\">";
                echo ($context["button_continue"] ?? null);
                echo "</button>
          </div>
        </div>
        ";
            } else {
                // line 159
                echo "        ";
                echo ($context["text_login"] ?? null);
                echo "
        ";
            }
            // line 161
            echo "      </form>
      ";
        }
        // line 163
        echo "      ";
        if (($context["tags"] ?? null)) {
            // line 164
            echo "      <p>";
            echo ($context["text_tags"] ?? null);
            echo "
      ";
            // line 165
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, twig_length_filter($this->env, ($context["tags"] ?? null))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 166
                echo "      ";
                if (($context["i"] < (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1))) {
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["tags"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 166);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["tags"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 166);
                    echo "</a>,
      ";
                } else {
                    // line 167
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["tags"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 167);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["tags"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 167);
                    echo "</a> ";
                }
                // line 168
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " </p>
      ";
        }
        // line 170
        echo "      <hr>
      ";
        // line 171
        echo ($context["share"] ?? null);
        echo "

      ";
        // line 173
        if (($context["informations"] ?? null)) {
            // line 174
            echo "      <h3>";
            echo ($context["text_related"] ?? null);
            echo "</h3>
      <div class=\"row\"> ";
            // line 175
            $context["i"] = 0;
            // line 176
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 177
                echo "        ";
                if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
                    // line 178
                    echo "        ";
                    $context["class"] = "col-xs-8 col-sm-6";
                    // line 179
                    echo "        ";
                } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
                    // line 180
                    echo "        ";
                    $context["class"] = "col-xs-6 col-md-4";
                    // line 181
                    echo "        ";
                } else {
                    // line 182
                    echo "        ";
                    $context["class"] = "col-xs-6 col-sm-3";
                    // line 183
                    echo "        ";
                }
                // line 184
                echo "        <div class=\"";
                echo ($context["class"] ?? null);
                echo "\">
          <div class=\"thumbnail\">
            <div class=\"image\"><a href=\"";
                // line 186
                echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 186);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "thumb", [], "any", false, false, false, 186);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "name", [], "any", false, false, false, 186);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "name", [], "any", false, false, false, 186);
                echo "\" class=\"img-responsive\" /></a></div>
            <div class=\"caption\">
              <h4><a href=\"";
                // line 188
                echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 188);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 188);
                echo "</a></h4>
              ";
                // line 189
                if (((($context["show_related_author"] ?? null) || ($context["show_related_date"] ?? null)) || ($context["show_related_review"] ?? null))) {
                    // line 190
                    echo "              <ul class=\"list-inline text-muted small\">
                ";
                    // line 191
                    if (($context["show_related_date"] ?? null)) {
                        // line 192
                        echo "                <li><i class=\"fa fa-calendar-o\" aria-hidden=\"true\"></i> ";
                        echo twig_get_attribute($this->env, $this->source, $context["information"], "date_added", [], "any", false, false, false, 192);
                        echo "</li>
                ";
                    }
                    // line 194
                    echo "                ";
                    if (($context["show_related_author"] ?? null)) {
                        // line 195
                        echo "                <li><i class=\"fa fa-user-o\" aria-hidden=\"true\"></i> ";
                        echo twig_get_attribute($this->env, $this->source, $context["information"], "author", [], "any", false, false, false, 195);
                        echo "</li>
                ";
                    }
                    // line 197
                    echo "                ";
                    if (($context["show_related_review"] ?? null)) {
                        // line 198
                        echo "                <li><i class=\"fa fa-comment-o\" aria-hidden=\"true\"></i> ";
                        echo twig_get_attribute($this->env, $this->source, $context["information"], "reviews", [], "any", false, false, false, 198);
                        echo "</li>
                ";
                    }
                    // line 200
                    echo "                ";
                    if (twig_get_attribute($this->env, $this->source, $context["information"], "rating", [], "any", false, false, false, 200)) {
                        // line 201
                        echo "                <li class=\"rating\"> ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(1, 5));
                        foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                            // line 202
                            echo "                  ";
                            if ((twig_get_attribute($this->env, $this->source, $context["information"], "rating", [], "any", false, false, false, 202) < $context["j"])) {
                                echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i></span> ";
                            } else {
                                echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span> ";
                            }
                            // line 203
                            echo "                  ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        echo "</li>
                ";
                    }
                    // line 205
                    echo "              </ul>
              ";
                }
                // line 207
                echo "              <p>";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "description", [], "any", false, false, false, 207);
                echo "</p>
              <a href=\"";
                // line 208
                echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 208);
                echo "\" class=\"btn btn-primary btn-xs\" role=\"button\">";
                echo ($context["text_read"] ?? null);
                echo "</a>
            </div>
          </div>
        </div>
        ";
                // line 212
                if (((($context["column_left"] ?? null) && ($context["column_right"] ?? null)) && (((($context["i"] ?? null) + 1) % 2) == 0))) {
                    // line 213
                    echo "        <div class=\"clearfix visible-md visible-sm\"></div>
        ";
                } elseif ((                // line 214
($context["column_left"] ?? null) || (($context["column_right"] ?? null) && (((($context["i"] ?? null) + 1) % 3) == 0)))) {
                    // line 215
                    echo "        <div class=\"clearfix visible-md\"></div>
        ";
                } elseif ((((                // line 216
($context["i"] ?? null) + 1) % 4) == 0)) {
                    // line 217
                    echo "        <div class=\"clearfix visible-md\"></div>
        ";
                }
                // line 219
                echo "        ";
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 220
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " </div>
        ";
        }
        // line 222
        echo "      ";
        if (($context["products"] ?? null)) {
            // line 223
            echo "      <h3>";
            echo ($context["text_related_product"] ?? null);
            echo "</h3>
      <div class=\"row\"> ";
            // line 224
            $context["i"] = 0;
            // line 225
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 226
                echo "        ";
                if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
                    // line 227
                    echo "        ";
                    $context["class"] = "col-xs-8 col-sm-6";
                    // line 228
                    echo "        ";
                } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
                    // line 229
                    echo "        ";
                    $context["class"] = "col-xs-6 col-md-4";
                    // line 230
                    echo "        ";
                } else {
                    // line 231
                    echo "        ";
                    $context["class"] = "col-xs-6 col-sm-3";
                    // line 232
                    echo "        ";
                }
                // line 233
                echo "        <div class=\"";
                echo ($context["class"] ?? null);
                echo "\">
          <div class=\"product-thumb transition\">
            <div class=\"image\"><a href=\"";
                // line 235
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 235);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 235);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 235);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 235);
                echo "\" class=\"img-responsive\" /></a></div>
            <div class=\"caption\">
              <h4><a href=\"";
                // line 237
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 237);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 237);
                echo "</a></h4>
              <p>";
                // line 238
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 238);
                echo "</p>
              ";
                // line 239
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 239)) {
                    // line 240
                    echo "              <div class=\"rating\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                        // line 241
                        echo "                ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 241) < $context["j"])) {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i></span> ";
                        } else {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span> ";
                        }
                        // line 242
                        echo "                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " </div>
              ";
                }
                // line 244
                echo "              ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 244)) {
                    // line 245
                    echo "              <p class=\"price\"> ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 245)) {
                        // line 246
                        echo "                ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 246);
                        echo "
                ";
                    } else {
                        // line 247
                        echo " <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 247);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 247);
                        echo "</span> ";
                    }
                    // line 248
                    echo "                ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 248)) {
                        echo " <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 248);
                        echo "</span> ";
                    }
                    echo " </p>
              ";
                }
                // line 249
                echo " </div>
            <div class=\"button-group\">
              <button type=\"button\" onclick=\"cart.add('";
                // line 251
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 251);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 251);
                echo "');\"><span class=\"hidden-xs hidden-sm hidden-md\">";
                echo ($context["button_cart"] ?? null);
                echo "</span> <i class=\"fa fa-shopping-cart\"></i></button>
              <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 252
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 252);
                echo "');\"><i class=\"fa fa-heart\"></i></button>
              <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 253
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 253);
                echo "');\"><i class=\"fa fa-exchange\"></i></button>
            </div>
          </div>
        </div>
        ";
                // line 257
                if (((($context["column_left"] ?? null) && ($context["column_right"] ?? null)) && (((($context["i"] ?? null) + 1) % 2) == 0))) {
                    // line 258
                    echo "        <div class=\"clearfix visible-md visible-sm\"></div>
        ";
                } elseif ((                // line 259
($context["column_left"] ?? null) || (($context["column_right"] ?? null) && (((($context["i"] ?? null) + 1) % 3) == 0)))) {
                    // line 260
                    echo "        <div class=\"clearfix visible-md\"></div>
        ";
                } elseif ((((                // line 261
($context["i"] ?? null) + 1) % 4) == 0)) {
                    // line 262
                    echo "        <div class=\"clearfix visible-md\"></div>
        ";
                }
                // line 264
                echo "        ";
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 265
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " </div>
        ";
        }
        // line 267
        echo "        ";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 268
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>

<script type=\"text/javascript\"><!--
\$('#review').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    \$('#review').fadeOut('slow');

    \$('#review').load(this.href);

    \$('#review').fadeIn('slow');
});

\$('#review').load('index.php?route=information/information/review&information_id=";
        // line 282
        echo ($context["information_id"] ?? null);
        echo "');

\$('#button-review').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=information/information/write&information_id=";
        // line 286
        echo ($context["information_id"] ?? null);
        echo "',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tdata: \$(\"#form-review\").serialize(),
\t\tbeforeSend: function() {
\t\t\t\$('#button-review').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-review').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#review').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#review').after('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

\t\t\t\t\$('input[name=\\'name\\']').val('');
\t\t\t\t\$('textarea[name=\\'text\\']').val('');
\t\t\t\t\$('input[name=\\'rating\\']:checked').prop('checked', false);
\t\t\t}
\t\t}
\t});
});

\$(document).ready(function() {
\t\$('.images').magnificPopup({
\t\ttype:'image',
\t\tdelegate: 'a',
\t\tgallery: {
\t\t\tenabled: true
\t\t}
\t});
});
//--></script> 
        
";
        // line 325
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/information/information.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  916 => 325,  874 => 286,  867 => 282,  850 => 268,  845 => 267,  836 => 265,  833 => 264,  829 => 262,  827 => 261,  824 => 260,  822 => 259,  819 => 258,  817 => 257,  808 => 253,  802 => 252,  794 => 251,  790 => 249,  778 => 248,  771 => 247,  765 => 246,  762 => 245,  759 => 244,  750 => 242,  743 => 241,  738 => 240,  736 => 239,  732 => 238,  726 => 237,  715 => 235,  709 => 233,  706 => 232,  703 => 231,  700 => 230,  697 => 229,  694 => 228,  691 => 227,  688 => 226,  683 => 225,  681 => 224,  676 => 223,  673 => 222,  664 => 220,  661 => 219,  657 => 217,  655 => 216,  652 => 215,  650 => 214,  647 => 213,  645 => 212,  636 => 208,  631 => 207,  627 => 205,  618 => 203,  611 => 202,  606 => 201,  603 => 200,  597 => 198,  594 => 197,  588 => 195,  585 => 194,  579 => 192,  577 => 191,  574 => 190,  572 => 189,  566 => 188,  555 => 186,  549 => 184,  546 => 183,  543 => 182,  540 => 181,  537 => 180,  534 => 179,  531 => 178,  528 => 177,  523 => 176,  521 => 175,  516 => 174,  514 => 173,  509 => 171,  506 => 170,  497 => 168,  490 => 167,  480 => 166,  476 => 165,  471 => 164,  468 => 163,  464 => 161,  458 => 159,  449 => 155,  443 => 152,  438 => 150,  425 => 140,  421 => 139,  413 => 134,  408 => 132,  400 => 127,  396 => 126,  392 => 124,  390 => 123,  386 => 122,  383 => 121,  380 => 120,  373 => 117,  370 => 116,  365 => 113,  358 => 111,  349 => 108,  345 => 107,  342 => 106,  338 => 105,  331 => 101,  327 => 99,  323 => 98,  318 => 96,  315 => 95,  313 => 94,  308 => 93,  284 => 71,  267 => 68,  264 => 67,  259 => 66,  245 => 63,  242 => 62,  240 => 61,  235 => 58,  233 => 57,  230 => 56,  213 => 54,  209 => 53,  206 => 52,  204 => 51,  191 => 49,  188 => 48,  185 => 47,  181 => 45,  172 => 43,  165 => 42,  161 => 41,  156 => 40,  153 => 39,  143 => 37,  140 => 36,  134 => 34,  131 => 33,  125 => 31,  123 => 30,  120 => 29,  118 => 28,  113 => 26,  106 => 25,  103 => 24,  100 => 23,  97 => 22,  94 => 21,  91 => 20,  88 => 19,  86 => 18,  82 => 17,  79 => 16,  72 => 14,  66 => 12,  58 => 10,  56 => 9,  53 => 8,  49 => 7,  46 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/information/information.twig", "");
    }
}
