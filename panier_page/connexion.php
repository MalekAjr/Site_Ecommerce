<?php
$hostname="localhost";
$username="root";
$password="";
$basename="users";
$conn=mysqli_connect($hostname,$username,$password,$basename);
if($conn->connect_error){
    die("you failed to connect ".$conn->connect_error);
}


?>