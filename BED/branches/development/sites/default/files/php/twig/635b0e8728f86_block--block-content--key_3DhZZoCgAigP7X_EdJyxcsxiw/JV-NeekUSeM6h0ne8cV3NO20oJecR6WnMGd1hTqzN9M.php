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

/* themes/custom/sanskriti/templates/block/block--block-content--key-guests.html.twig */
class __TwigTemplate_6c8cc452a7660ca3bd6c3ac743e887893cd8707db4340f0f23da98806c5a8fe9 extends \Twig\Template
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
        echo "<section class=\"page-section\"  id=\"key-guest\">
            <div class=\"container\">
                <div class=\"row text-center\"> 
                        <h1 class=\"main-sec-title\">";
        // line 4
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_heading_", [], "any", false, false, true, 4)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), 4, $this->source));
        echo "</h1>
                        <hr class=\"divider divider\" /> 
                </div>
                <div class=\"row\"> 
                    <div class=\"col-md-6 key-guest-sec-img\">
                         <img src=\"";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 9)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null), 9, $this->source), "html", null, true);
        echo "\" alt=\"Swami Mukundanada\" style=\"width:100%;\">
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"key-guest-card-title text-center\">
                            <h3>";
        // line 13
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_title", [], "any", false, false, true, 13)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[0] ?? null) : null), 13, $this->source), "html", null, true);
        echo "</h3>
                        </div>
                        <div class=\"key-guest-card-text\">
                            ";
        // line 16
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed((($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_description", [], "any", false, false, true, 16)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[0] ?? null) : null), 16, $this->source));
        echo "
                        </div>

                    </div>
                </div>
                <div class=\"row key-guest-sec-row\">
\t\t\t\t";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($__internal_compile_4 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_key_guests", [], "any", false, false, true, 22)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["#items"] ?? null) : null));
        foreach ($context['_seq'] as $context["_key"] => $context["temp"]) {
            // line 23
            echo "                    <div class=\"col-md-4 key-guest-sec-img\">
                        <div class=\"img\"> <img src=\"";
            // line 24
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["temp"], "entity", [], "any", false, false, true, 24), "field_image", [], "any", false, false, true, 24), "entity", [], "any", false, false, true, 24), "uri", [], "any", false, false, true, 24), "value", [], "any", false, false, true, 24), 24, $this->source)), "html", null, true);
            echo "\" alt=\"Swami Mukundanada\" style=\"width:100%;\"> </div> 
                        <div class=\"key-guest-card-title text-center\">
                            <h4>";
            // line 26
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["temp"], "entity", [], "any", false, false, true, 26), "field_title", [], "any", false, false, true, 26), "value", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
            echo "</h4>
                        </div>
                        <div class=\"key-guest-card-text\">
                            ";
            // line 29
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["temp"], "entity", [], "any", false, false, true, 29), "field_description", [], "any", false, false, true, 29), "value", [], "any", false, false, true, 29), 29, $this->source));
            echo " 
\t\t\t\t\t\t\t<hr class=\"divider-key-guest-content\">
                        </div> 
\t\t\t\t\t\t
                    </div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['temp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "                </div>
            </div>
        </section>";
    }

    public function getTemplateName()
    {
        return "themes/custom/sanskriti/templates/block/block--block-content--key-guests.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 35,  92 => 29,  86 => 26,  81 => 24,  78 => 23,  74 => 22,  65 => 16,  59 => 13,  52 => 9,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"page-section\"  id=\"key-guest\">
            <div class=\"container\">
                <div class=\"row text-center\"> 
                        <h1 class=\"main-sec-title\">{{content.field_heading_[0] | raw}}</h1>
                        <hr class=\"divider divider\" /> 
                </div>
                <div class=\"row\"> 
                    <div class=\"col-md-6 key-guest-sec-img\">
                         <img src=\"{{content.field_image[0]}}\" alt=\"Swami Mukundanada\" style=\"width:100%;\">
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"key-guest-card-title text-center\">
                            <h3>{{ content.field_title[0] }}</h3>
                        </div>
                        <div class=\"key-guest-card-text\">
                            {{content.field_description[0]|raw}}
                        </div>

                    </div>
                </div>
                <div class=\"row key-guest-sec-row\">
\t\t\t\t{% for temp in content.field_key_guests['#items'] %}
                    <div class=\"col-md-4 key-guest-sec-img\">
                        <div class=\"img\"> <img src=\"{{ file_url(temp.entity.field_image.entity.uri.value) }}\" alt=\"Swami Mukundanada\" style=\"width:100%;\"> </div> 
                        <div class=\"key-guest-card-title text-center\">
                            <h4>{{ temp.entity.field_title.value }}</h4>
                        </div>
                        <div class=\"key-guest-card-text\">
                            {{ temp.entity.field_description.value | raw }} 
\t\t\t\t\t\t\t<hr class=\"divider-key-guest-content\">
                        </div> 
\t\t\t\t\t\t
                    </div>
\t\t\t\t\t{% endfor %}
                </div>
            </div>
        </section>", "themes/custom/sanskriti/templates/block/block--block-content--key-guests.html.twig", "D:\\xampp-7.4.28\\htdocs\\Sanskriti\\BED\\branches\\development\\themes\\custom\\sanskriti\\templates\\block\\block--block-content--key-guests.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 22);
        static $filters = array("raw" => 4, "escape" => 9);
        static $functions = array("file_url" => 24);

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['raw', 'escape'],
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
