<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
            <!--  Better Calculator (2:47:13)  -->
    <form action="(22) Better Calculator.php" method="post">
      Number 1: <input type="number" name="num1"><br>
      Number 1: <input type="number" name="num2"><br>
      Operator: <input type="text" name="op"><br>
      <input type="submit">
    </form>
    Answer: <?php
    $num1=$_POST["num1"];
    $num2=$_POST["num2"];
    $op=$_POST["op"];

    if($op=="+"){
      echo $num1+$num2;
    }else if($op=="-"){
      echo $num1-$num2;
    }else if($op=="/"){
      echo $num1/$num2;
    }else if($op=="*"){
      echo $num1*$num2;
    }else if($op=="^"){
      echo pow($num1,$num2);  // new own step
    }else if($op=="%"){
      echo $num1%$num2;
    }else{
      echo "invalid operator";
    }
     ?>
     <!--
     output:
     Number 1: 2

     Number 1: 3

    Operator: ^
    Submit
    Answer: 8
   -->

  </body>
</html>
