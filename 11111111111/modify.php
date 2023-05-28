<?php
include "connexion.php";
$sql="select * from util";
$users=mysqli_query($conn,$sql);
$results=mysqli_fetch_all($users,MYSQLI_ASSOC);
?>
<table style="border:1px solid black">
<tr><th>matricule</th><th>nom</th><th>genre</th><th>filiere</th><th>date</th><th>operations</th></tr>
<?php
foreach($results as $result){
echo'<tr>';
echo "<td>".$result['matricule']."</td>";
echo "<td>".$result['nom_prenom']."</td>";
echo "<td>".$result['genre']."</td>";
echo "<td>".$result['filiere']."</td>";
echo "<td>".$result['date']."</td>";
echo "<td><form action='update.php'>".'<input type="hidden" name="mat" value='.$result['matricule'].'>'.'<input type="submit" name="he" value="modify">'.'<input type="submit" name="hol" value="delete">'.'</form></td>';
echo'</tr>';
}
?>
</table>
<style>
    table, th, td {
  border: 1px solid;
}
    </style>
