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

/* modules/contrib/menu_item_extras/templates/menu-link-content.html.twig */
class __TwigTemplate_6286a36810627bc6c98a9c2891dfed3f59202eb2b2bc43ca42d6d9d574ac2fbc extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 16, "if" => 23];
        $filters = ["escape" => 22];
        $functions = ["link" => 24];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape'],
                ['link']
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
        // line 15
        echo "
";
        // line 16
        $context["menu_dropdown_classes"] = [0 => "menu-dropdown", 1 => (($this->getAttribute(        // line 18
($context["elements"] ?? null), "#menu_level", [], "array", true, true)) ? (("menu-dropdown-" . $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["elements"] ?? null), "#menu_level", [], "array")))) : ("")), 2 => (($this->getAttribute(        // line 19
($context["elements"] ?? null), "#view_mode", [], "array")) ? (("menu-type-" . $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["elements"] ?? null), "#view_mode", [], "array")))) : (""))];
        // line 21
        echo "
<div";
        // line 22
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["menu_dropdown_classes"] ?? null)], "method")), "html", null, true);
        echo ">
  ";
        // line 23
        if (($context["show_item_link"] ?? null)) {
            // line 24
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getLink($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["menu_link_content"] ?? null), "getTitle", [], "method")), $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["menu_link_content"] ?? null), "getUrlObject", [], "method"))), "html", null, true);
            echo "
  ";
        }
        // line 26
        echo "  ";
        if (($context["content"] ?? null)) {
            // line 27
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "html", null, true);
            echo "
  ";
        }
        // line 29
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "modules/contrib/menu_item_extras/templates/menu-link-content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 29,  80 => 27,  77 => 26,  71 => 24,  69 => 23,  65 => 22,  62 => 21,  60 => 19,  59 => 18,  58 => 16,  55 => 15,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/menu_item_extras/templates/menu-link-content.html.twig", "/var/www/html/web/modules/contrib/menu_item_extras/templates/menu-link-content.html.twig");
    }
}
