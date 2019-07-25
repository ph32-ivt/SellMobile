@if(session('success'))
{{session('success')}}

@endif


<form action="{{route('send-contact')}}" method="POST" role="form">
	@csrf
	<legend>Form title</legend>

	<div class="form-group">
		<label for="">email</label>
		<input type="text" class="form-control" id="" placeholder="Input field" name="email">
	</div>
	<div class="form-group">
		<label for="">content</label>
		<textarea name="content"></textarea>
	</div>

	

	<button type="submit" class="btn btn-primary">Send</button>
</form>