<?php 

  function add($a, $b) {
    return $a + $b;
  }

  // require 'c10_imports.views.php';
  include 'c10_imports.view.php';
  include_once 'c10_imports.view.php'; // Prevents multiple inclusions

  echo "Hello";
?>