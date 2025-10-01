<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>
    <?php 
      // *** die function test ***
      echo "Before include";
      die();
    ?>
  </h1>
  <h1> Sum result is: 

    <?php 
      $result = add(5, 10); // Outputs: 15
      echo $result;
    ?>
  </h1>
</body>
</html>