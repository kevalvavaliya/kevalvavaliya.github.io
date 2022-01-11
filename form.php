<?php
include 'connect.php';
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$msg=$_REQUEST['message'];

$sql = "insert into user(name,email,message) values ('".$name."','".$email."','".$msg."');";
echo $sql;
if($result= mysqli_query($conn,$sql))
{
    header('location:index.html');
}


?>