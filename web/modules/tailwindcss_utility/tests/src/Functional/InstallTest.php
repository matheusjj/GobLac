<?php declare(strict_types = 1);

namespace Drupal\Tests\tailwindcss_utility\Functional;

use Drupal\Core\Url;
use Drupal\Tests\BrowserTestBase;

/**
 * Test installation of tailwindcss_utility.
 *
 * @group tailwindcss_utility
 */
final class InstallTest extends BrowserTestBase {

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * {@inheritdoc}
   */
  protected static $modules = [
    'tailwindcss_utility',
    'test_tailwindcss_utility',
  ];

  /**
   * Test module setup.
   */
  public function testTailwind(): void {
    $rules_storage = \Drupal::service('tailwindcss_utility.rule_storage_factory')->get('database');
    $rules_storage->addRule('m-2', [['rule' => '.m-2 {margin: 0.5rem;}']]);
    $raw = $this->drupalGet(Url::fromRoute('test_tailwindcss_utility.tailwind'));
    $assert = $this->assertSession();
    $assert->statusCodeEquals(200);
    $assert->elementExists('xpath', '//h1[text() = "Tailwind"]');
    $this->assertStringContainsString("<style>.m-2 {margin: 0.5rem;}\n</style>", $raw);
  }

}
