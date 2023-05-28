<?php
include "../connect.php";
if(isset($_POST['envoyer'])){
$id=$_POST['id'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$email=$_POST['email'];
$password=$_POST['mot_de_passe'];
$repeat=$_POST['repeat'];
$genre=$_POST['genre'];
$age=$_POST['age'];
$inserta=$_POST['inserta'];
    $sql='INSERT INTO formulaire VALUES("'.$id.'","'.$nom.'","'.$prenom.'","'.$email.'","'.$mot_de_passe.'","'.$repeat.'","'.$genre.'","'.$age.'","'.$inserta.'")';
    if($conn->query($sql)===true){
        echo"nouvel enregistrement créé avecx succés";
    }
    else{
        echo"erreur:".$sql."<br>".$conn->error;
    }
}
  
if(isset($_POST['up'])){
     if(isset($_POST['nom']) and !empty($_POST['nom'])){
        $id=$_POST['id'];
         $a=$_POST['nom'];
         $sql="update formulaire set nom='$a' where id=$id";
         if($conn->query($sql)===true){
            echo "nom modifié avecx succés"."<br>";
        }
        else{
            echo"erreur:".$sql."<br>".$conn->error;
        }

     }
     if(isset($_POST['prenom']) and !empty($_POST['prenom'])){
        $id=$_POST['id'];
        $a=$_POST['prenom'];
        $sql="update formulaire set prenom='$a' where id=$id";
        if($conn->query($sql)===true){
            echo"prenom modifié avecx succés"."<br>";
        }
        else{
            echo"erreur:".$sql."<br>".$conn->error;
        }

    }
    if(isset($_POST['email']) and !empty($_POST['email'])){
        $id=$_POST['id'];
        $a=$_POST['email'];
        $sql="update formulaire set email='$a' where id=$id";
        if($conn->query($sql)===true){
            echo"email modifié avecx succés"."<br>";
        }
        else{
            echo"erreur:".$sql."<br>".$conn->error;
        }

    }
    if(isset($_POST['mot_de_passe']) and !empty($_POST['mot_de_passe'])){
        $id=$_POST['id'];
        $a=$_POST['mot_de_passe'];
        $sql="update formulaire set mot_de_passe='$a' where id=$id";
        if($conn->query($sql)===true){
            echo"mot_de_passe modifié succés";
        }
        else{
            echo"erreur:".$sql."<br>".$conn->error;
        }

    }
    if(isset($_POST['repeat']) and !empty($_POST['repeat'])){
        $id=$_POST['id'];
        $a=$_POST['repeat'];
        echo $a;
        $sql="update formulaire set repeata='$a' where id=$id";
        if(mysqli_query($conn,$sql)){
            echo"mot_de_passe modifié succés";
        }
        else{
            echo"erreur:".$sql."<br>".$conn->error;
        }

    }
    
    if(isset($_POST['genre']) and !empty($_POST['genre'])){
        $id=$_POST['id'];
        $genre=$_POST['genre'];
        $sql="update formulaire set genre='$genre' where id=$id";
        if($conn->query($sql)===true){
            echo"genre modifié succés";
        }
        else{
            echo"erreur:".$sql."<br>".$conn->error;
        }

    }
    if(isset($_POST['age']) and !empty($_POST['age'])){
        $id=$_POST['id'];
        $age=$_POST['age'];
        $sql="update formulaire set age=$age where id=$id";
        if($conn->query($sql)===true){
            echo"age modifié succés";
        }
        else{
            echo"erreur:".$sql."<br>".$conn->error;
        }

    }
    if(isset($_POST['choisir']) and !empty($_POST['choisir'])){
        $id=$_POST['id'];
        $a=$_POST['choisir'];
        $sql="update formulaire set inserta='$a' where id=$id";
        if($conn->query($sql)===true){
            echo"inserta modifié succés";
        }
        else{
            echo"erreur:".$sql."<br>".$conn->error;
        }

    }
    header("location:http://localhost/fashion1/nouveau/affich.php");

}
$conn->close();
?>