<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bitcount+Prop+Single+Ink:wght@100..900&family=Bitcount+Prop+Single:wght@100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <title>Contact form</title>
</head>
<body>
  <div class="wrap">
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">

      <input type="text" class="form-control" name="name" value="" placeholder="Name:">
      <input type="email" class="form-control" name="name" value="" placeholder="Email:">

      <textarea name="message" id="message" class="form-control" placeholder="Message....."></textarea>

      <!-- <div class="alert error"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit explicabo officia dolores assumenda, velit vero temporibus vel voluptatum eum et hic debitis dolore dolorum, a maxime ipsa consequuntur deleniti perspiciatis.        
      </div>

      <div class="alert success">
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati at, ipsa quos ratione, facilis accusamus voluptatum sapiente a nisi dolorem quasi sequi. Unde vero iure doloremque nisi nostrum tenetur quia?
      </div> -->
      <input type="submit" name="submit" value="Send Email" class="btn btn-primary">
    </form>

  </div>
</body>
</html>