<?php 

  class User {
    protected $name;
    private $email;

     function __construct($name, $email) {
      $this->name = $name;
      $this->email = $email;
    }

    public function get_name() {
      return $this->name;
    }
  }

  class Member extends User {
    // public function get_email() {
    //   return $this->email;
    // }
  }


  $carlos = new Member('Carlos', 'caros@mgail.com');
  echo $carlos->get_name();
  // echo $carlos ->name;
  
?>