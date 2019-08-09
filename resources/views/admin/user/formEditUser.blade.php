@extends('admin.layouts.master')
@section('content')
<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="{{route('index-user')}}">User</a></li>
		<li class="breadcrumb-item active" aria-current="page">Sửa User</li>
	</ol>
</nav>
<form action="{{route('update-user',$user->id)}}" method="POST" role="form">
	@csrf
	@method('PUT')
	<legend>Sửa User</legend>

	<div class="form-group">
		<label for="">Họ và tên <span style="color: red">**</span></label>
		<input name="name" type="text" class="form-control" value="{{$user->name}}" >
	</div>
	<div class="form-group">
		<label for="">Giới tính : <span style="color: red">**</span></label>
		<div class="custom-control custom-radio custom-control-inline">
			<input type="radio" id="customRadioInline1" name="gender" class="custom-control-input" value="1" {{!empty($user->gender)==1?'checked':''}} >
			<label class="custom-control-label" for="customRadioInline1">Nam</label>
		</div>
		<div class="custom-control custom-radio custom-control-inline">
			<input type="radio" id="customRadioInline2" name="gender" class="custom-control-input" value="0"  {{!empty($user->gender)==0?'checked':''}}>
			<label class="custom-control-label" for="customRadioInline2">Nữ</label>
		</div>
	</div>
	<div class="form-group">
		<label for="">Email<span style="color: red">**</span></label>
		<input name="email" type="email" class="form-control" id="" value="{{$user->email}}" >
	</div>
	<div class="form-group">
		<label for="">Password</label>
		<input name="password" type="password" class="form-control" id="" value="{{old('password')}}">
	</div>
	<div class="form-group">
		<label for="">Số điện thoại <span style="color: red">**</span></label>
		<input name="phone" type="text" class="form-control" id="" value="{{!empty($user->phone)?$user->phone:''}}">
	</div>
	<div class="form-group">
		<label for="">Địa chỉ<span style="color: red">**</span></label>
		<input name="address" type="text" class="form-control" id="" value="{{!empty($user->address)?$user->address:''}}" >
	</div>
	@if($user->id != \Auth::user()->id)
	<div class="form-group">
		<label for="">Phân quyền thành viên</label>
		<select name="roleID[]" id="input" class="mdb-select md-form form-control" multiple>
			@foreach($listRole as $role)
			<option {{$listUserOfRole->contains($role->id) ? 'selected' : ''}}  value="{{$role->id}}">{{$role->name}}</option>
			@endforeach
		</select>
	</div>
	@endif

	

	<button title="Update" type="submit" class="btn btn-primary">Lưu Lại</button>
	<a href="{{route('index-user')}}" class="btn btn-outline-info">Quay lại</a>
</form>

@endsection()