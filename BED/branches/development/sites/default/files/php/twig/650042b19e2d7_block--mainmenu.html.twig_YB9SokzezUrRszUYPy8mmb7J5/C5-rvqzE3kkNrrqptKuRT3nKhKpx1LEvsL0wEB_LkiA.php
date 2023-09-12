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

/* themes/custom/sanskriti/templates/block/block--mainmenu.html.twig */
class __TwigTemplate_f9cfbc50b37f2f5b313f25fa4db510f9a51f29f24fd3c75e80508432ac6f057d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo " ";
        $context["url"] = $this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<current>");
        echo " 
 ";
        // line 2
        $context["base_url"] = $this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>");
        // line 3
        echo " ";
        $context["page_name"] = twig_last($this->env, twig_split_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 3, $this->source), "/"));
        // line 4
        echo "\t";
        if ((($context["page_name"] ?? null) == "node")) {
            // line 5
            echo "<nav class=\"navbar navbar-expand-lg navbar-light fixed-top py-2\" id=\"mainNav\">
\t";
        } else {
            // line 7
            echo "<nav class=\"navbar navbar-expand-lg navbar-light fixed-top py-2 rules-header\" id=\"mainNav\">
\t";
        }
        // line 9
        echo "            <div class=\"container px-4 px-lg-5\">
                <a class=\"navbar-brand\" href=\"";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_url"] ?? null), 10, $this->source), "html", null, true);
        echo "\"><img src=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_url"] ?? null), 10, $this->source), "html", null, true);
        echo "themes/custom/sanskriti/assets/img/logo.png\" alt=\"logo\" style=\"height: 60px; width: 60px;\"></a> 
                <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>
                <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
                     ";
        // line 14
        echo "\t\t\t\t\t  ";
        $this->displayBlock('content', $context, $blocks);
        // line 17
        echo "                </div>
            </div>
        </nav>";
    }

    // line 14
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "\t\t\t\t\t\t";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 15, $this->source), "html", null, true);
        echo "
\t\t\t\t\t  ";
    }

    public function getTemplateName()
    {
        return "themes/custom/sanskriti/templates/block/block--mainmenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 15,  81 => 14,  75 => 17,  72 => 14,  64 => 10,  61 => 9,  57 => 7,  53 => 5,  50 => 4,  47 => 3,  45 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" {% set url= path('<current>') %} 
 {% set base_url = url('<front>')%}
 {% set page_name= url|split('/')| last %}
\t{% if (page_name == \"node\") %}
<nav class=\"navbar navbar-expand-lg navbar-light fixed-top py-2\" id=\"mainNav\">
\t{% else %}
<nav class=\"navbar navbar-expand-lg navbar-light fixed-top py-2 rules-header\" id=\"mainNav\">
\t{% endif %}
            <div class=\"container px-4 px-lg-5\">
                <a class=\"navbar-brand\" href=\"{{ base_url }}\"><img src=\"{{ base_url }}themes/custom/sanskriti/assets/img/logo.png\" alt=\"logo\" style=\"height: 60px; width: 60px;\"></a> 
                <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>
                <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
                     {# Menu. #}
\t\t\t\t\t  {% block content %}
\t\t\t\t\t\t{{ content }}
\t\t\t\t\t  {% endblock %}
                </div>
            </div>
        </nav>", "themes/custom/sanskriti/templates/block/block--mainmenu.html.twig", "E:\\xampp\\htdocs\\Sanskriti\\BED\\branches\\development\\themes\\custom\\sanskriti\\templates\\block\\block--mainmenu.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 4, "block" => 14);
        static $filters = array("last" => 3, "split" => 3, "escape" => 10);
        static $functions = array("path" => 1, "url" => 2);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['last', 'split', 'escape'],
                ['path', 'url']
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
