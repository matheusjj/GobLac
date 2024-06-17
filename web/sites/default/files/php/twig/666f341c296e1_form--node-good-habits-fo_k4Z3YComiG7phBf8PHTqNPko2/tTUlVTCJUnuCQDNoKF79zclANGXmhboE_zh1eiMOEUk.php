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
        echo "</h2>";
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
      
      <div class=\"border-card\">
        <div class=\"optional-field-title\">
          <h3>";
        // line 50
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Resultados"));
        echo "</h3>
          <span>";
        // line 51
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("(Opcional)"));
        echo "</span>
        </div>
        <ul>
          <li>";
        // line 54
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Explicar los impactos positivos de la práctica, cambios o mejoras logrados."));
        echo "</li>
          <li>";
        // line 55
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Dar cuenta de los resultados verificables, cómo se verifican y miden los resultados."));
        echo "</li>
        </ul>
        ";
        // line 57
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "field_gh_results", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
        echo "
      </div>

      <div class=\"border-card\">
        <h3 class=\"card-title\">";
        // line 61
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Lecciones aprendidas"));
        echo "</h3>
        <ul>
          <li>";
        // line 63
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Cómo se asegura la permanencia en el tiempo (Sostenibilidad) (desde el punto de vista financiero, económico, social, cultural medo ambiental "));
        echo "</li>
          <li>";
        // line 64
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Que aprendizajes se tuvieron de la práctica"));
        echo "</li>
        </ul>
        <p class=\"alt-label\">";
        // line 66
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Cuéntanos lo que aprendiste"));
        echo "</p>
        ";
        // line 67
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "field_gh_learnings", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
        echo "
      </div>

      <div class=\"border-card\">
        <h3 class=\"card-title\">";
        // line 71
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Sección de Involucrados"));
        echo "</h3>
        <p>";
        // line 72
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Menciona a las personas, organizaciones o comunidades que colaboraron en esta iniciativa."));
        echo "</p>
        ";
        // line 73
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "field_actor_partner", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
        echo "
      </div>

      <div class=\"border-card\">
        <h3 class=\"card-title\">";
        // line 77
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Puntos de contacto"));
        echo "</h3>
        <hr />
        ";
        // line 79
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "field_gh_contact_points", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
        echo "
      </div>

      <div class=\"border-card\">
        <h3 class=\"card-title\">";
        // line 83
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Resumen de plan de despliegue y/o metodología"));
        echo "</h3>
        <ul>
          <li>";
        // line 85
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Cómo puede replicarse y adaptarse la Buena Práctica o Herramienta Digital y explicar la metodología."));
        echo "</li>
        </ul>
        <hr />";
        // line 88
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "field_gh_deployment_plan", [], "any", false, false, true, 88), 88, $this->source), "html", null, true);
        // line 89
        echo "</div>

      <div class=\"border-card\">
          <h3 class=\"card-title\">";
        // line 92
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Etiquetas relacionadas"));
        echo "</h3>
          <hr />";
        // line 94
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "field_gh_tags", [], "any", false, false, true, 94), 94, $this->source), "html", null, true);
        // line 95
        echo "</div>

      <div class=\"border-card\">
          <h3 class=\"card-title\">";
        // line 98
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Pais"));
        echo "</h3>
          <hr />";
        // line 100
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "field_gh_country", [], "any", false, false, true, 100), 100, $this->source), "html", null, true);
        // line 101
        echo "</div>

      <div class=\"border-card\">
        <h3 class=\"card-title\">";
        // line 104
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Tus dados"));
        echo "</h3>
        <hr />
        <div class=\"grid-form\">";
        // line 107
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "field_gh_author_name", [], "any", false, false, true, 107), 107, $this->source), "html", null, true);
        // line 108
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "field_gh_author_nickname", [], "any", false, false, true, 108), 108, $this->source), "html", null, true);
        // line 109
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "field_gh_author_phone", [], "any", false, false, true, 109), 109, $this->source), "html", null, true);
        // line 110
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "field_gh_author_email", [], "any", false, false, true, 110), 110, $this->source), "html", null, true);
        // line 111
        echo "</div>
      </div>

      <div class=\"border-card\">
        <h3 class=\"card-title\">";
        // line 115
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Galería de imágenes"));
        echo "</h3>
        <p>";
        // line 116
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Para garantizar la mejor calidad visual y una interfaz coherente, cada galería debe contener un mínimo de 3 fotos y un máximo de 5 fotos, todas con una resolución de 1080 píxeles por 1080 píxeles."));
        echo "</p>
        <hr />
        ";
        // line 118
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "field_gh_image_roll", [], "any", false, false, true, 118), 118, $this->source), "html", null, true);
        echo "
      </div>

      <div class=\"border-card\">
        <h3 class=\"card-title\">";
        // line 122
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Envíe su archivo en documento PDF"));
        echo "</h3>
        <hr />";
        // line 124
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "field_gh_pdf_file", [], "any", false, false, true, 124), 124, $this->source), "html", null, true);
        // line 125
        echo "</div>

      ";
        // line 127
        if (twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "captcha", [], "any", false, false, true, 127)) {
            // line 128
            echo "        <div class=\"border-card\">
          <h3 class=\"card-title\">";
            // line 129
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Captcha"));
            echo "</h3>
          <hr />";
            // line 131
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "captcha", [], "any", false, false, true, 131), 131, $this->source), "html", null, true);
            // line 132
            echo "</div>
      ";
        }
        // line 135
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "actions", [], "any", false, false, true, 135), 135, $this->source), "html", null, true);
        // line 136
        echo "</div>
    <div class=\"border-card\">
      <h3 class=\"card-title\">";
        // line 138
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("ACCIONES"));
        echo "</h3>
      <p>";
        // line 139
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Debe completar todos los campos obligatorios para poder enviarlo para su aprobación."));
        echo "</p>
      <hr />";
        // line 141
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "field_gh_thematic_category", [], "any", false, false, true, 141), 141, $this->source), "html", null, true);
        // line 142
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "field_gh_privacy_policy", [], "any", false, false, true, 142), 142, $this->source), "html", null, true);
        // line 143
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "field_gh_authors_right", [], "any", false, false, true, 143), 143, $this->source), "html", null, true);
        // line 144
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
        return array (  309 => 144,  307 => 143,  305 => 142,  303 => 141,  299 => 139,  295 => 138,  291 => 136,  289 => 135,  285 => 132,  283 => 131,  279 => 129,  276 => 128,  274 => 127,  270 => 125,  268 => 124,  264 => 122,  257 => 118,  252 => 116,  248 => 115,  242 => 111,  240 => 110,  238 => 109,  236 => 108,  234 => 107,  229 => 104,  224 => 101,  222 => 100,  218 => 98,  213 => 95,  211 => 94,  207 => 92,  202 => 89,  200 => 88,  195 => 85,  190 => 83,  183 => 79,  178 => 77,  171 => 73,  167 => 72,  163 => 71,  156 => 67,  152 => 66,  147 => 64,  143 => 63,  138 => 61,  131 => 57,  126 => 55,  122 => 54,  116 => 51,  112 => 50,  106 => 46,  104 => 45,  102 => 44,  100 => 43,  98 => 42,  96 => 41,  93 => 40,  85 => 34,  83 => 32,  78 => 30,  70 => 25,  62 => 20,  58 => 19,  52 => 16,  48 => 15,  44 => 14,  39 => 13,);
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
        <h2>{{ \"Datos de la buena práctica\" | t }}</h2>
        {{- element.field_gh_type -}}
        {{- element.title -}}
        {{- element.field_gh_support_text -}}
        {{- element.field_gh_context_summary -}}
        {{- element.field_gh_description -}}
      </div>
      
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
        <h3 class=\"card-title\">{{ \"Lecciones aprendidas\"|t }}</h3>
        <ul>
          <li>{{- \"Cómo se asegura la permanencia en el tiempo (Sostenibilidad) (desde el punto de vista financiero, económico, social, cultural medo ambiental \"|t -}}</li>
          <li>{{- \"Que aprendizajes se tuvieron de la práctica\"|t -}}</li>
        </ul>
        <p class=\"alt-label\">{{- \"Cuéntanos lo que aprendiste\"|t -}}</p>
        {{ element.field_gh_learnings }}
      </div>

      <div class=\"border-card\">
        <h3 class=\"card-title\">{{- \"Sección de Involucrados\"|t -}}</h3>
        <p>{{ \"Menciona a las personas, organizaciones o comunidades que colaboraron en esta iniciativa.\"|t }}</p>
        {{ element.field_actor_partner }}
      </div>

      <div class=\"border-card\">
        <h3 class=\"card-title\">{{- \"Puntos de contacto\"|t -}}</h3>
        <hr />
        {{ element.field_gh_contact_points }}
      </div>

      <div class=\"border-card\">
        <h3 class=\"card-title\">{{- \"Resumen de plan de despliegue y/o metodología\"|t -}}</h3>
        <ul>
          <li>{{- \"Cómo puede replicarse y adaptarse la Buena Práctica o Herramienta Digital y explicar la metodología.\"|t -}}</li>
        </ul>
        <hr />
        {{- element.field_gh_deployment_plan -}}
      </div>

      <div class=\"border-card\">
          <h3 class=\"card-title\">{{ \"Etiquetas relacionadas\"|t }}</h3>
          <hr />
          {{- element.field_gh_tags -}}
      </div>

      <div class=\"border-card\">
          <h3 class=\"card-title\">{{ \"Pais\"|t }}</h3>
          <hr />
          {{- element.field_gh_country -}}
      </div>

      <div class=\"border-card\">
        <h3 class=\"card-title\">{{ \"Tus dados\"|t }}</h3>
        <hr />
        <div class=\"grid-form\">
          {{- element.field_gh_author_name -}}
          {{- element.field_gh_author_nickname -}}
          {{- element.field_gh_author_phone -}}
          {{- element.field_gh_author_email -}}
        </div>
      </div>

      <div class=\"border-card\">
        <h3 class=\"card-title\">{{- \"Galería de imágenes\"|t -}}</h3>
        <p>{{ \"Para garantizar la mejor calidad visual y una interfaz coherente, cada galería debe contener un mínimo de 3 fotos y un máximo de 5 fotos, todas con una resolución de 1080 píxeles por 1080 píxeles.\"|t }}</p>
        <hr />
        {{ element.field_gh_image_roll }}
      </div>

      <div class=\"border-card\">
        <h3 class=\"card-title\">{{ \"Envíe su archivo en documento PDF\"|t }}</h3>
        <hr />
          {{- element.field_gh_pdf_file -}}
      </div>

      {% if element.captcha %}
        <div class=\"border-card\">
          <h3 class=\"card-title\">{{ \"Captcha\"|t }}</h3>
          <hr />
            {{- element.captcha -}}
        </div>
      {% endif %}

      {{- element.actions -}}
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
        static $tags = array("if" => 127);
        static $filters = array("escape" => 13, "t" => 19);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't'],
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
