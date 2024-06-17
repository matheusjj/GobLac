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

/* themes/goblac_adaptive/templates/content/node.html.twig */
class __TwigTemplate_d007722fd64e7c134d761b3fec9cbd98 extends Template
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
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 78, $this->source)))) : (""))];
        // line 81
        echo "<article";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 81), "setAttribute", ["role", "article"], "method", false, false, true, 81), 81, $this->source), "html", null, true);
        echo ">
  <div class=\"node__container\">

    <header";
        // line 84
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["header_attributes"] ?? null), "addClass", ["node__header"], "method", false, false, true, 84), 84, $this->source), "html", null, true);
        echo ">";
        // line 85
        if ( !twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "isPublished", [], "method", false, false, true, 85)) {
            // line 86
            echo "<span class=\"node__status node--unpublished marker marker--warning\" aria-label=\"Status message\" role=\"contentinfo\">
          <span class=\"visually-hidden\">";
            // line 87
            echo t("This node is", array());
            echo "</span>";
            echo t("Unpublished", array());
            // line 88
            echo "</span>";
        }
        // line 91
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 91, $this->source), "html", null, true);
        // line 92
        if (($context["label"] ?? null)) {
            // line 93
            if ((($context["view_mode"] ?? null) == "full")) {
                // line 94
                echo "<h1";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", ["node__title"], "method", false, false, true, 94), 94, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 94, $this->source), "html", null, true);
                echo "</h1>";
            } else {
                // line 96
                echo "<h2";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", ["node__title"], "method", false, false, true, 96), 96, $this->source), "html", null, true);
                echo "><a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 96, $this->source), "html", null, true);
                echo "\" class=\"node__title-link\" rel=\"bookmark\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 96, $this->source), "html", null, true);
                echo "</a></h2>";
            }
        }
        // line 99
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 99, $this->source), "html", null, true);
        // line 101
        if (($context["display_submitted"] ?? null)) {
            // line 102
            echo "<div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["meta_attributes"] ?? null), 102, $this->source), "html", null, true);
            echo ">";
            // line 103
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_picture"] ?? null), 103, $this->source), "html", null, true);
            // line 104
            echo "<div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["submitted_attributes"] ?? null), 104, $this->source), "html", null, true);
            echo ">
             <span class=\"node__author\">";
            // line 105
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_name"] ?? null), 105, $this->source), "html", null, true);
            echo "</span>
             <span class=\"node__pubdate\">";
            // line 106
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["date"] ?? null), 106, $this->source), "html", null, true);
            echo "</span>
          </div>";
            // line 108
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null), 108, $this->source), "html", null, true);
            // line 109
            echo "</div>";
        }
        // line 111
        echo "</header>

    <div";
        // line 113
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", ["node__content"], "method", false, false, true, 113), 113, $this->source), "html", null, true);
        echo ">";
        // line 114
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 114, $this->source), "comment"), "html", null, true);
        // line 115
        echo "</div>";
        // line 117
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "comment", [], "any", false, false, true, 117), 117, $this->source), "html", null, true);
        // line 119
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
        return "themes/goblac_adaptive/templates/content/node.html.twig";
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
        return array (  133 => 119,  131 => 117,  129 => 115,  127 => 114,  124 => 113,  120 => 111,  117 => 109,  115 => 108,  111 => 106,  107 => 105,  102 => 104,  100 => 103,  96 => 102,  94 => 101,  92 => 99,  82 => 96,  75 => 94,  73 => 93,  71 => 92,  69 => 91,  66 => 88,  62 => 87,  59 => 86,  57 => 85,  54 => 84,  47 => 81,  45 => 78,  44 => 77,  43 => 76,  42 => 75,  41 => 74,  40 => 73,  39 => 71,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/goblac_adaptive/templates/content/node.html.twig", "/var/www/html/web/themes/goblac_adaptive/templates/content/node.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 71, "if" => 85, "trans" => 87);
        static $filters = array("clean_class" => 74, "escape" => 81, "without" => 114);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'trans'],
                ['clean_class', 'escape', 'without'],
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
