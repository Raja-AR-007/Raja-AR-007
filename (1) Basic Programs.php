<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    //              Writing HTML program in php (20:29)
     /*
      echo"<h1> Hello Raja </h1>";
      echo "<hr>";
      echo "<p> This is my server <br>
                This is my world <br>
                so don't come here </p>";
     echo "<hr>";
     */

   /*
   output:
     Hello Raja
     ____________________________________________
     This is my server
     This is my world
     so don't come here
     ____________________________________________
     */

   //                  Variables (Declaration) (27:30)
     /*
     $characterName="Kavin";
     $characterAge=23;
     echo "<p>There was one person name is $characterName <br>
            $characterName is $characterAge years old <br>
            And he is really like his name $characterName <br>
            And he don't want to be $characterAge</p>";
     */

      /*
        output:
        There was one person name is Kavin
        Kavin is 23 years old
        And he is really like his name Kavin
        And he don't want to be 23
      */

    //                   Data Types (38:09)
      /*
      $phrase = "To be or not to be";
      $age = 20;  //int
      $gpa = 3.74;  //double
      $isMale = true;  //boolean
      echo $isMale;
      */

    /*
    output:
      1      //if it is false it will show empty page
    */

      //                 String (working with string) (44:27)
      /*
      $phrase="Hello Raja";
      echo strtolower($phrase);   //Small letter
      echo "<br>";
      echo strtoupper($phrase);   //Capital letter
      echo "<br>";
      echo strlen($phrase);  //To find length
      */
      /*
      output:
      hello raja
      HELLO RAJA
      10
      */

      /*
      $phrase="Hello Raja";
      echo "Raja"[0];
      echo "<br>";
      echo $phrase[0]; //To find a letter from the the sentence by using index
      */
      /*
      output:
      R
      H
      */

      /*
      $phrase="Hello Raja";
      echo str_replace("Hello","Hai",$phrase); //To replace instead of */
      /*output:
      Hai Raja
      */

      /*
      $phrase="lions club";
      echo str_replace("s","Dates",$phrase);
      */
      /*
      output:
      lionDates club
      */

      /*
      $phrase="dragon booster";
      echo substr($phrase, 7); //New
      */
      /*
      output:
      booster
      */

      /*
      $phrase="dragon booster";
      echo substr($phrase, 7, 5); //New
      */
      /*
      output:
      boost
      */

      //                         Working with Numbers (54:50)

      /*
      echo 2+3;   //-, *, %, ^, etc...
      echo "<br>";
      echo min(2,3);
      echo "<br>";
      echo max(9,3);
      echo "<br>";
      echo round(5.5);
      echo "<br>";
      echo ceil(2.4);
      echo "<br>";
      echo floor(3.7);
      echo "<br>";
      echo pow(3,4);
      echo "<br>";
      echo sqrt(101);  */
      /*
      output:
      5
      2
      9
      6
      3
      3
      81
      10.049875621121      */

      //                   Simple program
      /*
      $num1=1;
      $num2=6;
      echo $num1 + $num2;  */
      /*
      output:
       7  */
      ?>

  </body>
</html>
