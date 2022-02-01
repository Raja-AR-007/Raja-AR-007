<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
                        <!--   Getter & Setter (4:13:52)   -->
            <!--
            By using (Getter) Function We can access the Private variables
            By using (Setter) Function We can update the Private variables Values
            -->
    <?php
    class Movie{
      public $title;
      private $rating;

      function __construct($aTitle, $aRating){  //Construct Function
        $this->title=$aTitle;
        $this->setRating($aRating);
      }
      function getRating(){   //Getter fFucction
        return $this->rating;
      }
      function setRating($rating){  //Setter Function
        if($rating=="PG-13" || $rating=="R" || $rating=="A" || $rating=="NR" ){
          $this->rating=$rating;
        }else{
            $this->rating="NR";
          }
      }
    }
     $movie1= new Movie("Hatty potter", "DOG");
     //$movie1->setRating("PG-13");
     echo $movie1->getRating();
     ?>

     <!--
     output;
     NR
     -->
  </body>
</html>
