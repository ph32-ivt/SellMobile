@extends('admin.layouts.master')
@section('content')


<form action="{{route('store-product')}}" method="POST" enctype="multipart/form-data">
	@csrf
	<div class=" row">
		<div class="col-md-6">
			<div  class="form-group">
				<label for="">Thể loại</label>
				<select class="form-control" name="categoryID" id="">
					<option value="">--Chọn thể loại--</option>
					@foreach($category as $category)
					<option value="{{$category->id}}">{{$category->name}}</option>
					@endforeach
				</select>
				<span style="color:red">{{$errors->first('categoryID')}}</span>
			</div>
			<div class="form-group">
				<label for="">Tên sản phẩm</label>
				<input name="name" class="form-control" type="text" value="{{old('name')}}">
				<span style="color:red">{{$errors->first('name')}}</span>
			</div>
			<div class="form-group">
				<label for="">Hình ảnh</label>
				<input name="image" class="form-control" type="file" value="{{old('image')}}">
			</div>
			<div class="form-group">
				<label for="">Mô tả</label>
				<textarea name="description" id="input" class="form-control" rows="3" value="{{old('description')}}"></textarea>
			</div>
			<div class="form-group">
				<label for="">Nội dung</label>
				<textarea name="content" class="form-control cheditor"  id="content" ></textarea>
			</div>
			<div class="form-group">
				<div class="custom-control custom-switch">
					<input name="pro_hot" type="checkbox" class="custom-control-input" id="customSwitch1" value="1">
					<label class="custom-control-label" for="customSwitch1">Nổi Bật</label>
				</div>
				<div class="custom-control custom-switch">
					<input name="status" type="checkbox" class="custom-control-input" id="customSwitch2" value="1">
					<label class="custom-control-label" for="customSwitch2">Hiện</label>
				</div>
			</div>
		</div>
		<!--  -->
		<div class="col-md-6">
			<div class="form-group">
				<label for="">Chíp CPU</label>
				<input name="cpu" class="form-control" type="text" value="{{old('cpu')}}">
				<span style="color:red">{{$errors->first('cpu')}}</span>
			</div>
			<div class="form-group">
				<label for="">Ram</label>
				<input name="menory" class="form-control" type="text" value="{{old('menory')}}">
				<span style="color:red">{{$errors->first('menory')}}</span>
			</div>
			<div class="form-group">
				<label for="">Màn hình</label>
				<input name="display" class="form-control" type="text" value="{{old('display')}}">
				<span style="color:red">{{$errors->first('display')}}</span>
			</div>
			<div class="form-group">
				<label for="">Pin</label>
				<input name="pin" class="form-control" type="text" value="{{old('pin')}}">
				<span style="color:red">{{$errors->first('pin')}}</span>
			</div>
			<div class="form-group">
				<label for="">Loại sim</label>
				<input class="form-control" name="sim" type="text" value="{{old('sim')}}">
				<span style="color:red">{{$errors->first('sim')}}</span>
			</div>
			<div class="form-group">
				<label for="">Camera</label>
				<input name="camera" class="form-control" type="text" value="{{old('camera')}}">
				<span style="color:red">{{$errors->first('camera')}}</span>
			</div>
			<div class="form-group">
				<label for="">Option</label>
				<input name="option" class="form-control" type="text" value="{{old('option')}}">

			</div>
			<div class="form-group">
				<label for="">Giá</label>
				<input name="price" class="form-control" type="text" value="{{old('price')}}">
				<span style="color:red">{{$errors->first('price')}}</span>
			</div>
		</div>
	</div>

	<div class="form-group">
		<button type="submit" class="mr-2 btn btn-info">Lưu lại</button>
		<button class="btn btn-outline-primary">Quay lại</button>
	</div>
</form>
@endsection

@section('js')
<script type="text/javascript"> CKEDITOR.replace('content'); </script>
@endsection