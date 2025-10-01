<?php 

  // phpinfo();
  
  // *** Scalar Types and Return types ***
  
  declare(strict_types=1); // Enforce strict type checking

  function square(int $num) : int { // Type hinting
    return $num * $num;
  }

  // $num = '4';
  $num = 4;
  echo square($num); // Outputs: 16
?>