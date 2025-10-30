<?php

  // Establishing a MySQLi connection
  $connection = new mysqli("localhost","root","","test_db");

  if ($connection->connect_errno) {
    die("Sorry, inner server error". $connection->connect_error); 
  }; // Should print 0 if connection is successful

  
?>