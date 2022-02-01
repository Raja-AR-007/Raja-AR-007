<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
                   <!--  Associative Array (1:57:22)  -->
<!--
  <?php
    /*$bloodGroups=array("raja"=>"O+", "kumar"=>"B-", "oviya"=>"A1+", "priya"=>"O-");
    $bloodGroups["raja"]="B1+";  //we can change or add values
    echo $bloodGroups["raja"];*/
    ?>
-->
   <!--
   output:
    B1+   -->

               <!--  Associative Array (input from the user) -->
    <form action="(17) Associative Array.php" method="post">
      Name: <input type="terxt" name="student"><br>
      <input type="submit">
    </form>
    blood group is: <?php
    $bloodGroups=array("raja"=>"O+", "kumar"=>"B-", "oviya"=>"A1+", "priya"=>"O-");
    $bloodGroups["ram"]="AB-";  //we can change or add values
    echo $bloodGroups[$_POST["student"]];
    ?>
    <!--
    output:
    Name: oviya
    Submit
    blood group is: A1+ -->


  </body>
</html>
