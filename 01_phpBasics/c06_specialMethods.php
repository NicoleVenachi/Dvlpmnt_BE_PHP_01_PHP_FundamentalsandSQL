<?php 

  // *** var_dump ***
  $text = "Hello, World!";
  $number = 42;
  $number2 = 3.14;
  $number3 = "3.14";
  $array = [1, 2, 3];
  $asociativeArray = ["name" => "John", "age" => 30];
  $nullValue = null;
  $booleanValue = true;

  var_dump($text);
  var_dump($number);
  var_dump($number2);
  var_dump($number3);
  var_dump($booleanValue);

  echo "<pre>";
  var_dump($array);
  echo "</pre>";

  echo "<pre>";
  var_dump($asociativeArray);
  echo "</pre>";

  echo "<pre>";
  print_r($array);
  echo "</pre>";
    echo "<pre>";
  print_r($asociativeArray);
  echo "</pre>";
  print_r($number);
  print_r($number3);
  print_r($booleanValue);
?>