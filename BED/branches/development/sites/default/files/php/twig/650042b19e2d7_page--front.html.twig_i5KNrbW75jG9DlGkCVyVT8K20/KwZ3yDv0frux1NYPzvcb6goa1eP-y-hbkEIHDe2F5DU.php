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

/* themes/custom/sanskriti/templates/layout/page--front.html.twig */
class __TwigTemplate_6bfa2eaa2741b5a49ab0c974e64079587f320307a13917c77107e78fa3f108ca extends \Twig\Template
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "promotional_banner", [], "any", false, false, true, 1), 1, $this->source), "html", null, true);
        echo "
";
        // line 2
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 2), 2, $this->source), "html", null, true);
        echo "
";
        // line 3
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "home_page_content", [], "any", false, false, true, 3), 3, $this->source), "html", null, true);
        echo "


";
        // line 6
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "homepage_content_left", [], "any", false, false, true, 6) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "homepage_content_right", [], "any", false, false, true, 6))) {
            // line 7
            echo "<section class=\"page-section\" id=\"glimpses\">
\t<div class=\"container-fluid\">
\t\t<div class=\"row\">
\t\t\t<div class=\"sec-title text-center\">
\t\t\t\t<h1 class=\"main-sec-title\">";
            // line 11
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["glimpses_title_head"] ?? null), 11, $this->source), "html", null, true);
            echo "</h1>
                <hr class=\"divider divider\" />\t\t\t\t
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-6\">
\t\t\t   ";
            // line 17
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "homepage_content_left", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
            echo "
\t\t\t</div>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t";
            // line 20
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "homepage_content_right", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
            echo "
\t\t  </div>
\t\t</div>
\t</div>
</section>
";
        }
        // line 26
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "homepage_content_bottom", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
        echo "

\t<footer class=\"bg-light py-5\">
\t";
        // line 29
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "mini_footer", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
        echo "
\t
\t</footer>";
    }

    public function getTemplateName()
    {
        return "themes/custom/sanskriti/templates/layout/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 29,  85 => 26,  76 => 20,  70 => 17,  61 => 11,  55 => 7,  53 => 6,  47 => 3,  43 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ page.promotional_banner }}
{{page.header}}
{{page.home_page_content}}


{% if page.homepage_content_left or page.homepage_content_right%}
<section class=\"page-section\" id=\"glimpses\">
\t<div class=\"container-fluid\">
\t\t<div class=\"row\">
\t\t\t<div class=\"sec-title text-center\">
\t\t\t\t<h1 class=\"main-sec-title\">{{glimpses_title_head}}</h1>
                <hr class=\"divider divider\" />\t\t\t\t
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-6\">
\t\t\t   {{page.homepage_content_left}}
\t\t\t</div>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t{{page.homepage_content_right}}
\t\t  </div>
\t\t</div>
\t</div>
</section>
{% endif %}
{{page.homepage_content_bottom}}

\t<footer class=\"bg-light py-5\">
\t{{page.mini_footer}}
\t
\t</footer>", "themes/custom/sanskriti/templates/layout/page--front.html.twig", "E:\\xampp\\htdocs\\Sanskriti\\BED\\branches\\development\\themes\\custom\\sanskriti\\templates\\layout\\page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 6);
        static $filters = array("escape" => 1);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
