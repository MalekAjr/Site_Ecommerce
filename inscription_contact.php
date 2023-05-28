<?php
$hostname="localhost";
$username="root";
$password="";
$basename="site_commerce";
$conn=new mysqli($hostname,$username,$password,$basename);
if($conn->connect_error){
    die("you failed to connect to database");

}
if(isset($_POST['envoyer'])){
$w3lName=$_POST['w3lName'];
echo($w3lName);
$email=$_POST['email'];
echo($email);
$phone=$_POST['phone'];
echo($phone);
$w3lMessage=$_POST['w3lMessage'];
echo($w3lMessage);
$date=$_POST['date'];
echo($date);


if($logic=(($w3lName <= 0) || ($email <= 0) || ($phone <= 0) || ($w3lMessage <= 0) || ($date <= 0)) ) {             
    header("location:contact.php");}  
if (!$logic){


/*$nu=$_POST['nu'];
echo($nu);  */

 $sql='INSERT INTO contact VALUES("","'.$w3lName.'","'.$email.'","'.$phone.'","'.$w3lMessage.'","'.$date.'")';

if($conn->query($sql)===TRUE){
    SESSION_start();
    $_SESSION['id']=$id;
    $_SESSION['w3lName']=$w3lName;
    $_SESSION['email']=$email;
    $_SESSION['phone']=$phone;
    $_SESSION['w3lMessage']=$w3lMessage;
    $_SESSION['date']=$date;
header('location:home.php');
} else{
echo"Erreue :".$sql."<br>".$conn->error;
}
$conn->close();
}

else{
    echo'Mot de passe non valide';
} 

}

?>