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

/* themes/custom/sanskriti/templates/block/block--block-content--key-dates.html.twig */
class __TwigTemplate_4e879e00d12d1521a86446dc1de4f26537a348b23ef0aed01ae96cb845c4a126 extends \Twig\Template
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
        echo " ";
        $context["base_url"] = twig_slice($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>")), 0,  -1);
        // line 2
        echo " <!-- Key Dates-->
      <section class=\"page-section bg-light\"  id=\"key-dates\">
\t  <div class=\"container\">
            <div class=\"row text-center\"> 
                        <h1 class=\"key-dates-sec-title\">";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_title", [], "any", false, false, true, 6)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), 6, $this->source));
        echo "</h1>
                        <hr class=\"divider divider\" /> 
\t\t\t\t\t\t";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_short_desc", [], "any", false, false, true, 8)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null), 8, $this->source));
        echo "
            </div>
\t\t\t\t<div class=\"row text-center bt-sec\">
               ";
        // line 11
        if ((($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_usa_register_button_label", [], "any", false, false, true, 11)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[0] ?? null) : null)) {
            // line 12
            echo "               ";
            $context["burl"] = (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_usa_register_button_link", [], "any", false, false, true, 12)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[0] ?? null) : null);
            // line 13
            echo "\t\t\t\t  ";
            if (twig_in_filter("http", $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((($__internal_compile_4 = (($__internal_compile_5 = ($context["burl"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["#context"] ?? null) : null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["value"] ?? null) : null)))) {
                // line 14
                echo "\t\t\t\t  ";
                $context["target"] = "target = \"_blank\" ";
                // line 15
                echo "\t\t\t\t  ";
            }
            echo "\t\t\t   
\t\t\t\t<div class=\"col-md-6 \">
\t\t\t<a class=\"btn btn-primary btn-xl m-3\" ";
            // line 17
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["target"] ?? null), 17, $this->source), "html", null, true);
            echo " href=\"";
            if (twig_in_filter("http", $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((($__internal_compile_6 = (($__internal_compile_7 = ($context["burl"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["#context"] ?? null) : null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["value"] ?? null) : null)))) {
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_8 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_usa_register_button_link", [], "any", false, false, true, 17)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[0] ?? null) : null), 17, $this->source), "html", null, true);
                echo " ";
            } else {
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_url"] ?? null), 17, $this->source), "html", null, true);
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_9 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_usa_register_button_link", [], "any", false, false, true, 17)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[0] ?? null) : null), 17, $this->source), "html", null, true);
                echo " ";
            }
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_10 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_usa_register_button_label", [], "any", false, false, true, 17)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[0] ?? null) : null), 17, $this->source), "html", null, true);
            echo "</a></div>
\t\t\t";
        }
        // line 19
        echo "\t\t\t";
        if ((($__internal_compile_11 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_india_register_button_labe", [], "any", false, false, true, 19)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[0] ?? null) : null)) {
            // line 20
            echo "\t\t\t";
            $context["bsurl"] = (($__internal_compile_12 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_india_register_button_link", [], "any", false, false, true, 20)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[0] ?? null) : null);
            // line 21
            echo "\t\t\t\t  ";
            if (twig_in_filter("http", $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((($__internal_compile_13 = (($__internal_compile_14 = ($context["bsurl"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["#context"] ?? null) : null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["value"] ?? null) : null)))) {
                // line 22
                echo "\t\t\t\t  ";
                $context["target"] = "target = \"_blank\" ";
                // line 23
                echo "\t\t\t\t  ";
            }
            // line 24
            echo "\t\t\t<div class=\"col-md-6\">
\t\t\t\t<a class=\"btn btn-primary btn-xl m-3\" ";
            // line 25
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["target"] ?? null), 25, $this->source), "html", null, true);
            echo " href=\"";
            if (twig_in_filter("http", $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((($__internal_compile_15 = (($__internal_compile_16 = ($context["bsurl"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["#context"] ?? null) : null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["value"] ?? null) : null)))) {
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_17 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_india_register_button_link", [], "any", false, false, true, 25)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[0] ?? null) : null), 25, $this->source), "html", null, true);
                echo " ";
            } else {
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_url"] ?? null), 25, $this->source), "html", null, true);
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_18 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_india_register_button_link", [], "any", false, false, true, 25)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18[0] ?? null) : null), 25, $this->source), "html", null, true);
                echo " ";
            }
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_19 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_india_register_button_labe", [], "any", false, false, true, 25)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19[0] ?? null) : null), 25, $this->source), "html", null, true);
            echo "</a></div>
\t\t\t";
        }
        // line 26
        echo "\t
\t\t\t    </div>
\t  </div>
\t\t\t
            
\t\t<div class=\"container\" id=\"key-dates-sec\">
\t\t";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_batch((($__internal_compile_20 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_key_dates", [], "any", false, false, true, 32)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["#items"] ?? null) : null), 4));
        foreach ($context['_seq'] as $context["_key"] => $context["temp"]) {
            // line 33
            echo "\t\t<div class=\"row mt-5\">
\t\t";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["temp"]);
            foreach ($context['_seq'] as $context["_key"] => $context["var"]) {
                // line 35
                echo "\t\t<div class=\"bird-registration-sec col-lg-3 col-md-6 col-25 text-center\">
            <div class=\"sec-title-infobox text-center bg-white\">
              <div class=\"box-header animation-\">
\t\t\t  <div class=\"info-box-icon\"> <i aria-hidden=\"true\" class=\"early-bird-infobox-icon icon ";
                // line 38
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["var"], "entity", [], "any", false, false, true, 38), "field_key_dates_icon", [], "any", false, false, true, 38), "value", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
                echo " \"></i>
\t\t\t  </div>
\t\t\t  </div>
                <div class=\"box-body\">
\t\t\t\t<h1 class=\"key-dates-info-box-title\">";
                // line 42
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["var"], "entity", [], "any", false, false, true, 42), "field_description", [], "any", false, false, true, 42), "value", [], "any", false, false, true, 42), 42, $this->source));
                echo "</h1>
                 <p>";
                // line 43
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["var"], "entity", [], "any", false, false, true, 43), "field_date", [], "any", false, false, true, 43), "value", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
                echo "</p>
                </div>
            </div>\t
        </div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['var'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['temp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "\t\t</div>
\t\t  
       </section>";
    }

    public function getTemplateName()
    {
        return "themes/custom/sanskriti/templates/block/block--block-content--key-dates.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 50,  176 => 48,  165 => 43,  161 => 42,  154 => 38,  149 => 35,  145 => 34,  142 => 33,  138 => 32,  130 => 26,  112 => 25,  109 => 24,  106 => 23,  103 => 22,  100 => 21,  97 => 20,  94 => 19,  76 => 17,  70 => 15,  67 => 14,  64 => 13,  61 => 12,  59 => 11,  53 => 8,  48 => 6,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" {% set base_url = url('<front>')|render|slice(0,-1) %}
 <!-- Key Dates-->
      <section class=\"page-section bg-light\"  id=\"key-dates\">
\t  <div class=\"container\">
            <div class=\"row text-center\"> 
                        <h1 class=\"key-dates-sec-title\">{{content.field_title[0] | raw}}</h1>
                        <hr class=\"divider divider\" /> 
\t\t\t\t\t\t{{ content.field_short_desc[0]| raw }}
            </div>
\t\t\t\t<div class=\"row text-center bt-sec\">
               {% if content.field_usa_register_button_label[0] %}
               {% set burl = content.field_usa_register_button_link[0] %}
\t\t\t\t  {% if 'http' in burl[\"#context\"][\"value\"]|render %}
\t\t\t\t  {% set target = 'target = \"_blank\" ' %}
\t\t\t\t  {% endif %}\t\t\t   
\t\t\t\t<div class=\"col-md-6 \">
\t\t\t<a class=\"btn btn-primary btn-xl m-3\" {{ target }} href=\"{% if 'http' in burl[\"#context\"][\"value\"]|render %} {{ content.field_usa_register_button_link[0] }} {% else %} {{base_url}}{{ content.field_usa_register_button_link[0] }} {% endif %}\">{{ content.field_usa_register_button_label[0]}}</a></div>
\t\t\t{% endif %}
\t\t\t{% if content.field_india_register_button_labe[0] %}
\t\t\t{% set bsurl = content.field_india_register_button_link[0] %}
\t\t\t\t  {% if 'http' in bsurl[\"#context\"][\"value\"]|render %}
\t\t\t\t  {% set target = 'target = \"_blank\" ' %}
\t\t\t\t  {% endif %}
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<a class=\"btn btn-primary btn-xl m-3\" {{ target }} href=\"{% if 'http' in bsurl[\"#context\"][\"value\"]|render %} {{ content.field_india_register_button_link[0] }} {% else %} {{base_url}}{{ content.field_india_register_button_link[0] }} {% endif %}\">{{ content.field_india_register_button_labe[0]}}</a></div>
\t\t\t{% endif %}\t
\t\t\t    </div>
\t  </div>
\t\t\t
            
\t\t<div class=\"container\" id=\"key-dates-sec\">
\t\t{% for temp in content.field_key_dates['#items'] |batch(4) %}
\t\t<div class=\"row mt-5\">
\t\t{% for var in temp %}
\t\t<div class=\"bird-registration-sec col-lg-3 col-md-6 col-25 text-center\">
            <div class=\"sec-title-infobox text-center bg-white\">
              <div class=\"box-header animation-\">
\t\t\t  <div class=\"info-box-icon\"> <i aria-hidden=\"true\" class=\"early-bird-infobox-icon icon {{ var.entity.field_key_dates_icon.value }} \"></i>
\t\t\t  </div>
\t\t\t  </div>
                <div class=\"box-body\">
\t\t\t\t<h1 class=\"key-dates-info-box-title\">{{ var.entity.field_description.value | raw }}</h1>
                 <p>{{ var.entity.field_date.value }}</p>
                </div>
            </div>\t
        </div>
\t\t{% endfor %}
\t\t</div>
\t\t{% endfor %}
\t\t</div>
\t\t  
       </section>", "themes/custom/sanskriti/templates/block/block--block-content--key-dates.html.twig", "D:\\xampp-7.4.28\\htdocs\\Sanskriti\\BED\\branches\\development\\themes\\custom\\sanskriti\\templates\\block\\block--block-content--key-dates.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 11, "for" => 32);
        static $filters = array("slice" => 1, "render" => 1, "raw" => 6, "escape" => 17, "batch" => 32);
        static $functions = array("url" => 1);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['slice', 'render', 'raw', 'escape', 'batch'],
                ['url']
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
