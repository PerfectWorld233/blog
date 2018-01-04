<!-- begin #sidebar -->
<div id="sidebar" class="sidebar">
    <!-- begin sidebar scrollbar -->
    <div data-scrollbar="true" data-height="100%">
        <!-- begin sidebar user -->
        <ul class="nav">
            <li class="nav-profile">
                <div class="image">
                    <a href="javascript:;"><img src="{{asset('assets/img/user-13.jpg')}}" alt="" /></a>
                </div>
                <div class="info">
                    Sean Ngu
                    <small>Front end developer</small>
                </div>
            </li>
        </ul>
        <!-- end sidebar user -->
        <!-- begin sidebar nav -->
        <ul class="nav">
            <li class="nav-header">Navigation</li>
            <li class="has-sub active">
                <a href="{{url('admin')}}">
                    <i class="fa fa-laptop"></i>
                    <span >系统环境</span>
                </a>
            </li>
            <li class="has-sub">
                <a href="{{url('admin/article')}}">
                    <i class="fa fa-inbox"></i>
                    <span>文章列表</span>
                </a>
                <ul class="sub-menu">
                    {{--<li><a href="{{url('admin/school')}}">学校列表</a></li>--}}
                    <li><a href="#">Inbox v2</a></li>
                    <li><a href="#">Compose</a></li>
                    <li><a href="#">Detail</a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="{{url('admin/article/create')}}">
                    <b class="caret pull-right"></b>
                    <i class="fa fa-suitcase"></i>
                    <span>文章发布</span>
                </a>
                {{--<ul class="sub-menu">--}}
                    {{--<li><a href="{{url('admin/resource')}}">资源列表</a></li>--}}
                    {{--<li><a href="{{url('admin/sourcetype')}}">资源库类型</a></li>--}}
                    {{--<li><a href="#">Tabs & Accordions</a></li>--}}
                {{--</ul>--}}
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="fa fa-file-o"></i>
                    <span>日志管理</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="{{url('admin/loguser')}}">前台登陆日志</a></li>
                    <li><a href="{{url('admin/logadmin')}}">后台登陆日志</a></li>
                    <li><a href="index.html#ajax/form_slider_switcher.html">Form Slider + Switcher</a></li>
                    <li><a href="index.html#ajax/form_validation.html">Form Validation</a></li>
                    <li><a href="index.html#ajax/form_wizards.html">Wizards</a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="{{url('admin/tag')}}">
                    <b class="caret pull-right"></b>
                    <i class="fa fa-th"></i>
                    <span>标签管理</span>
                </a>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="fa fa-star"></i>
                    <span>Front End <span class="label label-theme m-l-5">NEW</span></span>
                </a>
                <ul class="sub-menu">
                    <li><a href="../../frontend/one-page-parallax/template_content_html/index.html" target="_blank">One Page Parallax</a></li>
                    <li><a href="../../frontend/blog/template_content_html/index.html" target="_blank">Blog</a></li>
                    <li><a href="../../frontend/forum/template_content_html/index.html" target="_blank">Forum</a></li>
                    <li><a href="../../frontend/e-commerce/template_content_html/index.html" target="_blank">E-Commerce <i class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="fa fa-envelope"></i>
                    <span>Email Template</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="email_system.html">System Template</a></li>
                    <li><a href="email_newsletter.html">Newsletter Template</a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="{{url('admin/config')}}">
                    <b class="caret pull-right"></b>
                    <i class="fa fa-area-chart"></i>
                    <span>网站配置项</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="index.html#ajax/chart-flot.html">Flot Chart</a></li>
                    <li><a href="index.html#ajax/chart-morris.html">Morris Chart</a></li>
                    <li><a href="index.html#ajax/chart-js.html">Chart JS</a></li>
                    <li><a href="index.html#ajax/chart-d3.html">d3 Chart</a></li>
                </ul>
            </li>
            <li><a href="index.html#ajax/calendar.html"><i class="fa fa-calendar"></i> <span>Calendar</span></a></li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="fa fa-map-marker"></i>
                    <span>Map</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="index.html#ajax/map_vector.html">Vector Map</a></li>
                    <li><a href="index.html#ajax/map_google.html">Google Map</a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="fa fa-camera"></i>
                    <span>Gallery</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="index.html#ajax/gallery.html">Gallery v1</a></li>
                    <li><a href="index.html#ajax/gallery_v2.html">Gallery v2</a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="fa fa-cogs"></i>
                    <span>Page Options</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="index.html#ajax/page_blank.html">Blank Page</a></li>
                    <li><a href="index.html#ajax/page_with_footer.html">Page with Footer</a></li>
                    <li><a href="page_without_sidebar.html">Page without Sidebar</a></li>
                    <li><a href="page_full_height.html">Full Height Content</a></li>
                    <li class="active"><a href="page_with_wide_sidebar.html">Page with Wide Sidebar</a></li>
                    <li><a href="page_boxed_layout_with_mixed_menu.html">Boxed Layout with Mixed Menu</a></li>
                    <li><a href="page_with_transparent_sidebar.html">Page with Transparent Sidebar</a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="fa fa-gift"></i>
                    <span>Extra</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="index.html#ajax/extra_timeline.html">Timeline</a></li>
                    <li><a href="extra_coming_soon.html">Coming Soon Page</a></li>
                    <li><a href="index.html#ajax/extra_search_results.html">Search Results</a></li>
                    <li><a href="index.html#ajax/extra_invoice.html">Invoice</a></li>
                    <li><a href="index.html#ajax/extra_404_error.html">404 Error Page</a></li>
                    <li><a href="index.html#ajax/extra_profile.html">Profile Page</a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="fa fa-key"></i>
                    <span>Login</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="login.html">Login</a></li>
                    <li><a href="login_v2.html">Login v2</a></li>
                    <li><a href="login_v3.html">Login v3</a></li>
                    <li><a href="register_v3.html">Register v3</a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="fa fa-medkit"></i>
                    <span>Helper</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="index.html#ajax/helper_css.html">Predefined CSS Classes</a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="fa fa-cubes"></i>
                    <span>Version <span class="label label-theme m-l-5">NEW</span></span>
                </a>
                <ul class="sub-menu">
                    <li><a href="../template_content_html/index.html">HTML</a></li>
                    <li><a href="javascript:;">AJAX</a></li>
                    <li><a href="../template_content_angularjs/index.html">ANGULAR JS</a></li>
                    <li><a href="../template_content_material/index.html">MATERIAL DESIGN<i class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="fa fa-align-left"></i>
                    <span>系统管理</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="{{url('/admin/info')}}">意见反馈</a></li>

                    <li><a href="{{url('/admin/info')}}">系统设置</a></li>
                </ul>
            </li>
            <!-- begin sidebar minify button -->
            <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
            <!-- end sidebar minify button -->
        </ul>
        <!-- end sidebar nav -->
    </div>
    <!-- end sidebar scrollbar -->
</div>
<div class="sidebar-bg"></div>
<!-- end #sidebar -->