
<?php
include("connect.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $elmail = mysqli_real_escape_string($conn,$_POST['elmail']);
      $pass = mysqli_real_escape_string($conn,$_POST['pass']); 
      
      $sql = "SELECT id FROM log WHERE elmail = '$elmail' and pass = '$pass'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_register("elmail");
         $_SESSION['login_user'] = $elmail;
         
         header("location: home.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }

   if(session_destroy()) {
    header("Location: login.php");
 }
?>
