@extends('admin.layouts.master')
@section('content')
<table class="table table-bordered table-hover">
	
	<thead>
		<tr>
		<td colspan="4"> <a href="{{route('add-new-cate')}}" class="btn btn-info">Add new </a></td>
		
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
			<td class="text-center"><a href="">Edit</a></td>
			<td class="text-center"><a href="">Delete</a></td>
		</tr>
		@endforeach
	</tbody>
</table>



@endsection