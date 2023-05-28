<?php
$hostname="localhost";
$username="root";
$password="";
$basename="site_commerce";
$conn=new mysqli($hostname,$username,$password,$basename);
if($conn->connect_error){
    die("you failed to connect to database");

}
$sql="select * from contact";
$users=mysqli_query($conn,$sql);
$results=mysqli_fetch_all($users,MYSQLI_ASSOC);
?>
<a href="../nouveau/index.php" style="margin-left:4em;margin-top:2em;position:absolute;">&#8592;</a><br>
<h2 style="margin-left:20em;">Table de Contact</h2>
<table style="border:1px solid black;margin-left:10em;">
<tr><th>Id&emsp;</th><th>Name</th><th>Email</th><th>Phone Number</th><th>Message</th><th>Date</th></tr>
<?php
foreach($results as $result){
echo'<tr>';
echo "<td>".$result['id']."</td>";
echo "<td>".$result['w3lName']."</td>";
echo "<td>".$result['w3lSender']."</td>";
echo "<td>".$result['phone']."</td>";
echo "<td>".$result['w3lMessage']."</td>";
echo "<td>".$result['date']."</td>";

echo "<td><form action='update_contact.php'>".'<input type="hidden" name="id" value='.$result['id'].'>'.'<input type="submit" name="he" style="background-color:green;color:white;" value="modify">'.'<input type="submit" name="hol"  style="background-color:red;color:white;margin-left:1em;" value="delete">'.'</form></td>';
echo'</tr>';
}
?>
</table>
<style>
    table, th, td {
  border: 1px solid;
}
    </style>
