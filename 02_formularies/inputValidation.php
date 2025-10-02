<?php 
  if($_SERVER['REQUEST_METHOD'] === 'GET') {
    extract($_GET);
  } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    extract($_POST);
  }
  // if(isset($_POST['submit']) || isset($_GET['submit'])) {
  //   echo "Form submitted";
  // } 
?>