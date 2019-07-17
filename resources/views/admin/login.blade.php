<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <base href="{{asset('')}}">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Đăng nhập</title>
  <link rel="stylesheet" href="Admin_Asset/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="Admin_Asset/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="Admin_Asset/vendors/css/vendor.bundle.addons.css">
  <link rel="stylesheet" href="Admin_Asset/css/style.css">
  <link rel="shortcut icon" href="Admin_Asset/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper auth-page">
      <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auto-form-wrapper">
              @if ($errors->any())
=======
<link href="{{ asset('admin/css/css/bootstrap.min.css')}}" rel="stylesheet" id="bootstrap-css">
<script src="{{ asset('admin/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('admin/js/jquery.min.js')}}"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="{{ asset('admin/css/css/bootstrap.min.css')}}" >
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="{{ asset('admin/css/login.css')}}">
	
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center">
		@if ($errors->any())
>>>>>>> aa28f99eee99286bdfba0c9410df05996e708782
                <div class="alert alert-danger">
                  @foreach($errors->all() as $err)
                    {{$err}}<br>
                  @endforeach
                </div>
              @endif
<<<<<<< HEAD
              @if (session('thongbao'))
                <div class="alert alert-success">
                  {{session('thongbao')}}
                </div>
              @endif
              <form action="admin/dangnhap" method="POST">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <legend>Sign in</legend>
                <div class="form-group">
                  <label class="label">Email</label>
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Email" name="Email"" autofocus="">
                  </div>
                </div>
                <div class="form-group">
                  <label class="label">Password</label>
                  <div class="input-group">
                    <input type="password" class="form-control" placeholder="*********" id="password" name="password" value="">
                </div>
                <div class="form-group">
                  <button class="btn btn-primary submit-btn btn-block" type="submit">Login</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="Admin_Asset/vendors/js/vendor.bundle.base.js"></script>
  <script src="Admin_Asset/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="Admin_Asset/js/off-canvas.js"></script>
  <script src="Admin_Asset/js/misc.js"></script>
  <!-- endinject -->
</body>

=======
              @if (session('mess'))
                <div class="alert alert-success">
                  {{session('mess')}}
                </div>
              @endif
	</div>
	<div class="d-flex justify-content-center h-100">
		
		<div class="card">
			<div class="card-header">
				<h3>Sign In</h3>
				<div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				</div>
			</div>
			<div class="card-body">
				<form action="{{route('postlogin')}}" method="POST">
					@csrf
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="email" class="form-control" placeholder="email" name="email">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="password" name="password">
					</div>
					<div class="row align-items-center remember">
						<input type="checkbox">Remember Me
					</div>
					<div class="form-group">
						<input type="submit" value="Login" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Don't have an account?<a href="#">Sign Up</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="#">Forgot your password?</a>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
>>>>>>> aa28f99eee99286bdfba0c9410df05996e708782
</html>