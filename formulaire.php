<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body style="background-color:black;">
    <center>
        <div id="lnn" style="border:solid 2px;border-radius:10%;border-color:red;margin-top: 5em;width: 600px;;height: 650px;box-shadow: 10px 5px 500px white;"><h1 style="color:white;margin-top:1em;">Formulaire</h1>
        
        <form method="POST" action="inscription_formulaire.php" id="forma"><br>
            
<div style="color:white;">Nom:&emsp;&emsp;&emsp;&emsp;&emsp;<input type="text" size="40" name="nom"  id="nn" style="border:solid 5px;border-color:white;color:white;background-color:black;solid 5px;"></div><br>
<div style="color:white;">Prenom:&emsp;&emsp;&emsp;&emsp;<input type="text" size="40" name="prenom" id="pp" style="border:solid 5px;border-color:white;color:white;background-color:black;solid 5px;"><br><br>
<div style="color:white;">Email:&emsp;&emsp;&emsp;&emsp;&emsp;<input type="email" size="40" name="email" id="email" style="border:solid 5px;border-color:white;color:white;background-color:black;solid 5px;"><br><br>
<div style="color:white;">Mot de Passe:&emsp;&emsp;<input type="password" size="40" name="mot_de_passe" id="password" style="border:solid 5px;border-color:white;color:white;background-color:black;solid 5px;"><br><br>
<div style="color:white;margin-left:-2em;">RépéterMot de Passe:&emsp;<input type="password" size="40" name="repeat" id="repetermotd" style="border:solid 5px;border-color:white;color:white;background-color:black;solid 5px;"><br><br>
<div style="color:white;"><label>Genre:</label>&emsp;&emsp;&emsp;&nbsp;&emsp;&nbsp;&emsp;
            <input type="radio" size="30" name="genre" id="hf" value="femele">&emsp;&emsp;<label>Femme</label>&emsp;&emsp;
           <input type="radio" size="30" name="genre" id="hh" value="male">&emsp;&emsp;<label>Homme</label><br></div>
<div style="color:white;margin-left:4.5em;">Âge:&emsp;&emsp;&emsp;<input type="text" size="40" name="age" id="age" style="border:solid 5px;border-color:white;color:white;background-color:black;solid 5px;"><br><br>
<h3 style="margin-left:-6em;">Votre choix hors d'education: </h3>
<select name="choisir" id="Sujet" style="margin-left:8em;margin-top:-2em;position:absolute;">
    <option value="Football">Football</option>
    <option value="Coach">Coach</option>
    <option value="Player">Player</option>
</select><br>
<button type="submit" name="envoyer" class="btn btn-primary">  Submit  </button>&emsp;&emsp;<input type="reset" value="Tout enlever" class="btn btn-secondary"> 
        </form>
          </div></center>
    <script src="sign - Copie.js"></script>
</body>
</html>