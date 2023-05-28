
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
</head>

<body>
<style>
.jtp {
color: red;
background-color: #F2F2F2;
}
</style>
  <!--header-->
  <header id="site-header" class="fixed-top">
    <div class="container">
      <nav class="navbar navbar-expand-lg stroke px-0">
        <h1>
          <a class="navbar-brand" href="home.php" style="margin-left: -2.5em;">
            <i class="fa"  aria-hidden="true"><img src="assets/images/chaussure.jpg" class="fa"  aria-hidden="true" alt="" style="height: 80px;width: 80px;margin-left: 1em;">Shop</i>
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
      <div style="margin-left:75em;position:absolute;margin-top:-5em;">
      <a href="Nouveau dossier (3)/ecom-main333/public/shop.php"><i class="fa fa-4x fa-shopping-cart" aria-hidden="true" ></i> <br><br></a>

        <a   href="signin.php"><i class="fa fa-sign-out" aria-hidden="true"></i>            </a>
        <a  data-index-number="1" href="signin.php">Sign Out</a>
        </div>
        <!-- POur le login et signin icon -->
    </div>
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
  <section class="w3l-text-6 py-5" id="about">
    <div class="text-6-mian py-md-5">
      <div class="container">
        <div class="row top-cont-grid align-items-center">
          <div class="col-lg-6 left-img pr-lg-4">
            <img src="assets/images/image1.jpg" alt="" class="img-responsive img-fluid" />
          </div>
          <div class="col-lg-6 text-6-info mt-lg-0 mt-4">
            <h6>About our Site</h6>
            <h2>Welcome to our <span>Shop</span></h2>
            <p id = "para123" class = "jtp">Aenean pulvinar pharetra pellentesque. Cras dignissim, sapien ac time to drink, eros mass leaven the mass</p>
            <p id = "para1" class = "jtp">This is second paragraph element.</p>
            <a href="#blog" class="btn btn-style btn-primary mt-sm-5 mt-4">Read More</a>
            <button onclick = "fun()"  class="btn btn-primary active" role="button" data-bs-toggle="button" aria-pressed="true" style="margin-left:20em;margin-top: -3em;position:centre;display:flex;border:solid 3px white;width:150px;height:40px;">
Click and see 
</button>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- //about section -->
  <!-- stats -->
  <section class="w3_stats py-5" id="stats">
    <div class="container py-md-4">
      <div class="title-heading-w3 text-center mx-auto">
        <h3 class="title-main">Our Statistics</h3>
        <p class="mt-4 sub-title"> There is no soft protein now, so that the members 
          of any range are ugly. Integer sit amet mattis quam, Nulla mollis dapibus nunc, ut rhoncus turpis sodales quis.
           Integer sit amet mattis quam.</p>
      </div>
      <div class="w3-stats text-center mt-5">
        <div class="row">
          <div class="col-md-3 col-6">
            <div class="counter">
              <span class="fa fa-users"></span>
              <div class="timer count-title count-number mt-3" data-to="1286" data-speed="1500"></div>
              <p class="count-text">Awesome Instructors</p>
            </div>
          </div>
          <div class="col-md-3 col-6">
            <div class="counter">
              <span class="fa fa-video-camera"></span>
              <div class="timer count-title count-number mt-3" data-to="36076" data-speed="1500"></div>
              <p class="count-text ">Class Views</p>
            </div>
          </div>
          <div class="col-md-3 col-6">
            <div class="counter">
              <span class="fa fa-smile-o"></span>
              <div class="timer count-title count-number mt-3" data-to="16300" data-speed="1500"></div>
              <p class="count-text">Happy Students</p>
            </div>
          </div>
          <div class="col-md-3 col-6">
            <div class="counter">
              <span class="fa fa-thumbs-up"></span>
              <div class="timer count-title count-number mt-3" data-to="10630" data-speed="1500"></div>
              <p class="count-text">Statisfication</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- //stats -->
<!-- 3 grids with icon section -->
<section class="w3l-feature-8">
  <div class="features-main py-5">
      <div class="container py-md-4 py-3">
          <div class="features">
              <div class="feature-1">
                  <div class="feature-body">
                      <div class="feature-images">
                          <span class="fa fa-bullhorn" aria-hidden="true"></span>
                      </div>
                      <div class="feature-info">
                          <a href="about.php">
                              <h3 class="feature-titel">Shop Workouts</h3>
                          </a>
                          <p class="feature-text">Amazing Shop Workout and Mediatation that suit everyone</p>
                          <a href="about.php" class="feature-link">Read more <span
                                  class="arrow">&raquo;</span></a>
                      </div>
                  </div>
              </div>
              <div class="feature-2">
                  <div class="feature-body">
                      <div class="feature-images">
                          <span class="fa fa-users" aria-hidden="true"></span>
                      </div>
                      <div class="feature-info">
                          <a href="about.php">
                              <h3 class="feature-titel">Shop Instructors</h3>
                          </a>
                          <p class="feature-text">All Our Classes are Well Planned by Professional Shop
                              Instructors</p>
                          <a href="about.php" class="feature-link">Read more <span
                                  class="arrow">&raquo;</span></a>
                      </div>
                  </div>
              </div>
              <div class="feature-3">
                  <div class="feature-body">
                      <div class="feature-images">
                          <span class="fa fa-umbrella" aria-hidden="true"></span>
                      </div>
                      <div class="feature-info">
                          <a href="about.php">
                              <h3 class="feature-titel">Professional Shop</h3>
                          </a>
                          <p class="feature-text">Professional Shop Instructors from around all the world</p>
                          <div class="hover">
                              <a href="about.php" class="feature-link">Read more <span
                                      class="arrow">&raquo;</span></a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- //3 grids with icon section -->


 <!-- blog section -->
 <div class="w3l-new-block-6 py-5">
  <div class="container py-md-4 py-3">
      <div class="title-heading-w3 text-center mx-auto">
          <h3 class="title-main">Our Blog Posts</h3>
          <p class="mt-4 sub-title"> Nulla mollis dapibus nunc, ut rhoncus
              turpis sodales quis. Integer sit amet mattis quam.</p>
      </div>
      <div class="d-grid mt-5 pt-lg-3">
          <div class="grids5-info">
              <a href="#blog"><img src="assets/images/image3.jpg" alt="" class="img-fluid" style="height: 470px;"/></a>
              <h4><a href="#blog">News Post title</a></h4>
              <ul class=" admin-list">
                  <li><a href="#blog"><span class=" fa fa-user" aria-hidden="true"></span>by
                          Admin</a></li>
                  <li><a href="#blog"><span class=" fa fa-comments-o" aria-hidden="true"></span>9
                          Comments</a></li>
              </ul>
              <p>It is a long established fact that a reader will be distracted by the readable content of
                  a page when looking at its layout</p>
          </div>
          <div class="grids5-info">
              <a href="#blog"><img src=" assets/images/image4.jpg" alt="" class="img-fluid" /></a>
              <h4><a href="#blog">News Post title</a></h4>
              <ul class=" admin-list">
                  <li><a href="#blog"><span class=" fa fa-user" aria-hidden="true"></span>by
                          Admin</a></li>
                  <li><a href="#blog"><span class=" fa fa-comments-o" aria-hidden="true"></span>5
                          Comments</a></li>
              </ul>
              <p>It is a long established fact that a reader will be distracted by the readable content of
                  a page when looking at its layout</p>
          </div>
          <div class="grids5-info">
              <a href="#blog"><img src=" assets/images/image1.jpg" alt="" class="img-fluid" /></a>
              <h4><a href="#blog">News Post title</a></h4>
              <ul class=" admin-list">
                  <li><a href="#blog"><span class=" fa fa-user" aria-hidden="true"></span>by
                          Admin</a></li>
                  <li><a href="#blog"><span class=" fa fa-comments-o" aria-hidden="true"></span>12
                          Comments</a></li>
              </ul>
              <p>It is a long established fact that a reader will be distracted by the readable content of
                  a page when looking at its layout</p>
          </div>
      </div>
  </div>
</div>
<!-- //blog section -->


  <!-- middle section with full bg imgage -->
  <div class="middle py-5">
    <div class="container py-md-5 py-4">
      <div class="welcome-left text-left py-lg-4">
        <h3>Creative & most complete Shop / health theme</h3>
        <p class="mt-3 pr-lg-5 mr-lg-5">Lorem ipsum viverra feugiat. Pellen tesque libero ut justo, ultrices in
          ligula. Semper at
          tempufddfel. Lorem ipsum dolor sit amet elit.</p>
        <a href="about.php" class="btn btn-style btn-white mt-sm-5 mt-4 mr-2">Read More</a>
        <a href="contact.php" class="btn btn-style btn-primary mt-sm-5 mt-4">Contact Us</a>
      </div>
    </div>
  </div>
  <!-- //middle section with full bg imgage -->
  
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
  <!-- footer -->
  <section class="w3l-footer-29-main">
    <div class="footer-29 py-5">
      <div class="container py-lg-4">
        <div class="row footer-top-29">
          <div class="col-lg-4 col-md-6 col-sm-7 footer-list-29 footer-1 pr-lg-5">
            <div class="footer-logo mb-3">
              <h1>
                <a class="navbar-brand" href="home.php">
                <i class="fa"  aria-hidden="true"><img src="assets/images/chaussure.jpg" alt="" style="height: 80px;width: 80px;margin-left: 1em;">Shop</i>
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


  <script>
function fun() {
document.getElementById("para123").removeAttribute("class");
document.getElementById("para1").removeAttribute("class");
}
</script>
</body>

</html>