<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
                      <!--  URL Parameter (1:28:59)  -->
    <form action="(13) URL Parameter.php" method="get">
      Name :<input type="text" name="userName">
      <br>
      <input type="submit">
      <br>
    </form>
    <?php echo $_GET["userName"] ?>
    <br>
    <?php

    //                  URL Parameter
    //echo $_GET["age"] //http://localhost:4000/(php)programs/input.php?userName=raja&age=20
                      //we can change or insert a the values from the URL parameter
     ?>

  </body>
</html>
