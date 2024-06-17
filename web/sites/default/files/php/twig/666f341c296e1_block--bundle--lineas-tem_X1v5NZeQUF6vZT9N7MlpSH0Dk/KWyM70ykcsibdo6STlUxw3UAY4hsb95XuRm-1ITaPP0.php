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

/* themes/goblac_adaptive/templates/block/block--bundle--lineas-tematicas-home-block.html.twig */
class __TwigTemplate_78dae1e336a75fe9c0a595d3968970e1 extends Template
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
($context["view_mode"] ?? null)) ? (("block--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 37, $this->source)))) : ("")), "thematic-info"];
        // line 41
        $context["heading_id"] = ($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "id", [], "any", false, false, true, 41), 41, $this->source) . \Drupal\Component\Utility\Html::getId("-title"));
        // line 42
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 42), 42, $this->source), "role", "aria-labelledby"), "html", null, true);
        if (($context["label"] ?? null)) {
            echo " role=\"region\" aria-labelledby=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading_id"] ?? null), 42, $this->source), "html", null, true);
            echo "\"";
        }
        echo ">
  <div class=\"block__inner\">

    ";
        // line 45
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 45, $this->source), "html", null, true);
        // line 46
        if (($context["label"] ?? null)) {
            // line 47
            echo "<h2 ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", ["block__title"], "method", false, false, true, 47), "setAttribute", ["id", ($context["heading_id"] ?? null)], "method", false, false, true, 47), 47, $this->source), "html", null, true);
            echo "><span>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 47, $this->source), "html", null, true);
            echo "</span></h2>";
        }
        // line 49
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 49, $this->source), "html", null, true);
        // line 51
        $this->displayBlock('content', $context, $blocks);
        // line 88
        echo "</div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["configuration", "plugin_id_clean", "label", "bundle", "view_mode", "attributes", "title_prefix", "title_attributes", "title_suffix", "content_attributes", "content"]);    }

    // line 51
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", ["block__content main-content"], "method", false, false, true, 52), 52, $this->source), "html", null, true);
        echo ">
        <div>";
        // line 54
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_lth_pre_title", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
        // line 55
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_lth_title", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
        // line 56
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_lth_summary", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
        // line 57
        echo "<a href=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_0 = (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_lth_main_link", [], "any", false, false, true, 57)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#url"] ?? null) : null), 57, $this->source), "html", null, true);
        echo "\" class=\"main-link\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_2 = (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_lth_main_link", [], "any", false, false, true, 57)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[0] ?? null) : null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#title"] ?? null) : null), 57, $this->source), "html", null, true);
        echo "</a>
        </div>
        <div class=\"grid-content\">
            <div class=\"info-section\">
                <i class=\"fa-regular fa-building\"></i>
                <h2>";
        // line 62
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_4 = (($__internal_compile_5 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_lth_category", [], "any", false, false, true, 62)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[0] ?? null) : null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["#context"] ?? null) : null), "value", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
        echo "</h2>
                <p>";
        // line 63
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_6 = (($__internal_compile_7 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_lth_description", [], "any", false, false, true, 63)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[0] ?? null) : null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["#context"] ?? null) : null), "value", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
        echo "</p>
                <a href=\"";
        // line 64
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_8 = (($__internal_compile_9 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_lth_category_links", [], "any", false, false, true, 64)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[0] ?? null) : null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["#url"] ?? null) : null), 64, $this->source), "html", null, true);
        echo "\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_10 = (($__internal_compile_11 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_lth_category_links", [], "any", false, false, true, 64)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[0] ?? null) : null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["#title"] ?? null) : null), 64, $this->source), "html", null, true);
        echo "</a>  
            </div>
            <div class=\"info-section\">
                <i class=\"fa-solid fa-display\"></i>
                <h2>";
        // line 68
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_12 = (($__internal_compile_13 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_lth_category", [], "any", false, false, true, 68)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[1] ?? null) : null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["#context"] ?? null) : null), "value", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
        echo "</h2>
                <p>";
        // line 69
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_14 = (($__internal_compile_15 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_lth_description", [], "any", false, false, true, 69)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[1] ?? null) : null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["#context"] ?? null) : null), "value", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
        echo "</p>
                <a href=\"";
        // line 70
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_16 = (($__internal_compile_17 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_lth_category_links", [], "any", false, false, true, 70)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[1] ?? null) : null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["#url"] ?? null) : null), 70, $this->source), "html", null, true);
        echo "\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_18 = (($__internal_compile_19 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_lth_category_links", [], "any", false, false, true, 70)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19[1] ?? null) : null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["#title"] ?? null) : null), 70, $this->source), "html", null, true);
        echo "</a>  
            </div>
            <div class=\"info-section\">
                <i class=\"fa-regular fa-hand\"></i>
                <h2>";
        // line 74
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_20 = (($__internal_compile_21 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_lth_category", [], "any", false, false, true, 74)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21[2] ?? null) : null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["#context"] ?? null) : null), "value", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
        echo "</h2>
                <p>";
        // line 75
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_22 = (($__internal_compile_23 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_lth_description", [], "any", false, false, true, 75)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23[2] ?? null) : null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["#context"] ?? null) : null), "value", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
        echo "</p>
                <a href=\"";
        // line 76
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_24 = (($__internal_compile_25 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_lth_category_links", [], "any", false, false, true, 76)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25[2] ?? null) : null)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["#url"] ?? null) : null), 76, $this->source), "html", null, true);
        echo "\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_26 = (($__internal_compile_27 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_lth_category_links", [], "any", false, false, true, 76)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27[2] ?? null) : null)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["#title"] ?? null) : null), 76, $this->source), "html", null, true);
        echo "</a>  
            </div>
            <div class=\"info-section\">
                <i class=\"fa-regular fa-eye\"></i>
                <h2>";
        // line 80
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_28 = (($__internal_compile_29 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_lth_category", [], "any", false, false, true, 80)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29[3] ?? null) : null)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["#context"] ?? null) : null), "value", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
        echo "</h2>
                <p>";
        // line 81
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_30 = (($__internal_compile_31 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_lth_description", [], "any", false, false, true, 81)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31[3] ?? null) : null)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30["#context"] ?? null) : null), "value", [], "any", false, false, true, 81), 81, $this->source), "html", null, true);
        echo "</p>
                <a href=\"";
        // line 82
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_32 = (($__internal_compile_33 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_lth_category_links", [], "any", false, false, true, 82)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33[3] ?? null) : null)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32["#url"] ?? null) : null), 82, $this->source), "html", null, true);
        echo "\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_34 = (($__internal_compile_35 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_lth_category_links", [], "any", false, false, true, 82)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35[3] ?? null) : null)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34["#title"] ?? null) : null), 82, $this->source), "html", null, true);
        echo "</a>  
            </div>
        </div>
      </div>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/goblac_adaptive/templates/block/block--bundle--lineas-tematicas-home-block.html.twig";
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
        return array (  168 => 82,  164 => 81,  160 => 80,  151 => 76,  147 => 75,  143 => 74,  134 => 70,  130 => 69,  126 => 68,  117 => 64,  113 => 63,  109 => 62,  98 => 57,  96 => 56,  94 => 55,  92 => 54,  87 => 52,  83 => 51,  76 => 88,  74 => 51,  72 => 49,  65 => 47,  63 => 46,  61 => 45,  49 => 42,  47 => 41,  45 => 37,  44 => 36,  43 => 35,  42 => 34,  41 => 33,  40 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/goblac_adaptive/templates/block/block--bundle--lineas-tematicas-home-block.html.twig", "/var/www/html/web/themes/goblac_adaptive/templates/block/block--bundle--lineas-tematicas-home-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 31, "if" => 42, "block" => 51);
        static $filters = array("clean_class" => 33, "clean_id" => 41, "escape" => 42, "without" => 42);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'clean_id', 'escape', 'without'],
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
