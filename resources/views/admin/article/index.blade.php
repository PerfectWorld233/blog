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
                            <th style="width: 2%;">序号</th>
                            <th style="width: 10%;">标题</th>
                            <th style="width: 10%;">内容</th>
                            <th style="width: 10%;">分类</th>
                            <th style="width: 10%;">标签</th>
                            <th style="width: 10%;">关键字</th>
                            <th style="width: 2%;">操作</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($articles AS $article)
                        <tr id="{{$article->id}}" pid="1" class="1" previd="2" depth="2">
                            <td><span class="prev_span"><span class="vsStyle_node vsStyle_vertline"></span></span><span
                                        arrow="true" class="vsStyle_node vsStyle_leaf"></span>　<i
                                        class=""></i>{{$article->id}}</td>
                            <td>{{$article->title}}</td>
                            <td>{{$article->content}}</td>
                            <td>{{$article->category}}</td>
                            <td>{{$article->tags}}</td>
                            <td>{{$article->keyword}}</td>
                        <td><a href="#"><button type="button" class="btn btn-success btn-xs"><i class="fa fa-pencil"> 编辑</i></button></a> <a href="javascript:;" data-id="3" class="btn btn-danger btn-xs destroy"><i class="fa fa-trash"> 删除</i><form action="#" method="POST" name="delete_item_3" style="display:none"><input type="hidden" name="_method" value="DELETE"><input type="hidden" name="_token" value="jVCASDP4S3sHJ39X9Aqmo2ubCDC4EivA44lLKItG"></form></a> </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- end panel -->
        </div>
    </div>
    <!-- end #content -->
@endsection