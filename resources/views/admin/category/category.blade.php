@extends('admin.layouts.master')
@section('content')
@if(session('success'))
<div class="alert alert-info">
	{{session('success')}}
</div>
@endif

<div class="container">
	<div class="card-deck">
		<div class="card col-lg-12 px-0 mb-4">
			<div class="card-body">
				<div class="row">
					<div class="col-md-8">

						<h1 class="card-title">DANH MỤC</h1>
						<a href="{{route('history-category')}}">Lịch sử xóa</a>
					</div>
					<div class="col-md-2">
						<button class="mb-2 btn btn-primary"><a href="{{route('create-category')}}" style="color:#ffffff; text-transform: uppercase; font-size: 20px;"><i class="fas fa-plus-circle" style="font-size: 30px"></i> Thêm mới</a></button>
					</div>
				</div>
				<div class="table-responsive">
					<table class="table center-aligned-table">
						<thead>
							<tr class="text-primary">
								<th>ID</th>
								<th>Tên danh mục</th>
								<th>Ngày đăng</th>
								<th class="pl-5">Action</th>

							</tr>
						</thead>
						<tbody id="dataCategory">
							@foreach($category as $category)
							<tr class="">
								<td>{{$category->id}}</td>
								<td>{{$category->name}}</td>
								<td>
									<?php 
										echo Carbon\Carbon::createFromTimeStamp(strtotime($category->created_at))->diffForHumans();;
									 ?>
								</td>
								<td>
									<a title="xem sản phẩm" href="{{route('show-category',$category->id)}}"><button class="btn btn-outline-info"><i class="far fa-eye"></i></button></a>
									<a title="Sửa danh mục" href="{{route('edit-category',$category->id)}}"><button class="btn btn-outline-info"><i class="fas fa-pencil-alt"></i></button></a>
									<a title="Xóa danh mục" onclick="return confirm('Bạn có muốn xóa không')" href="{{route('delete-category',$category->id)}}"><button class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button></a>
								</td>    
							</tr>
							@endforeach

						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Modal save category-->
<!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" >
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tiêu đề</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body form-modal">
				<form id="form-cate" action="" method="">
					@csrf
					<select class="form-control" name="parent" id="parent">
						<option value="1">Điện Thoại</option>
						<option value="10">Ốp lưng</option>
					</select>
					<div  class="form-group">
						<label for="">Tên thể loại</label>
						<input id="name" name="name" type="text" class="form-control">
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button  type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button id="saveCategory" class="btn btn-primary ">Save</button>
				
			</div>
		</div>
	</div>
</div> -->
<!-- Modal edit Category -->
<!-- <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" >
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tiêu đề</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body form-modal2">
				
			</div>
			<div class="modal-footer">
				<button  type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button id="editCate" class="btn btn-primary ">Save</button>
				
			</div>
		</div>
	</div>
</div> -->
<!-- <script  type="text/javascript">
	

	$('#showModal').click(function(){
		// alert('đ');
		var modal= $(this).attr('data-target');
		console.log(modal);
		$( '#form-cate' ).attr({
			action : '/categories',
			method : 'POST'
		}
		);

		$.ajax({
			url : 'api/categories',
			type : 'GET',
			data : {},
			success : function(result) {
				console.log(result);
			},
			error: function(error)
			{
				console.log(error);
			}

		});
	});
	$('#editCate').click(function(event) {
		/* Act on the event */
		$('#form-cate').attr({
			action: '/categories/'+cateId,
			method: 'POST'
		});
		
	});
</script> -->
@endsection
