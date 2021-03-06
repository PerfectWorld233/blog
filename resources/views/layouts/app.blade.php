<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <title>Taylor Yue BLOG | Blog Concept Front End Theme</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    <!-- ================== BEGIN BASE CSS STYLE ================== -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="{{asset("assets/plugins/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet" />
    <link href="{{asset("assets/plugins/font-awesome/css/font-awesome.min.css")}}" rel="stylesheet" />
    <link href="{{asset("assets/css/animate.min.css")}}" rel="stylesheet" />
    <link href="{{asset("assets/css/style.min.css")}}" rel="stylesheet" />
    <link href="{{asset("assets/css/style-responsive.min.css")}}" rel="stylesheet" />
    <link href="{{asset("assets/css/theme/default.css")}}" id="theme" rel="stylesheet" />
    <!-- ================== END BASE CSS STYLE ================== -->

    <!-- ================== BEGIN BASE JS ================== -->
    <script src="{{asset("assets/plugins/pace/pace.min.js")}}"></script>
    <!-- ================== END BASE JS ================== -->
</head>
<body>
<!-- begin #header -->
<div id="header" class="header navbar navbar-default navbar-fixed-top">
    <!-- begin container -->
    <div class="container">
        <!-- begin navbar-header -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="index.html" class="navbar-brand">
                <span class="brand-logo"></span>
                <span class="brand-text">
                        Taylor Yue
                    </span>
            </a>
        </div>
        <!-- end navbar-header -->
        <!-- begin navbar-collapse -->
        <div class="collapse navbar-collapse" id="header-navbar">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="javascript:;" data-toggle="dropdown">HOME <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="index_transparent_header.html">Page with Transparent Header</a></li>
                        <li><a href="index_inverse_header.html">Page with Inverse Header</a></li>
                        <li><a href="index.html">Default Header</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" data-toggle="dropdown">POSTS <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="post_grid.html">Page with Grid View Blog Post</a></li>
                        <li><a href="post_without_sidebar.html">Page without Sidebar</a></li>
                    </ul>
                </li>
                <li><a href="{{url('about_me')}}">ABOUT ME</a></li>
                <li><a href="{{url('contact_us')}}">CONTACT US</a></li>
                {{--<li><a href="https://wrapbootstrap.com/theme/color-admin-admin-template-front-end-WB0N89JMK">PURCHASE</a></li>--}}
            </ul>
        </div>
        <!-- end navbar-collapse -->
    </div>
    <!-- end container -->
</div>
<!-- end #header -->

<!-- begin #page-title -->
<div id="page-title" class="page-title has-bg">
    <div class="bg-cover"><img src="{{asset("assets/img/cover4.jpg")}}" alt="" /></div>
    <div class="container">
        <h1>Taylor Yue</h1>
        <p>生活不止眼前的苟且， 还有诗和远方的田野！！</p>
    </div>
</div>
<!-- end #page-title -->

<!-- begin #content -->
@yield('content')
<!-- end #content -->

<!-- begin #footer -->
<div id="footer" class="footer">
    <!-- begin container -->
    <div class="container">
        <!-- begin row -->
        <div class="row">
            <!-- begin col-3 -->
            <div class="col-md-3 col-sm-3">
                <!-- begin section-container -->
                <div class="section-container">
                    <h4 class="footer-title">Categories</h4>
                    <ul class="categories">
                        <li><a href="#">Sports</a></li>
                        <li><a href="#">Outdoor Sports</a></li>
                        <li><a href="#">Indoor Sports</a></li>
                        <li><a href="#">Video Shooting</a></li>
                        <li><a href="#">Drone</a></li>
                        <li><a href="#">Uncategorized</a></li>
                    </ul>
                </div>
                <!-- end section-container -->
            </div>
            <!-- end col-3 -->
            <!-- begin col-3 -->
            <div class="col-md-3 col-sm-3">
                <!-- begin section-container -->
                <div class="section-container">
                    <h4 class="footer-title">Archives</h4>
                    <ul class="archives">
                        <li><a href="#">June 2015</a> <span class="total">(102)</span></li>
                        <li><a href="#">May 2015</a> <span class="total">(46)</span></li>
                        <li><a href="#">April 2015</a> <span class="total">(84)</span></li>
                        <li><a href="#">March 2015</a> <span class="total">(67)</span></li>
                        <li><a href="#">February 2015</a> <span class="total">(99)</span></li>
                        <li><a href="#">January 2015</a> <span class="total">(113)</span></li>
                        <li><a href="#">December 2014</a> <span class="total">(25)</span></li>
                    </ul>
                </div>
                <!-- end section-container -->
            </div>
            <!-- end col-3 -->
            <!-- begin col-3 -->
            <div class="col-md-3 col-sm-3">
                <!-- begin section-container -->
                <div class="section-container">
                    <h4 class="footer-title">Recent Posts</h4>
                    <ul class="recent-post">
                        <li>
                            <h4>
                                <a href="#">Nam ut urna hendrerit</a>
                                <span class="time">February 22, 2015</span>
                            </h4>
                        </li>
                        <li>
                            <h4>
                                <a href="#">Class aptent taciti sociosqu</a>
                                <span class="time">July 15, 2015</span>
                            </h4>
                        </li>
                        <li>
                            <h4>
                                <a href="#">Donec rhoncus arcu</a>
                                <span class="time">March 21, 2015</span>
                            </h4>
                        </li>
                    </ul>
                </div>
                <!-- end section-container -->
            </div>
            <!-- end col-3 -->
            <!-- begin col-3 -->
            <div class="col-md-3 col-sm-3">
                <div class="section-container">
                    <h4 class="footer-title">About Color Admin</h4>
                    <address>
                        <strong>Twitter, Inc.</strong><br />
                        795 Folsom Ave, Suite 600<br />
                        San Francisco, CA 94107<br />
                        P: (123) 456-7890<br />
                        <br />
                        <strong>Full Name</strong><br />
                        <a href="#">first.last@example.com</a>
                    </address>
                </div>
                <!-- end section-container -->
            </div>
            <!-- end col-3 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end #footer -->
<!-- begin #footer-copyright -->
<div id="footer-copyright" class="footer-copyright">
    <!-- begin container -->
    <div class="container">
        <span class="copyright">&copy; 2015 SeanTheme All Right Reserved</span>
        <ul class="social-media-list">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-rss"></i></a></li>
        </ul>
    </div>
    <!-- end container -->
</div>
<!-- end #footer-copyright -->


<!-- ================== BEGIN BASE JS ================== -->
<script src="{{asset("assets/plugins/jquery/jquery-1.9.1.min.js")}}"></script>
<script src="{{asset("assets/plugins/jquery/jquery-migrate-1.1.0.min.js")}}"></script>
<script src="{{asset("assets/plugins/bootstrap/js/bootstrap.min.js")}}"></script>
<!--[if lt IE 9]>
<script src="{{asset("assets/crossbrowserjs/html5shiv.js")}}"></script>
<script src="{{asset("assets/crossbrowserjs/respond.min.js")}}"></script>
<script src="{{asset("assets/crossbrowserjs/excanvas.min.js")}}"></script>
<![endif]-->
<script src="{{asset("assets/plugins/jquery-cookie/jquery.cookie.js")}}"></script>
<script src="{{asset("assets/js/apps.min.js")}}"></script>
<!-- ================== END BASE JS ================== -->

<script>
    $(document).ready(function() {
        App.init();
    });
</script>
</body>
</html>