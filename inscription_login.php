
<?php
$hostname="localhost";
$username="root";
$password="";
$dbname="site_commerce";
$conn=new mysqli($hostname,$username,$password,$dbname);
if($conn->connect_error){
    die("you failed to connect to database");

}

if(isset($_POST['envoyer'])){
    $elmail=$_POST['elmail'];
    echo($elmail);
    $pass=$_POST['pass'];
    echo($pass);

    
if(($elmail=='malek@gmail.com') && ($pass=='753') ){
    header('location:nouveau/index.php');
}
else {



$fname=$_POST['elmail'];
$lname=$_POST['pass'];
$sql = "SELECT fname, lname FROM sign where fname='$fname' and lname='$lname'";
$retval = mysqli_query(  $conn,$sql);
if(mysqli_num_rows($retval)==1){
    SESSION_start();
    $_SESSION['elmail']=$elmail;
    $_SESSION['pass']=$pass;
    $_SESSION['id']=$id;
header('location:home.php');

}
else{
    header('location:login.php');
}

$conn->close();

}
}

?>

