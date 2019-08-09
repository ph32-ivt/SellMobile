 <nav class="bg-white sidebar sidebar-offcanvas" id="sidebar">
  <div class="user-info">
    <!-- <img src="images/face.jpg" alt=""> -->
    <p class="name">{{Auth()->user()->name}}</p>
    <p class="designation">
     @php
      $roleUser = \DB::table('users')
      ->join('user_roles','users.id','=','user_roles.user_id')
      ->join('roles','user_roles.role_id','=','roles.id')
      ->where('users.id','=',\Auth()->user()->id)
      ->select('*')
      ->first();

      @endphp
      {{ $roleUser->name}} 
      
    </p>
    <span class="online"></span>
  </div>
  <ul class="nav">
    <li class="nav-item {{\Request::route()->getName()=='home-admin'?'active':''}}">
      <a class="nav-link" href="{{route('home-admin')}}">
        <img src="{{asset('admin/images/icons/1.png')}}" alt="">
        <span class="menu-title">Tổng quan</span>
      </a>
    </li>
    <li class="nav-item {{\Request::route()->getName()=='index-category'?'active':''}}">

      <a class="nav-link " href="{{route('index-category')}}">
        <img src="{{asset('admin/images/icons/2.png')}}" alt="">

        <span class="menu-title">Thể loại</span>
      </a>
    </li>
    <li class="nav-item {{\Request::route()->getName()=='index-product'?'active':''}}">
      <a class="nav-link " href="{{route('index-product')}}">
        <img src="{{asset('admin/images/icons/005-forms.png')}}" alt="">
        <span class="menu-title">Sản phẩm</span>
      </a>
    </li>
    <li class="nav-item {{\Request::route()->getName()=='index-order'?'active':''}}">
      <a class="nav-link " href="{{route('index-order')}}">
        <img src="{{asset('admin/images/icons/4.png')}}" alt="">
        <span class="menu-title">Đơn Hàng</span>
      </a>
    </li>
    <li class="nav-item {{\Request::route()->getName()=='index-slider'?'active':''}}">
      <a class="nav-link " href="{{route('index-slider')}}">
        <img src="{{asset('admin/images/icons/5.png')}}" alt="">
        <span class="menu-title">Slide</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('index-comment')}}">
        <img src="{{asset('admin/images/icons/6.png')}}" alt="">
        <span class="menu-title">Bình luận</span>
      </a>
    </li>
    <li class="nav-item {{\Request::route()->getName()=='index-user'?'active':''}}">
      <a class="nav-link " href="{{route('index-user')}}">
        <img src="{{asset('admin/images/icons/7.png')}}" alt="">
        <span class="menu-title">User</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('home')}}">
        <img src="{{asset('admin/images/icons/8.png')}}" alt="">
        <span class="menu-title">Về Trang Người Dùng</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#sample-pages" aria-expanded="false" aria-controls="sample-pages">
        <img src="{{asset('admin/images/icons/9.png')}}" alt="">
        <span class="menu-title">Lịch sử<i class="fa fa-sort-down"></i></span>
      </a>
      <div class="collapse" id="sample-pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="{{route('history-category')}}">
              Thể loại
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/samples/login.html">
              Sảm phẩm
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/samples/register.html">
              Thành viên
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/samples/404.html">
              User
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/samples/500.html">

            </a>
          </li>
        </ul>
      </div>
    </li>
    
    <li class="nav-item">
      
     <a class="nav-link" href="{{ route('logout') }}"
     onclick="event.preventDefault();
     document.getElementById('logout-form').submit();">
     <img src="{{asset('admin/images/icons/10.png')}}" alt="">
     {{ __('Logout') }}

   </a>

   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
  </form>
  
</li>
</ul>



</nav>