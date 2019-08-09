
<div class="slider">
    <div class="owl-carousel owl-one owl-theme">
        @foreach($slide as $item)
            <div class="item">
                <div class="slider-img">
                    <img src="images/slides/{{$item->image}}" alt="" style="width: 90%;height: 480px; margin: 0 auto"></div>
                    
                </div>
             @endforeach   
     </div>
</div>

