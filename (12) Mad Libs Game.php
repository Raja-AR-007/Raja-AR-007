<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
                       <!--  Mad Libs Game (1:22:13)  -->
    <form action="(12) Mad Libs Game.php" method="get">
      color: <input type="text" name="color"><br>
      plural noun: <input type="text" name="pluralNoun"><br>
      celebrity: <input type="text" name="celebrity"><br>
      <input type="submit">
    </form>
    <?php
    $color=$_GET["color"];
    $pluralNoun=$_GET["pluralNoun"];
    $celebrity=$_GET["celebrity"];

    echo "Roses are $color<br>";
    echo "Violets are $pluralNoun<br>";
    echo "I love $celebrity <br>";
     ?>

   </body>
 </html>
<br>
<!--
output:
 color:Red

 plural noun:Violets

 celebrity:U
 submit

 Roses are Red
 Violets are Blue
 I love u -->
