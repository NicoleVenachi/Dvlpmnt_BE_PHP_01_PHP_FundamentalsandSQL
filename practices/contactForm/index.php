<?php
  $errors = array();
  $sent = false;

  if (isset($_POST["submit"])) {
    extract($_POST);

    // cleaning input data
    if (!empty($name)) {
      $name = filter_var(trim($name), FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    } else {
      array_push($errors, "Please add a valid name");
    }

    if (!empty($email)) {
      $email = filter_var($email, FILTER_SANITIZE_EMAIL);
      $email = htmlspecialchars(strip_tags(trim($email)));
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) array_push($errors, "Wrong Email");
    } else {
      array_push($errors, "Please add a valid email");
    }

    if (!empty($message)) {
      $message = htmlspecialchars(strip_tags(trim($message)));
    } else {
      array_push($errors, "Please add your message");
    }

    if (empty($errors)) {
      $sent_to = 'dummy_email@gmail.com';
      $subject = 'Dummy emmail';
      $message_formated = "From: $name \n";
      $message_formated .= "Mail: $email \n";
      $message_formated .= "Message: $message \n";
      
      // mail($sent_to, $subject, $message_formated);
      $sent = true;
    }
  }

  require_once('index.view.php');

?>