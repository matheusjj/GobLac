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

/* themes/goblac_adaptive/templates/block/block--block-group--bottom-footer.html.twig */
class __TwigTemplate_f8fac758ca8a3ac60c9bd7902ccc116a extends Template
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
        // line 1
        $context["year"] = twig_date_format_filter($this->env, "now", "Y");
        // line 2
        echo "
<div class=\"bottom-footer\">
  <hr>
  <div class=\"bottom-footer-content\">
    ";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (("GobernanzaLAC @ " . $this->sandbox->ensureToStringAllowed(($context["year"] ?? null), 6, $this->source)) . t(". Todos los derechos reservados")), "html", null, true);
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 8, $this->source), "html", null, true);
        // line 9
        echo "</div>
</div>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["content"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/goblac_adaptive/templates/block/block--block-group--bottom-footer.html.twig";
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
        return array (  51 => 9,  49 => 8,  47 => 6,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set year = 'now' | date('Y') %}

<div class=\"bottom-footer\">
  <hr>
  <div class=\"bottom-footer-content\">
    {{ 'GobernanzaLAC @ ' ~ year ~ '. Todos los derechos reservados'|t }}

    {{- content -}}
  </div>
</div>", "themes/goblac_adaptive/templates/block/block--block-group--bottom-footer.html.twig", "/var/www/html/web/themes/goblac_adaptive/templates/block/block--block-group--bottom-footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1);
        static $filters = array("date" => 1, "escape" => 6, "t" => 6);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['date', 'escape', 't'],
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