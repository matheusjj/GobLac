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

/* themes/goblac_adaptive/templates/navigation/menu.html.twig */
class __TwigTemplate_830a3a31cdeee59057548419aad46439 extends Template
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
        // line 21
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 26
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0, ($context["menu_name"] ?? null)], 26, $context, $this->getSourceContext()));
        echo "

";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["_self", "items", "attributes", "menu_name", "menu_level"]);    }

    // line 28
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, $__menu_name__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "menu_name" => $__menu_name__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 29
            $macros["menus"] = $this;
            // line 31
            if (($context["items"] ?? null)) {
                // line 32
                echo "
    <ul";
                // line 34
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 35
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [["menu", "odd", "menu-level-1", ((($context["menu_name"] ?? null)) ? (("menu-name--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["menu_name"] ?? null), 35, $this->source)))) : (""))]], "method", false, false, true, 35), 35, $this->source), "html", null, true);
                } else {
                    // line 37
                    echo "      class=\"menu is-child ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_cycle(["odd", "even"], $this->sandbox->ensureToStringAllowed(($context["menu_level"] ?? null), 37, $this->source)), "html", null, true);
                    echo " ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ("menu-level-" . (($context["menu_level"] ?? null) + 1)), "html", null, true);
                    echo "\"";
                }
                // line 39
                echo ">";
                // line 41
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 43
                    $context["is_parent"] = false;
                    // line 44
                    echo "      ";
                    if ((twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 44) && twig_get_attribute($this->env, $this->source, $context["item"], "is_expanded", [], "any", false, false, true, 44))) {
                        // line 45
                        echo "        ";
                        $context["is_parent"] = true;
                        // line 46
                        echo "      ";
                    }
                    // line 47
                    echo "
      ";
                    // line 49
                    echo "      ";
                    if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 49), "isExternal", [], "method", false, false, true, 49) == false) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 49), "isRouted", [], "method", false, false, true, 49) == true))) {
                        // line 50
                        echo "        ";
                        $context["nolink"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 50), "getRouteName", [], "method", false, false, true, 50) == "<nolink>")) ? (true) : (false));
                        // line 51
                        echo "      ";
                    }
                    // line 52
                    echo "
      ";
                    // line 53
                    $context["item_classes"] = ["menu__item", ((                    // line 55
($context["is_parent"] ?? null)) ? ("is-parent") : ("")), ((twig_get_attribute($this->env, $this->source,                     // line 56
$context["item"], "is_expanded", [], "any", false, false, true, 56)) ? ("menu__item--expanded") : ("")), ((twig_get_attribute($this->env, $this->source,                     // line 57
$context["item"], "is_collapsed", [], "any", false, false, true, 57)) ? ("menu__item--collapsed") : ("")), ((twig_get_attribute($this->env, $this->source,                     // line 58
$context["item"], "in_active_trail", [], "any", false, false, true, 58)) ? ("menu__item--active-trail") : ("")), ((                    // line 59
($context["nolink"] ?? null)) ? ("menu__item--no-link") : ("")), ("menu__item-title--" . \Drupal\Component\Utility\Html::getClass($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,                     // line 60
$context["item"], "title", [], "any", false, false, true, 60), 60, $this->source))))];
                    // line 63
                    echo "
      ";
                    // line 65
                    echo "      <li";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 65), "addClass", [($context["item_classes"] ?? null)], "method", false, false, true, 65), 65, $this->source), "role"), "html", null, true);
                    echo " id=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((("menu-name--" . $this->sandbox->ensureToStringAllowed(($context["menu_name"] ?? null), 65, $this->source)) . "__") . \Drupal\Component\Utility\Html::getId($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 65), 65, $this->source)))), "html", null, true);
                    echo "\">

        <span class=\"menu__link--wrapper";
                    // line 67
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["is_parent"] ?? null)) ? (" is-parent__wrapper") : ("")));
                    echo "\">
          ";
                    // line 68
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,                     // line 70
$context["item"], "title", [], "any", false, false, true, 70), 70, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,                     // line 71
$context["item"], "url", [], "any", false, false, true, 71), 71, $this->source), $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 72
$context["item"], "attributes", [], "any", false, false, true, 72), "removeClass", [($context["item_classes"] ?? null)], "method", false, false, true, 72), "addClass", ["menu__link"], "method", false, false, true, 72), 72, $this->source), "id", "role")), "html", null, true);
                    // line 74
                    echo "
        </span>

        ";
                    // line 77
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 77)) {
                        // line 78
                        echo "          ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 78), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1), ($context["menu_name"] ?? null)], 78, $context, $this->getSourceContext()));
                        echo "
        ";
                    }
                    // line 80
                    echo "
      </li>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 85
                echo "</ul>
  ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/goblac_adaptive/templates/navigation/menu.html.twig";
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
        return array (  164 => 85,  157 => 80,  151 => 78,  149 => 77,  144 => 74,  142 => 72,  141 => 71,  140 => 70,  139 => 68,  135 => 67,  127 => 65,  124 => 63,  122 => 60,  121 => 59,  120 => 58,  119 => 57,  118 => 56,  117 => 55,  116 => 53,  113 => 52,  110 => 51,  107 => 50,  104 => 49,  101 => 47,  98 => 46,  95 => 45,  92 => 44,  90 => 43,  86 => 41,  84 => 39,  77 => 37,  74 => 35,  72 => 34,  69 => 32,  67 => 31,  65 => 29,  49 => 28,  41 => 26,  39 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/goblac_adaptive/templates/navigation/menu.html.twig", "/var/www/html/web/themes/goblac_adaptive/templates/navigation/menu.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 21, "macro" => 28, "if" => 31, "for" => 41, "set" => 43);
        static $filters = array("escape" => 35, "clean_class" => 35, "render" => 60, "without" => 65, "clean_id" => 65);
        static $functions = array("cycle" => 37, "link" => 69);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for', 'set'],
                ['escape', 'clean_class', 'render', 'without', 'clean_id'],
                ['cycle', 'link']
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
