@extends('admin.layouts.master')
@section('content')
<div class=" row">
	<div class="col-md-6 push-2">
		<form action="{{route('update-category',$category->id)}}" method="POST">
			@csrf
			@method('PUT')
			<select class="form-control" name="parent" id="parent">
				
			</select>
			<div  class="form-group">
				<label for="">Tên thể loại</label>
				<input id="name" name="name" type="text" class="form-control" value="{{$category->name}}">
			</div>
			<div class="form-group">
				<div class="row">
					<button type="submit" class="mr-2 btn btn-info">Sửa</button>
					<button class="btn btn-outline-primary">Quay lại</button>
				</div>
			</div>
		</form>
	</div>
</div>
@endsection