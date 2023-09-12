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

/* themes/custom/sanskriti/templates/block/block--block-content--testimonials.html.twig */
class __TwigTemplate_3b67eff459e2d1fabd3fdd9896ce50d5e3868e112319d152f58eb4528602429f extends \Twig\Template
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
<section class=\"page-section\">
    <div class=\"container\">
  <div class=\"row d-flex justify-content-center\">
    <div class=\"col-md-10 col-xl-8 text-center\">
      <h1 class=\"main-sec-title\">";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_heading_", [], "any", false, false, true, 6)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), 6, $this->source));
        echo "</h1> 
       <hr class=\"divider divider\" />
    </div>
  </div>

  <div class=\"row text-center\">
  ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_testimonials", [], "any", false, false, true, 12)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#items"] ?? null) : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 13
            echo "    <div class=\"col-md-4 mb-5 mb-md-0\">
\t<div class=\"bg-light py-4\">
      <div class=\"d-flex justify-content-center mb-4\">
        <img src=\"";
            // line 16
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "entity", [], "any", false, false, true, 16), "field_image", [], "any", false, false, true, 16), "entity", [], "any", false, false, true, 16), "uri", [], "any", false, false, true, 16), "value", [], "any", false, false, true, 16), 16, $this->source)), "html", null, true);
            echo "\"
          class=\"shadow-1-strong\" width=\"175\" height=\"175\" />
      </div>
      <h5 class=\"mb-3 testimonials-content\">";
            // line 19
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "entity", [], "any", false, false, true, 19), "field_title", [], "any", false, false, true, 19), "value", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
            echo "</h5> 
      <p class=\"px-xl-3 testimonials-content\">
\t  <i class=\"fas fa-quote-left pe-2\"></i>
         ";
            // line 22
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "entity", [], "any", false, false, true, 22), "field_description", [], "any", false, false, true, 22), "value", [], "any", false, false, true, 22), 22, $this->source));
            echo "
    </p>
    </div>
    </div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "  </div>
</div>
</section>";
    }

    public function getTemplateName()
    {
        return "themes/custom/sanskriti/templates/block/block--block-content--testimonials.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 27,  76 => 22,  70 => 19,  64 => 16,  59 => 13,  55 => 12,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<section class=\"page-section\">
    <div class=\"container\">
  <div class=\"row d-flex justify-content-center\">
    <div class=\"col-md-10 col-xl-8 text-center\">
      <h1 class=\"main-sec-title\">{{content.field_heading_[0] | raw}}</h1> 
       <hr class=\"divider divider\" />
    </div>
  </div>

  <div class=\"row text-center\">
  {% for row in content.field_testimonials['#items'] %}
    <div class=\"col-md-4 mb-5 mb-md-0\">
\t<div class=\"bg-light py-4\">
      <div class=\"d-flex justify-content-center mb-4\">
        <img src=\"{{ file_url(row.entity.field_image.entity.uri.value) }}\"
          class=\"shadow-1-strong\" width=\"175\" height=\"175\" />
      </div>
      <h5 class=\"mb-3 testimonials-content\">{{ row.entity.field_title.value }}</h5> 
      <p class=\"px-xl-3 testimonials-content\">
\t  <i class=\"fas fa-quote-left pe-2\"></i>
         {{ row.entity.field_description.value | raw }}
    </p>
    </div>
    </div>
\t{% endfor %}
  </div>
</div>
</section>", "themes/custom/sanskriti/templates/block/block--block-content--testimonials.html.twig", "D:\\xampp-7.4.28\\htdocs\\Sanskriti\\BED\\branches\\development\\themes\\custom\\sanskriti\\templates\\block\\block--block-content--testimonials.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 12);
        static $filters = array("raw" => 6, "escape" => 16);
        static $functions = array("file_url" => 16);

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
