<?php 

  class Person {
    public $name;
    public $age;
    public $country;

    public function __construct($name, $age, $country) {
      $this->name = $name;
      $this->age = $age;
      $this->country = $country;
    }

    public function showInfo() {
      echo $this->name . ' has ' . $this->age . ' age years old, and he/she is from ' . $this->country;
    }
  }

  $carlos = new Person('Carlos', 23, 'MX');
  $carlos->showInfo();
?>