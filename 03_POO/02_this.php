<?php 

  class Person {
    public $name;
    public $age;
    public $country;

    public function showInfo() {
      echo $this->name . ' has ' . $this->age . ' age years old, and he/she is from ' . $this->country;
    }
  }

  $carlos = new Person;
  $carlos->name = "Carlos";
  $carlos->age = 23;
  $carlos->country = "MX";
  
  $carlos->showInfo();
?>