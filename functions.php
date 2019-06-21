<?php

  // Functions

  function sayHello($fadhil = 'fadhil', $time = 'morning') {
    echo "good $time $fadhil";
  }

  sayHello();

  function formatProduct($product) {
    return "{$product['name']} costs {$product['price']}";
  }

  echo formatProduct(['name' => 'gold star', 'price' => 20]);