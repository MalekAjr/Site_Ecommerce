<?php
include "../connect.php";
if(isset($_POST['envoyer'])){
$id=$_POST['id'];
$w3lName=$_POST['w3lName'];
$w3lSender=$_POST['w3lSender'];
$phone=$_POST['phone'];
$w3lMessage=$_POST['w3lMessage'];
$date=$_POST['date'];

    $sql='INSERT INTO contact VALUES("'.$id.'","'.$w3lName.'","'.$w3lSender.'","'.$phone.'","'.$w3lMessage.'","'.$date.'")';
    if($conn->query($sql)===true){
        echo"nouvel enregistrement créé avecx succés";
    }
    else{
        echo"erreur:".$sql."<br>".$conn->error;
    }
}
  
if(isset($_POST['up'])){
     if(isset($_POST['w3lName']) and !empty($_POST['w3lName'])){
        $id=$_POST['id'];
         $a=$_POST['w3lName'];
         $sql="update contact set w3lName='$a' where id=$id";
         if($conn->query($sql)===true){
            echo "Name modifié avecx succés"."<br>";
        }
        else{
            echo"erreur:".$sql."<br>".$conn->error;
        }

     }
     if(isset($_POST['w3lSender']) and !empty($_POST['w3lSender'])){
        $id=$_POST['id'];
        $a=$_POST['w3lSender'];
        $sql="update contact set w3lSender='$a' where id=$id";
        if($conn->query($sql)===true){
            echo"Email modifié avecx succés"."<br>";
        }
        else{
            echo"erreur:".$sql."<br>".$conn->error;
        }

    }
        if(isset($_POST['phone']) and !empty($_POST['phone'])){
            $id=$_POST['id'];
            $a=$_POST['phone'];
            $sql="update contact set phone='$a' where id=$id";
            if($conn->query($sql)===true){
                echo"phone modifié avecx succés"."<br>";
            }
            else{
                echo"erreur:".$sql."<br>".$conn->error;
            }
        }
        if(isset($_POST['w3lMessage']) and !empty($_POST['w3lMessage'])){
            $id=$_POST['id'];
            $a=$_POST['w3lMessage'];
            $sql="update contact set w3lMessage='$a' where id=$id";
            if($conn->query($sql)===true){
                echo"Email modifié avecx succés"."<br>";
            }
            else{
                echo"erreur:".$sql."<br>".$conn->error;
            }
    
        }
            if(isset($_POST['date']) and !empty($_POST['date'])){
                $id=$_POST['id'];
                $a=$_POST['date'];
                $sql="update contact set date='$a' where id=$id";
                if($conn->query($sql)===true){
                    echo"Email modifié avecx succés"."<br>";
                }
                else{
                    echo"erreur:".$sql."<br>".$conn->error;
                }

    }
    

    }
    header("location:http://localhost/fashion1/nouveau/affich_contact.php");

$conn->close();
?>