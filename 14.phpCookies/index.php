<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php

setcookie('name' ,"CMB" ,time()+86400)  //cookie eka delet karanna rina agayak dunnama hari(hakerlata access karanna lehesiyi)

$_SESSION['name'] = "DTK";            //(hakerlata access karanna amaruyi)

?>
</body>
</html>