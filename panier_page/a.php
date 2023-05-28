<?php
include "connexion.php";
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
    <form method="post" action="create.php">
    <label>Matricule</label> <input type="text" name="mat"><br>
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
       <input type="submit" name="sub">
       <input type="submit" name="up" value="update">
    </form>
</body>
</html>