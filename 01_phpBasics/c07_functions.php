<?php 
  function add($a, $b) {
    return $a + $b;
  }

  $result = add(5, 10); // Outputs: 15
  echo $result;

  function triangleArea($base, $height) {
    return 0.5 * $base * $height;
  }
  echo triangleArea(10, 5); // Outputs: 25

  // *** Scope of Variables ***
  $globalVar = "I am global";
  function testScope() {
    // echo $globalVar; // Undefined variable error
    $globalVar = "I am local";
    echo $globalVar; // Outputs: I am local
    global $globalVar; // Accessing global variable
    echo $globalVar;
  }

  testScope(); // Outputs: I am global
?>

