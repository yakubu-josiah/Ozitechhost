@extends('Layout.layout')
@section('title', 'HomePage')


@section('content')
    <h1>Hello!</h1>
        <!--Preload Start-->
        <!-- <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                </div>
            </div>
        </div> -->
        <!--Preload End-->
    
        <!--Full width header Start-->
        <section class="full-width-header">
            <!-- Toolbar Start -->
            <div class="toolbar-area hidden-sm hidden-xs">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-sm-7 col-xs-12">
                            <div class="toolbar-contact">
                                <ul class="top-menu">
                                    <li><i class="fa fa-phone"></i><a href="tel:+2349071555545">+23490 715 55545</a></li>
                                    <li><i class="fa fa-envelope-o"></i><a href="https://www.ozitechhost.com/submitticket.php">Support</a></li>
                                    <!-- <li><a href="#">Eng<i class="fa fa-angle-down"></i></a>
                                        <ul>
                                            <li><a href="#">USA</a></li>
                                            <li><a href="#">Japan</a></li>
                                            <li><a href="#">India</a></li>
                                        </ul>
                                    </li> -->
                                </ul>
                            </div>
                            <!-- // .toolbar-contact -->
                        </div>
                        <div class="col-lg-6 col-sm-5 col-xs-12">
                            <div class="toolbar-sl-share">
                                <ul>
                                    <!-- <li><a href="#"><i class="fa fa-commenting"></i>Live Chat</a></li> -->
                                    <li><a href="https://www.ozitechhost.com/register.php">Affiliates</a></li>
                                    <li><a href="https://www.ozitechhost.com/clientarea.php">Client Area</a></li>
                                </ul>
                            </div>
                            <!-- // .toolbar-sl-share -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Toolbar End -->
    
            <!--Header Start-->
            <header id="rs-header" class="rs-header">
                <!-- Menu Start -->
                <div class="menu-area menu-sticky">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-12">
                                <div class="logo-area defult-logo">
                                    <!-- <a href="/"><img src="images/logo-white.png" alt="logo"></a> -->
                                    <a href="/"><img src="images/logo.fw.png" alt="logo"></a>
                                </div>
                                <div class="logo-area sticky-logo">
                                    <!-- <a href="/"><img src="images/logo-dark.png" alt="logo"></a> -->
                                    <a href="/"><img src="images/logo.fw.png" alt="logo"></a>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-12">
                                <div class="main-menu">
                                    <a class="rs-menu-toggle"><i class="fa fa-bars"></i>Menu</a>
                                    <nav class="rs-menu">
                                        <ul class="nav-menu">
                                            <!-- Home -->
                                            <li class="current-menu-item current_page_item"> <a href="/" class="home active-icon">Home</a>
                                            </li>
                                            <!-- End Home -->
    
                                            <!--Hosting Mega Menu Start -->
                                            <li class=" hosting-menu menu-item-has-children"> <a href="#">Hosting</a>
                                                <ul class="sub-menu">
                                                    <li><a href="web-hosting.php"><i class="flaticon-server"></i> Shared Hosting</a> </li>
                                                    <li><a href="reseller-hosting.php"><i class="flaticon-support"></i> Reseller Hosting</a> </li>
                                                    <!-- <li><a href="ssd-vps.php"><i class="flaticon-virus"></i> Managed SSD VPS Hosting</a></li> -->
                                                </ul>
                                            </li>
                                            <!--Hosting Mega Menu End -->
    
                                            <!--Domains Menu Start-->
                                            <li class=""> <a href="https://www.ozitechhost.com/cart.php?a=add&domain=register">Domains</a></li>
                                            <!-- <li class="menu-item-has-children"> <a href="domains.php">Domains</a></li> -->
                                            <!--Domains Menu End-->
    
                                            <li class=""> <a href="https://www.ozitechhost.com/cart.php?gid=6">SSL Certificates</a></li>
    
                                            <li class=""> <a href="https://www.ozitechhost.com/cart.php?gid=10">SiteLock</a></li>
    
                                            <li class=""> <a href="https://www.creativeweb.com.ng">Web Design</a></li>
    
                                        </ul>
                                        <!-- //.nav-menu -->
                                    </nav>
                                </div>
                                <!-- //.main-menu -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Menu End -->
            </header>
            <!--Header End-->
        </section>
        <!--Full width header End--><style type="text/css">
        .slider-text {
            background: rgba(0, 0, 0, 0.3);
            padding: 20% 30px 10% !important;
        }
    
        .sl-title {
            color: #FFF !important;
            font-size: 45px !important;
            font-weight: bold !important;
        }
    </style>
    
    <!--Slider Section Start-->
    <section id="rs-hostlab-slider" class="rs-hostlab-slider desktop">
        <div class="overlay-D"></div>
        <div class="slider-carousel owl-carousel">
            <div class="single-slider slider-one">
                <div class="content-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="slider-text wow fadeInRight">
                                    <h1 class="sl-title">
                                        Fully Managed Hosting Server
                                    </h1>
                                    <!-- <h3 class="sl-price">Starting at <span>₦3,500</span> year*</h3> -->
                                    <h3 class="sl-subtitle">Our tech experts work hard to give you the best hosting services</h3>
    
                                    <ul class="bulet">
                                        <li><img src="images/bnr-ftr-tick.webp"> Fast & Reliable Hosting</li>
                                        <li><img src="images/bnr-ftr-tick.webp">SSD Storage </li>
                                        <li><img src="images/bnr-ftr-tick.webp">99.9% Uptime Commitment</li>
                                        <li><img src="images/bnr-ftr-tick.webp">1-click Installer (wordpres, joomla, etc)</li>
                                        <li><img src="images/bnr-ftr-tick.webp">Boost SEO &amp; Conversion Rates</li>
                                        <li><img src="images/bnr-ftr-tick.webp">NEW AMD Epyc Server Option</li>
                                        <li><img src="images/bnr-ftr-tick.webp">24/7/365 Technical Support</li>
                                        <li><img src="images/bnr-ftr-tick.webp">Fully Managed Server</li>
                                    </ul>
                                    <ul>
                                        <li><a href="/web-hosting" class="slider-btn">Get Started Now</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //.single-slider -->
            <div class="single-slider slider-two">
                <div class="content-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="slider-text wow fadeInRight">
                                    <h1 class="sl-title">
                                        High Speed Web Hosting Services
                                    </h1>
                                    <h3 class="sl-subtitle">Boost Your SEO & Conversion Rate!</h3>
    
                                    <ul class="bulet">
                                        <li><img src="images/bnr-ftr-tick.webp"> Fast & Reliable Hosting</li>
                                        <li><img src="images/bnr-ftr-tick.webp">SSD Storage </li>
                                        <li><img src="images/bnr-ftr-tick.webp">99.9% Uptime Commitment</li>
                                        <li><img src="images/bnr-ftr-tick.webp">1-click Installer (wordpres, joomla, etc)</li>
                                        <li><img src="images/bnr-ftr-tick.webp">Boost SEO &amp; Conversion Rates</li>
                                        <li><img src="images/bnr-ftr-tick.webp">NEW AMD Epyc Server Option</li>
                                        <li><img src="images/bnr-ftr-tick.webp">24/7/365 Technical Support</li>
                                        <li><img src="images/bnr-ftr-tick.webp">Fully Managed Server</li>
                                    </ul>
                                    <ul>
                                        <li><a href="/web-hosting" class="slider-btn">Get Started Now</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //.single-slider -->
        </div>
        <!-- //.slider-carousel -->
    </section>
    <!--Slider Section End-->
    
    <section class="forMobile">
        <div class="text-content">
        <h1 class="mobile-title text-center">
            Fully Managed Hosting Server
        </h1>
    
        <p>Boost Your SEO &amp; Conversion Rate!</p>
        </div>
    
    </section>
    
    <!-- Hosting Platforms Start -->
    <section id="rs-host-platform" class="rs-host-platform sec-spacer wow fadeIn">
        <div class="container">
            <div class="section-title text-center">
                <h2>The Fastest Hosting To Help You Succeed!</h2>
                <p>Ozitechhost, we are known and trusted since 2012 for outstanding, fully managed web hosting services. Expanding each year we now offer Shared, Reseller and VPS hosting to suit any budget – all with proven best uptime on the planet!</p>
            </div>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#one">Shared Hosting</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#two">Reseller Hosting</a>
                </li>
                <!-- <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#three">Managed SSD VPS Hosting</a>
                    </li> -->
                <!-- <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#four">Dos OS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#five">unix OS</a>
                    </li> -->
            </ul>
    
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="one">
                    <div class="row margin-0">
                        <div class="col-md-3 column-space">
                            <div class="col-content">
                                <div class="col-title">
                                    <h3>Bronze</h3>
                                </div>
                                <div class="col-inner">
                                    <ul>
                                        <li>
                                            ₦500 <sub>/month</sub>
                                            <span class="from">₦5,000 <sub>/ year</sub></span>
                                        </li>
                                        <li>
                                            <span class="up-line">storage</span>
                                            <h5><b>1 GB SSD</b></h5>
                                        </li>
                                        <li>
                                            <span class="up-line">Bandwidth</span>
                                            <h5><b>10 GB</b></h5>
                                        </li>
                                        <li>
                                            <span class="up-line">SSL Certificate</span>
                                            <h5><b>Free</b></h5>
                                        </li>
                                        <li>
                                            <span class="up-line">Domain Registration</span>
                                            <h5><b>Free </b>.com.ng</h5>
                                        </li>
    
                                        <li>
                                            <a class="select-btn" href="https://www.ozitechhost.com/cart.php?a=add&pid=1">Order Now</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-md-3 column-space">
                            <div class="col-content">
                                <div class="col-title">
                                    <h3>Silver</h3>
                                </div>
                                <div class="col-inner">
                                    <ul>
                                        <li>
                                            ₦700 <sub>/month</sub>
                                            <span class="from">₦7,300 <sub>/ year</sub></span>
                                        </li>
                                        <li>
                                            <span class="up-line">storage</span>
                                            <h5><b>5 GB SSD</b></h5>
                                        </li>
                                        <li>
                                            <span class="up-line">Bandwidth</span>
                                            <h5><b>50 GB</b></h5>
                                        </li>
                                        <li>
                                            <span class="up-line">SSL Certificate</span>
                                            <h5><b>Free</b></h5>
                                        </li>
                                        <li>
                                            <span class="up-line">Domain Registration</span>
                                            <h5><b>Free </b>.com.ng</h5>
                                        </li>
                                        <li>
                                            <a class="select-btn" href="https://www.ozitechhost.com/cart.php?a=add&pid=2">OrderNow</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-md-3 column-space">
                            <div class="col-content">
                                <div class="col-title">
                                    <h3>Gold</h3>
                                </div>
                                <div class="col-inner">
                                    <ul>
                                        <li>
                                            ₦1,500 <sub>/month</sub>
                                            <span class="from">₦16,000 <sub>/ year</sub></span>
                                        </li>
                                        <li>
                                            <span class="up-line">storage</span>
                                            <h5><b>10 GB SSD</b></h5>
                                        </li>
                                        <li>
                                            <span class="up-line">Bandwidth</span>
                                            <h5><b>100 GB</b></h5>
                                        </li>
                                        <li>
                                            <span class="up-line">SSL Certificate</span>
                                            <h5><b>Free</b></h5>
                                        </li>
                                        <li>
                                            <span class="up-line">Domain Registration</span>
                                            <h5><b>Free</b> .com & more</h5>
                                        </li>
                                        <li>
                                            <a class="select-btn" href="https://www.ozitechhost.com/cart.php?a=add&pid=3">Order Now</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-md-3 column-space">
                            <div class="col-content">
                                <div class="col-title">
                                    <h3>Diamond</h3>
                                </div>
                                <div class="col-inner">
                                    <ul>
                                        <li>
                                            ₦2,500 <sub>/month</sub>
                                            <span class="from">₦27,000 <sub>/ year</sub></span>
                                        </li>
                                        <li>
                                            <span class="up-line">storage</span>
                                            <h5><b>20 GB SSD</b></h5>
                                        </li>
                                        <li>
                                            <span class="up-line">Bandwidth</span>
                                            <h5><b>Unlimited</b></h5>
                                        </li>
                                        <li>
                                            <span class="up-line">SSL Certificate</span>
                                            <h5>Free</h5>
                                        </li>
                                        <li>
                                            <span class="up-line">Domain Registration</span>
                                            <h5><b>Free</b> .com & more</h5>
                                        </li>
                                        <li>
                                            <a class="select-btn" href="https://www.ozitechhost.com/cart.php?a=add&pid=4">OrderNow</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="tab-pane fade" id="two">
                    <div class="row">
                        <div class="col-md-3 column-space">
                            <div class="col-content">
                                <div class="col-title">
                                    <h3>Bronze</h3>
                                </div>
                                <div class="col-inner">
                                    <ul>
                                        <li>
                                            ₦2,500 <sub>/month</sub>
                                            <span class="from">₦27,000 <sub>/ year</sub></span>
                                        </li>
                                        <li>
                                            <span class="up-line">RAID-10 SSD Storage</span>
                                            <h5><b>15 GB SSD</b></h5>
                                        </li>
                                        <li>
                                            <span class="up-line">Bandwidth</span>
                                            <h5><b>150 GB</b></h5>
                                        </li>
                                        <li>
                                            <span class="up-line">domain registration</span>
                                            <h5><b>Free</b></h5>
                                        </li>
                                        <li>
                                            <span class="up-line">SSL Certificate</span>
                                            <h5><b>Free</b></h5>
                                        </li>
                                        <li>
                                            <span class="up-line">cPanel WHM</span>
                                            <h5>Included</h5>
                                        </li>
                                        <li>
                                            <a class="select-btn" href="https://www.ozitechhost.com/cart.php?a=add&pid=5">Order Now</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-md-3 column-space">
                            <div class="col-content">
                                <div class="col-title">
                                    <h3>Silver</h3>
                                </div>
                                <div class="col-inner">
                                    <ul>
                                        <li>
                                            ₦3,500 <sub>/month</sub>
                                            <span class="from">₦37,800 <sub>/ year</sub></span>
                                        </li>
                                        <li>
                                            <span class="up-line">RAID-10 SSD Storage</span>
                                            <h5><b>25 GB SSD</b></h5>
                                        </li>
                                        <li>
                                            <span class="up-line">Bandwidth</span>
                                            <h5><b>250 GB</b></h5>
                                        </li>
                                        <li>
                                            <span class="up-line">domain registration</span>
                                            <h5><b>Free</b></h5>
                                        </li>
                                        <li>
                                            <span class="up-line">SSL Certificate</span>
                                            <h5><b>Free</b></h5>
                                        </li>
                                        <li>
                                            <span class="up-line">cPanel WHM</span>
                                            <h5>Included</h5>
                                        </li>
                                        <li>
                                            <a class="select-btn" href="https://www.ozitechhost.com/cart.php?a=add&pid=6">Order Now</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-md-3 column-space">
                            <div class="col-content">
                                <div class="col-title">
                                    <h3>Gold</h3>
                                </div>
                                <div class="col-inner">
                                    <ul>
                                        <li>
                                            ₦5,000 <sub>/month</sub>
                                            <span class="from">₦54,000 <sub>/ year</sub></span>
                                        </li>
                                        <li>
                                            <span class="up-line">RAID-10 SSD Storage</span>
                                            <h5><b>40 GB SSD</b></h5>
                                        </li>
                                        <li>
                                            <span class="up-line">Bandwidth</span>
                                            <h5><b>400 GB</b></h5>
                                        </li>
                                        <li>
                                            <span class="up-line">domain registration</span>
                                            <h5><b>Free</b></h5>
                                        </li>
                                        <li>
                                            <span class="up-line">SSL Certificate</span>
                                            <h5><b>Free</b></h5>
                                        </li>
                                        <li>
                                            <span class="up-line">cPanel WHM</span>
                                            <h5>Included</h5>
                                        </li>
                                        <li>
                                            <a class="select-btn" href="https://www.ozitechhost.com/cart.php?a=add&pid=7">Order Now</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-md-3 column-space">
                            <div class="col-content">
                                <div class="col-title">
                                    <h3>Diamond</h3>
                                </div>
                                <div class="col-inner">
                                    <ul>
                                        <li>
                                            ₦8,500 <sub>/month</sub>
                                            <span class="from">₦91,800 <sub>/ year</sub></span>
                                        </li>
                                        <li>
                                            <span class="up-line">RAID-10 SSD Storage</span>
                                            <h5><b>75 GB SSD</b></h5>
                                        </li>
                                        <li>
                                            <span class="up-line">Bandwidth</span>
                                            <h5><b>750 GB</b></h5>
                                        </li>
                                        <li>
                                            <span class="up-line">domain registration</span>
                                            <h5><b>Free</b></h5>
                                        </li>
                                        <li>
                                            <span class="up-line">SSL Certificate</span>
                                            <h5><b>Free</b></h5>
                                        </li>
                                        <li>
                                            <span class="up-line">cPanel WHM</span>
                                            <h5>Included</h5>
                                        </li>
                                        <li>
                                            <a class="select-btn" href="https://www.ozitechhost.com/cart.php?a=add&pid=8">Order Now</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
                <!-- <div class="tab-pane fade" id="three">
                        <div class="row">
                            <div class="col-md-3 column-space">
                                <div class="col-content">
                                    <div class="col-title">
                                        <h3>ssd vps-1</h3>
                                    </div>
                                    <div class="col-inner">
                                        <ul>
                                            <li>
                                                <span class="from">From</span> ₦14,000/<sub>yr</sub>
                                            </li>
                                            <li>
                                                <span class="up-line">8+ CPU Cores</span>
                                                <h5>Equal Share </h5>
                                            </li>
                                            <li>
                                                <span class="up-line">Guaranteed RAM</span>
                                                <h5>1.25 GB</h5>
                                            </li>
                                            <li>
                                                <span class="up-line">RAID-10 SSD Storage</span>
                                                <h5>20 GB</h5>
                                            </li>
                                            <li>
                                                <span class="up-line">Premium Bandwidth</span>
                                                <h5>4000 GB</h5>
                                            </li>
                                            <li>
                                                <a class="select-btn" href="https://www.ozitechhost.com/cart.php?a=add&pid=9">Select</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
    
                            <div class="col-md-3 column-space">
                                <div class="col-content">
                                    <div class="col-title">
                                        <h3>SSD VPS-2</h3>
                                    </div>
                                    <div class="col-inner">
                                        <ul>
                                            <li>
                                                <span class="from">From</span> ₦19,500/<sub>yr</sub>
                                            </li>
                                            <li>
                                                <span class="up-line">24+ CPU Cores</span>
                                                <h5>Equal Share </h5>
                                            </li>
                                            <li>
                                                <span class="up-line">Guaranteed RAM</span>
                                                <h5>1.75 GB</h5>
                                            </li>
                                            <li>
                                                <span class="up-line">RAID-10 SSD Storage</span>
                                                <h5>30 GB</h5>
                                            </li>
                                            <li>
                                                <span class="up-line">Premium Bandwidth</span>
                                                <h5>5000 GB</h5>
                                            </li>
                                            <li>
                                                <a class="select-btn" href="https://www.ozitechhost.com/cart.php?a=add&pid=10">Select</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
    
                            <div class="col-md-3 column-space">
                                <div class="col-content">
                                    <div class="col-title">
                                        <h3>SSD VPS-3</h3>
                                    </div>
                                    <div class="col-inner">
                                        <ul>
                                            <li>
                                                <span class="from">From</span> ₦27,500/<sub>yr</sub>
                                            </li>
                                            <li>
                                                <span class="up-line">24+ CPU Cores</span>
                                                <h5>Equal Share </h5>
                                            </li>
                                            <li>
                                                <span class="up-line">Guaranteed RAM</span>
                                                <h5>3 GB</h5>
                                            </li>
                                            <li>
                                                <span class="up-line">RAID-10 SSD Storage</span>
                                                <h5>55 GB</h5>
                                            </li>
                                            <li>
                                                <span class="up-line">Premium Bandwidth</span>
                                                <h5>6000 GB</h5>
                                            </li>
                                            <li>
                                                <a class="select-btn" href="https://www.ozitechhost.com/cart.php?a=add&pid=11">Select</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
    
                            <div class="col-md-3 column-space">
                                <div class="col-content">
                                    <div class="col-title">
                                        <h3>SSD VPS-4</h3>
                                    </div>
                                    <div class="col-inner">
                                        <ul>
                                            <li>
                                                <span class="from">From</span> ₦34,500/<sub>yr</sub>
                                            </li>
                                            <li>
                                                <span class="up-line">24+ CPU Cores</span>
                                                <h5>Equal Share </h5>
                                            </li>
                                            <li>
                                                <span class="up-line">Guaranteed RAM</span>
                                                <h5>4.5 GB</h5>
                                            </li>
                                            <li>
                                                <span class="up-line">RAID-10 SSD Storage</span>
                                                <h5>75 GB</h5>
                                            </li>
                                            <li>
                                                <span class="up-line">Premium Bandwidth</span>
                                                <h5>9000 GB</h5>
                                            </li>
                                            <li>
                                                <a class="select-btn" href="https://www.ozitechhost.com/cart.php?a=add&pid=12">Select</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
            </div>
        </div>
    </section>
    <!-- Hosting Platforms End -->
    
    <!--Testimonial Section Start-->
    <section id="rs-hostlab-testimonial" class="rs-hostlab-testimonial sec-spacer section-bg wow fadeIn">
        <div class="container">
            <div class="section-title text-center mb-50">
                <h2>What Our Customer Says</h2>
            </div>
            <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-autoplay-timeout="8000" data-smart-speed="2000" data-dots="true" data-nav="false" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="true" data-ipad-device="1" data-ipad-device-nav="false" data-ipad-device-dots="true" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="true" data-md-device="2" data-md-device-nav="false" data-md-device-dots="true">
                <div class="testimonial-4">
                    <div class="testimonial-list">
                        <!-- div class="testimonial-img">
                                <img src="images/testimonial/2.jpg" alt="">
                            </div> -->
                        <div class="testimonial-content">
                            <h3 class="testimonial-title">Ugo Ez.</h3>
                            <!-- <span class="cl-client-designation">Web Developer</span> -->
                            <div class="client-rating">
                                <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <div class="description">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                                <p>Ozitechhost's customer service and tech support did an outstanding job addressing our service request promptly and successfully and were thorough in communicating to us throughout the process. We highly recommend them for hosting services.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- //.rs-single-testimonial -->
                <div class="testimonial-4">
                    <div class="testimonial-list">
                        <!-- <div class="testimonial-img">
                                <img src="images/testimonial/3.jpg" alt="">
                            </div> -->
                        <div class="testimonial-content">
                            <h3 class="testimonial-title">Mustapha E.</h3>
                            <!-- <span class="cl-client-designation">Web Developer</span> -->
                            <div class="client-rating">
                                <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <div class="description">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                                <p>Ozitechhost SUPPORT deserves 5 stars, because since 4 days i was wandering due to lack of knowledge and as soon as i wrote to Ozitechhost SUPPORT team, they resolved my queries within 60 to 90 minutes turnaround time, which is marvelous. When it's 00:00 hrs and you find every nearest friend, guide n help is sleeping or unavailable or you find it..</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- //.rs-single-testimonial -->
                <div class="testimonial-4">
                    <div class="testimonial-list">
                        <!-- <div class="testimonial-img">
                                <img src="images/testimonial/4.jpg" alt="">
                            </div> -->
                        <div class="testimonial-content">
                            <h3 class="testimonial-title">Thomas E.</h3>
                            <!-- <span class="cl-client-designation">Manager</span> -->
                            <div class="client-rating">
                                <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <div class="description">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                                <p>I have only been with Ozitechhost for a few months, but I have already seen how much they care for their customers, and work hard to keep them happy. I really like the thousands of apps that have been made available for use. Really beats trying to build a website with Dreamweaver, which is what I used for many years</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- //.rs-single-testimonial -->
                <div class="testimonial-4">
                    <div class="testimonial-list">
                        <!-- <div class="testimonial-img">
                                <img src="images/testimonial/5.jpg" alt="">
                            </div> -->
                        <div class="testimonial-content">
                            <h3 class="testimonial-title">Tunde F.</h3>
                            <!-- <span class="cl-client-designation">Web Developer</span> -->
                            <div class="client-rating">
                                <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <div class="description">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                                <p>People at Ozitech Host are very kind and friendly. They work hard to solve our problems. They are very prompt. We can rely on them.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- //.rs-single-testimonial -->
            </div>
            <!-- //.rs-carousel -->
        </div>
    </section>
    <!--Testimonial Section End-->
    
    <!-- Footer Partner Slider Start -->
    <section id="rs-hostlab-defult-partner" class="rs-hostlab-defult-partner sec-spacer6">
        <div class="container">
            <div class="rs-carousel owl-carousel" data-loop="true" data-items="5" data-margin="30" data-autoplay="true" data-autoplay-timeout="8000" data-smart-speed="2000" data-dots="false" data-nav="false" data-nav-speed="false" data-mobile-device="2" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="3" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="5" data-md-device-nav="false" data-md-device-dots="false">
                <div class="partner-item">
                    <a href="#"><img src="images/partner/bedrockgroup.jpg" alt="Partner Image"></a>
                </div>
                <div class="partner-item">
                    <a href="#"><img src="images/partner/oziconnect.jpg" alt="Partner Image"></a>
                </div>
                <div class="partner-item">
                    <a href="#"><img src="images/partner/valuebridge.jpg" alt="Partner Image"></a>
                </div>
                <div class="partner-item">
                    <a href="#"><img src="images/partner/mic-phitgloballtd.jpg" alt="Partner Image"></a>
                </div>
                <div class="partner-item">
                    <a href="#"><img src="images/partner/all4kids.jpg" alt="Partner Image"></a>
                </div>
                <div class="partner-item">
                    <a href="#"><img src="images/partner/trackheroes.jpg" alt="Partner Image"></a>
                </div>
                <div class="partner-item">
                    <a href="#"><img src="images/partner/roskastevens.jpg" alt="Partner Image"></a>
                </div>
            </div>
            <!-- //.rs-carousel -->
        </div>
    </section>
    <!-- Footer Partner Slider End -->
    
    <!-- Footer Client Start -->
    <section id="client-footer" class="client-footer">
        <!-- Footer Client Contact Start -->
        <div id="client-contact-services" class="client-contact-services">
            <div class="container">
                <div class="client-contact primary-bg">
                    <div class="row margin-0">
                        <div class="col-lg-4 col-md-12 text-center client-border wow fadeInLeft">
                            <div class="client-service">
                                <div class="service-icon">
                                    <i class="fa fa-envelope-o"></i>
                                </div>
                                <div class="text-part">
                                    <h3><a href="#">Email</a></h3>
                                    <h5><a href="mailto:support@ozitechhost.com">support@ozitechhost.com</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 text-center client-border wow fadeIn">
                            <div class="client-service">
                                <div class="service-icon">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <div class="text-part">
                                    <h3><a href="#">Office Location</a></h3>
                                    <h5>12, Olawaiye Street Anifowoshe, Ikeja, Lagos, Nigeria</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 text-center">
                            <div class="client-service no-border wow fadeInRight">
                                <div class="service-icon">
                                    <i class="fa fa-volume-control-phone"></i>
                                </div>
                                <div class="text-part">
                                    <h3><a href="#">Phone</a></h3>
                                    <h5><a href="tel:+234-9071555545">+234-9071555545</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Client Contact End -->
    
        <!-- Footer Start -->
        <footer id="rs-hostlab-footer" class="rs-hostlab-footer primary-bg">
            <div class="container">
                <!-- Footer Menu Start -->
                <div class="footer-content">
                    <!-- <div class="row">
                            <div class="col-lg-4">
                                <div class="footer-menu">
                                    <h4 class="title">Get to Know Us</h4>
                                    <ul>
                                        <li><a href="https://www.ozitechhost.com/vacancies/">Vacancies</a></li>
                                        <li><a href="https://www.ozitechhost.com/#">Partners</a></li>
                                        <li><a href="https://www.ozitechhost.com/testimonies/">Testimonies</a></li>
                                        <li><a href="https://www.ozitechhost.com/payment/">Payment Info</a></li>
                                        <li><a href="https://www.ozitechhost.com/terms/">Terms & Condition</a></li>
                                        <li><a href="https://www.ozitechhost.com/privacy/">Privacy Policy</a></li>
                                        <li><a href="https://www.ozitechhost.com/blog/">Company Blog</a></li>
                                    </ul>
                                </div>
                            </div>
    
                            <div class="col-lg-4">
                                <div class="footer-menu">
                                    <h4 class="title">Services</h4>
                                    <ul>
                                        <li><a href="https://www.ozitechhost.com/web-hosting/">Web Hosting</a></li>
                                        <li><a href="https://www.ozitechhost.com/reseller-hosting/">Reseller Hosting</a></li>
                                        <li><a href="https://www.ozitechhost.com/vps-hosting/">Fully Managed VPS</a></li>
                                        <li><a href="#">SSL Certificates</a></li>
                                        <li><a href="https://www.ozitechhost.com/domainchecker.php">Domains Registration</a></li>
                                        <li><a href="https://www.ozitechhost.com/register.php">Affiliates</a></li>
                                    </ul>
                                </div>
                            </div>
    
                            <div class="col-lg-4">
                                <div class="footer-menu">
                                    <h4 class="title">Design & Development</h4>
                                    <ul>
                                        <li><a href="https://www.creativeweb.com.ng">Web Design</a></li>
                                        <li><a href="https://www.ozitechhost.com/web-development/">Web Development</a></li>
                                        <li><a href="https://www.ozitechhost.com/application-development/">Application Development</a></li>
                                        <li><a href="https://www.ozitechhost.com/seo/">Search Engine Optimization</a></li>
                                        <li><a href="https://www.ozitechhost.com/hire-us/">Hire PHP Developer</a></li>
                                        <li><a href="https://www.ozitechhost.com/hire-us/">Hire C++/Java Developer</a></li>
                                        <li><a href="https://www.ozitechhost.com/hire-us/">Hire HTML5 & CSS3 - Responsive Designer</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div> -->
                </div>
            </div>
            <!-- Footer Menu End -->
    
            <!-- CopyRight Start -->
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="copy-text">
                                &copy; 2022 <span>Ozitechhost.com Web Hosting.</span> All Rights Reserved.
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="social-links">
                                <ul>
                                    <li><a href="https://twitter.com/ozitechhost"><i class="fa fa-twitter"></i></a></li>
    
                                    <li><a href="https://youtube.com/user/OzitechHost"><i class="fa fa-youtube-play"></i></a></li>
    
                                    <li><a href="https://facebook.com/ozitechhost"><i class="fa fa-facebook"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- CopyRight End -->
        </footer>
        <!-- Footer End -->
    </section>
    <!-- Footer Client End -->
    
    <!-- Scrool to Top Start -->
    <div id="scrollUp">
        <i class="fa fa-angle-up"></i>
    </div>
@endsection