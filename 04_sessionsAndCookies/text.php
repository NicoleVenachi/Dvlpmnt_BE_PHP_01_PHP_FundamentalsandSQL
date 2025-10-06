<?php 
  $size = htmlspecialchars($_COOKIE["font-size"]) ?? '5px';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    p {
      font-size: <?php echo $size;?>;
    }
  </style>
</head>
<body>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit ab est explicabo. Placeat, debitis quasi cum illum dignissimos inventore, eum alias quo corporis voluptates quia eius iusto magni neque at!</p>
</body>
</html>