<?php 

  $age = 20;
  if($age > 18) {
    echo "<h1> User is an adult </h1>";
  } elseif ($age === 18) {
    echo "<h1> User is 18 years old </h1>";
  } else {
    echo "<h1> User is a minor </h1> ";
  }
?>