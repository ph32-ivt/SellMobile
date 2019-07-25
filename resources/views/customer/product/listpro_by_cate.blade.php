@extends('customer.layouts.master')
@section('content')

<div class="features_items"><!--features_items-->
    <h2 class="title text-center">Danh mục sản phẩm</h2>
    @foreach($products as $product)
    <div class="col-sm-4">
        <div class="product-image-wrapper">
            <div class="single-products">
                <div class="productinfo text-center">
                    <a href="{{route('show-product',$product->id)}}"><img src="../images/{{$product->image}}" alt="" /></a>
                     <h2>{{number_format($product_del->price,2,'.',',')." VNĐ"}}</h2>
                    <p>{{$product->name}}</p>
                    <form method="POST" action="">
                        <input type="hidden" name="product_id" value="{{$product->id}}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit" class="btn btn-fefault add-to-cart">
                            <i class="fa fa-shopping-cart"></i>
                            Add to cart
                        </button>
                    </form>
                </div>
                
            </div>

        </div>
    </div>
    @endforeach

</div><!--features_items-->

@endsection
