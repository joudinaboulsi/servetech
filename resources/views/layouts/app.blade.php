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
                                               {{$slide->content}}
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
                 
                </div>
            </div>
            <!-- Banner end-->

            <!--site-main start-->
            <div class="site-main">
                <!--about-section-->
                <section id="about" class="ttm-row about-section clearfix z-index-1">
                   @include('front.about')
                </section>
                <!--about-section-End-->

                <!--services-section-->
                <section id="services" class="ttm-row services-section ttm-bgcolor-grey clearfix">
                 @include('front.service')
                </section>
                <!--services-section end -->

                <!--cta-section-->
                <section id="cta" class="ttm-row cta-section ttm-bgimage-yes bg-img2 ttm-bg ttm-bgcolor-darkgrey clearfix">
                    <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
                    <div class="container">
                        <!-- row -->
                     @include('front.sectionOne')
                        <!-- row end -->
                    </div>
                </section>
                <!--cta-section end-->

                <!--image section -->
                <section id="Measurement" class="ttm-row image-section bg-layer-equal-height ttm-bgcolor-grey clearfix">
                 @include('front.sectionTwo')
                </section>
                <!--image section end -->

                <!--Project section -->
                <section id="portfolio" class="ttm-row project-section">
                  @include('front.portfolio')
                </section>
                <!--Project section End -->

                <!--client-section-->
                <div id="client" class="ttm-row client-section mt_200 ttm-bgcolor-darkgrey clearfix">
               @include('front.client')
                </div>
                <!--client-section end-->

                <!--contact section  -->

                <section id="contact" class="ttm-row contact-section ttm-bgimage-yes bg-img4 z-index-1 ttm-bg ttm-bgcolor-grey clearfix">
                   @include('front.contact')
                </section>
                <!--contact section End -->

                <!--Map  -->
                <div class="row">
                   @include('front.map')
                    <!--Map Section  -->
                </div>
                <!--Map end -->

            </div>
            <!--site-main end-->
        </div><!-- page end -->

        <!--footer start-->
        <footer id="footer" class="footer widget-footer ttm-bgcolor-darkgrey ttm-bgimage-yes bg-img3 ttm-textcolor-white  clearfix">
      
           @include('front.footer')
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