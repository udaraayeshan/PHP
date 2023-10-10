<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
     <?php
       // 1.while Loop
        
       /* $x = 50;

        while($x <= 10) {
             echo " CMB"."<br>";
             $x++;
        }  */
     
       // 2.Do while Loop

     //   $x = 50;

     //  do {
     //        echo " CMB"."<br>";
     //        $x++;
     //   } while($x <= 10)

      // 3.For Loop

         for ($x = 0; $x <= 10; $x++) {
          echo "The number is: $x <br>";
     }

    echo "<br>";


     //

     $colors = array("red", "green", "blue", "yellow");

     foreach ($colors as $value) {
             echo "CMB $value <br>";
        }

        echo "<br>";

// Break/Continue

        for ($x = 0; $x < 10; $x++) {
          if ($x == 4) {
            break;
          }
          echo "The number is: $x <br>";
        }

        echo "<br>";

        for ($x = 0; $x < 10; $x++) {
          if ($x == 4) {
            continue;
          }
          echo "The number is: $x <br>";
        }



     ?>

     


</body>
</html>