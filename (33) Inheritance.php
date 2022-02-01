<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
                     <!--   Inheritance (4:29:17)   -->
          <!--
          Inheritence means we can Inherit (or) use all the Main Class's Functions
          in the Intherited sub Class.
          -->
          <!--             OverRiding Function
          OverRiding means We can OverRide one of the Main Class's Functions
          in the sub Class (which means also in Inherited sub Class).
          -->
  <?php
  class Chef {  //Main Class
    function makeChicken(){
      echo "The chef make chicken <br>";
    }
    function makeMutton(){
      echo "The chef make mutton <br>";
    }
    function makeSpecialDish(){
      echo "The chef make bbq ribs <br>";
    }
  }
  class ItalianChef extends Chef{   //Inheritted Sub Class
    function makePasta(){
      echo "The Italian chef makes pasta <br> ";
    }
    function makeSpecialDish(){  //Function Overriding concept
      echo "The italian chef make chicken parms <br>";
    }
  }
    $chef= new Chef();
    $chef->makeSpecialDish();

    $italianChef= new ItalianChef();
    $italianChef->makeSpecialDish();

  ?>
  <!--
  output:
  The chef make bbq ribs
  The italian chef make chicken parms
  -->
  </body>
</html>
