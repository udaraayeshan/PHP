

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

      /*PHP Operators
Operators are used to perform operations on variables and values.

PHP divides the operators in the following groups:

Arithmetic operators
Assignment operators
Comparison operators
Increment/Decrement operators
Logical operators
String operators
Array operators
Conditional assignment operators  */

    // 1.PHP Arithmetic Operators { + - * / % **}
    
    $x = 10;  
    $y = 6;

     echo $x + $y ."<br>";
     echo "<br>";
    
     echo $x - $y ."<br>";
     echo $x * $y ."<br>";
     echo $x / $y ."<br>";
     echo $x % $y ."<br>";
     echo $x ** $y ."<br>";
    

    //2.PHP Assignment Operators { = =+ -= *= /= %= }
    
    echo "<br>";
    echo "<br>";

    $x = 10;  
    echo $x;

    echo "<br>";
    echo "<br>";

    $x = 20;  
    $x += 100;

    echo $x;

    echo "<br>";

    $x = 50;
    $x -= 30;
    echo $x;
    echo "<br>";

    $x = 5;
    $x *= 6;
    echo $x;
    echo "<br>";

    $x = 10;
    $x /= 5;
    echo $x;
    echo "<br>";

    $x = 15;
    $x %= 4;
    echo $x;
 
    echo "<br>";
    echo "<br>";
    echo "<br>";

    //3.PHP Comparison Operators  {}

    /*Operator	         Name	         Example	              Result	
      ==	           Equal	       $x == $y	        Returns true if $x is equal to $y	
      ===	        Identical	      $x === $y	        Returns true if $x is equal to $y, and they are of the same type	
      !=	       Not equal	     $x != $y	        Returns true if $x is not equal to $y	
      <>	        Not equal	     $x <> $y	        Returns true if $x is not equal to $y	
     !==	       Not identical	  $x !== $y	        Returns true if $x is not equal to $y, or they are not of the same type	
     >	           Greater than	      $x > $y	        Returns true if $x is greater than $y	
     <	            Less than	      $x < $y	        Returns true if $x is less than $y	
     >=	    Greater than or equal to	$x >= $y	    Returns true if $x is greater than or equal to $y	
     <=	         Less than or equal to	$x <= $y	    Returns true if $x is less than or equal to $y	
     <=>	     Spaceship	          $x <=> $y	        Returns an integer less than, equal to, or greater than zero, depending on if $x is less than, equal to, or greater than $y. Introduced in PHP 7.
    
     */
     
     $x = 50;  
     $y = "50";
     var_dump($x == $y); // returns true because values are equal

     echo "<br>";
     echo "<br>";

      $x = 100;  
      $y = "100";
      var_dump($x === $y); // returns false because types are not equal

      echo "<br>";
      echo "<br>";

      $x = 100;  
      $y = "100";
      var_dump($x != $y); // returns false because values are equal

      echo "<br>";
      echo "<br>";

      $x = 100;  
      $y = "100";
      
      var_dump($x <> $y); // returns false because values are equal
      
     
     echo "<br>";
     
     $x = 100;
     $y = 50;
     
     var_dump($x > $y); // returns true because $x is greater than $y

     echo "<br>";
     echo "<br>";

     $x = 50;
     $y = 50;
     var_dump($x >= $y); // returns true because $x is greater than or equal to $y

     echo "<br>";
     echo "<br>";

    //4.PHP Increment / Decrement Operators { }

    /* Operator	     Name	                Description	
    ++$x	   Pre-increment	      Increments $x by one, then returns $x	
    $x++	   Post-increment	      Returns $x, then increments $x by one	
    --$x	   Pre-decrement	      Decrements $x by one, then returns $x	
    $x--	   Post-decrement	      Returns $x, then decrements $x by one
*/
    

    $x = 10;  
    echo ++$x;
    echo "<br>";

    $x = 10;  
    echo $x++;
    echo "<br>";

    $x = 10;  
    echo --$x;
    echo "<br>";

    $x = 10;  
    echo $x--;
    echo "<br>";

    //5.PHP Logical Operators 

    $x = 100;  
    $y = 50;

    if ($x == 100 and $y == 50) {
    echo "Hello world!";
    }
    echo "<br>";



    $x = 100;  
    $y = 50;

    if ($x == 100 xor $y == 80) {
    echo "Hello world!" ;}
    
    echo "<br>";



    $x = 100;  
    $y = 50;

    if ($x == 100 && $y == 50) {
    echo "Hello world!";
    }

    echo "<br>";


    $x = 100;  
    $y = 50;

    if ($x == 100 || $y == 80) {
    echo "Hello world!";
    }
    
    echo "<br>";


    //6.PHP String Operators

    $txt1 = "Hello";
    $txt2 = " world!";
    echo $txt1 . $txt2;

    echo "<br>";


    $txt1 = "Hello";
    $txt2 = " world!";
    $txt1 .= $txt2;

    echo $txt1;


    //7.PHP Array Operators

    echo "<br>";
    $x = array("a" => "red", "b" => "green");  
    $y = array("c" => "blue", "d" => "yellow");  
    
    print_r($x + $y); // union of $x and $y

    echo "<br>";

    $x = array("a" => "red", "b" => "green");  
    $y = array("c" => "blue", "d" => "yellow");  

    var_dump($x == $y);

    echo "<br>";

    $x = array("a" => "red", "b" => "green");  
    $y = array("c" => "blue", "d" => "yellow");  

    var_dump($x === $y);

    echo "<br>";

    $x = array("a" => "red", "b" => "green");  
    $y = array("c" => "blue", "d" => "yellow");  

    var_dump($x != $y);

    echo "<br>";

    $x = array("a" => "red", "b" => "green");  
    $y = array("c" => "blue", "d" => "yellow");  

    var_dump($x <> $y);

    echo "<br>";
    
    $x = array("a" => "red", "b" => "green");  
    $y = array("c" => "blue", "d" => "yellow");  

    var_dump($x !== $y);



    echo "<br>";

    //8.PHP Conditional Assignment Operators  {/?: ??}

    // if empty($user) = TRUE, set $status = "anonymous"
   echo $status = (empty($user)) ? "anonymous" : "logged in";
   echo("<br>");

   $user = "John Doe";
   // if empty($user) = FALSE, set $status = "logged in"
   echo $status = (empty($user)) ? "anonymous" : "logged in";

    echo "<br>";

   // variable $user is the value of $_GET['user']
   // and 'anonymous' if it does not exist
   echo $user = $_GET["user"] ?? "anonymous";
   echo("<br>");
  
   // variable $color is "red" if $color does not exist or is null
   echo $color = $color ?? "red";





   ?>  
    
</body>
</html>