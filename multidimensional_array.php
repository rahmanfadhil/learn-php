<?php

  // Multi-dimensional arrays

  $blogs = [
    [
      'title' => 'mario party',
      'author' => 'mario',
      'content' => 'lorem ipsum',
      'likes' => 45
    ],
    [
      'title' => 'mario kart cheats',
      'author' => 'toad',
      'content' => 'lorem ipsum',
      'likes' => 55
    ],
    [
      'title' => 'zelda hidden chests',
      'author' => 'link',
      'content' => 'lorem ipsum',
      'likes' => 65
    ]
  ];

  $blogs[] = [
    'title' => 'castle party',
    'author' => 'peach',
    'content' => 'lorem ipsum',
    'likes' => 100
  ];

  array_pop($blogs);
  print_r($blogs[0]);
