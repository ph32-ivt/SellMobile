@extends('admin.layouts.master')
@section('content')
<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="{{route('index-category')}}">Danh Mục</a></li>
		<li class="breadcrumb-item active" aria-current="page">Sửa Danh Mục</li>
	</ol>
</nav>
<div class=" row">
	<div class="col-md-6 push-2">
		<form action="{{route('update-category',$category->id)}}" method="POST">
			@csrf
			@method('PUT')

			<h2 class="text-center">Sửa Danh mục</h2>
			<div  class="form-group">
				<label for="">Tên Danh Mục<span style="color:red">**</span></label>
				<input id="name" name="name" type="text" class="form-control" value="{{$category->name}}">
			</div>
			<div class="form-group">
				<div class="row">
					<button title="update danh mục" type="submit" class="mr-2 btn btn-info">Sửa</button>
					<a href="{{route('index-category')}}" class="mr-2 btn btn-info"> Quay lại</a>
				</div>
			</div>
		</form>
	</div>
</div>
@endsection