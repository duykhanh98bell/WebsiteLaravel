@extends('layouts.admin')
@section('add')
<div class="col-md-6">
	<!-- general form elements -->
	<div class="box box-primary">
		<div class="box-header with-border">
			<h3 class="box-title">Category</h3>
		</div>
		<!-- /.box-header -->
		<!-- form start -->
		<form role="form" method="post" action="">
			@csrf
			
			<div class="box-body">
				<div class="form-group">
					<label for="exampleInputEmail1">Sửa danh mục</label>
					<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập danh mục" name="cate_name" value="{{$viewEdit->cate_name}}">
				</div>
				<!-- <div class="form-group">
					<label for="exampleInputPassword1">Password</label>
					<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
				</div> -->
				<!-- <div class="form-group">
					<label for="exampleInputFile">File input</label>
					<input type="file" id="exampleInputFile">
				
					<p class="help-block">Example block-level help text here.</p>
				</div> -->
				<div class="checkbox">
					<label>
						<input type="radio" name="status" value="1" @if($viewEdit->status==1) checked="" @endif > Còn <br>
						<input type="radio" name="status" value="0" @if($viewEdit->status==0) checked="" @endif> Hết
					</label>
				</div>
			</div>
			<!-- /.box-body -->

			<div class="box-footer">
				<button type="submit" class="btn btn-primary" name="addNew">Cập nhật</button>
			</div>
			<!-- <input type="hidden" name="_token" value="{{csrf_token()}}"> -->
		</form>
	</div>
</div>
@stop()