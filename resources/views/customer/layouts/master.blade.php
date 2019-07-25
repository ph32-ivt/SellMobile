<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <!-- <base href="{{asset('')}}"> -->
    <link href="{{asset('customer/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('customer/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('customer/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('customer/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('customer/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('customer/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('customer/css/responsive.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="{{asset('customer/images/ico/favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('customer/images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('customer/images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('customer/images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('customer/images/ico/apple-touch-icon-57-precomposed.png')}}">
</head><!--/head-->
<body>
    <header id="header"><!--header-->
        
        
        <div class="header-middle"><!--header-middle-->
            @include('customer.layouts.header')
        </div><!--/header-middle-->
    
        <div class="header-bottom"><!--header-bottom-->
             @include('customer.layouts.nav')
        </div><!--/header-bottom-->
    </header><!--/header-->
    
    <section id="slider"><!--slider-->
       <!-- @include('customer.layouts.slide') -->
    </section><!--/slider-->
    
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    @include('customer.layouts.left_slidebar')
                </div>
                
                <div class="col-sm-9 padding-right">
                    @yield('content')
                    
                </div>
            </div>
        </div>
    </section>
    
    <footer id="footer"><!--Footer-->
         @include('customer.layouts.footer')
        
    </footer><!--/Footer-->
    

  
    <script src="{{asset('customer/js/jquery.js')}}"></script>
    <script src="{{asset('customer/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('customer/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('customer/js/price-range.js')}}"></script>
    <script src="{{asset('customer/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('customer/js/main.js')}}"></script>
    <script src="{{asset('customer/js/customer.js')}}"></script>
</body>
</html>