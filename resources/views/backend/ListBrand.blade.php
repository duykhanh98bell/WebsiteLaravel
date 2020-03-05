@extends('layouts.admin')
@section('add')
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">Danh sách thương hiệu</h3>
				</div>
            
        </div>
        <!-- /.box -->

        <div class="box">
        	<!-- <div class="box-header">
        		<h3 class="box-title">Data Table With Full Features</h3>
        	</div> -->
        	<!-- /.box-header -->
        	<div class="box-body">
        		<div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
        		
        			<div class="row">
        				<div class="col-sm-12">
        					<table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
        						<thead>
        							<tr role="row">
        							
        								<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 910px;">stt</th>
        								<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 910px;">Tên thương hiệu</th>
        								<!-- <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 910px;">Trạng thái</th> -->
        								<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 910px;">Tạo</th>
        								<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 910px;">Cập nhật</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 910px;">Tùy chọn</th>
        							</tr>
        						</thead>
        						<tbody>
                      <?php $i=0; ?>
                     @foreach($ViewBrand as $br)
                     <?php $i++; ?>
        							<tr role="row" class="odd">
        								<td class="sorting_1"><?php echo $i; ?></td>
        								<td>{{$br->brand_name}}</td>
        								<td>{{$br->created_at}}</td>
        								<td>{{$br->updated_at}}</td>
                        <td>
                          <a href="{{URL::to('EditBrand/'.$br->brand_id)}}">Sửa</a>
                          <a onclick="return confirm('xác nhận xóa danh mục ')" href="{{URL::to('DeleteBrand/'.$br->brand_id)}}">Xóa</a>
                        </td>
        							</tr>
        							@endforeach
        						</tbody>
        								<!-- <tfoot>
        									<tr><th rowspan="1" colspan="1">Rendering engine</th><th rowspan="1" colspan="1">Browser</th><th rowspan="1" colspan="1">Platform(s)</th><th rowspan="1" colspan="1">Engine version</th><th rowspan="1" colspan="1">CSS grade</th></tr>
        								</tfoot> -->
        							</table>
        						</div>
        					</div>
        					<!-- <div class="row">
        						<div class="col-sm-5">
        							<div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
        						</div>
        						<div class="col-sm-7">
        							<div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
        								<ul class="pagination">
        									<li class="paginate_button previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0">Previous</a></li>
        									<li class="paginate_button active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0">1</a></li>
        									<li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0">2</a></li>
        									<li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0">3</a></li>
        									<li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0">4</a></li>
        									<li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0">5</a></li>
        									<li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0">6</a></li>
        									<li class="paginate_button next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0">Next</a></li>
        								</ul>
        							</div>
        						</div>
        					</div> -->
        				</div>
        			</div>
        			<!-- /.box-body -->
        		</div>
        		<!-- /.box -->
        	</div>
        	<!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    @stop()