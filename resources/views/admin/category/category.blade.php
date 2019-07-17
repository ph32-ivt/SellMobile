@extends('admin.layouts.master')
@section('content')
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