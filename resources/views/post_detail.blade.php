<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Color Admin | Blog Concept Front End Theme</title>
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
                        COLOR ADMIN
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
                    <li><a href="about_me.html">ABOUT ME</a></li>
                    <li><a href="contact_us.html">CONTACT US</a></li>
                    <li><a href="https://wrapbootstrap.com/theme/color-admin-admin-template-front-end-WB0N89JMK">PURCHASE</a></li>
                </ul>
            </div>
            <!-- end navbar-collapse -->
        </div>
        <!-- end container -->
    </div>
    <!-- end #header -->
    
    <!-- begin #content -->
    <div id="content" class="content">
        <!-- begin container -->
        <div class="container">
            <!-- begin row -->
            <div class="row row-space-30">
                <!-- begin col-9 -->
                <div class="col-md-9">
                    <!-- begin post-detail -->
                    <div class="post-detail section-container">
                        <ul class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Sports</a></li>
                            <li class="active">Bootstrap Carousel Blog Post</li>
                        </ul>
                        <h4 class="post-title">
                            <a href="post_detail.html">Bootstrap Carousel Blog Post</a>
                        </h4>
                        <div class="post-by">
                            Posted By <a href="#">admin</a> <span class="divider">|</span> 10 June 2015 <span class="divider">|</span> <a href="#">Sports</a>, <a href="#">Mountain</a>, <a href="#">Bike</a> <span class="divider">|</span> 2 Comments
                        </div>
                        <!-- begin post-image -->
                        <div class="post-image">
                            <img src="{{asset("assets/img/post1.jpg")}}" alt="" />
                        </div>
                        <!-- end post-image -->
                        <!-- begin post-desc -->
                        <div class="post-desc">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed commodo eget quam sed tempor. 
                                Morbi vel libero eget urna interdum accumsan nec non nibh. Nam aliquam id ligula convallis egestas. 
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum lacinia lectus nibh, nec 
                                pellentesque lorem iaculis ut. Cras finibus arcu eget feugiat hendrerit. Suspendisse quis 
                                molestie velit. In hendrerit justo ac magna tristique viverra. Pellentesque rhoncus metus 
                                eget ex sagittis lacinia. In at dapibus erat. Phasellus imperdiet dui risus, eget efficitur 
                                tortor egestas nec. Integer fermentum sit amet mauris sollicitudin pulvinar.
                                Quisque et viverra leo. Suspendisse neque nisi, lacinia facilisis sem ac, tincidunt lacinia augue. 
                                Etiam in dapibus nisl, non blandit urna. Proin scelerisque venenatis vestibulum. 
                                Proin iaculis finibus turpis, eget rhoncus tortor tempor a.
                            </p>
                        </div>
                        <!-- end post-desc -->
                        <!-- begin post-image -->
                        <div class="post-image">
                            <img src="{{asset("assets/img/post2.jpg")}}" alt="" />
                        </div>
                        <!-- end post-image -->
                        <!-- begin post-desc -->
                        <div class="post-desc">
                            <p>
                                Donec ipsum augue, commodo in eleifend sit amet, pretium sed eros. 
                                Proin convallis ligula nec dolor ullamcorper dictum. Nullam dapibus pulvinar mi 
                                tristique rhoncus. Curabitur eget dolor sit amet ante pretium ultricies ut vel nisi. 
                                Vivamus vulputate feugiat ex, vitae vestibulum tortor eleifend id. Maecenas non justo leo. 
                                Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut venenatis tempus tortor, 
                                quis ultrices ligula lacinia et. Donec et lacus et felis viverra mollis. Ut sit amet urna 
                                et lectus eleifend vulputate ut at ex. Maecenas pulvinar nulla id elit maximus, vitae 
                                luctus augue porta. In consequat hendrerit mollis. Nam in justo non nunc placerat 
                                ultrices sed quis orci.
                            </p>
                        </div>
                        <!-- end post-desc -->
                        <!-- begin post-image -->
                        <div class="post-image">
                            <img src="{{asset("assets/img/post3.jpg")}}" alt="" />
                        </div>
                        <!-- end post-image -->
                        <!-- begin post-desc -->
                        <div class="post-desc">
                            <p>
                                Aenean lacinia lorem id lectus malesuada eleifend. Integer porttitor commodo imperdiet. 
                                Ut id lacus diam. Pellentesque fringilla vitae eros a varius. Aenean vitae massa sem. 
                                Curabitur at interdum neque. Class aptent taciti sociosqu ad litora torquent per conubia nostra, 
                                per inceptos himenaeos. Aenean eget dui consectetur, sollicitudin ligula non, molestie orci. 
                                Fusce congue tempor lacus. Proin in tortor a est fermentum interdum a at ipsum.
                            </p>
                            <p>
                                Suspendisse nec molestie enim. Aliquam laoreet rhoncus erat, vel gravida purus dictum dignissim. 
                                Nam commodo tellus et aliquam consequat. Aliquam sed fringilla sem, et ullamcorper magna. 
                                Donec cursus a nulla et posuere. Nunc semper mattis tortor, nec tristique mi vehicula eget. 
                                Phasellus eget velit quam. Nunc placerat pellentesque bibendum. Nunc vestibulum facilisis purus,
                                eu dapibus diam placerat nec. Aliquam elementum neque quis fringilla mattis.
                            </p>
                        </div>
                        <!-- end post-desc -->
                    </div>
                    <!-- end post-detail -->
                    
                    <!-- begin section-container -->
                    <div class="section-container">
                        <h4 class="section-title"><span>All Comments (3)</span></h4>
                        <!-- begin comment-list -->
                        <ul class="comment-list">
                            <li>
                                <!-- begin comment-avatar -->
                                <div class="comment-avatar">
                                    <i class="fa fa-user"></i>
                                </div>
                                <!-- end comment-avatar -->
                                <!-- begin comment-container -->
                                <div class="comment-container">
                                    <div class="comment-author">
                                        Aquila Erik 
                                        <span class="comment-date">
                                            on <span class="underline">June 6, 2015</span> at <span class="underline">6:17 pm</span>
                                        </span>
                                    </div>
                                    <div class="comment-content">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec gravida blandit risus at finibus. 
                                        In suscipit ligula velit, vel commodo libero viverra nec. Aenean luctus eleifend enim quis luctus. 
                                        Aliquam vulputate placerat ullamcorper.
                                    </div>
                                    <div class="comment-btn pull-left">
                                        <a href="#"><i class="fa fa-reply"></i> Reply</a>
                                    </div>
                                    <div class="comment-rating">
                                        Like or Dislike: 
                                        <a href="#" class="m-l-10 text-inverse"><i class="fa fa-thumbs-up text-success"></i> 154</a>
                                        <a href="#" class="m-l-10 text-inverse"><i class="fa fa-thumbs-down text-danger"></i> 112</a>
                                    </div>
                                    <!-- begin comment-list -->
                                    <ul class="comment-list">
                                        <li>
                                            <!-- begin comment-avatar -->
                                            <div class="comment-avatar">
                                                <i class="fa fa-user"></i>
                                            </div>
                                            <!-- end comment-avatar -->
                                            <!-- begin comment-container -->
                                            <div class="comment-container">
                                                <div class="comment-author">
                                                    Gevorg Silvester 
                                                    <span class="comment-date">
                                                        on <span class="underline">June 6, 2015</span> at <span class="underline">8:17 pm</span>
                                                    </span>
                                                </div>
                                                <div class="comment-content">
                                                    Quisque aliquam arcu nec nibh eleifend, ac varius ante lacinia. 
                                                    Nam nec varius enim, vel mollis dui. Duis malesuada lorem metus, 
                                                    ut placerat turpis vulputate vitae.
                                                </div>
                                                <div class="comment-btn pull-left">
                                                    <a href="#"><i class="fa fa-reply"></i> Reply</a>
                                                </div>
                                                <div class="comment-rating">
                                                    Like or Dislike: 
                                                    <a href="#" class="m-l-10 text-inverse"><i class="fa fa-thumbs-up text-success"></i> 5</a> 
                                                    <a href="#" class="m-l-10 text-inverse"><i class="fa fa-thumbs-down text-danger"></i> 0</a>
                                                </div>
                                            </div>
                                            <!-- end comment-container -->
                                        </li>
                                    </ul>
                                    <!-- end comment-list -->
                                </div>
                                <!-- end comment-container -->
                            </li>
                            <li>
                                <!-- begin comment-avatar -->
                                <div class="comment-avatar">
                                    <img src="{{asset("assets/img/user-1.jpg")}}" alt="" />
                                </div>
                                <!-- end comment-avatar -->
                                <!-- begin comment-container -->
                                <div class="comment-container">
                                    <div class="comment-author">
                                        Isador Ennio 
                                        <span class="comment-date">
                                            on <span class="underline">June 6, 2015</span> at <span class="underline">11:23 pm</span>
                                        </span>
                                    </div>
                                    <div class="comment-content">
                                        Fusce urna massa, pellentesque eget interdum nec, lacinia nec velit.
                                    </div>
                                    <div class="comment-btn pull-left">
                                        <a href="#"><i class="fa fa-reply"></i> Reply</a>
                                    </div>
                                    <div class="comment-rating">
                                        Like or Dislike: 
                                        <a href="#" class="m-l-10 text-inverse"><i class="fa fa-thumbs-up text-success"></i> 2</a> 
                                        <a href="#" class="m-l-10 text-inverse"><i class="fa fa-thumbs-down text-danger"></i> 0</a>
                                    </div>
                                </div>
                                <!-- end comment-container -->
                            </li>
                        </ul>
                        <!-- end comment-list -->
                    </div>
                    <!-- end section-container -->
                    
                    <!-- begin section-container -->
                    <div class="section-container">
                        <h4 class="section-title m-b-20"><span>Add a Comment</span></h4>
                        <div class="alert alert-warning f-s-12">
                            Suspendisse vulputate pulvinar nisl, quis rutrum risus pretium ut. Nulla at risus facilisis, consectetur erat nec, 
                            posuere justo. Ut elementum, elit pellentesque eleifend semper, elit metus venenatis libero, 
                            non fermentum mi est eu neque. Ut vel metus eget tortor viverra varius et quis eros.
                        </div>
                        <form class="form-horizontal" action="" method="POST">
                            <div class="form-group">
                                <label class="control-label f-s-12 col-md-2">Your Name <span class="text-danger">*</span></label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label f-s-12 col-md-2">Your Email <span class="text-danger">*</span></label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label f-s-12 col-md-2">Comment <span class="text-danger">*</span></label>
                                <div class="col-md-10">
                                    <textarea class="form-control" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-10 col-md-offset-2">
                                    <div class="checkbox f-s-12">
                                        <label>
                                            <input type="checkbox" name="email_notify" value="1" />
                                            Notify me of follow-up comments by email.
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-10 col-md-offset-2">
                                    <button type="submit" class="btn btn-inverse btn-lg">Submit Comment</button>
                                </div>
                            </div>
                        </form> 
                    </div>
                    <!-- end section-container -->
                </div>
                <!-- end col-9 -->
                <!-- begin col-3 -->
                <div class="col-md-3">
                    <!-- begin section-container -->
                    <div class="section-container">
                        <div class="input-group sidebar-search">
                            <input type="text" class="form-control" placeholder="Search Our Stories..." />
                            <span class="input-group-btn">
                                <button class="btn btn-inverse" type="button"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </div>
                    <!-- end section-container -->
                    <!-- begin section-container -->
                    <div class="section-container">
                        <h4 class="section-title"><span>Categories</span></h4>
                        <ul class="sidebar-list">
                            <li><a href="#">Sports (20)</a></li>
                            <li><a href="#">Outdoor Sports (45)</a></li>
                            <li><a href="#">Indoor Sports (1,292)</a></li>
                            <li><a href="#">Video Shooting (12)</a></li>
                            <li><a href="#">Drone (229)</a></li>
                            <li><a href="#">Uncategorized (1,482)</a></li>
                        </ul>
                    </div>
                    <!-- end section-container -->
                    <!-- begin section-container -->
                    <div class="section-container">
                        <h4 class="section-title"><span>Recent Post</span></h4>
                        <ul class="sidebar-recent-post">
                            <li>
                                <div class="info">
                                    <h4 class="title"><a href="#">Lorem ipsum dolor sit amet.</a></h4>
                                    <div class="date">23 December 2015</div>
                                </div>
                            </li>
                            <li>
                                <div class="info">
                                    <h4 class="title"><a href="#">Vestibulum a cursus arcu.</a></h4>
                                    <div class="date">16 December 2015</div>
                                </div>
                            </li>
                            <li>
                                <div class="info">
                                    <h4 class="title"><a href="#">Nullam vel condimentum lectus. </a></h4>
                                    <div class="date">7 December 2015</div>
                                </div>
                            </li>
                            <li>
                                <div class="info">
                                    <h4 class="title"><a href="#">Proin in dui egestas libero posuere ullamcorper. </a></h4>
                                    <div class="date">20 November 2015</div>
                                </div>
                            </li>
                            <li>
                                <div class="info">
                                    <h4 class="title"><a href="#">Interdum et malesuada fames ac ante.</a></h4>
                                    <div class="date">5 November 2015</div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- end section-container -->
                    <!-- begin section-container -->
                    <div class="section-container">
                        <h4 class="section-title"><span>Follow Us</span></h4>
                        <ul class="sidebar-social-list">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <!-- end section-container -->
                </div>
                <!-- end col-3 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
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
    <!-- begin theme-panel -->
    <div class="theme-panel">
        <a href="javascript:;" data-click="theme-panel-expand" class="theme-collapse-btn"><i class="fa fa-cog"></i></a>
        <div class="theme-panel-content">
            <ul class="theme-list clearfix">
                <li><a href="javascript:;" class="bg-purple" data-theme="purple" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Purple">&nbsp;</a></li>
                <li><a href="javascript:;" class="bg-blue" data-theme="blue" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Blue">&nbsp;</a></li>
                <li class="active"><a href="javascript:;" class="bg-green" data-theme="default" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Default">&nbsp;</a></li>
                <li><a href="javascript:;" class="bg-orange" data-theme="orange" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Orange">&nbsp;</a></li>
                <li><a href="javascript:;" class="bg-red" data-theme="red" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Red">&nbsp;</a></li>
            </ul>
        </div>
    </div>
    <!-- end theme-panel -->
    
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