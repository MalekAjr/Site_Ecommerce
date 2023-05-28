<?php include "nouveau/logic.php"; ?>

<?php  

$sname = "localhost";
$uname = "root";
$password = "";

$db_name = "site_commerce";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
	exit();
} 
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Yogic a Sports Category Bootstrap Responsive Website</title>
  <!-- google-fonts -->
  <link
    href="//fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,400;1,600;1,700&display=swap"
    rel="stylesheet">
  <!-- //google-fonts -->
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">
</head>

<body>
      <!--header-->
      <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg stroke px-0">
                <h1>
                    <a class="navbar-brand" href="home.php">
                    <i class="fa"  aria-hidden="true"><img src="assets/images/chaussure.jpg" alt="" style="height: 80px;width: 80px;margin-left: 1em;"></i>Shop
                    </a>
                </h1>
                <!-- if logo is image enable this   
    <a class="navbar-brand" href="#home.php">
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
                        <li class="nav-item active">
                            <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="classes.php">Classes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact Us</a>
                        </li>
                    </ul>
                </div>
                <!-- search button -->
                <div class="search-right">
                    <a href="#search" title="search"><span class="fa fa-search" aria-hidden="true"></span></a>
                    <!-- search popup -->
                    <div id="search" class="pop-overlay">
                        <div class="popup">
                            <form action="#search" method="GET" class="search-box">
                                <input type="search" placeholder="Enter Keyword" name="search" required="required"
                                    autofocus="">
                                <button type="submit" class="btn"><span class="fa fa-search"
                                        aria-hidden="true"></span></button>
                            </form>
                        </div>
                        <a class="close" href="#close">×</a>
                    </div>
                    <!-- //search popup -->
                </div>
                <!-- //search button -->
                <!-- toggle switch for light and dark theme -->
                <div class="cont-ser-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div>
                <!-- //toggle switch for light and dark theme -->
            </nav>
            <!-- POur le login et signin icon -->
      <div style="margin-left:75em;position:absolute;margin-top:-5em;">
      <a href="Nouveau dossier (3)\ecom-main333\public\shop.php"><i class="fa fa-4x fa-shopping-cart" aria-hidden="true" ></i></a> <br><br>
       
        <a   href="signin.php"><i class="fa fa-sign-out" aria-hidden="true"></i>            </a>
        <a  data-index-number="1" href="signin.php">Sign Out</a>
        </div>
        <!-- POur le login et signin icon -->
    </div>
        </div>
    </header>
    <!--//header-->
    <!-- banner section -->
    <section id="home" class="w3l-banner py-md-5 pt-md-0 pt-sm-5 pt-4">
        <div class="container py-lg-5 py-md-4 pt-md-0 pt-sm-1 mt-lg-0 mt-5">
            <div class="row align-items-center py-lg-5 py-md-5 mt-4">
                <div class="banner-image-w3 text-lg-center">
                    <img src="assets/images/Nike-shoes.png" alt="" class="img-fluid">
                </div>
                <div class="offset-lg-6 col-lg-6 offset-md-5 col-md-7 mt-lg-5 pt-md-4 pt-5">
                    <h3></h3>
                    <h3 class="mb-sm-4 mb-3 title"> Popular Online <br>Fashion
                        <span class="type-js"><span class="text-js">Store</span></span></h3>
                    <p>Fashion is a way to express yourself ! You are welcome to my website</p>
                    <div class="mt-md-5 mt-4 mb-lg-0 mb-4">
                        <a class="btn btn-primary btn-style" href="classes.php">View More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //banner section -->

  <!-- classes-section -->
  <section class="w3l-index-block2 py-5">
    <div class="container py-md-4 py-3">
      <div class="title-heading-w3 text-center mx-auto">
        <h3 class="title-main">Course Lists</h3>
        <p class="mt-4 sub-title"> Nulla mollis dapibus nunc, ut rhoncus
          turpis sodales quis. Integer sit amet mattis quam.</p><br>
          <h4>Clothes For Men,Women and children</h4>
      </div>
      <div class="row bottom_grids mt-5 pt-lg-3">
        <div class="col-lg-3 col-md-6 px-lg-2">
          <div class="s-block">
            <a href="#blog" class="d-block" style="width:200px;height:500px;">
            <div class="mm"  id="mm" style="width:200px;height:200px;"></div>
              <div class="p-3">

                <h3 class="mb-2">for beginners</h3>
                <p>Morbi sed feugiat sapien, vitae luctus justo.</p>
                <strong class="fee-class-w3 mt-3">Free</strong><input style="margin-left:6em;width:100px;margin-top:1em;" type="button" value="Add to cart" class="Ajout"  id="mm" onclick="p.push(this.id)"><br><br>
                <input style="margin-left:8em;width:100px;margin-top:1em;" type="button" value="Remove" class="Supprime"  id="mm" onclick="p.remove(p.indexOf(this.id))">
              </div>
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 px-lg-2 mt-md-0 mt-4 grid-4-col">
          <div class="s-block">
            <a href="#blog" class="d-block" style="width:200px;height:500px;">
            <div class="nn"  id="nn" style="width:200px;height:200px;"></div>
              <div class="p-3">

                <h3 class="mb-2">The smart flow</h3>
                <p class="">Morbi sed feugiat sapien, vitae luctus justo.</p>
                <strong class="fee-class-w3 mt-3">&63</strong><input style="margin-left:6em;width:100px;margin-top:1em;" type="button" value="Add to cart" class="Ajout"  id="nn" onclick="p.push(this.id)"><br><br>
                <input style="margin-left:8em;width:100px;margin-top:1em;" type="button" value="Remove" class="Supprime"  id="nn" onclick="p.pop(this.id)">
              </div>
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 px-lg-2 mt-lg-0 mt-4">
          <div class="s-block">
            <a href="#blog" class="d-block" style="width:200px;height:500px;">
            <div class="kk" id="kk"  style="width:200px;height:200px;"></div>
              <div class="p-3">

                <h3 class="mb-2">Mastering anxiety</h3>
                <p class="">Morbi sed feugiat sapien, vitae luctus justo.</p>
                <strong class="fee-class-w3 mt-3">$67</strong><input style="margin-left:6em;width:100px;margin-top:1em;" type="button" value="Add to cart" class="Ajout"  id="kk" onclick="p.push(this.id)"><br><br>
                <input style="margin-left:8em;width:100px;margin-top:1em;" type="button" value="Remove" class="Supprime"  id="kk" onclick="p.pop(this.id)">
              </div>
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 px-lg-2 mt-lg-0 mt-4">
          <div class="s-block">
            <a href="#blog" class="d-block" style="width:200px;height:500px;">
            <div class="oo" id="oo" style="width:200px;height:200px;"><div class="container">
    <img src="assets/images/homme/shoes1.jpg" alt="Snow" style="width:200px;height:200px;" id="myImg">
  </div></div>
              <div class="p-3">

                <h3 class="mb-2">Mastering anxiety</h3>
                <p class="">Morbi sed feugiat sapien, vitae luctus justo.</p>
                <strong class="fee-class-w3 mt-3">$67</strong><input style="margin-left:6em;width:100px;margin-top:1em;" type="button" value="Add to cart" class="Ajout"  id="oo" onclick="p.push(this.id)"><br><br>
                <input style="margin-left:8em;width:100px;margin-top:1em;" type="button" value="Remove" class="Supprime"  id="oo" onclick="p.pop(this.id)">
                <button class="btn" onclick="myFunction()" style="margin-top:1em;border:solid 3px; color:red; broder-color:red;box-shadow: 10px 5px 5px red;">Button</button>
              </div>
            </a>
          </div>
        </div>
      </div>
     
    </div>
  </section>
  <!-- //classes-section -->
<br><br>

<!-- //articles section -->

  <!-- team section -->
  <section class="w3l-teams-1">
    <div class="teams1 py-5">
      <div class="container py-md-4 py-3">
        <div class="teams1-content">
          <div class="title-heading-w3 text-center mx-auto">
            <h3 class="title-main">Clothes for Women</h3>
            <p class="mt-4 sub-title"> Nulla mollis dapibus nunc, ut rhoncus
              turpis sodales quis. Integer sit amet mattis quam.</p>
          </div>
          <div class="mt-5 pt-lg-4">
            <div class="owl-carousel owl-theme">
              <div class="item">
                <div class="d-grid team-info">
                  <div class="column position-relative">
                    <a href="Nouveau dossier (3)\ecom-main333\public\category.php?id=2"><img src="assets/images/image9.jpg" alt="" class="img-fluid" style="height:350px; width:360px"/></a>
                    <h3 class="name-pos"><a href="#team-single">Kity Nelson</a></h3>
                  </div>
                  <div class="column">
                    <p>Red Suit</p>
                    <div class="social">
                      <a href="#facebook" class="facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                      <a href="#twitter" class="twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="d-grid team-info">
                  <div class="column position-relative">
                    <a href="Nouveau dossier (3)\ecom-main333\public\category.php?id=2"><img src="assets/images/image10.jpg" alt="" class="img-fluid" style="height:350px; width:360px"/></a>
                    <h3 class="name-pos"><a href="#team-single">Karla Doe</a></h3>
                  </div>
                  <div class="column">
                    <p>Blue Suit</p>
                    <div class="social">
                      <a href="#facebook" class="facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                      <a href="#twitter" class="twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="d-grid team-info">
                  <div class="column position-relative">
                    <a href="Nouveau dossier (3)\ecom-main333\public\category.php?id=2"><img src="assets/images/image1.jpg" alt="" class="img-fluid" /></a>
                    <h3 class="name-pos"><a href="#team-single">Donna Jek</a></h3>
                  </div>
                  <div class="column">
                    <p>White Instructor</p>
                    <div class="social">
                      <a href="#facebook" class="facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                      <a href="#twitter" class="twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="d-grid team-info">
                  <div class="column position-relative">
                    <a href="Nouveau dossier (3)\ecom-main333\public\category.php?id=2"><img src="assets/images/image3.jpg" alt="" class="img-fluid" style="height: 340px;"/></a>
                    <h3 class="name-pos"><a href="#team-single">Irene Lee</a></h3>
                  </div>
                  <div class="column">
                    <p>Blue Instructor</p>
                    <div class="social">
                      <a href="#facebook" class="facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                      <a href="#twitter" class="twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="d-grid team-info">
                  <div class="column position-relative">
                    <a href="Nouveau dossier (3)\ecom-main333\public\category.php?id=2"><img src="assets/images/image4.jpg" alt="" class="img-fluid" /></a>
                    <h3 class="name-pos"><a href="#team-single">Maria Joe</a></h3>
                  </div>
                  <div class="column">
                    <p>Pink Instructor</p>
                    <div class="social">
                      <a href="#facebook" class="facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                      <a href="#twitter" class="twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- //team setion -->
  <section class="w3l-index-block2 py-5">
    <div class="container py-md-4 py-3">
  
      <div class="row bottom_grids mt-5 pt-lg-3">
        <div class="col-lg-3 col-md-6 px-lg-2">
          <div class="s-block">
            <a href="http://localhost/fashion1/Nouveau%20dossier%20(3)/ecom-main333/public/category.php?id=1" class="d-block">
 <img src="assets/images/homme/pantalonhomme1.jpg" alt="" class="img-fluid" style="height: 285px;"/>
              <div class="p-3">
                <h3 class="mb-2"> for beginners</h3>
                <p>Morbi sed feugiat sapien, vitae luctus justo.</p>
                <strong class="fee-class-w3 mt-3">Free</strong>
              </div>
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 px-lg-2 mt-md-0 mt-4 grid-4-col">
          <div class="s-block">
            <a href="http://localhost/fashion1/Nouveau%20dossier%20(3)/ecom-main333/public/category.php?id=1" class="d-block">
            <img src="assets/images/homme/pantalonhomme2.jpg" alt="" class="img-fluid" style="height: 285px;"/>
              <div class="p-3">
                <h3 class="mb-2">The smart flow </h3>
                <p class="">Morbi sed feugiat sapien, vitae luctus justo.</p>
                <strong class="fee-class-w3 mt-3">$63</strong>
              </div>
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 px-lg-2 mt-lg-0 mt-4 grid-4-col">
          <div class="s-block">
            <a href="http://localhost/fashion1/Nouveau%20dossier%20(3)/ecom-main333/public/category.php?id=1" class="d-block">
            <img src="assets/images/homme/shirt1.jpg" alt="" class="img-fluid" style="height: 285px;"/>
              <div class="p-3">
                <h3 class="mb-2">for better sleep</h3>
                <p class="">Morbi sed feugiat sapien, vitae luctus justo.</p>
                <strong class="fee-class-w3 mt-3">Free</strong>
              </div>
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 px-lg-2 mt-lg-0 mt-4">
          <div class="s-block">
            <a href="http://localhost/fashion1/Nouveau%20dossier%20(3)/ecom-main333/public/category.php?id=1" class="d-block">
            <img src="assets/images/homme/shirt2.jpg" alt="" class="img-fluid" style="height: 285px;"/>
              <div class="p-3">
                <h3 class="mb-2">Mastering anxiety</h3>
                <p class="">Morbi sed feugiat sapien, vitae luctus justo.</p>
                <strong class="fee-class-w3 mt-3">$67</strong>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="row bottom_grids mt-5">
        <div class="col-lg-3 col-md-6 px-lg-2">
          <div class="s-block">
            <a href="http://localhost/fashion1/Nouveau%20dossier%20(3)/ecom-main333/public/category.php?id=1" class="d-block">
              <img src="assets/images/homme/shoes1.jpg" alt="" class="img-fluid" style="height: 285px;"/>
              <div class="p-3">
                <h3 class="mb-2">for beginners</h3>
                <p>Morbi sed feugiat sapien, vitae luctus justo.</p>
                <strong class="fee-class-w3 mt-3">Free</strong>
              </div>
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 px-lg-2 mt-md-0 mt-4 grid-4-col">
          <div class="s-block">
            <a href="http://localhost/fashion1/Nouveau%20dossier%20(3)/ecom-main333/public/category.php?id=1" class="d-block">
              <img src="assets/images/homme/shoes2.jpg" alt="" class="img-fluid img-responsive" style="height: 285px;"/>
              <div class="p-3">
                <h3 class="mb-2">The smart flow</h3>
                <p class="">Morbi sed feugiat sapien, vitae luctus justo.</p>
                <strong class="fee-class-w3 mt-3">&63</strong>
              </div>
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 px-lg-2 mt-lg-0 mt-4 grid-4-col">
          <div class="s-block">
            <a href="http://localhost/fashion1/Nouveau%20dossier%20(3)/ecom-main333/public/category.php?id=1" class="d-block">
              <img src="assets/images/homme/shoes3.jpg" alt="" class="img-fluid" style="height: 285px;"/>
              <div class="p-3">
                <h3 class="mb-2">Yoga for better sleep</h3>
                <p class="">Morbi sed feugiat sapien, vitae luctus justo.</p>
                <strong class="fee-class-w3 mt-3">&76</strong>
              </div>
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 px-lg-2 mt-lg-0 mt-4">
          <div class="s-block">
            <a href="http://localhost/fashion1/Nouveau%20dossier%20(3)/ecom-main333/public/category.php?id=1" class="d-block">
              <img src="assets/images/homme/shoes4.jpg" alt="" class="img-fluid" style="height: 285px;"/>
              <div class="p-3">
                <h3 class="mb-2">Mastering anxiety</h3>
                <p class="">Morbi sed feugiat sapien, vitae luctus justo.</p>
                <strong class="fee-class-w3 mt-3">$67</strong>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- //classes-section -->

  <!-- //articles section -->
  <!-- team section -->
  <section class="w3l-teams-1">
    <div class="teams1 py-5">
      <div class="container py-md-4 py-3">
        <div class="teams1-content">
          <div class="title-heading-w3 text-center mx-auto">
            <h3 class="title-main">Our Suits</h3>
            <p class="mt-4 sub-title"> Nulla mollis dapibus nunc, ut rhoncus
              turpis sodales quis. Integer sit amet mattis quam.</p>
          </div>
          <div class="mt-5 pt-lg-4">
            <div class="owl-carousel owl-theme">
              <div class="item">
                <div class="d-grid team-info">
                  <div class="column position-relative">
                    <a href="#team-single"><img src="assets/images/homme/image1.jpg" alt="" class="img-fluid" /></a>
                    <h3 class="name-pos"><a href="#team-single">Lee Kee</a></h3>
                  </div>
                  <div class="column">
                    <p>Black Suit</p>
                    <div class="social">
                      <a href="#facebook" class="facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                      <a href="#twitter" class="twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="d-grid team-info">
                  <div class="column position-relative">
                    <a href="#team-single"><img src="assets/images/homme/image2.jpg" alt="" class="img-fluid" /></a>
                    <h3 class="name-pos"><a href="#team-single">Anguston Doe</a></h3>
                  </div>
                  <div class="column">
                    <p>Blue Suit</p>
                    <div class="social">
                      <a href="#facebook" class="facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                      <a href="#twitter" class="twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="d-grid team-info">
                  <div class="column position-relative">
                    <a href="#team-single"><img src="assets/images/homme/image5.jpg" alt="" class="img-fluid" style="height:420px;width: 1200px;margin-top: -3em;" /></a>
                    <h3 class="name-pos"><a href="#team-single">Dany Jek</a></h3>
                  </div>
                  <div class="column">
                    <p>Black Instructor</p>
                    <div class="social">
                      <a href="#facebook" class="facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                      <a href="#twitter" class="twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="d-grid team-info">
                  <div class="column position-relative">
                    <a href="#team-single"><img src="assets/images/homme/image4.jpg" alt="" class="img-fluid" style="height: 360px;width: 360px;"/></a>
                    <h3 class="name-pos"><a href="#team-single">Irene Lee</a></h3>
                  </div>
                  <div class="column">
                    <p>Blue Instructor</p>
                    <div class="social">
                      <a href="#facebook" class="facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                      <a href="#twitter" class="twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="d-grid team-info">
                  <div class="column position-relative">
                    <a href="#team-single"><img src="assets/images/homme/image6.jpg" alt="" class="img-fluid" style="height: 360px;width: 360px;"/></a>
                    <h3 class="name-pos"><a href="#team-single">Martin Joesy</a></h3>
                  </div>
                  <div class="column">
                    <p>Pink Instructor</p>
                    <div class="social">
                      <a href="#facebook" class="facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                      <a href="#twitter" class="twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- //team setion -->

  <section class="w3l-index-block2 py-5">
    <div class="container py-md-4 py-3">
      <div class="title-heading-w3 text-center mx-auto">
        <h3 class="title-main">Clothes for Children</h3>
        <p class="mt-4 sub-title"> Nulla mollis dapibus nunc, ut rhoncus
          turpis sodales quis. Integer sit amet mattis quam.</p><br>
          <h4>Clothes For Kids</h4>
      </div>
      <div class="row bottom_grids mt-5 pt-lg-3">
        <div class="col-lg-3 col-md-6 px-lg-2">
          <div class="s-block">
            <a href="http://localhost/fashion1/Nouveau%20dossier%20(3)/ecom-main333/public/category.php?id=3" class="d-block">
              <img src="assets/images/enfant/shirt1.jpg" alt="" class="img-fluid" style="height: 285px; width: 280px;"/>
              <div class="p-3">
                <h3 class="mb-2">Yoga for beginners</h3>
                <p>Morbi sed feugiat sapien, vitae luctus justo.</p>
                <strong class="fee-class-w3 mt-3">Free</strong>
              </div>
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 px-lg-2 mt-md-0 mt-4 grid-4-col">
          <div class="s-block">
            <a href="http://localhost/fashion1/Nouveau%20dossier%20(3)/ecom-main333/public/category.php?id=3" class="d-block">
              <img src="assets/images/enfant/vetement1.jpg" alt="" class="img-fluid img-responsive" style="height: 285px;"/>
              <div class="p-3">
                <h3 class="mb-2">The smart flow yoga</h3>
                <p class="">Morbi sed feugiat sapien, vitae luctus justo.</p>
                <strong class="fee-class-w3 mt-3">&63</strong>
              </div>
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 px-lg-2 mt-lg-0 mt-4 grid-4-col">
          <div class="s-block">
            <a href="http://localhost/fashion1/Nouveau%20dossier%20(3)/ecom-main333/public/category.php?id=3" class="d-block">
              <img src="assets/images/enfant/shirt2.jpg" alt="" class="img-fluid" style="height: 285px;"/>
              <div class="p-3">
                <h3 class="mb-2">Yoga for better sleep</h3>
                <p class="">Morbi sed feugiat sapien, vitae luctus justo.</p>
                <strong class="fee-class-w3 mt-3">Free</strong>
              </div>
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 px-lg-2 mt-lg-0 mt-4">
          <div class="s-block">
            <a href="http://localhost/fashion1/Nouveau%20dossier%20(3)/ecom-main333/public/category.php?id=3" class="d-block">
              <img src="assets/images/enfant/vetement2.jpg" alt="" class="img-fluid" />
              <div class="p-3">
                <h3 class="mb-2">Mastering anxiety</h3>
                <p class="">Morbi sed feugiat sapien, vitae luctus justo.</p>
                <strong class="fee-class-w3 mt-3">$67</strong>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="row bottom_grids mt-5">
        <div class="col-lg-3 col-md-6 px-lg-2">
          <div class="s-block">
            <a href="http://localhost/fashion1/Nouveau%20dossier%20(3)/ecom-main333/public/category.php?id=3" class="d-block">
              <img src="assets/images/enfant/shoes1.jpg" alt="" class="img-fluid" />
              <div class="p-3">
                <h3 class="mb-2">Yoga for beginners</h3>
                <p>Morbi sed feugiat sapien, vitae luctus justo.</p>
                <strong class="fee-class-w3 mt-3">Free</strong>
              </div>
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 px-lg-2 mt-md-0 mt-4 grid-4-col">
          <div class="s-block">
            <a href="http://localhost/fashion1/Nouveau%20dossier%20(3)/ecom-main333/public/category.php?id=3" class="d-block">
              <img src="assets/images/enfant/shoes2.jpg" alt="" class="img-fluid img-responsive" style="height: 285px;"/>
              <div class="p-3">
                <h3 class="mb-2">The smart flow yoga</h3>
                <p class="">Morbi sed feugiat sapien, vitae luctus justo.</p>
                <strong class="fee-class-w3 mt-3">&63</strong>
              </div>
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 px-lg-2 mt-lg-0 mt-4 grid-4-col">
          <div class="s-block">
            <a href="http://localhost/fashion1/Nouveau%20dossier%20(3)/ecom-main333/public/category.php?id=3" class="d-block">
              <img src="assets/images/enfant/shoes3.jpg" alt="" class="img-fluid" />
              <div class="p-3">
                <h3 class="mb-2">Yoga for better sleep</h3>
                <p class="">Morbi sed feugiat sapien, vitae luctus justo.</p>
                <strong class="fee-class-w3 mt-3">&76</strong>
              </div>
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 px-lg-2 mt-lg-0 mt-4">
          <div class="s-block">
            <a href="http://localhost/fashion1/Nouveau%20dossier%20(3)/ecom-main333/public/category.php?id=3" class="d-block">
              <img src="assets/images/enfant/shoes4.jpg" alt="" class="img-fluid" />
              <div class="p-3">
                <h3 class="mb-2">Mastering anxiety</h3>
                <p class="">Morbi sed feugiat sapien, vitae luctus justo.</p>
                <strong class="fee-class-w3 mt-3">$67</strong>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- //classes-section -->


  <!-- //articles section -->
  <!-- team section -->
  <section class="w3l-teams-1">
    <div class="teams1 py-5">
      <div class="container py-md-4 py-3">
        <div class="teams1-content">
          <div class="title-heading-w3 text-center mx-auto">
            <h3 class="title-main">Clothes For children</h3><br><br>
            <h4>Clothes For Kids</h4>
            <p class="mt-4 sub-title">Nulla mollis dapibus nunc, ut rhoncus
              turpis sodales quis. Integer sit amet mattis quam.</p>
          </div>
          <div class="mt-5 pt-lg-4">
            <div class="owl-carousel owl-theme">
              <div class="item">
                <div class="d-grid team-info">
                  <div class="column position-relative">
                    <a href="#team-single"><img src="assets/images/enfant/shirt1.jpg" alt="" class="img-fluid" style="height:285px;"/></a>
                    <h3 class="name-pos"><a href="#team-single">Mark Doch</a></h3>
                  </div>
                  <div class="column">
                    <p>Multi Suit</p>
                    <div class="social">
                      <a href="#facebook" class="facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                      <a href="#twitter" class="twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="d-grid team-info">
                  <div class="column position-relative">
                    <a href="#team-single"><img src="assets/images/enfant/vetement2.jpg" alt="" class="img-fluid" style="height:285px;"/></a>
                    <h3 class="name-pos"><a href="#team-single">Ava Montella</a></h3>
                  </div>
                  <div class="column">
                    <p>Gray Suit</p>
                    <div class="social">
                      <a href="#facebook" class="facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                      <a href="#twitter" class="twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="d-grid team-info">
                  <div class="column position-relative">
                    <a href="#team-single"><img src="assets/images/enfant/vetement1.jpg" alt="" class="img-fluid" style="height:285px;"/></a>
                    <h3 class="name-pos"><a href="#team-single">Johny mervel</a></h3>
                  </div>
                  <div class="column">
                    <p>Black-Yellow Instructor</p>
                    <div class="social">
                      <a href="#facebook" class="facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                      <a href="#twitter" class="twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="d-grid team-info">
                  <div class="column position-relative">
                    <a href="#team-single"><img src="assets/images/enfant/shirt2.jpg" alt="" class="img-fluid" style="height:285px;"/></a>
                    <h3 class="name-pos"><a href="#team-single">Sophia Madiston</a></h3>
                  </div>
                  <div class="column">
                    <p>White Instructor</p>
                    <div class="social">
                      <a href="#facebook" class="facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                      <a href="#twitter" class="twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="d-grid team-info">
                  <div class="column position-relative">
                    <a href="#team-single"><img src="assets/images/enfant/vetement3.jpg" alt="" class="img-fluid" style="height:285px;"/></a>
                    <h3 class="name-pos"><a href="#team-single">Jeremy koll</a></h3>
                  </div>
                  <div class="column">
                    <p>Black-not Instructor</p>
                    <div class="social">
                      <a href="#facebook" class="facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                      <a href="#twitter" class="twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- //team setion -->



<br><br>

<center>
<?php 
          $sql = "SELECT * FROM blog ORDER BY id DESC";
          $res = mysqli_query($conn,  $sql);

          if (mysqli_num_rows($res) > 0) {
          	if ($blog = mysqli_fetch_assoc($res)) {  ?>
             
             <div class="alb">
             	<img src="nouveau/uploads/<?=$blog['image_url']?>">
             </div>
          		
			  <div class="container mt-5">
        <?php foreach($query as $q){?>
            <div class="bg-dark p-5 rounded-lg text-white">
                <h1><?php echo $q['title'];?></h1>

                <div class="d-flex">
                    
                    <form method="POST">
                        <input type="text" hidden value='<?php echo $q['id']?>' name="id">
                     
                    </form>
                </div>

            </div>
            <p class="mt-5 border-left border-dark pl-3"><?php echo $q['content'];?></p>
        <?php } ?>    
   </div>
   </div>

    <?php } }?>
    </center>




  <!-- footer -->
  <section class="w3l-footer-29-main">
    <div class="footer-29 py-5">
      <div class="container py-lg-4">
        <div class="row footer-top-29">
          <div class="col-lg-4 col-md-6 col-sm-7 footer-list-29 footer-1 pr-lg-5">
            <div class="footer-logo mb-3">
              <a class="navbar-brand" href="classes.php">
              <i class="fa"  aria-hidden="true"><img src="assets/images/chaussure.jpg" alt="" style="height: 80px;width: 80px;margin-left: 1em;"></i>Shop
              </a>
            </div>
            <p>Yoga teaches you how to listen your body, Join our Amazing online classes,
              <br>semper at tempu amet.</p>
          </div>
          <div class="col-lg-2 col-md-6 col-sm-5 col-6 footer-list-29 footer-2 mt-sm-0 mt-5">

            <ul>
              <h6 class="footer-title-29">Quick Links</h6>
              <li><a href="about.php">About Us</a></li>
              <li><a href="classes.php"> Classes</a></li>
              <li><a href="#blog"> Blog Posts</a></li>
              <li><a href="#blog">Blog Single</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-6 col-sm-5 col-6 footer-list-29 footer-3 mt-lg-0 mt-5">
            <h6 class="footer-title-29">More Info</h6>
            <ul>
              <li><a href="#privacy">Privacy Policy</a></li>
              <li><a href="#terms"> Terms of Service</a></li>
              <li><a href="contact.php">Contact us</a></li>
              <li><a href="#support"> Support</a></li>
            </ul>

          </div>
          <div class="col-lg-4 col-md-6 col-sm-7 footer-list-29 footer-4 mt-lg-0 mt-5">
            <h6 class="footer-title-29">Contact Info </h6>
            <p>10001 Alleghany st, 5th Avenue, 235 Terry, London.</p>
            <p class="mb-2 mt-3"><i class="fa fa-phone mr-2" aria-hidden="true"></i><a href="tel:+12 23456790">+12
                23456790</a></p>
            <p> <i class="fa fa-envelope mr-2" aria-hidden="true"></i><a
                href="mailto:info@example.com">info@example.com</a></p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- //footer -->
  <!-- copyright -->
  <section class="w3l-copyright">
    <div class="container">
      <div class="row bottom-copies">
        <p class="col-lg-8 copy-footer-29">© 2020 Yogic. All rights reserved.</p>

        <div class="col-lg-4 footer-list-29 text-right">
          <div class="main-social-footer-29">
            <a href="#facebook" class="facebook"><span class="fa fa-facebook"></span></a>
            <a href="#twitter" class="twitter"><span class="fa fa-twitter"></span></a>
            <a href="#google"><span class="fa fa-google-plus" aria-hidden="true"></span></a>
            <a href="#instagram" class="instagram"><span class="fa fa-instagram"></span></a>
            <a href="#linkedin" class="linkedin"><span class="fa fa-linkedin"></span></a>
            
          </div>
        </div>
      </div>
    </div>


   


    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
      &#10548;
    </button>
    <script>
      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function () {
        scrollFunction()
      };

      function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("movetop").style.display = "block";
        } else {
          document.getElementById("movetop").style.display = "none";
        }
      }

      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>
    <!-- /move top -->
  </section>
  <!-- //copyright -->

  <!-- Js scripts -->
  <!-- common jquery plugin -->
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <!-- //common jquery plugin -->
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
  <!-- MENU-JS -->
  <script>
    $(window).on("scroll", function () {
      var scroll = $(window).scrollTop();

      if (scroll >= 80) {
        $("#site-header").addClass("nav-fixed");
      } else {
        $("#site-header").removeClass("nav-fixed");
      }
    });

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
  <script src="classes.js"></script>

  <!-- disable body scroll which navbar is in active -->
  <script>
    $(function () {
      $('.navbar-toggler').click(function () {
        $('body').toggleClass('noscroll');
      })
    });
  </script>
  <!-- //disable body scroll which navbar is in active -->
  <!--bootstrap-->
  <script src="assets/js/bootstrap.min.js"></script>
  <!-- //bootstrap-->
  <!-- //Js scripts -->

   <!-- owl carousel for Malek's team -->
   <script src="assets/js/owl.carousel.js"></script>
  <script>
      $(document).ready(function () {
          $('.owl-carousel').owlCarousel({
              loop: true,
              margin: 0,
              responsiveClass: true,
              responsive: {
                  0: {
                      items: 1,
                      nav: true
                  },
                  667: {
                      items: 2,
                      nav: true,
                      margin: 20
                  },
                  1000: {
                      items: 2,
                      nav: true,
                      loop: true,
                      margin: 20
                  }
              }
          })
      })
  </script>
  <!-- //owl carousel Malek's team -->

  <style>
    .Ajout{
height: 50px;
width: 200px;
border-radius: 60%;
border:solid 3px;
border-color: white;
 color:#1E90FF;
background:#00FF00;
margin-left: 10px;
margin-top: 8em;
position:absolute;
}
.Supprime{
    height: 50px;
    width: 200px;
    border-radius: 60%;
    border:solid 3px;
    border-color: red;; 
    color:red;
    background:white;
    margin-left: 10px;
    margin-top: 15em;
    position: absolute;
}
.dark-mode .Ajout {
  color:white;
}
  </style>
</body>

</html>