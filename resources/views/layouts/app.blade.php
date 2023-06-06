<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="keywords" content="Tracking & Monitoring by ServeTech Pro, Advanced Machinery Telematics, Authorised repair and maintenance center by Technoton JV, The Best Solution for all Industrial & Factory Businesses" />
    <meta name="description" content="Tracking & Monitoring by ServeTech Pro - Advanced Machinery Telematics, Authorised repair and maintenance center by Technoton JV" />
    <meta name="author" content="http://servetechpro.com/" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tracking & Monitoring by ServeTech Pro</title>

    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="mask-icon" href="safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#002c42">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="../css/animate.css" />
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="../css/flaticon.css" />
    <link rel="stylesheet" type="text/css" href="../css/themify-icons.css" />
    <link rel="stylesheet" type="text/css" href="../css/slick.css">
    <link rel="stylesheet" type="text/css" href="../css/prettyPhoto.css">
    <link rel="stylesheet" type="text/css" href="../css/shortcodes.css" />
    <link rel="stylesheet" type="text/css" href="../css/main.css" />
    <link rel="stylesheet" type="text/css" href="../css/megamenu.css" />
    <link rel="stylesheet" type="text/css" href="../css/responsive.css" />
</head>

<body class="ttm-one-page-site">
    <div id="ttm-home" class="ttm-one-page-site">

        @if(Session::has('msg'))
        <div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="commentLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="row p-4">
                            <p class="text-3 mb-0">Your message is well received. We will get back to you shortly.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif

        <!--page start-->
        <div class="page">
            <!--header start-->
            <header id="masthead" class="header ttm-header-style-03">
                <!-- topbar -->
                <div class="top_bar ttm-bgcolor-white clearfix">
                    <div class="container-fluid">
                        <div class="row no-gutters">
                            <div class="col-xl-12 d-flex flex-row align-items-center">
                                <div class="">
                                    <div class="top_bar_icon ttm-icon_element-fill ttm-icon_element-color-skincolor"><i class="fa fa-phone"></i></div>
                                    <a href="tel:{{ app('contact')->phone_one }}">{{ app('contact')->phone_one }}</a> | <a href="tel:{{ app('contact')->phone_two }}">{{ app('contact')->phone_two }}</a>
                                </div>
                                <div class="ml-auto p-0">
                                    <div class="top_bar_contact_item">
                                        <div class="top_bar_icon"><i class="ti ti-email"></i></div>
                                        Email:<a href="mailto:{{ app('contact')->email }}">{{ app('contact')->email }}</a>
                                    </div>
                                    <div class="top_bar_contact_item">
                                        <div class="top_bar_icon"><i class="ti ti-location-pin"></i></div>
                                    {{ app('contact')->address }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- topbar end -->
                <!-- site-header-menu -->
                <div id="site-header-menu" class="site-header-menu ttm-bgcolor-darkgrey">
                    <div class="site-header-menu-inner ttm-stickable-header">
                        <div class="container-fluid fullwide">
                            <div class="row">
                                <div class="col-lg-12">
                                    <!--site-navigation -->
                                    <div id="site-navigation" class="site-navigation d-flex flex-row align-items-center justify-content-between" data-sticky-height="60">
                                        <!-- site-branding -->
                                        <a class="home-link" href="/" title="Fablio" rel="home">
                                            <img id="logo-img" class="img-fluid auto_size float-left" src="../images/logo-light.svg" alt="logo-img" width="50" height="60">
                                            <h1 class="text-uppercase">ServeTech Pro</h1>
                                        </a>
                                        <!-- site-branding end -->
                                        <div class="d-flex flex-row m-auto">
                                            <div class="btn-show-menu-mobile menubar menubar--squeeze">
                                                <span class="menubar-box">
                                                    <span class="menubar-inner"></span>
                                                </span>
                                            </div>
                                            <!-- menu -->
                                            <nav class="main-menu menu-mobile" id="menu">
                                                <ul class="menu">
                                                    <li><a data-scroll href="#ttm-home">Home</a></li>
                                                    <li><a data-scroll href="#about">About Us</a></li>
                                                    <li><a data-scroll href="#services">Services</a></li>
                                                    <li><a data-scroll href="#portfolio">Portfolio</a></li>
                                                    <li><a data-scroll href="#contact">Contact Us</a></li>
                                                </ul>
                                            </nav>
                                            <!-- menu end -->
                                        </div>
                                        <div class="header_extra d-flex flex-row align-items-center">
                                            <a href="../assets/{{ app('contact')->brochure }}" target="_blank" class="ttm-btn ttm-btn-style-fill ttm-btn-shape-square ttm-btn-color-white">Download Brochure</a>
                                        </div>
                                    </div>
                                    <!-- site-navigation end-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- site-header-menu end-->
            </header>
            <!--header end-->

            <!-- Banner -->
            <div class="banner_slider_wrapper">
                <div class="banner_slider banner_slider_1">
                    @foreach($home_slides as $slide)
                    <div class="slide">
                        <div class="slide_img" style="background-image: url(../assets/img/homeSlider/{{$slide->image}});"></div>
                        <div class="slide__content">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="slide__content--headings">
                                            <h3 data-animation="fadeInUp" data-delay="0.2s">
                                               {{$slide->title}}
                                            </h3>
                                            <h2 data-animation="fadeInUp" data-delay="0.5s">
                                               {!!$slide->content !!}
                                            </h2>
                                            <p data-animation="fadeInUp" data-delay="0.7s" class="">
                                               {{$slide->subtitle}}

                                            </p>
                                            <div class=" slide-btn1 margin_top30 res-575-margin_top10 " data-animation="fadeInUp" data-delay="0.9s">
                                                <a class="ttm-btn ttm-btn-size-xl ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor" href="#about">{{$slide->link}}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{-- <div class="slide">
                        <div class="slide_img" style="background-image: url(../images/slides/slider-02.png);"></div>
                        <div class="slide__content">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="slide__content--headings">
                                            <h3 data-animation="fadeInUp" data-delay="0.2s">
                                                Tracking & Monitoring by ServeTech Pro
                                            </h3>
                                            <h2 data-animation="fadeInUp" data-delay="0.5s" class="">
                                                Advanced Machinery <br>Telematics
                                            </h2>
                                            <p data-animation="fadeInUp" data-delay="0.7s" class="">
                                                Authorised repair and maintenance center by Technoton JV
                                            </p>
                                            <div class=" slide-btn2 d-inline-block margin_top25 res-575-margin_top10" data-animation="fadeInUp" data-delay="0.9s">
                                                <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor" href="#about">READ MORE</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
            <!-- Banner end-->

            <!--site-main start-->
            <div class="site-main">
                <!--about-section-->
                <section id="about" class="ttm-row about-section clearfix z-index-1">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-8 col-sm-8">
                                <div class="ttm_single_image-wrapper imagestyle">
                                    <img class="img-fluid auto_size" width="539" height="672" src="../images/welcome-img.jpg" alt="single-01">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-xs-12">
                                <div class="margin_top30">
                                    @foreach($about as $b)
                                    <!-- section title -->
                                    <div class="section-title">
                                        <div class="title-header">
                                            <h5>ABOUT US</h5>
                                            <h2 class="title">{{$b->title}}</h2>
                                        </div>
                                        <div class="title-desc">
                                            <p>{!!$b->content_one !!}</p>
                                        </div>
                                    </div>
                                    <!-- section title end -->
                                    <div class="row no-gutters margin_top40">
                                        <div class="col-sm-7">
                                            <ul class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor ttm-textcolor-darkgrey">
                                                
                                                <li><i class="ti ti-check"></i><span class="ttm-list-li-content">{!!$b->content_two!!}</span></li>
                                                {{-- <li><i class="ti ti-check"></i><span class="ttm-list-li-content">Fairness and openness.</span></li>
                                                <li><i class="ti ti-check"></i><span class="ttm-list-li-content">Long-term partner relations.</span></li>
                                                <li><i class="ti ti-check"></i><span class="ttm-list-li-content">Modular architecture of hardware and software.</span></li>
                                                <li><i class="ti ti-check"></i><span class="ttm-list-li-content">Advanced products.</span></li> --}}
                                            </ul>
                                        </div>
                                        <div class="col-sm-5">
                                            <!-- ttm-fid -->
                                            <div class="ttm-fid ttm-fid-with-icon ttm-bgcolor-grey style1 res-575-margin_top30">
                                                <div class="ttm-fid-icon-wrapper">
                                                    <i class="flaticon flaticon-warehouse"></i>
                                                </div>
                                                <div class="ttm-fid-contents">
                                                    <h4 class="ttm-fid-inner">
                                                        <span data-appear-animation="animateDigits" data-from="0" data-to="{{$b->counter}}" data-interval="15" data-before="" data-before-style="sup" data-after="" data-after-style="sub" class="numinate">{{$b->counter}}</span>
                                                    </h4>
                                                    <span class="ttm-fid-title">{{$b->counter_title}}</span>
                                                </div>
                                            </div>
                                            <!-- ttm-fid end -->
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <!-- row end -->
                    </div>
                </section>
                <!--about-section-End-->

                <!--services-section-->
                <section id="services" class="ttm-row services-section ttm-bgcolor-grey clearfix">
                    <div class="container">
                        <!-- row -->
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- section title -->
                                <div class="section-title text-center">
                                    <div class="title-header">
                                        <h5>OUR SERVICES</h5>
                                        <h2 class="title">Let's Experience Exclusive Quality</h2>
                                    </div>
                                </div>
                                <!-- section title end -->
                            </div>
                        </div>
                        <!-- row -->
                        <div class="row slick_slider slick-arrows-style1" data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "arrows":true, "autoplay":false, "dots":false, "infinite":true, "responsive":[{"breakpoint":992,"settings":{"slidesToShow": 2}},{"breakpoint":840,"settings":{"slidesToShow": 2}},{"breakpoint":650,"settings":{"slidesToShow": 1}}]}'>
                           
                           @foreach($services_images as $image)
                            <div class="col-md-4 col-sm-6">
                                <!--featured-imagebox-->
                                
                                <div class="featured-imagebox featured-imagebox-services style1">
                                    <div class="featured-content text-center">
                                        <div class="featured-title">
                                            <h3>{{$image->title}}</h3>
                                        </div>
                                        <div class="featured-desc">
                                            <p>{!!$image->subtitle !!}</p>
                                        </div>
                                    </div>
                                    <!-- featured-thumbnail -->
                                    <div class="featured-thumbnail">
                                        <img class="img-fluid" src="../assets/img/service/{{$image->image}}" alt="GPS position tracking">
                                    </div>
                                    <!-- featured-thumbnail end-->
                                </div>
                                <!-- featured-imagebox end-->
                            </div>
                           @endforeach
                            {{-- <div class="col-md-4 col-sm-6">
                                <!--featured-imagebox-->
                                <div class="featured-imagebox featured-imagebox-services style1">
                                    <div class="featured-content text-center">
                                        <div class="featured-title">
                                            <h3>Fuel Level on mobile and stationary tanks</h3>
                                        </div>
                                        <div class="featured-desc">
                                            <p>Monitoring of stationary and movable/mobile fuel tanks</p>
                                        </div>
                                    </div>
                                    <!-- featured-thumbnail -->
                                    <div class="featured-thumbnail">
                                        <img class="img-fluid" src="../images/services/services-02-768x512.jpg" alt="Fuel Level on mobile and stationary tanks">
                                    </div>
                                    <!-- featured-thumbnail end-->
                                </div>
                                <!-- featured-imagebox end-->
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <!--featured-imagebox-->
                                <div class="featured-imagebox featured-imagebox-services style1">
                                    <div class="featured-content text-center">
                                        <div class="featured-title">
                                            <h3>Fuel consumption</h3>
                                        </div>
                                        <div class="featured-desc">
                                            <p>Fuel consumption monitoring of diesel engines</p>
                                        </div>
                                    </div>
                                    <!-- featured-thumbnail -->
                                    <div class="featured-thumbnail">
                                        <img class="img-fluid" src="../images/services/services-01-768x512.jpg" alt="Fuel consumption">
                                    </div>
                                    <!-- featured-thumbnail end-->
                                </div>
                                <!-- featured-imagebox end-->
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <!--featured-imagebox-->
                                <div class="featured-imagebox featured-imagebox-services style1">
                                    <div class="featured-content text-center">
                                        <div class="featured-title">
                                            <h3>Axle load measurement</h3>
                                        </div>
                                        <div class="featured-desc">
                                            <p>Integration of standard analog sensors into telematics systems</p>
                                        </div>
                                    </div>
                                    <!-- featured-thumbnail -->
                                    <div class="featured-thumbnail">
                                        <img class="img-fluid" src="../images/services/services-05-768x512.jpg" alt="Axle load measurement">
                                    </div>
                                    <!-- featured-thumbnail end-->
                                </div>
                                <!-- featured-imagebox end-->
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <!--featured-imagebox-->
                                <div class="featured-imagebox featured-imagebox-services style1">
                                    <div class="featured-content text-center">
                                        <div class="featured-title">
                                            <h3>Engine operation time monitoring</h3>
                                        </div>
                                        <div class="featured-desc">
                                            <p>Contactless reading, analysis and conversion of data from CAN buses</p>
                                        </div>
                                    </div>
                                    <!-- featured-thumbnail -->
                                    <div class="featured-thumbnail">
                                        <img class="img-fluid" src="../images/services/services-03-768x512.jpg" alt="Engine operation time monitoring">
                                    </div>
                                    <!-- featured-thumbnail end-->
                                </div>
                                <!-- featured-imagebox end-->
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <!--featured-imagebox-->
                                <div class="featured-imagebox featured-imagebox-services style1">
                                    <div class="featured-content text-center">
                                        <div class="featured-title">
                                            <h3>Plant assistance on engine hours and distance travelled</h3>
                                        </div>
                                        <div class="featured-desc">
                                            <p>for maintenance and service purposes</p>
                                        </div>
                                    </div>
                                    <!-- featured-thumbnail -->
                                    <div class="featured-thumbnail">
                                        <img class="img-fluid" src="../images/services/services-06-768x512.jpg" alt="Plant assistance on engine hours and distance travelled">
                                    </div>
                                    <!-- featured-thumbnail end-->
                                </div>
                                <!-- featured-imagebox end-->
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <!--featured-imagebox-->
                                <div class="featured-imagebox featured-imagebox-services style1">
                                    <div class="featured-content text-center">
                                        <div class="featured-title">
                                            <h3>Tower crane installation repair and maintenance</h3>
                                        </div>
                                        <div class="featured-desc">
                                            <p>since 2006</p>
                                        </div>
                                    </div>
                                    <!-- featured-thumbnail -->
                                    <div class="featured-thumbnail">
                                        <img class="img-fluid" src="../images/services/services-07-768x512.jpg" alt="Tower crane installation repair and maintenance">
                                    </div>
                                    <!-- featured-thumbnail end-->
                                </div>
                                <!-- featured-imagebox end-->
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <!--featured-imagebox-->
                                <div class="featured-imagebox featured-imagebox-services style1">
                                    <div class="featured-content text-center">
                                        <div class="featured-title">
                                            <h3>External lift installation repair and maintenance</h3>
                                        </div>
                                        <div class="featured-desc">
                                            <p>since 2006</p>
                                        </div>
                                    </div>
                                    <!-- featured-thumbnail -->
                                    <div class="featured-thumbnail">
                                        <img class="img-fluid" src="../images/services/services-08-768x512.jpg" alt="External lift installation repair and maintenance">
                                    </div>
                                    <!-- featured-thumbnail end-->
                                </div>
                                <!-- featured-imagebox end-->
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <!--featured-imagebox-->
                                <div class="featured-imagebox featured-imagebox-services style1">
                                    <div class="featured-content text-center">
                                        <div class="featured-title">
                                            <h3>Batching plants installation repair and maintenance</h3>
                                        </div>
                                        <div class="featured-desc">
                                            <p>since 2006</p>
                                        </div>
                                    </div>
                                    <!-- featured-thumbnail -->
                                    <div class="featured-thumbnail">
                                        <img class="img-fluid" src="../images/services/services-09-768x512.jpg" alt="Batching plants installation repair and maintenance">
                                    </div>
                                    <!-- featured-thumbnail end-->
                                </div>
                                <!-- featured-imagebox end-->
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <!--featured-imagebox-->
                                <div class="featured-imagebox featured-imagebox-services style1">
                                    <div class="featured-content text-center">
                                        <div class="featured-title">
                                            <h3>Injector pump repair</h3>
                                        </div>
                                        <div class="featured-desc">
                                            <p></p>
                                        </div>
                                    </div>
                                    <!-- featured-thumbnail -->
                                    <div class="featured-thumbnail">
                                        <img class="img-fluid" src="../images/services/services-10-768x512.jpg" alt="Injector pump repair">
                                    </div>
                                    <!-- featured-thumbnail end-->
                                </div>
                                <!-- featured-imagebox end-->
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <!--featured-imagebox-->
                                <div class="featured-imagebox featured-imagebox-services style1">
                                    <div class="featured-content text-center">
                                        <div class="featured-title">
                                            <h3>Nozzle repair</h3>
                                        </div>
                                        <div class="featured-desc">
                                            <p></p>
                                        </div>
                                    </div>
                                    <!-- featured-thumbnail -->
                                    <div class="featured-thumbnail">
                                        <img class="img-fluid" src="../images/services/services-11-768x512.jpg" alt="Nozzle repair">
                                    </div>
                                    <!-- featured-thumbnail end-->
                                </div>
                                <!-- featured-imagebox end-->
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <!--featured-imagebox-->
                                <div class="featured-imagebox featured-imagebox-services style1">
                                    <div class="featured-content text-center">
                                        <div class="featured-title">
                                            <h3>Diesel cleaning </h3>
                                        </div>
                                        <div class="featured-desc">
                                            <p>(coming soon)</p>
                                        </div>
                                    </div>
                                    <!-- featured-thumbnail -->
                                    <div class="featured-thumbnail">
                                        <img class="img-fluid" src="../images/services/services-12-768x512.jpg" alt="Diesel cleaning">
                                    </div>
                                    <!-- featured-thumbnail end-->
                                </div>
                                <!-- featured-imagebox end-->
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <!--featured-imagebox-->
                                <div class="featured-imagebox featured-imagebox-services style1">
                                    <div class="featured-content text-center">
                                        <div class="featured-title">
                                            <h3>Lease of Tower crane and external lifts</h3>
                                        </div>
                                        <div class="featured-desc">
                                            <p></p>
                                        </div>
                                    </div>
                                    <!-- featured-thumbnail -->
                                    <div class="featured-thumbnail">
                                        <img class="img-fluid" src="../images/services/services-13-768x512.jpg" alt="Lease of Tower crane and external lifts">
                                    </div>
                                    <!-- featured-thumbnail end-->
                                </div>
                                <!-- featured-imagebox end-->
                            </div> --}}
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <p class="text-center padding_top10">Don’t hesitate, <a class="ttm-textcolor-skincolor font-weight-500" href="#contact"><u>contact us</u></a> for better help and more services.</p>
                            </div>
                        </div>
                    </div>
                </section>
                <!--services-section end -->

                <!--cta-section-->
                <section id="cta" class="ttm-row cta-section ttm-bgimage-yes bg-img2 ttm-bg ttm-bgcolor-darkgrey clearfix">
                    <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
                    <div class="container">
                        <!-- row -->
                        <div class="row">
                            @foreach($section_one  as $sectionOne)
                            <div class="col-lg-9">
                                <!-- section-title -->
                                <div class="section-title ">
                                    <div class="title-header">
                                        <h5>{{$sectionOne->title}}</h5>
                                        <h2 class="title">{{$sectionOne->subtitle}}</b> </h2>
                                    </div>
                                </div>
                                <!-- section-title end -->
                                <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-white margin_top20 res-991-margin_top10 margin_right20 res-991-margin_right15" href="#portfolio">{{$sectionOne->link_one}}</a>
                                <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor  margin_top20 res-991-margin_top10 " href="#services">{{$sectionOne->link_two}}</a>
                            </div>
                            <div class="col-lg-3">
                                <div class="ttm-fid ttm-fid-with-icon text-center style2 ">
                                    <div class="ttm-fid-icon-wrapper">
                                        <i class="flaticon flaticon-suit"></i>
                                    </div>
                                    <div class="ttm-fid-contents">
                                        <h4 class="ttm-fid-inner">
                                            <span data-appear-animation="animateDigits" data-from="0" data-to="2887" data-interval="15" data-before="" data-before-style="sup" data-after="" data-after-style="sub" class="numinate">{{$sectionOne->counter}}</span>
                                        </h4>
                                        <span class="ttm-fid-title">{{$sectionOne->counter_title}}</span>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <!-- row end -->
                    </div>
                </section>
                <!--cta-section end-->

                <!--image section -->
                <section id="Measurement" class="ttm-row image-section bg-layer-equal-height ttm-bgcolor-grey clearfix">
                    <div class="container p-0">
                        @foreach($section_two as $sectionTwo)
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- col-img-img-two -->
                                <div class="ttm-bg ttm-col-bgimage-yes col-bg-img-one ttm-right-span spacing-1 ">
                                    <div class="ttm-col-wrapper-bg-layer ttm-bg-layer" style="background-image: url('../assets/img/section2/{{$sectionTwo->image_one}}')"></div>
                                    <div class="layer-content"></div>
                                </div>
                                <!-- col-img-bg-img-two end-->
                            </div>
                        </div>
                        <div class="row no-gutters">
                            <div class="col-lg-6 padding_top70 padding_bottom70 res-575-padding_bottom0">
                                <div class="row no-gutters ttm-border-bottom">
                                    <div class="col-sm-6">
                                        <div class="ttm-bgcolor-darkgrey spacing-3 ">
                                            <h3 class="col-title ">
                                                  {{$sectionTwo->title}}
                                            </h3>
                                            <a class="ttm-btn btn-inline ttm-btn-size-md ttm-btn-color-skincolor " href="#contact" tabindex="0">{{$sectionTwo->link}}</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- col-img-img-two -->
                                        <div class="ttm-bg ttm-col-bgimage-yes col-bg-img-two">
                                            <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                                            <div class="layer-content">
                                            </div>
                                        </div>
                                        <!-- col-img-bg-img-two end-->
                                        <img class="img-fluid ttm-equal-height-image w-100" src="../assets/img/section2/{{$sectionTwo->image_two}}" alt="bg-image" height="100" width="100">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 ">
                                <div class="ttm-bgcolor-yes ttm-bgcolor-white ttm-bg ttm-right-span spacing-2">
                                    <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                                    <div class="layer-content">
                                        <!-- section-title -->
                                        <div class="section-title">
                                            <div class="title-header">
                                                <h5> {{$sectionTwo->main_title}}</h5>
                                                <h2 class="title">{{$sectionTwo->subtitle}}</h2>
                                            </div>
                                        </div>
                                        <!-- section-title end -->
                                        <div class="row ttm-vertical_sep">
                                            <div class="col-lg-12 mb-4">
                                              <p>{!! $sectionTwo->content !!}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </section>
                <!--image section end -->

                <!--Project section -->
                <section id="portfolio" class="ttm-row project-section">
                    <div class="container">
                    <div class="row">
                            <div class="col-lg-12">
                                <!-- section-title -->
                                <div class="section-title title-style-center_text">
                                @foreach($portfolio as $p)
                          
                                    <div class="title-header">
                                        <h5>{{$p->title}}</h5>
                                        <h2 class="title">{{$p->subtitle}} </h2>
                                    </div>
                                @endforeach
                                </div>
                                <!-- section-title end -->
                            </div>
                        </div>
                        <!-- row -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="ttm-bg ttm-col-bgcolor-yes ttm-bgcolor-white ttm-bg padding_left10 padding_right10">
                                    <div class="ttm-col-wrapper-bg-layer ttm-bg-layer">
                                        <div class="ttm-col-wrapper-bg-layer-inner"></div>
                                    </div>
                                    <div class="layer-content">
                                        <div class="row ttm-boxes-spacing-10px">
                                        @foreach($portfolio_image as $img)
                                            <div class="col-lg-4 col-md-6 col-sm-6 ttm-box-col-wrapper">
                                                <div class="featured-imagebox featured-imagebox-portfolio style3">
                                                    <!-- featured-thumbnail -->
                                                    <div class="featured-thumbnail">
                                                        <img class="img-fluid" src="../assets/img/portfolio/{{$img->image}}" alt="{{$img->title}}">
                                                    </div>
                                                    <!-- featured-thumbnail end-->
                                                </div>
                                                <!-- featured-icon-box end-->
                                            </div>
                                        @endforeach
                                            {{-- <div class="col-lg-4 col-md-6 col-sm-6 ttm-box-col-wrapper">
                                                <div class="featured-{{$img->title}}box featured-imagebox-portfolio style3">
                                                    <!-- featured-thumbnail -->
                                                    <div class="featured-thumbnail">
                                                        <img class="img-fluid" src="../images/portfolio/portfolio-02-768x512.jpg" alt="image">
                                                    </div>
                                                    <!-- featured-thumbnail end-->
                                                </div>
                                                <!-- featured-icon-box end-->
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-6 ttm-box-col-wrapper">
                                                <div class="featured-imagebox featured-imagebox-portfolio style3">
                                                    <!-- featured-thumbnail -->
                                                    <div class="featured-thumbnail">
                                                        <img class="img-fluid" src="../images/portfolio/portfolio-03-768x512.jpg" alt="image">
                                                    </div>
                                                    <!-- featured-thumbnail end-->
                                                </div>
                                                <!-- featured-icon-box end-->
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-6 ttm-box-col-wrapper">
                                                <div class="featured-imagebox featured-imagebox-portfolio style3">
                                                    <!-- featured-thumbnail -->
                                                    <div class="featured-thumbnail">
                                                        <img class="img-fluid" src="../images/portfolio/portfolio-04-768x512.jpg" alt="image">
                                                    </div>
                                                    <!-- featured-thumbnail end-->
                                                </div>
                                                <!-- featured-icon-box end-->
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-6 ttm-box-col-wrapper">
                                                <div class="featured-imagebox featured-imagebox-portfolio style3">
                                                    <!-- featured-thumbnail -->
                                                    <div class="featured-thumbnail">
                                                        <img class="img-fluid" src="../images/portfolio/portfolio-05-768x512.jpg" alt="image">
                                                    </div>
                                                    <!-- featured-thumbnail end-->
                                                </div>
                                                <!-- featured-icon-box end-->
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-6 ttm-box-col-wrapper">
                                                <div class="featured-imagebox featured-imagebox-portfolio style3">
                                                    <!-- featured-thumbnail -->
                                                    <div class="featured-thumbnail">
                                                        <img class="img-fluid" src="../images/portfolio/portfolio-06-768x512.jpg" alt="image">
                                                    </div>
                                                    <!-- featured-thumbnail end-->
                                                </div>
                                                <!-- featured-icon-box end-->
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-6 ttm-box-col-wrapper">
                                                <div class="featured-imagebox featured-imagebox-portfolio style3">
                                                    <!-- featured-thumbnail -->
                                                    <div class="featured-thumbnail">
                                                        <img class="img-fluid" src="../images/portfolio/portfolio-07-768x512.jpg" alt="image">
                                                    </div>
                                                    <!-- featured-thumbnail end-->
                                                </div>
                                                <!-- featured-icon-box end-->
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-6 ttm-box-col-wrapper">
                                                <div class="featured-imagebox featured-imagebox-portfolio style3">
                                                    <!-- featured-thumbnail -->
                                                    <div class="featured-thumbnail">
                                                        <img class="img-fluid" src="../images/portfolio/portfolio-08-768x512.jpg" alt="image">
                                                    </div>
                                                    <!-- featured-thumbnail end-->
                                                </div>
                                                <!-- featured-icon-box end-->
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-6 ttm-box-col-wrapper">
                                                <div class="featured-imagebox featured-imagebox-portfolio style3">
                                                    <!-- featured-thumbnail -->
                                                    <div class="featured-thumbnail">
                                                        <img class="img-fluid" src="../images/portfolio/portfolio-09-768x512.jpg" alt="image">
                                                    </div>
                                                    <!-- featured-thumbnail end-->
                                                </div>
                                                <!-- featured-icon-box end-->
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- row end -->
                        </div>
                    </div>
                </section>
                <!--Project section End -->

                <!--client-section-->
                <div id="client" class="ttm-row client-section mt_200 ttm-bgcolor-darkgrey clearfix">
                    <div class="container">
                        <!--row -->
                        <div class="row slick_slider" data-slick='{"slidesToShow": 5, "slidesToScroll": 1, "arrows":false, "autoplay":false, "infinite":true, "responsive": [{"breakpoint":1200,"settings":{"slidesToShow": 5}}, {"breakpoint":1024,"settings":{"slidesToShow": 4}}, {"breakpoint":777,"settings":{"slidesToShow": 3}},{"breakpoint":575,"settings":{"slidesToShow": 2}},{"breakpoint":400,"settings":{"slidesToShow": 1}}]}'>
                          @foreach($clients as $client)
                            <div class="col-lg-12">
                                <div class="client-box">
                                    <div class="ttm-client-logo-tooltip" data-tooltip="{{$client->title}}">
                                        <div class="client-thumbnail">
                                            @if(!empty($client->image))
                                            <img class="img-fluid auto_size" width="160" height="98" src="../assets/img/client/{{$client->image}}" alt="{{$client->title}}">
                                       @else
                                       <h3>{{$client->title}}</h3>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            {{-- <div class="col-lg-12">
                                <div class="client-box">
                                    <div class="ttm-client-logo-tooltip" data-tooltip="Darycet">
                                        <div class="client-thumbnail">
                                            <img class="img-fluid auto_size" width="160" height="98" src="../images/client/client-2.png" alt="Darycet">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="client-box">
                                    <div class="ttm-client-logo-tooltip" data-tooltip="ATD">
                                        <div class="client-thumbnail">
                                            <h3>ATD</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="client-box">
                                    <div class="ttm-client-logo-tooltip" data-tooltip="Aleed">
                                        <div class="client-thumbnail">
                                            <h3>Aleed Construction</h3>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                        <!-- row end -->
                    </div>
                </div>
                <!--client-section end-->

                <!--contact section  -->

                <section id="contact" class="ttm-row contact-section ttm-bgimage-yes bg-img4 z-index-1 ttm-bg ttm-bgcolor-grey clearfix">
                    <div class="container">
                        @foreach($contact as $c)
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- section-title -->
                                <div class="section-title title-style-center_text">
                                    <div class="title-header">
                                        <h5>CONTACT US</h5>
                                        <h2 class="title">{{$c->title}} </h2>
                                    </div>
                                </div><!-- section-title end -->
                            </div>
                        </div>
                   
                        <div class="row ttm-bgcolor-darkgrey">
                            <div class="col-lg-12">
                                <div class="row ttm-vertical_sep">
                                    <div class="col-lg-4">
                                        <div class="featured-icon-box icon-align-before-content spacing-5">
                                            <div class="featured-icon ">
                                                <div class="ttm-icon ttm-icon_element-style-square ttm-icon_element-fill ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                                    <i class="flaticon flaticon-email-1"></i>
                                                </div>
                                            </div>
                                            <div class="featured-content padding_left20">
                                                <div class="featured-title">
                                                    <h3 class="margin_bottom5 fs-24">{{$c->title_contact}}</h3>
                                                </div>
                                                <div class="featured-desc">
                                                    <p>
                                                        <a href="tel:{{ app('contact')->phone_one }}">{{ app('contact')->phone_one }}</a><br>
                                                        <a href="tel:{{ app('contact')->phone_two }}">{{ app('contact')->phone_two }}</a><br>
                                                        <a href="mailto:{{ app('contact')->email }}">{{ app('contact')->email }}</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="featured-icon-box icon-align-before-content spacing-5">
                                            <div class="featured-icon ">
                                                <div class="ttm-icon ttm-icon_element-style-square ttm-icon_element-fill ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                                    <i class="flaticon  flaticon-placeholder"></i>
                                                </div>
                                            </div>
                                            <div class="featured-content padding_left20">
                                                <div class="featured-title">
                                                    <h3 class="margin_bottom5 fs-24">{{$c->title_address}}</h3>
                                                </div>
                                                <div class="featured-desc">
                                                    <p><a href="{{ app('contact')->map}}" target="_blank">{{ app('contact')->address }}</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="featured-icon-box icon-align-before-content spacing-5">
                                            <div class="featured-icon ">
                                                <div class="ttm-icon ttm-icon_element-style-square ttm-icon_element-fill ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                                    <i class="flaticon  flaticon-clock"></i>
                                                </div>
                                            </div>
                                            <div class="featured-content padding_left20">
                                                <div class="featured-title">
                                                    <h3 class="margin_bottom5 fs-24 ">{{$c->title_working}}</h3>
                                                </div>
                                                <div class="featured-desc">
                                                    <p>{{ app('contact')->working_days }} {{ app('contact')->working_hours }} <br> {{ app('contact')->days_closed }}    {{ app('contact')->closed }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row ttm-bgcolor-white spacing-6 mb_190 ">
                                    <div class="col-lg-6 padding_right50">
                                        <!-- section-title -->
                                        <div class="section-title">
                                            <div class="title-header">
                                                <h2 class="title fs-44 ">{{$c->title_message}}</h2>
                                            </div>
                                        </div><!-- section-title end -->
                                    </div>
                                    <div class="col-lg-6">
                                        <form id='contact_form' method="post" action="{{route('contactStore')}}" class='request_qoute_form wrap-form clearfix'>
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <span class="text-input"><input name="name" type="text" value="" placeholder="Your Name" required="required"></span>
                                                </div>
                                                <div class="col-md-6">
                                                    <span class="text-input"><input name="email" type="email" value="" placeholder="Email Address" required="required"></span>
                                                </div>
                                                <div class="col-lg-12">
                                                    <span class="text-input"><textarea name="message" rows="3" placeholder="Your Message" required="required"></textarea></span>
                                                </div>
                                                <div class="col-lg-12">
                                                    <button class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor" type="submit" rel=noopener noreferrer>Send Message!</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                     
                    </div>
                </section>
                <!--contact section End -->

                <!--Map  -->
                <div class="row">
                    <div class="col-lg-12">
                        <iframe src="{{$c->map}}" width="100" height="558" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <!--Map Section  -->
                </div>
                <!--Map end -->
   @endforeach
            </div>
            <!--site-main end-->
        </div><!-- page end -->

        <!--footer start-->
        <footer id="footer" class="footer widget-footer ttm-bgcolor-darkgrey ttm-bgimage-yes bg-img3 ttm-textcolor-white  clearfix">
            <div class="first-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-9 widget-area">
                            @foreach($footer as $f)
                            <div class="section-title mb-0">
                                <div class="title-header">
                                    <h5 class="ttm-textcolor-white">{{$f->title}}</h5>
                                    <h2 class="title">{{$f->subtitle}}</h2>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="text-md-right">
                                <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-white margin_top30 res-991-margin_top0 " href="#contact">Contact Us!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="second-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6 widget-area">
                            <div class="widget widget_text margin_right10 clearfix">
                                <div class="footer-logo">
                                    <img id="footer-logo-img" class="img-fluid auto_size float-left mr-2" height="60" width="50" src="../images/logo-light.svg" alt="image">
                                    <h1 class="text-uppercase">ServeTech Pro</h1>
                                </div>
                                <div class="textwidget widget-text">
                                    <p>Operating in the tracking & monitoring technology for many years.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 widget-area">
                            <div class="widget widget_text margin_right10 clearfix">
                                <h3 class="widget-title">Contact us</h3>
                                <div class="textwidget widget-text">
                                    <div class="call_detail">
                                        <h3 class="fs-24">
                                            <a href="tel:+2349155575777">+2349155575777</a> | <a href="tel:+2348058881888">+2348058881888</a>
                                        </h3>
                                        <h4 class="fs-20 ttm-textcolor-white">
                                            <a href="mailto:info@servetechpro.com"><u>info@servetechpro.com</u></a>
                                        </h4>
                                        <div class="padding_top0 padding_bottom10">
                                            <p class="res-575-margin_bottom0">No 1B Owoseni Street, New Benin, Benin City, Edo State Nigeria</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-footer-text copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center">
                                <span class="cpy-text">Copyright &copy; <?php echo date("Y"); ?> <a href="/" class="ttm-textcolor-skincolor font-weight-500">ServeTech Pro</a>. All rights reserved.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--footer end-->

        <!--back-to-top start-->
        <a id="totop" href="#top">
            <i class="fa fa-angle-up"></i>
        </a>
        <!--back-to-top end-->
    </div>

    <!-- Javascript -->
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../js/jquery-migrate-3.3.2.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.easing.js"></script>
    <script src="../js/jquery-waypoints.js"></script>
    <script src="../js/jquery-validate.js"></script>
    <script src="../js/jquery.prettyPhoto.js"></script>
    <script src="../js/slick.min.js"></script>
    <script src="../js/numinate.min.js"></script>
    <script src="../js/imagesloaded.min.js"></script>
    <script src="../js/jquery-isotope.js"></script>
    <script src="../js/main.js"></script>
    <!-- Javascript end-->

    <script src="../js/jquery.validate.min.js"></script>
    <script type="text/javascript">
        $("#contact_form").validate();
        
        $(window).on('load', function(){
            $('#myModal').modal('show');
        });
    </script>
</body>

</html>