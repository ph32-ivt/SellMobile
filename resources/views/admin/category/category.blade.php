@extends('admin.layouts.master')
@section('content')
<<<<<<< HEAD
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


=======
<table class="table table-bordered table-hover">
	
	<thead>
		<tr>
		<td> <a href="" class="btn btn-info">Add new parent category</a></td>
		<td> <a href="" class="btn btn-info">Add new child category</a></td>
	</tr>
		<tr>
			<th>Id</th>
			<th>Categories Name</th>
			<th colspan="2" class="text-center">Action</th>
		</tr>
	</thead>
	<tbody>
		@foreach($category as $cate)
		<tr>
			<td>{{$cate->id}}</td>
			<td>{{$cate->name}}</td>
			<td><a href="">Edit</a></td>
			<td><a href="">Delete</a></td>
		</tr>
		@endforeach
	</tbody>
</table>



@endsection
>>>>>>> aa28f99eee99286bdfba0c9410df05996e708782
