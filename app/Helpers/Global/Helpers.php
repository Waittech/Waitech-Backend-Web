<?php

if (! function_exists('include_route_files')) {
  /**
   * Loops through a folder and requires all PHP files
   * Searches sub-directories as well.
   *
   * @param $folder
   */
  function include_route_files($folder)
  {
    try {
      $rdi = new RecursiveDirectoryIterator($folder);
      $it  = new RecursiveIteratorIterator($rdi);

      while ($it->valid()) {
        if (! $it->isDot() && $it->isFile() && $it->isReadable() && $it->current()->getExtension() === 'php') {
          require $it->key();
        }

        $it->next();
      }
    } catch (Exception $e) {
      echo $e->getMessage();
    }
  }
}

if (! function_exists('additional_json_success_arr')) {
  function additional_json_success_arr()
  {
    return ['success' => true, 'message' => null, 'code' => 200];
  }
}
