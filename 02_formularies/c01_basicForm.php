<?php 

  if($_POST) {
    extract($_POST);
    // $name = $_POST['name'];
  }
  if ($_GET) {
    extract($_GET);
  }
  if(isset($name) && isset($gender) && isset($terms)) {
    // header("Location: c01_basicForm.php");

    print_r($_POST);
    echo "<br>";
    print_r($_GET);
    echo "<br>";
    echo htmlspecialchars("Hello $name, you are a $gender and you were born in $year. You accepted the terms? $terms");
  }

  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forms</title>
</head>
<body>
  <!-- <form action="receive.php" method="post"> -->
  <!-- <form action="receive.php" method="get"> -->
  <!-- <form action="#" method="get"> -->
  <!-- <form action="" method="get"> -->
  <!-- <form action="c01_basicForm.php" method="get"> -->
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="get">
    <input type="text" name="name" placeholder="Type your name">
    <br>

    <label for="wommen">Wommen</label>
    <input type="radio" name="gender" value='wommen' id='wommen'>

    <label for="men">Men</label>
    <input type="radio" name="gender" value='men' id='men'>

    <br>
    <!-- combo box -->
    <select name="year">
      <option value="2020">2020</option>
      <option value="2021">2021</option>
      <option value="2022">2022</option>
      <option value="2023">2023</option>
      <option value="2024">2024</option>
    </select>

    <br>

    <label for="terms">Accept</label>
    <input type="checkbox" name="terms" id="terms" value="True">

    <br>
    <input type="submit" value="Send">
  </form>
</body>
</html>