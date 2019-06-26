<?php

  // Classes

  class User {
    private $email;
    private $name;

    public function __construct($name, $email) {
      $this->email = $email;
      $this->name = $name;
    }

    public function login() {
      echo $this->name . ' logged in!';
    }

    public function getName() {
      return $this->name;
    }

    public function setName($name) {
      if (is_string($name) && strlen($name) > 1) {
        $this->name = $name;
        return "Name has been updated to $name!";
      } else {
        return "Not a valid name!";
      }
    }
  }

  // $userOne = new User();

  // $userOne->login();
  // echo $userOne->name;

  $userOne = new User('Rahman Fadhil', 'rhmnfadhil@gmail.com');

  // echo $userOne->name;
  // echo $userOne->email;

  // $userOne->login();

  // $userOne->name = 'Blahblah';

  // echo $userOne->getName();
  // echo $userOne->setName('h');
  echo $userOne->setName('Rahman');
  echo $userOne->getName();