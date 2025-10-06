<?php 
  session_start();
  $_SESSION["name"] = "Carlos";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sessions</title>
</head>
<body>
  <h1>Home page</h1>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit impedit quidem dignissimos eligendi repellat. Aperiam quisquam dolorem vero accusantium sit facilis? Laudantium, aliquid. Facere odit mollitia laudantium consequuntur et accusantium!</p>

  <a href="secondPage.php">Go to followin page</a>
  
</body>
</html>