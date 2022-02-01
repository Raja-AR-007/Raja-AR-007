<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
                  <!--  Class-Object (3:45:57)  -->
              <!--
              By using one class we can create many Objects
              -->
    <?php
    class Book {
      var $title;
      var $author;           //by using one class object variables
      var $pages;            //we can create many values by using

    }                        //new object
    $book1=new Book();
    $book1->title="Harry potter";
    $book1->author="ravi";
    $book1->page="1000";

    $book1=new Book();
    $book1->title="Titanic";
    $book1->author="raja";
    $book1->page="1500";

    echo $book1->title;
    ?>

    <!--
    output:
    Titanic
    -->
  </body>
</html>
