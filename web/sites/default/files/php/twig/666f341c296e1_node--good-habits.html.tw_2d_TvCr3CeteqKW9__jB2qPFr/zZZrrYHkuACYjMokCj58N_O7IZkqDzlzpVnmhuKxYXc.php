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

/* themes/goblac_adaptive/templates/content/node--good-habits.html.twig */
class __TwigTemplate_1994fe438bb9afd313fea11bcbe6ccbf extends Template
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
        // line 71
        $context["classes"] = ["node", ("node--id-" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 73
($context["node"] ?? null), "id", [], "any", false, false, true, 73), 73, $this->source)), ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 74
($context["node"] ?? null), "bundle", [], "any", false, false, true, 74), 74, $this->source))), ((twig_get_attribute($this->env, $this->source,         // line 75
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 75)) ? ("node--promoted") : ("")), ((twig_get_attribute($this->env, $this->source,         // line 76
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 76)) ? ("node--sticky") : ("")), (( !twig_get_attribute($this->env, $this->source,         // line 77
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 77)) ? ("node--unpublished") : ("")), ((        // line 78
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 78, $this->source)))) : ("")), "good-habits-content"];
        // line 82
        echo "<article";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 82), "setAttribute", ["role", "article"], "method", false, false, true, 82), 82, $this->source), "html", null, true);
        echo ">
  <div class=\"node__container\">

    <header";
        // line 85
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["header_attributes"] ?? null), "addClass", ["node__header hidden"], "method", false, false, true, 85), 85, $this->source), "html", null, true);
        echo ">";
        // line 86
        if ( !twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "isPublished", [], "method", false, false, true, 86)) {
            // line 87
            echo "<span class=\"node__status node--unpublished marker marker--warning\" aria-label=\"Status message\" role=\"contentinfo\">
          <span class=\"visually-hidden\">";
            // line 88
            echo t("This node is", array());
            echo "</span>";
            echo t("Unpublished", array());
            // line 89
            echo "</span>";
        }
        // line 92
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 92, $this->source), "html", null, true);
        // line 93
        if (($context["label"] ?? null)) {
            // line 94
            if ((($context["view_mode"] ?? null) == "full")) {
                // line 95
                echo "<h1";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", ["node__title"], "method", false, false, true, 95), 95, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 95, $this->source), "html", null, true);
                echo "</h1>";
            } else {
                // line 97
                echo "<h2";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", ["node__title"], "method", false, false, true, 97), 97, $this->source), "html", null, true);
                echo "><a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 97, $this->source), "html", null, true);
                echo "\" class=\"node__title-link\" rel=\"bookmark\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 97, $this->source), "html", null, true);
                echo "</a></h2>";
            }
        }
        // line 100
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 100, $this->source), "html", null, true);
        // line 102
        if (($context["display_submitted"] ?? null)) {
            // line 103
            echo "<div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["meta_attributes"] ?? null), 103, $this->source), "html", null, true);
            echo ">";
            // line 104
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_picture"] ?? null), 104, $this->source), "html", null, true);
            // line 105
            echo "<div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["submitted_attributes"] ?? null), 105, $this->source), "html", null, true);
            echo ">
             <span class=\"node__author\">";
            // line 106
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_name"] ?? null), 106, $this->source), "html", null, true);
            echo "</span>
             <span class=\"node__pubdate\">";
            // line 107
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["date"] ?? null), 107, $this->source), "html", null, true);
            echo "</span>
          </div>";
            // line 109
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null), 109, $this->source), "html", null, true);
            // line 110
            echo "</div>";
        }
        // line 112
        echo "</header>

    <div";
        // line 114
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", ["node__content"], "method", false, false, true, 114), 114, $this->source), "html", null, true);
        echo ">
        <div class=\"cover-section\">
            <div class=\"content-left\">
                <span>";
        // line 117
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Linha temática"));
        echo "</span>

                <h2>";
        // line 119
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 119, $this->source), "html", null, true);
        echo "</h2>
                ";
        // line 120
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\Core\Template\DebugExtension::dump($this->env, $context), "html", null, true);
        echo "
                <div class=\"text-content\">";
        // line 121
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat.");
        echo "</div>
            </div>
            <div class=\"content-right\">";
        // line 124
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_gh_cover_image", [], "any", false, false, true, 124), 124, $this->source), "html", null, true);
        // line 125
        echo "</div>
        </div>

        <div class=\"good-habits-info\">
          <span>
            <i class=\"fa-regular fa-circle-user\"></i>
            ";
        // line 131
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar("Escrito por ");
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_gh_author_name", [], "any", false, false, true, 131), 131, $this->source), "html", null, true);
        // line 132
        echo "</span>
          <span>
            <i class=\"fa-regular fa-clock\"></i>";
        // line 135
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_gh_read_time", [], "any", false, false, true, 135), 135, $this->source), "html", null, true);
        // line 136
        echo "</span>
          <span>
            <i class=\"fa-regular fa-calendar\"></i>";
        // line 139
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["date"] ?? null), 139, $this->source), "html", null, true);
        // line 140
        echo "</span>
        </div>";
        // line 142
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_gh_tags", [], "any", false, false, true, 142), 142, $this->source), "html", null, true);
        // line 143
        echo "<div class=\"top-content\">
              <div class=\"actions\">
                <div>";
        // line 146
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "sharing_buttons", [], "any", false, false, true, 146), 146, $this->source), "html", null, true);
        // line 147
        echo "<span>";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Para compartir"));
        echo "</span>
                </div>
              </div>
              <div class=\"text-content\">";
        // line 151
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_gh_context_summary", [], "any", false, false, true, 151), 151, $this->source), "html", null, true);
        // line 152
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_gh_description", [], "any", false, false, true, 152), 152, $this->source), "html", null, true);
        // line 153
        echo "</div>
          </div>
        <div class=\"bottom-content\">";
        // line 156
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_gh_learnings", [], "any", false, false, true, 156), 156, $this->source), "html", null, true);
        // line 157
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_actor_partner", [], "any", false, false, true, 157), 157, $this->source), "html", null, true);
        // line 158
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_gh_contact_points", [], "any", false, false, true, 158), 158, $this->source), "html", null, true);
        // line 159
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_gh_deployment_plan", [], "any", false, false, true, 159), 159, $this->source), "html", null, true);
        // line 160
        echo "</div>";
        // line 162
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_gh_image_roll", [], "any", false, false, true, 162), 162, $this->source), "html", null, true);
        // line 163
        echo "</div>";
        // line 165
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "comment", [], "any", false, false, true, 165), 165, $this->source), "html", null, true);
        // line 166
        echo "</div>
</article>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["node", "view_mode", "attributes", "header_attributes", "title_prefix", "label", "title_attributes", "url", "title_suffix", "display_submitted", "meta_attributes", "author_picture", "submitted_attributes", "author_name", "date", "metadata", "content_attributes", "content"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/goblac_adaptive/templates/content/node--good-habits.html.twig";
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
        return array (  215 => 166,  213 => 165,  211 => 163,  209 => 162,  207 => 160,  205 => 159,  203 => 158,  201 => 157,  199 => 156,  195 => 153,  193 => 152,  191 => 151,  184 => 147,  182 => 146,  178 => 143,  176 => 142,  173 => 140,  171 => 139,  167 => 136,  165 => 135,  161 => 132,  158 => 131,  150 => 125,  148 => 124,  143 => 121,  139 => 120,  135 => 119,  130 => 117,  124 => 114,  120 => 112,  117 => 110,  115 => 109,  111 => 107,  107 => 106,  102 => 105,  100 => 104,  96 => 103,  94 => 102,  92 => 100,  82 => 97,  75 => 95,  73 => 94,  71 => 93,  69 => 92,  66 => 89,  62 => 88,  59 => 87,  57 => 86,  54 => 85,  47 => 82,  45 => 78,  44 => 77,  43 => 76,  42 => 75,  41 => 74,  40 => 73,  39 => 71,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a node.
 *
 * Available variables:
 * - node: The node entity with limited access to object properties and methods.
 *   Only method names starting with \"get\", \"has\", or \"is\" and a few common
 *   methods such as \"id\", \"label\", and \"bundle\" are available. For example:
 *   - node.getCreatedTime() will return the node creation timestamp.
 *   - node.hasField('field_example') returns TRUE if the node bundle includes
 *     field_example. (This does not indicate the presence of a value in this
 *     field.)
 *   - node.isPublished() will return whether the node is published or not.
 *   Calling other methods, such as node.delete(), will result in an exception.
 *   See \\Drupal\\node\\Entity\\Node for a full list of public properties and
 *   methods for the node object.
 * - label: The title of the node.
 * - content: All node items. Use {{ content }} to print them all,
 *   or print a subset such as {{ content.field_example }}. Use
 *   {{ content|without('field_example') }} to temporarily suppress the printing
 *   of a given child element.
 * - author_picture: The node author user entity, rendered using the \"compact\"
 *   view mode.
 * - metadata: Metadata for this node.
 * - date: Themed creation date field.
 * - author_name: Themed author name field.
 * - url: Direct URL of the current node.
 * - display_submitted: Whether submission information should be displayed.
 * - attributes: HTML attributes for the containing element.
 *   The attributes.class element may contain one or more of the following
 *   classes:
 *   - node: The current template type (also known as a \"theming hook\").
 *   - node--type-[type]: The current node type. For example, if the node is an
 *     \"Article\" it would result in \"node--type-article\". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node--view-mode-[view_mode]: The View Mode of the node; for example, a
 *     teaser would result in: \"node--view-mode-teaser\", and
 *     full: \"node--view-mode-full\".
 *   The following are controlled through the node publishing options.
 *   - node--promoted: Appears on nodes promoted to the front page.
 *   - node--sticky: Appears on nodes ordered above other non-sticky nodes in
 *     teaser listings.
 *   - node--unpublished: Appears on unpublished nodes visible only to site
 *     admins.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - content_attributes: Same as attributes, except applied to the main
 *   content tag that appears in the template.
 * - author_attributes: Same as attributes, except applied to the author of
 *   the node tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - view_mode: View mode; for example, \"teaser\" or \"full\".
 * - teaser: Flag for the teaser state. Will be true if view_mode is 'teaser'.
 * - page: Flag for the full page state. Will be true if view_mode is 'full'.
 * - readmore: Flag for more state. Will be true if the teaser content of the
 *   node cannot hold the main body content.
 * - logged_in: Flag for authenticated user status. Will be true when the
 *   current user is a logged-in member.
 * - is_admin: Flag for admin user status. Will be true when the current user
 *   is an administrator.
 *
 * @see template_preprocess_node()
 * @see at_core_preprocess_node()
 */
#}
{%-
  set classes = [
    'node',
    'node--id-' ~ node.id,
    'node--type-' ~ node.bundle|clean_class,
    node.isPromoted() ? 'node--promoted',
    node.isSticky() ? 'node--sticky',
    not node.isPublished() ? 'node--unpublished',
    view_mode ? 'node--view-mode-' ~ view_mode|clean_class,
    'good-habits-content'
  ]
-%}
<article{{ attributes.addClass(classes).setAttribute('role', 'article') }}>
  <div class=\"node__container\">

    <header{{ header_attributes.addClass('node__header hidden') }}>
      {%- if not node.isPublished() -%}
        <span class=\"node__status node--unpublished marker marker--warning\" aria-label=\"Status message\" role=\"contentinfo\">
          <span class=\"visually-hidden\">{%- trans %}This node is {% endtrans %}</span>{% trans %}Unpublished{% endtrans -%}
        </span>
      {%- endif -%}

      {{- title_prefix -}}
      {%- if label -%}
        {%- if view_mode == 'full' -%}
          <h1{{ title_attributes.addClass('node__title') }}>{{- label -}}</h1>
        {%- else -%}
          <h2{{ title_attributes.addClass('node__title') }}><a href=\"{{ url }}\" class=\"node__title-link\" rel=\"bookmark\">{{- label -}}</a></h2>
        {%- endif -%}
      {%- endif -%}
      {{- title_suffix -}}

      {%- if display_submitted -%}
        <div{{ meta_attributes }}>
          {{- author_picture -}}
          <div{{ submitted_attributes }}>
             <span class=\"node__author\">{{- author_name -}}</span>
             <span class=\"node__pubdate\">{{- date -}}</span>
          </div>
          {{- metadata -}}
        </div>
      {%- endif -%}
    </header>

    <div{{ content_attributes.addClass('node__content') }}>
        <div class=\"cover-section\">
            <div class=\"content-left\">
                <span>{{\"Linha temática\"|t}}</span>

                <h2>{{- label -}}</h2>
                {{dump()}}
                <div class=\"text-content\">{{\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat.\"}}</div>
            </div>
            <div class=\"content-right\">
                {{- content.field_gh_cover_image -}}
            </div>
        </div>

        <div class=\"good-habits-info\">
          <span>
            <i class=\"fa-regular fa-circle-user\"></i>
            {{ \"Escrito por \" }}{{- content.field_gh_author_name -}}
          </span>
          <span>
            <i class=\"fa-regular fa-clock\"></i>
            {{- content.field_gh_read_time -}}
          </span>
          <span>
            <i class=\"fa-regular fa-calendar\"></i>
            {{- date -}}
          </span>
        </div>
          {{- content.field_gh_tags -}}
          <div class=\"top-content\">
              <div class=\"actions\">
                <div>
                  {{- content.sharing_buttons -}}
                  <span>{{ \"Para compartir\"|t }}</span>
                </div>
              </div>
              <div class=\"text-content\">
                  {{- content.field_gh_context_summary -}}
                  {{- content.field_gh_description -}}
              </div>
          </div>
        <div class=\"bottom-content\">
            {{- content.field_gh_learnings -}}
            {{- content.field_actor_partner -}}
            {{- content.field_gh_contact_points -}}
            {{- content.field_gh_deployment_plan -}}
        </div>

        {{- content.field_gh_image_roll -}}
    </div>

    {{- content.comment -}}
  </div>
</article>
", "themes/goblac_adaptive/templates/content/node--good-habits.html.twig", "/var/www/html/web/themes/goblac_adaptive/templates/content/node--good-habits.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 71, "if" => 86, "trans" => 88);
        static $filters = array("clean_class" => 74, "escape" => 82, "t" => 117);
        static $functions = array("dump" => 120);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'trans'],
                ['clean_class', 'escape', 't'],
                ['dump']
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
