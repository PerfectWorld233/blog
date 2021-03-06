<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <title>Color Admin | Page with Wide Sidebar</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    <!-- ================== BEGIN BASE CSS STYLE ================== -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="{{asset('asset_admin/assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css')}}" rel="stylesheet" />
    <link href="{{asset('asset_admin/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('asset_admin/assets/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" />
    <link href="{{asset('asset_admin/assets/css/animate.min.css')}}" rel="stylesheet" />
    <link href="{{asset('asset_admin/assets/css/style.min.css')}}" rel="stylesheet" />
    <link href="{{asset('asset_admin/assets/css/style-responsive.min.css')}}" rel="stylesheet" />
    <link href="{{asset('asset_admin/assets/css/theme/default.css')}}" rel="stylesheet" id="theme" />
    <!-- ================== END BASE CSS STYLE ================== -->

    <!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
    <link href="{{asset("asset_admin/assets/plugins/bootstrap-wysihtml5/dist/bootstrap3-wysihtml5.min.css")}}" rel="stylesheet" />
    <!-- ================== END PAGE LEVEL STYLE ================== -->

    <!-- ================== BEGIN BASE JS ================== -->
    <script src="{{asset('asset_admin/assets/plugins/pace/pace.min.js')}}"></script>
    <!-- ================== END BASE JS ================== -->
</head>
<body>
<!-- begin #page-loader -->
<div id="page-loader" class="fade in"><span class="spinner"></span></div>
<!-- end #page-loader -->

<!-- begin #page-container -->
<div id="page-container" class="fade page-sidebar-fixed page-header-fixed page-with-wide-sidebar">
    @include('admin.layouts.header')

    @include('admin.layouts.sidebar')

    @yield('content')

    @include('admin.layouts.theme')

    <!-- begin scroll to top btn -->
    <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
    <!-- end scroll to top btn -->
</div>
<!-- end page container -->

<!-- ================== BEGIN BASE JS ================== -->
<script src="{{asset('/asset_admin/assets/plugins/jquery/jquery-1.9.1.min.js')}}"></script>
<script src="{{asset('/asset_admin/assets/plugins/jquery/jquery-migrate-1.1.0.min.js')}}"></script>
<script src="{{asset('/asset_admin/assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js')}}"></script>
<script src="{{asset('/asset_admin/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<!--[if lt IE 9]>
<script src="{{asset('/asset_admin/assets/crossbrowserjs/html5shiv.js')}}"></script>
<script src="{{asset('/asset_admin/assets/crossbrowserjs/respond.min.js')}}"></script>
<script src="{{asset('/asset_admin/assets/crossbrowserjs/excanvas.min.js')}}"></script>
<![endif]-->
<script src="{{asset('/asset_admin/assets/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('/asset_admin/assets/plugins/jquery-cookie/jquery.cookie.js')}}"></script>
<!-- ================== END BASE JS ================== -->

<!-- ================== BEGIN PAGE LEVEL JS ================== -->
<script src="{{asset('/asset_admin/assets/js/apps.min.js')}}"></script>
<script src="{{asset("/asset_admin/assets/plugins/ckeditor/ckeditor.js")}}"></script>
<script src="{{asset("/asset_admin/assets/plugins/bootstrap-wysihtml5/dist/bootstrap3-wysihtml5.all.min.js")}}"></script>
<script src="{{asset("/asset_admin/assets/js/form-wysiwyg.demo.min.js")}}"></script>
<!-- ================== END PAGE LEVEL JS ================== -->

<script>
    $(document).ready(function() {
        App.init();
        FormWysihtml5.init();
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
