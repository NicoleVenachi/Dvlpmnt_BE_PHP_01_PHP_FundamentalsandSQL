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

  // *** Array built in methods ***
  // Counting array elements
  $months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
  echo count($months) . '<br />'; // Outputs "3"
  $firstNumbers = [1, 2, 3, 4, 5];

  // Sorting arrays
  // sort($months); // Sorts in ascending order
  rsort($months); // Sorts in descending order
  sort($firstNumbers);
  // rsort($firstNumbers);

  // Extracts variables from associative array
  echo extract($person); 
  echo $first_name . '<br />'; // Outputs "Jane"

  // Remove last element
  $lastNumber = array_pop($firstNumbers); // Removes the last element
  echo $lastNumber . '<br />'; // Outputs "5"

   // Joins array elements into a string
  echo join(", ", $firstNumbers);

  $weekdays_reversed = array_reverse($weekdays);
  echo '<br />' . join(", ", $weekdays_reversed);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Year months</title>
</head>
<body>
  <h1>Year months</h1>
  <ul>
    <?php 
     foreach($months as $month) {
      echo "<li>$month</li>";
     }
    ?>
  </ul>

  <h1>Numbers</h1>
  <ul>
    <?php 
     foreach($firstNumbers as $number) {
      echo "<li>$number</li>";
     }
    ?>
  </ul>
</body>
</html>