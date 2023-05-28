<?php
include "../connect.php";
if(isset($_POST['envoyer'])){
$id=$_POST['id'];
$nom=$_POST['fname'];
$pass=$_POST['lname'];
$pass1=$_POST['lname1'];


    $sql='INSERT INTO contact VALUES("'.$id.'","'.$nom.'","'.$pass.'","'.$pass1.'")';
    if($conn->query($sql)===true){
        echo"nouvel enregistrement créé avecx succés";
    }
    else{
        echo"erreur:".$sql."<br>".$conn->error;
    }
}
  
if(isset($_POST['up'])){
     if(isset($_POST['fname']) and !empty($_POST['fname'])){
        $id=$_POST['id'];
         $a=$_POST['fname'];
         $sql="update sign set fname='$a' where id=$id";
         if($conn->query($sql)===true){
            echo "nom modifié avecx succés"."<br>";
        }
        else{
            echo"erreur:".$sql."<br>".$conn->error;
        }
    }
     if(isset($_POST['lname']) and !empty($_POST['lname'])){
        $id=$_POST['id'];
        $a=$_POST['lname'];
        $sql="update sign set lname='$a' where id=$id";
        if($conn->query($sql)===true){
            echo"pass  modifié avecx succés"."<br>";
        }
        else{
            echo"erreur:".$sql."<br>".$conn->error;
        }
    }
        if(isset($_POST['lname1']) and !empty($_POST['lname1'])){
            $id=$_POST['id'];
            $a=$_POST['lname1'];
            $sql="update sign set lname1='$a' where id=$id";
            if($conn->query($sql)===true){
                echo"pass1  modifié avecx succés"."<br>";
            }
            else{
                echo"erreur:".$sql."<br>".$conn->error;
            }

        }
    }
     
    

    header("location:http://localhost/fashion1/nouveau/affich_signup.php");

$conn->close();
?>
