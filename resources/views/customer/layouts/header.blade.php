<div class="container">
            <div class="row">
                <!-- logo -->
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-8">
                    <div class="logo">
                        <a href="{{route('home')}}"><img src="{{asset('customer/images/logo.png')}}" alt=""> </a>
                    </div>
                </div>
                <!-- /.logo -->
                <!-- search -->
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="search-bg">
                        <form action="{{route('search')}}" method="GET">                 
                        <input type="text" class="form-control" placeholder="Search Here" name="key">
                        <button type="Submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>
                <!-- /.search -->
                <!-- account -->
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="account-section">
                        <ul>
                            <li class="{{(Auth::check())?'hidden':''}}"><a href="{{route('userlogin')}}" class="title hidden-xs">Login</a></li>
                            <li class="hidden-xs">|</li>
                            <li class="{{(Auth::check())?'hidden':''}}"><a href="{{route('register-user')}}" class="title hidden-xs">Register</a></li>                           
                            <li><a href="{{route('getCart')}}" class="title"><i class="fa fa-shopping-cart"></i>   <sup class="cart-quantity">{{count(\Cart::content())}}</sup></a>
                            </li>
                            <li class="{{(Auth::check())?'':'hidden'}}"><a href="{{route('logout')}}" class="title hidden-xs">Logout</a></li>
                        </ul>
                    </div>
                    <!-- /.account -->
                </div>
                <!-- search -->
            </div>
        </div>
        <!-- navigation -->
        <div class="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <!-- navigations-->
                        <div id="navigation">
                            <ul>
                                <li class="active"><a href="{{route('home')}}">Home</a></li>
                                <li class="has-sub"><a href="#">Mobiles</a>
                                    <ul><?php $categories = \DB::table('categories')->get()?>
                                    @foreach($categories as $cate)
                                        <li><a href="{{route('showbycate',$cate->id)}}">{{$cate->name}}</a></li>
                                    @endforeach
                                       
                                    </ul>
                                </li>
                                
                                <li class="has-sub"><a href="#">Order</a>
                                    <ul>
                                        <li><a href="{{route('getCart')}}">Cart</a></li>
                                        <li class="{{(Auth::check())?'':'hidden'}}"><a href="{{route('getorder')}}">Checkout</a> </li>
                                        <li class="{{(Auth::check())?'':'hidden'}}"><a href="{{route('vieworder')}}">View order detail</a> </li>                                        
                                    </ul>
                                </li>
                                
                                <li><a href="{{route('form-contact')}}">Contact Us</a>
                                </li> 
                                <li><a href="#">About</a>
                                </li>                               
                            </ul>
                        </div>
                    </div>
                    <!-- /.navigations-->
                </div>
            </div>
        </div>
