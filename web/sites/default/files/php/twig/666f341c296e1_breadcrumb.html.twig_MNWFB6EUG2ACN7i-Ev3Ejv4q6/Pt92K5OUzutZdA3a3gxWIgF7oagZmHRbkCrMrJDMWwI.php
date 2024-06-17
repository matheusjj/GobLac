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

/* themes/goblac_adaptive/templates/navigation/breadcrumb.html.twig */
class __TwigTemplate_446183f53e675e6bb0720b6492dcb500 extends Template
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
        // line 10
        if (($context["breadcrumb"] ?? null)) {
            // line 11
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("at_core/at.responsivelists"), "html", null, true);
            echo "
  ";
            // line 13
            $context["classes"] = ["breadcrumb", ((            // line 15
($context["breadcrumb_label"] ?? null)) ? ("has-title") : (""))];
            // line 18
            echo "  ";
            // line 19
            $context["title_classes"] = [((            // line 20
($context["breadcrumb_label"] ?? null)) ? ("is-responsive__item") : ("visually-hidden")), "breadcrumb__title"];
            // line 24
            echo "  <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 24), 24, $this->source), "html", null, true);
            echo ">
    <nav class=\"is-responsive is-horizontal\" data-at-responsive-list>
      <div class=\"is-responsive__list\">
        <h3";
            // line 27
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [($context["title_classes"] ?? null)], "method", false, false, true, 27), 27, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["breadcrumb_label_value"] ?? null), 27, $this->source), "html", null, true);
            echo "</h3>
        <ol class=\"breadcrumb__list\">";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["breadcrumb"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 30
                if ((($context["breadcrumb_item_length"] ?? null) > 0)) {
                    // line 31
                    $context["item_text"] = (((twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 31), 31, $this->source)) > ($context["breadcrumb_item_length"] ?? null))) ? ((twig_slice($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 31), 31, $this->source), 0, $this->sandbox->ensureToStringAllowed(($context["breadcrumb_item_length"] ?? null), 31, $this->source)) . "...")) : (twig_get_attribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 31)));
                } else {
                    // line 33
                    $context["item_text"] = twig_get_attribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 33);
                }
                // line 35
                echo "<li class=\"breadcrumb__list-item is-responsive__item\">";
                // line 36
                if (twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 36)) {
                    // line 37
                    echo "<a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
                    echo "\" class=\"breadcrumb__link\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["item_text"] ?? null), 37, $this->source), "html", null, true);
                    echo "</a>";
                } else {
                    // line 39
                    echo "<span class=\"breadcrumb__link\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["item_text"] ?? null), 39, $this->source), "html", null, true);
                    echo "</span>";
                }
                // line 41
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "</ol>
      </div>
    </nav>
  </div>";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["breadcrumb", "breadcrumb_label", "attributes", "title_attributes", "breadcrumb_label_value", "breadcrumb_item_length"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/goblac_adaptive/templates/navigation/breadcrumb.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  100 => 43,  94 => 41,  89 => 39,  82 => 37,  80 => 36,  78 => 35,  75 => 33,  72 => 31,  70 => 30,  66 => 29,  60 => 27,  53 => 24,  51 => 20,  50 => 19,  48 => 18,  46 => 15,  45 => 13,  41 => 11,  39 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for a breadcrumb trail.
 *
 * Available variables:
 * - breadcrumb: Breadcrumb trail items.
 */
#}
{% if breadcrumb -%}
  {{ attach_library('at_core/at.responsivelists') }}
  {%
    set classes = [
      'breadcrumb',
      breadcrumb_label ? 'has-title',
    ]
  %}
  {%
    set title_classes = [
      breadcrumb_label ? 'is-responsive__item' : 'visually-hidden',
      'breadcrumb__title',
    ]
  %}
  <div{{ attributes.addClass(classes) }}>
    <nav class=\"is-responsive is-horizontal\" data-at-responsive-list>
      <div class=\"is-responsive__list\">
        <h3{{ title_attributes.addClass(title_classes) }}>{{ breadcrumb_label_value }}</h3>
        <ol class=\"breadcrumb__list\">
          {%- for item in breadcrumb -%}
            {%- if breadcrumb_item_length > 0 -%}
              {%- set item_text = item.text|length > breadcrumb_item_length ? item.text|slice(0, breadcrumb_item_length) ~ '...' : item.text -%}
            {%- else -%}
              {%- set item_text = item.text -%}
            {%- endif -%}
            <li class=\"breadcrumb__list-item is-responsive__item\">
              {%- if item.url -%}
                <a href=\"{{ item.url }}\" class=\"breadcrumb__link\">{{ item_text }}</a>
              {%- else -%}
                <span class=\"breadcrumb__link\">{{ item_text }}</span>
              {%- endif -%}
            </li>
          {%- endfor -%}
        </ol>
      </div>
    </nav>
  </div>
{%- endif %}
", "themes/goblac_adaptive/templates/navigation/breadcrumb.html.twig", "/var/www/html/web/themes/goblac_adaptive/templates/navigation/breadcrumb.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 10, "set" => 13, "for" => 29);
        static $filters = array("escape" => 11, "length" => 31, "slice" => 31);
        static $functions = array("attach_library" => 11);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['escape', 'length', 'slice'],
                ['attach_library']
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
