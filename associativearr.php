<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
  <center> <h2><title>Acadmic Result of 2023</title><h2></center>
  </head>
  <body>
    <center><form action="associativearr.php" method="POST">
      Student Name: <input type="text" name="Student"><br><br>
      Age: <input type="number" name="Age"><br><br>
      Rollno: <input type="number" name="rollno"><br><br>
      <input type="submit">
    </form></center>
    <?php
    $grades = array("Shubham"=>87, "Prajwal"=>99, "Kevin"=>76);
    echo $grades[$_POST["Student"]];
     ?>
  </body>
</html>
