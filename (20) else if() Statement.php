 <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
                <!-- else if() statement (2:19:10)    -->
    <?php
    $isMobile=false;
    $isCostly=true;
    if($isMobile && $isCostly){
      echo "you have mobile and it is costly";
    }else if($isMobile && !$isCostly){
      echo "you have mobile and it is not costly";
    }else if(!$isMobile && $isCostly){
      echo "you have no mobile and you have other product costly";
    }else{
      echo "you have no mobile";
    }
     ?>
     <!--
     output:
     you have no mobile and you have other product costly
     -->
  </body>
</html>
