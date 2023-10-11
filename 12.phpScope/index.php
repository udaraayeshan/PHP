<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
<?php
     
                //Global and Local scope

     /*$x = 10 ;  //Global Scope

     function FunctionName($x)
     {
         $y = $x*$x;
         echo $y."<br>";   //Local Scope
     }
  
     FunctionName($x);
     echo $x ;
     //echo $y ;  
                         */

            //Super Global


        $x = 10;
        function FunctionName()  // function ekata agayak noda ganna super global eka yodaganiyi
     {
         echo $GLOBALS['x'];
     }
  
     FunctionName();



                  //   $GLOBALS
                  //   $_POST
                  //   $_GET
                  //   $_COOKIE
                  //   $_SESSION


  ?>


</body>
</html>