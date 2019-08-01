@extends('admin.layouts.master')
@section('content')

<div class=" row">
	<div class="col-md-4">
		<form action="{{route('store-slider')}}" method="POST" enctype="multipart/form-data">
			@csrf
			<div class="form-group">
				<label for="">Hình ảnh</label>
				<input class="input_image" name="image" class="form-control" type="file" value="{{old('image')}}">
				<br>
				<span style="color:red">{{$errors->first('image')}}</span>
			</div>
			<div class="form-group">
				<div class="row">
					<button type="submit" class="mr-2 btn btn-info">Lưu lại</button>
					<button class="btn btn-outline-primary">Quay lại</button>
				</div>
			</div>

		</form>
	</div>
	<div class="col-md-8">
		<img style="border:2px solid black" width="500" height="250" class="out_image" src="" alt="">
	</div>
</div>
@endsection