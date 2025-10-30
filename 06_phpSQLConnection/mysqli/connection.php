<?php

  // Establishing a MySQLi connection
  $connection = new mysqli("localhost","root","","test_db");

  if ($connection->connect_errno) {
    die("Sorry, inner server error". $connection->connect_error); 
  }; // Should print 0 if connection is successful

  // Simple Query Execution
  // $sqlQuery = 'SELECT * FROM users LIMIT 3';
  $id = isset($_GET["id"]) ? $_GET["id"]: 1;
  $sqlQuery = "SELECT * FROM users WHERE id = $id"; // Query Injection example
  $results = $connection->query($sqlQuery);
  if ($results->num_rows > 0) {
    // echo $results->num_rows;
    // echo '<pre>';
    // var_dump($results -> fetch_assoc()); // Fetch a single row as an associative array
    // echo '</pre>';

    // echo $results -> fetch_assoc()['name']; // Access specific column value

    while ($row = $results -> fetch_assoc()) {
      echo $row['name'] . ' - ' . $row['email'] . '<br />';
    }
  } 


?>