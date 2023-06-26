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
    echo pow(10, 2);
    echo "<br>";
    echo(sqrt(144)); //square root of 144
    echo "<br>";
    echo(round(1.83)); //nearest integer
    echo "<br>";
    echo(ceil(7.83)); //nearest integer
    echo "<br>";
    echo(floor(4.83)); //nearest integer
    echo "<br>";
    echo(rand()); //genrates random number
    echo "<br>";
    echo(rand(20, 300));
    echo "<br>";
    echo 5+6; //addition
    echo "<br>";
    echo 5-6; //substraction
    echo "<br>";
    echo 10%4; //modified
    echo "<br>";
    echo 10/2; //division
    echo "<br>";
    echo 35*2; //multiplication
    echo "<br>";

    $num = 10;
    $num++;
    echo $num;
    echo "<br>";
    $num--;
    echo $num;
    echo "<br>";
    $num += 20; //$num = $num + 20
    echo $num;
    echo "<br>";
    $num *= 35; // $num = $num * 35
    echo $num;
    echo "<br>";
    ?>
  </body>
</html>

