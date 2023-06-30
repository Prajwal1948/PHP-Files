<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="madlab.php" method="get">
      color: <input type="text" name="color"> <br>
      Plural Noun: <input type="text" name="pluralnoun"> <br>
      celebrity: <input type="text" name="celebrity"> <br>
      <input type="submit">
    </form>

    <?php
    $color = $_GET["color"];
    $pluralnoun = $_GET["pluralnoun"];
    $celebrity = $_GET["celebrity"];
    echo "Roses are $color <br>";
    echo "violets are $pluralnoun <br>";
    echo "I like $celebrity"; ?>
  </body>
</html>
