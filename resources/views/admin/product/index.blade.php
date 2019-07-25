@extends('admin.layouts.master')
@section('content')
<div class="container">
	<div class="card-deck">
		<div class="card col-lg-12 px-0 mb-4">
			<div class="card-body">
				<div class="row">
					<div class="col-md-10">
						<h5 class="card-title">Sản Phẩm</h5>
					</div>
					<div class="col-md-2">
						<button class="mb-2 btn btn-primary"><a href="{{route('create-product')}}">Thêm mới</a></button>			
					</div>
				</div>
				<div class="table-responsive">
					<table class="table center-aligned-table">
						<thead>
							<tr class="text-primary">
								<th>STT</th>
								<th>Tên Sản Phẩm</th>
								<th>Mô Tả</th>
								<th>Hình Ảnh</th>
								<th>Thể Loại</th>
								<th>Nhà Sản Xuất</th>
								<th>Trạng Thái</th>
								<th>Nổi Bật</th>
								<th>Ngày Đăng</th>
								<th class="pl-5">Action</th>

							</tr>
						</thead>
						<tbody id="dataCategory">
							<td>â</td>
							<td>a</td>
							<td>a</td>
							<td>a</td>
							<td>a</td>
							<td>a</td>
							<td>a</td>
							<td>a</td>
							<td>a</td>
								<td>
									<a href=""><button class="btn btn-outline-info"><i class="far fa-eye"></i></button></a>
									<a href="#"><button class="btn btn-outline-info"><i class="fas fa-pencil-alt"></i></button></a>
									<a href=""><button class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button></a>
								</td>    
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

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


