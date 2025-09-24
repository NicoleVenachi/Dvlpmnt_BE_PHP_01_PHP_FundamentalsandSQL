<?php 
  
  // Declaration and definition
  $weekdays = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday");
  $weekdays2 = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", true];

  // Indexing
  echo $weekdays[2] . '<br />'; // Outputs "Wednesday"
  echo $weekdays2[5] . '<br />';

  // Associative arrays
  $person = array(
    "first_name" => "John",
    "last_name" => "Doe",
    "age" => 30
  );

  $person['first_name'] = "Jane"; // Modifying value
  echo $person["first_name"] . '<br />'; // Outputs "John"

  // Multidimensional arrays
  $matrix = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
  );
  $matrix2 = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
  ];
  echo $matrix[1][2] . '<br />'; // Outputs "6"
  echo $matrix2[2][2] . '<br />'; 

  // Counting array elements
  $months = ["January", "February", "March"];
  echo count($months) . '<br />'; // Outputs "3"
?>