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

/* themes/custom/sanskriti/templates/block/block--block-content--winners.html.twig */
class __TwigTemplate_a35df949f8c21e5c1a5b140c4044acc35fa49c2caf4c7945ff9b51375ca680e6 extends \Twig\Template
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
<section class=\"winners-sec\">
<section id=\"winners\">
      <div class=\"container\">
        <div class=\"row winners-sec\">
          <div class=\"sec-title text-center\">
            
             ";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_short_desc", [], "any", false, false, true, 8)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), 8, $this->source));
        echo "
          
          </div>
        </div>
      </div>
    </section>
\t
<section id=\"winner-top-sec\">
      <div class=\"container\">
\t 
        <div class=\"row\">
\t\t";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_winners", [], "any", false, false, true, 19)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#items"] ?? null) : null));
        foreach ($context['_seq'] as $context["_key"] => $context["temp"]) {
            // line 20
            echo "\t\t";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["temp"], "entity", [], "any", false, false, true, 20), "field_table_", [], "any", false, false, true, 20), "value", [], "any", false, false, true, 20)) {
                // line 21
                echo "         <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["temp"], "entity", [], "any", false, false, true, 21), "field_table_", [], "any", false, false, true, 21), "value", [], "any", false, false, true, 21), 21, $this->source));
                echo "-Sec winners-tabs col-md-3\">
            <div class=\"sec-title text-center\">
              <div class=\"visual-arts-button\">
                <a
                  href=\"#";
                // line 25
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["temp"], "entity", [], "any", false, false, true, 25), "field_table_", [], "any", false, false, true, 25), "value", [], "any", false, false, true, 25), 25, $this->source));
                echo "\"
                  class=\"button-link size-xs elementor-animation-shrink elementor-button\"
                  role=\"button\"
                >
                  <span class=\"visual-arts-button-content-wrapper\">
                    <span class=\"button-text\">";
                // line 30
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["temp"], "entity", [], "any", false, false, true, 30), "field_table_", [], "any", false, false, true, 30), "value", [], "any", false, false, true, 30), 30, $this->source));
                echo "</span>
                  </span>
                </a>
              </div>
            </div>
\t
          </div>
\t\t   ";
            }
            // line 38
            echo "\t\t   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['temp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        \t</div>\t\t
        <div class=\"elementor-shape elementor-shape-top\" data-negative=\"false\">
          <svg
            xmlns=\"http://www.w3.org/2000/svg\"
            viewBox=\"0 0 283.5 27.8\"
            preserveAspectRatio=\"none\"
            class=\"winner-svg\"
          >
            <path
              class=\"elementor-shape-fill\"
              d=\"M283.5,9.7c0,0-7.3,4.3-14,4.6c-6.8,0.3-12.6,0-20.9-1.5c-11.3-2-33.1-10.1-44.7-5.7  s-12.1,4.6-18,7.4c-6.6,3.2-20,9.6-36.6,9.3C131.6,23.5,99.5,7.2,86.3,8c-1.4,0.1-6.6,0.8-10.5,2c-3.8,1.2-9.4,3.8-17,4.7   c-3.2,0.4-8.3,1.1-14.2,0.9c-1.5-0.1-6.3-0.4-12-1.6c-5.7-1.2-11-3.1-15.8-3.7C6.5,9.2,0,10.8,0,10.8V0h283.5V9.7z M260.8,11.3  c-0.7-1-2-0.4-4.3-0.4c-2.3,0-6.1-1.2-5.8-1.1c0.3,0.1,3.1,1.5,6,1.9C259.7,12.2,261.4,12.3,260.8,11.3z M242.4,8.6 c0,0-2.4-0.2-5.6-0.9c-3.2-0.8-10.3-2.8-15.1-3.5c-8.2-1.1-15.8,0-15.1,0.1c0.8,0.1,9.6-0.6,17.6,1.1c3.3,0.7,9.3,2.2,12.4,2.7  C239.9,8.7,242.4,8.6,242.4,8.6z M185.2,8.5c1.7-0.7-13.3,4.7-18.5,6.1c-2.1,0.6-6.2,1.6-10,2c-3.9,0.4-8.9,0.4-8.8,0.5 c0,0.2,5.8,0.8,11.2,0c5.4-0.8,5.2-1.1,7.6-1.6C170.5,14.7,183.5,9.2,185.2,8.5z M199.1,6.9c0.2,0-0.8-0.4-4.8,1.1  c-4,1.5-6.7,3.5-6.9,3.7c-0.2,0.1,3.5-1.8,6.6-3C197,7.5,199,6.9,199.1,6.9z M283,6c-0.1,0.1-1.9,1.1-4.8,2.5s-6.9,2.8-6.7,2.7  c0.2,0,3.5-0.6,7.4-2.5C282.8,6.8,283.1,5.9,283,6z M31.3,11.6c0.1-0.2-1.9-0.2-4.5-1.2s-5.4-1.6-7.8-2C15,7.6,7.3,8.5,7.7,8.6  C8,8.7,15.9,8.3,20.2,9.3c2.2,0.5,2.4,0.5,5.7,1.6S31.2,11.9,31.3,11.6z M73,9.2c0.4-0.1,3.5-1.6,8.4-2.6c4.9-1.1,8.9-0.5,8.9-0.8   c0-0.3-1-0.9-6.2-0.3S72.6,9.3,73,9.2z M71.6,6.7C71.8,6.8,75,5.4,77.3,5c2.3-0.3,1.9-0.5,1.9-0.6c0-0.1-1.1-0.2-2.7,0.2    C74.8,5.1,71.4,6.6,71.6,6.7z M93.6,4.4c0.1,0.2,3.5,0.8,5.6,1.8c2.1,1,1.8,0.6,1.9,0.5c0.1-0.1-0.8-0.8-2.4-1.3    C97.1,4.8,93.5,4.2,93.6,4.4z M65.4,11.1c-0.1,0.3,0.3,0.5,1.9-0.2s2.6-1.3,2.2-1.2s-0.9,0.4-2.5,0.8C65.3,10.9,65.5,10.8,65.4,11.1 z M34.5,12.4c-0.2,0,2.1,0.8,3.3,0.9c1.2,0.1,2,0.1,2-0.2c0-0.3-0.1-0.5-1.6-0.4C36.6,12.8,34.7,12.4,34.5,12.4z M152.2,21.1    c-0.1,0.1-2.4-0.3-7.5-0.3c-5,0-13.6-2.4-17.2-3.5c-3.6-1.1,10,3.9,16.5,4.1C150.5,21.6,152.3,21,152.2,21.1z\"
            ></path>
            <path
              class=\"elementor-shape-fill\"
              d=\"M269.6,18c-0.1-0.1-4.6,0.3-7.2,0c-7.3-0.7-17-3.2-16.6-2.9c0.4,0.3,13.7,3.1,17,3.3  C267.7,18.8,269.7,18,269.6,18z\"
            ></path>
            <path
              class=\"elementor-shape-fill\"
              d=\"M227.4,9.8c-0.2-0.1-4.5-1-9.5-1.2c-5-0.2-12.7,0.6-12.3,0.5c0.3-0.1,5.9-1.8,13.3-1.2    S227.6,9.9,227.4,9.8z\"
            ></path>
            <path
              class=\"elementor-shape-fill\"
              d=\"M204.5,13.4c-0.1-0.1,2-1,3.2-1.1c1.2-0.1,2,0,2,0.3c0,0.3-0.1,0.5-1.6,0.4   C206.4,12.9,204.6,13.5,204.5,13.4z\"
            ></path>
            <path
              class=\"elementor-shape-fill\"
              d=\"M201,10.6c0-0.1-4.4,1.2-6.3,2.2c-1.9,0.9-6.2,3.1-6.1,3.1c0.1,0.1,4.2-1.6,6.3-2.6   S201,10.7,201,10.6z\"
            ></path>
            <path
              class=\"elementor-shape-fill\"
              d=\"M154.5,26.7c-0.1-0.1-4.6,0.3-7.2,0c-7.3-0.7-17-3.2-16.6-2.9c0.4,0.3,13.7,3.1,17,3.3    C152.6,27.5,154.6,26.8,154.5,26.7z\"
            ></path>
            <path
              class=\"elementor-shape-fill\"
              d=\"M41.9,19.3c0,0,1.2-0.3,2.9-0.1c1.7,0.2,5.8,0.9,8.2,0.7c4.2-0.4,7.4-2.7,7-2.6   c-0.4,0-4.3,2.2-8.6,1.9c-1.8-0.1-5.1-0.5-6.7-0.4S41.9,19.3,41.9,19.3z\"
            ></path>
            <path
              class=\"elementor-shape-fill\"
              d=\"M75.5,12.6c0.2,0.1,2-0.8,4.3-1.1c2.3-0.2,2.1-0.3,2.1-0.5c0-0.1-1.8-0.4-3.4,0   C76.9,11.5,75.3,12.5,75.5,12.6z\"
            ></path>
            <path
              class=\"elementor-shape-fill\"
              d=\"M15.6,13.2c0-0.1,4.3,0,6.7,0.5c2.4,0.5,5,1.9,5,2c0,0.1-2.7-0.8-5.1-1.4 C19.9,13.7,15.7,13.3,15.6,13.2z\"
            ></path>
          </svg>
        </div>
      </div>
    </section>
\t
\t<section class=\"visual-arts\">
      <div class=\"container\">
\t  ";
        // line 90
        $context["table_num"] = 0;
        // line 91
        echo "\t  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_winners", [], "any", false, false, true, 91)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#items"] ?? null) : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 92
            echo "\t  ";
            $context["table_num"] = (($context["table_num"] ?? null) + 1);
            // line 93
            echo "\t  ";
            $context["table_id"] = ("mytable" . $this->sandbox->ensureToStringAllowed(($context["table_num"] ?? null), 93, $this->source));
            // line 94
            echo "\t  
\t  
\t   <script>\t   
\twindow.addEventListener('DOMContentLoaded', (event) => {    jQuery(\"#";
            // line 97
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["table_id"] ?? null), 97, $this->source), "html", null, true);
            echo "\").DataTable({ paging: false, info: false });});\t 
\t\t</script>
\t\t 
        <div id=\"";
            // line 100
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "entity", [], "any", false, false, true, 100), "field_table_", [], "any", false, false, true, 100), "value", [], "any", false, false, true, 100), 100, $this->source), "html", null, true);
            echo "\" class=\"visual arts\">
          <h1
            style=\"text-align: center; font-size: 30px; padding-top: 30px; color: #000F2B;\"
            class=\"heading-title size-default\"
          >
            ";
            // line 105
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "entity", [], "any", false, false, true, 105), "field_table_", [], "any", false, false, true, 105), "value", [], "any", false, false, true, 105), 105, $this->source), "html", null, true);
            echo "
          </h1>
          ";
            // line 107
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "entity", [], "any", false, false, true, 107), "field_table_des", [], "any", false, false, true, 107), "value", [], "any", false, false, true, 107), 107, $this->source), ["mytable" => ($context["table_id"] ?? null)]));
            echo "
        </div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "      </div>
    </section>
\t
\t
\t</section>
\t
\t
 ";
    }

    public function getTemplateName()
    {
        return "themes/custom/sanskriti/templates/block/block--block-content--winners.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 110,  192 => 107,  187 => 105,  179 => 100,  173 => 97,  168 => 94,  165 => 93,  162 => 92,  157 => 91,  155 => 90,  102 => 39,  96 => 38,  85 => 30,  77 => 25,  69 => 21,  66 => 20,  62 => 19,  48 => 8,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<section class=\"winners-sec\">
<section id=\"winners\">
      <div class=\"container\">
        <div class=\"row winners-sec\">
          <div class=\"sec-title text-center\">
            
             {{ content.field_short_desc[0] | raw }}
          
          </div>
        </div>
      </div>
    </section>
\t
<section id=\"winner-top-sec\">
      <div class=\"container\">
\t 
        <div class=\"row\">
\t\t{% for temp in content.field_winners['#items'] %}
\t\t{% if temp.entity.field_table_.value %}
         <div class=\"{{ temp.entity.field_table_.value | raw }}-Sec winners-tabs col-md-3\">
            <div class=\"sec-title text-center\">
              <div class=\"visual-arts-button\">
                <a
                  href=\"#{{ temp.entity.field_table_.value | raw }}\"
                  class=\"button-link size-xs elementor-animation-shrink elementor-button\"
                  role=\"button\"
                >
                  <span class=\"visual-arts-button-content-wrapper\">
                    <span class=\"button-text\">{{ temp.entity.field_table_.value | raw }}</span>
                  </span>
                </a>
              </div>
            </div>
\t
          </div>
\t\t   {% endif %}
\t\t   {% endfor %}
        \t</div>\t\t
        <div class=\"elementor-shape elementor-shape-top\" data-negative=\"false\">
          <svg
            xmlns=\"http://www.w3.org/2000/svg\"
            viewBox=\"0 0 283.5 27.8\"
            preserveAspectRatio=\"none\"
            class=\"winner-svg\"
          >
            <path
              class=\"elementor-shape-fill\"
              d=\"M283.5,9.7c0,0-7.3,4.3-14,4.6c-6.8,0.3-12.6,0-20.9-1.5c-11.3-2-33.1-10.1-44.7-5.7  s-12.1,4.6-18,7.4c-6.6,3.2-20,9.6-36.6,9.3C131.6,23.5,99.5,7.2,86.3,8c-1.4,0.1-6.6,0.8-10.5,2c-3.8,1.2-9.4,3.8-17,4.7   c-3.2,0.4-8.3,1.1-14.2,0.9c-1.5-0.1-6.3-0.4-12-1.6c-5.7-1.2-11-3.1-15.8-3.7C6.5,9.2,0,10.8,0,10.8V0h283.5V9.7z M260.8,11.3  c-0.7-1-2-0.4-4.3-0.4c-2.3,0-6.1-1.2-5.8-1.1c0.3,0.1,3.1,1.5,6,1.9C259.7,12.2,261.4,12.3,260.8,11.3z M242.4,8.6 c0,0-2.4-0.2-5.6-0.9c-3.2-0.8-10.3-2.8-15.1-3.5c-8.2-1.1-15.8,0-15.1,0.1c0.8,0.1,9.6-0.6,17.6,1.1c3.3,0.7,9.3,2.2,12.4,2.7  C239.9,8.7,242.4,8.6,242.4,8.6z M185.2,8.5c1.7-0.7-13.3,4.7-18.5,6.1c-2.1,0.6-6.2,1.6-10,2c-3.9,0.4-8.9,0.4-8.8,0.5 c0,0.2,5.8,0.8,11.2,0c5.4-0.8,5.2-1.1,7.6-1.6C170.5,14.7,183.5,9.2,185.2,8.5z M199.1,6.9c0.2,0-0.8-0.4-4.8,1.1  c-4,1.5-6.7,3.5-6.9,3.7c-0.2,0.1,3.5-1.8,6.6-3C197,7.5,199,6.9,199.1,6.9z M283,6c-0.1,0.1-1.9,1.1-4.8,2.5s-6.9,2.8-6.7,2.7  c0.2,0,3.5-0.6,7.4-2.5C282.8,6.8,283.1,5.9,283,6z M31.3,11.6c0.1-0.2-1.9-0.2-4.5-1.2s-5.4-1.6-7.8-2C15,7.6,7.3,8.5,7.7,8.6  C8,8.7,15.9,8.3,20.2,9.3c2.2,0.5,2.4,0.5,5.7,1.6S31.2,11.9,31.3,11.6z M73,9.2c0.4-0.1,3.5-1.6,8.4-2.6c4.9-1.1,8.9-0.5,8.9-0.8   c0-0.3-1-0.9-6.2-0.3S72.6,9.3,73,9.2z M71.6,6.7C71.8,6.8,75,5.4,77.3,5c2.3-0.3,1.9-0.5,1.9-0.6c0-0.1-1.1-0.2-2.7,0.2    C74.8,5.1,71.4,6.6,71.6,6.7z M93.6,4.4c0.1,0.2,3.5,0.8,5.6,1.8c2.1,1,1.8,0.6,1.9,0.5c0.1-0.1-0.8-0.8-2.4-1.3    C97.1,4.8,93.5,4.2,93.6,4.4z M65.4,11.1c-0.1,0.3,0.3,0.5,1.9-0.2s2.6-1.3,2.2-1.2s-0.9,0.4-2.5,0.8C65.3,10.9,65.5,10.8,65.4,11.1 z M34.5,12.4c-0.2,0,2.1,0.8,3.3,0.9c1.2,0.1,2,0.1,2-0.2c0-0.3-0.1-0.5-1.6-0.4C36.6,12.8,34.7,12.4,34.5,12.4z M152.2,21.1    c-0.1,0.1-2.4-0.3-7.5-0.3c-5,0-13.6-2.4-17.2-3.5c-3.6-1.1,10,3.9,16.5,4.1C150.5,21.6,152.3,21,152.2,21.1z\"
            ></path>
            <path
              class=\"elementor-shape-fill\"
              d=\"M269.6,18c-0.1-0.1-4.6,0.3-7.2,0c-7.3-0.7-17-3.2-16.6-2.9c0.4,0.3,13.7,3.1,17,3.3  C267.7,18.8,269.7,18,269.6,18z\"
            ></path>
            <path
              class=\"elementor-shape-fill\"
              d=\"M227.4,9.8c-0.2-0.1-4.5-1-9.5-1.2c-5-0.2-12.7,0.6-12.3,0.5c0.3-0.1,5.9-1.8,13.3-1.2    S227.6,9.9,227.4,9.8z\"
            ></path>
            <path
              class=\"elementor-shape-fill\"
              d=\"M204.5,13.4c-0.1-0.1,2-1,3.2-1.1c1.2-0.1,2,0,2,0.3c0,0.3-0.1,0.5-1.6,0.4   C206.4,12.9,204.6,13.5,204.5,13.4z\"
            ></path>
            <path
              class=\"elementor-shape-fill\"
              d=\"M201,10.6c0-0.1-4.4,1.2-6.3,2.2c-1.9,0.9-6.2,3.1-6.1,3.1c0.1,0.1,4.2-1.6,6.3-2.6   S201,10.7,201,10.6z\"
            ></path>
            <path
              class=\"elementor-shape-fill\"
              d=\"M154.5,26.7c-0.1-0.1-4.6,0.3-7.2,0c-7.3-0.7-17-3.2-16.6-2.9c0.4,0.3,13.7,3.1,17,3.3    C152.6,27.5,154.6,26.8,154.5,26.7z\"
            ></path>
            <path
              class=\"elementor-shape-fill\"
              d=\"M41.9,19.3c0,0,1.2-0.3,2.9-0.1c1.7,0.2,5.8,0.9,8.2,0.7c4.2-0.4,7.4-2.7,7-2.6   c-0.4,0-4.3,2.2-8.6,1.9c-1.8-0.1-5.1-0.5-6.7-0.4S41.9,19.3,41.9,19.3z\"
            ></path>
            <path
              class=\"elementor-shape-fill\"
              d=\"M75.5,12.6c0.2,0.1,2-0.8,4.3-1.1c2.3-0.2,2.1-0.3,2.1-0.5c0-0.1-1.8-0.4-3.4,0   C76.9,11.5,75.3,12.5,75.5,12.6z\"
            ></path>
            <path
              class=\"elementor-shape-fill\"
              d=\"M15.6,13.2c0-0.1,4.3,0,6.7,0.5c2.4,0.5,5,1.9,5,2c0,0.1-2.7-0.8-5.1-1.4 C19.9,13.7,15.7,13.3,15.6,13.2z\"
            ></path>
          </svg>
        </div>
      </div>
    </section>
\t
\t<section class=\"visual-arts\">
      <div class=\"container\">
\t  {% set table_num = 0 %}
\t  {% for row in content.field_winners['#items'] %}
\t  {% set table_num = table_num + 1 %}
\t  {% set table_id = 'mytable' ~ table_num %}
\t  
\t  
\t   <script>\t   
\twindow.addEventListener('DOMContentLoaded', (event) => {    jQuery(\"#{{ table_id }}\").DataTable({ paging: false, info: false });});\t 
\t\t</script>
\t\t 
        <div id=\"{{ row.entity.field_table_.value}}\" class=\"visual arts\">
          <h1
            style=\"text-align: center; font-size: 30px; padding-top: 30px; color: #000F2B;\"
            class=\"heading-title size-default\"
          >
            {{ row.entity.field_table_.value }}
          </h1>
          {{ row.entity.field_table_des.value | replace({'mytable': table_id }) | raw }}
        </div>
\t\t{% endfor %}
      </div>
    </section>
\t
\t
\t</section>
\t
\t
 ", "themes/custom/sanskriti/templates/block/block--block-content--winners.html.twig", "D:\\xampp-7.4.28\\htdocs\\Sanskriti\\BED\\branches\\development\\themes\\custom\\sanskriti\\templates\\block\\block--block-content--winners.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 19, "if" => 20, "set" => 90);
        static $filters = array("raw" => 8, "escape" => 97, "replace" => 107);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if', 'set'],
                ['raw', 'escape', 'replace'],
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
