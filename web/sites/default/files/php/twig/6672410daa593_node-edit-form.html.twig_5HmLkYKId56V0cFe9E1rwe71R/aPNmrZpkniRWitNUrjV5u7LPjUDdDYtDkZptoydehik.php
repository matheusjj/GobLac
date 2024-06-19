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

/* themes/goblac_adaptive/templates/content-edit/node-edit-form.html.twig */
class __TwigTemplate_1050244945dafd689b60df21152de2de extends Template
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
        // line 19
        echo "<div data-at-responsive-columns>
  <div class=\"layout-region\">
    <h1 class=\"page__title h2\">";
        // line 21
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 21, $this->source), "html", null, true);
        echo "</h1>
  </div>
  <div class=\"layout-node-form clearfix is-responsive__layout\">
    <div class=\"layout-region layout-region-node-main is-responsive__column\">
      <div class=\"layout-region__inner layout-region-node-main__inner\">
       ";
        // line 26
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 26, $this->source), "advanced", "actions"), "html", null, true);
        echo "
      </div>
    </div>
    <div class=\"layout-region layout-region-node-secondary is-responsive__column\">
      <div class=\"layout-region__inner layout-region-node-secondary__inner\">
        ";
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "advanced", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
        echo "
      </div>
    </div>
  </div>
</div>
<div class=\"layout-node-form-footer clearfix\">
  <div class=\"layout-region layout-region-node-footer\">
    <div class=\"layout-region__inner layout-region-node-footer__inner\">
      ";
        // line 39
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "actions", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
        echo "
    </div>
  </div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["title", "form"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/goblac_adaptive/templates/content-edit/node-edit-form.html.twig";
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
        return array (  70 => 39,  59 => 31,  51 => 26,  43 => 21,  39 => 19,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for a node edit form.
 *
 * Two column template for the node add/edit form. The clearfix is for backwards
 * compatibility with early sub-themes that did not use flexbox.
 *
 * This template will be used when a node edit form specifies 'node_edit_form'
 * as its #theme callback.  Otherwise, by default, node add/edit forms will be
 * themed by form.html.twig.
 *
 * Available variables:
 * - form: The node add/edit form.
 *
 * @see at_core_form_node_form_alter()
 */
#}
<div data-at-responsive-columns>
  <div class=\"layout-region\">
    <h1 class=\"page__title h2\">{{ title }}</h1>
  </div>
  <div class=\"layout-node-form clearfix is-responsive__layout\">
    <div class=\"layout-region layout-region-node-main is-responsive__column\">
      <div class=\"layout-region__inner layout-region-node-main__inner\">
       {{ form|without('advanced', 'actions') }}
      </div>
    </div>
    <div class=\"layout-region layout-region-node-secondary is-responsive__column\">
      <div class=\"layout-region__inner layout-region-node-secondary__inner\">
        {{ form.advanced }}
      </div>
    </div>
  </div>
</div>
<div class=\"layout-node-form-footer clearfix\">
  <div class=\"layout-region layout-region-node-footer\">
    <div class=\"layout-region__inner layout-region-node-footer__inner\">
      {{ form.actions }}
    </div>
  </div>
</div>
", "themes/goblac_adaptive/templates/content-edit/node-edit-form.html.twig", "/var/www/html/web/themes/goblac_adaptive/templates/content-edit/node-edit-form.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 21, "without" => 26);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'without'],
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
