<?php 
  $specialCharacters = ' & < > " \' / <b> Hola </b> ';
  echo $specialCharacters . "<br>";
  echo htmlspecialchars($specialCharacters) . "<br>";
  echo trim("   Hello World!   "); 
  echo strlen("Hello World!");
  echo strtoupper("Hello World!") . "<br>"; // Outputs: HELLO WORLD!
  echo strtolower("Hello World!") . "<br>"; // Outputs: hello world!
  echo substr("Hello World!", 0, 5) . "<br>"; // Outputs: Hello
  echo str_replace("World", "PHP", "world World!") . "<br>"; // Outputs: world PHP!
  echo strpos("Hello World!", "World") . "<br>"; // Outputs: 6
?>