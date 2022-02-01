<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
                   <!--   Constructor (Class Object) (3:56:23)   -->
             <!--
             we can create Construct Function to the Object variables
             and we can pass the Object variables in Construct Function
             Parameter and Then we can create values for varibles.
             -->
    <?php
    class Book {
      var $title;
      var $author;
      var $pages;
      function __construct($aTitle,$aAuthor,$aPages){
        $this->title= $aTitle;
        $this->author= $aAuthor;
        $this->pages= $aPages;
      }
    }
    $book1=new Book("Harry potter", "ravi", 1000);
    $book1->title="black and white";  //we can update a value (title was changed)
    $book2=new Book("Titanic", "raja", 1500);
    echo $book1->author;
      echo"<br>";
    echo $book1->title;
      echo"<br>";
    echo $book1->pages;

    ?>
    <!--
    output:
    ravi
    black and white
    1000
    -->
  </body>
</html>
