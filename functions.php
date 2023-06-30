<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    //   function SayHi($name){
    //   echo "Hello $name";
    // }
    // SayHi("Shubham")

      function cube($num){
        echo "Hello";
        return $num * $num * $num;
        echo "Hi"; //any line of code are not executed after return statment
      }
      $cuberesult = cube(2);
      echo $cuberesult;
      echo "<br>";
      echo cube(8);
      ?>
  </body>
</html>
