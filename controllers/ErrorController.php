<?php 

class ErrorController {
  public function notFoud() {
    session_start();
    
    if ($_SESSION['username']) {
      return Redirect::to('/welcome');
    }

    return Redirect::to('/welcome');
  }
}