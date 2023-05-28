<?php

    include "../create_blog/logic.php";

?>

<!doctype html>
<html lang="en">

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
              <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item active">
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
      <a href="Nouveau dossier (3)/ecom-main333/public/shop.php"><i class="fa fa-4x fa-shopping-cart" aria-hidden="true" ></i></a> <br><br>
        <a   href="signin.php"><i class="fa fa-sign-out" aria-hidden="true"></i>            </a>
        <a  data-index-number="1" href="signin.php">Sign Out</a>
        </div>
        <!-- POur le login et signin icon -->
    </div>
  </header>
  <!--//header-->
  <!-- inner banner -->
  <div class="inner-banner">
    <section class="w3l-breadcrumb">
      <div class="container">
        <ul class="breadcrumbs-custom-path">
          <li><a href="home.php">Home</a></li>
          <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span> About Us</li>
        </ul>
      </div>
    </section>
  </div>
  <!-- //inner banner -->
  <!-- about section -->
  <center><p id = "para"></p></center>
  <section class="w3l-text-6 py-5" id="about">
    <div class="text-6-mian py-md-5">
      <div class="container">
        <div class="row top-cont-grid align-items-center">
          <div class="col-lg-6 left-img pr-lg-4">
            <img src="assets/images/homme/image3.jpg" alt="" class="img-responsive img-fluid" />

              <button class="btn btn-primary btn-style mt-4" id = "btn1"> Click me </button>
              &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<button class="btn btn-primary btn-style mt-4" id = "btn1" onclick="clearInterval(myVar)" class="stoptimeee">Stop time</button>
          </div>
          <div class="col-lg-6 text-6-info mt-lg-0 mt-4">
            <center><p id="demo"></p></center><br><br>
            <center><i class="fa fa-clock-o fa-3x" style=" font-size: 48px;background-color: white;color: red;border: black;border-radius: 20%;width: 48px;height: 48px;"></i></center><br><br>
            
            <h6>About our Site</h6>
            <h2>Welcome to our <span>Shop</span></h2>
            <p>For you we choose these special offers. Our site is of better choice than you see high qualities.</p>
            <a href="#blog" class="btn btn-style btn-primary mt-sm-5 mt-4">Read More</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- //about section -->
   <!-- articles section -->
   <section class="w3l-servicesblock py-5">
    <div class="container py-md-4 py-3">
        <div class="row">
            <div class="col-lg-6 left-wthree-img">
                <img src="assets/images/homme/image2.jpg" alt="" class="img-fluid" style="width: 400px;">
            </div>
            <div class="col-lg-6 about-right-faq align-self mt-lg-0 mt-sm-5 mt-4 pl-lg-5">
                <h3 class="title-main-2 mb-3">Amazing Articles</h3>
                <div class="separatorhny"></div>
                <p class="">Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,
                    ultrices in ligula. Semper at tempufddfel. Lorem ipsum dolor sit amet.
                    Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,
                    ultrices in ligula. Semper at tempufddfel.</p>

                <div class="row mt-md-5 mt-3">
                    <div class="col-sm-6 left-insp-art">
                        <ul>
                            <li><i class="fa fa-hand-o-right mr-2" aria-hidden="true"></i><a
                                    href="classes.php">Chemise men</a>
                            </li>
                            <li><i class="fa fa-hand-o-right mr-2" aria-hidden="true"></i><a
                                    href="classes.php">Chemise women
                                  </a></li>
                            <li><i class="fa fa-hand-o-right mr-2" aria-hidden="true"></i><a
                                    href="classes.php">children's sportswear</a>
                            </li>
                            <li><i class="fa fa-hand-o-right mr-2" aria-hidden="true"></i><a
                                    href="classes.php">Pant for Men</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-6 left-insp-art">
                        <ul>
                            <li><i class="fa fa-hand-o-right mr-2" aria-hidden="true"></i><a
                                    href="classes.php">T-shirt for kids</a>
                            </li>
                            <li><i class="fa fa-hand-o-right mr-2" aria-hidden="true"></i><a
                                    href="classes.php">Pant for Women</a>
                            </li>
                            <li><i class="fa fa-hand-o-right mr-2" aria-hidden="true"></i><a
                                    href="classes.php">T-shirt for girls
                                    Tips</a></li>
                            <li><i class="fa fa-hand-o-right mr-2" aria-hidden="true"></i><a
                                    href="classes.php">Chemise children</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- //articles section -->
  <!-- team section -->
  <section class="w3l-teams-1">
    <div class="teams1 py-5">
      <div class="container py-md-4 py-3">
        <div class="teams1-content">
          <div class="title-heading-w3 text-center mx-auto">
            <h3 class="title-main">Our Instructors</h3>
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
                    <a href="#team-single"><img src="assets/images/image1.jpg" alt="" class="img-fluid" /></a>
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
                    <a href="#team-single"><img src="assets/images/image3.jpg" alt="" class="img-fluid" style="height: 340px;"/></a>
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
                    <a href="#team-single"><img src="assets/images/image4.jpg" alt="" class="img-fluid" /></a>
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
  <!-- middle section with full bg imgage -->
  <div class="middle py-5">
    <div class="container py-md-5 py-4">
      <div class="welcome-left text-left py-lg-4">
        <h3>Creative & most complete Site / health theme</h3>
        <p class="mt-3 pr-lg-5 mr-lg-5">Check out the cartoon itself. Pelle tesque libero ut justo, ultrices en ligula. Always a tempufddfel. <br>
          The pain itself is the key to the élu.</p>
        <a href="about.php" class="btn btn-style btn-white mt-sm-5 mt-4 mr-2">Read More</a>
        <a href="contact.php" class="btn btn-style btn-primary mt-sm-5 mt-4">Contact Us</a>
      </div>
    </div>
  </div>
  <!-- //middle section with full bg imgage -->
  <!-- testimonial section -->
  <div class="w3l-cutomer-main-cont">
    <div class="testimonials text-center py-5">
      <div class="container py-md-5 py-4">
        <div class="title-heading-w3 text-center mx-auto">
          <h3 class="title-main">Customers Say</h3>
          <p class="mt-4 sub-title"> What people say about us</p>
        </div>
        <div class="row content-sec mt-md-5 mt-4"   id="m"onclick="affecterevenement()">
          <div class="col-lg-4 col-md-6 testi-sections">
            <div class="testimonials_grid">
              <p class="sub-test"><span class="fa fa-quote-left mr-2" aria-hidden="true"></span> Nam
                libero
                tempore, cum soluta
                nobis est eligendi optio cumque nihil impedit.
              </p>
              <div class="d-grid sub-author-con">
                <div class="testi-img-res">
                  <img src="assets/images/testi2.jpg" alt="" class="img-fluid" />
                </div>
                <div class="testi_grid text-left">
                  <h5>Petey Cruis</h5>
                  <p>Caption Here</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-md-0 mt-4 testi-sections">
            <div class="testimonials_grid">
              <p class="sub-test"><span class="fa fa-quote-left mr-2" aria-hidden="true"></span> Nam
                libero
                tempore, cum soluta
                nobis est eligendi optio cumque nihil impedit.
              </p>
              <div class="d-grid sub-author-con">
                <div class="testi-img-res">
                  <img src="assets/images/testi1.jpg" alt="" class="img-fluid" />
                </div>
                <div class="testi_grid text-left">
                  <h5>Molive Joe</h5>
                  <p>Caption Here</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-lg-0 mt-4 testi-sections">
            <div class="testimonials_grid">
              <p class="sub-test"><span class="fa fa-quote-left mr-2" aria-hidden="true"></span> Nam
                libero
                tempore, cum soluta
                nobis est eligendi optio cumque nihil impedit.
              </p>
              <div class="d-grid sub-author-con">
                <div class="testi-img-res">
                  <img src="assets/images/testi3.jpg" alt="" class="img-fluid" />
                </div>
                <div class="testi_grid text-left">
                  <h5>Paige Turner</h5>
                  <p>Caption Here</p>
                </div>
              </div>
            </div>
          </div>
        </div><br><br>
       <center> <h2>Ecrire ici et voir transformation to Upper(Majuscule)</h2><br>
    <input type="text" id="name" onchange="change()"></center>
      </div>
    </div>
  </div>
  <!-- //testimonial section -->
  <br> <center><div class="youcanstopit" style="margin-top: 5px;">
        <button  class="tryit" onclick="myVar = setTimeout(myFunction3s, 3000)">Try it</button>&ensp;&ensp;&ensp;
        <button class="stopit" onclick="clearTimeout(myVar)">Stop it</button></div></center>
  <!-- newsletter section -->
  <section class="w3l-form-26">
    <div class="form-26-main">
      <div class="container py-md-5">
        <div class="form-inner-cont">
          <div class="title-heading-w3 text-center mx-auto">
            <h3 class="title-main">Subscribe to our Newsletter</h3>
            <p class="mt-4 pt-2 sub-title">In non nisi quis metus tempor efficitur a ut odio. Phasellus
              posuere
              tellus in interdum venenatis. Curabitur aliquam quam dictum est vestibulum aliquet.</p>
          </div>
          <div class="form-right-inf mt-5">
            <form action="#" method="post" class="signin-form">
              <div class="forms-gds">
                <div class="form-input">
                  <input type="email" name="" placeholder="Enter your email address" required />
                </div>
                <div class="btn btn-style btn-primary button-eff-news">
                  <button class="btn">Subscribe</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- newsletter image -->
      <div class="png-img-w3ls">
        <img src="assets/images/newsletter3.png" alt="" class="img-responsive">
      </div>
      <!-- //newsletter image -->
    </div>
  </section>
  <!-- //newsletter section -->
  <center><div><a id = "link"> Contact Us</a>
    <p> Click the following button to see the effect. </p>
    <button class="btn btn-info" onclick = "funny()"> Add attribute </button>


  </div></center>
<br><br>
<hr>
  <center>
  <h2>Nouveaux Articles</h2>
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
            <p class="mt-5 border-left border-dark pl-3"><?php echo $q['content'].'<br><br><br>';?></p>
        <?php } ?>    
   </div>
   </center>


  <!-- footer -->
  <section class="w3l-footer-29-main">
    <div class="footer-29 py-5">
      <div class="container py-lg-4">
        <div class="row footer-top-29">
          <div class="col-lg-4 col-md-6 col-sm-7 footer-list-29 footer-1 pr-lg-5">
            <div class="footer-logo mb-3">
              <h1>
                <a class="navbar-brand" href="home.php">
                <i class="fa"  aria-hidden="true"><img src="assets/images/chaussure.jpg" alt="" style="height: 80px;width: 80px;margin-left: 1em;"></i>Shop
                </a>
              </h1>
            </div>
            <p>Health teaches you how to listen your body, Join our Amazing online classes.
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
        <p class="col-lg-8 copy-footer-29">© 2022 Shop. All rights reserved.</p>

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
  <!-- owl carousel for team -->
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
  <!-- //owl carousel for team -->
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
  <!-- disable body scroll which navbar is in active -->
  <script>
    $(function () {
      $('.navbar-toggler').click(function () {
        $('body').toggleClass('noscroll');
      })
    });
  </script>
  <!-- //disable body scroll which navbar is in active -->
  <!-- /counter-->
  <script src="assets/js/counter.js"></script>
  <!-- //counter-->
  <!--bootstrap-->
  <script src="assets/js/bootstrap.min.js"></script>
  <!-- //bootstrap-->
  <!-- //Js scripts -->
<script src="assets/js/page.js"></script>
</body>

</html>