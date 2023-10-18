<?php include_once 'dbc.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

 <form method="POST" action="register.php" > <!-- action ekata php file eka dunna nisa
                                                   register.php file ekata yanawa submit eka dunna gaman -->

<input type="text" name="fristName" placeholder="Frist Name"><br>
<input type="text" name="lastName" placeholder="Last Name"><br>
<input type="text" name="email" placeholder="E-mail"><br>
<input type="password" name="password" placeholder="Password"><br>
<button type="submit" name="submit">Register</button>

</form>


</body>
</html>