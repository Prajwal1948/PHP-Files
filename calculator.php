<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <center><form action="calculator.php" method = "get">
      Number 1 : <input type = "number" step="0.0000001" name = "num1"><br><br>
      Operand : <input type = "text" name = "op"><br><br>
      Number 2 : <input type = "number" step="0.0000001" name = "num2"><br><br>
      <input type = "submit"><br><br>
    </form></center>

    Result :  <?php
      $num1 = $_GET["num1"];
      $op = $_GET["op"];
      $num2 = $_GET["num2"];

      if($op == "+"){
        echo $num1 + $num2;
      } elseif($op == "-"){
        echo $num1 - $num2;
      } elseif($op == "*"){
        echo $num1 * $num2;
      } elseif($op == "/"){
        echo $num1 / $num2;
      } else {
        echo "Error Invalid Operator!";
      }
    ?>
  </body>
</html>
