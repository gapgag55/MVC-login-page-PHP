<?php 

class WelcomeController {
  public function index() {
    session_start();

    if ($_SESSION['username']) {
      return view('welcome');
    }

    return Redirect::to('/');
  }

  public function logout() {
    session_start();
    session_destroy();
    return Redirect::to('/');
  }
}