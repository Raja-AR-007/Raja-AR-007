<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
                     <!--  GET & POST (1:35:52)   -->
                       <!--  GET  -->
    <form action="(14) GET & POST.php" method="get">
      password: <input type="password" name="password"><br>
      <input type="submit">
    </form>
    <?php
    echo $_GET["password"];
 //(URL Parameter) http://localhost:4000/(php)programs/get.php?password=%40RajaRock007
          /*
          "get" method will show the password in URL parameter
            it is not secure for password
          */
     ?>
     <!--
     output:
     Password: @RajaRock007
     submit
     @RajaRock007
     -->

                       <!--  POST  -->
     <form action="GET & POST.php" method="post">
       Password: <input type="password" name="password"><br>
       <input type="submit">
     </form>
     <?php
     /*
     echo $_POST["password"];
     //(URL Parameter) http://localhost:4000/(php)programs/post.php
          //"post" method won't show the password in URL parameter
          //for security purpose
       */
      ?>
      <!--
      output:
      Password: ************
      submit
      @RajaRock007
      -->

  </body>
</html>
