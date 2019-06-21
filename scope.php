<?php

  // Variable scope

  function myFunc() {
    $price = 20;
    echo $price;
  }

  // myFunc();

  function myFuncTwo($age) {
    echo $age;
  }

  // myFuncTwo(2);

  // Global variable
  $name = 'mario';

  // function sayHello() {
  //   global $name;
  //   $name = 'yoshi';
  //   echo "Hello, $name";
  // }

  // sayHello();
  // echo $name;

  function sayBye(&$name) {
    $name = 'wario';
    echo "Bye, $name";
  }

  sayBye($name);
  echo $name;