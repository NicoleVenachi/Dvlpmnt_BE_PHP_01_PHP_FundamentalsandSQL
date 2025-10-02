<?php 
  $errors = [];
  if($_SERVER['REQUEST_METHOD'] === 'GET') {
    extract($_GET);
  } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    extract($_POST);
  }
  if(isset($submit) && !empty($name) && !empty($email)) {
    // cleaning input data
    $name = filter_var($name, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    
    $email = htmlspecialchars(strip_tags(trim($email)));
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    echo "Form submitted<br>";
    echo "Name: $name <br>";
    echo "Email: $email <br>";
  } elseif (isset($submit)) {
    if (empty($name)) array_push($errors, "Name required");
    if (empty($email)) {
      array_push($errors, "Email required");
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) array_push($errors, "Wrong Email");
    } ;
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forms</title>
  <style>
    .errors-list{
      color: red
    }
  </style>
</head>
<body>
  <form action="<?php echo(htmlspecialchars($_SERVER['PHP_SELF']))?>" method="get">
    <input type="text" name="name" placeholder="Type your name">
    <br>
    <input type="email" name="email" placeholder="Type your email">
    <br>
    <input type="submit" value="Send" name="submit">
  </form>
  <? php if(!empty($errors)):?>
    <ul class='errors-list'>
      <?php 
        foreach($errors as $error) {
          echo("<li>$error</li>");
        }
      ?>
    </ul>
  <? php endif; ?>
</body>
</html>