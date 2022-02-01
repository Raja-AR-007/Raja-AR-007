<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
                 <!--   Getting input from user (1:05:14)   -->
    <form action="(10) Getting input from user.php" method="get">
      Name :<input type="text" name="userName">
      <br>
      Father's Name : <input type="text" name="Father">
      <br>
      Mother's Name : <input type="text" name="Mother">
      <br>
      <input type="submit">
      <br>
    </form>
    Your name is <?php echo $_GET["userName"]  ?>
    <br>
    Your Father's name is <?php echo $_GET["Father"]  ?>
    <br>
    Your Mother's name is <?php echo $_GET["Mother"]  ?>
    <!--
    output:
    Name :
    Father's Name :
    Mother's Name :
    submit
    Your name is Raja
    Your Father's name is Arunachalam
    Your Mother's name is Thavamani
    -->

  </body>
</html>
