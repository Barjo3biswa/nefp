<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>NE Food PRO 2024 | Northeast India</title>
    <link href="{{asset('/')}}assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('/')}}assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{asset('/')}}assets/css/themify-icons.css" rel="stylesheet">
    <link href="{{asset('/')}}assets/css/elegant-icons.css" rel="stylesheet">
    <link href="{{asset('/')}}assets/css/flaticon-set.css" rel="stylesheet">
    <link href="{{asset('/')}}assets/css/magnific-popup.css" rel="stylesheet">
    <link href="{{asset('/')}}assets/css/swiper-bundle.min.css" rel="stylesheet">
    <link href="{{asset('/')}}assets/css/animate.css" rel="stylesheet">
    <link href="{{asset('/')}}assets/css/validnavs.css" rel="stylesheet">
    <link href="{{asset('/')}}assets/css/helper.css" rel="stylesheet">
    <link href="{{asset('/')}}assets/css/shop.css" rel="stylesheet">
    <link href="{{asset('/')}}assets/css/style.css" rel="stylesheet">
    <link href="{{asset('/')}}assets/css/unit-test.css" rel="stylesheet">
    <link href="{{asset('/')}}style.css" rel="stylesheet">
    @yield('css')
</head>

<body>
    {{-- <div class="se-pre-con"></div>
    <div class="top-bar-area text-light" style="display: none;">
        <div class="container">
            <div class="row1 flex-div-top align-center">
                <div class="top-div-1">
                    <div class="flex-item left">
                        <p>Venue: Assam Administrative Staff College, Khanapara, Guwahati</p>
                        <ul class="vanue-date">
                            <li class="li">
                                <div class="date"><strong>26</strong> <span>Feb, 24</span></div>
                            </li>
                            <li class="li">
                                <div class="date"><strong>27</strong> <span>Feb, 24</span></div>
                            </li>
                            <li class="li">
                                <div class="date"><strong>28</strong> <span>Feb, 24</span></div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="top-div-2 text-end">
                    <div class="social">
                        <ul style="display: flex;align-items: center;">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href=""><img src="{{asset('/')}}assets/icons/twitter.png" alt="" width="12"></a>
                            </li>
                            <li><a href="#" style="padding-left: 7px;"><i class="fab fa-instagram"
                                        style="color:red;"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <header>
        <nav class="navbar mobile-sidenav inc-shape navbar-common navbar-sticky navbar-default validnavs">
            <div class="top-search">
                <div class="container-xl">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                    </div>
                </div>
            </div>
            <div class="container d-flex justify-content-between align-items-center">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="https://nefoodpro.com/">
                        <img src="{{asset('/')}}assets/logo/nefo_logo.png" alt="">
                    </a>
                </div>
                <div class="main-nav-content">
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <img src="{{asset('/')}}assets/logo/nefo_logo.png" alt="Logo"></a>
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-times"></i>
                        </button>


                        <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">About NE Food Pro</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown"><a href="javascript:void(0)" class="dropdown-toggle"
                                            data-toggle="dropdown">NE
                                            Food
                                            Pro 2024</a>
                                        <ul>
                                            <ul class="dropdown-menu">
                                                <li><a href="https://nefoodpro.com/about-us.html">About</a></li>
                                                <li><a href="https://nefoodpro.com/pdf/New Northeast food processing Brochure.pdf"
                                                        target="_blank">Brochure</a></li>
                                                <li><a href="key_elements.html">Key Elements</a></li>
                                            </ul>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#" class="dropdown-toggle"
                                            data-toggle="dropdown">NE Food
                                            Fest 2023</a>
                                        <ul>
                                            <ul class="dropdown-menu">
                                                <li><a href="https://nefoodpro.com/pdf/food_fest-2023/ne_food-fest-report_2023.pdf"
                                                        target="_blank">Reports</a></li>
                                                <li><a href="https://nefoodpro.com/pdf/food_fest-2023/exhibitor_list.pdf"
                                                        target="_blank">Exhibitors list</a></li>
                                                <li><a href="https://nefoodpro.com/pdf/food_fest-2023/technical_seminar.pdf"
                                                        target="_blank">Technical Seminars</a>
                                                </li>
                                                <li><a href="https://nefoodpro.com/gallery-2023.html">Photo Gallery</a></li>
                                            </ul>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Why Visit NE Food
                                    Pro</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown">
                                        <a href="https://nefoodpro.com/why_visit.html">Why Visit</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="https://nefoodpro.com/who_attend.html">Who should Attend</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="https://nefoodpro.com/how-to-reach.html">How to Reach</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="https://nefoodpro.com/hotels.html">Hotels & Accomodations</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Invest in Assam</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown">
                                        <a href="https://nefoodpro.com/introducing_assam_01.html">Introducing Assam</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="https://nefoodpro.com/connectivity.html">Connectivity</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="https://nefoodpro.com/industrial_infrastructure.html">Industrial Infrastructure</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="https://nefoodpro.com/policies_&_regulatory_act.html">Policies & Regulatory Act</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="https://nefoodpro.com/focus_on_agrihorti_sectors.html">Focus on Agrihorti Sectors</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="https://nefoodpro.com/major_players_in_food_processing.html">Major Players in Food
                                            Processing</a>
                                    </li>
                                </ul>
                            </li>
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
                                        <a href="{{route('business-match')}}">Business Match</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="{{route('exibitor-profile')}}">Exhibitor Profile</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="{{route('btob-btog-profile')}}">B2B/B2G Profile</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="{{route('print-pass')}}">Print Pass</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Media & Gallery</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown">
                                        <a href="https://nefoodpro.com/gallery.html">NE Photo Gallery</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="https://nefoodpro.com/javascript:void(0)">Press</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="https://nefoodpro.com/audio.html">Radio Jingle</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="https://nefoodpro.com/iec.html">IEC</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="https://nefoodpro.com/javascript:void(0)">Video Gallery</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#contact">Contact Us</a>
                            </li>


                            @if (Auth::check())
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle"
                                        data-toggle="dropdown">{{ Auth::User()->first_name . ' ' . Auth::User()->mioddle_name . ' ' . Auth::User()->last_name }}</a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown">
                                            <a class="dropdown-item" href="javascript:void(0)"
                                                onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                                                <i class="mdi mdi-logout me-2 text-primary"></i> Signout </a>
                                        </li>
                                    </ul>
                                    <form id="logoutform" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            @endif


                        </ul>
                    </div>
                    <div class="overlay-screen"></div>
                </div>
            </div>
        </nav>
    </header>

    @yield('content')
    <footer class="bg-dark text-light">
        <div class="container">
            <div class="footer-bottom">
                <div class="row">
                    <div class="col-lg-6">
                        <p>&copy; Copyright 2024. All Rights Reserved by <a href="#">Web.com(India) Pvt. Ltd.</a>
                        </p>
                    </div>
                    <div class="col-lg-6" style="text-align: right;">
                        <a href="https://nefoodpro.com/registration/public/admin">Admin Login</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-right-bottom">
            <img src="{{asset('/')}}assets/img/shape/10.png" alt="Image Not Found">
        </div>
    </footer>
    <script src="{{asset('/')}}assets/js/jquery-3.6.0.min.js"></script>
    <script src="{{asset('/')}}assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('/')}}assets/js/jquery.appear.js"></script>
    <script src="{{asset('/')}}assets/js/jquery.easing.min.js"></script>
    <script src="{{asset('/')}}assets/js/jquery.magnific-popup.min.js"></script>
    <script src="{{asset('/')}}assets/js/modernizr.custom.13711.js"></script>
    <script src="{{asset('/')}}assets/js/swiper-bundle.min.js"></script>
    <script src="{{asset('/')}}assets/js/wow.min.js"></script>
    <script src="{{asset('/')}}assets/js/progress-bar.min.js"></script>
    <script src="{{asset('/')}}assets/js/circle-progress.js"></script>
    <script src="{{asset('/')}}assets/js/isotope.pkgd.min.js"></script>
    <script src="{{asset('/')}}assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="{{asset('/')}}assets/js/jquery.nice-select.min.js"></script>
    <script src="{{asset('/')}}assets/js/count-to.js"></script>
    <script src="{{asset('/')}}assets/js/jquery.scrolla.min.js"></script>
    <script src="{{asset('/')}}assets/js/YTPlayer.min.js"></script>
    <script src="{{asset('/')}}assets/js/TweenMax.min.js"></script>
    <script src="{{asset('/')}}assets/js/loopcounter.js"></script>
    <script src="{{asset('/')}}assets/js/validnavs.js"></script>
    <script src="{{asset('/')}}assets/js/main.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const images = document.querySelectorAll('.slider-image');
            const title = document.querySelector('.slider-title');
            let currentIndex = 0;

            function showImage(index) {
                images.forEach((image, i) => {
                    if (i === index) {
                        image.classList.add('active');
                    } else {
                        image.classList.remove('active');
                    }
                });
            }

            function changeImage() {
                currentIndex++;
                if (currentIndex >= images.length) {
                    currentIndex = 0;
                }
                showImage(currentIndex);
                setTimeout(changeImage, 800);
            }

            changeImage();
        });
    </script>

    @yield('js')




</body>

</html>
