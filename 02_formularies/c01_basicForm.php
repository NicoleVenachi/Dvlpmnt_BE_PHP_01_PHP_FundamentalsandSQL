<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forms</title>
</head>
<body>
  <form action="receive.php" method="">
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
    <input type="checkbox" name="terms" id="terms" value="Accept terms">

    <br>
    <input type="submit" value="Send">
  </form>
</body>
</html>