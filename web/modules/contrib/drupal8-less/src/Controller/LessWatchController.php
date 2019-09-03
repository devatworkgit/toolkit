<?php

namespace Drupal\less\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Component\Utility\UrlHelper;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class LessWatchController extends ControllerBase {
  
  /**
   * Callback for `my-api/post.json` API method.
   */
  public function _less_watch( Request $request ) {
    // This condition checks the `Content-type` and makes sure to 
    // decode JSON string from the request body into array.
    if ( 0 === strpos( $request->headers->get( 'Content-Type' ), 'application/json' ) ) {
      $data = json_decode( $request->getContent(), TRUE );
      $request->request->replace( is_array( $data ) ? $data : [] );
    }
    
    $changed_files = array();
    
    /** @var \Drupal\Core\Config\Config $config */
    $config = \Drupal::service('config.factory')->get('less.settings');
  
    if ($config->get('developer_options.watch')) {
      $files = (isset($_POST['less_files']) && is_array($_POST['less_files'])) ? $_POST['less_files'] : array();
      
      foreach ($files as $file) {
        
        $file_url_parts = UrlHelper::parse($file);
        
        
        if ($map = \Drupal::state()->get('less_css_cache_files')) {
          
          foreach ($map as $key => $compiled_file) {
            
            if ($file_url_parts['path'] == "/" . $compiled_file['destination_file_path']) {

              $current_style = $compiled_file['computed_style'];
              
              global $base_url;
              if (!empty($key) && $computed_style = file_get_contents($base_url . "/" . $compiled_file['destination_file_path'])) {
                $new_style = $computed_style;
                
                $map = \Drupal::state()->get('less_css_cache_files');
                $compiled_file = $map[$key];
              }
              if($current_style!= $new_style) {
                $changed_files[] = array(
                  'old_file' => $file_url_parts['path'],
                  'new_file' => "/" . $compiled_file['destination_file_path']
                );
              }
            }
          }
        }
      }
    }
    return new JsonResponse($changed_files);
  }
}