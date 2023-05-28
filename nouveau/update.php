<?php
include "../connect.php";
if (isset($_GET['hol'])){
    $a=$_GET['id'];
    $sql="delete from formulaire where id='$a'";
    $users=mysqli_query($conn,$sql);
    header("location:affich.php");
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
<a href="../nouveau/index.php" style="margin-left:4em;margin-top:2em;position:absolute;">&#8592;</a><br>
    <div style="margin-left:15em;margin-top:3em;">
    <h2 style="margin-left:12em;">Gérer Table de Formulaire</h2><br><br>
    <?php
$a=$_GET['id'];
$sql="select * from formulaire where id='$a'";
$users=mysqli_query($conn,$sql);
$results=mysqli_fetch_all($users,MYSQLI_ASSOC);
foreach($results as $result){
    echo"
       <label>Id    </label>    &emsp;&emsp;&emsp;&emsp;&emsp; <input type='text' value='".$result['id']."' disabled>"."<br>
       <label>Nom   </label>   &emsp;&emsp;&emsp;&emsp;<input type='text' value='".$result['nom']."' disabled>"."<br>
       <label>prenom</label> &emsp;&emsp;&emsp;<input type='text' value='".$result['prenom']."' disabled>"."<br>
       <label>Email </label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;<input type='text' value='".$result['email']."' disabled>"."<br>
       <label>Password</label>&nbsp;&nbsp;&emsp;&emsp;<input type='text'value='".$result['mot_de_passe']."' disabled>"."<br>
       <label>Repeat</label>&nbsp;&nbsp;&emsp;&emsp;&emsp;<input type='text'value='".$result['repeata']."' disabled>"."<br>
       <label>Genre</label>&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;<input type='text'value='".$result['genre']."' disabled>"."<br>
       <label>Age</label>&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;<input type='text'value='".$result['age']."' disabled>"."<br>
       <label>Choix</label>&nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;<input type='text'value='".$result['inserta']."' disabled>"."<br>
       ";
}
?>
</div>
<div style="margin-left:46em;margin-top:-12.5em;">
<?php
echo'<form method="post" action="create_admin.php">
<input type="hidden" name="id" value="'.$a.'"
    <label>Id</label>  &nbsp;   &nbsp;&nbsp;&nbsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="text" name="id" ><br>
    <label>Nom&nbsp;</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;&nbsp;&emsp;&emsp;&emsp;<input type="text" name="nom"><br>
       <label>Prenom</label> &nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="text" name="prenom"><br>
       <label>Email</label> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="text" name="email"><br>
       <label>Password</label> &nbsp&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="text" name="mot_de_passe"><br>
       <label>Repeat Password</label> &nbsp;&nbsp;&emsp;&emsp;<input type="text" name="repeat"><br>
       <label>genre</label> <br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
       <label>male</label><input type="radio" name="genre" value="male">&emsp;&emsp;&emsp;&emsp;
       <label>femele</label><input type="radio" name="genre" value="femele"><br>
       <label>Age</label> &nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="number" name="age"><br>
       <label>Choix</label>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<select name="choisir" style="width:168px;">&emsp;&emsp;&emsp;&emsp;&emsp;
           <option value="FootBall">FootBall</option>
           <option value="Coach">Coach</option>
           <option value="Player">Player</option>
</select><br><br>
       <input type="submit" name="up" value="update" style="color:blue;background-color:white; border-color:blue;border-radius:20%;">
    </form>';
?>
</div>
</body>
</html>