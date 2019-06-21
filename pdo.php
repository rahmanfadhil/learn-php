<?php

  $db = new PDO('mysql:host=127.0.0.1;dbname=testdb', 'root', '12345');
  $data = $db->query('SELECT * FROM users')->fetchAll();
  print_r($data);