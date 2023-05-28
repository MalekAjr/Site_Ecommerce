<?php
include "../connect.php";
if (isset($_GET['hol'])){
    $a=$_GET['id'];
    $sql="delete from contact where id='$a'";
    $users=mysqli_query($conn,$sql);
    header("location:affich_contact.php");
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
    <h2 style="margin-left:22em;">Gérer Table de Contact</h2>
    <div style="margin-left:20em;margin-top:3em;">
    <?php
$a=$_GET['id'];
$sql="select * from contact where id='$a'";
$users=mysqli_query($conn,$sql);
$results=mysqli_fetch_all($users,MYSQLI_ASSOC);
foreach($results as $result){
    echo"
       <label>Id    </label>    &nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <input type='text' value='".$result['id']."' disabled>"."<br>
       <label>Name   </label>   &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type='text' value='".$result['w3lName']."' disabled>"."<br>
       <label>Email </label> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type='text' value='".$result['w3lSender']."' disabled>"."<br>
       <label>Phone Number</label>&nbsp;&nbsp;&emsp;&emsp;<input type='text'value='".$result['phone']."' disabled>"."<br>
       <label>Message</label>&emsp;&emsp;&emsp;&emsp;&emsp;<input type='text'value='".$result['w3lMessage']."' disabled>"."<br>
       <label>Date</label>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;<input type='date'value='".$result['date']."' disabled>"."<br>
       ";
}
?>
</div>
<div style="margin-left:46em;margin-top:-8.5em;">
<?php
echo'<form method="post" action="create_contact.php">
<input type="hidden" name="id" value="'.$a.'"
    <label>Id</label>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="text" name="id" ><br><br>
    <label>Name</label>&nbsp;&nbsp;&nbsp;&emsp;&nbsp;&nbsp;&emsp;&emsp;&nbsp;<input type="text" name="w3lName"><br><br>
       <label>Email</label>&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;<input type="text" name="w3lSender"><br><br>
       <label>Phone</label> &nbsp;&emsp;&emsp;&emsp;&emsp;<input type="text" name="phone"><br><br>
       <label>Message</label> &nbsp;&emsp;&emsp;&emsp;<input type="text" name="w3lMessage"><br><br>
       <label>Date</label>&emsp;&emsp;&emsp;&emsp;&emsp;<input type="date" name="date"><br><br>

</select><br><br>
       <input type="submit" name="up" value="update" style="color:blue;background-color:white; border-color:blue;border-radius:20%;">
    </form>';
?>
</div>
</body>
</html>