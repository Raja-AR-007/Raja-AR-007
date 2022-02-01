<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
                 <!--    Object Function (4:06:18)    -->
    <!--
    ?php
    class Student{
      var $name;
      var $subject;
      var $gpa;
      function __construct($aName, $aSubject, $aGpa){
        $this->name= $aName;
        $this->subject= $aSubject;
        $this->gpa= $aGpa;
      }
      function hasHonour(){  // Object Function
        if($this->gpa >= 4.5){
          return "true";
        }else{
        return "false";
        }
      }
  }
    $student1=new Student("raja", "Tamil", 4.5);
    $student2=new Student("karthi", "English", 3.5);
    echo $student2->hasHonour();
     ?>  -->
     <!--
     output:
     false  //student2
     -->

     <!--
     output:
     true  //student1
     -->

                  <!--   Object Function in Constructor (Class Object)   -->
               <!--
               Object Function means we can create Condition
               to the Object variables.
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
       function hasEnoughPages(){  // Object Function
         if($this->pages >= 1000){
           return "it has enough pages ";
         }else{
         return "it has not enough pages";
          }
       }
     }
     $book1=new Book("Harry potter", "ravi", 1000);
     $book1->title="black and white";  //we can update a value (title was changed)
     $book2=new Book("Titanic", "raja", 500);

     echo $book1->hasEnoughPages();
     ?>

     <!--
     output:
     it has not enough pages  //book2
     -->

     <!--
     output:
     it has enough pages  //book1
     -->
  </body>
</html>
