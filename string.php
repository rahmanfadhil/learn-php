<!DOCTYPE html>
<html>
<head>
  <title>Learn PHP String</title>
</head>
<body>
  <?php
    $stringOne = "My email is ";
    $stringTwo = "rhmnfadhil@gmail.com";
    // echo $stringOne . $stringTwo;

    $name = "fadhil";
    // echo "Hey, my name is " . $name;

    // echo "Hey, my name is $name";

    // echo "I screamed \"whaaaa\"";
    // echo 'I screamed "whaaaa"';

    // echo $name[0]; // Get the first character

    // echo strlen($name); // .length in javascript
    // echo strtoupper($name); // .toUpperCase in javascript
    // echo strtolower($name); // .toLowerCase in javascript

    echo str_replace("f", "v", $name);
  ?>

  <h1>Hello world</h1>
</body>
</html>