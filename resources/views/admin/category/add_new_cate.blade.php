@extends('admin.layouts.master')
@section('content')
<form action="" method="POST" role="form" style="width: 50%; margin: auto;">
	<legend>Add new category</legend>

	<div class="form-group">
		<label for="">Name</label>
		<input type="text" class="form-control" id="" placeholder="Input field">
	</div>
	<div class="form-group">
		<label for="">Category Slug</label>
		<input type="text" class="form-control" id="" placeholder="Input field">
	</div>
	<div class="form-check-inline">
		<label class="form-check-label">
			<input type="radio" class="form-check-input" name="optradio">Option 1
		</label>
	</div>
	<div class="form-check-inline">
		<label class="form-check-label">
			<input type="radio" class="form-check-input" name="optradio">Option 2
		</label>
	</div>
	

	

	<button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection