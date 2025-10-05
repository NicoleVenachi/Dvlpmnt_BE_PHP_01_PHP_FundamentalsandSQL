<?php 

  class MathUtils {
    public static $pi = 3.14159;

    public static function calculateCircleArea($radius = null) {
      if ($radius) {
        return self::$pi * $radius * $radius;
      }
      return 'Plz provide a radious';
    }
  }

  // withoud instance
  echo MathUtils::$pi; // Accessing static property
  echo MathUtils::calculateCircleArea(5); // Calling static method

  // creating an instance
  $mathUtl = new MathUtils();
  echo $mathUtl->calculateCircleArea();
?>

