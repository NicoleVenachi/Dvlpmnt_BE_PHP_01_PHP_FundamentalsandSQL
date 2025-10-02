<?php 

  if($_POST) {
    extract($_POST);
    // $name = $_POST['name'];
  }
  if ($_GET) {
    extract($_GET);
  }
  if(($name === "") || (!isset($gender)) || (!isset($terms))) {
    header("Location: c01_basicForm.php");
  }
  print_r($_POST);
  echo "<br>";
  print_r($_GET);
  echo "<br>";
  echo htmlspecialchars("Hello $name, you are a $gender and you were born in $year. You accepted the terms? $terms");
  
?>