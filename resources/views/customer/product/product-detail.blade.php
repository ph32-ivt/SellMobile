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

                           <label>Số lượng:</label> <br>           

                           <input type="number" value="1" name="quantity" /><br>
                           <input type="hidden" name="product_id" value="{{$product->id}}">
                           <input type="hidden" name="_token" value="{{ csrf_token() }}">
                           <button type="submit" class="btn btn-primary add-to-cart" style="margin-top: 20px;">
                           <i class="fa fa-shopping-cart"></i>

                           Thêm vào giỏ hàng

                           </button>
                           </span> 
                        </form>
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

         <div class="head-title"> <a class="page-scroll active" href="#product">Cấu hình</a>
            <a class="page-scroll" href="#rating">Đánh giá</a>
            <a class="page-scroll" href="#review">Thêm đánh giá của bạn</a>

         </div>
      </div>
   </div>
</div>
<!-- highlights -->
<div class="row">
   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="box" id="product">
         <div class="box-body">

            <div class="highlights">               
               <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                     <h4>Cấu hình chi tiết</h4>

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

            <h3 class="head-title">Đánh giá của khách hàng</h3>

         </div>
         <div class="box-body">
            <div class="row">
               @if(count($comments))
               @foreach($comments as $cmt)
               <ul class="customer-reviews">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                     <li class="product-rating">
                        <span><i class="fa fa-star"></i></span>
                        <span><i class="fa fa-star"></i></span>
                        <span><i class="fa fa-star"></i></span>
                        <span><i class="fa fa-star"></i></span>
                        <span><i class="fa fa-star-o"></i></span>
                        By <span class="text-default">{{$cmt->name}}</span>
                        <a style="color:blue;cursor: pointer;" href="javascript:void(0) " class="show-reply" data-a="{{$cmt->id}}">Reply</a>
                     </li>
                     <li><i>{{$cmt->created_at}}</i></li>
                     <li>
                        <h5>{{$cmt->title}}</h5>
                     </li>
                     <li>
                        {{$cmt->content}}
                        @php
                        $parentComment = \DB::table('comments')->where('parent_id',$cmt->id)->get();
                        @endphp
                        @foreach($parentComment as $prComment)
                        <ul style="margin-left: 30px" >
                           <li><b>{{$prComment->name}}&nbsp;</b><i>{{$prComment->created_at}}</i></li>
                           <li>
                              <h5>{{$prComment->title}}</h5>
                           </li>
                           <li>{{$prComment->content}}</li>
                        </ul>
                        @endforeach
                        <div class="form-reply{{$cmt->id}}" style="display: none;line-height: 0px;">
                           <div class="row form-comment">
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <div class="box">
                                    <div class="box-body">
                                       <div class="row">
                                          <div class="review-form">
                                             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="review-rating">
                                                   <h1>Your Reply  &nbsp;</h1>
                                                   <div class="star-rate" id="rateYo"></div>
                                                </div>
                                             </div>
                                             <form action="{{route('reply-comment')}}" method="POST">
                                                @csrf
                                                <input type="hidden" name="comment_id" value="{{$cmt->id}}">
                                                <input type="hidden" name="product_id" value="{{$product->id}}">
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                   <div class="form-group">
                                                      <label class="control-label sr-only " for="name"></label>

                                                      <input id="name" type="text" class="form-control" placeholder="Nhập tên"  name="name">

                                                      <span style="color: red">{{$errors->first('name')}}</span>
                                                   </div>
                                                </div>
                                                <div class="row ">
                                                   <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                      <div class="form-group">
                                                         <label class="control-label sr-only " for="email"></label>

                                                         <input id="email" type="text" class="form-control" placeholder="Nhập email"  title="email" name="email">

                                                         <span style="color: red">{{$errors->first('email')}}</span>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="row" style="margin-left: 0px">
                                                   <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                      <div class="form-group">
                                                         <label class="control-label sr-only " for="name"></label>

                                                         <input id="title" type="text"  class="form-control" placeholder="Tiêu đề"  name="title">

                                                         <span style="color: red">{{$errors->first('title')}}</span>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                   <div class="form-group">
                                                      <label class="control-label sr-only " for="textarea"></label>

                                                      <textarea class="form-control" id="textarea" name="content" rows="4" placeholder="Nội dung nhận xét"></textarea>
                                                      <span style="color: red">{{$errors->first('content')}}</span>
                                                   </div>
                                                   <button id="submit" name="singlebutton" class="btn btn-primary">Hoàn thành</button>

                                                </div>
                                             </form>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </li>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                     <div class="divider-line"></div>
                  </div>
               </ul>
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
@include('customer.product.form-comment')
@endsection