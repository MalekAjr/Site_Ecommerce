
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

<body onload="window.alert('Page successfully loaded');">
    <!--header-->
    <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg stroke px-0">
                <h1>
                    <a class="navbar-brand" href="home.php">
                        <i class="fa fa-yoast" aria-hidden="true"></i>Yalla <br><br>Shopping
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
                        <li class="nav-item">
                            <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="classes.php">Classes</a>
                        </li>
                        <li class="nav-item active">
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
        </div>
    </header>
    <!--//header-->
    <!-- inner banner -->
    <div class="inner-banner">
        <section class="w3l-breadcrumb">
            <div class="container">
                <ul class="breadcrumbs-custom-path">
                    <li><a href="home.php">Home</a></li>
                    <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span> Contact Us</li>
                </ul>
            </div>
        </section>
    </div>
    <!-- //inner banner -->
    <!-- contact -->
    <section class="w3l-contacts-12">
        <div class="contact-top pt-5">
            <div class="container py-md-4 py-3">
                <div class="title-heading-w3 text-center mx-auto">
                    <h3 class="title-main">Get In Touch</h3>
                    <p class="mt-4 sub-title"> Nulla mollis dapibus nunc, ut rhoncus
                        turpis sodales quis. Integer sit amet mattis quam.</p>
                </div>
                <div class="d-grid cont-main-top mt-5">
                    <!-- contact form -->
                    <div class="contacts12-main mt-lg-2">
                        <form action="inscription_contact.php" method="post" class="main-input">
                            <div class="top-inputs d-grid">
                                <input type="text" placeholder="Name" name="w3lName" id="w3lName" required="" class="btn btn-primary btn-style mt-4">
                                <input type="email" name="email" placeholder="Email" id="w3lSender" required="" class="btn btn-primary btn-style mt-4">
                            </div>
                            <input type="number" placeholder="Phone Number" name="phone" id="w3lName" required="" class="border border-light">
                            <textarea placeholder="Message" name="w3lMessage" id="w3lMessage" required="" class="btn btn-primary btn-style mt-4"></textarea>
                            <label>date</label> <input type="date" name="date" class="btn btn-primary btn-style mt-4"><br>
                            <button type="submit" name="envoyer" class="btn btn-primary btn-style mt-4">Submit Now</button>
                        </form>
                    </div>
                    <!-- //contact form -->
                    <!-- contact address -->
                    <div class="contact">
                        <div class="cont-subs">
                            <div class="cont-add">
                                <h4>Address:</h4>
                                <p class="contact-text-sub">Msaken, <br> 45 Villet,4070, Maple Building</p>
                            </div>
                            <div class="cont-add">
                                <h4>Email:</h4>
                                <a href="mailto:info@example.com">
                                    <p class="contact-text-sub">info@example.com</p>
                                </a>
                            </div>
                            <div class="cont-add">
                                <h4>Phone:</h4>
                                <a href="tel:+7-800-999-800">
                                    <p class="contact-text-sub">+7-800-999-800</p>
                                </a>
                            </div>
                            <div class="social-icons-con">
                                <a href="#facebook"><span class="fa fa-facebook-square" aria-hidden="true"></span></a>
                                <a href="#twitter"><span class="fa fa-twitter-square" aria-hidden="true"></span></a>
                                <a href="#google-plus"><span class="fa fa-google-plus-square"
                                        aria-hidden="true"></span></a>
                            </div>
                        </div>
                    </div>
                    <!-- //contact address -->
                </div>
            </div>
            <!-- map -->
            <div class="map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d158857.7281066703!2d-0.24168144921176335!3d51.5287718408761!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C%20UK!5e0!3m2!1sen!2sin!4v1569921526194!5m2!1sen!2sin"
                    frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
            <!-- //map -->
        </div>
    </section>
    <!-- //contact -->
    <!-- footer -->
    <section class="w3l-footer-29-main">
        <div class="footer-29 py-5">
            <div class="container py-lg-4">
                <div class="row footer-top-29">
                    <div class="col-lg-4 col-md-6 col-sm-7 footer-list-29 footer-1 pr-lg-5">
                        <div class="footer-logo mb-3">
                            <a class="navbar-brand" href="contact.php">
                                <i class="fa fa-yoast" aria-hidden="true"></i>Shop
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
    <!--bootstrap-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- //bootstrap-->
    <!-- //Js scripts -->
    <script>

document.write("Malek's page is loaded successfully");

</script>
</body>
<style>
    input[type="date"]::-webkit-calendar-picker-indicator {
  filter: invert(100%);
}
    </style>
</html>