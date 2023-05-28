
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<style>
#fname:focus, #lname:focus{
    outline:none;
}
</style>

<body style="background-color:gray;">
    <center>
        <div id="lnn" style="background-color:black;border:solid 2px;border-radius:10%;border-color:red;margin-top: 5em;width:500px;height: 600px;box-shadow: 10px 5px 500px red;"><h1 style="color:white;margin-top:2em;">Log In</h1>
        <h3 style="color:white;">Log into your account <br><br>
        if you haven't click <a href="signin.php"> Here</a></h3><br><br><br>
        <form method="POST" action="inscription_login.php">
            
        <i class="fa fa-user-o" aria-hidden="true" style="color:white;font-size:24px;"></i><input type="email"   id="fname" name="elmail" placeholder="    Username" style="border-color:white;color:white;background-color:black;border:none;border-bottom:solid 3px;margin-left:2em;"><br><br><br>
            
        <i class="fa fa-key" aria-hidden="true" style="color:white;font-size:24px;"></i><input type="password"  id="lname" name="pass" placeholder="    Password" style="border-color:white;color:white;background-color:black;border:none;border-bottom:solid 3px;margin-left:2em;"><br><br><br>
            <input type="submit" id="login" value="Log in" name="envoyer" style="color:white;background-color:black;border:solid 2px; width: 170px;height:30px;border-radius:10%;border-color:red;">
          </form>
          </div></center>
    <script src="sign.js"></script>
</body>
<script>
    
        
    </script>
</html>

