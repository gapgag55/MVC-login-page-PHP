<?php 

class Redirect {
  public static function to($path, $data = []) {
    header('Location: http://' . $_SERVER['HTTP_HOST'] . $path );
    exit;
  }
}