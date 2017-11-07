<?php 

class RegisterController {
  public function index() {
    session_start();
    $data = [];

    if ($_SESSION['error']) {
      $data = array('error' => $_SESSION['error']);
    }

    view('signup', $data);

    session_destroy();
  }

  public function signup() {
    session_start();

    $user  = $_POST['usernamesignup'];
    $email = $_POST['emailsignup'];
    $pass  = $_POST['passwordsignup'];
    $cpass = $_POST['passwordsignup_confirm'];

    if ( $pass == $cpass ) {
      if ( (new Users())->add($user, $pass, $email) ) {
        $_SESSION['username'] = $user;
        $_SESSION['email'] = $email;
        return Redirect::to('/thankyou');
      }

      $_SESSION['error'] = 'Username has been used!';
      return Redirect::to('/signup');
    }

    echo '<script>';
      echo 'alert(\'Password does not matched\');';
      echo 'history.go(-1);';
    echo '</script>';
  }

  public function thankyou() {
    session_start();

    $user  = $_SESSION['username'];
    $email = $_SESSION['email'];

    view('thankyou', 
      array('username' => $user, 'email' => $email)
    );
  }
}