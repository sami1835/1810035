<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title>MediLab</title>

    <!-- Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('frontend')}}/assets/images/logo/favicon.png" type="image/x-icon">

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('frontend')}}/assets/css/animate-3.7.0.css">
    <link rel="stylesheet" href="{{ asset('frontend')}}/assets/css/font-awesome-4.7.0.min.css">
    <link rel="stylesheet" href="{{ asset('frontend')}}/assets/css/bootstrap-4.1.3.min.css">
    <link rel="stylesheet" href="{{ asset('frontend')}}/assets/css/owl-carousel.min.css">
    <link rel="stylesheet" href="{{ asset('frontend')}}/assets/css/jquery.datetimepicker.min.css">
    <link rel="stylesheet" href="{{ asset('frontend')}}/assets/css/linearicons.css">
    <link rel="stylesheet" href="{{ asset('frontend')}}/assets/css/style.css">
</head>
<body>

    <!-- Header Area-->
    <header class="header-area">
        <div id="header" id="home">
            <div class="container">
                <div class="row align-items-center justify-content-between d-flex">
                <div id="logo">
                    <a href="index.html"><img src="{{ asset('frontend')}}/assets/images/logo/logo.png" alt="" title="" /></a>
                </div>
                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li class="menu-active"><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ route('about_page')}}">About Us</a></li>
                        <li class="menu-has-children"><a href="">Pages</a>
                            <ul>
                                <li><a href="{{ route('our_doctor1_page')}}">our doctor's</a></li>
                                <li><a href="{{ route('gallery_page')}}">gallery</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('login') }}">login</a></li>
                        <li><a href="{{ route('register') }}">regiter</a></li>		          				          
                    </ul>
                </nav>		    		
                </div>
            </div>
        </div>
    </header>

    @yield('frontend_content')
    
    <!-- Footer Area -->
    <footer class="footer-area section-padding">
        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-xl-2 col-lg-3">
                        <div class="single-widget-home mb-5 mb-lg-0">
                            <h3 class="mb-4">Quick Links</h3>
                            <div class="footer-contact-item d-flex">
                                <a href="{{ route('about_page')}}">About Us</a>
                            </div>
                            <div class="footer-contact-item d-flex">
                                <a href="{{ route('our_doctor1_page')}}">Our Doctor's</a>
                            </div>
                            <div class="footer-contact-item d-flex">
                                <a href="{{ route('gallery_page')}}">Our Gallery</a>
                            </div>
                            <div class="footer-contact-item d-flex">
                                <a href="{{ route('login') }}">Login</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 offset-xl-1 col-lg-6">
                        <div class="single-widget-home mb-5 mb-lg-0">
                            <h3 class="mb-4">Contact Us</h3>
                            <div class="footer-contact-item d-flex">
                                <span> <i class="fas fa-location-arrow"></i> </span>
                                <a href="#"> 2 No. Rail Gate, Green Super Market (3rd Floor), Laxmipur, Rajshahi </a>
                            </div>
                            <div class="footer-contact-item d-flex">
                                <span> <i class="fas fa-envelope    "></i> </span>
                                <a href="mailto:info@website.com">medilab11@gmail.com</a>
                            </div>
                            <div class="footer-contact-item d-flex">
                                <span> <i class="fas fa-phone    "></i> </span>
                                <a href="tel:0984343434"> +880 8528, +880 4222, 01777776660</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 offset-xl-1 col-lg-3">
                        <div class="single-widge-home">
                            <h3 class="mb-4">Follow Us</h3>
                            <div class="footer-copyright">
                                <div class="social-icons">
                                    <ul>
                                        <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="https://www.whatsapp.com/"><i class="fa fa-whatsapp"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 text-center all-right">
                        <span>Copyright ©2021 All rights reserved</span>
                    </div>
                </div>
            </div>
        </div> 
    </footer>

    <!-- Scroll Top -->
    <a href="#" class="to-top">
        <i class="fas fa-level-up-alt"></i>
    </a>
    <script src="{{ asset('frontend')}}/assets/js/main_scrollup.js"></script>

    <!-- Javascript -->
    <script src="{{ asset('frontend')}}/assets/js/vendor/jquery-2.2.4.min.js"></script>
	<script src="{{ asset('frontend')}}/assets/js/vendor/bootstrap-4.1.3.min.js"></script>
    <script src="{{ asset('frontend')}}/assets/js/vendor/wow.min.js"></script>
    <script src="{{ asset('frontend')}}/assets/js/vendor/owl-carousel.min.js"></script>
    <script src="{{ asset('frontend')}}/assets/js/vendor/jquery.datetimepicker.full.min.js"></script>
    <script src="{{ asset('frontend')}}/assets/js/vendor/jquery.nice-select.min.js"></script>
    <script src="{{ asset('frontend')}}/assets/js/vendor/superfish.min.js"></script>
    <script src="{{ asset('frontend')}}/assets/js/main.js"></script>

</body>
</html>
