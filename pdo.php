<?php

  $db = new PDO('mysql:host=localhost;dbname=testdb', 'root', '12345');
  $data = $db->query('SELECT * FROM users')->fetchAll();
  print_r($data);