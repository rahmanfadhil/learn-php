<?php

  // Loops

  $ninjas = ['shaun', 'ryu', 'yoshi'];

  // for ($i = 0; $i < count($ninjas); $i++) {
  //   echo $ninjas[$i] . '<br />';
  // }

  // foreach ($ninjas as $ninja) {
  //   echo $ninja . '<br />';
  // }

  $products = [
    ['name' => 'shiny star', 'price' => 12],
    ['name' => 'apple juice', 'price' => 12],
    ['name' => 'strawberry', 'price' => 12],
    ['name' => 'orange juice', 'price' => 12],
    ['name' => 'gold coin', 'price' => 12],
    ['name' => 'banana skin', 'price' => 12],
  ];

  // foreach($products as $product) {
  //   echo $product['name'] . ' - ' . $product['price'];
  //   echo '<br />';
  // }

  // While loop
  // $i = 0;
  // while ($i < count($products)) {
  //   echo $products[$i]['name'];
  //   echo '<br />';
  //   $i++;
  // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Learn PHP Loop</title>
</head>
<body>
  <h1>Products</h1>

  <?php foreach($products as $product) { ?>
    <h3><?php echo $product['name']; ?></h3>
    <p><?php echo $product['price']; ?></p>
  <?php } ?>
</body>
</html>
