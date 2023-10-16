<?php
     session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<ul>
     <li><a href="index.php">Home</a></li>
     <li><a href="user_page.php">User</a></li>
</ul>
    
<?php 
/*$_SESSION['username'] ='CryptoMoneyBro';
echo $_SESSION['username'];*/

        if(!isset($_SESSION['username'])){
            echo "You are not log in";
        }else {
            echo "You are log in";
        }
?>
</body>
</html>