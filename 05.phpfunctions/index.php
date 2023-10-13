<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        //  1.Predetermined Function
       
       echo strrev("udara")."<br>";
       echo str_word_count("udara ayeshan")."<br>";
       echo strpos("CMB is youtube channel"  ,"y")."<br>";

                // Math Function

                echo sin(90)."<br>";
                echo cos(90)."<br>";
                echo log10(100)."<br>";


               // mail("ayeshan9821udara@gmail.com" , "subject" , message)


       //   2. User Defined  Function

               /*  

               function functionName() {
                  code to be executed;
                }


                 */

                 
               function writeMsg() {
                 echo "Hello world!"."<br>";
            }

                writeMsg(); // call the function

                function familyName($fname, $year) {
                    echo "$fname Refsnes. Born in $year <br>";
                  }
                  
                  familyName("Hege", "1975");
                  familyName("Stale", "1978");
                  familyName("Kai Jim", "1983");


        

    ?>




</body>
</html>