<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <center><form action="input.php" method="get">
      Name : <input type="text" name="username"><br>
      Age : <input type="number" name="Age"><br>

      <input type="submit">
    </form></center>
    <br>

    Your username is : <?php
    echo $_GET["username"]
    ?>
    <br>
    Your Age is : <?php
    echo $_GET["Age"]
    ?>
  </body>
</html>
