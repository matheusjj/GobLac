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

/* themes/goblac_adaptive/templates/layout/row.html.twig */
class __TwigTemplate_b3cfcbccfa8d8739800f07ba4325257c extends Template
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
        // line 30
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["row_attributes"] ?? null), 30, $this->source), "html", null, true);
        echo ">
  ";
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["row_prefix"] ?? null), 31, $this->source), "html", null, true);
        echo "
  <div";
        // line 32
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["wrapper_attributes"] ?? null), 32, $this->source), "html", null, true);
        echo ">
    <div";
        // line 33
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container_attributes"] ?? null), 33, $this->source), "html", null, true);
        echo ">
      ";
        // line 34
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["regions"] ?? null), 34, $this->source), "html", null, true);
        echo "
    </div>
  </div>
  ";
        // line 37
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["row_suffix"] ?? null), 37, $this->source), "html", null, true);
        echo "
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["row_attributes", "row_prefix", "wrapper_attributes", "container_attributes", "regions", "row_suffix"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/goblac_adaptive/templates/layout/row.html.twig";
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
        return array (  62 => 37,  56 => 34,  52 => 33,  48 => 32,  44 => 31,  39 => 30,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default template to display a row.
 *
 * Row templates are output in page.html.twig, which in AT becomes a wrapper and
 * a proxy for loading the correct suggestion layout CSS. The row will output
 * regions.
 *
 * Suggestions:
 *  row--[row name].html.twig
 *  row--[row name]--node-[node type].html.twig
 *
 *  For example:
 *  row--main.html.twig
 *  row--main--node-article.html.twig
 *
 * Available variables:
 * - row_name: the name of the row.
 * - regions: contains regions data to appear in this row.
 * - row_attributes: HTML attributes for the row outer wrapper
 * - wrapper_attributes: HTML attributes for the row inner wrapper.
 * - container_attributes: HTML attributes for the row container.
 * - row_prefix: insert content/markup etc before the row.
 * - row_suffix: insert content/markup etc after the row.
 *
 * @see at_core_preprocess_row()
 */
#}
<div{{ row_attributes }}>
  {{ row_prefix }}
  <div{{ wrapper_attributes }}>
    <div{{ container_attributes }}>
      {{ regions }}
    </div>
  </div>
  {{ row_suffix }}
</div>
", "themes/goblac_adaptive/templates/layout/row.html.twig", "/var/www/html/web/themes/goblac_adaptive/templates/layout/row.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 30);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
