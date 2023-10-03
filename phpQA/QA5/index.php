
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="GET">

    <input type="text" name="name1">FirstWord</input>
</br>

    <input type="text" name="name2">SecondWord</input>

</br>
    <input type="submit"></input>

</br>
    </form>

    <?php 
    $var1 = $_GET["name1"];
    $var2 = $_GET["name2"];

    $var3 = $var1.$var2;

    echo $var3;


    
    ?>
    
</body>
</html>