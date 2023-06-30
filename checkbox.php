<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="checkbox.php" method="get">
      Apples : <input type="checkbox" name=fruits[] value="Apples"><br>
      Oranges : <input type="checkbox" name=fruits[] value="Oranges"><br>
      Kivi : <input type="checkbox" name=fruits[] value="Kivi"><br>
      Mango : <input type="checkbox" name=fruits[] value="Mango"><br>
      Banana : <input type="checkbox" name=fruits[] value="Banana"><br>
      <input type="submit">
    </form>

    <?php
    $fruits = $_GET["fruits"];
    echo "$fruits[0]<br>";
    echo "$fruits[1]<br>";
    echo "$fruits[2]<br>";
    echo "$fruits[3]<br>";
    echo "$fruits[4]<br>";
     ?>

  </body>
</html>
