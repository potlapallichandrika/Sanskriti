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

/* themes/custom/sanskriti/templates/block/block--block-content--list-of-contests.html.twig */
class __TwigTemplate_f7fcef744d81508dabe844a8f70507c4e01b00222fe9f57e103b73d6aa915755 extends \Twig\Template
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
        echo "<section class=\"page-section\" id=\"contests\">
            <div class=\"container-fluid px-4 px-lg-5\">
                <h2 class=\"text-center main-sec-title \">";
        // line 3
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_title", [], "any", false, false, true, 3)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), 3, $this->source));
        echo "</h2>
                <hr class=\"divider\" />
                <h3 class=\"text-center\">";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_short_desc", [], "any", false, false, true, 5)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null), 5, $this->source));
        echo "</h3>
\t\t\t\t";
        // line 6
        $context["count"] = 1;
        // line 7
        echo "\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_batch((($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_list_of_contests", [], "any", false, false, true, 7)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#items"] ?? null) : null), 4));
        foreach ($context['_seq'] as $context["_key"] => $context["temp"]) {
            // line 8
            echo "                <div class=\"row\">
\t\t\t\t
\t\t\t\t";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["temp"]);
            foreach ($context['_seq'] as $context["_key"] => $context["var"]) {
                // line 11
                echo "\t\t\t\t
                    <div class=\"col-lg-3 col-md-6 col-25 text-center contest-card";
                // line 12
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["count"] ?? null), 12, $this->source), "html", null, true);
                echo "\"> 
                            <div class=\"mb-2\">
\t\t\t\t\t\t\t
                                <h1 class=\"contest-card-heading\">";
                // line 15
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["var"], "entity", [], "any", false, false, true, 15), "field_title", [], "any", false, false, true, 15), "value", [], "any", false, false, true, 15), 15, $this->source));
                echo "</h1>
                            </div>
                            <div class=\"contest-card-content\"> 
                            ";
                // line 18
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["var"], "entity", [], "any", false, false, true, 18), "field_description", [], "any", false, false, true, 18), "value", [], "any", false, false, true, 18), 18, $this->source));
                echo "
                        </div>
\t\t\t\t\t";
                // line 20
                $context["rules_btn"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["var"], "entity", [], "any", false, false, true, 20), "field_button_text", [], "any", false, false, true, 20), "value", [], "any", false, false, true, 20);
                // line 21
                echo "\t\t\t\t\t";
                if ( !twig_test_empty(twig_trim_filter(($context["rules_btn"] ?? null)))) {
                    echo "\t\t\t\t\t\t
                        <div class=\"rules-button\">
                            <a class=\"btn btn-light btn-xl\" href=\"";
                    // line 23
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["var"], "entity", [], "any", false, false, true, 23), "field_button_link", [], "any", false, false, true, 23), "value", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
                    echo "\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["var"], "entity", [], "any", false, false, true, 23), "field_button_text", [], "any", false, false, true, 23), "value", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
                    echo "</a>
                        </div>
\t\t\t\t\t";
                }
                // line 26
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                // line 27
                $context["count"] = (($context["count"] ?? null) + 1);
                // line 28
                echo "                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['var'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "\t\t\t\t\t  
                    </div>  
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['temp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "\t\t\t\t\t\t
                </div>
        </section>";
    }

    public function getTemplateName()
    {
        return "themes/custom/sanskriti/templates/block/block--block-content--list-of-contests.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 30,  108 => 28,  106 => 27,  103 => 26,  95 => 23,  89 => 21,  87 => 20,  82 => 18,  76 => 15,  70 => 12,  67 => 11,  63 => 10,  59 => 8,  54 => 7,  52 => 6,  48 => 5,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"page-section\" id=\"contests\">
            <div class=\"container-fluid px-4 px-lg-5\">
                <h2 class=\"text-center main-sec-title \">{{content.field_title[0] | raw}}</h2>
                <hr class=\"divider\" />
                <h3 class=\"text-center\">{{content.field_short_desc[0] | raw}}</h3>
\t\t\t\t{% set count = 1 %}
\t\t\t\t{% for temp in content.field_list_of_contests['#items'] |batch(4) %}
                <div class=\"row\">
\t\t\t\t
\t\t\t\t{% for var in temp %}
\t\t\t\t
                    <div class=\"col-lg-3 col-md-6 col-25 text-center contest-card{{count}}\"> 
                            <div class=\"mb-2\">
\t\t\t\t\t\t\t
                                <h1 class=\"contest-card-heading\">{{ var.entity.field_title.value | raw }}</h1>
                            </div>
                            <div class=\"contest-card-content\"> 
                            {{ var.entity.field_description.value | raw }}
                        </div>
\t\t\t\t\t{% set rules_btn=var.entity.field_button_text.value %}
\t\t\t\t\t{% if rules_btn|trim is not empty %}\t\t\t\t\t\t
                        <div class=\"rules-button\">
                            <a class=\"btn btn-light btn-xl\" href=\"{{ var.entity.field_button_link.value }}\">{{ var.entity.field_button_text.value }}</a>
                        </div>
\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% set count = count+1 %}
                          {% endfor %}\t\t\t\t\t  
                    </div>  
                    {% endfor %}\t\t\t\t\t\t
                </div>
        </section>", "themes/custom/sanskriti/templates/block/block--block-content--list-of-contests.html.twig", "D:\\xampp-7.4.28\\htdocs\\Sanskriti\\BED\\branches\\development\\themes\\custom\\sanskriti\\templates\\block\\block--block-content--list-of-contests.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 6, "for" => 7, "if" => 21);
        static $filters = array("raw" => 3, "batch" => 7, "escape" => 12, "trim" => 21);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['raw', 'batch', 'escape', 'trim'],
                []
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
