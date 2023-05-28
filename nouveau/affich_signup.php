<?php
$hostname="localhost";
$username="root";
$password="";
$basename="site_commerce";
$conn=new mysqli($hostname,$username,$password,$basename);
if($conn->connect_error){
    die("you failed to connect to database");

}



$sql="select * from sign";
$users=mysqli_query($conn,$sql);
$results=mysqli_fetch_all($users,MYSQLI_ASSOC);
?>
<a href="../nouveau/index.php" style="margin-left:4em;margin-top:2em;position:absolute;">&#8592;</a><br>
<h2 style="margin-left:25em;">Table de Sign up</h2>
<table style="border:1px solid black;margin-left:25em;width: 500px;">
<tr><th>Id&emsp;</th><th>Email</th><th>Password</th></tr>
<?php
foreach($results as $result){
echo'<tr>';
echo "<td>".$result['id']."</td>";
echo "<td>".$result['fname']."</td>";
echo "<td>".$result['lname']."</td>";
echo "<td><form action='update_signup.php'>".'<input type="hidden" name="id" value='.$result['id'].'>'.'<input type="submit" name="he" style="background-color:green;color:white;" value="modify">'.'<input type="submit" name="hol"  style="background-color:red;color:white;margin-left:1em;" value="delete">'.'</form></td>';
echo'</tr>';
}
?>
</table>
</div>
<style>
    table, th, td {
  border: 1px solid;
}
    </style>




