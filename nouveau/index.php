<!DOCTYPE html>
<html>
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Yogic a Sports Category Bootstrap Responsive Website </title>
  <!-- google-fonts -->
  <link
    href="//fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,400;1,600;1,700&display=swap"
    rel="stylesheet">
  <!-- //google-fonts -->
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

<div style="margin-left:5em;">
  <!--header-->
  <header id="site-header" class="fixed-top" style="position:static">
    <div class="container">
      <nav class="navbar navbar-expand-lg stroke px-0">
      <h1>
                    <a class="navbar-brand" href="index.php">
                    <i class="fa"  aria-hidden="true"><img src="imageadmin.png" alt="" style="height: 80px;width: 80px;" id="f"></i>  Admin
                    </a>
                </h1>
        <!-- if logo is image enable this   
        <a class="navbar-brand" href="#index.php">
            <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
        </a> -->
        <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
          data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
          <span class="navbar-toggler-icon fa icon-close fa-times"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mx-lg-auto">
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/fashion1/home.php">Home <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item active">
              <a class="nav-link" href="http://localhost/fashion1/about.php">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/fashion1/classes.php">Classes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/fashion1/contact.php">Contact Us</a>
            </li>
          </ul>
        </div>
        
        <!-- search button -->
        <div class="search-right" style="margin-left:2em;">
          <a href="#search" title="search"><span class="fa fa-search" aria-hidden="true"></span></a>
          <!-- search popup -->
          <div id="search" class="pop-overlay">
            <div class="popup">
              <form action="#search" method="GET" class="search-box">
                <input type="search" placeholder="Enter Keyword" name="search" required="required" autofocus="">
                <button type="submit" class="btn"><span class="fa fa-search" aria-hidden="true"></span></button>
              </form>
            </div>
            <a class="close" href="#close">×</a>
          </div>
          <!-- //search popup -->
        </div>
        <!-- //search button -->
        <!-- toggle switch for light and dark theme -->
        <div class="cont-ser-position" >
          <nav class="navigation">
            <div class="theme-switch-wrapper">
              <label class="theme-switch" for="checkbox">
                <input type="checkbox" id="checkbox">
                <div class="mode-container">
                  <i class="gg-sun" id="ho"></i>
                  <i class="gg-moon" id="tas"></i>
                </div>
              </label>
            </div>
          </nav>
        </div>
        <!-- //toggle switch for light and dark theme -->
         <!-- POur le login et signin icon -->
         <div style="margin-left:5em;">
       <a class="join1" style="border-radius: 5px;" href="../login.php"><i class="fa fa-sign-out" aria-hidden="true"></i>            </a>
        <a class="join" href="../login.php">Log In</a>
        <a class="join1" style="margin-left:5em;" href="../signin.php"><i class="fa fa-sign-out" aria-hidden="true"></i>            </a>
        <a class="join" data-index-number="1" href="../signin.php">Sign Out</a>
        </div>
        <!-- POur le login et signin icon -->
      </nav>
    </div>
    </div>
 
	<style>
		body {
			display: flex;
		
			align-items: center;
			flex-direction: column;
			min-height: 100vh;
		}

		.ombres_multiples_diffuses {
  box-shadow: inset 0 0 1em gold, 0 0 2em red;
  /* deux ombres dans la liste et des rayons de flou pour chacune */
}
	</style>
</head>
<body style="background: linear-gradient(to left, #333, #333 50%, #eee 75%, #333 75%);">
<br><br>
<div  style="margin-left:-60%;";>
<ul  style="width:500px;height:50px;">Gérer les utilisateurs</h5>
 
    <li><a class="btn btn-primary btn-style mt-4" style="width:250px;height:50px;" href="affich.php">Gérer Formulaire</a></li>
    <li><a class="btn btn-primary btn-style mt-4" style="width:250px;height:50px;" href="affich_signup.php">Gérer Sign up</a></li>
    <li><a class="btn btn-primary btn-style mt-4" style="width:250px;height:50px;" href="affich_contact.php">Gérer Contact</a></li>
<br><br>

<a href="../../create_blog/index.php" style="background:#00FF00	; width:400px;">Create or modify a Post/Blog Without image</a> <br><br>
	 <a id = "link">Create or modify a Post/Blog With image</a> <br>
	 <script src="page1.js"></script><br>
	 <button onclick = "funny()" style="background:#00FFFF; border:2px;border-color:green;border-radius:80%;width:150px;height:50px;" > Add attribute </button>
</ul>
</div>

<center>
<div style="margin-left:10%;">
<img src="imageadmin.png" alt=""  width="100px" height="100px" id="g">		
<h1 class="ombres_multiples_diffuses" style="width:20em;">Hello Malek  you are in <br><br>  Administration</h1><br><br><br><br>
<div style=margin-left:-3em;>
	<?php if (isset($_GET['error'])): ?>
		<p><?php echo $_GET['error']; ?></p>
	<?php endif ?>
     <form action="upload.php"
           method="post"
           enctype="multipart/form-data">

           <input type="file" 
                  name="my_image">

           <input type="submit" 
                  name="submit"
                  value="Upload">

     </form>
     <div>

     </center>

</div>
<!-- theme switch js (light and dark)-->
<script src="assets/js/theme-change.js"></script>
  <script>
    function autoType(elementClass, typingSpeed) {
      var thhis = $(elementClass);
      thhis.css({
        "position": "relative",
        "display": "inline-block"
      });
      thhis.prepend('<div class="cursor" style="right: initial; left:0;"></div>');
      thhis = thhis.find(".text-js");
      var text = thhis.text().trim().split('');
      var amntOfChars = text.length;
      var newString = "";
      thhis.text("|");
      setTimeout(function () {
        thhis.css("opacity", 1);
        thhis.prev().removeAttr("style");
        thhis.text("");
        for (var i = 0; i < amntOfChars; i++) {
          (function (i, char) {
            setTimeout(function () {
              newString += char;
              thhis.text(newString);
            }, i * typingSpeed);
          })(i + 1, text[i]);
        }
      }, 1500);
    }

    $(document).ready(function () {
      // Now to start autoTyping just call the autoType function with the 
      // class of outer div
      // The second paramter is the speed between each letter is typed.   
      autoType(".type-js", 200);
    });
  </script>
  <!-- //theme switch js (light and dark)-->
  <script>
    let ilmo=document.getElementById('tas');
    let ho=document.getElementById('ho');
    if(ilmo){
    ilmo.addEventListener('click',function(){
      document.getElementById('f').style.filter="invert(1)";
      document.getElementById('g').style.filter="invert(1)";
    });
  }
  if(ho){
    ho.addEventListener('click',function(){
      document.getElementById('f').style.filter="invert(0)";
      document.getElementById('g').style.filter="invert(0)";
    });
  }
  </script>
<script>
  //Main navigation Active Class Add Remove
  $(".navbar-toggler").on("click", function () {
      $("header").toggleClass("active");
    });
    $(document).on("ready", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
      $(window).on("resize", function () {
        if ($(window).width() > 991) {
          $("header").removeClass("active");
        }
      });
    });
  </script>
  <!-- //MENU-JS -->
  <!-- disable body scroll which navbar is in active -->
  <script>
    $(function () {
      $('.navbar-toggler').click(function () {
        $('body').toggleClass('noscroll');
      })
    });
  </script>
</body>
</html> 