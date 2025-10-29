<?php 

  try {
    // Database connection parameters
    $dbtype = 'mysql';
    $host = 'localhost';
    $dbname = 'test_db';

    $dsn = "$dbtype:host=$host;dbname=$dbname";
    $username = "root";
    $password = "";
    $connection = new PDO($dsn, $username, $password);
    
  } catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
  }

?>