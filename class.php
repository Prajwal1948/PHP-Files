<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!-- <?php
    class Book {
      var $title;
      var $author;
      var $pages;
    }
    $Book1 = new Book;
    $Book1->title = "Harry Potter";
    $Book1->author = "JK Rowling";
    $Book1->pages = 400;

    $Book2 = new Book;
    $Book2->title = "Lord of Rings";
    $Book2->author = "Tolkien";
    $Book2->pages = 450;

    echo $Book1->title;
    echo $Book1->author;
    echo $Book1->pages;

    echo $Book2->title;
    echo $Book2->author;
    echo $Book2->pages;
    ?> -->


    <!-- Constructor -->
    <?php
    class Student {
      var $name;
      var $Age;
      var $gpa;

      function __construct($aname, $aAge, $agpa){
        $this->name = $aname;
        $this->Age = $aAge;
        $this->gpa = $agpa;
      }

      function hashonours(){
        if($this->gpa >= 3.5){
          return "True";
        }
          return "False";
      }
    }

    $Student1 = new Student("Syush", 15, 4.6);

    $Student2 = new Student("Shubham", 15, 3.2);

    $Student3 = new Student("Prashant", 16, 4.6);

    echo $Student1->hashonours();
    echo "<br>";
    echo $Student2->hashonours();
    echo "<br>";
    echo $Student3->hashonours();
    ?>

  </body>
</html>
