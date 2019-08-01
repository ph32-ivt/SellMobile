@extends('admin.layouts.master')
@section('content')
<div class="container">
	<div class="card-deck">
		<div class="card col-lg-12 px-0 mb-4">
			<div class="card-body">
				<div class="row">
					<div class="col-md-10">
						<h5 class="card-title">Đơn Hàng</h5>
						<a href="{{route('order-show-history')}}">lịch sử xóa</a>
					</div>
				</div>
				<div class="table-responsive">
					<table class="table center-aligned-table">
						<thead>
							<tr class="text-primary">
						
								<th>Đơn hàng đã duyệt(<span style="color:red; font-weight: bold;font-size:14px">{{$agree->count()}}</span>)</th>
								<td>
									<a href="{{route('order-da-duyet')}}"><button class="btn btn-outline-info"><i class="far fa-eye"></i></button></a>
								</td>    
								

							</tr>
							<tr class="text-primary">
			
								<th>Đơn hàng chưa duyệt(<span style="color:red; font-weight: bold;font-size:14px">{{$disagree->count()}}</span>)</th>
								
								<td>
									<a href="{{route('order-disAgree')}}"><button class="btn btn-outline-info"><i class="far fa-eye"></i></button></a>
								</td>    

							</tr>
						</thead>
						
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


