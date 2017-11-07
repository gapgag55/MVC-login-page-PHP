<?php 

class Users {
  public static $users = [
    array(
      'username' => 'admin',
      'password' => '123',
      'email'    => 'admin@gmail.com'
    ),
    array(
      'username' => 'user',
      'password' => '456',
      'email'    => 'user@gmail.com'
    ),
    array(
      'username' => 'sale',
      'password' => '789',
      'email'    => 'sale@gmail.com'
    )
  ];
  
  public function add($user, $pass, $email) {
    if ( !$this->isExists() ) {
      $user = array(
        'username' => $user,
        'password' => $pass,
        'email'    => $email
      );
      array_push(self::$users, $user);
      return true;
    }

    return false;
  }

  public function login($user, $pass) {
    session_start();

    foreach( self::$users as $person ) {
      if ( $person['username'] == $user && $person['password'] == $pass ) {
       return $_SESSION['username'] = $user;
      }
    }

    session_destroy();
    return false;
  }

  public function isExists() {
    foreach( self::$users as $person ) {
      if ( $person['username'] == $user ) {
        return true;
      }
    }

    return false;
  }

  public function isAuthenticated() {
    session_start();
    return $_SESSION['username'];
  }
} 