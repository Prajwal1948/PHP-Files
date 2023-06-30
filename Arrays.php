<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
      $friends = array("Shubham", 1, false, "Ritik", "Raj", "Prajwal");
      echo $friends;
      echo "<br>";
      echo $friends[4];
      echo "<br>";
      echo $friends[1];
      echo "<br>";
      $friends[1] = "Suyash"; //edit array
      echo $friends[1];
      echo "<br>";
      $friends[6] = 400;
      echo $friends[6];
      echo "<br>";
      echo count($friends); 
      ?>
  </body>
</html>
