@extends('admin.layouts.admin')

@section('content')
    <!-- begin #content -->
    <div id="content" class="content">
        <!-- begin breadcrumb -->
        <ol class="breadcrumb pull-right">
            <li><a href="javascript:;">Home</a></li>
            <li><a href="javascript:;">Page Options</a></li>
            <li class="active">Page with Wide Sidebar</li>
        </ol>
        <!-- end breadcrumb -->
        <!-- begin page-header -->
        <h1 class="page-header">Page with Wide Sidebar <small>header small text goes here...</small></h1>
        <!-- end page-header -->

        <div class="col-md-12 ui-sortable">
            <!-- begin panel -->
            <div class="panel panel-inverse" data-sortable-id="table-basic-5">
                <div class="panel-heading">
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                    </div>
                    <h4 class="panel-title">列表</h4>
                </div>
                <div class="panel-body">
                    <a href="#">
                        <button type="button" class="btn btn-primary m-r-5 m-b-5"><i class="fa fa-plus-square-o"></i> 新增</button>
                    </a>
                    <table class="table table-bordered table-hover tree_table" id="treeTable">
                        <thead>
                        <tr>
                            <th style="width: 20%;">学校名称</th>
                            <th style="width: 20%;">OPAC链接</th>
                            <th style="width: 20%;">目录权限</th>
                            <th style="width: 20%;">o</th>
                            <th style="width: 20%;">操作</th>
                        </tr>
                        </thead>
                        <tbody>

                        {{--@foreach($schools AS $school)--}}
                        {{--<tr id="{{$school->id}}" pid="1" class="1" previd="2" depth="2">--}}
                        {{--<td><span class="prev_span"><span class="vsStyle_node vsStyle_vertline"></span></span><span arrow="true" class="vsStyle_node vsStyle_leaf"></span>　<i class=""></i>{{$school->opac_name}}</td>--}}
                        {{--<td>{{$school->opac_url}}</td>--}}
                        {{--<td>{{$school->opac_name}}</td>--}}
                        {{--<td>{{$school->opac_ip}}</td>--}}
                        {{--<td><a href="#"><button type="button" class="btn btn-success btn-xs"><i class="fa fa-pencil"> 编辑</i></button></a> <a href="javascript:;" data-id="3" class="btn btn-danger btn-xs destroy"><i class="fa fa-trash"> 删除</i><form action="#" method="POST" name="delete_item_3" style="display:none"><input type="hidden" name="_method" value="DELETE"><input type="hidden" name="_token" value="jVCASDP4S3sHJ39X9Aqmo2ubCDC4EivA44lLKItG"></form></a> </td>--}}
                        {{--</tr>--}}
                        {{--@endforeach--}}
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- end panel -->
        </div>
    </div>
    <!-- end #content -->
@endsection