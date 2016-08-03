<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Fixit is repair Shop websites template.">
    <meta name="keywords" content="HTML,CSS, Hardware Repair, Computer Repair, Website Template, Console Repair, Tablet Repair, iMac Repair">
    <title>Digital Repair Shop Website Template | Fixit</title>

    <!-- Bootstrap -->
    <link href="{{ URL::to('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Template Style -->
    <link href="{{ URL::to('css/style.css') }}" rel="stylesheet">
    <!-- animsition css -->
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/animsition.min.css') }}">
    <!-- slider -->
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/slick.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/slick-theme.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/fontello.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/font-awesome.min.css') }}">
    <!-- Template Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Poppins:400,500,600,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="animsition">
<div class="collapse" id="search-area">
    <div class="well-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
            <button class="btn btn-default" type="button">Go!</button>
            </span> </div>
                    <!-- /input-group -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
        </div>
    </div>
</div>
<div class="navigation">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div id="navigation"><!-- navigation -->
                    <ul>
                        <li class="active"><a href="{{ route('home.index') }}" title="Главная" class="animsition-link">Главная</a></li>

                        <li><a href="{{ route('home.about') }}" title="о Нас" class="animsition-link">О нас</a></li>
                        <li><a href="service-listing-icon.html" title="Repair Service" class="animsition-link">Repair Service</a>
                            <ul>
                                <li><a href="service-listing-icon.html" title="Service List Icon" class="animsition-link">Service List Icon</a></li>
                                <li><a href="service-listing-image.html" title="Service With Image" class="animsition-link">Service With Image</a></li>
                                <li><a href="pc-mac-single-page.html" title="Service Full Width" class="animsition-link">Service Full Width</a>
                                    <ul>
                                        <li><a href="pc-mac-single-page.html" title="PC &amp; IMAC Repair" class="animsition-link">PC &amp; IMAC Repair</a></li>
                                        <li><a href="laptop-single-page.html" title="Laptop Repair" class="animsition-link">Laptop Repair</a></li>
                                        <li><a href="phone-single-page.html" title="Smart Phone Repair" class="animsition-link">Smart Phone Repair</a></li>
                                        <li><a href="tablet-single-page.html" title="Tablet Repair" class="animsition-link">Tablet Repair</a></li>
                                        <li><a href="console-single-page.html" title="Console Repair" class="animsition-link">Console Repair</a></li>
                                        <li><a href="data-recovery-single-page.html" title="Data Recovery" class="animsition-link">Data Recovery</a></li>
                                    </ul>
                                </li>
                                <li><a href="pc-mac-sidenav.html" title="Service With Sidebar" class="animsition-link">Service With Sidebar</a>
                                    <ul>
                                        <li><a href="pc-mac-sidenav.html" title="PC &amp; IMAC Repair" class="animsition-link">PC &amp; IMAC Repair</a></li>
                                        <li><a href="laptop-sidenav.html" title="Laptop Repair" class="animsition-link">Laptop Repair</a></li>
                                        <li><a href="smartphone-sidenav.html" title="Smart Phone Repair" class="animsition-link">Smart Phone Repair</a></li>
                                        <li><a href="tablet-sidenav.html" title="Tablet Repair" class="animsition-link">Tablet Repair</a></li>
                                        <li><a href="console-sidenav.html" title="Console Repair" class="animsition-link">Console Repair</a></li>
                                        <li><a href="data-recovery-sidenav.html" title="Data Recovery" class="animsition-link">Data Recovery</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="blog-default.html" title="News" class="animsition-link">News</a>
                            <ul>
                                <li><a href="blog-default.html" title="Blog" class="animsition-link">Blog default</a></li>
                                <li><a href="blog-detail.html" title="Blog Single" class="animsition-link">Blog-detail</a></li>
                                <li><a href="blog-two-columns.html" title="Blog Two Column" class="animsition-link">Blog Two Column</a></li>
                                <li><a href="blog-two-column-sidebar.html" title="Blog Two Columns with Sidebar" class="animsition-link">Blog Two Columns-Sidebar</a></li>
                            </ul>
                        </li>
                        <li><a href="#" title="Feature">Feature</a>
                            <ul>
                                <li><a href="faq-listing.html" title="FAQ's" class="animsition-link">FAQ's</a>
                                    <ul>
                                        <li><a href="faq-listing.html" title="FAQ's" class="animsition-link">FAQ's</a></li>
                                        <li><a href="faq-details.html" title="FAQ's Detail" class="animsition-link">FAQ's Detail</a></li>
                                    </ul>
                                </li>
                                <li><a href="pricing-v-1.html" title="Pricing" class="animsition-link">Pricing</a>
                                    <ul>
                                        <li><a href="pricing-v-1.html" title="Pricing" class="animsition-link">Pricing</a></li>
                                        <li><a href="pricing-v-2.html" title="Pricing v.2" class="animsition-link">Pricing v.2</a></li>
                                    </ul>
                                </li>
                                <li><a href="franchising.html" title="Franchise" class="animsition-link">Franchise</a></li>
                                <li><a href="feedback.html" title="Feedback" class="animsition-link">Feedback</a></li>
                                <li><a href="repair-team.html" title="Team" class="animsition-link">Team</a></li>
                                <li><a href="career.html" title="Career" class="animsition-link">Career</a>
                                    <ul>
                                        <li><a href="career.html" title="Career" class="animsition-link">Career</a></li>
                                        <li><a href="career-details.html" title="Career Detail" class="animsition-link">career Detail</a></li>
                                    </ul>
                                </li>
                                <li><a href="error-page.html" title="404 Error" class="animsition-link">404 error</a></li>
                                <li><a href="shortcodes-accordion.html" title="Shortcodes" class="animsition-link">Shortcodes</a>
                                    <ul>
                                        <li><a href="shortcodes-accordion.html" title="Accordion" class="animsition-link">Accordion</a></li>
                                        <li><a href="shortcodes-alert.html" title="Alerts" class="animsition-link">Alerts</a></li>
                                        <li><a href="shortcodes-columns.html" title="Columns" class="animsition-link">Columns</a></li>
                                        <li><a href="shortcodes-tabs.html" title="Tabs" class="animsition-link">Tabs</a></li>
                                        <li><a href="shortcodes-button.html" title="Buttons" class="animsition-link">Buttons</a></li>
                                        <li><a href="shortcodes-typography.html" title="Typography" class="animsition-link">Typography</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="contactus.html" title="Contact Us" class="animsition-link">Contact</a>
                            <ul>
                                <li><a href="contactus.html" title="Contact Us" class="animsition-link">Contact Us</a></li>
                                <li><a href="appointment.html" title="Appointment" class="animsition-link">Appointment</a></li>
                                <li><a href="location.html" title="Location" class="animsition-link">Location <span class="badge">NEW</span></a>
                                    <ul>
                                        <li><a href="location.html" title="Location" class="animsition-link">Location List</a></li>
                                        <li><a href="location-single.html" title="Location Single page" class="animsition-link">Single / Location</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="gallery-filterable.html" title="Gallery" class="animsition-link">Gallery <span class="badge">NEW</span></a>
                            <ul>
                                <li><a href="gallery-filterable.html" title="Filterable + Zoom" class="animsition-link">Filterable + Zoom</a></li>
                                <li><a href="gallery-filterable-wide.html" title="Filterable Full + Zoom" class="animsition-link"> Filterable Full + Zoom</a></li>
                                <li><a href="gallery-3-column.html" title="3 Column + Zoom" class="animsition-link">3 Column + Zoom</a></li>
                                <li><a href="gallery-4-column.html" title="4 Column + Zoom" class="animsition-link"> 4 Column + Zoom</a></li>
                            </ul>
                        </li>

                    </ul>
                </div><!-- navigation -->
            </div>
            <div class="col-md-2 social-nav">
                <ul class="listnone">
                    <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest-square"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="header"><!-- header -->
    <div class="container">
        <div class="row">
            <div class="col-md-3 navbar-brand"> <a href="index.html" title="Digital Repair Shop"><img src="{{ URL::to('images/logo.png') }}" alt="Digital Repair Shop"></a> </div>
            <div class="col-md-offset-1 col-md-8">
                <div class="row">
                    <div class="col-md-3 store-block">
                        <div class="store-icon"><i class="icon-clock"></i></div>
                        <div class="store-box"><span class="store-title">Часы работы</span>
                            <div class="store-time">9:00 - 18:00</div>
                        </div>
                    </div>
                    <div class="col-md-4 need-block">
                        <div class="need-icon"><i class="icon-telephone-1"></i></div>
                        <div class="need-box"><span class="help-title">Нужна помошь?</span>
                            <div class="help-number">1-800-1234-567</div>
                        </div>
                    </div>
                    <div class="col-md-5 text-right"> <a href="appointment.html" class="btn btn-default">Свяжитесь с нами</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- header -->