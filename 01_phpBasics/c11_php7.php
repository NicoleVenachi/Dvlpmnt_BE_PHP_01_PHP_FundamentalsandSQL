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

  // *** Spaceship Operator ***
  // returns -1, 0, or 1 when $a is respectively less than, equal to, or greater than $b.
  echo 5 <=> 10; // Outputs: -1

  $nums = [1, 3, 2, 5, 4];
  echo implode(", ", $nums); // "1, 3, 2, 5, 4"
  // sort($nums)
  function customSort($a, $b) {
    return $a <=> $b; // Ascending order
  }
  usort($nums, 'customSort');
  echo implode(", ", $nums); // "1, 2, 3, 4, 5"
?>