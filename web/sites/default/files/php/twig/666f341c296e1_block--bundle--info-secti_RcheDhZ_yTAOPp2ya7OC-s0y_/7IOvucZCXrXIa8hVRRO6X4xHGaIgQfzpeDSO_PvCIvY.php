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

/* themes/goblac_adaptive/templates/block/block--bundle--info-section.html.twig */
class __TwigTemplate_851b85d31c0362c29c06340670fc7dfe extends Template
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
        // line 31
        $context["classes"] = ["block", ("block-config-provider--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 33
($context["configuration"] ?? null), "provider", [], "any", false, false, true, 33), 33, $this->source))), ("block-plugin-id--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 34
($context["plugin_id_clean"] ?? null), 34, $this->source))), ((        // line 35
($context["label"] ?? null)) ? ("has-title") : ("")), ((        // line 36
($context["bundle"] ?? null)) ? (("block--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["bundle"] ?? null), 36, $this->source)))) : ("")), ((        // line 37
($context["view_mode"] ?? null)) ? (("block--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 37, $this->source)))) : ("")), "info-section"];
        // line 42
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_ifs_bg_image", [], "any", false, false, true, 42))) {
            // line 43
            echo "  ";
            $context["bg_img"] = $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_ifs_bg_image", [], "any", false, false, true, 43)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#media"] ?? null) : null), "field_media_image", [], "any", false, false, true, 43), "entity", [], "any", false, false, true, 43), "uri", [], "any", false, false, true, 43), "value", [], "any", false, false, true, 43), 43, $this->source));
        } else {
            // line 45
            echo "  ";
            $context["bg_img"] = "";
            echo "    
";
        }
        // line 48
        $context["heading_id"] = ($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "id", [], "any", false, false, true, 48), 48, $this->source) . \Drupal\Component\Utility\Html::getId("-title"));
        // line 49
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 49), 49, $this->source), "role", "aria-labelledby"), "html", null, true);
        if (($context["label"] ?? null)) {
            echo " role=\"region\" aria-labelledby=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading_id"] ?? null), 49, $this->source), "html", null, true);
            echo "\"";
        }
        echo ">
  <div class=\"block__inner\">

    ";
        // line 52
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 52, $this->source), "html", null, true);
        // line 53
        if (($context["label"] ?? null)) {
            // line 54
            echo "<h2 ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", ["block__title"], "method", false, false, true, 54), "setAttribute", ["id", ($context["heading_id"] ?? null)], "method", false, false, true, 54), 54, $this->source), "html", null, true);
            echo "><span>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 54, $this->source), "html", null, true);
            echo "</span></h2>";
        }
        // line 56
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 56, $this->source), "html", null, true);
        // line 58
        $this->displayBlock('content', $context, $blocks);
        // line 78
        echo "</div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["configuration", "plugin_id_clean", "label", "bundle", "view_mode", "content", "attributes", "title_prefix", "title_attributes", "title_suffix", "content_attributes", "elements"]);    }

    // line 58
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 59
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", ["block__content"], "method", false, false, true, 59), 59, $this->source), "html", null, true);
        echo " style=\"background-image: url(";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bg_img"] ?? null), 59, $this->source), "html", null, true);
        echo ");\">
        <div class=\"";
        // line 60
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["elements"] ?? null), "text_align", [], "any", false, false, true, 60), 60, $this->source) . " ") . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["elements"] ?? null), "text_color_scheme", [], "any", false, false, true, 60), 60, $this->source)), "html", null, true);
        echo "\">
            ";
        // line 61
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_ifs_pre_title", [], "any", false, false, true, 61))) {
            // line 62
            echo "                <span>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_ifs_pre_title", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
            echo "</span>
            ";
        }
        // line 64
        echo "
            <h2>";
        // line 65
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_ifs_title", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
        echo "</h2>
            <div class=\"text-content\">";
        // line 66
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_ifs_summary", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
        echo "</div>

            ";
        // line 68
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_ifs_link", [], "any", false, false, true, 68))) {
            // line 69
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_ifs_link", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
            echo "
            ";
        }
        // line 71
        echo "        </div>
        <div class=\"";
        // line 72
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["elements"] ?? null), "img_align", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
        echo "\">";
        // line 73
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_ifs_image", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
        // line 74
        echo "</div>
      </div>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/goblac_adaptive/templates/block/block--bundle--info-section.html.twig";
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
        return array (  145 => 74,  143 => 73,  140 => 72,  137 => 71,  132 => 69,  130 => 68,  125 => 66,  121 => 65,  118 => 64,  112 => 62,  110 => 61,  106 => 60,  99 => 59,  95 => 58,  88 => 78,  86 => 58,  84 => 56,  77 => 54,  75 => 53,  73 => 52,  61 => 49,  59 => 48,  53 => 45,  49 => 43,  47 => 42,  45 => 37,  44 => 36,  43 => 35,  42 => 34,  41 => 33,  40 => 31,);
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
 * - bundle: The bundle of a custom block.
 * - view_mode: The view mode a custom block was rendered in.
 *
 * @see template_preprocess_block()
 */
#}
{%-
  set classes = [
    'block',
    'block-config-provider--' ~ configuration.provider|clean_class,
    'block-plugin-id--' ~ plugin_id_clean|clean_class,
    label ? 'has-title',
    bundle ? 'block--type-' ~ bundle|clean_class,
    view_mode ? 'block--view-mode-' ~ view_mode|clean_class,
    'info-section',
  ]
-%}

{% if content.field_ifs_bg_image|render %}
  {% set bg_img = file_url(content.field_ifs_bg_image[0]['#media'].field_media_image.entity.uri.value) %}
{% else %}
  {% set bg_img = \"\" %}    
{% endif %}
    
{%- set heading_id = attributes.id ~ '-title'|clean_id -%}
<div{{ attributes.addClass(classes)|without('role', 'aria-labelledby') }}{%- if label %} role=\"region\" aria-labelledby=\"{{ heading_id }}\"{%- endif -%}>
  <div class=\"block__inner\">

    {{ title_prefix }}
    {%- if label -%}
      <h2 {{ title_attributes.addClass('block__title').setAttribute('id', heading_id) }}><span>{{ label }}</span></h2>
    {%- endif -%}
    {{ title_suffix }}

    {%- block content -%}
        <div{{ content_attributes.addClass('block__content') }} style=\"background-image: url({{bg_img}});\">
        <div class=\"{{- \"#{elements.text_align} #{elements.text_color_scheme}\"-}}\">
            {% if content.field_ifs_pre_title|render %}
                <span>{{- content.field_ifs_pre_title -}}</span>
            {% endif %}

            <h2>{{- content.field_ifs_title -}}</h2>
            <div class=\"text-content\">{{- content.field_ifs_summary -}}</div>

            {% if content.field_ifs_link|render %}
                {{- content.field_ifs_link }}
            {% endif %}
        </div>
        <div class=\"{{- elements.img_align -}}\">
            {{- content.field_ifs_image -}}
        </div>
      </div>
    {%- endblock -%}

  </div>
</div>
", "themes/goblac_adaptive/templates/block/block--bundle--info-section.html.twig", "/var/www/html/web/themes/goblac_adaptive/templates/block/block--bundle--info-section.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 31, "if" => 42, "block" => 58);
        static $filters = array("clean_class" => 33, "render" => 42, "clean_id" => 48, "escape" => 49, "without" => 49);
        static $functions = array("file_url" => 43);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'render', 'clean_id', 'escape', 'without'],
                ['file_url']
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
