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

/* themes/restaurant_lite/templates/page.html.twig */
class __TwigTemplate_b12af755bdaee98d0db7a520d6a2c62ee9273f8baabefefd6cc3a4cf030b8895 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 77];
        $filters = ["escape" => 79];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
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
        // line 77
        if ($this->getAttribute(($context["page"] ?? null), "slideout", [])) {
            // line 78
            echo "  ";
            // line 79
            echo "  <div class=\"clearfix slideout ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slideout_background_color"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["slideout_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["slideout_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
    ";
            // line 81
            echo "    <div class=\"clearfix slideout__container\">
      <div class=\"slideout__section\">
        ";
            // line 83
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "slideout", [])), "html", null, true);
            echo "
      </div>
    </div>
    ";
            // line 87
            echo "  </div>
  ";
            // line 89
            echo "
  ";
            // line 91
            echo "  <button class=\"slideout-toggle slideout-toggle--fixed\"><i class=\"fa fa-align-justify\"></i></button>
  ";
        }
        // line 94
        echo "
";
        // line 96
        echo "<div class=\"page-container\">

  ";
        // line 98
        if ((((((($this->getAttribute(($context["page"] ?? null), "header_top_first", []) || $this->getAttribute(($context["page"] ?? null), "header_top_second", [])) || $this->getAttribute(($context["page"] ?? null), "header_first", [])) || $this->getAttribute(($context["page"] ?? null), "header", [])) || $this->getAttribute(($context["page"] ?? null), "header_third", [])) || $this->getAttribute(($context["page"] ?? null), "header_top_highlighted_first", [])) || $this->getAttribute(($context["page"] ?? null), "header_top_highlighted_second", []))) {
            // line 99
            echo "    ";
            // line 100
            echo "    <div class=\"header-container\">

      ";
            // line 102
            if (($this->getAttribute(($context["page"] ?? null), "header_top_highlighted_first", []) || $this->getAttribute(($context["page"] ?? null), "header_top_highlighted_second", []))) {
                // line 103
                echo "        ";
                // line 104
                echo "        <div class=\"clearfix header-top-highlighted ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_background_color"] ?? null)), "html", null, true);
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["header_top_highlighted_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["header_top_highlighted_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
                echo "\">
          <div class=\"";
                // line 105
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_layout_container"] ?? null)), "html", null, true);
                echo "\">
            ";
                // line 107
                echo "            <div class=\"clearfix header-top-highlighted__container";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["header_top_highlighted_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                echo "\"
              ";
                // line 108
                if ((($context["header_top_highlighted_animations"] ?? null) == "enabled")) {
                    // line 109
                    echo "                data-animate-effect=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_animation_effect"] ?? null)), "html", null, true);
                    echo "\"
              ";
                }
                // line 110
                echo ">
              <div class=\"row\">
                ";
                // line 112
                if ($this->getAttribute(($context["page"] ?? null), "header_top_highlighted_first", [])) {
                    // line 113
                    echo "                  <div class=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_first_grid_class"] ?? null)), "html", null, true);
                    echo "\">
                    ";
                    // line 115
                    echo "                    <div class=\"clearfix header-top-highlighted__section header-top-highlighted-first\">
                      ";
                    // line 116
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_top_highlighted_first", [])), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 119
                    echo "                  </div>
                ";
                }
                // line 121
                echo "                ";
                if ($this->getAttribute(($context["page"] ?? null), "header_top_highlighted_second", [])) {
                    // line 122
                    echo "                  <div class=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_second_grid_class"] ?? null)), "html", null, true);
                    echo "\">
                    ";
                    // line 124
                    echo "                    <div class=\"clearfix header-top-highlighted__section header-top-highlighted-second\">
                      ";
                    // line 125
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_top_highlighted_second", [])), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 128
                    echo "                  </div>
                ";
                }
                // line 130
                echo "              </div>
            </div>
            ";
                // line 133
                echo "          </div>
        </div>
        ";
                // line 136
                echo "      ";
            }
            // line 137
            echo "
      ";
            // line 138
            if (($this->getAttribute(($context["page"] ?? null), "header_top_first", []) || $this->getAttribute(($context["page"] ?? null), "header_top_second", []))) {
                // line 139
                echo "        ";
                // line 140
                echo "        <div class=\"clearfix header-top ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_background_color"] ?? null)), "html", null, true);
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["header_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["header_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
                echo "\">
          <div class=\"";
                // line 141
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_layout_container"] ?? null)), "html", null, true);
                echo "\">
            ";
                // line 143
                echo "            <div class=\"clearfix header-top__container";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["header_top_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                echo "\"
              ";
                // line 144
                if ((($context["header_top_animations"] ?? null) == "enabled")) {
                    // line 145
                    echo "                data-animate-effect=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_animation_effect"] ?? null)), "html", null, true);
                    echo "\"
              ";
                }
                // line 146
                echo ">
              <div class=\"row\">
                ";
                // line 148
                if ($this->getAttribute(($context["page"] ?? null), "header_top_first", [])) {
                    // line 149
                    echo "                  <div class=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_first_grid_class"] ?? null)), "html", null, true);
                    echo "\">
                    ";
                    // line 151
                    echo "                    <div class=\"clearfix header-top__section header-top-first\">
                      ";
                    // line 152
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_top_first", [])), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 155
                    echo "                  </div>
                ";
                }
                // line 157
                echo "                ";
                if ($this->getAttribute(($context["page"] ?? null), "header_top_second", [])) {
                    // line 158
                    echo "                  <div class=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_second_grid_class"] ?? null)), "html", null, true);
                    echo "\">
                    ";
                    // line 160
                    echo "                    <div class=\"clearfix header-top__section header-top-second\">
                      ";
                    // line 161
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_top_second", [])), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 164
                    echo "                  </div>
                ";
                }
                // line 166
                echo "              </div>
            </div>
            ";
                // line 169
                echo "          </div>
        </div>
        ";
                // line 172
                echo "      ";
            }
            // line 173
            echo "
      ";
            // line 174
            if ((($this->getAttribute(($context["page"] ?? null), "header_first", []) || $this->getAttribute(($context["page"] ?? null), "header", [])) || $this->getAttribute(($context["page"] ?? null), "header_third", []))) {
                // line 175
                echo "        ";
                // line 176
                echo "        <header role=\"banner\" class=\"clearfix header ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_background_color"] ?? null)), "html", null, true);
                echo " ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_layout_container_class"] ?? null)), "html", null, true);
                echo " ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_layout_columns_class"] ?? null)), "html", null, true);
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["header_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["header_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
                echo "\">
          <div class=\"";
                // line 177
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_layout_container"] ?? null)), "html", null, true);
                echo "\">
            ";
                // line 179
                echo "            <div class=\"clearfix header__container\">
              <div class=\"row\">
                ";
                // line 181
                if ($this->getAttribute(($context["page"] ?? null), "header_first", [])) {
                    // line 182
                    echo "                  <div class=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_first_grid_class"] ?? null)), "html", null, true);
                    echo "\">
                    ";
                    // line 184
                    echo "                    <div class=\"clearfix header__section header-first\">
                      ";
                    // line 185
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_first", [])), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 188
                    echo "                  </div>
                ";
                }
                // line 190
                echo "                ";
                if ($this->getAttribute(($context["page"] ?? null), "header_third", [])) {
                    // line 191
                    echo "                  <div class=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_third_grid_class"] ?? null)), "html", null, true);
                    echo "\">
                    ";
                    // line 193
                    echo "                    <div class=\"clearfix header__section header-third\">
                      ";
                    // line 194
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_third", [])), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 197
                    echo "                  </div>
                ";
                }
                // line 199
                echo "                ";
                if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
                    // line 200
                    echo "                  <div class=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_second_grid_class"] ?? null)), "html", null, true);
                    echo "\">
                    ";
                    // line 202
                    echo "                    <div class=\"clearfix header__section header-second\">
                      ";
                    // line 203
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 206
                    echo "                  </div>
                ";
                }
                // line 208
                echo "              </div>
            </div>
            ";
                // line 211
                echo "          </div>
          ";
                // line 212
                if ((($context["post_progress_status"] ?? null) == "enabled")) {
                    // line 213
                    echo "            ";
                    // line 214
                    echo "            <div class=\"post-progress\">
              <div class=\"post-progress__bar\"></div>
            </div>
            ";
                    // line 218
                    echo "          ";
                }
                // line 219
                echo "        </header>
        ";
                // line 221
                echo "      ";
            }
            // line 222
            echo "
    </div>
    ";
            // line 225
            echo "  ";
        }
        // line 226
        echo "
  ";
        // line 227
        if ($this->getAttribute(($context["page"] ?? null), "banner", [])) {
            // line 228
            echo "    ";
            // line 229
            echo "    <div class=\"clearfix banner ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["banner_background_color"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["banner_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["banner_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 230
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["banner_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 232
            echo "        <div class=\"clearfix banner__container\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"banner__section\">
                ";
            // line 236
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "banner", [])), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 242
            echo "      </div>
    </div>
    ";
            // line 245
            echo "  ";
        }
        // line 246
        echo "
  ";
        // line 247
        if ($this->getAttribute(($context["page"] ?? null), "content_top", [])) {
            // line 248
            echo "    ";
            // line 249
            echo "    <div class=\"clearfix content-top ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_separator"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["content_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["content_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 250
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 252
            echo "        <div class=\"clearfix content-top__container";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["content_top_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 253
            if ((($context["content_top_animations"] ?? null) == "enabled")) {
                // line 254
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_animation_effect"] ?? null)), "html", null, true);
                echo "\"
          ";
            }
            // line 255
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"content-top__section\">
                ";
            // line 259
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_top", [])), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 265
            echo "      </div>
    </div>
    ";
            // line 268
            echo "  ";
        }
        // line 269
        echo "
  ";
        // line 270
        if ($this->getAttribute(($context["page"] ?? null), "content_top_highlighted", [])) {
            // line 271
            echo "    ";
            // line 272
            echo "    <div class=\"clearfix content-top-highlighted ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_highlighted_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_highlighted_separator"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["content_top_highlighted_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["content_top_highlighted_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 273
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_highlighted_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 275
            echo "        <div class=\"clearfix content-top-highlighted__container";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["content_top_highlighted_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 276
            if ((($context["content_top_highlighted_animations"] ?? null) == "enabled")) {
                // line 277
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_highlighted_animation_effect"] ?? null)), "html", null, true);
                echo "\"
          ";
            }
            // line 278
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"content-top-highlighted__section\">
                ";
            // line 282
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_top_highlighted", [])), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 288
            echo "      </div>
    </div>
    ";
            // line 291
            echo "  ";
        }
        // line 292
        echo "
  ";
        // line 294
        echo "  <div class=\"clearfix main-content region--dark-typography region--white-background  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_content_separator"] ?? null)), "html", null, true);
        echo "\">

    ";
        // line 296
        if ($this->getAttribute(($context["page"] ?? null), "system_messages", [])) {
            // line 297
            echo "      ";
            // line 298
            echo "      <div class=\"system-messages clearfix\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              ";
            // line 302
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "system_messages", [])), "html", null, true);
            echo "
            </div>
          </div>
        </div>
      </div>
      ";
            // line 308
            echo "    ";
        }
        // line 309
        echo "
    <div class=\"container\">
      <div class=\"clearfix main-content__container\">
        <div class=\"row\">
          <section class=\"";
        // line 313
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_grid_class"] ?? null)), "html", null, true);
        echo "\">
            ";
        // line 315
        echo "            <div class=\"clearfix main-content__section";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["main_content_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["main_content_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["main_content_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
        echo "\"
              ";
        // line 316
        if ((($context["main_content_animations"] ?? null) == "enabled")) {
            // line 317
            echo "                data-animate-effect=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_content_animation_effect"] ?? null)), "html", null, true);
            echo "\"
              ";
        }
        // line 318
        echo ">
              ";
        // line 319
        if ($this->getAttribute(($context["page"] ?? null), "content", [])) {
            // line 320
            echo "                ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
            echo "
              ";
        }
        // line 322
        echo "            </div>
            ";
        // line 324
        echo "          </section>
          ";
        // line 325
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 326
            echo "            <aside class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_grid_class"] ?? null)), "html", null, true);
            echo "\">
              ";
            // line 328
            echo "              <section class=\"sidebar__section sidebar-first clearfix";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["sidebar_first_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["sidebar_first_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["sidebar_first_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\"
                ";
            // line 329
            if ((($context["sidebar_first_animations"] ?? null) == "enabled")) {
                // line 330
                echo "                  data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_animation_effect"] ?? null)), "html", null, true);
                echo "\"
                ";
            }
            // line 331
            echo ">
                ";
            // line 332
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
              </section>
              ";
            // line 335
            echo "            </aside>
          ";
        }
        // line 337
        echo "          ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 338
            echo "            <aside class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_grid_class"] ?? null)), "html", null, true);
            echo "\">
              ";
            // line 340
            echo "              <section class=\"sidebar__section sidebar-second clearfix";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["sidebar_second_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["sidebar_second_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["sidebar_second_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\"
                ";
            // line 341
            if ((($context["sidebar_second_animations"] ?? null) == "enabled")) {
                // line 342
                echo "                  data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_animation_effect"] ?? null)), "html", null, true);
                echo "\"
                ";
            }
            // line 343
            echo ">
                ";
            // line 344
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
              </section>
              ";
            // line 347
            echo "            </aside>
          ";
        }
        // line 349
        echo "        </div>
      </div>
    </div>
  </div>
  ";
        // line 354
        echo "
  ";
        // line 355
        if (($this->getAttribute(($context["page"] ?? null), "content_bottom_first", []) || $this->getAttribute(($context["page"] ?? null), "content_bottom_second", []))) {
            // line 356
            echo "    ";
            // line 357
            echo "    <div class=\"clearfix content-bottom ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_separator"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["content_bottom_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["content_bottom_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 358
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 360
            echo "        <div class=\"clearfix content-bottom__container";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["content_bottom_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 361
            if ((($context["content_bottom_animations"] ?? null) == "enabled")) {
                // line 362
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_animation_effect"] ?? null)), "html", null, true);
                echo "\"
          ";
            }
            // line 363
            echo ">
          <div class=\"row\">
            ";
            // line 365
            if ($this->getAttribute(($context["page"] ?? null), "content_bottom_first", [])) {
                // line 366
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_first_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 368
                echo "                <div class=\"clearfix content-bottom__section content-bottom-first\">
                  ";
                // line 369
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_bottom_first", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 372
                echo "              </div>
            ";
            }
            // line 374
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "content_bottom_second", [])) {
                // line 375
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_second_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 377
                echo "                <div class=\"clearfix content-bottom__section content-bottom-second\">
                  ";
                // line 378
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_bottom_second", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 381
                echo "              </div>
            ";
            }
            // line 383
            echo "          </div>
        </div>
        ";
            // line 386
            echo "      </div>
    </div>
    ";
            // line 389
            echo "  ";
        }
        // line 390
        echo "
  ";
        // line 391
        if ($this->getAttribute(($context["page"] ?? null), "featured_top", [])) {
            // line 392
            echo "    ";
            // line 393
            echo "    <div class=\"clearfix featured-top ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_top_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_top_separator"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["featured_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["featured_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 394
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_top_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 396
            echo "        <div class=\"clearfix featured-top__container";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["featured_top_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 397
            if ((($context["featured_top_animations"] ?? null) == "enabled")) {
                // line 398
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_top_animation_effect"] ?? null)), "html", null, true);
                echo "\"
          ";
            }
            // line 399
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix featured-top__section\">
                ";
            // line 403
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "featured_top", [])), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 409
            echo "      </div>
    </div>
    ";
            // line 412
            echo "  ";
        }
        // line 413
        echo "
  ";
        // line 414
        if ($this->getAttribute(($context["page"] ?? null), "featured", [])) {
            // line 415
            echo "    ";
            // line 416
            echo "    <div class=\"clearfix featured ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_separator"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["featured_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["featured_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 417
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 419
            echo "        <div class=\"clearfix featured__container";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["featured_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 420
            if ((($context["featured_animations"] ?? null) == "enabled")) {
                // line 421
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_animation_effect"] ?? null)), "html", null, true);
                echo "\"
          ";
            }
            // line 422
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix featured__section\">
                ";
            // line 426
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "featured", [])), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 432
            echo "      </div>
    </div>
    ";
            // line 435
            echo "  ";
        }
        // line 436
        echo "
  ";
        // line 437
        if ($this->getAttribute(($context["page"] ?? null), "featured_bottom", [])) {
            // line 438
            echo "    ";
            // line 439
            echo "    <div class=\"clearfix featured-bottom ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_bottom_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_bottom_separator"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["featured_bottom_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["featured_bottom_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 440
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_bottom_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 442
            echo "        <div class=\"clearfix featured-bottom__container";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["featured_bottom_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 443
            if ((($context["featured_bottom_animations"] ?? null) == "enabled")) {
                // line 444
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_bottom_animation_effect"] ?? null)), "html", null, true);
                echo "\"
          ";
            }
            // line 445
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix featured-bottom__section\">
                ";
            // line 449
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "featured_bottom", [])), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 455
            echo "      </div>
    </div>
    ";
            // line 458
            echo "  ";
        }
        // line 459
        echo "
  ";
        // line 460
        if ($this->getAttribute(($context["page"] ?? null), "sub_featured", [])) {
            // line 461
            echo "    ";
            // line 462
            echo "    <div class=\"clearfix sub-featured ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sub_featured_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sub_featured_separator"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["sub_featured_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["sub_featured_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 463
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sub_featured_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 465
            echo "        <div class=\"clearfix sub-featured__container";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["sub_featured_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 466
            if ((($context["sub_featured_animations"] ?? null) == "enabled")) {
                // line 467
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sub_featured_animation_effect"] ?? null)), "html", null, true);
                echo "\"
          ";
            }
            // line 468
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix sub-featured__section\">
                ";
            // line 472
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sub_featured", [])), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 478
            echo "      </div>
    </div>
    ";
            // line 481
            echo "  ";
        }
        // line 482
        echo "
  ";
        // line 483
        if ($this->getAttribute(($context["page"] ?? null), "highlighted_top", [])) {
            // line 484
            echo "    ";
            // line 485
            echo "    <div class=\"clearfix highlighted-top ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_top_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_top_separator"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["highlighted_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["highlighted_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 486
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_top_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 488
            echo "        <div class=\"clearfix highlighted-top__container";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["highlighted_top_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 489
            if ((($context["highlighted_top_animations"] ?? null) == "enabled")) {
                // line 490
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_top_animation_effect"] ?? null)), "html", null, true);
                echo "\"
          ";
            }
            // line 491
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix highlighted-top__section\">
                ";
            // line 495
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted_top", [])), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 501
            echo "      </div>
    </div>
    ";
            // line 504
            echo "  ";
        }
        // line 505
        echo "
  ";
        // line 506
        if (($this->getAttribute(($context["page"] ?? null), "highlighted_first", []) || $this->getAttribute(($context["page"] ?? null), "highlighted_second", []))) {
            // line 507
            echo "    ";
            // line 508
            echo "    <div class=\"clearfix highlighted ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_regions"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_separator"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["highlighted_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["highlighted_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 509
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 511
            echo "        <div class=\"clearfix highlighted__container";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["highlighted_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 512
            if ((($context["highlighted_animations"] ?? null) == "enabled")) {
                // line 513
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_animation_effect"] ?? null)), "html", null, true);
                echo "\"
          ";
            }
            // line 514
            echo ">
          <div class=\"row\">
            ";
            // line 516
            if ($this->getAttribute(($context["page"] ?? null), "highlighted_first", [])) {
                // line 517
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_first_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 519
                echo "                <div class=\"clearfix highlighted__section highlighted-first\">
                  ";
                // line 520
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted_first", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 523
                echo "              </div>
            ";
            }
            // line 525
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "highlighted_second", [])) {
                // line 526
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_second_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 528
                echo "                <div class=\"clearfix highlighted__section highlighted-second\">
                  ";
                // line 529
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted_second", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 532
                echo "              </div>
            ";
            }
            // line 534
            echo "          </div>
        </div>
        ";
            // line 537
            echo "      </div>
    </div>
    ";
            // line 540
            echo "  ";
        }
        // line 541
        echo "
  ";
        // line 542
        if (($this->getAttribute(($context["page"] ?? null), "footer_top_first", []) || $this->getAttribute(($context["page"] ?? null), "footer_top_second", []))) {
            // line 543
            echo "    ";
            // line 544
            echo "    <div class=\"clearfix footer-top ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_regions"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_separator"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["footer_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["footer_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 545
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 547
            echo "        <div class=\"clearfix footer-top__container";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["footer_top_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 548
            if ((($context["footer_top_animations"] ?? null) == "enabled")) {
                // line 549
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_animation_effect"] ?? null)), "html", null, true);
                echo "\"
          ";
            }
            // line 550
            echo ">
          <div class=\"row\">
            ";
            // line 552
            if ($this->getAttribute(($context["page"] ?? null), "footer_top_first", [])) {
                // line 553
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_first_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 555
                echo "                <div class=\"clearfix footer-top__section footer-top-first\">
                  ";
                // line 556
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_top_first", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 559
                echo "              </div>
            ";
            }
            // line 561
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_top_second", [])) {
                // line 562
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_second_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 564
                echo "                <div class=\"clearfix footer-top__section footer-top-second\">
                  ";
                // line 565
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_top_second", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 568
                echo "              </div>
            ";
            }
            // line 570
            echo "          </div>
        </div>
        ";
            // line 573
            echo "      </div>
    </div>
    ";
            // line 576
            echo "  ";
        }
        // line 577
        echo "
  ";
        // line 578
        if ((((($this->getAttribute(($context["page"] ?? null), "footer_first", []) || $this->getAttribute(($context["page"] ?? null), "footer_second", [])) || $this->getAttribute(($context["page"] ?? null), "footer_third", [])) || $this->getAttribute(($context["page"] ?? null), "footer_fourth", [])) || $this->getAttribute(($context["page"] ?? null), "footer_fifth", []))) {
            // line 579
            echo "    ";
            // line 580
            echo "    <footer class=\"clearfix footer ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_separator"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["footer_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["footer_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 581
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_layout_container"] ?? null)), "html", null, true);
            echo "\">
        <div class=\"clearfix footer__container\">
          <div class=\"row\">
            ";
            // line 584
            if ($this->getAttribute(($context["page"] ?? null), "footer_first", [])) {
                // line 585
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_first_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 587
                echo "                <div class=\"clearfix footer__section footer-first";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                echo "\"
                  ";
                // line 588
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 589
                    echo "                    data-animate-effect=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_animation_effect"] ?? null)), "html", null, true);
                    echo "\"
                  ";
                }
                // line 590
                echo ">
                  ";
                // line 591
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_first", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 594
                echo "              </div>
            ";
            }
            // line 596
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_second", [])) {
                // line 597
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_second_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 599
                echo "                <div class=\"clearfix footer__section footer-second";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                echo "\"
                  ";
                // line 600
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 601
                    echo "                    data-animate-effect=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_animation_effect"] ?? null)), "html", null, true);
                    echo "\"
                  ";
                }
                // line 602
                echo ">
                  ";
                // line 603
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_second", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 606
                echo "              </div>
            ";
            }
            // line 608
            echo "            <div class=\"clearfix ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_4_columns_clearfix_first"] ?? null)), "html", null, true);
            echo "\"></div>
            ";
            // line 609
            if ($this->getAttribute(($context["page"] ?? null), "footer_third", [])) {
                // line 610
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_third_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 612
                echo "                <div class=\"clearfix footer__section footer-third";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                echo "\"
                  ";
                // line 613
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 614
                    echo "                    data-animate-effect=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_animation_effect"] ?? null)), "html", null, true);
                    echo "\"
                  ";
                }
                // line 615
                echo ">
                  ";
                // line 616
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_third", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 619
                echo "              </div>
            ";
            }
            // line 621
            echo "            <div class=\"clearfix ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_4_columns_clearfix_second"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_5_columns_clearfix"] ?? null)), "html", null, true);
            echo "\"></div>
            ";
            // line 622
            if ($this->getAttribute(($context["page"] ?? null), "footer_fourth", [])) {
                // line 623
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_fourth_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 625
                echo "                <div class=\"clearfix footer__section footer-fourth";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                echo "\"
                  ";
                // line 626
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 627
                    echo "                    data-animate-effect=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_animation_effect"] ?? null)), "html", null, true);
                    echo "\"
                  ";
                }
                // line 628
                echo ">
                  ";
                // line 629
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_fourth", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 632
                echo "              </div>
            ";
            }
            // line 634
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_fifth", [])) {
                // line 635
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_fifth_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 637
                echo "                <div class=\"clearfix footer__section footer-fifth";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                echo "\"
                  ";
                // line 638
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 639
                    echo "                    data-animate-effect=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_animation_effect"] ?? null)), "html", null, true);
                    echo "\"
                  ";
                }
                // line 640
                echo ">
                  ";
                // line 641
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_fifth", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 644
                echo "              </div>
            ";
            }
            // line 646
            echo "          </div>
        </div>
      </div>
    </footer>
    ";
            // line 651
            echo "  ";
        }
        // line 652
        echo "
  ";
        // line 653
        if ($this->getAttribute(($context["page"] ?? null), "footer_bottom", [])) {
            // line 654
            echo "    ";
            // line 655
            echo "    <div class=\"clearfix footer-bottom ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_bottom_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_bottom_separator"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["footer_bottom_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["footer_bottom_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 656
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_bottom_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 658
            echo "        <div class=\"clearfix footer-bottom__container";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["footer_bottom_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 659
            if ((($context["footer_bottom_animations"] ?? null) == "enabled")) {
                // line 660
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_bottom_animation_effect"] ?? null)), "html", null, true);
                echo "\"
          ";
            }
            // line 661
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              ";
            // line 665
            echo "              <div class=\"clearfix footer-bottom__section footer-bottom\">
                ";
            // line 666
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_bottom", [])), "html", null, true);
            echo "
              </div>
              ";
            // line 669
            echo "            </div>
          </div>
        </div>
        ";
            // line 673
            echo "      </div>
    </div>
    ";
            // line 676
            echo "  ";
        }
        // line 677
        echo "
  ";
        // line 678
        if ((($this->getAttribute(($context["page"] ?? null), "sub_footer_top_first", []) || $this->getAttribute(($context["page"] ?? null), "sub_footer_top_second", [])) || $this->getAttribute(($context["page"] ?? null), "sub_footer_top_third", []))) {
            // line 679
            echo "    ";
            // line 680
            echo "    <div class=\"clearfix subfooter-top ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_top_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_top_separator"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["subfooter_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["subfooter_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 681
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_top_layout_container"] ?? null)), "html", null, true);
            echo "\">
        <div class=\"clearfix subfooter-top__container\">
          <div class=\"row\">
            ";
            // line 684
            if ($this->getAttribute(($context["page"] ?? null), "sub_footer_top_first", [])) {
                // line 685
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_top_first_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 687
                echo "                <div class=\"clearfix subfooter-top__section subfooter-top-first\">
                  ";
                // line 688
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sub_footer_top_first", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 691
                echo "              </div>
            ";
            }
            // line 693
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "sub_footer_top_second", [])) {
                // line 694
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_top_second_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 696
                echo "                <div class=\"clearfix subfooter-top__section subfooter-top-second\">
                  ";
                // line 697
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sub_footer_top_second", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 700
                echo "              </div>
            ";
            }
            // line 702
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "sub_footer_top_third", [])) {
                // line 703
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_top_third_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 705
                echo "                <div class=\"clearfix subfooter-top__section subfooter-top-third\">
                  ";
                // line 706
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sub_footer_top_third", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 709
                echo "              </div>
            ";
            }
            // line 711
            echo "          </div>
        </div>
      </div>
    </div>
    ";
            // line 716
            echo "  ";
        }
        // line 717
        echo "
  ";
        // line 718
        if (($this->getAttribute(($context["page"] ?? null), "sub_footer_first", []) || $this->getAttribute(($context["page"] ?? null), "footer", []))) {
            // line 719
            echo "    ";
            // line 720
            echo "    <div class=\"clearfix subfooter ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_separator"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["subfooter_bottom_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["subfooter_bottom_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 721
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 723
            echo "        <div class=\"clearfix subfooter__container\">
          <div class=\"row\">
            ";
            // line 725
            if ($this->getAttribute(($context["page"] ?? null), "sub_footer_first", [])) {
                // line 726
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_first_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 728
                echo "                <div class=\"clearfix subfooter__section subfooter-first\">
                  ";
                // line 729
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sub_footer_first", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 732
                echo "              </div>
            ";
            }
            // line 734
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
                // line 735
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_second_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 737
                echo "                <div class=\"clearfix subfooter__section subfooter-second\">
                  ";
                // line 738
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 741
                echo "              </div>
            ";
            }
            // line 743
            echo "          </div>
        </div>
        ";
            // line 746
            echo "      </div>
    </div>
    ";
            // line 749
            echo "  ";
        }
        // line 750
        echo "
  ";
        // line 751
        if (($context["scroll_to_top_display"] ?? null)) {
            // line 752
            echo "  ";
            // line 753
            echo "    <div class=\"to-top\"><i class=\"fa ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["scroll_to_top_icon"] ?? null)), "html", null, true);
            echo "\"></i></div>
  ";
            // line 755
            echo "  ";
        }
        // line 756
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/restaurant_lite/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1659 => 756,  1656 => 755,  1651 => 753,  1649 => 752,  1647 => 751,  1644 => 750,  1641 => 749,  1637 => 746,  1633 => 743,  1629 => 741,  1624 => 738,  1621 => 737,  1616 => 735,  1613 => 734,  1609 => 732,  1604 => 729,  1601 => 728,  1596 => 726,  1594 => 725,  1590 => 723,  1586 => 721,  1576 => 720,  1574 => 719,  1572 => 718,  1569 => 717,  1566 => 716,  1560 => 711,  1556 => 709,  1551 => 706,  1548 => 705,  1543 => 703,  1540 => 702,  1536 => 700,  1531 => 697,  1528 => 696,  1523 => 694,  1520 => 693,  1516 => 691,  1511 => 688,  1508 => 687,  1503 => 685,  1501 => 684,  1495 => 681,  1485 => 680,  1483 => 679,  1481 => 678,  1478 => 677,  1475 => 676,  1471 => 673,  1466 => 669,  1461 => 666,  1458 => 665,  1453 => 661,  1447 => 660,  1445 => 659,  1440 => 658,  1436 => 656,  1427 => 655,  1425 => 654,  1423 => 653,  1420 => 652,  1417 => 651,  1411 => 646,  1407 => 644,  1402 => 641,  1399 => 640,  1393 => 639,  1391 => 638,  1386 => 637,  1381 => 635,  1378 => 634,  1374 => 632,  1369 => 629,  1366 => 628,  1360 => 627,  1358 => 626,  1353 => 625,  1348 => 623,  1346 => 622,  1339 => 621,  1335 => 619,  1330 => 616,  1327 => 615,  1321 => 614,  1319 => 613,  1314 => 612,  1309 => 610,  1307 => 609,  1302 => 608,  1298 => 606,  1293 => 603,  1290 => 602,  1284 => 601,  1282 => 600,  1277 => 599,  1272 => 597,  1269 => 596,  1265 => 594,  1260 => 591,  1257 => 590,  1251 => 589,  1249 => 588,  1244 => 587,  1239 => 585,  1237 => 584,  1231 => 581,  1221 => 580,  1219 => 579,  1217 => 578,  1214 => 577,  1211 => 576,  1207 => 573,  1203 => 570,  1199 => 568,  1194 => 565,  1191 => 564,  1186 => 562,  1183 => 561,  1179 => 559,  1174 => 556,  1171 => 555,  1166 => 553,  1164 => 552,  1160 => 550,  1154 => 549,  1152 => 548,  1147 => 547,  1143 => 545,  1132 => 544,  1130 => 543,  1128 => 542,  1125 => 541,  1122 => 540,  1118 => 537,  1114 => 534,  1110 => 532,  1105 => 529,  1102 => 528,  1097 => 526,  1094 => 525,  1090 => 523,  1085 => 520,  1082 => 519,  1077 => 517,  1075 => 516,  1071 => 514,  1065 => 513,  1063 => 512,  1058 => 511,  1054 => 509,  1043 => 508,  1041 => 507,  1039 => 506,  1036 => 505,  1033 => 504,  1029 => 501,  1021 => 495,  1015 => 491,  1009 => 490,  1007 => 489,  1002 => 488,  998 => 486,  989 => 485,  987 => 484,  985 => 483,  982 => 482,  979 => 481,  975 => 478,  967 => 472,  961 => 468,  955 => 467,  953 => 466,  948 => 465,  944 => 463,  935 => 462,  933 => 461,  931 => 460,  928 => 459,  925 => 458,  921 => 455,  913 => 449,  907 => 445,  901 => 444,  899 => 443,  894 => 442,  890 => 440,  881 => 439,  879 => 438,  877 => 437,  874 => 436,  871 => 435,  867 => 432,  859 => 426,  853 => 422,  847 => 421,  845 => 420,  840 => 419,  836 => 417,  827 => 416,  825 => 415,  823 => 414,  820 => 413,  817 => 412,  813 => 409,  805 => 403,  799 => 399,  793 => 398,  791 => 397,  786 => 396,  782 => 394,  773 => 393,  771 => 392,  769 => 391,  766 => 390,  763 => 389,  759 => 386,  755 => 383,  751 => 381,  746 => 378,  743 => 377,  738 => 375,  735 => 374,  731 => 372,  726 => 369,  723 => 368,  718 => 366,  716 => 365,  712 => 363,  706 => 362,  704 => 361,  699 => 360,  695 => 358,  686 => 357,  684 => 356,  682 => 355,  679 => 354,  673 => 349,  669 => 347,  664 => 344,  661 => 343,  655 => 342,  653 => 341,  646 => 340,  641 => 338,  638 => 337,  634 => 335,  629 => 332,  626 => 331,  620 => 330,  618 => 329,  611 => 328,  606 => 326,  604 => 325,  601 => 324,  598 => 322,  592 => 320,  590 => 319,  587 => 318,  581 => 317,  579 => 316,  572 => 315,  568 => 313,  562 => 309,  559 => 308,  551 => 302,  545 => 298,  543 => 297,  541 => 296,  535 => 294,  532 => 292,  529 => 291,  525 => 288,  517 => 282,  511 => 278,  505 => 277,  503 => 276,  498 => 275,  494 => 273,  485 => 272,  483 => 271,  481 => 270,  478 => 269,  475 => 268,  471 => 265,  463 => 259,  457 => 255,  451 => 254,  449 => 253,  444 => 252,  440 => 250,  431 => 249,  429 => 248,  427 => 247,  424 => 246,  421 => 245,  417 => 242,  409 => 236,  403 => 232,  399 => 230,  392 => 229,  390 => 228,  388 => 227,  385 => 226,  382 => 225,  378 => 222,  375 => 221,  372 => 219,  369 => 218,  364 => 214,  362 => 213,  360 => 212,  357 => 211,  353 => 208,  349 => 206,  344 => 203,  341 => 202,  336 => 200,  333 => 199,  329 => 197,  324 => 194,  321 => 193,  316 => 191,  313 => 190,  309 => 188,  304 => 185,  301 => 184,  296 => 182,  294 => 181,  290 => 179,  286 => 177,  275 => 176,  273 => 175,  271 => 174,  268 => 173,  265 => 172,  261 => 169,  257 => 166,  253 => 164,  248 => 161,  245 => 160,  240 => 158,  237 => 157,  233 => 155,  228 => 152,  225 => 151,  220 => 149,  218 => 148,  214 => 146,  208 => 145,  206 => 144,  201 => 143,  197 => 141,  190 => 140,  188 => 139,  186 => 138,  183 => 137,  180 => 136,  176 => 133,  172 => 130,  168 => 128,  163 => 125,  160 => 124,  155 => 122,  152 => 121,  148 => 119,  143 => 116,  140 => 115,  135 => 113,  133 => 112,  129 => 110,  123 => 109,  121 => 108,  116 => 107,  112 => 105,  105 => 104,  103 => 103,  101 => 102,  97 => 100,  95 => 99,  93 => 98,  89 => 96,  86 => 94,  82 => 91,  79 => 89,  76 => 87,  70 => 83,  66 => 81,  59 => 79,  57 => 78,  55 => 77,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/restaurant_lite/templates/page.html.twig", "C:\\xampp\\htdocs\\profile\\themes\\restaurant_lite\\templates\\page.html.twig");
    }
}
