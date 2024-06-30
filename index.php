<?php
  
  $frameworks = [
    [
      'name' => "react",
      'lang' => "javascript",
      'docsUrl' => "www.react.com"
    ],
    [
      'name' => "vue",
      'lang' => "javascript",
      'docsUrl' => "www.vue.com"
    ],
    [
      'name' => "laravel",
      'lang' => "php",
      'docsUrl' => "www.laravel.com"
    ]
  ];
  
  $filteredFrameworks = array_filter($frameworks, function ($framework) {
    return $framework["lang"] === "javascript";
  });
  
  require "index.view.php";



