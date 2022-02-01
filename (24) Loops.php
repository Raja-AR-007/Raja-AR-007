<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
                      <!--  Loops   -->

    <?php

    //                  While Loop (3:05:10)
    /*
    $index=1;
    while($index<=5){
      echo "$index <br>";
      $index++;
    }
    */

     /*
     output:
     1
     2
     3
     4
     5   */

     /*
     $index=6;
     while($index<=5){
       echo "$index <br>";
       $index++;
     }*/

     /*output:
    (Empty) */

      //                  do Loop
     /*
     $index=6;
     do{
       echo "$index <br>";
       $index++;
     } while($index<=5);*/

      /*
      output:
      6 */

        /*
        $index=1;
        do{
          echo "$index <br>";
          $index++;
        } while($index<=5);*/

        /*
        output:
        1
        2
        3
        4
        5   */

      //                  for Loop
      /*
      for($i=1; $i<=5; $i++){
        echo "$i <br>";
      }  */

      /*
      output:
      1
      2
      3
      4
      5   */

      //                 array for Loop
      $numbers=array(2, 3, 4, 7, 8);
      for($i=0; $i<count($numbers); $i++){
        echo "$numbers[$i] <br>";
      }

      /*
      output:
      2
      3
      4
      7
      8   */

      ?>

  </body>
</html>
