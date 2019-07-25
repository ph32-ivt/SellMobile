@extends('customer.layouts.master')
@section('content')
<section id="form"><!--form-->
	<div class="container">
		<div class="row">
			<div class="col-sm-2"></div>
			<div class="col-sm-8">
				@if ($errors->any())
				<div class="alert alert-danger">
					@foreach($errors->all() as $err)
					{{$err}}<br>
					@endforeach
				</div>
				@endif
				@if (session('mess'))
				<div class="alert alert-success">
					{{session('mess')}}
				</div>
				@endif
			</div>
			<div class="col-sm-2"></div>
		</div>
		<div class="row">
			<div class="col-sm-4 col-sm-offset-1">
				<div class="login-form"><!--login form-->
					<h2>Login to your account</h2>
					<form action="{{route('postLogin')}}">
						@csrf							
						<input type="email" placeholder="Email Address" />
						<input type="password" placeholder="Password" />
						<span>
							<input type="checkbox" class="checkbox"> 
							Keep me signed in
						</span>
						<button type="submit" class="btn btn-default">Login</button>
					</form>
				</div><!--/login form-->
			</div>
			
			<div class="col-sm-4">
				<div class="signup-form"><!--sign up form-->
					<h2>New User Signup!</h2>
					<form action="{{route('postRegister')}}" method="POST">
						@csrf
						<input name="name" type="text" placeholder="Name"/>
						<input name="email" type="email" placeholder="Email Address"/>
						<input name="password" type="password" placeholder="Password"/>
						<select name="gender">
							<option value="1" selected>Nam</option>
							<option value="0">Nữ</option>
						</select>
						<input type="number" name="phone" placeholder="SDT">
						<textarea name="address" placeholder="Địa chỉ" rows="10"></textarea>
						<button type="submit" class="btn btn-default">Signup</button>
					</form>
				</div><!--/sign up form-->
			</div>
		</div>
	</div>
</section><!--/form-->
@endsection