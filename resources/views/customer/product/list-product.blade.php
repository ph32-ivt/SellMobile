@extends('customer.layouts.master')
@section('content')
@include('customer.layouts.slide',['slide'=>$slides])
@include('customer.layouts.product_hot',['pro'=>$products_hot])
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="box">
                <div class="box-head">
                    <h3 class="head-title">Sản phẩm</h3>
                </div>
                <div class="box-body">
                    <div class="row">
                        <!-- product -->
                        @foreach($products as $product)                        
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="product-block">
                                <div class="product-img"> <a href="{{route('show-product',$product->id)}}"><img src="images/{{$product->image}}" alt="" /></a></div>
                                <div class="product-content">
                                    <h5><a href="#" class="product-title">{{$product->name}}</a></h5>
                                    <div class="product-meta"><a href="#" class="product-price">{{number_format($product->productDetail['price'],2,'.',',')." VNĐ"}}</a>

                                    </div>
                                    <div class="shopping-btn">
                                        <form method="POST" action="{{route('addCart',$product->id)}}">
                                            <input type="hidden" name="product_id" value="{{$product->id}}">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <button type="submit" class="product-btn btn-cart" id="themgiohang" title="Thêm vào giỏ hàng">
                                                <i class="fa fa-shopping-cart"></i>                                     
                                            </button>

                                        </form>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center">{{$products->links()}}</div>
</div>




@endsection
