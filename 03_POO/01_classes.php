<?php

  // without poo
  // $name = 'Carlos';
  // $age = 22;
  // $country = 'MX';

  // $name2 = 'Alejandro';
  // $age2 = 26;
  // $country2 = 'SP';

  // using poo
  class Person {
    public $name;
    public $age;
    public $country;

    public function showInfo() {
      echo "Hi";
    }
  }

  // first way to instance a class
  $carlos = new Person;
  $carlos->name = "Carlos";
  $carlos->age = 23;
  $carlos->country = "MX";
  
  echo $carlos->name;
  $carlos->showInfo();

  $alexander = new Person;
  $alexander->name = "Alexander";
  $alexander->age = 26;
  $alexander->country = "SP";
?>