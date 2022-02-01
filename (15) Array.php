<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
                   <!--  Array (1:41:44)  -->
    <?php
    $names=array("raja","ravi",5,"mani"); //Array format in php
    $names[4]="boobesh";
    $names[5]="hasan"; //in this line we can change or add the index value
    echo $names[2];
    echo "<br>";
    echo $names[0];
      echo "<br>";
      echo count($names);
     ?>
     <!--
     output:
     5
     raja
     6
   -->

  </body>
</html>
