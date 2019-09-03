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

/* themes/contrib/morethanfood/templates/system/page.html.twig */
class __TwigTemplate_3ad6891c4c33bc8bab5ce72b7de5212f2cb50574c54b3858c303cff9c108298d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'section_top' => [$this, 'block_section_top'],
            'navbar' => [$this, 'block_navbar'],
            'banner' => [$this, 'block_banner'],
            'navigation_bottom' => [$this, 'block_navigation_bottom'],
            'main' => [$this, 'block_main'],
            'header' => [$this, 'block_header'],
            'sidebar_first' => [$this, 'block_sidebar_first'],
            'highlighted' => [$this, 'block_highlighted'],
            'help' => [$this, 'block_help'],
            'content' => [$this, 'block_content'],
            'sidebar_second' => [$this, 'block_sidebar_second'],
            'section1' => [$this, 'block_section1'],
            'section2' => [$this, 'block_section2'],
            'section_gray' => [$this, 'block_section_gray'],
            'section2_5' => [$this, 'block_section2_5'],
            'section3' => [$this, 'block_section3'],
            'section4' => [$this, 'block_section4'],
            'subscribe' => [$this, 'block_subscribe'],
            'footer' => [$this, 'block_footer'],
            'footer_bottom' => [$this, 'block_footer_bottom'],
            'copyright' => [$this, 'block_copyright'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 54, "if" => 57, "block" => 58];
        $filters = ["escape" => 61, "clean_class" => 76, "t" => 88];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['escape', 'clean_class', 't'],
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
        // line 54
        $context["container"] = (($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "fluid_container", [])) ? ("container-fluid") : ("container"));
        // line 55
        echo "
";
        // line 57
        if ($this->getAttribute(($context["page"] ?? null), "section_top", [])) {
            // line 58
            echo "  ";
            $this->displayBlock('section_top', $context, $blocks);
        }
        // line 67
        echo " 

";
        // line 70
        if (($this->getAttribute(($context["page"] ?? null), "navigation", []) || $this->getAttribute(($context["page"] ?? null), "navigation_collapsible", []))) {
            // line 71
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 108
        echo "
";
        // line 110
        if ($this->getAttribute(($context["page"] ?? null), "banner", [])) {
            // line 111
            echo "  ";
            $this->displayBlock('banner', $context, $blocks);
        }
        // line 134
        echo "
";
        // line 136
        $this->displayBlock('main', $context, $blocks);
        // line 203
        echo "
";
        // line 205
        if ($this->getAttribute(($context["page"] ?? null), "section1", [])) {
            // line 206
            echo "  ";
            $this->displayBlock('section1', $context, $blocks);
        }
        // line 216
        echo "
";
        // line 218
        if ($this->getAttribute(($context["page"] ?? null), "section2", [])) {
            // line 219
            echo "  ";
            $this->displayBlock('section2', $context, $blocks);
        }
        // line 229
        echo "
";
        // line 231
        if ($this->getAttribute(($context["page"] ?? null), "section_gray", [])) {
            // line 232
            echo "  ";
            $this->displayBlock('section_gray', $context, $blocks);
        }
        // line 242
        echo "
";
        // line 244
        if ($this->getAttribute(($context["page"] ?? null), "section2_5", [])) {
            // line 245
            echo "  ";
            $this->displayBlock('section2_5', $context, $blocks);
        }
        // line 255
        echo "
";
        // line 257
        if ($this->getAttribute(($context["page"] ?? null), "section3", [])) {
            // line 258
            echo "  ";
            $this->displayBlock('section3', $context, $blocks);
        }
        // line 268
        echo "
";
        // line 270
        if ($this->getAttribute(($context["page"] ?? null), "section4", [])) {
            // line 271
            echo "  ";
            $this->displayBlock('section4', $context, $blocks);
        }
        // line 281
        echo "
";
        // line 283
        if ($this->getAttribute(($context["page"] ?? null), "subscribe", [])) {
            // line 284
            echo "  ";
            $this->displayBlock('subscribe', $context, $blocks);
        }
        // line 293
        echo " 


";
        // line 296
        if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
            // line 297
            echo "  ";
            $this->displayBlock('footer', $context, $blocks);
        }
        // line 307
        echo "
";
        // line 308
        if ($this->getAttribute(($context["page"] ?? null), "footer_bottom", [])) {
            // line 309
            echo "  ";
            $this->displayBlock('footer_bottom', $context, $blocks);
        }
        // line 317
        echo "
";
        // line 318
        if ($this->getAttribute(($context["page"] ?? null), "copyright", [])) {
            // line 319
            echo "  ";
            $this->displayBlock('copyright', $context, $blocks);
        }
    }

    // line 58
    public function block_section_top($context, array $blocks = [])
    {
        // line 59
        echo "    <div id=\"section-top\" class=\"col-xs-12\">
      <div class=\"row\">
        <div class=\"";
        // line 61
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo "\" role=\"contentinfo\">
          ";
        // line 62
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "section_top", [])), "html", null, true);
        echo "
        </div>
      </div>
    </div>
  ";
    }

    // line 71
    public function block_navbar($context, array $blocks = [])
    {
        // line 72
        echo "    ";
        // line 73
        $context["navbar_classes"] = [0 => "navbar", 1 => (($this->getAttribute($this->getAttribute(        // line 75
($context["theme"] ?? null), "settings", []), "navbar_inverse", [])) ? ("navbar-inverse") : ("navbar-default")), 2 => (($this->getAttribute($this->getAttribute(        // line 76
($context["theme"] ?? null), "settings", []), "navbar_position", [])) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "navbar_position", []))))) : (($context["container"] ?? null)))];
        // line 79
        echo "    <header";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["navbar_attributes"] ?? null), "addClass", [0 => ($context["navbar_classes"] ?? null)], "method")), "html", null, true);
        echo " id=\"navbar\" role=\"banner\">
      ";
        // line 80
        if ( !$this->getAttribute(($context["navbar_attributes"] ?? null), "hasClass", [0 => ($context["container"] ?? null)], "method")) {
            // line 81
            echo "        <div class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
            echo "\">
      ";
        }
        // line 83
        echo "      <div class=\"navbar-header\">
        ";
        // line 84
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navigation", [])), "html", null, true);
        echo "
        ";
        // line 86
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", [])) {
            // line 87
            echo "          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
            <span class=\"sr-only\">";
            // line 88
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Toggle navigation"));
            echo "</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
        ";
        }
        // line 94
        echo "      </div>

      ";
        // line 97
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", [])) {
            // line 98
            echo "        <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
          ";
            // line 99
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", [])), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 102
        echo "      ";
        if ( !$this->getAttribute(($context["navbar_attributes"] ?? null), "hasClass", [0 => ($context["container"] ?? null)], "method")) {
            // line 103
            echo "        </div>
      ";
        }
        // line 105
        echo "    </header>
  ";
    }

    // line 111
    public function block_banner($context, array $blocks = [])
    {
        // line 112
        echo "    <div id=\"banner\" class=\"col-xs-12\">
      <div class=\"row\">
        <div class=\"banner\">
          ";
        // line 115
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "banner", [])), "html", null, true);
        echo "
          
          ";
        // line 118
        echo "          ";
        if ($this->getAttribute(($context["page"] ?? null), "navigation_bottom", [])) {
            // line 119
            echo "            ";
            $this->displayBlock('navigation_bottom', $context, $blocks);
            // line 128
            echo "          ";
        }
        echo " 
        </div>
      </div>
    </div>
  ";
    }

    // line 119
    public function block_navigation_bottom($context, array $blocks = [])
    {
        // line 120
        echo "              <div id=\"navigation-bottom\" class=\"col-xs-12\">
                <div class=\"row\">
                  <div class=\"";
        // line 122
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo "\" role=\"contentinfo\">
                    ";
        // line 123
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navigation_bottom", [])), "html", null, true);
        echo "
                  </div>
                </div>
              </div>
            ";
    }

    // line 136
    public function block_main($context, array $blocks = [])
    {
        // line 137
        echo "  <div class=\"main-region\">
    <div role=\"main\" class=\"main-container ";
        // line 138
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo " js-quickedit-main-content\">
      <div class=\"row\">

        ";
        // line 142
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 143
            echo "          ";
            $this->displayBlock('header', $context, $blocks);
            // line 148
            echo "        ";
        }
        // line 149
        echo "
        ";
        // line 151
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 152
            echo "          ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 157
            echo "        ";
        }
        // line 158
        echo "
        ";
        // line 160
        echo "        ";
        // line 161
        $context["content_classes"] = [0 => ((($this->getAttribute(        // line 162
($context["page"] ?? null), "sidebar_first", []) && $this->getAttribute(($context["page"] ?? null), "sidebar_second", []))) ? ("col-sm-6") : ("")), 1 => ((($this->getAttribute(        // line 163
($context["page"] ?? null), "sidebar_first", []) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])))) ? ("col-sm-9") : ("")), 2 => ((($this->getAttribute(        // line 164
($context["page"] ?? null), "sidebar_second", []) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 165
($context["page"] ?? null), "sidebar_first", [])) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])))) ? ("col-sm-12") : (""))];
        // line 168
        echo "        <section";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method")), "html", null, true);
        echo ">

          ";
        // line 171
        echo "          ";
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 172
            echo "            ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 175
            echo "          ";
        }
        // line 176
        echo "
          ";
        // line 178
        echo "          ";
        if ($this->getAttribute(($context["page"] ?? null), "help", [])) {
            // line 179
            echo "            ";
            $this->displayBlock('help', $context, $blocks);
            // line 182
            echo "          ";
        }
        // line 183
        echo "
          ";
        // line 185
        echo "          ";
        $this->displayBlock('content', $context, $blocks);
        // line 189
        echo "        </section>

        ";
        // line 192
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 193
            echo "          ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 198
            echo "        ";
        }
        // line 199
        echo "      </div>
    </div>
  </div>
";
    }

    // line 143
    public function block_header($context, array $blocks = [])
    {
        // line 144
        echo "            <div class=\"col-sm-12\" role=\"heading\">
              ";
        // line 145
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
        echo "
            </div>
          ";
    }

    // line 152
    public function block_sidebar_first($context, array $blocks = [])
    {
        // line 153
        echo "            <aside class=\"col-sm-3\" role=\"complementary\">
              ";
        // line 154
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
        echo "
            </aside>
          ";
    }

    // line 172
    public function block_highlighted($context, array $blocks = [])
    {
        // line 173
        echo "              <div class=\"highlighted\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
        echo "</div>
            ";
    }

    // line 179
    public function block_help($context, array $blocks = [])
    {
        // line 180
        echo "              ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
        echo "
            ";
    }

    // line 185
    public function block_content($context, array $blocks = [])
    {
        // line 186
        echo "            <a id=\"main-content\"></a>
            ";
        // line 187
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
          ";
    }

    // line 193
    public function block_sidebar_second($context, array $blocks = [])
    {
        // line 194
        echo "            <aside class=\"col-sm-3\" role=\"complementary\">
              ";
        // line 195
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
        echo "
            </aside>
          ";
    }

    // line 206
    public function block_section1($context, array $blocks = [])
    {
        // line 207
        echo "    <div id=\"section-1\" class=\"col-xs-12\">
      <div class=\"row\">
        <div class=\"";
        // line 209
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo "\" role=\"contentinfo\">
          ";
        // line 210
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "section1", [])), "html", null, true);
        echo "
        </div>
      </div>
    </div>
  ";
    }

    // line 219
    public function block_section2($context, array $blocks = [])
    {
        // line 220
        echo "    <div id=\"section-2\" class=\"col-xs-12\">
      <div class=\"row\">
        <div class=\"";
        // line 222
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo "\" role=\"contentinfo\">
          ";
        // line 223
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "section2", [])), "html", null, true);
        echo "
        </div>
      </div>
    </div>
  ";
    }

    // line 232
    public function block_section_gray($context, array $blocks = [])
    {
        // line 233
        echo "    <div id=\"section-gray\" class=\"col-xs-12\">
      <div class=\"row\">
        <div class=\"";
        // line 235
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo "\" role=\"contentinfo\">
          ";
        // line 236
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "section_gray", [])), "html", null, true);
        echo "
        </div>
      </div>
    </div>
  ";
    }

    // line 245
    public function block_section2_5($context, array $blocks = [])
    {
        // line 246
        echo "    <div id=\"section-2_5\" class=\"col-xs-12\">
      <div class=\"row\">
        <div class=\"";
        // line 248
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo "\" role=\"contentinfo\">
          ";
        // line 249
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "section2_5", [])), "html", null, true);
        echo "
        </div>
      </div>
    </div>
  ";
    }

    // line 258
    public function block_section3($context, array $blocks = [])
    {
        // line 259
        echo "    <div id=\"section-3\" class=\"col-xs-12\">
      <div class=\"row\">
        <div class=\"";
        // line 261
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo "\" role=\"contentinfo\">
          ";
        // line 262
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "section3", [])), "html", null, true);
        echo "
        </div>
      </div>
    </div>
  ";
    }

    // line 271
    public function block_section4($context, array $blocks = [])
    {
        // line 272
        echo "    <div id=\"section-4\" class=\"col-xs-12\">
      <div class=\"row\">
        <div class=\"";
        // line 274
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo "\" role=\"contentinfo\">
          ";
        // line 275
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "section4", [])), "html", null, true);
        echo "
        </div>
      </div>
    </div>
  ";
    }

    // line 284
    public function block_subscribe($context, array $blocks = [])
    {
        // line 285
        echo "    <div id=\"subscribe\" class=\"col-xs-12\">
      <div class=\"row\">
        <div class=\"";
        // line 287
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo "\" role=\"contentinfo\">
          ";
        // line 288
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "subscribe", [])), "html", null, true);
        echo "
        </div>
      </div>
    </div>
  ";
    }

    // line 297
    public function block_footer($context, array $blocks = [])
    {
        // line 298
        echo "    <div id=\"footer\" class=\"col-xs-12\">
      <div class=\"row\">
        <footer class=\"footer ";
        // line 300
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo "\" role=\"contentinfo\">
          ";
        // line 301
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
        echo "
        </footer>
      </div>
    </div>
  ";
    }

    // line 309
    public function block_footer_bottom($context, array $blocks = [])
    {
        // line 310
        echo "    <div id=\"footer-bottom\" class=\"col-xs-12\">
        <div class=\"footer-bottom ";
        // line 311
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo "\" role=\"contentinfo\">
          ";
        // line 312
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_bottom", [])), "html", null, true);
        echo "
        </div>
    </div>
  ";
    }

    // line 319
    public function block_copyright($context, array $blocks = [])
    {
        // line 320
        echo "    <div id=\"copyright\" class=\"col-xs-12\">
        <div class=\"copyright ";
        // line 321
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo "\" role=\"contentinfo\">
          ";
        // line 322
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "copyright", [])), "html", null, true);
        echo "
        </div>
    </div>
  ";
    }

    public function getTemplateName()
    {
        return "themes/contrib/morethanfood/templates/system/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  702 => 322,  698 => 321,  695 => 320,  692 => 319,  684 => 312,  680 => 311,  677 => 310,  674 => 309,  665 => 301,  661 => 300,  657 => 298,  654 => 297,  645 => 288,  641 => 287,  637 => 285,  634 => 284,  625 => 275,  621 => 274,  617 => 272,  614 => 271,  605 => 262,  601 => 261,  597 => 259,  594 => 258,  585 => 249,  581 => 248,  577 => 246,  574 => 245,  565 => 236,  561 => 235,  557 => 233,  554 => 232,  545 => 223,  541 => 222,  537 => 220,  534 => 219,  525 => 210,  521 => 209,  517 => 207,  514 => 206,  507 => 195,  504 => 194,  501 => 193,  495 => 187,  492 => 186,  489 => 185,  482 => 180,  479 => 179,  472 => 173,  469 => 172,  462 => 154,  459 => 153,  456 => 152,  449 => 145,  446 => 144,  443 => 143,  436 => 199,  433 => 198,  430 => 193,  427 => 192,  423 => 189,  420 => 185,  417 => 183,  414 => 182,  411 => 179,  408 => 178,  405 => 176,  402 => 175,  399 => 172,  396 => 171,  390 => 168,  388 => 165,  387 => 164,  386 => 163,  385 => 162,  384 => 161,  382 => 160,  379 => 158,  376 => 157,  373 => 152,  370 => 151,  367 => 149,  364 => 148,  361 => 143,  358 => 142,  352 => 138,  349 => 137,  346 => 136,  337 => 123,  333 => 122,  329 => 120,  326 => 119,  316 => 128,  313 => 119,  310 => 118,  305 => 115,  300 => 112,  297 => 111,  292 => 105,  288 => 103,  285 => 102,  279 => 99,  276 => 98,  273 => 97,  269 => 94,  260 => 88,  257 => 87,  254 => 86,  250 => 84,  247 => 83,  241 => 81,  239 => 80,  234 => 79,  232 => 76,  231 => 75,  230 => 73,  228 => 72,  225 => 71,  216 => 62,  212 => 61,  208 => 59,  205 => 58,  199 => 319,  197 => 318,  194 => 317,  190 => 309,  188 => 308,  185 => 307,  181 => 297,  179 => 296,  174 => 293,  170 => 284,  168 => 283,  165 => 281,  161 => 271,  159 => 270,  156 => 268,  152 => 258,  150 => 257,  147 => 255,  143 => 245,  141 => 244,  138 => 242,  134 => 232,  132 => 231,  129 => 229,  125 => 219,  123 => 218,  120 => 216,  116 => 206,  114 => 205,  111 => 203,  109 => 136,  106 => 134,  102 => 111,  100 => 110,  97 => 108,  93 => 71,  91 => 70,  87 => 67,  83 => 58,  81 => 57,  78 => 55,  76 => 54,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/morethanfood/templates/system/page.html.twig", "/var/www/html/web/themes/contrib/morethanfood/templates/system/page.html.twig");
    }
}
