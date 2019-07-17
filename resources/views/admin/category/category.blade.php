@extends('admin.layouts.master')
@section('content')
<div class="container">
	<div class="card-deck">
		<div class="card col-lg-12 px-0 mb-4">
			<div class="card-body">
				<div class="row">
					<div class="col-md-8">
						<h5 class="card-title">Thể loại</h5>
					</div>
					<div class="col-md-2">
						<button class="btn btn-primary"><a href="{{route('create-category')}}">Thêm mới</a></button>			
					</div>
				</div>
				<div class="table-responsive">
					<table class="table center-aligned-table">
						<thead>
							<tr class="text-primary">
								<th>ID</th>
								<th>Tên thể loại</th>
								<th>Parent</th>
								<th class="pl-5">Action</th>

							</tr>
						</thead>
						<tbody id="dataCategory">
							@foreach($category as $category)
							<tr class="">
								<td>{{$category->id}}</td>
								<td>{{$category->name}}</td>
								<td>
									@if(empty($category->parent_id) )
									{{'[N/A]'}}
									@else
									<?php 
									$parent = \DB::table('categories')->where('id',$category->parent_id)->first();
									echo $parent->name;
									?>
									@endif

								</td>
								<td>
									<a href=""><button class="btn btn-outline-info"><i class="far fa-eye"></i></button></a>
									<a href="{{route('edit-category',$category->id)}}"><button class="btn btn-outline-info"><i class="fas fa-pencil-alt"></i></button></a>
									<a href=""><button class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button></a>
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

<script  type="text/javascript">
	
	$('#showModal').click(function(){
		// alert('đ');
		// var modal= $(this).attr('data-target');
		// console.log(modal);
		// $( '#form-cate' ).attr({
		// 	action : '/categories',
		// 	method : 'POST'
		// }
		// );

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
	// $('#editCate').click(function(event) {
	// 	/* Act on the event */
	// 	$('#form-cate').attr({
	// 		action: '/categories/'+cateId,
	// 		method: 'POST'
	// 	});
		
	// });
</script>
@endsection


