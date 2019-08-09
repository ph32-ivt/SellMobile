@extends('admin.layouts.master')
@section('content')
<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="{{route('index-user')}}">User</a></li>
		<li class="breadcrumb-item active" aria-current="page">Sửa Nhóm</li>
	</ol>
</nav>
<div class=" row">
	<div class="col-md-6 push-2">
		<form action="{{route('update-role',$role->id)}}" method="POST">
			@csrf
			@method('PUT')
			<h2>Sửa quyền</h2>
			<div  class="form-group">
				<label for="">Tên nhóm</label>
				<input id="name" name="name" type="text" class="form-control" value="{{$role->name}}">
				<span class="alert-danger">{{$errors->first('name')}}</span>
			</div>
			<label for="">Phân quyền cho nhóm</label>
			<div  class="form-group">
				<div class="form-group">
					@foreach($listPermission as $permission)
					<label  style="width: 200px; ">
						<input  name="permissionID[]" type="checkbox" value="{{$permission->id}}" {{$permissionID->contains($permission->id) ? 'checked' : ''}}> <span style="text-align: center">{{$permission->display_name}}</span>
					</label>
					@endforeach
				</div>

				<span class="alert-danger">{{$errors->first('name')}}</span>
			</div>

			<div class="form-group">
				<div class="row">
					<button title="Lưu Danh Mục" type="submit" class="mr-2 btn btn-info">Lưu lại</button>
					<a href="{{route('index-user')}}" class="mr-2 btn btn-info"> Quay lại</a>
				</div>
			</div>

		</form>
	</div>
</div>
@endsection