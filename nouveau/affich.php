<?php
$hostname="localhost";
$username="root";
$password="";
$basename="site_commerce";
$conn=new mysqli($hostname,$username,$password,$basename);
if($conn->connect_error){
    die("you failed to connect to database");

}
$sql="select * from formulaire";
$users=mysqli_query($conn,$sql);
$results=mysqli_fetch_all($users,MYSQLI_ASSOC);
?>
<body>
  

<a href="../nouveau/index.php" style="margin-left:4em;margin-top:2em;position:absolute;">&#8592;</a><br>
<h2 style="margin-left:25em;">Table de Formulaire</h2><br>
<table style="border:1px solid black;margin-left:20em;">
<tr><th>Id&emsp;</th><th>Nom</th><th>Prenom</th><th>Email</th><th>Password</th><th>Repeat Pass</th><th>genre</th><th>Age</th><th>Insert</th></tr>
<?php
foreach($results as $result){
echo'<tr>';
echo "<td>".$result['id']."</td>";
echo "<td>".$result['nom']."</td>";
echo "<td>".$result['prenom']."</td>";
echo "<td>".$result['email']."</td>";
echo "<td>".$result['mot_de_passe']."</td>";
echo "<td>".$result['repeata']."</td>";
echo "<td>".$result['genre']."</td>";
echo "<td>".$result['age']."</td>";
echo "<td>".$result['inserta']."</td>";
echo "<td><form action='update.php'>".'<input type="hidden" name="id" value='.$result['id'].'>'.'<input type="submit" name="he" style="background-color:green;color:white;" value="modify">'.'<input type="submit" name="hol"  style="background-color:red;color:white;margin-left:1em;" value="delete">'.'</form></td>';
echo'</tr>';
}
?>
</table>
</body>
<style>
    table, th, td {
  border: 1px solid;
}
    </style>
