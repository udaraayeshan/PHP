<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

     <form method="get">
       <input type ="text" name="userchannel">
       <button type="submit">Submit</button>
     </form>
     

<?php
   
   $myname = $_GET['userchannel'];
   echo $myname." is crypto channel";

   
?>
</body>
</html>
