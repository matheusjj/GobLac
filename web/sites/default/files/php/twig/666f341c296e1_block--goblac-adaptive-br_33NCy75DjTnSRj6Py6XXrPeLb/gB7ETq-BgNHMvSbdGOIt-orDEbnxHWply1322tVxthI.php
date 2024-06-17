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

/* themes/goblac_adaptive/templates/block/block--goblac-adaptive-breadcrumbs.html.twig */
class __TwigTemplate_bdca29bc4b3a172efc2636f8ab1269a2 extends Template
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
        // line 29
        $context["classes"] = ["block", "block-breadcrumbs", ("block-config-provider--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 32
($context["configuration"] ?? null), "provider", [], "any", false, false, true, 32), 32, $this->source))), ("block-plugin-id--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 33
($context["plugin_id_clean"] ?? null), 33, $this->source))), ((twig_get_attribute($this->env, $this->source,         // line 34
($context["configuration"] ?? null), "label_display", [], "any", false, false, true, 34)) ? ("has-title") : (""))];
        // line 37
        $context["heading_id"] = ($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "id", [], "any", false, false, true, 37), 37, $this->source) . \Drupal\Component\Utility\Html::getId("-menu"));
        // line 38
        echo "<div role=\"navigation\" aria-labelledby=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading_id"] ?? null), 38, $this->source), "html", null, true);
        echo "\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 38), 38, $this->source), "role", "aria-labelledby"), "html", null, true);
        echo ">
  <div class=\"block__inner\">

    ";
        // line 42
        if ( !twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "label_display", [], "any", false, false, true, 42)) {
            // line 43
            $context["title_attributes"] = twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", ["visually-hidden"], "method", false, false, true, 43);
        }
        // line 46
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 46, $this->source), "html", null, true);
        echo "
    <h2";
        // line 47
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", ["block__title", "block-breadcrumbs__title"], "method", false, false, true, 47), "setAttribute", ["id", ($context["heading_id"] ?? null)], "method", false, false, true, 47), 47, $this->source), "html", null, true);
        echo "><span>";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "label", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
        echo "</span></h2>
    ";
        // line 48
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 48, $this->source), "html", null, true);
        // line 50
        $this->displayBlock('content', $context, $blocks);
        // line 54
        echo "</div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["configuration", "plugin_id_clean", "attributes", "title_prefix", "title_suffix", "content"]);    }

    // line 50
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 51
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 51, $this->source), "html", null, true);
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/goblac_adaptive/templates/block/block--goblac-adaptive-breadcrumbs.html.twig";
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
        return array (  86 => 51,  82 => 50,  75 => 54,  73 => 50,  71 => 48,  65 => 47,  61 => 46,  58 => 43,  56 => 42,  47 => 38,  45 => 37,  43 => 34,  42 => 33,  41 => 32,  40 => 29,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a block.
 *
 * Available variables:
 * - plugin_id: The ID of the block implementation.
 * - label: The configured label of the block if visible.
 * - configuration: A list of the block's configuration values.
 *   - label: The configured label for the block.
 *   - label_display: The display settings for the label.
 *   - provider: The module or other provider that provided this block plugin.
 *   - Block plugin specific settings will also be stored here.
 * - content: The content of this block.
 * - attributes: array of HTML attributes populated by modules, intended to
 *   be added to the main container tag of this template.
 *   - id: A valid HTML ID and guaranteed unique.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 *
 * @see template_preprocess_block()
 */
#}
{%-
  set classes = [
    'block',
    'block-breadcrumbs',
    'block-config-provider--' ~ configuration.provider|clean_class,
    'block-plugin-id--' ~ plugin_id_clean|clean_class,
    configuration.label_display ? 'has-title',
  ]
-%}
{%- set heading_id = attributes.id ~ '-menu'|clean_id -%}
<div role=\"navigation\" aria-labelledby=\"{{ heading_id }}\"{{ attributes.addClass(classes)|without('role', 'aria-labelledby') }}>
  <div class=\"block__inner\">

    {# Label. If not displayed, we still provide it for screen readers. #}
    {%- if not configuration.label_display -%}
      {%- set title_attributes = title_attributes.addClass('visually-hidden') -%}
    {%- endif -%}

    {{ title_prefix }}
    <h2{{ title_attributes.addClass('block__title', 'block-breadcrumbs__title').setAttribute('id', heading_id) }}><span>{{ configuration.label }}</span></h2>
    {{ title_suffix }}

    {%- block content -%}
      {{- content -}}
    {%- endblock -%}

  </div>
</div>
", "themes/goblac_adaptive/templates/block/block--goblac-adaptive-breadcrumbs.html.twig", "/var/www/html/web/themes/goblac_adaptive/templates/block/block--goblac-adaptive-breadcrumbs.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 29, "if" => 42, "block" => 50);
        static $filters = array("clean_class" => 32, "clean_id" => 37, "escape" => 38, "without" => 38);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'clean_id', 'escape', 'without'],
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
