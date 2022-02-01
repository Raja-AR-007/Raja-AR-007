<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
               <!--   Return Statement (2:12:10)   -->
    <?php
    function cube($num){
      echo "hello";  //it willl be print
      return $num* $num* $num;
      echo "hello";  //it willl not be print
    }
    $cubeResult=cube(5);
    echo $cubeResult;
    ?>
    <!--
    output:
    hello125  -->

  </body>
</html>
