<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Waitech - Order Without Waiting</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('app/assets/frontend/images/w-icon.png') }}" />

    <!-- ========================= CSS here ========================= -->
    <link href="{{asset('app/assets/frontend/css/animate.css')}}" rel="stylesheet"  type="text/css" />
    <link href="{{asset('app/assets/frontend/css/bootstrap.min.css')}}" rel="stylesheet"  type="text/css" />
    <link href="{{asset('app/assets/frontend/css/glightbox.min.css')}}" rel="stylesheet"  type="text/css" />
    <link href="{{asset('app/assets/frontend/css/LineIcons.2.0.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('app/assets/frontend/css/main.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('app/assets/frontend/css/tiny-slider.css')}}" rel="stylesheet" type="text/css" />
    

</head>

<body>
    <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- /End Preloader -->

    <!-- Start Header Area -->
    <header class="header navbar-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="nav-inner">
                        <!-- Start Navbar -->
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="index.html">
                                <h1 style="font-size: 35px; color: #081828">Waitech</h1>
                            </a>
                            <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ms-auto">
                                    <li class="nav-item">
                                        <a href="#assets/frontend" class="page-scroll active"
                                            aria-label="Toggle navigation">assets/frontend</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#features" class="page-scroll"
                                            aria-label="Toggle navigation">Features</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#overview" class="page-scroll" aria-label="Toggle navigation">Overview</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#team" class="page-scroll" aria-label="Toggle navigation">Team</a>
                                    </li>
                                </ul>
                            </div> <!-- navbar collapse -->
                            <div class="button add-list-button">
                                <a href="{{ route('frontend.auth.login.form') }}" class="btn">
                                    Login
                                  </a>
                                  <a href="{{ route('frontend.auth.register.form') }}" class="btn">
                                    Register
                                  </a>
                            </div>
                        </nav>
                        <!-- End Navbar -->
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </header>
    <!-- End Header Area -->

    <!-- Start Hero Area -->
    <section id="assets/frontend" class="hero-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-12 col-12">
                    <div class="hero-content">
                        <h1 class="wow fadeInLeft" data-wow-delay=".4s">Order Without Waiting</h1>
                        <p class="wow fadeInLeft" data-wow-delay=".6s">Are you tired of waiting long lines when ordering ? Don't wait any queues to order, order instantly with <b>WAITECH</b>.</p>
                        <div class="button wow fadeInLeft" data-wow-delay=".8s">
                            <a href="javascript:void(0)" class="btn"><i class="lni lni-apple"></i> App Store</a>
                            <a href="javascript:void(0)" class="btn btn-alt"><i class="lni lni-play-store"></i> Google
                                Play</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-12">
                    <div class="hero-image wow fadeInRight" data-wow-delay=".4s">
                        <img src="{{ asset('app/assets/frontend/images/hero/phone.png') }}" alt="#">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Area -->

    <!-- Start Features Area -->
    <section id="features" class="features section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h3 class="wow zoomIn" data-wow-delay=".2s">Features</h3>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">Your Ordering Experience Gets Faster And Better Over Time.
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Feature -->
                    <div class="single-feature wow fadeInUp" data-wow-delay=".2s">
                        <i class="lni lni-timer"></i>
                        <h3>Save Your Time</h3>
                        <p>Allows you to order quickly with your phone instead of waiting in long queues to order<br><br></p>
                    </div>
                    <!-- End Single Feature -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Feature -->
                    <div class="single-feature wow fadeInUp" data-wow-delay=".4s">
                        <i class="lni lni-lock"></i>
                        <h3>QR Scanner</h3>
                        <p>Quickly access the restaurant's menu by scanning the qr code at your table and place an order<br><br></p>
                    </div>
                    <!-- End Single Feature -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Feature -->
                    <div class="single-feature wow fadeInUp" data-wow-delay=".6s">
                        <i class="lni lni-restaurant"></i>
                        <h3>Use It Everywhere</h3>
                        <p>Order in hundreds of cafes and restaurants with Waitech<br><br><br></p>
                    </div>
                    <!-- End Single Feature -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Feature -->
                    <div class="single-feature wow fadeInUp" data-wow-delay=".2s">
                        <i class="lni lni-shield"></i>
                        <h3>Secure Payment</h3>
                        <p>Complete the payment of your order online safely with your credit card with 3D secure transaction</p>
                    </div>
                    <!-- End Single Feature -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Features Area -->

    <section id="overview" class="app-info section">
        <div class="container">
            <div class="info-one">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 col-12">

                        <div class="info-text wow fadeInLeft" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
                            <div class="main-icon">
                                <i class="lni lni-inbox"></i>
                            </div>
                            <h2>Scan the QR Code and place your order</h2>
                            <p>View the restaurant's menu by scanning the QR code on the table <br> you are sitting at, make your selections, order and pay instantly.</p>
                        </div>

                    </div>
                    <div class="col-lg-6 col-md-12 col-12">
                        <div class="info-image wow fadeInRight" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInRight;">
                            <img class="ss1" src="{{ asset('app/assets/frontend/images/app-ss/app-ss1.png'); }}" alt="#">
                        </div>
                    </div>
                </div>
            </div>
            <div class="info-one style2">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 col-12">
                        <div class="info-image wow fadeInLeft" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
                            <img class="ss1" src="{{ asset('app/assets/frontend/images/app-ss/app-ss2.png'); }}" alt="#">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-12">

                        <div class="info-text wow fadeInRight" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInRight;">
                            <div class="main-icon">
                                <i class="lni lni-layout"></i>
                            </div>
                            <h2>At Your Service In Many Places</h2>
                            <p> We work with many cafes and restaurants. After signing up to our application once, <br>
                                you can use it in your 
                                favourite cafe and save your time by not waiting any ordering queues.
                                </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Start Achievement Area -->
    <section class="our-achievement section">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-md-12 col-12">
                    <div class="title">
                        <h2>Used by hundreds of restaurants and cafes from over 10 countries</h2>
                        <p>Quick order with <b>QR</b> in hundreds of different restaurants and cafes.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="single-achievement wow fadeInUp" data-wow-delay=".2s">
                                <h3 class="counter"><span id="secondo1" class="countup" cup-end="100">100</span>%</h3>
                                <p>satisfaction</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="single-achievement wow fadeInUp" data-wow-delay=".4s">
                                <h3 class="counter"><span id="secondo2" class="countup" cup-end="120">120</span>K</h3>
                                <p>Happy Users</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="single-achievement wow fadeInUp" data-wow-delay=".6s">
                                <h3 class="counter"><span id="secondo3" class="countup" cup-end="125">125</span>k+</h3>
                                <p>Downloads</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Achievement Area -->

    <!-- Start Team Table Area -->
    <section id="team" class="team section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h3 class="wow zoomIn" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: zoomIn;">Team</h3>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">Meat our team</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="offset-1 col-lg-2 col-md-6 col-12">

                    <div class="single-team wow fadeInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <div class="image">
                            <img src="{{ asset('app/assets/frontend/images/team/mete.jpg'); }}" alt="#">
                        </div>
                        <div class="content">
                            <div class="row align-items-center">
                                <div class="col-lg-10 col-12">
                                    <div class="text">
                                        <h3><a href="javascript:void(0)">Metehan Gürgentepe</a></h3>
                                        <h5>Frontend Developer</h5>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-12">
                                    <ul class="social">
                                        <li><a href="https://www.linkedin.com/in/metehan-gurgentepe-761170232/"><i class="lni lni-linkedin-original"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-2 col-md-6 col-12">

                    <div class="single-team wow fadeInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <div class="image">
                            <img src="{{ asset('app/assets/frontend/images/team/mami.jpeg'); }}" alt="#">
                        </div>
                        <div class="content">
                            <div class="row align-items-center">
                                <div class="col-lg-10 col-12">
                                    <div class="text">
                                        <h3><a href="javascript:void(0)">Muhammet Vural</a></h3>
                                        <h5>Mobile Developer</h5>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-12">
                                    <ul class="social">
                                        <li><a href="https://www.linkedin.com/in/muhammet-vural-8737b686/"><i class="lni lni-linkedin-original"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="col-lg-2 col-md-6 col-12">

                    <div class="single-team wow fadeInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <div class="image">
                            <img src="{{ asset('app/assets/frontend/images/team/enes.jpeg'); }}" alt="#">
                        </div>
                        <div class="content">
                            <div class="row align-items-center">
                                <div class="col-lg-10 col-12">
                                    <div class="text">
                                        <h3><a href="javascript:void(0)">Enes Bilgin<br><br></a></h3>
                                        <h5>Backend Developer</h5>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-12">
                                    <ul class="social">
                                        <li><a href="https://www.linkedin.com/in/enes-bilgin-64327b232/"><i class="lni lni-linkedin-original"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="col-lg-2 col-md-6 col-12">

                    <div class="single-team wow fadeInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <div class="image">
                            <img src="{{ asset('app/assets/frontend/images/team/eto.png'); }}" alt="#">
                        </div>
                        <div class="content">
                            <div class="row align-items-center">
                                <div class="col-lg-10 col-12">
                                    <div class="text">
                                        <h3><a href="javascript:void(0)">Ethem Kağan Sungur</a></h3>
                                        <h5>Frontend Developer</h5>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-12">
                                    <ul class="social">
                                        <li><a href="https://www.linkedin.com/in/ethem-ka%C4%9Fan-sungur-847336155/"><i class="lni lni-linkedin-original"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>



                <div class="col-lg-2 col-md-6 col-12">

                    <div class="single-team wow fadeInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <div class="image">
                            <img src="{{asset('app/assets/frontend/images/team/burak.jpeg');}}" alt="#">
                        </div>
                        <div class="content">
                            <div class="row align-items-center">
                                <div class="col-lg-10 col-12">
                                    <div class="text">
                                        <h3><a href="javascript:void(0)">Burak Erşen<br><br></a></h3>
                                        <h5>Backend Developer</h5>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-12">
                                    <ul class="social">
                                        <li><a href="https://www.linkedin.com/in/burak-er%C5%9Fen-854994218/"><i class="lni lni-linkedin-original"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!--/ End Team Table Area -->

    <!-- Start Call To Action Area -->
    <section class="section call-action">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                    <div class="cta-content">
                        <h2 class="wow fadeInUp" data-wow-delay=".2s">Download <b>Waitech</b> for free and start using now
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay=".4s">Download and start using from App Store or PlayStore</p>
                        <div class="button wow fadeInUp" data-wow-delay=".6s">
                            <a href="javascript:void(0)" class="btn">Download Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Call To Action Area -->

    <!-- Start Footer Area -->
    <footer class="footer">
        <!-- Start Footer Top -->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12 offset-md-4 text-center">
                        <!-- Single Widget -->
                        <div class="single-footer f-about">
                            <div class="logo">
                                <a href="index.html">
                                    <h1 style="font-size: 35px; color: #D2D6DC">Waitech</h1>
                                </a>
                            </div>
                            <p>Don't wait any queues to order, order instantly with WAITECH.</p>
                            <ul class="social">
                                <li><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-instagram"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a></li>
                            </ul>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Footer Top -->
    </footer>
    <!--/ End Footer Area -->

    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top">
        <i class="lni lni-chevron-up"></i>
    </a>

    <!-- ========================= JS here ========================= -->
    <script type="text/javascript" src="{{URL::asset('app/assets/frontend/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('app/assets/frontend/js/count-up.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('app/assets/frontend/js/glightbox.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('app/assets/frontend/js/main.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('app/assets/frontend/js/tiny-slider.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('app/assets/frontend/js/wow.min.js') }}"></script>


        //====== counter up 
        var cu = new counterUp({
            start: 0,
            duration: 2000,
            intvalues: true,
            interval: 100,
            append: " ",
        });
        cu.start();
    </script>
</body>

</html>