<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/construction_zymphonies_theme/templates/layout/page.html.twig */
class __TwigTemplate_3f7116cba100ad2a7e41553e92abbee3c988c4dc504ab529fcaf62cb13d37696 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 71, "for" => 98];
        $filters = ["escape" => 72, "raw" => 99, "date" => 426];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'raw', 'date'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 60
        echo "

<!-- Start: Header -->
<div class=\"header\">
  <div class=\"container-\">
    <div class=\"row\">

      <div class=\"navbar-header col-md-3\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
          <i class=\"fas fa-bars\"></i>
        </button>
        ";
        // line 71
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 72
            echo "          ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
            echo "
        ";
        }
        // line 74
        echo "      </div>

      ";
        // line 76
        if (($this->getAttribute(($context["page"] ?? null), "primary_menu", []) || $this->getAttribute(($context["page"] ?? null), "search", []))) {
            // line 77
            echo "        <div class=\"col-md-9 menu-wrap\">
          ";
            // line 78
            if ($this->getAttribute(($context["page"] ?? null), "search", [])) {
                // line 79
                echo "            ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "search", [])), "html", null, true);
                echo "
          ";
            }
            // line 81
            echo "          ";
            if ($this->getAttribute(($context["page"] ?? null), "primary_menu", [])) {
                // line 82
                echo "            ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
                echo "
          ";
            }
            // line 84
            echo "        </div>
      ";
        }
        // line 86
        echo "
    </div>
  </div>
</div>
<!-- End: Header -->


<!-- Start: Slides -->
";
        // line 94
        if ((($context["is_front"] ?? null) && ($context["show_slideshow"] ?? null))) {
            // line 95
            echo "  <div class=\"container-\">
    <div class=\"flexslider\">
      <ul class=\"slides\">
        ";
            // line 98
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slider_content"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider_contents"]) {
                // line 99
                echo "          ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($context["slider_contents"]));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider_contents'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "      </ul>
    </div>
  </div>
";
        }
        // line 105
        echo "<!-- End: Slides -->


<!--Start: Top Message -->
";
        // line 109
        if ($this->getAttribute(($context["page"] ?? null), "top_message", [])) {
            // line 110
            echo "  <div class=\"top-message\">
    <div class=\"container\">
      ";
            // line 112
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "top_message", [])), "html", null, true);
            echo "
    </div>
  </div>
";
        }
        // line 116
        echo "<!--End: Top Message -->


<!-- Start: Top widget -->
";
        // line 120
        if ((($this->getAttribute(($context["page"] ?? null), "topwidget_first", []) || $this->getAttribute(($context["page"] ?? null), "topwidget_second", [])) || $this->getAttribute(($context["page"] ?? null), "topwidget_third", []))) {
            // line 121
            echo "  <div class=\"topwidget\" id=\"topwidget\">
    <div class=\"container\">
      ";
            // line 123
            if ($this->getAttribute(($context["page"] ?? null), "topwidget_title", [])) {
                // line 124
                echo "        <div class=\"custom-block-title\" >
          ";
                // line 125
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topwidget_title", [])), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 128
            echo "
        <div class=\"row topwidget-list clearfix\">
          ";
            // line 130
            if ($this->getAttribute(($context["page"] ?? null), "topwidget_first", [])) {
                // line 131
                echo "            <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null)), "html", null, true);
                echo ">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topwidget_first", [])), "html", null, true);
                echo "</div>
          ";
            }
            // line 133
            echo "          ";
            if ($this->getAttribute(($context["page"] ?? null), "topwidget_second", [])) {
                // line 134
                echo "            <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null)), "html", null, true);
                echo ">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topwidget_second", [])), "html", null, true);
                echo "</div>
          ";
            }
            // line 136
            echo "          ";
            if ($this->getAttribute(($context["page"] ?? null), "topwidget_third", [])) {
                // line 137
                echo "            <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null)), "html", null, true);
                echo ">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topwidget_third", [])), "html", null, true);
                echo "</div>
          ";
            }
            // line 139
            echo "        </div>
    </div>
  </div>
";
        }
        // line 143
        echo "<!--End: Top widget -->

    
<!--Start: Highlighted -->
";
        // line 147
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 148
            echo "  <div class=\"highlighted\">
    <div class=\"container\">
      ";
            // line 150
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
            echo "
    </div>
  </div>
";
        }
        // line 154
        echo "<!--End: Highlighted -->


<!--Start: Title -->
";
        // line 158
        if (($this->getAttribute(($context["page"] ?? null), "page_title", []) &&  !($context["is_front"] ?? null))) {
            // line 159
            echo "  <div id=\"page-title\">
    <div id=\"page-title-inner\">
      <div class=\"container\">
        ";
            // line 162
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "page_title", [])), "html", null, true);
            echo "
      </div>
    </div>
  </div>
";
        }
        // line 167
        echo "<!--End: Title -->


<div class=\"main-content\">
  <div class=\"container\">
    <div class=\"\">

      <div class=\"row layout\">
        <!--- Start: Left SideBar -->
        ";
        // line 176
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 177
            echo "          <div class=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarfirst"] ?? null)), "html", null, true);
            echo ">
            <div class=\"sidebar\">
              ";
            // line 179
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
            </div>
          </div>
        ";
        }
        // line 183
        echo "        <!-- End Left SideBar -->

        <!--- Start Content -->
        ";
        // line 186
        if ($this->getAttribute(($context["page"] ?? null), "content", [])) {
            // line 187
            echo "          <div class=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contentlayout"] ?? null)), "html", null, true);
            echo ">
            <div class=\"content_layout\">

              <!--Start: Breadcrumb -->
              ";
            // line 191
            if ( !($context["is_front"] ?? null)) {
                // line 192
                echo "                <div class=\"row\">
                  <div class=\"col-md-12\">";
                // line 193
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])), "html", null, true);
                echo "</div>
                </div>
              ";
            }
            // line 196
            echo "              <!--End: Breadcrumb -->
              
              ";
            // line 198
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
            echo "
              
            </div>              
          </div>
        ";
        }
        // line 203
        echo "        <!-- End: Content -->

        <!-- Start: Right SideBar -->
        ";
        // line 206
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 207
            echo "          <div class=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null)), "html", null, true);
            echo ">
            <div class=\"sidebar\">
              ";
            // line 209
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
            </div>
          </div>
        ";
        }
        // line 213
        echo "        <!-- End: Right SideBar -->
        
      </div>
    </div>
  </div>
</div>
<!-- End: Main content -->


<!-- Start: Features -->
";
        // line 223
        if ((($this->getAttribute(($context["page"] ?? null), "features_first", []) || $this->getAttribute(($context["page"] ?? null), "features_second", [])) || $this->getAttribute(($context["page"] ?? null), "features_third", []))) {
            // line 224
            echo "
  <div class=\"features\">
    <div class=\"container\">

      ";
            // line 228
            if ($this->getAttribute(($context["page"] ?? null), "features_title", [])) {
                // line 229
                echo "        <h2 class=\"custom-block-title\" >
          ";
                // line 230
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "features_title", [])), "html", null, true);
                echo "
        </h2>
      ";
            }
            // line 233
            echo "
      <div class=\"row features-list\">
        ";
            // line 235
            if ($this->getAttribute(($context["page"] ?? null), "features_first", [])) {
                // line 236
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_first_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 237
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "features_first", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 240
            echo "        ";
            if ($this->getAttribute(($context["page"] ?? null), "features_second", [])) {
                // line 241
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 242
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "features_second", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 245
            echo "        ";
            if ($this->getAttribute(($context["page"] ?? null), "features_third", [])) {
                // line 246
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 247
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "features_third", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 250
            echo "      </div>
    </div>
  </div>
";
        }
        // line 254
        echo "<!--End: Features -->


<!-- Start: Updates widgets -->
";
        // line 258
        if ((($this->getAttribute(($context["page"] ?? null), "updates_first", []) || $this->getAttribute(($context["page"] ?? null), "updates_second", [])) || $this->getAttribute(($context["page"] ?? null), "updates_third", []))) {
            // line 259
            echo "
  <div class=\"updates\" id=\"updates\">    
    <div class=\"container-\">

      ";
            // line 263
            if ($this->getAttribute(($context["page"] ?? null), "updates_title", [])) {
                // line 264
                echo "        <h2 class=\"custom-block-title\" >
          ";
                // line 265
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "updates_title", [])), "html", null, true);
                echo "
        </h2>
      ";
            }
            // line 268
            echo "
      <div class=\"row updates-list\">    
        ";
            // line 270
            if ($this->getAttribute(($context["page"] ?? null), "updates_first", [])) {
                // line 271
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 272
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "updates_first", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 275
            echo "        ";
            if ($this->getAttribute(($context["page"] ?? null), "updates_second", [])) {
                // line 276
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 277
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "updates_second", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 280
            echo "        ";
            if ($this->getAttribute(($context["page"] ?? null), "updates_third", [])) {
                // line 281
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 282
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "updates_third", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 285
            echo "        ";
            if ($this->getAttribute(($context["page"] ?? null), "updates_forth", [])) {
                // line 286
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 287
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "updates_forth", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 290
            echo "      </div>
    </div>
  </div>
";
        }
        // line 294
        echo "<!--End: Updates widgets -->


<!-- Start: Middle widgets -->
";
        // line 298
        if (((($this->getAttribute(($context["page"] ?? null), "midwidget_first", []) || $this->getAttribute(($context["page"] ?? null), "midwidget_second", [])) || $this->getAttribute(($context["page"] ?? null), "midwidget_third", [])) || $this->getAttribute(($context["page"] ?? null), "midwidget_forth", []))) {
            // line 299
            echo "  <div class=\"midwidget\" id=\"midwidget\">    
    <div class=\"container\">

      ";
            // line 302
            if ($this->getAttribute(($context["page"] ?? null), "midwidget_title", [])) {
                // line 303
                echo "        <h2 class=\"custom-block-title\" >
          ";
                // line 304
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "midwidget_title", [])), "html", null, true);
                echo "
        </h2>
      ";
            }
            // line 307
            echo "
      <div class=\"row midwidget-list\">
        ";
            // line 309
            if ($this->getAttribute(($context["page"] ?? null), "midwidget_first", [])) {
                // line 310
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["midwidget_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 311
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "midwidget_first", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 314
            echo "        ";
            if ($this->getAttribute(($context["page"] ?? null), "midwidget_second", [])) {
                // line 315
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["midwidget_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 316
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "midwidget_second", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 319
            echo "        ";
            if ($this->getAttribute(($context["page"] ?? null), "midwidget_third", [])) {
                // line 320
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["midwidget_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 321
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "midwidget_third", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 324
            echo "        ";
            if ($this->getAttribute(($context["page"] ?? null), "midwidget_forth", [])) {
                // line 325
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["midwidget_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 326
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "midwidget_forth", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 329
            echo "      </div>
    </div>
  </div>
";
        }
        // line 333
        echo "<!--End: Middle widgets -->


<!-- Start: Bottom widgets -->
";
        // line 337
        if (((($this->getAttribute(($context["page"] ?? null), "bottom_first", []) || $this->getAttribute(($context["page"] ?? null), "bottom_second", [])) || $this->getAttribute(($context["page"] ?? null), "bottom_third", [])) || $this->getAttribute(($context["page"] ?? null), "bottom_forth", []))) {
            // line 338
            echo "  <div class=\"bottom-widget\" id=\"bottom-widget\">    
    <div class=\"container\">

      ";
            // line 341
            if ($this->getAttribute(($context["page"] ?? null), "bottom_title", [])) {
                // line 342
                echo "        <h2 class=\"custom-block-title\" >
          ";
                // line 343
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_title", [])), "html", null, true);
                echo "
        </h2>
      ";
            }
            // line 346
            echo "
      <div class=\"row bottom-widget-list\">
        ";
            // line 348
            if ($this->getAttribute(($context["page"] ?? null), "bottom_first", [])) {
                // line 349
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 350
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_first", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 353
            echo "        ";
            if ($this->getAttribute(($context["page"] ?? null), "bottom_second", [])) {
                // line 354
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 355
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_second", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 357
            echo "       
        ";
            // line 358
            if ($this->getAttribute(($context["page"] ?? null), "bottom_third", [])) {
                // line 359
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 360
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_third", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 363
            echo "        ";
            if ($this->getAttribute(($context["page"] ?? null), "bottom_forth", [])) {
                // line 364
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 365
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_forth", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 368
            echo "      </div>
    </div>
  </div>
";
        }
        // line 372
        echo "<!--End: Bottom widgets -->


<!-- Start: Clients -->
";
        // line 376
        if ($this->getAttribute(($context["page"] ?? null), "clients", [])) {
            echo " 
  <div class=\"clients\" id=\"clients\">
    ";
            // line 378
            if ($this->getAttribute(($context["page"] ?? null), "clients_title", [])) {
                // line 379
                echo "      <h2 class=\"custom-block-title\" >
        ";
                // line 380
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "clients_title", [])), "html", null, true);
                echo "
      </h2>
    ";
            }
            // line 383
            echo "    <div class=\"container\">
      ";
            // line 384
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "clients", [])), "html", null, true);
            echo "
    </div>
  </div>
";
        }
        // line 388
        echo "<!--End: Clients -->


<!-- Start: Footer widgets -->
";
        // line 392
        if ((($this->getAttribute(($context["page"] ?? null), "footer_first", []) || $this->getAttribute(($context["page"] ?? null), "footer_second", [])) || $this->getAttribute(($context["page"] ?? null), "footer_third", []))) {
            // line 393
            echo "  <div class=\"footer\" id=\"footer\">
    <div class=\"container\">
      ";
            // line 395
            if ($this->getAttribute(($context["page"] ?? null), "footer_title", [])) {
                // line 396
                echo "        <h2 class=\"custom-block-title\" >
          ";
                // line 397
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_title", [])), "html", null, true);
                echo "
        </h2>
      ";
            }
            // line 400
            echo "      <div class=\"row\">
        ";
            // line 401
            if ($this->getAttribute(($context["page"] ?? null), "footer_first", [])) {
                // line 402
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 403
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_first", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 406
            echo "        ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_second", [])) {
                // line 407
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 408
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_second", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 411
            echo "        ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_third", [])) {
                // line 412
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 413
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_third", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 416
            echo "      </div>
    </div>
  </div>
";
        }
        // line 420
        echo "<!--End: Footer widgets -->


<!-- Start: Copyright -->
<div class=\"copyright\">
  <div class=\"container\">
    <span>Copyright © ";
        // line 426
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo ". All rights reserved.</span>
    ";
        // line 427
        if (($context["show_social_icon"] ?? null)) {
            // line 428
            echo "        <p class=\"social-media\">
          ";
            // line 429
            if (($context["facebook_url"] ?? null)) {
                // line 430
                echo "            <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null)), "html", null, true);
                echo "\"  class=\"facebook\" target=\"_blank\" ><i class=\"fab fa-facebook-f\"></i></a>
          ";
            }
            // line 432
            echo "          ";
            if (($context["twitter_url"] ?? null)) {
                // line 433
                echo "            <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null)), "html", null, true);
                echo "\" class=\"twitter\" target=\"_blank\" ><i class=\"fab fa-twitter\"></i></a>
          ";
            }
            // line 435
            echo "          ";
            if (($context["linkedin_url"] ?? null)) {
                // line 436
                echo "            <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null)), "html", null, true);
                echo "\" class=\"linkedin\" target=\"_blank\"><i class=\"fab fa-linkedin-in\"></i></a>
          ";
            }
            // line 438
            echo "          ";
            if (($context["instagram_url"] ?? null)) {
                // line 439
                echo "            <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["instagram_url"] ?? null)), "html", null, true);
                echo "\" class=\"instagram\" target=\"_blank\" ><i class=\"fab fa-instagram\"></i></a>
          ";
            }
            // line 441
            echo "          ";
            if (($context["rss_url"] ?? null)) {
                // line 442
                echo "            <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rss_url"] ?? null)), "html", null, true);
                echo "\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
          ";
            }
            // line 444
            echo "        </p>
      ";
        }
        // line 446
        echo "      ";
        if (($context["show_credit_link"] ?? null)) {
            // line 447
            echo "        <span class=\"credit-link\">Designed By <a href=\"https://www.zymphonies.com\" target=\"_blank\">Zymphonies</a></span>
      ";
        }
        // line 449
        echo "  </div>
</div>
<!-- End: Copyright -->





";
    }

    public function getTemplateName()
    {
        return "themes/construction_zymphonies_theme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  879 => 449,  875 => 447,  872 => 446,  868 => 444,  862 => 442,  859 => 441,  853 => 439,  850 => 438,  844 => 436,  841 => 435,  835 => 433,  832 => 432,  826 => 430,  824 => 429,  821 => 428,  819 => 427,  815 => 426,  807 => 420,  801 => 416,  795 => 413,  790 => 412,  787 => 411,  781 => 408,  776 => 407,  773 => 406,  767 => 403,  762 => 402,  760 => 401,  757 => 400,  751 => 397,  748 => 396,  746 => 395,  742 => 393,  740 => 392,  734 => 388,  727 => 384,  724 => 383,  718 => 380,  715 => 379,  713 => 378,  708 => 376,  702 => 372,  696 => 368,  690 => 365,  685 => 364,  682 => 363,  676 => 360,  671 => 359,  669 => 358,  666 => 357,  660 => 355,  655 => 354,  652 => 353,  646 => 350,  641 => 349,  639 => 348,  635 => 346,  629 => 343,  626 => 342,  624 => 341,  619 => 338,  617 => 337,  611 => 333,  605 => 329,  599 => 326,  594 => 325,  591 => 324,  585 => 321,  580 => 320,  577 => 319,  571 => 316,  566 => 315,  563 => 314,  557 => 311,  552 => 310,  550 => 309,  546 => 307,  540 => 304,  537 => 303,  535 => 302,  530 => 299,  528 => 298,  522 => 294,  516 => 290,  510 => 287,  505 => 286,  502 => 285,  496 => 282,  491 => 281,  488 => 280,  482 => 277,  477 => 276,  474 => 275,  468 => 272,  463 => 271,  461 => 270,  457 => 268,  451 => 265,  448 => 264,  446 => 263,  440 => 259,  438 => 258,  432 => 254,  426 => 250,  420 => 247,  415 => 246,  412 => 245,  406 => 242,  401 => 241,  398 => 240,  392 => 237,  387 => 236,  385 => 235,  381 => 233,  375 => 230,  372 => 229,  370 => 228,  364 => 224,  362 => 223,  350 => 213,  343 => 209,  337 => 207,  335 => 206,  330 => 203,  322 => 198,  318 => 196,  312 => 193,  309 => 192,  307 => 191,  299 => 187,  297 => 186,  292 => 183,  285 => 179,  279 => 177,  277 => 176,  266 => 167,  258 => 162,  253 => 159,  251 => 158,  245 => 154,  238 => 150,  234 => 148,  232 => 147,  226 => 143,  220 => 139,  212 => 137,  209 => 136,  201 => 134,  198 => 133,  190 => 131,  188 => 130,  184 => 128,  178 => 125,  175 => 124,  173 => 123,  169 => 121,  167 => 120,  161 => 116,  154 => 112,  150 => 110,  148 => 109,  142 => 105,  136 => 101,  127 => 99,  123 => 98,  118 => 95,  116 => 94,  106 => 86,  102 => 84,  96 => 82,  93 => 81,  87 => 79,  85 => 78,  82 => 77,  80 => 76,  76 => 74,  70 => 72,  68 => 71,  55 => 60,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/construction_zymphonies_theme/templates/layout/page.html.twig", "/home/ismar950/anilsmathclasses.com/themes/construction_zymphonies_theme/templates/layout/page.html.twig");
    }
}
