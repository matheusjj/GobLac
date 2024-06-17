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

/* themes/goblac_adaptive/templates/field/field--entity-reference.html.twig */
class __TwigTemplate_fd7fce1def9a781c1ee62ffb4a622743 extends Template
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
        // line 40
        $context["field_name_class"] = \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["field_name"] ?? null), 40, $this->source));
        // line 42
        $context["classes"] = ["field", ((("field-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 44
($context["entity_type"] ?? null), 44, $this->source))) . "-") . $this->sandbox->ensureToStringAllowed(($context["field_name_class"] ?? null), 44, $this->source)), ((        // line 45
($context["field_entity_type"] ?? null)) ? (("field-entity-reference-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["field_entity_type"] ?? null), 45, $this->source)))) : ("")), ((        // line 46
($context["field_formatter"] ?? null)) ? (("field-formatter-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["field_formatter"] ?? null), 46, $this->source)))) : ("")), ("field-name-" . $this->sandbox->ensureToStringAllowed(        // line 47
($context["field_name_class"] ?? null), 47, $this->source)), ("field-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 48
($context["field_type"] ?? null), 48, $this->source))), ("field-label-" . $this->sandbox->ensureToStringAllowed(        // line 49
($context["label_display"] ?? null), 49, $this->source)), (((        // line 50
($context["label_display"] ?? null) == "inline")) ? ("clearfix") : (""))];
        // line 54
        $context["title_classes"] = ["field__label", (((        // line 56
($context["label_display"] ?? null) == "visually_hidden")) ? ("visually-hidden") : (""))];
        // line 59
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 59), 59, $this->source), "html", null, true);
        echo ">";
        // line 60
        if ( !($context["label_hidden"] ?? null)) {
            // line 61
            echo "<div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [($context["title_classes"] ?? null)], "method", false, false, true, 61), 61, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 61, $this->source), "html", null, true);
            echo "</div>";
        }
        // line 63
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", ["field__items"], "method", false, false, true, 63), 63, $this->source), "html", null, true);
        echo ">";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 66
            $context["item_classes"] = ["field__item", (((($__internal_compile_0 = twig_get_attribute($this->env, $this->source,             // line 68
$context["item"], "content", [], "any", false, false, true, 68)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#title"] ?? null) : null)) ? (("field__item--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 68)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#title"] ?? null) : null), 68, $this->source)))) : (""))];
            // line 71
            echo "<div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 71), "addClass", [($context["item_classes"] ?? null)], "method", false, false, true, 71), 71, $this->source), "html", null, true);
            echo ">
        <span class=\"field__item-wrapper\">";
            // line 72
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
            echo "</span>
      </div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "</div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["field_name", "entity_type", "field_entity_type", "field_formatter", "field_type", "label_display", "attributes", "label_hidden", "title_attributes", "label", "content_attributes", "items"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/goblac_adaptive/templates/field/field--entity-reference.html.twig";
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
        return array (  90 => 75,  82 => 72,  77 => 71,  75 => 68,  74 => 66,  70 => 64,  66 => 63,  59 => 61,  57 => 60,  53 => 59,  51 => 56,  50 => 54,  48 => 50,  47 => 49,  46 => 48,  45 => 47,  44 => 46,  43 => 45,  42 => 44,  41 => 42,  39 => 40,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/goblac_adaptive/templates/field/field--entity-reference.html.twig", "/var/www/html/web/themes/goblac_adaptive/templates/field/field--entity-reference.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 40, "if" => 60, "for" => 64);
        static $filters = array("clean_class" => 40, "escape" => 59);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['clean_class', 'escape'],
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
