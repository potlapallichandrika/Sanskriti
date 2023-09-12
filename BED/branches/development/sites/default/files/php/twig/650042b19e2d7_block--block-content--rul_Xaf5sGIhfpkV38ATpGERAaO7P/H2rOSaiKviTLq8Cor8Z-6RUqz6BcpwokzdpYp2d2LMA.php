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

/* themes/custom/sanskriti/templates/block/block--block-content--rules.html.twig */
class __TwigTemplate_1dc7bd31b82dfc5f0213348c293e18c8bdcc1c359c8a414fce7f69322a66585f extends \Twig\Template
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
        echo "<style type=\"text/css\">
      table,
      th,
      td {
        border: 6px solid white;
        border-collapse: collapse;
      }
      table {
        border-collapse: separate;
        border-spacing: 0;
        border-width: 1px 0 0 1px;
        margin: 0 0 1.5em;
        border: 1px solid rgba(0, 0, 0, 0.1);
      }
      td {
        background-color: #e7e9eb !important;
        border: 1px solid rgba(0, 0, 0, 0.1) !important;
        vertical-align: middle !important;
        font-family: Arial, Helvetica, sans-serif;
        color: black;
      }
      th {
        text-align: center;
        background-color: #203864 !important;
        color: white;
        font-size: 16px; 
        font-weight: 700;
\t\tborder: 1px solid rgba(0,0,0,.1) ;
\t\tpadding: 8px !!important;
\t\tborder-width: 0 1px 1px 0 !important;
\t\tborder-bottom-color: rgba(0,0,0,.1) !important;
      }
\t  tbody tr td li a{
\t  color:#1a6c7a !important;
\t  text-decoration:none !important;
\t  }
      @media (max-width: 992px) {
        .table,
        .table tbody,
        .table tr,
        .table td {
          display: block;
          width: 100%;
          text-align: center;
        }
        .table tr {
          margin-bottom: 10px;
        }
\t\tul{
\t\t    padding-left: 0px !important;
\t\t\tmargin: 0.25em 0 0.25em 1em !important;
\t\t}
        .table tbody tr td {
          text-align: left;
          padding-left: 45%;
          position: relative;
\t\t  height: auto !important;
        }
        .table td:before {
          content: attr(data-label);
          position: absolute;
          left: 0;
          width: 50%;
          padding-left: 15px;
          font-weight: 600;
          font-size: 14px;
          text-align: left;
        }
        .b,
        strong {
          font-family: Arial, Helvetica, sans-serif;
          color: black;
        }
      }
    </style>  
    <section class=\"rules-sec\">
      <div class=\"container\">
        <div class=\"navbar\" style=\"background-color: #e7e9eb; margin-top: 20px\">
          <div class=\"subnav\">
            <button
              class=\"subnavbtn tablink w3-red\"
              onclick=\"openCity('All')\"
            >
              All 
            </button>
          </div>

          ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["allSelectedTerms"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 89
            echo "          <div class=\"subnav\">
            <button
              class=\"subnavbtn\"               
            >
              ";
            // line 93
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "name", [], "any", false, false, true, 93), 93, $this->source), "html", null, true);
            echo " <i class=\"fa fa-caret-down\"></i>
            </button>
            ";
            // line 95
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "subitems", [], "any", false, false, true, 95))) {
                // line 96
                echo "            <div class=\"subnav-content\">
              ";
                // line 97
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["row"], "subitems", [], "any", false, false, true, 97));
                foreach ($context['_seq'] as $context["_key"] => $context["subrow"]) {
                    // line 98
                    echo "              <button
                class=\"subnav-content-btn tablink\"
                onclick=\"openCity('";
                    // line 100
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["subrow"], "id", [], "any", false, false, true, 100), 100, $this->source), "html", null, true);
                    echo "')\"
              >
                ";
                    // line 102
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["subrow"], "name", [], "any", false, false, true, 102), 102, $this->source), "html", null, true);
                    echo "
              </button>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subrow'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 105
                echo "              </div>
              ";
            }
            // line 107
            echo "          </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo " 

        </div>
\t\t
\t\t";
        // line 113
        echo "      ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 113)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), 113, $this->source));
        echo "
\t  
        <div class=\"tablecontainer\">
         \t";
        // line 117
        echo "      
       <div class=\"rules_container_All\">
       <table class=\"table\" style=\"width:100%\"><thead class=\"thead_major_mobile\"><tr><th class=\"thead_minor_mobile\" colspan=\"6\">ALL</th></tr></thead>
       </table>

       </div>
       ";
        // line 123
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_contests", [], "any", false, false, true, 123)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#items"] ?? null) : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 124
            echo "       ";
            $context["div_class"] = ("rules_container_" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "entity", [], "any", false, false, true, 124), "id", [], "any", false, false, true, 124), 124, $this->source));
            // line 125
            echo "
       <div class=\"rules_container_All ";
            // line 126
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["div_class"] ?? null), 126, $this->source), "html", null, true);
            echo "\">
     ";
            // line 127
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "entity", [], "any", false, false, true, 127), "field_table_description", [], "any", false, false, true, 127), "value", [], "any", false, false, true, 127), 127, $this->source));
            echo "
     </div>


";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        echo "          
        
        </div>
      </div>
    </section>
\t
\t ";
        // line 139
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed((($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_chess_rules_des", [], "any", false, false, true, 139)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[0] ?? null) : null), 139, $this->source));
        echo "

  <script>
  //window.addEventListener('DOMContentLoaded', (event) => {
    function openCity( cityName) {
       console.log(cityName);
       jQuery('.rules_container_All').hide();
       jQuery('.rules_container_'+cityName).show();
    }
  //});
  </script>

";
    }

    public function getTemplateName()
    {
        return "themes/custom/sanskriti/templates/block/block--block-content--rules.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 139,  227 => 132,  216 => 127,  212 => 126,  209 => 125,  206 => 124,  202 => 123,  194 => 117,  187 => 113,  181 => 108,  174 => 107,  170 => 105,  161 => 102,  156 => 100,  152 => 98,  148 => 97,  145 => 96,  143 => 95,  138 => 93,  132 => 89,  128 => 88,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style type=\"text/css\">
      table,
      th,
      td {
        border: 6px solid white;
        border-collapse: collapse;
      }
      table {
        border-collapse: separate;
        border-spacing: 0;
        border-width: 1px 0 0 1px;
        margin: 0 0 1.5em;
        border: 1px solid rgba(0, 0, 0, 0.1);
      }
      td {
        background-color: #e7e9eb !important;
        border: 1px solid rgba(0, 0, 0, 0.1) !important;
        vertical-align: middle !important;
        font-family: Arial, Helvetica, sans-serif;
        color: black;
      }
      th {
        text-align: center;
        background-color: #203864 !important;
        color: white;
        font-size: 16px; 
        font-weight: 700;
\t\tborder: 1px solid rgba(0,0,0,.1) ;
\t\tpadding: 8px !!important;
\t\tborder-width: 0 1px 1px 0 !important;
\t\tborder-bottom-color: rgba(0,0,0,.1) !important;
      }
\t  tbody tr td li a{
\t  color:#1a6c7a !important;
\t  text-decoration:none !important;
\t  }
      @media (max-width: 992px) {
        .table,
        .table tbody,
        .table tr,
        .table td {
          display: block;
          width: 100%;
          text-align: center;
        }
        .table tr {
          margin-bottom: 10px;
        }
\t\tul{
\t\t    padding-left: 0px !important;
\t\t\tmargin: 0.25em 0 0.25em 1em !important;
\t\t}
        .table tbody tr td {
          text-align: left;
          padding-left: 45%;
          position: relative;
\t\t  height: auto !important;
        }
        .table td:before {
          content: attr(data-label);
          position: absolute;
          left: 0;
          width: 50%;
          padding-left: 15px;
          font-weight: 600;
          font-size: 14px;
          text-align: left;
        }
        .b,
        strong {
          font-family: Arial, Helvetica, sans-serif;
          color: black;
        }
      }
    </style>  
    <section class=\"rules-sec\">
      <div class=\"container\">
        <div class=\"navbar\" style=\"background-color: #e7e9eb; margin-top: 20px\">
          <div class=\"subnav\">
            <button
              class=\"subnavbtn tablink w3-red\"
              onclick=\"openCity('All')\"
            >
              All 
            </button>
          </div>

          {% for row in allSelectedTerms %}
          <div class=\"subnav\">
            <button
              class=\"subnavbtn\"               
            >
              {{ row.name }} <i class=\"fa fa-caret-down\"></i>
            </button>
            {% if row.subitems | length %}
            <div class=\"subnav-content\">
              {% for subrow in row.subitems %}
              <button
                class=\"subnav-content-btn tablink\"
                onclick=\"openCity('{{ subrow.id }}')\"
              >
                {{ subrow.name }}
              </button>
              {% endfor %}
              </div>
              {% endif %}
          </div>
          {% endfor %} 

        </div>
\t\t
\t\t{# table above description #}
      {{ content.body[0] | raw }}
\t  
        <div class=\"tablecontainer\">
         \t{# All tabs  description #}
      
       <div class=\"rules_container_All\">
       <table class=\"table\" style=\"width:100%\"><thead class=\"thead_major_mobile\"><tr><th class=\"thead_minor_mobile\" colspan=\"6\">ALL</th></tr></thead>
       </table>

       </div>
       {% for row in content.field_contests['#items'] %}
       {% set div_class = 'rules_container_' ~  row.entity.id %}

       <div class=\"rules_container_All {{  div_class }}\">
     {{ row.entity.field_table_description.value| raw }}
     </div>


{% endfor %}
          
        
        </div>
      </div>
    </section>
\t
\t {#chess rules des #}
{{ content.field_chess_rules_des[0] | raw }}

  <script>
  //window.addEventListener('DOMContentLoaded', (event) => {
    function openCity( cityName) {
       console.log(cityName);
       jQuery('.rules_container_All').hide();
       jQuery('.rules_container_'+cityName).show();
    }
  //});
  </script>

", "themes/custom/sanskriti/templates/block/block--block-content--rules.html.twig", "E:\\xampp\\htdocs\\Sanskriti\\BED\\branches\\development\\themes\\custom\\sanskriti\\templates\\block\\block--block-content--rules.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 88, "if" => 95, "set" => 124);
        static $filters = array("escape" => 93, "length" => 95, "raw" => 113);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if', 'set'],
                ['escape', 'length', 'raw'],
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
