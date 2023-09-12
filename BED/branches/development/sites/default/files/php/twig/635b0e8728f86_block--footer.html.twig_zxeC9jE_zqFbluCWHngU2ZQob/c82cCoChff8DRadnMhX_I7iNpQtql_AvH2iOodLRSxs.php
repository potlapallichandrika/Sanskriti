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

/* themes/custom/sanskriti/templates/block/block--footer.html.twig */
class __TwigTemplate_5d151c931bd35d4ce97a384cf53a63ab9b7539b96393bf7fabf88c4ce3a37737 extends \Twig\Template
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

            <div class=\"container px-4 px-lg-5\">
\t\t\t
\t\t\t<div class=\"small text-center text-muted\"> <!-- Facebook -->
\t\t\t ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_foo", [], "any", false, false, true, 6)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#items"] ?? null) : null));
        foreach ($context['_seq'] as $context["_key"] => $context["temp"]) {
            // line 7
            echo "
<!-- Facebook -->
<a class=\"btn ";
            // line 9
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["temp"], "entity", [], "any", false, false, true, 9), "field_social_icon_name", [], "any", false, false, true, 9), "value", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
            echo "-icon-cls\"  href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["temp"], "entity", [], "any", false, false, true, 9), "field_link", [], "any", false, false, true, 9), "value", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
            echo "\" target=\"_blank\" role=\"button\"><i class=\"fab fa-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["temp"], "entity", [], "any", false, false, true, 9), "field_social_icon_name", [], "any", false, false, true, 9), "value", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
            echo "\"></i></a>


";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['temp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "</div>

</div>
            <div class=\"container px-4 px-lg-5 pt-2\">
\t\t\t<div class=\"small text-center text-muted\">";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_copy_right_text", [], "any", false, false, true, 17)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null), 17, $this->source), "html", null, true);
        echo " <a href=\"http://www.ipowerfour.com/\" target=\"_blank\">iPowerFour</a>
            </div>
\t\t\t</div>
        ";
    }

    public function getTemplateName()
    {
        return "themes/custom/sanskriti/templates/block/block--footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 17,  68 => 13,  54 => 9,  50 => 7,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" 

            <div class=\"container px-4 px-lg-5\">
\t\t\t
\t\t\t<div class=\"small text-center text-muted\"> <!-- Facebook -->
\t\t\t {% for temp in content.field_foo['#items'] %}

<!-- Facebook -->
<a class=\"btn {{ temp.entity.field_social_icon_name.value }}-icon-cls\"  href=\"{{ temp.entity.field_link.value }}\" target=\"_blank\" role=\"button\"><i class=\"fab fa-{{ temp.entity.field_social_icon_name.value }}\"></i></a>


{% endfor %}
</div>

</div>
            <div class=\"container px-4 px-lg-5 pt-2\">
\t\t\t<div class=\"small text-center text-muted\">{{content.field_copy_right_text[0]}} <a href=\"http://www.ipowerfour.com/\" target=\"_blank\">iPowerFour</a>
            </div>
\t\t\t</div>
        ", "themes/custom/sanskriti/templates/block/block--footer.html.twig", "D:\\xampp-7.4.28\\htdocs\\Sanskriti\\BED\\branches\\development\\themes\\custom\\sanskriti\\templates\\block\\block--footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 6);
        static $filters = array("escape" => 9);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['escape'],
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
