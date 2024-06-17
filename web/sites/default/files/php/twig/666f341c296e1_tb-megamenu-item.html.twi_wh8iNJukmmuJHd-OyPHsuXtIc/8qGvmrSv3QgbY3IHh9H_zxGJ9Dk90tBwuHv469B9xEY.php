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

/* modules/contrib/tb_megamenu/templates/tb-megamenu-item.html.twig */
class __TwigTemplate_0711491215d5071ce2f37e2dae51cef9 extends Template
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
        $context["linkAttributes"] = (($__internal_compile_0 = ($context["link"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["attributes"] ?? null) : null);
        // line 2
        if ((twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "url", [], "array", true, true, true, 2) &&  !twig_test_empty((($__internal_compile_1 = ($context["link"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["url"] ?? null) : null)))) {
            // line 3
            echo "  ";
            $context["tag"] = "a";
        } else {
            // line 5
            echo "  ";
            $context["tag"] = "span";
            // line 6
            echo "  ";
            $context["linkAttributes"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["linkAttributes"] ?? null), "addClass", ["tb-megamenu-no-link"], "method", false, false, true, 6), "setAttribute", ["tabindex", "0"], "method", false, false, true, 6);
            // line 7
            echo "  ";
            if (twig_test_empty(($context["submenu"] ?? null))) {
                // line 8
                echo "    ";
                $context["linkAttributes"] = twig_get_attribute($this->env, $this->source, ($context["linkAttributes"] ?? null), "addClass", ["tb-megamenu-no-submenu"], "method", false, false, true, 8);
                // line 9
                echo "  ";
            }
        }
        // line 11
        echo "<li ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 11, $this->source), "html", null, true);
        echo " >
  ";
        // line 12
        if ((($context["tag"] ?? null) == "a")) {
            // line 13
            echo "    <";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tag"] ?? null), 13, $this->source), "html", null, true);
            echo " href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_2 = ($context["link"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["url"] ?? null) : null), 13, $this->source), "html", null, true);
            echo "\" ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_3 = ($context["link"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["attributes"] ?? null) : null), 13, $this->source), "html", null, true);
            echo ">
  ";
        } else {
            // line 15
            echo "    <";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tag"] ?? null), 15, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_4 = ($context["link"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["attributes"] ?? null) : null), 15, $this->source), "html", null, true);
            echo ">
  ";
        }
        // line 17
        echo "    ";
        if ((($__internal_compile_5 = ($context["item_config"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["xicon"] ?? null) : null)) {
            // line 18
            echo "      <i class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_6 = ($context["item_config"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["xicon"] ?? null) : null), 18, $this->source), "html", null, true);
            echo "\"></i>
    ";
        }
        // line 20
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "title_translate", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
        echo "
    ";
        // line 21
        if ((($context["submenu"] ?? null) && (($__internal_compile_7 = ($context["block_config"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["auto-arrow"] ?? null) : null))) {
            // line 22
            echo "      <span class=\"caret\"></span>
    ";
        }
        // line 24
        echo "    ";
        if ((($__internal_compile_8 = ($context["item_config"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["caption"] ?? null) : null)) {
            // line 25
            echo "      <span class=\"mega-caption\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_9 = ($context["item_config"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["caption"] ?? null) : null), 25, $this->source), "html", null, true);
            echo "</span>
    ";
        }
        // line 27
        echo "  </";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tag"] ?? null), 27, $this->source), "html", null, true);
        echo ">
  ";
        // line 28
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["submenu"] ?? null), 28, $this->source), "html", null, true);
        echo "
</li>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["link", "submenu", "attributes", "item_config", "block_config"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "modules/contrib/tb_megamenu/templates/tb-megamenu-item.html.twig";
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
        return array (  121 => 28,  116 => 27,  110 => 25,  107 => 24,  103 => 22,  101 => 21,  96 => 20,  90 => 18,  87 => 17,  80 => 15,  70 => 13,  68 => 12,  63 => 11,  59 => 9,  56 => 8,  53 => 7,  50 => 6,  47 => 5,  43 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/tb_megamenu/templates/tb-megamenu-item.html.twig", "/var/www/html/web/modules/contrib/tb_megamenu/templates/tb-megamenu-item.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 2);
        static $filters = array("escape" => 11);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
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
