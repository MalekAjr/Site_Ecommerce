<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>

<body style="background-color:gray;">
    <center>
        <div id="lnn" style="background-color:black;border:solid 2px;border-radius:10%;border-color:red;margin-top: 5em;width:500px;height: 600px;box-shadow: 10px 5px 500px red;"><h1 style="color:white;margin-top:2em;">Sign Up</h1>
        <h3 style="color:white;">New member? if you have alredy<br><br>
account click <a href="login.php"> Here</a></h3><br>
        <form method="POST" action="inscription_signin.php" id="forma">
            
        <i class="fa fa-envelope-o" aria-hidden="true" style="color:white;font-size:24px;box-shadow: 10px 5px 20px red;"><input type="email"   id="fname" name="fname" placeholder="    Email" style="border:solid 5px;border-color:white;color:white;background-color:black;solid 5px;margin-left:1em;"></i> <br><br><br>
            
            <p id="msg1" style="color:white;margin-top:-15px;"></p> 
        <i class="fa fa-unlock-alt fa-lg" aria-hidden="true" style="color:white;font-size:24px;box-shadow: 10px 5px 20px red;"><input type="password"  id="lname" name="lname" placeholder="    Password" style="border:solid 5px;border-color:white;color:white;background-color:black;solid 5px;margin-left:1em;"></i><br><br><br>
           <p id="msg" style="color:white;margin-top:-15px;"></p>
        <i class="fa fa-repeat fa-lg" aria-hidden="true" style="color:white;font-size:24px;box-shadow: 10px 5px 20px red;"><input type="password"  id="lname1" name="lname1" placeholder="    Repeat  Password" style="border:solid 5px;border-color:white;color:white;background-color:black;solid 5px;margin-left:1em;"></i><br><br><br>
            <input type="submit" id="login" value="Log in" name="envoyer" style="color:white;background-color:black;border:solid 2px; width: 170px;height:30px;border-radius:10%;border-color:red;margin-left:2.5em;">
          </form>
          <p id="msg2" style="color:white;"></p>
          </div></center>
    <script src="sign.js"></script>
</body>
</html>