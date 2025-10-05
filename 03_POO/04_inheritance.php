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
      return $this->name . ' has ' . $this->age . ' age years old, and he/she is from ' . $this->country . '<br>';
    }
  }

  class Student extends Person {
    public $career;
    
    public function __construct($name, $age, $country, $career) {
      parent::__construct($name, $age, $country);
      $this->career = $career;
    }
  }

  $carlos = new Student('Carlos', 23, 'MX', 'Engineer');
  echo $carlos->showInfo();
  echo $carlos->career;

?>