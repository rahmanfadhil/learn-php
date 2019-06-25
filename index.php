<?php
  define('NAME', "Fadhil");
  $age = 15;

  session_start();

  if ($_SERVER['QUERY_STRING'] == 'noname') {
    unset($_SESSION['name']);
  }

  // Get session
  $name = $_SESSION['name'] ?? 'blahblah';

  // Get cookie
  $gender = $_COOKIE['gender'] ?? 'Unknown';

?>

<!DOCTYPE html>
<html>
<head>
  <title>Learn PHP</title>
</head>
<body>
  <h1>Hello, <?php echo NAME ?>!</h1>
  <p>You are <?php echo $age ?> years old</p>
  <p>Session name: <?= $name ?></p>
  <p>Cookie gender: <?= $gender ?></p>
</body>
</html>