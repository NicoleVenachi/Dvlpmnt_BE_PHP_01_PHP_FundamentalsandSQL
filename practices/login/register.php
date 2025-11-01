<?php

  session_start();
  require 'views/register.view.php';
  
  if (isset($_SESSION["user"])) header("Location: login.php");
  
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = filter_var(strtolower($_POST["user"]), FILTER_SANITIZE_STRING);
    $password = $_POST["password"];
    $password2 = $_POST["password2"];
    echo "$user . $password . $password2";
  }


?>