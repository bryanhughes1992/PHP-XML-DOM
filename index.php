<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="author" content="Bryan Hughes">
    <meta name="description" content="XML Assignment 02">
    <link rel="stylesheet" href="styles/style.css" type="text/css">
  </head>
  <body>
    <div class="form-container">
      <form action="scripts/login.php" method="post">
        <fieldset>
          <legend>Login:</legend>

          <label for="email">Email:</label>
          <input type="text" name="email" class="input" required>

          <label for="pass">Password:</label>
          <input type="text" name="pass" class="input" required>

          <input type="submit">
        </fieldset>
      </form>
      <?php require_once 'scripts/login.php' ?>
    </div>
  </body>
</html>