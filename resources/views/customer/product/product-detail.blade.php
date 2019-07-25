@extends('customer.layouts.master')
@section('content')
<div class="product-details"><!--product-details-->
    <div class="col-sm-5">
        <div class="view-product">
            <img src="../images/{{$product->image}}" alt="" />
        </div>
        <div id="similar-product" class="carousel slide" data-ride="carousel" >

          <!-- Wrapper for slides -->
          <div class="carousel-inner">          
          <div class="item active">
            <a href=""><img src="../images/{{$product->image}}" alt="" /></a>
              <a href=""><img src="../images/{{$product->image}}" alt="" /></a>
              <a href=""><img src="../images/{{$product->image}}" alt="" /></a>
          </div>
          <div class="item">
            <a href=""><img src="../images/{{$product->image}}" alt="" /></a>
              <a href=""><img src="../images/{{$product->image}}" alt="" /></a>
              <a href=""><img src="../images/{{$product->image}}" alt="" /></a>
          </div>
          

      </div>

      <!-- Controls -->
      <a class="left item-control" href="#similar-product" data-slide="prev">
        <i class="fa fa-angle-left"></i>
    </a>
    <a class="right item-control" href="#similar-product" data-slide="next">
        <i class="fa fa-angle-right"></i>
    </a>
</div>

</div>
<div class="col-sm-7">
    <div class="product-information"><!--/product-information-->
        <img src="images/product-details/new.jpg" class="newarrival" alt="" />
        <h2>{{$product->name}}</h2>                                
        <img src="images/product-details/rating.png" alt="" />
        <span>
            <span>{{number_format($product_del->price,2,'.',',')." VNĐ"}}</span>                                    
        </span>
        <span>
            <label>Quantity:</label>
            <input type="number" value="1" />
            <form method="POST" action="">
                        <input type="hidden" name="product_id" value="{{$product->id}}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit" class="btn btn-fefault add-to-cart">
                            <i class="fa fa-shopping-cart"></i>
                            Add to cart
                        </button>
                    </form>
        </span>
        <h4 class="text-success">{{$product->description}}</h4>
        <a href=""><img src="../images/product-details/share.png" class="share img-responsive"  alt="" /></a>
    </div><!--/product-information-->
</div>
</div><!--/product-details-->

<div class="category-tab shop-details-tab"><!--category-tab-->
    <div class="col-sm-12">
        <ul class="nav nav-tabs">
            <li><a href="#details" data-toggle="tab">Thông số chi tiết</a></li>
            <li><a href="#companyprofile" data-toggle="tab">Bình luận</a></li>
            <li><a href="#tag" data-toggle="tab">Tag</a></li>
            <li class="active"><a href="#reviews" data-toggle="tab">Gởi bình luận</a></li>
        </ul>
    </div>
    <div class="tab-content">
        <div class="tab-pane fade" id="details" >
            
                <table class="table table-bordered table-hover">                    
                    <tbody>
                        <tr>
                            <th>Bộ vi xử lí:</th>
                            <td>{{$product_del->cpu}}</td>
                        </tr>
                        <tr>
                            <th>Màn hình:</th>
                            <td>{{$product_del->display}}</td>
                        </tr>
                         <tr>
                            <th>Bộ nhớ:</th>
                            <td>{{$product_del->memory}}</td>
                        </tr>
                        <tr>
                            <th>Sim:</th>
                            <td>{{$product_del->sim}}</td>
                        </tr>
                        <tr>
                            <th>Dung lượng pin:</th>
                            <td>{{$product_del->pin}}</td>
                        </tr>
                        <tr>
                            <th>Camera:</th>
                            <td>{{$product_del->camera}}</td>
                        </tr>
                    </tbody>
                </table>     
            
            
        </div>

        <div class="tab-pane fade" id="companyprofile" >
           <div class="">
               
           </div>
        </div>

        <div class="tab-pane fade" id="tag" >
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="images/home/gallery1.jpg" alt="" />
                            <h2>$56</h2>
                            <p>Easy Polo Black Edition</p>
                            <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="images/home/gallery2.jpg" alt="" />
                            <h2>$56</h2>
                            <p>Easy Polo Black Edition</p>
                            <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="images/home/gallery3.jpg" alt="" />
                            <h2>$56</h2>
                            <p>Easy Polo Black Edition</p>
                            <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="images/home/gallery4.jpg" alt="" />
                            <h2>$56</h2>
                            <p>Easy Polo Black Edition</p>
                            <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-pane fade active in" id="reviews" >
            <div class="col-sm-12">
                <ul>
                    <li><a href=""><i class="fa fa-user"></i>EUGEN</a></li>
                    <li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>
                    <li><a href=""><i class="fa fa-calendar-o"></i>31 DEC 2014</a></li>
                </ul>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                <p><b>Write Your Review</b></p>

                <form action="#">
                    <span>
                        <input type="text" placeholder="Your Name"/>
                        <input type="email" placeholder="Email Address"/>
                    </span>
                    <textarea name="" ></textarea>
                    <b>Rating: </b> <img src="images/product-details/rating.png" alt="" />
                    <button type="button" class="btn btn-default pull-right">
                        Submit
                    </button>
                </form>
            </div>
        </div>

    </div>
</div><!--/category-tab-->
@endsection