<?php
include "../connect.php";
if (isset($_GET['hol'])){
    $a=$_GET['id'];
    $sql="delete from sign where id='$a'";
    $users=mysqli_query($conn,$sql);
    header("location:affich_signup.php");
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
<body><br>
<a href="../nouveau/index.php" style="margin-left:4em;margin-top:2em;position:absolute;">&#8592;</a><br>
    <h2 style="margin-left:22em;">Gérer Table de Sign up</h2>
    <div style="margin-left:16em;margin-top:3em;">
    <?php
$a=$_GET['id'];
$sql="select * from sign where id='$a'";
$users=mysqli_query($conn,$sql);
$results=mysqli_fetch_all($users,MYSQLI_ASSOC);
foreach($results as $result){
    echo"
       <label>Id    </label>    &emsp;&emsp;&emsp;&emsp;&emsp; <input type='text' value='".$result['id']."' disabled>"."<br>
       <label>Email </label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;<input type='text' value='".$result['fname']."' disabled>"."<br>
       <label>Password</label>&nbsp;&nbsp;&emsp;&emsp;<input type='text'value='".$result['lname']."' disabled>"."<br>
       <label>Repeat</label>&nbsp;&nbsp;&emsp;&emsp;&emsp;<input type='text'value='".$result['lname1']."' disabled>"."<br>
       ";
}
?>
</div>
<div style="margin-left:47em;margin-top:-5.5em;">
<?php
echo'<form method="post" action="create_admin_for_signup.php">
<input type="hidden" name="id" value="'.$a.'"
    <label>Id</label>  &nbsp;   &nbsp;&nbsp;&nbsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="text" name="id" ><br> 
       <label>Email</label> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="text" name="fname"><br>
       <label>Password</label> &nbsp&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="text" name="lname"><br>
       <label>Repeat Password</label> &nbsp;&nbsp;&emsp;&emsp;<input type="text" name="lname1"><br><br>
       <input type="submit" name="up" value="update" style="color:blue;background-color:white; border-color:blue;border-radius:20%;">
    </form>';
?>
</div>
</body>
</html>