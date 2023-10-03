<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="GET">
        <input type="text" name="username"></input>
        </br>
        </br>
        </br>
        <input type="submit" name="submit"></input>
    </form>

</br>


    <?php 
       $username= $_GET['username'];
        echo "My name is ".$username;
    ?>
 
    
</body>
</html>