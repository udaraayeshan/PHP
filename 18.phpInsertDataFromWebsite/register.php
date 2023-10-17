

<?php

include_once 'dbc.php';

$fName =$_POST['fristName'];
$lName =$_POST['lastName'];
$eName =$_POST['email'];
$pName =$_POST['password'];

$sql ="INSERT INTO users (fristName,lastName,email,password)
VALUES ('$fName','$lName','$eName','$pName');";

$result = mysqli_query($connect,$sql);

header("Location:index.php?signup=success") ;           // me php file eka  run wela aye index.php ekata genna ganimata meya bawitha karayi

?>
