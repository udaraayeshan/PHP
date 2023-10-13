<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

          // String

         echo $myString = "CM'B"."<br>" ;
         echo "CMB"."<br>" ;
         echo $myString = 'CMB'."<br>" ;

         //Integer
         echo $myNumber =500 ."<br>";

         //Float

         echo $myFloat =10.24 ."<br>" ;

         //Boolean
          echo  $x = true;
          echo $y = false."<br>";

         //Array

         $cars = array("Volvo","BMW","Toyota");
             echo $cars["1"];

         //Null

         $myNumbers = Null;

         echo $myNumbers."<br>";
     
         //Object

         class Car {
            public $color;
            public $model;
            public function __construct($color, $model) {
              $this->color = $color;
              $this->model = $model;
            }
            public function message() {
              return "My car is a " . $this->color . " " . $this->model . "!";
            }
          }
          
          $myCar = new Car("black", "Volvo");
          echo $myCar -> message();
          echo "<br>";
          $myCar = new Car("red", "Toyota");
          echo $myCar -> message();




         //Resource
        
            /*The special resource type is not an actual data type. It is the storing of a reference to functions and resources external to PHP.

            A common example of using the resource data type is a database call.

            We will not talk about the resource type here, since it is an advanced topic.

           */
         ?>

        

</body>
</html>