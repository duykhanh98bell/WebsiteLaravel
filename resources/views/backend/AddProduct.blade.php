@extends('layouts.admin')
@section('add')
<div class="col-md-6">
	<!-- general form elements -->
	<div class="box box-primary">
		<div class="box-header with-border">
			<h3 class="box-title">Product</h3>
		</div>
		<!-- /.box-header -->
		<!-- form start -->
		<form role="form" method="post" action="" enctype="multipart/form-data">
			@csrf
			
			<div class="box-body">
				<div class="form-group">
					<label for="exampleInputEmail1">Thêm Sản phẩm</label>
					<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập sản phẩm" name="pro_name">
				</div>
				@if($errors->pro_name)
				<div class="help-block">
					{!!$errors->first('pro_name')!!}
				</div>
				@endif
				<div class="form-group">
					<label for="exampleInputEmail1">Chọn danh mục</label>
					<select class="form-control" name="cat_id" id="">
						@foreach($ViewCategory as $ca)
						<option value="{{$ca->cat_id}}">{{$ca->cat_name}}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Chọn kiểu</label>
					<select class="form-control" name="style_id" id="">
						@foreach($ViewStyle as $st)
						<option value="{{$st->style_id}}">{{$st->style_name}}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Chọn cỡ</label>
					<select class="form-control" name="size_id" id="">
						@foreach($ViewSize as $si)
						<option value="{{$si->size_id}}">{{$si->size_numbers}}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Chọn màu</label>
					<select class="form-control" name="colors_id" id="">
						@foreach($ViewColors as $cl)
						<option value="{{$cl->colors_id}}">{{$cl->colors_name}}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Chọn thương hiệu</label>
					<select class="form-control" name="brand_id" id="">
						@foreach($ViewBrand as $br)
						<option value="{{$br->brand_id}}">{{$br->brand_name}}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Giá</label>
					<input type="number" class="form-control" id="exampleInputEmail1" placeholder="Nhập giá" name="price">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Giảm giá</label>
					<input type="number" class="form-control" id="exampleInputEmail1" placeholder="Giảm giá" name="sale_off">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Ảnh</label>
					<input type="file"  id="exampleInputEmail1" placeholder="" name="images">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Mô tả</label>
					<textarea class="form-control" id="" cols="30" rows="10" name="description" placeholder="Mô tả sản phẩm..."></textarea>
				</div>
				<div>
					<label>Trạng thái</label><br>
					<label>
						<input type="radio" name="status" value="1" checked="checked"> Còn <br>
						<input type="radio" name="status" value="0"> Hết
					</label>
				</div>
			</div>
			<!-- /.box-body -->

			<div class="box-footer">
				<button type="submit" class="btn btn-primary" name="addNew">Thêm mới</button>
			</div>
			<!-- <input type="hidden" name="_token" value="{{csrf_token()}}"> -->
		</form>
	</div>
	@stop()