<div class="container">
            <div class="row">
                @if(session('message'))
                <p class="alert-warning"> {{session('message')}}</p>
                @endif
            </div>
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
                        <input type="text" class="form-control" placeholder="Nhập từ khóa cần tìm kiếm!" name="key">
                        <button type="Submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>
                <!-- /.search -->
                <!-- account -->
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="account-section">
                        <ul>
                            <li class="{{(Auth::check())?'hidden':''}}"><a href="{{route('userlogin')}}" class="title hidden-xs">Đăng nhập</a></li>
                            <li class="hidden-xs">|</li>
                            <li class="{{(Auth::check())?'hidden':''}}"><a href="{{route('register-user')}}" class="title hidden-xs">Đăng kí</a></li>                           
                            <li><a href="{{route('getCart')}}" class="title"><i class="fa fa-shopping-cart"></i>   <sup class="cart-quantity">{{count(\Cart::content())}}</sup></a>
                            </li>
                            <li class="{{(Auth::check())?'':'hidden'}}"><a href="{{route('logout')}}" class="title hidden-xs">Đăng xuất</a></li>
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
                                <li class="active"><a href="{{route('home')}}">Trang chủ</a></li>
                                <li class="has-sub"><a href="#">Diện thoại</a>
                                    <ul><?php $categories = \DB::table('categories')->get()?>
                                    @foreach($categories as $cate)
                                        <li><a href="{{route('showbycate',$cate->id)}}">{{$cate->name}}</a></li>
                                    @endforeach
                                       
                                    </ul>
                                </li>
                                
                                <li class="has-sub"><a href="#">Đặt hàng</a>
                                    <ul>
                                        <li><a href="{{route('getCart')}}">Giỏ hàng</a></li>
                                        
                                        <li class="{{(Auth::check())?'':'hidden'}}"><a href="{{route('vieworder')}}">Xem đơn hàng</a> </li>                                        
                                    </ul>
                                </li>
                                
                                <li><a href="{{route('form-contact')}}">Liên hệ</a>
                                </li> 
                                <li><a href="#">Thông tin</a>
                                </li> 
                                  <li class="has-sub {{(Auth::check())?'':'hidden'}}"><a href="#">Tài khoản</a>
                                    <ul>
                                        <li ><a href="{{route('profile_manage')}}">Quản lí tài khoản</a></li>
                                        <li ><a href="{{route('change_password')}}">Đổi mật khẩu</a> </li>
                                                                                
                                    </ul>
                                </li>                              
                            </ul>
                        </div>
                    </div>
                    <!-- /.navigations-->
                </div>
            </div>
        </div>
