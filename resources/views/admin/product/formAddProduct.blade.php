@extends('admin.layouts.master')
@section('content')
<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="{{route('index-category')}}">Sản Phẩm</a></li>
		<li class="breadcrumb-item active" aria-current="page">Thêm Mới Sản Phẩm</li>

	</ol>
</nav>


<form action="{{route('store-product')}}" method="POST" enctype="multipart/form-data">
	@csrf
	<h2 class="text-center">Thêm Sản Phẩm Mới</h2>
	<div class="row">
		<div class="col-md-6">
			<div  class="form-group">
				<div class="row">
					<div class="col-md-6">
						<label for="">Danh mục<span style="color: red">**</span></label>
						<select class="form-control" name="category_id" id="">
							<option value="">--Chọn thương hiệu--</option>
							@foreach($category as $category)
							<option value="{{$category->id}}" {{old('category_id') == $category->id ? 'selected' : ''}}>{{$category->name}}</option>
							@endforeach
						</select>
						<span style="color:red">{{$errors->first('category_id')}}</span>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label for="">Tên sản phẩm <span style="color: red">**</span></label>
				<input name="name" class="form-control" type="text" value="{{old('name')}}">
				<span style="color:red">{{$errors->first('name')}}</span>
			</div>
			<div class="form-group">
				<label for="">Hình ảnh</label>

				<img width="300" class="out_image" src="" alt="">
				<input class="input_image" name="image" class="form-control" type="file" value="{{old('image')}}">
			</div>
			<div class="form-group">
				<label for="">Mô tả</label>
				<textarea name="description" id="description" class="form-control cheditor" rows="3" value="{{old('description')}}"></textarea>
			</div>
			<div class="form-group ml-2">
				<div class="custom-control custom-switch">
					<input name="pro_hot" type="checkbox" class="custom-control-input" id="customSwitch1" value="1">
					<label class="custom-control-label" for="customSwitch1">NỔI BẬT</label>
				</div>
				<div class="custom-control custom-switch">
					<input name="status" type="checkbox" class="custom-control-input" id="customSwitch2" value="1">
					<label class="custom-control-label" for="customSwitch2">HIỆN</label>
				</div>
			</div>
		</div>
		<!--  -->
		<div class="col-md-6">
			<div class="form-group">
				<label for="">Chíp CPU <span style="color: red">**</span></label>
				<input name="cpu" class="form-control" type="text" value="{{old('cpu')}}">
				<span style="color:red">{{$errors->first('cpu')}}</span>
			</div>
			<div class="form-group">
				<label for="">Ram <span style="color: red">**</span></label>
				<input name="memory" class="form-control" type="text" value="{{old('memory')}}">
				<span style="color:red">{{$errors->first('memory')}}</span>
			</div>
			<div class="form-group">
				<label for="">Màn hình <span style="color: red">**</span></label>
				<input name="display" class="form-control" type="text" value="{{old('display')}}">
				<span style="color:red">{{$errors->first('display')}}</span>
			</div>
			<div class="form-group">
				<label for="">Pin <span style="color: red">**</span></label>
				<input name="pin" class="form-control" type="text" value="{{old('pin')}}">
				<span style="color:red">{{$errors->first('pin')}}</span>
			</div>
			<div class="form-group">
				<label for="">Loại sim <span style="color: red">**</span></label>
				<input class="form-control" name="sim" type="text" value="{{old('sim')}}">
				<span style="color:red">{{$errors->first('sim')}}</span>
			</div>
			<div class="form-group">
				<label for="">Camera <span style="color: red">**</span></label>
				<input name="camera" class="form-control" type="text" value="{{old('camera')}}">
				<span style="color:red">{{$errors->first('camera')}}</span>
			</div>
			
			<div class="form-group">
				<label for="">Option <span style="color: red">**</span></label>
				<input name="option" class="form-control" type="text" value="{{old('option')}}">
				<span style="color:red">{{$errors->first('option')}}</span>
			</div>

			<div class="form-group">
				<label for="">Số lượng <span style="color: red">**</span></label>
				<input name="quantity" class="form-control" type="text" value="{{old('quantity')}}">
				<span style="color:red">{{$errors->first('quantity')}}</span>
			</div>

			<div class="form-group">
				<label for="">Giá <span style="color: red">**</span></label>
				<input name="price" class="form-control" type="text" value="{{old('price')}}">
				<span style="color:red">{{$errors->first('price')}}</span>
			</div>
		</div>
	</div>

	<div class="form-group">
		<button title="Lưu sản phẩm" type="submit" class="mr-2 btn btn-info">Lưu lại</button>
		<a title="Quya lại" href="{{route('index-product')}}" class="btn btn-outline-info">Quay lại</a>
	</div>
</form>
@endsection

@section('js')

<script type="text/javascript"> CKEDITOR.replace('description'); </script>
@endsection