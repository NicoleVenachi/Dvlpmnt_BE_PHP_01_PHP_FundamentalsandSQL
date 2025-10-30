<?php 

  try {
    // Database connectionW
    $dbtype = 'mysql';
    $host = 'localhost';
    $dbname = 'pagination';

    $dsn = "$dbtype:host=$host;dbname=$dbname";
    $username = "root";
    $password = "";
    $connection = new PDO($dsn, $username, $password);
  } catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
    die();
  }

  $pagina = (int)($_GET['page'] ?? 1);
  $postPerPage = 5;

?>