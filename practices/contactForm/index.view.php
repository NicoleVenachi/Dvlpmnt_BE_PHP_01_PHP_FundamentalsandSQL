<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Bitcount+Prop+Single+Ink:wght@100..900&family=Bitcount+Prop+Single:wght@100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
  <title>Contact form</title>
</head>

<body>
  <div class="wrap">
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">

      <input type="text" class="form-control" name="name" value="<?php
        if(!$sent && isset($name)) echo $name
      ?>" placeholder="Name:">
      <input type="email" class="form-control" name="email" value="<?php
        if(!$sent && isset($email)) echo $email
      ?>" placeholder="Email:">

      <textarea name="message" id="message" class="form-control" placeholder="Message....."><?php
        if(!$sent && isset($message)) echo $message
      ?></textarea>

      <?php if (!empty($errors)): ?>
        <div class="alert error">
          <?php
          foreach ($errors as $error) {
            echo htmlspecialchars($error) . '<br>';
          }
          ?>
        </div>
      <?php elseif($sent): ?>
        <div class="alert success">
          <p>Succesfully sent</p>
        </div>
      <?php endif ?>
      <input type="submit" name="submit" value="Send Email" class="btn btn-primary">
    </form>

  </div>
</body>

</html>