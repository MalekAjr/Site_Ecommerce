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
$fname=$_POST['fname'];
echo($fname);
$lname=$_POST['lname'];
echo($lname);
$lname1=$_POST['lname1'];
echo($lname1);

if(($fname <= 0) || ($lname <= 0) || ($lname1 <= 0) ) {
    header("location:signin.php");}
else {

/*$nu=$_POST['nu'];
echo($nu);  */
///***if(strlen($lname)<5 ){
    echo "Mot de passe courte";
    header("location:signin.php");
}
if(strlen($lname1)<5 ){
    echo 'Repeter Mot de passe courte';
    header("location:signin.php");
}
if(strlen($lname)>11){
    echo "Repeter mot de passe tres long";
    header("location:signin.php");
}
if(strlen($lname1)>11){
    echo 'Repeter mot de passe tres long';
    header("location:signin.php");
}


if(($lname == $lname1) and (($lname!="") and ($lname1!="") and ($fname!=""))){
echo 'mot de passe conforme';
 $sql='INSERT INTO sign VALUES("","'.$fname.'","'.$lname.'","'.$lname1.'")';

if($conn->query($sql)===TRUE){
    session_start();
    $_SESSION['fname']=$fname;
    $_SESSION['lname']=$lname;
    $_SESSION['id']=$id;
header('location:login.php');
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

