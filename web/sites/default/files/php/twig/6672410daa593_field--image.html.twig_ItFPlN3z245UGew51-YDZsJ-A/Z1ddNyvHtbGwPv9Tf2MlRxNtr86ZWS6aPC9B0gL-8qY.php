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

/* themes/goblac_adaptive/templates/field/field--image.html.twig */
class __TwigTemplate_c2a84d1eeadb751d8745af853417458b extends Template
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
        // line 39
        $context["field_name_class"] = \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["field_name"] ?? null), 39, $this->source));
        // line 41
        $context["classes"] = ["field", ((("field-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 43
($context["entity_type"] ?? null), 43, $this->source))) . "--") . $this->sandbox->ensureToStringAllowed(($context["field_name_class"] ?? null), 43, $this->source)), ((        // line 44
($context["field_formatter"] ?? null)) ? (("field-formatter-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["field_formatter"] ?? null), 44, $this->source)))) : ("")), ("field-name-" . $this->sandbox->ensureToStringAllowed(        // line 45
($context["field_name_class"] ?? null), 45, $this->source)), ("field-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 46
($context["field_type"] ?? null), 46, $this->source))), ("field-label-" . $this->sandbox->ensureToStringAllowed(        // line 47
($context["label_display"] ?? null), 47, $this->source)), (((        // line 48
($context["label_display"] ?? null) == "inline")) ? ("clearfix") : (""))];
        // line 52
        $context["title_classes"] = ["field__label", (((        // line 54
($context["label_display"] ?? null) == "visually_hidden")) ? ("visually-hidden") : (""))];
        // line 57
        if ((twig_length_filter($this->env, ($context["items"] ?? null)) > 1)) {
            // line 58
            $context["count_class"] = "has-multiple";
        } else {
            // line 60
            $context["count_class"] = "has-single";
        }
        // line 62
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null), ($context["count_class"] ?? null)], "method", false, false, true, 62), 62, $this->source), "html", null, true);
        echo ">";
        // line 63
        if ( !($context["label_hidden"] ?? null)) {
            // line 64
            echo "<h3";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [($context["title_classes"] ?? null)], "method", false, false, true, 64), 64, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 64, $this->source), "html", null, true);
            echo "</h3>";
        }
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["delta"] => $context["item"]) {
            // line 67
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "caption", [], "any", false, false, true, 67), "show", [], "any", false, false, true, 67) == true)) {
                // line 68
                echo "<figure";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 68), "addClass", ["field-type-image__figure", ("image-count-" . ($context["delta"] + 1)), "caption", "caption-img"], "method", false, false, true, 68), 68, $this->source), "html", null, true);
                echo " role=\"group\">";
            } else {
                // line 70
                echo "<figure";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 70), "addClass", ["field-type-image__figure", ("image-count-" . ($context["delta"] + 1))], "method", false, false, true, 70), 70, $this->source), "html", null, true);
                echo ">";
            }
            // line 72
            echo "<div class=\"field-type-image__item\">
        ";
            // line 73
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
            // line 74
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "caption", [], "any", false, false, true, 74), "show", [], "any", false, false, true, 74) == true)) {
                // line 75
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "caption", [], "any", false, false, true, 75), "width", [], "any", false, false, true, 75)) {
                    // line 76
                    echo "            ";
                    $context["caption_width"] = ((" style=max-width:" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "caption", [], "any", false, false, true, 76), "width", [], "any", false, false, true, 76), 76, $this->source)) . "px");
                }
                // line 78
                echo "<figcaption class=\"field-type-image__figcaption\" property=\"schema:description\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["caption_width"] ?? null), 78, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "caption", [], "any", false, false, true, 78), "title", [], "any", false, false, true, 78), 78, $this->source), "html", null, true);
                echo "</figcaption>";
            }
            // line 80
            echo "</div>
    </figure>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['delta'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["field_name", "entity_type", "field_formatter", "field_type", "label_display", "items", "attributes", "label_hidden", "title_attributes", "label"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/goblac_adaptive/templates/field/field--image.html.twig";
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
        return array (  116 => 83,  109 => 80,  102 => 78,  98 => 76,  96 => 75,  94 => 74,  92 => 73,  89 => 72,  84 => 70,  79 => 68,  77 => 67,  73 => 66,  66 => 64,  64 => 63,  60 => 62,  57 => 60,  54 => 58,  52 => 57,  50 => 54,  49 => 52,  47 => 48,  46 => 47,  45 => 46,  44 => 45,  43 => 44,  42 => 43,  41 => 41,  39 => 39,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for a field.
 *
 * To override output, copy the \"field.html.twig\" from the templates directory
 * to your theme's directory and customize it, just like customizing other
 * Drupal templates such as page.html.twig or node.html.twig.
 *
 * Instead of overriding the theming for all fields, you can also just override
 * theming for a subset of fields using
 * @link themeable Theme hook suggestions. @endlink For example,
 * here are some theme hook suggestions that can be used for a field_foo field
 * on an article node type:
 * - field--node--field-foo--article.html.twig
 * - field--node--field-foo.html.twig
 * - field--node--article.html.twig
 * - field--field-foo.html.twig
 * - field--text-with-summary.html.twig
 * - field.html.twig
 *
 * Available variables:
 * - attributes: HTML attributes for the containing element.
 * - label_hidden: Whether to show the field label or not.
 * - title_attributes: HTML attributes for the title.
 * - label: The label for the field.
 * - multiple: TRUE if a field can contain multiple items.
 * - items: List of all the field items. Each item contains:
 *   - attributes: List of HTML attributes for each item.
 *   - content: The field item's content.
 * - entity_type: The entity type to which the field belongs.
 * - field_name: The name of the field.
 * - field_type: The type of the field.
 * - label_display: The display settings for the label.
 *
 * @see template_preprocess_field()
 */
#}
{%- set field_name_class = field_name|clean_class -%}
{%-
  set classes = [
    'field',
    'field-' ~ entity_type|clean_class ~ '--' ~ field_name_class,
    field_formatter ? 'field-formatter-' ~ field_formatter|clean_class,
    'field-name-' ~ field_name_class,
    'field-type-' ~ field_type|clean_class,
    'field-label-' ~ label_display,
    label_display == 'inline' ? 'clearfix',
  ]
-%}
{%-
  set title_classes = [
    'field__label',
    label_display == 'visually_hidden' ? 'visually-hidden',
  ]
-%}
{%- if items|length > 1 -%}
  {%- set count_class = 'has-multiple' -%}
{%- else %}
  {%- set count_class = 'has-single' -%}
{%- endif -%}
<div{{ attributes.addClass(classes, count_class) }}>
  {%- if not label_hidden -%}
    <h3{{ title_attributes.addClass(title_classes) }}>{{ label }}</h3>
  {%- endif -%}
  {%- for delta, item in items -%}
    {%- if item.caption.show == true -%}
      <figure{{ item.attributes.addClass('field-type-image__figure', 'image-count-' ~ (delta + 1), 'caption', 'caption-img') }} role=\"group\">
    {%- else -%}
      <figure{{ item.attributes.addClass('field-type-image__figure', 'image-count-' ~ (delta + 1)) }}>
    {%- endif -%}
      <div class=\"field-type-image__item\">
        {{ item.content }}
        {%- if item.caption.show == true -%}
          {% if item.caption.width %}
            {% set caption_width =  ' style=max-width:' ~ item.caption.width ~ 'px'  %}
          {%- endif -%}
          <figcaption class=\"field-type-image__figcaption\" property=\"schema:description\"{{ caption_width }}>{{ item.caption.title }}</figcaption>
        {%- endif -%}
      </div>
    </figure>
  {%- endfor -%}
</div>
", "themes/goblac_adaptive/templates/field/field--image.html.twig", "/var/www/html/web/themes/goblac_adaptive/templates/field/field--image.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 39, "if" => 57, "for" => 66);
        static $filters = array("clean_class" => 39, "length" => 57, "escape" => 62);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['clean_class', 'length', 'escape'],
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