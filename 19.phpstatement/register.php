<?php

include_once 'dbc.php';

$fName =mysqli_real_escape_string($connet, $_POST['fristName']) ;      
$lName =mysqli_real_escape_string($connet, $_POST['lastName']);         
$eName =mysqli_real_escape_string($connet, $_POST['email']) ;
$pName =mysqli_real_escape_string($connet, $_POST['password']) ;


$sql ="INSERT INTO users (fristName,lastName,email,password)
VALUES ('$fName','$lName','$eName','$pName');";

$result = mysqli_query($connect,$sql);

header("Location:index.php?signup=success") ;   

?>