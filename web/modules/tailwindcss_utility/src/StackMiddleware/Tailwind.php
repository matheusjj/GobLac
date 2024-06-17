<?php

declare(strict_types=1);

namespace Drupal\tailwindcss_utility\StackMiddleware;

use Drupal\Core\Render\HtmlResponse;
use Drupal\Core\Site\Settings;
use Drupal\tailwindcss_utility\RuleStorage;
use Drupal\tailwindcss_utility\TailwindJsHandler;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\HttpKernelInterface;

/**
 * Executes the page caching before the main kernel takes over the request.
 *
 * @phpstan-ignore-next-line
 *
 * This class should be extendable.
 */
class Tailwind implements HttpKernelInterface {

  /**
   * The wrapped HTTP kernel.
   *
   */
  protected HttpKernelInterface $httpKernel;

  /**
   * The tailwindcss_utility logger channel.
   */
  protected LoggerInterface $logger;

  /**
   * Tailwind rule storage service.
   */
  protected RuleStorage $ruleStorage;

  /**
   * Tailwind js handler service.
   */
  protected TailwindJsHandler $tailwindJsHandler;

  /**
   * The allowed prefixes list to find tailwind classes.
   *
   */
  public const PREFIX_ALLOW_LIST = <<<'EOF'
absolute
accent
align
animate
antialiased
appearance
aspect
auto
backdrop
basis
bg
block
blur
border
bottom
box
break
brightness
capitalize
caret
clear
col
columns
content
contents
contrast
cursor
decoration
delay
diagonal
divide
drop
duration
ease
fill
filter
fixed
flex
float
flow
font
from
gap
grayscale
grid
grow
h
hidden
hue
indent
inline
inset
invert
invisible
isolate
isolation
italic
items
justify
leading
left
line
lining
list
lowercase
m
max
mb
min
mix
ml
mr
mt
mx
my
no
normal
not
object
oldstyle
opacity
order
ordinal
origin
outline
overflow
overline
overscroll
p
pb
pl
place
placeholder
pointer
pr
proportional
pt
px
py
relative
resize
right
ring
rotate
rounded
row
saturate
scale
scroll
select
self
sepia
shadow
shrink
skew
slashed
snap
space
sr
stacked
static
sticky
stroke
subpixel
table
tabular
text
to
top
touch
tracking
transform
transition
translate
truncate
underline
uppercase
via
visible
w
whitespace
will
z
EOF;

  public function __construct(
    HttpKernelInterface $http_kernel,
    LoggerInterface $logger,
    RuleStorage $rule_storage,
    TailwindJsHandler $tailwind_js_handler
  ) {
    $this->httpKernel = $http_kernel;
    $this->logger = $logger;
    $this->ruleStorage = $rule_storage;
    $this->tailwindJsHandler = $tailwind_js_handler;
  }

  /**
   * {@inheritdoc}
   */
  public function handle(Request $request, int $type = self::MAIN_REQUEST, bool $catch = true): Response {
    $response = $this->httpKernel->handle($request, $type, $catch);

    // Only handle HTML responses for now.
    // @todo What about AjaxResponse?
    if (!($response instanceof HtmlResponse)) {
      return $response;
    }

    $content = $response->getContent();
    if (!\str_contains($content, 'app--tailwind-utilities.css?tailwind-dynamic=1')) {
      return $response;
    }

    // Find all classes, including x-bind=:class or :class from Alpine.
    // See https://alpinejs.dev/directives/bind
    $pattern = '/ (class|data-class|:class|x-bind:class)="([^"]+)"/';
    \preg_match_all($pattern, $content, $matches, \PREG_SET_ORDER);

    if (empty($matches)) {
      return $response;
    }

    $classes = [];
    foreach ($matches as $match) {
      $single_classes = \explode(' ', $match[2]);
      foreach ($single_classes as $class) {
        $class = rtrim($class, "!&(){}=#',;?:");
        $class = ltrim($class, "!&(){}=#',;?1234567890");
        if (!empty($class)) {
          $classes[$class] = TRUE;
        }
      }
    }
    \ksort($classes);

    $prefixes = \array_flip(\explode("\n", self::PREFIX_ALLOW_LIST));

    // Filter classes down to a smaller set.
    $filtered_classes = [];
    foreach ($classes as $class => $status) {
      // Ignore toolbar.
      if (\str_starts_with($class, 'toolbar')) {
        continue;
      }

      // Including : or starting with - is always Tailwind.
      if (\str_contains($class, ':') || \str_starts_with($class, '-')) {
        $filtered_classes[] = $class;
        continue;
      }

      // Ensure prefix is one of the tailwind ones.
      [$prefix] = \explode('-', $class, 2);
      // @phpstan-ignore-next-line
      if (isset($prefixes[$prefix])) {
        $filtered_classes[] = $class;
      }
    }

    if (\count($filtered_classes) === 0) {
      return $response;
    }

    $tailwind_styles = $this->ruleStorage->getRules($filtered_classes);

    if (\count($tailwind_styles) === 0) {
      return $response;
    }

    $tailwind_styles = \array_values($tailwind_styles);

    // Process style rules.
    $inline_styles = [];
    foreach ($tailwind_styles as $style_items) {
      foreach ($style_items as $style_item) {
        $media = !empty($style_item['atrule']) ? $style_item['atrule'] : '0_ALL';
        $inline_styles[$media][] = $style_item['rule'];
      }
    }
    \ksort($inline_styles, \SORT_NATURAL);

    $inline_styles_str = '';
    foreach ($inline_styles as $atrule => $rules) {
      if ($atrule === '0_ALL') {
        $inline_styles_str .= \implode("\n", $rules);
        $inline_styles_str .= \PHP_EOL;
        continue;
      }

      [$prefix, $suffix] = \explode("\n", $atrule, 2);
      $inline_styles_str .= $prefix . \PHP_EOL . "  ";
      $inline_styles_str .= \implode("\n  ", $rules);
      $inline_styles_str .= $suffix . \PHP_EOL;
      $inline_styles_str .= \PHP_EOL;
    }

    $content_addition = '<style>' . $inline_styles_str . '</style>';
    // If we have missing classes, we can still support them by safelisting
    // in Tailwind js config.
    if (\count($filtered_classes) > 0) {
      $tailwind_embed = $this->tailwindJsHandler->getTailwindEmbed($filtered_classes);
      if ($tailwind_embed === '' && Settings::get('tailwind_missing_classes_warning', TRUE)) {
        $this->logger->warning('The following Tailwind classes could not be found %classes.', [
          '%classes' => \implode(', ', $filtered_classes),
        ]);
      }
      else {
        // No need to log anything, classes adder will log if rules failed
        // to generate with the current config.
        $content_addition .= $tailwind_embed;
      }
    }

    $content = \preg_replace('|<link rel="stylesheet" media="all" href=".*/app--tailwind-utilities.css\?tailwind-dynamic=1.*" />|i', $content_addition, $content);

    $response->setContent($content);

    if ($response->headers->has('Content-Length')) {
      $response->headers->set('Content-Length', (string) strlen($response->getContent()), TRUE);
    }

    return $response;
  }

  /**
   * Returns the tailwind style rules needed for the given classes.
   *
   * @param string[] $classes
   *   The classes to return the tailwind styles for.
   * @return array
   *   An array of arrays of style rule objects.
   */
  protected function getStyleRules(array &$classes): array {
    $tailwind_styles = $this->ruleStorage->getRules($classes);


    return \array_values($tailwind_styles);
  }

}
