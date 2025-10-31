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

  $pagina = (int)($_GET['pagina'] ?? 1);
  $postsPerPage = 5;
  $start = ($pagina >1) ? (($pagina * $postsPerPage) - $postsPerPage) : 0;

  $articles = $connection->prepare("
  SELECT SQL_CALC_FOUND_ROWS * FROM articles LIMIT $start, $postsPerPage
  "); 
  $articles->execute();
  $articulos = $articles->fetchAll();

  if (empty($articulos)) {
    header("Location: index.php");
  }

  $totalArticles = $connection->query("SELECT FOUND_ROWS() as total");
  $totalArticles = $totalArticles->fetchColumn(0);

  $numeroPaginas = ceil($totalArticles / $postsPerPage);
  // echo' '. $totalArticles .'';
  // echo' '. $numeroPaginas .'';
  require 'index.view.php';
?>