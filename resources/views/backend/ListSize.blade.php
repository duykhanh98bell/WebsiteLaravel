@extends('layouts.admin')
@section('add')
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">Danh sách Cỡ</h3>
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
        								<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 910px;">Cỡ</th>
        								<!-- <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 910px;">Trạng thái</th> -->
        								<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 910px;">Tạo</th>
        								<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 910px;">Cập nhật</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 910px;">Tùy chọn</th>
        							</tr>
        						</thead>
        						<tbody>
                                    <?php $i=0; ?>
                                      @foreach($ViewSize as $si)
                                      <?php $i++; ?>
        							<tr role="row" class="odd">
        								<td class="sorting_1"><?php echo $i; ?></td>
        								<td>{{$si->size_numbers}}</td>
        								<td>{{$si->created_at}}</td>
        								<td>{{$si->updated_at}}</td>
                                        <td>
                                          <a href="{{URL::to('EditSize/'.$si->size_id)}}">Sửa</a>
                                          <a onclick="return confirm('xác nhận xóa danh mục ')" href="{{URL::to('DeleteSize/'.$si->size_id)}}">Xóa</a>
                                        </td>
        							</tr>
        							@endforeach
        						</tbody>
        								
        							</table>
        						</div>
        					</div>
        					
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