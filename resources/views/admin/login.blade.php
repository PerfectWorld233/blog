<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Color Admin | Login Page</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />

	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<link href="{{asset("asset_admin/assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css")}}" rel="stylesheet" />
	<link href="{{asset("asset_admin/assets/plugins/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet" />
	<link href="{{asset("asset_admin/assets/plugins/font-awesome/css/font-awesome.min.css")}}" rel="stylesheet" />
	<link href="{{asset("asset_admin/assets/css/animate.min.css")}}" rel="stylesheet" />
	<link href="{{asset("asset_admin/assets/css/style.min.css")}}" rel="stylesheet" />
	<link href="{{asset("asset_admin/assets/css/style-responsive.min.css")}}" rel="stylesheet" />
	<link href="{{asset("asset_admin/assets/css/theme/default.css")}}" rel="stylesheet" id="theme" />
	<!-- ================== END BASE CSS STYLE ================== -->

	<!-- ================== BEGIN BASE JS ================== -->
	<script src="{{asset("asset_admin/assets/plugins/pace/pace.min.js")}}"></script>
	<!-- ================== END BASE JS ================== -->
</head>
<body class="pace-top">
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade in"><span class="spinner"></span></div>
	<!-- end #page-loader -->

	<div class="login-cover">
	    <div class="login-cover-image"><img src="{{asset("asset_admin/assets/img/login-bg/bg-1.jpg")}}" data-id="login-cover-image" alt="" /></div>
	    <div class="login-cover-bg"></div>
	</div>
	<!-- begin #page-container -->
	<div id="page-container" class="fade">
	    <!-- begin login -->
        <div class="login login-v2" data-pageload-addclass="animated fadeIn">
            <!-- begin brand -->
            <div class="login-header">
                <div class="brand">
                    <span class="logo"></span> 博客系统后台
                    <small></small>
                </div>
                <div class="icon">
                    <i class="fa fa-sign-in"></i>
                </div>
            </div>
            <!-- end brand -->
            <div class="login-content">
                <form action="{{url('admin/login')}}" method="POST" class="margin-bottom-0">
                    {!! csrf_field() !!}
                    <div class="form-group m-b-20">
                        <input type="text" class="form-control input-lg" placeholder="Account Number" required />
                    </div>
                    <div class="form-group m-b-20">
                        <input type="password" class="form-control input-lg" placeholder="Password" required />
                    </div>
                    <div class="checkbox m-b-20">
                        <label>
                            <input type="checkbox" /> 记住我的账号
                        </label>
                    </div>
                    <div class="login-buttons">
                        <button type="submit" class="btn btn-success btn-block btn-lg">登陆</button>
                    </div>
                    <div class="m-t-20">
                        Not a member yet? Click <a href="#">here</a> to register.
                    </div>
                </form>
            </div>
        </div>
        <!-- end login -->

        <ul class="login-bg-list clearfix">
            <li class="active"><a href="#" data-click="change-bg"><img src="{{asset("asset_admin/assets/img/login-bg/bg-1.jpg")}}" alt="" /></a></li>
            <li><a href="#" data-click="change-bg"><img src="{{asset("asset_admin/assets/img/login-bg/bg-2.jpg")}}" alt="" /></a></li>
            <li><a href="#" data-click="change-bg"><img src="{{asset("asset_admin/assets/img/login-bg/bg-3.jpg")}}" alt="" /></a></li>
            <li><a href="#" data-click="change-bg"><img src="{{asset("asset_admin/assets/img/login-bg/bg-4.jpg")}}" alt="" /></a></li>
            <li><a href="#" data-click="change-bg"><img src="{{asset("asset_admin/assets/img/login-bg/bg-5.jpg")}}" alt="" /></a></li>
            <li><a href="#" data-click="change-bg"><img src="{{asset("asset_admin/assets/img/login-bg/bg-6.jpg")}}" alt="" /></a></li>
        </ul>
	</div>
	<!-- end page container -->

	<!-- ================== BEGIN BASE JS ================== -->
	<script src="{{asset("asset_admin/assets/plugins/jquery/jquery-1.9.1.min.js")}}"></script>
	<script src="{{asset("asset_admin/assets/plugins/jquery/jquery-migrate-1.1.0.min.js")}}"></script>
	<script src="{{asset("asset_admin/assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js")}}"></script>
	<script src="{{asset("asset_admin/assets/plugins/bootstrap/js/bootstrap.min.js")}}"></script>
	<!--[if lt IE 9]>
		<script src="{{asset("asset_admin/assets/crossbrowserjs/html5shiv.js")}}"></script>
		<script src="{{asset("asset_admin/assets/crossbrowserjs/respond.min.js")}}"></script>
		<script src="{{asset("asset_admin/assets/crossbrowserjs/excanvas.min.js")}}"></script>
	<![endif]-->
	<script src="{{asset("asset_admin/assets/plugins/slimscroll/jquery.slimscroll.min.js")}}"></script>
	<script src="{{asset("asset_admin/assets/plugins/jquery-cookie/jquery.cookie.js")}}"></script>
	<!-- ================== END BASE JS ================== -->

	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="{{asset("asset_admin/assets/js/login-v2.demo.min.js")}}"></script>
	<script src="{{asset("asset_admin/assets/js/apps.min.js")}}"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->

	<script>
		$(document).ready(function() {
			App.init();
			LoginV2.init();
		});
	</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-53034621-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>
