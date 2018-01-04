@extends('admin.layouts.admin')

@section('content')

	<!-- begin #content -->
	<div id="content" class="content">
		<!-- begin breadcrumb -->
		<ol class="breadcrumb pull-right">
			<li><a href="javascript:;">Home</a></li>
			<li><a href="javascript:;">Form Stuff</a></li>
			<li class="active">Form WYSIWYG</li>
		</ol>
		<!-- end breadcrumb -->
		<!-- begin page-header -->
		<h1 class="page-header">Form WYSIWYG <small>header small text goes here...</small></h1>
		<!-- end page-header -->

		<!-- begin row -->
		<div class="row">
			<!-- begin col-12 -->
			<div class="col-md-12">
				<!-- begin panel -->
				<div class="panel panel-inverse" data-sortable-id="form-wysiwyg-1">
					<div class="panel-heading">
						<div class="panel-heading-btn">
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
						</div>
						<h4 class="panel-title">CKEditor</h4>
					</div>
					<div class="panel-body panel-form">
						<form class="form-horizontal" action="{{url('admin/article')}}" method="POST">
							{{--{!! csrf_field() !!}--}}
							{!! csrf_field() !!}
							<div class="form-group">
								<label for="inputBookname" class="col-sm-2 control-label">文章标题</label>
								<div class="col-sm-9">
									<input id="inputBookname" class="form-control" placeholder="文章标题" name="title" type="text" value="">
									<font color="red"></font>
								</div>
							</div>

							<div class="form-group">
								<label for="inputBookname" class="col-sm-2 control-label">文章分类</label>
								<div class="col-sm-9">
									<input id="inputBookname" class="form-control" placeholder="文章分类" name="category" type="text" value="">
									<font color="red"></font>
								</div>
							</div>

							<div class="form-group">
								<label for="inputBookname" class="col-sm-2 control-label">标签</label>
								<div class="col-sm-9">
									<input id="inputBookname" class="form-control" placeholder="标签" name="tags" type="text" value="">
									<font color="red"></font>
								</div>
							</div>

							<div class="form-group">
								<label for="inputBookname" class="col-sm-2 control-label">作者</label>
								<div class="col-sm-9">
									<input id="inputBookname" class="form-control" placeholder="作者" name="author" type="text" value="">
									<font color="red"></font>
								</div>
							</div>

							<div class="form-group">
								<label for="inputBookname" class="col-sm-2 control-label">关键词</label>
								<div class="col-sm-9">
									<input id="inputBookname" class="form-control" placeholder="关键词" name="keyword" type="text" value="">
									<font color="red"></font>
								</div>
							</div>

							<div class="form-group">
								<label for="inputBookname" class="col-sm-2 control-label">文章内容</label>
								<div class="col-sm-9">
									<textarea class="ckeditor" id="editor1" name="editor1" rows="20"></textarea>															<font color="red"></font>
								</div>
							</div>

							<div class="form-group">

								<div class="col-sm-offset-2 col-sm-10">
									<button type="submit" class="btn btn-success">添加</button>
									{{--<input class="btn btn-success" type="submit" value="添加">--}}
								</div>
							</div>
						</form>
					</div>
				</div>
				<!-- end panel -->
			</div>
			<!-- end col-12 -->
		</div>
		<!-- end row -->

	</div>
	<!-- end #content -->

@endsection