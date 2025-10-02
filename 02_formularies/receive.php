<?php 

  if($_POST) {
    extract($_POST);
    // $name = $_POST['name'];
  }
  if(!$_POST || ($name !== "") || (!isset($gender)) || (!isset($terms))) {
    header("Location: c01_basicForm.php");
  }
  print_r($_POST);
  echo "<br>";
  echo "Hello $name, you are a $gender and you were born in $year. You accepted the terms? $terms";
  
?>