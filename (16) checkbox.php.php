<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
                    <!--  checkbox (1:50:26)   -->
    <form action="(16) checkbox.php" method="post">
      Apple: <input type="checkbox" name="fruits[]" value="apple"><br>
      Orange: <input type="checkbox" name="fruits[]" value="orange"><br>
      Banana: <input type="checkbox" name="fruits[]" value="banana"><br>
      <input type="submit">
    </form>
    <?php
     $fruit= $_POST["fruits"];
     echo $fruit[1];
    ?>
    <!--
    output:
    Apple:[selected]   //[] it is checkbox
    Orange:[]
    Banana:[]
    Mango:[]
    Submit
    apple
  -->

  </body>
</html>
