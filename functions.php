<?php
  
  function dd($value)
  {
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
    
    die();
  }
  
  function checkURL($value)
  {
    return $_SERVER['REQUEST_URI'] === $value ? 'rounded-md bg-gray-900' : 'text-gray-300 hover:bg-gray-700 hover:text-white';
  }