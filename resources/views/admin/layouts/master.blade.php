<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Star Admin</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('admin/node_modules/font-awesome/css/font-awesome.min.css')}}" />

  <link rel="stylesheet" href="{{ asset('admin/fontasome/css/all.css')}}" />


  <link rel="stylesheet" href="{{ asset('admin/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css')}}" />
  <link rel="stylesheet" href="{{ asset('admin/node_modules/flag-icon-css/css/flag-icon.min.css')}}" />
  <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}" />
  <link rel="shortcut icon" href="{{ asset('admin/images/favicon.png') }}" />
  <script src="{{ asset('admin/node_modules/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('admin/node_modules/popper.js/dist/umd/popper.min.js') }}"></script>
  <script src="{{ asset('admin/node_modules/bootstrap/dist/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('admin/node_modules/chart.js/dist/Chart.min.js') }}"></script>
  <script src="{{ asset('admin/node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js') }}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB5NXz9eVnyJOA81wimI8WYE08kW_JMe8g&callback=initMap" async defer></script>
  <script src="{{ asset('admin/js/off-canvas.js') }}"></script>
  <script src="{{ asset('admin/js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('admin/js/misc.js') }}"></script>
  <script src="{{ asset('admin/js/chart.js') }}"></script>
  <script src="{{ asset('admin/js/maps.js') }}"></script>
  <script src="{{ asset('admin/fontasome/js/all.js')}}"></script>
  
  <script src="{{ asset('admin/js/jquery-3.4.1.js') }}"></script>

  <script src="{{ asset('admin/js/admin.js') }}"></script>

</head >

<body>
  <div class=" container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('admin.layouts.blocks.header')

    <!-- partial -->
    <div class="container-fluid">
      <div class="row row-offcanvas row-offcanvas-right">

        @include('admin.layouts.blocks.nav')
        <!-- partial -->
        <div class="content-wrapper">
         @yield('content')
       </div>


       
       @include('admin.layouts.blocks.footer')  
       <!-- partial -->
       
     </div>
   </div>

 </div>

 <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
 @if(session('fail'))
 <script>
   alert('{{session('fail')}}');
 </script>
 @endif
 @yield('js')

 <script>
   function readURL(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function(e) {
        $('.out_image').attr('src', e.target.result);
      }

      reader.readAsDataURL(input.files[0]);
    }
  }

  $(".input_image").change(function() {
    readURL(this);
  });
</script>
</body>

</html>