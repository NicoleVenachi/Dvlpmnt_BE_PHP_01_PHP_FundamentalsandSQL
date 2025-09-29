<?php 
  // *** For Loop ***
  for ($i = 1; $i <= 10; $i++) {
    echo "The number is: $i <br>";
  }

  // *** While Loop ***
  $j = 10;
  while ($j > 0) {
    echo "The number is: $j <br>";
    $j--;
  }

  // loop through an array
  $months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
  for ($i=0; $i < count($months) ; $i++) { 
    echo $months[$i] . "<br>";
  }

  $counter = 0;
  while ($counter < count($months)) {
    echo $months[$counter] . "<br>";
    $counter++;
  }

  // *** do while Loop ***
  $k = 1;
  do {
    echo "The number is: $k <br>";
    $k++;
  } while ($k <= 10); 

  // *** foreach Loop (on asociative arrays) ***
  $alexander = array(
    "first_name" => "Alexander",
    "last_name" => "Hamilton",
    "age" => 30
  );
  foreach($alexander as $key => $value) {
    echo "$key : $value <br>";
  }
?>

