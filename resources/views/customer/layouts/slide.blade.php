
<div class="slider">
    <div class="owl-carousel owl-one owl-theme">
        @foreach($slide as $item)
            <div class="item">
                <div class="slider-img">
                    <img src="images/slides/{{$item->image}}" alt="" style="width: 90%;height: 480px; margin: 0 auto"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-md-8 col-sm-6 col-xs-12">
                                <div class="slider-captions">
                                    <div class="brand-img">
                                        <img src="./images/mi_logo.png" alt="">
                                    </div>
                                    <h1 class="slider-title">Red Mi <span>Y1</span></h1>
                                    <p class="hidden-xs">LED Selfie-light | Fingerprint sensor | Dedicated microSD card slot Snapdragon 435 octa-core processor </p>
                                    <p class="slider-price">$138.99 </p>
                                    <a href="#" class="btn btn-primary btn-lg hidden-xs">Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             @endforeach   
     </div>
</div>

