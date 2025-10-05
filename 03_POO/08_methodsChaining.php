<?php 

  class User {
    protected $name;
    private $email;

    function __construct($name, $email) {
      $this->name = $name;
      $this->email = $email;
    }

    public function getName() {
      echo 'Your nanme is' . $this->name . '<br/>';
      return $this;
    }

    public function getEmail() {
      echo 'Your email is' . $this->email . '<br/>';
      return $this;
    }
  }

  $carlos = new User('Carlos', 'carlos@mgail.com');
  $carlos->getName()->getEmail();
?>