@extends('admin.layouts.admin')

@section('content')

    <!-- begin #content -->
    <div id="content" class="content">
        <!-- begin breadcrumb -->
        <ol class="breadcrumb pull-right">
            <li><a href="javascript:;">Home</a></li>
            <li><a href="javascript:;">Tables</a></li>
            <li class="active">Basic Tables</li>
        </ol>
        <!-- end breadcrumb -->
        <!-- begin page-header -->
        <h1 class="page-header">系统环境 <small></small></h1>
        <!-- end page-header -->

        <!-- begin row -->
        <div class="row">
            <!-- begin col-6 -->
            <div class="col-md-12 ui-sortable">
                <!-- begin panel -->
                <div class="panel panel-inverse" data-sortable-id="table-basic-4">
                    <div class="panel-heading">
                        <div class="panel-heading-btn">
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand" data-original-title="" title=""><i class="fa fa-expand"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload" data-original-title="" title=""><i class="fa fa-repeat"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                        </div>
                        <h4 class="panel-title">系统环境</h4>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <tbody>
                            <tr>
                                <td>操作系统</td>
                                <td>{{PHP_OS}}</td>
                            </tr>
                            <tr>
                                <td>运行环境</td>
                                <td>{{$_SERVER['SERVER_SOFTWARE']}}</td>
                            </tr>
                            <tr>
                                <td>上传附件限制</td>
                                <td>{{get_cfg_var("upload_max_filesize") ? get_cfg_var("upload_max_filesize") : "不允许上传附件"}}</td>
                            </tr>
                            <tr>
                                <td>服务器时间</td>
                                <td>{{date('Y年m月d日 H时i分s秒')}}</td>
                            </tr>
                            <tr>
                                <td>服务器域名/IP</td>
                                <td>{{ $_SERVER['HTTP_HOST']}} [{{$_SERVER['SERVER_ADDR'] }}]</td>
                            </tr>
                            <tr>
                                <td>Host</td>
                                <td>{{$_SERVER['REMOTE_ADDR']}}</td>
                            </tr>
                            <tr>
                                <td>版本</td>
                                <td>v1.0.0</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- end panel -->
            </div>
            <!-- end col-6 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end #content -->

@endsection