<?php
require_once("../settings/core.php");
require_once("../controllers/product_controller.php");
require_once("../controllers/cart_controller.php");
require_once("../functions/function_store.php");
 

$cart_data= select_cart_count_ctr(get_ip_add());

?>

<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bistros - Restaurants Category Responsive Website Template - Menu : W3Layouts</title>
    <!-- google-fonts -->
    
    <link href="//fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;200;300;400;500;600;700&display=swap"
        rel="stylesheet">
    <!-- //google-fonts
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
     JavaScript Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    --> 
    <!-- Template CSS Style link -->
    <script src="signup/js/cart.js"></script>
    <link rel="stylesheet" href="assets/css/style-starter.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    
</head>

<body>
    <!--header-->
    <header id="site-header" class="fixed-top">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg stroke">
                <h1>
                    <a class="navbar-brand d-flex align-items-center" href="index.php">
                        Bistros <i class="fa fa-cutlery ml-2" aria-hidden="true"></i></a>
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
                    <ul class="navbar-nav ml-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About Us</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="menu.php">Menu</a>
                        </li>
                        <?php if (!(check_login())) {
                            
                            ?>
                        <li class="nav-item">
                            <div class="dropdown-center">
                                <a class="btn btn-secondary dropdown-toggle light" style="background-color: transparent;border: 0px"
                                 href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                    ACCOUNT
                                </a>

                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li><a class="dropdown-item" href="signup">Login</a></li>
                                    <li><a class="dropdown-item" href="#">Sign Up</a></li>
                                   
                                </ul>
                            </div>
                        </li>

                        <?php
                        }else{?>
                           <li class="nav-item">
                            <div class="dropdown-center">
                                <a class="btn btn-secondary dropdown-toggle nav-link" style="background-color: transparent;border: 0px"
                                 href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                    ACCOUNT
                                </a>

                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li><a class="dropdown-item" href="signup">Logout</a></li>
                                    <li><a class="dropdown-item" href="#">Sign Up</a></li>
                                    
                                </ul>
                            </div>
                        </li>

                        <?php } ?>
                        <li class="nav-item">
                            <a class="nav-link" href="cart.php">Cart(<?php echo $cart_data?>)</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact Us</a>
                        </li>
                        <!-- search button -->
                        <div class="search-right">
                            <form action="#search" method="GET" class="search-box position-relative">
                                <div class="input-search">
                                    <input type="search" placeholder="Enter Keyword" name="search" required="required"
                                        autofocus="" class="search-popup">
                                </div>
                                <button type="submit" class="btn search-btn"><i class="fa fa-search"
                                        aria-hidden="true"></i></button>
                            </form>
                        </div>
                        <!-- //search button -->
                    </ul>
                </div>
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
        <div class="w3l-breadcrumb">
            <div class="container">
                <h4 class="inner-text-title font-weight-bold text-white mb-sm-3 mb-2">Our Menu</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.php">Home</a></li>
                    <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span>Menu</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- //inner banner -->

    <!-- menu -->
    <div class="menu-w3ls py-5" id="menu">
        <div class="container py-md-5 py-4">
            <h3 class="title-big mb-2">Menu</h3>
            <div class="row menu-body">
            <?php 
                    $data = select_all_product_ctr();
                  

                    foreach ($data as $item){

                    ?>
                <!-- Section starts: Breakfast -->
                <div class="col-lg-6 menu-section" style="display:flex">
                    <!-- Item starts -->
                    
                    <div class="menu-item">
                        <div class="row no-gutters">
                            
                            <div><img src="img.png" alt="" srcset=""></div>
                            <div class="col-9 menu-item-name">
                                <h6 style="color:#fd7e14"><?php echo $item['p_name']?></h6>
                            </div>
                            <div class="col-3 menu-item-price text-right">
                                <h6><?php echo("$"); echo $item['p_price']?></h6>
                            </div>
                            <?php if (!(check_login())) {?>
                            <div onclick="addCart_ip()" style="float:left"><button style="width:5vw; border-radius:5px; color:white; background-color:#fd7e14; border:solid #fd7e14 1px 
                            ">Cart</button></div>
                            <?php }else{?>
                                <div style="margin-left:-10px" ><button onclick="addCart_id(<?php echo $item['p_id']?>)" style="width:5vw; border-radius:5px; color:white; background-color:#fd7e14; border:solid #fd7e14 1px 
                            ">Cart</button></div>
                            <?php } ?>
                            
                        </div>
                        <div class="menu-item-description">
                            <p><?php echo $item['p_desc']?>.</p>
                        </div>
                    </div>
                   
                    <!-- Item ends -->
           
                                  
                 <!-- Section ends: Breakfast -->
                 </div>

                 <?php }?>
                 
            </div>
        </div>
    </div>
    <!-- //menu -->

    <!-- footer -->
    <footer class="w3l-footer-29-main">
        <div class="footer-29-w3l py-5">
            <div class="container pt-md-5 pt-4">
                <div class="w3l-footer-texthny-inf">
                    <h2>
                        <a class="d-flex align-items-center logo-2" href="index.php">
                            Bistros <i class="fa fa-cutlery ml-2" aria-hidden="true"></i></a>
                    </h2>
                    <div class="footer-list-cont d-flex align-items-center justify-content-between mt-md-5 mt-4 mb-5">
                        <h6 class="foot-sub-title">Contact Us</h6>

                        <div class="main-social-footer-29">
                            <a href="#facebook" class="facebook"><span class="fa fa-facebook"></span></a>
                            <a href="#twitter" class="twitter"><span class="fa fa-twitter"></span></a>
                            <a href="#instagram" class="instagram"><span class="fa fa-instagram"></span></a>
                            <a href="#linkedin" class="linkedin"><span class="fa fa-linkedin"></span></a>
                        </div>
                    </div>
                </div>
                <div class="row footer-top-29 mt-lg-5 mt-md-4 pt-md-5">
                    <div class="col-lg-3 col-sm-6">
                        <div class="address-grid">
                            <h5>10001 Alleghany st, 5th Avenue, 235 Terry, <br> London.</h5>
                            <h5 class="mt-sm-5 mt-4">Everyday: <span> 7 AM - 8 PM</span></h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mt-sm-0 mt-4">
                        <div class="address-grid">
                            <h5>Phone</h5>
                            <h5 class="phone-number-text mt-2"><a href="tel:+1(21) 234 4567">+1(21) 112 7368</a></h5>
                        </div>
                        <div class="address-grid mt-sm-5 mt-4">
                            <h5>E-mail</h5>
                            <h5 class="email-cont-text mt-1"> <a href="mailto:bistros@mail.com"
                                    class="mail">bistros@mail.com</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-5 footer-list-menu pl-lg-0 mt-lg-0 mt-sm-5 mt-4">
                        <div class="address-grid">
                            <h5 class="mb-4 pb-lg-2">Support Links</h5>
                            <ul>
                                <li><a href="#privacy">Privacy Policy</a></li>
                                <li><a href="#terms"> Terms of Service</a></li>
                                <li><a href="contact.php">Contact us</a></li>
                                <li><a href="#support"> Support</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="address-grid col-lg-4 col-md-6 col-sm-7 mt-lg-0 mt-sm-5 mt-4 w3l-footer-16-main">
                        <h5>Subscribe Here</h5>
                        <form action="#" class="subscribe d-flex mt-4 pt-lg-2 mb-4" method="post">
                            <input type="email" name="email" placeholder="Email Address" required="">
                            <button><span class="fa fa-paper-plane" aria-hidden="true"></span></button>
                        </form>
                        <p>Subscribe to our mailing list and get updates to your email inbox.</p>
                    </div>
                </div>
                <!-- copyright -->
                <div class="w3l-copyright mt-lg-5 mt-sm-4 pt-md-4 pt-3">
                    <div class="row bottom-copies pt-md-5 pt-4 mt-md-5 mt-4">
                        <p class="col-lg-8 copy-footer-29">© 2021 Bistros. All rights reserved. Design by <a
                                href="https://w3layouts.com/" target="_blank">
                                W3layouts</a></p>

                        <div class="col-lg-4 footer-list-29 mt-lg-0 mt-md-4 mt-2">
                            <ul class="d-flex text-lg-right">
                                <li><a href="#support"> Support</a></li>
                                <li class="mx-lg-5 mx-md-4 mx-3"><a href="#privacy">Privacy Policy</a>
                                </li>
                                <li><a href="contact.php">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- //footer -->

    <!-- Js scripts -->
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fa fa-level-up" aria-hidden="true"></span>
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
    <!-- //move top -->

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
</body>

</html>