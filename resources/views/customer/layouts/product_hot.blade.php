 <div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="box">
                <div class="box-head">
                    <h3 class="head-title">Sản phẩm nổi bật nhất </h3>
                </div>
            </div>
        </div>
    </div>
    <div class="product-carousel">
        <div class="box-body">
            <div class="row">
                <div class="owl-carousel owl-two owl-theme">
                    <!-- product -->
                    @foreach($pro as $prohot)                    
                    <div class="item">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="product-block">
                                <div class="product-img"><a href="{{route('show-product',$prohot->id)}}"><img src="images/{{$prohot->image}}" alt="" /></a></div>
                                <div class="product-content">
                                    <h5><a href="#" class="product-title">{{$prohot->name}} </a></h5>
                                    <div class="product-meta"><a href="#" class="product-price">{{number_format($prohot->productDetail['price'],2,'.',',')." VNĐ"}}</a>

                                    </div>
                                    <div class="shopping-btn">
                                       <form method="POST" action="{{route('addCart',$prohot->id)}}">
                                        <input type="hidden" name="product_id" value="{{$prohot->id}}">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="product-btn btn-cart" id="themgiohang" title="Thêm vào giỏ hàng">
                                            <i class="fa fa-shopping-cart"></i>                                     
                                        </button>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.product -->
                </div>                
                @endforeach
                <!-- product -->

            </div>
        </div>
    </div>
</div>
</div>