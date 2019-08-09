<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="create ecommerce website template for your online store, responsive mobile templates">
    <meta name="keywords" content="ecommerce website templates, online store,">
    <title> SellPhone </title>
    <!-- Bootstrap -->
    <link href="{{asset('customer/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Style CSS -->
    <link href="{{asset('customer/css/style.css')}}" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
    <!-- owl-carousel -->
    <link href="{{asset('customer/css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('customer/css/owl.theme.default.css')}}" rel="stylesheet">
    <!-- FontAwesome CSS -->
    <link href="{{asset('customer/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
   <script src="{{asset('customer/js/jquery-3.4.1.js')}}" type="text/javascript"></script>
   <script src="{{asset('customer/customer.js')}}" type="text/javascript"></script>

</head>

<body>
    @if(session('success'))
    <script type="text/javascript">
        alert('{{session('success')}}');
    </script>
    @endif
    <!-- header-section-->
    <div class="header-wrapper">
        @include('customer.layouts.header')
    </div>
    <!-- /. header-section-->
    <!-- slider -->
    
    
    
    <!-- /.slider -->
            <!-- mobile showcase -->
    
            <!-- /.mobile showcase -->
            <!-- latest products -->
   @yield('content')
                <!-- /.latest products -->
                <!-- seller products -->
  
                <!-- /.seller products -->
                <!-- featured products -->
   
                    <!-- /.featured products -->
       
                    <!-- /.features -->
                    <!-- footer -->
    <div class="footer">
        @include('customer.layouts.footer')               
    </div>
                        <!-- /.footer -->
                        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
                        <script src="{{asset('customer/js/jquery.min.js')}}" type="text/javascript"></script>
                        <!-- Include all compiled plugins (below), or include individual files as needed -->
                        <script src="{{asset('customer/js/bootstrap.min.js')}}" type="text/javascript"></script>
                        <script src="{{asset('customer/js/menumaker.js')}}" type="text/javascript"></script>
                        <script type="text/javascript" src="{{asset('customer/js/jquery.sticky.js')}}"></script>
                        <script type="text/javascript" src="{{asset('customer/js/sticky-header.js')}}"></script>
                        <script type="text/javascript" src="{{asset('customer/js/owl.carousel.min.js')}}"></script>
                        <script type="text/javascript" src="{{asset('customer/js/multiple-carousel.js')}}"></script>
                        
                    </body>

                    </html>
