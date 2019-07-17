@extends('admin.layouts.master')
@section('content')
<div class=" row">
	<div class="col-md-6 push-2">
		<form action="{{route('store-category')}}" method="POST">
			@csrf
			<label for="">Parent</label>
			<select class="form-control" name="parent" id="parent">
				<option value="">--chọn thể loại--</option>
			</select>
			<div  class="form-group">
				<label for="">Tên thể loại</label>
				<input id="name" name="name" type="text" class="form-control">
				<span style="color:red">{{$errors->first('name')}}</span>
			</div>
			<div class="form-group">
				<div class="row">
					<button type="submit" class="mr-2 btn btn-info">Lưu lại</button>
					<button class="btn btn-outline-primary">Quay lại</button>
				</div>
			</div>

		</form>
	</div>
</div>
@endsection