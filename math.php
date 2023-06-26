<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    echo pi(); //3.14 pi value
    echo "<br>";
    echo(min(0, 150, 30, 20, -8, -200)); //min value in list of arguments
    echo "<br>";
    echo(max(0, 150, 30, 20, -8, -200)); //max value in list of arguments
    echo "<br>";
    echo(abs(-4.3)); //returns positive value
    echo "<br>";
    echo(sqrt(144)); //square root of 144
    echo "<br>";
    echo(round(1.83)); //nearest integer
    echo "<br>";
    echo(rand()); //genrates random number
    echo "<br>";
    echo(rand(20, 300));
    echo "<br>";
    ?>
  </body>
</html>
