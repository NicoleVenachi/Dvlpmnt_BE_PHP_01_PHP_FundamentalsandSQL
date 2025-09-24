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
?>