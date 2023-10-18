<?php include_once 'dbc.php';?>

/*<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">

        <input type="text" name="userid">
        <input type="submit" name="submit" value="Submit">

    </form>


    <?php 

    $data = 4;

    //Create a template
    $sql = "SELECT*FROM users WHERE id=? ";    // ? - Adahas wenne place holder ekak

    //Create Prepared Statement
    $stmt = mysqli_stmt_init($connect);

    //Prepare the preapared Statement
    

     if(!mysqli_stmt_prepare($stmt ,$sql)){
        echo "SQL statement Failed!";
      } else{
        //Bind the parameters to the placeholders }
        mysqli_stmt_bind_param($stmt , "s" , $data);

      }

     //Run parameters inside database
       mysqli_stmt_execute($stmt);


       $result = mysqli_stmt_get_result($stmt);

       while ($row = mysqli_fetch_assoc($result)) {
        echo $row['fristName']."<br>";
        }
    
    ?>


</body>
</html>
