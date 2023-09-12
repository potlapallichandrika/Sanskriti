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

/* themes/custom/sanskriti/templates/navigation/menu--main-menu.html.twig */
class __TwigTemplate_3a3820d68c2cd74805c6c7fb411b4499eee1d19d1a3090d10c63a678933923ec extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "
";
        // line 22
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 23
        echo "
";
        // line 28
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0], 28, $context, $this->getSourceContext()));
        echo "

";
        // line 62
        echo "
";
    }

    // line 30
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 31
            echo "  ";
            $macros["menus"] = $this;
            // line 32
            echo "
  
  
\t\t\t\t ";
            // line 35
            if (($context["items"] ?? null)) {
                // line 36
                echo "\t\t\t     ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 37
                    echo "                    <ul class=\"navbar-nav mx-auto my-2 my-lg-0\">
\t\t\t\t\t";
                }
                // line 39
                echo "\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 40
                    echo "          ";
                    $context["link_classes"] = [0 => "nav-link"];
                    // line 41
                    echo "\t\t\t\t    ";
                    if ((($context["menu_level"] ?? null) == 0)) {
                        // line 42
                        echo "                       \t\t\t\t\t
                        <li class=\"nav-item ";
                        // line 43
                        if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 43)) {
                            echo " active ";
                        }
                        echo "\">
                        ";
                        // line 44
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 44), 44, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 44), 44, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 44), "addClass", [0 => ($context["link_classes"] ?? null)], "method", false, false, true, 44), 44, $this->source)), "html", null, true);
                        echo "
                        </li>
                      
\t\t\t\t\t\t";
                        // line 47
                        if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 47)) {
                            // line 48
                            echo "\t\t\t
\t\t\t\t       ";
                            // line 49
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_submenu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 49), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)], 49, $context, $this->getSourceContext()));
                            echo "
\t\t\t
\t\t\t\t";
                        }
                        // line 52
                        echo "\t\t\t\t";
                    }
                    // line 53
                    echo "\t\t\t\t";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 54
                echo "\t\t\t\t";
                if ((($context["menu_level"] ?? null) == 0)) {
                    echo "  
                    </ul>
\t\t\t\t\t";
                }
                // line 57
                echo "\t\t\t\t\t";
            }
            // line 58
            echo "                
\t\t\t\t

";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/sanskriti/templates/navigation/menu--main-menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 58,  163 => 57,  156 => 54,  142 => 53,  139 => 52,  133 => 49,  130 => 48,  128 => 47,  122 => 44,  116 => 43,  113 => 42,  110 => 41,  107 => 40,  89 => 39,  85 => 37,  82 => 36,  80 => 35,  75 => 32,  72 => 31,  57 => 30,  52 => 62,  47 => 28,  44 => 23,  42 => 22,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{#
/**
 * @file
 * Theme override to display a menu.
 *
 * Available variables:
 * - menu_name: The machine name of the menu.
 * - items: A nested list of menu items. Each menu item contains:
 *   - attributes: HTML attributes for the menu item.
 *   - below: The menu item child items.
 *   - title: The menu link title.
 *   - url: The menu link url, instance of \\Drupal\\Core\\Url
 *   - localized_options: Menu link localized options.
 *   - is_expanded: TRUE if the link has visible children within the current
 *     menu tree.
 *   - is_collapsed: TRUE if the link has children within the current menu tree
 *     that are not currently visible.
 *   - in_active_trail: TRUE if the link is in the active trail.
 */
#}
{% import _self as menus %}

{#
  We call a macro which calls itself to render the full tree.
  @see https://twig.symfony.com/doc/1.x/tags/macro.html
#}
{{ menus.menu_links(items, attributes, 0) }}

{% macro menu_links(items, attributes, menu_level) %}
  {% import _self as menus %}

  
  
\t\t\t\t {% if items %}
\t\t\t     {% if menu_level == 0 %}
                    <ul class=\"navbar-nav mx-auto my-2 my-lg-0\">
\t\t\t\t\t{% endif %}
\t\t\t\t\t{% for item in items %}
          {% set link_classes = ['nav-link']  %}
\t\t\t\t    {% if menu_level == 0 %}
                       \t\t\t\t\t
                        <li class=\"nav-item {% if loop.first %} active {% endif %}\">
                        {{ link(item.title, item.url, item.attributes.addClass(link_classes)) }}
                        </li>
                      
\t\t\t\t\t\t{% if item.below %}
\t\t\t
\t\t\t\t       {{ menus.submenu_links(item.below, attributes, menu_level + 1) }}
\t\t\t
\t\t\t\t{% endif %}
\t\t\t\t{% endif %}
\t\t\t\t{% endfor %}
\t\t\t\t{% if menu_level == 0 %}  
                    </ul>
\t\t\t\t\t{% endif %}
\t\t\t\t\t{% endif %}
                
\t\t\t\t

{% endmacro %}

", "themes/custom/sanskriti/templates/navigation/menu--main-menu.html.twig", "E:\\xampp\\htdocs\\Sanskriti\\BED\\branches\\development\\themes\\custom\\sanskriti\\templates\\navigation\\menu--main-menu.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 22, "macro" => 30, "if" => 35, "for" => 39, "set" => 40);
        static $filters = array("escape" => 44);
        static $functions = array("link" => 44);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for', 'set'],
                ['escape'],
                ['link']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

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
}
