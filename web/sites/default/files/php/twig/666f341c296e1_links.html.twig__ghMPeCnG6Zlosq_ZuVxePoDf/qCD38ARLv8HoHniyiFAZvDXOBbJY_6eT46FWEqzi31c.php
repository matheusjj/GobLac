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

/* themes/goblac_adaptive/templates/navigation/links.html.twig */
class __TwigTemplate_ccfcd96715b5e316174aaf5807fc0ade extends Template
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
        // line 35
        if (($context["links"] ?? null)) {
            // line 36
            if (($context["heading"] ?? null)) {
                // line 37
                $context["heading_level"] = ((twig_get_attribute($this->env, $this->source, ($context["heading"] ?? null), "level", [], "any", false, false, true, 37)) ? (twig_get_attribute($this->env, $this->source, ($context["heading"] ?? null), "level", [], "any", false, false, true, 37)) : ("h2"));
                // line 38
                echo "    <";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading_level"] ?? null), 38, $this->source), "html", null, true);
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["heading"] ?? null), "attributes", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["heading"] ?? null), "text", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
                echo "</";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading_level"] ?? null), 38, $this->source), "html", null, true);
                echo ">";
            }
            // line 40
            echo "<ul";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 40, $this->source), "html", null, true);
            echo ">";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 42
                echo "<li";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
                echo ">";
                // line 43
                if (twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, true, 43)) {
                    // line 44
                    echo "<span";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "wrapper_attributes", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
                    echo ">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
                    echo "</span>";
                } elseif (twig_get_attribute($this->env, $this->source,                 // line 45
$context["item"], "text_attributes", [], "any", false, false, true, 45)) {
                    // line 46
                    echo "<span";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "text_attributes", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
                    echo ">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
                    echo "</span>";
                } else {
                    // line 48
                    echo "<span";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "wrapper_attributes", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
                    echo ">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
                    echo "</span>";
                }
                // line 50
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "</ul>";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["links", "heading", "attributes"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/goblac_adaptive/templates/navigation/links.html.twig";
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
        return array (  97 => 52,  91 => 50,  84 => 48,  77 => 46,  75 => 45,  69 => 44,  67 => 43,  63 => 42,  59 => 41,  55 => 40,  45 => 38,  43 => 37,  41 => 36,  39 => 35,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for a set of links.
 *
 * Available variables:
 * - attributes: Attributes for the UL containing the list of links.
 * - links: Links to be output.
 *   Each item in links will have the following elements:
 *   - title: The link text.
 *   - link: The generated link. If omitted, the 'title' is shown as a plain
 *     text item in the links list in a <span> element.
 *   - text_attributes: (optional) HTML attributes for the <span> element if no
 *     'link' is supplied.
 *   - attributes: (optional) HTML attributes for the <li>.
 *   - wrapper_attributes: extra classes for theming link wrappers.
 * - heading: (optional) A heading to precede the links.
 *   - text: The heading text.
 *   - level: The heading level (e.g. 'h2', 'h3').
 *   - attributes: (optional) A keyed list of attributes for the heading.
 *   If the heading is a string, it will be used as the text of the heading and
 *   the level will default to 'h2'.
 *
 *   Headings should be used on navigation menus and any list of links that
 *   consistently appears on multiple pages. To make the heading invisible use
 *   the 'visually-hidden' CSS class. Do not use 'display:none', which
 *   removes it from screen readers and assistive technology. Headings allow
 *   screen reader and keyboard only users to navigate to or skip the links.
 *   See http://juicystudio.com/article/screen-readers-display-none.php and
 *   http://www.w3.org/TR/WCAG-TECHS/H42.html for more information.
 *
 * @see template_preprocess_links()
 */
#}
{% if links -%}
  {%- if heading -%}
    {% set heading_level = heading.level ? heading.level : 'h2' %}
    <{{ heading_level }}{{ heading.attributes }}>{{ heading.text }}</{{ heading_level }}>
  {%- endif -%}
  <ul{{ attributes }}>
    {%- for item in links -%}
      <li{{ item.attributes }}>
        {%- if item.link -%}
          <span{{ item.wrapper_attributes }}>{{ item.link }}</span>
        {%- elseif item.text_attributes -%}
          <span{{ item.text_attributes }}>{{ item.text }}</span>
        {%- else -%}
          <span{{ item.wrapper_attributes }}>{{ item.text }}</span>
        {%- endif -%}
      </li>
    {%- endfor -%}
  </ul>
{%- endif %}
", "themes/goblac_adaptive/templates/navigation/links.html.twig", "/var/www/html/web/themes/goblac_adaptive/templates/navigation/links.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 35, "set" => 37, "for" => 41);
        static $filters = array("escape" => 38);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
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
