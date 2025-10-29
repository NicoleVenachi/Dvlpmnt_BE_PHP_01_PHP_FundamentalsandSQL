<?php 

  // $id = $_GET["id"];
  $id = '2 or id=4'; // Query Injection example
  try {
    // Database connection parameters
    $dbtype = 'mysql';
    $host = 'localhost';
    $dbname = 'test_db';

    $dsn = "$dbtype:host=$host;dbname=$dbname";
    $username = "root";
    $password = "";
    $connection = new PDO($dsn, $username, $password);

    // Query method: exec() - for SELECT, INSERT, UPDATE, DELETE
    // $queryResults = $connection -> query("INSERT INTO users (id, name, email) VALUES(null, 'Juana', 'juana@gmail.com')");

    $queryResults = $connection -> query("SELECT * FROM users WHERE id = $id");
    foreach ($queryResults as $row) {
      // print_r($row);
      echo $row["name"] . ' - ' . $row['email'] .  '<br />';
    }


  } catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
  }

?>