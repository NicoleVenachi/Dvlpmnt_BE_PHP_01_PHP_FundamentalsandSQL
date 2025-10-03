<?php 

  // ternary operator
  // $name = isset($_GET['name']) ? $_GET['name'] : 'default';
  
  // null coalescing
  $name = $_GET['name'] ?? 'default';
  echo $name;
?>