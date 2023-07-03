<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <center><form action="switch.php" method="post">
      What was your grade?
      <input type="text" name="grade"><br>
      <input type="submit">
    </form></center>

    <?php
      $grade = $_POST["grade"];
      switch ($grade){
        case "A":
          echo "You are Pass with high class";
          break;
        case "B":
          echo "You are pass with second class";
          break;
        case "C":
          echo "You are pass with third class";
          break;
        case "D":
          echo "You are just Pass";
          break;
        case "F":
          echo "You are Failed";
          break;
        default :
          echo "Invalid grade";
      }
    ?>
  </body>
</html>
