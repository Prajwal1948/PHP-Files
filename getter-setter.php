<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    class Movie {
      public $title;
      private $rating;

    function __construct($title, $rating){
      $this->title = $title;
      $this->title = $rating;
    }

    function getRating(){
      return $this->rating;
    }

    function setRating($rating){
      if($rating == "A" || $rating == "B" || $rating == "C" || $rating =="D"){
        $this->rating = $rating;
      }else {
        $this->rating = "Invalid Rating";
      }
    }
    }

    $avengers = new Movie("Avengers", "A");
         $avengers->setRating("Z");
    echo $avengers->getRating();
    ?>
  </body>
</html>
