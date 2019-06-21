<?php

  // Continue & Break

  $products = [
    ['name' => 'shiny star', 'price' => 20],
    ['name' => 'apple juice', 'price' => 10],
    ['name' => 'strawberry', 'price' => 15],
    ['name' => 'orange juice', 'price' => 5],
    ['name' => 'gold coin', 'price' => 40],
    ['name' => 'banana skin', 'price' => 2],
  ];

  foreach($products as $product) {
    if($product['name'] === 'orange juice') {
      break;
    }

    if($product['price'] > 15) {
      continue;
    }

    echo $product['name'] . '<br />';
  }