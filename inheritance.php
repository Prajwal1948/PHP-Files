<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    class chef{
      function makechicken(){
        echo "The chef makes chicken <br>";
      }
      function makeSalad(){
        echo "The chef makes salad <br>";
      }
      function makespecialdish(){
        echo "The chef makes special dish<br>";
      }
    }

    class Italianchef extends chef{
      function makepasta(){
        echo "The Italian chef make pasta";
      }
      function makespecialdish(){
        echo "The Italian chef makes Special dish Butter chicken";
      }
    }
    $chef1 = new chef();
    $chef1->makespecialdish();

    $chef2 = new Italianchef();
    $chef2->makespecialdish();
     ?>
  </body>
</html>
