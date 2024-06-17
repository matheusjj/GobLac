<?php

declare(strict_types=1);

namespace Drupal\tailwindcss_utility;

use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\File\FileSystemInterface;
use Drupal\Core\File\FileUrlGeneratorInterface;
use Drupal\Core\Session\AccountProxyInterface;
use Drupal\Core\Site\Settings;
use Drupal\file\FileRepositoryInterface;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\GuzzleException;
use Psr\Log\LoggerInterface;

final class TailwindJsHandler {

  public const CDN_ENABLE_SETTING_NAME = 'tailwindcss_utility_include_cdn';

  /**
   * Adding $settings['tailwindcss_utility_developer_mode'] = TRUE;
   * will always load locally hosted Tailwind js.
   */
  public const DEVELOPER_MODE = 'tailwindcss_utility_developer_mode';
  private const CDN_URL_SETTING = 'tailwindcss_utility_cdn_url';
  private const LOCAL_CONFIG_PATH_SETTING = 'tailwind_local_config_path';

  private const LIBRARY_NAME = 'tailwindcss.cdn';
  private const TAILWIND_JS_FILE_URI = 'public://tailwindcss_utility/tailwind.js';
  private const TAILWIND_CDN_URL = 'https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp';

  private FileUrlGeneratorInterface $fileUrlGenerator;
  private FileRepositoryInterface $fileRepository;
  private FileSystemInterface $fileSystem;
  private ClientInterface $httpClient;
  private EntityTypeManagerInterface $entityTypeManager;
  private AccountProxyInterface $currentUser;
  private LoggerInterface $logger;

  public function __construct(
    FileUrlGeneratorInterface $file_url_generator,
    FileRepositoryInterface $file_repository,
    FileSystemInterface $file_system,
    ClientInterface $http_client,
    EntityTypeManagerInterface $entity_type_manager,
    AccountProxyInterface $current_user,
    LoggerInterface $logger
  ) {
    $this->fileUrlGenerator = $file_url_generator;
    $this->fileRepository = $file_repository;
    $this->fileSystem = $file_system;
    $this->httpClient = $http_client;
    $this->entityTypeManager = $entity_type_manager;
    $this->currentUser = $current_user;
    $this->logger = $logger;
  }

  public function deleteTailwindJs(): void {
    $files = $this->entityTypeManager->getStorage('file')->loadByProperties(['uri' => self::TAILWIND_JS_FILE_URI]);
    if (\count($files) > 0) {
      $file = \reset($files);
      $file->delete();
    }
    if (\file_exists(self::TAILWIND_JS_FILE_URI)) {
      $this->fileSystem->unlink(self::TAILWIND_JS_FILE_URI);
    }
  }

  public function fetchTailwindJs(): bool {
    // Do nothing if we don't want to use the Tailwind js.
    if (Settings::get(self::CDN_ENABLE_SETTING_NAME, FALSE) === FALSE) {
      return FALSE;
    }

    $files = $this->entityTypeManager->getStorage('file')->loadByProperties(['uri' => self::TAILWIND_JS_FILE_URI]);
    if ((\count($files) > 0) && \file_exists(self::TAILWIND_JS_FILE_URI)) {
      return TRUE;
    }

    $directory = \substr(self::TAILWIND_JS_FILE_URI, 0, \strrpos(self::TAILWIND_JS_FILE_URI, '/'));
    if (!$this->fileSystem->prepareDirectory($directory, FileSystemInterface::CREATE_DIRECTORY | FileSystemInterface::MODIFY_PERMISSIONS)) {
      $this->logger->error('Unable to prepare directory %directory for Tailwind JS file.', [
        '%directory' => $directory,
      ]);
      return FALSE;
    }
    try {
      $response = $this->httpClient->request('GET', $this->getTailwindCdnUrl());
    }
    catch (GuzzleException $e) {
      $this->logger->error('An error occurred while fetching Tailwind JS from CDN: %error', [
        '%error' => $e->getMessage(),
      ]);
      return FALSE;
    }
    if ($response->getStatusCode() !== 200) {
      $this->logger->error('An error occurred while fetching Tailwind JS from CDN (response code %code) (error %message).', [
        '%code' => $response->getStatusCode(),
        '%message' => $response->getBody()->getContents(),
      ]);
      return FALSE;
    }

    $js_contents = $response->getBody()->getContents();
    $file = $this->fileRepository->writeData($js_contents, self::TAILWIND_JS_FILE_URI, FileSystemInterface::EXISTS_REPLACE);
    $file->setPermanent();
    $file->save();

    return TRUE;
  }

  /**
   * Get Tailwind js embed script with optional safelisted classes.
   *
   * @param string[] $classes
   */
  public function getTailwindEmbed(array $classes = []): string {
    $embed = '';

    // Exit early when in developer mode as full js is loaded on every page
    // anyway.
    if (Settings::get(self::DEVELOPER_MODE, FALSE) === TRUE) {
      return $embed;
    }

    // Just to be safe as the local file is refreshed on every cache rebuild.
    if ($this->fetchTailwindJs()) {
      // Self-hostewd Tailwind CDN js.
      $embed = '<script src="' . $this->fileUrlGenerator->generateString(self::TAILWIND_JS_FILE_URI) . '"></script>';

      // Local Tailwind settings, if exists.
      $local_config_path = Settings::get(self::LOCAL_CONFIG_PATH_SETTING, FALSE);
      $add_to_config = FALSE;
      if ($local_config_path !== FALSE && \file_exists(DRUPAL_ROOT . '/' . $local_config_path)) {
        $add_to_config = TRUE;
        $embed .= '<script src="/' . $local_config_path . '"></script>';
      }

      if (count($classes) > 0) {
        $classes = array_values($classes);
        $encoded_classes = json_encode($classes);
        if ($add_to_config) {
          $embed .= "<script>tailwind.config.safelist = tailwind.config.safelist.concat($encoded_classes);</script>";
        }
        else {
          $config = [
            'content' => [],
            'safelist' => $classes,
            'corePlugins' => [
              'preflight' => FALSE,
            ],
          ];

          $embed .= '<script>tailwind.config=' . json_encode($config) . '</script>';
        }

        // Add missing classes to DrupalSettings to allow lookup.
        if ($this->currentUser->hasPermission('access tailwindcss_utility endpoint')) {
          $embed .= "<script>var tailwindcss_utility_missing_classes=$encoded_classes;</script>";
        }
      }
    }

    return $embed;
  }

  /**
   * @return mixed[]
   *   Array defining a library or NULL if an error occurred.
   *   @see hook_library_info_build()
   */
  public function getLibrary(): array {
    if (!$this->fetchTailwindJs()) {
      return [];
    }

    return [
      self::LIBRARY_NAME => [
        'js' => [
          self::TAILWIND_JS_FILE_URI => [],
        ],
      ],
    ];
  }

  /**
   * @param mixed[] $attachments
   */
  public function addPageAttachments(array &$attachments): void {
    if ($this->currentUser->hasPermission('access tailwindcss_utility endpoint')) {
      $attachments['#attached']['library'][] = 'tailwindcss_utility/RuleFinder';
    }

    if (Settings::get(self::DEVELOPER_MODE, FALSE) === FALSE) {
      return;
    }

    if (!$this->fetchTailwindJs()) {
      return;
    }

    $attachments['#attached']['library'][] = 'tailwindcss_utility/' . self::LIBRARY_NAME;
  }

  private function getTailwindCdnUrl(): string {
    return Settings::get(self::CDN_URL_SETTING, self::TAILWIND_CDN_URL);
  }

}
