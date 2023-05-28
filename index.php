
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Yogic a Sports Category Bootstrap Responsive</title>
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
                    <a class="navbar-brand" href="index.html">
                        <i class="fa fa-yoast" aria-hidden="true"></i>ogic
                    </a>
                </h1>
                <!-- if logo is image enable this   
    <a class="navbar-brand" href="#index.html">
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
                            <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="classes.html">Classes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact Us</a>
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
                    <p>Fashion is a way to express yourself ! You are welcome to out website</p>
                    <div class="mt-md-5 mt-4 mb-lg-0 mb-4">
                        <a class="btn btn-primary btn-style" href="classes.html">View More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //banner section -->
    <!-- index-section-1 -->
    <section class="w3l-index-block2 py-5">
        <div class="container py-md-4 py-3">
            <div class="title-heading-w3 text-center mx-auto">
                <h3 class="title-main">Popular Online Classes</h3>
                <p class="mt-4 sub-title"> <button id = "btn"> Click me </button> <br>Nulla mollis dapibus nunc, ut rhoncus
                    turpis sodales quis. Integer sit amet mattis quam.</p>
            </div>
            <div class="row bottom_grids mt-5 pt-lg-3">


                <?php include 'connect.php';?>

                <?php 
                
                $query = mysqli_query($conn,"SELECT * FROM produit limit 1");
                    while($row = mysqli_fetch_array($query))
                    {
                        echo "<div class=\"blogsnippet\">";
                        echo "<h4></h4>";
                        echo "</div>";
                    }
                
                ?>


                <div class="col-lg-3 col-md-6 px-lg-2">
                    <div class="s-block">
                        <a href="classes.html" class="d-block">
                            <img src="assets/images/class2.jpg" alt="" class="img-fluid" />
                            <div class="p-3">
                                <h3 class="mb-2"></h3>
                                <p>Morbi sed feugiat sapien, vitae luctus justo.</p>
                                <strong class="fee-class-w3 mt-3">Free</strong>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 px-lg-2 mt-md-0 mt-4 grid-4-col">
                    <div class="s-block">
                        <a href="classes.html" class="d-block">
                            <img src="assets/images/class5.jpg" alt="" class="img-fluid img-responsive" />
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
                        <a href="classes.html" class="d-block">
                            <img src="assets/images/class1.jpg" alt="" class="img-fluid" />
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
                        <a href="classes.html" class="d-block">
                            <img src="assets/images/class3.jpg" alt="" class="img-fluid" />
                            <div class="p-3">
                                <h3 class="mb-2">Mastering anxiety</h3>
                                <p class="">Morbi sed feugiat sapien, vitae luctus justo.</p>
                                <strong class="fee-class-w3 mt-3">$67</strong>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="mt-5 mx-auto text-center">
                <a class="btn btn-primary btn-style" href="classes.html">View All Classes</a>
            </div>
        </div>
    </section>
    <!-- //index-section-1 -->
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
                                <a href="about.html">
                                    <h3 class="feature-titel">Yoga Workouts</h3>
                                </a>
                                <p class="feature-text">Amazing Yoga Workout and Mediatation that suit everyone</p>
                                <a href="about.html" class="feature-link">Read more <span
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
                                <a href="about.html">
                                    <h3 class="feature-titel">Yoga Instructors</h3>
                                </a>
                                <p class="feature-text">All Our Classes are Well Planned by Professional Yoga
                                    Instructors</p>
                                <a href="about.html" class="feature-link">Read more <span
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
                                <a href="about.html">
                                    <h3 class="feature-titel">Professional Yoga</h3>
                                </a>
                                <p class="feature-text">Professional Yoga Instructors from around all the world</p>
                                <div class="hover">
                                    <a href="about.html" class="feature-link">Read more <span
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
    <!-- articles section -->
    <section class="w3l-servicesblock py-5">
        <div class="container py-md-4 py-3">
            <div class="row">
                <div class="col-lg-6 left-wthree-img">
                    <img src="assets/images/image2.jpg" alt="" class="img-fluid">
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
                                        href="classes.html">Meditation</a>
                                </li>
                                <li><i class="fa fa-hand-o-right mr-2" aria-hidden="true"></i><a
                                        href="classes.html">Yoga
                                        Therapy</a></li>
                                <li><i class="fa fa-hand-o-right mr-2" aria-hidden="true"></i><a
                                        href="classes.html">Anatomy</a>
                                </li>
                                <li><i class="fa fa-hand-o-right mr-2" aria-hidden="true"></i><a
                                        href="classes.html">Yoga Poses</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-6 left-insp-art">
                            <ul>
                                <li><i class="fa fa-hand-o-right mr-2" aria-hidden="true"></i><a
                                        href="classes.html">Pranayama</a>
                                </li>
                                <li><i class="fa fa-hand-o-right mr-2" aria-hidden="true"></i><a
                                        href="classes.html">Remedies</a>
                                </li>
                                <li><i class="fa fa-hand-o-right mr-2" aria-hidden="true"></i><a
                                        href="classes.html">Seasonal
                                        Tips</a></li>
                                <li><i class="fa fa-hand-o-right mr-2" aria-hidden="true"></i><a
                                        href="classes.html">Recipes</a>
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
                                        <a href="#team"><img src="assets/images/team1.jpg" alt=""
                                                class="img-fluid" /></a>
                                        <h3 class="name-pos"><a href="#team">Sally Kee</a></h3>
                                    </div>
                                    <div class="column">
                                        <p>Senior Instructor</p>
                                        <div class="social">
                                            <a href="#facebook" class="facebook"><span class="fa fa-facebook"
                                                    aria-hidden="true"></span></a>
                                            <a href="#twitter" class="twitter"><span class="fa fa-twitter"
                                                    aria-hidden="true"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="d-grid team-info">
                                    <div class="column position-relative">
                                        <a href="#team"><img src="assets/images/team2.jpg" alt=""
                                                class="img-fluid" /></a>
                                        <h3 class="name-pos"><a href="#team">Angela Doe</a></h3>
                                    </div>
                                    <div class="column">
                                        <p>Team Lead</p>
                                        <div class="social">
                                            <a href="#facebook" class="facebook"><span class="fa fa-facebook"
                                                    aria-hidden="true"></span></a>
                                            <a href="#twitter" class="twitter"><span class="fa fa-twitter"
                                                    aria-hidden="true"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="d-grid team-info">
                                    <div class="column position-relative">
                                        <a href="#team"><img src="assets/images/team5.jpg" alt=""
                                                class="img-fluid" /></a>
                                        <h3 class="name-pos"><a href="#team">Donna Jek</a></h3>
                                    </div>
                                    <div class="column">
                                        <p>Senior Instructor</p>
                                        <div class="social">
                                            <a href="#facebook" class="facebook"><span class="fa fa-facebook"
                                                    aria-hidden="true"></span></a>
                                            <a href="#twitter" class="twitter"><span class="fa fa-twitter"
                                                    aria-hidden="true"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="d-grid team-info">
                                    <div class="column position-relative">
                                        <a href="#team"><img src="assets/images/team4.jpg" alt=""
                                                class="img-fluid" /></a>
                                        <h3 class="name-pos"><a href="#team">Irene Lee</a></h3>
                                    </div>
                                    <div class="column">
                                        <p>Senior Instructor</p>
                                        <div class="social">
                                            <a href="#facebook" class="facebook"><span class="fa fa-facebook"
                                                    aria-hidden="true"></span></a>
                                            <a href="#twitter" class="twitter"><span class="fa fa-twitter"
                                                    aria-hidden="true"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="d-grid team-info">
                                    <div class="column position-relative">
                                        <a href="#team"><img src="assets/images/team3.jpg" alt=""
                                                class="img-fluid" /></a>
                                        <h3 class="name-pos"><a href="#team">Maria Joe</a></h3>
                                    </div>
                                    <div class="column">
                                        <p>Senior Instructor</p>
                                        <div class="social">
                                            <a href="#facebook" class="facebook"><span class="fa fa-facebook"
                                                    aria-hidden="true"></span></a>
                                            <a href="#twitter" class="twitter"><span class="fa fa-twitter"
                                                    aria-hidden="true"></span></a>
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
                    <a href="#blog"><img src="assets/images/blog1.jpg" alt="" class="img-fluid" /></a>
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
                    <a href="#blog"><img src=" assets/images/blog3.jpg" alt="" class="img-fluid" /></a>
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
                    <a href="#blog"><img src=" assets/images/blog2.jpg" alt="" class="img-fluid" /></a>
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
                <h3>Creative & most complete yoga / health theme</h3>
                <p class="mt-3 pr-lg-5 mr-lg-5">Lorem ipsum viverra feugiat. Pellen tesque libero ut justo, ultrices in
                    ligula. Semper at
                    tempufddfel. Lorem ipsum dolor sit amet elit.</p>
                <a href="about.html" class="btn btn-style btn-white mt-sm-5 mt-4 mr-2">Read More</a>
                <a href="contact.html" class="btn btn-style btn-primary mt-sm-5 mt-4">Contact Us</a>
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
                <div class="row content-sec mt-md-5 mt-4">
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
                </div>
            </div>
        </div>
    </div>
    <!-- //testimonial section -->
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
                            <a class="navbar-brand" href="index.html">
                                <i class="fa fa-yoast" aria-hidden="true"></i>ogic
                            </a>
                        </div>
                        <p>Yoga teaches you how to listen your body, Join our Amazing online classes,
                            <br>semper at tempu amet.</p>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-5 col-6 footer-list-29 footer-2 mt-sm-0 mt-5">

                        <ul>
                            <h6 class="footer-title-29">Quick Links</h6>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="classes.html"> Classes</a></li>
                            <li><a href="#blog"> Blog Posts</a></li>
                            <li><a href="#blog">Blog Single</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-5 col-6 footer-list-29 footer-3 mt-lg-0 mt-5">
                        <h6 class="footer-title-29">More Info</h6>
                        <ul>
                            <li><a href="#privacy">Privacy Policy</a></li>
                            <li><a href="#terms"> Terms of Service</a></li>
                            <li><a href="contact.html">Contact us</a></li>
                            <li><a href="#support"> Support</a></li>
                        </ul>

                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-7 footer-list-29 footer-4 mt-lg-0 mt-5">
                        <h6 class="footer-title-29">Contact Info </h6>
                        <p>10001 Alleghany st, 5th Avenue, 235 Terry, London.</p>
                        <p class="mb-2 mt-3"><i class="fa fa-phone mr-2" aria-hidden="true"></i><a
                                href="tel:+12 23456790">+12 23456790</a></p>
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
    <!-- magnific popup -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.popup-with-zoom-anim').magnificPopup({
                type: 'inline',

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });

            $('.popup-with-move-anim').magnificPopup({
                type: 'inline',

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-slide-bottom'
            });
        });
    </script>
    <!-- //magnific popup -->
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
    <!--bootstrap-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- //bootstrap-->
    <!-- //Js scripts -->
</body>

</html>