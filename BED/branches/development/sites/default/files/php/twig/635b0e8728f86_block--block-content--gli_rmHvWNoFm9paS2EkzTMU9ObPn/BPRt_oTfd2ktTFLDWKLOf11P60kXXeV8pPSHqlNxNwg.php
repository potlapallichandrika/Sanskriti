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

/* themes/custom/sanskriti/templates/block/block--block-content--glimpses.html.twig */
class __TwigTemplate_7a807fb027699dca4bed85fed5520286830f3dbcc8b43ab1478a7797f2dee1c2 extends \Twig\Template
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
        $context["block_id"] = ("carouselExampleIndicators" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["elements"] ?? null), "content", [], "any", false, false, true, 1)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#block_content"] ?? null) : null), "id", [], "method", false, false, true, 1), 1, $this->source));
        // line 2
        echo "<div id=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["block_id"] ?? null), 2, $this->source), "html", null, true);
        echo "\" class=\"carousel slide\" data-bs-ride=\"carousel\"style=\"margin-bottom: 20px;\">
\t<ol class=\"carousel-indicators\">
\t   ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_glimpses_slider", [], "any", false, false, true, 4)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#items"] ?? null) : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 5
            echo "\t\t  ";
            $context["active_class"] = "";
            // line 6
            echo "\t\t  ";
            $context["true_class"] = "";
            // line 7
            echo "\t\t  ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 7)) {
                // line 8
                echo "\t\t  ";
                $context["active_class"] = "active";
                // line 9
                echo "\t\t  ";
                $context["true_class"] = "true";
                // line 10
                echo "\t\t  ";
            }
            // line 11
            echo "\t\t  <li class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["active_class"] ?? null), 11, $this->source), "html", null, true);
            echo "\" data-bs-target=\"#";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["block_id"] ?? null), 11, $this->source), "html", null, true);
            echo "\" data-bs-slide-to=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
            echo "\" aria-current=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["true_class"] ?? null), 11, $this->source), "html", null, true);
            echo "\" aria-label=\"Slide ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
            echo "\"></li>
\t\t  ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "\t
\t</ol>
\t<div class=\"carousel-inner\">
\t";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_glimpses_slider", [], "any", false, false, true, 15)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#items"] ?? null) : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["temp"]) {
            // line 16
            echo "\t  ";
            $context["active1"] = "";
            // line 17
            echo "\t  ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 17)) {
                // line 18
                echo "\t\t";
                $context["active1"] = "active";
                // line 19
                echo "\t  ";
            } else {
                // line 20
                echo "\t\t";
                $context["active1"] = "";
                // line 21
                echo "\t  ";
            }
            // line 22
            echo "\t\t<div class=\"carousel-item ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["active1"] ?? null), 22, $this->source), "html", null, true);
            echo "\"> <img src=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["temp"], "entity", [], "any", false, false, true, 22), "field_image", [], "any", false, false, true, 22), "entity", [], "any", false, false, true, 22), "uri", [], "any", false, false, true, 22), "value", [], "any", false, false, true, 22), 22, $this->source)), "html", null, true);
            echo "\" class=\"d-block w-100\" alt=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["temp"], "entity", [], "any", false, false, true, 22), "field_image", [], "any", false, false, true, 22), "alt", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
            echo "\"> 
\t\t
\t\t</div>

\t   ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['temp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "\t</div>
\t<button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#";
        // line 28
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["block_id"] ?? null), 28, $this->source), "html", null, true);
        echo "\" data-bs-slide=\"prev\"> <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span> <span class=\"visually-hidden\">Previous</span> </button>
\t<button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#";
        // line 29
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["block_id"] ?? null), 29, $this->source), "html", null, true);
        echo "\" data-bs-slide=\"next\"> <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span> <span class=\"visually-hidden\">Next</span> </button>
</div>
                    ";
    }

    public function getTemplateName()
    {
        return "themes/custom/sanskriti/templates/block/block--block-content--glimpses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 29,  174 => 28,  171 => 27,  147 => 22,  144 => 21,  141 => 20,  138 => 19,  135 => 18,  132 => 17,  129 => 16,  112 => 15,  107 => 12,  82 => 11,  79 => 10,  76 => 9,  73 => 8,  70 => 7,  67 => 6,  64 => 5,  47 => 4,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set block_id =  'carouselExampleIndicators' ~ elements.content['#block_content'].id() %}
<div id=\"{{ block_id }}\" class=\"carousel slide\" data-bs-ride=\"carousel\"style=\"margin-bottom: 20px;\">
\t<ol class=\"carousel-indicators\">
\t   {% for row in content.field_glimpses_slider['#items'] %}
\t\t  {% set active_class = '' %}
\t\t  {% set true_class = '' %}
\t\t  {% if(loop.first) %}
\t\t  {% set active_class = 'active' %}
\t\t  {% set true_class = 'true' %}
\t\t  {% endif %}
\t\t  <li class=\"{{ active_class }}\" data-bs-target=\"#{{ block_id }}\" data-bs-slide-to=\"{{ loop.index0 }}\" aria-current=\"{{ true_class }}\" aria-label=\"Slide {{ loop.index0 }}\"></li>
\t\t  {% endfor %}\t
\t</ol>
\t<div class=\"carousel-inner\">
\t{% for temp in content.field_glimpses_slider['#items'] %}
\t  {% set active1 = '' %}
\t  {% if loop.first %}
\t\t{% set active1 = 'active' %}
\t  {% else %}
\t\t{% set active1 = '' %}
\t  {% endif %}
\t\t<div class=\"carousel-item {{active1}}\"> <img src=\"{{ file_url(temp.entity.field_image.entity.uri.value) }}\" class=\"d-block w-100\" alt=\"{{ temp.entity.field_image.alt }}\"> 
\t\t
\t\t</div>

\t   {% endfor %}
\t</div>
\t<button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#{{ block_id }}\" data-bs-slide=\"prev\"> <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span> <span class=\"visually-hidden\">Previous</span> </button>
\t<button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#{{ block_id }}\" data-bs-slide=\"next\"> <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span> <span class=\"visually-hidden\">Next</span> </button>
</div>
                    ", "themes/custom/sanskriti/templates/block/block--block-content--glimpses.html.twig", "D:\\xampp-7.4.28\\htdocs\\Sanskriti\\BED\\branches\\development\\themes\\custom\\sanskriti\\templates\\block\\block--block-content--glimpses.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "for" => 4, "if" => 7);
        static $filters = array("escape" => 2);
        static $functions = array("file_url" => 22);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['escape'],
                ['file_url']
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
