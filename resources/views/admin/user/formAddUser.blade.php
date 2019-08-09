@extends('admin.layouts.master')
@section('content')
<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="{{route('index-user')}}">User</a></li>
		<li class="breadcrumb-item active" aria-current="page">Thêm User</li>
	</ol>
</nav>
<form action="{{route('store-user')}}" method="POST" role="form">
	@csrf
	<legend>Tạo mới User</legend>

	<div class="form-group">
		<label for="">Họ và tên <span style="color: red">**</span></label>
		<input name="name" type="text" class="form-control" value="{{old('name')}}">
		<span style="color:red">{{$errors->first('name')}}</span>
	</div>
	<div class="form-group">
		<label for="">Giới tính <span style="color: red">**</span>:</label>
		<div class="custom-control custom-radio custom-control-inline">
			<input type="radio" id="customRadioInline1" name="gender" class="custom-control-input" value="1" {{old('gender')==1?'checked':''}} >
			<label class="custom-control-label" for="customRadioInline1">Nam</label>
		</div>
		<div class="custom-control custom-radio custom-control-inline">
			<input type="radio" id="customRadioInline2" name="gender" class="custom-control-input" value="0" {{old('gender')==0?'checked':''}}>
			<label class="custom-control-label" for="customRadioInline2">Nữ</label>
		</div>
		<br>	
		<span style="color:red">{{$errors->first('gender')}}</span>
	</div>
	<div class="form-group">
		<label for="">Email<span style="color: red">**</span></label>
		<input name="email" type="email" class="form-control" id="" value="{{old('email')}}" >
		<span style="color:red">{{$errors->first('email')}}</span>
	</div>
	<div class="form-group">
		<label for="">Password<span style="color: red">**</span></label>
		<input name="password" type="password" class="form-control" id="" value="{{old('password')}}">
		<span style="color:red">{{$errors->first('password')}}</span>
	</div>
	<div class="form-group">
		<label for="">Số điện thoại<span style="color: red">**</span></label>
		<input name="phone" type="text" class="form-control" id="" value="{{old('phone')}}">
		<span style="color:red">{{$errors->first('phone')}}</span>
	</div>
	<div class="form-group">
		<label for="">Địa chỉ<span style="color: red">**</span></label>
		<input name="address" type="text" class="form-control" id="" value="{{old('address')}}" >
		<span style="color:red">{{$errors->first('address')}}</span>
	</div>
	<div class="form-group"> 
		<label for="">Chức vụ <span style="color: red">**</span></label>
		<select name="roleID[]" id="input" class="mdb-select md-form form-control" multiple>
			@foreach($listRole as $role)
			<option  value="{{$role->id}}"{{old('roleID')==$role->id?'selected':''}}>{{$role->name}}</option>
			@endforeach
		</select>
		<span style="color:red">{{$errors->first('roleID')}}</span>
	</div>
	
	<br>	
	<button type="submit" class="btn btn-primary">Tạo mới</button>
	<a href="{{route('index-user')}}" class="btn btn-outline-info">Quay lại</a>
</form>

@endsection()