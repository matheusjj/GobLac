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

/* themes/goblac_adaptive/templates/form/form--node-good-habits-form.html.twig */
class __TwigTemplate_7a551c93db44327b37cf487340f0917b extends Template
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
        // line 13
        echo "<form";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "setAttribute", ["role", "form"], "method", false, false, true, 13), "addClass", ["good-habits-form"], "method", false, false, true, 13), 13, $this->source), "html", null, true);
        echo ">
  ";
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "form_token", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
        echo "
  ";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "form_build_id", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
        echo "
  ";
        // line 16
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "form_id", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
        echo "

  <div>
    <h1>";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Comparte tu Buena Práctica o Herramienta Digital"));
        echo "</h1>
    <p>";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Si tienes una solución innovadora o una práctica ejemplar que ha mejorado la gobernanza en tu comunidad o organización, compártela aquí. Ayuda a inspirar y capacitar a otros con tu experiencia."));
        echo "</p>
  </div>

  <div class=\"form-disposition\">
    <div>
      ";
        // line 25
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "field_gh_cover_image", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
        echo "

      <div class=\"info-img-banner\">
          <i class=\"fa-solid fa-circle-info\"></i>
          <div>
            <h5>";
        // line 30
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Instrucciones para cargar imagen"));
        echo "</h5>
            <p>
              ";
        // line 32
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Al enviar imágenes, asegúrate de que estén en los formatos JPEG o PNG, y que no excedan los 60MB. Las dimensiones deben estar entre 1080x1080 píxeles (mínimo) y 1080x1080 píxeles (máximo), con una resolución de al menos 72 DPI."));
        // line 34
        echo "
            </p>
          </div>
      </div>

      <div>
        <h2>";
        // line 40
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Datos de la buena práctica"));
        // line 41
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "field_gh_type", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
        // line 42
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "title", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
        // line 43
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "field_gh_support_text", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
        // line 44
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "field_gh_context_summary", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
        // line 45
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "field_gh_description", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
        // line 46
        echo "</div>
      
      <div class=\"field-spacer\">
        <div class=\"border-card\">
          <div class=\"optional-field-title\">
            <h3>";
        // line 51
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Resultados"));
        echo "</h3>
            <span>";
        // line 52
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("(Opcional)"));
        echo "</span>
          </div>
          <ul>
            <li>";
        // line 55
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Explicar los impactos positivos de la práctica, cambios o mejoras logrados."));
        echo "</li>
            <li>";
        // line 56
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Dar cuenta de los resultados verificables, cómo se verifican y miden los resultados."));
        echo "</li>
          </ul>
          ";
        // line 58
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "field_gh_results", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
        echo "
        </div>

        <div class=\"border-card\">
          <h3 class=\"card-title\">";
        // line 62
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Lecciones aprendidas"));
        echo "</h3><span class=\"required-field\"></span>
          <ul>
            <li>";
        // line 64
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Cómo se asegura la permanencia en el tiempo (Sostenibilidad) (desde el punto de vista financiero, económico, social, cultural medo ambiental "));
        echo "</li>
            <li>";
        // line 65
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Que aprendizajes se tuvieron de la práctica"));
        echo "</li>
          </ul>
          <p class=\"alt-label\">";
        // line 67
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Cuéntanos lo que aprendiste"));
        echo "</p>
          ";
        // line 68
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "field_gh_learnings", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
        echo "
        </div>

        <div class=\"border-card\">
          <h3 class=\"card-title\">";
        // line 72
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Sección de Involucrados"));
        echo "</h3><span class=\"required-field\"></span>
          <p>";
        // line 73
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Menciona a las personas, organizaciones o comunidades que colaboraron en esta iniciativa."));
        echo "</p>
          ";
        // line 74
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "field_actor_partner", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
        echo "
        </div>

        <div class=\"border-card\">
          <h3 class=\"card-title\">";
        // line 78
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Puntos de contacto"));
        echo "</h3><span class=\"required-field\"></span>
          <hr />
          ";
        // line 80
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "field_gh_contact_points", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
        echo "
        </div>

        <div class=\"border-card\">
          <h3 class=\"card-title\">";
        // line 84
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Resumen de plan de despliegue y/o metodología"));
        echo "</h3><span class=\"required-field\"></span>
          <ul>
            <li>";
        // line 86
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Cómo puede replicarse y adaptarse la Buena Práctica o Herramienta Digital y explicar la metodología."));
        echo "</li>
          </ul>
          <hr />";
        // line 89
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "field_gh_deployment_plan", [], "any", false, false, true, 89), 89, $this->source), "html", null, true);
        // line 90
        echo "</div>

        <div class=\"border-card\">
            <h3 class=\"card-title\">";
        // line 93
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Etiquetas relacionadas"));
        echo "</h3><span class=\"required-field\"></span>
            <hr />";
        // line 95
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "field_gh_tags", [], "any", false, false, true, 95), 95, $this->source), "html", null, true);
        // line 96
        echo "</div>

        <div class=\"border-card\">
            <h3 class=\"card-title\">";
        // line 99
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Pais"));
        echo "</h3><span class=\"required-field\"></span>
            <hr />";
        // line 101
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "field_gh_country", [], "any", false, false, true, 101), 101, $this->source), "html", null, true);
        // line 102
        echo "</div>

        <div class=\"border-card\">
          <h3 class=\"card-title\">";
        // line 105
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Tus dados"));
        echo "</h3><span class=\"required-field\"></span>
          <hr />
          <div class=\"grid-form\">";
        // line 108
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "field_gh_author_name", [], "any", false, false, true, 108), 108, $this->source), "html", null, true);
        // line 109
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "field_gh_author_nickname", [], "any", false, false, true, 109), 109, $this->source), "html", null, true);
        // line 110
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "field_gh_author_phone", [], "any", false, false, true, 110), 110, $this->source), "html", null, true);
        // line 111
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "field_gh_author_email", [], "any", false, false, true, 111), 111, $this->source), "html", null, true);
        // line 112
        echo "</div>
        </div>

        <div class=\"border-card\">
          <h3 class=\"card-title\">";
        // line 116
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Galería de imágenes"));
        echo "</h3><span class=\"required-field\"></span>
          <p>";
        // line 117
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Para garantizar la mejor calidad visual y una interfaz coherente, cada galería debe contener un mínimo de 3 fotos y un máximo de 5 fotos, todas con una resolución de 1080 píxeles por 1080 píxeles."));
        echo "</p>
          <hr />
          ";
        // line 119
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "field_gh_image_roll", [], "any", false, false, true, 119), 119, $this->source), "html", null, true);
        echo "
        </div>

        <div class=\"border-card\">
          <h3 class=\"card-title\">";
        // line 123
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Envíe su archivo en documento PDF"));
        echo "</h3>
          <hr />";
        // line 125
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "field_gh_pdf_file", [], "any", false, false, true, 125), 125, $this->source), "html", null, true);
        // line 126
        echo "</div>

        ";
        // line 128
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\Core\Template\DebugExtension::dump($this->env, $context), "html", null, true);
        // line 129
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "actions", [], "any", false, false, true, 129), 129, $this->source), "html", null, true);
        // line 130
        echo "</div>
    </div>
    <div class=\"border-card\">
      <h3 class=\"card-title\">";
        // line 133
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("ACCIONES"));
        echo "</h3>
      <p>";
        // line 134
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Debe completar todos los campos obligatorios para poder enviarlo para su aprobación."));
        echo "</p>
      <hr />";
        // line 136
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "field_gh_thematic_category", [], "any", false, false, true, 136), 136, $this->source), "html", null, true);
        // line 137
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "field_gh_privacy_policy", [], "any", false, false, true, 137), 137, $this->source), "html", null, true);
        // line 138
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "field_gh_authors_right", [], "any", false, false, true, 138), 138, $this->source), "html", null, true);
        // line 139
        echo "</div>
  </div>
</form>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "element"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/goblac_adaptive/templates/form/form--node-good-habits-form.html.twig";
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
        return array (  297 => 139,  295 => 138,  293 => 137,  291 => 136,  287 => 134,  283 => 133,  278 => 130,  276 => 129,  274 => 128,  270 => 126,  268 => 125,  264 => 123,  257 => 119,  252 => 117,  248 => 116,  242 => 112,  240 => 111,  238 => 110,  236 => 109,  234 => 108,  229 => 105,  224 => 102,  222 => 101,  218 => 99,  213 => 96,  211 => 95,  207 => 93,  202 => 90,  200 => 89,  195 => 86,  190 => 84,  183 => 80,  178 => 78,  171 => 74,  167 => 73,  163 => 72,  156 => 68,  152 => 67,  147 => 65,  143 => 64,  138 => 62,  131 => 58,  126 => 56,  122 => 55,  116 => 52,  112 => 51,  105 => 46,  103 => 45,  101 => 44,  99 => 43,  97 => 42,  95 => 41,  93 => 40,  85 => 34,  83 => 32,  78 => 30,  70 => 25,  62 => 20,  58 => 19,  52 => 16,  48 => 15,  44 => 14,  39 => 13,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for a 'form' element.
 *
 * Available variables
 * - attributes: A list of HTML attributes for the wrapper element.
 * - children: The child elements of the form.
 *
 * @see template_preprocess_form()
 */
#}
<form{{ attributes.setAttribute('role', 'form').addClass('good-habits-form') }}>
  {{ element.form_token }}
  {{ element.form_build_id }}
  {{ element.form_id }}

  <div>
    <h1>{{ \"Comparte tu Buena Práctica o Herramienta Digital\"|t }}</h1>
    <p>{{ \"Si tienes una solución innovadora o una práctica ejemplar que ha mejorado la gobernanza en tu comunidad o organización, compártela aquí. Ayuda a inspirar y capacitar a otros con tu experiencia.\"|t }}</p>
  </div>

  <div class=\"form-disposition\">
    <div>
      {{ element.field_gh_cover_image }}

      <div class=\"info-img-banner\">
          <i class=\"fa-solid fa-circle-info\"></i>
          <div>
            <h5>{{ \"Instrucciones para cargar imagen\"|t }}</h5>
            <p>
              {{
                \"Al enviar imágenes, asegúrate de que estén en los formatos JPEG o PNG, y que no excedan los 60MB. Las dimensiones deben estar entre 1080x1080 píxeles (mínimo) y 1080x1080 píxeles (máximo), con una resolución de al menos 72 DPI.\"|t
              }}
            </p>
          </div>
      </div>

      <div>
        <h2>{{ \"Datos de la buena práctica\" | t }}
        {{- element.field_gh_type -}}
        {{- element.title -}}
        {{- element.field_gh_support_text -}}
        {{- element.field_gh_context_summary -}}
        {{- element.field_gh_description -}}
      </div>
      
      <div class=\"field-spacer\">
        <div class=\"border-card\">
          <div class=\"optional-field-title\">
            <h3>{{ \"Resultados\"|t }}</h3>
            <span>{{ \"(Opcional)\"|t }}</span>
          </div>
          <ul>
            <li>{{- \"Explicar los impactos positivos de la práctica, cambios o mejoras logrados.\"|t -}}</li>
            <li>{{- \"Dar cuenta de los resultados verificables, cómo se verifican y miden los resultados.\"|t -}}</li>
          </ul>
          {{ element.field_gh_results }}
        </div>

        <div class=\"border-card\">
          <h3 class=\"card-title\">{{ \"Lecciones aprendidas\"|t }}</h3><span class=\"required-field\"></span>
          <ul>
            <li>{{- \"Cómo se asegura la permanencia en el tiempo (Sostenibilidad) (desde el punto de vista financiero, económico, social, cultural medo ambiental \"|t -}}</li>
            <li>{{- \"Que aprendizajes se tuvieron de la práctica\"|t -}}</li>
          </ul>
          <p class=\"alt-label\">{{- \"Cuéntanos lo que aprendiste\"|t -}}</p>
          {{ element.field_gh_learnings }}
        </div>

        <div class=\"border-card\">
          <h3 class=\"card-title\">{{- \"Sección de Involucrados\"|t -}}</h3><span class=\"required-field\"></span>
          <p>{{ \"Menciona a las personas, organizaciones o comunidades que colaboraron en esta iniciativa.\"|t }}</p>
          {{ element.field_actor_partner }}
        </div>

        <div class=\"border-card\">
          <h3 class=\"card-title\">{{- \"Puntos de contacto\"|t -}}</h3><span class=\"required-field\"></span>
          <hr />
          {{ element.field_gh_contact_points }}
        </div>

        <div class=\"border-card\">
          <h3 class=\"card-title\">{{- \"Resumen de plan de despliegue y/o metodología\"|t -}}</h3><span class=\"required-field\"></span>
          <ul>
            <li>{{- \"Cómo puede replicarse y adaptarse la Buena Práctica o Herramienta Digital y explicar la metodología.\"|t -}}</li>
          </ul>
          <hr />
          {{- element.field_gh_deployment_plan -}}
        </div>

        <div class=\"border-card\">
            <h3 class=\"card-title\">{{ \"Etiquetas relacionadas\"|t }}</h3><span class=\"required-field\"></span>
            <hr />
            {{- element.field_gh_tags -}}
        </div>

        <div class=\"border-card\">
            <h3 class=\"card-title\">{{ \"Pais\"|t }}</h3><span class=\"required-field\"></span>
            <hr />
            {{- element.field_gh_country -}}
        </div>

        <div class=\"border-card\">
          <h3 class=\"card-title\">{{ \"Tus dados\"|t }}</h3><span class=\"required-field\"></span>
          <hr />
          <div class=\"grid-form\">
            {{- element.field_gh_author_name -}}
            {{- element.field_gh_author_nickname -}}
            {{- element.field_gh_author_phone -}}
            {{- element.field_gh_author_email -}}
          </div>
        </div>

        <div class=\"border-card\">
          <h3 class=\"card-title\">{{- \"Galería de imágenes\"|t -}}</h3><span class=\"required-field\"></span>
          <p>{{ \"Para garantizar la mejor calidad visual y una interfaz coherente, cada galería debe contener un mínimo de 3 fotos y un máximo de 5 fotos, todas con una resolución de 1080 píxeles por 1080 píxeles.\"|t }}</p>
          <hr />
          {{ element.field_gh_image_roll }}
        </div>

        <div class=\"border-card\">
          <h3 class=\"card-title\">{{ \"Envíe su archivo en documento PDF\"|t }}</h3>
          <hr />
            {{- element.field_gh_pdf_file -}}
        </div>

        {{dump()}}
        {{- element.actions -}}
      </div>
    </div>
    <div class=\"border-card\">
      <h3 class=\"card-title\">{{ \"ACCIONES\"|t }}</h3>
      <p>{{ \"Debe completar todos los campos obligatorios para poder enviarlo para su aprobación.\"|t }}</p>
      <hr />
      {{- element.field_gh_thematic_category -}}
      {{- element.field_gh_privacy_policy -}}
      {{- element.field_gh_authors_right -}}
    </div>
  </div>
</form>", "themes/goblac_adaptive/templates/form/form--node-good-habits-form.html.twig", "/var/www/html/web/themes/goblac_adaptive/templates/form/form--node-good-habits-form.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 13, "t" => 19);
        static $functions = array("dump" => 128);

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 't'],
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