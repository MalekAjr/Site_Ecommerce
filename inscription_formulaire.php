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
$nom=$_POST['nom'];
echo($nom);
$prenom=$_POST['prenom'];
echo($prenom);
$email=$_POST['email'];
echo($email);
$mot_de_passe=$_POST['mot_de_passe'];
echo($mot_de_passe);
$repeat=$_POST['repeat'];
echo($repeat);

$age=$_POST['age'];
echo($age);
$genre=$_POST['genre'];

$choisir=$_POST['choisir'];
 

if(($nom <= 0) || ($prenom <= 0) || ($email <= 0) || ($mot_de_passe <= 0) || ($repeat <= 0) || ($age <= 0) || ($choisir <= 0)) {
    header("location:formulaire.php");}
else {

if($mot_de_passe==$repeat){
    echo'mot de pase conforme';

 $sql='INSERT INTO formulaire VALUES("","'.$nom.'","'.$prenom.'","'.$email.'","'.$mot_de_passe.'","'.$repeat.'","'.$age.'","'.$genre.'","'.$choisir.'")';

if($conn->query($sql)===TRUE){
header('location:signin.php');
} else{
echo"Erreue :".$sql."<br>".$conn->error;
}
$conn->close();
}

else{
    echo'Mot de passe non valide';
} 
}
}

?>