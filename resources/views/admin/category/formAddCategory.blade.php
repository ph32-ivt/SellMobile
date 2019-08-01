@extends('admin.layouts.master')
@section('content')
@if(count($errors->all()))
	@php 
	@endphp
@endif
<div class=" row">
	<div class="col-md-6 push-2">
		<form action="{{route('store-category')}}" method="POST">
			@csrf
			<h2>Thêm Danh Mục</h2>
			<div  class="form-group">
				<label for="">Tên Danh Mục</label>
				<input id="name" name="name" type="text" class="form-control">
				<span class="alert-danger">{{$errors->first('name')}}</span>
			</div>
			<div class="form-group">
				<div class="row">
					<button title="Lưu Danh Mục" type="submit" class="mr-2 btn btn-info">Lưu lại</button>
					<a href="{{route('index-category')}}" class="mr-2 btn btn-info"> Quay lại</a>
				</div>
			</div>

		</form>
	</div>
</div>
@endsection