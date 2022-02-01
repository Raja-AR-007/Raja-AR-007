<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
                  <!--  Basic Calculator (1:15:37)  -->
    <form action="(11) Basic Calculator.php" method="get">
      <input type="number" name="num1">
      <br>
      <input type="number" name="num2">
      <br>
      <input type="submit">
      <br>
    </form>
    Answer : <?php echo $_GET["num1"] - $_GET["num2"] ?>

  </body>
</html>
<br>
<br>
  <!--
  output:
  2
  3
  submit
  Answer : -1 -->
