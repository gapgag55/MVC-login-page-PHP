<?php 

class LoginController {
  public function index () {
    session_start();
    
    view('index');
  }

  public function login() {
    session_start();
    ob_start();

    $user = $_POST['username'];
    $pass = $_POST['password'];

    Users::login($user, $pass);
    
    $data = array(
      'username' => $USER,
      'authenticated' => 
        (new Users())->isAuthenticated()
    );

    view('login', $data);
  }
}