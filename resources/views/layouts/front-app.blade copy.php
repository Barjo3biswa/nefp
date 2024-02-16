<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <!-- ========== Page Title ========== -->
    <title>NE Food PRO 2024 | Northeast India</title>
    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
    <!-- ========== Start Stylesheet ========== -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/themify-icons.css" rel="stylesheet">
    <link href="assets/css/elegant-icons.css" rel="stylesheet">
    <link href="assets/css/flaticon-set.css" rel="stylesheet">
    <link href="assets/css/magnific-popup.css" rel="stylesheet">
    <link href="assets/css/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/validnavs.css" rel="stylesheet">
    <link href="assets/css/helper.css" rel="stylesheet">
    <link href="assets/css/shop.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/unit-test.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    @yield('css')
    <!-- ========== End Stylesheet ========== -->
</head>

<body>
    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    <!-- Start Header Top
    ============================================= -->
    <div class="top-bar-area text-light">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-9">
                    <div class="flex-item left">
                        <p>Venue: Guwahati, Assam</p>
                        <ul>
                            <li>
                                <i class="fas fa-clock"></i> 26, 27 & 28 February
                            </li>
                            <!-- <li>
                  <i class="fas fa-clock"></i> 123456789
                  </li> -->
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 text-end">
                    <div class="social">
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top -->

    <!-- Header
      ============================================= -->
    <header>
        <!-- Start Navigation -->
        <nav class="navbar mobile-sidenav inc-shape navbar-common navbar-sticky navbar-default validnavs">

            <!-- Start Top Search -->
            <div class="top-search">
                <div class="container-xl">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                    </div>
                </div>
            </div>
            <!-- End Top Search -->
            <div class="container d-flex justify-content-between align-items-center">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        <!-- <img src="assets/img/logo.png" class="logo" alt="Logo"> -->
                        <h2 style="margin-bottom: 0; font-weight: 800; color: #1f4e3d;">NE Food Pro 2024</h2>
                    </a>
                </div>
                <!-- End Header Navigation -->
                <!-- Main Nav -->
                {{-- <div class="main-nav-content">
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <img src="assets/img/PMFME_logo.png" alt="Logo"></a>
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-times"></i>
                        </button>

                        <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">About NE Food Pro</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown"><a href="about-us.html" class="dropdown-toggle"
                                            data-toggle="dropdown">NE Food Pro 2024</a>
                                        <ul>
                                            <ul class="dropdown-menu">
                                                <li><a href="about-us.html">About Us</a></li>
                                                <li><a href="about-us.html">Brochurs</a></li>
                                                <li><a href="about-us.html">Key Elements</a></li>
                                            </ul>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="about-us.html" class="dropdown-toggle"
                                            data-toggle="dropdown">NE Food Fest 2023</a>
                                        <ul>
                                            <ul class="dropdown-menu">
                                                <li><a href="about-us.html">Reports</a></li>
                                                <li><a href="about-us.html">Exhibitors list</a></li>
                                                <li><a href="about-us.html">Technical Seminars</a></li>
                                            </ul>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Why NE Food Pro</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown">
                                        <a href="#">Why</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#">Who</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#">How</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Invest in Assam</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown">
                                        <a href="#">Introduction</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#">Conn.</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#"></a>
                                    </li>
                                </ul>
                            </li>
                            <!-- <li class="dropdown">
                  <a href="#">Exhibitions</a>
                  </li> -->
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Register</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown">
                                        <a href="{{route('register')}}">Resgistration</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="{{route('login')}}">Log in</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#">Exhibitor Profile</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#">Print Pass</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Media & Gallery</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown">
                                        <a href="#">NE Photo Gallery</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#">Press</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#">IEC</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#">Download</a>
                            </li>
                        </ul>
                    </div>
                    <!-- Overlay screen for menu -->
                    <div class="overlay-screen"></div>
                    <!-- End Overlay screen for menu -->
                </div> --}}
                <!-- Main Nav -->
            </div>
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Header -->

    <!-- Start Banner Area
      ============================================= -->
    @yield("content")
    <!-- End partner Area
    ============================================= -->

    <!-- Start Contact Us
    ============================================= -->
    {{-- <div class="contact-area bg-gray default-padding" style="background-image: url(assets/img/shape/28.png);">
        <div class="container">
            <div class="row align-center">
                <div class="col-tact-stye-one col-lg-7">
                    <div class="contact-form-style-one mb-md-50">
                        <h5 class="sub-title">Have Questions?</h5>
                        <h2 class="heading">Send us a Massage</h2>
                        <form action="https://validthemes.net/site-template/agrul/assets/mail/contact.php"
                            method="POST" class="contact-form contact-form">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" id="name" name="name" placeholder="Name"
                                            type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="email" name="email"
                                            placeholder="Email*" type="email">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="phone" name="phone"
                                            placeholder="Phone" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group comments">
                                        <textarea class="form-control" id="comments" name="comments" placeholder="Tell Us About Project *"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <button type="submit" name="submit" id="submit">
                                        <i class="fa fa-paper-plane"></i> Get in Touch
                                    </button>
                                </div>
                            </div>
                            <!-- Alert Message -->
                            <div class="col-lg-12 alert-notification">
                                <div id="message" class="alert-msg"></div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-tact-stye-one col-lg-5 pl-60 pl-md-15 pl-xs-15">
                    <div class="contact-style-one-info">
                        <h2>Contact
                            <span>Information
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 150"
                                    preserveAspectRatio="none">
                                    <path
                                        d="M14.4,111.6c0,0,202.9-33.7,471.2,0c0,0-194-8.9-397.3,24.7c0,0,141.9-5.9,309.2,0"
                                        style="animation-play-state: running;"></path>
                                </svg>
                            </span>
                        </h2>
                        <p>Plan upon yet way get cold spot its week. Almost do am or limits hearts. Resolve parties but
                            why she shewing.</p>
                        <ul>
                            <li class="wow fadeInUp">
                                <div class="icon">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="content">
                                    <h5 class="title">Hotline</h5>
                                    <a href="#">+4733378901</a>
                                </div>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay="300ms">
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="info">
                                    <h5 class="title">Our Location</h5>
                                    <p> 55 Main Street, The Grand Avenue 2nd Block, <br> New York City</p>
                                </div>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay="500ms">
                                <div class="icon">
                                    <i class="fas fa-envelope-open-text"></i>
                                </div>
                                <div class="info">
                                    <h5 class="title">Official Email</h5>
                                    <a href="mailto:info@agrul.com.com">info@agrul.com</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- End Contact -->


    <!-- Start Footer
============================================= -->
    <footer class="bg-dark text-light" style="background-image: url(assets/img/shape/brush-down.png);">
        <div class="container">
            <!-- Start Footer Bottom -->
            <div class="footer-bottom">
                <div class="row">
                    <div class="col-lg-6">
                        <p>&copy; Copyright 2024. All Rights Reserved by <a href="#">Web.com(India) Pvt. Ltd.</a>
                        </p>
                    </div>
                    <div class="col-lg-6 text-end">
                        <ul>
                            <li>
                                <a href="about-us.html">Terms</a>
                            </li>
                            <li>
                                <a href="about-us.html">Privacy</a>
                            </li>
                            <li>
                                <a href="contact-us.html">Support</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Footer Bottom -->
        </div>
        <div class="shape-right-bottom">
            <img src="assets/img/shape/10.png" alt="Image Not Found">
        </div>
        <!-- <div class="shape-left-bottom">
<img src="assets/img/shape/11.png" alt="Image Not Found">
</div> -->
    </footer>
    <!-- End Footer -->

    <!-- jQuery Frameworks
============================================= -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.appear.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/modernizr.custom.13711.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/progress-bar.min.js"></script>
    <script src="assets/js/circle-progress.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/count-to.js"></script>
    <script src="assets/js/jquery.scrolla.min.js"></script>
    <script src="assets/js/YTPlayer.min.js"></script>
    <script src="assets/js/TweenMax.min.js"></script>
    <script src="assets/js/loopcounter.js"></script>
    <script src="assets/js/validnavs.js"></script>
    <script src="assets/js/main.js"></script>

@yield('js')
</body>

</html>
