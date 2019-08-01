@extends('customer.layouts.master')
@section('content')
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="box">
                    <!-- product-description -->
                    <div class="box-body">
                        <div class="row">
                            <!-- <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                <ul id="demo1_thumbs" class="slideshow_thumbs">
                                        <li>
                                            <a href="./images/thumb_big_1.jpg">
                                                <div class=" thumb-img"><img src="../images/{{$product->image}}" alt=""></div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="./images/thumb_big_2.jpg">
                                                <div class=" thumb-img"><img src="../images/{{$product->image}}" alt=""></div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="./images/thumb_big_3.jpg" alt="">
                                                <div class=" thumb-img"><img src="../images/{{$product->image}}" alt=""></div>
                                            </a>
                                        </li>
                                    </ul>
                                </div> -->
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div id="slideshow">
                                        <div class="prodel"><img src="../images/{{$product->image}}" alt=""></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="product-single">
                                        <h2>{{$product->name}} </h2>                                    
                                        <p class="product-price" style="font-size: 38px;">{{number_format($product->productDetail['price'])}} VND </p>

                                        <form method="POST" action="{{route('addCart',$product->id)}}">
                                            <span>
                                                <label>Quantity:</label> <br>           

                                                <input type="number" value="1" name="quantity" /><br>
                                                <input type="hidden" name="product_id" value="{{$product->id}}">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <button type="submit" class="btn btn-primary add-to-cart" style="margin-top: 20px;">
                                                    <i class="fa fa-shopping-cart"></i>
                                                    Add to cart
                                                </button>

                                            </span> </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="box-head scroll-nav">
                            <div class="head-title"> <a class="page-scroll active" href="#product">Product Details</a>
                                <a class="page-scroll" href="#rating">Ratings &amp; Reviews</a>
                                <a class="page-scroll" href="#review">Add Your Reviews</a></div>
                            </div>
                        </div>
                    </div>
                    <!-- highlights -->
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="box" id="product">
                                <div class="box-body">
                                    
                                    <div class="highlights">
                                        <h4 class="product-small-title">Specification</h4>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <h4>General</h4>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 mb30">
                                                <ul>
                                                    <li>Cpu</li>
                                                    <li>Display </li>
                                                    <li>Pin</li>
                                                    <li>Sim</li>
                                                    <li>Memory</li>
                                                    <li>Camera</li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 mb30">
                                                <ul>
                                                    <li style="color: #1c1e1e;">{{$product->productDetail['cpu']}}</li>
                                                    <li style="color: #1c1e1e;">{{$product->productDetail['display']}}</li>
                                                    <li style="color: #1c1e1e;">{{$product->productDetail['pin']}}</li>
                                                    <li style="color: #1c1e1e;">{{$product->productDetail['sim']}}</li>
                                                    <li style="color: #1c1e1e;">{{$product->productDetail['memory']}}</li>
                                                    <li style="color: #1c1e1e;">{{$product->productDetail['camera']}}</li>
                                                </ul>
                                            </div>
                                        </div>
                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- rating reviews  -->
                    <div id="rating">                        
                        <!-- /.rating reviews  -->
                        <!-- customers review  -->
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="box">
                                    <div class="box-head">
                                        <h3 class="head-title">Customer Reviews</h3>
                                    </div>
                                    <div class="box-body">
                                        <div class="row">
                                            @if(count($comments))
                                            @foreach($comments as $cmt)
                                            <div class="customer-reviews">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="product-rating">
                                                        <span><i class="fa fa-star"></i></span>
                                                        <span><i class="fa fa-star"></i></span>
                                                        <span><i class="fa fa-star"></i></span>
                                                        <span><i class="fa fa-star"></i></span>
                                                        <span><i class="fa fa-star-o"></i></span>
                                                    </div>
                                                    <p class="reviews-text">By <span class="text-default">{{$cmt->name}}</span> {{$cmt->created_at}}</p>
                                                    <p>{{$cmt->content}}</p>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="divider-line"></div>
                                                </div>
                                            </div>
                                            @endforeach 
                                            @else
                                            <p class="alert alert-info">Chưa có bình luận nào cho sản phẩm này</p>
                                            @endif                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- customers review  -->
                        <!-- reviews-form -->
                         <div id="review">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="box">
                    <div class="box-head">
                        <h3 class="head-title">Add A Reviews</h3>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="review-form">
                              
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-rating">
                                         <h5>Your Rating : &nbsp;</h5>
                                            <div class="star-rate" id="rateYo"></div>
                                       
                                      
                                    </div>
                                </div>
                                <form action="{{route('createcmt')}}" method="POST">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{$product->id}}">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <label class="control-label sr-only " for="name"></label>
                                            <input id="name" type="text" class="form-control" placeholder="Name"  name="name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <label class="control-label sr-only " for="email"></label>
                                            <input id="email" type="text" class="form-control" placeholder="Email"  title="email" name="email">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label class="control-label sr-only " for="name"></label>
                                            <input id="name" type="text"  class="form-control" placeholder="Title"  name="title">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <label class="control-label sr-only " for="textarea"></label>
                                            <textarea class="form-control" id="textarea" name="content" rows="4" placeholder="Enter your Reviews"></textarea>
                                        </div>
                                        <button id="submit" name="singlebutton" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

                        


                      @endsection
