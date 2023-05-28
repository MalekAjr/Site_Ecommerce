<?php
include "connexion.php";
if(isset($_POST['sub'])){
$mat=$_POST['mat'];
$nom=$_POST['prenom'];
$genre=$_POST['genre'];
$date=$_POST['date'];
$filiere=$_POST['filiere'];
    $sql='INSERT INTO util VALUES("'.$mat.'","'.$nom.'","'.$genre.'","'.$date.'","'.$filiere.'")';
    if($conn->query($sql)===true){
        echo"nouvel enregistrement créé avecx succés";
    }
    else{
        echo"erreur:".$sql."<br>".$conn->error;
    }
}
  
if(isset($_POST['up'])){
     if(isset($_POST['prenom']) and !empty($_POST['prenom'])){
        $mat=$_POST['mat'];
         $a=$_POST['prenom'];
         $sql="update util set nom_prenom='$a' where matricule='$mat'";
         if($conn->query($sql)===true){
            echo "nom modifié avecx succés"."<br>";
        }
        else{
            echo"erreur:".$sql."<br>".$conn->error;
        }

     }
     if(isset($_POST['genre']) and !empty($_POST['genre'])){
        $mat=$_POST['mat'];
        $a=$_POST['genre'];
        $sql="update util set genre='$a' where matricule='$mat'";
        if($conn->query($sql)===true){
            echo"genre modifié avecx succés"."<br>";
        }
        else{
            echo"erreur:".$sql."<br>".$conn->error;
        }

    }
    if(isset($_POST['date']) and !empty($_POST['date'])){
        $mat=$_POST['mat'];
        $a=$_POST['date'];
        $sql="update util set date='$a' where matricule='$mat'";
        if($conn->query($sql)===true){
            echo"date modifié avecx succés"."<br>";
        }
        else{
            echo"erreur:".$sql."<br>".$conn->error;
        }

    }
    if(isset($_POST['filiere']) and !empty($_POST['filiere'])){
        $mat=$_POST['mat'];
        $a=$_POST['filiere'];
        $sql="update util set filiere='$a' where matricule='$mat'";
        if($conn->query($sql)===true){
            echo"filiere modifié succés";
        }
        else{
            echo"erreur:".$sql."<br>".$conn->error;
        }

    }
    if(isset($_POST['mate']) and !empty($_POST['mate'])){
        $mat=$_POST['mat'];
        $a=$_POST['mate'];
        $sql="update util set matricule='$a' where matricule='$mat'";
        if($conn->query($sql)===true){
            echo"filiere modifié succés";
        }
        else{
            echo"erreur:".$sql."<br>".$conn->error;
        }

    }
    header("location:modify.php");

}
$conn->close();
?>