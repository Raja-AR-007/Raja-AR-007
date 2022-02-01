<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

   <!--
   <form action="(21)-Function-if-Statement-Comparison.php" method="get">
     Enter number 1: <input type="number" name="number1"><br>
     Enter number 2:<input type="number" name="number2"><br>
     <input type="submit">
   </form>
    Result: <?php
    //echo $_GET[max("number1","number2")];
     ?>
   -->
     <!--
     output:
     Enter number 1: 2

     Enter number 2: 3

     Result: 3
   -->

                <!-- if Statement (con't) comparison (2:37:16) -->
                        <!-- Which is greater -->
    <form action="(21) Function if Statement Comparison.php" method="POST">
      Enter num1: <input type="number" name="num1"><br>
      Enter num2: <input type="number" name="num2"><br>
      Enter num3: <input type="number" name="num3"><br>
      <input type="submit">
    </form>
      Result: <?php
      function getMax($num1,$num2,$num3){
        if($num1 > $num2 && $num1 > $num3){
          return $num1;
        }else if($num2 > $num1 && $num2 > $num3){
          return $num2;
        }else{
          return $num3;
        }
      }
        echo $_POST[getMax("num1", "num2", "num3")];
       ?>
       <!--
       output:
        Enter num1: 11

        Enter num2: 21

        Enter num3: 32
       submit
       Result: 32
       -->

               <!--  if Statement comparison -->
      <!--
      <?php
        /*
        $num1=1;
        $num2=6;
        $num3=8;
       if($num1 > $num2 && $num1 > $num3){
         echo $num1;
       }else if($num2 > $num1 && $num2 > $num3){
         echo $num2;
       }else{
         echo $num3;
       }
       */
       /*
       output:
       8
       */
       ?>
      -->

   </body>
</html>
