<?php

  $score = 50;

  // if ($score > 40) {
  //   echo 'High score!';
  // } else {
  //   echo 'Low score!';
  // }

  // echo $score > 40 ? 'High score!' : 'Low score!';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP Sandbox</title>
</head>
<body>
  <p><?= $score > 40 ? 'High score!' : 'Low score!' ?></p>
</body>
</html>