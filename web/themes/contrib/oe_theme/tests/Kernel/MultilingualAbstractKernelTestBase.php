<?php

declare(strict_types = 1);

namespace Drupal\Tests\oe_theme\Kernel;

use Drupal\KernelTests\KernelTestBase;

/**
 * Base class for multilingual tests.
 */
abstract class MultilingualAbstractKernelTestBase extends KernelTestBase {

  /**
   * Modules to enable.
   *
   * @var array
   */
  public static $modules = [
    'content_translation',
    'locale',
    'language',
    'oe_multilingual',
    'oe_multilingual_demo',
    'system',
    'user',
    'ui_patterns',
    'ui_patterns_library',
    'oe_theme_helper',
    'image',
    'breakpoint',
    'responsive_image',
  ];

  /**
   * {@inheritdoc}
   */
  protected function setUp() {
    parent::setUp();

    $this->installEntitySchema('user');
    $this->installSchema('system', 'sequences');
    $this->installSchema('locale', [
      'locales_location',
      'locales_source',
      'locales_target',
    ]);

    $this->installConfig([
      'locale',
      'language',
      'content_translation',
      'oe_multilingual',
      'image',
      'responsive_image',
    ]);

    $this->container->get('theme_installer')->install(['oe_theme']);
    $this->container->get('theme_handler')->setDefault('oe_theme');
    $this->container->set('theme.registry', NULL);

    $this->container->get('module_handler')->loadInclude('oe_multilingual', 'install');
    oe_multilingual_install();

    // Rebuild the container in order to make sure tests pass.
    // @todo: fix test setup so that we can get rid of this line.
    $this->container->get('kernel')->rebuildContainer();

    // Call the install hook of the User module which creates the Anonymous user
    // and User 1. This is needed because the Anonymous user is loaded to
    // provide the current User context which is needed in places like route
    // enhancers.
    // @see CurrentUserContext::getRuntimeContexts().
    // @see EntityConverter::convert().
    module_load_include('install', 'user');
    user_install();
  }

}
