

<?php

include_once 'dbc.php';

$fName =mysqli_real_escape_string($connet, $_POST['fristName']) ;                 
$lName =mysqli_real_escape_string($connet, $_POST['lastName']);
$eName =mysqli_real_escape_string($connet, $_POST['email']) ;
$pName =mysqli_real_escape_string($connet, $_POST['password']) ;

/* $fName =$_POST['fristName'];                  
$lName =$_POST['lastName'];
$eName =$_POST['email'];
$pName =$_POST['password'];  */





$sql ="INSERT INTO users (fristName,lastName,email,password)
VALUES ('$fName','$lName','$eName','$pName');";

$result = mysqli_query($connect,$sql);

header("Location:index.php?signup=success") ;           // me php file eka  run wela aye index.php ekata genna ganimata meya bawitha karayi

?>
