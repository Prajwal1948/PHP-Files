<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $nm = "Ajinkya";

    echo $nm;
    echo strtoupper($nm); //string in upper case
    echo "<br>";
    echo strtolower($nm); //string in lower case
    echo "<br>";
    echo strlen($nm); //length of the string
    echo "<br>";
    echo $nm[4]; //index of the string
    $nm[4] = "z";
    echo "<br>";
    echo $nm;
    echo "<br>";
    $x = "Prajwal Deshmukh";
    echo $x;
    echo str_replace("Prajwal","Shubham",$x); //replace string word
    echo "<br>";
    echo str_replace("A","P",$nm); //replace string letter
    echo "<br>";
    echo substr($nm, 3); //substring
    echo "<br>";
    echo substr($x, 2, 7); //substring from 2nd index to 7th index
    echo "<br>";
    echo str_word_count($nm); //count words in string
    echo "<br>";
    echo strrev($nm); //reverse string
    echo "<br>";
    echo strpos($nm, "y"); //letter index
    echo "<br>";
     ?>

  </body>
</html>
