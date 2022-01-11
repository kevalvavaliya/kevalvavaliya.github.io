<?php
    $host="localhost";
    $user="root";
    $password="";
     
    $conn=mysqli_connect($host,$user,$password,'protfolio');
    if(!$conn)
     { 
         echo "database error".mysqli_error();
     }
    
?>