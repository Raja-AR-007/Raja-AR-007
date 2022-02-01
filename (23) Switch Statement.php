<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
                 <!--  Switch Statement ()  -->
    <form action="(23) Switch Statement.php" method="get">
      Enter your name:
      <input type="text" name="studentName"><br>
      <input type="submit">
    </form>
    <?php
    $name=$_GET["studentName"];
    switch($name){
      case "raja":
      echo "your are pass";
      break;
      case "kumar":
      echo "your are pass";
        break;
      case "gopi":
      echo "your are pass";
        break;
      case "kavin":
      echo "your are pass";
        break;
      default:
      echo "your are fail because your name is not in the list";
        break;
    }
    ?>
    <!--
    output:
    Enter your name: raja
    sumiit
    your are pass  -->

    <!--
    output:
    Enter your name: kesavan
    sumiit
    your are fail because your name is not in the list  -->

                      <!--   Associative Array (own program)  -->
    <!--
    <form action="Switch Statement.php" method="get">
      Enter your name:
      <input type="text" name="studentName"><br>
      <input type="submit">
    </form>
    <?php
    /*
    $result=array("raja"=>"pass","santhosh"=>"pass", "kaviya"=>"pass","kavin"=>"pass");
    $result["ram"]="pass";
    echo $result[$_GET["studentName"]]; */
     ?>  -->
     <!--
     output:
     Enter your name: raja
     submit
     pass  -->

  </body>
</html>
