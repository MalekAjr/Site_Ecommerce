<?php
include "connexion.php";
if (isset($_GET['hol'])){
    $a=$_GET['mat'];
    $sql="delete from util where matricule='$a'";
    $users=mysqli_query($conn,$sql);
    header("location:modify.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
$a=$_GET['mat'];
$sql="select * from util where matricule='$a'";
$users=mysqli_query($conn,$sql);
$results=mysqli_fetch_all($users,MYSQLI_ASSOC);
foreach($results as $result){
    echo"
<label>Matricule</label> <input type='text' value='".$result['matricule']."' disabled>"."<br>
       <label>Nom</label> <input type='text' value='".$result['nom_prenom']."' disabled>"."<br>
       <label>genre</label> <input type='text' value='".$result['genre']."' disabled>"."<br>
       <label>date</label> <input type='text' value='".$result['date']."' disabled>"."<br>
       <label>filiere</label><input type='text'value='".$result['filiere']."' disabled>"."<br>
       ";
}
echo'<form method="post" action="create.php">
<input type="hidden" name="mat" value="'.$a.'"
    <label>Matricule</label> <input type="text" name="mate" ><br>
       <label>Nom</label> <input type="text" name="prenom"><br>
       <label>genre</label> <br>
       <label>male</label><input type="radio" name="genre" value="male">
       <label>female</label><input type="radio" name="genre" value="female"><br>
       <label>date</label> <input type="date" name="date"><br>
       <label>filiere</label><br>
       <label>electrique</label><select name="filiere">
           <option value="info">info</option>
           <option value="electrique">electrique</option>
</select>
       <input type="submit" name="up" value="update">
    </form>';
?>
</body>
</html>