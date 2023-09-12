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

/* themes/custom/sanskriti/templates/block/block--block-content--event-highlights.html.twig */
class __TwigTemplate_e12423b7c25e682ed7b86ab140ec71c18bca70fdc510d88358e4dbbccf2f40c6 extends \Twig\Template
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
        echo "<section class=\"page-section\" id=\"events\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"sec-title text-center\">
                        <h1 class=\"main-sec-title\">";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_title", [], "any", false, false, true, 5)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), 5, $this->source));
        echo "</h2> 
                         <hr class=\"divider divider\" />
                    </div>

                    ";
        // line 9
        if ((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_video_id", [], "any", false, false, true, 9)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null)) {
            // line 10
            echo "                    <div class=\"col-md-6\">
                        <div class=\"events-highlight-content\">
                            ";
            // line 12
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed((($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 12)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[0] ?? null) : null), 12, $this->source));
            echo "
                        </div>
                    </div>
                    <div class=\"col-md-6 \">
                        <div class=\"events-highlight-video\">
                            <iframe class=\"events-video-sec\" width=\"100%\" height=\"415\" src=\"https://www.youtube.com/embed/";
            // line 17
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_video_id", [], "any", false, false, true, 17)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[0] ?? null) : null), 17, $this->source), "html", null, true);
            echo "\" frameborder=\"0\" allowfullscreen> </iframe> 
                        </div>
                    </div>
                    ";
        } else {
            // line 21
            echo "                    <div class=\"col-md-12\">
                        <div class=\"events-highlight-content\">
                            ";
            // line 23
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed((($__internal_compile_4 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 23)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[0] ?? null) : null), 23, $this->source));
            echo "
                        </div>
                    </div>
                    ";
        }
        // line 27
        echo "                </div>
            </div>
        </section>";
    }

    public function getTemplateName()
    {
        return "themes/custom/sanskriti/templates/block/block--block-content--event-highlights.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 27,  77 => 23,  73 => 21,  66 => 17,  58 => 12,  54 => 10,  52 => 9,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"page-section\" id=\"events\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"sec-title text-center\">
                        <h1 class=\"main-sec-title\">{{content.field_title[0] | raw}}</h2> 
                         <hr class=\"divider divider\" />
                    </div>

                    {% if content.field_video_id[0] %}
                    <div class=\"col-md-6\">
                        <div class=\"events-highlight-content\">
                            {{content.body[0] | raw}}
                        </div>
                    </div>
                    <div class=\"col-md-6 \">
                        <div class=\"events-highlight-video\">
                            <iframe class=\"events-video-sec\" width=\"100%\" height=\"415\" src=\"https://www.youtube.com/embed/{{content.field_video_id[0]}}\" frameborder=\"0\" allowfullscreen> </iframe> 
                        </div>
                    </div>
                    {% else %}
                    <div class=\"col-md-12\">
                        <div class=\"events-highlight-content\">
                            {{content.body[0] | raw}}
                        </div>
                    </div>
                    {% endif %}
                </div>
            </div>
        </section>", "themes/custom/sanskriti/templates/block/block--block-content--event-highlights.html.twig", "D:\\xampp-7.4.28\\htdocs\\Sanskriti\\BED\\branches\\development\\themes\\custom\\sanskriti\\templates\\block\\block--block-content--event-highlights.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 9);
        static $filters = array("raw" => 5, "escape" => 17);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['raw', 'escape'],
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
