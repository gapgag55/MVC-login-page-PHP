<?php 

class WelcomeController {
  public function index() {
    session_start();

    if ($_SESSION['username']) {
      return view('welcome');
    }

    return Redirect::to('/');
  }
}