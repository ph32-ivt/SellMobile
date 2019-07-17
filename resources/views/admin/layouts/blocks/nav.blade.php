 <nav class="bg-white sidebar sidebar-offcanvas" id="sidebar">
          <div class="user-info">
            <!-- <img src="images/face.jpg" alt=""> -->
            <p class="name">Richard V.Welsh</p>
            <p class="designation">Manager</p>
            <span class="online"></span>
          </div>
          <ul class="nav">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">
                <img src="{{asset('admin/images/icons/1.png')}}" alt="">
                <span class="menu-title">Tổng quan</span>
              </a>
            </li>
            <li class="nav-item">
<<<<<<< HEAD
              <a class="nav-link" href="{{route('index-category')}}">
                <img src="{{asset('admin/images/icons/2.png')}}" alt="">
=======
              <a class="nav-link" href="{{route('list-cate')}}">
                <img src="images/icons/2.png" alt="">
>>>>>>> aa28f99eee99286bdfba0c9410df05996e708782
                <span class="menu-title">Thể loại</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('index-product')}}">
                <img src="{{asset('admin/images/icons/005-forms.png')}}" alt="">
                <span class="menu-title">Sản phẩm</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('index-order')}}">
                <img src="{{asset('admin/images/icons/4.png')}}" alt="">
                <span class="menu-title">Order</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/tables/index.html">
                <img src="{{asset('admin/images/icons/5.png')}}" alt="">
                <span class="menu-title">Hình ảnh</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/charts/index.html">
                <img src="{{asset('admin/images/icons/6.png')}}" alt="">
                <span class="menu-title">Quản Trị</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('index-user')}}">
                <img src="{{asset('admin/images/icons/7.png')}}" alt="">
                <span class="menu-title">User</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/ui-elements/typography.html">
                <img src="{{asset('admin/images/icons/8.png')}}" alt="">
                <span class="menu-title">Typography</span>
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
                    <a class="nav-link" href="pages/samples/blank_page.html">
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
                      500
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <img src="{{asset('admin/images/icons/10.png')}}" alt="">
                <span class="menu-title">Settings</span>
              </a>
            </li>
          </ul>
        </nav>