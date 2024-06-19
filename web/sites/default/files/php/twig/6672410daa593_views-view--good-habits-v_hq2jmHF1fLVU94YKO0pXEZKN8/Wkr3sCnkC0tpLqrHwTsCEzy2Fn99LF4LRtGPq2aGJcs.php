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

/* themes/goblac_adaptive/templates/views/views-view--good-habits-view.html.twig */
class __TwigTemplate_150a9d326872dcc4cf106a29491ed106 extends Template
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
        // line 2
        if ((($context["display_id"] ?? null) == "page_1")) {
            // line 3
            echo "    ";
            // line 35
            echo "    ";
            // line 36
            $context["classes"] = ["view", ("view-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(            // line 38
($context["id"] ?? null), 38, $this->source))), ("view-id-" . $this->sandbox->ensureToStringAllowed(            // line 39
($context["id"] ?? null), 39, $this->source)), ("view-display-id-" . $this->sandbox->ensureToStringAllowed(            // line 40
($context["display_id"] ?? null), 40, $this->source)), ((            // line 41
($context["dom_id"] ?? null)) ? (("js-view-dom-id-" . $this->sandbox->ensureToStringAllowed(($context["dom_id"] ?? null), 41, $this->source))) : ("")), "search-page"];
            // line 45
            echo "    <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 45), 45, $this->source), "html", null, true);
            echo ">
    ";
            // line 46
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 46, $this->source), "html", null, true);
            echo "
    ";
            // line 47
            if (($context["title"] ?? null)) {
                // line 48
                echo "        <h2 class=\"view-title\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 48, $this->source), "html", null, true);
                echo "</h2>
    ";
            }
            // line 50
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 50, $this->source), "html", null, true);
            echo "

    <div class=\"basic-banner\">
    ";
            // line 53
            if (($context["header"] ?? null)) {
                // line 54
                echo "        ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["header"] ?? null), "entity_block", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
                echo "
        <div class=\"banner-content\">
        <h2 class=\"banner-title\">";
                // line 56
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Repositorio de buenas prácticas"));
                echo "</h2>
        <p class=\"banner-summary\">";
                // line 57
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Encuentra Buenas Prácticas y Herramientas desarrolladas en la región"));
                echo "</p>";
                // line 58
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["exposed"] ?? null), 58, $this->source), "html", null, true);
                // line 59
                echo "</div>
    ";
            }
            // line 61
            echo "    </div>

    ";
            // line 63
            if (($context["header"] ?? null)) {
                // line 64
                echo "        <div class=\"view-header\">
        ";
                // line 65
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["header"] ?? null), "result", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
                echo "
        </div>
    ";
            }
            // line 68
            echo "
    <div class=\"search-view\">
        <div class=\"form-filter\">
            ";
            // line 71
            if (($context["exposed"] ?? null)) {
                // line 72
                echo "                <div class=\"view-filters\">
                ";
                // line 73
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["exposed"] ?? null), 73, $this->source), "html", null, true);
                echo "
                </div>
            ";
            }
            // line 76
            echo "        </div>
        <div class=\"results\">
            ";
            // line 78
            if (($context["rows"] ?? null)) {
                // line 79
                echo "                <div class=\"view-content view-rows\">
                ";
                // line 80
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 80, $this->source), "html", null, true);
                echo "
                </div>
            ";
            } elseif (            // line 82
($context["empty"] ?? null)) {
                // line 83
                echo "                <div class=\"view-empty\">
                ";
                // line 84
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null), 84, $this->source), "html", null, true);
                echo "
                </div>
            ";
            }
            // line 87
            echo "
            ";
            // line 88
            if (($context["pager"] ?? null)) {
                // line 89
                echo "                ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 89, $this->source), "html", null, true);
                echo "
            ";
            }
            // line 91
            echo "        </div>
    </div>
    ";
            // line 93
            if (($context["attachment_before"] ?? null)) {
                // line 94
                echo "        <div class=\"attachment attachment-before\">
        ";
                // line 95
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_before"] ?? null), 95, $this->source), "html", null, true);
                echo "
        </div>
    ";
            }
            // line 98
            echo "
    ";
            // line 99
            if (($context["attachment_after"] ?? null)) {
                // line 100
                echo "        <div class=\"attachment attachment-after\">
        ";
                // line 101
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_after"] ?? null), 101, $this->source), "html", null, true);
                echo "
        </div>
    ";
            }
            // line 104
            echo "    ";
            if (($context["more"] ?? null)) {
                // line 105
                echo "        ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["more"] ?? null), 105, $this->source), "html", null, true);
                echo "
    ";
            }
            // line 107
            echo "    ";
            if (($context["footer"] ?? null)) {
                // line 108
                echo "        <div class=\"view-footer\">
        ";
                // line 109
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null), 109, $this->source), "html", null, true);
                echo "
        </div>
    ";
            }
            // line 112
            echo "    ";
            if (($context["feed_icons"] ?? null)) {
                // line 113
                echo "        <div class=\"feed-icons\">
        ";
                // line 114
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["feed_icons"] ?? null), 114, $this->source), "html", null, true);
                echo "
        </div>
    ";
            }
            // line 117
            echo "    </div>
";
        } else {
            // line 119
            echo "    ";
            // line 151
            echo "    ";
            // line 152
            $context["classes"] = ["view", ("view-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(            // line 154
($context["id"] ?? null), 154, $this->source))), ("view-id-" . $this->sandbox->ensureToStringAllowed(            // line 155
($context["id"] ?? null), 155, $this->source)), ("view-display-id-" . $this->sandbox->ensureToStringAllowed(            // line 156
($context["display_id"] ?? null), 156, $this->source)), ((            // line 157
($context["dom_id"] ?? null)) ? (("js-view-dom-id-" . $this->sandbox->ensureToStringAllowed(($context["dom_id"] ?? null), 157, $this->source))) : (""))];
            // line 160
            echo "    <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 160), 160, $this->source), "html", null, true);
            echo ">
    ";
            // line 161
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 161, $this->source), "html", null, true);
            echo "
    ";
            // line 162
            if (($context["title"] ?? null)) {
                // line 163
                echo "        <h2 class=\"view-title\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 163, $this->source), "html", null, true);
                echo "</h2>
    ";
            }
            // line 165
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 165, $this->source), "html", null, true);
            echo "
    ";
            // line 166
            if (($context["header"] ?? null)) {
                // line 167
                echo "        <div class=\"view-header\">
        ";
                // line 168
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 168, $this->source), "html", null, true);
                echo "
        </div>
    ";
            }
            // line 171
            echo "    ";
            if (($context["exposed"] ?? null)) {
                // line 172
                echo "        <div class=\"view-filters\">
        ";
                // line 173
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["exposed"] ?? null), 173, $this->source), "html", null, true);
                echo "
        </div>
    ";
            }
            // line 176
            echo "    ";
            if (($context["attachment_before"] ?? null)) {
                // line 177
                echo "        <div class=\"attachment attachment-before\">
        ";
                // line 178
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_before"] ?? null), 178, $this->source), "html", null, true);
                echo "
        </div>
    ";
            }
            // line 181
            echo "
    ";
            // line 182
            if (($context["rows"] ?? null)) {
                // line 183
                echo "        <div class=\"view-content view-rows\">
        ";
                // line 184
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 184, $this->source), "html", null, true);
                echo "
        </div>
    ";
            } elseif (            // line 186
($context["empty"] ?? null)) {
                // line 187
                echo "        <div class=\"view-empty\">
        ";
                // line 188
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null), 188, $this->source), "html", null, true);
                echo "
        </div>
    ";
            }
            // line 191
            echo "
    ";
            // line 192
            if (($context["pager"] ?? null)) {
                // line 193
                echo "        ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 193, $this->source), "html", null, true);
                echo "
    ";
            }
            // line 195
            echo "    ";
            if (($context["attachment_after"] ?? null)) {
                // line 196
                echo "        <div class=\"attachment attachment-after\">
        ";
                // line 197
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_after"] ?? null), 197, $this->source), "html", null, true);
                echo "
        </div>
    ";
            }
            // line 200
            echo "    ";
            if (($context["more"] ?? null)) {
                // line 201
                echo "        ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["more"] ?? null), 201, $this->source), "html", null, true);
                echo "
    ";
            }
            // line 203
            echo "    ";
            if (($context["footer"] ?? null)) {
                // line 204
                echo "        <div class=\"view-footer\">
        ";
                // line 205
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null), 205, $this->source), "html", null, true);
                echo "
        </div>
    ";
            }
            // line 208
            echo "    ";
            if (($context["feed_icons"] ?? null)) {
                // line 209
                echo "        <div class=\"feed-icons\">
        ";
                // line 210
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["feed_icons"] ?? null), 210, $this->source), "html", null, true);
                echo "
        </div>
    ";
            }
            // line 213
            echo "    </div>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["display_id", "id", "dom_id", "attributes", "title_prefix", "title", "title_suffix", "header", "exposed", "rows", "empty", "pager", "attachment_before", "attachment_after", "more", "footer", "feed_icons"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/goblac_adaptive/templates/views/views-view--good-habits-view.html.twig";
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
        return array (  376 => 213,  370 => 210,  367 => 209,  364 => 208,  358 => 205,  355 => 204,  352 => 203,  346 => 201,  343 => 200,  337 => 197,  334 => 196,  331 => 195,  325 => 193,  323 => 192,  320 => 191,  314 => 188,  311 => 187,  309 => 186,  304 => 184,  301 => 183,  299 => 182,  296 => 181,  290 => 178,  287 => 177,  284 => 176,  278 => 173,  275 => 172,  272 => 171,  266 => 168,  263 => 167,  261 => 166,  256 => 165,  250 => 163,  248 => 162,  244 => 161,  239 => 160,  237 => 157,  236 => 156,  235 => 155,  234 => 154,  233 => 152,  231 => 151,  229 => 119,  225 => 117,  219 => 114,  216 => 113,  213 => 112,  207 => 109,  204 => 108,  201 => 107,  195 => 105,  192 => 104,  186 => 101,  183 => 100,  181 => 99,  178 => 98,  172 => 95,  169 => 94,  167 => 93,  163 => 91,  157 => 89,  155 => 88,  152 => 87,  146 => 84,  143 => 83,  141 => 82,  136 => 80,  133 => 79,  131 => 78,  127 => 76,  121 => 73,  118 => 72,  116 => 71,  111 => 68,  105 => 65,  102 => 64,  100 => 63,  96 => 61,  92 => 59,  90 => 58,  87 => 57,  83 => 56,  77 => 54,  75 => 53,  68 => 50,  62 => 48,  60 => 47,  56 => 46,  51 => 45,  49 => 41,  48 => 40,  47 => 39,  46 => 38,  45 => 36,  43 => 35,  41 => 3,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# {{dump()}} #}
{% if display_id == \"page_1\" %}
    {#
    /**
    * @file
    * Theme override for a main view template.
    *
    * Available variables:
    * - attributes: Remaining HTML attributes for the element.
    * - css_name: A css-safe version of the view name.
    * - css_class: The user-specified classes names, if any.
    * - header: The optional header.
    * - footer: The optional footer.
    * - rows: The results of the view query, if any.
    * - empty: The content to display if there are no rows.
    * - pager: The optional pager next/prev links to display.
    * - exposed: Exposed widget form/info to display.
    * - feed_icons: Optional feed icons to display.
    * - more: An optional link to the next page of results.
    * - title: Title of the view, only used when displaying in the admin preview.
    * - title_prefix: Additional output populated by modules, intended to be
    *   displayed in front of the view title.
    * - title_suffix: Additional output populated by modules, intended to be
    *   displayed after the view title.
    * - attachment_before: An optional attachment view to be displayed before the
    *   view content.
    * - attachment_after: An optional attachment view to be displayed after the
    *   view content.
    * - dom_id: Unique id for every view being printed to give unique class for
    *   Javascript.
    *
    * @see template_preprocess_views_view()
    */
    #}
    {%
    set classes = [
        'view',
        'view-' ~ id|clean_class,
        'view-id-' ~ id,
        'view-display-id-' ~ display_id,
        dom_id ? 'js-view-dom-id-' ~ dom_id,
        'search-page'
    ]
    %}
    <div{{ attributes.addClass(classes) }}>
    {{ title_prefix }}
    {% if title %}
        <h2 class=\"view-title\">{{ title }}</h2>
    {% endif %}
    {{ title_suffix }}

    <div class=\"basic-banner\">
    {% if header %}
        {{ header.entity_block }}
        <div class=\"banner-content\">
        <h2 class=\"banner-title\">{{ \"Repositorio de buenas prácticas\"|t }}</h2>
        <p class=\"banner-summary\">{{ \"Encuentra Buenas Prácticas y Herramientas desarrolladas en la región\"|t }}</p>
        {{- exposed -}}
        </div>
    {% endif %}
    </div>

    {% if header %}
        <div class=\"view-header\">
        {{ header.result }}
        </div>
    {% endif %}

    <div class=\"search-view\">
        <div class=\"form-filter\">
            {% if exposed %}
                <div class=\"view-filters\">
                {{ exposed }}
                </div>
            {% endif %}
        </div>
        <div class=\"results\">
            {% if rows %}
                <div class=\"view-content view-rows\">
                {{ rows }}
                </div>
            {% elseif empty %}
                <div class=\"view-empty\">
                {{ empty }}
                </div>
            {% endif %}

            {% if pager %}
                {{ pager }}
            {% endif %}
        </div>
    </div>
    {% if attachment_before %}
        <div class=\"attachment attachment-before\">
        {{ attachment_before }}
        </div>
    {% endif %}

    {% if attachment_after %}
        <div class=\"attachment attachment-after\">
        {{ attachment_after }}
        </div>
    {% endif %}
    {% if more %}
        {{ more }}
    {% endif %}
    {% if footer %}
        <div class=\"view-footer\">
        {{ footer }}
        </div>
    {% endif %}
    {% if feed_icons %}
        <div class=\"feed-icons\">
        {{ feed_icons }}
        </div>
    {% endif %}
    </div>
{% else %}
    {#
    /**
    * @file
    * Theme override for a main view template.
    *
    * Available variables:
    * - attributes: Remaining HTML attributes for the element.
    * - css_name: A css-safe version of the view name.
    * - css_class: The user-specified classes names, if any.
    * - header: The optional header.
    * - footer: The optional footer.
    * - rows: The results of the view query, if any.
    * - empty: The content to display if there are no rows.
    * - pager: The optional pager next/prev links to display.
    * - exposed: Exposed widget form/info to display.
    * - feed_icons: Optional feed icons to display.
    * - more: An optional link to the next page of results.
    * - title: Title of the view, only used when displaying in the admin preview.
    * - title_prefix: Additional output populated by modules, intended to be
    *   displayed in front of the view title.
    * - title_suffix: Additional output populated by modules, intended to be
    *   displayed after the view title.
    * - attachment_before: An optional attachment view to be displayed before the
    *   view content.
    * - attachment_after: An optional attachment view to be displayed after the
    *   view content.
    * - dom_id: Unique id for every view being printed to give unique class for
    *   Javascript.
    *
    * @see template_preprocess_views_view()
    */
    #}
    {%
    set classes = [
        'view',
        'view-' ~ id|clean_class,
        'view-id-' ~ id,
        'view-display-id-' ~ display_id,
        dom_id ? 'js-view-dom-id-' ~ dom_id,
    ]
    %}
    <div{{ attributes.addClass(classes) }}>
    {{ title_prefix }}
    {% if title %}
        <h2 class=\"view-title\">{{ title }}</h2>
    {% endif %}
    {{ title_suffix }}
    {% if header %}
        <div class=\"view-header\">
        {{ header }}
        </div>
    {% endif %}
    {% if exposed %}
        <div class=\"view-filters\">
        {{ exposed }}
        </div>
    {% endif %}
    {% if attachment_before %}
        <div class=\"attachment attachment-before\">
        {{ attachment_before }}
        </div>
    {% endif %}

    {% if rows %}
        <div class=\"view-content view-rows\">
        {{ rows }}
        </div>
    {% elseif empty %}
        <div class=\"view-empty\">
        {{ empty }}
        </div>
    {% endif %}

    {% if pager %}
        {{ pager }}
    {% endif %}
    {% if attachment_after %}
        <div class=\"attachment attachment-after\">
        {{ attachment_after }}
        </div>
    {% endif %}
    {% if more %}
        {{ more }}
    {% endif %}
    {% if footer %}
        <div class=\"view-footer\">
        {{ footer }}
        </div>
    {% endif %}
    {% if feed_icons %}
        <div class=\"feed-icons\">
        {{ feed_icons }}
        </div>
    {% endif %}
    </div>
{% endif %}", "themes/goblac_adaptive/templates/views/views-view--good-habits-view.html.twig", "/var/www/html/web/themes/goblac_adaptive/templates/views/views-view--good-habits-view.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 2, "set" => 36);
        static $filters = array("clean_class" => 38, "escape" => 45, "t" => 56);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['clean_class', 'escape', 't'],
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
