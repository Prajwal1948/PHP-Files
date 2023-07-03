<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!-- <h2><center><form action="ifelse.php" method="get">
      You are Male : <input type="text" name="Gender"><br>
      <input type="submit">
    </form><center></h2> -->
    <!-- <?php
      $ismale = $_GET["Gender"];

      if ($ismale){
        echo "You are male";
      }else {
        echo "You are not male";
      }
    ?> -->

    <!-- <?php
    $ismale = False;
    $istall = False;

    if ($ismale && $istall){
      echo "You are a tall male";
    } elseif ($ismale && !$istall){
      echo "You are a short male";
    } elseif(!$ismale && $istall){
      echo "You are not male but are tall";
    } else{
      echo "You are not male and not tall";
    }?> -->

    <?php
      function getMax($num1, $num2, $num3){
        if ($num1 >= $num2 && $num1 >= $num3){
          return $num1;
        } elseif ($num2 >= $num3 && $num2 >= $num1){
          return $num2;
        } else {
          return $num3;
        }
      }

      echo getMax(91, 95, 103);?>
  </body>
</html>
