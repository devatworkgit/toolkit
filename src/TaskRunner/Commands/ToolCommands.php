<?php

declare(strict_types = 1);

namespace EcEuropa\Toolkit\TaskRunner\Commands;

use Symfony\Component\Console\Input\InputOption;
use OpenEuropa\TaskRunner\Commands\AbstractCommands;

/**
 * Generic tools.
 */
class ToolCommands extends AbstractCommands {

  /**
   * Disable aggregation and clear cache.
   *
   * @command toolkit:disable-drupal-cache
   *
   * @return \Robo\Collection\CollectionBuilder
   *   Collection builder.
   */
  public function disableDrupalCache() {
    $tasks = [];

    $tasks[] = $this->taskExecStack()
      ->stopOnFail()
      ->exec('./vendor/bin/drush -y config-set system.performance css.preprocess 0')
      ->exec('./vendor/bin/drush -y config-set system.performance js.preprocess 0')
      ->exec('./vendor/bin/drush cache:rebuild');

    // Build and return task collection.
    return $this->collectionBuilder()->addTaskList($tasks);
  }

  /**
   * Display toolkit notifications.
   *
   * @command toolkit:notifications
   *
   * @return \Robo\Collection\CollectionBuilder
   *   Collection builder.
   * @option endpoint-url The endpoint for the notifications
   */
  public function displayNotifications(array $options = [
    'endpoint-url' => InputOption::VALUE_OPTIONAL,
  ]) {
    $endpointUrl = isset($options['endpoint-url']) ? $options['endpoint-url'] : 'https://webgate.acceptance.ec.europa.eu/fpfis/qa/api/v1/notifications';

    if (isset($endpointUrl)) {
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $endpointUrl);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      $result = curl_exec($ch);
  
      // If request did not fail.
      if ($result !== false) {
        // Request was ok? check response code.
        $statusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        if ($statusCode == 200) {
          $data = json_decode($result, true);
          foreach ($data as $notification) {
            $this->io()->warning($notification['notification']);
          }
        }
        else {
          $this->io()->error(sprintf('Curl request failed with error code %d. Skipping notification fetching.', $statusCode));
        }
      }
      curl_close($ch);
    }//end if
  }

}
