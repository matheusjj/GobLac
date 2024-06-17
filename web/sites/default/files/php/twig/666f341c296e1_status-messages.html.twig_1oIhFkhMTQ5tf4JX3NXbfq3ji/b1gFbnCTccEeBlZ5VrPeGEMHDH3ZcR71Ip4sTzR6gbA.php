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

/* themes/goblac_adaptive/templates/misc/status-messages.html.twig */
class __TwigTemplate_de2bb27c5fe31b88361d637d87412962 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'messages' => [$this, 'block_messages'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        $this->displayBlock('messages', $context, $blocks);
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["message_list", "status_headings", "attributes"]);    }

    public function block_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["message_list"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 28
            $context["classes"] = ["messages", ("messages--" . $this->sandbox->ensureToStringAllowed($context["type"], 28, $this->source))];
            // line 29
            echo "<div role=\"status\" aria-label=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_0 = ($context["status_headings"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["type"]] ?? null) : null), 29, $this->source), "html", null, true);
            echo "\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 29), 29, $this->source), "role", "aria-label"), "html", null, true);
            echo ">
      <div class=\"messages__container\"";
            // line 30
            if (($context["type"] == "error")) {
                echo " role=\"alert\"";
            }
            echo ">";
            // line 32
            if ((($__internal_compile_1 = ($context["status_headings"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["type"]] ?? null) : null)) {
                // line 33
                echo "<h2 class=\"visually-hidden\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_2 = ($context["status_headings"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["type"]] ?? null) : null), 33, $this->source), "html", null, true);
                echo "</h2>";
            }
            // line 36
            echo "<span class=\"icon icon-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["type"], 36, $this->source), "html", null, true);
            echo "\" aria-hidden=\"true\"></span>";
            // line 38
            if ((twig_length_filter($this->env, $context["messages"]) > 1)) {
                // line 39
                echo "<ul class=\"messages__list\">";
                // line 40
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 41
                    echo "<li class=\"messages__item\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["message"], 41, $this->source), "html", null, true);
                    echo "</li>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 43
                echo "</ul>";
            } else {
                // line 45
                echo "<div class=\"messages__list\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_first($this->env, $this->sandbox->ensureToStringAllowed($context["messages"], 45, $this->source)), "html", null, true);
                echo "</div>";
            }
            // line 48
            echo "</div>
    </div>
    ";
            // line 51
            $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", [($context["classes"] ?? null)], "method", false, false, true, 51);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/goblac_adaptive/templates/misc/status-messages.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  105 => 51,  101 => 48,  96 => 45,  93 => 43,  85 => 41,  81 => 40,  79 => 39,  77 => 38,  73 => 36,  68 => 33,  66 => 32,  61 => 30,  54 => 29,  52 => 28,  48 => 27,  40 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for status messages.
 *
 * Displays status, error, and warning messages, grouped by type.
 *
 * An invisible heading identifies the messages for assistive technology.
 * Sighted users see a colored box. See http://www.w3.org/TR/WCAG-TECHS/H69.html
 * for info.
 *
 * Add an ARIA label to the contentinfo area so that assistive technology
 * user agents will better describe this landmark.
 *
 * Available variables:
 * - message_list: List of messages to be displayed, grouped by type.
 * - status_headings: List of all status types.
 * - display: (optional) May have a value of 'status' or 'error' when only
 *   displaying messages of that specific type.
 * - attributes: HTML attributes for the element, including:
 *   - class: HTML classes.
 *
 * @see template_preprocess_status_messages()
 */
#}
{% block messages %}
  {%- for type, messages in message_list -%}
    {%- set classes = ['messages', 'messages--' ~ type] -%}
    <div role=\"status\" aria-label=\"{{- status_headings[type] -}}\"{{ attributes.addClass(classes)|without('role', 'aria-label') }}>
      <div class=\"messages__container\"{% if type == 'error' %} role=\"alert\"{% endif %}>

        {%- if status_headings[type] -%}
          <h2 class=\"visually-hidden\">{{- status_headings[type] -}}</h2>
        {%- endif -%}

        <span class=\"icon icon-{{- type -}}\" aria-hidden=\"true\"></span>

        {%- if messages|length > 1 -%}
          <ul class=\"messages__list\">
            {%- for message in messages -%}
              <li class=\"messages__item\">{{- message -}}</li>
            {%- endfor -%}
          </ul>
        {%- else -%}
          <div class=\"messages__list\">{{- messages|first -}}</div>
        {%- endif -%}

      </div>
    </div>
    {# Remove type specific classes. #}
    {%- set attributes = attributes.removeClass(classes) -%}
  {%- endfor -%}
{% endblock messages %}
", "themes/goblac_adaptive/templates/misc/status-messages.html.twig", "/var/www/html/web/themes/goblac_adaptive/templates/misc/status-messages.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 26, "for" => 27, "set" => 28, "if" => 30);
        static $filters = array("escape" => 29, "without" => 29, "length" => 38, "first" => 45);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['block', 'for', 'set', 'if'],
                ['escape', 'without', 'length', 'first'],
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
