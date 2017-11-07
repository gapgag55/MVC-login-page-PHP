<?php 

class Route {
  public static function get( $path, $location ) {
    if ($_SERVER['REQUEST_METHOD'] == 'GET' && $_SERVER['REQUEST_URI'] == $path) {
      $cluster    = explode('@', $location);
      $controller = $cluster[0];
      $function   = $cluster[1];
  
      (new $controller)->$function();
      return;
    }
  }

  public static function post( $path, $location ) {
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_SERVER['REQUEST_URI'] == $path) {
      $cluster    = explode('@', $location);
      $controller = $cluster[0];
      $function   = $cluster[1];
  
      (new $controller)->$function();
      return;
    }
  }

  public static function any( $path, $location ) {
    $cluster    = explode('@', $location);
    $controller = $cluster[0];
    $function   = $cluster[1];

    (new $controller)->$function();
  }

}