<?php 

  abstract class Person {
    public function greetings() {
      return 'Hello';
    }
  }

  class Student extends Person {

  }

  $carlos = new Student;
  echo $carlos->greetings();

?>