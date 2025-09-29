<?php 

  //  ***if-else***
  $age = 20;
  if($age > 18) {
    echo "<h1> User is an adult </h1>";
  } elseif ($age === 18) {
    echo "<h1> User is 18 years old </h1>";
  } else {
    echo "<h1> User is a minor </h1> ";
  }

  // ***switch***
  $day = 3;
  switch($day) {
    case 1:
      echo "<h2>Monday</h2>";
      break;
    case 2:
      echo "<h2>Tuesday</h2>";
      break;
    case 3:
      echo "<h2>Wednesday</h2>";
      break;
    case 4:
      echo "<h2>Thursday</h2>";
      break;
    case 5:
      echo "<h2>Friday</h2>";
      break;
    case 6:
      echo "<h2>Saturday</h2>";
      break;
    case 7:
      echo "<h2>Sunday</h2>";
      break;
    default:
      echo "<h2>Invalid day</h2>";
  }

  // ***ternary operator***
  $is_logged_in = !isset($age) ? "<h3>Welcome back, user!</h3>" : "<h3>Please log in.</h3>";
  echo $is_logged_in;
?>