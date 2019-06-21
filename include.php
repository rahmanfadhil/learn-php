<?php

  include 'ninjas.php';
  require 'ninjas.php';

  // require 'ninjass.php'; // Throw error but keep the rest of the code running
  // include 'ninjass.php'; // Throw fatal error and break the whole app

  echo 'end of php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Learn Include & Require PHP</title>
</head>
<body>
  <?php include 'content.php'; ?>
  <?php include 'content.php'; ?>
  <?php include 'content.php'; ?>
</body>
</html>